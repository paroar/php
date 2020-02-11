<?php
if (session_status() === 0) {
    session_start();
}
require "Usuarios.php";
require "Vivienda.php";
$usuario = new Usuarios();

$user = $usuario->login($_POST["user"], $_POST["pass"]);
if ($user) {
    $_SESSION["usuario"] = serialize($user);
    $tipo = $user->tipo;
    if ($tipo === "admin") {
        $file = file_get_contents("../xml/viviendas.xml");
        $xml = simplexml_load_string($file);
        $json = json_encode($xml);
        $array = json_decode($json, true)["vivienda"];

        foreach ($array as $value) {
            $arr = [];
            foreach ($value as $val) {
                if (is_array($val)) {
                    foreach ($val as $v) {
                        array_push($arr, $v);
                    }
                } else {
                    array_push($arr, $val);
                }
            }
            $vivienda = new Vivienda();
            $vivienda->constructorXml(...$arr);

            echo($vivienda->insertVivienda());
        }
        unlink("../xml/viviendas.xml");
    } else {
        header("Location: Compras.php");
    }
} else {
    header("Location: ../index.php");
}
