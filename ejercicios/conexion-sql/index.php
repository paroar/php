<?php
session_start();
include_once("Model/ConnectDB.php");
require_once("View/Login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $DBlibro = ConnectDB::getInstance("config/config.json");
    // $users = file_get_contents("insertUsers.sql");
    // $DBlibro->query($users);

    loginForm();


    ?>

</body>

</html>