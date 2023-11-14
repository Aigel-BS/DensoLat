<?php
class Venta extends AppModel {
	var $name = 'Venta';
	var $displayField = 'id';

	var $belongsTo = array(
		'Tienda' => array(
			'className' => 'DistribuidoresCertificado',
			'foreignKey' => 'distribuidores_certificado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);


}
?>
