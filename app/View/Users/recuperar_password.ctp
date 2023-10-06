<div class="row" style="text-align: center">
	<div class="col-md-12">
		<h3><span class="m-t-15" style="font-family: Denso">Actualizar Contraseña</span></h3>
		<p style="font-size: 1.3em;font-family: Denso; text-align: center">Ingresa tu nueva contraseña</p>
	</div>
</div>
<?= $this->Form->create('User')?>
		<div class="row">
			<?= $this->Form->hidden('token',array('value'=>$token))?>
			<?= $this->Form->input('password',array('onchange'=>'javascript:confirmarPassword()','class'=>'form-control','div'=>'col-md-6','label'=>'Contraseña','required'=>true,'type'=>'password'))?>
			<?= $this->Form->input('password_confirmar',array('onchange'=>'javascript:confirmarPassword()','class'=>'form-control','div'=>'col-md-6','label'=>'Confirmar Contraseña','required'=>true,'type'=>'password'))?>
			<div class="col-md-12 error" id="error" style="display:none;">
				Las contraseñas no coinciden
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="text-center">
					<?= $this->Form->submit('Actualizar Contraseña',array('class'=>'btn btn-success btn-block b_r_20 m-t-20','id'=>'submitBtn'))?>
				</div>
			</div>
		</div>
<?= $this->Form->end() ?>

<script>

	function confirmarPassword(){
		if(document.getElementById('UserPassword').value != document.getElementById('UserPasswordConfirmar').value){
			document.getElementById('error').style.display = '';
			document.getElementById('submitBtn').style.display = 'none';
		}else{
			document.getElementById('error').style.display = 'none';
			document.getElementById('submitBtn').style.display = '';
		}
	}

	function showDistribuidores(){
		if(document.getElementById('UserDistribuidor').value == 1){
			document.getElementById('distribuidores_list').style.display='';
			document.getElementById('UserCuentaId').required = "required";
			var dataString = 'region='+ document.getElementById('UserRegion').value;
			$.ajax({
				type: "POST",
				url: '<?php echo Router::url(array("controller" => "distribuidors", "action" => "getByRegion"), TRUE); ?>' ,
				data: dataString,
				cache: false,
				success: function(html) {
					let dropdown = $('#UserCuentaId');

					dropdown.empty();

					dropdown.append('<option selected="true" disabled>Seleccionar Distribuidor</option>');
					dropdown.prop('selectedIndex', 0);

					$.each(html, function (key, entry) {
						dropdown.append($('<option></option>').attr('value', key).text(entry));
					})

				}
			});


		}else{
			document.getElementById('distribuidores_list').style.display='none';
			document.getElementById('UserDistribuidorId').required = false;
		}

	}


</script>
