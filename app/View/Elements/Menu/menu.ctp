<style>
	.black {
		background-color: black;
	}
</style>
<?php switch($region){
    case('latam'): //Menú LATAM Genérico?>
		<nav class="u-align-right u-dropdown-icon u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-offcanvas-shift u-menu-1"
			 data-responsive-from="MD">
			<div class="menu-collapse u-custom-font"
				 style="font-size: 1rem; letter-spacing: 0px; font-family: DENSO-Regular; text-transform: uppercase; font-weight: 700;">
				<a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-color-1 u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-file-icon u-nav-link u-radius-50 u-text-active-palette-1-base u-text-hover-palette-2-base u-file-icon-1"
				   href="#">
					<img src="<?= $this->Html->url('/img/Vector1.png')?>" alt="">
				</a>
			</div>
			<div class="u-custom-menu u-nav-container">
				<ul class="u-custom-font u-nav u-spacing-20 u-unstyled u-nav-1">
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="#" style="padding: 32px 20px;">Productos</a>
						<div class="u-nav-popup">
							<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-2">
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','latam'))?>">Bujías</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','latam'))?>">Filtros</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','latam'))?>">Compresores</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','latam'))?>">Sensores</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','latam'))?>" style="padding: 32px 20px;">Nosotros</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','latam'))?>" style="padding: 32px 20px;">Dónde Comprar</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','latam'))?>" style="padding: 32px 20px;">Entrenamientos</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','latam'))?>" style="padding: 32px 20px;">Contacto</a>
					</li>
				</ul>
			</div>
			<div class="u-custom-menu u-nav-container-collapse">
				<div class="u-border-1 u-border-grey-75 u-container-style u-custom-color-1 u-inner-container-layout u-sidenav">
					<div class="u-inner-container-layout u-sidenav-overflow">
						<div class="u-menu-close u-menu-close-1"></div>
						<ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-unstyled u-nav-3">
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Productos</a>
								<div class="u-nav-popup">
									<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-4">
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','latam'))?>">Bujías</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','latam'))?>">Filtros</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','latam'))?>">Compresores</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','latam'))?>">Sensores</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'catalogos','controller'=>'pages','latam'))?>">Catálogos</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','latam'))?>">Nosotros</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','latam'))?>">Dónde
									Comprar</a>
							</li>
							<li class="u-nav-item"><a
										class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
										href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos'))?>" style="padding: 32px 20px;">Entrenamientos</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','latam'))?>">Contacto</a>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','latam'))?>">Contacto</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','latam'))?>">Buscar
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','latam'))?>">Buscar
									Pieza</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
			</div>
		</nav>
    <?php break; ?>

    <?php
	case('mx'): //Menú México?>
		<nav class="u-align-right u-dropdown-icon u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-offcanvas-shift u-menu-1"
			 data-responsive-from="MD">
			<div class="menu-collapse u-custom-font"
				 style="font-size: 1rem; letter-spacing: 0px; font-family: DENSO-Regular; text-transform: uppercase; font-weight: 700;">
				<a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-color-1 u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-file-icon u-nav-link u-radius-50 u-text-active-palette-1-base u-text-hover-palette-2-base u-file-icon-1"
				   href="#">
					<img src="<?= $this->Html->url('/img/Vector1.png')?>" alt="">
				</a>
			</div>
			<div class="u-custom-menu u-nav-container">
				<ul class="u-custom-font u-nav u-spacing-20 u-unstyled u-nav-1">
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="#" style="padding: 32px 20px;">Productos</a>
						<div class="u-nav-popup">
							<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-2">
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','mx'))?>">Bujías</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','mx'))?>">Filtros</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','mx'))?>">Compresores</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','mx'))?>">Sensores</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'catalogos','controller'=>'pages','mx'))?>" style="padding: 32px 20px;">Catálogos</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','mx'))?>" style="padding: 32px 20px;">Nosotros</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','mx'))?>" style="padding: 32px 20px;">Dónde Comprar</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','mx'))?>" style="padding: 32px 20px;">Entrenamientos</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','mx'))?>" style="padding: 32px 20px;">Contacto</a>
					</li>
					<li class="u-nav-item black"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','mx'))?>" style="padding: 32px 20px;">Buscar Pieza</a>
					</li>
				</ul>
			</div>
			<div class="u-custom-menu u-nav-container-collapse">
				<div class="u-border-1 u-border-grey-75 u-container-style u-custom-color-1 u-inner-container-layout u-sidenav">
					<div class="u-inner-container-layout u-sidenav-overflow">
						<div class="u-menu-close u-menu-close-1"></div>
						<ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-unstyled u-nav-3">
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Productos</a>
								<div class="u-nav-popup">
									<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-4">
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','mx'))?>">Bujías</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','mx'))?>">Filtros</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','mx'))?>">Compresores</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','mx'))?>">Sensores</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'catalogos','controller'=>'pages','mx'))?>">Catálogos</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','mx'))?>">Nosotros</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','mx'))?>">Dónde
									Comprar</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','mx'))?>">Entrenamientos</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','mx'))?>">Contacto</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','mx'))?>">Buscar
									Pieza</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
			</div>
		</nav>

    <?php break; ?>

    <?php
	case('co'): //Menú Colombia?>
		<nav class="u-align-right u-dropdown-icon u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-offcanvas-shift u-menu-1"
			 data-responsive-from="MD">
			<div class="menu-collapse u-custom-font"
				 style="font-size: 1rem; letter-spacing: 0px; font-family: DENSO-Regular; text-transform: uppercase; font-weight: 700;">
				<a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-color-1 u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-file-icon u-nav-link u-radius-50 u-text-active-palette-1-base u-text-hover-palette-2-base u-file-icon-1"
				   href="#">
					<img src="<?= $this->Html->url('/img/Vector1.png')?>" alt="">
				</a>
			</div>
			<div class="u-custom-menu u-nav-container">
				<ul class="u-custom-font u-nav u-spacing-20 u-unstyled u-nav-1">
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="#" style="padding: 32px 20px;">Productos</a>
						<div class="u-nav-popup">
							<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-2">
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','co'))?>">Bujías</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','co'))?>">Filtros</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','co'))?>">Compresores</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','co'))?>">Sensores</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'catalogos','controller'=>'pages','co'))?>" style="padding: 32px 20px;">Catálogos</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','co'))?>" style="padding: 32px 20px;">Nosotros</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','co'))?>" style="padding: 32px 20px;">Dónde Comprar</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','co'))?>" style="padding: 32px 20px;">Entrenamientos</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','co'))?>" style="padding: 32px 20px;">Contacto</a>
					</li>
					<li class="u-nav-item black"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','co'))?>" style="padding: 32px 20px;">Buscar Pieza</a>
					</li>
				</ul>
			</div>
			<div class="u-custom-menu u-nav-container-collapse">
				<div class="u-border-1 u-border-grey-75 u-container-style u-custom-color-1 u-inner-container-layout u-sidenav">
					<div class="u-inner-container-layout u-sidenav-overflow">
						<div class="u-menu-close u-menu-close-1"></div>
						<ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-unstyled u-nav-3">
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Productos</a>
								<div class="u-nav-popup">
									<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-4">
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','co'))?>">Bujías</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','co'))?>">Filtros</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','co'))?>">Compresores</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','co'))?>">Sensores</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'catalogos','controller'=>'pages','co'))?>">Catálogos</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','co'))?>">Nosotros</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','co'))?>">Dónde
									Comprar</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','co'))?>">Entrenamientos</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','co'))?>">Contacto</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','co'))?>">Buscar
									Pieza</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
			</div>
		</nav>

    <?php break; ?>

	<?php
	case('cl'): //Menú Chile?>
		<nav class="u-align-right u-dropdown-icon u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-offcanvas-shift u-menu-1"
			 data-responsive-from="MD">
			<div class="menu-collapse u-custom-font"
				 style="font-size: 1rem; letter-spacing: 0px; font-family: DENSO-Regular; text-transform: uppercase; font-weight: 700;">
				<a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-color-1 u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-file-icon u-nav-link u-radius-50 u-text-active-palette-1-base u-text-hover-palette-2-base u-file-icon-1"
				   href="#">
					<img src="<?= $this->Html->url('/img/Vector1.png')?>" alt="">
				</a>
			</div>
			<div class="u-custom-menu u-nav-container">
				<ul class="u-custom-font u-nav u-spacing-20 u-unstyled u-nav-1">
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="#" style="padding: 32px 20px;">Productos</a>
						<div class="u-nav-popup">
							<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-2">
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','cl'))?>">Bujías</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','cl'))?>">Filtros</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','cl'))?>">Compresores</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','cl'))?>">Sensores</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'catalogos','controller'=>'pages','cl'))?>" style="padding: 32px 20px;">Catálogos</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','cl'))?>" style="padding: 32px 20px;">Nosotros</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','cl'))?>" style="padding: 32px 20px;">Dónde Comprar</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','cl'))?>" style="padding: 32px 20px;">Entrenamientos</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','cl'))?>" style="padding: 32px 20px;">Contacto</a>
					</li>
					<li class="u-nav-item black"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','cl'))?>" style="padding: 32px 20px;">Buscar Pieza</a>
					</li>
				</ul>
			</div>
			<div class="u-custom-menu u-nav-container-collapse">
				<div class="u-border-1 u-border-grey-75 u-container-style u-custom-color-1 u-inner-container-layout u-sidenav">
					<div class="u-inner-container-layout u-sidenav-overflow">
						<div class="u-menu-close u-menu-close-1"></div>
						<ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-unstyled u-nav-3">
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Productos</a>
								<div class="u-nav-popup">
									<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-4">
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','cl'))?>">Bujías</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','cl'))?>">Filtros</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','cl'))?>">Compresores</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','cl'))?>">Sensores</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'catalogos','controller'=>'pages','cl'))?>">Catálogos</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','cl'))?>">Nosotros</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','cl'))?>">Dónde
									Comprar</a>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','cl'))?>">Entrenamientos</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','cl'))?>">Contacto</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','cl'))?>">Buscar
									Pieza</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
			</div>
		</nav>

		<?php break; ?>

<?php
	case('ec'): //Menú Ecuador?>
		<nav class="u-align-right u-dropdown-icon u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-offcanvas-shift u-menu-1"
			 data-responsive-from="MD">
			<div class="menu-collapse u-custom-font"
				 style="font-size: 1rem; letter-spacing: 0px; font-family: DENSO-Regular; text-transform: uppercase; font-weight: 700;">
				<a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-color-1 u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-file-icon u-nav-link u-radius-50 u-text-active-palette-1-base u-text-hover-palette-2-base u-file-icon-1"
				   href="#">
					<img src="<?= $this->Html->url('/img/Vector1.png')?>" alt="">
				</a>
			</div>
			<div class="u-custom-menu u-nav-container">
				<ul class="u-custom-font u-nav u-spacing-20 u-unstyled u-nav-1">
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="#" style="padding: 32px 20px;">Productos</a>
						<div class="u-nav-popup">
							<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-2">
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','ec'))?>">Bujías</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','ec'))?>">Filtros</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','ec'))?>">Compresores</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','ec'))?>">Sensores</a>
								</li>
							</ul>
						</div>
					</li>
                    <li class="u-nav-item"><a
                                class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
                                href="<?= $this->Html->url(array('action'=>'catalogos','controller'=>'pages','ec'))?>" style="padding: 32px 20px;">Catálogos</a>
                    </li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','ec'))?>" style="padding: 32px 20px;">Nosotros</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','ec'))?>" style="padding: 32px 20px;">Dónde Comprar</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','ec'))?>" style="padding: 32px 20px;">Entrenamientos</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','ec'))?>" style="padding: 32px 20px;">Contacto</a>
					</li>
					<li class="u-nav-item black"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','ec'))?>" style="padding: 32px 20px;">Buscar Pieza</a>
					</li>
				</ul>
			</div>
			<div class="u-custom-menu u-nav-container-collapse">
				<div class="u-border-1 u-border-grey-75 u-container-style u-custom-color-1 u-inner-container-layout u-sidenav">
					<div class="u-inner-container-layout u-sidenav-overflow">
						<div class="u-menu-close u-menu-close-1"></div>
						<ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-unstyled u-nav-3">
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Productos</a>
								<div class="u-nav-popup">
									<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-4">
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','ec'))?>">Bujías</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','ec'))?>">Filtros</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','ec'))?>">Compresores</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','ec'))?>">Sensores</a>
										</li>
									</ul>
								</div>
							</li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'catalogos','controller'=>'pages','ec'))?>">Catálogos</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','ec'))?>">Nosotros</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','ec'))?>">Dónde
									Comprar</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','ec'))?>">Entrenamientos</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','ec'))?>">Contacto</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','ec'))?>">Buscar
									Pieza</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
			</div>
		</nav>
		<?php break; ?>

	<?php
	case('pe'): //Menú Perú?>
		<nav class="u-align-right u-dropdown-icon u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-offcanvas-shift u-menu-1"
			 data-responsive-from="MD">
			<div class="menu-collapse u-custom-font"
				 style="font-size: 1rem; letter-spacing: 0px; font-family: DENSO-Regular; text-transform: uppercase; font-weight: 700;">
				<a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-color-1 u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-file-icon u-nav-link u-radius-50 u-text-active-palette-1-base u-text-hover-palette-2-base u-file-icon-1"
				   href="#">
					<img src="<?= $this->Html->url('/img/Vector1.png')?>" alt="">
				</a>
			</div>
			<div class="u-custom-menu u-nav-container">
				<ul class="u-custom-font u-nav u-spacing-20 u-unstyled u-nav-1">
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="#" style="padding: 32px 20px;">Productos</a>
						<div class="u-nav-popup">
							<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-2">
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','pe'))?>">Bujías</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','pe'))?>">Filtros</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','pe'))?>">Compresores</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','pe'))?>">Sensores</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'catalogos','controller'=>'pages','pe'))?>" style="padding: 32px 20px;">Catálogos</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','pe'))?>" style="padding: 32px 20px;">Nosotros</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','pe'))?>" style="padding: 32px 20px;">Dónde Comprar</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','pe'))?>" style="padding: 32px 20px;">Entrenamientos</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','pe'))?>" style="padding: 32px 20px;">Contacto</a>
					</li>
					<li class="u-nav-item black"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','pe'))?>" style="padding: 32px 20px;">Buscar Pieza</a>
					</li>
				</ul>
			</div>
			<div class="u-custom-menu u-nav-container-collapse">
				<div class="u-border-1 u-border-grey-75 u-container-style u-custom-color-1 u-inner-container-layout u-sidenav">
					<div class="u-inner-container-layout u-sidenav-overflow">
						<div class="u-menu-close u-menu-close-1"></div>
						<ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-unstyled u-nav-3">
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Productos</a>
								<div class="u-nav-popup">
									<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-4">
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','pe'))?>">Bujías</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','pe'))?>">Filtros</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','pe'))?>">Compresores</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','pe'))?>">Sensores</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'catalogos','controller'=>'pages','pe'))?>">Catálogos</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','pe'))?>">Nosotros</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','pe'))?>">Dónde
									Comprar</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','pe'))?>">Entrenamientos</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','pe'))?>">Contacto</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','pe'))?>">Buscar
									Pieza</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
			</div>
		</nav>

		<?php break; ?>

	<?php
	case('car'): //Menú Caribe?>
		<nav class="u-align-right u-dropdown-icon u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-offcanvas-shift u-menu-1"
			 data-responsive-from="MD">
			<div class="menu-collapse u-custom-font"
				 style="font-size: 1rem; letter-spacing: 0px; font-family: DENSO-Regular; text-transform: uppercase; font-weight: 700;">
				<a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-color-1 u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-file-icon u-nav-link u-radius-50 u-text-active-palette-1-base u-text-hover-palette-2-base u-file-icon-1"
				   href="#">
					<img src="<?= $this->Html->url('/img/Vector1.png')?>" alt="">
				</a>
			</div>
			<div class="u-custom-menu u-nav-container">
				<ul class="u-custom-font u-nav u-spacing-20 u-unstyled u-nav-1">
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="#" style="padding: 32px 20px;">Productos</a>
						<div class="u-nav-popup">
							<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-2">
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','car'))?>">Bujías</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','car'))?>">Filtros</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','car'))?>">Compresores</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','car'))?>">Sensores</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','car'))?>" style="padding: 32px 20px;">Nosotros</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','car'))?>" style="padding: 32px 20px;">Dónde Comprar</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','car'))?>" style="padding: 32px 20px;">Entrenamientos</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','car'))?>" style="padding: 32px 20px;">Contacto</a>
					</li>
					<li class="u-nav-item black"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','car'))?>" style="padding: 32px 20px;">Buscar Pieza</a>
					</li>
				</ul>
			</div>
			<div class="u-custom-menu u-nav-container-collapse">
				<div class="u-border-1 u-border-grey-75 u-container-style u-custom-color-1 u-inner-container-layout u-sidenav">
					<div class="u-inner-container-layout u-sidenav-overflow">
						<div class="u-menu-close u-menu-close-1"></div>
						<ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-unstyled u-nav-3">
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Productos</a>
								<div class="u-nav-popup">
									<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-4">
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','car'))?>">Bujías</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','car'))?>">Filtros</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','car'))?>">Compresores</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','car'))?>">Sensores</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','car'))?>">Nosotros</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','car'))?>">Dónde
									Comprar</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','car'))?>">Entrenamientos</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','car'))?>">Contacto</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','car'))?>">Buscar
									Pieza</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
			</div>
		</nav>

		<?php break; ?>

	<?php
	case('cam'): //Menú Centroamérica?>
		<nav class="u-align-right u-dropdown-icon u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-offcanvas-shift u-menu-1"
			 data-responsive-from="MD">
			<div class="menu-collapse u-custom-font"
				 style="font-size: 1rem; letter-spacing: 0px; font-family: DENSO-Regular; text-transform: uppercase; font-weight: 700;">
				<a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-color-1 u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-file-icon u-nav-link u-radius-50 u-text-active-palette-1-base u-text-hover-palette-2-base u-file-icon-1"
				   href="#">
					<img src="<?= $this->Html->url('/img/Vector1.png')?>" alt="">
				</a>
			</div>
			<div class="u-custom-menu u-nav-container">
				<ul class="u-custom-font u-nav u-spacing-20 u-unstyled u-nav-1">
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="#" style="padding: 32px 20px;">Productos</a>
						<div class="u-nav-popup">
							<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-2">
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','cam'))?>">Bujías</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','cam'))?>">Filtros</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','cam'))?>">Compresores</a>
								</li>
								<li class="u-nav-item"><a
											class="u-active-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-text-hover-white u-white"
											href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','cam'))?>">Sensores</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','cam'))?>" style="padding: 32px 20px;">Nosotros</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','cam'))?>" style="padding: 32px 20px;">Dónde Comprar</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','cam'))?>" style="padding: 32px 20px;">Entrenamientos</a>
					</li>
					<li class="u-nav-item"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','cam'))?>" style="padding: 32px 20px;">Contacto</a>
					</li>
					<li class="u-nav-item black"><a
								class="u-active-custom-color-1 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-white u-nav-link u-text-active-white u-text-hover-palette-2-base"
								href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','cam'))?>" style="padding: 32px 20px;">Buscar Pieza</a>
					</li>
				</ul>
			</div>
			<div class="u-custom-menu u-nav-container-collapse">
				<div class="u-border-1 u-border-grey-75 u-container-style u-custom-color-1 u-inner-container-layout u-sidenav">
					<div class="u-inner-container-layout u-sidenav-overflow">
						<div class="u-menu-close u-menu-close-1"></div>
						<ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-unstyled u-nav-3">
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Productos</a>
								<div class="u-nav-popup">
									<ul class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-h-spacing-55 u-nav u-unstyled u-v-spacing-18 u-nav-4">
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'bujias','controller'=>'pages','cam'))?>">Bujías</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'filtros','controller'=>'pages','cam'))?>">Filtros</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'compresores','controller'=>'pages','cam'))?>">Compresores</a>
										</li>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'sensores_oxigeno','controller'=>'pages','cam'))?>">Sensores</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'denso','controller'=>'pages','cam'))?>">Nosotros</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'donde_comprar','controller'=>'distribuidors','cam'))?>">Dónde
									Comprar</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'mis_cursos','controller'=>'cursos','cam'))?>">Entrenamientos</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'contacto','controller'=>'pages','cam'))?>">Contacto</a>
							</li>
							<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?= $this->Html->url(array('action'=>'buscar','controller'=>'productos','cam'))?>">Buscar
									Pieza</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
			</div>
		</nav>

		<?php break; ?>

	<?php
}?>

