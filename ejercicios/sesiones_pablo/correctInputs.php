<?php
require_once("./functions.php");
session_start();
if (isset($_POST["submit"])) {
    if (isValidUsername($_POST["username"]) === 1) {
        $_SESSION["username"] = $_POST["username"];
    } else {
        $_SESSION["username"] = '';
    }

    if (isValidPassword($_POST["password"], $_POST["repassword"])) {
        $_SESSION["password"] = $_POST["password"];
        $_SESSION["repassword"] = $_POST["repassword"];
    } else {
        $_SESSION["password"] = '';
        $_SESSION["repassword"] = '';
    }

    if (isValidEmail($_POST["email"]) === 1) {
        $_SESSION["email"] = $_POST["email"];
    } else {
        $_SESSION["email"] = '';
    }
    header("Location: ./sessionControl.php");
} else {
    header("Location: ./index.php");
}
