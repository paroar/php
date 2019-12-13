<?php
namespace Form\Register;
class Book
{
    static function paintForm()
    {
        echo <<<EOD
        <form action="" method="post">
        <input type="text" placeholder="Autor" name="author">
        <input type="text" placeholder="Título" name="title">
        <input type="submit" name="book">
    </form>
EOD;
    }
}
