<!DOCTYPE html>
<html dir="ltr">
    <head>
        <?php echo $this->Html->charset(); ?>
        <?php echo $this->Html->meta('favicon.ico','/img/favicon.png',array('type'=>'icon'));?>
        <?php echo $this->fetch('meta');?>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script>
            var themeHasJQuery = !!window.jQuery;
        </script>
        <?php echo $this->Html->script('jquery')?>
        <script>
            window._$ = jQuery.noConflict(themeHasJQuery);
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= $this->Html->css('bootstrap',array('media'=>'screen'));?>
        
        <?= $this->Html->script('bootstrap.min')?>
        <?= $this->Html->script('layout.core')?>
        <?= $this->Html->script('CloudZoom')?>
	    <script src="https://kit.fontawesome.com/e2e8d19765.js" crossorigin="anonymous"></script>
        <title>
            <?php echo $this->fetch('title');?>
        </title>
        <?php echo $this->fetch('css') ?>
	    <?= $this->Html->css('style');?>
       	<?= $this->Html->script('script')?>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143769166-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-143769166-1');
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W3FVFC2');</script>
        <!-- End Google Tag Manager -->


   
        <style>
            @font-face {
                font-family: Barlow Bold;
                src: url("https://densoautopartes.com.mx/fonts/barlow/Barlow-ExtraBold.woff") format("woff");
                }
                @font-face {
                font-family: Barlow;
                src: url("https://densoautopartes.com.mx/fonts/barlow/Barlow-Medium.woff") format("woff");
                }
                @font-face {
                font-family: Denso;
                src: url("https://densoautopartes.com.mx/fonts/denso/DENSO-Italic.otf") format("opentype");
                }

            a {
              transition: color 250ms linear;
              font-family:'Barlow Bold';
            }
            .success{
                color:white;
                background-color: green;
                padding: 30px;
                font-size: 1.3em;
            }
            .h3footer{
                color:white;
                font-size: 16px;
            }
        </style>
    </head>
    <body class=" bootstrap bd-body-1 bd-homepage bd-pagebackground-3  bd-margins">
        
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3FVFC2"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <header class=" bd-headerarea-1 bd-margins">
            <div data-affix data-offset="" data-fix-at-screen="top" data-clip-at-control="top" data-enable-lg data-enable-md data-enable-sm class=" bd-affix-1 bd-no-margins bd-margins">
                <section class=" bd-section-4 bd-tagstyles " id="section4" data-section-title="">
                    <div class="bd-container-inner bd-margins clearfix">
                        <div class=" bd-layoutbox-3 bd-no-margins clearfix">
                            <div class="bd-container-inner">
                                <?php echo $this->Html->link($this->Html->image('e8f10ca4929e40b41b1f057cda20f11d_DENSOArcCMYK.jpg',array('class'=>'bd-imagestyles')),array('controller'=>'pages','action'=>'home'),array('class'=>'bd-logo-2','escape'=>false))?>
                                <nav class=" bd-hmenu-1"  data-responsive-menu="true" data-responsive-levels="expand on click" data-responsive-type="" data-offcanvas-delay="0ms" data-offcanvas-duration="700ms" data-offcanvas-timing-function="ease">
                                    <div class=" bd-menuoverlay-13 bd-menu-overlay"></div>
                                    <div class=" bd-responsivemenu-11 collapse-button">
                                        <div class="bd-container-inner">
                                            <div class="bd-menuitem-4 ">
                                                <a  data-toggle="collapse" data-target=".bd-hmenu-1 .collapse-button + .navbar-collapse" href="#" onclick="return false;">
                                                    <span>Menu</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navbar-collapse collapse ">
                                        <div class=" bd-horizontalmenu-70 clearfix">
                                            <div class="bd-container-inner">
                                                <ul class=" bd-menu-63 nav nav-pills navbar-left">
                                                    <li class=" bd-menuitem-36 bd-toplevel-item">
                                                        <a  href="#" >Productos</a>
                                                        <div class="bd-menu-39-popup ">
                                                            <ul class=" bd-menu-39  bd-no-margins">
                                                                <!-- <li class=" bd-menuitem-38 bd-sub-item bd-sub-item">
                                                                    <?= $this->Html->link('Bujías',array('action'=>'bujias','controller'=>'pages'))?>
                                                                </li> -->
                                                                <li class=" bd-menuitem-38 bd-sub-item bd-sub-item">
                                                                    <?= $this->Html->link('Bujías',array('action'=>'bujias','controller'=>'pages'))?>
                                                                </li>
                                                                <li class=" bd-menuitem-38 bd-sub-item bd-sub-item">
                                                                    <?= $this->Html->link('Filtros',array('action'=>'filtros','controller'=>'pages'))?>
                                                                </li>
                                                                <li class=" bd-menuitem-38 bd-sub-item bd-sub-item">
                                                                    <?= $this->Html->link('Sensores de Oxígeno',array('action'=>'sensores_oxigeno','controller'=>'pages'))?>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class=" bd-menuitem-36 bd-toplevel-item">
                                                        <?php echo $this->Html->link('CATÁLOGOS',array('action'=>'catalogos','controller'=>'pages'))?>
                                                    </li> 
                                                   <li class=" bd-menuitem-36 bd-toplevel-item">
                                                        <?php echo $this->Html->link('DENSO',array('action'=>'denso','controller'=>'pages'))?>
                                                    </li>
                                                    <li class=" bd-menuitem-36 bd-toplevel-item">
                                                        <?php echo $this->Html->link('EN DONDE COMPRAR',array('action'=>'home/#distribuidores','controller'=>'pages'))?>
                                                    </li>
                                                    <li class=" bd-menuitem-36 bd-toplevel-item">
                                                        <?php echo $this->Html->link('CONTACTO',array('action'=>'home/#contacto','controller'=>'pages'))?>
                                                    </li>
                                                    <li style="background-color: red;margin-top: 1%;margin-top: 10px;">
                                                        <?php echo $this->Html->link('BUSCAR MI PIEZA',array('action'=>'buscar','controller'=>'productos'),array('style'=>'color:white'))?>
                                                    </li> 
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="bd-menu-close-icon">
                                            <a href="#" class="bd-icon  bd-icon-29"></a>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </header>
        
        <?php echo $this->Session->flash();?>
        <?php echo $this->fetch('content'); ?>

        <footer class=" bd-footerarea-1 bd-margins">
            <section class=" bd-section-2 bd-page-width bd-tagstyles " id="section4" data-section-title="Three Columns">
                <div class="bd-container-inner bd-margins clearfix">
                    <div class=" bd-layoutcontainer-5 bd-columns bd-no-margins">
                        <div class="bd-container-inner">
                            <div class="container-fluid">
                                <div class="row bd-row-flex bd-row-align-top">
                                    <div class=" bd-columnwrapper-7 col-md-3">
                                        <div class="bd-layoutcolumn-7 bd-column" >
                                            <div class="bd-vertical-align-wrapper">
                                                <h3 style="font-family:'Denso'" class="h3footer bd-textblock-1 bd-content-element">
                                                    DENSO
                                                </h3>
                                                <p class=" bd-textblock-4 bd-content-element">
                                                   <?= $this->Html->link('¿Por qué Comprar DENSO?',array('controller'=>'pages','action'=>'denso'),array('style'=>'color:white'))?>
                                                </p>
                                                <p class=" bd-textblock-4 bd-content-element">
                                                   <?= $this->Html->link('Conviértete en Distribuidor',array('controller'=>'pages','action'=>'landing'),array('target'=>'_blank','style'=>'color:white'))?>
                                                </p>
                                                <p class=" bd-textblock-4 bd-content-element">
                                                   <?= $this->Html->link('En Donde Comprar','https://densoautopartes.com.mx/pages/home/#distribuidores',array('style'=>'color:white','escape'=>false))?>
                                                </p>
                                                <p class=" bd-textblock-4 bd-content-element">
                                                   <?= $this->Html->link('Términos y Condiciones',array('controller'=>'pages','action'=>'terminos'),array('style'=>'color:white'))?>
                                                </p>
                                                <p class=" bd-textblock-4 bd-content-element">
                                                   <?= $this->Html->link('Aviso de Privacidad',array('controller'=>'pages','action'=>'privacidad'),array('style'=>'color:white'))?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bd-columnwrapper-12 col-md-3">
                                        <div class="bd-layoutcolumn-12 bd-column" >
                                            <div class="bd-vertical-align-wrapper">
                                                <h3 style="font-family:'Denso'" class="h3footer bd-textblock-1 bd-content-element">
                                                    Multimedia
                                                </h3>
                                                <p class=" bd-textblock-4 bd-content-element">
                                                   <?= $this->Html->link('Tiempo de Autopartes',array('controller'=>'pages','action'=>'imagen_tv'),array('style'=>'color:white'))?>
                                                </p>
                                                <p class=" bd-textblock-4 bd-content-element">
                                                   <?= $this->Html->link('Catálogos',array('controller'=>'pages','action'=>'catalogos'),array('style'=>'color:white'))?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bd-columnwrapper-12 col-md-3">
                                        <div class="bd-layoutcolumn-12 bd-column" >
                                            <div class="bd-vertical-align-wrapper">
                                                <h3 style="font-family:'Denso'" class="h3footer bd-textblock-1 bd-content-element">
                                                    Ligas de Interés
                                                </h3>
                                                <p class=" bd-textblock-4 bd-content-element">
                                                   <?= $this->Html->link('Buscar mi pieza',array('controller'=>'productos','action'=>'buscar'),array('style'=>'color:white'))?>
                                                </p>
                                                <p class=" bd-textblock-4 bd-content-element">
                                                   <?= $this->Html->link('Bujías',array('controller'=>'pages','action'=>'bujias'),array('style'=>'color:white'))?>
                                                </p>
                                                <p class=" bd-textblock-4 bd-content-element">
                                                   <?= $this->Html->link('Filtros',array('controller'=>'pages','action'=>'filtros'),array('style'=>'color:white'))?>
                                                </p>
                                                <p class=" bd-textblock-4 bd-content-element">
                                                   <?= $this->Html->link('Sensores de Oxígeno',array('controller'=>'pages','action'=>'sensores_oxigeno'),array('style'=>'color:white'))?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bd-columnwrapper-15 col-md-3">
                                        <div class="bd-layoutcolumn-15 bd-column" >
                                            <div class="bd-vertical-align-wrapper">
                                                <h3 style="font-family:'Denso'" class="h3footer bd-textblock-7 bd-content-element">
                                                    Síguenos
                                                </h3>
                                                <p class=" bd-textblock-15 bd-content-element">
                                                    <?= $this->Html->link('<i class="fab fa-facebook-square fa-2x"></i>',"https://www.facebook.com/DENSO-Autopartes-México-273666680164250/",array('target'=>'_blank','escape'=>false,'style'=>'color:white'))?>
                                                    <?= $this->Html->link('<i class="fab fa-twitter-square fa-2x"></i>',"https://twitter.com/densoautopartes",array('target'=>'_blank','escape'=>false,'style'=>'color:white;margin-left:1em;margin-right:1em'))?>
                                                    <?= $this->Html->link('<i class="fab fa-instagram-square fa-2x"></i>',"https://www.instagram.com/densoautopartesmx/?hl=en",array('target'=>'_blank','escape'=>false,'style'=>'color:white'))?>
                                                </p>
                                                <h3 style="font-family:'Denso'" class="h3footer bd-textblock-17 bd-content-element">
                                                    © <?= date("Y")?> DENSO Autopartes México
                                                </h3>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <?= $this->fetch('script')?>
    </body>
</html>