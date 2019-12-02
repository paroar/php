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
        isset($_SESSION["email"])
    ) {
        paintFormSession($_SESSION["username"], $_SESSION["email"], array(
            'kayaking',
            'bobsleigh',
            'canoeing'
        ), $_SESSION["sports"]);
    } else {
        paintFormSession('', '', array(
            'kayaking',
            'bobsleigh',
            'canoeing'
        ), array());
    }
    ?>

</body>

</html>