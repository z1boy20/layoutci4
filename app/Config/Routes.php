<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('/beranda', 'Home::index');

$routes->get('/dosen', 'Home::dosen');

$routes->get('/mata-kuliah', 'Home::matakuliah');

$routes->get('/tentang', 'Home::tentang');

// Pertemuan 12: tampil data mahasiswa dari database
$routes->get('mahasiswa', 'Mahasiswa::index');
// Pertemuan 13: CRUD mahasiswa
$routes->get('mahasiswa/create', 'Mahasiswa::create');
$routes->post('mahasiswa/store', 'Mahasiswa::store');
$routes->get('mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->post('mahasiswa/update/(:num)', 'Mahasiswa::update/$1');
$routes->post('mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');
