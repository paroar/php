<?php
function customError($errno, $errstr) {
   echo "<b>MyError:</b> [$errno] $errstr";
 }

function customException($exception) {
   echo "<b>MyException:</b>" . $exception . "<b>END</b>";
 }