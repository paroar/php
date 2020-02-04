<?php
namespace Model;
use PDO as PDO;
use Exception as Exception;

class Connect
{
    public function connect()
    {
        try {
            $user = "root";
            $passwd = "";
            $dsn = "mysql:host=127.0.0.1;dbname=books";
            $pdo = new PDO($dsn, $user, $passwd);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
