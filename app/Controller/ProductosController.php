<?php
class ProductosController extends AppController {

    var $name = 'Productos';

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('RequestHandler');

    public function beforeFilter()
    {
        parent::beforeFilter();
         $this->Auth->allow(array('buscar','getMarcas','getModelos','getMotores','buscar_avanzado','buscar_distribuidor_producto','seleccionar_pais'));
    }

    public function buscar($region = null){

        if(!isset($region)){
            $region = 'latam';
        }
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
        $this->set('anios',$anios);
        $this->set('region',$region);
    }

    public function getMarcas(){
        $models = array();
        if (isset($this->request['data']['anio'])) {
            $marcas = $this->Producto->find(
                'list',
                array(
                    'fields'=>array(
                        'Producto.marca','Producto.marca'
                    ),
                    'conditions'=>array(
                        'Producto.anio_inicio <='=> $this->request['data']['anio'],
                        'Producto.anio_final >='=> $this->request['data']['anio'],
                        'Producto.pais'=> $this->request['data']['pais'],
                    ),
                    'order'=>'Producto.marca ASC',
					'group'=>'Producto.marca'
                )
            );
            $models['marcas']=$marcas;

            $modelos = $this->Producto->find(
                'list',
                array(
                    'fields'=>array(
                        'Producto.modelo','Producto.modelo'
                    ),
                    'conditions'=>array(
                        'Producto.anio_inicio <='=> $this->request['data']['anio'],
                        'Producto.anio_final >='=> $this->request['data']['anio'],
                        'Producto.pais'=> $this->request['data']['pais'],
                        'Producto.marca'=> reset($marcas),
                    ),
                    'order'=>'Producto.modelo ASC'
                )
            );
            $models['modelos']=$modelos;

            $motores = $this->Producto->find(
                'list',
                array(
                    'fields'=>array(
                        'Producto.motor','Producto.motor'
                    ),
                    'conditions'=>array(
                        'Producto.anio_inicio <='=> $this->request['data']['anio'],
                        'Producto.anio_final >='=> $this->request['data']['anio'],
                        'Producto.pais'=> $this->request['data']['pais'],
                        'Producto.marca'=> reset($marcas),
                        'Producto.modelo'=> reset($modelos)
                    ),
                    'order'=>'Producto.motor ASC'
                )
            );

            $models['motores']=$motores;

        }
        header('Content-Type: application/json');
        echo json_encode($models);
        exit();
    }

    public function getModelos(){
        $models = array();
        if (isset($this->request['data']['marca'])) {
            $modelos = $this->Producto->find(
                'list',
                array(
                    'fields'=>array(
                        'Producto.modelo','Producto.modelo'
                    ),
                    'conditions'=>array(
                        'Producto.anio_inicio <='=> $this->request['data']['anio'],
                        'Producto.anio_final >='=> $this->request['data']['anio'],
                        'Producto.marca'=> $this->request['data']['marca'],
                        'Producto.pais'=> $this->request['data']['pais'],
                    ),
                    'order'=>'Producto.modelo ASC'
                )
            );

            $models['modelos']=$modelos;

            $motores = $this->Producto->find(
                'list',
                array(
                    'fields'=>array(
                        'Producto.motor','Producto.motor'
                    ),
                    'conditions'=>array(
                        'Producto.anio_inicio <='=> $this->request['data']['anio'],
                        'Producto.anio_final >='=> $this->request['data']['anio'],
                        'Producto.marca'=> $this->request['data']['marca'],
                        'Producto.pais'=> $this->request['data']['pais'],
                        'Producto.modelo'=> reset($modelos)
                    ),
                    'order'=>'Producto.motor ASC'
                )
            );

            $models['motores']=$motores;

        }
        header('Content-Type: application/json');
        echo json_encode($models);
        exit();
    }

    public function getMotores(){
        $motores_array = array();
        if (isset($this->request['data']['modelo'])) {
            $motores = $this->Producto->find(
                'list',
                array(
                    'fields'=>array(
                        'Producto.motor','Producto.motor'
                    ),
                    'conditions'=>array(
						'Producto.anio_inicio <='=> $this->request['data']['anio'],
						'Producto.anio_final >='=> $this->request['data']['anio'],
                        'Producto.marca'=> $this->request['data']['marca'],
                        'Producto.modelo'=> $this->request['data']['modelo'],
                        'Producto.pais'=> $this->request['data']['pais'],
                    ),
                    'order'=>'Producto.motor ASC'
                )
            );
			$motores_array['motores']=$motores;

			$categorias = $this->Producto->find(
				'list',
				array(
					'fields'=>array(
						'Producto.categoria','Producto.categoria'
					),
					'conditions'=>array(
						'Producto.anio_inicio <='=> $this->request['data']['anio'],
						'Producto.anio_final >='=> $this->request['data']['anio'],
						'Producto.marca'=> $this->request['data']['marca'],
						'Producto.modelo'=> $this->request['data']['modelo'],
						'Producto.pais'=> $this->request['data']['pais'],
					),
					'order'=>'Producto.categoria ASC',
					'group'=>'Producto.categoria'
				)
			);
			$motores_array['categorias']=$categorias;
        }
        header('Content-Type: application/json');
        echo json_encode($motores_array);
        exit();
    }

    public function buscar_avanzado(){
        //echo var_dump($this->request->data['Producto']);
        if (isset($this->request->data['Producto'])){
			$region = $this->request->data['Producto']['region'];
            $categorias = "";
            $conditions_and = array(
                'Producto.anio_inicio <='=> $this->request->data['Producto']['anio'],
                'Producto.anio_final >='=> $this->request->data['Producto']['anio'],
                'Producto.marca'=>$this->request->data['Producto']['marca'],
                'Producto.modelo'=>$this->request->data['Producto']['modelo'],
                'Producto.motor'=>$this->request->data['Producto']['motor'],
                'Producto.pais'=> $region,


            );

			switch ($this->request->data['Producto']['tipo_pieza']){
				case "filtros_aire":
					$categorias = $categorias."'Filtro de Aire',";
					break;
				case "filtros_aceite":
					$categorias = $categorias."'Filtro de Aceite',";
					break;
				case "radiadores":
					$categorias = $categorias."'Radiador',";
					break;
				case "compresores_ac":
					$categorias = $categorias."'Compresor de Aire Acondicionado',";
					break;
				case "sensor_oxigeno":
					$categorias = $categorias."'Sensor Oxigeno',";
					break;
				case "bujias":
					$categorias = $categorias."'CONVENCIONAL',";
					$categorias = $categorias."'U-GROOVE',";
					$categorias = $categorias."'DOUBLE PLATINUM',";
					$categorias = $categorias."'IRIDIUM LONG LIFE',";
					$categorias = $categorias."'PLATINUM TT',";
					$categorias = $categorias."'IRIDIUM TT',";
					$categorias = $categorias."'IRIDIUM POWER',";
					break;
			}

            if (strlen($categorias)>0){
                array_push($conditions_and,array('Producto.categoria IN ('.substr($categorias,0,-1).')'));
            }

            $productos = $this->Producto->find('all',array('conditions'=>$conditions_and,'group'=>'Producto.numero_parte','order'=>'Producto.numero_parte'));
            $this->set('productos',$productos);

            $this->set('region',$region);

            $this->loadModel('Distribuidor');
            $distribuidores = $this->Distribuidor->find('all',array('conditions'=>array('Distribuidor.pais'=>$region),'order'=>'estado ASC','fields'=>array('DISTINCT(estado)')));
            $estados = array();
            foreach ($distribuidores as $estado):
                $estados[$estado['Distribuidor']['estado']]=$estado['Distribuidor']['estado'];
            endforeach;
	        $this->set('estados',$estados);
        }
    }

    public function buscar_distribuidor_producto(){
       if ($this->request->is('post')) {
           //$this->loadModel('Producto');
           //$producto = $this->Producto->read('null',$this->request->data['Producto']['producto_id']);
           $region = $this->request->data['Producto']['region'];
           $this->Producto->query("INSERT INTO busqueda_productos VALUES(0,NOW(),0,'".$this->request->data['Producto']['estado']."','".$_SERVER['REMOTE_ADDR']."','".$region."')");
           $this->redirect(array('action' => 'por_estado','controller'=>'distribuidors',$this->request->data['Producto']['estado'],$region));
       }
    }

    public function seleccionar_pais(){
        if($this->request->is('post')){
			if($this->request->data['Page']['pais']=='mx'){
				$this->redirect('https://densoautopartes.com.mx');
			}else{
				$this->redirect(array('controller'=>'pages','action'=>'home', $this->request->data['Page']['pais']));
			}

        }
    }

}
?>
