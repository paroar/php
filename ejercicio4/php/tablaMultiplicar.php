<?php
$num = $_REQUEST['x'];
echo "<table>";
for($i = 1; $i < 11 ;$i++){
        $pro = $i*$num;
        echo <<<EOD
        <tr>
                <td>$i x $num = </td>
                <td>{$pro}</td>
        </tr>
EOD;
}
echo "</table>"
?>