<?php
	$regiones = array(
		'co'=>'Colombia',
		'cl'=>'Chile',
		'ec'=>'Ecuador',
		'mx'=>'México',
		'sv'=>'El Salvador',
		'ar'=>'Argentina',
		'bs'=>'Bahamas',
		'bb'=>'Barbados',
		'bz'=>'Belice',
		'bo'=>'Bolivia',
		'cr'=>'Costa Rica',
		'do'=>'República Dominicana',
		'gt'=>'Guatemala',
		'hn'=>'Honduras',
		'ni'=>'Nicaragua',
		'pa'=>'Panamá',
		've'=>'Venezuela',
		'py'=>'Paraguay',
		'pe'=>'Perú',
		'pr'=>'Puerto Rico',
		'tt'=>'Trinidad y Tobago',
		'uy'=>'Uruguay'
	);

	ksort($regiones);

	$this->Html->css(
		array(
			'/vendors/chosen/css/chosen',
		),
		array('inline'=>false)
	);

	$this->Html->script(
		array(
			'/vendors/chosen/js/chosen.jquery',
		),
		array('inline'=>false)
	)
?>
<div class="row" style="text-align: center">
	<div class="col-md-12">
		<h3><span class="m-t-15" style="font-family: Denso">Registrarse al programa</span></h3>
		<p style="font-size: 1.3em;font-family: Denso; text-align: center">Completa el siguiente formulario para obtener un usuario y así puedas acceder al contenido de capacitación DENSO. Este programa es gratuito</p>
	</div>
</div>
<?= $this->Form->create('User')?>
		<div class="row">
			<?= $this->Form->input('nombre',array('class'=>'form-control','div'=>'col-md-6','label'=>'Nombre Completo','required'=>true))?>
			<?= $this->Form->input('username',array('onchange'=>'javascript:validarUsuario(this)','class'=>'form-control','div'=>'col-md-6','label'=>'Correo Electrónico','type'=>'email','required'=>true))?>
			<div class="col-md-12 error" id="error_usuario" style="display:none;">
				Este usuario ya se encuentra registrado en la base de datos. Favor de probar con otro.
			</div>
			<?= $this->Form->input('telefono',array('class'=>'form-control','div'=>'col-md-6','label'=>'Teléfono de Contacto','type'=>'phone','required'=>true))?>
			<?= $this->Form->input('region',array('class'=>'form-control','div'=>'col-md-6','label'=>'País','type'=>'select','onchange'=>'javascript:showDistribuidores()','options'=>$regiones,'empty'=>'Seleccionar País','required'=>true))?>
			<?= $this->Form->input('ciudad',array('class'=>'form-control','div'=>'col-md-6','label'=>'Ciudad','type'=>'text','required'=>true))?>
			<?= $this->Form->input('distribuidor',array('class'=>'form-control','div'=>'col-md-6','label'=>'¿Viene remitido de algún distribuidor oficial en su país?','onchange'=>'javascript:showDistribuidores()','type'=>'select','options'=>array(0=>'No',1=>'Si'),'required'=>true))?>
			<?= $this->Form->input('cuenta_id',array('class'=>'form-control','div'=>array('class'=>'col-md-6','id'=>'distribuidores_list','style'=>'display:none'),'label'=>'Distribuidor','type'=>'select','empty'=>'Seleccionar Distribuidor'))?>
		</div>

		<div class="row">
			<?= $this->Form->input('password',array('onchange'=>'javascript:confirmarPassword()','class'=>'form-control','div'=>'col-md-6','label'=>'Contraseña','required'=>true,'type'=>'password'))?>
			<?= $this->Form->input('password_confirmar',array('onchange'=>'javascript:confirmarPassword()','class'=>'form-control','div'=>'col-md-6','label'=>'Confirmar Contraseña','required'=>true,'type'=>'password'))?>
			<div class="col-md-12 error" id="error" style="display:none;">
				Las contraseñas no coinciden
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="text-center">
					<?= $this->Form->submit('Inscribirse',array('class'=>'btn btn-success btn-block b_r_20 m-t-20','id'=>'submitBtn'))?>
				</div>
			</div>
		</div>
<?= $this->Form->end() ?>

<div class="row">
	<div class="col-12 m-t-10">
		<?= $this->Html->link('Ya tengo cuenta',array('controller'=>'users','action'=>'login'),array('class'=>'forgottxt_clr'))?>
	</div>
</div>

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

	function validarUsuario(input){

		var dataString = 'username='+ input.value;
		$.ajax({
			type: "POST",
			url: '<?php echo Router::url(array("controller" => "users", "action" => "existe"), TRUE); ?>' ,
			data: dataString,
			cache: false,
			success: function(html) {
				if(html > 0){
					document.getElementById('error_usuario').style.display = '';
					document.getElementById('submitBtn').style.display = 'none';
				}else{
					document.getElementById('error_usuario').style.display = 'none';
					document.getElementById('submitBtn').style.display = '';
				}
			}
		});


	}

	function showDistribuidores(){
        //alert(document.getElementById('UserRegion').value);
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
			document.getElementById('UserCuentaId').required = false;
		}

	}


</script>
