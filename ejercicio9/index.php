<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
</head>

<body>

<?php
if(empty($_REQUEST['text'])){
echo <<<EOD
<div class="terminal">
    <img src="img/header.png"/><br>
    <span class="terminal__user">paroar@paroar:<span color="blue">~</span> </span>
    <form method="post" action="php/clean.php">
        <textarea name="text" rows="30" cols="79" class="terminal__screen">              $ </textarea><br>
        <input type="submit" value="send" class="btn">
    </form>
</div>
EOD;
}
?>

</body>
</html>