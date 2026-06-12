<?php
class VouchersController extends AppController {
	public $uses = array('Voucher', 'User', 'PointLog');

	public function redeem_code($region = 'latam') {
		$this->set('region', $region);
		if ($this->request->is('post')) {
			$code = $this->request->data['Voucher']['code'];
			$voucher = $this->Voucher->findByCode($code);

			if (!$voucher) {
				$this->Session->setFlash('Código inválido.', 'default', array('class' => 'alert alert-danger'));
			} elseif ($voucher['Voucher']['is_used']) {
				$this->Session->setFlash('Este código ya fue utilizado.', 'default', array('class' => 'alert alert-warning'));
			} else {
				$user_id = $this->Auth->user('id');
				
				// Update Voucher
				$voucher['Voucher']['is_used'] = 1;
				$voucher['Voucher']['used_by_user_id'] = $user_id;
				
				$this->Voucher->save($voucher);

				// Add points to User
				$user = $this->User->findById($user_id);
				$points = $voucher['Voucher']['points_value'];
				$new_balance = $user['User']['point_balance'] + $points;
				$this->User->id = $user_id;
				$this->User->saveField('point_balance', $new_balance);

				// Log generic movement
				$this->PointLog->create();
				$this->PointLog->save(array(
					'user_id' => $user_id,
					'amount' => $points,
					'description' => "Redención de código: " . $code,
					'type' => 'redemption'
				));

				$this->Session->setFlash("Has redimido $points puntos exitosamente.", 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
			}
		}
	}

	public function admin_index($region = 'latam') {
		$this->set('region', $region);
		if ($this->Auth->user('role') !== 'admin') {
			$this->Session->setFlash('Acceso denegado.');
			return $this->redirect('/');
		}
		$this->set('vouchers', $this->Voucher->find('all'));
	}

	public function admin_generate($region = 'latam') {
		$this->set('region', $region);
		if ($this->Auth->user('role') !== 'admin') {
			return $this->redirect('/');
		}
		if ($this->request->is('post')) {
			$this->Voucher->create();
			$this->request->data['Voucher']['code'] = strtoupper(substr(md5(uniqid(rand(), true)), 0, 10)); // random code
			if ($this->Voucher->save($this->request->data)) {
				$this->Session->setFlash('Código generado.');
				return $this->redirect(array('action' => 'index', 'admin' => true));
			}
		}
	}
}
?>
