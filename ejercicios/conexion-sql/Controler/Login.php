<?php
require_once("../Model/Login.php");
require_once("../Model/Customer.php");
require_once("../Model/ConnectDB.php");
session_start();

$user = new Login($_POST["email"], $_POST["pass"]);

$DB = ConnectDB::getInstance("../config/config.json");

if ($_POST["submit"] === "login") {
    if ($user->correctPass($DB)) {
        $customer = Customer::selectCustomer($DB, $_POST["email"]);
        $_SESSION["customer"] = serialize($customer);
        header('Location: ../usersPage.php');
    } else {
        header('Location: ../View/registerCustomer.php');
    }
} elseif ($_POST["submit"] === "register") {
    if ($_POST["repass"] === $_POST["pass"]) {
        if (Customer::isUserRegistered($DB, $_POST["email"])) {
            echo "User already registered, try another name";
            header('Refresh:2; url=../View/registerCustomer.php');
        } else {
            Customer::insertCustomer(
                $DB,
                $_POST["firstname"],
                $_POST["surname"],
                $_POST["email"],
                $_POST["pass"],
                $_POST["subscription"]
            );
            echo "User registered";
            header('Refresh:2; url=../index.php');
        }
    } else {
        echo "Passwords must be the same";
        header('Refresh:2; url=../View/registerCustomer.php');
    }
} else {
    header('Location: ../View/registerCustomer.php');
}