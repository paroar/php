<?php
function paintCaptchaForm(){
    echo<<<EOD
    <form method="POST" action="">
        <input type="text" name="input"/>
        <input type="submit" name="submit" value="Enviar"/>
    </form>
EOD;
}
?>