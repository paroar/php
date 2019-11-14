<?php
function arrFromJson($language)
{
    $file =  file_get_contents("./languages.json");
    $arr = json_decode($file, true);
    return $arr[$language];
}

function paintForm($language)
{

    $arrWords = arrFromJson($language);

    echo <<<EOD
        <div class="form-wrapper__first">
            <h2>{$arrWords["title"]["label"]}</h2>
            <form method="POST" action="my_cookies.php">

            <select name="language" id="" required>
                <option selected disabled>{$arrWords["select"]["label"]}</option>
                <option value="es">{$arrWords["select"]["options"]["es"]}</option>
                <option value="en">{$arrWords["select"]["options"]["en"]}</option>
            </select>

            <input type="submit" value="{$arrWords["submit"]["label"]}"/>

            </form>
        </div>
EOD;
}
