<?php
echo $this->Html->css(
		array(
			'Nosotros',
		),
		array('inline'=>false)
);
?>
<section class="u-clearfix u-video u-section-1" id="sec-1283">
	<div style="" class="u-align-left u-background-video u-expanded u-left-0">
		<div class="embed-responsive embed-responsive-1">
			<video class="embed-responsive-item" data-autoplay="1" loop="" muted="1" autoplay="autoplay" playsinline="">
				<source src="https://densoautopartes.com/videos/Historia_denso_autopartes.mp4" type="video/mp4">
				<p>Your browser does not support HTML5 video.</p>
			</video>
		</div>
		<div class="u-video-shading"></div>
	</div>
	<div class="u-clearfix u-sheet u-sheet-1"></div>
</section>
<section class="u-align-left u-clearfix u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xl u-container-align-center-xs u-section-2" src="" id="sec-d5eb">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h2 class="m-t-40-minus u-align-center u-text u-text-custom-color-4 u-text-1">¿QUIÉNES SOMOS?</h2>
		<h3 class="m-t-40-minus u-align-center u-text u-text-2"> Somos un fabricante de autopartes de equipo original y de mercado posventa, comprometido con la innovación en tecnología para mejorar el desempeño de los vehículos.</h3>
		<img class="u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/Group1321.png')?>" alt="" data-image-width="544" data-image-height="101">
	</div>
</section>
<section class="u-clearfix u-hidden-sm u-hidden-xs u-image u-section-3" id="sec-fb3d" data-image-width="1728" data-image-height="620">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h2 class="m-t-40-minus u-align-left u-text u-text-body-alt-color u-text-1">Conoce nuestra historia</h2>
		<h3 class="u-custom-font u-text u-text-body-alt-color u-text-2"><b>Calidad, confiabilidad y valor</b>
			<br>
		</h3>
		<p class="u-custom-font u-large-text u-text u-text-body-alt-color u-text-variant u-text-3"> Cada uno de los componentes que fabricamos está diseñado con máxima precisión, siguiendo los estándares del equipo original. Nuestros productos se someten a rigurosas pruebas de seguridad y calidad para garantizar que recibirás un producto de alto rendimiento.</p>
	</div>
</section>
<section class="u-clearfix u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-section-4" id="carousel_4a00" data-image-width="390" data-image-height="661">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h2 class="m-t-40-minus u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-text u-text-body-alt-color u-text-1">Conoce nuestra historia</h2>
		<h3 class="u-align-center-xs u-custom-font u-text u-text-body-alt-color u-text-2"><b>Calidad, confiabilidad y valor</b>
			<br>
		</h3>
		<p class="u-custom-font u-large-text u-text u-text-body-alt-color u-text-variant u-text-3"> Cada uno de los componentes que fabricamos está diseñado con máxima precisión, siguiendo los estándares del equipo original. Nuestros productos se someten a rigurosas pruebas de seguridad y calidad para garantizar que recibirás un producto de alto rendimiento.</p>
	</div>
</section>
<section class="u-clearfix u-section-5" id="sec-5ed8">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h2 class="u-align-center u-text u-text-default u-text-palette-5-dark-1 u-text-1">¿POR QUÉ ELEGIR DENSO?</h2>
		<div class="u-expanded-width u-list u-list-1">
			<div class="u-repeater u-repeater-1">
				<div class="u-container-style u-list-item u-repeater-item">
					<div class="u-container-layout u-similar-container u-container-layout-1">
							<img onmouseover='javascript:show("variedad")' class="u-align-center u-image u-image-contain u-image-default u-opacity u-opacity-80 u-preserve-proportions u-image-1" src="<?= $this->Html->url('/img/Vector-11.png')?>" alt="" data-image-width="150" data-image-height="148">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-2">Variedad de productos</p>
					</div>
				</div>
				<div class="u-container-style u-list-item u-repeater-item">
					<div class="u-container-layout u-similar-container u-container-layout-2">
						<img onmouseover='javascript:show("fiabilidad")' class="u-align-center u-image u-image-contain u-image-default u-opacity u-opacity-80 u-preserve-proportions u-image-2" src="<?= $this->Html->url('/img/Vector4.png')?>" alt="" data-image-width="87" data-image-height="75">
						<p class="u-align-center u-custom-font u-text u-text-default u-text-3">Fiabilidad en autopartes</p>
					</div>
				</div>
				<div class="u-container-style u-list-item u-repeater-item">
					<div class="u-container-layout u-similar-container u-container-layout-3">
						<img onmouseover='javascript:show("innovacion")' class="u-align-center u-image u-image-contain u-image-default u-opacity u-opacity-80 u-preserve-proportions u-image-3" src="<?= $this->Html->url('/img/Vector-21.png')?>" alt="" data-image-width="80" data-image-height="80">
						<p class="u-align-center u-custom-font u-text u-text-default u-text-4">Innovación en tecnología</p>
					</div>
				</div>
			</div>
		</div>
		<script>
			function show(id){
				document.getElementById('variedad').style.display='none';
				document.getElementById('fiabilidad').style.display='none';
				document.getElementById('innovacion').style.display='none';
				document.getElementById(id).style.display='';
			}
		</script>
		<ul class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-text u-text-body-color u-text-5" id="variedad" style="display:none">
			<li>Con calidad de equipo original&nbsp;</li>
			<li>Disponibilidad para las principales marcas de automóviles&nbsp;</li>
			<li>Gama de productos en constante expansión
			</li>
		</ul>
		<ul class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-text u-text-body-color u-text-5" id="fiabilidad" style="display:none">
			<li>Desarrollo de piezas en colaboración con fabricantes de automóviles </li>
			<li>Suministro de repuestos con calidad de equipo original para clientes en Europa y Latinoamérica en mercado posventa</li>
		</ul>
		<ul class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-text u-text-body-color u-text-5" id="innovacion" style="display:none">
			<li>Investigación y desarrollo para mejorar nuestros productos </li>
			<li>Comprometidos con reducir el impacto ambiental de los vehículos</li>
		</ul>
	</div>
</section>
<?php if ($region != "latam"){?>
	<section class="u-align-left u-clearfix u-hidden-sm u-hidden-xs u-image u-section-6" src="" data-image-width="1728" data-image-height="1266" id="sec-81d9">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h3 class="u-text u-text-1">Catálogo de productos</h3>
		<h4 class="u-custom-font u-text u-text-2">Descarga nuestros catálogos y conoce todos los productos DENSO</h4>
		<a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>" class="u-black u-border-2 u-border-black u-btn u-button-style u-hover-black u-text-hover-white u-btn-1">VER CATÁLOGOS</a>
		<p class="u-custom-font u-large-text u-text u-text-custom-color-4 u-text-variant u-text-3"><b>Variedad de productos DENSO</b>
			<br>Innovamos constantemente para mejorar y brindar calidad de equipo original en productos de repuesto como:
		</p>
		<ul class="u-text u-text-custom-color-4 u-text-4">
			<li><b>Bujías</b>
			</li>
			<li><b>Filtros</b>
			</li>
			<li><b>Sensores de Oxígeno</b>
			</li>
			<li><b>Compresores</b>
			</li>
			<li><b>Limpiaparabrisas</b>
			</li>
		</ul>
	</div>
</section>
	<section class="u-align-left u-clearfix u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-section-7" src="" data-image-width="390" data-image-height="998" id="carousel_521d">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h3 class="u-custom-font u-text u-text-1">Catálogo de productos</h3>
		<h4 class="u-custom-font u-text u-text-2">Descarga nuestros catálogos y conoce todos los productos DENSO</h4>
		<a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>" class="u-black u-border-2 u-border-black u-btn u-button-style u-hover-black u-text-hover-white u-btn-1">VER CATÁLOGOS</a>
		<p class="u-custom-font u-large-text u-text u-text-custom-color-4 u-text-variant u-text-3"><b>Variedad de productos DENSO</b>
			<br>Innovamos constantemente para mejorar y brindar calidad de equipo original en productos de repuesto como:
		</p>
		<ul class="u-text u-text-custom-color-4 u-text-4">
			<li><b>Bujías</b>
			</li>
			<li><b>Filtros</b>
			</li>
			<li><b>Sensores de Oxígeno</b>
			</li>
			<li><b>Compresores</b>
			</li>
			<li><b>Limpiaparabrisas</b>
			</li>
		</ul>
	</div>
</section>
<?php } ?>
<?php if ($region == "mx"){?>
	<section class="u-align-center u-border-2 u-border-grey-75 u-clearfix u-image u-section-8" id="sec-a10a" data-image-width="1728" data-image-height="400">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h2 class="u-text u-text-body-alt-color u-text-default u-text-1">DENSO en México</h2>
			<p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-2"> En 1966 llegamos a México, y actualmente contamos con 4 plantas en el país: dos en Nuevo León y dos en Guanajuato. Generamos empleo para más de 10 mil personas y producimos mensualmente más de 7 millones de piezas para el mercado mexicano y el extranjero. </p>
		</div>
	</section>
<?php } ?>
<section class="u-align-center u-clearfix u-hidden-sm u-hidden-xs u-image u-section-9" id="sec-614f" data-image-width="1728" data-image-height="1081">
	<h2 class="u-align-left u-text u-text-body-alt-color u-text-1">Más de 65 años innovando</h2>
	<p class="u-align-left u-large-text u-text u-text-body-alt-color u-text-variant u-text-2"> Estamos comprometidos con el desarrollo de nuevas tecnologías para mejorar el desempeño de las autopartes. Por eso, contamos con más de 43 mil patentes alrededor del mundo, además de que perfeccionamos y fuimos pioneros en múltiples piezas como éstas:</p>
	<div class="u-container-align-center u-container-style u-effect-fade u-expanded-width u-group u-hover-box u-group-1">
		<div class="u-back-slide u-container-layout u-container-layout-1"></div>
		<div class="u-container-layout u-image u-opacity u-opacity-25 u-over-slide u-image-1" data-image-width="4722" data-image-height="1668"></div>
	</div>
</section>
<section class="u-align-center u-clearfix u-section-10 u-hidden-xl u-hidden-xxl u-hidden-lg u-hidden-md" id="carousel_dd9b">
	<div class="u-container-align-center-xs u-container-style u-effect-fade u-expanded-width-xs u-group u-hover-box u-image u-image-contain u-image-1" data-image-width="390" data-image-height="2559">
		<div class="u-back-slide u-container-layout u-container-layout-1"></div>
		<div class="u-container-layout u-image u-image-contain u-opacity u-opacity-25 u-over-slide u-image-2" data-image-width="390" data-image-height="2559"></div>
	</div>
</section>
<?php if ($region == "mx"){?>
<section class="u-clearfix u-image u-section-11" id="sec-2ece" data-image-width="1728" data-image-height="720">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h4 class="u-align-left u-custom-font u-text u-text-body-alt-color u-text-1">¿Te gustaría convertirte en distribuidor oficial de productos DENSO?</h4>
		<p class="u-align-left u-text u-text-body-alt-color u-text-2"> Forma parte de nuestra red de distribuidores y aumenta tu línea de productos con el respaldo y calidad OE.</p>
		<a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'landing'))?>" class="u-border-2 u-border-custom-color-1 u-btn u-button-style u-custom-color-1 u-hover-custom-color-1 u-text-hover-white u-btn-1">Quiero Más información</a>
	</div>
</section>
<?php } ?>
<?= $this->Element('subfooter',array('section_subfooter'=>12))?>
<style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
		background-color: #dc0a34 !important
	}</style>
