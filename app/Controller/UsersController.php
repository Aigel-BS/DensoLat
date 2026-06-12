<?php
class UsersController extends AppController {

	var $name = 'Users';

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow(array('registro','inscribir_curso','activate','recover_password','recuperar_password','existe'));
	}

	public function index(){
		if ($this->Session->read('Auth.User.rol')==2){
			return $this->redirect(array('controller'=>'cursos','action'=>'mis_cursos'));
		}
		$this->layout = 'capacitacion';
		$conditions = array();
		$cuentas = array();
		if ($this->Session->read('Auth.User.cuenta_id')!=1){
			switch ($this->Session->read('Auth.User.rol')){
				case 1: //Puede ver a todos los usuarios
					$conditions['User.cuenta_id']=$this->Session->read('Auth.User.cuenta_id');
			}
		}else{
			$this->loadModel('Cuenta');
			$this->set('cuentas', $this->Cuenta->find('list'));
		}
		$this->set('users',$this->User->find('all',array('conditions'=>$conditions)));
	}

	public function add(){
		if ($this->request->is('post')){
			$this->request->data['User']['cuenta_id']=$this->Session->read('Auth.User.cuenta_id');
			$this->request->data['User']['password']=$this->Auth->password($this->request->data['User']['password']);
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('Usuario registrado exitosamente', 'default', array(), 'mensaje_exito'); // Mensaje
				return $this->redirect(array('controller'=>'users','action'=>'index'));
			}
		}
	}

	public function recover_password(){
		$this->layout = 'registro';
		if($this->request->is('post')){
			$user = $this->User->find(
				'first',
				array(
					'conditions'=>array(
						'User.username'=>$this->request->data['User']['username']
					)
				)
			);
			if ($user['User']['id']!=""){
				$token = uniqid();
				$user['User']['token_lp'] = $token;
				if($this->User->save($user['User'])){
					$this->Flash->success('Te hemos enviado las instrucciones para recuperar tu contraseña al correo que nos has proporcionado. Revisa tu bandeja de SPAM', array(
						'key' => 'positive',
					));

					$this->Email = new CakeEmail();
					$this->Email->config(
						array(
							'host' => 'mail.aigelbs.com',
							'port' => 587,
							'username' => 'formulario@densoautopartes.com.mx',
							'password' => 'Formulario.2019',
							'transport' => 'Smtp'
						)
					);
					$this->Email->emailFormat('html');
					$this->Email->to($this->request->data['User']['username']);
					$this->Email->template('recuperar_contrasena','notificacion');
					$this->Email->from(array('notificaciones@densoautopartes.com'=>'Notificación Capacitación DENSOAUTOPARTES.COM'));
					$this->Email->subject("Recuperar cuenta de usuario DENSOAUTOPARTES.COM");
					$this->Email->viewVars(array('token' => $token,'titulo_mail'=>'Recuperar contraseña de Cuenta'));
					$this->Email->send();

					return $this->redirect(array('controller'=>'users','action'=>'login'));
				}
			}

		}
	}

	public function activate($id = null){
		$user = array(
			'id'=>$id,
			'activo'=>1,
		);
		if($this->User->save($user)){
			$this->Flash->success('Tu cuenta ha sido activada exitosamente. Ya puedes comenzar tu capacitación', array(
				'key' => 'positive',
			));
			return $this->redirect(array('controller'=>'users','action'=>'login'));
		}


	}

	public function recuperar_password($token = null) {
		$this->layout = 'registro';
		$usuario = $this->User->findFirstByTokenLp($token);
		if(empty($usuario)){
			$this->Flash->error('No es posible resetear un password. Intenta de nuevo', array(
				'key' => 'positive',
			));
			return $this->redirect(array('controller'=>'users','action'=>'login'));
		}
		$this->set('token',$token);
		if ($this->request->is('post')){
			$usuario = $this->User->findFirstByTokenLp($this->request->data['User']['token']);
			$usuario['User']['password']=$this->Auth->password($this->request->data['User']['password']);
			$usuario['User']['token_lp'] = null;
			if($this->User->save($usuario['User'])){
				$this->Flash->success('Tu contraseña ha sido actualizada exitosamente.', array(
					'key' => 'positive',
				));
				return $this->redirect(array('controller'=>'users','action'=>'login'));
			}
		}
	}

	public function registro(){
		$this->layout = 'registro';
		if ($this->request->is('post')){
			$this->request->data['User']['password']=$this->Auth->password($this->request->data['User']['password']);
			$this->request->data['User']['rol']=2;
			$this->request->data['User']['activo']=1;
			if($this->User->save($this->request->data)){
				$id = $this->User->getInsertId();
				$this->inscribir_curso($id,$this->request->data['User']['region']);
				$this->Flash->success('Usuario Registrado Exitosamente', array(
					'key' => 'positive',
				));

				/*$this->Email = new CakeEmail();
				$this->Email->config(
					array(
						'host' => 'mail.aigelbs.com',
						'port' => 587,
						'username' => 'formulario@densoautopartes.com.mx',
						'password' => 'Formulario.2019',
						'transport' => 'Smtp'
					)
				);
				$this->Email->emailFormat('html');
				$this->Email->to($this->request->data['User']['username']);
				$this->Email->template('registro_exitoso','notificacion');
				$this->Email->from(array('notificaciones@densoautopartes.com'=>'Notificación Capacitación DENSOAUTOPARTES.COM'));
				$this->Email->subject("Confirmar Cuenta de Correo");
				$this->Email->viewVars(array('user' => $id,'titulo_mail'=>'Confirmar Cuenta de Correo'));
				$this->Email->send();*/

				return $this->redirect(array('controller'=>'users','action'=>'login'));
			}
		}
		$this->loadModel('Cuenta');
		$this->set('cuentas',$this->Cuenta->find('list',array('order'=>'Cuenta.nombre')));
	}

	function inscribir_curso($user = null,$region = null){
		$this->loadModel('Curso');
		$cursos = $this->Curso->find(
			'list',
			array(
				'conditions'=>array(
					'Curso.region'=>array('LATAM',$region),
				)
			)
		);
		foreach ($cursos as $key=>$item){
			$this->Curso->query("INSERT INTO users_cursos VALUES(0,$key,$user);");
		}
		return true;
	}


	public function edit(){
		if ($this->request->is('post')){
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('Usuario actualizado exitosamente.', 'default', array(), 'mensaje_exito'); // Mensaje
				return $this->redirect(array('controller'=>'users','action'=>'index'));
			}
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Usuario invalido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('El usuario ha sido eliminado exitosamente', true), 'default' ,array('class'=>'mensaje_exito'));
			$this->redirect(array('action'=>'index','controller'=>'users'));
		}
	}

	public function activar(){
		$user = array(
			'id'=>$this->request->data['id'],
			'activo'=>$this->request->data['activo'],
		);
		$this->User->save($user);
		header('Content-Type: application/json');
		echo json_encode($this->request->data['activo']);
		exit();

	}

	public function existe(){
		$this->User->Behaviors->load('Containable');
		$user = $this->User->find(
			'count',
			array(
				'conditions'=>array(
					'User.username'=>$this->request->data['username']
				),
				'contain'=>false
			)
		);

		header('Content-Type: application/json');
		echo json_encode($user);
		exit();
	}

	public function getUser(){
		$this->User->Behaviors->load('Containable');
		$user = $this->User->find(
			'first',
			array(
				'conditions'=>array(
					'User.id'=>$this->request->data['id']
				),
				'contain'=>false
			)
		);
		header('Content-Type: application/json');
		echo json_encode($user);
		exit();

	}




	public function login() {
        $this->layout = 'login';
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirectUrl());
			}else{
				$this->Flash->error('Cuenta inactiva o usuario o contraseña incorrecta', array(
					'key' => 'positive',
				));
			}
		}
	}

	public function logout(){
		$this->Auth->logout();
		return $this->redirect(array('controller'=>'users','action'=>'login'));
	}

	public function mis_diplomas(){
		$this->layout = 'capacitacion';
		$this->loadModel('Respuesta');
		$this->Respuesta->Behaviors->load('Containable');
		$calificaciones_raw = $this->Respuesta->find(
			'all',
			array(
				'conditions'=>array(
					'Respuesta.user_id'=>$this->Session->read('Auth.User.id')
				),
				'fields'=>array(
					'Respuesta.curso_id','Respuesta.intento',"SUM(`Respuesta`.`puntos`) as calificacion",'Respuesta.examen_id'
				),
				'group'=>array(
					'Respuesta.intento'
				),
				'contain'=>array(
					'Curso'=>array(
						'fields'=>array(
							'id','total_puntos'
						)
					)
				)
			)
		);

		$calificaciones = array();
		foreach ($calificaciones_raw as $intento){
			if (!isset($calificaciones[$intento['Respuesta']['curso_id']]['examenes'][$intento['Respuesta']['examen_id']])){
				$calificaciones[$intento['Respuesta']['curso_id']]['examenes'][$intento['Respuesta']['examen_id']] = array(
					'calificacion'=>0
				);
			}

			if ($calificaciones[$intento['Respuesta']['curso_id']]['examenes'][$intento['Respuesta']['examen_id']]['calificacion'] < $intento[0]['calificacion']){
				$calificaciones[$intento['Respuesta']['curso_id']]['examenes'][$intento['Respuesta']['examen_id']]['calificacion'] = $intento[0]['calificacion'];
			}

		}

		$calificaciones_finales = array();
		foreach ($calificaciones as $key => $calificacion){
			$total = 0;
			foreach ($calificacion['examenes'] as $calificacion_unitaria){
				$total += $calificacion_unitaria['calificacion'];
			}
			$calificaciones_finales[$key]=$total;
		}

		$this->set('calificaciones_raw',$calificaciones_raw);
		$this->set('calificaciones',$calificaciones_finales);

		$this->loadModel('Curso');
		$this->Curso->Behaviors->load('Containable');
		$this->set('cursos',$this->Curso->find(
			'all',
			array(
//				'conditions'=>array(
//					'Curso.id IN (SELECT curso_id FROM users_cursos WHERE user_id = '.$this->Session->read('Auth.User.id').')'
//				),
				'contain'=>false
			)
		));

	}

	public function diploma ($intento = null){
		$this->layout = 'diploma_layout';
		$this->loadModel('Respuesta');
		$this->Respuesta->Behaviors->load('Containable');
		$calificacion = $this->Respuesta->find(
			'first',
			array(
				'conditions'=>array(
					'Respuesta.intento'=>$intento
				),
				'fields'=>array(
					'*',"SUM(`Respuesta`.`puntos`) as calificacion"
				),
				'group'=>array(
					'Respuesta.intento'
				),
			)
		);
		$this->set('calificacion',$calificacion);
	}

	public function register($region = 'latam') {
		$this->set('region', $region);
		if ($this->Auth->user('id')) {
			return $this->redirect(array('action' => 'dashboard'));
		}
		if ($this->request->is('post')) {
			$this->User->create();
			$this->request->data['User']['role'] = 'customer';
			$this->request->data['User']['point_balance'] = 0;
			
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Registro exitoso. Ahora puedes iniciar sesión.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'login'));
			} else {
				$this->Session->setFlash('Error en el registro. Por favor verifica tus datos.', 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function dashboard($region = 'latam') {
		$this->set('region', $region);
		$user_id = $this->Auth->user('id');
		if (!$user_id) {
			$this->Session->setFlash('Por favor inicia sesión.');
			return $this->redirect(array('action' => 'login'));
		}
		$this->loadModel('PointLog');
		$user = $this->User->findById($user_id);
		$logs = $this->PointLog->find('all', array(
			'conditions' => array('user_id' => $user_id),
			'order' => array('PointLog.created' => 'DESC')
		));
		
		$this->set('user', $user);
		$this->set('logs', $logs);
	}

}
?>
