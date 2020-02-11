<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Búsqueda de vivienda</h1>
    <span><b>1.Tipo </b>2.Zona 3.Características 4.Extras</span>

    <h2>Paso 1: Elija el tipo de vivienda</h2><br>
        <span>Tipo:</span> 
        <form method="post" action="filtro2.php">
            <select name="tipos" id="tipos"></select>
            <input type="submit" value="submit">
        </form>

        <br>
    <script src="../js/filtro1.js">
        
    </script>
</body>
</html>