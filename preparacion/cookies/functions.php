<?php
function paintIndexForm($language)
{
    echo <<<EOD
    <form method="POST" action="./setCookies.php">
    <select name="language" id="">
        <option selected disabled>{$language["select"]["label"]}</option>
        <option value="es">{$language["select"]["options"]["es"]}</option>
        <option value="en">{$language["select"]["options"]["en"]}</option>
    </select>
    <input type="submit" value={$language["submit"]["label"]}>
</form>
EOD;
}

function paintForm($language)
{
    echo <<<EOD
    <form method="GET" action="./setCookies.php">
    <input type="submit" value="Config" name="config">
    </form>
    <h2>{$language["submit"]["title"]}</h2>
    <form method="POST" action="">
    <input type="text" placeholder={$language["submit"]["user"]}>
    <input type="text" placeholder={$language["submit"]["password"]}>
    <input type="submit" value={$language["submit"]["label"]}>
</form>
EOD;
}

function jsonToArray($language)
{
    $file = file_get_contents("./languages.json");
    $arr = json_decode($file, true);
    return $arr[$language];
}
