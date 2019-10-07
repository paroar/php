<?php
function comparar($arr, $index, $infinitive, $simple, $participle)
{
    if (
        $infinitive === $arr[$index][1] &&
        $simple === $arr[$index][2] &&
        $participle === $arr[$index][3]
    ) {
        return true;
    }
    return false;
}

function pintar_formulario($index, $aciertos, $errores)
{
    echo <<<EOD
    <form class="form" method="post" action="php/request.php?index=$index&aciertos=$aciertos&errores=$errores">
        <input type="text" class="input-box" name="infinitive" placeholder="Infinitive" required>
        <input type="text" class="input-box" name="simple" placeholder="Past Simple" required>
        <input type="text" class="input-box" name="participle" placeholder="Past Participle" required><br>
        <input type="submit" class="submit next" value="Next" name="submit">
    </form>
    <form class="form" method="post" action="php/request.php?index=$index&aciertos=$aciertos&errores=$errores">
        <input type="submit" class="submit stop" value="Stop" name="stop">
    </form>
EOD;
}
