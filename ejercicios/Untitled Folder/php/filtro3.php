<?php
session_start();
$_SESSION["zonas"] = $_POST["zonas"];
echo $_SESSION["zonas"];

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
    <span>1.Tipo</span>
    <span>2.Zona</span>
    <span><b>3.Características</b></span>
    <span>4.Extras</span>

    <h2>Paso 3: Elija las características de la vivienda</h2>
    <form action="filtro4.php" method="post">
        <p>Dormitorios:</p><span id="dormitorios"></span><br>
        <p>Precio:</p><span id="precio"></span><br>
        <input type="submit" value="Siguiente">
    </form>

    <a href="filtro2.php">Anterior</a>
<script src="../js/filtro3.js"></script>
</body>
</html>