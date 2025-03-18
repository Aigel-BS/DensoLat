<?php
echo $this->Html->css(
		array(
			'Resultados',
		),
		array('inline'=>false)
);
?>
<section class="u-border-1 u-border-grey-75 u-clearfix u-section-1" id="sec-f269">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h1 class="u-custom-font u-text u-text-default u-text-1">Resultados de búsqueda</h1>

		<?php foreach ($productos as $producto):?>
		<div class="border-shadow u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
			<div class="u-layout">
				<div class="u-layout-row">
					<div style="background-image: url(<?= $producto['Producto']['imagen']?>)" class="u-container-align-center u-container-style u-image u-image-contain u-layout-cell u-size-20 u-image-1" data-image-width="349" data-image-height="215">
						<div class="u-container-layout u-container-layout-1"></div>
					</div>
					<div class="u-container-style u-layout-cell u-size-20 u-layout-cell-2">
						<div class="u-container-layout u-container-layout-2">
							<p class="u-large-text u-text u-text-variant u-text-2">
								<span style="font-weight: 700; font-style: italic;">Número de pieza:</span>
								<span style="font-weight: 700;"> <?= $producto['Producto']['numero_parte']?></span>
								<br>
                                <span style="font-weight: 700; font-style: italic;">Stock:</span>
                                <span style="font-weight: 700;"> <?= $producto['Producto']['numero_corto']?></span>
                                <br>
								<span style="font-weight: 700;">MOTOR:</span> <?= $producto['Producto']['motor']?><br>
								<span style="font-weight: 700;">OEM:</span> <?= $producto['Producto']['oem']?><br>
								<span style="font-weight: 700;">NOTAS: </span><?= $producto['Producto']['notas']?>
							</p>
						</div>
					</div>
					<div class="u-align-right u-container-align-left-xs u-container-style u-layout-cell u-size-20 u-layout-cell-3">
						<div class="u-container-layout u-container-layout-3">
							<h4 class="u-align-left-xs u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xl u-align-right-xxl u-custom-font u-text u-text-default u-text-3"><?= $producto['Producto']['marca']." ".$producto['Producto']['modelo']." ".$producto['Producto']['motor']." ".$producto['Producto']['anio_inicio']."-".$producto['Producto']['anio_final']?></h4>
							<h4 class="u-align-left-xs u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xl u-align-right-xxl u-custom-font u-text u-text-default u-text-4"><?= $producto['Producto']['categoria']?></h4>
							<a href="#sec-823b" class="u-align-left-xs u-black u-border-2 u-border-black u-btn u-button-style u-dialog-link u-hover-black u-text-hover-white u-btn-1">DONDE COMPRAR</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</section>

<section class="u-align-center u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-dialog-section-4" id="sec-823b">
	<div class="u-align-center u-container-style u-dialog u-white u-dialog-1">
		<div class="u-container-layout u-valign-top-xs u-container-layout-1">
			<div class="u-align-center u-container-style u-custom-color-5 u-expanded-width u-group u-shape-rectangle u-group-1">
				<div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
					<p class="u-text u-text-default u-text-1"> Seleccione el estado donde está buscando para encontrar el distribuidor más cercano.</p>
				</div>
			</div>
			<div class="u-form u-form-1">
				<?= $this->Form->create('Producto',array('style'=>'padding:0px','source'=>'custom','redirect'=>'true','url'=>array('action'=>'buscar_distribuidor_producto'),'class'=>'u-clearfix u-form-custom-backend u-form-spacing-28 u-form-vertical u-inner-form'))?>
					<div class="u-form-group u-label-none u-form-group-1">
						<?php echo $this->Form->input('estado', array(
								'options' => $estados,
								'class'=>'u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle',
								'div'=>false,
								'empty' => 'Seleccionar Estado',
								'label'=>'Buscar Distribuidor en Estado',
								'required'=>'required'
						));?>
						<?= $this->Form->hidden('producto_id')?>
						<?= $this->Form->hidden('region',array('value'=>$region))?>
					</div>
					<div class="u-align-center u-form-group u-form-submit u-label-none u-form-group-2">
						<a href="#" class="u-black u-btn u-btn-submit u-button-style u-btn-1">BUSCAR DISTRIBUIDOR</a>
						<input type="submit" value="submit" class="u-form-control-hidden">
					</div>
					<div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
					<div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
					<input type="hidden" value="" name="recaptchaResponse">
				</form>
			</div>
		</div><button class="u-dialog-close-button u-icon u-text-grey-50 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 413.348 413.348" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5801"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 413.348 413.348" id="svg-5801"><path d="m413.348 24.354-24.354-24.354-182.32 182.32-182.32-182.32-24.354 24.354 182.32 182.32-182.32 182.32 24.354 24.354 182.32-182.32 182.32 182.32 24.354-24.354-182.32-182.32z"></path></svg></button>
	</div>
</section><style>.u-dialog-section-4 .u-dialog-1 {
		width: 566px;
		min-height: 337px;
		height: auto;
		margin: 173px auto 60px;
	}

	.u-dialog-section-4 .u-container-layout-1 {
		padding: 0;
	}

	.u-dialog-section-4 .u-group-1 {
		margin-top: 0;
		margin-bottom: 0;
		background-image: none;
		min-height: 63px;
	}

	.u-dialog-section-4 .u-container-layout-2 {
		padding: 30px;
	}

	.u-dialog-section-4 .u-text-1 {
		margin-bottom: 0;
		margin-top: 0;
		font-size: 0.875rem;
	}

	.u-dialog-section-4 .u-form-1 {
		height: 149px;
		width: 506px;
		margin: 33px auto 0;
	}

	.u-dialog-section-4 .u-form-group-1 {
		width: 100%;
	}

	.u-dialog-section-4 .u-label-1 {
		font-size: 1rem;
	}

	.u-dialog-section-4 .u-form-group-2 {
		width: 100%;
	}

	.u-dialog-section-4 .u-btn-1 {
		padding-left: 60px;
		padding-right: 60px;
		background-image: none;
		border-style: none;
		text-transform: none;
		width: 100%;
		font-size: 1rem;
	}

	.u-dialog-section-4 .u-icon-1 {
		width: 15px;
		height: 15px;
		left: auto;
		top: 17px;
		position: absolute;
		right: 16px;
	}

	@media (max-width: 1399px) {
		.u-dialog-section-4 .u-group-1 {
			min-height: 63px;
		}
	}

	@media (max-width: 991px) {
		.u-dialog-section-4 .u-group-1 {
			min-height: 104px;
		}

		.u-dialog-section-4 .u-container-layout-2 {
			padding-top: 19px;
			padding-bottom: 19px;
		}

		.u-dialog-section-4 .u-text-1 {
			width: auto;
			margin-left: 0;
			margin-right: 0;
		}

		.u-dialog-section-4 .u-form-1 {
			margin-top: 39px;
		}
	}

	@media (max-width: 767px) {
		.u-dialog-section-4 .u-dialog-1 {
			width: 540px;
		}

		.u-dialog-section-4 .u-group-1 {
			min-height: 110px;
		}

		.u-dialog-section-4 .u-container-layout-2 {
			padding-left: 10px;
			padding-right: 10px;
		}

		.u-dialog-section-4 .u-text-1 {
			margin-top: 30px;
			font-size: 1rem;
		}
	}

	@media (max-width: 575px) {
		.u-dialog-section-4 .u-dialog-1 {
			width: 340px;
		}

		.u-dialog-section-4 .u-group-1 {
			min-height: 73px;
		}

		.u-dialog-section-4 .u-text-1 {
			font-size: 0.875rem;
			margin-top: 12px;
		}

		.u-dialog-section-4 .u-form-1 {
			width: 340px;
			margin-left: 10px;
			margin-right: 10px;
		}

		.u-dialog-section-4 .u-btn-1 {
			font-size: 0.875rem;
		}
	}</style>
