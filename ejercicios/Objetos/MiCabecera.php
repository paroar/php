<?php

class MiCabecera
{
    private $header;

    public function __constructor($hdr)
    {
        $this->header = $hdr;
    }

    public function __toString()
    {
        return $this->header;
    }
}
