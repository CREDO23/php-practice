<?php

class Database {
    public $connection;

    public function __construct($config, $user = 'root', $password = ''){

        $dns = 'mysql:' . http_build_query($config,'',';');

        $this->connection = new PDO($dns,$user,$password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query){
        $statment = $this->connection->prepare($query);

        $statment->execute();

        return $statment;
    }
}