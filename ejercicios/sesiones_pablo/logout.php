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
        session_destroy();
        echo "You are logged out, redirecting to index in 3 sec...";
        header("Refresh: 3; ./index.php");
    ?>

</body>

</html>