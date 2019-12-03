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
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['repassword']);
        unset($_SESSION['email']);
        echo "You are logged out, redirecting to index in 2 sec...";
        header("Refresh: 2; ./index.php");
    ?>

</body>

</html>