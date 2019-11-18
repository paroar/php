<?php
function paintForm($arr)
{
    echo <<<EOD
    <form method="POST" action="./auth.php">
    <input type="text" name="input">
    <input type="submit" value="submit" name="submit">
    <input type="hidden" value=$arr[1] name="captcha">
</form>
EOD;
}

function randomString($length)
{
    $str = "";
    $accepted = str_split("234578ABCDEFGHJKMNRSTUVWXYZ");
    for ($i = 0; $i < $length; $i++) {
        $str .= $accepted[rand(0, count($accepted) - 1)];
    }
    return $str;
}

function randomColor()
{
    return rand(0, 255);
}

function createCaptcha()
{
    $img = imagecreate(300, 200);
    $backgroundColor = imagecolorallocate($img, 0, 0, 0);
    $str = randomString(6);
    $chars = str_split($str);
    $x = 10;
    foreach ($chars as $char) {
        $textColor = imagecolorallocate($img, randomColor(), randomColor(), randomColor());
        $size = rand(10, 25);
        $x += 40;
        $y = rand(30, 170);
        $rotate = rand(0, 360);
        imagettftext($img, $size, $rotate, $x, $y, $textColor, "./Roboto-Regular.ttf", $char);
    }
    ob_start();
    imagejpeg($img);
    $content = ob_get_contents();
    imagedestroy($img);
    ob_end_clean();
    return ["data:image/jpeg;base64," . base64_encode($content), $str];
}
