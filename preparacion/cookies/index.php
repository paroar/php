<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require("./functions.php");
    if(isset($_COOKIE["language"])){
        header("Location: ./form.php");
    }else{
        $arr = jsonToArray("es");
        paintIndexForm($arr);
    }
    ?>
</body>
</html>

