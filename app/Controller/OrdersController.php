<?php
class OrdersController extends AppController {
	public $uses = array('Order');

	public function admin_index($region = 'latam') {
		$this->set('region', $region);
		if ($this->Auth->user('role') !== 'admin') {
			$this->Session->setFlash('Acceso denegado.');
			return $this->redirect('/');
		}
		
		$this->Order->recursive = 2; // to get products and user
		$this->set('orders', $this->Order->find('all'));
	}
}
?>
