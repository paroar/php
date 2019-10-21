<?php

require("utilities.php");
require("validation.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    if (!email_validation($email)) {
        echo "The email is not valid";
        exit;
    }

    $allowed = array('jpg', 'jpeg', 'png', 'gif');
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    if (!in_array($fileActualExt, $allowed)) {
        echo "You cannot upload .$fileActualExt files";
        exit;
    }

    if ($fileError !== 0) {
        echo "There was an error uploading your file: $fileError";
        exit;
    }

    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
    $fileDestination = '../uploads/' . $fileNameNew;
    if (!move_uploaded_file($fileTmpName, $fileDestination)) {
        echo "There was an error moving the file from tmp to the server";
        exit;
    }

    cv($_POST, $fileNameNew);
}
