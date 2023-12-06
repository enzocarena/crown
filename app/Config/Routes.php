<?php

namespace Config;

use CodeIgniter\Router\Router;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::principal');
$routes->get('/logueado', 'Home::logueado');
$routes->get('/iniciarsesion', 'Home::index');
$routes->get('/pantalonbordo', 'Home::pantalonbordo');
$routes->get('/login', 'Home::index');
$routes->post('/verificacion', 'Principio::principio');
$routes->get('/register', 'Home::registrarse');
$routes->post('/crearUsuario', 'Usuario::insertar');
$routes->get('/principal.php', 'Home::principal');
$routes->get('/remeras', 'Home::remeras');
$routes->add('cerrarsesion', 'Autenticacion::cerrarSesion');
$routes->get('/perfil', 'Home::perfil');

//todos productos */
$routes->get('/buzosall', 'Home::buzosall');
$routes->get('/lompasall', 'Home::lompasall');
$routes->get('/remerasall', 'Home::remerasall');
$routes->get('/carrito', 'Home::vista_carrito');

//remeras */
$routes->get('/index2/(:num)', 'Home::index2/$1');

//carrito*/

$routes->get('/', 'Home::index'); 
$routes->add('carrito', 'Carrito::vista_carrito', ['as' => 'vista_carrito']); 
$routes->post('carrito/agregar', 'Carrito::agregarAlCarrito'); 
$routes->post('carrito/actualizar', 'Carrito::actualizar');
$routes->get('carrito/eliminar/(:num)', 'Carrito::eliminar/$1');

$routes->get('carrito/finalizarcompra', 'Compra::finalizarCompra');
$routes->post('compra/procesarCompra', 'Compra::procesarCompra');
$routes->get('completado/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)', 'Compra::pagopaypal/$1/$2/$3/$4/$5/$6/$7');
$routes->get('/finalizado', 'home::finalizado');
$routes->get('finalizar-compra', 'Compra::finalizarCompra');
$routes->post('pagopaypal/(:segment)/(:segment)/(:segment)/(:segment)', 'Compra::pagopaypal/$1/$2/$3/$4');


//admin*/
$routes->post('/insertarProd', 'controlprod::insertarproductos');
$routes->get('/admin', 'Home::admin');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
$routes->get('ir', 'Login::undefined');$routes->get('ir', 'Home::principal');$routes->get('ir', 'Home::principal');$routes->get('registrer', 'Home::registrarse');