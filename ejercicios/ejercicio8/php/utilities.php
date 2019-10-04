<?php
function mostrar_datos(){
    require("users.php");
    include("request.php");
    echo <<<EOD
    username: $name <br>;
    password: $users[$name]['password'] <br>
    gender: $users[$name]['gender'] <br>
EOD;
    echo "language: " . implode(", " , $users[$name]['language']) . "<br>";
    echo "nationality: " . implode(", " , $users[$name]['nationality']) . "<br>";
    echo "hobbies: " . implode(", ", $users[$name]['hobbies']) . "<br>";
}
?>