<?php
echo $this->Html->css(
    array(
        'Sensores',
    ),
    array('inline' => false)
);
echo $this->Html->script(
    array(
        'handlebars.min',
        'markerclusterer.min',
    ),
    array('inline' => false)
);
?>
<style>
    .container {
        display: flex;
        flex-wrap: wrap;
        /* Permite que las columnas se ajusten en pantallas más pequeñas */
    }


    .column {
        flex: 1 1 50%;
        /* Crece y se encoge, ocupando el 50% del ancho */
        box-sizing: border-box;
        /* Incluye padding y border en el ancho total */
        border: 1px solid #ccc;
        /* Borde para visualización */
        height: 50vh;
    }


    @media (max-width: 600px) {
        .column {
            flex: 1 1 100%;
            /* En pantallas pequeñas, las columnas ocupan el 100% */
        }

    }
</style>
<h1 style="color: #444;font-weight: bolder;padding: 20px;font-size: 1.5em;font-family: DENSO-black;">BALATAS DENSO PARA
    FRENOS</h1>
<div class="container" id="autenticidad">
    <div class="column"
        style="; height:50vh ;padding: 20px; /* Espaciado interno */background-color: darkgrey;background-image: url('<?= $this->Html->url('/img/Brake Pads Box Photo 2400 x 1800.jpg') ?>'); background-size: cover; background-position-y: center">

    </div>
    <div class="column" style="background-color: #e6e6e6;">
        <video width="100%" height="100%" controls preload="metadata" style="display: block;" autoplay muted
            playsinline>
            <source src="<?= $this->Html->url('/videos/DENSO_BALATAS.mp4') ?>" type="video/mp4">
            Tu navegador no soporta la etiqueta de video HTML5. Por favor, actualiza o intenta con otro navegador.
        </video>
    </div>
</div>
<div style="width:100%; background-color: #dc0a34; color:white; padding: 3%">
    <p style="font-weight: bold;font-size: 1.5rem;text-align: center !important;color: white;width: 100%">Frenado
        Preciso, Confiabilidad Japonesa<br><b>Descubre las balatas DENSO First Time Fit</b></p>
</div>
<?= $this->Element('forma_busqueda', array('region' => $region)) ?>
<section class="u-align-left u-clearfix u-hidden-sm u-hidden-xs u-image u-section-5"
    style="height:75vh;background-image:url('<?= $this->Html->url('/img/balatas_rojo_denso.jpg') ?>')" src=""
    data-image-width="1728" data-image-height="1536" id="sec-81d9">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-body-alt-color u-text-1" style="margin-top: 20%">Balatas DENSO: Premium, cerámicas y
            listas para instalar
        </h3>
        <p class="u-custom-font u-large-text u-text u-text-body-alt-color u-text-variant u-text-2">
            <span style="font-weight: 700;"></span>
            <span style="font-weight: 700;">Las balatas DENSO First Time Fit™ están diseñadas con los mismos estándares
                de calidad que las piezas originales de tu vehículo. Eso significa que puedes esperar un ajuste
                perfecto, un frenado seguro y una instalación sin contratiempos.
            </span>
            <br>
        </p>
        <p class="u-custom-font u-large-text u-text u-text-body-alt-color u-text-variant u-text-2">
            <?= $this->Html->link('Descarga Catálogo', $this->Html->url('/files/CAT-DENSO-BALATAS2026.pdf'), array('class' => 'u-border-2 u-border-custom-color-1 u-border-hover-custom-color-1 u-btn u-button-style u-custom-color-1 u-hover-custom-color-1 u-text-hover-white u-btn-1')) ?>
        </p>
    </div>
</section>

<section class="u-align-left u-clearfix u-section-13" src="" id="sec-d5eb">
    <div class="u-clearfix u-sheet u-valign-bottom-xs u-sheet-1">

        <h2 class="m-t-40-minus u-text u-text-body-color u-text-1"
            style="width: 60%;text-align: left;/*! float: right; */margin-left: 40%;"> Características y beneficios
        </h2>
        <div class="m-t-40-minus u-custom-font u-large-text u-text u-text-custom-color-4 u-text-variant u-text-2"
            style="width: 60%;text-align: left;/*! float: right; */margin-left: 40%; ">
            <ul style="color:black">
                <li>
                    <b>Cerámicas 100%:</b>
                    <br>Las balatas DENSO están fabricadas con material cerámico premium, lo que se traduce en un
                    frenado más suave, menos ruido y menor desgaste del rotor. Están diseñadas para rendir como las
                    piezas originales del vehículo, y probadas para superar a otras marcas en durabilidad, control de
                    vibración y confort al manejar.
                </li>
                <li>
                    <b>100% libre de cobre, más responsables:</b>
                    <br>Fabricadas con materiales que cumplen con los estándares ambientales de la EPA (Agencia de
                    Protección Ambiental de EE.UU.) en la reducción de contenido de cobre. Con esto cumplimos nuestro
                    compromiso de disminuir los metales pesados tóxicos y el escurrimiento en carretera. Porque el
                    rendimiento no está peleado con el cuidado del planeta.
                </li>
                <li>
                    <b>Incluyen kit completo:</b>
                    <br>Cada juego de balatas viene con herrajes de acero inoxidable y grasa especial para instalación.
                    Todo en un solo paquete, listo para usar.
                </li>
                <li>
                    <b>Calidad que se siente:</b>
                    <br>Menos vibración, menos ruido, seguro por más tiempo.

                    Si eres instalador, mecánico o un conductor exigente, aquí encuentras una opción que se adapta a tu
                    vehículo.
                </li>
            </ul>
        </div>
        <img class="u-align-right u-expanded-width-xs u-image u-image-default u-image-1"
            src="<?= $this->Html->url('/img/Ramiro3.png') ?>" style="height: 100%;margin: -43% 69% 2px auto;" alt=""
            data-image-width="651" data-image-height="720">
    </div>
</section>

<style>
    .u-section-17-3 {
        background-image: url("<?= $this->Html->url('/img/Bujas-Banner3.jpg') ?>");
        background-position: 0% 0%;
        background-size: cover;
        height: 60vh;
    }

    .u-section-17-3 .u-sheet-1 {
        min-height: 496px;
    }

    .u-section-17-3 .u-text-1 {
        font-size: 1.875rem;
        margin: 170px auto 0 0;
    }

    .u-section-17-3 .u-text-2 {
        font-size: 1.25rem;
        margin: 20px 570px 0 0;
    }

    .u-section-17-3 .u-btn-1 {
        border-style: solid;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0px;
        background-image: none;
        margin: 20px auto 60px 0;
    }
</style>
<section class="u-carousel u-hidden-sm u-hidden-xs u-slide u-valign-middle u-block-3bb6-1" id="carousel_40cb"
    data-interval="5000" data-u-ride="carousel" style="margin-bottom:50px">
    <div class="u-carousel-inner" role="listbox">
        <div class=" u-active u-align-center u-carousel-item u-clearfix u-image u-section-17-3" src=""
            data-image-width="1728" data-image-height="720">
            <div class="u-clearfix u-sheet u-sheet-1">
                <h3 class="u-align-left u-text u-text-body-alt-color u-text-default u-text-1">Comprar Balatas DENSO en
                    línea</h3>
                <p class="u-align-left u-large-text u-text u-text-body-alt-color u-text-variant u-text-2"> Puedes
                    encontrar nuestras Balatas para tu auto en nuestra tienda oficial DENSO México</p>
                <a href="https://tienda.densoautopartes.com.mx"
                    class="u-border-2 u-border-custom-color-1 u-border-hover-custom-color-1 u-btn u-button-style u-custom-color-1 u-hover-custom-color-1 u-text-hover-white u-btn-1">IR
                    A TIENDA OFICIAL</a>
            </div>
        </div>
    </div>
</section>