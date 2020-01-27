<?php
function customError($errno, $errstr) {
   echo "<b>MyError:</b> [$errno] $errstr";
 }

function customException($code, $message, $file, $line, $context) {
    throw new ErrorException($code, $message, $file, $line, $context);
}