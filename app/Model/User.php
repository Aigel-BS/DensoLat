<?php
class User extends AppModel {
	var $name = 'User';
	var $displayField = 'nombre';

	public $hasMany = array(
		'Respuestas' => array(
			'className' => 'Respuesta',
			'foreignKey' => 'user_id',
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
		'PointLog' => array(
			'className' => 'PointLog',
			'foreignKey' => 'user_id',
			'dependent' => true
		),
		'Cart' => array(
			'className' => 'Cart',
			'foreignKey' => 'user_id',
			'dependent' => true
		),
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'user_id',
			'dependent' => true
		),
	);

	public $hasAndBelongsToMany = array(
		'Cursos' =>
			array(
				'className' => 'Curso',
				'joinTable' => 'users_cursos',
				'foreignKey' => 'curso_id',
				'associationForeignKey' => 'user_id',
				'unique' => true,
				'conditions' => '',
				'fields' => '',
				'order' => '',
				'limit' => '',
				'offset' => '',
				'finderQuery' => '',
				'with' => 'users_cursos'
			),
	);

	var $belongsTo = array(
		'Cuenta' => array(
			'className' => 'Cuenta',
			'foreignKey' => 'cuenta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Distribuidor' => array(
			'className' => 'Distribuidor',
			'foreignKey' => 'distribuidor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),	);

	public $validate = array(
		'email' => array(
			'required' => array(
				'rule' => 'notBlank',
				'message' => 'A email is required'
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'This email has already been taken.'
			)
		),
		'password' => array(
			'required' => array(
				'rule' => 'notBlank',
				'message' => 'A password is required'
			)
		),
		'full_name' => array(
			'required' => array(
				'rule' => 'notBlank',
				'message' => 'Full name is required'
			)
		)
	);

}
?>
