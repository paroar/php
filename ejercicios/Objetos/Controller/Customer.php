<?php
function classAutoLoader($class)
{
    print($class);
    require_once '../' . str_replace("\\", "/", $class) . '.php';
}
spl_autoload_register('classAutoLoader');
use Bookstore\Domain\Customer;

if(isset($_POST["book"])){
    $customer = new Customer(null,$_POST["name"], $_POST["firstSurname"],$_POST["secondSurname"],$_POST["email"]);
    echo $customer;
}else{
    header("Location: ../index.php");
}
