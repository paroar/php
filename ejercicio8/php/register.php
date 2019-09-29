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
        echo "Welcome $name";
        echo "$users[$name]['password']";
        echo "$users[$name]['gender']";
        echo "$users[$name]['language']";
        echo "$users[$name]['nationality']";
        echo "$users[$name]['hobbies']";
    } else {
        echo "Username already used, choose another one";
    }
} else {
    echo "Password, must be equal";
}
