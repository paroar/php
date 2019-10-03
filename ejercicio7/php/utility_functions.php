<?php
function pintar(){
    $url = $_SERVER['PHP_SELF'] . "?contador=0&aciertos=0&errores=0&infinitive=\"\"&simple=\"\"&participle=\"\"";
    echo $_SERVER['PHP_SELF'];
    echo <<<EOD
    <form class="form" method="post" action="$url">
        <input type="submit" class="submit" value="Start" name='submit'>
    </form>
EOD;
}

function pintarArgumento($arr, $num){
    $url = $_SERVER['PHP_SELF'] . "?contador=$num&aciertos=0&errores=0&infinitive=\"\"&simple=\"\"&participle=\"\"";
    echo <<<EOD
    <div class="box-verb">
        <span class="box-verb-primary">{$arr[$num][0]}</span><br>
        <form class="form" method="post" action="$url">
            <input type="text" class="input-box" name="infinitive" placeholder="Infinitive" required></input>
            <input type="text" class="input-box" name="simple" placeholder="Past Simple" required></input>
            <input type="text" class="input-box" name="participle" placeholder="Past Participle" required></input>
            <input type="hidden" name="aciertos" value="{$_REQUEST['aciertos']}">
            <input type="hidden" name="errores" value="{$_REQUEST['errores']}">
            <input type="submit" class="submit" value="Send">
        </form>
    </div>
EOD;
}

?>