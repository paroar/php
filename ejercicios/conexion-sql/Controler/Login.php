<?php
require_once("../Model/Login.php");
require_once("../Model/Customer.php");
require_once("../Model/ConnectDB.php");
session_start();

$user = new Login($_POST["email"], $_POST["pass"]);

$DB = ConnectDB::getInstance("../config/config.json");
$pdo = $DB->getConnectionDB();

$submit = $_POST["submit"];
switch ($submit) {
    case "login":
        if ($user->correctPass($pdo)) {
            $arrCustomer = Customer::selectCustomer($pdo, $_POST["email"])[0];
            $customer = new Customer(
                $arrCustomer["id"],
                $arrCustomer["firstname"],
                $arrCustomer["surname"],
                $arrCustomer["email"],
                $arrCustomer["pass"],
                $arrCustomer["subscription"]
            );
            $_SESSION["customer"] = serialize($customer);
            $subscription = $customer->getsubscription();
            if ($subscription === "basic") {
                header('Location: ../View/basicUsersPage.php');
            } elseif ($subscription === "premium") {
                header('Location: ../View/premiumUsersPage.php');
            } else {
                header('Location: ../index.php');
            }
        } else {
            header('Location: ../View/registerCustomer.php');
        }
    break;
    case "register":
        if ($_POST["repass"] === $_POST["pass"]) {
            if (Customer::isUserRegistered($pdo, $_POST["email"])) {
                echo "User already registered, try another name";
                header('Refresh:2; url=../View/registerCustomer.php');
            } else {
                Customer::insertCustomer(
                    $pdo,
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
    break;
    default:
    header('Location: ../View/registerCustomer.php');
}
