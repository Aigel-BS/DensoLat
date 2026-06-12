<?php
class ProductsSale extends AppModel {
	public $name = 'ProductsSale';
	public $useTable = 'products_sales';

	public $hasMany = array(
		'Cart' => array(
			'className' => 'Cart',
			'foreignKey' => 'product_id',
			'dependent' => true
		)
	);
}
?>
