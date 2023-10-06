<?php
class Cuenta extends AppModel {
	var $name = 'Cuenta';
	var $displayField = 'nombre';

	public $hasMany = array(
		'Usuarios' => array(
			'className' => 'User',
			'foreignKey' => 'cuenta_id',
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
