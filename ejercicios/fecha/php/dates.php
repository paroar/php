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
    for ($i = 1; $i <= $days; $i++) {
        array_push($arr, $i);
    }
    return $arr;
}

function calendarMonth(){
if (isset($_POST['submit'])) {
    echo <<<EOD
    <div class='month'>
EOD;
    $month = $_POST['month'];
    $year = $_POST['year'];
    $week = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    $days = arrayDaysMonth($month, $year);
    echo "<h2 class='heading'>$month $year</h2>";
    for ($i = 0; $i < count($week); $i++) {
        echo "<div class='box week center'><p>" . substr($week[$i], 0, 3) . "</p></div>";
    }
    for ($i = 0; $i < count($days); $i++) {
        if ($days[0] == $week[$i]) {
            break;
        }
        echo "<div class='box'>  </div>";
    }
    for ($i = 1; $i < count($days); $i++) {
        echo "<div class='box day center'><p>$i</p></div>";
    }
    echo <<<EOD
    </div>
</body>
</html>
EOD;
}
}
