<?php if ($region=='mx'){?>
    <?php 
        $this->assign('title', 'Denso Autopartes México - Tiempo de Autopartes');
        $this->assign('description', 'Sección en donde podrás conocer estadísticas, y datos importantes del mundo de las autopartes en México');
    ?>

    <div class=" bd-stretchtobottom-2 bd-stretch-to-bottom" data-control-selector=".bd-content-12">
        <div class=" bd-content-12 ">
            <div class=" bd-htmlcontent-3 bd-margins" data-page-id="page.17">
                <section class=" bd-section-3 bd-tagstyles" id="section7" data-section-title="Container Plus Image Below">
                    <div class="bd-container-inner bd-margins clearfix">
                        <p style="font-family:'Barlow Bold'" class=" bd-textblock-74 bd-content-element">
                            MULTIMEDIA
                        </p>	
                        <h1 style="font-family:'Denso'" class=" bd-textblock-72 bd-content-element">
                            TIEMPO DE AUTOPARTES
                        </h1>
                    </div>
                </section>        
                <section class=" bd-section-20 bd-tagstyles" id="section20" data-section-title="Section">
                    <div class="bd-container-inner bd-margins clearfix">
                        <div class="row" style="margin-top:2em">
                        <?php if(1==0){ //23:29?>
                            <div class="col-lg-12" style="text-align: center">
                                <div class="row">
                                    <iframe width="100%" height="490" src="https://www.youtube.com/embed/gUA5w2KgCAg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="row m-t-20">
                                        <br>
                                    <?= $this->Html->link('<i class="fas fa-broadcast-tower"></i> Escuchar Programa de Radio en Vivo','https://www.imagenradio.com.mx/transmision-en-vivo#martes-tab',array('target'=>'_blank','style'=>"background-color:red; color:white ;border-radius: 5px;padding: 10px;",'escape'=>false))?>
                                </div>
                            </div>
                            <?php } else {?>
                                <div class="col-lg-3" style="text-align: center">
                                    <?= $this->Html->image('tiempo-de-autopartes-denso-imagen-tv-3.jpg')?>            
                                </div>
                                <div class="col-lg-3" style="text-align: center">
                                    <?= $this->Html->image('tiempo-de-autopartes-denso-imagen-tv-2.jpg')?>            
                                </div>
                                <div class="col-lg-3" style="text-align: center">
                                    <?= $this->Html->image('tiempo-de-autopartes-denso-imagen-tv-1.jpg')?>            
                                </div>
                                <div class="col-lg-3" style="text-align: center">
                                    <?= $this->Html->image('tiempo-de-autopartes-denso-imagen-tv-4.jpg')?>            
                                </div>
                            <?php } ?>    
                        </div>
                    </div>
                </section>
                <section class=" bd-section-20 bd-tagstyles" id="section20" data-section-title="Section">
                    <div class="bd-container-inner bd-margins clearfix">
                        <div class="row" style="margin-top:2em">
                            <h4 style="font-family:'Barlow'" style="color:red">PARTICIPACIONES PASADAS</h4>
                            <div class="col-lg-4" style="text-align: center">
                                <p><strong>Te explicamos porque es importante mantener el radiador en excelentes condiciones para tu auto.(22/Septiembre/2020)</strong></p>
                                <?php echo $this->Html->media('/videos/220920_MULTICAST_ENTREVISTA_DENSO_AUTOS_1700.m4v', array('width'=>'100%','controls'));?>
                            </div>
                            <div class="col-lg-4" style="text-align: center">
                                <p><strong>¿Conoces la tecnología de DENSO en sus limpiadores para autos? Aquí lo explicamos (08/Septiembre/2020)</strong></p>
                                <?php echo $this->Html->media('/videos/080920_MULTICAST_ENTREVISTA_DENSO_AUTOS_1700.mp4', array('width'=>'100%','controls'));?>
                            </div>
                            <div class="col-lg-4" style="text-align: center">
                                <p><strong>Conoce los beneficios de mantener un buen compresor de A/C en tu automovil y porque DENSO es la mejor opción (25/Agosto/2020)</strong></p>
                                <?php echo $this->Html->media('/videos/250820_MULTICAST_ENTREVISTA_DENSO_AUTOS_1700.m4v', array('width'=>'100%','controls'));?>
                            </div>
                            <div class="col-lg-4" style="text-align: center">
                                <p><strong>¿Por qué es importante cuidar el desgaste de un auto? Conoce los mejores filtros en el mercado. (11/Agosto/2020)</strong></p>
                                <?php echo $this->Html->media('/videos/110820_MULTICAST_ENTREVISTA_DENSO_AUTOS_1700.m4v', array('width'=>'100%','controls'));?>
                            </div>
                            <div class="col-lg-4" style="text-align: center">
                                <p><strong>Importancia de los filtros y otras autopartes para lograr una verificación exitosa. (28/Julio/2020)</strong></p>
                                <?php echo $this->Html->media('/videos/280720_MULTICAST_ENTREVISTA_DENSO_AUTOS_1700.m4v', array('width'=>'100%','controls'));?>
                            </div>
                            <div class="col-lg-4" style="text-align: center">
                                <p><strong>T-MEC y las nuevas consideraciones para la industria de las Autopartes en México. (14/Julio/2020)</strong></p>
                                <?php echo $this->Html->media('/videos/140720_MULTICAST_ENTREVISTA_DENSO_AUTOS_1700.mp4', array('width'=>'100%','controls'));?>
                            </div>
                            <div class="col-lg-4" style="text-align: center">
                                <p><strong>La industria de las Autopartes en México en tiempos de COVID y qué se está haciendo para impulsarla. (30/Junio/2020)</strong></p>
                                <?php echo $this->Html->media('/videos/300620_MULTICAST_ENTREVISTA_DENSO_AUTOS_1700.mp4', array('width'=>'100%','controls'));?>
                            </div>
                            <div class="col-lg-4" style="text-align: center">
                                <p><strong>La Industria de las Autopartes en México. Importancia y cifras que se deben considerar (16/Junio/2020)</strong></p>
                                <?php echo $this->Html->media('/videos/160620_MULTICAST_ENTREVISTA_DENSO_AUTOS_1700.mp4', array('width'=>'100%','controls'));?>
                            </div>
                            <div class="col-lg-4" style="text-align: center">
                                <p><strong>DENSO y su papel en la industria de Autopartes en México (16/Junio/2020)</strong></p>
                                <?php echo $this->Html->media('/videos/160620_MULTICAST_ENTREVISTA_DENSO_ZEA_1300.mp4', array('width'=>'100%','controls'));?>
                            </div>
                        </div>
                    </div>
                </section>
    </div>
    </div></div>
<?php } ?>