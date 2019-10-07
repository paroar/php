<?php

function controla_entrada($xs)
{
    return
        trim(
            htmlspecialchars(
                strip_tags($xs)
            )
        );
}

function pintar_textarea()
{
    echo <<<EOD
<div class="terminal">
    <img src="img/header.png"/><br>
    <span class="terminal__user">paroar@paroar:<span color="blue">~</span> </span>
    <form method="post" action="php/clean.php">
        <textarea name="text" rows="30" cols="79" class="terminal__screen">              $ </textarea><br>
        <input type="submit" value="send" class="btn">
    </form>
</div>
EOD;
}
