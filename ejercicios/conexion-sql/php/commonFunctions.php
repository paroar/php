<?php

function table($arr){
    foreach ($arr as $rowkey => $row) {
        echo "<tr>";
       foreach ($row as $col => $colvalue) {
           echo "<td>$colvalue</td>";
       }
       echo "</tr>";
    }
    echo "</table>";
}