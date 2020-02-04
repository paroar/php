<?php

//require '../../vendor/autoload.php';
//use Model\Book;
error_reporting(0);

require "Model/Book.php";

if(isset($_REQUEST["search"])){
    $books = new Book();
    $arr = $books->searchPattern($_REQUEST["search"]);
    echo json_encode($arr,true);
}