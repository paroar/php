<?php
function pintarArgumento($arr, $contador, $aciertos, $errores, $infinitive, $simple, $participle)
{
    $url = $_SERVER['PHP_SELF'] .
        "?contador=$contador&aciertos=$aciertos&errores=$errores" .
        "&infinitive=$infinitive&simple=$simple&participle=$participle";
    echo <<<EOD
    <div class="box-verb">
        <span class="box-verb-primary">{$arr[$contador][0]}</span><br>
        <form class="form" method="post" action="$url">
            <input type="text" class="input-box" name="infinitive" placeholder="Infinitive" required></input>
            <input type="text" class="input-box" name="simple" placeholder="Past Simple" required></input>
            <input type="text" class="input-box" name="participle" placeholder="Past Participle" required></input>
            <input type="submit" class="submit" value="Next" name='submit'>
        </form>
    </div>
EOD;
}

function comparar($arr, $contador, $infinitive, $simple, $participle)
{
    include("request.php");
    if (
        $infinitive === $arr[$contador][1] &&
        $simple === $arr[$contador][2] &&
        $participle === $arr[$contador][3]
    ) {
        return true;
    }
    return false;
}
