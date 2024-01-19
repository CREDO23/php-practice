<?php

$db_config = require("src/configs/database.php");

// A new connection to the database
$db = new Database($db_config, $db_config['user'], $db_config['password']);

$tasks = $db->query('SELECT * FROM tasks')->fetchAll();

if(!$tasks){
    abort(404);
}

require "src/views/tasks-completed.view.php";