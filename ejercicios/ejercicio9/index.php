<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
</head>

<body>

<?php
include("php/utility_functions.php");
if(empty($_REQUEST['text'])){
    pintar_textarea();
}
?>

</body>
</html>