<?php
session_start();
include_once("../Model/ConnectDB.php");
require_once("../Model/Book.php");

$DB = ConnectDB::getInstance("../config/config.json");

if ($_POST["submit"] === "insert") {
    $book = new Book($_POST["isbn"], $_POST["title"], $_POST["author"], $_POST["stock"], $_POST["price"]);
    $_SESSION["book"] = serialize($book);
    $book->insertBook($DB);
}
if ($_POST["submit"] === "view") {
    $arr = Book::selectAllBook($DB);
    $_SESSION["tableBook"] = $arr;
}
if ($_POST["submit"] === "delete") {
    $arr = Book::deleteBook($DB, $_POST["id"]);
}
header("Location: ../View/Book/Book.php");

?>
