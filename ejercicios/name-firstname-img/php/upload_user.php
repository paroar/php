<?php
if (isset($_POST['submit'])) {
    $user_firstname = $_POST['firstname'];
    $user_surname = $_POST['surname'];
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_tmp_name = $_FILES['file']['tmp_name'];
    $file_error = $_FILES['file']['error'];

    if ($file_error != 0) {
        echo "Error uploading file: $file_error";
        header("Refresh:2; url=../index.html");
    }

    if (!is_uploaded_file($file_tmp_name)) {
        echo "Error not following rules of upload";
        header("Refresh:2; url=../index.html");
    }

    $file_actual_extension = explode("/", $file_type);
    $file_extension = "." . end($file_actual_extension);
    $file_name_new = $user_firstname . $user_surname . password_hash($user_firstname, PASSWORD_BCRYPT) . $file_extension . "<br>";
    
    (move_uploaded_file($file_, $file_destination) ? "Success" : "Error");
}
