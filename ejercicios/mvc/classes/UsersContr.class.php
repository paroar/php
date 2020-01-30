<?php

class UsersContr extends Users
{
    public function createUser($firstname, $lastname){
        $this->insertUser($firstname, $lastname);
    }

    public function getUsers($firstname){
        return $this->selectUser($firstname);
    }

    public function getAllUsers(){
        return $this->selectAllUsers();
    }

}
