<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require("form.php");
require("setCookies.php");
if(!isset($_POST["submit"]) ){
    viewForm("formArr.php");
}else{
    setCookies();
    header("Location: ./viewCookies.php");
}
?>
</body>
</html>

