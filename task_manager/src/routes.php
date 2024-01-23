<?php

$router->get('/tasks', 'tasks/index.php');
$router->get('/tasks/create', 'tasks/create-form.php');
$router->get('/tasks/show', 'tasks/show.php');
$router->get('/tasks/edit', 'tasks/edit-form.php');
$router->get('/tasks/todo', 'tasks/todo.php');
$router->get('/tasks/completed', 'tasks/completed.php');


$router->post('/tasks', 'tasks/create.php');
$router->put('/tasks', 'tasks/edit.php');
$router->delete('/tasks', 'tasks/delete.php');


