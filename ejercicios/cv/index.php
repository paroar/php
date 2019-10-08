<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
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