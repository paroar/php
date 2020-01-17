<?php
require_once("../Model/Login.php");
require_once("../Model/Customer.php");
require_once("../Model/ConnectDB.php");
session_start();

$user = new Login($_POST["email"], $_POST["pass"]);
$_SESSION["user"] = serialize($user);

$DB = ConnectDB::getInstance("../config/config.json");

if($_POST["submit"] === "register" && $_POST["repass"] === $_POST["pass"]){
    $customer = new Customer($_POST["firstname"], $_POST["surname"], $_POST["email"], $_POST["pass"], $_POST["subscription"]);
    $_SESSION["customer"] = serialize($customer);
    $customer->insertCustomer($DB);
    header('Location: ../index.php');
}elseif ($user->correctPass($DB)) {
    header('Location: ../usersPage.php');
}else {
    header('Location: ../View/registerCustomer.php');
}

