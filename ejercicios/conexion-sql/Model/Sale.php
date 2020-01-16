<?php

class Sale
{
    private $customer_id;
    private $date;

  
    public function __construct($customer_id, $date)
    {
        $this->customer_id = $customer_id;
        $this->date = $date;
    }

    public function getcustomer_id()
    {
        return $this->customer_id;
    }

    public function getdate()
    {
        return $this->date;
    }

    public function insertSale($DB)
    {
        $query = "INSERT INTO `Sale`(customer_id, date) VALUES (?,?)";
        $pdo = $DB->getConnectionDB();
        $statement = $pdo->prepare($query);
        $statement->bindParam(1, $this->customer_id);
        $statement->bindParam(2, $this->date);
        $statement->execute();
    }

    public static function selectAllCustomer($DB)
    {
        $query = "SELECT * FROM Customer";
        $pdo = $DB->getConnectionDB();
        $statement = $pdo->prepare($query);
        $statement->execute();
        $arr = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $arr;
    }

    public static function deleteCustomer($DB,$id)
    {
        $query = "DELETE FROM Customer WHERE id=:id";
        $pdo = $DB->getConnectionDB();
        $statement = $pdo->prepare($query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
}
