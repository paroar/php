<?php
require_once("./functions.php");
session_start();
if (isset($_POST["submit"])) {

    $usernameErrorCode = isValidUsername($_POST["username"]);
    if ($usernameErrorCode === 1) {
        $_SESSION["username"] = $_POST["username"];
    } elseif ($usernameErrorCode === 2) {
        $_SESSION["username"] = 2;
    } else {
        $_SESSION["username"] = 3;
    }

    $passwordErrorCode = isValidPassword($_POST["password"], $_POST["repassword"]);
    if ($passwordErrorCode === 1) {
        $_SESSION["password"] = $_POST["password"];
        $_SESSION["repassword"] = $_POST["repassword"];
    } elseif ($passwordErrorCode === 2) {
        $_SESSION["password"] = 2;
        $_SESSION["repassword"] = 2;
    } elseif ($passwordErrorCode === 3) {
        $_SESSION["password"] = 3;
        $_SESSION["repassword"] = 3;
    } else {
        $_SESSION["password"] = 4;
        $_SESSION["repassword"] = 4;
    }
    $emailErrorCode = isValidEmail($_POST["email"]);
    if ($emailErrorCode === 1) {
        $_SESSION["email"] = $_POST["email"];
    } else {
        $_SESSION["email"] = 2;
    }

    if(isset($_SESSION['sports'])){
        $_SESSION['sports'] = $_POST['sports'];
    }else{
        $_SESSION['sports'] = array();
    }
    
    
    header("Location: ./sessionControl.php");
} else {
    header("Location: ./index.php");
}
