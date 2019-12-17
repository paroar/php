<?php
session_start();
require_once("./functions.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if(!isset($_SESSION["counter"])){
        header("Location: ./sessionControl.php");
    }else{
        echo "<img src='./img/hb$_SESSION[counter].png' class='hb'>";
        paintHangman($_SESSION["charWord"], $_SESSION["guessed"]);
        paintKeyboard($_SESSION["abc"]);
    }
    ?>
</body>
</html>