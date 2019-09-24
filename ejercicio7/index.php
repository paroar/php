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
    array("perdonar","forgive","forgave","forgiven"),
    array("empezar","begin","began","begun"),
    array("doblar","bend","bent","bent"),
    array("morder","bite","bit","bitten"),
    array("soplar","blow","blew","blown"),
    array("caer","fall","fell","fallen"),
    array("sentir","feel","felt","felt"),
    array("luchar","figth","fougth","fougth"),
    array("encontrar","find","found","found"),
    array("volar","fly","flew","flown")
);

$arrCompleted = array();

if(count($arr) > 0){
    echo <<<EOD
    <div class="box-verb">
        <span class="box-verb-primary">{$arr[0][0]}</span><br>
        <form class="form" method="" action="">
            <input type="text" class="input-box" name="infinitive" onfocus="this.value=''" value="{$arr[0][1]}" required></input>
            <input type="text" class="input-box" name="simple" onfocus="this.value=''" value="{$arr[0][2]}" required></input>
            <input type="text" class="input-box" name="participle" onfocus="this.value=''" value="{$arr[0][3]}" required></input>
            <input type="submit" class="submit" value="Send">
        </form>
    </div>
EOD;

if(
    $_REQUEST['infinitive'] == $arr[0][1] &&
    $_REQUEST['simple'] == $arr[0][2] &&
    $_REQUEST['participle'] == $arr[0][3] 
    ){
    $aciertos += 1; 
}else{
    $errores += 1;
}
print_r($arrCompleted);
}

echo <<<EOD
</body>
</html>
EOD;
?>