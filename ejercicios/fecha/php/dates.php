<?php

function getDateTime($dateModifier = '+0 day', $dateFormat = 'd/m/Y')
{
    $date = new DateTime();
    $date->modify($dateModifier);
    return $date->format($dateFormat);
}

function arrayDaysMonth($month, $year)
{
    $arr = [];
    $date = new DateTime("$month $year");
    array_push($arr, $date->format('l'));
    $days = $date->format('t');
    for($i = 1; $i<=$days; $i++){
        array_push($arr, $i);
    }
    return $arr;
}

function calendarMonth($month, $year){
    $week = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
    $days = arrayDaysMonth($month,$year);
    for($i=0; $i<count($week);$i++){
        echo "<div class='week'><p>$week[$i]</p></div>";
    }
    echo "<br>";
    for($i=0; $i<count($days);$i++){
        if($days[0] == $week[$i]){
            break;
        }
        echo "<div class='day'>  </div>";
    }
    for($i=1; $i<count($days);$i++){
        echo "<div class='day'><p>$i</p></div>";
    }



}