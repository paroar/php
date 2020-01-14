<?php

function loginForm(){
    echo<<<EOD
    <form action="Controler/Login.php" method="POST">
        <input type="text" class="login-input" name="user" placeholder="user">
        <input type="password" class="login-input" name="pass" placeholder="password">
        <input type="submit" class="" value="submit" name="submit">
    </form>
EOD;
}

