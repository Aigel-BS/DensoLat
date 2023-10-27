<?php
class Distribuidor extends AppModel {
	var $name = 'Distribuidor';
	var $displayField = 'nombre';

    public $hasMany = array(
        'Users' => array(
            'className' => 'User',
            'foreignKey' => 'cuenta_venta_id',
            'dependent' => true,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
    );

}
?>