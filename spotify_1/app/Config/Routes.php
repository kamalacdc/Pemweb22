<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/library', 'Library::index');
$routes->get('/playlist', 'Playlist::index');



