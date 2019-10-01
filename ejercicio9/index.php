<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
</head>

<body>

<?php
if(empty($_REQUEST['text'])){
echo <<<EOD
<div class="">
    <form method="post" action="php/clean.php">
        <input type="textarea" name="text">
        <input type="submit" value="SEND">
    </form>
</div>
EOD;
}
?>

</body>
</html>