<?php

require_once('Conexion.php');

class Usuarios extends Conexion{

    public function login($nombre,$pass){
        $sql = "SELECT * FROM usuarios WHERE nombre = ? AND pass = ?";
        $sttm = $this->conect()->prepare($sql);
        $sttm->execute([$nombre, $pass]);
        return $sttm->fetch();
    }
}