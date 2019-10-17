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

function textarea($word,$replace,$textarea)
{
    echo <<<EOD
    <form action="./php/text_editor.php" method="post">
        <input type="textarea" name="word" placeholder="word" value="$word">
        <input type="textarea" name="replace" placeholder="replace" value="$replace">
        <textarea name="textarea" placeholder="Place your text here..." value="" rows="10" cols="100">$textarea</textarea>
        <input type="submit" name="submit" value="highlight">
        <input type="submit" name="submit" value="replace">
        <input type="submit" name="submit" value="deleteAll">
    </form>
EOD;
}

function isIn($firstname, $surname){
    $files = scandir('../uploads');
    $pattern = $firstname.$surname;
    foreach ($files as &$file) {
        if (strcmp($pattern, explode('.',$file)[0]) == 0){
            return $file;
        }
    }
    return false;
}
?>

