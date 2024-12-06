<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('welcome/(:segment)', 'Welcome::index/$1');

$routes->group('register', function ($routes) {
    $routes->get('/', 'RegisterController::index');
    $routes->post('/', 'RegisterController::store');
});

$routes->group('login', function ($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->post('/', 'LoginController::login');
});
// rute untuk user
$routes->get('dashboard', 'Dashboard::index');
$routes->get('user/home_user', 'UserController::home');

    

$routes->group('logout', function ($routes) {
    $routes->get('/', 'LogoutController::index');
});

// Rute untuk dashboard admin
$routes->get('dashboard', 'AdminController::dashboard');


// routes guru

$routes->get('guru', 'GuruController::index');
$routes->get('guru/tambah', 'GuruController::tambah');
$routes->get('guru/edit/(:any)', 'GuruController::edit/$1');
$routes->post('guru/add', 'GuruController::add');
$routes->post('guru/update', 'GuruController::update');
$routes->get('guru/hapus/(:any)', 'GuruController::hapus/$1');
