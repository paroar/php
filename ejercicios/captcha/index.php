<?php
header("Content-Type: image/png");
$im = imagecreate(200, 200);
$color_fondo = imagecolorallocate($im, 0, 0, 0);
$str = generateRandomString(6);
$chars = str_split($str);
$w = 10;
foreach($chars as$char){
    $color_texto = imagecolorallocate($im, rand(20,255), rand(20,255), rand(20,255));
    $w +=30;
    $posY = rand(20, 180);
    $size = rand(5, 150);
    $negro = imagecolorallocate($im, 0, 0, 0);
    imagettftext ( $im , 10 , 45 , $w , $posY , $color_texto , "./Roboto-Regular.ttf" , $char );
    //imagestring($im, 5, $w, $posY, $char, $color_texto);
}

imagepng($im);
imagedestroy($im);
//base64 para poner en etiqueta img

 
function generateRandomString($length) {
    $include_chars = "123456789abcdefghijkmnopqrstuvwxyz";
    $charLength = strlen($include_chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $include_chars [rand(0, $charLength - 1)];
    }
    return $randomString;
}
