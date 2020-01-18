<?php
require_once("../Model/Login.php");
require_once("../Model/Customer.php");
require_once("../Model/ConnectDB.php");
session_start();

$user = new Login($_POST["email"], $_POST["pass"]);
$_SESSION["user"] = serialize($user);

$DB = ConnectDB::getInstance("../config/config.json");

if ($_POST["submit"] === "register" && $_POST["repass"] === $_POST["pass"]) {
    Customer::insertCustomer($DB, $_POST["firstname"], $_POST["surname"], $_POST["email"], $_POST["pass"], $_POST["subscription"]);
    header('Location: ../index.php');
} elseif ($user->correctPass($DB)) {
    $customer = Customer::selectCustomer($DB, $_POST["email"]);
    $_SESSION["customer"] = serialize($customer);
    header('Location: ../usersPage.php');
} else {
    header('Location: ../View/registerCustomer.php');
}
