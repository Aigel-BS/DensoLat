<?php
class VentasController extends AppController {

    var $name = 'Ventas';

    function dashboard(){
		$this->layout = 'capacitacion';
		$conditions = "";
		switch ($this->Session->read("Auth.User.tipo")){
			case 1:
				$conditions = array(
					'Venta.user_id IN (SELECT id FROM users WHERE cuenta_venta_id = '.$this->Session->read("Auth.User.cuenta_id").')',
				);
				break;
			case 2:
				$conditions = array(
					'Venta.user_id'=>$this->Session->read("Auth.User.id"),
				);
				break;
		}
		$this->Venta->Behaviors->load('Containable');
		$ventas = $this->Venta->find(
			'all',
			array(
				'fields'=>array(
					'user_id','SUM(monto) as monto'
				),
				'conditions'=>$conditions,
				'group'=>'Venta.user_id',
				'recursive'=>2,
				'order'=>'Venta.monto DESC',
				'contain'=>array(
					'Vendedor'=>array(
						'fields'=>array(
							'nombre'
						)
					)
				)
			)
		);
		$this->set('ventas',$ventas);

		$crecimiento = array();
		$i=0;
		foreach ($ventas as $venta){
			$crecimiento[$i]=array(
				'vendedor'=>$venta['Vendedor']['nombre'],
				'final'=>$venta[0]['monto']
			);
			$i++;
		}
		$this->set('crecimiento',$crecimiento);

		$this->loadModel('Distribuidor');
		$this->Distribuidor->Behaviors->load('Containable');
		$distribuidor = $this->Distribuidor->find(
			'first',
			array(
				'conditions'=>array(
					'Distribuidor.id'=>$this->Session->read('Auth.User.cuenta_venta_id')
				),
				'contain'=>false,
				'fields'=>array(
					'nombre'
				)
			)
		);
		$this->set('distribuidor',$distribuidor);


	}

}
?>
