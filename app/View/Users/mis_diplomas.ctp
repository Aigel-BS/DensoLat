<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="modal fade" id="ayuda" role="dialog" aria-labelledby="modalLabelsuccess">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h4 class="modal-title text-white" id="modalLabelsuccess">Tutorial para imprimir Diploma</h4>
			</div>
			<div class="modal-body" style="width:80wh">
				<div class="row">
					<video autoplay="autoplay" width="100%" controls>
						<source src="<?= $this->Html->url('/videos/TutorialDiploma.mp4')?>" type="video/mp4"/>
					</video>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn  btn-danger" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
		<?= $this->Form->end()?>
	</div>
</div>

<div id="content" class="bg-container">
	<header class="head">
		<div class="main-bar">
			<div class="row no-gutters">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h4 class="nav_top_align">
						<i class="fa fa-certificate"></i>
						Mis Diplomas
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
							<div style="float: right">
								<?= $this->Html->link("Ver Tutorial para imprimir",'javascript:ayudaDiploma()',array('escape'=>false))?>
							</div>
						</div>
						<div class="card-body card_block_top_align ">
							<?php
								foreach($cursos as $curso){
									$calificacion = $calificaciones[$curso['Curso']['id']]/ $curso['Curso']['total_puntos'];
							?>
							<div class="row pill-curso ">
								<div class="col-sm-6" style="padding: .5% 1%;">
									<h5 style="font-family: Denso"><?= $curso['Curso']['nombre']?></h5>
									<p><small><?= $curso['Curso']['descripcion']?></small></p>
								</div>
								<div class="col-sm-4" style="line-height: 1px;/*! padding: 0%; */margin-top: .5%;">
									<h5 style="font-family: Denso">MEJOR CALIFICACIÓN <?= number_format($calificacion*100,0)?>%</h5>
									<p>Aciertos / Total de Puntos: <?= $calificaciones[$curso['Curso']['id']]. "/". $curso['Curso']['total_puntos']?></p>
									<h5 style="font-family: Denso"><?= $calificacion >= .8 ? "<span style='color:green'>Aprobado</span>" : "<span style='color:red'>No Aprobado</span>"?></h5>
								</div>
								<div class="col-sm-2 text-center" style="line-height: 1px;/*! padding: 0%; */margin-top: 2%;">
									<?php
									if ($calificacion >=.8) {
										echo $this->Html->link('<i class="fa fa-certificate"></i> Ver Diploma', array('controller' => 'users', 'action' => 'diploma', $calificaciones_raw[sizeof($calificaciones_raw)-1]['Respuesta']['intento']), array('target'=>'_blank','escape' => false, 'class' => 'cta_curso'));
									}
									?>
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
<script>
	function ayudaDiploma(){
		$("#ayuda").modal('show');
	}
</script>
