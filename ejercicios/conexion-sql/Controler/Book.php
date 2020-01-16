<?php
include_once("../Model/ConnectDB.php");
$DBlibro = ConnectDB::getInstance("../config/config.json");

var_dump($_POST);
// if ($_POST["submit"] === "insert") {
//     $sqlInsertBook = "INSERT INTO `Book`(`isbn`, `title`, `author`, `stock`, `price`) VALUES (isbn=:isbn,title=:title,author=:author,stock=:stock,price=:price)";
//     $params = [":isbn" => $_POST["isbn"], ":title" => $_POST["title"], "author" => $_POST["author"], ":stock" => $_POST["stock"], ":price" => $_POST["price"]];
//     $DBlibro->query($sqlInsertBook, $params);
// } elseif ($_POST["submit"] === "delete") {
//     $sqlInsertBook = "DELETE FROM `Book` WHERE ";
//     $params = [$_POST["isbn"], $_POST["title"], $_POST["author"], $_POST["stock"], $_POST["price"]];
//     $DBlibro->query($sqlInsertBook, $params);
//     echo "DELETE";
// }
