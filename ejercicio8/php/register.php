<?php

require "./users.php";
$name = $_REQUEST['newusername'];
$pass = $_REQUEST['newpassword'];
$repass = $_REQUEST['repassword'];
$sex = $_REQUEST['gender'];
$language = $_REQUEST['language'];
$nation = $_REQUEST['nation'];
$hobby = $_REQUEST['hobby'];

if (isset($name) && isset($pass) && $pass === $repass) {
    if (!array_key_exists($name, $users)) {
        $users[$name] = [
            "password" => $pass,
            "gender" => $sex,
            "language" => $language,
            "nationality" => $nation,
            "hobbies" => $hobby
        ];
        echo "username: $name <br>";
        echo "password: " . $users[$name]['password'] . "<br>";
        echo "gender: " . $users[$name]['gender'] . "<br>";
        echo "language: " . $users[$name]['language'] . "<br>";
        echo "nationality: " . $users[$name]['nationality'] . "<br>";
        echo "hobby: " . $users[$name]['hobbies'];
    } else {
        echo "Username already used, choose another one";
    }
} else {
    echo "Password, must be equal";
}
