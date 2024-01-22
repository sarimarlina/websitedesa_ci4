<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Menuutama::index');
$routes->get('/halaman/menuutama', 'Menuutama::index');
$routes->get('/halaman/profil', 'Profil::profil');
$routes->get('/admin/home_admin', 'Home_admin::homeadmin');
$routes->post('/auth/login', 'Auth::auth');
//pegawai
$routes->get('/admin/pegawai/pegawai', 'Pegawai::pegawai');
$routes->get('/admin/pegawai/tambahdata', 'Pegawai::tambah_data');
$routes->post('/admin/pegawai/tambahdata', 'Pegawai::tambah');
// Halaman Edit
$routes->get('/admin/pegawai/edit/(:num)', 'Pegawai::edit/$1');
$routes->get('/admin/pegawai/update/(:num)', 'Pegawai::update/$1');
$routes->get('/admin/pegawai/delete/(:num)', 'Pegawai::delete/$1');
// Proses CRUD
// Insert
$routes->post('/admin/pegawai/add', 'Pegawai::add');
// Update
$routes->post('/admin/pegawai/update', 'Pegawai::update');
//penduduk
$routes->get('/admin/penduduk/penduduk', 'Penduduk::penduduk');
$routes->get('/admin/penduduk/tambahdata', 'Penduduk::tambah_data');
$routes->post('/admin/penduduk/tambahdata', 'Penduduk::tambah');
// Halaman Edit
$routes->get('/admin/penduduk/edit/(:num)', 'Penduduk::edit/$1');
$routes->get('/admin/penduduk/update/(:num)', 'Penduduk::update/$1');
$routes->get('/admin/penduduk/delete/(:num)', 'Penduduk::delete/$1');
// Proses CRUD
// Insert
$routes->post('/admin/penduduk/add', 'Penduduk::add');
// Update
$routes->post('/admin/penduduk/update', 'Penduduk::update');
//views awal
$routes->get('/awal/visimisi', 'Visi::visi');
$routes->get('/awal/sejarah', 'Sejarah::sejarah');
$routes->get('/awal/destinasi', 'Destinasi::destinasi');
//user
$routes->get('auth/registrasi', 'Auth::registrasi');
$routes->post('auth/processRegister', 'Auth::processRegister');

$routes->get('/auth/auth', 'Auth::login');
$routes->post('/auth/processLogin', 'Auth::processLogin');
$routes->get('/datapegawai', 'Datapegawai::datapegawai');






