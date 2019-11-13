<?php
function switchLanguage () {
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
    return $language;
}


function viewDynamicForm($language=0,$bodyColor="red",$fontColor="white")
{
    require("setCookies.php");
    require("./languages.php");
    setCookies();
    $user = $arr[0][$language];
    $pass = $arr[1][$language];
    $login = $arr[2][$language];
    $bodyColor = $_COOKIE["backgroundColor"];
    $fontColor = $_COOKIE["fontColor"];
}
