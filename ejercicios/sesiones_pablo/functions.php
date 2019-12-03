<?php

function paintFormSession(
    $username = "",
    $email = "",
    $password = "",
    $repassword = "",
    $checkbox = [""],
    $hobbies = array(
        'kayaking',
        'bobsleigh',
        'canoeing'
    )
) {
    echo '<form action="./correctInputs.php" method="post" class="form">';
    echo '<legend>Register</legend>';
    echo '<label for="">Your full name*</label>';
    echo inputUsername($username);

    echo '<label for="">Password*</label>';
    echo inputPassword($password);
    echo inputRepassword($repassword);

    echo '<label for="">Email*</label>';
    echo inputEmail($email);

    echo inputCheckbox($hobbies, $checkbox);

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
    } else {
        return 2;
    }
}

function isValidPassword($password, $repassword)
{
    if ($password !== $repassword) {
        return 4;
    }
    if (strlen($password) < 5) {
        return 3;
    }
    if (
        !preg_match("/[a-z]/", $password) ||
        !preg_match("/[A-Z]/", $password) ||
        !preg_match("/[0-9]/", $password)
    ) {
        return 2;
    }

    return 1;
}

function inputUsername($username)
{
    if ($username === 2) {
        $style = 'border: 1px solid red';
        $error = 'Name already in use';
        $username = '';
    } elseif ($username === 3) {
        $style = 'border: 1px solid red';
        $error = 'Only letters from [a-z]';
        $username = '';
    } else {
        $style = '';
        $error = '';
    }

    $input = "<input type='text' name='username' placeholder='Name' value='$username' style='$style' required>" . "<span style='color:red;'>$error</span>";
    return $input;
}

function inputEmail($email)
{
    if ($email === 2) {
        $style = 'border: 1px solid red';
        $error = 'Not valid email';
    } else {
        $style = '';
        $error = '';
    }
    $input = "<input type='email' name='email' placeholder='Email' value='$email' style='$style' required>" . "<span style='color:red;'>$error</span>";
    return $input;
}

function inputPassword($password)
{
    if ($password === 2 || $password === 3 || $password === 4) {
        $style = 'border: 1px solid red';
    } else {
        $style = '';
    }
    $input = "<input type='text' name='password' placeholder='Password' required style='$style'>";
    return $input;
}

function inputRepassword($repassword)
{
    if ($repassword === 2) {
        $style = 'border: 1px solid red';
        $error = 'Password must include mayus and numbers';
    } elseif ($repassword === 3) {
        $style = 'border: 1px solid red';
        $error = 'Password length must be longer than 5 chars';
    } elseif ($repassword === 4) {
        $style = 'border: 1px solid red';
        $error = 'Passwords doesn\'t match';
    } else {
        $style = '';
        $error = '';
    }
    $input = "<input type='text' name='repassword' placeholder='Repassword' required style='$style'>" . "<span style='color:red;'>$error</span>";
    return $input;
}

function inputCheckbox($hobbies = [], $checkbox = [])
{
    $input = '';
    foreach ($hobbies as $hobby) {
        if (in_array($hobby, $checkbox)) {
            $input .= "<label><input type='checkbox' name='sports[]' value='$hobby' checked> $hobby</label><br>";
        } else {
            $input .= "<label><input type='checkbox' name='sports[]' value='$hobby'> $hobby</label><br>";
        }
    }
    return $input;
}
