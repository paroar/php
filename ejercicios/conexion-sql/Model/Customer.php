<?php

class Customer
{
    private $firstname;
    private $surname;
    private $email;
    private $pass;
    private $subscription;
  
    public function __construct($firstname, $surname, $email, $pass, $subscription)
    {
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
        $this->pass = $pass;
        $this->subscription= $subscription;
    }

    public function getfirstname()
    {
        return $this->firstname;
    }

    public function getsurname()
    {
        return $this->surname;
    }

    public function getemail()
    {
        return $this->email;
    }

    public function getsubscription()
    {
        return $this->subscription;
    }

    public function getpass()
    {
        return $this->pass;
    }

    public function insertCustomer($DB)
    {
        $query = "INSERT INTO `Customer`(firstname, surname, email, pass, subscription) VALUES (?,?,?,?,?)";
        $pdo = $DB->getConnectionDB();
        $statement = $pdo->prepare($query);
        $statement->bindParam(1, $this->firstname);
        $statement->bindParam(2, $this->surname);
        $statement->bindParam(3, $this->email);
        $statement->bindParam(4, $this->pass);
        $statement->bindParam(5, $this->subscription);
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

    public function correctPass($DB)
    {
        $query = "SELECT * FROM Customer WHERE email=:email";
        $pdo = $DB->getConnectionDB();
        $statement = $pdo->prepare($query);
        $statement->bindParam(":email", $this->getemail());
        $statement->execute();
        $arr = $statement->fetch();
        if ($arr["pass"] === $this->getpass()) {
            return true;
        } else {
            return false;
        }
    }

    public function registerUser($DB)
    {
        $query = "INSERT INTO `Customer`(email, pass) VALUES (?,?)";
        $pdo = $DB->getConnectionDB();
        $statement = $pdo->prepare($query);
        $statement->bindParam(1, $this->user);
        $statement->bindParam(2, $this->pass);
        $statement->execute();
    }
}
