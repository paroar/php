<?php
session_start();
require_once("./functions.php");
$_SESSION["counter"] = 0;
$word = randomWord();
$_SESSION["word"] = $word;
$charWord = str_split($word);
$_SESSION["charWord"] = $charWord;
$uniqueChar = array_unique($charWord);
$_SESSION["charUniqueWord"] = array_unique($charWord);
$_SESSION["abc"] = array(
    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',
    'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q',
    'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
);
$_SESSION["output"] = paintHangman($_SESSION["charWord"]);
header("Location: ./hangman.php");
