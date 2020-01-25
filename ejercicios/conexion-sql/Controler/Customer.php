<?php
session_start();
require_once("../Model/ConnectDB.php");
require_once("../Model/Customer.php");

$DB = ConnectDB::getInstance("../config/config.json");
$pdo = $DB->getConnectionDB();

$option = $_POST["submit"];
switch ($option) {
    case "insert":     
        Customer::insertCustomer($pdo, $_POST["firstname"], $_POST["surname"], $_POST["email"], $_POST["pass"], $_POST["subscription"]);
        break;
    case 'delete':
        Customer::deleteCustomer($pdo, $_POST["id"]);
        break;
}

header("Location: ../View/Customer/Customer.php");
