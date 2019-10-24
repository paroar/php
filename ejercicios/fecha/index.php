<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    require('./php/dates.php');
    /*
    echo "Fecha de hoy: " . getDateTime('l d/m/Y') . "<br>";
    echo "Fecha de mañana: " . getDateTime('l d/m/Y', '+1 day') . "<br>";
    echo "Fecha del próximo Lunes: " . getDateTime('l d/m/Y', 'next monday') . "<br>";
    echo "Hora de hoy: " . getDateTime('l d/m/Y H:i:s') . "<br>";*/
    echo "<div class='month'>";
    echo calendarMonth("May",2019);
    echo "</div>"
    ?>
</body>

</html>