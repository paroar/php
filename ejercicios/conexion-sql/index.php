<?php
include_once("ConnectDB.php");
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
    $DBlibro = ConnectDB::getInstance("config/config.json");
    $query = file_get_contents("libros.sql");
    var_dump($query);
    $DBlibro->query($query);
    ?>
</body>

</html>