<?php

class Xml
{
    private $xml;

    public function __construct($path)
    {
        try {
            $this->xml = simplexml_load_file($path);
        } catch (Throwable $th) {
            return $th;
        }
    }

    public function getXml(){
        return $this->xml;
    }

    public function add_movie($title, $names, $actors, $plot, $thumbs, $stars, $submit)
    {
        try {
            $movie = $this->xml->movies;

            $movie->addChild("title", $title);

            $characters = $movie->addChild("characters");
            for ($i = 0; $i < count($actors); $i++) {
                $character = $characters->addChild("character");
                $character->addChild("name", $names[$i]);
                $character->addChild("actor", $actors[$i]);
            }

            $movie->addChild("plot", $plot);
            $thumbs = $movie->addChild("rating", $thumbs);
            $thumbs->addAttribute("type", "thumbs");
            $stars = $movie->addChild("rating", $stars);
            $stars->addAttribute("type", "stars");

            $this->xml->saveXML()->save("../xml/mvies.xml");

        } catch (Throwable $th) {
            return $th;
        }
    }
}
