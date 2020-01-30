<?php

class Users extends Dbh
{

    protected function selectAllUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    protected function selectUser($firstname)
    {
        $sql = "SELECT * FROM users WHERE users_firstname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname]);
        return $stmt->fetchAll();
    }

    protected function insertUser($firstname, $lastname)
    {
        $sql = "INSERT INTO users(users_firstname, users_lastname) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
    }
}
