<?php
class Pregunta extends AppModel {
	var $name = 'Pregunta';
	var $displayField = 'id';

	var $belongsTo = array(
		'Tema' => array(
			'className' => 'Tema',
			'foreignKey' => 'tema_id',
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
