<?php

use BookkeeperApp\Controllers\HomeController;
use BookkeeperApp\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');

$router->dispatch();