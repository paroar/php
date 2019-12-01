<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php

    if (isset($_SESSION['username'])) {
        echo "Welcome, you are logged in: " . $_SESSION['username'] .
            "<br>Your session id is: " . session_id();
    } else {
        echo "You are not logged in";
    }

    ?>
    <br>
    <a href="logout.php">Logout</a>

</body>

</html>