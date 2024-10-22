<?php
echo $this->Html->css(
    array(
        'Producto-Falsificado'
    ),
    array('inline'=>false)
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

<section class="u-clearfix u-container-align-center u-valign-middle u-section-1" id="carousel_a521">
    <div class="data-layout-selected u-clearfix u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
            <div class="u-layout-row">
                <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                        <h1 class="u-text u-text-1">Producto escaneado No Auténtico</h1>
                        <p class="u-text u-text-default u-text-2">El producto escaneado no se encuentra dentro de los lotes fabricados por DENSO Products and Services Americas.</p>
                        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="<?= $this->Html->url('/img/Falsificacion.png') ?>" alt="" data-image-width="1500" data-image-height="1500" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0">
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-image u-image-default u-layout-cell u-size-30 u-image-2" data-image-width="933" data-image-height="540" style="filter:graysacel(); background-image: url(<?= $this->Html->url('/img/inyectores_falso.png')?>);">
                    <div class="u-container-layout u-container-layout-2"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-section-2" id="sec-a758">
    <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
            <div class="u-layout-row">
                <div class="u-container-align-center u-container-style u-hidden-sm u-hidden-xs u-image u-image-default u-layout-cell u-size-30 u-image-1" data-image-width="695" data-image-height="320" style="background-image: url(<?= $this->Html->url('/img/forma_inyectores_falsificacion.png')?>); background-size: contain;">
                    <div class="u-container-layout u-container-layout-1"></div>
                </div>
                <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-valign-bottom u-container-layout-2">
                        <h1 class="u-custom-font u-text u-text-1">Ayúdanos a combatir la falsificación de autopartes.</h1>
                        <h2 class="u-custom-font u-text u-text-body-color u-text-default u-text-2">DENSO está comprometido con ofrecer la más alta calidad en piezas y cada día búscamos nuevas formas de reducir la falsificación de autopartes que pueden poner en riesgo tu seguridad, la de tu familia y la de tu vehículo.&nbsp;<br>
                            <br>Te pedimos nos apoyes a trabajar en contra de la falsificación y nos ayudaría mucho si nos compartes más detalles de tu compra para poder investigar a fondo y terminar con este delito.<br>
                            <br>Tu testimonio será confidencial y sólo si tu lo deseas, nos pondremos en contacto contigo para complementar esta investigación.
                        </h2>
                        <div class="custom-expanded u-form u-form-1">
                            <?= $this->Form->create('Formulario',array('url'=>array('action'=>'falsificacion','controller'=>'distribuidors'),'class'=>'u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form','style'=>'padding: 10px;'))?>
                            <?= $this->Form->hidden('region',array('value'=>$region))?>
                                <div class="u-form-email u-form-group u-label-none">
                                    <?= $this->Form->input('email',array('label'=>false,'placeholder'=>'Email','type'=>'email','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','required'=>true))?>
                                </div>
                                <div class="u-form-group u-label-none u-form-group-2">
                                    <?= $this->Form->input('telefono',array('label'=>false,'placeholder'=>'Teléfono','type'=>'phone','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','required'=>true))?>
                                </div>
                                <div class="u-form-group u-form-select u-label-none u-form-group-3">
                                    <div class="u-form-select-wrapper">
                                        <select id="select-1644" name="data[Formulario][pais]" class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none">
                                            <option value="">Seleccionar País</option>
                                            <option value="Colombia" data-calc="">Colombia</option>
                                            <option value="México" data-calc="">México</option>
                                        </select>
                                        <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                                    </div>
                                </div>
                                <div class="u-form-group u-form-message u-label-none">
                                    <textarea placeholder="Cuentanos los detalles de compra. Lugar en donde compraste la pieza, y un breve relato de la situación." rows="4" cols="50" id="message-18c1" name="data[Formulario][mensaje]" class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none" required=""></textarea>
                                </div>
                                <div class="u-align-left u-form-group u-form-submit u-label-none">
                                    <a href="#" class="u-black u-border-none u-btn u-btn-submit u-button-style u-custom-font u-btn-1">Envíar Testimonio</a>
                                    <input type="submit" value="submit" class="u-form-control-hidden">
                                </div>
                                <div class="u-form-send-message u-form-send-success"> Gracias! Tu mensaje ha sido enviado. </div>
                                <div class="u-form-send-error u-form-send-message"> No se puede enviar su mensaje. Por favor, corrija los errores y vuelva a intentarlo. </div>
                                <input type="hidden" value="" name="recaptchaResponse">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-container-align-center-xl u-section-3" id="sec-4fea">
    <div class="u-clearfix u-sheet u-valign-bottom u-sheet-1" style="justify-content:unset">
        <h1 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-center-xxl u-align-left-xs u-text u-text-default u-text-1">Compra con nuestros Distribuidores Autorizados</h1>
        <p class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-center-xxl u-align-left-xs u-custom-font u-text u-text-custom-color-4 u-text-default u-text-2">Puedes conseguir autopartes originales con nuestros distribuidores autorizados y tendrás la tranquilidad&nbsp; de tener piezas DENSO.</p>
        <img class="u-align-center-sm u-align-center-xs u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/Group107.png') ?>" alt="" data-image-width="908" data-image-height="573">
        <div class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-40 u-image-1"
             data-image-width="908" data-image-height="573" style="width: 100%; height:60vh">
            <?= $this->Element('map')?>
        </div>
    </div>
</section>
<section class="u-align-center u-clearfix u-section-4" id="sec-3e1c">
    <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-center u-text u-text-custom-color-4 u-text-default u-text-1">LOS PRODUCTOS ORIGINALES DENSO TE OFRECEN</h3>
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-align-center u-file-icon u-icon u-icon-circle u-icon-1"><img src="<?= $this->Html->url('/img/image19.png') ?>" alt=""></span>
                        <p class="u-align-center u-custom-font u-text u-text-2">Calidad, garantía y durabilidad</p>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-align-center u-file-icon u-icon u-icon-circle u-icon-2"><img src="<?= $this->Html->url('/img/image17.png') ?>" alt=""></span>
                        <p class="u-align-center u-custom-font u-text u-text-3">Amplia cobertura en marcas y modelos</p>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-align-center u-file-icon u-icon u-icon-circle u-icon-3"><img src="<?= $this->Html->url('/img/image18.png') ?>" alt=""></span>
                        <p class="u-align-center u-custom-font u-text u-text-4">Fácil instalación</p>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span class="u-align-center u-file-icon u-icon u-icon-circle u-icon-4"><img src="<?= $this->Html->url('/img/image16.png') ?>" alt=""></span>
                        <p class="u-align-center u-custom-font u-text u-text-5">Seguridad, desempeño y cuidado ambiental</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-align-left u-clearfix u-hidden-sm u-hidden-xs u-image u-section-5" src="" data-image-width="1728" data-image-height="875" id="sec-0ed7" style="background-image: url('<?= $this->Html->url('/img/Group 301.png')?>');">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-sheet-1">
        <h3 class="u-align-left u-text u-text-body-alt-color u-text-1" style="margin:10% 0px 0px 0px; width:80%">El Inyector Aftermarket de Diesel Common Rail logra:</h3>
        <ul class="u-text u-text-4" style="margin:20px 0px 0px 0px; width:80%">
            <li>Eficiencia y Potencia: Los motores diésel son conocidos por su excelente economía de combustible y potencia.</li>
            <li>Hitos en la Innovación: El sistema Common Rail representa un gran avance en la mejora de los motores diésel.</li>
            <li>Liderazgo de DENSO: Desde el lanzamiento del primer sistema Common Rail en 1995, DENSO ha sido líder en el desarrollo de tecnologías avanzadas para motores diésel.</li>
            <li>Reducción de Emisiones: El sistema Common Rail permite una inyección de alta presión controlada electrónicamente, lo que reduce las emisiones de NOx y PM. </li>
            <li>Potencia Mejorada: Con la inyección de alta presión, se genera más potencia del motor.</li>
            <li>Precisión y Limpieza: DENSO lidera el aumento de la presión del combustible y la precisión de la inyección para motores más limpios y potentes.</li>
        </ul>
    </div>
</section>
<section class="m-t-40-minus u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-section-6" src="" data-image-width="390" data-image-height="827" id="sec-9916" style="background-image: url('<?= $this->Html->url('/img/Group 297 inyectores.png')?>');">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
        <h4 class="u-align-left-xs u-text u-text-body-alt-color u-text-1" style="margin:0px"> Al utilizar equipo original DENSO, tu trabajo está respaldado.</h4>
        <ul class="u-align-left u-large-text u-text u-text-variant u-text-2">
        <li>Eficiencia y Potencia: Los motores diésel son conocidos por su excelente economía de combustible y potencia.</li>
            <li>Hitos en la Innovación: El sistema Common Rail representa un gran avance en la mejora de los motores diésel.</li>
            <li>Liderazgo de DENSO: Desde el lanzamiento del primer sistema Common Rail en 1995, DENSO ha sido líder en el desarrollo de tecnologías avanzadas para motores diésel.</li>
            <li>Reducción de Emisiones: El sistema Common Rail permite una inyección de alta presión controlada electrónicamente, lo que reduce las emisiones de NOx y PM. </li>
            <li>Potencia Mejorada: Con la inyección de alta presión, se genera más potencia del motor.</li>
            <li>Precisión y Limpieza: DENSO lidera el aumento de la presión del combustible y la precisión de la inyección para motores más limpios y potentes.</li>
        </ul>
    </div>
</section>
<section class="u-clearfix u-image u-section-7" id="sec-f238" data-image-width="1728" data-image-height="720">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h4 class="u-align-left u-custom-font u-text u-text-body-alt-color u-text-1">¿Te gustaría capacitarte de manera gratuita y aprender acerca de los productos DENSO?</h4>
        <p class="u-align-left u-text u-text-body-alt-color u-text-2">Inscríbete a nuestro programa de capacitaciones y certificación, en donde te enseñaremos las características, propiedades y beneficios de productos DENSO.<br>
            <br>Es totalmente gratuito y podrás realizar los exámenes para obtener tu certificado digital.
        </p>
        <?= $this->Html->link('INSCRIBIRSE AL PROGRAMA',array('action'=>'mis_cursos','controller'=>'cursos','latam'),array('class'=>'u-border-2 u-border-custom-color-1 u-btn u-button-style u-custom-color-1 u-hover-custom-color-1 u-text-hover-white u-btn-1'))?>
    </div>
</section>
