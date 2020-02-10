<?php

namespace Model;

use Model\Connect;

class Book extends Connect
{
    public function searchPattern($pattern)
    {
        $sql = "SELECT * FROM Book WHERE title LIKE :pattern";
        $stmt = $this->connect()->prepare($sql);
        $pattern = "%$pattern%";
        $stmt->bindValue(":pattern", $pattern);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function searchBook($id)
    {
        $sql = "SELECT * FROM Book WHERE id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function updateBook($id, $title, $author, $stock, $price)
    {
        $sql = "UPDATE Book SET title = :title, author = :author, stock = :stock, price = :price  WHERE id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":title", $title);
        $stmt->bindValue(":author", $author);
        $stmt->bindValue(":stock", $stock);
        $stmt->bindValue(":price", $price);
        $stmt->execute();
        return $stmt->errorCode();
    }

    public function insertBook($isbn, $title, $author, $stock, $price)
    {
        $sql = "INSERT INTO Book (isbn, title, author, stock, price) VALUES(?,?,?,?,?)";
        $pdo = $this->connect();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$isbn,$title,$author,$stock,$price]);
        return $pdo->lastInsertId();

    }

    public function deleteBook($id)
    {
        $sql = "DELETE FROM Book WHERE id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->rowCount();
    }
}
