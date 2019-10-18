<?php

require('utilities.php');
if (isset($_POST['submit'])) {

    $action = $_POST['submit'];
    $word = $_POST['word'];
    $replace = $_POST['replace'];
    $textarea = $_POST['textarea'];

    switch ($action) {
        case "highlight":
            $textarea = highlight($word, $textarea);
            break;
        case "replace":
            if(isset($_POST['replace'])){
                $replace = $_POST['replace'];
            }else{
                $replace = "";
            }
            $textarea = replace($word, $replace, $textarea);
            break;
        case "deleteAll":
            $textarea = deleteAll($word, $textarea);
            break;
        case "search":
            $textarea = buscar($word, $textarea);
            break;
        case "posiciones":
            $textarea = implode(",",posiciones($word, $textarea));
            break;
        case "existe":
            $textarea = var_export(existe($word, $textarea), true);
            break;
        case "reemplazar":
            $textarea = reemplazar($word, $textarea);
            break;
    }

    header("Location: ../index.php?submit=success&word=$word&replace=$replace&textarea=$textarea");
}
