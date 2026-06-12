<?php
class Order extends AppModel {
	public $name = 'Order';

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
		)
	);

	public $hasMany = array(
		'OrdersProduct' => array(
			'className' => 'OrdersProduct',
			'foreignKey' => 'order_id',
			'dependent' => true
		)
	);
}
?>
