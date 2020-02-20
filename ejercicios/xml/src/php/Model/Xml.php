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
        $xml = $this->getXml();
        $movie = $xml->addChild("movie");

        $id = $xml->count();
        $movie->addChild("id", $id);
        $movie->addChild("title", $title);
        $characters = $movie->addChild("characters");
        for ($i = 0; $i < count($actors); $i+=2) {
            $character = $characters->addChild("character");
            $character->addChild("name", $names[$i]);
            $character->addChild("actor", $actors[$i++]);
        }
        $movie->addChild("plot", $plot);
        $movie->addChild("rating", $thumbs)->addAttribute("type", "thumbs");
        $movie->addChild("rating", $stars)->addAttribute("type", "stars");
            
        $xml->asXML($this->getPath());
    }

    public function search_movie_title($title)
    {
        $xml = $this->getXml();
        return $xml->xpath("movie[title='$title']");
    }

    public function update_movie($title, $names, $actors, $plot, $thumbs, $stars)
    {
        $movies = $this->getXml();
        foreach ($movies->movie as $m) {
            if ((string)$m->title == $title) {
                $count = 0;
                foreach ($m->characters->character as $c) {
                    $c->name = $names[$count];
                    $c->actor = $actors[$count];
                    $count++;
                }
                $m->plot = $plot;
                $m->rating[0] = $thumbs;
                $m->rating[1] = $stars;
            }
        }
        $movies->asXML($this->getPath());
    }

    public function delete_movie_by_title($title)
    {
        $movies = $this->getXml();
        foreach ($movies->xpath("/movies/movie[title='$title']") as $m) {
                $dom = dom_import_simplexml($m);
                $dom->parentNode->removeChild($dom);
        }
        $movies->asXML($this->getPath());
    }
}
