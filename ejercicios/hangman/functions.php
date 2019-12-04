<?php
function paintForm(){
    echo<<<EOD
    <form method="post" action="./hangman.php">
        <input type="text" name="username" id="" placeholder="Username">
        <input type="submit" value="Start">
    </form>
EOD;
}

function paintHangman($hangmanWord){
    echo "<div class='wrapper-hangman'>";
    foreach($hangmanWord as $char){
        echo "<span class='char'>$char</span>";
    }
    echo "</div>";
}

function paintKeyboard($keyboard){
    echo "<form class='wrapper-keyboard' action='./hangmanControl.php' method='post'>";
    foreach($keyboard as $char){
        echo "<input type='submit' class='key' name='$char' value='$char'>";
    }
    echo "</form>";
}

function randomWord(){
    require_once("./words.php");
    return $words[array_rand($words)];
}
?>

