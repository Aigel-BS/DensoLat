<style>
	.select{
		background-color: #cacaca;
	}
	.puntos {
		margin-top: 15px;
		font-family: Denso;
		font-weight: bold;
		font-size: 1.3em;
	}
	.calificacion{
		float: right;
		font-family: Denso;
		font-weight: bold;
	}
	.pill-regresar {
		border: 1px solid #db0834;
		border-radius: 20px;
		background-color: #db0834;
		padding: 3px 0px;
		font-size: 14px;
		margin-bottom: 15px;
	}
</style>
<?php
	$calificacion = 0;
	$total_puntos = 0;
	foreach($respuestas as $respuesta){
		$total_puntos += $respuesta['Pregunta']['puntos'];
		$calificacion += $respuesta['Respuesta']['puntos'];
	}
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div id="content" class="bg-container">
	<header class="head">
		<div class="main-bar">
			<div class="row no-gutters">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h4 class="nav_top_align">
						<i class="fa fa-check-square"></i>
						Resumen Examen: <?= $examen['Temas'][0]['titulo']?>
					</h4>
				</div>
			</div>
		</div>
	</header>
	<div class="outer">
		<div class="inner bg-container">
			<div class="row">
				<div class="col">
					<div class="card" style="width: 85vw;">
						<div class="card-header bg-white">
							<h4>Intento: <?= $intento?>
							<div class="calificacion">
								<?= $calificacion."/".$total_puntos?>
							</div>
							</h4>
						</div>
						<div class="card-body card_block_top_align ">
							<?php
								foreach($respuestas as $respuesta){
							?>
							<div class="row pill-curso">
								<div class="col-sm-10" style="padding: .5% 1%;">
									<h5 style="font-family: Denso"><?= $respuesta['Pregunta']['pregunta']?></h5>
									<p>Tu respuesta: <br><?= $respuesta['Respuesta']['respuesta']?></p>
									<?php
										if ($respuesta['Respuesta']['puntos']==0){
											$opciones = explode("|",$respuesta['Pregunta']['opciones']);
											echo "<p class='respuesta_correcta'><i>La respuesta correcta es: ".$opciones[$respuesta['Pregunta']['respuesta']]."</i></p>";
										}
									?>
								</div>
								<div class="col-sm-2 text-center" style="line-height: 1px;/*! padding: 0%; */margin-top: 2%;">
									<?php
										echo ($respuesta['Respuesta']['puntos']>0 ? "<i class='fa fa-check fa-2x' style='color:green'></i>" : "<i class='fa fa-times fa-2x' style='color:red'></i>");
										echo "<p class='puntos'>".$respuesta['Respuesta']['puntos']." Pts </p>";
									?>
								</div>
							</div>

							<?php
								}
							?>
							<div class="row pill-regresar">
								<div class="col-sm-11" style="padding: .5% 1%; text-align: right">
									<h5 style="font-family: Denso; color: white">Regresar al curso</h5>
								</div>
								<div class="col-sm-1 text-center" style="line-height: 1px;/*! padding: 0%; */margin-top: 1%;">
									<?php
										echo $this->Html->link('<i class="fa fa-mail-reply fa-2x" style="color:white"></i>',array('action'=>'view','controller'=>'cursos',$examen['Temas'][0]['curso_id']),array('style'=>'color:white','escape'=>false));
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


