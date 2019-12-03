<?php
session_start();
require_once("./functions.php");
$_SESSION["counter"] = 0;
$word = randomWord();
$_SESSION["word"] = $word;
$charWord = str_split($word, "");
//$_SESSION["wordChars"] = array_unique($charWord);
printf($charWord);
echo $_SESSION["word"];
//header("Location: ./hangman.php");
?>