<?php

require('utilidades/utilidades_generales.php');
require('utilidades/utilidades_editor_texto.php');
if (isset($_POST['enviar'])) {

    echo "<<<";
    $accion = $_POST['enviar'];
    $palabra = trim($_POST['palabra']);
    $reemplazo = trim($_POST['reemplazo']);
    $texto = trim($_POST['texto']);

    switch ($accion) {
        case "posiciones":
            $texto = implode(",", posiciones($palabra, $texto));
            break;
        case "existe":
            $texto = var_export(existe($palabra, $texto), true);
            break;
        case "reemplazar":
            $texto = reemplazar($palabra, $reemplazo, $texto);
            break;
    }

    redireccion_index($palabra, $reemplazo, $texto);
}
