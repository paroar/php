<?php

require "Conexion.php";

class Filtro extends Conexion{


    public function getTipos(){
        $sql = "SELECT tipo FROM tipos";
        $sttm = $this->conect()->prepare($sql);
        $sttm->execute();
        
        return $sttm->fetchAll(PDO::FETCH_COLUMN);
    }

    public function getZonas(){
        $sql = "SELECT lugar FROM zonas";
        $sttm = $this->conect()->prepare($sql);
        $sttm->execute();
        return $sttm->fetchAll(PDO::FETCH_COLUMN);
    }

    public function maxDormitorio(){
        $sql = "SELECT MAX(dormitorios) FROM viviendas";
        $sttm = $this->conect()->prepare($sql);
        $sttm->execute();
        return $sttm->fetchAll(PDO::FETCH_COLUMN);
    }

    public function maxPrecio(){
        $sql = "SELECT MAX(precio) FROM viviendas";
        $sttm = $this->conect()->prepare($sql);
        $sttm->execute();
        return $sttm->fetchAll(PDO::FETCH_COLUMN);
    }

    public function extras(){
        $sql = "SHOW COLUMNS FROM viviendas";
        $sttm = $this->conect()->prepare($sql);
        $sttm->execute();
        return $sttm->fetchAll(PDO::FETCH_COLUMN);
    }


}