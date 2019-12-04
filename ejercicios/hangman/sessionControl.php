<?php
session_start();
require_once("./functions.php");
$_SESSION["counter"] = 0;
$_SESSION["guessed"] = array();
$word = randomWord();
$_SESSION["word"] = $word;
$charWord = str_split($word);
$_SESSION["charWord"] = $charWord;
$_SESSION["unique"] = array_unique($charWord);
$_SESSION["abc"] = array(
    'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p',
    'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'ñ',
    'z', 'x', 'c', 'v', 'b', 'n', 'm'
);
header("Location: ./index.php");
