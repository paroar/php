<?php

function formularie()
{
    echo <<<EOD
    <form action="php/dataproccess.php" method="POST" enctype="multipart/form-data" class="cv-form">
        <!--PERSONAL DATA-->
        <label>--PERSONAL DATA--</label><br>
        <input type="text" name="name" id="" placeholder="Name" required><br>
        <input type="text" name="firstname" id="" placeholder="Firstname" required><br>
        <input type="date" name="birthdate" id="" required><br>
        <p>Address</p>
        <input type="text" name="address" id="" placeholder="Address" required>
        <input type="text" name="cp" id="" placeholder="Postal code" required><br>
        <p>Contact</p>
        <input type="tel" name="telephone" id="" placeholder="Telephone" required><br>
        <input type="email" name="email" id="" placeholder="email@example.com" required>
        <p>Photo</p>
        <input type="file" name="file" accept=".gif,.jpg,.png,.jpeg"><br>
        <button type="submit" name="submit" class="submit">SUBMIT</button>
    </form>
EOD;
}

function cv($name, $firstname, $address, $telephone, $email, $birthdate, $fileNameNew)
{
    echo <<<EOD
    <!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="row">
        <div class="col-1-of-1">
            col-1-of-1
        </div>
    </div>
    <div class="row">
        <div class="col-3-of-4">
            <p>name: $name</p>
            <p>firstname: $firstname</p>
            <p>address: $address</p>
            <p>telephone: $telephone</p>
            <p>email: $email</p>
            <p>birthdate: $birthdate</p>
        </div>
        <div class="col-1-of-4">
            <div class="avatar">
                <img src="../uploads/$fileNameNew"> 
            </div>
        </div>
    </div>
    </body>
    </head>
EOD;
}
