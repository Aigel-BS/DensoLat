<?php
class Venta extends AppModel {
	var $name = 'Venta';
	var $displayField = 'id';

	var $belongsTo = array(
		'Vendedor' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);


}
?>
