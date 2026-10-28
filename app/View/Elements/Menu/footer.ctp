<?php
$pais = array(
    'ar'=>'Argentina',
	'mx'=>'México',
	'co'=>'Colombia',
	'cl'=>'Chile',
	'ec'=>'Ecuador',
	'pe'=>'Perú',
	'pr'=>'Puerto Rico',
	'latam'=>'LATAM',
	'car'=>'Caribe',
	'cam'=>'Centroamérica',
	've'=>'Venezuela',
	'sv'=>'El Salvador',
)

?>

<footer class="u-black u-clearfix u-footer u-footer" id="sec-65b9">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-21-sm u-size-21-xs u-size-24-lg u-size-24-xl u-size-30-md u-layout-cell-1">
                        <div class="u-container-layout u-container-layout-1"><!--position-->
                            <div data-position="" class="u-position u-position-1"><!--block-->
                                <div class="u-block">
                                    <div class="u-block-container u-clearfix"><!--block_header-->
                                        <h5 class="u-block-header u-custom-font u-text u-text-1">
                                            <!--block_header_content--> DENSO<!--/block_header_content--></h5>
                                        <!--/block_header-->
                                    </div>
                                </div><!--/block-->
                            </div><!--/position-->
                            <div class="u-expanded-width u-list u-list-1">
                                <div class="u-repeater u-repeater-1">
                                    <div class="u-container-style u-list-item u-repeater-item">
                                        <div class="u-container-layout u-similar-container u-container-layout-2">
                                            <p class="u-text u-text-2">
                                                <a href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages',$region))?>"
                                                   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1">Por
                                                    qué comprar DENSO</a>
                                                <br>
                                                <?php if($region == 'mx' || $region == 'ar' || $region == 'uy' ||$region == 'pa'){?>
                                                <a href="<?= $this->Html->url(array('action'=>'landing','controller'=>'pages',$region))?>"
                                                   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-2">Conviértete
                                                    en Distribuidor</a>
                                                <br>
                                                <?php } ?>
                                                <a href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors',$region))?>"
                                                   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-3">Dónde
                                                    Comprar</a>
                                                <br>
                                                <a href="https://www.denso.com/global/en/" target="_blank"
                                                   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1">DENSO Global</a>
                                                <br>
                                                <a href="https://densoserviciopesado.com" target="_blank"
                                                   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1">DENSO Servicio Pesado</a>
                                                <br>
                                                <a href="https://productospoweredge.com" target="_blank"
                                                   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1">PowerEdge LATAM</a>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-list-item u-repeater-item">
                                        <div class="u-container-layout u-similar-container u-container-layout-2">
                                            <p class="u-text u-text-2">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img class="u-image u-image-default u-image-1" src="<?= $this->Html->url('/img/Group132.png')?>" alt=""
                                 data-image-width="451" data-image-height="83">
                        </div>
                    </div>
                    <div class="u-align-left u-container-style u-layout-cell u-size-19-sm u-size-19-xs u-size-24-lg u-size-24-xl u-size-30-md u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-4"><!--position-->
                            <div data-position="" class="u-expanded-width u-position u-position-2"><!--block-->
                                <div class="u-block">
                                    <div class="u-block-container u-clearfix"><!--block_header-->
                                        <h5 class="u-block-header u-custom-font u-text u-text-4">
                                            <!--block_header_content--> Ligas de Interés
                                            <!--/block_header_content--></h5><!--/block_header-->
                                    </div>
                                </div><!--/block-->
                            </div><!--/position-->
                            <div class="u-expanded-width u-list u-list-2">
                                <div class="u-repeater u-repeater-2">
                                    <div class="u-container-style u-list-item u-repeater-item">
                                        <div class="u-container-layout u-similar-container u-container-layout-5">
                                            <p class="u-text u-text-5">
                                                <a href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages',$region))?>"
                                                   class="u-btn u-button-link u-button-style u-none u-text-body-alt-color u-btn-5">Bujías</a>
                                                <br>
                                                <a href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages',$region))?>"
                                                   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-6">Filtros</a>
                                                <br>
                                                <a href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages',$region))?>"
                                                   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-7">Compresores
                                                    de A/C</a>
                                                <br>
                                                <a href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages',$region))?>"
                                                   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-8">Sensores
                                                    de oxígeno</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-list-item u-repeater-item">
                                        <div class="u-container-layout u-similar-container u-container-layout-6">
                                            <p class="u-text u-text-6">
                                                <a href="<?= $this->Html->url(array('action'=>'inyectores','controller'=>'pages',$region))?>"
                                                   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-8">Inyectores Aftermarket</a>
                                                <br>
                                                <a href="<?= $this->Html->url(array('action'=>'limpiaparabrisas','controller'=>'pages',$region))?>"
                                                   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-8">Limpiaparabrisas</a>
                                                <br>
                                                <a href="<?= $this->Html->url(array('action'=>'bobinas','controller'=>'pages',$region))?>"
                                                   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-8">Bobinas de Encendido</a>
                                                <br>
                                                <a href="<?= $this->Html->url(array('action'=>'donde_reparar','controller'=>'distribuidors',$region))?>"
                                                   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-8">Talleres de reparación Autorizados</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="u-social-icons u-spacing-28 u-social-icons-1">
                                <a class="u-social-url" title="facebook" target="_blank"
                                   href="https://www.facebook.com/DENSO-Autopartes-M%C3%A9xico-273666680164250/"><span
                                            class="u-icon u-social-facebook u-social-icon u-text-black u-icon-1"><svg
                                                class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 112 112" style=""><use
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#svg-2de9"></use></svg><svg class="u-svg-content"
                                                                                            viewBox="0 0 112 112" x="0"
                                                                                            y="0" id="svg-2de9"><circle
                                                    fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path
                                                    fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
                                </a>
                                <?= $this->Html->link($this->Html->image('xlogo.png',array('style'=>"height: 100%;display: inline-block;flex: 1;")),'https://x.com/densoautopartes',array('escape'=>false,'class'=>'u-social-url'))?>
                                <a class="u-social-url" title="instagram" target="_blank"
                                   href="https://www.instagram.com/densoautopartes"><span
                                            class="u-icon u-social-icon u-social-instagram u-text-black u-icon-3"><svg
                                                class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 112 112" style=""><use
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#svg-3817"></use></svg><svg class="u-svg-content"
                                                                                            viewBox="0 0 112 112" x="0"
                                                                                            y="0" id="svg-3817"><circle
                                                    fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path
                                                    fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path
                                                    fill="#FFFFFF"
                                                    d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path
                                                    fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
                                </a>
                                <a class="u-social-url" target="_blank" data-type="YouTube" title="YouTube"
                                   href="https://www.youtube.com/channel/UCDvzlNxa0-GUU_rlVdLGKcw"><span class="u-icon u-social-icon u-social-youtube u-text-black u-icon-4"><svg
                                                class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 112 112" style=""><use
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#svg-7e4c"></use></svg><svg class="u-svg-content"
                                                                                            viewBox="0 0 112 112" x="0"
                                                                                            y="0" id="svg-7e4c"><circle
                                                    fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path
                                                    fill="#FFFFFF"
                                                    d="M74.9,33.3H37.3c-7.4,0-13.4,6-13.4,13.4v18.8c0,7.4,6,13.4,13.4,13.4h37.6c7.4,0,13.4-6,13.4-13.4V46.7 C88.3,39.3,82.3,33.3,74.9,33.3L74.9,33.3z M65.9,57l-17.6,8.4c-0.5,0.2-1-0.1-1-0.6V47.5c0-0.5,0.6-0.9,1-0.6l17.6,8.9 C66.4,56,66.4,56.8,65.9,57L65.9,57z"></path></svg></span>
                                </a>
                            </div>
                            <p class="u-custom-font u-text u-text-7">Síguenos</p>
                        </div>
                    </div>
                    <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-12-lg u-size-12-xl u-size-19-sm u-size-19-xs u-size-30-md u-layout-cell-3">
                        <div class="u-container-layout u-valign-top u-container-layout-7"><!--position-->
                            <div data-position="" class="u-position u-position-3"><!--block-->
                                <div class="u-block">
                                    <div class="u-block-container u-clearfix"><!--block_header-->
                                        <h5 class="u-block-header u-custom-font u-text u-text-8">
                                            <!--block_header_content--> Multimedia<!--/block_header_content--></h5>
                                        <!--/block_header-->
                                    </div>
                                </div><!--/block-->
                            </div><!--/position-->
                            <div class="u-expanded-width u-list u-list-3">
                                <div class="u-repeater u-repeater-3">
                                    <div class="u-container-style u-list-item u-repeater-item">
                                        <div class="u-container-layout u-similar-container u-container-layout-8">
                                            <p class="u-text u-text-9">
                                                <?php if($region == 'mx' || $region == 'co' || $region == 'cl' ||$region == 'pe' ||$region == 'ec' ||$region == 've' ||$region == 'latam'){?>
                                                <a href="<?= $this->Html->url(array('action'=>'catalogos','controller'=>'pages',$region))?>"
                                                   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-10">Catálogos</a>
                                                <?php }?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="u-text u-text-default u-text-10">© <?= date("Y")?> DENSO Autopartes <?= $pais[$region]?> | Desarrollado por Aigel</p>
                            <p>
                                <?= $region == 'ar' ? "" :$this->Html->link($this->Html->image('bandera_argentina.png',array('style'=>'width:20px')),'/ar',array('escape'=>false))?>
                                <?= $region == 'co' ? "" :$this->Html->link($this->Html->image('bandera_colombia.png',array('style'=>'width:20px')),'/co',array('escape'=>false))?>
                                <?= $region == 'cl' ? "" :$this->Html->link($this->Html->image('bandera_chile.png',array('style'=>'width:20px')),'/cl',array('escape'=>false))?>
                                <?= $region == 'ec' ? "" :$this->Html->link($this->Html->image('bandera_ecuador.png',array('style'=>'width:20px')),'/ec',array('escape'=>false))?>
                                <?= $region == 'mx' ? "" :$this->Html->link($this->Html->image('bandera_mexico.png',array('style'=>'width:20px')),'/mx',array('escape'=>false))?>
                                <?= $region == 'pe' ? "" :$this->Html->link($this->Html->image('bandera_peru.png',array('style'=>'width:20px')),'/pe',array('escape'=>false))?>
                                <?= $region == 'pr' ? "" :$this->Html->link($this->Html->image('bandera_pr.png',array('style'=>'width:20px')),'/pr',array('escape'=>false))?>
                                <?= $region == 'sv' ? "" :$this->Html->link($this->Html->image('bandera_el_salvador.png',array('style'=>'width:20px')),'/sv',array('escape'=>false))?>
                                <?= $region == 've' ? "" :$this->Html->link($this->Html->image('bandera_venezuela.png',array('style'=>'width:20px')),'/ve',array('escape'=>false))?>
                                <?= $region == 'car' ? "" :$this->Html->link('CAR','/car',array('escape'=>false,'style'=>'color:white; font-size:.9em'))?>
                                <?= $region == 'cam' ? "" :$this->Html->link('CAM','/cam',array('escape'=>false,'style'=>'color:white; font-size:.9em'))?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>