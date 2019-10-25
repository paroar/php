<?php

function paintForm(){
    $months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
        ];
    $years = range(2000,2100,1);
    echo <<<EOD
    <form action="" method="POST">
        <select name="month" id="">
EOD;
    foreach($months as$month){
        echo "<option value='$month' name='month'>$month</option>";
    }
    echo <<<EOD
        </select>
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