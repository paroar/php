<?php

function paintFiguresForm()
{
    echo <<<EOD
    <form action="" method="POST" class="form">
    <input type="number" name="sides" placeholder="Sides">
    <input type="number" name="size" placeholder="Size">
    <input type="number" name="num" placeholder="Quantity">
    <select name="color">
        <option value="red">Red</option>
        <option value="green">Green</option>
        <option value="blue">Blue</option>
    </select>
    <input type="submit" name="submit" value="Send">
</form>
EOD;
}
