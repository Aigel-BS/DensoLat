<?php
class DistribuidoresCertificadosController extends AppController {

	var $name = 'DistribuidoresCertificados';

	public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow(array('index','view','map'));
    }

	function index($region=null){
		$this->set('distribuidores',$this->DistribuidoresCertificado->find('all',array('order'=>array('ciudad ASC','nombre ASC'),'conditions'=>array('region'=>$region))));
		$this->set('region',$region);
	}

	function map($region=null){
		$this->set('distribuidores',$this->DistribuidoresCertificado->find('all',array('order'=>array('ciudad ASC','nombre ASC'),'conditions'=>array('region'=>$region))));
		$this->set('region',$region);
	}
}
?>
