<?php
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $surname=$_POST['surname'];
    $files = scandir('../uploads');
    $pattern = "";
    foreach ($files as &$file) {
        $pattern = "/$firstname$surname/";
        if(preg_match($pattern, $file) == 1){
            header("Location: ../index.php?firstname=$firstname&surname=$surname&img=$file");
        }
    }
    echo "Not found, redirecting";
    header("Refresh: 100; url=../index.php");
}