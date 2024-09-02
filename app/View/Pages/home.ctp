<?php
	echo $this->Html->css(
		array(
			'HOME',
		),
		array('inline'=>false,'media'=>'screen')
	);
$paises = array(
		'ar'=>'Argentina',
		'bb'=>'Barbados',
		'bo'=>'Bolivia',
		'bs'=>'Bahamas',
		'bz'=>'Belice',
		'cl'=>'Chile',
		'co'=>'Colombia',
		'cr'=>'Costa Rica',
		'do'=>'República Dominicana',
		'ec'=>'Ecuador',
		'gt'=>'Guatemala',
		'hn'=>'Honduras',
		'mx'=>'México',
		'ni'=>'Nicaragua',
		'pa'=>'Panamá',
		'pe'=>'Perú',
		'pr'=>'Puerto Rico',
		'py'=>'Paraguay',
		'sv'=>'El Salvador',
		'tt'=>'Trinidad y Tobago',
		'uy'=>'Uruguay',
		've'=>'Venezuela',
);
echo $this->Html->script(
		array(
				'https://polyfill.io/v3/polyfill.min.js?features=default',
				'https://ajax.googleapis.com/ajax/libs/handlebars/4.7.7/handlebars.min.js',
				'https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js'
		),
		array('inline'=>false)
);
?>
<style>
	.col-30 {
		width: 30%;
		float: left;
	}
	.col-40 {
		width: 40%;
		float: left;
	}
	.col-60 {
		width: 60%;
		float: left;
	}
</style>

<section class="u-hidden-xs u-hidden-sm" style="text-align: center">
    <video width="420" autoplay muted loop style="max-height:90vh;width: 100%">
        <source src="<?= $this->Html->url('/videos/VideoDenso_HD_03_espanol.mp4')?>" type="video/mp4">
    </video>
</section>

<section class="u-hidden-md u-hidden-lg u-hidden-xl u-hidden-xxl">
    <video width="420" autoplay muted loop style="max-height:90vh;width: 100%">
        <source src="<?= $this->Html->url('/videos/VideoDenso_Vertical_03_espanol.mp4')?>" type="video/mp4">
    </video>
</section>

<?php if($region == 'mx'){?>
	<section class="u-carousel u-slide u-block-584d-1" id="carousel_78ac" data-interval="5000" data-u-ride="carousel">
		<ol class="u-carousel-indicators u-block-584d-5">
			<li data-u-target="#carousel_78ac" class="u-active u-active-custom-color-1 u-grey-30 u-shape-circle"
				data-u-slide-to="0" style="width: 8px; height: 8px;"></li>
			<li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle" data-u-slide-to="1"
				style="width: 8px; height: 8px;"></li>
			<li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle"
				style="width: 8px; height: 8px;" data-u-slide-to="2"></li>
		</ol>
		<div class="u-carousel-inner" role="listbox">
			<div class="u-active u-align-center u-carousel-item u-clearfix u-image u-section-1-1" src=""
				 data-image-width="1728" data-image-height="972">
				<div class="u-clearfix u-sheet u-sheet-1">
					<div class="u-clearfix u-group-elements u-valign-middle u-group-elements-1">
						<h2 class="u-align-right u-custom-font u-subtitle u-text u-text-1">Autopartes globalmente
							reconocidas para<br>
						</h2>
						<h2 class="negativo u-align-right u-custom-font u-subtitle u-text u-text-white u-text-2">mecánicos
							expertos<br>
						</h2>
					</div>
					<img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/FIRMA1.png')?>" alt=""
						 data-image-width="371" data-image-height="134">
				</div>
			</div>
			<div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-2" src=""
				 data-image-width="1245" data-image-height="700">
				<div class="u-clearfix u-sheet u-sheet-1">
					<h2 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-subtitle u-text u-text-1">
						Somos una<br>compañía global
					</h2>
					<h3 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-text u-text-2">
						enfocada en cr<span style="font-weight: 700;"></span>ear productos con tecnología avanzada,&nbsp;capaces
						de mover al mundo.
					</h3>
				</div>
			</div>
			<div class="u-align-center u-carousel-item u-clearfix u-image u-section-1-3" src="" data-image-width="1728"
				 data-image-height="940">
				<div class="u-clearfix u-sheet u-sheet-1">
					<img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/Los-Expertos-Eligen-Denso.png')?>"
						 alt="" data-image-width="800" data-image-height="392">
					<a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>"
					   class="u-align-right u-black u-border-none u-btn u-button-style u-hover-black u-btn-1">ver
						catálogos</a>
				</div>
			</div>
		</div>
		<a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-584d-3"
		   href="#carousel_78ac" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
					  d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
					  d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
			<span class="sr-only">
          <svg viewBox="0 0 129 129"><path
					  d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
					  d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
		</a>
		<a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-584d-6"
		   href="#carousel_78ac" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
					  d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
					  d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
			<span class="sr-only">
          <svg viewBox="0 0 129 129"><path
					  d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
					  d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
		</a>
	</section>
	<?= $this->Element('forma_busqueda',array('region'=>$region))?>
	<section class="u-clearfix u-section-4" id="sec-28ea">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h2 class="u-align-center u-text u-text-default u-text-1">BUJÍAS Y REPUESTOS DE CALIDAD</h2>
			<div class="u-clearfix u-expanded-width u-gutter-20 u-layout-spacing-left-right u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-col">
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-1"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'bujias',$region))?>">
									<div class="u-container-layout u-container-layout-1"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-2"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'filtros',$region))?>">
									<div class="u-container-layout u-container-layout-2"></div>
								</div>
							</div>
						</div>
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-3"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'sensores_oxigeno',$region))?>">
									<div class="u-container-layout u-container-layout-3"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-4"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'compresores',$region))?>">
									<div class="u-container-layout u-valign-top u-container-layout-4"></div>
								</div>
							</div>
						</div>
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-5"
									 data-image-width="697" data-image-height="285">
									<div class="u-container-layout u-container-layout-5"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-6"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>">
									<div class="u-container-layout u-container-layout-6"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</section>
	<section class="u-align-left u-clearfix u-hidden-xs u-image u-section-5" src="" data-image-width="1728"
			 data-image-height="669" id="sec-ad89">
		<h3 class="u-align-left-sm u-align-left-xs u-align-right-lg u-align-right-md u-align-right-xl u-hidden-xs u-text u-text-default-lg u-text-default-xl u-text-white u-text-1">
			75 años innovando en<br>tecnología automotriz
		</h3>
		<a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
		   class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">CONOCE
			MÁS</a>
	</section>
	<section
			class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-image-contain u-section-6"
			src="" data-image-width="390" data-image-height="665" id="sec-e102">
		<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
			<h3 class="u-text u-text-default u-text-white u-text-1">75 años innovando en tecnología automotriz</h3>
			<a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
			   class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">conoce
				más</a>
		</div>
	</section>
	<section class="u-align-center u-clearfix u-section-7" id="sec-21f2">
		<div class="u-align-left u-clearfix u-sheet u-sheet-1">
			<h3 class="u-align-center u-text u-text-custom-color-4 u-text-default u-text-1">NUESTROS PRODUCTOS CUENTAN
				CON: </h3>
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-1"><img
										src="<?= $this->Html->url('/img/image19.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-2">Calidad, garantía y durabilidad</p>
						</div>
					</div>
					<div class="u-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-2"><img
										src="<?= $this->Html->url('/img/image17.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-3">Amplia cobertura en marcas y modelos</p>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-3"><img
										src="<?= $this->Html->url('/img/image18.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-4">Fácil instalación</p>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-4"><img
										src="<?= $this->Html->url('/img/image16.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-5">Seguridad, desempeño y cuidado
								ambiental</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="u-align-left u-clearfix u-hidden-xs u-image u-image-contain u-section-8" src="" data-image-width="1728"
			 data-image-height="440" id="sec-46e8">
		<h4 class="u-text u-text-custom-color-4 u-text-default u-text-1">Si buscas algún producto en especial</h4>
		<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
		   class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
			aquí</a>
		<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
		   class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-hover-custom-color-1 u-text-hover-white u-btn-2">Encuéntralo
			aquí</a>
	</section>
	<section
			class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-section-9"
			src="" data-image-width="390" data-image-height="410" id="sec-e0c7">
		<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
			<h4 class="u-align-left-xs u-text u-text-default u-text-1">Si buscas algún producto en especial</h4>
			<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
			   class="u-black u-border-none u-btn u-button-style u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
				aquí</a>
		</div>
	</section>
	<section class="u-clearfix u-container-align-center-xl u-section-10" id="carousel_73c2">
		<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
			<h2 class="u-align-center u-text u-text-body-color u-text-default u-text-1">ENCUENTRA TU DISTRIBUIDOR MÁS
				CERCANO</h2>
			<p class="u-align-center u-custom-font u-text u-text-default u-text-2">¡Sólo selecciona tu estado y conoce la
				lista de nuestros distribuidores!</p>
			<div class="u-clearfix u-expanded-width u-hidden-sm u-hidden-xs u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-row">
						<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
							<div class="u-container-layout u-valign-bottom-xl u-container-layout-1">
								<p class="u-custom-font u-text u-text-custom-color-4 u-text-3">
									<?php
									for ($i=0;$i<(sizeof($distribuidores)/2);$i++){
										echo $this->Html->link($distribuidores[$i]['Distribuidor']['estado'],array('controller'=>'distribuidors','action'=>'por_estado',$distribuidores[$i]['Distribuidor']['estado'],$region),array('style'=>'color:#5f6367'))."<br>";
									}
									?>
								</p>
								<p class="u-custom-font u-text u-text-custom-color-4 u-text-4">
									<?php
									for ($i=(sizeof($distribuidores)/2)+1;$i<sizeof($distribuidores);$i++){
										echo $this->Html->link($distribuidores[$i]['Distribuidor']['estado'],array('controller'=>'distribuidors','action'=>'por_estado',$distribuidores[$i]['Distribuidor']['estado'],$region),array('style'=>'color:#5f6367'))."<br>";
									}
									?>
								</p>
							</div>
						</div>
						<div class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-30 u-image-1"
							 data-image-width="908" data-image-height="573">
							<div class="u-container-layout u-container-layout-2"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="buscar u-absolute-hcenter-lg u-absolute-hcenter-md u-absolute-hcenter-xl u-border-2 u-border-grey-25 u-border-no-left u-border-no-right u-border-no-top u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-expanded-width-sm u-expanded-width-xs u-form u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-form-1">
					<div class="u-form-group u-form-select u-label-none u-form-group-1">
						<div class="u-form-select-wrapper">
							<?php
								$estados_movil = array();
								foreach ($distribuidores as $estado) {
									$estados_movil[$estado['Distribuidor']['estado']] = $estado['Distribuidor']['estado'];
								}
								echo $this->Form->input('estado',array('onchange'=>'javascript:buscar_estado(this.value,"mx")','empty'=>'Seleccionar Estado','type'=>'select','options'=>$estados_movil,'class'=>'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-1'));
							?>
						</div>
					</div>
			</div>

			<img class="u-align-center-sm u-align-center-xs u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-image-default u-image-2"
				 src="<?= $this->Html->url('/img/Group107.png')?>" alt="" data-image-width="908" data-image-height="573">
		</div>
	</section>
	<section class="u-clearfix u-custom-color-2 u-section-11" id="sec-dfbb">
		<div class="u-clearfix u-sheet u-sheet-1">
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-1">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-1"
								 src="<?= $this->Html->url('/img/Group268.png')?>" alt="" data-image-width="166" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-1">
								DONDE COMPRAR</p>
						</div>
					</div>
					<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-2">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-2"
								 src="<?= $this->Html->url('/img/Group99.png')?>" alt="" data-image-width="165" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-2">
								BUSCAR MI PIEZA</p>
						</div>
					</div>
					<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-3">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-3"
								 src="<?= $this->Html->url('/img/Group100.png')?>" alt="" data-image-width="165" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'landing','controller'=>'pages',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-3">
								QUIERO SER DISTRIBUIDOR</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php }else if ($region == 'co'){?>
	<section class="u-carousel u-slide u-block-584d-1" id="carousel_78ac" data-interval="5000" data-u-ride="carousel">
		<ol class="u-carousel-indicators u-block-584d-5">
			<li data-u-target="#carousel_78ac" class="u-active u-active-custom-color-1 u-grey-30 u-shape-circle"
                data-u-slide-to="0" style="width: 8px; height: 8px;"></li>
			<li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle" data-u-slide-to="1"
				style="width: 8px; height: 8px;"></li>
			<li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle"
				style="width: 8px; height: 8px;" data-u-slide-to="2"></li>
            <li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle"
				style="width: 8px; height: 8px;" data-u-slide-to="3"></li>
		</ol>
		<div class="u-carousel-inner" role="listbox">
			<div class="u-active u-align-center u-carousel-item u-clearfix u-image u-section-1-1" src=""
				 data-image-width="1728" data-image-height="972">
				<div class="u-clearfix u-sheet u-sheet-1">
					<div class="u-clearfix u-group-elements u-valign-middle u-group-elements-1">
						<h2 class="u-align-right u-custom-font u-subtitle u-text u-text-1">Autopartes globalmente
							reconocidas para<br>
						</h2>
						<h2 class="negativo u-align-right u-custom-font u-subtitle u-text u-text-white u-text-2">mecánicos
							expertos<br>
						</h2>
					</div>
					<img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/FIRMA1.png')?>" alt=""
						 data-image-width="371" data-image-height="134">
				</div>
			</div>
			<div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-2" src=""
				 data-image-width="1245" data-image-height="700">
				<div class="u-clearfix u-sheet u-sheet-1">
					<h2 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-subtitle u-text u-text-1">
						Somos una<br>compañía global
					</h2>
					<h3 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-text u-text-2">
						enfocada en cr<span style="font-weight: 700;"></span>ear productos con tecnología avanzada,&nbsp;capaces
						de mover al mundo.
					</h3>
				</div>
			</div>
			<div class="u-align-center u-carousel-item u-clearfix u-image u-section-1-3" src="" data-image-width="1728"
				 data-image-height="940">
				<div class="u-clearfix u-sheet u-sheet-1">
					<img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/Los-Expertos-Eligen-Denso.png')?>"
						 alt="" data-image-width="800" data-image-height="392">
					<a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>"
					   class="u-align-right u-black u-border-none u-btn u-button-style u-hover-black u-btn-1">ver
						catálogos</a>
				</div>
			</div>
            <div class="u-align-center u-carousel-item u-clearfix u-image u-section-1-3" src="" data-image-width="1728"
                 data-image-height="940" style="height:623px;background-image: url(<?= $this->Html->url('/img/5_vasos_banner.png')?>)">
            </div>
		</div>
		<a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-584d-3"
		   href="#carousel_78ac" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
					  d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
					  d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
			<span class="sr-only">
          <svg viewBox="0 0 129 129"><path
					  d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
					  d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
		</a>
		<a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-584d-6"
		   href="#carousel_78ac" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
					  d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
					  d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
			<span class="sr-only">
          <svg viewBox="0 0 129 129"><path
					  d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
					  d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
		</a>
	</section>
	<?= $this->Element('forma_busqueda',array('region'=>$region))?>
	<section class="u-clearfix u-section-4" id="sec-28ea">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h2 class="u-align-center u-text u-text-default u-text-1">BUJÍAS Y REPUESTOS DE CALIDAD</h2>
			<div class="u-clearfix u-expanded-width u-gutter-20 u-layout-spacing-left-right u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-col">
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-1"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'bujias',$region))?>">
									<div class="u-container-layout u-container-layout-1"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-2"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'filtros',$region))?>">
									<div class="u-container-layout u-container-layout-2"></div>
								</div>
							</div>
						</div>
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-3"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'sensores_oxigeno',$region))?>">
									<div class="u-container-layout u-container-layout-3"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-4"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'compresores',$region))?>">
									<div class="u-container-layout u-valign-top u-container-layout-4"></div>
								</div>
							</div>
						</div>
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-5"
									 data-image-width="697" data-image-height="285">
									<div class="u-container-layout u-container-layout-5"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-6"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>">
									<div class="u-container-layout u-container-layout-6"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</section>
	<section class="u-align-left u-clearfix u-hidden-xs u-image u-section-5" src="" data-image-width="1728"
			 data-image-height="669" id="sec-ad89">
		<h3 class="u-align-left-sm u-align-left-xs u-align-right-lg u-align-right-md u-align-right-xl u-hidden-xs u-text u-text-default-lg u-text-default-xl u-text-white u-text-1">
			75 años innovando en<br>tecnología automotriz
		</h3>
		<a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
		   class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">CONOCE
			MÁS</a>
	</section>
	<section
			class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-image-contain u-section-6"
			src="" data-image-width="390" data-image-height="665" id="sec-e102">
		<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
			<h3 class="u-text u-text-default u-text-white u-text-1">75 años innovando en tecnología automotriz</h3>
			<a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
			   class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">conoce
				más</a>
		</div>
	</section>
	<section class="u-align-center u-clearfix u-section-7" id="sec-21f2">
		<div class="u-align-left u-clearfix u-sheet u-sheet-1">
			<h3 class="u-align-center u-text u-text-custom-color-4 u-text-default u-text-1">NUESTROS PRODUCTOS CUENTAN
				CON: </h3>
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-1"><img
										src="<?= $this->Html->url('/img/image19.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-2">Calidad, garantía y durabilidad</p>
						</div>
					</div>
					<div class="u-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-2"><img
										src="<?= $this->Html->url('/img/image17.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-3">Amplia cobertura en marcas y modelos</p>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-3"><img
										src="<?= $this->Html->url('/img/image18.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-4">Fácil instalación</p>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-4"><img
										src="<?= $this->Html->url('/img/image16.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-5">Seguridad, desempeño y cuidado
								ambiental</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="u-align-left u-clearfix u-hidden-xs u-image u-image-contain u-section-8" src="" data-image-width="1728"
			 data-image-height="440" id="sec-46e8">
		<h4 class="u-text u-text-custom-color-4 u-text-default u-text-1">Si buscas algún producto en especial</h4>
		<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
		   class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
			aquí</a>
		<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
		   class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-hover-custom-color-1 u-text-hover-white u-btn-2">Encuéntralo
			aquí</a>
	</section>
	<section
			class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-section-9"
			src="" data-image-width="390" data-image-height="410" id="sec-e0c7">
		<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
			<h4 class="u-align-left-xs u-text u-text-default u-text-1">Si buscas algún producto en especial</h4>
			<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
			   class="u-black u-border-none u-btn u-button-style u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
				aquí</a>
		</div>
	</section>
	<section class="u-clearfix u-container-align-center-xl u-section-10" id="carousel_73c2">
		<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
			<h2 class="u-align-center u-text u-text-body-color u-text-default u-text-1">ENCUENTRA TU TIENDA / DISTRIBUIDOR MÁS
				CERCANO</h2>
			<p class="u-align-center u-custom-font u-text u-text-default u-text-2">¡Sólo selecciona tu estado y conoce la
				lista de nuestros distribuidores!</p>
			<div class="u-clearfix u-expanded-width u-hidden-sm u-hidden-xs u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-row">
						<div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
							<div class="u-container-layout u-valign-bottom-xl u-container-layout-1">
								<?php
								echo $this->Html->link("Tiendas Certificadas",array('action'=>'index','controller'=>'distribuidoresCertificados',$region),array('style'=>'color:black'));
								foreach ($distribuidores_marca as $distribuidor) {?>
									<p><?= $this->Html->link($distribuidor['Distribuidor']['nombre'],array('action'=>'por_marca','controller'=>'distribuidors',$distribuidor['Distribuidor']['nombre'],$region),array('style'=>'color:black'))?></p>
								<?php } ?>
							</div>
						</div>
						<div class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-40 u-image-1"
							 data-image-width="908" data-image-height="573">
							<?= $this->Element('map')?>
						</div>
					</div>
				</div>
			</div>
			<div class="buscar u-absolute-hcenter-lg u-absolute-hcenter-md u-absolute-hcenter-xl u-border-2 u-border-grey-25 u-border-no-left u-border-no-right u-border-no-top u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-expanded-width-sm u-expanded-width-xs u-form u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-form-1">
					<div class="u-form-group u-form-select u-label-none u-form-group-1">
						<div class="u-form-select-wrapper">
							<?php
								$marcas = array();
								foreach ($distribuidores_marca as $distribuidor) {
									$marcas[$distribuidor['Distribuidor']['nombre']] = $distribuidor['Distribuidor']['nombre'];
								}
								echo $this->Form->input('distribuidor', array('onchange' => 'javascript:buscar_marca(this.value,"co")', 'empty' => 'Seleccionar Distribuidor', 'type' => 'select', 'options' => $marcas, 'class' => 'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-1'));
							?>
						</div>
					</div>
			</div>
			<img class="u-align-center-sm u-align-center-xs u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-image-default u-image-2"
				 src="<?= $this->Html->url('/img/colombia.png')?>" alt="" data-image-width="908" data-image-height="573">
		</div>
	</section>
	<section class="u-clearfix u-custom-color-2 u-section-11" id="sec-dfbb">
		<div class="u-clearfix u-sheet u-sheet-1">
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-1">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-1"
								 src="<?= $this->Html->url('/img/Group268.png')?>" alt="" data-image-width="166" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-1">
								DONDE COMPRAR</p>
						</div>
					</div>
					<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-2">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-2"
								 src="<?= $this->Html->url('/img/Group99.png')?>" alt="" data-image-width="165" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-2">
								BUSCAR MI PIEZA</p>
						</div>
					</div>
					<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-3">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-3"
								 src="<?= $this->Html->url('/img/Group100.png')?>" alt="" data-image-width="165" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'landing','controller'=>'pages',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-3">
								QUIERO SER DISTRIBUIDOR</p	>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php }else if ($region == 'cl'){?>
	<section class="u-carousel u-slide u-block-584d-1" id="carousel_78ac" data-interval="5000" data-u-ride="carousel">
		<ol class="u-carousel-indicators u-block-584d-5">
			<li data-u-target="#carousel_78ac" class="u-active u-active-custom-color-1 u-grey-30 u-shape-circle"
				data-u-slide-to="0" style="width: 8px; height: 8px;"></li>
			<li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle" data-u-slide-to="1"
				style="width: 8px; height: 8px;"></li>
			<li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle"
				style="width: 8px; height: 8px;" data-u-slide-to="2"></li>
		</ol>
		<div class="u-carousel-inner" role="listbox">
			<div class="u-active u-align-center u-carousel-item u-clearfix u-image u-section-1-1" src=""
				 data-image-width="1728" data-image-height="972">
				<div class="u-clearfix u-sheet u-sheet-1">
					<div class="u-clearfix u-group-elements u-valign-middle u-group-elements-1">
						<h2 class="u-align-right u-custom-font u-subtitle u-text u-text-1">Autopartes globalmente
							reconocidas para<br>
						</h2>
						<h2 class="negativo u-align-right u-custom-font u-subtitle u-text u-text-white u-text-2">mecánicos
							expertos<br>
						</h2>
					</div>
					<img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/FIRMA1.png')?>" alt=""
						 data-image-width="371" data-image-height="134">
				</div>
			</div>
			<div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-2" src=""
				 data-image-width="1245" data-image-height="700">
				<div class="u-clearfix u-sheet u-sheet-1">
					<h2 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-subtitle u-text u-text-1">
						Somos una<br>compañía global
					</h2>
					<h3 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-text u-text-2">
						enfocada en cr<span style="font-weight: 700;"></span>ear productos con tecnología avanzada,&nbsp;capaces
						de mover al mundo.
					</h3>
				</div>
			</div>
			<div class="u-align-center u-carousel-item u-clearfix u-image u-section-1-3" src="" data-image-width="1728"
				 data-image-height="940">
				<div class="u-clearfix u-sheet u-sheet-1">
					<img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/Los-Expertos-Eligen-Denso.png')?>"
						 alt="" data-image-width="800" data-image-height="392">
					<a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>"
					   class="u-align-right u-black u-border-none u-btn u-button-style u-hover-black u-btn-1">ver
						catálogos</a>
				</div>
			</div>
		</div>
		<a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-584d-3"
		   href="#carousel_78ac" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
					  d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
					  d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
			<span class="sr-only">
          <svg viewBox="0 0 129 129"><path
					  d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
					  d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
		</a>
		<a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-584d-6"
		   href="#carousel_78ac" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
					  d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
					  d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
			<span class="sr-only">
          <svg viewBox="0 0 129 129"><path
					  d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
					  d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
		</a>
	</section>
	<?= $this->Element('forma_busqueda',array('region'=>$region))?>
	<section class="u-clearfix u-section-4" id="sec-28ea">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h2 class="u-align-center u-text u-text-default u-text-1">BUJÍAS Y REPUESTOS DE CALIDAD</h2>
			<div class="u-clearfix u-expanded-width u-gutter-20 u-layout-spacing-left-right u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-col">
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-1"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'bujias',$region))?>">
									<div class="u-container-layout u-container-layout-1"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-2"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'filtros',$region))?>">
									<div class="u-container-layout u-container-layout-2"></div>
								</div>
							</div>
						</div>
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-3"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'sensores_oxigeno',$region))?>">
									<div class="u-container-layout u-container-layout-3"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-4"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'compresores',$region))?>">
									<div class="u-container-layout u-valign-top u-container-layout-4"></div>
								</div>
							</div>
						</div>
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-5"
									 data-image-width="697" data-image-height="285">
									<div class="u-container-layout u-container-layout-5"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-6"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>">
									<div class="u-container-layout u-container-layout-6"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</section>
	<section class="u-align-left u-clearfix u-hidden-xs u-image u-section-5" src="" data-image-width="1728"
			 data-image-height="669" id="sec-ad89">
		<h3 class="u-align-left-sm u-align-left-xs u-align-right-lg u-align-right-md u-align-right-xl u-hidden-xs u-text u-text-default-lg u-text-default-xl u-text-white u-text-1">
			75 años innovando en<br>tecnología automotriz
		</h3>
		<a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
		   class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">CONOCE
			MÁS</a>
	</section>
	<section
			class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-image-contain u-section-6"
			src="" data-image-width="390" data-image-height="665" id="sec-e102">
		<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
			<h3 class="u-text u-text-default u-text-white u-text-1">75 años innovando en tecnología automotriz</h3>
			<a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
			   class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">conoce
				más</a>
		</div>
	</section>
	<section class="u-align-center u-clearfix u-section-7" id="sec-21f2">
		<div class="u-align-left u-clearfix u-sheet u-sheet-1">
			<h3 class="u-align-center u-text u-text-custom-color-4 u-text-default u-text-1">NUESTROS PRODUCTOS CUENTAN
				CON: </h3>
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-1"><img
										src="<?= $this->Html->url('/img/image19.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-2">Calidad, garantía y durabilidad</p>
						</div>
					</div>
					<div class="u-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-2"><img
										src="<?= $this->Html->url('/img/image17.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-3">Amplia cobertura en marcas y modelos</p>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-3"><img
										src="<?= $this->Html->url('/img/image18.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-4">Fácil instalación</p>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-4"><img
										src="<?= $this->Html->url('/img/image16.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-5">Seguridad, desempeño y cuidado
								ambiental</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="u-align-left u-clearfix u-hidden-xs u-image u-image-contain u-section-8" src="" data-image-width="1728"
			 data-image-height="440" id="sec-46e8">
		<h4 class="u-text u-text-custom-color-4 u-text-default u-text-1">Si buscas algún producto en especial</h4>
		<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
		   class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
			aquí</a>
		<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
		   class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-hover-custom-color-1 u-text-hover-white u-btn-2">Encuéntralo
			aquí</a>
	</section>
	<section
			class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-section-9"
			src="" data-image-width="390" data-image-height="410" id="sec-e0c7">
		<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
			<h4 class="u-align-left-xs u-text u-text-default u-text-1">Si buscas algún producto en especial</h4>
			<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
			   class="u-black u-border-none u-btn u-button-style u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
				aquí</a>
		</div>
	</section>
	<section class="u-clearfix u-container-align-center-xl u-section-10" id="carousel_73c2">
		<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
			<h2 class="u-align-center u-text u-text-body-color u-text-default u-text-1">ENCUENTRA TU DISTRIBUIDOR MÁS
				CERCANO</h2>
			<div class="u-clearfix u-expanded-width u-hidden-sm u-hidden-xs u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-row">
						<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
							<div class="u-container-layout u-valign-bottom-xl u-container-layout-1">
								<?php foreach ($distribuidores_marca as $distribuidor) {?>
									<p><?= $this->Html->link($distribuidor['Distribuidor']['nombre'],array('action'=>'por_marca','controller'=>'distribuidors',$distribuidor['Distribuidor']['nombre'],$region),array('style'=>'color:black'))?></p>
								<?php } ?>
							</div>
						</div>
						<div class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-30 u-image-1"
							 data-image-width="908" data-image-height="573" style="background-image: url(<?= $this->Html->url('/img/chile.png')?>)">
							<div class="u-container-layout u-container-layout-2"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="buscar u-absolute-hcenter-lg u-absolute-hcenter-md u-absolute-hcenter-xl u-border-2 u-border-grey-25 u-border-no-left u-border-no-right u-border-no-top u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-expanded-width-sm u-expanded-width-xs u-form u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-form-1">
				<div class="u-form-group u-form-select u-label-none u-form-group-1">
					<div class="u-form-select-wrapper">
						<?php
						$marcas = array();
						foreach ($distribuidores_marca as $distribuidor) {
							$marcas[$distribuidor['Distribuidor']['nombre']] = $distribuidor['Distribuidor']['nombre'];
						}
						echo $this->Form->input('distribuidor',array('onchange'=>'javascript:buscar_marca(this.value,"cl")','empty'=>'Seleccionar Distribuidor','type'=>'select','options'=>$marcas,'class'=>'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-1'));
						?>
					</div>
				</div>
			</div>
			<img class="u-align-center-sm u-align-center-xs u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-image-default u-image-2"
				 src="<?= $this->Html->url('/img/chile.png')?>" alt="" data-image-width="908" data-image-height="573">
		</div>
	</section>
	<section class="u-clearfix u-custom-color-2 u-section-11" id="sec-dfbb">
		<div class="u-clearfix u-sheet u-sheet-1">
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-1">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-1"
								 src="<?= $this->Html->url('/img/Group268.png')?>" alt="" data-image-width="166" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-1">
								DONDE COMPRAR</p>
						</div>
					</div>
					<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-2">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-2"
								 src="<?= $this->Html->url('/img/Group99.png')?>" alt="" data-image-width="165" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-2">
								BUSCAR MI PIEZA</p>
						</div>
					</div>
					<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-3">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-3"
								 src="<?= $this->Html->url('/img/Group100.png')?>" alt="" data-image-width="165" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'landing','controller'=>'pages',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-3">
								QUIERO SER DISTRIBUIDOR</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php }else if ($region == 'pe'){?>
	<section class="u-carousel u-slide u-block-584d-1" id="carousel_78ac" data-interval="5000" data-u-ride="carousel">
		<ol class="u-carousel-indicators u-block-584d-5">
			<li data-u-target="#carousel_78ac" class="u-active u-active-custom-color-1 u-grey-30 u-shape-circle"
				data-u-slide-to="0" style="width: 8px; height: 8px;"></li>
			<li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle" data-u-slide-to="1"
				style="width: 8px; height: 8px;"></li>
			<li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle"
				style="width: 8px; height: 8px;" data-u-slide-to="2"></li>
		</ol>
		<div class="u-carousel-inner" role="listbox">
			<div class="u-active u-align-center u-carousel-item u-clearfix u-image u-section-1-1" src=""
				 data-image-width="1728" data-image-height="972">
				<div class="u-clearfix u-sheet u-sheet-1">
					<div class="u-clearfix u-group-elements u-valign-middle u-group-elements-1">
						<h2 class="u-align-right u-custom-font u-subtitle u-text u-text-1">Autopartes globalmente
							reconocidas para<br>
						</h2>
						<h2 class="negativo u-align-right u-custom-font u-subtitle u-text u-text-white u-text-2">mecánicos
							expertos<br>
						</h2>
					</div>
					<img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/FIRMA1.png')?>" alt=""
						 data-image-width="371" data-image-height="134">
				</div>
			</div>
			<div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-2" src=""
				 data-image-width="1245" data-image-height="700">
				<div class="u-clearfix u-sheet u-sheet-1">
					<h2 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-subtitle u-text u-text-1">
						Somos una<br>compañía global
					</h2>
					<h3 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-text u-text-2">
						enfocada en cr<span style="font-weight: 700;"></span>ear productos con tecnología avanzada,&nbsp;capaces
						de mover al mundo.
					</h3>
				</div>
			</div>
			<div class="u-align-center u-carousel-item u-clearfix u-image u-section-1-3" src="" data-image-width="1728"
				 data-image-height="940">
				<div class="u-clearfix u-sheet u-sheet-1">
					<img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/Los-Expertos-Eligen-Denso.png')?>"
						 alt="" data-image-width="800" data-image-height="392">
					<a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>"
					   class="u-align-right u-black u-border-none u-btn u-button-style u-hover-black u-btn-1">ver
						catálogos</a>
				</div>
			</div>
		</div>
		<a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-584d-3"
		   href="#carousel_78ac" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
					  d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
					  d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
			<span class="sr-only">
          <svg viewBox="0 0 129 129"><path
					  d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
					  d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
		</a>
		<a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-584d-6"
		   href="#carousel_78ac" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
					  d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
					  d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
			<span class="sr-only">
          <svg viewBox="0 0 129 129"><path
					  d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
					  d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
		</a>
	</section>
	<?= $this->Element('forma_busqueda',array('region'=>$region))?>
	<section class="u-clearfix u-section-4" id="sec-28ea">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h2 class="u-align-center u-text u-text-default u-text-1">BUJÍAS Y REPUESTOS DE CALIDAD</h2>
			<div class="u-clearfix u-expanded-width u-gutter-20 u-layout-spacing-left-right u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-col">
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-1"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'bujias',$region))?>">
									<div class="u-container-layout u-container-layout-1"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-2"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'filtros',$region))?>">
									<div class="u-container-layout u-container-layout-2"></div>
								</div>
							</div>
						</div>
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-3"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'sensores_oxigeno',$region))?>">
									<div class="u-container-layout u-container-layout-3"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-4"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'compresores',$region))?>">
									<div class="u-container-layout u-valign-top u-container-layout-4"></div>
								</div>
							</div>
						</div>
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-5"
									 data-image-width="697" data-image-height="285">
									<div class="u-container-layout u-container-layout-5"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-6"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>">
									<div class="u-container-layout u-container-layout-6"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</section>
	<section class="u-align-left u-clearfix u-hidden-xs u-image u-section-5" src="" data-image-width="1728"
			 data-image-height="669" id="sec-ad89">
		<h3 class="u-align-left-sm u-align-left-xs u-align-right-lg u-align-right-md u-align-right-xl u-hidden-xs u-text u-text-default-lg u-text-default-xl u-text-white u-text-1">
			75 años innovando en<br>tecnología automotriz
		</h3>
		<a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
		   class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">CONOCE
			MÁS</a>
	</section>
	<section
			class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-image-contain u-section-6"
			src="" data-image-width="390" data-image-height="665" id="sec-e102">
		<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
			<h3 class="u-text u-text-default u-text-white u-text-1">75 años innovando en tecnología automotriz</h3>
			<a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
			   class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">conoce
				más</a>
		</div>
	</section>
	<section class="u-align-center u-clearfix u-section-7" id="sec-21f2">
		<div class="u-align-left u-clearfix u-sheet u-sheet-1">
			<h3 class="u-align-center u-text u-text-custom-color-4 u-text-default u-text-1">NUESTROS PRODUCTOS CUENTAN
				CON: </h3>
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-1"><img
										src="<?= $this->Html->url('/img/image19.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-2">Calidad, garantía y durabilidad</p>
						</div>
					</div>
					<div class="u-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-2"><img
										src="<?= $this->Html->url('/img/image17.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-3">Amplia cobertura en marcas y modelos</p>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-3"><img
										src="<?= $this->Html->url('/img/image18.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-4">Fácil instalación</p>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-4"><img
										src="<?= $this->Html->url('/img/image16.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-5">Seguridad, desempeño y cuidado
								ambiental</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="u-align-left u-clearfix u-hidden-xs u-image u-image-contain u-section-8" src="" data-image-width="1728"
			 data-image-height="440" id="sec-46e8">
		<h4 class="u-text u-text-custom-color-4 u-text-default u-text-1">Si buscas algún producto en especial</h4>
		<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
		   class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
			aquí</a>
		<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
		   class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-hover-custom-color-1 u-text-hover-white u-btn-2">Encuéntralo
			aquí</a>
	</section>
	<section
			class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-section-9"
			src="" data-image-width="390" data-image-height="410" id="sec-e0c7">
		<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
			<h4 class="u-align-left-xs u-text u-text-default u-text-1">Si buscas algún producto en especial</h4>
			<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
			   class="u-black u-border-none u-btn u-button-style u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
				aquí</a>
		</div>
	</section>
	<section class="u-clearfix u-container-align-center-xl u-section-10" id="carousel_73c2">
		<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
			<h2 class="u-align-center u-text u-text-body-color u-text-default u-text-1">ENCUENTRA TU DISTRIBUIDOR MÁS
				CERCANO</h2>
			<div class="u-clearfix u-expanded-width u-hidden-sm u-hidden-xs u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-row">
						<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
							<div class="u-container-layout u-valign-bottom-xl u-container-layout-1">
								<p class="u-custom-font u-text u-text-custom-color-4 u-text-3">
								<?php foreach ($distribuidores_marca as $distribuidor) {?>
									<p><?= $this->Html->link($distribuidor['Distribuidor']['nombre'],array('action'=>'por_marca','controller'=>'distribuidors',$distribuidor['Distribuidor']['nombre'],$region),array('style'=>'color:black'))?></p>
								<?php } ?>
							</div>
						</div>
						<div class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-30 u-image-1"
						<div class="u-continer-align-center u-container-style u-image u-image-contain u-layout-cell u-size-30 u-image-1"
							 data-image-width="908" data-image-height="573" style="background-image: url(<?= $this->Html->url('/img/peru.png')?>)">
							<div class="u-container-layout u-container-layout-2"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="buscar u-absolute-hcenter-lg u-absolute-hcenter-md u-absolute-hcenter-xl u-border-2 u-border-grey-25 u-border-no-left u-border-no-right u-border-no-top u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-expanded-width-sm u-expanded-width-xs u-form u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-form-1">
				<div class="u-form-group u-form-select u-label-none u-form-group-1">
					<div class="u-form-select-wrapper">
						<?php
							$marcas = array();
							foreach ($distribuidores_marca as $distribuidor) {
								$marcas[$distribuidor['Distribuidor']['nombre']] = $distribuidor['Distribuidor']['nombre'];
							}
						echo $this->Form->input('distribuidor',array('onchange'=>'javascript:buscar_marca(this.value,"pe")','empty'=>'Seleccionar Distribuidor','type'=>'select','options'=>$marcas,'class'=>'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-1'));
						?>
					</div>
				</div>
			</div>
			<img class="u-align-center-sm u-align-center-xs u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-image-default u-image-2"
				 src="<?= $this->Html->url('/img/peru.png')?>" alt="" data-image-width="908" data-image-height="573">
		</div>
	</section>
	<section class="u-clearfix u-custom-color-2 u-section-11" id="sec-dfbb">
		<div class="u-clearfix u-sheet u-sheet-1">
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-1">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-1"
								 src="<?= $this->Html->url('/img/Group268.png')?>" alt="" data-image-width="166" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-1">
								DONDE COMPRAR</p>
						</div>
					</div>
					<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-2">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-2"
								 src="<?= $this->Html->url('/img/Group99.png')?>" alt="" data-image-width="165" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-2">
								BUSCAR MI PIEZA</p>
						</div>
					</div>
					<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-3">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-3"
								 src="<?= $this->Html->url('/img/Group100.png')?>" alt="" data-image-width="165" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'landing','controller'=>'pages',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-3">
								QUIERO SER DISTRIBUIDOR</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



<?php }else if ($region == 'car' || $region == 'cam'){?>
	<section class="u-carousel u-slide u-block-584d-1" id="carousel_78ac" data-interval="5000" data-u-ride="carousel">
		<ol class="u-carousel-indicators u-block-584d-5">
			<li data-u-target="#carousel_78ac" class="u-active u-active-custom-color-1 u-grey-30 u-shape-circle"
				data-u-slide-to="0" style="width: 8px; height: 8px;"></li>
			<li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle" data-u-slide-to="1"
				style="width: 8px; height: 8px;"></li>
			<li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle"
				style="width: 8px; height: 8px;" data-u-slide-to="2"></li>
		</ol>
		<div class="u-carousel-inner" role="listbox">
			<div class="u-active u-align-center u-carousel-item u-clearfix u-image u-section-1-1" src=""
				 data-image-width="1728" data-image-height="972">
				<div class="u-clearfix u-sheet u-sheet-1">
					<div class="u-clearfix u-group-elements u-valign-middle u-group-elements-1">
						<h2 class="u-align-right u-custom-font u-subtitle u-text u-text-1">Autopartes globalmente
							reconocidas para<br>
						</h2>
						<h2 class="negativo u-align-right u-custom-font u-subtitle u-text u-text-white u-text-2">mecánicos
							expertos<br>
						</h2>
					</div>
					<img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/FIRMA1.png')?>" alt=""
						 data-image-width="371" data-image-height="134">
				</div>
			</div>
			<div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-2" src=""
				 data-image-width="1245" data-image-height="700">
				<div class="u-clearfix u-sheet u-sheet-1">
					<h2 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-subtitle u-text u-text-1">
						Somos una<br>compañía global
					</h2>
					<h3 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-text u-text-2">
						enfocada en cr<span style="font-weight: 700;"></span>ear productos con tecnología avanzada,&nbsp;capaces
						de mover al mundo.
					</h3>
				</div>
			</div>
			<div class="u-align-center u-carousel-item u-clearfix u-image u-section-1-3" src="" data-image-width="1728"
				 data-image-height="940">
				<div class="u-clearfix u-sheet u-sheet-1">
					<img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/Los-Expertos-Eligen-Denso.png')?>"
						 alt="" data-image-width="800" data-image-height="392">
					<a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>"
					   class="u-align-right u-black u-border-none u-btn u-button-style u-hover-black u-btn-1">ver
						catálogos</a>
				</div>
			</div>
		</div>
		<a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-584d-3"
		   href="#carousel_78ac" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
					  d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
					  d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
			<span class="sr-only">
          <svg viewBox="0 0 129 129"><path
					  d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
					  d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
		</a>
		<a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-584d-6"
		   href="#carousel_78ac" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
					  d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
					  d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
			<span class="sr-only">
          <svg viewBox="0 0 129 129"><path
					  d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
					  d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
		</a>
	</section>
	<?= $this->Element('forma_busqueda',array('region'=>$region))?>
	<section class="u-clearfix u-section-4" id="sec-28ea">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h2 class="u-align-center u-text u-text-default u-text-1">BUJÍAS Y REPUESTOS DE CALIDAD</h2>
			<div class="u-clearfix u-expanded-width u-gutter-20 u-layout-spacing-left-right u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-col">
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-1"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'bujias',$region))?>">
									<div class="u-container-layout u-container-layout-1"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-2"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'filtros',$region))?>">
									<div class="u-container-layout u-container-layout-2"></div>
								</div>
							</div>
						</div>
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-3"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'sensores_oxigeno',$region))?>">
									<div class="u-container-layout u-container-layout-3"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-4"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'compresores',$region))?>">
									<div class="u-container-layout u-valign-top u-container-layout-4"></div>
								</div>
							</div>
						</div>
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-5"
									 data-image-width="697" data-image-height="285">
									<div class="u-container-layout u-container-layout-5"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-6"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>">
									<div class="u-container-layout u-container-layout-6"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</section>
	<section class="u-align-left u-clearfix u-hidden-xs u-image u-section-5" src="" data-image-width="1728"
			 data-image-height="669" id="sec-ad89">
		<h3 class="u-align-left-sm u-align-left-xs u-align-right-lg u-align-right-md u-align-right-xl u-hidden-xs u-text u-text-default-lg u-text-default-xl u-text-white u-text-1">
			75 años innovando en<br>tecnología automotriz
		</h3>
		<a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
		   class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">CONOCE
			MÁS</a>
	</section>
	<section
			class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-image-contain u-section-6"
			src="" data-image-width="390" data-image-height="665" id="sec-e102">
		<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
			<h3 class="u-text u-text-default u-text-white u-text-1">75 años innovando en tecnología automotriz</h3>
			<a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
			   class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">conoce
				más</a>
		</div>
	</section>
	<section class="u-align-center u-clearfix u-section-7" id="sec-21f2">
		<div class="u-align-left u-clearfix u-sheet u-sheet-1">
			<h3 class="u-align-center u-text u-text-custom-color-4 u-text-default u-text-1">NUESTROS PRODUCTOS CUENTAN
				CON: </h3>
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-1"><img
										src="<?= $this->Html->url('/img/image19.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-2">Calidad, garantía y durabilidad</p>
						</div>
					</div>
					<div class="u-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-2"><img
										src="<?= $this->Html->url('/img/image17.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-3">Amplia cobertura en marcas y modelos</p>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-3"><img
										src="<?= $this->Html->url('/img/image18.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-4">Fácil instalación</p>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-4"><img
										src="<?= $this->Html->url('/img/image16.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-5">Seguridad, desempeño y cuidado
								ambiental</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="u-align-left u-clearfix u-hidden-xs u-image u-image-contain u-section-8" src="" data-image-width="1728"
			 data-image-height="440" id="sec-46e8">
		<h4 class="u-text u-text-custom-color-4 u-text-default u-text-1">Si buscas algún producto en especial</h4>
		<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
		   class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
			aquí</a>
		<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
		   class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-hover-custom-color-1 u-text-hover-white u-btn-2">Encuéntralo
			aquí</a>
	</section>
	<section
			class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-section-9"
			src="" data-image-width="390" data-image-height="410" id="sec-e0c7">
		<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
			<h4 class="u-align-left-xs u-text u-text-default u-text-1">Si buscas algún producto en especial</h4>
			<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
			   class="u-black u-border-none u-btn u-button-style u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
				aquí</a>
		</div>
	</section>
	<section class="u-clearfix u-container-align-center-xl u-section-10" id="carousel_73c2">
		<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
			<h2 class="u-align-center u-text u-text-body-color u-text-default u-text-1">ENCUENTRA TU DISTRIBUIDOR MÁS
				CERCANO</h2>
			<div class="u-clearfix u-expanded-width u-hidden-sm u-hidden-xs u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-row">
						<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
							<div class="u-container-layout u-valign-bottom-xl u-container-layout-1">

								<p class="u-custom-font u-text u-text-custom-color-4 u-text-3">
									<?php
									$titulo = "";
									$foto = array(
										'car'=>'/img/caribe.png',
										'cam'=>'/img/centroamerica.png',
									);
									foreach ($distribuidores_marca as $distribuidor) {
										if ($titulo != $distribuidor['Distribuidor']['pais']){
											echo "<b style='font-size: 20px; color:black'>".$paises[$distribuidor['Distribuidor']['pais']]."</b>";
											$titulo = $distribuidor['Distribuidor']['pais'];
										}
									?>
										<div style="margin-left: 20px; margin-bottom: 5px"><?= $this->Html->link($distribuidor['Distribuidor']['nombre'],array('action'=>'por_marca','controller'=>'distribuidors',$distribuidor['Distribuidor']['nombre'],$region),array('style'=>'color:black'))?></div>
									<?php } ?>
								</p>
							</div>
						</div>
						<div class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-30 u-image-1"
							 data-image-width="908" data-image-height="573" style="background-image: url(<?= $this->Html->url($foto[$region])?>)">
							<div class="u-container-layout u-container-layout-2"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="buscar u-absolute-hcenter-lg u-absolute-hcenter-md u-absolute-hcenter-xl u-border-2 u-border-grey-25 u-border-no-left u-border-no-right u-border-no-top u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-expanded-width-sm u-expanded-width-xs u-form u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-form-1">
				<div class="u-form-group u-form-select u-label-none u-form-group-1">
					<div class="u-form-select-wrapper">
						<?php
						$marcas = array();
						foreach ($distribuidores_marca as $distribuidor) {
							$marcas[$distribuidor['Distribuidor']['nombre']] = $distribuidor['Distribuidor']['nombre'];
						}
						echo $this->Form->input('distribuidor',array('onchange'=>'javascript:buscar_marca(this.value,"pe")','empty'=>'Seleccionar Distribuidor','type'=>'select','options'=>$marcas,'class'=>'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-1'));
						?>
					</div>
				</div>
			</div>
			<img class="u-align-center-sm u-align-center-xs u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-image-default u-image-2"
				 src="<?= $this->Html->url($foto[$region])?>" alt="" data-image-width="908" data-image-height="573">
		</div>
	</section>
	<section class="u-clearfix u-custom-color-2 u-section-11" id="sec-dfbb">
		<div class="u-clearfix u-sheet u-sheet-1">
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-1">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-1"
								 src="<?= $this->Html->url('/img/Group268.png')?>" alt="" data-image-width="166" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-1">
								DONDE COMPRAR</p>
						</div>
					</div>
					<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-2">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-2"
								 src="<?= $this->Html->url('/img/Group99.png')?>" alt="" data-image-width="165" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-2">
								BUSCAR MI PIEZA</p>
						</div>
					</div>
					<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-3">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-3"
								 src="<?= $this->Html->url('/img/Group100.png')?>" alt="" data-image-width="165" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'landing','controller'=>'pages',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-3">
								QUIERO SER DISTRIBUIDOR</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php }else if ($region == 'pr'){?>
    <section class="u-carousel u-slide u-block-584d-1" id="carousel_78ac" data-interval="5000" data-u-ride="carousel">
        <ol class="u-carousel-indicators u-block-584d-5">
            <li data-u-target="#carousel_78ac" class="u-active u-active-custom-color-1 u-grey-30 u-shape-circle"
                data-u-slide-to="0" style="width: 8px; height: 8px;"></li>
            <li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle" data-u-slide-to="1"
                style="width: 8px; height: 8px;"></li>
            <li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle"
                style="width: 8px; height: 8px;" data-u-slide-to="2"></li>
        </ol>
        <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-align-center u-carousel-item u-clearfix u-image u-section-1-1" src=""
                 data-image-width="1728" data-image-height="972">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <div class="u-clearfix u-group-elements u-valign-middle u-group-elements-1">
                        <h2 class="u-align-right u-custom-font u-subtitle u-text u-text-1">Autopartes globalmente
                            reconocidas para<br>
                        </h2>
                        <h2 class="negativo u-align-right u-custom-font u-subtitle u-text u-text-white u-text-2">mecánicos
                            expertos<br>
                        </h2>
                    </div>
                    <img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/FIRMA1.png')?>" alt=""
                         data-image-width="371" data-image-height="134">
                </div>
            </div>
            <div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-2" src=""
                 data-image-width="1245" data-image-height="700">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <h2 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-subtitle u-text u-text-1">
                        Somos una<br>compañía global
                    </h2>
                    <h3 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-text u-text-2">
                        enfocada en cr<span style="font-weight: 700;"></span>ear productos con tecnología avanzada,&nbsp;capaces
                        de mover al mundo.
                    </h3>
                </div>
            </div>
            <div class="u-align-center u-carousel-item u-clearfix u-image u-section-1-3" src="" data-image-width="1728"
                 data-image-height="940">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/Los-Expertos-Eligen-Denso.png')?>"
                         alt="" data-image-width="800" data-image-height="392">
                    <a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>"
                       class="u-align-right u-black u-border-none u-btn u-button-style u-hover-black u-btn-1">ver
                        catálogos</a>
                </div>
            </div>
        </div>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-584d-3"
           href="#carousel_78ac" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
                      d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
                      d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
            <span class="sr-only">
          <svg viewBox="0 0 129 129"><path
                      d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
                      d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
        </a>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-584d-6"
           href="#carousel_78ac" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
                      d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
                      d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
            <span class="sr-only">
          <svg viewBox="0 0 129 129"><path
                      d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
                      d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
        </a>
    </section>
    <?= $this->Element('forma_busqueda',array('region'=>$region))?>
    <section class="u-clearfix u-section-4" id="sec-28ea">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1">BUJÍAS Y REPUESTOS DE CALIDAD</h2>
            <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-spacing-left-right u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-col">
                        <div class="u-size-20">
                            <div class="u-layout-row">
                                <div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-1"
                                     data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'bujias',$region))?>">
                                    <div class="u-container-layout u-container-layout-1"></div>
                                </div>
                                <div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-2"
                                     data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'filtros',$region))?>">
                                    <div class="u-container-layout u-container-layout-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-20">
                            <div class="u-layout-row">
                                <div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-3"
                                     data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'sensores_oxigeno',$region))?>">
                                    <div class="u-container-layout u-container-layout-3"></div>
                                </div>
                                <div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-4"
                                     data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'compresores',$region))?>">
                                    <div class="u-container-layout u-valign-top u-container-layout-4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-20">
                            <div class="u-layout-row">
                                <div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-5"
                                     data-image-width="697" data-image-height="285">
                                    <div class="u-container-layout u-container-layout-5"></div>
                                </div>
                                <div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-6"
                                     data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>">
                                    <div class="u-container-layout u-container-layout-6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="u-align-left u-clearfix u-hidden-xs u-image u-section-5" src="" data-image-width="1728"
             data-image-height="669" id="sec-ad89">
        <h3 class="u-align-left-sm u-align-left-xs u-align-right-lg u-align-right-md u-align-right-xl u-hidden-xs u-text u-text-default-lg u-text-default-xl u-text-white u-text-1">
            75 años innovando en<br>tecnología automotriz
        </h3>
        <a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
           class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">CONOCE
            MÁS</a>
    </section>
    <section
            class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-image-contain u-section-6"
            src="" data-image-width="390" data-image-height="665" id="sec-e102">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
            <h3 class="u-text u-text-default u-text-white u-text-1">75 años innovando en tecnología automotriz</h3>
            <a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
               class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">conoce
                más</a>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-section-7" id="sec-21f2">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <h3 class="u-align-center u-text u-text-custom-color-4 u-text-default u-text-1">NUESTROS PRODUCTOS CUENTAN
                CON: </h3>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span
                                    class="u-align-center u-file-icon u-icon u-icon-circle u-icon-1"><img
                                        src="<?= $this->Html->url('/img/image19.png')?>" alt=""></span>
                            <p class="u-align-center u-custom-font u-text u-text-2">Calidad, garantía y durabilidad</p>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span
                                    class="u-align-center u-file-icon u-icon u-icon-circle u-icon-2"><img
                                        src="<?= $this->Html->url('/img/image17.png')?>" alt=""></span>
                            <p class="u-align-center u-custom-font u-text u-text-3">Amplia cobertura en marcas y modelos</p>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span
                                    class="u-align-center u-file-icon u-icon u-icon-circle u-icon-3"><img
                                        src="<?= $this->Html->url('/img/image18.png')?>" alt=""></span>
                            <p class="u-align-center u-custom-font u-text u-text-4">Fácil instalación</p>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span
                                    class="u-align-center u-file-icon u-icon u-icon-circle u-icon-4"><img
                                        src="<?= $this->Html->url('/img/image16.png')?>" alt=""></span>
                            <p class="u-align-center u-custom-font u-text u-text-5">Seguridad, desempeño y cuidado
                                ambiental</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-left u-clearfix u-hidden-xs u-image u-image-contain u-section-8" src="" data-image-width="1728"
             data-image-height="440" id="sec-46e8">
        <h4 class="u-text u-text-custom-color-4 u-text-default u-text-1">Si buscas algún producto en especial</h4>
        <a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
           class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
            aquí</a>
        <a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
           class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-hover-custom-color-1 u-text-hover-white u-btn-2">Encuéntralo
            aquí</a>
    </section>
    <section
            class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-section-9"
            src="" data-image-width="390" data-image-height="410" id="sec-e0c7">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
            <h4 class="u-align-left-xs u-text u-text-default u-text-1">Si buscas algún producto en especial</h4>
            <a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
               class="u-black u-border-none u-btn u-button-style u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
                aquí</a>
        </div>
    </section>
    <section class="u-clearfix u-container-align-center-xl u-section-10" id="carousel_73c2">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-body-color u-text-default u-text-1">ENCUENTRA TU DISTRIBUIDOR MÁS
                CERCANO</h2>
            <div class="u-clearfix u-expanded-width u-hidden-sm u-hidden-xs u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-valign-bottom-xl u-container-layout-1">

                                <p class="u-custom-font u-text u-text-custom-color-4 u-text-3">
                                    <?php
                                    $titulo = "";
                                    $foto = array(
                                        'car'=>'/img/caribe.png',
                                        'cam'=>'/img/centroamerica.png',
                                    );
                                    foreach ($distribuidores_marca as $distribuidor) {
                                    if ($titulo != $distribuidor['Distribuidor']['pais']){
                                        echo "<b style='font-size: 20px; color:black'>".$paises[$distribuidor['Distribuidor']['pais']]."</b>";
                                        $titulo = $distribuidor['Distribuidor']['pais'];
                                    }
                                    ?>
                                <div style="margin-left: 20px; margin-bottom: 5px"><?= $this->Html->link($distribuidor['Distribuidor']['nombre'],array('action'=>'por_marca','controller'=>'distribuidors',$distribuidor['Distribuidor']['nombre'],$region),array('style'=>'color:black'))?></div>
                                <?php } ?>
                                </p>
                            </div>
                        </div>
                        <div class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-30 u-image-1"
                             data-image-width="908" data-image-height="573" style="background-image: url(<?= $this->Html->url('/img/puerto-rico.png')?>)">
                            <div class="u-container-layout u-container-layout-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buscar u-absolute-hcenter-lg u-absolute-hcenter-md u-absolute-hcenter-xl u-border-2 u-border-grey-25 u-border-no-left u-border-no-right u-border-no-top u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-expanded-width-sm u-expanded-width-xs u-form u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-form-1">
                <div class="u-form-group u-form-select u-label-none u-form-group-1">
                    <div class="u-form-select-wrapper">
                        <?php
                        $marcas = array();
                        foreach ($distribuidores_marca as $distribuidor) {
                            $marcas[$distribuidor['Distribuidor']['nombre']] = $distribuidor['Distribuidor']['nombre'];
                        }
                        echo $this->Form->input('distribuidor',array('onchange'=>'javascript:buscar_marca(this.value,"pe")','empty'=>'Seleccionar Distribuidor','type'=>'select','options'=>$marcas,'class'=>'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-1'));
                        ?>
                    </div>
                </div>
            </div>
            <img class="u-align-center-sm u-align-center-xs u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-image-default u-image-2"
                 src="<?= $this->Html->url('/img/puerto-rico.png')?>" alt="" data-image-width="908" data-image-height="573">
        </div>
    </section>
    <section class="u-clearfix u-custom-color-2 u-section-11" id="sec-dfbb">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-1"
                                 src="<?= $this->Html->url('/img/Group268.png')?>" alt="" data-image-width="166" data-image-height="165"
                                 data-href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors',$region))?>">
                            <p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-1">
                                DONDE COMPRAR</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                            <img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-2"
                                 src="<?= $this->Html->url('/img/Group99.png')?>" alt="" data-image-width="165" data-image-height="165"
                                 data-href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>">
                            <p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-2">
                                BUSCAR MI PIEZA</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                            <img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-3"
                                 src="<?= $this->Html->url('/img/Group100.png')?>" alt="" data-image-width="165" data-image-height="165"
                                 data-href="<?= $this->Html->url(array('action'=>'landing','controller'=>'pages',$region))?>">
                            <p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-3">
                                QUIERO SER DISTRIBUIDOR</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php }else if ($region == 'ec'){?>
	<section class="u-carousel u-slide u-block-584d-1" id="carousel_78ac" data-interval="5000" data-u-ride="carousel">
		<ol class="u-carousel-indicators u-block-584d-5">
			<li data-u-target="#carousel_78ac" class="u-active u-active-custom-color-1 u-grey-30 u-shape-circle"
				data-u-slide-to="0" style="width: 8px; height: 8px;"></li>
			<li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle" data-u-slide-to="1"
				style="width: 8px; height: 8px;"></li>
			<li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle"
				style="width: 8px; height: 8px;" data-u-slide-to="2"></li>
		</ol>
		<div class="u-carousel-inner" role="listbox">
			<div class="u-active u-align-center u-carousel-item u-clearfix u-image u-section-1-1" src=""
				 data-image-width="1728" data-image-height="972">
				<div class="u-clearfix u-sheet u-sheet-1">
					<div class="u-clearfix u-group-elements u-valign-middle u-group-elements-1">
						<h2 class="u-align-right u-custom-font u-subtitle u-text u-text-1">Autopartes globalmente
							reconocidas para<br>
						</h2>
						<h2 class="negativo u-align-right u-custom-font u-subtitle u-text u-text-white u-text-2">mecánicos
							expertos<br>
						</h2>
					</div>
					<img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/FIRMA1.png')?>" alt=""
						 data-image-width="371" data-image-height="134">
				</div>
			</div>
			<div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-2" src=""
				 data-image-width="1245" data-image-height="700">
				<div class="u-clearfix u-sheet u-sheet-1">
					<h2 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-subtitle u-text u-text-1">
						Somos una<br>compañía global
					</h2>
					<h3 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-text u-text-2">
						enfocada en cr<span style="font-weight: 700;"></span>ear productos con tecnología avanzada,&nbsp;capaces
						de mover al mundo.
					</h3>
				</div>
			</div>
			<div class="u-align-center u-carousel-item u-clearfix u-image u-section-1-3" src="" data-image-width="1728"
				 data-image-height="940">
				<div class="u-clearfix u-sheet u-sheet-1">
					<img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/Los-Expertos-Eligen-Denso.png')?>"
						 alt="" data-image-width="800" data-image-height="392">
					<a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>"
					   class="u-align-right u-black u-border-none u-btn u-button-style u-hover-black u-btn-1">ver
						catálogos</a>
				</div>
			</div>
		</div>
		<a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-584d-3"
		   href="#carousel_78ac" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
					  d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
					  d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
			<span class="sr-only">
          <svg viewBox="0 0 129 129"><path
					  d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
					  d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
		</a>
		<a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-584d-6"
		   href="#carousel_78ac" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
					  d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
					  d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
			<span class="sr-only">
          <svg viewBox="0 0 129 129"><path
					  d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
					  d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
		</a>
	</section>
	<?= $this->Element('forma_busqueda',array('region'=>$region))?>
	<section class="u-clearfix u-section-4" id="sec-28ea">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h2 class="u-align-center u-text u-text-default u-text-1">BUJÍAS Y REPUESTOS DE CALIDAD</h2>
			<div class="u-clearfix u-expanded-width u-gutter-20 u-layout-spacing-left-right u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-col">
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-1"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'bujias',$region))?>">
									<div class="u-container-layout u-container-layout-1"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-2"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'filtros',$region))?>">
									<div class="u-container-layout u-container-layout-2"></div>
								</div>
							</div>
						</div>
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-3"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'sensores_oxigeno',$region))?>">
									<div class="u-container-layout u-container-layout-3"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-4"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'compresores',$region))?>">
									<div class="u-container-layout u-valign-top u-container-layout-4"></div>
								</div>
							</div>
						</div>
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-5"
									 data-image-width="697" data-image-height="285">
									<div class="u-container-layout u-container-layout-5"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-6"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>">
									<div class="u-container-layout u-container-layout-6"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</section>
	<section class="u-align-left u-clearfix u-hidden-xs u-image u-section-5" src="" data-image-width="1728"
			 data-image-height="669" id="sec-ad89">
		<h3 class="u-align-left-sm u-align-left-xs u-align-right-lg u-align-right-md u-align-right-xl u-hidden-xs u-text u-text-default-lg u-text-default-xl u-text-white u-text-1">
			75 años innovando en<br>tecnología automotriz
		</h3>
		<a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
		   class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">CONOCE
			MÁS</a>
	</section>
	<section
			class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-image-contain u-section-6"
			src="" data-image-width="390" data-image-height="665" id="sec-e102">
		<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
			<h3 class="u-text u-text-default u-text-white u-text-1">75 años innovando en tecnología automotriz</h3>
			<a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
			   class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">conoce
				más</a>
		</div>
	</section>
	<section class="u-align-center u-clearfix u-section-7" id="sec-21f2">
		<div class="u-align-left u-clearfix u-sheet u-sheet-1">
			<h3 class="u-align-center u-text u-text-custom-color-4 u-text-default u-text-1">NUESTROS PRODUCTOS CUENTAN
				CON: </h3>
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-1"><img
										src="<?= $this->Html->url('/img/image19.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-2">Calidad, garantía y durabilidad</p>
						</div>
					</div>
					<div class="u-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-2"><img
										src="<?= $this->Html->url('/img/image17.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-3">Amplia cobertura en marcas y modelos</p>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-3"><img
										src="<?= $this->Html->url('/img/image18.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-4">Fácil instalación</p>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-4"><img
										src="<?= $this->Html->url('/img/image16.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-5">Seguridad, desempeño y cuidado
								ambiental</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="u-align-left u-clearfix u-hidden-xs u-image u-image-contain u-section-8" src="" data-image-width="1728"
			 data-image-height="440" id="sec-46e8">
		<h4 class="u-text u-text-custom-color-4 u-text-default u-text-1">Si buscas algún producto en especial</h4>
		<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
		   class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
			aquí</a>
		<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
		   class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-hover-custom-color-1 u-text-hover-white u-btn-2">Encuéntralo
			aquí</a>
	</section>
	<section
			class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-section-9"
			src="" data-image-width="390" data-image-height="410" id="sec-e0c7">
		<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
			<h4 class="u-align-left-xs u-text u-text-default u-text-1">Si buscas algún producto en especial</h4>
			<a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
			   class="u-black u-border-none u-btn u-button-style u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
				aquí</a>
		</div>
	</section>
	<section class="u-clearfix u-container-align-center-xl u-section-10" id="carousel_73c2">
		<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
			<h2 class="u-align-center u-text u-text-body-color u-text-default u-text-1">ENCUENTRA TU DISTRIBUIDOR MÁS
				CERCANO</h2>
			<p class="u-align-center u-custom-font u-text u-text-default u-text-2">¡Conoce la
				lista de nuestros distribuidores!</p>
			<div class="u-clearfix u-expanded-width u-hidden-sm u-hidden-xs u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-row">
						<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
							<div class="u-container-layout u-valign-bottom-xl u-container-layout-1">
								<p class="u-custom-font u-text u-text-custom-color-4 u-text-3">
								<p><?= $this->Html->link('FILTROCORP S.A.',array('action'=>'por_marca','controller'=>'distribuidors','FILTROCORP S.A.','ec'),array('style'=>'color:black'))?></p>
								<p><?= $this->Html->link('AKAISAN S.A.',array('action'=>'por_marca','controller'=>'distribuidors','AKAISAN S.A.','ec'),array('style'=>'color:black'))?></p>
								<p><?= $this->Html->link('PROMESA',array('action'=>'por_marca','controller'=>'distribuidors','PROMESA','ec'),array('style'=>'color:black'))?></p>
								</p>
							</div>
						</div>
						<div class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-30 u-image-1"
							 data-image-width="908" data-image-height="573" style="background-image: url(<?= $this->Html->url('/img/ecuador.png')?>)">
							<div class="u-container-layout u-container-layout-2"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="buscar u-absolute-hcenter-lg u-absolute-hcenter-md u-absolute-hcenter-xl u-border-2 u-border-grey-25 u-border-no-left u-border-no-right u-border-no-top u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-expanded-width-sm u-expanded-width-xs u-form u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-form-1">
					<div class="u-form-group u-form-select u-label-none u-form-group-1">
						<div class="u-form-select-wrapper">
							<?php
							$marcas = array(
									'FILTROCORP S.A.'=>'FILTROCORP S.A.',
									'AKAISAN S.A.'=>'AKAISAN S.A.',
									'PROMESA'=>'PROMESA',
							);
							echo $this->Form->input('distribuidor',array('onchange'=>'javascript:buscar_marca(this.value,"ec")','empty'=>'Seleccionar Distribuidor','type'=>'select','options'=>$marcas,'class'=>'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-1'));
							?>
						</div>
					</div>
			</div>
			<img class="u-align-center-sm u-align-center-xs u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-image-default u-image-2"
				 src="<?= $this->Html->url('/img/ecuador.png')?>" alt="" data-image-width="908" data-image-height="573">
		</div>
	</section>
	<section class="u-clearfix u-custom-color-2 u-section-11" id="sec-dfbb">
		<div class="u-clearfix u-sheet u-sheet-1">
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-1">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-1"
								 src="<?= $this->Html->url('/img/Group268.png')?>" alt="" data-image-width="166" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-1">
								DONDE COMPRAR</p>
						</div>
					</div>
					<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-2">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-2"
								 src="<?= $this->Html->url('/img/Group99.png')?>" alt="" data-image-width="165" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-2">
								BUSCAR MI PIEZA</p>
						</div>
					</div>
					<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-3">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-3"
								 src="<?= $this->Html->url('/img/Group100.png')?>" alt="" data-image-width="165" data-image-height="165"
								 data-href="<?= $this->Html->url(array('action'=>'landing','controller'=>'pages',$region))?>">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-3">
								QUIERO SER DISTRIBUIDOR</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php }else if ($region == 've'){?>
    <section class="u-carousel u-slide u-block-584d-1" id="carousel_78ac" data-interval="5000" data-u-ride="carousel">
        <ol class="u-carousel-indicators u-block-584d-5">
            <li data-u-target="#carousel_78ac" class="u-active u-active-custom-color-1 u-grey-30 u-shape-circle"
                data-u-slide-to="0" style="width: 8px; height: 8px;"></li>
            <li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle" data-u-slide-to="1"
                style="width: 8px; height: 8px;"></li>
            <li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle"
                style="width: 8px; height: 8px;" data-u-slide-to="2"></li>

        </ol>
        <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-align-center u-carousel-item u-clearfix u-image u-section-1-1" src=""
                 data-image-width="1728" data-image-height="972">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <div class="u-clearfix u-group-elements u-valign-middle u-group-elements-1">
                        <h2 class="u-align-right u-custom-font u-subtitle u-text u-text-1">Autopartes globalmente
                            reconocidas para<br>
                        </h2>
                        <h2 class="negativo u-align-right u-custom-font u-subtitle u-text u-text-white u-text-2">mecánicos
                            expertos<br>
                        </h2>
                    </div>
                    <img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/FIRMA1.png')?>" alt=""
                         data-image-width="371" data-image-height="134">
                </div>
            </div>
            <div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-2" src=""
                 data-image-width="1245" data-image-height="700">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <h2 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-subtitle u-text u-text-1">
                        Somos una<br>compañía global
                    </h2>
                    <h3 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-text u-text-2">
                        enfocada en cr<span style="font-weight: 700;"></span>ear productos con tecnología avanzada,&nbsp;capaces
                        de mover al mundo.
                    </h3>
                </div>
            </div>
            <div class="u-align-center u-carousel-item u-clearfix u-image u-section-1-3" src="" data-image-width="1728"
                 data-image-height="940">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/Los-Expertos-Eligen-Denso.png')?>"
                         alt="" data-image-width="800" data-image-height="392">
                    <a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>"
                       class="u-align-right u-black u-border-none u-btn u-button-style u-hover-black u-btn-1">ver
                        catálogos</a>
                </div>
            </div>

        </div>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-584d-3"
           href="#carousel_78ac" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
                      d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
                      d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
            <span class="sr-only">
          <svg viewBox="0 0 129 129"><path
                      d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
                      d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
        </a>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-584d-6"
           href="#carousel_78ac" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
                      d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
                      d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
            <span class="sr-only">
          <svg viewBox="0 0 129 129"><path
                      d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
                      d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
        </a>
    </section>
    <?= $this->Element('forma_busqueda',array('region'=>$region))?>
    <section class="u-clearfix u-section-4" id="sec-28ea">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-align-center u-text u-text-default u-text-1">BUJÍAS Y REPUESTOS DE CALIDAD</h2>
            <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-spacing-left-right u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-col">
                        <div class="u-size-20">
                            <div class="u-layout-row">
                                <div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-1"
                                     data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'bujias',$region))?>">
                                    <div class="u-container-layout u-container-layout-1"></div>
                                </div>
                                <div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-2"
                                     data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'filtros',$region))?>">
                                    <div class="u-container-layout u-container-layout-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-20">
                            <div class="u-layout-row">
                                <div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-3"
                                     data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'sensores_oxigeno',$region))?>">
                                    <div class="u-container-layout u-container-layout-3"></div>
                                </div>
                                <div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-4"
                                     data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'compresores',$region))?>">
                                    <div class="u-container-layout u-valign-top u-container-layout-4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-20">
                            <div class="u-layout-row">
                                <div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-5"
                                     data-image-width="697" data-image-height="285">
                                    <div class="u-container-layout u-container-layout-5"></div>
                                </div>
                                <div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-6"
                                     data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>">
                                    <div class="u-container-layout u-container-layout-6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section class="u-align-left u-clearfix u-hidden-xs u-image u-section-5" src="" data-image-width="1728"
             data-image-height="669" id="sec-ad89">
        <h3 class="u-align-left-sm u-align-left-xs u-align-right-lg u-align-right-md u-align-right-xl u-hidden-xs u-text u-text-default-lg u-text-default-xl u-text-white u-text-1">
            75 años innovando en<br>tecnología automotriz
        </h3>
        <a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
           class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">CONOCE
            MÁS</a>
    </section>
    <section
            class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-image-contain u-section-6"
            src="" data-image-width="390" data-image-height="665" id="sec-e102">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
            <h3 class="u-text u-text-default u-text-white u-text-1">75 años innovando en tecnología automotriz</h3>
            <a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
               class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">conoce
                más</a>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-section-7" id="sec-21f2">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <h3 class="u-align-center u-text u-text-custom-color-4 u-text-default u-text-1">NUESTROS PRODUCTOS CUENTAN
                CON: </h3>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span
                                    class="u-align-center u-file-icon u-icon u-icon-circle u-icon-1"><img
                                        src="<?= $this->Html->url('/img/image19.png')?>" alt=""></span>
                            <p class="u-align-center u-custom-font u-text u-text-2">Calidad, garantía y durabilidad</p>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span
                                    class="u-align-center u-file-icon u-icon u-icon-circle u-icon-2"><img
                                        src="<?= $this->Html->url('/img/image17.png')?>" alt=""></span>
                            <p class="u-align-center u-custom-font u-text u-text-3">Amplia cobertura en marcas y modelos</p>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span
                                    class="u-align-center u-file-icon u-icon u-icon-circle u-icon-3"><img
                                        src="<?= $this->Html->url('/img/image18.png')?>" alt=""></span>
                            <p class="u-align-center u-custom-font u-text u-text-4">Fácil instalación</p>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span
                                    class="u-align-center u-file-icon u-icon u-icon-circle u-icon-4"><img
                                        src="<?= $this->Html->url('/img/image16.png')?>" alt=""></span>
                            <p class="u-align-center u-custom-font u-text u-text-5">Seguridad, desempeño y cuidado
                                ambiental</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-left u-clearfix u-hidden-xs u-image u-image-contain u-section-8" src="" data-image-width="1728"
             data-image-height="440" id="sec-46e8">
        <h4 class="u-text u-text-custom-color-4 u-text-default u-text-1">Si buscas algún producto en especial</h4>
        <a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
           class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
            aquí</a>
        <a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
           class="u-border-none u-btn u-button-style u-custom-color-4 u-custom-font u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-hover-custom-color-1 u-text-hover-white u-btn-2">Encuéntralo
            aquí</a>
    </section>
    <section
            class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-section-9"
            src="" data-image-width="390" data-image-height="410" id="sec-e0c7">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
            <h4 class="u-align-left-xs u-text u-text-default u-text-1">Si buscas algún producto en especial</h4>
            <a href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>"
               class="u-black u-border-none u-btn u-button-style u-custom-font u-hover-custom-color-1 u-text-hover-white u-btn-1">Encuéntralo
                aquí</a>
        </div>
    </section>
    <section class="u-clearfix u-container-align-center-xl u-section-10" id="carousel_73c2">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h2 class="u-align-center u-text u-text-body-color u-text-default u-text-1">ENCUENTRA TU TIENDA / DISTRIBUIDOR MÁS
                CERCANO</h2>
            <p class="u-align-center u-custom-font u-text u-text-default u-text-2">¡Sólo selecciona tu estado y conoce la
                lista de nuestros distribuidores!</p>
            <div class="u-clearfix u-expanded-width u-hidden-sm u-hidden-xs u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                            <div class="u-container-layout u-valign-bottom-xl u-container-layout-1">
                                <?php
                                foreach ($distribuidores_marca as $distribuidor) {?>
                                    <p><?= $this->Html->link($distribuidor['Distribuidor']['nombre'],array('action'=>'por_marca','controller'=>'distribuidors',$distribuidor['Distribuidor']['nombre'],$region),array('style'=>'color:black'))?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-40 u-image-1"
                             data-image-width="908" data-image-height="573">
                            <?= $this->Element('map')?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buscar u-absolute-hcenter-lg u-absolute-hcenter-md u-absolute-hcenter-xl u-border-2 u-border-grey-25 u-border-no-left u-border-no-right u-border-no-top u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-expanded-width-sm u-expanded-width-xs u-form u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-form-1">
                <div class="u-form-group u-form-select u-label-none u-form-group-1">
                    <div class="u-form-select-wrapper">
                        <?php
                        $marcas = array();
                        foreach ($distribuidores_marca as $distribuidor) {
                            $marcas[$distribuidor['Distribuidor']['nombre']] = $distribuidor['Distribuidor']['nombre'];
                        }
                        echo $this->Form->input('distribuidor', array('onchange' => 'javascript:buscar_marca(this.value,"ve")', 'empty' => 'Seleccionar Distribuidor', 'type' => 'select', 'options' => $marcas, 'class' => 'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-1'));
                        ?>
                    </div>
                </div>
            </div>
            <img class="u-align-center-sm u-align-center-xs u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-image-default u-image-2"
                 src="<?= $this->Html->url('/img/venezuela.png')?>" alt="" data-image-width="908" data-image-height="573">
        </div>
    </section>
    <section class="u-clearfix u-custom-color-2 u-section-11" id="sec-dfbb">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-1"
                                 src="<?= $this->Html->url('/img/Group268.png')?>" alt="" data-image-width="166" data-image-height="165"
                                 data-href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors',$region))?>">
                            <p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-1">
                                DONDE COMPRAR</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                            <img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-2"
                                 src="<?= $this->Html->url('/img/Group99.png')?>" alt="" data-image-width="165" data-image-height="165"
                                 data-href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos',$region))?>">
                            <p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-2">
                                BUSCAR MI PIEZA</p>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                            <img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-3"
                                 src="<?= $this->Html->url('/img/Group100.png')?>" alt="" data-image-width="165" data-image-height="165"
                                 data-href="<?= $this->Html->url(array('action'=>'landing','controller'=>'pages',$region))?>">
                            <p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-3">
                                QUIERO SER DISTRIBUIDOR</p	>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php }else if ($region == 'latam'){?>
	<section class="u-carousel u-slide u-block-584d-1" id="carousel_78ac" data-interval="5000" data-u-ride="carousel">
		<ol class="u-carousel-indicators u-block-584d-5">
			<li data-u-target="#carousel_78ac" class="u-active u-active-custom-color-1 u-grey-30 u-shape-circle"
				data-u-slide-to="0" style="width: 8px; height: 8px;"></li>
			<li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle" data-u-slide-to="1"
				style="width: 8px; height: 8px;"></li>
			<li data-u-target="#carousel_78ac" class="u-active-custom-color-1 u-grey-30 u-shape-circle"
				style="width: 8px; height: 8px;" data-u-slide-to="2"></li>
		</ol>
		<div class="u-carousel-inner" role="listbox">
			<div class="u-active u-align-center u-carousel-item u-clearfix u-image u-section-1-1" src=""
				 data-image-width="1728" data-image-height="972">
				<div class="u-clearfix u-sheet u-sheet-1">
					<div class="u-clearfix u-group-elements u-valign-middle u-group-elements-1">
						<h2 class="u-align-right u-custom-font u-subtitle u-text u-text-1">Autopartes globalmente
							reconocidas para<br>
						</h2>
						<h2 class="negativo u-align-right u-custom-font u-subtitle u-text u-text-white u-text-2">mecánicos
							expertos<br>
						</h2>
					</div>
					<img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/FIRMA1.png')?>" alt=""
						 data-image-width="371" data-image-height="134">
				</div>
			</div>
			<div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-2" src=""
				 data-image-width="1245" data-image-height="700">
				<div class="u-clearfix u-sheet u-sheet-1">
					<h2 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-subtitle u-text u-text-1">
						Somos una<br>compañía global
					</h2>
					<h3 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-custom-font u-text u-text-2">
						enfocada en cr<span style="font-weight: 700;"></span>ear productos con tecnología avanzada,&nbsp;capaces
						de mover al mundo.
					</h3>
				</div>
			</div>
			<div class="u-align-center u-carousel-item u-clearfix u-image u-section-1-3" src="" data-image-width="1728"
				 data-image-height="940">
				<div class="u-clearfix u-sheet u-sheet-1">
					<img class="u-align-right u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/Los-Expertos-Eligen-Denso.png')?>"
						 alt="" data-image-width="800" data-image-height="392">
					<a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'catalogos',$region))?>"
					   class="u-align-right u-black u-border-none u-btn u-button-style u-hover-black u-btn-1">ver
						catálogos</a>
				</div>
			</div>
		</div>
		<a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-584d-3"
		   href="#carousel_78ac" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
					  d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
					  d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
			<span class="sr-only">
          <svg viewBox="0 0 129 129"><path
					  d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path
					  d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg>
        </span>
		</a>
		<a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-584d-6"
		   href="#carousel_78ac" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 129 129"><path
					  d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
					  d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
			<span class="sr-only">
          <svg viewBox="0 0 129 129"><path
					  d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path
					  d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg>
        </span>
		</a>
	</section>
	<section class="u-clearfix u-section-4" id="sec-28ea">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h2 class="u-align-center u-text u-text-default u-text-1">BUJÍAS Y REPUESTOS DE CALIDAD</h2>
			<div class="u-clearfix u-expanded-width u-gutter-20 u-layout-spacing-left-right u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-col">
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-1"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'bujias',$region))?>">
									<div class="u-container-layout u-container-layout-1"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-2"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'filtros',$region))?>">
									<div class="u-container-layout u-container-layout-2"></div>
								</div>
							</div>
						</div>
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-3"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'sensores_oxigeno',$region))?>">
									<div class="u-container-layout u-container-layout-3"></div>
								</div>
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-4"
									 data-image-width="697" data-image-height="285" data-href="<?= $this->Html->url(array('controller'=>'pages','action'=>'compresores',$region))?>">
									<div class="u-container-layout u-valign-top u-container-layout-4"></div>
								</div>
							</div>
						</div>
						<div class="u-size-20">
							<div class="u-layout-row">
								<div class="u-container-align-center u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-5"
									 data-image-width="697" data-image-height="285">
									<div class="u-container-layout u-container-layout-5"></div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</section>
	<section class="u-align-left u-clearfix u-hidden-xs u-image u-section-5" src="" data-image-width="1728"
			 data-image-height="669" id="sec-ad89">
		<h3 class="u-align-left-sm u-align-left-xs u-align-right-lg u-align-right-md u-align-right-xl u-hidden-xs u-text u-text-default-lg u-text-default-xl u-text-white u-text-1">
			75 años innovando en<br>tecnología automotriz
		</h3>
		<a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
		   class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">CONOCE
			MÁS</a>
	</section>
	<section
			class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-hidden-xxl u-image u-image-contain u-section-6"
			src="" data-image-width="390" data-image-height="665" id="sec-e102">
		<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
			<h3 class="u-text u-text-default u-text-white u-text-1">75 años innovando en tecnología automotriz</h3>
			<a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
			   class="u-black u-border-2 u-border-black u-btn u-button-style u-custom-font u-hover-black u-text-hover-white u-btn-1">conoce
				más</a>
		</div>
	</section>
	<section class="u-align-center u-clearfix u-section-7" id="sec-21f2">
		<div class="u-align-left u-clearfix u-sheet u-sheet-1">
			<h3 class="u-align-center u-text u-text-custom-color-4 u-text-default u-text-1">NUESTROS PRODUCTOS CUENTAN
				CON: </h3>
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-1"><img
										src="<?= $this->Html->url('/img/image19.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-2">Calidad, garantía y durabilidad</p>
						</div>
					</div>
					<div class="u-align-center u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-2"><img
										src="<?= $this->Html->url('/img/image17.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-3">Amplia cobertura en marcas y modelos</p>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-3"><img
										src="<?= $this->Html->url('/img/image18.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-4">Fácil instalación</p>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span
									class="u-align-center u-file-icon u-icon u-icon-circle u-icon-4"><img
										src="<?= $this->Html->url('/img/image16.png')?>" alt=""></span>
							<p class="u-align-center u-custom-font u-text u-text-5">Seguridad, desempeño y cuidado
								ambiental</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="u-clearfix u-container-align-center-xl u-section-10" id="carousel_73c2">
		<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
			<h2 class="u-align-center u-text u-text-body-color u-text-default u-text-1">ENCUENTRA A LOS DISTRIBUIDORES OFICIALES DE TU PAÍS</h2>
			<p class="u-align-center u-custom-font u-text u-text-default u-text-2">¡Sólo selecciona tu país y conoce la
				lista de nuestros distribuidores!</p>
			<div class="u-clearfix u-expanded-width u-hidden-sm u-hidden-xs u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-row">
						<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
							<div class="u-container-layout u-valign-bottom-xl u-container-layout-1">
								<p class="u-custom-font u-text u-text-custom-color-4 u-text-3">
									<?php
									$paises = array(
											'ar'=>'Argentina',
											'bb'=>'Barbados',
											'bo'=>'Bolivia',
											'bs'=>'Bahamas',
											'bz'=>'Belice',
											'cl'=>'Chile',
											'co'=>'Colombia',
											'cr'=>'Costa Rica',
											'do'=>'República Dominicana',
											'ec'=>'Ecuador',
											'gt'=>'Guatemala',
											'hn'=>'Honduras',
											'mx'=>'México',
											'ni'=>'Nicaragua',
											'pa'=>'Panamá',
											'pe'=>'Perú',
											'pr'=>'Puerto Rico',
											'py'=>'Paraguay',
											'sv'=>'El Salvador',
											'tt'=>'Trinidad y Tobago',
											'uy'=>'Uruguay',
											've'=>'Venezuela',
									);
									$mitad = (sizeof($paises)/2);
									$i=0;
									foreach ($paises as $key=>$value){
										if ($i==$mitad){
											echo '</p><p class="u-custom-font u-text u-text-custom-color-4 u-text-4" style="margin: -53% 0 0 272px;">';
										}
										echo $this->Html->link($value,array('controller'=>'distribuidors','action'=>'por_pais',$key,$region),array('style'=>'color:#5f6367'))."<br>";
										$i++;
									}
									?>
								</p>
							</div>
						</div>
						<div class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-30 u-image-1" style="background-image: url(<?= $this->Html->url('/img/denso_latam.png')?>"
							 data-image-width="908" data-image-height="573">
							<div class="u-container-layout u-container-layout-2"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="buscar u-absolute-hcenter-lg u-absolute-hcenter-md u-absolute-hcenter-xl u-border-2 u-border-grey-25 u-border-no-left u-border-no-right u-border-no-top u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-expanded-width-sm u-expanded-width-xs u-form u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-form-1">
				<div class="u-form-group u-form-select u-label-none u-form-group-1">
					<div class="u-form-select-wrapper">
						<?php
							echo $this->Form->input('estado',array('onchange'=>'javascript:buscar_pais(this.value,"latam")','empty'=>'Seleccionar País','type'=>'select','options'=>$paises,'class'=>'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-1'));
						?>
					</div>
				</div>
			</div>

			<img class="u-align-center-sm u-align-center-xs u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-image-default u-image-2"
				 src="<?= $this->Html->url('/img/denso_latam.png')?>" alt="" data-image-width="908" data-image-height="573">
		</div>
	</section>

	<section class="u-align-center u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle-lg u-valign-middle-xl u-valign-middle-xxl u-dialog-section-15" id="sec-6157" data-dialog-show-on="timer" data-dialog-show-on-list="305746283">
		<div class="u-align-left u-container-style u-dialog u-shape-rectangle u-white u-dialog-1">
			<div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-1">
				<img class="u-expanded-width-xs u-hidden-sm u-hidden-xs u-image u-image-1" data-image-width="551" data-image-height="1000" src="<?= $this->Html->url('/img/denso_latam.png')?>">
				<img class="u-image u-image-default u-image-2" src="<?= $this->Html->url('/img/Logo_DENSO.jpg')?>" alt="" data-image-width="1158" data-image-height="387">
				<h3 class="u-text u-text-1">Bienvenidos a DENSO Latinoamérica</h3>
				<p class="u-text u-text-2">Para poder consultar los modelos correspondientes, catálogos y distribuidores, por favor selecciona el país</p>
				<div class="col-30">
					<ul class="u-custom-list u-file-icon u-text u-text-body-color u-text-3">
						<li style="padding-left: 6px;">
							<div class="u-list-icon">
								<img src="<?= $this->Html->url('/img/bandera_chile.png')?>" alt="" style="font-size: 1.2em; margin: -1.2em;">
							</div>
							<a href="./cl" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">Chile</a>
						</li>
					</ul>
					<ul class="u-custom-list u-file-icon u-text u-text-body-color u-text-4">
						<li style="padding-left: 6px;">
							<div class="u-list-icon">
								<img src="<?= $this->Html->url('/img/bandera_colombia.png')?>" alt="" style="font-size: 1.2em; margin: -1.2em;">
							</div>
							<a href="./co" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">Colombia</a>
						</li>
					</ul>
					<ul class="u-custom-list u-file-icon u-text u-text-body-color u-text-5">
						<li style="padding-left: 6px;">
							<div class="u-list-icon">
								<img src="<?= $this->Html->url('/img/bandera_ecuador.png')?>" alt="" style="font-size: 1.2em; margin: -1.2em;">
							</div>
							<a href="./ec" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">Ecuador</a>
						</li>
					</ul>
					<ul class="u-custom-list u-file-icon u-text u-text-body-color u-text-6">
						<li style="padding-left: 6px;">
							<div class="u-list-icon">
								<img src="<?= $this->Html->url('/img/bandera_mexico.png')?>" alt="" style="font-size: 1.2em; margin: -1.2em;">
							</div>
							<a href="./mx" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">México</a>
						</li>
					</ul>
					<ul class="u-custom-list u-file-icon u-text u-text-body-color u-text-6">
						<li style="padding-left: 6px;">
							<div class="u-list-icon">
								<img src="<?= $this->Html->url('/img/bandera_peru.png')?>" alt="" style="font-size: 1.2em; margin: -1.2em;">
							</div>
							<a href="./pe" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">Perú</a>
						</li>
					</ul>
                    <ul class="u-custom-list u-file-icon u-text u-text-body-color u-text-6">
                        <li style="padding-left: 6px;">
                            <div class="u-list-icon">
                                <img src="<?= $this->Html->url('/img/bandera_venezuela.png')?>" alt="" style="font-size: 1.2em; margin: -1.2em;">
                            </div>
                            <a href="./ve" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">Venezuela</a>
                        </li>
                    </ul>
				</div>
				<div class="col-60">
                    <ul class="u-custom-list u-file-icon u-text u-text-body-color u-text-3" style="width:100%">
                        <li style="padding-left: 6px;">
                            <div class="u-list-icon">
                                <img src="<?= $this->Html->url('/img/bandera_pr.png')?>" alt="" style="font-size: 1.2em; margin: -1.2em;">
                            </div>
                            <a href="./pr" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">Puerto Rico</a>
                        </li>
                    </ul>
                    <ul class="u-custom-list u-file-icon u-text u-text-body-color u-text-6" style="width:100%">
						<li style="padding-left: 6px;">
							<a href="./car" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">Región Caribe</a>
						</li>
					</ul>
					<ul class="u-custom-list u-file-icon u-text u-text-body-color u-text-6" style="width:100%">
						<li style="padding-left: 6px;">
							<a href="./cam" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">Región Centroamérica</a>
						</li>
					</ul>
					<ul class="u-custom-list u-file-icon u-text u-text-body-color u-text-6" style="width:100%">
						<li style="padding-left: 6px; ">
							<a href="javascript:hideModal()" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">Resto de Latinoamérica</a>
						</li>
					</ul>
				</div>

			</div><button class="u-dialog-close-button u-icon u-text-grey-50 u-icon-1" id="closeModal" style="display: none">
				<svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 409.806 409.806" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4e2d"></use></svg>
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 409.806 409.806" x="0px" y="0px" id="svg-4e2d" style="enable-background:new 0 0 409.806 409.806;"><g><g><path d="M228.929,205.01L404.596,29.343c6.78-6.548,6.968-17.352,0.42-24.132c-6.548-6.78-17.352-6.968-24.132-0.42    c-0.142,0.137-0.282,0.277-0.42,0.42L204.796,180.878L29.129,5.21c-6.78-6.548-17.584-6.36-24.132,0.42    c-6.388,6.614-6.388,17.099,0,23.713L180.664,205.01L4.997,380.677c-6.663,6.664-6.663,17.468,0,24.132    c6.664,6.662,17.468,6.662,24.132,0l175.667-175.667l175.667,175.667c6.78,6.548,17.584,6.36,24.132-0.42    c6.387-6.614,6.387-17.099,0-23.712L228.929,205.01z"></path>
						</g>
					</g></svg>
			</button>
		</div>
	</section>
	<script>
		function closeModal(){
			document.getElementById('closeModal').click();
		}
	</script>
	<style>
		.u-dialog-section-15 .u-dialog-1 {
			width: 800px;
			min-height: 601px;
			background-image: none;
			margin: 60px auto;
		}

		.u-dialog-section-15 .u-container-layout-1 {
			padding: 45px 30px 30px;
		}

		.u-dialog-section-15 .u-image-1 {
			width: 348px;
			height: 526px;
			margin: 0 0 0 auto;
		}

		.u-dialog-section-15 .u-image-2 {
			width: 217px;
			height: 73px;
			margin: -506px auto 0 0;
		}

		.u-dialog-section-15 .u-text-1 {
			margin: 52px 378px 0 0;
		}

		.u-dialog-section-15 .u-text-2 {
			margin: 20px 378px 0 0;
		}

		.u-dialog-section-15 .u-text-3 {
			padding-left: 15px;
			margin: 20px 378px 0 0;
		}

		.u-dialog-section-15 .u-btn-1 {
			background-image: none;
			font-size: 1.125rem;
			padding: 0;
		}

		.u-dialog-section-15 .u-text-4 {
			padding-left: 15px;
			margin: 0 378px 0 0;
		}

		.u-dialog-section-15 .u-btn-2 {
			background-image: none;
			font-size: 1.125rem;
			padding: 0;
		}

		.u-dialog-section-15 .u-text-5 {
			padding-left: 15px;
			margin: 0 378px 0 0;
		}

		.u-dialog-section-15 .u-text-6 {
			padding-left: 15px;
			margin: 0 378px 0 0;
		}

		.u-dialog-section-15 .u-text-7 {
			padding-left: 15px;
			font-size: 1.125rem;
			margin: 15px 378px 0 0;
		}

		.u-dialog-section-15 .u-icon-1 {
			width: 16px;
			height: 16px;
			left: auto;
			top: 14px;
			position: absolute;
			right: 14px;
		}

		@media (max-width: 1399px) {
			.u-dialog-section-15 .u-image-2 {
				width: 217px;
			}
		}

		@media (max-width: 1199px) {
			.u-dialog-section-15 .u-dialog-1 {
				height: auto;
			}
		}

		@media (max-width: 991px) {
			.u-dialog-section-15 .u-dialog-1 {
				width: 720px;
				margin-top: 138px;
			}

			.u-dialog-section-15 .u-container-layout-1 {
				padding-top: 29px;
			}

			.u-dialog-section-15 .u-text-1 {
				margin-right: 298px;
			}

			.u-dialog-section-15 .u-text-2 {
				margin-right: 298px;
			}

			.u-dialog-section-15 .u-text-3 {
				margin-right: 298px;
			}

			.u-dialog-section-15 .u-text-4 {
				margin-right: 298px;
			}

			.u-dialog-section-15 .u-text-5 {
				margin-right: 298px;
			}

			.u-dialog-section-15 .u-text-6 {
				margin-right: 298px;
			}

			.u-dialog-section-15 .u-text-7 {
				margin-right: 298px;
			}
		}

		@media (max-width: 767px) {
			.u-dialog-section-15 .u-dialog-1 {
				width: 540px;
				margin-top: 124px;
			}

			.u-dialog-section-15 .u-container-layout-1 {
				padding-top: 45px;
				padding-left: 25px;
				padding-right: 25px;
			}

			.u-dialog-section-15 .u-image-2 {
				margin-top: 36px;
			}

			.u-dialog-section-15 .u-text-1 {
				width: auto;
				margin-right: 158px;
			}

			.u-dialog-section-15 .u-text-2 {
				width: auto;
				margin-right: 158px;
			}

			.u-dialog-section-15 .u-text-3 {
				width: auto;
				margin-right: 158px;
			}

			.u-dialog-section-15 .u-text-4 {
				width: auto;
				margin-right: 158px;
			}

			.u-dialog-section-15 .u-text-5 {
				width: auto;
				margin-right: 158px;
			}

			.u-dialog-section-15 .u-text-6 {
				width: auto;
				margin-right: 158px;
			}

			.u-dialog-section-15 .u-text-7 {
				font-size: 1rem;
				width: auto;
				margin-right: 158px;
			}
		}

		@media (max-width: 575px) {
			.u-dialog-section-15 .u-dialog-1 {
				width: 340px;
				margin-top: 33px;
				margin-bottom: 57px;
			}

			.u-dialog-section-15 .u-container-layout-1 {
				padding: 0 20px;
			}

			.u-dialog-section-15 .u-image-1 {
				height: 484px;
				margin-right: initial;
				margin-left: initial;
				width: auto;
			}

			.u-dialog-section-15 .u-image-2 {
				margin-top: -373px;
			}

			.u-dialog-section-15 .u-text-1 {
				margin-top: 430px;
				margin-right: 0;
			}

			.u-dialog-section-15 .u-text-2 {
				margin-right: 0;
			}

			.u-dialog-section-15 .u-text-3 {
				margin-right: 0;
			}

			.u-dialog-section-15 .u-text-4 {
				margin-right: 0;
			}

			.u-dialog-section-15 .u-text-5 {
				margin-right: 0;
			}

			.u-dialog-section-15 .u-text-6 {
				margin-right: 0;
			}

			.u-dialog-section-15 .u-text-7 {
				margin-right: 0;
			}
		}
	</style>
<?php } ?>

<script>
	function buscar_estado(valor,region){
		url = "./distribuidors/por_estado/"+valor+"/"+region;
		location.assign(url);
	}
	function buscar_pais(valor,region){
		url = "./distribuidores/"+valor+"/"+region;
		location.assign(url);
	}
	function buscar_marca(valor,region){
		url = "./distribuidors/por_marca/"+valor+"/"+region;
		location.assign(url);
	}
</script>

