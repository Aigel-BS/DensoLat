<?php
class OrdersProduct extends AppModel {
	public $name = 'OrdersProduct';

	public $belongsTo = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'order_id'
		),
		'ProductsSale' => array(
			'className' => 'ProductsSale',
			'foreignKey' => 'product_id'
		)
	);
}
?>
