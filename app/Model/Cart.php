<?php
class Cart extends AppModel {
	public $name = 'Cart';
	
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
		),
		'ProductsSale' => array(
			'className' => 'ProductsSale',
			'foreignKey' => 'product_id'
		)
	);
}
?>
