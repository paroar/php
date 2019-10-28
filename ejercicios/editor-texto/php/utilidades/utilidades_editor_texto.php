<?php
function buscar($aguja, $pajar)
{
    $pajar = explode(" ", $pajar);
    $posiciones = [];
    for ($i = 0; $i < count($pajar); $i++) {
        if (strcmp($pajar[$i], $aguja) == 0) {
            array_push($posiciones, $i);
        }
    }
    if (count($posiciones) !== 0) {
        return $posiciones;
    }
    return false;
}

function posiciones($aguja, $pajar)
{
    $pos = buscar($aguja, $pajar);
    if ($pos !== false && count($pos) > 0) {
        return $pos;
    }
}

function existe($aguja, $pajar)
{
    $bool = buscar($aguja, $pajar);
    if ($bool !== false && count($bool) > 0) {
        return true;
    }
    return false;
}

function reemplazar($palabra, $reemplazo, $texto)
{
    return str_replace($palabra, $reemplazo, $texto);
}
