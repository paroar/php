<?php

function formularie()
{
    echo <<<EOD
    <form action="php/search_user.php" method="post">
        <input type="text" name="firstname" placeholder="Firstname">
        <input type="text" name="surname" placeholder="Surname">
        <input type="submit" name="submit">
    </form>
EOD;
}

function card($firstname, $surname, $img)
{
    echo <<<EOD
    <div class="row">
        <div class="col-1-of-1">   
            <div class="card">
                <div class="card__side card__side--front">
                    <img class="avatar" src="uploads/$img">
                </div>
                <div class="card__side card__side--back">
                    <p>$firstname $surname</p>
                </div>
            </div>
        </div>
    </div>
EOD;
}

function register()
{
    echo <<<EOD
    <form action="php/upload_user.php" method="post" enctype="multipart/form-data">
        <input type="text" name="firstname" placeholder="Firstname">
        <input type="text" name="surname" placeholder="Surname">
        <input type="file" name="file" accept="image/*">
        <input type="submit" name="submit">
    </form>
EOD;
}

function textarea($word, $replace, $textarea)
{
    echo <<<EOD
    <form action="./php/text_editor.php" method="post">
        <input type="textarea" name="word" placeholder="word" value="$word">
        <input type="textarea" name="replace" placeholder="replace" value="$replace"><br>
        <textarea name="textarea" placeholder="Place your text here..." value="" style="height:200px;width:600px;border:1px solid black" contenteditable="true"></textarea><br>
        <div name="textarea2" placeholder="Result" value="" style="height:200px;width:600px;border:1px solid black">$textarea</div><br>
        <input type="submit" name="submit" value="highlight">
        <input type="submit" name="submit" value="replace">
        <input type="submit" name="submit" value="deleteAll">
        <input type="submit" name="submit" value="search">
        <input type="submit" name="submit" value="posiciones">
        <input type="submit" name="submit" value="existe">
        <input type="submit" name="submit" value="reemplazar">
    </form>
EOD;
}

function isIn($firstname, $surname)
{
    $files = scandir('../uploads');
    $pattern = $firstname . $surname;
    foreach ($files as &$file) {
        if (strcmp($pattern, explode('.', $file)[0]) == 0) {
            return $file;
        }
    }
    return false;
}

function buscar($aguja, $pajar)
{
    $pajar = explode(" ", $pajar);
    $posiciones = [];
    for ($i = 0; $i < count($pajar); $i++) {
        if (strcmp($pajar[$i], $aguja) == 0) {
            array_push($posiciones, $i);
        }
    }
    if (count($posiciones) !== 0) {
        return $posiciones;
    }
    return false;
}

function highlight($word, $textarea)
{
    $textarea = str_replace($word, "<span style='background-color:yellow'>$word</span>", $textarea);
    return $textarea;
}

function replace($word, $replace, $textarea)
{
    $textarea = str_replace($word, $replace, $textarea);
    return $textarea;
}

function deleteAll($word, $textarea){
    $textarea = str_replace($word, "", $textarea);
    return $textarea;
}

function posiciones($aguja, $pajar)
{
    $pos = buscar($aguja, $pajar);
    if ($pos !== false && count($pos) > 0) {
        return $pos;
    }
}

function existe($aguja, $pajar)
{
    $bool = buscar($aguja, $pajar);
    if ($bool !== false && count($bool) > 0) {
        return true;
    }
    return false;
}

function reemplazar($palabra, $texto)
{
    echo "<input type='text'>";
    $texto = str_replace($palabra, $reemplazo, $texto);
}
