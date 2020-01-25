<?php
session_start();
require_once("bookFunctions.php");
require_once("../../Model/Book.php");
require_once("../../Model/ConnectDB.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>

<body>
    <?php
    $DB = ConnectDB::getInstance("../../config/config.json");
    $pdo = $DB->getConnectionDB();
    isset($_GET["page"]) ? $page = $_GET["page"] : $page = 1;
    $resultsPerPage = 10;
    $start = ($page-1)*$resultsPerPage;
    $numOfPages = ceil(Book::numBooks($pdo)/$resultsPerPage);
    $arr = Book::selectLimitBooks($pdo, $start, $resultsPerPage);
    echo "<div class='pagination-container'>";
    for ($page=1; $page<=$numOfPages;$page++) {
        echo "<a href='$_SERVER[PHP_SELF]?page=$page' class='pagination'>$page</a>";
    }
    echo "</div>";
    basicTableBook($arr, "../../Controler/Book.php");
    ?>
    <a href="">Go back</a>
</body>

</html>