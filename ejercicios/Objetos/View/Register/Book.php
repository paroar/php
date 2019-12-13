<?php
namespace View\Register;
class Book
{
    static function paintForm()
    {
        echo <<<EOD
        <form action="./Controller/Book.php" method="post" class="form">
            <input type="text" placeholder="Autor" name="author">
            <input type="text" placeholder="Título" name="title">
            <input type="text" placeholder="Isbn" name="isbn">
            <input type="submit" name="book" value="Añadir libro">
        </form>
EOD;
    }
}
