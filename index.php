<?php

require 'functions.php';

require 'database.php';



// require "router.php";

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

$db = new Database($dsn);

$posts = $db->query("SELECT * FROM posts");

foreach ($posts as $post) {
    echo "<li>". $post["title"] ."</li>";
}