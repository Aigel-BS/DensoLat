<?php
class DistribuidorsController extends AppController {

	var $name = 'Distribuidors';

	public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow(array('por_estado','contacto','registrar_stat','por_marca','getByRegion','donde_comprar','por_pais'));
    }

	function donde_comprar($region = null){

		//$this->layout = 'map';
		$distribuidores = $this->Distribuidor->find('all',array('order'=>'estado ASC','fields'=>array('DISTINCT(estado)'),'conditions'=>array('Distribuidor.pais'=>$region)));
		$this->set('distribuidores',$distribuidores);

		if ($region=='co'){
			$this->loadModel('DistribuidoresCertificado');
			$this->set('tiendas_certificadas',$this->DistribuidoresCertificado->find('all',array('order'=>array('ciudad ASC','nombre ASC'),'conditions'=>array('region'=>$region))));
		}else if ($region=='mx'){
			$tiendas = $this->Distribuidor->find('all',array('order'=>array('ciudad ASC','nombre ASC'),'conditions'=>array('coordenadas !='=>0,'tipo_distribuidor'=>'Mostrador','pais'=>$region)));
			$tiendas_array = array();
			foreach ($tiendas as $tienda){
				$tienda_arr['DistribuidoresCertificado'] = array(
					'nombre'=>$tienda['Distribuidor']['nombre'],
					'direccion'=>$tienda['Distribuidor']['direccion'],
					'zona'=>$tienda['Distribuidor']['estado'],
					'ciudad'=>$tienda['Distribuidor']['ciudad'],
					'telefono'=>$tienda['Distribuidor']['telefono'],
					'coordenadas'=>$tienda['Distribuidor']['coordenadas']
				);
				array_push($tiendas_array,$tienda_arr);
			}
			$this->set('tiendas_certificadas',$tiendas_array);
		}


		switch ($region){
			case "car":
				$condiciones = array('Distribuidor.pais IN ("bb","do","pr","tt")');
				$order=array('Distribuidor.pais ASC');
				break;
			case "cam":
				$condiciones = array('Distribuidor.pais IN ("sv","bz","cr","gt","hn","ni","pa")');
				$order=array('Distribuidor.pais ASC');
				break;
			case "mx":
				$condiciones = array('Distribuidor.tipo_distribuidor'=>'Mayorista','Distribuidor.pais'=>'mx','Distribuidor.coordenadas !='=>0);
				$order=array('Distribuidor.pais ASC');
				break;
			default:
				$condiciones = array('Distribuidor.pais'=>$region);
				$order = array('Distribuidor.nombre ASC');
				break;
		}
		$distribuidores_marca = $this->Distribuidor->find('all',array('order'=>$order,'fields'=>array('DISTINCT(nombre)','pais','coordenadas','direccion','ciudad','telefono'),'conditions'=>$condiciones));
		$this->set('distribuidores_marca',$distribuidores_marca);
		$this->set('region',$region);

	}

	function por_estado($estado = null, $region = null) {
	    $this->set('distribuidores',$this->Distribuidor->find('all',array('order'=>'nombre ASC','conditions'=>array('estado'=>$estado,'pais'=>$region))));
	    $this->set('estado',$estado);
		$this->set('region',$region);
	}

	function por_marca($nombre = null,$region = null) {
		if ($region == 'car' || $region == 'cam'){
			$this->set('distribuidores',$this->Distribuidor->find('all',array('order'=>'nombre ASC','conditions'=>array('nombre LIKE "%'.$nombre.'%"'))));
		}else{
			$this->set('distribuidores',$this->Distribuidor->find('all',array('order'=>'nombre ASC','conditions'=>array('nombre LIKE "%'.$nombre.'%"','pais'=>$region))));
		}
		$this->set('region',$region);
		$this->set('nombre',$nombre);
	}

        function edit($id=null){
            if ($this->request->is('post')) {
                if($this->Distribuidor->save($this->request->data)){
                    $this->redirect(array('action' => 'por_estado',$this->request->data['Distribuidor']['estado']));
                }
            }else{
                $this->set('distribuidor',$this->Distribuidor->read(null,$id));
            }
        }

	function contacto(){
	    if ($this->request->is('post')) {
                $nombre = $this->request->data['Distribuidor']['nombre'];
                $telefono = $this->request->data['Distribuidor']['telefono'];
                $email = $this->request->data['Distribuidor']['email'];
                $mensaje = $this->request->data['Distribuidor']['mensaje'];
                $estado = $this->request->data['Distribuidor']['estado'];
				$ciudad = isset($this->request->data['Distribuidor']['ciudad']) ? $this->request->data['Distribuidor']['ciudad'] : "";

                $this->Distribuidor->query("INSERT INTO leads VALUES(0,'".$nombre."','".$email."','".$telefono."','".$mensaje."',NOW(),'".$this->request->data['Distribuidor']['region']."')");

	        $html =
	   	        "<p>Nombre: ".$nombre."</p>".
	   	        "<p>Email: ".$email."</p>".
	   	        "<p>Teléfono: ".$telefono."</p>".
                "<p>Estado: ".$estado."</p>".
				"<p>Ciudad: ".$ciudad."</p>".
	   	        "<p>Mensaje: ".$mensaje."</p>";

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
	   	        $this->Email->from(array('contacto@densoautopartes.com.mx'=>'Formulario de Contacto Página Web'));
				switch($this->request->data['Distribuidor']['region']):
					case('mx'):
						$this->Email->to('monica.guerrero@na.denso.com');
						//$this->Email->to('cesari.pineda@gmail.com');
					break;
					case('co'):
						$this->Email->to('victoria.weiss@na.denso.com');
						//$this->Email->to('cesari.pineda@outlook.com');
					break;
				endswitch;
                $this->Email->bcc('cesar@aigel.com.mx');
	   	        $this->Email->subject($this->request->data['Distribuidor']['titulo']);
	   	        $this->Email->send($html);
	   	        $this->Session->setFlash('Gracias por ponerte en contacto con nosotros. Te contactaremos pronto.','default',array('class'=>'success'));
	   	        $this->redirect(array('action'=>'contacto','controller'=>'distribuidors',$this->request->data['Distribuidor']['region']));
	    }
	}

	public function registrar_stat($id_dist = null, $accion = null){
		$this->Distribuidor->Behaviors->load('Containable');
		$distribuidor = $this->Distribuidor->find(
			'first',
			array(
				'fields'=>array(
					'id','correo_electronico','telefono','web'
				),
				'contain'=>false,
				'conditions'=>array(
					'Distribuidor.id'=>$id_dist
				)
			)
		);
		$tipos = array(1=>'Teléfono',2=>'Web',3=>'Email');
		$fecha=date('Y-m-d H:i:s');
		$ip=$_SERVER['REMOTE_ADDR'];
		$tipo_clic=$tipos[$accion];

		$this->Distribuidor->query("INSERT INTO distribuidors_stats VALUES (0,$id_dist,'".$fecha."','".$ip."','".$tipo_clic."')");

		switch($accion):
			case(1)://Telefono
				$this->redirect('tel:'.$distribuidor['Distribuidor']['telefono']);
			break;
			case(2)://Web
				$this->redirect($distribuidor['Distribuidor']['web']);
			break;
			case(3)://Correo Electronico
				$this->redirect('mailto:'.$distribuidor['Distribuidor']['correo_electronico']);
			break;
		endswitch;

	}

	public function getByRegion(){
		$this->loadModel('Cuenta');
		$cuentas = $this->Cuenta->find(
			'list',
			array(
				'conditions'=>array(
					'Cuenta.region'=>$this->request->data['region']
				),
				'order'=>array(
					'Cuenta.nombre'
				),
				'fields'=>array(
					'Cuenta.nombre','Cuenta.nombre'
				)
			)
		);
		header('Content-Type: application/json');
		asort($cuentas);
		echo json_encode(debug($cuentas));
		exit();

	}

	public function por_pais($pais = null, $region = null) {
		$this->set('distribuidores',$this->Distribuidor->find('all',array('order'=>'nombre ASC','conditions'=>array('pais'=>$pais,))));
		$this->set('pais',$pais);
		$this->set('region',$region);
	}
}
?>
