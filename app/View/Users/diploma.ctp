<?php
$url = 'https://densoautopartes.com.mx/img/diploma/fondo.jpg';

$meses = array(
		'01'=>'enero',
		'02'=>'febrero',
		'03'=>'marzo',
		'04'=>'abril',
		'05'=>'mayo',
		'06'=>'junio',
		'07'=>'julio',
		'08'=>'agosto',
		'09'=>'septiembre',
		'10'=>'octubre',
		'11'=>'noviembre',
		'12'=>'diciembre'
);
?>
<div class="main">
	<div class="titulo">
		CERTIFICADO DE ENTRENAMIENTO
	</div>
	<div class="etiqueta_1" style="font-weight">
		DENSO Products and Services Americas Inc,<br>CERTIFICA QUE
	</div>
	<div class="estudiante">
		<b><?= $calificacion['Usuario']['nombre']?></b>
	</div>
	<div class="etiqueta_2">
		Cursó y aprobó en su totalidad los módulos de la línea de productos de <span style="text-transform: uppercase; font-weight: bold"><?= $calificacion['Curso']['nombre']?></span>, en la modalidad
		virtual en nuestro portal de entrenamientos DENSO.
	</div>

	<div class="fecha">
		Se firma a los <?= date("d",strtotime($calificacion['Respuesta']['fecha']))?> días del mes de <?= $meses[date("m",strtotime($calificacion['Respuesta']['fecha']))]?> del año <?= date("Y",strtotime($calificacion['Respuesta']['fecha']))?>
	</div>

	<div class="firma_1">
		<p><b>Alejandro Yépez</b></p>
		<p>Aftermarket Division Director</p>
		<p>Mexico & Latin America</p>
	</div>
	<div class="firma_2">
		<p><b>José Ramírez</b></p>
		<p>HD & LD Senior Sales Manager</p>
		<p>America's Region</p>
	</div>
</div>
