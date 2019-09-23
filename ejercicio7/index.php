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
<img src="img/logo.jpg" alt="logo" heigth="100px" width="100px" class="logo">
<div class="box-link-table">
    <h1 class="heading-primary">
        <span>Irregular verbs</span>
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
    echo <<<EOD
    <div class="box-verb">
        <span class="box-verb-primary">VERBO</span><br>
        <form class="form" method="" action="">
            <input type="text" class="input-box" name="infinitive" value="Infinitive" required></input>
            <input type="text" class="input-box" name="simple" value="Simple Past" required></input>
            <input type="text" class="input-box" name="participle" value="Past Participle" required></input>
            <input type="submit" class="submit" value="Send">
        </form>
    </div>
EOD;
}

echo <<<EOD
</body>
</html>
EOD;
?>