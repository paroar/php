<?php
highlight_string(var_export($_COOKIE, true));

if(isset($_COOKIE["language"])){
    $language = 0;
    switch($_COOKIE["language"]){
        case "english": $language = 0;
            break;
        case "spanish": $language = 1;
    }

}

function viewDynamicForm($language){

    require("./languages.php");
    $user = $arr[0][$language];
    $pass = $arr[1][$language];
    $login = $arr[2][$language];
    $bodyColor = $_COOKIE["bodyColor"];
    $fontColor = $_COOKIE["fontColor"];
    echo<<<EOD
    <body style="background-color:$bodyColor;color:$fontColor">
<form action="" method="POST">
asdasd
    <input type="text" placeholder="$user"><br>
    <input type="text" placeholder="$pass"><br>
    <input type="submit" value="$login">
</form> 
</body>
EOD;
}

viewDynamicForm($language);