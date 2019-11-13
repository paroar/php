<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require("./functions.php");
    if(isset($_POST["language"])){
        paintForm($_POST["language"]);
    }elseif(isset($_COOKIE["language"])){
        paintForm($_COOKIE["language"]);
    }else{
        paintForm("es");
    }
    ?>
</body>
</html>