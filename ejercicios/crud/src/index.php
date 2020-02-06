<?php

require '../vendor/autoload.php';


use Crud\Crud;

$crud = new Crud("usuario");
$id = $crud->insert([
    "nombres" => "Jaider",
    "apellidos" => "Vanegas",
    "edad" => "18",
    "correo" => "jhon@gmail.com",
    "telefono" => "123456",
    "fecha_registro" => date("Y-m-d H:i:s")
]);

echo "ID: $id";

$list = $crud->get();

echo "<pre>";
var_dump($list);
echo "</pre>";
