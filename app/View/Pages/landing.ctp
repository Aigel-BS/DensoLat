<?php
echo $this->Html->css(
		array(
				'Landing',
		),
		array('inline'=>false)
);

$estados = array(
	'Argentina'=>'Argentina',
    'México'=>'México',
    'Paraguay'=>'Paraguay',
    'Uruguay'=>'Uruguay'
        );

$giros = array(
   'Cadena de Refaccionaria'=>'Cadena de Refaccionaria',
   'Mayorista'=>'Mayorista',
);

$lead = array(
    'Anuncio'=>'Anuncio',
    'Evento'=>'Evento',
    'Recomendación'=>'Recomendación',
    'Red Social'=>'Red Social',
    'Sucursal'=>'Sucursal',
);
?>

<section class="u-align-center u-clearfix u-hidden-sm u-hidden-xs u-image u-section-1" src="" data-image-width="1728" data-image-height="1005" id="sec-7211">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h1 class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-text u-text-body-alt-color u-text-1" style="text-align: left; width: 100%">Conviértete en distribuidor autorizado.*</h1>
        <p style="margin: 0px 0px 0 29px;text-align: left; width: 100%; color:white">*Válido para Argentina, Uruguay, Paraguay y México.</p>
		<h2 class="u-align-left u-custom-font u-text u-text-body-alt-color u-text-2"> Aumenta tu línea de productos con bujías y refacciones originales de fácil instalación y obtén el respaldo de la marca DENSO</h2>

	</div>
</section>
<section class="u-clearfix u-hidden-sm u-hidden-xs u-section-2" id="sec-f1fb">
	<div class="u-clearfix u-sheet u-sheet-1">
		<div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
			<div class="u-layout">
				<div class="u-layout-col">
					<div class="u-size-30">
						<div class="u-layout-row">
							<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
								<div class="u-container-layout u-valign-top u-container-layout-1">
									<div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-expanded-width-xs u-form u-radius-10 u-white u-form-1">
										<form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 30px;" source="email" name="form">
											<h3 class="u-form-group u-form-text u-text u-text-1"> Forma parte de ​nuestra red de distribuidores</h3>
											<p class="u-form-group u-form-text u-text u-text-2"> Déjanos tus datos para que un representante DENSO te brinde la mejor asesoría de acuerdo con tus necesidades. </p>
                                            <p class="u-form-group u-form-text u-text u-text-2"> Para distribuciones fuera de Argentina, México, Paraguay o Uruguay, favor de acercarse con los distribuidores autorizados de tu país. </p>
											<div class="u-form-group u-form-name u-label-none">
												<label for="name-6797" class="u-label">Name</label>
												<input type="text" placeholder="Nombre *" id="name-6797" name="name" class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
											</div>
											<div class="u-form-email u-form-group u-label-none">
												<label for="email-6797" class="u-label">Email</label>
												<input type="email" placeholder="E-mail*" id="email-6797" name="email" class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
											</div>
											<div class="u-form-group u-label-none">
												<label for="text-2788" class="u-label">Entrada</label>
												<input type="text" placeholder="Teléfono*" id="text-2788" name="text" class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle">
											</div>
											<div class="u-form-group u-form-select u-label-none">
												<label for="select-b86e" class="u-label">Desplegable</label>
												<div class="u-form-select-wrapper">
													<?= $this->Form->input('estado',array('name'=>'País','type'=>'select','div'=>false,'options'=>$estados,'label'=>false,'empty'=>'Selecciona el País de interés','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle'))?>

													<svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
												</div>
											</div>
											<div class="u-form-group u-form-select u-label-none">
												<label for="select-d701" class="u-label">Desplegable</label>
												<div class="u-form-select-wrapper">
                                                    <?= $this->Form->input('giro',array('required'=>true,'name'=>'Giro','type'=>'select','div'=>false,'options'=>$giros,'label'=>false,'empty'=>'Giro','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle'))?>
													<svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
												</div>
											</div>
											<div class="u-form-group u-form-select u-label-none">
												<label for="select-23cb" class="u-label">Desplegable</label>
												<div class="u-form-select-wrapper">
                                                    <?= $this->Form->input('lead',array('required'=>true,'name'=>'Origen','type'=>'select','div'=>false,'options'=>$lead,'label'=>false,'empty'=>'¿Cómo te enteraste de nosotros?','class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle'))?>
													<svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
												</div>
											</div>
											<div class="u-align-left u-form-group u-form-submit">
												<a href="#" class="u-black u-border-1 u-border-white u-btn u-btn-submit u-button-style u-hover-black u-text-body-alt-color u-text-hover-white u-btn-1">Quiero ser distribuidor</a>
												<input type="submit" value="submit" class="u-form-control-hidden">
											</div>
											<div class="u-form-send-message u-form-send-success">¡Gracias por tu mensaje! En breve nos pondremos en contacto contigo para continuar el proceso de Distribución</div>
											<div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
											<input type="hidden" value="" name="recaptchaResponse">
											<input type="hidden" name="formServices" value="790b1496cfdbd7c7f815c7cba4441b38">
											<input type="hidden" name="siteKey" value="6Ld2DqAmAAAAAJQ6zuZOAjfUPOylkki9reU846cU">
										</form>
									</div>
									<img class="u-expanded-width-xl u-image u-image-default u-preserve-proportions u-image-1" src="<?= $this->Html->url('/img/image44.png')?>" alt="" data-image-width="689" data-image-height="689">
								</div>
							</div>
							<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
								<div class="u-container-layout u-container-layout-2">
									<h4 class="u-text u-text-default u-text-3"><span class="u-file-icon u-icon u-icon-1"><img src="<?= $this->Html->url('/img/Ellipse49.png')?>" alt=""></span>&nbsp;Gama de productos
									</h4>
									<p class="u-text u-text-default u-text-4"> Encontrarás productos tanto para automóviles como motocicletas.</p>
									<h4 class="u-text u-text-default u-text-5"><span class="u-file-icon u-icon u-icon-2"><img src="<?= $this->Html->url('/img/Ellipse49.png')?>" alt=""></span>&nbsp;​Disponibilidad
									</h4>
									<p class="u-text u-text-default u-text-6"> Existencia de artículos para las principales marcas y modelos de automóviles.</p>
									<h4 class="u-text u-text-default u-text-7"><span class="u-file-icon u-icon u-icon-3"><img src="<?= $this->Html->url('/img/Ellipse49.png')?>" alt=""></span>&nbsp;​Fácil instalación
									</h4>
									<p class="u-text u-text-default u-text-8"> Con la instalación First Time Fit® los técnicos ahorrarán tiempo.</p>
									<h4 class="u-text u-text-default u-text-9"><span class="u-file-icon u-icon u-icon-4"><img src="<?= $this->Html->url('/img/Ellipse49.png')?>" alt=""></span>&nbsp;​Equipo original
									</h4>
									<p class="u-text u-text-default u-text-10"> Ofrecerás piezas y repuestos de calidad superior cuidadosamente seleccionados.</p>
									<h4 class="u-text u-text-default u-text-11"><span class="u-file-icon u-icon u-icon-5"><img src="<?= $this->Html->url('/img/Ellipse49.png')?>" alt=""></span>&nbsp;Asesoría personalizada
									</h4>
									<p class="u-text u-text-12"> Ampliamos nuestra gama de productos constantemente, por lo que siempre tendrás asesoría de nuestros representantes.</p>
									<h4 class="u-text u-text-default u-text-13"><span class="u-file-icon u-icon u-icon-6"><img src="<?= $this->Html->url('/img/Ellipse49.png')?>" alt=""></span>&nbsp;​Reducción de impacto ambiental
									</h4>
									<p class="u-text u-text-14"> Utilizamos tecnologías para mejorar el desempeño del vehículo y reducir el impacto ambiental.</p>
									<p class="u-text u-text-custom-color-4 u-text-15"> En cada uno de nuestros productos encontrarás la misma garantía y calidad que manejamos en toda la marca.</p>
									<img class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-contain u-image-default u-image-2" src="<?= $this->Html->url('/img/Group2802.png')?>" alt="" data-image-width="716" data-image-height="289">
								</div>
							</div>
						</div>
					</div>
					<div class="u-size-30">
						<div class="u-layout-col">
							<div class="u-container-style u-image u-image-contain u-layout-cell u-size-60 u-image-3" data-image-width="1728" data-image-height="1476">
								<div class="u-container-layout u-container-layout-3">
									<h3 class="u-text u-text-16">¿Qué obtendrás al hacerte distribuidor?</h3>
									<ul class="u-text u-text-body-color u-text-17">
										<li> Ser parte del directorio de distribuidores de DENSO&nbsp;</li>
										<li>Descuentos, asesoría y entrenamientos por parte del equipo de ventas&nbsp;</li>
										<li>Visitas de campo (promotoría por parte del staff de DENSO)&nbsp;</li>
										<li>Acceso a programas de marketing (promociones de Buen Fin, regionales, mención en redes y sitio web, artículos promocionales, apoyo en aperturas, etc.)</li>
									</ul>
									<p class="u-align-center u-text u-text-body-alt-color u-text-18"> En 2019 DENSO fue considerada la 2da empresa más grande de refacciones y autopartes a nivel mundial según el “World’s Top 10 Aftermarket Automotive Suppliers” de Market Research Reports.</p>
									<h3 class="u-align-center u-custom-font u-text u-text-body-alt-color u-text-19">GARANTÍA DENSO</h3>
									<p class="u-align-center u-text u-text-body-alt-color u-text-20"> Por más de 65 años, DENSO ha estado innovando en la tecnología automotriz desarrollando nuevos productos, materiales y diseños para equipos originales y venta de refacciones. Incrementamos la seguridad y protección mientras reducimos el impacto ambiental.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="u-align-center u-clearfix u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-section-3" src="" data-image-width="390" data-image-height="1433" id="carousel_e512">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h1 class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-text u-text-body-alt-color u-text-1">Conviértete en distribuidor autorizado</h1>
		<h2 class="u-align-left u-custom-font u-text u-text-body-alt-color u-text-2"> Aumenta tu línea de productos con bujías y refacciones originales de fácil instalación y obtén el respaldo de la marca DENSO</h2>
		<div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-form u-radius-10 u-white u-form-1">
			<form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 30px;" source="email" name="form">
				<h3 class="u-form-group u-form-text u-text u-text-3"> Forma parte de ​nuestra red de distribuidores</h3>
				<p class="u-form-group u-form-text u-text u-text-4"> Déjanos tus datos para que un representante DENSO te brinde la mejor asesoría de acuerdo con tus necesidades. </p>
				<div class="u-form-group u-form-name u-label-none">
					<label for="name-6797" class="u-label">Name</label>
					<input type="text" placeholder="Nombre *" id="name-6797" name="name" class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
				</div>
				<div class="u-form-email u-form-group u-label-none">
					<label for="email-6797" class="u-label">Email</label>
					<input type="email" placeholder="E-mail*" id="email-6797" name="email" class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
				</div>
				<div class="u-form-group u-label-none">
					<label for="text-2788" class="u-label">Entrada</label>
					<input type="text" placeholder="Teléfono*" id="text-2788" name="text" class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle">
				</div>
				<div class="u-form-group u-form-select u-label-none">
					<label for="select-b86e" class="u-label">Desplegable</label>
					<div class="u-form-select-wrapper">
						<?= $this->Form->input('estado',array('type'=>'select','div'=>false,'options'=>$estados,'class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle'))?>
						<svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
					</div>
				</div>
				<div class="u-form-group u-form-select u-label-none">
					<label for="select-d701" class="u-label">Desplegable</label>
					<div class="u-form-select-wrapper">
						<select id="select-d701" name="select" class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle">
							<option value="Giro" data-calc="">Giro</option>
							<option value="Item 2" data-calc="">Item 2</option>
							<option value="Item 3" data-calc="">Item 3</option>
						</select>
						<svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
					</div>
				</div>
				<div class="u-form-group u-form-select u-label-none">
					<label for="select-23cb" class="u-label">Desplegable</label>
					<div class="u-form-select-wrapper">
						<select id="select-23cb" name="select-1" class="u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle">
							<option value="¿Como te enteraste de nosotros?*" data-calc="">¿Como te enteraste de nosotros?*</option>
							<option value="Item 2" data-calc="">Item 2</option>
							<option value="Item 3" data-calc="">Item 3</option>
						</select>
						<svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
					</div>
				</div>
				<div class="u-align-left u-form-group u-form-submit">
					<a href="#" class="u-black u-border-1 u-border-white u-btn u-btn-submit u-button-style u-hover-black u-text-body-alt-color u-text-hover-white u-btn-1">Quiero ser distribuidor</a>
					<input type="submit" value="submit" class="u-form-control-hidden">
				</div>
				<div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
				<div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
				<input type="hidden" value="" name="recaptchaResponse">
				<input type="hidden" name="formServices" value="790b1496cfdbd7c7f815c7cba4441b38">
				<input type="hidden" name="siteKey" value="6Ld2DqAmAAAAAJQ6zuZOAjfUPOylkki9reU846cU">
			</form>
		</div>
		<h2 class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-custom-font u-text u-text-body-alt-color u-text-5"> Con DENSO ofrecerás a tus clientes garantía, calidad y durabilidad<br>
			<br>
			<span style="font-size: 0.875rem;"> Ser distribuidor DENSO te ayudará a:&nbsp;</span>
			<br>
		</h2>
		<ul class="u-align-left u-text u-text-6">
			<li>Ampliar tu cobertura de productos&nbsp;</li>
			<li>Obtener mayor rentabilidad&nbsp;</li>
			<li>Aumentar la reputación de tu refaccionaria Incrementar la preferencia de tus clientes</li>
		</ul>
	</div>
</section>
<section class="u-clearfix u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-section-4" id="sec-700d">
	<div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
		<h4 class="u-align-left-xs u-text u-text-default u-text-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/Ellipse49.png" alt=""></span>&nbsp;Gama de productos
		</h4>
		<p class="u-align-left-xs u-text u-text-default u-text-2"> Encontrarás productos tanto para automóviles como motocicletas.</p>
		<h4 class="u-align-left-xs u-text u-text-default u-text-3"><span class="u-file-icon u-icon u-icon-2"><img src="images/Ellipse49.png" alt=""></span>&nbsp;​Disponibilidad
		</h4>
		<p class="u-align-left-xs u-text u-text-default u-text-4"> Existencia de artículos para las principales marcas y modelos de automóviles.</p>
		<h4 class="u-align-left-xs u-text u-text-default u-text-5"><span class="u-file-icon u-icon u-icon-3"><img src="images/Ellipse49.png" alt=""></span>&nbsp;​Fácil instalación
		</h4>
		<p class="u-align-left-xs u-text u-text-default u-text-6"> Con la instalación First Time Fit® los técnicos ahorrarán tiempo.</p>
		<h4 class="u-align-left-xs u-text u-text-default u-text-7"><span class="u-file-icon u-icon u-icon-4"><img src="images/Ellipse49.png" alt=""></span>&nbsp;​Equipo original
		</h4>
		<p class="u-align-left-xs u-text u-text-default u-text-8"> Ofrecerás piezas y repuestos de calidad superior cuidadosamente seleccionados.</p>
		<h4 class="u-align-left-xs u-text u-text-default u-text-9"><span class="u-file-icon u-icon u-icon-5"><img src="images/Ellipse49.png" alt=""></span>&nbsp;Asesoría personalizada
		</h4>
		<p class="u-align-left-xs u-text u-text-10"> Ampliamos nuestra gama de productos constantemente, por lo que siempre tendrás asesoría de nuestros representantes.</p>
		<h4 class="u-align-left-xs u-text u-text-default u-text-11"><span class="u-file-icon u-icon u-icon-6"><img src="images/Ellipse49.png" alt=""></span>&nbsp;​Reducción de impacto ambiental
		</h4>
		<p class="u-align-left-xs u-text u-text-12"> Utilizamos tecnologías para mejorar el desempeño del vehículo y reducir el impacto ambiental.</p>
		<p class="u-align-left-xs u-text u-text-custom-color-4 u-text-13"> En cada uno de nuestros productos encontrarás la misma garantía y calidad que manejamos en toda la marca.</p>
		<img class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-contain u-image-default u-image-1" src="images/Group2802.png" alt="" data-image-width="716" data-image-height="289">
		<img class="u-expanded-width-xl u-image u-image-default u-preserve-proportions u-image-2" src="images/image44.png" alt="" data-image-width="689" data-image-height="689">
	</div>
</section>
<section class="u-clearfix u-hidden-lg u-hidden-md u-hidden-xl u-hidden-xxl u-image u-section-5" id="sec-a1f4" data-image-width="390" data-image-height="1961">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h3 class="u-text u-text-1">¿Qué obtendrás al ​​hacerte dist​ribuidor?</h3>
		<ul class="u-text u-text-body-color u-text-2">
			<li> Ser parte del directorio de distribuidores de DENSO&nbsp;</li>
			<li>Descuentos, asesoría y entrenamientos por parte del equipo de ventas&nbsp;</li>
			<li>Visitas de campo (promotoría por parte del staff de DENSO)&nbsp;</li>
			<li>Acceso a programas de marketing (promociones de Buen Fin, regionales, mención en redes y sitio web, artículos promocionales, apoyo en aperturas, etc.)</li>
		</ul>
		<p class="u-align-center u-text u-text-body-alt-color u-text-3"> En 2019 DENSO fue considerada la 2da empresa más grande de refacciones y autopartes a nivel mundial según el “World’s Top 10 Aftermarket Automotive Suppliers” de Market Research Reports.</p>
		<h3 class="u-align-center u-custom-font u-text u-text-body-alt-color u-text-4">GARANTÍA DENSO</h3>
		<p class="u-align-center u-text u-text-body-alt-color u-text-5"> Por más de 65 años, DENSO ha estado innovando en la tecnología automotriz desarrollando nuevos productos, materiales y diseños para equipos originales y venta de refacciones. Incrementamos la seguridad y protección mientras reducimos el impacto ambiental.</p>
	</div>
</section>

