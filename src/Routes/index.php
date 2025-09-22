<?php

use BookkeeperApp\Controllers\HomeController;
use BookkeeperApp\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/phpinfo', HomeController::class, 'phpinfo');
$router->get('/pdf', HomeController::class, 'pdf');

$router->dispatch();