<div class="row" style="text-align: center">
	<div class="col-md-12">
		<h3><span class="m-t-15" style="font-family: Denso">Recuperar contraseña</span></h3>
		<p style="font-size: 1.3em;font-family: Denso; text-align: center">Ingresa el correo electrónico con el cual estás registrado, y te enviaremos las instrucciones para que puedas restablecerlo. </p>
	</div>
</div>
        <?= $this->Form->create('User')?>
		<div class="form-group">
			<label for="email" class="col-form-label"> E-mail</label>
			<div class="input-group">
				<input type="text" class="form-control b_r_20" id="email" name="data[User][username]" placeholder="E-mail">
				<span class="input-group-addon"><i class="fa fa-envelope text-white"></i></span>
			</div>
		</div>
		<div class="row">
			<div class="col-12 m-t-10">
				<?= $this->Html->link('Acceder a cuenta',array('controller'=>'users','action'=>'login'),array('class'=>'forgottxt_clr'))?>
			</div>
			<div class="col-12 m-t-10">
				<?= $this->Html->link('Inscribirse al programa',array('controller'=>'users','action'=>'registro'),array('class'=>'forgottxt_clr'))?>
			</div>

		</div>
		<div class="row">
			<div class="col-12">
				<div class="text-center">
					<button type="submit" class="btn btn-success btn-block b_r_20 m-t-20">Recuperar Contraseña</button>
				</div>
			</div>
		</div>
        <?= $this->Form->end() ?>
