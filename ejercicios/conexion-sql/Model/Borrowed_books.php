<?php

class Borrowed_books
{
    private $customer_id;
    private $book_id;
    private $borrowStart;
    private $borrowEnd;
  
    public function __construct($customer_id, $book_id, $borrowStart, $borrowEnd)
    {
        $this->customer_id = $customer_id;
        $this->book_id = $book_id;
        $this->borrowStart = $borrowStart;
        $this->borrowEnd = $borrowEnd;
    }

    public function getcustomer_id()
    {
        return $this->customer_id;
    }

    public function getbook_id()
    {
        return $this->book_id;
    }

    public function getborrowStart()
    {
        return $this->borrowStart;
    }

    public function getborrowEnd()
    {
        return $this->borrowEnd;
    }

    public function insertBorrowed($DB)
    {
        $query = "INSERT INTO `Borrowed_books`(customer_id, book_id, borrowStart, borrowEnd) VALUES (?,?,?,?)";
        $pdo = $DB->getConnectionDB();
        $statement = $pdo->prepare($query);
        $statement->bindParam(1, $this->customer_id);
        $statement->bindParam(2, $this->book_id);
        $statement->bindParam(3, $this->borrowStart);
        $statement->bindParam(4, $this->borrowEnd);
        $statement->execute();
    }
}
