<?php
class Voucher extends AppModel {
	public $name = 'Voucher';

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'used_by_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>
