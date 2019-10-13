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

function isIn($firstname, $surname){
    $files = scandir('../uploads');
    $pattern = "/$firstname$surname/";
    foreach ($files as &$file) {
        if (preg_match($pattern, $file) == 1){
            return $file;
        }
    }
    return false;
}
?>

