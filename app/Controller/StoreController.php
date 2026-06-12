<?php
class StoreController extends AppController {
	public $uses = array('ProductsSale', 'Cart', 'Order', 'OrdersProduct', 'User', 'PointLog');

	public function index($region = 'latam') {
		$products = $this->ProductsSale->find('all', array('conditions' => array('active' => 1)));
		$this->set('products', $products);
		$this->set('region', $region);
	}

	public function add_to_cart($region = 'latam') {
		if ($this->request->is('post')) {
			$product_id = $this->request->data['Cart']['product_id'];
			$quantity = $this->request->data['Cart']['quantity'];
			$user_id = $this->Auth->user('id');

			// Revisa si ya está en carrito
			$existing = $this->Cart->find('first', array(
				'conditions' => array('user_id' => $user_id, 'product_id' => $product_id)
			));

			if ($existing) {
				$existing['Cart']['quantity'] += $quantity;
				$this->Cart->save($existing);
			} else {
				$this->Cart->create();
				$this->Cart->save(array(
					'user_id' => $user_id,
					'product_id' => $product_id,
					'quantity' => $quantity
				));
			}
			$this->Session->setFlash('Producto agregado al carrito.', 'default', array('class' => 'alert alert-success'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->set('region', $region);
	}

	public function cart($region = 'latam') {
		$user_id = $this->Auth->user('id');
		$cartItems = $this->Cart->find('all', array('conditions' => array('user_id' => $user_id)));
		$this->set('cartItems', $cartItems);
		$this->set('region', $region);
	}

	public function checkout($region = 'latam') {
		$user_id = $this->Auth->user('id');
		$cartItems = $this->Cart->find('all', array('conditions' => array('user_id' => $user_id)));
		
		if (empty($cartItems)) {
			$this->Session->setFlash('Tu carrito está vacío.');
			return $this->redirect(array('action' => 'index'));
		}
		
		$this->set('region', $region);

		$total_points = 0;
		foreach ($cartItems as $item) {
			$total_points += ($item['ProductsSale']['points_cost'] * $item['Cart']['quantity']);
		}

		$user = $this->User->findById($user_id);
		
		if ($user['User']['point_balance'] < $total_points) {
			$this->Session->setFlash('Puntos insuficientes para realizar esta compra.', 'default', array('class' => 'alert alert-danger'));
			return $this->redirect(array('action' => 'cart'));
		}

		if ($this->request->is('post')) {
			// Create Order
			$this->Order->create();
			$order = array(
				'user_id' => $user_id,
				'total_points' => $total_points,
				'status' => 'pending'
			);
			
			if ($this->Order->save($order)) {
				$order_id = $this->Order->id;

				foreach ($cartItems as $item) {
					$this->OrdersProduct->create();
					$this->OrdersProduct->save(array(
						'order_id' => $order_id,
						'product_id' => $item['Cart']['product_id'],
						'quantity' => $item['Cart']['quantity'],
						'points_at_purchase' => $item['ProductsSale']['points_cost']
					));
				}

				// Deduct points
				$this->User->id = $user_id;
				$this->User->saveField('point_balance', $user['User']['point_balance'] - $total_points);

				// Log movement
				$this->PointLog->create();
				$this->PointLog->save(array(
					'user_id' => $user_id,
					'amount' => -$total_points,
					'description' => "Compra de pedido #" . $order_id,
					'type' => 'purchase'
				));

				// Clear cart
				$this->Cart->deleteAll(array('user_id' => $user_id));

				$this->Session->setFlash('Compra realizada con éxito. Tu pedido está en proceso.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
			}
		}
	}
}
?>
