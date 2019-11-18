<?php
if (isset($_POST["submit"])) {
    highlight_string(var_export($_FILES, true));
    $file = $_FILES["file"];

    $fileName = $file["name"];
    $fileType = $file["type"];
    $fileTmpName = $file["tmp_name"];
    $fileError = $file["error"];
    $fileSize = $file["size"];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $acceptedExt = ["jpeg", "jpg"];

    if ($fileError !== 0) {
        header("Location: ./index.php?error=$fileError");
    } elseif ($fileSize > 500000) {
        header("Location: ./index.php?error=$fileSize");
    } elseif (!in_array($fileActualExt, $acceptedExt)) {
        header("Location: ./index.php?error=$fileActualExt");
    } else {
        $fileNewName = uniqid() . "." . $fileActualExt;
        move_uploaded_file($fileTmpName, "./files/$fileNewName") || "ERROR UPLOADING";
    }
}
