<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php

    if (
        isset($_SESSION['username']) &&
        isset($_SESSION['password']) &&
        isset($_SESSION['email'])
    ) {
        echo "Welcome, you are logged in: " . $_SESSION['username'] .
            "<br>Your password is: " . $_SESSION['password'] .
            "<br>and your session id is: " . session_id();
    } else {
        echo "You are not logged in";
    }

    ?>
    <br>
    <a href="./logout.php">Logout</a>

</body>

</html>