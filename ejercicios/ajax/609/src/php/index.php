<?php

require '../../vendor/autoload.php';
use Model\Book;

error_reporting(0);

$books = new Book();
$arr = $books->searchPattern("duck");
if(isset($_GET["search"])){
    $arr = $books->searchPattern($_GET["search"]);
    echo json_encode($arr,true);
}elseif ($_GET["delete"]) {
    echo $books->deleteBook($_GET["delete"]);
}