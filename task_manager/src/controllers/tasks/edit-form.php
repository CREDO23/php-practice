<?php

use core\Database;

$db_config = require config("database.php");

$db = new Database($db_config, $db_config['user'], $db_config['password']);

$task = $db->query("SELECT * FROM tasks WHERE id = ?", [$_GET['id']])->fetch();

require view("tasks/edit.view.php");
