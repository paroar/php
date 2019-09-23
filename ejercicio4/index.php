<?php

echo <<<EOD
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
</head>

<body>
<div class="header">
<div class="box-link-table">
    <h1 class="heading-primary">
        <span class="heading-primary-main">Tabla de multiplicar</span>
    </h1>
    <form action="/php/ejercicio4/index.php" method="POST" class="form">
        <input type="text" name="x" class="input-number" value="{$_POST['x']}">
    </form>
EOD;
if(isset($_POST["x"])){
    $num = $_POST['x'];
    echo "<table>";
    for($i = 1; $i < 11 ;$i++){
            $pro = $i*$num;
            echo <<<EOD
            <tr>
                <td>$i x $num</td>
                <td>{$pro}</td>
            </tr>
EOD;
    }
    echo "</table>";
}
echo <<<EOD
</div>
</body>
</html>
EOD;
?>