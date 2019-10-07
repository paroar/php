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

            <?php
            include("php/verbos.php");
            include("php/utility_functions.php");
            if (isset($_REQUEST['submit']) && $_REQUEST['index'] < count($arr) - 1) {
                include("php/request.php");
                if (comparar($arr, $index, $infinitive, $simple, $participle)) {
                    $aciertos += 1;
                } else {
                    $errores += 1;
                }
                $index += 1;
                pintarArgumento(
                    $arr,
                    $index,
                    $aciertos,
                    $errores
                );
            } elseif (!isset($_REQUEST['ejercicio7submit'])) {
                pintarArgumento($arr, 0, 0, 0, "", "", "");
            
            }elseif(isset($_REQUEST['stop'])){
                echo "Aciertos: $aciertos<br>";
                echo "Errores: $errores<br>";

            } else {
                include("php/request.php");
                if (comparar($arr, $index, $infinitive, $simple, $participle)) {
                    $aciertos += 1;
                } else {
                    $errores += 1;
                }
                echo "Aciertos: $aciertos<br>";
                echo "Errores: $errores<br>";
            }
            ?>
        </div>
</body>

</html>