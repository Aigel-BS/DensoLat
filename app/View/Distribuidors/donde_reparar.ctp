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
<style>
    .texto_parrafo{
        font-size: 1.1em !important;
    }
</style>
	<section class="u-clearfix u-container-align-center-xl u-section-1" id="sec-359b">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h1 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-center-xxl u-align-left-xs u-text u-text-default u-text-1">Centros Autorizados DENSO para Reparación</h1>
			<p class="texto_parrafo">
                En DENSO, nos comprometemos a ofrecerte lo mejor en reparación y mantenimiento de tu equipo original. Por eso, hemos seleccionado cuidadosamente una red de talleres autorizados que cumplen con nuestros altos estándares de calidad.
            </p>
            <h4>
                ¡Encuentra el taller más cercano y asegura la mejor atención para tu equipo DENSO!
            </h4>
            <div class="u-layout">
                <div class="u-layout-row">
                    <div style="min-width: 100%;max-width: 100%;min-height: 75vh;margin-bottom: 100px;" class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-35 u-image-1" data-image-width="908" data-image-height="573">
                        <?= $this->Element('map_reparadores')?>
                    </div>
                </div>
            </div>
            <h3>
                ¿Por qué elegir un taller autorizado DENSO?
            </h3>
            <ul>
                <li style="color:black">
                    Piezas Originales: Nuestros talleres utilizan únicamente piezas originales DENSO, garantizando que cada reparación mantenga la integridad y el rendimiento de tu equipo DENSO.
                </li>
                <li style="color:black">
                    Expertos Capacitados: Los técnicos en nuestros talleres están capacitados y certificados para trabajar con productos DENSO, asegurando que cada servicio se realice con el conocimiento y la experiencia necesarios.
                </li>
                <li style="color:black">
                    Calidad Asegurada: Al llevar tu equipo DENSO a un taller autorizado, no solo aseguras una reparación de la más alta calidad, sino que también reduces el riesgo de futuras descomposturas.
                </li>
            </ul>
            <p class="texto_parrafo">
                No arriesgues la calidad de tu vehículo. Evita llevar tus piezas a talleres no autorizados que pueden comprometer el rendimiento y la seguridad de tu equipo. Confía en DENSO y en nuestros talleres autorizados para mantener tu vehículo en óptimas condiciones.
            </p>
		</div>
	</section>
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
