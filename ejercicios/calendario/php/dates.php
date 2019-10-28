<?php

function getDateTime($dateModifier = '+0 day', $dateFormat = 'd/m/Y')
{
  $date = new DateTime();
  $date->modify($dateModifier);
  return $date->format($dateFormat);
}

function control()
{
  if (isset($_POST['month']) && isset($_POST['year'])) {
    echo "<div class='wrapper'>";
    calendarMonth($_POST['month'], $_POST['year'], $_POST['year']);
    echo "<div/>";
  } elseif (isset($_POST['month'])) {
    echo "<div class='wrapper'>";
    calendarMonth($_POST['month'], 2019, 2019);
    echo "<div/>";
  } elseif (isset($_POST['year'])) {
    calendarYear($_POST['year']);
  } else {
    $date = new DateTime();
    $year = $date->format('Y');
    calendarYear($year);
  }
}

function arrayDaysMonth($month, $year)
{
  require("./php/arrays.php");
  $arr = [];
  $date = new DateTime("$month $year");
  $flagWeek = $date->format('l');
  $days = $date->format('t');
  for ($i = 0; $i < $days; $i++) {
    if ($flagWeek == $arrWeeks[$i]) {
      break;
    }
    array_push($arr, '');
  }
  for ($i = 1; $i <= $days; $i++) {
    array_push($arr, $i);
  }
  return $arr;
}

function calendarYear($year)
{
  require("./php/arrays.php");
  $months = $arrMonths;
  echo "<h2 class='heading--year'>$year</h2>";
  echo "<div class='year'>";
  array_walk($months, 'calendarMonth');
  
  /*
  foreach ($months as $month) {
    calendarMonth($month, $year);
  }*/
  
  echo "</div>";
}

function calendarMonth($month, $year, $stringYear = '')
{
  require("./php/arrays.php");
  $week = $arrWeeks;
  $days = arrayDaysMonth($month, $year);
  echo "<div>";
  echo "<h2 class='heading'>$month $stringYear</h2>";
  echo "<div class='month'>";
  for ($i = 0; $i < count($week); $i++) {
    echo "<div class='box week center'><p>" . substr($week[$i], 0, 3) . "</p></div>";
  }
  $modulus = 0;
  for ($i = 0; $i < count($days); $i++) {
    if ($days[$i] == 0) {
      echo "<div class='box'><p> </p></div>";
    } elseif ($modulus == 5 || $modulus == 6) {
      echo "<div class='box day center weekend'><p>" . $days[$i] . "</p></div>";
    } else {
      echo "<div class='box day center'><p>" . $days[$i] . "</p></div>";
    }
    ($modulus == 6 ? $modulus = -1 : '');
    $modulus++;
  }
  echo "</div>";
  echo "</div>";
}
