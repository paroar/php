<?php
namespace View\Register;
class Customer
{
    static function paintForm()
    {
        echo <<<EOD
        <form action="./Controller/Customer.php" method="post" class="form">
            <input type="text" placeholder="Id" name="id">
            <input type="text" placeholder="Nombre" name="name">
            <input type="text" placeholder="Primer apellido" name="firstSurname">
            <input type="text" placeholder="Segundo apellido" name="secondSurname">
            <input type="email" placeholder="Correo electrónico" name="email">
            <input type="submit" name="customer" value="Añadir cliente">
        </form>
EOD;
    }
}
