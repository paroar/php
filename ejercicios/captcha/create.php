<?php

function create()
{

    $im = imagecreate(320, 220);
    $color_fondo = imagecolorallocate($im, 0, 0, 0);
    $str = generateRandomString(6);
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

function generateRandomString($length)
{
    $include_chars = "23458ABCDEFGHJKNQRSTUVXYZ";
    $charLength = strlen($include_chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $include_chars[rand(0, $charLength - 1)];
    }
    return $randomString;
}
