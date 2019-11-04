<?php

//function generateCaptcha(){}
$im = imagecreate(220, 220);
$color_fondo = imagecolorallocate($im, 0, 0, 0);
$str = generateRandomString(6);
$chars = str_split($str);
$posX = 0;
foreach($chars as$char){
    $fontSize = rand(15,35);
    $deg = rand(0,360);
    $posX +=30;
    $posY = rand(35, 180);
    $colorTexto = imagecolorallocate($im, rand(20,255), rand(20,255), rand(20,255));
    $negro = imagecolorallocate($im, 0, 0, 0);
    imagettftext ( $im , $fontSize , $deg , $posX , $posY , $colorTexto , "./Roboto-Regular.ttf" , $char );
}
imagejpeg($im, "img/captcha.jpeg");
imagedestroy($im);

//base64 para poner en etiqueta img

function generateRandomString($length) {
    $include_chars = "234578acefhjkmnorstuvwxyz";
    $charLength = strlen($include_chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $include_chars [rand(0, $charLength - 1)];
    }
    return $randomString;
}

echo "<img src='img/captcha.jpeg'>";