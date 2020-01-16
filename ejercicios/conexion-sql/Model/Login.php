<?php
require_once("../Model/ConnectDB.php");
class Login
{
    private $user;
    private $pass;

    public function __construct($user, $pass)
    {
        $this->user = $user;
        $this->pass = $pass;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function correctPass($DB)
    {
        $query = "SELECT * FROM User WHERE user=:user";
        $pdo = $DB->getConnectionDB();
        $statement = $pdo->prepare($query);
        $statement->bindParam(":user", $this->getUser());
        $statement->execute();
        $arr = $statement->fetch();
        if ($arr["pass"] === $this->getPass()) {
            return true;
        } else {
            return false;
        }
    }

    public function registerUser($DB)
    {
        $query = "INSERT INTO `User`(user, pass) VALUES (?,?)";
        $pdo = $DB->getConnectionDB();
        $statement = $pdo->prepare($query);
        $statement->bindParam(1, $this->user);
        $statement->bindParam(2, $this->pass);
        $statement->execute();
    }
}
