<?php
function paintForm($username=""){
    echo<<<EOD
    <form action="./php/storingSession.php" method="post" class="form">
        <legend>Register</legend>
        <label for="">Your full name</label>
        <input type="text" name="username" placeholder="Name" value=$username>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="repassword" placeholder="Retype Password">
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Email">
        <input type="submit" name="submit" value="Register">
    </form>
EOD;
}

function loadJson()
{
    $file =  file_get_contents("../usersDB.json");
    $arr = json_decode($file, true);
    return $arr;
}

function validUsername($username){
    
}
?>