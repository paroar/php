<?php
error_reporting(0);

$objeto = "";
$objeto->nombre = "Ada";
$objeto->nacimiento = 1815;
$objeto->pais = "Reino Unido";

$miJSON = json_encode($objeto);

echo $miJSON;