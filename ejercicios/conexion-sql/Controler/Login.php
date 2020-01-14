<?php
require_once("../Model/Login.php");
require_once("../Model/ConnectDB.php");
session_start();

$user = new Login($_POST["user"], $_POST["pass"]);
$_SESSION["user"] = serialize($user);
if ($user->correctPass()) {
    echo "WELCOME, redirecting to users page in 3s";
    header('refresh:3; url=../usersPage.php');
} else {
    echo "ERROR, redirecting to index in 3s";
    header('refresh:3; url=../index.php');
}

