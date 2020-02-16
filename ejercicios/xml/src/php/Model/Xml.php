<?php

class Xml
{
    private $xml;
    private $path;

    public function __construct($path)
    {
        if (!file_exists($path)) {
            throw new Exception("File doesn't exist");
        }
        $this->path = $path;
        $this->xml = simplexml_load_file($path);
    }

    public function getXml()
    {
        return $this->xml;
    }
    public function getPath()
    {
        return $this->path;
    }

    public function add_movie($title, $names, $actors, $plot, $thumbs, $stars)
    {
        try {
            $xml = $this->getXml();
            $movie = $xml->addChild("movie");
            $movie->addChild("title", $title);
            $characters = $movie->addChild("characters");
            for ($i = 0; $i < count($actors); $i++) {
                $character = $characters->addChild("character");
                $character->addChild("name", $names[$i]);
                $character->addChild("actor", $actors[$i]);
            }
            $movie->addChild("plot", $plot);
            $movie->addChild("rating", $thumbs)->addAttribute("type", "thumbs");
            $movie->addChild("rating", $stars)->addAttribute("type", "stars");
            
            $xml->asXML($this->getPath());
        } catch (Throwable $th) {
            return $th;
        }
    }
}
