<?php
echo $this->Html->css(
		array(
				'DistribuidoresEstado',
		),
		array('inline'=>false)
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
		<h1 class="u-align-center u-custom-font u-text u-text-default u-text-1">Tiendas Certificadas DENSO Colombia</h1>
		<p class="u-align-center u-custom-font u-text u-text-custom-color-4 u-text-default u-text-2">Conoce a las tiendas que han sido certificadas por DENSO. Garantizan la autenticidad de productos DENSO y tu compra.</p>
		<?php
			$ciudad = "";
			foreach ($distribuidores as $distribuidor):
				if ($ciudad != $distribuidor['DistribuidoresCertificado']['ciudad']){
					echo "<h2>".$distribuidor['DistribuidoresCertificado']['ciudad']."</h2>";
					$ciudad = $distribuidor['DistribuidoresCertificado']['ciudad'];
				}
				echo $this->Element("ficha_distribuidor_certificado",array('distribuidor'=>$distribuidor));
			endforeach;
		?>
	</div>
</section>
