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

// function paintFiguresShapesForm()
// {
//     echo <<<EOD
//     <form action="./Controller/controller.php" method="POST" class="form">
//         <div class="checkbox">
//             <input type="checkbox" name="shapes[]" value="2"><span class="figureName">Circle</span>
//             <input type="color" name="circleColor">
//             <input type="number" name="circleSize" placeholder="Size" min="100" max="300" value="200">
//         </div>
//         <div class="checkbox">
//             <input type="checkbox" name="shapes[]" value="3"><span class="figureName">Triangle</span>
//             <input type="color" name="triangleColor">
//             <input type="number" name="triangleSize" placeholder="Size" min="100" max="300" value="200">
//         </div>
//         <div class="checkbox">
//             <input type="checkbox" name="shapes[]" value="4"><span class="figureName">Square</span>
//             <input type="color" name="squareColor">
//             <input type="number" name="squareSize" placeholder="Size" min="100" max="300" value="200">
//         </div>
//         <div class="checkbox">
//             <input type="checkbox" name="shapes[]" value="5"><span class="figureName">Pentagon</span>
//             <input type="color" name="pentagonColor">
//             <input type="number" name="pentagonSize" placeholder="Size" min="100" max="300" value="200">
//         </div>
//         <input type="submit" name="submit" value="Send">
//     </form>
// EOD;
// }
