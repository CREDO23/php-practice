<?php

$router->get('/tasks', 'tasks-all.php');
$router->post('/task/create', 'task-create.php',);
$router->get('/tasks/todo', 'tasks-todo.php');
$router->get('/tasks/completed', 'tasks-completed.php');
