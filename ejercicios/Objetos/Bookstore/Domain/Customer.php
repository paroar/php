<?php

namespace Bookstore\Domain;

class Customer
{
    private $id;
    private $nombre;
    private $primerApellido;
    private $segundoApellido;
    private $correo;

    public function __construct(
        $nombre,
        $primerApellido,
        $segundoApellido,
        $correo
    ) {
        $id = $this::getLastid();
        $this->id = $id;
        $this->nombre = $nombre;
        $this->primerApellido = $primerApellido;
        $this->segundoApellido = $segundoApellido;
        $this->correo = $correo;
    }

    public static function getLastid()
    {
        $file = file_get_contents("../Model/Customers.json");
        $arr = json_decode($file, true);
        return count($arr);
    }

    public function __toString()
    {
        return "
        $this->id
        $this->nombre
        $this->primerApellido
        $this->segundoApellido
        $this->correo
        <br>";
    }

    public function toArray()
    {
        return [
            $this->id,
            $this->nombre,
            $this->primerApellido,
            $this->segundoApellido,
            $this->correo
        ];
    }
}
