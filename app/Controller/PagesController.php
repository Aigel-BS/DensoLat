<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link https://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow(array('home','imagen_tv','catalogos','denso','privacidad','terminos', 'landing','sensores_oxigeno','bujias','filtros','compresores','videos','tyc_sultanes','contacto'));
	}

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @return CakeResponse|null
 * @throws ForbiddenException When a directory traversal attempt.
 * @throws NotFoundException When the view file could not be found
 *   or MissingViewException in debug mode.
 */
	public function display($region=null) {

		$this->loadModel('Distribuidor');
		$distribuidores = $this->Distribuidor->find('all',array('order'=>'estado ASC','fields'=>array('DISTINCT(estado)'),'conditions'=>array('Distribuidor.pais'=>$region)));
		$this->set('distribuidores',$distribuidores);

		$this->loadModel('Banner');
		$this->set('banners',$this->Banner->findAllByPais($region));

		$this->loadModel('Producto');
		$anios = $this->Producto->find(
			'list',
			array(
				'fields'=>array(
					'Producto.anio_inicio','Producto.anio_inicio'
				),
				'order'=>'Producto.anio_inicio DESC',
				'conditions'=>array(
					'Producto.pais'=>$region
				)
			)
		);
		//$anio_min = 0;
		switch($region):
			case('mx'):
				$anio_min=1960;
				break;
			case('co'):
				$anio_min=1945;
				break;
			case('cl'):
				$anio_min=1945;
				break;
		endswitch;
		$this->set('anios',$anios);

		$this->loadModel('Seccion');
		$secciones_arreglo = $this->Seccion->findAllBySeccionAndPais('home',$region);
		$secciones = array();
		foreach($secciones_arreglo as $seccion):
			$secciones[$seccion['Seccion']['elemento']] = $seccion['Seccion']['contenido'];
		endforeach;
		$this->set('secciones',$secciones);

		$this->set('region',$region);

	    $path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		if (in_array('..', $path, true) || in_array('.', $path, true)) {
			throw new ForbiddenException();
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}

	}
		public function imagen_tv($region = null) {
			$this->set('region',$region);
		}
		public function privacidad($region = null) {
			$this->set('region',$region);
		}


		public function landing() {
			$this->loadModel('Prospecto');

			$this->layout = 'landing';

			$this->set('estados', array(
				"Aguascalientes" => "Aguascalientes", "Baja California" => "Baja California", "Baja California Sur" => "Baja California Sur", "Campeche" => "Campeche", "Chiapas" => "Chiapas", "Chihuahua" => "Chihuahua", "Ciudad de México" => "Ciudad de México", "Coahuila " => "Coahuila ", "Colima" => "Colima", "Durango" => "Durango", "Estado de México" => "Estado de México", "Guanajuato" => "Guanajuato", "Guerrero" => "Guerrero", "Hidalgo" => "Hidalgo", "Jalisco" => "Jalisco", "Michoacán" => "Michoacán", "Morelos" => "Morelos", "Nayarit" => "Nayarit", "Nuevo León" => "Nuevo León", "Oaxaca" => "Oaxaca", "Puebla" => "Puebla", "Querétaro" => "Querétaro", "Quintana Roo" => "Quintana Roo", "San Luis Potosí" => "San Luis Potosí", "Sinaloa" => "Sinaloa", "Sonora" => "Sonora", "Tabasco" => "Tabasco", "Tamaulipas" => "Tamaulipas", "Tlaxcala" => "Tlaxcala", "Veracruz" => "Veracruz", "Yucatán" => "Yucatán", "Zacatecas" => "Zacatecas"
			));

			if ($this->request->is('post')) {
				$this->request->data['Prospecto']['fecha_alta'] = date('Y-m-d H:i:s');
				if ($this->Prospecto->save($this->request->data)){
					$nombre = $this->request->data['Prospecto']['nombre'];
					$email = $this->request->data['Prospecto']['email'];
					$telefono = $this->request->data['Prospecto']['telefono'];
					$estado = $this->request->data['Prospecto']['estado'];
					$giro = $this->request->data['Prospecto']['giro'];
					$medio = $this->request->data['Prospecto']['medio_promocion'];

					$html =
						"<p>Nombre: ".$nombre."</p>".
						"<p>Email: ".$email."</p>".
						"<p>Teléfono: ".$telefono."</p>".
						"<p>Estado: ".$estado."</p>".
						"<p>Giro: ".$giro."</p>".
						"<p>Medio Promoción: ".$medio."</p>";

						$this->Email = new CakeEmail();
						$this->Email->config(array(
							'host' => 'mail.aigelbs.com',
							'port' => 587,
							'username' => 'formulario@densoautopartes.com.mx',
							'password' => 'Formulario.2019',
							'transport' => 'Smtp'
						)
							);
						$this->Email->emailFormat('html');
						$this->Email->from(array('contacto@densoautopartes.com.mx'=>'Landing Page Distribuidores'));
						$this->Email->to('monica.guerrero@na.denso.com');
						$this->Email->bcc('cesar@aigel.com.mx');
						$this->Email->subject('Solicitud de información para Distribución - Landing Page');
						$this->Email->send($html);

						$this->Session->setFlash("Muchas gracias por tu interés en pertenecer a la red DENSO. Uno de nuestros ejecutivos se comunicará contigo pronto.");
				}


			}
		}

		//Comienzan páginas regionales
		public function home($region = null){

			if(!isset($region)){
				$region = 'latam';
			}

			$this->loadModel('Distribuidor');
			$distribuidores = $this->Distribuidor->find('all',array('order'=>'estado ASC','fields'=>array('DISTINCT(estado)'),'conditions'=>array('Distribuidor.pais'=>$region)));
			$this->set('distribuidores',$distribuidores);

			switch ($region){
				case "car":
					$condiciones = array('Distribuidor.pais IN ("bb","do","pr","tt")');
					$order=array('Distribuidor.pais ASC');
					break;
				case "cam":
					$condiciones = array('Distribuidor.pais IN ("sv","bz","cr","gt","hn","ni","pa")');
					$order=array('Distribuidor.pais ASC');
					break;
				default:
					$condiciones = array('Distribuidor.pais'=>$region,'Distribuidor.coordenadas IS NOT NULL');
					$order=array('Distribuidor.nombre ASC');
					break;
			}
            $distribuidores_marca = $this->Distribuidor->find('all',array('order'=>$order,'fields'=>array('DISTINCT(nombre)','pais','coordenadas','direccion','ciudad','telefono'),'conditions'=>$condiciones));
			$this->set('distribuidores_marca',$distribuidores_marca);

			$this->loadModel('DistribuidoresCertificado');
			$this->set('tiendas_certificadas',$this->DistribuidoresCertificado->find('all',array('order'=>array('ciudad ASC','nombre ASC'),'conditions'=>array('region'=>$region))));

			$this->loadModel('Banner');
			$this->set('banners',$this->Banner->findAllByPais($region));

			$this->loadModel('Seccion');
			$secciones_arreglo = $this->Seccion->findAllBySeccionAndPais('home',$region);
			$secciones = array();
			foreach($secciones_arreglo as $seccion):
				$secciones[$seccion['Seccion']['elemento']] = $seccion['Seccion']['contenido'];
			endforeach;
			$this->set('secciones',$secciones);

			$this->loadModel('Producto');
			$anios = $this->Producto->find(
				'list',
				array(
					'fields'=>array(
						'Producto.anio_inicio','Producto.anio_inicio'
					),
					'order'=>'Producto.anio_inicio DESC',
					'conditions'=>array(
						'Producto.pais'=>$region
					)
				)
			);
			//$anio_min = 0;
			switch($region):
				case('mx'):
					$anio_min=1960;
					break;
				case('co'):
					$anio_min=1945;
					break;
				case('cl'):
					$anio_min=1945;
					break;
			endswitch;
			$this->set('anios',$anios);

			$this->set('region',$region);
		}

		public function bujias($region = null) {

			if(!isset($region)){
				$region = 'latam';
			}

			$this->loadModel('Seccion');
			$secciones_arreglo = $this->Seccion->findAllBySeccionAndPais('bujias',$region);
			$secciones = array();
			foreach($secciones_arreglo as $seccion):
				$secciones[$seccion['Seccion']['elemento']] = $seccion['Seccion']['contenido'];
			endforeach;
			$this->set('secciones',$secciones);
			$this->loadModel('Producto');
			$anios = $this->Producto->find(
				'list',
				array(
					'fields'=>array(
						'Producto.anio_inicio','Producto.anio_inicio'
					),
					'order'=>'Producto.anio_inicio DESC',
					'conditions'=>array(
						'Producto.pais'=>$region
					)
				)
			);
			//$anio_min = 0;
			switch($region):
				case('mx'):
					$anio_min=1960;
					break;
				case('co'):
					$anio_min=1945;
					break;
				case('cl'):
					$anio_min=1945;
					break;
			endswitch;
			$this->set('anios',$anios);


			$this->set('region',$region);

			$this->loadModel('Producto');
			$anios = $this->Producto->find(
				'list',
				array(
					'fields'=>array(
						'Producto.anio_inicio','Producto.anio_inicio'
					),
					'order'=>'Producto.anio_inicio DESC',
					'conditions'=>array(
						'Producto.pais'=>$region
					)
				)
			);
			//$anio_min = 0;
			switch($region):
				case('mx'):
					$anio_min=1960;
					break;
				case('co'):
					$anio_min=1945;
					break;
				case('cl'):
					$anio_min=1945;
					break;
			endswitch;
			$this->set('anios',$anios);
		}

		public function compresores($region = null) {
			if(!isset($region)){
				$region = 'latam';
			}

			$this->loadModel('Seccion');
			$secciones_arreglo = $this->Seccion->findAllBySeccionAndPais('compresor',$region);
			$secciones = array();
			foreach($secciones_arreglo as $seccion):
				$secciones[$seccion['Seccion']['elemento']] = $seccion['Seccion']['contenido'];
			endforeach;
			$this->set('secciones',$secciones);
			$this->loadModel('Producto');
			$anios = $this->Producto->find(
				'list',
				array(
					'fields'=>array(
						'Producto.anio_inicio','Producto.anio_inicio'
					),
					'order'=>'Producto.anio_inicio DESC',
					'conditions'=>array(
						'Producto.pais'=>$region
					)
				)
			);
			//$anio_min = 0;
			switch($region):
				case('mx'):
					$anio_min=1960;
					break;
				case('co'):
					$anio_min=1945;
					break;
				case('cl'):
					$anio_min=1945;
					break;
			endswitch;
			$this->set('anios',$anios);
			$this->set('region',$region);
		}

		public function filtros($region = null) {
			if(!isset($region)){
				$region = 'latam';
			}

			$this->loadModel('Seccion');
			$secciones_arreglo = $this->Seccion->findAllBySeccionAndPais('filtros',$region);
			$secciones = array();
			foreach($secciones_arreglo as $seccion):
				$secciones[$seccion['Seccion']['elemento']] = $seccion['Seccion']['contenido'];
			endforeach;
			$this->set('secciones',$secciones);
			$this->loadModel('Producto');
			$anios = $this->Producto->find(
				'list',
				array(
					'fields'=>array(
						'Producto.anio_inicio','Producto.anio_inicio'
					),
					'order'=>'Producto.anio_inicio DESC',
					'conditions'=>array(
						'Producto.pais'=>$region
					)
				)
			);
			//$anio_min = 0;
			switch($region):
				case('mx'):
					$anio_min=1960;
					break;
				case('co'):
					$anio_min=1945;
					break;
				case('cl'):
					$anio_min=1945;
					break;
			endswitch;
			$this->set('anios',$anios);
			$this->set('region',$region);
		}

		public function sensores_oxigeno($region = null) {
			if(!isset($region)){
				$region = 'latam';
			}

			$this->loadModel('Seccion');
			$secciones_arreglo = $this->Seccion->findAllBySeccionAndPais('sensores',$region);
			$secciones = array();
			foreach($secciones_arreglo as $seccion):
				$secciones[$seccion['Seccion']['elemento']] = $seccion['Seccion']['contenido'];
			endforeach;
			$this->set('secciones',$secciones);
			$this->loadModel('Producto');
			$anios = $this->Producto->find(
				'list',
				array(
					'fields'=>array(
						'Producto.anio_inicio','Producto.anio_inicio'
					),
					'order'=>'Producto.anio_inicio DESC',
					'conditions'=>array(
						'Producto.pais'=>$region
					)
				)
			);
			//$anio_min = 0;
			switch($region):
				case('mx'):
					$anio_min=1960;
					break;
				case('co'):
					$anio_min=1945;
					break;
				case('cl'):
					$anio_min=1945;
					break;
			endswitch;
			$this->set('anios',$anios);
			$this->set('region',$region);
		}

		public function denso($region=null) {
			if(!isset($region)){
				$region = 'latam';
			}
			$this->set('region',$region);
		}

		public function catalogos($region=null) {
			if(!isset($region)){
				$region = 'latam';
			}

			$this->loadModel('Seccion');
			$secciones_arreglo = $this->Seccion->findAllBySeccionAndPais('catalogos',$region);
			$secciones = array();
			foreach($secciones_arreglo as $seccion):
				$secciones[$seccion['Seccion']['elemento']] = $seccion['Seccion']['contenido'];
			endforeach;
			$this->set('secciones',$secciones);
			$this->set('region',$region);
		}

		public function terminos($region=null) {
			if(!isset($region)){
				$region = 'latam';
			}
			$this->set('region',$region);
		}

		public function videos($region=null) {
			if(!isset($region)){
				$region = 'latam';
			}
			$this->set('region',$region);
		}

		public function contacto($region=null) {
			if(!isset($region)){
				$region = 'latam';
			}
			$this->set('region',$region);
		}

		public function tyc_sultanes($region=null) {
			if(!isset($region)){
				$region = 'latam';
			}
			$this->set('region',$region);
		}

}
