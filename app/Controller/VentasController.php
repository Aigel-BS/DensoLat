<?php
class VentasController extends AppController {

    var $name = 'Ventas';

    function dashboard($id_distribuidor = null, $categoria = null){
		$this->layout = 'ventas';

		$conditions = array();
		$distribuidor_id = 0;

		if (isset($id_distribuidor) && $this->Session->read('Auth.User.distribuidor_id')==999999999){
			array_push(
				$conditions,
				array(
					'Venta.distribuidores_certificado_id IN (SELECT id FROM distribuidores_certificados WHERE distribuidor_id = '.$id_distribuidor.')'
				)
			);
			$distribuidor_id = $id_distribuidor;
		}else{
			array_push(
				$conditions,
				array(
					'Venta.distribuidores_certificado_id IN (SELECT id FROM distribuidores_certificados WHERE distribuidor_id = '.$this->Session->read('Auth.User.distribuidor_id').')'
				)
			);
			$distribuidor_id = $this->Session->read('Auth.User.distribuidor_id');
		}

		if (isset($categoria)){
			array_push(
				$conditions,
				array(
					'Venta.categoria'=>$categoria
				)
			);
		}else{
			array_push(
				$conditions,
				array(
					'Venta.categoria'=>'General'
				)
			);
		}

		$this->Venta->Behaviors->load('Containable');

		$ventas = $this->Venta->find(
			'all',
			array(
				'fields'=>array(
					'distribuidores_certificado_id','SUM(monto) as monto','fecha'
				),
				'conditions'=>$conditions,
				'group'=>array('Venta.distribuidores_certificado_id','fecha'),
				'recursive'=>2,
				'order'=>'Venta.monto DESC',
				'contain'=>array(
					'Tienda'=>array(
						'fields'=>array(
							'nombre'
						)
					)
				)
			)
		);
		$this->set('ventas',$ventas);

		$tabla_ventas = array();
		foreach ($ventas as $venta){
			$tabla_ventas[$venta['Tienda']['nombre']][$venta['Venta']['fecha']] = round($venta[0]['monto']) ;
		}

		$this->set('tabla_ventas',$tabla_ventas);


		$ventas_mensuales = $this->Venta->find(
			'all',
			array(
				'fields'=>array(
					'distribuidores_certificado_id','SUM(monto) as monto_total'
				),
				'conditions'=>$conditions,
				'group'=>array('Venta.distribuidores_certificado_id'),
				'recursive'=>2,
				'order'=>'monto_total DESC',
				'contain'=>array(
					'Tienda'=>array(
						'fields'=>array(
							'nombre'
						)
					)
				)
			)
		);

		$ventas_m = array();
		$i=0;
		foreach ($ventas_mensuales as $venta){
			$ventas_m[$i]=array(
				'vendedor'=>$venta['Tienda']['nombre'],
				'final'=>round($venta[0]['monto_total'])
			);
			$i++;
		}
		$this->set('ventas_mensuales',$ventas_m);







		$this->loadModel('Distribuidor');
		$this->Distribuidor->Behaviors->load('Containable');
		$distribuidor = $this->Distribuidor->find(
			'first',
			array(
				'conditions'=>array(
					'Distribuidor.id'=>$distribuidor_id
				),
				'contain'=>false,
				'fields'=>array(
					'nombre'
				)
			)
		);
		$this->set('distribuidor',$distribuidor);

		$this->set('distribuidores',$this->Distribuidor->find('list',array('conditions'=>array('Distribuidor.pais'=>'co'),'order'=>'Distribuidor.nombre ASC')));

		//Ranking de posiciones
		$ranking = array();


	}

}
?>
