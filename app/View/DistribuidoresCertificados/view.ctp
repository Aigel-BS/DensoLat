<?php
echo $this->Html->css(
	array(
		'ListaDistribuidores',
	),
	array('inline'=>false)
);
?>
<style>
	.titulo_sucursal {
		position: absolute;
		text-align: center;
		width: 44%;
		left: 4%;
		top: 5%;
		color: white;
		font-weight: bolder;
	}
</style>
<section class="u-clearfix u-container-align-center-xl u-section-10" id="carousel_73c2" style="margin-bottom:20px">
	<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
		<h2 class="u-align-center u-text u-text-body-color u-text-default u-text-1">TIENDAS CERTIFICADAS DENSO</h2>
		<div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
			<div class="u-layout">
				<div class="u-layout-row">
					<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
						<div class="u-container-layout u-container-layout-1">
							<h3 class="u-align-left-xs u-custom-font u-text u-text-default u-text-3"><?php echo $distribuidor['DistribuidoresCertificado']['nombre']?></h3>
							<h4 class="u-align-left-xs u-text u-text-custom-color-4 u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-default-xxl u-text-4">
								<?php echo $distribuidor['DistribuidoresCertificado']['direccion'].($distribuidor['DistribuidoresCertificado']['zona']!="" ? ", ".$distribuidor['DistribuidoresCertificado']['zona'] : "").($distribuidor['DistribuidoresCertificado']['ciudad']!="" ? ", ".$distribuidor['DistribuidoresCertificado']['ciudad'] : "") ?>
							</h4>
							<div class="u-clearfix u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gutter-0 u-layout-wrap u-layout-wrap-2">
								<div class="u-layout">
										<div class="u-layout-row">
											<div class="u-container-style u-layout-cell u-size-20">
												<div class="u-container-layout ">
													<a href="tel:<?php echo $distribuidor['DistribuidoresCertificado']['telefono']?>" class="u-active-none u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-custom-font u-hover-none u-none u-radius-0 u-text-hover-custom-color-1 u-top-left-radius-0 u-top-right-radius-0 u-btn-1"><span class="u-file-icon u-icon"><img src="<?= $this->Html->url('/img/Vector5.png')?>" alt=""></span>&nbsp;<?php echo $distribuidor['DistribuidoresCertificado']['telefono']?>
													</a>
													<a href="mailto:<?php echo $distribuidor['DistribuidoresCertificado']['email']?>" class="u-active-none u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-custom-font u-hover-none u-none u-radius-0 u-text-hover-custom-color-1 u-top-left-radius-0 u-top-right-radius-0 u-btn-1"><span class="u-file-icon u-icon"><img src="<?= $this->Html->url('/img/Vector-12.png')?>" alt=""></span>&nbsp;<?php echo $distribuidor['DistribuidoresCertificado']['email']?>
													</a>
												</div>
											</div>
										</div>
								</div>
							</div>
						</div>
					</div>
					<div class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-30 u-image-1" data-image-width="908" data-image-height="573">
						<div class="u-container-layout u-container-layout-2" style="background-image: url(<?= $this->Html->url('/img/distribuidores_certificados/'.$distribuidor['DistribuidoresCertificado']['id'].'.jpg')?>); background-size: cover;background-position: center;">
							<?= $this->Html->image('marco.png',array('style'=>'width:100%;height: 100%;'))?>
							<div class="titulo_sucursal">
								<?= $distribuidor['DistribuidoresCertificado']['nombre'] ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
