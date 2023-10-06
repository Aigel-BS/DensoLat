<style>
	.select{
		background-color: #cacaca;
	}
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div id="content" class="bg-container">
	<header class="head">
		<div class="main-bar">
			<div class="row no-gutters">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h4 class="nav_top_align">
						<i class="fa fa-check-square"></i>
						Examen: <?= $pregunta['Tema']['titulo']?>
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
							<h4>Pregunta:</h4>
							<h2 style="font-family: Denso"><?= $pregunta['Pregunta']['pregunta']?></h2>
							<?php
								if ($pregunta['Pregunta']['imagen']!=""){
									echo $this->Html->image($pregunta['Pregunta']['imagen'],array('style'=>'width:400px; height:auto'));
								}
							?>
						</div>
						<div class="card-body card_block_top_align ">
							<?php
								$opciones = explode("|",$pregunta['Pregunta']['opciones']);
								$i = 0;
								foreach($opciones as $opcion){
							?>
							<a href="javascript:selectRespuesta(<?= $i?>)">
								<div class="row pill-curso" id="r_<?= $i?>">
									<div class="col-sm-12" style="padding: .5% 1%;">
										<h5 style="font-family: Denso"><?= $opcion?></h5>
									</div>
								</div>
							</a>
							<?php
								$i++;
								}
							?>
						</div>
						<div class="card-footer bg-white">
							<?= $this->Form->create('Examen',array('url'=>array('controller'=>'examens','action'=>'addRespuesta')))?>
							<?= $this->Form->hidden('respuesta',array('id'=>'respuesta','required'=>true))?>
							<?= $this->Form->hidden('examen_id',array('value'=>$pregunta['Examen']['id']))?>
							<?= $this->Form->hidden('pregunta_id',array('value'=>$pregunta['Pregunta']['id']))?>
							<?= $this->Form->hidden('curso_id',array('value'=>$pregunta['Tema']['curso_id']))?>
							<?= $this->Form->submit('Siguiente Pregunta',array('class'=>'btn btn-success','id'=>'submit','style'=>'display:none'))?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	function selectRespuesta(row){
		rows = <?= $i?>;
		for (i=0;i < rows;i++){
			document.getElementById('r_'+i).classList.remove('select');
		}
		document.getElementById('r_'+row).classList.add('select');
		document.getElementById('respuesta').value = row;
		document.getElementById('submit').style.display = '';
	}
</script>
