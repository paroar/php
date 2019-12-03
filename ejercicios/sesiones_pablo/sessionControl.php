<?php
require_once("./functions.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body class="loadingBody">
<?php
if (
    $_SESSION["username"] !== 1 ||
    $_SESSION["password"] !== 1 ||
    $_SESSION["email"] !== 1
) {
    header("Location: ./index.php");
} elseif (!isValidUsername($_SESSION["username"])) {
    header("Location: ./index.php");
} elseif (!isValidEmail($_SESSION["email"])) {
    header("Location: ./index.php");
} else {
    echo "<img src='./loading.gif' class='loading'/>";
    header("Refresh: 3; ./loggedin.php?error=200");
}
?>
</body>
</html>
