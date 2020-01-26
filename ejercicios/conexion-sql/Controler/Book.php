<?php
session_start();
include_once("../Model/ConnectDB.php");
require_once("../Model/Book.php");
require_once("../Model/Sale.php");
require_once("../Model/Customer.php");
require_once("../Model/Borrowed_books.php");
require_once("../Model/Sale_book.php");

$DB = ConnectDB::getInstance("../config/config.json");
$pdo = $DB->getConnectionDB();

$customer = unserialize($_SESSION["customer"]);

$err = [];
$submit = $_POST["submit"];
switch ($submit) {
    case "insert":
        $book = new Book(
            $_POST["isbn"],
            $_POST["title"],
            $_POST["author"],
            $_POST["stock"],
            $_POST["price"]
        );
        $err = $book->insertBook($pdo);
    break;
    case "delete":
        $err = Book::deleteBook($pdo, $_POST["id"]);
    break;
    case "buy":
        $err = Book::updateStockBook($pdo, $_POST["id"], $_POST["amount"]);

        $date = new DateTime();
        $dateFormat = $date->format("Y-m-d H:i:s");
        $sale_id = Sale::insertSale($pdo, $customer->getId(), $dateFormat);
    
        Sale_book::insertSaleBook($pdo, $_POST["id"], $sale_id, $_POST["amount"]);
    break;
    case "borrow":
        $date = new DateTime();
        $startDateFormat = $date->format("Y-m-d H:i:s");
        $interval = new DateInterval('P1W');
        $nextWeek = $date->add($interval);
        $endDateFormat = $nextWeek->format('Y-m-d H:i:s');
        Borrowed_books::insertBorrowed($pdo, $customer->getId(), $_POST["id"], $startDateFormat, $endDateFormat);
    break;
}

$_SESSION["err"] = serialize($err);

if ($customer->getSubscription() === "basic") {
    header("Location: ../View/Book/basicBook.php");
} elseif ($customer->getsubscription() === "premium") {
    header("Location: ../View/Book/premiumBook.php");
} else {
    echo "controller/book";
}
