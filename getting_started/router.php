<?php


/**
 * This file handles the routing.
 * Check the path and load a corresponding controller.
 */


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/about' => 'controllers/about.php'
];

function abort($code = 404)
{
    http_response_code($code);

    require "views/{$code}.php";

    die();
}


function routeToController($routes, $uri)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    };
};


routeToController($routes, $uri);
