<?php

if (isset($_POST['submit'])) {

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            $fileNameNew = uniqid('', true) . "." . $fileActualExt;
            $fileDestination = '../uploads/' . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
        } else {
            echo "There was an error uploading your file";
        }
    } else {
        echo "You cannot upload .$fileActualExt files";
    }

    $name=$_POST['name'];
    $firstname=$_POST['firstname'];
    $address=$_POST['address'];
    $telephone=$_POST['telephone'];
    $email=$_POST['email'];
    $birthdate=$_POST['birthdate'];
    $birthplace=$_POST['birthplace'];
    $civilstatus=$_POST['civilstatus'];
    $id=$_POST['id'];

    echo <<<EOD
        name: $name<br>
        firstname: $firstname<br>
        address: $address<br>
        telephone: $telephone<br>
        email: $email<br>
        birthdate: $birthdate<br>
        civil status: $civilstatus<br>
        id: $id<br>
        photo: <img src="../uploads/$fileNameNew"><br>
EOD;
}