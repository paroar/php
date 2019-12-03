<?php
session_start();
require_once("./functions.php");
$_SESSION["counter"] = 0;
$word = randomWord();
$_SESSION["word"] = $word;
$charWord = explode("", $word);
$_SESSION["wordChars"] = array_unique($charWord);
echo $_SESSION["word"];
//header("Location: ./hangman.php");
?>