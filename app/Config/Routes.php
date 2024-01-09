<?php

use CodeIgniter\Router\RouteCollection;
use Controller\admin\Dashboard;
// $routes->setAutoRoute(true);
/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Login::index');
$routes->post('/auth/login', 'Login::login');
$routes->get('/auth/logout', 'Login::logout');

$routes->get('/admin/dashboard', 'admin\Dashboard::index');

$routes->get('/admin/pengguna', 'admin\Pengguna::index');
$routes->post('/admin/pengguna/save', 'admin\Pengguna::save');
$routes->post('/admin/pengguna/update', 'admin\Pengguna::update');
$routes->post('/admin/pengguna/delete', 'admin\Pengguna::delete');

$routes->get('/admin/kandidat', 'admin\Kandidat::index');
$routes->post('/admin/kandidat/save', 'admin\Kandidat::save');
$routes->post('/admin/kandidat/delete', 'admin\Kandidat::delete');
$routes->post('/admin/kandidat/update', 'admin\Kandidat::update');

$routes->get('/admin/uploadfile', 'admin\UploadFile::index');
$routes->post('/admin/uploadfile/upload', 'admin\UploadFile::upload');

$routes->get('/admin/hasilvote', 'admin\HasilVote::index');

$routes->get('/voters/vote', 'voters\Vote::index');
$routes->get('/voters/vote/(:num)', 'voters\Vote::save/$1');
$routes->get('/voters/vote/sudahvote', 'voters\Vote::save/$1');

$routes->get('/time/timeout', 'habis::index');
