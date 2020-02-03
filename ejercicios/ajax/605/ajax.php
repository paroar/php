<?php

$arr = array("Donatello","Leonardo","Michelangelo","Splinter");

$name = strtolower($_REQUEST["name"]);
$sugerences = "";

if($name !== ""){
    foreach ($arr as $indexName) {
        if(preg_match("/$name/", strtolower($indexName))){
            $sugerences = $sugerences . " " . $indexName;
        }
    }
}

if($sugerences === ""){
    echo "There are no sugerences";
}else{
    echo $sugerences;
}