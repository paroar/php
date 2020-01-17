<?php
require_once("../../php/commonFunctions.php");

function BorrowedForm()
{
    insertBorrowed();
    viewAllBorrowed();
    //deleteBorrowed();
}

function insertBorrowed()
{
    echo<<<EOD
    <form action="../../Controler/Borrowed.php" method="POST">
        Start<input type="date" name="borrowStart">
        End<input type="date" name="borrowEnd">
        <input type="submit" class="" value="insert" name="submit">
    </form>
EOD;
}

function viewAllBorrowed()
{
    echo<<<EOD
    <form action="../../Controler/Borrowed.php" method="POST">
        <input type="submit" class="" value="view" name="submit">
    </form>
EOD;
}

function deleteBorrowed()
{
    echo<<<EOD
    <form action="../../Controler/Borrowed.php" method="POST">
        <input type="text" name="id" placeholder="id to delete">
        <input type="submit" class="" value="delete" name="submit">
    </form>
EOD;
}

function tableBorrowed($arr)
{
    echo<<<EOD
     <table class="table">
     <tr>
        <th>CUSTOMER_ID</th>
        <th>BOOK_ID</th>
        <th>BORROW START</th>
        <th>BORROW END</th>
    </tr>
EOD;
    table($arr);
}
