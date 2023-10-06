<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	//TEMPORAL----SE FORZA LA ENTRADA A COLOMBIA

	//Router::connect('/', array('controller' => 'pages', 'action' => 'home','co'));


	//Routing LATAM
	Router::connect('/', array('controller' => 'pages', 'action' => 'home','latam'));
	Router::connect('recargate-con-denso', array('controller' => 'promosTas', 'action' => 'showLanding'));
	Router::connect('/gracias-por-participar', array('controller' => 'promosTas', 'action' => 'thankyou'));
	Router::connect('/tiempo-de-autopartes', array('controller' => 'pages', 'action' => 'imagen_tv'));
	Router::connect('/catalogos-digitales-mexico', array('controller' => 'pages', 'action' => 'catalogos','latam'));
	Router::connect('/quienes-somos', array('controller' => 'pages', 'action' => 'denso','latam'));
	Router::connect('/terminos-y-condiciones', array('controller' => 'pages', 'action' => 'terminos'));
	Router::connect('/aviso-de-privacidad', array('controller' => 'pages', 'action' => 'privacidad'));
	Router::connect('/conviertete-en-distribuidor', array('controller' => 'pages', 'action' => 'landing'));
	Router::connect('/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno','latam'));
	Router::connect('/bujias', array('controller' => 'pages', 'action' => 'bujias','latam'));
	Router::connect('/filtros', array('controller' => 'pages', 'action' => 'filtros','latam'));
	Router::connect('/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores','latam'));
	Router::connect('/aprende-con-denso', array('controller' => 'pages', 'action' => 'videos','latam'));
	Router::connect('/contacto', array('controller' => 'pages', 'action' => 'contacto','latam'));
	Router::connect('/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_pais'));

	//Routing México
	Router::connect('/mx', array('controller' => 'pages', 'action' => 'home','mx'));
	Router::connect('/mx/recargate-con-denso', array('controller' => 'promosTas', 'action' => 'showLanding','mx'));
	Router::connect('/mx/gracias-por-participar', array('controller' => 'promosTas', 'action' => 'thankyou','mx'));
	Router::connect('/mx/tiempo-de-autopartes', array('controller' => 'pages', 'action' => 'imagen_tv','mx'));
	Router::connect('/mx/catalogos-digitales-mexico', array('controller' => 'pages', 'action' => 'catalogos','mx'));
	Router::connect('/mx/quienes-somos', array('controller' => 'pages', 'action' => 'denso','mx'));
	Router::connect('/mx/terminos-y-condiciones', array('controller' => 'pages', 'action' => 'terminos','mx'));
	Router::connect('/mx/aviso-de-privacidad', array('controller' => 'pages', 'action' => 'privacidad','mx'));
	Router::connect('/mx/conviertete-en-distribuidor', array('controller' => 'pages', 'action' => 'landing','mx'));
	Router::connect('/mx/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno','mx'));
	Router::connect('/mx/bujias', array('controller' => 'pages', 'action' => 'bujias','mx'));
	Router::connect('/mx/filtros', array('controller' => 'pages', 'action' => 'filtros','mx'));
	Router::connect('/mx/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores','mx'));
	Router::connect('/mx/aprende-con-denso', array('controller' => 'pages', 'action' => 'videos','mx'));
	Router::connect('/mx/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar','mx'));
	Router::connect('/mx/resultados_busqueda', array('controller' => 'productos', 'action' => 'buscar_avanzado','mx'));
	Router::connect('/mx/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado','mx'));
	Router::connect('/mx/blogs', array('controller' => 'blogs', 'action' => 'index','mx'));
	Router::connect('/mx/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar','mx'));
	Router::connect('/mx/terminos-y-condiciones-promocion-fan-sultanes', array('controller' => 'pages', 'action' => 'tyc_sultanes','mx'));
	Router::connect('/mx/contacto', array('controller' => 'pages', 'action' => 'contacto','mx'));

	//Routing Colombia
	Router::connect('/co', array('controller' => 'pages', 'action' => 'home','co'));
	Router::connect('/co/recargate-con-denso', array('controller' => 'promosTas', 'action' => 'showLanding','co'));
	Router::connect('/co/gracias-por-participar', array('controller' => 'promosTas', 'action' => 'thankyou','co'));
	Router::connect('/co/tiempo-de-autopartes', array('controller' => 'pages', 'action' => 'imagen_tv','co'));
	Router::connect('/co/catalogos-digitales-colombia', array('controller' => 'pages', 'action' => 'catalogos','co'));
	Router::connect('/co/quienes-somos', array('controller' => 'pages', 'action' => 'denso','co'));
	Router::connect('/co/terminos-y-condiciones', array('controller' => 'pages', 'action' => 'terminos','co'));
	Router::connect('/co/aviso-de-privacidad', array('controller' => 'pages', 'action' => 'privacidad','co'));
	Router::connect('/co/conviertete-en-distribuidor', array('controller' => 'pages', 'action' => 'landing','co'));
	Router::connect('/co/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno','co'));
	Router::connect('/co/bujias', array('controller' => 'pages', 'action' => 'bujias','co'));
	Router::connect('/co/filtros', array('controller' => 'pages', 'action' => 'filtros','co'));
	Router::connect('/co/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores','co'));
	Router::connect('/co/aprende-con-denso', array('controller' => 'pages', 'action' => 'videos','co'));
	Router::connect('/co/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado','co'));
	Router::connect('/co/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar','co'));
	Router::connect('/co/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar','co'));
	Router::connect('/co/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado','co'));
	Router::connect('/co/contacto', array('controller' => 'pages', 'action' => 'contacto','co'));
	Router::connect('/co/tiendas-certificadas', array('controller' => 'distribuidores_certificados', 'action' => 'index','co'));
	Router::connect('/co/distribuidores_certificados/*', array('controller' => 'distribuidores_certificados', 'action' => 'view','co'));
	Router::connect('/co/mapa_tiendas_certificadas', array('controller' => 'distribuidores_certificados', 'action' => 'map','co'));

	//Routing Chile
	Router::connect('/cl', array('controller' => 'pages', 'action' => 'home','cl'));
	Router::connect('/cl/recargate-con-denso', array('controller' => 'promosTas', 'action' => 'showLanding','cl'));
	Router::connect('/cl/gracias-por-participar', array('controller' => 'promosTas', 'action' => 'thankyou','cl'));
	Router::connect('/cl/tiempo-de-autopartes', array('controller' => 'pages', 'action' => 'imagen_tv','cl'));
	Router::connect('/cl/catalogos-digitales-chile', array('controller' => 'pages', 'action' => 'catalogos','cl'));
	Router::connect('/cl/quienes-somos', array('controller' => 'pages', 'action' => 'denso','cl'));
	Router::connect('/cl/terminos-y-condiciones', array('controller' => 'pages', 'action' => 'terminos','cl'));
	Router::connect('/cl/aviso-de-privacidad', array('controller' => 'pages', 'action' => 'privacidad','cl'));
	Router::connect('/cl/conviertete-en-distribuidor', array('controller' => 'pages', 'action' => 'landing','cl'));
	Router::connect('/cl/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno','cl'));
	Router::connect('/cl/bujias', array('controller' => 'pages', 'action' => 'bujias','cl'));
	Router::connect('/cl/filtros', array('controller' => 'pages', 'action' => 'filtros','cl'));
	Router::connect('/cl/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores','cl'));
	Router::connect('/cl/aprende-con-denso', array('controller' => 'pages', 'action' => 'videos','cl'));
	Router::connect('/cl/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado','cl'));
	Router::connect('/cl/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar','cl'));
	Router::connect('/cl/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar','cl'));
	Router::connect('/cl/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado','cl'));
	Router::connect('/cl/contacto', array('controller' => 'pages', 'action' => 'contacto','cl'));

	//Routing Ecuador
	Router::connect('/ec', array('controller' => 'pages', 'action' => 'home','ec'));
	Router::connect('/ec/recargate-con-denso', array('controller' => 'promosTas', 'action' => 'showLanding','ec'));
	Router::connect('/ec/gracias-por-participar', array('controller' => 'promosTas', 'action' => 'thankyou','ec'));
	Router::connect('/ec/tiempo-de-autopartes', array('controller' => 'pages', 'action' => 'imagen_tv','ec'));
	Router::connect('/ec/catalogos-digitales-ecuador', array('controller' => 'pages', 'action' => 'catalogos','ec'));
	Router::connect('/ec/quienes-somos', array('controller' => 'pages', 'action' => 'denso','ec'));
	Router::connect('/ec/terminos-y-condiciones', array('controller' => 'pages', 'action' => 'terminos','ec'));
	Router::connect('/ec/aviso-de-privacidad', array('controller' => 'pages', 'action' => 'privacidad','ec'));
	Router::connect('/ec/conviertete-en-distribuidor', array('controller' => 'pages', 'action' => 'landing','ec'));
	Router::connect('/ec/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno','ec'));
	Router::connect('/ec/bujias', array('controller' => 'pages', 'action' => 'bujias','ec'));
	Router::connect('/ec/filtros', array('controller' => 'pages', 'action' => 'filtros','ec'));
	Router::connect('/ec/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores','ec'));
	Router::connect('/ec/aprende-con-denso', array('controller' => 'pages', 'action' => 'videos','ec'));
	Router::connect('/ec/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado','ec'));
	Router::connect('/ec/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar','ec'));
	Router::connect('/ec/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar','ec'));
	Router::connect('/ec/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado','ec'));
	Router::connect('/ec/contacto', array('controller' => 'pages', 'action' => 'contacto','ec'));

	//Routing Perú
	Router::connect('/pe', array('controller' => 'pages', 'action' => 'home','pe'));
	Router::connect('/pe/catalogos-digitales-peru', array('controller' => 'pages', 'action' => 'catalogos','pe'));
	Router::connect('/pe/quienes-somos', array('controller' => 'pages', 'action' => 'denso','pe'));
	Router::connect('/pe/conviertete-en-distribuidor', array('controller' => 'pages', 'action' => 'landing','pe'));
	Router::connect('/pe/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno','pe'));
	Router::connect('/pe/bujias', array('controller' => 'pages', 'action' => 'bujias','pe'));
	Router::connect('/pe/filtros', array('controller' => 'pages', 'action' => 'filtros','pe'));
	Router::connect('/pe/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores','pe'));
	Router::connect('/pe/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado','pe'));
	Router::connect('/pe/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar','pe'));
	Router::connect('/pe/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar','pe'));
	Router::connect('/pe/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado','pe'));
	Router::connect('/pe/contacto', array('controller' => 'pages', 'action' => 'contacto','pe'));

	//Routing Caribe
	Router::connect('/car', array('controller' => 'pages', 'action' => 'home','car'));
	Router::connect('/car/catalogos-digitales-peru', array('controller' => 'pages', 'action' => 'catalogos','car'));
	Router::connect('/car/quienes-somos', array('controller' => 'pages', 'action' => 'denso','car'));
	Router::connect('/car/conviertete-en-distribuidor', array('controller' => 'pages', 'action' => 'landing','car'));
	Router::connect('/car/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno','car'));
	Router::connect('/car/bujias', array('controller' => 'pages', 'action' => 'bujias','car'));
	Router::connect('/car/filtros', array('controller' => 'pages', 'action' => 'filtros','car'));
	Router::connect('/car/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores','car'));
	Router::connect('/car/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado','car'));
	Router::connect('/car/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar','car'));
	Router::connect('/car/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar','car'));
	Router::connect('/car/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado','car'));
	Router::connect('/car/contacto', array('controller' => 'pages', 'action' => 'contacto','car'));

	//Routing Centroamerica
	Router::connect('/cam', array('controller' => 'pages', 'action' => 'home','cam'));
	Router::connect('/cam/catalogos-digitales-peru', array('controller' => 'pages', 'action' => 'catalogos','cam'));
	Router::connect('/cam/quienes-somos', array('controller' => 'pages', 'action' => 'denso','cam'));
	Router::connect('/cam/conviertete-en-distribuidor', array('controller' => 'pages', 'action' => 'landing','cam'));
	Router::connect('/cam/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno','cam'));
	Router::connect('/cam/bujias', array('controller' => 'pages', 'action' => 'bujias','cam'));
	Router::connect('/cam/filtros', array('controller' => 'pages', 'action' => 'filtros','cam'));
	Router::connect('/cam/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores','cam'));
	Router::connect('/cam/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado','cam'));
	Router::connect('/cam/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar','cam'));
	Router::connect('/cam/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar','cam'));
	Router::connect('/cam/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado','cam'));
	Router::connect('/cam/contacto', array('controller' => 'pages', 'action' => 'contacto','cam'));

/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));


/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
