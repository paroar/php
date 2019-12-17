<?php

if(isset($_GET["config"])){
    setcookie("language", "", time()-1);
    header("Location: ./index.php");
}else{
    setcookie("language", $_POST["language"], time()+3600);
    header("Location: ./view_form.php");
}

?>