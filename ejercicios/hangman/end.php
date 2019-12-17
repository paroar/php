<?php
session_start();
require_once 'MiCabecera.php';
?>
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
        echo '<a href="index.php" class="anchor">Replay</a>';
    if ($_GET["end"] === "win") {
        echo new MiCabecera("WIN");
        echo "<img src='./animations/win.gif' class='win'>";
    } else {
        echo new MiCabecera("LOSE");
        echo "<h1>$_SESSION[word]</h1>";
        echo "<img src='./animations/lose.gif' class='win'>";
    }
    unset($_SESSION["counter"]);
    
    ?>
</body>

</html>