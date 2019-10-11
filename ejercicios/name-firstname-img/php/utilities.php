<?php

function formularie(){
    echo <<<EOD
    <form action="php/search_user.php" method="post">
        <input type="text" name="firstname" placeholder="Firstname">
        <input type="text" name="surname" placeholder="Surname">
        <input type="submit" name="submit">
    </form>
EOD;
}

function card($name, $firstname, $img){
    echo <<<EOD
    <img src="uploads/$img">
    <p>$name $firstname</p>
EOD;
}

function register(){
    echo <<<EOD
    <form action="php/upload_user.php" method="post" enctype="multipart/form-data">
        <input type="text" name="firstname" placeholder="Firstname">
        <input type="text" name="surname" placeholder="Surname">
        <input type="file" name="file" acepted="image/*">
        <input type="submit" name="submit">
    </form>
EOD;
}
?>