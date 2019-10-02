<?php
function pintar(){
    echo <<<EOD
    <form class="form" method="get" action="{$_SERVER['PHP_SELF']}">
        <input type="hidden" name="contador" value="0">
        <input type="hidden" name="aciertos" value="0">
        <input type="hidden" name="errores" value="0">
        <input type="hidden" name="infinitive" value="">
        <input type="hidden" name="simple" value="">
        <input type="hidden" name="participle" value="">
        <input type="submit" class="submit" value="Start">
    </form>
EOD;
}

function pintarArgumento($arr, $num){
    echo <<<EOD
    <div class="box-verb">
        <span class="box-verb-primary">{$arr[$num][0]}</span><br>
        <form class="form" method="get" action="{$_SERVER['PHP_SELF']}">
            <input type="text" class="input-box" name="infinitive" placeholder="Infinitive" required></input>
            <input type="text" class="input-box" name="simple" placeholder="Past Simple" required></input>
            <input type="text" class="input-box" name="participle" placeholder="Past Participle" required></input>
            <input type="hidden" id="custId" name="contador" value="{$num}">
            <input type="hidden" name="aciertos" value="{$_REQUEST['aciertos']}">
            <input type="hidden" name="errores" value="{$_REQUEST['errores']}">
            <input type="submit" class="submit" value="Send">
        </form>
    </div>
EOD;
}

?>