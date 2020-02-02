<?php
$a = array("Donatello","Leonardo","Michelangelo","Splinter");

//Tomamos el valor del input procedente de la URL
$nombre = $_REQUEST["nombre"];
$sugerencia = "";

if ($nombre!=="") {
    $nombre = strtolower($nombre);
    $long = strlen($nombre);

    foreach ($a as $nom) {
        if(preg_match("/$nombre/", strtolower($nom))){
            $sugerencia = $sugerencia . $nom;
        };
    }
}
if($sugerencia === "") echo "No hay sugerencias";
else echo $sugerencia;
