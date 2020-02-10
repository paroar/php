<?php

require '../../vendor/autoload.php';
use Model\Book;

error_reporting(0);

$books = new Book();
if (isset($_GET["search"])) {
    $arr = $books->searchPattern($_GET["search"]);
    echo json_encode($arr, true);
} elseif ($_GET["delete"]) {
    echo $books->deleteBook($_GET["delete"]);
} elseif ($_GET["book"]) {
    $arr = $books->searchBook($_GET["book"]);
    echo json_encode($arr, true);
} elseif ($_POST["update"]) {
    $error = $books->updateBook($_POST["id"], $_POST["title"], $_POST["author"], $_POST["stock"], $_POST["price"]);
    if($error == 0){
        echo $_POST["id"];
    }else{
        echo $error;
    }
} elseif ($_POST["insert"]) {
    $id = $books->insertBook($_POST["isbn"],$_POST["title"], $_POST["author"], (int)$_POST["stock"], (int)$_POST["price"]);
    $arr = $books->searchBook($id);
    echo json_encode($arr, true);
} else {
    echo "else";
}