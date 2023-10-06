<?php
	$url = 'https://densoautopartes.com.mx/img/diploma/fondo.jpg';

	$meses = array(
		1=>'enero',
		2=>'febrero',
		3=>'marzo',
		4=>'abril',
		5=>'mayo',
		6=>'junio',
		7=>'julio',
		8=>'agosto',
		9=>'septiembre',
		10=>'octubre',
		11=>'noviembre',
		12=>'diciembre'
	);
?>
<style>

	body {
		background: white;
		font-family: 'Denso';
		font-size: 10px;
	}

	@page {
		width: 8.5in;
		height: 11in;
		margin-bottom: 160px;
		margin-top: 250px;
	}

	#watermark {
		position: fixed;
		bottom:   0px;
		left:     0px;
		top: -230px;
		width: 8.5in;
		height: 11in;

		/** Your watermark should be behind every content**/
		z-index:  -1000;
	}

	.titulo {
		position: fixed;
		bottom:   0px;
		left:     35%;
		width: 350px;
		top: -190px;
		font-family: 'Denso';
		font-size: 18px;
		color:white;
		background-color: black;
		height: 30px;
		padding: 10px 0px;
		text-align: center;
		font-weight: normal;
		/** Your watermark should be behind every content**/
		z-index:  -1000;
	}

	.etiqueta_1{
		position:fixed;
		top: -120px;
		width: 350px;
		left: 35%;
		color:black;
		z-index: 100;
		text-align: center;
		font-size: 14px;
	}

	.estudiante{
		position:fixed;
		top: -60px;
		width: 350px;
		left: 35%;
		color:black;
		z-index: 100;
		text-align: center;
		font-size: 24px;
		font-family: 'Denso-Regular';
	}

	.etiqueta_2{
		position:fixed;
		top: -10px;
		width: 500px;
		left: 25%;
		color:black;
		z-index: 100;
		text-align: center;
		font-size: 14px;
		font-family: 'Denso-Regular';
	}

	.fecha{
		position:fixed;
		top: 50px;
		width: 500px;
		left: 25%;
		color:black;
		z-index: 100;
		text-align: center;
		font-size: 18px;
		font-family: 'DENSO-Light';
	}

	.firma_1{
		position:fixed;
		bottom: 50px;
		left:250px;
		color:black;
		line-height: 1.5px;
		z-index: 100;
		width:20%;
		font-size: 14px;
		text-align:center;
		border-top: 1px solid black;
		padding: 20px;
		font-family: 'Denso-Regular';

	}
	.firma_2 {
		position: fixed;
		bottom: 50px;
		left: 500px;
		color: black;
		line-height: 1.5px;
		z-index: 100;
		width: 20%;
		font-size: 14px;
		text-align: center;
		border-top: 1px solid black;
		padding: 20px;
		font-family: 'Denso-Regular';

	}

</style>
<body>

	<div id="watermark">
		<img src="<?=$url?>" width="120%" height="auto"/>
	</div>
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
		virtual en nuestro portal de entrenamientos <span style="font-family: Denso-Regular">DENSO</span> .
	</div>

	<div class="fecha">
		Se firma a los <?= date("d",strtotime($calificacion['Respuesta']['fecha']))?> dí as del mes de &nbsp;<?= $meses[date("m",strtotime($calificacion['Respuesta']['fecha']))]?> de <?= date("Y",strtotime($calificacion['Respuesta']['fecha']))?>
	</div>

	<div class="firma_1">
		Alejandro Yepez
	</div>

	<div class="firma_2">
		José Ramírez
	</div>

</body>
