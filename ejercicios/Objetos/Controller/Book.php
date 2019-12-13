<?php
function classAutoLoader($class)
{
    require_once '../' . str_replace("\\", "/", $class) . '.php';
}
spl_autoload_register('classAutoLoader');
use Bookstore\Domain\Book;
require_once './addJson.php';

if (isset($_POST["book"])) {
    $book = new Book(
        $_POST["author"],
        $_POST["title"],
        $_POST["isbn"]
    );
    $arr = $book->toArray();
    addToJSON($arr, "Books");
    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}
