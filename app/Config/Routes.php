<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('login', 'Login::index');
$routes->post('login/signin', 'Login::signin');
$routes->get('login/signout', 'Login::signout');
$routes->get('backup', 'Backup::index');
