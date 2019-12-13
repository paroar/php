<?php

namespace Bookstore\Domain;

class Book
{
    public $isbn;
    public $autor;
    public $titulo;


    public function __construct($tit, $aut,$isbn="0")
    {
        $this->autor = $aut;
        $this->titulo = $tit;
        $this->isbn = $isbn;
    }

    public function getPrintableTitle(): string
    {
        $result = '<i>' . $this->titulo . '</i>';
        if (!$this) {
            $result = '<i>Not available</i>';
        }
        return $result;
    }

    public function __toString()
    {
        return "
        $this->autor
        $this->titulo
        $this->isbn 
        <br>";
    }

    public function toArray()
    {
        return [
            $this->isbn,
            $this->autor,
            $this->titulo
        ];
    }
}
