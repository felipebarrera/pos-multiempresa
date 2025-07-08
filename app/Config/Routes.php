<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

service('auth')->routes($routes);
# En app/Config/Routes.php
$routes->group('admin', ['filter' => 'session'], function($routes) {
    $routes->resource('empresas'); # CRUD protegido
});

$routes->group('api', ['filter' => 'jwt'], function($routes) {
    $routes->get('empresa/(:segment)', 'API\EmpresasApi::getEmpresa/$1');
});