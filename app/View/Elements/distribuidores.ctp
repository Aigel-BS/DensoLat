
<?php if ($region=='mx') {?>
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
                            <div class="bd-layoutcolumn-45 bd-column" >
                                <div class="bd-vertical-align-wrapper" style="text-align:center">
                                    <h2 style="font-family:'Denso'" class=" bd-textblock-59 bd-content-element">
                                        Consulta los distribuidores alrededor de la República Mexicana
                                    </h2>
                                    <p><strong>Selecciona el estado en el que te encuentras y obtendrás la lista de distribuidores. Estamos seguros de que encontrarás uno cerca de ti.</strong></p>
                                </div>
                            </div>
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
<?php } ?>

<?php if ($region=='co') {?>
    <section class=" bd-section-11 bd-page-width bd-tagstyles " id="distribuidores" data-section-title="Three Columns">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-16 bd-page-width  bd-columns bd-no-margins">
            <div class="bd-container-inner">
                <div class="container-fluid">
                    <div class="row 
                        bd-row-flex 
                        bd-row-align-top">
                        <div class=" bd-columnwrapper-45 col-xs-12">
                            <div class="bd-layoutcolumn-45 bd-column" >
                                <div class="bd-vertical-align-wrapper" style="text-align:center">
                                    <h2 style="font-family:'Denso'" class=" bd-textblock-59 bd-content-element">
                                        Conoce nuestros distribuidores Oficiales
                                    </h2>
                                    <p><strong>DENSO es una marca presente en más de 4.000 almacenes de repuestos en todo Colombia.</strong></p>
                                </div>
                            </div>
                        </div>

                        <div class=" bd-columnwrapper-63 
                            col-sm-6
                            col-xs-12">
                            <div class="bd-layoutcolumn-63 bd-column" >
                                <div class="bd-vertical-align-wrapper" style="text-align:center">
                                    <p class=" bd-textblock-75 bd-content-element">
                                        <ul>
                                            <li>Importadora Cali </li>
                                            <li>TYM Autopartes</li>
                                            <li>Pelaez Hermanos</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=" bd-columnwrapper-49 
                            col-sm-6
                            col-xs-12">
                            <div class="bd-layoutcolumn-49 bd-column" >
                                <div class="bd-vertical-align-wrapper" style="text-align:center">
                                    <?= $this->Html->image('colombia.png', array('class'=>'bd-imagelink-26 bd-own-margins bd-imagestyles','style'=>'height:400px;width:auto'))?>
                                    
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>