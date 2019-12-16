<?php
namespace View\Register;
class Book
{
    static function paintForm()
    {
        echo <<<EOD
        <form action="./Controller/Book.php" method="post" class="form">
            <input type="text" placeholder="Autor" name="author" required>
            <input type="text" placeholder="Título" name="title" required>
            <input type="text" placeholder="Isbn" name="isbn" required>
            <input type="submit" name="book" value="Añadir libro">
        </form>
EOD;
    }
}
