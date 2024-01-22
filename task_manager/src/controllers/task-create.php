<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $db_config = require config("database.php");

    $errors = [];

    if (Validator::string($_POST['title'], 6, 20)) {
        $errors['title'] = 'The title must be betwen 6 and 20 characters long';
    }

    if (Validator::string($_POST['description'], 6, 20)) {
        $errors['description'] = "The body musn't be greater than 100 characters long";
    }

    if (!$errors) {
        // A new connection to the database
        $db = new Database($db_config, $db_config['user'], $db_config['password']);

        $db->query('INSERT INTO tasks (title, description, status, user_id) VALUES (:title, :description, :status, :user_id)', [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'status' => 'pending',
            'user_id' => 1
        ]);
    }
}

require view("task-create.view.php");