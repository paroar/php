<?php
$names = array("Donatello","Leonardo","Michelangelo","Splinter");

$myJSON = json_encode($names);

echo $names[$_REQUEST["id"]];