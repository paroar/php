<?php
require './users.php';
$name = $_REQUEST['username'];
$pass = $_REQUEST['password'];
if (isset($name) && isset($pass)) {
    if (array_key_exists($name, $users) && $users[$name]['password'] === $pass) {
        echo "Bienvenido {$name}";
    } else {
        echo "Usuario o contraseña incorrectas";
    }
}
?>