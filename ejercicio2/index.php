<html>
<head>
</head>
<body>

<?php
define('NUMTABLAS',4);

for($i = 1; $i < NUMTABLAS ;$i++){
    for($j = 1; $j < 11 ;$j++){
        echo $i . "x" . $j . "=" . $i*$j . "<br>";
    }
    echo "<br>";
}
?>

</body>
</html>