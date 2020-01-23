<?php
session_start();
include_once("../Model/ConnectDB.php");
require_once("../Model/Book.php");
require_once("../Model/Sale.php");
require_once("../Model/Customer.php");
require_once("../Model/Borrowed_books.php");
require_once("../Model/Sale_book.php");

$DB = ConnectDB::getInstance("../config/config.json");

$customer = unserialize($_SESSION["customer"]);

if ($_POST["submit"] === "insert") {
    $book = new Book($_POST["isbn"], $_POST["title"], $_POST["author"], $_POST["stock"], $_POST["price"]);
    $_SESSION["book"] = serialize($book);
    $book->insertBook($DB);
}
if ($_POST["submit"] === "delete") {
    Book::deleteBook($DB, $_POST["id"]);
}
if ($_POST["submit"] === "buy") {
    Book::saleBook($DB, $_POST["id"], $_POST["amount"]);

    $date = new DateTime();
    $dateFormat = $date->format("Y-m-d H:i:s");
    $sale_id = Sale::insertSale($DB, $customer->getId(), $dateFormat);

    Sale_book::insertSaleBook($DB, $_POST["id"], $sale_id, $_POST["amount"]);
}
if ($_POST["submit"] === "borrow") {
    $date = new DateTime();
    $startDateFormat = $date->format("Y-m-d H:i:s");
    $interval = new DateInterval('P1W');
    $nextWeek = $date->add($interval);
    $endDateFormat = $nextWeek->format('Y-m-d H:i:s');
    Borrowed_books::insertBorrowed($DB, $customer->getId(), $_POST["id"], $startDateFormat, $endDateFormat);
}
if($customer->getsubscription() === "basic"){
    header("Location: ../View/Book/basicBook.php");
}elseif($customer->getsubscription() === "premium"){
    header("Location: ../View/Book/premiumBook.php");
}else{
    echo "controller/book";
}
