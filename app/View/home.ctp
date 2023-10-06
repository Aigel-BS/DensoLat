<?= $this->assign('title', "Denso Autopartes México"); ?>

<?= $this->Html->meta("keywords", "bujías, Denso México, Distribuidores Denso México, Denso Autopartes, Filtros de Aire, Filtros de Aceite, Equipo eléctrico para autos", array("inline" => false)); ?>
<?= $this->Html->meta("description", "Denso Autopartes México, Empresa líder en el mercado para la distribución de bujías, equipo eléctrico, filtros. Fabricantes de las marcas más importantes de autos en el mundo.", array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'cannonical', 'content' => 'https://densoautopartes.com.mx'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'robots', 'content' => 'index,follow'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'author', 'content' => 'Aigel'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'language', 'content' => 'Spanish'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'revisit-after', 'content' => '30 days'), null, array("inline" => false)); ?>

<?= $this->Html->meta(array('name' => 'og:title', 'content' => 'Denso Autopartes México'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'og:description', 'content' => 'Denso Autopartes México, Empresa líder en el mercado para la distribución de bujías, equipo eléctrico, filtros. Fabricantes de las marcas más importantes de autos en el mundo.'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'og:url', 'content' => 'https://densoautopartes.com.mx'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'og:locale', 'content' => 'es_MX'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'og:image', 'content' => 'http://densoautopartes.com.mx/img/social_denso_logo.png'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'og:image:secure_url', 'content' => 'https://densoautopartes.com.mx/img/social_denso_logo.png'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'og:image:type', 'content' => 'image/png'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'og:image:width', 'content' => '1200'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'og:image:height', 'content' => '800'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'og:image:alt', 'content' => 'Denso Autopartes Mexico'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'og:type', 'content' => 'website'), null, array("inline" => false)); ?>
<?= $this->Html->meta(array('name' => 'og:site_name', 'content' => 'Denso Autopartes México'), null, array("inline" => false)); ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    .mySlides {display:none;}
</style>
<div class=" bd-content-13">  
    <div class=" bd-htmlcontent-1 bd-margins" data-page-id="page.0">
        <div class=" w3-display-container" style="width:100%">
            <?= $this->Html->link($this->Html->image('banner-proximamente-imagen.png',array('style'=>'width:100%; margin-left:0px','class'=>'mySlides')),array('controller'=>'pages','action'=>'imagen_tv'), array('escape'=>false))?>
            <?= $this->Html->link($this->Html->image('recargate-con-denso.png',array('style'=>'width:100%; margin-left:0px','class'=>'mySlides')),array('controller'=>'promosTas','action'=>'showLanding'), array('escape'=>false))?>
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>
        
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
            showDivs(slideIndex += n);
            }

            function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
            }
            var slideIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none"; 
                }
                slideIndex++;
                if (slideIndex > x.length) {slideIndex = 1} 
                x[slideIndex-1].style.display = "block"; 
                setTimeout(carousel, 4000); // Change image every 2 seconds
            }
        </script>

        <div class="bd-containereffect-4 container-effect container "><section class=" bd-section-8 bd-tagstyles " id="section4" data-section-title="Six Columns With Header">
                <div class="bd-container-inner bd-margins clearfix">
                    <div class=" bd-layoutcontainer-11 bd-columns bd-no-margins">
                        <div class="bd-container-inner">
                            <div class="container-fluid">
                                <div class="row 
                                     bd-row-flex 
                                     bd-row-align-top">
                                    <div class=" bd-columnwrapper-23 
                                         col-xs-12">
                                        <div class="bd-layoutcolumn-23 bd-column" ><div class="bd-vertical-align-wrapper"><h2 class=" bd-textblock-20 bd-content-element">
                                                    CONOCE LAS BUJÍAS DENSO
                                                </h2></div></div>
                                    </div>

                                    <div class=" bd-columnwrapper-25 
                                         col-md-4
                                         col-sm-6">
                                        <div class="bd-layoutcolumn-25 bd-background-width  bd-column" >
                                            <div class="bd-vertical-align-wrapper">
                                                <?= $this->Html->image('426a6da87799950b87e1c294dd49c7a7_plattthome.png',array('class'=>'bd-imagelink-4 bd-imagescaling bd-imagescaling-3 bd-own-margins bd-imagestyles')) ?>

                                                <h4 class=" bd-textblock-26 bd-content-element">
                                                    <a href="https://densoautoparts.com/es-buj-as-de-encendido-buj-as-de-encendido-platinum-tt" target="_blank">
                                                        Platinum TT®</a>
                                                </h4>

                                                <p class=" bd-textblock-28 bd-content-element">
                                                    Diseño de platino de doble punta con longevidad y durabilidad superiores.
                                                </p></div></div>
                                    </div>

                                    <div class=" bd-columnwrapper-27 
                                         col-md-4
                                         col-sm-6">
                                        <div class="bd-layoutcolumn-27 bd-column" >
                                            <div class="bd-vertical-align-wrapper">
                                                <?= $this->Html->image('b4234c313bb03b033eb9dea5558bbdbf_Iridpowerhome.png',array('class'=>'bd-imagelink-4 bd-imagescaling bd-imagescaling-3 bd-own-margins bd-imagestyles')) ?>
                                                
                                                <h4 class=" bd-textblock-30 bd-content-element">
                                                    <a href=" https://densoautoparts.com/es-buj-as-de-encendido-buj-as-de-encendido-iridium-power" target="_blank">
                                                        Iridium Power®</a>
                                                </h4>

                                                <p class=" bd-textblock-32 bd-content-element">
                                                    Máxima energía de chispa con el electrodo central de iridio de 0.4 mm.
                                                </p></div></div>
                                    </div>

                                    <div class=" bd-columnwrapper-29 
                                         col-md-4
                                         col-sm-6">
                                        <div class="bd-layoutcolumn-29 bd-column" >
                                            <div class="bd-vertical-align-wrapper">
                                                <?= $this->Html->image('721170707c948535867eec1537940159_Iridracinghome.png',array('class'=>'bd-imagelink-4 bd-imagescaling bd-imagescaling-3 bd-own-margins bd-imagestyles')) ?>
                                                <h4 class=" bd-textblock-35 bd-content-element">
                                                    <a href=" https://densoautoparts.com/es-buj-as-de-encendido-buj-as-de-encendido-iridium-racing" target="_blank">
                                                        Iridium Racing®</a>
                                                </h4>

                                                <p class=" bd-textblock-37 bd-content-element">
                                                    Ignición confiable, incluso en las más duras condiciones de carrera.<br>
                                                </p></div></div>
                                    </div>

                                    <div class=" bd-columnwrapper-31 
                                         col-md-4
                                         col-sm-6">
                                        <div class="bd-layoutcolumn-31 bd-column" ><div class="bd-vertical-align-wrapper">
                                                <?= $this->Html->image('6f2ff8652d34ea629a81a5005d4de11b_IridLLhomenew.png',array('class'=>'bd-imagelink-4 bd-imagescaling bd-imagescaling-3 bd-own-margins bd-imagestyles')) ?>
                                                
                                                <h4 class=" bd-textblock-39 bd-content-element">
                                                    <a href="https://densoautoparts.com/es-buj-as-de-encendido-buj-as-de-encendido-iridio-de-larga-duraci-n.aspx" target="_blank">
                                                        Iridium Long Life®</a>
                                                </h4>

                                                <p class=" bd-textblock-41 bd-content-element">
                                                    Mejore la longevidad con la primera bujía automotriz que usa iridio.
                                                </p></div></div>
                                    </div>

                                    <div class=" bd-columnwrapper-35 
                                         col-md-4
                                         col-sm-6">
                                        <div class="bd-layoutcolumn-35 bd-column" >
                                            <div class="bd-vertical-align-wrapper">
                                                <?= $this->Html->image('cec3a3ca62ddba14812381b9dfbc6607_dubplathome.png',array('class'=>'bd-imagelink-4 bd-imagescaling bd-imagescaling-3 bd-own-margins bd-imagestyles')) ?>
                                                
                                                <h4 class=" bd-textblock-43 bd-content-element">
                                                    <a href="https://densoautoparts.com/es-buj-as-de-encendido-buj-as-de-encendido-doble-platino.aspx" target="_blank">
                                                        Double Platinum
                                                    </a>
                                                </h4>

                                                <p class=" bd-textblock-45 bd-content-element">
                                                    Dos electrodos de platino significan mayor durabilidad.<br>
                                                </p></div></div>
                                    </div>

                                    <div class=" bd-columnwrapper-37 
                                         col-md-4
                                         col-sm-6">
                                        <div class="bd-layoutcolumn-37 bd-column" >
                                            <div class="bd-vertical-align-wrapper">
                                                <?= $this->Html->image('210e69a6d32b1ea545b875437fb855f0_ugroovehome.png',array('class'=>'bd-imagelink-4 bd-imagescaling bd-imagescaling-3 bd-own-margins bd-imagestyles')) ?>
                                                
                                                <h4 class=" bd-textblock-47 bd-content-element">
                                                    <a href="https://densoautoparts.com/es-buj-as-de-encendido-buj-as-de-encendido-con-original-ranura-en-u.aspx" target="_blank">
                                                        U-Groove
                                                    </a>
                                                </h4>

                                                <p class=" bd-textblock-49 bd-content-element">
                                                    Un electrodo de tierra acanalado significa mayor eficiencia de combustible.<br>
                                                </p></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section></div>

        <section class=" bd-section-9 bd-tagstyles" id="section4" data-section-title="One Сolumn">
            <div class="bd-container-inner bd-margins clearfix">
                
                <?= $this->Html->image('a477a2fdb510c53bec9c1ec141e9b9cf_bwdlogohome.png', array('class'=>'bd-imagelink-25 bd-own-margins bd-imagestyles'))?>
                
                <h3 class=" bd-textblock-50 bd-content-element">
                    Hay cientos de modelos de vehículos alrededor del mundo
                </h3>

                <h3 class=" bd-textblock-52 bd-content-element">
                    CONSTRUIDOS CON DENSO
                </h3>

                <p class=" bd-textblock-54 bd-content-element">
                    Por más de 65 años, DENSO ha sido la elección global de los desarrolladores de autos de las marcas más importantes del mundo, con cientos de modelos en el mercado utilizando autopartes DENSO.&nbsp;<br style="caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);">Existen muchas opciones cuando se habla de autopartes, pero ¿no te gustaría elegir la marca electa por las marcas más grandes de la industria automotriz?
                </p>
            </div>
        </section>

        <section class=" bd-section-10 bd-page-width bd-tagstyles " id="section4" data-section-title="Welcome Text">
            <div class="bd-container-inner bd-margins clearfix">
                <div class=" bd-layoutbox-15 bd-page-width  bd-no-margins bd-no-margins clearfix">
                    <div class="bd-container-inner">
                        <h2 class=" bd-textblock-56 bd-content-element">
                            ¿Por qué elegir DENSO?
                        </h2>

                        <p class=" bd-textblock-58 bd-content-element">
                            Es simple. La marca&nbsp;<b style="font-size: 14px;">DENSO</b>&nbsp;está construida para entregar más Calidad, Confiabilidad y Valor que cualquier otro fabricante. Ya sea suministrando piezas confiables de equipo original a los fabricantes de automóviles de todo el mundo, o desarrollando piezas de repuesto construidas para cumplir o superar los requisitos de las armadoras más importantes, la línea de productos&nbsp;<b style="font-size: 14px;">DENSO</b>&nbsp;está construida para entregar un desempeño total superior, todos los días. Nuestra filosofía First Time Fit® atrae la atención en todo el mundo automotriz, mientras que nuestro compromiso de impulsar la tecnología hacia el futuro de manera continua nos diferencia globalmente.<br>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class=" bd-section-11 bd-page-width bd-tagstyles " id="distribuidores" data-section-title="Three Columns">
            <div class="bd-container-inner bd-margins clearfix">
                <div class=" bd-layoutcontainer-16 bd-page-width  bd-columns bd-no-margins">
                    <div class="bd-container-inner">
                        <div class="container-fluid">
                            <div class="row 
                                 bd-row-flex 
                                 bd-row-align-top">
                                <div class=" bd-columnwrapper-45 
                                     col-xs-12">
                                    <div class="bd-layoutcolumn-45 bd-column" ><div class="bd-vertical-align-wrapper"><h2 class=" bd-textblock-59 bd-content-element">
                                                Distribuidores en la República Mexicana
                                            </h2></div></div>
                                </div>

                                <div class=" bd-columnwrapper-63 
                                     col-sm-3
                                     col-xs-6">
                                    <div class="bd-layoutcolumn-63 bd-column" >
                                        <div class="bd-vertical-align-wrapper" style="margin-left: 6%;">
                                            <p class=" bd-textblock-75 bd-content-element">
                                            <?php 
                                                for ($i=0;$i<(sizeof($distribuidores)/2);$i++){
                                                    echo $this->Html->link($distribuidores[$i]['Distribuidor']['estado'],array('controller'=>'distribuidors','action'=>'por_estado',$distribuidores[$i]['Distribuidor']['estado']))."<br>";

                                                }
                                            ?>    
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class=" bd-columnwrapper-47 
                                     col-sm-3
                                     col-xs-6">
                                    <div class="bd-layoutcolumn-47 bd-column" >
                                        <div class="bd-vertical-align-wrapper">
                                            <p class=" bd-textblock-61 bd-content-element">
                                                <?php 
                                                    for ($i=(sizeof($distribuidores)/2)+1;$i<sizeof($distribuidores);$i++){
                                                        echo $this->Html->link($distribuidores[$i]['Distribuidor']['estado'],array('controller'=>'distribuidors','action'=>'por_estado',$distribuidores[$i]['Distribuidor']['estado']))."<br>";
                                                    }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class=" bd-columnwrapper-49 
                                     col-sm-6
                                     col-xs-12">
                                    <div class="bd-layoutcolumn-49 bd-column" >
                                        <div class="bd-vertical-align-wrapper">
                                            <?= $this->Html->image('1a2a404f552c9a62da8cfe46f0dc9b41_distribuidores_mexico_denso.png', array('class'=>'bd-imagelink-26 bd-own-margins bd-imagestyles'))?>
                                            
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=" bd-section-12 bd-page-width bd-tagstyles " id="section4" data-section-title="Two Columns Three Cells">
            <div class="bd-container-inner bd-margins clearfix">
                <div class=" bd-layoutcontainer-20 bd-page-width  bd-columns bd-no-margins">
                    <div class="bd-container-inner">
                        <div class="container-fluid">
                            <div class="row 
                                 bd-row-flex 
                                 bd-row-align-middle">
                                <div class=" bd-columnwrapper-51 
                                     col-sm-6">
                                    <div class="bd-layoutcolumn-51 bd-no-margins bd-column" ><div class="bd-vertical-align-wrapper"><h2 class=" bd-textblock-63 bd-content-element">
                                                VENDE EQUIPO DENSO
                                            </h2>

                                            <h3 class=" bd-textblock-65 bd-content-element">
                                                Conviértete en distribuidor autorizado
                                            </h3>

                                            <div class=" bd-spacer-17 clearfix"></div>

                                            <p class=" bd-textblock-67 bd-content-element">
                                                Por más de 65 años, DENSO ha estado innovando en la tecnología automotriz desarrollando nuevos productos, materiales y diseños para equipos originales y venta de refacciones. A través de nuestros productos, ofreces garantía, calidad y durabilidad a cada uno de tus clientes cuando compra DENSO.&nbsp;<br style="text-align: start; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-size: 14px;">Forma parte de nuestra red de distribuidores.<br>
                                            </p>

                                            <div class=" bd-spacer-19 clearfix"></div>

                                            <a 
                                                href="#contacto" class="bd-linkbutton-6  bd-button-14  bd-own-margins bd-content-element"    >
                                                PEDIR INFORMACIÓN
                                            </a></div></div>
                                </div>

                                <div class=" bd-columnwrapper-53 
                                     col-sm-6">
                                    <div class="bd-layoutcolumn-53  bd-column" ><div class="bd-vertical-align-wrapper"><div class=" bd-layoutbox-19 bd-no-margins clearfix">
                                                <div class="bd-container-inner">

                                                </div>
                                            </div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=" bd-section-13 bd-page-width bd-tagstyles " id="contacto" data-section-title="Welcome Text">
            <div class="bd-container-inner bd-margins clearfix">
                <div class=" bd-layoutbox-24 bd-page-width  bd-no-margins bd-no-margins clearfix">
                    <div class="bd-container-inner">
                        <h2 class=" bd-textblock-69 bd-content-element">
                            Contacto
                        </h2>
                        <p>
                            Las operaciones de DENSO son principalmente de empresa a empresa. Por el momento las ventas de nuestros productos son a través de distribuidores mayoristas, así como minoristas autorizados. Si usted es un consumidor, consulte a su distribuidor más cercano <?= $this->Html->link('EN DONDE COMPRAR','#distribuidores')?>. </p><p>O Encuentre su pieza en nuestra sección <?= $this->Html->link('BUSCAR MI PIEZA',array('controller'=>'productos','action'=>'buscar'))?> 
                        </p>
                    </div>
                </div>
                <?php echo $this->Form->create('Distribuidor',array('class'=>'bd-form-2','url'=>array('controller'=>'distribuidors','action'=>'contacto')))?>
	<div class="bd-container-inner">
        <div class="container-fluid">
            <div class=" bd-layoutcontainer-13 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row ">
                <div class=" bd-columnwrapper-39 col-sm-6">
                    <div class="bd-layoutcolumn-39 bd-column" >
                    	<div class="bd-vertical-align-wrapper">
                            <?php $estados = array(
                                'Aguascalientes' => 'Aguascalientes',
                                'Baja California' => 'Baja California',
                                'Baja California Sur' => 'Baja California Sur',
                                'Campeche' => 'Campeche',
                                'Chiapas' => 'Chiapas',
                                'Chihuahua' => 'Chihuahua',
                                'Coahuila' => 'Coahuila',
                                'Colima' => 'Colima',
                                'Ciudad de México' => 'Ciudad de México',
                                'Durango' => 'Durango',
                                'Guanajuato' => 'Guanajuato',
                                'Guerrero' => 'Guerrero',
                                'Hidalgo' => 'Hidalgo',
                                'Jalisco' => 'Jalisco',
                                'Estado de México' => 'Estado de México',
                                'Michoacán' => 'Michoacán',
                                'Morelos' => 'Morelos',
                                'Nayarit' => 'Nayarit',
                                'Nuevo Leon' => 'Nuevo Leon',
                                'Oaxaca' => 'Oaxaca',
                                'Puebla' => 'Puebla',
                                'Querétaro' => 'Querétaro',
                                'Quintana Roo' => 'Quintana Roo',
                                'San Luis Potosí' => 'San Luis Potosí',
                                'Sinaloa' => 'Sinaloa',
                                'Sonora' => 'Sonora',
                                'Tabasco' => 'Tabasco',
                                'Tamaulipas' => 'Tamaulipas',
                                'Tlaxcala' => 'Tlaxcala',
                                'Veracruz' => 'Veracruz',
                                'Yucatán' => 'Yucatán',
                                'Zacatecas' => 'Zacatecas',)?>
                            <?php echo $this->Form->input('nombre',array('required'=>'required','class'=>'bd-form-input','type'=>'text','placeholder'=>'Nombre','label'=>false,'div'=>'bd-input-2 form-group'))?>
                            <?php echo $this->Form->input('email',array('required'=>'required','class'=>'bd-form-input','type'=>'text','placeholder'=>'Email','label'=>false,'div'=>'bd-input-2 form-group'))?>
                            <?php echo $this->Form->input('telefono',array('required'=>'required','class'=>'bd-form-input','type'=>'text','placeholder'=>'Teléfono','label'=>false,'div'=>'bd-input-2 form-group'))?>
                            <?php echo $this->Form->input('estado',array('empty'=>'Estado de la República Méxicana de contacto','options'=>$estados,'required'=>'required','class'=>'bd-form-input','type'=>'select','label'=>false,'div'=>'bd-input-2 form-group'))?>

                            </div>
                    </div>
            </div>
            <div class=" bd-columnwrapper-44 col-sm-6">
                    <div class="bd-layoutcolumn-44 bd-column" >
                            <div class="bd-vertical-align-wrapper">
                                    <?php echo $this->Form->input('titulo',array('required'=>'required','class'=>'bd-form-input','type'=>'text','placeholder'=>'Asunto de Mensaje','label'=>false,'div'=>'bd-input-2 form-group'))?>
                                    <?php echo $this->Form->input('mensaje',array('required'=>'required','class'=>'bd-form-input','type'=>'textarea','placeholder'=>'Mensaje','label'=>false,'div'=>'bd-textarea-2 form-group'))?>
                                <div class="g-recaptcha" data-sitekey="6Le1O-MUAAAAALTY1hKnyMp-2FkFY-wAMqfYqDy2"></div>
                                    <?php echo $this->Form->submit('Enviar Mensaje',array('class'=>'bd-linkbutton-6  bd-button-16  bd-own-margins bd-content-element'))?>
                            </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
<?php echo $this->Form->end()?>
            </div>
        </section>
    </div>
</div>