<?php
session_start();
if (isset($_POST["submit"])) {
    if (
        $_POST["username"] === "" ||
        $_POST["password"] === "" ||
        $_POST["repassword"] === ""
    ) {
        header("Location: ../index.php");
    } elseif ($_POST["password"] !==  $_POST["repassword"]) {
        $_SESSION["username"] = $_POST["username"];
        header("Location: ../index.php");
    } else {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        header("Location: ../pages/loggedin.php");
    }
} else {
    header("Location: ../index.php");
}
