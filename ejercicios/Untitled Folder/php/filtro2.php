<?php
session_start();
$_SESSION["tipos"] = $_POST["tipos"];
echo $_SESSION["tipos"];
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
    <h1>Búsqueda de vivienda</h1>
    <span>1.Tipo <b>2.Zona </b>3.Características 4.Extras</span>

    <h2>Paso 2: Elija la zona de la vivienda</h2><br>
        <span>Zona:</span>
        <form action="filtro3.php" method="post">
            <select name="zonas" id="zonas"></select>
            <input type="submit" value="Siguiente">
        </form>
        <br>
    <a href="filtro1.php">Anterior</a>

    <script src="../js/filtro2.js"></script>
</body>
</html>