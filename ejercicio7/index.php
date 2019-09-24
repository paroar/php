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
echo isset($_POST['contador']);
if(isset($_POST['contador'])){
    $num = $_POST['contador'];
    echo <<<EOD
    <div class="box-verb">
        <span class="box-verb-primary">{$arr[$num][0]}</span><br>
        <form class="form" method="post" action="{$_SERVER['PHP_SELF']}">
            <input type="text" class="input-box" name="infinitive" value="{$arr[$num][1]}" required></input>
            <input type="text" class="input-box" name="simple" value="{$arr[$num][2]}" required></input>
            <input type="text" class="input-box" name="participle" value="{$arr[$num][3]}" required></input>
            <input type="submit" class="submit" value="Send">
        </form>
    </div>
EOD;
    $_POST['contador'] += 1;
    echo $_POST['contador'];
}else{
    $_POST['contador'] = 0;
    $_POST['aciertos'] = 0;
    $_POST['errores'] = 0;
    $_POST['infinitive'] = "";
    $_POST['simple'] = "";
    $_POST['participle'] = "";
    $_POST['contador'] += 1;
    echo $_POST['contador'];
    echo <<<EOD
    <form class="form" method="post" action="{$_SERVER['PHP_SELF']}">
        <input type="submit" class="submit" value="Start">
    </form>
EOD;
}

/*if(
    isset($_POST['contador']) &&
    $_REQUEST['infinitive'] == $arr[$num[1]] &&
    $_REQUEST['simple'] == $arr[$num[2]] &&
    $_REQUEST['participle'] == $arr[$num[3]]
){
    $_REQUEST['aciertos'] += 1; 
}else{
    $_REQUEST['errores'] += 1;
}*/
?>
</body>
</html>