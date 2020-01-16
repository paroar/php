<?php
require_once("../Model/Login.php");
require_once("../Model/ConnectDB.php");
session_start();

$user = new Login($_POST["user"], $_POST["pass"]);
$_SESSION["user"] = serialize($user);

$DB = ConnectDB::getInstance("../config/config.json");
if($_POST["submit"] === "register" && $_POST["repass"] === $_POST["pass"]){
    $user->registerUser($DB);
    header('Location: ../index.php');
}elseif ($user->correctPass($DB)) {
    header('Location: ../usersPage.php');
}else {
    header('Location: ../registerUser.php');
}

