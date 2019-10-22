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
        echo 'Fecha de hoy: '.date('l d/m/Y').'<br>';
        echo 'Fecha de mañana: '.date('l d/m/Y', strtotime(' +1 day')).'<br>';
        echo 'Hora de hoy: '.date('l H:i:s').'<br>';
        echo 'Hora de mañana: '.date('l H:i:s', strtotime(' +1 day')).'<br>';
    ?>
</body>
</html>