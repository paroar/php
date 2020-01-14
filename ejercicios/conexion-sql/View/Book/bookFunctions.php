<?php

function BookForm(){
    insertBook();
    deleteBook();
}

function insertBook(){
    echo<<<EOD
    <form action="../../Controler/Book.php" method="POST">
        <input type="text" class="login-input" name="isbn" placeholder="isbn">
        <input type="text" class="login-input" name="title" placeholder="title">
        <input type="text" class="login-input" name="author" placeholder="author">
        <input type="number" class="login-input" name="stock" placeholder="stock">
        <input type="number" step="0.01" class="login-input" name="price" placeholder="price">
        <input type="submit" class="" value="insert" name="submit">
    </form>
EOD;
}

function deleteBook(){
    echo<<<EOD
    <form action="../../Controler/Book.php" method="POST">
        <input type="submit" class="" value="delete" name="submit">
    </form>
EOD;
}