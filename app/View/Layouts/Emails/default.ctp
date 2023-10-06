<!DOCTYPE html>
<html dir="ltr">
    <head>
        <?php echo $this->Html->charset(); ?>
        <?php echo $this->Html->meta('favicon.ico','/img/favicon.png',array('type'=>'icon'));?>
        <?php echo $this->fetch('meta');?>
            
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
	
        <title>
            <?php echo $this->fetch('title');?>
        </title>
        
	<?= $this->Html->css('style');?>
       	<?= $this->Html->script('script')?>
        
        <script> // Google Analytics 
          async src="https://www.googletagmanager.com/gtag/js?id=UA-143769166-1">
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-143769166-1');
        </script>
   
        <style>
            a {
              transition: color 250ms linear;
            }
            .success{
                color:white;
                background-color: green;
                padding: 30px;
                font-size: 1.3em;
            }
        </style>
    </head>
    <body class=" bootstrap bd-body-1 bd-homepage bd-pagebackground-3  bd-margins">
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
                                                        <?php echo $this->Html->link('CATÁLOGOS',array('action'=>'catalogos','controller'=>'pages'))?>
                                                    </li> 
                                                   <li class=" bd-menuitem-36 bd-toplevel-item">
                                                        <?php echo $this->Html->link('¿POR QUÉ COMPRAR DENSO?',array('action'=>'denso','controller'=>'pages'))?>
                                                    </li>
                                                    <li class=" bd-menuitem-36 bd-toplevel-item">
                                                        <?php echo $this->Html->link('RED DE DISTRIBUIDORES',array('action'=>'home/#distribuidores','controller'=>'pages'))?>
                                                    </li>
                                                    <li class=" bd-menuitem-36 bd-toplevel-item">
                                                        <?php echo $this->Html->link('CONTACTO',array('action'=>'home/#contacto','controller'=>'pages'))?>
                                                    </li>
                                                    <li style="background-color: red;margin-top: 1%;white; */margin-top: 10px;">
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
            <section class=" bd-section-2 bd-tagstyles" id="section2" data-section-title="">
                <div class="bd-container-inner bd-margins clearfix">
                    <p class=" bd-textblock-1 bd-content-element">
                        © <?= date("Y")?> Denso Autopartes México
                    </p>
                </div>
            </section>
        </footer>
    </body>s
</html>