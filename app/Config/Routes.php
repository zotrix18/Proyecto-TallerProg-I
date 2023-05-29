<?php

namespace Config;

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
$routes->get('/', 'Home::index');
$routes->get('/nosotros', 'Home::nosotros');
$routes->get('/comercializacion', 'Home::comercializacion');
$routes->get('/tyc', 'Home::terminos');
$routes->get('/contacto', 'Home::contacto');
$routes->get('/enConstruccion', 'Home::construccion');


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
//pruebas de libreria, conociendo bd
// $routes->get('/listar', 'Libros::index');
// $routes->get('/crear', 'Libros::crear');
// $routes->post('/guardar', 'Libros::guardar');
// $routes->get('borrar/(:num)', 'Libros::borrar/$1');
// $routes->get('editar/(:num)', 'Libros::editar/$1');
// $routes->post('/actualizar', 'Libros::actualizar');


//usario comun
//rutas Sigin
$routes->get('sigin', 'Usuarios::sigin');
$routes->post('registrar', 'Usuarios::registrar');
//rutas Login
$routes->get('/login', 'Usuarios::login');
$routes->post('iniciar', 'Usuarios::iniciar');
//inicio Sesion
$routes->get('logout', 'Usuarios::logout');
//catalogo
$routes->get('catalogo', 'Productos::listar');
//Carrito
$routes->get('agregarCarrito/(:num)', 'Compras::agregarCarrito/$1');
$routes->get('carrito', 'Compras::carrito');
$routes->get('quitar/(:num)', 'Compras::quitarItemCarrito/$1');
$routes->get('restar/(:num)', 'Compras::restar/$1');
$routes->get('sumar/(:num)', 'Compras::sumar/$1');
$routes->get('limpiar', 'Compras::limpiar');
//Continuar Compra
$routes->get('pago', 'Compras::pago');
$routes->get('continuar', 'Compras::continuar');
//procesamiento pago
$routes->post('confirmarPago', 'ComprasConfirmadas::confirmarPago');


//Usuario Admin
$routes->get('inicio', 'Admins::inicio');
//CRUD productos
$routes->get('productosAdmin', 'Admins::productosAdmin');
$routes->get('añadir', 'Admins::añadir');
$routes->post('guardar', 'Productos::guardar');
$routes->get('editar/(:num)', 'Productos::editar/$1');
//Baja de usuario
$routes->get('usuariosAdmin', 'Usuarios::listarUsuarios');
$routes->get('baja/(:num)', 'Usuarios::baja/$1');
//Mensajes
$routes->get('mensajes', 'Mensajes::listar');
$routes->get('leido/(:num)', 'Mensajes::leido/$1');
$routes->post('recepMensaje', 'Mensajes::mensajeContacto');
