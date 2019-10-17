<?php
require('utilities.php');
if (isset($_POST['submit'])) {
    $user_firstname = $_POST['firstname'];
    $user_surname = $_POST['surname'];
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_tmp_name = $_FILES['file']['tmp_name'];
    $file_error = $_FILES['file']['error'];

    if (isIn($user_firstname, $user_surname)) {
        header("Location: ../index.php?error=exist");
        exit;
    } elseif ($file_error != 0) {
        header("Location: ../index.php?error=$file_error");
    } elseif (!is_uploaded_file($file_tmp_name)) {
        header("Location: ../index.php?error=rules");
    } elseif (!is_dir('../uploads')) {
        header("Location: ../index.php?error=404directory");
    }

    $file_actual_extension = explode("/", $file_type);
    $file_extension = "." . end($file_actual_extension);
    $file_name_new = str_replace('/', '', $user_firstname . $user_surname . "." . password_hash($file_tmp_name, PASSWORD_BCRYPT) . $file_extension);

    if (move_uploaded_file($file_tmp_name, "../uploads/$file_name_new")) {
        echo "Success";
        header("Location: ../index.php?success=");
    }
    echo "There was some kind of error with the upload";
    header("Refresh:4; url=../index.php");
}
