<?php
function classAutoLoader($class)
{
    require_once '../' . str_replace("\\", "/", $class) . '.php';
}
spl_autoload_register('classAutoLoader');
use Bookstore\Domain\Customer;
require_once './addJson.php';

if (isset($_POST["customer"])) {
    if ($_POST["id"] === "") {
        $id = null;
    } else {
        $id = $_POST["id"];
    }
    $customer = new Customer(
        $id,
        $_POST["name"],
        $_POST["firstSurname"],
        $_POST["secondSurname"],
        $_POST["email"]
    );
    $arr = $customer->toArray();
    addToJSON($arr, "Customers");
    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}
