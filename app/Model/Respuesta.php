<?php
class Respuesta extends AppModel {
	var $name = 'Respuesta';
	var $displayField = 'id';

	var $belongsTo = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Usuario' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pregunta' => array(
			'className' => 'Pregunta',
			'foreignKey' => 'pregunta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Examen' => array(
			'className' => 'Examen',
			'foreignKey' => 'examen_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);

}
?>
