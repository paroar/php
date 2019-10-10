<?php

function formularie(){
    echo <<<EOD
    <form action="php/process.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="firstname" placeholder="Firstname">
        <input type="submit" name="submit">
    </form>
EOD;
}

function card($name, $firstname, $img){
    echo <<<EOD
    <img src="uploads/$img"><br>
    $name $firstname
EOD;
}
?>