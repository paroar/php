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
    <?php
    $users = new UsersView();
    $controller = new UsersContr();

    if (isset($_GET['action']) && !empty($_GET['action'])) {
        $controller->{$_GET['action']}();
    }else{
        $users->index();
    }

    $users->showUsers($controller->getUsers("Pablo"));

    ?>
</body>
</html>