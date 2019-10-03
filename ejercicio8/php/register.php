<?php

require("./users.php");
include("./register.php");
if (
    !empty($_REQUEST['newusername']) &&
    !empty($_REQUEST['newpassword']) &&
    !empty($_REQUEST['language']) &&
    !empty($_REQUEST['gender']) &&
    !empty($_REQUEST['nationality']) &&
    !empty($_REQUEST['hobby']) &&
    $_REQUEST['repassword'] === $_REQUEST['repassword']
) {
    if (!array_key_exists($newname, $users)) {
        $users[$newname] = [
            "password" => $newpass,
            "gender" => $sex,
            "language" => $language,
            "nationality" => $nation,
            "hobbies" => $hobby
        ];
        mostrar_datos();
    } else {
        echo "Username already used, choose another one";
    }
} else {
    echo "Error filling the fields";
}
