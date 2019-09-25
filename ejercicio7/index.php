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
$arr = array(
    array("","",""),
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

if(isset($_REQUEST['contador']) && $_REQUEST['contador'] < count($arr) - 1){
    $num = $_REQUEST['contador'] + 1;
    print_r($_REQUEST);
    echo "{$arr[$num-1][1]} . {$arr[$num][1]}";
    if(
        $_REQUEST['infinitive'] === $arr[$num-1][1] &&
        $_REQUEST['simple'] === $arr[$num-1][2]
    ){
        $_REQUEST['aciertos'] += 1; 
    }else{
        $_REQUEST['errores'] += 1;
    }
    echo <<<EOD
    <div class="box-verb">
        <span class="box-verb-primary">{$arr[$num][0]}</span><br>
        <form class="form" method="get" action="{$_SERVER['PHP_SELF']}">
            <input type="text" class="input-box" name="infinitive" value="{$arr[$num][1]}" required></input>
            <input type="text" class="input-box" name="simple" value="{$arr[$num][1]}" required></input>
            <input type="text" class="input-box" name="participle" value="{$arr[$num][1]}" required></input>
            <input type="hidden" id="custId" name="contador" value="{$num}">
            <input type="hidden" name="aciertos" value="{$_REQUEST['aciertos']}">
            <input type="hidden" name="errores" value="{$_REQUEST['errores']}">
            <input type="submit" class="submit" value="Send">
        </form>
    </div>
EOD;
}elseif(!isset($_REQUEST['contador'])){
    echo <<<EOD
    <form class="form" method="get" action="{$_SERVER['PHP_SELF']}">
        <input type="hidden" name="contador" value="0">
        <input type="hidden" name="aciertos" value="0">
        <input type="hidden" name="errores" value="0">
        <input type="hidden" name="infinitive" value="">
        <input type="hidden" name="simple" value="">
        <input type="hidden" name="participle" value="">
        <input type="submit" class="submit" value="Start">
    </form>
EOD;
}else{
    echo <<<EOD
    <form class="form" method="get" action="{$_SERVER['PHP_SELF']}">
        <input type="hidden" name="contador" value="0">
        <input type="hidden" name="aciertos" value="0">
        <input type="hidden" name="errores" value="0">
        <input type="hidden" name="infinitive" value="">
        <input type="hidden" name="simple" value="">
        <input type="hidden" name="participle" value="">
        <input type="submit" class="submit" value="Restart">
    </form>
EOD;
}
?>
</div>
</body>
</html>