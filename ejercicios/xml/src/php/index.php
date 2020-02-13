<?php
require "Model/Xml.php";

//error_reporting(0);


// try {
//     $xml = new Xml("./../xml/movies.xml");

//     if (isset($_POST["submit"])) {
//         $xml->add_movie(...array_values($_POST));
//         echo json_encode(array("error" => 0), true);
//     } else {
//         throw new Exception("Couldn't find method on the controller");
//     }
// } catch (Throwable $e) {
//     $error = array(
//         "message" => $e->getMessage(),
//         "code" => $e->getCode(),
//         "file" => $e->getFile(),
//         "line" => $e->getLine(),
//         "trace" => $e->getTrace()
//     );
//     echo json_encode($error, true);
// }


///////////////////////////////////////////////////////


$title="titlestring";
$names=array("namesstring1","namesstring2");
$actors=array("actorstring1","actorstring2");
$plot="plotstring";
$thumbs="thumbsstring";
$stars="starsstring";

$xml = new Xml("./../xml/movies.xml");
$movie = $xml->getXml();

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


$movie->asXML("./../xml/mov.xml");
// echo "<pre>";
// var_dump($movie);
// echo "</pre>";
//TODO