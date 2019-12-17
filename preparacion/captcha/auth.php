<?php
if (isset($_POST["submit"])) {
    if ($_POST["captcha"] === $_POST["input"]) {
        echo "HUMAN";
    } else {
        echo "MR.ROBOTO";
        header("Refresh:5; ./index.php");
    }
}
