<?php
include "includes/autoloader.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="./controller.php">
        <input type="text" name="firstname" placeholder="firstname">
        <input type="text" name="lastname" placeholder="lastname">
        <input type="submit" name="action" value="getUsers">
        <input type="submit" name="action" value="createUsers">
    </form>

    <?php
    $users = new UsersView();
    $users->showUsers($controller->getAllUsers());

    ?>

</body>

</html>