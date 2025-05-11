<?php
echo $this->Html->css(
    array(
        'Sensores',
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
    .container {
        display: flex;
        flex-wrap: wrap; /* Permite que las columnas se ajusten en pantallas más pequeñas */
    }


    .column {
        flex: 1 1 50%; /* Crece y se encoge, ocupando el 50% del ancho */
        box-sizing: border-box; /* Incluye padding y border en el ancho total */
        border: 1px solid #ccc; /* Borde para visualización */
        height: 50vh;
    }


    @media (max-width: 600px) {
        .column {
            flex: 1 1 100%; /* En pantallas pequeñas, las columnas ocupan el 100% */
        }

    }
</style>
<h1 style="color: #444;font-weight: bolder;padding: 20px;font-size: 1.5em;font-family: DENSO-black;">INYECTORES AUTÉNTICOS DENSO</h1>
<div class="container" id="autenticidad">
    <div class="column" style="; height:50vh ;padding: 20px; /* Espaciado interno */background-color: darkgrey;background-image: url('<?= $this->Html->url('/img/inyectores.jpg')?>'); background-size: cover; background-position-y: center">

    </div>
    <div class="column" style="background-color: #e6e6e6;">
        <video width="100%" height="100%" autoplay muted controls>
            <source src="<?= $this->Html->url('/videos/inyectores.mp4')?>" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </div>
</div>
<div style="width:100%; background-color: #dc0a34; color:white; padding: 3%">
    <p style="font-weight: bold;font-size: 1.5rem;text-align: center !important;color: white;width: 100%">Con nuestra nueva caja y etiqueta encriptada, aseguras que tu inyector es 100% auténtico. <br><b>Evita falsificaciones, gana tranquilidad.</b></p>
</div>
<section class="u-clearfix u-section-4" >
    <div class="u-clearfix u-sheet u-sheet-1" >
        <div class="u-layout" id="comprar">
            <div class="u-layout-row u-container-align-center">
                <p style="font-weight: bold;font-size: 1.125rem;text-align: center;color: #3c3c3c;"> Los inyectores aftermarket para Common Rail Systems (CRS) de DENSO, aseguran calidad de equipo original y las piezas de reemplazo para sistemas diesel adecuadas para extender la vida de tu unidad y reducir emisiones contaminantes, maximizando la eficiencia de tu motor.</p>
                <h2 class="u-align-center u-text u-text-default u-text-palette-5-dark-1 u-text-1">DONDE COMPRAR INYECTORES AUTÉNTICOS CON TECNOLOGÍA DE ETIQUETAS INTELIGENTES:</h2>
                <div style="min-width: 100%;max-width: 100%;min-height: 75vh;margin-bottom: 100px;margin-top: 20px" class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-35 u-image-1" data-image-width="908" data-image-height="573">
                    <?= $this->Element('map_reparadores',array('title'=>'Distribuidores Autorizados Inyectores con tecnología QR'))?>
                </div>
            </div>
        </div>

        <h2 id="conoce" class="u-align-center u-text u-text-default u-text-palette-5-dark-1 u-text-1">LOS INYECTORES COMMON RAIL DENSO:</h2>
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-align-center-xl u-container-align-center-xxl u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-1">
                        <img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="<?= $this->Html->url('/img/Sprout.png')?>" alt="" data-image-width="128" data-image-height="150">
                        <p class="u-align-center u-custom-font u-text u-text-default u-text-2">Reducen las emisiones contaminantes
                        </p>
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-2">
                        <img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-2" src="<?= $this->Html->url('/img/shake hand.png')?>" alt="" data-image-width="68" data-image-height="76">
                        <p class="u-align-center u-custom-font u-text u-text-default u-text-3">Mayor calidad y sistemas diseñados para cumplir con tus exigencias
                        </p>
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-3">
                        <img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-3" src="<?= $this->Html->url('/img/electricity.png')?>" alt="" data-image-width="102" data-image-height="73">
                        <p class="u-align-center u-custom-font u-text u-text-default u-text-4">El sistema Common Rail (CRS) con mayor inyección del mundo
                        </p>
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-4">
                        <img class="u-align-center u-image u-image-contain u-image-default u-preserve-proportions u-image-4" src="<?= $this->Html->url('/img/Car.png')?>" alt="" data-image-width="60" data-image-height="74">
                        <p class="u-align-center u-custom-font u-text u-text-default u-text-5">Unidades exclusivas para el mercado de Aftermarket.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-align-left u-clearfix u-hidden-sm u-hidden-xs u-image u-section-5" style="background-image:url('<?= $this->Html->url('/img/Group-300-2-2.png')?>')" src="" data-image-width="1728" data-image-height="1536" id="sec-81d9">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-body-alt-color u-text-1" style="margin-top: 25%">¿Cómo funcionan los inyectores Common Rail DENSO?
        </h3>
        <p class="u-custom-font u-large-text u-text u-text-body-alt-color u-text-variant u-text-2">
            <span style="font-weight: 700;"></span>
            <span style="font-weight: 700;">El sistema de inyección de combustible garantiza una entrega precisa de combustible al motor. Consta de una bomba de inyección, boquillas de inyección, filtro y tanque de combustible. El combustible se extrae del tanque, filtrado y entregado a la bomba, donde se comprime y se dirige a las boquillas a través de una tubería especial. Allí se atomiza y se inyecta en la cámara de combustión. El exceso de combustible se recircula al tanque a través de un tubo de desbordamiento para evitar sobrepresión.
</span>
            <br>
        </p>
        <h3 class="u-text u-text-body-alt-color u-text-3" > El inyector de Diesel Common Rail logra:</h3>
        <ul class="u-text u-text-4">
            <li>Eficiencia y Potencia: Los motores diésel son conocidos por su excelente economía de combustible y potencia.</li>
            <li>Hitos en la Innovación: El sistema Common Rail representa un gran avance en la mejora de los motores diésel.</li>
            <li>Liderazgo de DENSO: Desde el lanzamiento del primer sistema Common Rail en 1995, DENSO ha sido líder en el desarrollo de tecnologías avanzadas para motores diésel.</li>
            <li>Reducción de Emisiones: El sistema Common Rail permite una inyección de alta presión controlada electrónicamente, lo que reduce las emisiones de NOx y PM. </li>
            <li>Potencia Mejorada: Con la inyección de alta presión, se genera más potencia del motor.</li>
            <li>Precisión y Limpieza: DENSO lidera el aumento de la presión del combustible y la precisión de la inyección para motores más limpios y potentes.</li>
        </ul>
    </div>
</section>
<section class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-section-6" style="background-image:url('../img/Group 296-2-movil_1.png')" src="" data-image-width="390" data-image-height="1056" id="sec-859a">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
        <h4 class="u-align-left-xs u-text u-text-body-alt-color u-text-1">¿Cómo funcionan los inyectores Common Rail DENSO?
        </h4>
        <p class="u-align-left-xs u-text u-text-body-alt-color u-text-2">
            <span style="font-weight: 700;"></span>
            <span style="font-weight: 700;">El sistema de inyección de combustible garantiza una entrega precisa de combustible al motor. Consta de una bomba de inyección, boquillas de inyección, filtro y tanque de combustible. El combustible se extrae del tanque, filtrado y entregado a la bomba, donde se comprime y se dirige a las boquillas a través de una tubería especial. Allí se atomiza y se inyecta en la cámara de combustión. El exceso de combustible se recircula al tanque a través de un tubo de desbordamiento para evitar sobrepresión.
          </span>
        </p>
    </div>
</section>
<section class="m-t-40-minus u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-section-7" style="background-image:url('../img/Group 296-2-movil_2.png')" src="" data-image-width="390" data-image-height="708" id="sec-4bf3">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
        <h4 class="u-align-left-xs u-text u-text-body-alt-color u-text-1" style="margin-top: -60%;"> Con el Sensor de Oxígeno DENSO tienes lecturas precisas y ahorras gasolina.&nbsp;<br>El sensor de oxígeno DENSO logra:
        </h4>
        <ul class="u-align-left-xs u-text u-text-2">
            <li>Eficiencia y Potencia: Los motores diésel son conocidos por su excelente economía de combustible y potencia.</li>
            <li>Hitos en la Innovación: El sistema Common Rail representa un gran avance en la mejora de los motores diésel.</li>
            <li>Liderazgo de DENSO: Desde el lanzamiento del primer sistema Common Rail en 1995, DENSO ha sido líder en el desarrollo de tecnologías avanzadas para motores diésel.</li>
            <li>Reducción de Emisiones: El sistema Common Rail permite una inyección de alta presión controlada electrónicamente, lo que reduce las emisiones de NOx y PM. </li>
            <li>Potencia Mejorada: Con la inyección de alta presión, se genera más potencia del motor.</li>
            <li>Precisión y Limpieza: DENSO lidera el aumento de la presión del combustible y la precisión de la inyección para motores más limpios y potentes.</li>
        </ul>
    </div>
</section>

<section class="u-align-left u-clearfix u-section-13" src="" id="sec-d5eb">
    <div class="u-clearfix u-sheet u-valign-bottom-xs u-sheet-1">
        <h2 class="m-t-40-minus u-text u-text-body-color u-text-1"> Características y beneficios
        </h2>
        <p class="m-t-40-minus u-custom-font u-large-text u-text u-text-custom-color-4 u-text-variant u-text-2">
        <ul class="u-text u-text-4" style="color:black">
            <li>Innovación líder: Los inyectores Common Rail de DENSO son los más avanzados del mundo, con una impresionante presión máxima de 1800 bar y hasta 5 inyecciones por ciclo, reduciendo drásticamente las emisiones de NOx y PM.</li>
            <li>Cumplimiento normativo: Las versiones más recientes de los sistemas Common Rail de DENSO superan fácilmente los requisitos de emisiones EURO 4 sin necesidad de costosos filtros de partículas diésel.</li>
            <li>Eficiencia y ligereza: Los sistemas Common Rail de DENSO son los más ligeros de su tipo, garantizando un rendimiento óptimo sin sacrificar potencia ni eficiencia.</li>
            <li>Potencia y economía: Los motores diésel equipados con inyectores Common Rail combinan una excelente economía de combustible con una potencia impresionante.</li>
            <li>Reducción de emisiones: El sistema Common Rail permite una inyección de alta presión controlada electrónicamente, reduciendo las emisiones de NOx y PM, y generando más potencia del motor.</li>
        </ul>
        </p>
        <img class="u-align-right u-expanded-width-xs u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/common_rail_bn.png')?>" style="height: 100%;margin: -48% 0 2px auto;" alt="" data-image-width="651" data-image-height="720">
    </div>
</section>
<section class="u-align-left u-clearfix u-section-13" src="" id="sec-d5eb">
    <div class="u-clearfix u-sheet u-valign-bottom-xs u-sheet-1">

        <h2 class="m-t-40-minus u-text u-text-body-color u-text-1" style="width: 60%;text-align: left;/*! float: right; */margin-left: 40%;"> Características y beneficios
        </h2>
        <p class="m-t-40-minus u-custom-font u-large-text u-text u-text-custom-color-4 u-text-variant u-text-2" style="width: 60%;text-align: left;/*! float: right; */margin-left: 40%;">
            <b>Cada Inyector Common Rail de DENSO</b> es sometido a rigurosas pruebas para verificar su funcionalidad, incluyendo la presión máxima de inyección, la precisión del tiempo y la cantidad de inyección.
            <br>Los Inyectores Common Rail de DENSO están diseñados para ofrecer un ajuste perfecto desde el primer momento, fabricados bajo especificaciones exactas que garantizan su rendimiento óptimo y durabilidad a lo largo del tiempo.
        </p>
        <h3 class="m-t-40-minus u-text u-text-3" style="width: 60%;text-align: left;/*! float: right; */margin-left: 40%;">Puedes encontrarlos con alguno de nuestros distribuidores.</h3>
        <a href="#comprar" style="text-align: left;/*! float: right; */margin-left: 40%;" class="u-black u-border-2 u-border-black u-btn u-button-style u-hover-black u-text-hover-white u-btn-1">ENCONTRAR UN DISTRIBUIDOR</a>
        <img class="u-align-right u-expanded-width-xs u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/Ramiro3.png')?>" style="height: 100%;margin: -24% 69% 2px auto;" alt="" data-image-width="651" data-image-height="720">
    </div>
</section>


