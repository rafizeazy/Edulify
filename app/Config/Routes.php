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

// routes materi
$routes->get('materi', 'MateriController::index');
$routes->get('materi/tambah', 'MateriController::tambah');
$routes->get('materi/edit/(:any)', 'MateriController::edit/$1');
$routes->post('materi/save', 'MateriController::save');
$routes->post('materi/add', 'MateriController::add');
$routes->post('materi/update', 'MateriController::update');
$routes->get('materi/hapus/(:any)', 'MateriController::hapus/$1');

// routes siswa
$routes->get('siswa', 'SiswaController::index');
$routes->get('siswa/tambah', 'SiswaController::tambah');
$routes->get('siswa/edit/(:any)', 'SiswaController::edit/$1');
$routes->post('siswa/add', 'SiswaController::add');
$routes->post('siswa/update', 'SiswaController::update');
$routes->get('siswa/hapus/(:any)', 'SiswaController::hapus/$1');
