<?php
require_once '../Classes/Figure.php';
class Pentagon extends Figure
{

    public function __construct($sides, $size, $color)
    {
        parent::__construct($sides, $size, $color);
    }

    function paintFigure()
    {

        $size = parent::getSize();
        $color = parent::getColor();

        $points = array(
            $size*0.5,  0,
            $size,  $size*0.38,
            $size*0.82, $size,
            $size*0.18, $size,
            0, $size*0.38
        );

        $im = imagecreate($size, $size);
        $backgroundColor   = imagecolorallocate($im, 255, 255, 255);
        imagefilledrectangle(
            $im, 
            0, 
            0, 
            $size, 
            $size, 
            $backgroundColor
        );

        $hexToRGB = $this->hexToRgb($color);
        $color = imagecolorallocate(
            $im, 
            $hexToRGB['r'], 
            $hexToRGB['g'], 
            $hexToRGB['b']
        );
        imagefilledpolygon($im, $points, 5, $color);

        ob_start();
        imagepng($im);
        $content = ob_get_contents();
        ob_clean();

        $img = 'data:image/jpeg;base64,' . base64_encode($content);

        return $img;
    }
}
