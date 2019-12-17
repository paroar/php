<?php
function paintForm()
{
    require("./utils.php");
    echo <<<EOD
    <form method="POST" action="./controler.php">
    <select name="month">
        <option disabled selected>Month</option>
EOD;
    options($months);
    echo "</select>";
    echo <<<EOD
    <select name="year">
        <option disabled selected>Year</option>
EOD;
    options(range(2000, 2100));
    echo <<<EOD
        </select>
        <input type="submit" name="submit" value="Send">
</form>
EOD;
}

function options($xs)
{
    foreach ($xs as $x) {
        echo "<option>$x</option>";
    }
}

function firstDayOfMonth($month,$year){
    $date = new DateTime("$month $year");
    return $date->format("l");
}

function daysOfMonth($month,$year){
    $date = new DateTime("$month $year");
    return $date->format("t");
}

function arrMonth($month,$year){
    include("./utils.php");
    $numOfDays = daysOfMonth($month,$year);
    $firstDayOfMonth = firstDayOfMonth($month,$year);
    $arrMonthDays = [];
    foreach($week as $day){
        if($day !== $firstDayOfMonth){
            array_push($arrMonthDays, 0);
        }else{
            break;
        }
    }
    for($i=1; $i<=$numOfDays;$i++){
        array_push($arrMonthDays,$i);
    }
    return $arrMonthDays;
}

function paintMonth($month,$year){
    include("./utils.php");
    $xs = arrMonth($month,$year);
    echo "<div class='grid'>";
    foreach($week as $day){
        echo "<div>".$day."</div>";
    }
    foreach($xs as $x){
        if($x !== 0){
            echo "<div>".$x."</div>";
        }else{
            echo "<div></div>";
        }
    }
    echo "</div>";
}