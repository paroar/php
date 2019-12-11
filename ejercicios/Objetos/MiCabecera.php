<?php

class MiCabecera
{
    private $header;

    public function MiCabecera($hdr)
    {
        $this->header = $hdr;
    }

    public function __toString()
    {
        return $this->header;
    }
}
