<?php
function arrFromJson($language)
{
    $file =  file_get_contents("./languages.json");
    $arr = json_decode($file, true);
    return $arr[$language];
}

function paintForm($language)
{


    setcookie("language", $language, time());
    $arrWords = arrFromJson($language);

    echo <<<EOD
    <div class="wrapper">
    <div class="form-wrapper">
        <div class="form-wrapper__first">
            <h2>{$arrWords["title"]["label"]}</h2>
            <form method="POST" action="">

            <select name="language" id="">
                <option selected disabled>{$arrWords["select"]["label"]}</option>
                <option value="es">{$arrWords["select"]["options"]["es"]}<img src="./flagIcons/spain.png"></option>
                <option value="en">{$arrWords["select"]["options"]["en"]}</option>
            </select>

            <select name="fontColor" id="">
                <option selected disabled>{$arrWords["font"]["label"]}</option>
                <option value="white">{$arrWords["font"]["color"]["white"]}</option>
                <option value="black">{$arrWords["font"]["color"]["black"]}</option>
            </select>

            <select name="backgroundColor" id="">
                <option selected disabled>{$arrWords["background"]["label"]}</option>
                <option value="red">{$arrWords["background"]["color"]["red"]}</option>
                <option value="blue">{$arrWords["background"]["color"]["blue"]}</option>
            </select>

            <input type="submit" value="{$arrWords["submit"]["label"]}"/>

            </form>
        </div>
EOD;

    if (isset($_POST["backgroundColor"])){
        $backgroundColor = $_POST["backgroundColor"];
    }else{
        $backgroundColor = "white";
    }
    if (isset($_POST["fontColor"])){
        $fontColor = $_POST["fontColor"];
    }else{
        $fontColor = "black";
    }

    echo <<<EOD
        <div class="form-wrapper__second">
            <form method="POST" action="" style="background-color:$backgroundColor;color:$fontColor;">
            <h2>{$arrWords["submit"]["title"]}</h2>
            <input type="text" placeholder="{$arrWords["submit"]["user"]}"/>
            <input type="password" placeholder="{$arrWords["submit"]["password"]}"/>
            <input type="submit" value="{$arrWords["submit"]["label"]}"/>
            </form>
        </div>
    </div>
    </div>
EOD;
}
