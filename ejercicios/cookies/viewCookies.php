<?php
$str = file_get_contents("./text.json");
$arr = json_decode($str, true);

highlight_string(var_export($arr, true));

if (isset($_COOKIE["language"])) {
    $language = 0;
    switch ($_COOKIE["language"]) {
        case "english":
            $language = 0;
            break;
        case "spanish":
            $language = 1;
    }
}

function viewDynamicForm($language)
{
    require("./languages.php");
    $user = $arr[0][$language];
    $pass = $arr[1][$language];
    $login = $arr[2][$language];
    $bodyColor = $_COOKIE["backgroundColor"];
    $fontColor = $_COOKIE["fontColor"];
    echo <<<EOD
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
    <div style="display:flex;">
    
<form action="" method="POST" style="background-color:$bodyColor;padding:5rem">
<h2 style="color:$fontColor">Login</h2>
    <input type="text" placeholder="$user"><br>
    <input type="text" placeholder="$pass"><br>
    <input type="submit" value="$login">
</form>
</div> 

EOD;
}

viewDynamicForm($language);
