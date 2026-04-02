<?php if ($region!="latam"){?>
<section class="u-clearfix u-custom-color-2 u-section-<?= $section_subfooter?>" id="sec-bb1d">
	<div class="u-clearfix u-sheet u-sheet-1">
		<div class="u-expanded-width u-list u-list-1">
			<div class="u-repeater u-repeater-1">
				<div class="u-container-style u-list-item u-repeater-item">
					<div class="u-container-layout u-similar-container u-container-layout-1">
						<a href="<?= $this->Html->url(array('controller'=>'distribuidors','action'=>'donde_comprar',$region))?>">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="<?= $this->Html->url('/img/Group268.png')?>" alt="" data-image-width="166" data-image-height="165">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-1">DÓNDE COMPRAR</p>
						</a>
					</div>
				</div>
				<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
					<div class="u-container-layout u-similar-container u-container-layout-2">
						<a href="<?= $this->Html->url(array('controller'=>'productos','action'=>'buscar',$region))?>">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-2" src="<?= $this->Html->url('/img/Group99.png')?>" alt="" data-image-width="165" data-image-height="165">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-2">BUSCAR MI PIEZA</p>
						</a>
					</div>
				</div>
				<div class="u-container-align-center u-container-style u-list-item u-repeater-item">
					<div class="u-container-layout u-similar-container u-container-layout-3">
						<a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'landing','latam'))?>">
							<img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-3" src="<?= $this->Html->url('/img/Group100.png')?>" alt="" data-image-width="165" data-image-height="165">
							<p class="u-align-center u-custom-font u-text u-text-default u-text-palette-5-dark-3 u-text-3">QUIERO SER DISTRIBUIDOR</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

