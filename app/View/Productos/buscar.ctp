<?php
echo $this->Html->css(
		array(
			'Encontrar',
		),
		array('inline'=>false)
);
$tipos_pieza = array(
	'bujias'=>'Bujías',
	'compresores_ac'=>'Compresor de Aire Acondicionado',
	'filtros_aceite'=>'Filtro de Aceite',
	'filtros_aire'=>'Filtro de Aire',
	'radiadores' => 'Radiadores',
	'sensor_oxigeno'=>'Sensores de Oxígeno',
);
?>


<section class="banner_producto u-align-center u-clearfix u-image u-section-1" src="" data-image-width="1728" data-image-height="823" id="sec-576a">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h1 class="u-align-left u-text u-text-body-alt-color u-text-1">Encuentra tu pieza</h1>
		<div class="u-clearfix u-custom-color-3 u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gutter-0 u-hidden-sm u-hidden-xs u-layout-wrap u-layout-wrap-1">
			<div class="u-layout">
				<div class="u-layout-row">
					<div class="u-container-style u-hidden-xs u-layout-cell u-size-6-lg u-size-6-md u-size-6-sm u-size-6-xs u-layout-cell-1">
						<div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
							<img class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-hidden-sm u-hidden-xs u-image u-image-default u-preserve-proportions u-image-1" src="<?= $this->Html->url('/img/Vector.png')?>" alt="" data-image-width="55" data-image-height="52">
						</div>
					</div>
					<div class="u-container-style u-layout-cell u-size-54-lg u-size-54-md u-size-54-sm u-size-54-xs u-layout-cell-2">
						<div class="u-container-layout u-container-layout-2">
							<h4 class="u-custom-font u-text u-text-2">Seleccione el tipo de pieza que está buscando junto con el año/marca/modelo de su vehículo</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="buscar u-border-2 u-border-grey-25 u-border-no-top u-bottom-left-radius-11 u-bottom-right-radius-11 u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-white u-form-1">
			<?= $this->Form->create('Producto',array('url'=>array('action'=>'buscar_avanzado',$region),'style'=>'padding:15px','source'=>'custom','redirect'=>'true','class'=>'u-clearfix u-form-custom-backend u-form-horizontal u-form-spacing-15 u-inner-form'))?>
			<?php echo $this->Form->hidden('region',array('value'=>$region,'id'=>'pais'));?>
				<div class="u-form-group u-form-select u-label-none u-form-group-1">
					<?php echo $this->Form->input('anio', array(
							'id' =>'anio',
							'options' => $anios,
							'class'=>'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-2',
							'empty' => 'Año',
							'div'=>false,
							'label'=>false,
							'required'=>'required'
					));?>
				</div>
				<div class="u-form-group u-form-select u-label-none u-form-group-2">
					<?php echo $this->Form->input('marca', array(
							'id' =>'marca',
							'class'=>'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-2',
							'empty' => 'Marca',
							'type'=>'select',
							'div'=>false,
							'label'=>false,
							'required'=>'required'
					));?>
				</div>
				<div class="u-form-group u-form-select u-label-none u-form-group-3">
					<?php echo $this->Form->input('modelo', array(
							'id' =>'modelo',
							'class'=>'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-2',
							'empty' => 'Modelo',
							'div'=>false,
							'type'=>'select',
							'label'=>false,
							'required'=>'required'
					));?>
				</div>
				<div class="u-form-group u-form-select u-label-none u-form-group-4">
					<?php echo $this->Form->input('motor', array(
							'id' =>'motor',
							'class'=>'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-2',
							'empty' => 'Motor',
							'div'=>false,
							'label'=>false,
							'type'=>'select',
							'required'=>'required'
					));?>
				</div>
				<div class="u-form-group u-form-select u-label-none u-form-group-5">
					<div class="u-form-select-wrapper">
						<?php echo $this->Form->input('tipo_pieza', array(
								'class'=>'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-2',
								'empty' => 'Todas las Piezas',
								'div'=>false,
								'label'=>false,
								'options'=>$tipos_pieza,
								'type'=>'select',
						));?>
						<svg class="u-caret u-caret-svg u-text-grey-40" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
					</div>
				</div>
				<div class="u-align-left u-form-group u-form-submit u-label-none">
					<input type="submit" value="submit" class="u-form-control-hidden">
					<a href="#" class="u-black u-border-none u-btn u-btn-submit u-button-style u-custom-font u-btn-1">BUSCAR</a>
				</div>
			<?= $this->Form->end();?>
		</div>
	</div>
</section>
<style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
		background-color: #dc0a34 !important
	}</style>
<script type="text/javascript">
	//  $(document).ready(function(){
	//      $("#anio").on('change',function() {
	//        alert('Esto funciona');
	//    })
	//  });
	$(document).ready(function() {

		$("#anio").on('change',function() {
			var pais = $("#pais").val();
			var anio = $(this).val();
			$("#marca").find('option').remove();
			$("#modelo").find('option').remove();
			$("#motor").find('option').remove();
			if (anio) {
				var dataString = 'anio='+ anio + '&pais='+pais;
				$.ajax({
					type: "POST",
					url: '<?php echo Router::url(array("controller" => "productos", "action" => "getMarcas")); ?>' ,
					data: dataString,
					cache: false,
					success: function(html) {
						$.each(html.marcas, function(key, value) {
							$('#marca').append('<option value="' + key + '">' + value + '</option>');
						});
					}
				});
			}
		});

		$("#marca").on('change',function() {
			var pais = $("#pais").val();
			var marca = $(this).val();
			var anio = $("#anio").val();
			$("#modelo").find('option').remove();
			$("#motor").find('option').remove();
			if (marca) {
				var dataString = 'marca='+ marca+'&anio='+anio+'&pais='+pais;
				$.ajax({
					type: "POST",
					url: '<?php echo Router::url(array("controller" => "productos", "action" => "getModelos")); ?>' ,
					data: dataString,
					cache: false,
					success: function(html) {
						$.each(html.modelos, function(key, value) {
							$('#modelo').append('<option value="' + key + '">' + value + '</option>');
						});
					}
				});
			}

		});

		$("#modelo").on('change',function() {
			var pais = $("#pais").val();
			var modelo = $(this).val();
			var marca = $("#marca").val();
			var anio = $("#anio").val();
			$("#motor").find('option').remove();
			if (modelo) {
				var dataString = 'marca='+ marca +'&anio='+ anio +'&modelo='+modelo+'&pais='+pais;
				$.ajax({
					type: "POST",
					url: '<?php echo Router::url(array("controller" => "productos", "action" => "getMotores")); ?>' ,
					data: dataString,
					cache: false,
					success: function(html) {
						$.each(html, function(key, value) {
							$('<option>').val('').text('select');
							$('<option>').val(key).text(value).appendTo($("#motor"));
							$('#motor').trigger("chosen:updated");
						});
					}
				});
			}

		});


	});
</script>
