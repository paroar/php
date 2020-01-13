<?php
require_once '../Classes/Figure.php';
class Circle extends Figure
{

    public function __construct($sides, $size, $color)
    {
        parent::__construct($sides, $size, $color);
    }

    function paintFigure()
    {

        $size = parent::getSize();
        $color = parent::getColor();

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
        imagefilledellipse($im, $size * 0.5, $size * 0.5, $size, $size, $color);

        

        ob_start();
        imagepng($im);
        $content = ob_get_contents();
        ob_end_clean();

        $img = 'data:image/jpeg;base64,' . base64_encode($content);

        return $img;
    }
}
