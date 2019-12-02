<?php
session_start();
require_once("./php/functions.php")
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    if(isset($_SESSION["username"])){
        paintForm($_SESSION["username"]);
    }else{
        paintForm();
    }


    ?>

</body>

</html>