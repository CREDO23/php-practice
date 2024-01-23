<?php

use core\Database;

$db_config = require config("database.php");

// A new connection to the database
$db = new Database($db_config, $db_config['user'], $db_config['password']);

$tasks = $db->query('SELECT * FROM tasks')->fetchAll();

if(!$tasks){
    abort(404);
}

require view("tasks/todo.view.php");