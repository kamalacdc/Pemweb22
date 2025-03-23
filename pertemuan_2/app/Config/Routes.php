<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'home::index');
$routes->get('/about', 'Page::about');
$routes->get('/kontak', 'page::kontak');
$routes->get('/faqs', 'page::faqs');       
$routes->get('/tos', 'page::tos');       
$routes->get('/bio', 'page::bio');       

$routes->setAutoRoute(false);       
