<?php
require_once("./functions.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body class="loadingBody">
    <?php
    if (
        (in_array($_SESSION["username"], [2,3,4])) || 
        (in_array($_SESSION["password"], [2,3,4])) ||
        (in_array($_SESSION["email"], [2,3,4]))
    ) {
        header("Location: ./index.php");
    } else {
        echo "<img src='./loading.gif' class='loading'/>";
        $file =  file_get_contents("./usersDb.json");
        $arr = json_decode($file, true);

        $arr["users"][$_SESSION["username"]] = $_SESSION["password"];
        $jsonData = json_encode($arr);
        file_put_contents('./usersDb.json', $jsonData);
        header("Refresh: 3; ./loggedin.php?error=200");
    }
    ?>
</body>

</html>