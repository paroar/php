<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
    <form action="php/upload.php" method="post" enctype="multipart/form-data" class="form-file">
        <input type="file" name="file" class="btn btn--green"><br>
        <button type="submit" name="submit" class="btn btn--green">UPLOAD</button>
    </form>
    <?php
    require('php/print.php');
    isset($_GET['uploadsuccess']) and print_file_data();
    ?>
</body>

</html>