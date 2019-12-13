<?php
namespace Form\Register;
class Customer
{
    static function paintForm()
    {
        echo <<<EOD
        <form action="./Controller/Customer.php" method="post">
            <input type="text" placeholder="Nombre" name="name">
            <input type="text" placeholder="Primer apellido" name="firstSurname">
            <input type="text" placeholder="Segundo apellido" name="secondSurname">
            <input type="email" placeholder="Correo electrónico" name="email">
            <input type="submit" name="book">
        </form>
EOD;
    }
}
