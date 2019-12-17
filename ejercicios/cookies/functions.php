<?php
function arrFromJson($language)
{
    $file =  file_get_contents("./languages.json");
    $arr = json_decode($file, true);
    return $arr[$language];
}

function paintConfigForm($language)
{
    $arrWords = arrFromJson($language);
    echo <<<EOD
    <div class="wrapper">
        <div class="form-wrapper">
            <h2>{$arrWords["title"]["label"]}</h2>
            <form method="POST" action="my_cookies.php">

            <select name="language" id="" required>
                <option selected disabled><i class="united states flag">{$arrWords["select"]["label"]}</i></option>
                <option value="es">{$arrWords["select"]["options"]["es"]}</option>
                <option value="en">{$arrWords["select"]["options"]["en"]}</option>
            </select>

            <input type="submit" value="{$arrWords["submit"]["label"]}"/>

            </form>
        </div>
        </div>
EOD;
}

function paintLoginForm()
{
    $arrWords = arrFromJson($_COOKIE["language"]);
    echo <<<EOD
    <form method="GET" action="./my_cookies.php">
    <input type="submit" value="Config" name="config"/>
</form>
    <div class="wrapper">
        <div class="form-wrapper">
        <form method="POST" action="" class="form-wrapper__second">
            <h2>{$arrWords["submit"]["title"]}</h2>
            <input type="text" placeholder="{$arrWords["submit"]["user"]}"/>
            <input type="password" placeholder="{$arrWords["submit"]["password"]}"/>
            <input type="submit" value="{$arrWords["submit"]["label"]}"/>
        </form>
    </div>
    </div>
EOD;
}
