<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Posyandu::index');
$routes->get('/posyandu/button', 'Posyandu::button');
$routes->get('/posyandu/(:any)', 'Posyandu::detail/$1');
$routes->get('/cek/detail/(:any)', 'Posyandu::cek/$1');
