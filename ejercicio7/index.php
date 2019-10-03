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
            if (isset($_REQUEST['submit']) && $_REQUEST['contador'] < count($arr) - 1) {
                $contador = $_REQUEST['contador'];
                $aciertos = $_REQUEST['aciertos'];
                $errores = $_REQUEST['errores'];
                $infinitive = $_REQUEST['infinitive'];
                $simple = $_REQUEST['simple'];
                $participle = $_REQUEST['participle'];
                if (
                    $infinitive === $arr[$contador][1] &&
                    $simple === $arr[$contador][2] &&
                    $participle === $arr[$contador][3]
                ) {
                    $aciertos += 1;
                } else {
                    $errores += 1;
                }
                $contador += 1;
                pintarArgumento(
                    $contador,
                    $aciertos,
                    $errores,
                    $infinitive,
                    $simple,
                    $participle
                );
            } elseif (!isset($_REQUEST['contador'])) {
                pintarArgumento(0, 0, 0, "", "", "");
            } else {
                $contador = $_REQUEST['contador'];
                $aciertos = $_REQUEST['aciertos'];
                $errores = $_REQUEST['errores'];
                $infinitive = $_REQUEST['infinitive'];
                $simple = $_REQUEST['simple'];
                $participle = $_REQUEST['participle'];
                if (
                    $infinitive === $arr[$contador][1] &&
                    $simple === $arr[$contador][2] &&
                    $participle === $arr[$contador][3]
                ) {
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