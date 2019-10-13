<?php
require('users.php');
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $surname=$_POST['surname'];

    for ($i = 0; $i < count($users); $i++) {
        if($users[$i][0]==$firstname && $users[$i][1] == $surname){
            header("Location: ../index.php?firstname=$firstname&surname=$surname&img={$users[$i][2]}");
        }
    }
    echo "Not found, redirecting";
    header("Refresh: 100; url=../index.php");
}