<?php
session_start();
$_SESSION["dorms"] = $_POST["dorms"];
$_SESSION["price"] = $_POST["price"];
echo $_SESSION["dorms"];
echo $_SESSION["price"];
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
    <span>3.Características</span>
    <span><b>4.Extras</b></span>

    <h2>Paso 4: Elija los extra de la vivienda</h2>
        <p>Extras:</p> 
        <form method="post" action="SesionFiltro.php">
        <span id="extras"></span>
            <input type="submit" value="siguiente"/>
        </form>
        <br>

    <a href="filtro3.php">Anterior</a>


    <script src="../js/filtro4.js"></script>
</body>
</html>