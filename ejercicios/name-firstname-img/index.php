<html>

<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
        require("php/utilities.php");
        if(!isset($_GET['name'])){
            formularie();
        }
        if(isset($_GET['name'])){
            formularie();
            card($_GET['name'], $_GET['firstname'], $_GET['img']);
        }
    ?>
</body>

</html>