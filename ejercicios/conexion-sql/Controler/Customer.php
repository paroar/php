<?php
session_start();
require_once("../Model/ConnectDB.php");
require_once("../Model/Customer.php");

$DB = ConnectDB::getInstance("../config/config.json");

if ($_POST["submit"] === "insert") {
    Customer::insertCustomer($DB, $_POST["id"],$_POST["firstname"],$_POST["surname"],$_POST["email"],$_POST["pass"],$_POST["subscription"]);
}
if ($_POST["submit"] === "delete") {
    Customer::deleteCustomer($DB, $_POST["id"]);
}


header("Location: ../View/Customer/Customer.php");

?>
