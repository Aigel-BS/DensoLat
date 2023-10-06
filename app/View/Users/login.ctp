
        <?= $this->Form->create('User')?>
		<div class="form-group">
			<label for="email" class="col-form-label"> E-mail</label>
			<div class="input-group">
				<input type="text" class="form-control b_r_20" id="email" name="data[User][username]" placeholder="E-mail">
				<span class="input-group-addon"><i class="fa fa-envelope text-white"></i></span>
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-form-label"> Contraseña</label>
			<div class="input-group">
				<input type="password" class="form-control b_r_20" id="email" name="data[User][password]" placeholder="Contraseña">
				<span class="input-group-addon"><i class="fa fa-key text-white"></i></span>
			</div>
		</div>
		<div class="row">
			<div class="col-12 m-t-10">
				<?= $this->Html->link('<i class="fa fa-external-link"></i> Inscribirse al programa',array('controller'=>'users','action'=>'registro'),array('escape'=>false,'class'=>'forgottxt_clr'))?>
			</div>
			<div class="col-12 m-t-10">
				<?= $this->Html->link('Olvidé Mi contraseña',array('controller'=>'users','action'=>'recover_password'),array('class'=>'forgottxt_clr'))?>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="text-center">
					<button type="submit" class="btn btn-success btn-block b_r_20 m-t-20">LOG IN</button>
				</div>
			</div>
		</div>
        <?= $this->Form->end() ?>
