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
Router::connect('/', array('controller' => 'pages', 'action' => 'home', 'latam'));
Router::connect('recargate-con-denso', array('controller' => 'promosTas', 'action' => 'showLanding'));
Router::connect('/gracias-por-participar', array('controller' => 'promosTas', 'action' => 'thankyou'));
Router::connect('/tiempo-de-autopartes', array('controller' => 'pages', 'action' => 'imagen_tv'));
Router::connect('/catalogos-digitales-latam', array('controller' => 'pages', 'action' => 'catalogos', 'latam'));
Router::connect('/quienes-somos', array('controller' => 'pages', 'action' => 'denso', 'latam'));
Router::connect('/terminos-y-condiciones', array('controller' => 'pages', 'action' => 'terminos'));
Router::connect('/aviso-de-privacidad', array('controller' => 'pages', 'action' => 'privacidad'));
Router::connect('/conviertete-en-distribuidor', array('controller' => 'pages', 'action' => 'landing', 'latam'));
Router::connect('/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno', 'latam'));
Router::connect('/bujias', array('controller' => 'pages', 'action' => 'bujias', 'latam'));
Router::connect('/filtros', array('controller' => 'pages', 'action' => 'filtros', 'latam'));
Router::connect('/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores', 'latam'));
Router::connect('/aprende-con-denso', array('controller' => 'pages', 'action' => 'videos', 'latam'));
Router::connect('/contacto', array('controller' => 'pages', 'action' => 'contacto', 'latam'));
Router::connect('/inyectores', array('controller' => 'pages', 'action' => 'inyectores', 'latam'));
Router::connect('/balatas', array('controller' => 'pages', 'action' => 'balatas', 'latam'));
Router::connect('/limpiaparabrisas', array('controller' => 'pages', 'action' => 'limpiaparabrisas', 'latam'));
Router::connect('/bobinas-encendido', array('controller' => 'pages', 'action' => 'bobinas', 'latam'));
Router::connect('/centros-reparacion', array('controller' => 'distribuidors', 'action' => 'donde_reparar', 'latam'));
Router::connect('/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_pais'));
Router::connect('/producto_autentico', array('controller' => 'pages', 'action' => 'producto_autentico', 'latam'));
Router::connect('/falsificacion_producto', array('controller' => 'pages', 'action' => 'falsificacion_producto', 'latam'));
Router::connect('/producto_autentico_inyector', array('controller' => 'pages', 'action' => 'producto_autentico_inyector', 'latam'));
Router::connect('/producto_autentico_inyector_reparado', array('controller' => 'pages', 'action' => 'producto_autentico_inyector_reparado', 'latam'));
Router::connect('/producto_no_original_inyector', array('controller' => 'pages', 'action' => 'falsificacion_producto_inyector', 'latam'));
Router::connect('/store', array('controller' => 'store', 'action' => 'index', 'latam'));
Router::connect('/store/cart', array('controller' => 'store', 'action' => 'cart', 'latam'));
Router::connect('/store/checkout', array('controller' => 'store', 'action' => 'checkout', 'latam'));
Router::connect('/store/success', array('controller' => 'store', 'action' => 'success', 'latam'));

//Routing México
Router::connect('/mx', array('controller' => 'pages', 'action' => 'home', 'mx'));
Router::connect('/mx/recargate-con-denso', array('controller' => 'promosTas', 'action' => 'showLanding', 'mx'));
Router::connect('/mx/gracias-por-participar', array('controller' => 'promosTas', 'action' => 'thankyou', 'mx'));
Router::connect('/mx/tiempo-de-autopartes', array('controller' => 'pages', 'action' => 'imagen_tv', 'mx'));
Router::connect('/mx/catalogos-digitales-mexico', array('controller' => 'pages', 'action' => 'catalogos', 'mx'));
Router::connect('/mx/quienes-somos', array('controller' => 'pages', 'action' => 'denso', 'mx'));
Router::connect('/mx/terminos-y-condiciones', array('controller' => 'pages', 'action' => 'terminos', 'mx'));
Router::connect('/mx/aviso-de-privacidad', array('controller' => 'pages', 'action' => 'privacidad', 'mx'));
Router::connect('/mx/conviertete-en-distribuidor', array('controller' => 'pages', 'action' => 'landing', 'mx'));
Router::connect('/mx/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno', 'mx'));
Router::connect('/mx/bujias', array('controller' => 'pages', 'action' => 'bujias', 'mx'));
Router::connect('/mx/filtros', array('controller' => 'pages', 'action' => 'filtros', 'mx'));
Router::connect('/mx/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores', 'mx'));
Router::connect('/mx/aprende-con-denso', array('controller' => 'pages', 'action' => 'videos', 'mx'));
Router::connect('/mx/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar', 'mx'));
Router::connect('/mx/resultados_busqueda', array('controller' => 'productos', 'action' => 'buscar_avanzado', 'mx'));
Router::connect('/mx/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado', 'mx'));
Router::connect('/mx/blogs', array('controller' => 'blogs', 'action' => 'index', 'mx'));
Router::connect('/mx/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar', 'mx'));
Router::connect('/mx/terminos-y-condiciones-promocion-fan-sultanes', array('controller' => 'pages', 'action' => 'tyc_sultanes', 'mx'));
Router::connect('/mx/contacto', array('controller' => 'pages', 'action' => 'contacto', 'mx'));
Router::connect('/mx/inyectores', array('controller' => 'pages', 'action' => 'inyectores', 'mx'));
Router::connect('/mx/balatas', array('controller' => 'pages', 'action' => 'balatas', 'mx'));
Router::connect('/mx/bobinas-encendido', array('controller' => 'pages', 'action' => 'bobinas', 'mx'));
Router::connect('/mx/limpiaparabrisas', array('controller' => 'pages', 'action' => 'limpiaparabrisas', 'mx'));
Router::connect('/mx/centros-reparacion', array('controller' => 'distribuidors', 'action' => 'donde_reparar', 'mx'));

//Routing Colombia
Router::connect('/co', array('controller' => 'pages', 'action' => 'home', 'co'));
Router::connect('/co/recargate-con-denso', array('controller' => 'promosTas', 'action' => 'showLanding', 'co'));
Router::connect('/co/gracias-por-participar', array('controller' => 'promosTas', 'action' => 'thankyou', 'co'));
Router::connect('/co/tiempo-de-autopartes', array('controller' => 'pages', 'action' => 'imagen_tv', 'co'));
Router::connect('/co/catalogos-digitales-colombia', array('controller' => 'pages', 'action' => 'catalogos', 'co'));
Router::connect('/co/quienes-somos', array('controller' => 'pages', 'action' => 'denso', 'co'));
Router::connect('/co/terminos-y-condiciones', array('controller' => 'pages', 'action' => 'terminos', 'co'));
Router::connect('/co/aviso-de-privacidad', array('controller' => 'pages', 'action' => 'privacidad', 'co'));
Router::connect('/co/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno', 'co'));
Router::connect('/co/bujias', array('controller' => 'pages', 'action' => 'bujias', 'co'));
Router::connect('/co/filtros', array('controller' => 'pages', 'action' => 'filtros', 'co'));
Router::connect('/co/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores', 'co'));
Router::connect('/co/aprende-con-denso', array('controller' => 'pages', 'action' => 'videos', 'co'));
Router::connect('/co/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado', 'co'));
Router::connect('/co/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar', 'co'));
Router::connect('/co/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar', 'co'));
Router::connect('/co/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado', 'co'));
Router::connect('/co/contacto', array('controller' => 'pages', 'action' => 'contacto', 'co'));
Router::connect('/co/tiendas-certificadas', array('controller' => 'distribuidores_certificados', 'action' => 'index', 'co'));
Router::connect('/co/distribuidores_certificados/*', array('controller' => 'distribuidores_certificados', 'action' => 'view', 'co'));
Router::connect('/co/mapa_tiendas_certificadas', array('controller' => 'distribuidores_certificados', 'action' => 'map', 'co'));
Router::connect('/co/inyectores', array('controller' => 'pages', 'action' => 'inyectores', 'co'));
Router::connect('/co/balatas', array('controller' => 'pages', 'action' => 'balatas', 'co'));
Router::connect('/co/bobinas-encendido', array('controller' => 'pages', 'action' => 'bobinas', 'co'));
Router::connect('/co/limpiaparabrisas', array('controller' => 'pages', 'action' => 'limpiaparabrisas', 'co'));
Router::connect('/co/centros-reparacion', array('controller' => 'distribuidors', 'action' => 'donde_reparar', 'co'));

//Routing Chile
Router::connect('/cl', array('controller' => 'pages', 'action' => 'home', 'cl'));
Router::connect('/cl/recargate-con-denso', array('controller' => 'promosTas', 'action' => 'showLanding', 'cl'));
Router::connect('/cl/gracias-por-participar', array('controller' => 'promosTas', 'action' => 'thankyou', 'cl'));
Router::connect('/cl/tiempo-de-autopartes', array('controller' => 'pages', 'action' => 'imagen_tv', 'cl'));
Router::connect('/cl/catalogos-digitales-chile', array('controller' => 'pages', 'action' => 'catalogos', 'cl'));
Router::connect('/cl/quienes-somos', array('controller' => 'pages', 'action' => 'denso', 'cl'));
Router::connect('/cl/terminos-y-condiciones', array('controller' => 'pages', 'action' => 'terminos', 'cl'));
Router::connect('/cl/aviso-de-privacidad', array('controller' => 'pages', 'action' => 'privacidad', 'cl'));
Router::connect('/cl/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno', 'cl'));
Router::connect('/cl/bujias', array('controller' => 'pages', 'action' => 'bujias', 'cl'));
Router::connect('/cl/filtros', array('controller' => 'pages', 'action' => 'filtros', 'cl'));
Router::connect('/cl/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores', 'cl'));
Router::connect('/cl/aprende-con-denso', array('controller' => 'pages', 'action' => 'videos', 'cl'));
Router::connect('/cl/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado', 'cl'));
Router::connect('/cl/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar', 'cl'));
Router::connect('/cl/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar', 'cl'));
Router::connect('/cl/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado', 'cl'));
Router::connect('/cl/contacto', array('controller' => 'pages', 'action' => 'contacto', 'cl'));
Router::connect('/cl/inyectores', array('controller' => 'pages', 'action' => 'inyectores', 'cl'));
Router::connect('/cl/balatas', array('controller' => 'pages', 'action' => 'balatas', 'cl'));
Router::connect('/cl/bobinas-encendido', array('controller' => 'pages', 'action' => 'bobinas', 'cl'));
Router::connect('/cl/limpiaparabrisas', array('controller' => 'pages', 'action' => 'limpiaparabrisas', 'cl'));
Router::connect('/cl/centros-reparacion', array('controller' => 'distribuidors', 'action' => 'donde_reparar', 'cl'));

//Routing Ecuador
Router::connect('/ec', array('controller' => 'pages', 'action' => 'home', 'ec'));
Router::connect('/ec/recargate-con-denso', array('controller' => 'promosTas', 'action' => 'showLanding', 'ec'));
Router::connect('/ec/gracias-por-participar', array('controller' => 'promosTas', 'action' => 'thankyou', 'ec'));
Router::connect('/ec/tiempo-de-autopartes', array('controller' => 'pages', 'action' => 'imagen_tv', 'ec'));
Router::connect('/ec/catalogos-digitales-ecuador', array('controller' => 'pages', 'action' => 'catalogos', 'ec'));
Router::connect('/ec/quienes-somos', array('controller' => 'pages', 'action' => 'denso', 'ec'));
Router::connect('/ec/terminos-y-condiciones', array('controller' => 'pages', 'action' => 'terminos', 'ec'));
Router::connect('/ec/aviso-de-privacidad', array('controller' => 'pages', 'action' => 'privacidad', 'ec'));
Router::connect('/ec/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno', 'ec'));
Router::connect('/ec/bujias', array('controller' => 'pages', 'action' => 'bujias', 'ec'));
Router::connect('/ec/filtros', array('controller' => 'pages', 'action' => 'filtros', 'ec'));
Router::connect('/ec/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores', 'ec'));
Router::connect('/ec/aprende-con-denso', array('controller' => 'pages', 'action' => 'videos', 'ec'));
Router::connect('/ec/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado', 'ec'));
Router::connect('/ec/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar', 'ec'));
Router::connect('/ec/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar', 'ec'));
Router::connect('/ec/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado', 'ec'));
Router::connect('/ec/contacto', array('controller' => 'pages', 'action' => 'contacto', 'ec'));
Router::connect('/ec/inyectores', array('controller' => 'pages', 'action' => 'inyectores', 'ec'));
Router::connect('/ec/balatas', array('controller' => 'pages', 'action' => 'balatas', 'ec'));
Router::connect('/ec/limpiaparabrisas', array('controller' => 'pages', 'action' => 'limpiaparabrisas', 'ec'));
Router::connect('/ec/bobinas-encendido', array('controller' => 'pages', 'action' => 'bobinas', 'ec'));
Router::connect('/ec/centros-reparacion', array('controller' => 'distribuidors', 'action' => 'donde_reparar', 'ec'));

//Routing Perú
Router::connect('/pe', array('controller' => 'pages', 'action' => 'home', 'pe'));
Router::connect('/pe/catalogos-digitales-peru', array('controller' => 'pages', 'action' => 'catalogos', 'pe'));
Router::connect('/pe/quienes-somos', array('controller' => 'pages', 'action' => 'denso', 'pe'));
Router::connect('/pe/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno', 'pe'));
Router::connect('/pe/bujias', array('controller' => 'pages', 'action' => 'bujias', 'pe'));
Router::connect('/pe/filtros', array('controller' => 'pages', 'action' => 'filtros', 'pe'));
Router::connect('/pe/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores', 'pe'));
Router::connect('/pe/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado', 'pe'));
Router::connect('/pe/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar', 'pe'));
Router::connect('/pe/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar', 'pe'));
Router::connect('/pe/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado', 'pe'));
Router::connect('/pe/contacto', array('controller' => 'pages', 'action' => 'contacto', 'pe'));
Router::connect('/pe/inyectores', array('controller' => 'pages', 'action' => 'inyectores', 'pe'));
Router::connect('/pe/balatas', array('controller' => 'pages', 'action' => 'balatas', 'pe'));
Router::connect('/pe/limpiaparabrisas', array('controller' => 'pages', 'action' => 'limpiaparabrisas', 'pe'));
Router::connect('/pe/bobinas-encendido', array('controller' => 'pages', 'action' => 'bobinas', 'pe'));
Router::connect('/pe/centros-reparacion', array('controller' => 'distribuidors', 'action' => 'donde_reparar', 'pe'));

//Routing Caribe
Router::connect('/car', array('controller' => 'pages', 'action' => 'home', 'car'));
Router::connect('/car/catalogos-digitales-caribe', array('controller' => 'pages', 'action' => 'catalogos', 'car'));
Router::connect('/car/quienes-somos', array('controller' => 'pages', 'action' => 'denso', 'car'));
Router::connect('/car/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno', 'car'));
Router::connect('/car/bujias', array('controller' => 'pages', 'action' => 'bujias', 'car'));
Router::connect('/car/filtros', array('controller' => 'pages', 'action' => 'filtros', 'car'));
Router::connect('/car/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores', 'car'));
Router::connect('/car/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado', 'car'));
Router::connect('/car/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar', 'car'));
Router::connect('/car/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar', 'car'));
Router::connect('/car/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado', 'car'));
Router::connect('/car/contacto', array('controller' => 'pages', 'action' => 'contacto', 'car'));
Router::connect('/car/inyectores', array('controller' => 'pages', 'action' => 'inyectores', 'car'));
Router::connect('/car/balatas', array('controller' => 'pages', 'action' => 'balatas', 'car'));
Router::connect('/car/limpiaparabrisas', array('controller' => 'pages', 'action' => 'limpiaparabrisas', 'car'));
Router::connect('/car/bobinas-encendido', array('controller' => 'pages', 'action' => 'bobinas', 'car'));
Router::connect('/car/centros-reparacion', array('controller' => 'distribuidors', 'action' => 'donde_reparar', 'car'));

//Routing Centroamerica
Router::connect('/cam', array('controller' => 'pages', 'action' => 'home', 'cam'));
Router::connect('/cam/catalogos-digitales-centroamerica', array('controller' => 'pages', 'action' => 'catalogos', 'cam'));
Router::connect('/cam/quienes-somos', array('controller' => 'pages', 'action' => 'denso', 'cam'));
Router::connect('/cam/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno', 'cam'));
Router::connect('/cam/bujias', array('controller' => 'pages', 'action' => 'bujias', 'cam'));
Router::connect('/cam/filtros', array('controller' => 'pages', 'action' => 'filtros', 'cam'));
Router::connect('/cam/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores', 'cam'));
Router::connect('/cam/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado', 'cam'));
Router::connect('/cam/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar', 'cam'));
Router::connect('/cam/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar', 'cam'));
Router::connect('/cam/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado', 'cam'));
Router::connect('/cam/contacto', array('controller' => 'pages', 'action' => 'contacto', 'cam'));
Router::connect('/cam/inyectores', array('controller' => 'pages', 'action' => 'inyectores', 'cam'));
Router::connect('/cam/balatas', array('controller' => 'pages', 'action' => 'balatas', 'cam'));
Router::connect('/cam/limpiaparabrisas', array('controller' => 'pages', 'action' => 'limpiaparabrisas', 'cam'));
Router::connect('/cam/bobinas-encendido', array('controller' => 'pages', 'action' => 'bobinas', 'cam'));
Router::connect('/cam/centros-reparacion', array('controller' => 'distribuidors', 'action' => 'donde_reparar', 'cam'));

//Routing El Salvador
Router::connect('/sv', array('controller' => 'pages', 'action' => 'home', 'sv'));
Router::connect('/sv/catalogos-digitales-el-salvador', array('controller' => 'pages', 'action' => 'catalogos', 'sv'));
Router::connect('/sv/quienes-somos', array('controller' => 'pages', 'action' => 'denso', 'sv'));
Router::connect('/sv/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno', 'sv'));
Router::connect('/sv/bujias', array('controller' => 'pages', 'action' => 'bujias', 'sv'));
Router::connect('/sv/filtros', array('controller' => 'pages', 'action' => 'filtros', 'sv'));
Router::connect('/sv/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores', 'sv'));
Router::connect('/sv/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado', 'sv'));
Router::connect('/sv/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar', 'sv'));
Router::connect('/sv/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar', 'sv'));
Router::connect('/sv/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado', 'sv'));
Router::connect('/sv/contacto', array('controller' => 'pages', 'action' => 'contacto', 'sv'));
Router::connect('/sv/inyectores', array('controller' => 'pages', 'action' => 'inyectores', 'sv'));
Router::connect('/sv/balatas', array('controller' => 'pages', 'action' => 'balatas', 'sv'));
Router::connect('/sv/limpiaparabrisas', array('controller' => 'pages', 'action' => 'limpiaparabrisas', 'sv'));
Router::connect('/sv/bobinas-encendido', array('controller' => 'pages', 'action' => 'bobinas', 'sv'));
Router::connect('/sv/centros-reparacion', array('controller' => 'distribuidors', 'action' => 'donde_reparar', 'sv'));

//Routing Venezuela
Router::connect('/ve', array('controller' => 'pages', 'action' => 'home', 've'));
Router::connect('/ve/catalogos-digitales-venezuela', array('controller' => 'pages', 'action' => 'catalogos', 've'));
Router::connect('/ve/quienes-somos', array('controller' => 'pages', 'action' => 'denso', 've'));
Router::connect('/ve/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno', 've'));
Router::connect('/ve/bujias', array('controller' => 'pages', 'action' => 'bujias', 've'));
Router::connect('/ve/filtros', array('controller' => 'pages', 'action' => 'filtros', 've'));
Router::connect('/ve/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores', 've'));
Router::connect('/ve/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado', 've'));
Router::connect('/ve/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar', 've'));
Router::connect('/ve/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar', 've'));
Router::connect('/ve/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado', 've'));
Router::connect('/ve/contacto', array('controller' => 'pages', 'action' => 'contacto', 've'));
Router::connect('/ve/inyectores', array('controller' => 'pages', 'action' => 'inyectores', 've'));
Router::connect('/ve/balatas', array('controller' => 'pages', 'action' => 'balatas', 've'));
Router::connect('/ve/limpiaparabrisas', array('controller' => 'pages', 'action' => 'limpiaparabrisas', 've'));
Router::connect('/ve/bobinas-encendido', array('controller' => 'pages', 'action' => 'bobinas', 've'));
Router::connect('/ve/tiendas-certificadas', array('controller' => 'distribuidores_certificados', 'action' => 'index', 've'));
Router::connect('/ve/centros-reparacion', array('controller' => 'distribuidors', 'action' => 'donde_reparar', 'latam'));

//Routing Puerto Rico
Router::connect('/pr', array('controller' => 'pages', 'action' => 'home', 'pr'));
Router::connect('/pr/catalogos-digitales-peru', array('controller' => 'pages', 'action' => 'catalogos', 'pr'));
Router::connect('/pr/quienes-somos', array('controller' => 'pages', 'action' => 'denso', 'pr'));
Router::connect('/pr/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno', 'pr'));
Router::connect('/pr/bujias', array('controller' => 'pages', 'action' => 'bujias', 'pr'));
Router::connect('/pr/filtros', array('controller' => 'pages', 'action' => 'filtros', 'pr'));
Router::connect('/pr/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores', 'pr'));
Router::connect('/pr/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_estado', 'pr'));
Router::connect('/pr/buscar-mi-pieza', array('controller' => 'productos', 'action' => 'buscar', 'pr'));
Router::connect('/pr/donde-comprar', array('controller' => 'distribuidors', 'action' => 'donde_comprar', 'pr'));
Router::connect('/pr/productos/buscar-avanzado', array('controller' => 'productos', 'action' => 'buscar_avanzado', 'pr'));
Router::connect('/pr/contacto', array('controller' => 'pages', 'action' => 'contacto', 'pr'));
Router::connect('/pr/inyectores', array('controller' => 'pages', 'action' => 'inyectores', 'pr'));
Router::connect('/pr/balatas', array('controller' => 'pages', 'action' => 'balatas', 'pr'));
Router::connect('/pr/limpiaparabrisas', array('controller' => 'pages', 'action' => 'limpiaparabrisas', 'pr'));
Router::connect('/pr/bobinas-encendido', array('controller' => 'pages', 'action' => 'bobinas', 'pr'));
Router::connect('/pr/centros-reparacion', array('controller' => 'distribuidors', 'action' => 'donde_reparar', 'latam'));

//Routing Argentina
Router::connect('/ar', array('controller' => 'pages', 'action' => 'home', 'ar'));
Router::connect('/ar/recargate-con-denso', array('controller' => 'promosTas', 'action' => 'showLanding'));
Router::connect('/ar/gracias-por-participar', array('controller' => 'promosTas', 'action' => 'thankyou'));
Router::connect('/ar/tiempo-de-autopartes', array('controller' => 'pages', 'action' => 'imagen_tv'));
Router::connect('/ar/catalogos-digitales-latam', array('controller' => 'pages', 'action' => 'catalogos', 'ar'));
Router::connect('/ar/quienes-somos', array('controller' => 'pages', 'action' => 'denso', 'ar'));
Router::connect('/ar/terminos-y-condiciones', array('controller' => 'pages', 'action' => 'terminos'));
Router::connect('/ar/aviso-de-privacidad', array('controller' => 'pages', 'action' => 'privacidad'));
Router::connect('/ar/conviertete-en-distribuidor', array('controller' => 'pages', 'action' => 'landing', 'ar'));
Router::connect('/ar/sensores-de-oxigeno', array('controller' => 'pages', 'action' => 'sensores_oxigeno', 'ar'));
Router::connect('/ar/bujias', array('controller' => 'pages', 'action' => 'bujias', 'ar'));
Router::connect('/ar/filtros', array('controller' => 'pages', 'action' => 'filtros', 'ar'));
Router::connect('/ar/compresores-aire-acondicionado', array('controller' => 'pages', 'action' => 'compresores', 'ar'));
Router::connect('/ar/aprende-con-denso', array('controller' => 'pages', 'action' => 'videos', 'ar'));
Router::connect('/ar/contacto', array('controller' => 'pages', 'action' => 'contacto', 'ar'));
Router::connect('/ar/inyectores', array('controller' => 'pages', 'action' => 'inyectores', 'ar'));
Router::connect('/ar/balatas', array('controller' => 'pages', 'action' => 'balatas', 'ar'));
Router::connect('/ar/limpiaparabrisas', array('controller' => 'pages', 'action' => 'limpiaparabrisas', 'ar'));
Router::connect('/ar/bobinas-encendido', array('controller' => 'pages', 'action' => 'bobinas', 'ar'));
Router::connect('/ar/distribuidores/*', array('controller' => 'distribuidors', 'action' => 'por_pais'));
Router::connect('/ar/producto_autentico', array('controller' => 'pages', 'action' => 'producto_autentico', 'ar'));
Router::connect('/ar/falsificacion_producto', array('controller' => 'pages', 'action' => 'falsificacion_producto', 'ar'));
Router::connect('/ar/producto_autentico_inyector', array('controller' => 'pages', 'action' => 'producto_autentico_inyector', 'ar'));
Router::connect('/ar/producto_no_original_inyector', array('controller' => 'pages', 'action' => 'falsificacion_producto_inyector', 'ar'));
Router::connect('/ar/centros-reparacion', array('controller' => 'distribuidors', 'action' => 'donde_reparar', 'ar'));


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
