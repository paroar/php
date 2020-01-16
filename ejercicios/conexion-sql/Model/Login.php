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

    public function correctPass($DBlibro)
    {
        $query = "SELECT * FROM User WHERE user=:user";
        $params = [':user' => $this->getUser()];
        $arr = $DBlibro->query($query, $params);
        if ($arr["pass"] === $this->getPass()) {
            return true;
        } else {
            return false;
        }
    }

    public function registerUser($DBlibro)
    {
        $sqlInsertBook = "INSERT INTO `User`(user, pass) VALUES (:user,:pass)";
        $params = [":user" => $this->getUser(), ":pass" => $this->getPass()];
        $DBlibro->query($sqlInsertBook, $params);
        $statement->bindParam(":user", $user);
        $statement->bindParam(":pass", $pass);
    }

    public function __toString()
    {
        return "username: $_POST[user] <br> password: $_POST[pass] <br>";
    }
}
