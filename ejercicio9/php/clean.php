<?php
include("./utility_functions.php");
if(isset($_REQUEST['text'])){
    $ys = controla_entrada($_REQUEST['text']);
    echo $ys;
}else{
    header("./../index.php");
}

?>