<?php if ($region=='mx') {?>
    <section class=" bd-section-13 bd-page-width bd-tagstyles " id="contacto" data-section-title="Welcome Text">
        <div class="bd-container-inner bd-margins clearfix">
            <div class=" bd-layoutbox-24 bd-page-width  bd-no-margins bd-no-margins clearfix">
                <div class="bd-container-inner">
                    <h2 style="font-family:'Denso'" class=" bd-textblock-69 bd-content-element">
                        ¿En qué podemos ayudarte?
                    </h2>
                    <p>
                        Por el momento, solo trabajamos por medio de distribuidores. Nuestros productos los encontrarás en alguno de nuestros <?= $this->Html->link('DISTRIBUIDORES','#distribuidores',array('style'=>'color:red'))?>.
                    </p>
                    <p>
                        Si buscas la existencia de una pieza para tu modelo de automóvil, te invitamos a ir a la sección de <?= $this->Html->link('BUSCAR MI PIEZA',array('controller'=>'productos','action'=>'buscar'),array('style'=>'color:red'));?>.
                    </p>
                    <p>
                        Si estás interesado en ser distribuidor y ver los requisitos, por favor, llena este formulario <?= $this->Html->link('QUIERO SER DISTRIBUIDOR',array('controller'=>'pages','action'=>'landing'),array('style'=>'color:red'));?>.
                    </p>
                        Si tienes alguna duda sobre nuestros productos, deja tus datos en el formulario y nos pondremos en contacto contigo en las próximas 48 horas.
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

<?php } else if ($region=='co') {?>
    <section class=" bd-section-13 bd-page-width bd-tagstyles " id="contacto" data-section-title="Welcome Text">
        <div class="bd-container-inner bd-margins clearfix">
            <div class=" bd-layoutbox-24 bd-page-width  bd-no-margins bd-no-margins clearfix">
                <div class="bd-container-inner">
                    <h2 style="font-family:'Denso'" class=" bd-textblock-69 bd-content-element">
                        ¿En qué podemos ayudarte?
                    </h2>
                    <p>
                        Por el momento, solo trabajamos por medio de distribuidores. Nuestros productos los encontrarás en alguno de nuestros <?= $this->Html->link('DISTRIBUIDORES','#distribuidores',array('style'=>'color:red'))?>.
                    </p>
                    <p>
                    Si buscas una pieza para tu vehículo, visita nuestro buscador de partes DENSO. <?= $this->Html->link('BUSCAR MI PIEZA',array('controller'=>'productos','action'=>'buscar'),array('style'=>'color:red'));?>.
                    </p>
                    <p>
                        Si tienes alguna duda sobre nuestros productos, deja tus datos en el formulario y nos pondremos en contacto contigo en las próximas 48 horas.
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
                                                    <?php
                                                        $estados = array(
                                                            'Bogotá'=>'Bogotá',
                                                            'Barranquilla'=>'Barranquilla',
                                                            'Cartagena'=>'Cartagena',
                                                            'Santa Marta'=>'Santa Marta',
                                                            'Buenaventura'=>'Buenaventura',
                                                            'Riohacha'=>'Riohacha',
                                                            'Mompox'=>'Mompox',
                                                            'Tumaco'=>'Tumaco',

                                                        );
                                                    ?>
                                                    <?php echo $this->Form->input('nombre',array('required'=>'required','class'=>'bd-form-input','type'=>'text','placeholder'=>'Nombre','label'=>false,'div'=>'bd-input-2 form-group'))?>
                                                    <?php echo $this->Form->input('telefono',array('required'=>'required','class'=>'bd-form-input','type'=>'text','placeholder'=>'Celular','label'=>false,'div'=>'bd-input-2 form-group'))?>
                                                    <?php echo $this->Form->input('email',array('required'=>'required','class'=>'bd-form-input','type'=>'text','placeholder'=>'Email','label'=>false,'div'=>'bd-input-2 form-group'))?>
                                                    <?php echo $this->Form->input('estado',array('empty'=>'Seleccionar Departamento','options'=>$estados,'required'=>'required','class'=>'bd-form-input','type'=>'select','label'=>false,'div'=>'bd-input-2 form-group'))?>
                                                    <?php echo $this->Form->input('ciudad',array('required'=>'required','class'=>'bd-form-input','type'=>'text','placeholder'=>'Ciudad','label'=>false,'div'=>'bd-input-2 form-group'))?>

                                                    </div>
                                            </div>
                                    </div>
                                    <div class=" bd-columnwrapper-44 col-sm-6">
                                            <div class="bd-layoutcolumn-44 bd-column" >
                                                    <div class="bd-vertical-align-wrapper">
                                                            <?php echo $this->Form->input('titulo',array('required'=>'required','class'=>'bd-form-input','type'=>'text','placeholder'=>'Título de Mensaje','label'=>false,'div'=>'bd-input-2 form-group'))?>
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
<?php } ?>
