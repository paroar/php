<?php
session_start();
include_once("../Model/ConnectDB.php");
require_once("../Model/Borrowed_books.php");
require_once("../Model/Customer.php");


$DB = ConnectDB::getInstance("../config/config.json");

$customer = unserialize($_SESSION["customer"]);

if($_POST["submit"] === "return"){
    Borrowed_books::returnBorrowed($DB, $customer->getId(), $_POST["book_id"]);
}
header("Location: ../View/Borrowed_books/Borrowed_books.php");
