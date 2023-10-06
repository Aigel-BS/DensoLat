<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div id="content" class="bg-container">
	<header class="head">
		<div class="main-bar">
			<div class="row no-gutters">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h4 class="nav_top_align">
						<i class="fa fa-plus"></i>
						Agregar Pregunta
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
						<?= $this->Form->create('Pregunta')?>
						<div class="card-body card_block_top_align ">
							<?= $this->Form->input('pregunta',array('type'=>'text','class'=>'form-control','div'=>'col-sm-12'))?>
							<?= $this->Form->input('opciones',array('type'=>'text','class'=>'form-control','div'=>'col-sm-12'))?>
							<?= $this->Form->input('respuesta',array('type'=>'text','class'=>'form-control','div'=>'col-sm-12'))?>
							<?= $this->Form->input('imagen',array('type'=>'text','class'=>'form-control','div'=>'col-sm-12'))?>
							<?= $this->Form->input('puntos',array('type'=>'text','class'=>'form-control','div'=>'col-sm-4'))?>
							<?= $this->Form->input('tema_id',array('type'=>'text','class'=>'form-control','div'=>'col-sm-4'))?>
							<?= $this->Form->input('examen_id',array('type'=>'text','class'=>'form-control','div'=>'col-sm-4'))?>
						</div>
						<div class="card-footer bg-white">
							<?= $this->Form->submit('Guardar',array('class'=>'btn btn-success'))?>
						</div>
						<?= $this->Form->end()?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
