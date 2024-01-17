<?php

require "src/helpers.php";
require "src/database.php";

$db_config = require("src/configs/database.php");

// A new instance of the database
$db = new Database($db_config, $db_config['user'], $db_config['password']);


require "src/router.php";
