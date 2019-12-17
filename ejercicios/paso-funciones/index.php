<?php

function bar($arg = '', $innerFunc)
{
    $innerFunc($arg);
}

// Esta es una función de envoltura alrededor de echo
function hacerecho($cadena)
{
    echo $cadena;
}



$func1 = 'hacerecho';
$func = 'bar';
$func('Esto es una prueba', $func1);

?>