<?php
class Tema extends AppModel {
	var $name = 'Tema';
	var $displayField = 'id';

	var $belongsTo = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
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
