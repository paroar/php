<?php

function paintFiguresShapesForm()
{
  $shapes = [
    array("2", "Circle", "circleColor", "circleSize"),
    array("3", "Triangle", "triangleColor", "triangleSize"),
    array("4", "Square", "squareColor", "squareSize"),
    array("5", "Pentagon", "pentagonColor", "pentagonSize")
  ];

  echo '<form action="./Controller/controller.php" method="POST" class="form">';
  echo '<div class="checkbox">';
  foreach ($shapes as $shape) {
    echo "<input type='checkbox' name='shapes[]' value={$shape[0]}><span class='figureName'>{$shape[1]}</span>";
    echo "<input type='color' name='{$shape[2]}'>";
    echo "<input type='number' name='{$shape[3]}' placeholder='Size' min='100' max='300' value='200'>";
  }
  echo <<<EOD
        </div>
        <input type="submit" name="submit" value="Send">
    </form>
EOD;
}