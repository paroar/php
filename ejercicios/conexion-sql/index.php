<?php
session_start();
include_once("Model/ConnectDB.php");
include_once("Model/Customer.php");
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

if (isset($_SESSION["customer"])) {
    $customer = unserialize($_SESSION["customer"]);
    $subscription = $customer->getsubscription();

    if ($subscription === "basic") {
        header('Location: ./View/basicUsersPage.php');
    } elseif ($subscription === "premium") {
        header('Location: ./View/premiumUsersPage.php');
    } else {
        echo "No subscription";
    }
}

try {
    $DB = ConnectDB::getInstance("./config/config.json");

    $query = file_get_contents("./SQL/libros.sql");
    $DB->exec($query);
    loginForm();
} catch (Error $e) {
    echo "ERROR" . $e->getMessage();
}

    ?>
</body>

</html>