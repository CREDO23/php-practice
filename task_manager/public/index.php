<?php

const BASE_PATH = __DIR__ . '/../src/';

require BASE_PATH . "helpers.php";

spl_autoload_register(function ($class) {

    $result = str_replace("\\", DIRECTORY_SEPARATOR, $class);

    require base_path($result . ".php");
});


require base_path("router.php");
