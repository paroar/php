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
if(isset($_REQUEST['contador']) && $_REQUEST['contador'] < count($arr) - 1){
    $num = $_REQUEST['contador'];
    echo $_REQUEST['infinitive'] . " = " . $arr[$num][1] . "<br>";
    echo $_REQUEST['simple'] . " = " . $arr[$num][2] . "<br>";
    echo $_REQUEST['participle'] . " = " . $arr[$num][3] . "<br>";
    if(
        ($_REQUEST['infinitive'] === $arr[$num][1]) and 
        ($_REQUEST['simple'] === $arr[$num][2]) and 
        ($_REQUEST['participle'] === $arr[$num][3])
    ){
        $_REQUEST['aciertos'] += 1; 
    }else{
        $_REQUEST['errores'] += 1;
    }
    echo "contador: " . $_REQUEST['contador'] . "<br>";
    echo "aciertos: " . $_REQUEST['aciertos'] . "<br>";
    echo "errores: " . $_REQUEST['errores'] . "<br>";
    $num += 1;
    pintarArgumento($arr, $num);
}elseif(!isset($_REQUEST['contador'])){
    include("php/utility_functions.php");
    pintar();
}else{
    $aciertos = $_REQUEST['aciertos']-1;
    echo "Aciertos: {$aciertos} <br>";
    echo "Errores: {$_REQUEST['errores']}";
    pintar();
}
?>
</div>
</body>
</html>