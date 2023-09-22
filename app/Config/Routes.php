<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/main', 'StudentController::student');
$routes->post('/main', 'StudentController::create');
$routes->post('/delete/(:any)', 'StudentController::delete/$l');
