<?php
function paintForm(){
    echo<<<EOD
    <form method="post" action="./hangman.php">
        <input type="text" name="username" id="" placeholder="Username">
        <input type="submit" value="Start">
    </form>
EOD;
}

function paintHangman(){
    echo<<<EOD
    <img src="./animations/basic.gif" alt="">
EOD;
}

function randomWord(){
    require_once("./words.php");
    return $words[array_rand($words)];
}
?>

