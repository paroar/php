<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require('php/utilities.php');
        if(!isset($_GET['submit'])){
            $word = "";
            $replace = "";
            $textarea = "";
            textarea($word,$replace,$textarea);
        }else{
            $word=$_GET['word'];
            $replace=$_GET['replace'];
            $textarea=$_GET['textarea'];
            textarea($word,$replace,$textarea);
        }
    ?>
</body>
</html>

