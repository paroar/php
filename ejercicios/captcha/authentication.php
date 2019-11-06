<?php
if(!isset($_POST['submit'])){
    $input = $_POST['input'];
    $code = $_GET['arr'];
    print_r($code);
    if($input === $code[1]){
        echo "HUMANO";
    }else{
        echo "ROBOT";
    }
}