<?php
echo $this->Html->css(
	array(
		'Contacto',
	),
	array('inline'=>false)
);
?>
<?php if($region=='mx'){?>

	<?php
		$estados = array(
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
			'Zacatecas' => 'Zacatecas',);
	?>
	<section class="u-clearfix u-section-1" id="sec-7508">
	<div class="u-clearfix u-sheet u-sheet-1">
		<div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
			<div class="u-layout">
				<div class="u-layout-row">
					<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
						<div class="u-container-layout u-container-layout-1">
							<h1 class="u-custom-font u-text u-text-default u-text-1">Si tienes alguna duda de nuestros productos,</h1>
							<h2 class="u-custom-font u-text u-text-body-color u-text-default u-text-2"> deja tus datos en el formulario y te contactaremos en las próximas 48 horas. </h2>
							<div class="u-form u-form-1">
								<?= $this->Form->create('Distribuidor',array('url'=>array('controller'=>'distribuidors','action'=>'contacto'),'class'=>'u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form','style'=>'padding:15px','source'=>'custom','redirect'=>'true'))?>
								<?php echo $this->Form->input('nombre',array('required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'text','placeholder'=>'Nombre','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
								<?php echo $this->Form->input('email',array('required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'email','placeholder'=>'E-mail','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
								<?php echo $this->Form->input('telefono',array('required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'text','placeholder'=>'Teléfono','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
								<?php echo $this->Form->input('estado',array('empty'=>'Seleccionar Estado','options'=>$estados,'required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'select','label'=>false,'div'=>'u-form-group u-form-select u-label-none u-form-group-4'))?>
								<?php echo $this->Form->input('titulo',array('required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'text','placeholder'=>'Asunto','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
								<?php echo $this->Form->input('mensaje',array( 'rows'=>"4", 'cols'=>"50",'required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'textarea','placeholder'=>'¿Cómo podemos ayudarte?','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
								<?= $this->Form->hidden('region',array('value'=>$region))?>
								<div class="u-align-left u-form-group u-form-submit u-label-none">
									<a href="#" class="u-black u-border-none u-btn u-btn-submit u-button-style u-custom-font u-btn-1">Enviar Mensaje</a>
									<input type="submit" value="submit" class="u-form-control-hidden">
								</div>
								<div class="u-form-send-message u-form-send-success"> Gracias! Tu mensaje ha sido enviado. </div>
								<div class="u-form-send-error u-form-send-message"> No se puede enviar su mensaje. Por favor, corrija los errores y vuelva a intentarlo. </div>
								<input type="hidden" value="" name="recaptchaResponse">
								<?= $this->Form->end()?>
							</div>
						</div>
					</div>
					<div class="u-container-align-center u-container-style u-hidden-sm u-hidden-xs u-image u-image-contain u-layout-cell u-size-30 u-image-1" data-image-width="895" data-image-height="1105">
						<div class="u-container-layout u-container-layout-2"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php }else if ($region == 'co') {?>

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
	<section class="u-clearfix u-section-1" id="sec-7508">
		<div class="u-clearfix u-sheet u-sheet-1">
			<div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-row">
						<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
							<div class="u-container-layout u-container-layout-1">
								<h1 class="u-custom-font u-text u-text-default u-text-1">Si tienes alguna duda de nuestros productos,</h1>
								<h2 class="u-custom-font u-text u-text-body-color u-text-default u-text-2"> deja tus datos en el formulario y te contactaremos en las próximas 48 horas. </h2>
								<div class="u-form u-form-1">
									<?= $this->Form->create('Distribuidor',array('url'=>array('controller'=>'distribuidors','action'=>'contacto'),'class'=>'u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form','style'=>'padding:15px','source'=>'custom','redirect'=>'true'))?>
									<?php echo $this->Form->input('nombre',array('required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'text','placeholder'=>'Nombre','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
									<?php echo $this->Form->input('email',array('required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'email','placeholder'=>'E-mail','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
									<?php echo $this->Form->input('telefono',array('required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'text','placeholder'=>'Teléfono','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
									<?php echo $this->Form->input('estado',array('empty'=>'Seleccionar Estado','options'=>$estados,'required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'select','label'=>false,'div'=>'u-form-group u-form-select u-label-none u-form-group-4'))?>
									<?php echo $this->Form->input('titulo',array('required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'text','placeholder'=>'Asunto','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
									<?php echo $this->Form->input('mensaje',array( 'rows'=>"4", 'cols'=>"50",'required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'textarea','placeholder'=>'¿Cómo podemos ayudarte?','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
									<?= $this->Form->hidden('region',array('value'=>$region))?>
									<div class="u-align-left u-form-group u-form-submit u-label-none">
										<a href="#" class="u-black u-border-none u-btn u-btn-submit u-button-style u-custom-font u-btn-1">Enviar Mensaje</a>
										<input type="submit" value="submit" class="u-form-control-hidden">
									</div>
									<div class="u-form-send-message u-form-send-success"> Gracias! Tu mensaje ha sido enviado. </div>
									<div class="u-form-send-error u-form-send-message"> No se puede enviar su mensaje. Por favor, corrija los errores y vuelva a intentarlo. </div>
									<input type="hidden" value="" name="recaptchaResponse">
									<?= $this->Form->end()?>
								</div>
							</div>
						</div>
						<div class="u-container-align-center u-container-style u-hidden-sm u-hidden-xs u-image u-image-contain u-layout-cell u-size-30 u-image-1" data-image-width="895" data-image-height="1105">
							<div class="u-container-layout u-container-layout-2"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php } else { ?>

	<section class="u-clearfix u-section-1" id="sec-7508">
		<div class="u-clearfix u-sheet u-sheet-1">
			<div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-row">
						<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
							<div class="u-container-layout u-container-layout-1">
								<h1 class="u-custom-font u-text u-text-default u-text-1">Si tienes alguna duda de nuestros productos,</h1>
								<h2 class="u-custom-font u-text u-text-body-color u-text-default u-text-2"> deja tus datos en el formulario y te contactaremos en las próximas 48 horas. </h2>
								<div class="u-form u-form-1">
									<?= $this->Form->create('Distribuidor',array('url'=>array('controller'=>'distribuidors','action'=>'contacto'),'class'=>'u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form','style'=>'padding:15px','source'=>'custom','redirect'=>'true'))?>
									<?php echo $this->Form->input('nombre',array('required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'text','placeholder'=>'Nombre','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
									<?php echo $this->Form->input('email',array('required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'email','placeholder'=>'E-mail','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
									<?php echo $this->Form->input('telefono',array('required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'text','placeholder'=>'Teléfono','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
									<?php echo $this->Form->input('titulo',array('required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'text','placeholder'=>'Asunto','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
									<?php echo $this->Form->input('mensaje',array( 'rows'=>"4", 'cols'=>"50",'required'=>'required','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none','type'=>'textarea','placeholder'=>'¿Cómo podemos ayudarte?','label'=>false,'div'=>'u-form-group u-form-name u-label-none'))?>
									<?= $this->Form->hidden('region',array('value'=>$region))?>
									<div class="u-align-left u-form-group u-form-submit u-label-none">
										<a href="#" class="u-black u-border-none u-btn u-btn-submit u-button-style u-custom-font u-btn-1">Enviar Mensaje</a>
										<input type="submit" value="submit" class="u-form-control-hidden">
									</div>
									<div class="u-form-send-message u-form-send-success"> Gracias! Tu mensaje ha sido enviado. </div>
									<div class="u-form-send-error u-form-send-message"> No se puede enviar su mensaje. Por favor, corrija los errores y vuelva a intentarlo. </div>
									<input type="hidden" value="" name="recaptchaResponse">
									<?= $this->Form->end()?>
								</div>
							</div>
						</div>
						<div class="u-container-align-center u-container-style u-hidden-sm u-hidden-xs u-image u-image-contain u-layout-cell u-size-30 u-image-1" data-image-width="895" data-image-height="1105">
							<div class="u-container-layout u-container-layout-2"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php } ?>
