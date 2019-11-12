<?php
function setCookies(){
    setcookie("language", $_POST["language"], time()+3600);
    setcookie("backgroundColor", $_POST["backgroundColor"], time()+3600);
    setcookie("fontColor", $_POST["fontColor"], time()+3600);
}