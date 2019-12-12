<?php
class MiCabecera
{
    private $header;

    public function __construct($hdr)
    {
        $this->header = $hdr;
    }

    public function __toString()
    {
        return "
        $this->header
        <br>";
    }
}