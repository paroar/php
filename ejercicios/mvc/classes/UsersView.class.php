<?php

class UsersView extends UsersContr
{

    public function index(){
        $users = $this->getAllUsers();
        $this->showUsers($users);
    }

    public function showUsers($users)
    {
        echo "<table>";
        foreach ($users as $row) {
            echo "<tr>";
            foreach ($row as $key => $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }


}
