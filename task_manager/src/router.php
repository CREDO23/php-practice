<?php

use core\Router;

$router = new Router();

require base_path("routes.php");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);