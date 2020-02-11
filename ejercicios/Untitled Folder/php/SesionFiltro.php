<?php
session_start();
require "Vivienda.php";

error_reporting(0);

$_SESSION["garage"] = $_POST["garage"];
$_SESSION["jardin"] = $_POST["jardin"];
$_SESSION["padel"] = $_POST["padel"];
$_SESSION["piscina"] = $_POST["piscina"];
$_SESSION["zonascomunes"] = $_POST["zonascomunes"];

$viviendas = new Vivienda();
$viviendas->constructorXml(
    $_SESSION["tipos"],
    $_SESSION["zonas"],
    $_SESSION["dorms"],
    $_SESSION["price"],
    $_SESSION["garage"],
    $_SESSION["jardin"],
    $_SESSION["padel"],
    $_SESSION["piscina"],
    $_SESSION["zonascomunes"],
    null
);
$arr = $viviendas->printViviendas(
    $_SESSION["tipos"],
    $_SESSION["zonas"],
    $_SESSION["dorms"],
    $_SESSION["price"],
    $_SESSION["garage"],
    $_SESSION["jardin"],
    $_SESSION["padel"],
    $_SESSION["piscina"],
    $_SESSION["zonascomunes"]
);

echo "
<form method='post' action='json.php'>
<table>
<tr>
        <th>tipo</th>
        <th>lugar</th>
        <th>precio</th>
        <th>dormitorios</th>
        <th>garage</th>
        <th>jardin</th>
        <th>padel</th>
        <th>piscina</th>
        <th>zonascomunes</th>
        <th>imagen</th>
    </tr>
";
foreach ($arr as $v) {
    row($v);
}

function row($obj)
{
    echo "
    <tr>
        <td>$obj->tipo</td>
        <td>$obj->lugar</td>
        <td>$obj->precio</td>
        <td>$obj->dormitorios</td>
        <td>$obj->garage</td>
        <td>$obj->jardin</td>
        <td>$obj->padel</td>
        <td>$obj->piscina</td>
        <td>$obj->zonascomunes</td>
        <td><img alt='Casa IMG' src='../$obj->imagen'></td>
        <td><input type='checkbox' name='comprar[]' value='$obj->id'><td>
    </tr>
";
}
echo "<input type='submit' value='comprar'></table></form>";
