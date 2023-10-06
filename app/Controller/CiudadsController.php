<?php
class CiudadsController extends AppController {

    var $name = 'Ciudads';

    public $components = array('RequestHandler');

    public function beforeFilter()
    {
        parent::beforeFilter();
         $this->Auth->allow(array('getCiudades'));
    }

    public function getCiudades(){
		$estado = $this->request->data['estado'];
		$pais = $this->request->data['pais'];

		$ciudades = $this->Ciudad->find(
			'list',
			array(
				'conditions'=>array(
					'Ciudad.pais'=>$pais,
					'Ciudad.estado'=>$estado
				),
				'order'=>'Ciudad.ciudad ASC'
			)
		);


		header('Content-Type: application/json');
        echo json_encode($ciudades);
        exit();
	}

}
?>