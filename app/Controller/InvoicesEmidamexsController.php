<?php
class InvoicesEmidamexsController extends AppController {

    var $name = 'InvoicesEmidamexs';

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('RequestHandler');

    public function index(){
        $this->layout = 'sistema';
        $facturas = $this->InvoicesEmidamex->find('all');
        $this->set('facturas',$facturas);
    }
}
?>