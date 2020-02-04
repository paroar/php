<?php

//require '../../vendor/autoload.php';
//use Model\Book;
error_reporting(0);

require "Model/Book.php";

if(isset($_POST["searchInputForm"])){
    $books = new Book();
    $arr = $books->searchPattern($_POST["searcInputForm"]);
    //echo json_encode($_POST, true);
    //echo json_encode($arr, true);
    echo json_encode($arr,true);
}else{
    $books = new Book();
    $arr = $books->searchPattern("js");
    
    var_dump($arr);
    
    //echo json_encode($arr, true);    
    //echo json_encode(["id"=>3], true);
}