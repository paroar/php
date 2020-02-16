<?php
require "Model/Xml.php";

try {
    $path = "./../xml/movies.xml";
    $xml = new Xml($path);
    if (isset($_POST["submit"])) {
        $xml->add_movie(...array_values($_POST));
        echo json_encode(array("code" => 200), true);
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
