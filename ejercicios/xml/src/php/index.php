<?php
require "Model/Xml.php";
//https://stackoverflow.com/questions/6066837/how-to-write-data-from-form-in-html-to-xml-with-javascript
try {
    $path = "./../xml/movies.xml";
    $xml = new Xml($path);
    if (isset($_POST["submit"])) {
        //echo json_encode($_POST, true);
        $xml->add_movie($_POST);
        // echo json_encode(array("code" => 200), true);
    } elseif (isset($_POST["search"])) {
        $arr = $xml->search_movie_title($_POST["title"]);
        echo json_encode($arr, true);
    } elseif (isset($_POST["edit"])) {
        $xml->update_movie(...array_values($_POST));
        echo json_encode(array("code" => 200, "edit" => "ok"), true);
    } elseif (isset($_POST["delete"])) {
        $xml->delete_movie_by_title($_POST["title"]);
        echo json_encode(array("code" => 200, "delete" => "ok"), true);
    } else {
        throw new Exception("Couldn't find method on the controller");
    }
} catch (Throwable $e) {
    $error = array(
        "message" => $e->getMessage(),
        "code" => $e->getCode(),
        "file" => $e->getFile(),
        "line" => $e->getLine(),
        "trace" => $e->getTrace()
    );
    echo json_encode($error, true);
}
