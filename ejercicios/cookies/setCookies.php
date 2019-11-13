<?php
function setCookies()
{
    setcookie("language", $_POST["language"], time());
    setcookie("backgroundColor", $_POST["backgroundColor"], time());
    setcookie("fontColor", $_POST["fontColor"], time());
}
