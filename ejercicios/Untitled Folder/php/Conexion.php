<?php

session_start();

class Conexion
{
    protected $conexion = null;

    public function __construct()
    {
        try {
            $dsn = "mysql:host=localhost;dbname=Inmobiliaria;charset=utf8";
            $user = "root";
            $pass = "";
            $this->conexion = new PDO($dsn, $user, $pass);
            $this->conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            $error = serialize($e);
            $_SESSION["error"] = $error;
            header("Location: ./php/inexistente.php");
        } catch (Error $e) {
            $exception = serialize($e);
            $_SESSION["exception"] = $exception;
            header("Location: ./php/exception.php");
        }
    }

    public function initalize($sql)
    {
        $this->conexion->prepare($sql)->execute();
    }

    protected function conect()
    {
        return $this->conexion;
    }
}
