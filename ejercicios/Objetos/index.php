<?php
function classAutoLoader($class)
{
    require_once str_replace("\\", "/", $class) . '.php';
}
spl_autoload_register('classAutoLoader');

use Bookstore\Domain\{Book,Customer};
use Form\Register\{Book as RegisterBook,Customer as RegisterCustomer};
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
    $books = array(
        new Book("Historia de dos ciudades", "Charles Dickens"),
        new Book("El señor de los anillos", "J.R.R Tolkien"),
        new Book("El principito", "Antoine de Saint-Exupéry")
    );

    $customers = array(
        new Customer(null, "Silvia", "García", "Gómez", "silvg@gmail.com"),
        new Customer(4, "David", "González", "Diaz", "davidg@gmail.com"),
        new Customer(null, "Elena", "Perez", "Alonso", "elenap@gmail.com")
    );

    echo "<br>";

    foreach ($books as $book) {
        echo $book;
    }

    echo "<br>";

    foreach ($customers as $customer) {
        echo $customer;
    }

    echo "<br>";

    echo Customer::getLastid();

    RegisterBook::paintForm();
    RegisterCustomer::paintForm()
    ?>


</body>

</html>