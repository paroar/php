<?php

require "Book.php";

if(isset($_POST["searchInputForm"])){
    $pattern = $_POST["searchInputForm"];

    $books = new Book();
    $arr = $books->searchPattern($pattern);
    
    echo json_encode($arr);
}else{
    echo json_encode($_POST);
}