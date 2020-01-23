<?php
require_once("../Model/ConnectDB.php");
class Login
{
    private $email;
    private $pass;

    public function __construct($email, $pass)
    {
        $this->email = $email;
        $this->pass = $pass;
    }

    public function getemail()
    {
        return $this->email;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function correctPass($DB)
    {
        try {
            $query = "SELECT * FROM Customer WHERE email=:email";
            $pdo = $DB->getConnectionDB();
            $statement = $pdo->prepare($query);
            $statement->bindParam(":email", $this->email);
            $statement->execute();
            $arr = $statement->fetch();
            if ($arr["pass"] === $this->getPass()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo 'Excepción capturada en Model/Login/correctPass:  ', $e->getMessage(), "\n";
        }
    }
}
