<?php
function paintForm(){
    echo<<<EOD
    <form method="post" action="./index.php">
        <input type="text" name="username" id="" placeholder="Username">
        <input type="submit" value="Start">
    </form>
EOD;
}

function paintHangman($hangmanWord,$arr){
    echo "<div class='wrapper-hangman'>";
    foreach($hangmanWord as $char){
        if(!empty($arr) && in_array($char, $arr)){
            echo "<span class='char'>$char</span>";
        }else{
            echo "<span class='char'></span>";
        }
    }
    echo "</div>";
}

function paintKeyboard($keyboard){
    echo "<form class='wrapper-keyboard' action='./hangmanControl.php' method='post'>";
    foreach($keyboard as $char){
        if($char === " "){
            echo "<input type='submit' class='key disabled' name='char' value='$char' disabled>";
        }else{
            echo "<input type='submit' class='key' name='char' value='$char'>";
        }
    }
    echo "</form>";
}

function guessed(){

}


function randomWord(){
    require_once("./words.php");
    return $words[array_rand($words)];
}
?>

