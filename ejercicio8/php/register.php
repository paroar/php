<?php

require "./users.php";

if (
    !empty($_REQUEST['newusername']) &&
    !empty($_REQUEST['newpassword']) &&
    !empty($_REQUEST['language']) &&
    !empty($_REQUEST['gender']) &&
    !empty($_REQUEST['nationality']) &&
    !empty($_REQUEST['hobby']) &&
    $_REQUEST['repassword'] === $_REQUEST['repassword']
) {
    $name = $_REQUEST['newusername'];
    $pass = $_REQUEST['newpassword'];
    $repass = $_REQUEST['repassword'];
    $sex = $_REQUEST['gender'];
    $language = $_REQUEST['language'];
    $nation = $_REQUEST['nationality'];
    $hobby = $_REQUEST['hobby'];
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
        echo "language: " . implode(", ", $users[$name]['language']) . "<br>";
        echo "nationality: " . implode(", ", $users[$name]['nationality']) . "<br>";
        echo "hobbies: " . implode(", ", $users[$name]['hobbies']);
    } else {
        echo "Username already used, choose another one";
    }
} else {
    echo "Error filling the fields";
}
