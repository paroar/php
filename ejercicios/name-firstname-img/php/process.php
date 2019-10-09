<?php
require('users.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $firstname=$_POST['firstname'];

    foreach($users as &$x){
        if($x[0]==$name && $x[1] == $firstname){
            echo "$name $firstname " . "<img src='$x[3]'>";
        }
    }

}
/*
. "<img src='$x[2]'/>"*/