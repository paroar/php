<?php
session_start();
$charPos = array_search($_POST["char"],$_SESSION["abc"]);
$_SESSION["abc"][$charPos] = " ";
$char = '/'.$_POST["char"].'/';
if(preg_match($char,$_SESSION["word"])){
    array_push($_SESSION["guessed"], $_POST["char"]);
    $charPosUnique = array_search($_POST["char"],$_SESSION["unique"]);
    array_splice($_SESSION["unique"],$charPosUnique, 1);
    if(empty($_SESSION["unique"])){
        header("Location: ./end.php?end=win");
    }else{
        header("Location: ./index.php");
    }
}else{
    $_SESSION["counter"] += 1;
    if($_SESSION["counter"] > 5){
        header("Location: ./end.php?end=lose");
    }else{
        header("Location: ./index.php");
    }
}