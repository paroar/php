<?php
    include_once("ConnectDB.php");
?>
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
    $DBlibro = ConnectDB::getConnectionDB("config/config.json");
    echo "<br>";

    $sale_book =<<<SQL
CREATE TABLE IF NOT EXISTS Sale_book 
(
  book_id int(10),
  sale_id int(10),
  amount smallint(5),
  PRIMARY KEY(book_id,sale_id),
  FOREIGN KEY(sale_id) REFERENCES Sale(id) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY(book_id) REFERENCES Book(id) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=INNODB
SQL;

$statement = $DBlibro->prepare($sale_book);
$statement->execute(); 
    ?>
</body>
</html>