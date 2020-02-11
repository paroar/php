<?php
function createTable(...$args){
    highlight_string(var_export($args));

    echo "<table>";
    for($i=0; $i<count($args[0]["rows"]);$i++){
        echo "<tr>$i";
        for($j=0;count($args[0]["columns"]);$j++){
            echo "<td>$j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function paintForm(){
    echo<<<EOD
<form action="" method="post">
    <input type="number" name="rows" placeholder="Número de filas" value="" required>
    <input type="number" name="columns" placeholder="Número de columnas" value="" required>
    <input type="text" name="wide" placeholder="Ancho" value="" >
    <input type="text" name="height" placeholder="Alto" value="" >
    <input type="text" name="backgroundColor" placeholder="" value="" >
    <input type="text" name="border" placeholder="Número de columnas" value="" >
    <input type="submit" name="submit" value="Crear Tabla">
</form>
EOD;
}

?>
