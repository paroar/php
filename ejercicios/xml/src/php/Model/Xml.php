<?php

class Xml
{
    private $xml;

    public function __construct($path)
    {
        $this->xml = simplexml_load_file($path);
    }

    public function add_movie($title, $names, $actors, $plot, $thumbs, $stars)
    {
        $characters = ``;
        for ($i=0; $i < count($actors); $i++) { 
            $characters .= `
            <character>
                <name>{$names[$i]}</name>
                <actor>{$actors[$i]}</actor>
            </character>
            `;
        }

        $movie = `
        <movie>
            <title>{$title}</title>
            <characters>{$characters}</characters>
            <plot>{$plot}</plot>
            <rating type="thumbs">{$thumbs}</rating>
            <rating type="stars">{$stars}</rating>
        </movie>
        `;
        //TODO
    }
}
