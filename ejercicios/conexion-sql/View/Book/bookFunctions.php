<?php

function premiumBookForm()
{
    insertBook();
    deleteBook();
}

function insertBook()
{
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

function deleteBook()
{
    echo<<<EOD
    <form action="../../Controler/Book.php" method="POST">
        <input type="text" class="login-input" name="id" placeholder="id to delete">
        <input type="submit" class="" value="delete" name="submit">
    </form>
EOD;
}

function premiumTableBook($arr=[], $controllerPath)
{
    echo<<<EOD
     <table class="table">
     <tr>
        <th>DELETE</th>
        <th>ID</th>
        <th>ISBN</th>
        <th>TITLE</th>
        <th>AUTHOR</th>
        <th>STOCK</th>
        <th>PRICE</th>
    </tr>
EOD;
    foreach ($arr as $rowkey => $row) {
        echo<<<EOD
         <tr>
         <td>
         <form method="post" action="$controllerPath">
            <input type="submit" value="delete" name="submit">
            <input type="hidden" value="$row[id]" name="id">
         </form>
         </td>
EOD;
        foreach ($row as $col => $colvalue) {
            echo "<td>$colvalue</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function table($arr=[], $controllerPath)
{
    foreach ($arr as $rowkey => $row) {
        echo<<<EOD
         <tr>
         <td>
         <form method="post" action="$controllerPath">
            <input type="submit" value="delete" name="submit">
            <input type="hidden" value="$row[id]" name="id">
         </form>
         </td>
         <td>
         <form method="post" action="$controllerPath">
            <input type="submit" value="buy" name="submit">
            <input type="number" value="1" name="amount">
            <input type="hidden" value="$row[id]" name="id">
         </form>
         </td>
         <td>
         <form method="post" action="$controllerPath">
            <input type="submit" value="borrow" name="submit">
            <input type="hidden" value="$row[id]" name="id">
         </form>
         </td>
EOD;
        foreach ($row as $col => $colvalue) {
            echo "<td>$colvalue</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function basicTableBook($arr, $controllerPath)
{
    echo<<<EOD
     <table class="table">
     <tr>
        <th>BUY</th>
        <th>BORROW</th>
        <th>ID</th>
        <th>ISBN</th>
        <th>TITLE</th>
        <th>AUTHOR</th>
        <th>STOCK</th>
        <th>PRICE</th>
    </tr>
EOD;
foreach ($arr as $rowkey => $row) {
    echo<<<EOD
     <tr>
     <td>
     <form method="post" action="$controllerPath">
        <input type="submit" value="buy" name="submit">
        <input type="number" value="1" name="amount" min="1">
        <input type="hidden" value="$row[id]" name="id">
     </form>
     </td>
     <td>
     <form method="post" action="$controllerPath">
        <input type="submit" value="borrow" name="submit">
        <input type="hidden" value="$row[id]" name="id">
     </form>
     </td>
EOD;
    foreach ($row as $col => $colvalue) {
        echo "<td>$colvalue</td>";
    }
    echo "</tr>";
}
echo "</table>";
}
