<?php


try {
    if(isset($_POST["submit"])){
        echo json_encode($_POST, true);
    }else{
        throw new Exception("Couldn't find method on the controller");
    }
} catch (Throwable $e) {
    $error = array(
        "message" => $e->getMessage(),
        "code" => $e->getCode(),
        "file" => $e->getFile(),
        "line" => $e->getLine(),
        "trace" => $e->getTrace()
    );
    echo json_encode($error, true);
}

