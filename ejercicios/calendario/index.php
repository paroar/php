<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>

<body>
  <?php
  require('./php/dates.php');
  require('./php/utilities.php');
  if (!isset($_POST['submit'])) {
    paintForm();
  } else {
    paintForm();
    control();
  }
  ?>
</body>

</html>