<?php

function paintFormSession($username = "", $email = "")
{
    echo '<form action="./correctInputs.php" method="post" class="form">';
    echo '<legend>Register</legend>';
    echo '<label for="">Your full name* (only letters)</label>';
    echo inputUsername($username);

    echo '<label for="">Password* (must include number & mayus)</label>';
    echo inputPassword();
    echo inputRepassword();

    echo '<label for="">Email*</label>';
    echo inputEmail($email);

    echo '<input type="submit" name="submit" value="Register" class="submit">';
    echo '</form>';
}

function loadJson()
{
    $file =  file_get_contents("./usersDb.json");
    $arr = json_decode($file, true);
    return $arr["users"];
}

function isValidUsername($username)
{

    if (preg_match("/[^a-z]/", $username)) {
        return 3;
    };
    $users = loadJson();
    foreach ($users as $name => $pass) {
        if ($name === $username) {
            return 2;
        }
    }
    return 1;
}

function isValidEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 1;
    } elseif ($email === "") {
        return 2;
    } else {
        return 3;
    }
}

function isValidPassword($password, $repassword)
{
    if (
        preg_match("/[a-z]/", $password) &&
        preg_match("/[A-Z]/", $password) &&
        preg_match("/[0-9]/", $password)
    ) {
        if (strlen($password) > 5 && $password === $repassword) {
            return true;
        }
    }
    return false;
}

function inputUsername($username)
{
    if ($username === '') {
        $style = 'border: 1px solid red';
    } else {
        $style = '';
    }

    $input = "<input type='text' name='username' placeholder='Name' value='$username' style='$style' required>";
    return $input;
}

function inputEmail($email)
{
    if ($email === "") {
        $style = 'border: 1px solid red';
    } else {
        $style = '';
    }
    $input = "<input type='email' name='email' placeholder='Email' value='$email' style='$style' required>";
    return $input;
}

function inputPassword()
{
    $input = "<input type='text' name='password' placeholder='Password' required>";
    return $input;
}

function inputRepassword()
{
    $input = "<input type='text' name='repassword' placeholder='Repassword' required>";
    return $input;
}
