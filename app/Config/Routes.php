<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/UP2D Lampung', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/admin/unit', 'Home::unit');
$routes->get('/admin/tambah_unit', 'Home::tambah_unit');
$routes->get('/admin/edit_unit', 'Home::edit_unit');