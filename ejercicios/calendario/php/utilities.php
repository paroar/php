<?php

function paintForm(){
    $years = range(2000,2100,1);
    echo <<<EOD
    <form action="" method="POST">
        <select name="year" id="">
EOD;
    foreach($years as$year){
        echo "<option value='$year' name='year'>$year</option>";
    }
    echo <<<EOD
        </select>
        <input type="submit" name='submit'>
    </form>
EOD;
}