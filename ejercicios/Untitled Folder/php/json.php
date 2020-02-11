<?php
session_start();

require "Vivienda.php";

$vivienda = new Vivienda();

$arr = [];
array_push($arr,unserialize($_SESSION["usuario"]));
foreach ($_POST["comprar"] as $v) {
    array_push($arr,$vivienda->selectViviendaById($v));
}

$my_file = '../compra/compras.json';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = json_encode($arr,true);
fwrite($handle, $data);