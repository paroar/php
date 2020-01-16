<?php

function loginForm(){
    echo<<<EOD
    <h1>LOGIN FORM</h1>
    <form action="Controler/Login.php" method="POST">
        <input type="text" class="login-input" name="user" placeholder="user">
        <input type="password" class="login-input" name="pass" placeholder="password">
        <input type="submit" class="" value="login" name="submit">
    </form>
EOD;
}

function registerForm(){
    echo<<<EOD
    <h1>REGISTER FORM</h1>
    <form action="Controler/Login.php" method="POST">
        <input type="text" class="login-input" name="user" placeholder="user">
        <input type="password" class="login-input" name="pass" placeholder="password">
        <input type="password" class="login-input" name="repass" placeholder="repassword">
        <input type="submit" class="" value="register" name="submit">
    </form>
EOD;
}

