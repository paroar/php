<?php
abstract class Figure
{
    abstract private $sides;
    abstract private $size;
    abstract private $quantity;
    abstract private $color;

    public function __construct($sides,$size,$quantity,$color)
    {
        $this->sides=$sides;
        $this->size=$size;
        $this->quantity=$quantity;
        $this->color=$color;
    }

    public function getSides(){
        return $this->sides;
    }
    public function getSize(){
        return $this->size;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public function getColor(){
        return $this->color;
    }

    abstract function paintFigure();
}
