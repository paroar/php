<?php

abstract class Figure
{
    protected $sides;
    protected $size;
    protected $color;

    public function __construct($sides, $size, $color)
    {
        $this->sides = $sides;
        $this->size = $size;
        $this->color = $color;
    }

    public function getSides()
    {
        return $this->sides;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function getColor()
    {
        return $this->color;
    }

    public function hexToRgb($hex, $alpha = false)
    {
        $hex      = str_replace('#', '', $hex);
        $length   = strlen($hex);
        $rgb['r'] = hexdec($length == 6 ? substr($hex, 0, 2) : ($length == 3 ? str_repeat(substr($hex, 0, 1), 2) : 0));
        $rgb['g'] = hexdec($length == 6 ? substr($hex, 2, 2) : ($length == 3 ? str_repeat(substr($hex, 1, 1), 2) : 0));
        $rgb['b'] = hexdec($length == 6 ? substr($hex, 4, 2) : ($length == 3 ? str_repeat(substr($hex, 2, 1), 2) : 0));
        if ($alpha) {
            $rgb['a'] = $alpha;
        }
        return $rgb;
    }

    abstract function paintFigure();
}
