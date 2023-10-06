<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div id="content" class="bg-container">
	<header class="head">
		<div class="main-bar">
			<div class="row no-gutters">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h4 class="nav_top_align">
						<i class="fa fa-book"></i>
						Mis Cursos
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
							Lista de Cursos
						</div>
						<div class="card-body card_block_top_align ">
							<p>
								<b>Instrucciones:</b>
								<ol>
									<li>Selecciona el módulo de capacitación que deseas tomar, una vez que encuentres el módulo que deseas tomar, haz clic en <b>VER CURSO</b> para obtener más información.</li>
									<li>Da click en ícono de <b>VIDEO</b> para acceder al contenido de este curso.</li>
									<li>Al terminar, da click en la opción <b>EXAMEN</b> para acceder a la evaluación final de este módulo.</li>
									<li>Tienes 2 intentos para aprobar cada módulo.</li>
									<li>Deberás obtener como calificación final un mínimo de 80 puntos para poder acreditar el módulo.</li>
									<li>Una vez completado los módulos satisfactoriamente selecciona la sección <b>Mis Diplomas</b> para imprimir tu certificado</li>
									<li>¡Listo! ¡Comencemos!</li>
								</ol>
							</p>
							<?php foreach($cursos as $curso){?>
							<div class="row pill-curso ">
								<div class="col-sm-8" style="padding: .5% 1%;">
									<h5 style="font-family: Denso"><?= $curso['Curso']['nombre']?></h5>
									<p><small><?= $curso['Curso']['descripcion']?></small></p>
								</div>
								<div class="col-sm-2" style="line-height: 1px;/*! padding: 0%; */margin-top: 1.5%;">
									<?php $progreso = $avance[$curso['Curso']['id']] / sizeof($curso['Temas']) * 100?>
									<p>Progreso <?= $progreso?>%</p>
									<div class="w3-border">
										<div class="w3-red" style="height:14px;width:<?= $progreso?>%"></div>
									</div>
								</div>
								<div class="col-sm-2 text-center" style="line-height: 1px;/*! padding: 0%; */margin-top: 2%;">
									<?= $this->Html->link('<i class="fa fa-play"></i> Ver Curso',array('controller'=>'cursos','action'=>'view',$curso['Curso']['id']),array('escape'=>false,'class'=>'cta_curso'))?>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
