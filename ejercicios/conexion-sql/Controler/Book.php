<?php
session_start();
include_once("../Model/ConnectDB.php");
require_once("../Model/Book.php");
require_once("../Model/Sale.php");
require_once("../Model/Customer.php");

$DB = ConnectDB::getInstance("../config/config.json");
$arrCustomer = unserialize($_SESSION["customer"])[0];

$customer = new Customer($arrCustomer["id"], $arrCustomer["firstname"], $arrCustomer["surname"], $arrCustomer["email"], $arrCustomer["pass"], $arrCustomer["subscription"]);

if ($_POST["submit"] === "insert") {
    $book = new Book($_POST["isbn"], $_POST["title"], $_POST["author"], $_POST["stock"], $_POST["price"]);
    $_SESSION["book"] = serialize($book);
    $book->insertBook($DB);
}
if ($_POST["submit"] === "delete") {
    $arr = Book::deleteBook($DB, $_POST["id"]);
}
if ($_POST["submit"] === "buy") {
    Book::saleBook($DB, $_POST["id"]);
    $date = new DateTime();
    $dateFormat = $date->format("Y-m-d H:i:s");
    Sale::insertSale($DB, $customer->getId(), $dateFormat);
}
if ($_POST["submit"] === "borrow") {
}
$arr = Book::selectAllBook($DB, $_POST["id"]);
$_SESSION["tableBook"] = $arr;
header("Location: ../View/Book/Book.php");
