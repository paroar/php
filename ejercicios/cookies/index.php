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
    if (isset($_COOKIE["language"])) {
        header("Location: ./view_form.php");
    } elseif (isset($_POST["language"])) {
        paintConfigForm($_POST["language"]);
    } else {
        paintConfigForm("es");
    }
    ?>
</body>

</html>