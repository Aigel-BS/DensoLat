<?php
echo $this->Html->css(
		array(
			'Compresores',
		),
		array('inline'=>false)
);
?>

<section class="banner_producto u-align-center u-clearfix u-image u-section-1" src="" data-image-width="1728" data-image-height="534" id="sec-576a">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h1 class="u-align-left u-text u-text-body-alt-color u-text-1">Compresores de aire acondicionado</h1>
		<p class="u-align-left u-custom-font u-large-text u-text u-text-body-alt-color u-text-variant u-text-2"> El diseño de los compresores DENSO mejora el rendimiento del aire acondicionado y mantiene el correcto funcionamiento del sistema.</p>
	</div>
</section>
<?= $this->Element('forma_busqueda',array('region'=>$region))?>

<section class="u-clearfix u-section-4" id="sec-5ed8">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h2 class="u-align-center u-text u-text-default u-text-palette-5-dark-1 u-text-1"> En los compresores de aire acondicionado DENSO encontrarás:</h2>
		<div class="u-expanded-width u-list u-list-1">
			<div class="u-repeater u-repeater-1">
				<div class="u-container-style u-list-item u-repeater-item">
					<div class="u-container-layout u-similar-container u-container-layout-1">
						<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="<?= $this->Html->url('/img/Vector2.png')?>" alt="" data-image-width="150" data-image-height="144">
						<p class="u-align-center u-custom-font u-text u-text-default u-text-2">Alto Rendimiento</p>
					</div>
				</div>
				<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
					<div class="u-container-layout u-similar-container u-container-layout-2">
						<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-2" src="<?= $this->Html->url('/img/Vector-2.png')?>" alt="" data-image-width="76" data-image-height="76">
						<p class="u-align-center u-custom-font u-text u-text-default u-text-3">Fácil instalación</p>
					</div>
				</div>
				<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
					<div class="u-container-layout u-similar-container u-container-layout-3">
						<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-3" src="<?= $this->Html->url('/img/Vector-1.png')?>" alt="" data-image-width="74" data-image-height="74">
						<p class="u-align-center u-custom-font u-text u-text-default u-text-4">Funcionamiento silencioso</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->Element('cta_compra') ?>

<section class="u-align-left u-clearfix u-hidden-sm u-hidden-xs u-image u-section-5" src="" data-image-width="1634" data-image-height="745" id="sec-81d9">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h3 class="u-text u-text-body-alt-color u-text-1"> El compresor es el corazón del sistema de aire acondicionado</h3>
		<p class="u-custom-font u-large-text u-text u-text-body-alt-color u-text-variant u-text-2">
			<span style="font-weight: 700;">¿Cuál es su importancia?</span>
			<br>
			<br>Es el encargado de comprimir el gas refrigerante e impulsarlo al sistema de aire acondicionado. El compresor succiona el gas refrigerante del evaporador a baja presión y temperatura. Posteriormente, lo comprime para aumentar la presión y temperatura del gas, y enviarlo al condensador.
		</p>
	</div>
</section>
<section class="u-align-left u-clearfix u-hidden-sm u-hidden-xs u-image u-section-6" src="" data-image-width="1602" data-image-height="560" id="sec-06c5">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h3 class="u-align-left u-text u-text-body-alt-color u-text-1">Las grandes marcas confían en DENSO</h3>
		<p class="u-align-left u-text u-text-body-alt-color u-text-2">
          <span style="font-weight: 700;">
            <span style="font-weight: 400;"></span>
          </span>
			<span style="font-weight: 700;">Trabajamos directamente con las armadoras de automóviles para diseñar un sistema de aire acondicionado específico para cada vehículo.<span style="font-weight: 700;"></span>
          </span>Con <span style="font-weight: 700;">DENSO</span> tendrás la garantía de obtener una unidad fabricada por el proveedor de equipos originales. Nadie conoce mejor estas piezas que <span style="font-weight: 700;">DENSO</span>, porque nosotros las diseñamos.
		</p>
	</div>
</section>
<section class="u-align-left u-clearfix u-hidden-sm u-hidden-xs u-image u-section-7" src="" data-image-width="1727" data-image-height="721" id="sec-3198">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h3 class="m-t-40-minus u-text u-text-1"> El compresor de aire acondicionado First Time Fit de DENSO</h3>
		<p class="m-t-40-minus u-custom-font u-large-text u-text u-text-variant u-text-2">
			<span style="font-weight: 700;"></span>te brinda una mayor durabilidad, aumento del rendimiento, instalación a la primera y el respaldo de ser equipo original diseñado desde la fabricación del vehículo.
		</p>
		<h3 class="m-t-40-minus u-text u-text-3"> ¿Dónde comprar Compresores de Aire Acondicionado DENSO?&nbsp;</h3>
		<p class="m-t-40-minus u-custom-font u-large-text u-text u-text-variant u-text-4">
			<span style="font-weight: 700;"></span>Puedes encontrarlos con alguno de nuestros distribuidores.
		</p>
		<a href="<?= $this->Html->url(array('controller'=>'distribuidors','action'=>'donde_comprar',$region))?>" class="u-black u-border-2 u-border-black u-btn u-button-style u-hover-black u-text-hover-white u-btn-1">ENCONTRAR UN DISTRIBUIDOR</a>
	</div>
</section>
<section class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-section-8" src="" data-image-width="390" data-image-height="846" id="sec-859a">
	<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
		<h4 class="u-align-left-xs u-text u-text-body-alt-color u-text-1"> El compresor es el corazón del sistema de aire acondicionado</h4>
		<p class="u-align-left-xs u-text u-text-body-alt-color u-text-2">
          <span style="font-weight: 400;">
            <span style="font-weight: 700;"> ¿Cuál es su importancia?&nbsp;</span>
            <br>Es el encargado de comprimir el gas refrigerante e impulsarlo al sistema de aire acondicionado. El compresor succiona el gas refrigerante del evaporador a baja presión y temperatura. Posteriormente, lo comprime para aumentar la presión y temperatura del gas, y enviarlo al condensador.
          </span>
		</p>
	</div>
</section>
<section class="m-t-40-minus u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-section-9" src="" data-image-width="390" data-image-height="781" id="sec-4bf3">
	<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
		<h4 class="u-align-left-xs u-text u-text-body-alt-color u-text-1"> Las grandes marcas confían en DENSO</h4>
		<p class="u-align-left-xs u-text u-text-body-alt-color u-text-2">
			<span style="font-weight: 700;"></span>
			<span style="font-weight: 700;">Trabajamos directamente con las armadoras de automóviles para diseñar un sistema de aire acondicionado específico para cada vehículo.&nbsp;</span>
			<br>
			<br>Con <span style="font-weight: 700;">DENSO</span> tendrás la garantía de obtener una unidad fabricada por el proveedor de equipos originales. Nadie conoce mejor estas piezas que <span style="font-weight: 700;">DENSO</span>, porque nosotros las diseñamos.
		</p>
	</div>
</section>
<section class="m-t-40-minus u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-section-10" src="" data-image-width="390" data-image-height="944" id="sec-aa89">
	<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
		<h4 class="u-align-left-xs u-text u-text-1"> El compresor de aire acondicionado First Time Fit de DENSO</h4>
		<p class="u-align-left-xs u-text u-text-2">
			<span style="font-weight: 700;"></span>te brinda una mayor durabilidad, aumento del rendimiento, instalación a la primera y el respaldo de ser equipo original diseñado desde la fabricación del vehículo.
		</p>
		<h4 class="u-align-left-xs u-text u-text-3"> ¿Dónde comprar Compresores de Aire Acondicionado DENSO?&nbsp;</h4>
		<a href="<?= $this->Html->url(array('controller'=>'distribuidors','action'=>'donde_comprar',$region))?>" class="u-border-2 u-border-black u-btn u-button-style u-custom-color-4 u-hover-custom-color-4 u-text-hover-white u-btn-1">encontrar un distribuidor</a>
	</div>
</section>
<?= $this->Element('subfooter',array('section_subfooter'=>11))?>
<style class="u-overlap-style">
	.u-overlap:not(.u-sticky-scroll) .u-header {
		background-color: #dc0a34 !important
	}
</style>
