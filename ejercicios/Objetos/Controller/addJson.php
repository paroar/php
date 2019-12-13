<?php
function addToJSON($obj,$path)
{
    $file = file_get_contents("../Model/$path.json");
    $arr = json_decode($file, true);
    $arr[$obj[0]] = $obj;
    $jsonData = json_encode($arr);
    file_put_contents("../Model/$path.json", $jsonData);
}
