<?php
include_once("../Model/ConnectDB.php");
$DBlibro = ConnectDB::getInstance("../config/config.json");
if($_POST["submit"] === "insert"){
    $sqlInsertBook = "INSERT INTO `Book`(`isbn`, `title`, `author`, `stock`, `price`) VALUES (?,?,?,?,?)";
    $params = [$_POST["isbn"],$_POST["title"],$_POST["author"],$_POST["stock"], $_POST["price"]];
    $DBlibro->query($sqlInsertBook, $params);
}elseif ($_POST["submit"] === "delete") {
    echo "DELETE";
}