<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $db_config = require("src/configs/database.php");


    // A new connection to the database
    $db = new Database($db_config, $db_config['user'], $db_config['password']);

    $db->query('INSERT INTO tasks (title, description, status, user_id) VALUES (:title, :description, :status, :user_id)', [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'status' => 'pending',
        'user_id' => 1
    ]);
}

require "src/views/task-create.view.php";
