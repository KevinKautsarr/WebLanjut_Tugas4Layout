<?php
//rute aplikasi
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/',  'Home::index');
// /kategori = link permintaan dari user 
// diarahkan ke method  dalam file KategoriController. 
$routes->get('/kategori', 'KategoriController::index');
$routes->get('/kategori/v_alatTulis', 'KategoriController::alatTulis');
$routes->get('/kategori/v_pakaian', 'KategoriController::pakaian');
$routes->get('/kategori/v_pertukangan', 'KategoriController::pertukangan');
$routes->get('/kategori/v_elektronik', 'KategoriController::elektronik');
$routes->get('/kategori/v_snack', 'KategoriController::snack');
// TUgas 4 Layout
$routes->get('/tugas4',  'Home::home4');
$routes->get('/produk',  'Home::produk');