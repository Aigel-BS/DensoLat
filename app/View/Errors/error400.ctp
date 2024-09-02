<?php
echo $this->Html->css(
    array(
        'Contacto',
    ),
    array('inline'=>false)
);
?>
    <section class="u-clearfix u-section-1" id="sec-7508">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <h1 class="u-custom-font u-text u-text-default u-text-1">¡UPS!</h1>
                                <h2 class="u-custom-font u-text u-text-body-color u-text-default u-text-2">
                                    La dirección que has ingresado no existe en esta página. Pero no te preocupes, aquí te dejamos una liga para que regreses a la <?= $this->Html->link('página de inicio',array('action'=>'/'),array('style'=>'color:red')) ?>.
                                </h2>
                            </div>
                        </div>
                        <div class="u-container-align-center u-container-style u-hidden-sm u-hidden-xs u-image u-image-contain u-layout-cell u-size-30 u-image-1" data-image-width="895" data-image-height="1105" style="background-image: url('../img/404.png')">
                            <div class="u-container-layout u-container-layout-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

