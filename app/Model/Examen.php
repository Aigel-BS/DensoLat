<?php
class Examen extends AppModel {
	var $name = 'Examen';
	var $displayField = 'id';

	public $hasMany = array(
		'Preguntas' => array(
			'className' => 'Pregunta',
			'foreignKey' => 'examen_id',
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
		'Temas' => array(
			'className' => 'Tema',
			'foreignKey' => 'examen_id',
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
		'Respuesta' => array(
			'className' => 'Respuesta',
			'foreignKey' => 'examen_id',
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
