<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //nav content
$routes->get('/', 'Home::index');
$routes->get('/product', 'Home::product');
$routes->get('/about', 'Home::about');

//order
$routes->get('/order/(:num)', 'Order::form/$1');
$routes->post('/save', 'Order::ordered');
$routes->get('/orderlist', 'Order::orderlist');




