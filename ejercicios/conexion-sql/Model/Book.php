<?php

class Book
{
    private $isbn;
    private $title;
    private $author;
    private $stock;
    private $price;

    public function __construct($isbn, $title, $author, $stock, $price)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->stock = $stock;
        $this->price = $price;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function insertBook($pdo)
    {
        $query = "INSERT INTO `Book`(isbn, title, author, stock, price) VALUES (?,?,?,?,?)";
        $statement = $pdo->prepare($query);
        $statement->bindParam(1, $this->isbn);
        $statement->bindParam(2, $this->title);
        $statement->bindParam(3, $this->author);
        $statement->bindParam(4, $this->stock);
        $statement->bindParam(5, $this->price);
        $statement->execute();
    }

    public static function selectLimitBooks($pdo, $limit, $numResults){
        $query = "SELECT * FROM Book LIMIT $limit, $numResults";
        $statement = $pdo->prepare($query);
        $statement->execute();
        $arr = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $arr;
    }

    public static function numBooks($pdo)
    {
        $query = "SELECT * FROM Book";
        $statement = $pdo->prepare($query);
        $statement->execute();
        return $statement->rowCount();
    }

    public static function selectAllBook($pdo)
    {
        $query = "SELECT * FROM Book";
        $statement = $pdo->prepare($query);
        $statement->execute();
        $arr = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $arr;
    }

    public static function deleteBook($pdo,$id)
    {
        $query = "DELETE FROM Book WHERE id=:id";
        $statement = $pdo->prepare($query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

    public static function updateStockBook($pdo,$id, $amount)
    {
        $query = "UPDATE Book
        SET stock = stock - :amount
        WHERE id=:id AND stock >= :amount";
        $statement = $pdo->prepare($query);
        $statement->bindParam(":id", $id);
        $statement->bindParam(":amount", $amount);
        $statement->execute();
    }


}
