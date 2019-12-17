<?php
class Triangle extends Figure
{

    public function __construct($sides, $size, $quantity, $color)
    {
        parent::__construct($sides, $size, $quantity, $color);
    }

    function create()
    {
        $im = imagecreate(300, 300);

        ob_start();
        imagepng($im);
        $content = ob_get_contents();
        ob_clean();

        $img = 'data:image/jpeg;base64,' . base64_encode($content);

        return $img;
    }
}
