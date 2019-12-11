<?php namespace Bookstore\Domain;
class Book
{
    public $autor;
    public $titulo;
    public $isbn = 0;

    public function __construct($tit, $aut)
    {
        $this->autor = $aut;
        $this->titulo = $tit;
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
        <br>";
    }
}
