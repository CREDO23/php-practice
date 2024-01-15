<?php

class Database {
    public $connection;

    public function __construct($dsn){
        $this->connection = new PDO($dsn,"root");
    }

    public function query($query){
        $statment = $this->connection->prepare($query);

        $statment->execute();

        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }
}