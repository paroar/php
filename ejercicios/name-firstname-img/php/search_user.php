<?php
require('utilities.php');
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $surname=$_POST['surname'];
    $files = scandir('../uploads');
    $pattern = "";
    if(isIn($firstname,$surname)){
        $file = isIn($firstname,$surname);
        header("Location: ../index.php?firstname=$firstname&surname=$surname&img=$file");
    }
    echo "Not found, redirecting";
    header("Refresh: 3; url=../index.php");
}