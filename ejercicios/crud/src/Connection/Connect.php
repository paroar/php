<?php

namespace Connection;

use PDO as PDO; 
use Exception as Exception;

class Connect
{
    private $connection;
    private $config = [
        "driver" => "mysql",
        "host" => "localhost",
        "database" => "crud",
        "user" => "root",
        "pass" => ""
    ];

    public function __construct()
    {
    }

    public function connect()
    {
        try {
            $controller = $this->config["driver"];
            $host = $this->config["host"];
            $db = $this->config["database"];
            $user = $this->config["user"];
            $pass = $this->config["pass"];

            $dsn = "$controller:host=$host;dbname=$db";
            $pdo = new PDO($dsn, $user, $pass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->connect = $pdo;
            return $pdo;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
