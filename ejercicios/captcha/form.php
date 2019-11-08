<?php
function generateRandomString($length)
{
    $include_chars = "23458ABCDEFGHJKNQRSTUVXYZ";
    $charLength = strlen($include_chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $include_chars[rand(0, $charLength - 1)];
    }
    return $randomString;
}

define("AUTH", generateRandomString(6));