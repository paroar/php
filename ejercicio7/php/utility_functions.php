<?php
function pintarArgumento($arr, $index, $aciertos, $errores)
{
    $url = $_SERVER['PHP_SELF'] .
        "?index=$index&aciertos=$aciertos&errores=$errores";
    echo <<<EOD
    <div class="box-verb">
        <span class="box-verb-primary">{$arr[$index][0]}</span><br>
        <form class="form" method="post" action="$url">
            <input type="text" class="input-box" name="infinitive" placeholder="Infinitive" required></input>
            <input type="text" class="input-box" name="simple" placeholder="Past Simple" required></input>
            <input type="text" class="input-box" name="participle" placeholder="Past Participle" required></input>
            <input type="submit" class="submit" value="Next" name='submit'>
        </form>
        <form>
            <input type="submit" class="" value="Stop" name='stop'>
        </form>
    </div>
EOD;
}

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
