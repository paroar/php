<?php
require("./functions.php");
$arrWords = arrFromJson($_COOKIE["language"]);
echo<<<EOD
    <div class="form-wrapper__second">
        <form method="GET" action="./my_cookies.php">
            <input type="submit" value="Config" name="config"/>
        </form>
        <form method="POST" action="">
            <h2>{$arrWords["submit"]["title"]}</h2>
            <input type="text" placeholder="{$arrWords["submit"]["user"]}"/>
            <input type="password" placeholder="{$arrWords["submit"]["password"]}"/>
            <input type="submit" value="{$arrWords["submit"]["label"]}"/>
        </form>
    </div>
EOD;
