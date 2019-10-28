<?php

function paintForm(){
    require("./php/arrays.php");
    $years = range(2000,2100,1);
    $months = $arrMonths;
    echo <<<EOD
    <form action="" method="POST">
        <select name="month">
        <option selected="selected" disabled>month</option>
EOD;
    foreach($months as$month){
        echo "<option value='$month'>$month</option>";
    }
    echo "</select>";
    echo <<<EOD
        <select name="year">
        <option selected="selected" disabled>year</option>
EOD;
    foreach($years as$year){
        echo "<option value='$year'>$year</option>";
    }
    echo <<<EOD
        </select>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
EOD;
}