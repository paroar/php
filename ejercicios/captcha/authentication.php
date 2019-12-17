<?php
if(isset($_POST['submit'])){
    $input = $_POST['input'];
    $auth = $_POST['auth'];
    if($input === $auth){
        echo "HUMANO";
    }else{
        echo "ROBOT";
    }
}