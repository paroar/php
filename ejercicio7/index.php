<?php
echo <<<EOD
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
</head>

<body>
<div class="header">
<img src="img/logo.jpg" alt="logo" heigth="100px" width="100px">
<div class="box-link-table">
    <h1 class="heading-primary">
        <span class="heading-primary-main">Irregular verbs</span>
    </h1>
EOD;

$arr = array(
    "perdonar"=>array("forgive","forgave","forgiven"),
    "empezar"=>array("begin","began","begun"),
    "doblar"=>array("bend","bent","bent"),
    "morder"=>array("bite","bit","bitten"),
    "soplar"=>array("blow","blew","blown"),
    "caer"=>array("fall","fell","fallen"),
    "sentir"=>array("feel","felt","felt"),
    "luchar"=>array("figth","fougth","fougth"),
    "encontrar"=>array("find","found","found"),
    "volar"=>array("fly","flew","flown")
);

if(true){

}

echo <<<EOD
</body>
</html>
EOD;
?>