<?php
if(isset($_POST["language"])){
    setcookie("language", $_POST["language"], time()+3600);
    header("Location: ./form.php");
}elseif(isset($_GET["config"])){
    setcookie("language", $_POST["language"], time()-1);
    header("Location: ./index.php");
}

?>