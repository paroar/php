<?php namespace Bookstore\Domain;
class Customer
{
    private static $lastid = 0;
    private $id = 0;
    private $nombre;
    private $primerApellido;
    private $segundoApellido;
    private $correo;

    public function __construct(
        $id,
        $nombre,
        $primerApellido,
        $segundoApellido,
        $correo
    ) {
        $id == null
            ? $this->id = ++self::$lastid
            : $this->id = $id;
        $id > self::$lastid
            ? self::$lastid = $id
            : null;
        $this->nombre = $nombre;
        $this->primerApellido = $primerApellido;
        $this->segundoApellido = $segundoApellido;
        $this->correo = $correo;
    }

    public static function getLastid(){
        return self::$lastid;
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
}
