<?php
session_start();
require("./functions.php")
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php
    if (
        isset($_SESSION["username"]) &&
        isset($_SESSION["email"]) &&
        isset($_SESSION["password"]) &&
        isset($_SESSION["repassword"])
    ) {
        paintFormSession(
            $_SESSION["username"],
            $_SESSION["email"],
            $_SESSION["password"],
            $_SESSION["repassword"],
            $_SESSION["sports"]
        );
    } else {
        paintFormSession();
    }
    ?>

</body>

</html>