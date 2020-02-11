<?php
error_reporting(0);
require "Filtro.php";
$filtro = new Filtro();

if ($_GET["tipos"]) {
    $arr = $filtro->getTipos();
    echo json_encode($arr);
} elseif ($_GET["zonas"]) {
    $arr = $filtro->getZonas();
    echo json_encode($arr);
} elseif ($_GET["caracteristicas"]) {
    $arr = [];
    $arr[0] = $filtro->maxDormitorio();
    $arr[1] = $filtro->maxPrecio();
    echo json_encode($arr);
} elseif ($_GET["extras"]) {
    $arr = $filtro->extras();
    echo json_encode($arr);
}