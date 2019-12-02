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
        paintFormSession($_SESSION["username"], $_SESSION["email"]);
    } else {
        paintFormSession();
    }
    ?>

</body>

</html>