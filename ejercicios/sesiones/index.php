<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h2>Welcome new user</h2>
    <?php
    if(isset($_SESSION["username"])){
        echo <<<EOD
        <form action="storingSession.php" method="post">
        <input type="text" name="username" placeholder="Name" value={$_SESSION['username']}>
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="repassword" placeholder="Retype Password">
        <button type="submit" name="submit">Register</button>
    </form>
EOD;
    }else{
        echo <<<EOD
        <form action="storingSession.php" method="post">
        <input type="text" name="username" placeholder="Name">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="repassword" placeholder="Retype Password">
        <button type="submit" name="submit">Register</button>
    </form>
EOD;
    }


    ?>

</body>

</html>