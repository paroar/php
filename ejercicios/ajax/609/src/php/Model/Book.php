<?php

//namespace Model;
//use Model\Connect;

require("Connect.php");

class Book extends Connect{

    public function searchPattern($pattern){
        $sql = "SELECT * FROM Book WHERE title LIKE :pattern";
        $stmt = $this->connect()->prepare($sql);
        $pattern = "%$pattern%";
        $stmt->bindValue(":pattern", $pattern);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}