<?php
echo $this->Html->css(
	array(
		'ListaDistribuidores',
	),
	array('inline'=>false)
);

echo $this->Html->script(
	array(
		'https://polyfill.io/v3/polyfill.min.js?features=default',
		'https://ajax.googleapis.com/ajax/libs/handlebars/4.7.7/handlebars.min.js',
		'https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js',
	),
	array('inline'=>false)
);
?>
<?php
$paises = array(
		'ar'=>'Argentina',
		'ag'=>'Antigua y Barbuda',
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
		'gy'=>'Guyana',
		'ht'=>'Haití',
		'hn'=>'Honduras',
		'ja'=>'Jamaica',
		'mx'=>'México',
		'ni'=>'Nicaragua',
		'pa'=>'Panamá',
		'pe'=>'Perú',
		'pr'=>'Puerto Rico',
		'py'=>'Paraguay',
		'sr'=>'Suriname',
		'sv'=>'El Salvador',
		'tt'=>'Trinidad y Tobago',
		'uy'=>'Uruguay',
		've'=>'Venezuela',
);
?>
<?php if ($region=='latam'){?>
	<section class="u-clearfix u-container-align-center-xl u-section-10" id="carousel_73c2" style="margin-bottom:20px">
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
									$mitad = round((sizeof($paises)/2));
									$i=0;
									foreach ($paises as $key=>$value){
										if ($i==$mitad){
											echo '</p><p class="u-custom-font u-text u-text-custom-color-4 u-text-4" style="margin: -52% 0 0 272px;">';
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
							echo $this->Form->input('estado',array('onchange'=>'javascript:buscar_estado(this.value,"mx")','empty'=>'Seleccionar Estado','type'=>'select','options'=>$paises,'class'=>'u-border-grey-5 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-input u-input-rectangle u-text-grey-40 u-input-1'));
						?>
					</div>
				</div>
			</div>

			<img class="u-align-center-sm u-align-center-xs u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-image-default u-image-2"
				 src="<?= $this->Html->url('/img/denso_latam.png')?>" alt="" data-image-width="908" data-image-height="573">
		</div>
	</section>
<?php } else if ($region=='mx'){?>
	<section class="u-clearfix u-container-align-center-xl u-section-1" id="sec-359b">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h1 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-center-xxl u-align-left-xs u-text u-text-default u-text-1">Distribuidores DENSO</h1>
			<p class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-center-xxl u-align-left-xs u-custom-font u-text u-text-custom-color-4 u-text-default u-text-2">¡Solo selecciona tu estado y conoce la lista de nuestros distribuidores!</p>
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-35 u-image-1" data-image-width="908" data-image-height="573">
                        <?= $this->Element('map')?>
                    </div>
                </div>
            </div>
		</div>
	</section>
<?php }else { ?>
	<?php
		$mapa = array(
			'co'=>'/img/colombia.png',
			'cl'=>'/img/chile.png',
			'ec'=>'/img/ecuador.png',
			'pe'=>'/img/peru.png',
			've'=>'/img/venezuela.png',
			'car'=>'/img/caribe.png',
			'cam'=>'/img/centroamerica.png',
		);
	?>
	<section class="u-clearfix u-container-align-center-xl u-section-1" id="sec-359b">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h1 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-center-xxl u-align-left-xs u-text u-text-default u-text-1">
				<?php
				if ($region == 'co'){
					echo "Tiendas / Distribuidores DENSO";
				}else{
					echo "Distribuidores DENSO";
				}
				?>

			</h1>
			<p class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-center-xxl u-align-left-xs u-custom-font u-text u-text-custom-color-4 u-text-default u-text-2">¡Solo selecciona tu estado y conoce la lista de nuestros distribuidores!</p>
			<div class="u-clearfix u-expanded-width u-hidden-sm u-hidden-xs u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-row">
						<div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
							<div class="u-container-layout u-valign-bottom-xl u-container-layout-1">
								<?php
									$titulo = "";
									if ($region == 'cam' || $region == 'car'){
										foreach ($distribuidores_marca as $distribuidor) {
											if ($titulo != $distribuidor['Distribuidor']['pais']){
												echo "<b style='font-size: 20px; color:black'>".$paises[$distribuidor['Distribuidor']['pais']]."</b>";
												$titulo = $distribuidor['Distribuidor']['pais'];
											}
									?>
										<div style="margin-left: 20px; margin-bottom: 5px"><?= $this->Html->link($distribuidor['Distribuidor']['nombre'],array('action'=>'por_marca','controller'=>'distribuidors',$distribuidor['Distribuidor']['nombre'],$region),array('style'=>'color:black'))?></div>
									<?php } ?>
								<?php }else{
										if ($region == 'co'){
											echo $this->Html->link("Tiendas Certificadas",array('action'=>'index','controller'=>'distribuidoresCertificados',$region),array('style'=>'color:black'));
										}
										?>
								<?php foreach ($distribuidores_marca as $distribuidor) {?>
									<p><?= $this->Html->link($distribuidor['Distribuidor']['nombre'],array('action'=>'por_marca','controller'=>'distribuidors',$distribuidor['Distribuidor']['nombre'],$region),array('style'=>'color:black'))?></p>
								<?php
										}
									}
								?>
							</div>
						</div>
						<?php
							if($region == 'co' || $region == 've'){
						?>
								<div class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-40 u-image-1" data-image-width="908" data-image-height="573" style="background-image: url(<?= $this->Html->url($mapa[$region])?>)">
									<?= $this->Element('map')?>
								</div>

						<?php }else{?>
							<div class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-40 u-image-1" data-image-width="908" data-image-height="573" style="background-image: url(<?= $this->Html->url($mapa[$region])?>)">
								<div class="u-container-layout u-container-layout-2"></div>
							</div>
						<?php }?>
					</div>
				</div>
			</div>
			<div class="buscar u-absolute-hcenter-lg u-absolute-hcenter-md u-absolute-hcenter-xl u-border-2 u-border-grey-25 u-border-no-left u-border-no-right u-border-no-top u-expanded-height-lg u-expanded-height-md u-expanded-height-xl u-expanded-width-sm u-expanded-width-xs u-form u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-form-1">
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
			</div>
			<img class="u-align-center-sm u-align-center-xs u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-image-default u-image-2" src="<?= $this->Html->url($mapa[$region])?>" alt="" data-image-width="908" data-image-height="573">
		</div>
	</section>
<?php } ?>

<script>
	function buscar_estado(valor,region){
		url = "../distribuidors/por_estado/"+valor+"/"+region;
		location.assign(url);
	}
	function buscar_marca(valor,region){
		url = "../distribuidors/por_marca/"+valor+"/"+region;
		location.assign(url);
	}
</script>
