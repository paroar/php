<?php

namespace Model;
use Model\Connect;

class Book extends Connect{

    public function searchPattern($pattern){
        $sql = "SELECT * FROM Book WHERE title LIKE :pattern";
        $stmt = $this->connect()->prepare($sql);
        $pattern = "%$pattern%";
        $stmt->bindValue(":pattern", $pattern);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function deleteBook($id){
        $sql = "DELETE FROM Book WHERE id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->rowCount();
    }
}