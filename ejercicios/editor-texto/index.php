<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
    require('php/utilidades/utilidades_generales.php');
        if(!isset($_GET['enviar'])){
            $palabra = "";
            $reemplazo = "";
            $texto = "";
            textarea($palabra,$reemplazo,$texto);
        }else{
            $palabra=$_GET['palabra'];
            $reemplazo=$_GET['reemplazo'];
            $texto=$_GET['texto'];
            textarea($palabra,$reemplazo,$texto);
        }
    ?>
</body>
</html>

