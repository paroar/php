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
        $sql = "SELECT * FROM users WHERE user_firstname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname]);
        return $stmt->fetchAll();
    }

    protected function insertUser($firstname, $lastname)
    {
        $sql = "INSERT INTO users(user_firstname, user_lastname) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
    }
}
