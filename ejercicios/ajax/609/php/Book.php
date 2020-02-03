<?php

require "Connect.php";

class Book extends Connect{

    public function searchPattern($pattern){
        $sql = "SELECT * FROM Book WHERE title LIKE '%a%'";
        $stmt = $this->connect("config.json")->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}