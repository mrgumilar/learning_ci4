<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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



$routes->get('/', 'Home::index');

//auth administrator
$routes->add('admin', 'AdminLogin::index');
$routes->add('lupa_password', 'AdminLogin::lupa_password');


$routes->group('administrator', function($routes){

    $routes->get('/', 'Admin\Dashboard::index');
  
});


$routes->group('kategori', function($routes){

    $routes->get('/', 'Admin\MKategori::index');
  
});

$routes->group('framework', function($routes){

    $routes->get('/', 'Admin\MFramework::index');
  
});


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
