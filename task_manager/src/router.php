<?php


$controllers = [
    '/tasks' => 'controllers/tasks-all.php',
    '/task/create' => 'controllers/task-create.php',
    '/tasks/create' => 'controllers/tasks-create.php',
    '/tasks/todo' => 'controllers/tasks-todo.php',
    '/tasks/completed' => 'controllers/tasks-completed.php',
    '/auth' => 'controllers/auth.php',
];

/**
 * uriToController - A function that look for the controller depending on the current uri
 * 
 * @param string : The server uri
 * @param array : The controllers
 */
function uriToController($uri, $controllers)
{
    $path = parse_url($uri)['path'];

    if (array_key_exists($path, $controllers)) {
        require $controllers[$path];
    } else {
        abort();
    }
};

uriToController($_SERVER['REQUEST_URI'], $controllers);
