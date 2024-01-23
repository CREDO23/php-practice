<?php

use core\Database;

$db_config = require config("database.php");

// A new connection to the database
$db = new Database($db_config, $db_config['user'], $db_config['password']);

$db->query('DELETE FROM tasks WHERE id =?', [$_POST['id']]);

header('location: /tasks');
