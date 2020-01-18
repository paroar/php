<?php
session_start();
include_once("../Model/ConnectDB.php");
require_once("../Model/Book.php");

$DB = ConnectDB::getInstance("../config/config.json");
$customer = unserialize($_SESSION["customer"]);


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
    Sale::insertSale($DB, $customer->getId , new DateTime());
}
if ($_POST["submit"] === "borrow") {
}
$arr = Book::selectAllBook($DB, $_POST["id"]);
$_SESSION["tableBook"] = $arr;
header("Location: ../View/Book/Book.php");
