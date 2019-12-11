<?php
class Customer{
    private $id;
    private $nombre;
    private $primerApellido;
    private $segundoApellido;
    private $correo;

    public function Customer($id, $nombre, $primerApellido, $segundoApellido, $correo){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->primerApellido=$primerApellido;
        $this->segundoApellido=$segundoApellido;
        $this->correo=$correo;
    }

    public function __toString()
    {
        echo "
        $this->id\n
        $this->nombre\n
        $this->primerApellido\n
        $this->segundoApellido\n
        $this->correo\n
        ";
    }

}