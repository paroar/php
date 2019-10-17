<?php

if(isset($_POST['submit'])){

$action = $_POST['submit'];
$word = $_POST['word'];
$textarea = $_POST['textarea'];

switch($action){
    case "highlight":
        $textarea = str_replace($word, "<span style={background-color:yellow}>$replace</span>", $textarea);
        break;
    case "replace":
        $replace = $_POST['replace'];
        $textarea = str_replace($word, $replace, $textarea);
        break;
    case "deleteAll":
        $textarea = str_replace($word, "", $textarea);
        break;
}

echo $textarea;
header("Location: ../index.php?submit=success&word=$word&replace=$replace&textarea=$textarea");
}