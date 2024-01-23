<?php


use core\Validator;
use core\Database;

$db_config = require config("database.php");

$errors = [];


if (Validator::string($_POST['title'], 6, 20)) {
    $errors['title'] = 'The title must be betwen 6 and 20 characters long';
}

if (Validator::string($_POST['description'], 6, 100)) {
    $errors['description'] = "The body musn't be greater than 100 characters long";
}

if (!$errors) {
    // A new connection to the database
    $db = new Database($db_config, $db_config['user'], $db_config['password']);

    $db->query('UPDATE tasks SET title = :title, description = :description WHERE id = :id', [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'id'=> $_POST['id'],
    ]);

    header('location: /tasks');
}

require view("tasks/edit.view.php");