<?php

namespace core;

use PDO;
/**
 * Database - The Database interface
 */
class Database {

    public $connexion;

    function __construct($config,$user = 'root',$password = '')
    {
        $dns = 'mysql:'. http_build_query($config,'',';');
        
        $this->connexion = new PDO($dns,$user,$password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ] );
    }

    function query($query,$params=[])
    {
        $statement = $this->connexion->prepare($query);

        $statement->execute($params);

        return $statement;

    }
}