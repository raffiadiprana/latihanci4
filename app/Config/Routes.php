<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function () {
    return view('index');
});

$routes->group('admin', ['filter' => 'auth'], function ($routes) {

    $routes->get('', 'DashboardController::index');
    $routes->get('delete_berita/(:num)', 'DashboardController::delete/$1');
});

$routes->group('user', ['filter' => 'auth'], function ($routes) {

    $routes->get('', 'LandingController::index');
    $routes->get('isi_berita', 'LandingController::create');
    $routes->post('berita_store', 'LandingController::store');
    $routes->get('edit_berita/(:num)', 'LandingController::edit/$1');
    $routes->post('update_berita/(:num)', 'LandingController::update/$1');
    $routes->get('delete_berita/(:num)', 'LandingController::delete/$1');
});

// $routes->get('register_user', 'AuthController::registerView');



//route dibawah ini tidak harus login
$routes->get('login', 'AuthController::login', ['as' => 'login']);
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');



$routes->get('register_user', 'AuthController::form_register');
$routes->post('proses_register_user', 'AuthController::proses_register_user');
// $routes->get('activate/(:any)', 'AuthController::activate/$1');


$routes->get('lupa_password', 'AuthController::lupa_password');
$routes->post('proses_lupa_password', 'AuthController::proses_lupa_password');

// $routes->get('admin/ganti_password', 'AuthController::ganti_password');

// $routes->post('admin/proses_ganti_password', 'AuthController::proses_ganti_password');
