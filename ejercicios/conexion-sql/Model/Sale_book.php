<?php

class Sale_book
{
    private $book_id;
    private $sale_id;
    private $amount;

  
    public function __construct($book_id, $sale_id, $amount)
    {
        $this->book_id = $book_id;
        $this->sale_id = $sale_id;
        $this->amount = $amount;
    }

    public function getbook_id()
    {
        return $this->book_id;
    }

    public function getsale_id()
    {
        return $this->sale_id;
    }

    public function getamount()
    {
        return $this->amount;
    }

    public function insertSale($DB)
    {
        $query = "INSERT INTO `Sale`(book_id, sale_id) VALUES (?,?)";
        $pdo = $DB->getConnectionDB();
        $statement = $pdo->prepare($query);
        $statement->bindParam(1, $this->book_id);
        $statement->bindParam(2, $this->sale_id);
        $statement->execute();
    }
}
