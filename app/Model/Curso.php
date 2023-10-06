<?php
class Curso extends AppModel {
	var $name = 'Curso';
	var $displayField = 'id';

	public $hasMany = array(
		'Temas' => array(
			'className' => 'Tema',
			'foreignKey' => 'curso_id',
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
		'Respuestas' => array(
			'className' => 'Respuesta',
			'foreignKey' => 'curso_id',
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
		'Examenes' => array(
			'className' => 'Examen',
			'foreignKey' => 'curso_id',
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

	/*var $belongsTo = array(
		'Asesor' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pais' => array(
			'className' => 'Diccionario',
			'foreignKey' => 'pais',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);*/

	public $hasAndBelongsToMany = array(
		'Users' =>
			array(
				'className' => 'User',
				'joinTable' => 'users_cursos',
				'foreignKey' => 'user_id',
				'associationForeignKey' => 'curso_id',
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


}
?>
