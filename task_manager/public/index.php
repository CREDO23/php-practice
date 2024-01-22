<?php

const BASE_PATH = __DIR__ . '/../src/';

require BASE_PATH . "helpers.php";

spl_autoload_register(function ($class) {
    require base_path("core/" . $class . ".php");
});

require base_path("router.php");
