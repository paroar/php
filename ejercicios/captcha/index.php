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
    require("create.php");
    require("authentication.php");
    $arr = create();    
    echo '<img src="' . $arr[0] . '"/><br>';
    echo $arr[1];
    echo<<<EOD
    <form method="POST" action="./authentication.php">
        <input type="text" name="input">
        <input type="submit" name="submit" value="Enviar">
        <input type="hidden" name="auth" value="$arr[1]">
    </form>
EOD;
    ?>


</body>

</html>