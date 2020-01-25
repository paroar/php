<?php
session_start();
require_once("customerFunctions.php");
require_once("../../Model/ConnectDB.php");
require_once("../../Model/Customer.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>

<body>
    <?php
    $DB = ConnectDB::getInstance("../../config/config.json");
    $pdo = $DB->getConnectionDB();

    $arr = Customer::selectAllCustomer($DB);
    CustomerForm();
    tableCustomer($arr, "../../Controler/Customer.php");
    ?>
</body>

</html>