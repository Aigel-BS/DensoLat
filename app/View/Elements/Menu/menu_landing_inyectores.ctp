<style>
	.black {
		background-color: black;
	}
</style>
<nav class="u-align-right u-dropdown-icon u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-offcanvas-shift u-menu-1"
	data-responsive-from="MD">
	<div class="menu-collapse u-custom-font"
		style="font-size: 1rem; letter-spacing: 0px; font-family: DENSO-Regular; text-transform: uppercase; font-weight: 700;">
		<a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-color-1 u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-file-icon u-nav-link u-radius-50 u-text-active-palette-1-base u-text-hover-palette-2-base u-file-icon-1"
			href="#">
			<img src="<?= $this->Html->url('/img/Vector1.png') ?>" alt="">
		</a>
	</div>
	<div class="u-custom-menu u-nav-container">
		<ul class="u-custom-font u-nav u-spacing-20 u-unstyled u-nav-1">
			<li class="u-nav-item"><a
					class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
					href="<?= $this->Html->url(array('action' => 'home', 'controller' => 'pages', $region)) ?>"
					style="padding: 32px 20px;">Ir a DENSO LATAM</a>
			</li>
			<li class="u-nav-item"><a
					class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
					href="#tutorial" style="padding: 32px 20px;">Video Tutorial</a>
			</li>
			<li class="u-nav-item"><a
					class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
					href="#catalogo" style="padding: 32px 20px;">Catálogo</a>
			</li>
			<li class="u-nav-item"><a
					class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
					href="#rewards" style="padding: 32px 20px;">DENSO Rewards</a>
			</li>
			<li class="u-nav-item"><a
					class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
					href="#garantias" style="padding: 32px 20px;">Garantías</a>
			</li>

		</ul>
	</div>
	<div class="u-custom-menu u-nav-container-collapse">
		<div class="u-border-1 u-border-grey-75 u-container-style u-custom-color-1 u-inner-container-layout u-sidenav">
			<div class="u-inner-container-layout u-sidenav-overflow">
				<div class="u-menu-close u-menu-close-1"></div>
				<ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-unstyled u-nav-3">
					<li class="u-nav-item">
						<a class="u-button-style u-nav-link" href="#autenticidad">AUTENTICIDAD</a>
					</li>
					<li class="u-nav-item">
						<a class="u-button-style u-nav-link" href="#comprar">Dónde Comprar</a>
					</li>
					<li class="u-nav-item"><a class="u-button-style u-nav-link" href="#conoce">Conoce los Inyectores
							DENSO</a>
					</li>
					<li class="u-nav-item"><a class="u-button-style u-nav-link" href="#instalacion">Guía de
							Instalación</a>
					</li>
					<li class="u-nav-item"><a class="u-button-style u-nav-link"
							href="<?= $this->Html->url(array('action' => 'home', 'controller' => 'pages', $region)) ?>">Regresar
							a sitio DENSO LATAM</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
	</div>
</nav>