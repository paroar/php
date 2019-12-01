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
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['repassword']);
session_destroy();
echo "You are logged out";
?>

<br>
<a href="index.php">Homepage</a>

</body>

</html>