<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <img src="img/logo.jpg" alt="logo" heigth="100px" width="100px" class="logo">
        <div class="box-link-table">
            <h1 class="heading-primary">
                <span>Irregular verbs</span>
            </h1>
            <div class="box-verb">
                <?php
                require('php/verbos.php');
                require('php/utility_functions.php');
                if (!isset($_POST['index'])) {
                    $index = 0;
                    $aciertos = 0;
                    $errores = 0;
                } else {
                    $index = $_GET['index'];
                    $aciertos = $_GET['aciertos'];
                    $errores = $_GET['errores'];
                }
                echo "<span class='box-verb-primary'>" . $arr[$index][0] . "</span><br>";
                pintar_formulario($index, $aciertos, $errores);
                ?>
            </div>
        </div>
</body>

</html>