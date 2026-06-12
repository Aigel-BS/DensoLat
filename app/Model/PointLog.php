<?php
class PointLog extends AppModel {
	public $name = 'PointLog';

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
		)
	);
}
?>
