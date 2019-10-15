<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <?php
        require("php/utilities.php");
        if(!isset($_GET['success'])){
            formularie();
        }else{
            echo "Success";
        }
    ?>

</body>

</html>