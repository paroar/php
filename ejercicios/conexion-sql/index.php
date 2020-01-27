<?php
session_start();
include_once("Model/ConnectDB.php");
require_once("View/Login.php");
require_once("./php/commonFunctions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
    <?php
    set_exception_handler("customException");

    $DB = ConnectDB::getInstance("./config/config.json");

    $query = file_get_contents("./SQL/libros.sql");
    $DB->exec($query);
    loginForm();
    ?>
</body>

</html>