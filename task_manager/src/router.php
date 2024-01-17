<?php


$controllers = [
    '/tasks' => 'controllers/all.php',
    '/todo' => 'controllers/todo.php',
    '/completed' => 'controllers/completed.php',
    '/' => 'controllers/auth.php',
];

/**
 * uriToController - A function that look for the controller depending on the current uri
 * 
 * @param uri : The server uri
 * @param controllers : The controllers
 */
function uriToCOntroller($uri, $controllers)
{
    $path = parse_url($uri)['path'];

    if (array_key_exists($path, $controllers)) {
        require $controllers[$path];
    } else {
        abort();
    }
};

uriToCOntroller($_SERVER['REQUEST_URI'], $controllers);
