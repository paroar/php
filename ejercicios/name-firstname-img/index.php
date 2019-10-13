<html>

<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
        require("php/utilities.php");
        formularie();
        register();
        if(isset($_GET['firstname'])){
            card($_GET['firstname'], $_GET['surname'], $_GET['img']);
        }
    ?>
</body>

</html>