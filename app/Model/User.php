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
	);


}
?>
