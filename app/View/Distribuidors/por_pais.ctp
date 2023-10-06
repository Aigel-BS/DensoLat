<?php
echo $this->Html->css(
		array(
				'DistribuidoresEstado',
		),
		array('inline'=>false)
);
$codigos_pais = array(
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
?>
<style>
	.pill_cat {
		border: 1px solid rgb(119, 119, 119);
		padding: 7px;
		color: rgb(119, 119, 119);
		margin-right: 5px;
		margin-bottom: 5px;
		border-radius: 10px;
		float: left;
		font-size: 12px;
	}
</style>
<section class="u-clearfix u-container-align-center-xl u-section-1" id="sec-359b">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h1 class="u-align-center u-custom-font u-text u-text-default u-text-1">Distribuidores DENSO</h1>
		<p class="u-align-center u-custom-font u-text u-text-custom-color-4 u-text-default u-text-2"><?php echo $codigos_pais[$pais]?></p>
		<?php foreach ($distribuidores as $distribuidor):?>
			<?= $this->Element("ficha_distribuidor",array('distribuidor'=>$distribuidor))?>
		<?php endforeach;?>
	</div>
</section>
