<?php

echo <<<EOD
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
</head>

<body>
EOD;

if(!isset($_POST["x"])){
    echo <<<EOD
    <div class="header">
        <div class="box-link-table">
            <h1 class="heading-primary">
                <span class="heading-primary-main">Tabla de multiplicar</span>
            </h1>
            <form action="php/tablaMultiplicar.php" method="POST" class="form">
                <input type="text" name="x" class="input-number" value="0">
            </form>
        </div>
    </div>
EOD;
}
exec ('php/tablaMultiplicar.php');
echo <<<EOD
</body>
</html>
EOD;
?>