<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div id="content" class="bg-container">
	<header class="head">
		<div class="main-bar">
			<div class="row no-gutters">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h4 class="nav_top_align">
						<i class="fa fa-book"></i>
						<?= $curso['Curso']['nombre']?>
					</h4>
				</div>
			</div>
		</div>
	</header>
	<div class="outer">
		<div class="inner bg-container">
			<div class="row">
				<div class="col-sm-12">
					<p><?= $curso['Curso']['descripcion']?></p>
					<?= $this->Html->image($curso['Curso']['imagen'],array('class'=>'portada_curso'))?>
				</div>
			</div>
		</div>
	</div>

	<?php foreach($curso['Temas'] as $tema){?>
	<div class="outer">
		<div class="inner bg-container">
			<div class="row">
				<div class="col">
					<div class="card" style="width: 85vw;">
						<div class="card-header bg-denso">
							<?= $tema['titulo']?>
							<?php if ($tema['examen_id']!="") {?>
								<div style="float:right">
									Calificación: <?= $calificaciones[$tema['examen_id']]."/".$tema['Examen']['puntos']?> <?= ($calificaciones[$tema['examen_id']]/$tema['Examen']['puntos'] >= .8) ? "<i class='fa fa-check fa-lg' style='color:green'></i>":"<i class='fa fa-times fa-lg' style='color:white'></i>"?>
								</div>
							<?php } ?>
						</div>
						<div class="card-body card_block_top_align ">
							<h5><?= $tema['descripcion']?></h5>
							<?php
								if ($tema['presentacion']!=""){
									echo $this->Html->link('<i class="fa fa-file-pdf-o fa-lg"></i> PDF: '.$tema['titulo_presentacion'],$tema['presentacion'],array('target'=>'_blank','escape'=>false))."<br>";
								}
								if ($tema['video']!=""){
									echo $this->Html->link('<i class="fa fa-file-video-o fa-lg"></i> Video: '.$tema['titulo_video'],$tema['video'],array('target'=>'_blank','escape'=>false))."<br>";
								}
								if ($tema['adicional_1']!=""){
									echo $this->Html->link($tema['titulo_adicional'],$tema['adicional_1'],array('target'=>'_blank'))."<br>";
								}
							?>
							<div>
								<?php
									if ($tema['examen_id']!="") {
										if ($intentos[$tema['Examen']['id']] < 2) {
											echo $this->Html->link('<i class="fa fa-check-square-o fa-lg"></i> Examen', array('controller' => 'examens', 'action' => 'contestar', $tema['Examen']['id']), array('escape' => false, 'confirm' => '¿Estás seguro que quieres comenzar el examen?'));
											echo '<div style="float:right">Tienes ' . (2 - $intentos[$tema['Examen']['id']]) . ' de 2 Intentos</div>';
										} else {
											echo '<i class="fa fa-check-square-o fa-lg"></i> Examen';
											echo '<div style="float:right">Ya no tienes más intentos para contestar este examen</div>';
										}
									}
									?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
</div>
