<?php

namespace Core;

use PDO;

class Database{

    public $connecton;
    public $statement;

    public function __construct($config, $username = 'root', $password = ''){

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connecton = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = []){

        $this->statement = $this->connecton->prepare($query);
        $this->statement->execute($params);

        return $this;

    }

    public function get(){
        return $this->statement->fetchAll();
    }

    public function find(){
        return $this->statement->fetch();
    }

    public function findOrFail(){
        $result = $this->statement->fetch();

        if(!$result){
            abort();
        }

        return $result;
    }

}