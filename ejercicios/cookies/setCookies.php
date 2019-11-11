<?php
function setCookies(){
    setcookie("language", $_POST["language"], time()+3600);
    setcookie("bodyColor", $_POST["bodyColor"], time()+3600);
    setcookie("fontColor", $_POST["fontColor"], time()+3600);
}
?>