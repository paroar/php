<?php
require('verbos.php');
require('utility_functions.php');
if(isset($_POST['submit'])){
    $infinitive=$_POST['infinitive'];
    $simple=$_POST['simple'];
    $participle=$_POST['participle'];
    $index=$_GET['index'];
    $aciertos=$_GET['aciertos'];
    $errores=$_GET['errores'];
    (comparar($arr, $index, $infinitive, $simple, $participle) ? $aciertos +=1 : $errores += 1);
    $index +=1;
    header("location: ../index.php?index=$index&aciertos=$aciertos&errores=$errores");
}
