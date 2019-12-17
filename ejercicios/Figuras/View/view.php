<?php

function paintFiguresShapesForm()
{
    echo <<<EOD
    <form action="./Controller/controller.php" method="POST" class="form">
        <div class="checkbox">
        <input type="checkbox" name="shapes[]" value="2">Circle
        <input type="checkbox" name="shapes[]" value="3">Triangle
        <input type="checkbox" name="shapes[]" value="4">Square
        <input type="checkbox" name="shapes[]" value="5">Pentagon
        </div>
        <input type="number" name="size" placeholder="Size" min="200" required>
        <input type="color" name="color">
        <input type="submit" name="submit" value="Send">
    </form>
EOD;
}

function paintFiguresSizesForm()
{
    //TODO
    echo <<<EOD
    <form action="./Controller/controller.php" method="POST" class="form">
        <div class="checkbox">
        <input type="checkbox" name="shapes[]" value="2">Circle
        <input type="checkbox" name="shapes[]" value="3">Triangle
        <input type="checkbox" name="shapes[]" value="4">Square
        <input type="checkbox" name="shapes[]" value="5">Pentagon
        </div>
        <input type="number" name="size" placeholder="Size" min="200" required>
        <input type="color" name="color">
        <input type="submit" name="shape" value="Send">
    </form>
EOD;
}

function paintFiguresColorsForm()
{
    //TODO
    echo <<<EOD
    <form action="./Controller/controller.php" method="POST" class="form">
        <div class="checkbox">
        <input type="checkbox" name="shapes[]" value="2">Circle
        <input type="checkbox" name="shapes[]" value="3">Triangle
        <input type="checkbox" name="shapes[]" value="4">Square
        <input type="checkbox" name="shapes[]" value="5">Pentagon
        </div>
        <input type="number" name="size" placeholder="Size" min="200" required>
        <input type="color" name="color">
        <input type="submit" name="color" value="Send">
    </form>
EOD;
}