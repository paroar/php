<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
</head>

<body>
<div class="header">
<img src="img/logo.jpg" alt="logo" heigth="100px" width="100px" class="logo">
<div class="box-link-table">
    <h1 class="heading-primary">
        <span>Irregular verbs</span>
    </h1>

<?php
include("php/verbos.php");
include("php/utility_functions.php");
if(isset($_REQUEST['submit'])){
    echo "AQUÍ VA EL CONTADOR -> " . $_REQUEST['contador'] . " <-";
    $contador = $_REQUEST['contador'];
    if(
        ($_REQUEST['infinitive'] === $arr[$num][1]) and 
        ($_REQUEST['simple'] === $arr[$num][2]) and 
        ($_REQUEST['participle'] === $arr[$num][3])
    ){
        $_REQUEST['aciertos'] += 1;
    }else{
        $_REQUEST['errores'] += 1;
    }
    $num += 1;
    pintarArgumento($arr, $contador, $aciertos);
}elseif(!isset($_REQUEST['contador'])){
    pintar();
}else{
    echo "Aciertos: {$_REQUEST['aciertos']} <br>";
    echo "Errores: {$_REQUEST['errores']}";
    pintar();
}
?>
</div>
</body>
</html>