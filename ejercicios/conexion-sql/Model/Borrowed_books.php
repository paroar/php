<?php

class Borrowed_books
{
    private $customer_id;
    private $book_id;
    private $start;
    private $end;
  
    public function __construct($customer_id, $book_id, $start, $end)
    {
        $this->customer_id = $customer_id;
        $this->book_id = $book_id;
        $this->start = $start;
        $this->end = $end;
    }

    public function getcustomer_id()
    {
        return $this->customer_id;
    }

    public function getbook_id()
    {
        return $this->book_id;
    }

    public function getstart()
    {
        return $this->start;
    }

    public function getend()
    {
        return $this->end;
    }

    public function insertCustomer($DB)
    {
        $query = "INSERT INTO `Customer`(customer_id, book_id, start, end, price) VALUES (?,?,?,?,?)";
        $pdo = $DB->getConnectionDB();
        $statement = $pdo->prepare($query);
        $statement->bindParam(1, $this->customer_id);
        $statement->bindParam(2, $this->book_id);
        $statement->bindParam(3, $this->start);
        $statement->bindParam(4, $this->end);
        $statement->execute();
    }
}
