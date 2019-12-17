<?php
function comprobarTemperaturas($xs)
{
  foreach ($xs as $iKey => $iValue) {
    foreach ($iValue as $jKey => $jValue) {
      if ($jValue > 3) {
        echo $iKey." => posición: [" .($jKey+1)."]<br>";
      }
    }
    echo "<br>";
  }
}
