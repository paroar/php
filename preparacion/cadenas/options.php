<?php
require("./functions.php");
if (isset($_POST["submit"])) {
    switch ($_POST["submit"]) {
        case "Search":
            $pos = search($_POST["wordSearch"], $_POST["textarea"]);
            print_r($pos);
            break;
        case "Exists":
            $pos = search($_POST["wordSearch"], $_POST["textarea"]);
            print_r($pos);
            break;
        case "Positions":
            $pos = search($_POST["wordSearch"], $_POST["textarea"]);
            print_r($pos);
            break;
        case "Replace":
            echo replace($_POST["wordSearch"], $_POST["wordReplace"], $_POST["textarea"]);
    }
}
