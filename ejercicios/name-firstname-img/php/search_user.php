<?php
require('users.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $firstname=$_POST['firstname'];

    for ($i = 0; $i < count($users); $i++) {
        if($users[$i][0]==$name && $users[$i][1] == $firstname){
            header("Location: ../index.php?name=$name&firstname=$firstname&img={$users[$i][2]}");
        }
    }
    echo "Not found, redirecting";
    header("Refresh: 3; url=../index.php");
}