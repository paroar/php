<?php
define("DBNAME", "mysql:host=localhost");
define("USER", "root");
define("PASSWORD", "");

function createDB($dbname){
    try {
        $db = new PDO(DBNAME, USER, PASSWORD);
        echo "CONEXION CON EXITO";
        $db->setAttribute(
            PDO::ATTR_DEFAULT_FETCH_MODE,
            PDO::FETCH_ASSOC
        );
        $query = "CREATE DATABASE IF NOT EXISTS " . $dbname;
        $statement = $db->prepare($query);
        $statement->execute();
        echo "BASE CREADA";
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
    $db = null;
}
