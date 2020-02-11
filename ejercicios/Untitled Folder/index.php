<?php
require "./php/Conexion.php"
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
        $db = new Conexion();
        $sql = file_get_contents("sql/viviendas.sql");
        $db->initalize($sql);
    ?>

    <form action="php/ControladorUsuarios.php" method="post">
        <input type="text" placeholder="User" name="user">
        <input type="password" placeholder="Password" name="pass">
        <input type="submit" value="submit" name="submit">
    </form>

</body>
</html>