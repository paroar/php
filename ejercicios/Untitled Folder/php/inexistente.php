<?php
session_start();

$error = unserialize($_SESSION["error"]);
echo "<b>Message: </b>" . $error->getMessage() . "<br>"; 
echo "<b>File: </b>" . $error->getFile() . "<br>"; 
echo "<b>Line: </b>" . $error->getLine() . "<br>";
echo "<pre>";
echo $error->getTraceAsString();
echo "</pre>";