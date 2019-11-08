<?php

function create()
{
    require("./form.php");
    $im = imagecreate(320, 220);
    $color_fondo = imagecolorallocate($im, 0, 0, 0);
    $str = AUTH;
    $chars = str_split($str);
    $posX = 0;
    foreach ($chars as $char) {
        $fontSize = rand(15, 35);
        $deg = rand(0, 360);
        $posX += 45;
        $posY = rand(35, 180);
        $colorTexto = imagecolorallocate($im, rand(20, 255), rand(20, 255), rand(20, 255));
        $negro = imagecolorallocate($im, 0, 0, 0);
        imagettftext($im, $fontSize, $deg, $posX, $posY, $colorTexto, "./Roboto-Regular.ttf", $char);
    }
    ob_start();
    imagepng($im);
    $content = ob_get_contents();
    ob_clean();

    $img = 'data:image/jpeg;base64,' . base64_encode($content);

    return [$img,$str];
}