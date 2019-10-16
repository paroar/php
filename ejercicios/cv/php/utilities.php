<?php

function formularie()
{
    echo <<<EOD
    <form action="php/dataproccess.php" method="POST" enctype="multipart/form-data" class="cv-form">

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

        <label>--RESUME--</label><br>
        <input type="textarea"><br>

        <label>--EXPERIENCE--</label><br>
        <input type="textarea"><br>

        <label>--EDUCATION--</label><br>
        <input type="textarea"><br>
        <button type="submit" name="submit" class="submit">SUBMIT</button>
    </form>
EOD;
}

function cv($arr, $fileNameNew)
{
    echo <<<EOD
    <!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section class="personal-data">
        <div class="row">
            <div class="col-1-of-1">
                <div class="data">
                    <p>Firstname: $arr[firstname]</p>
                    <p>Surname: $arr[surname]</p>
                    <p>Address: $arr[address]</p>
                    <p>Telephone: $arr[telephone]</p>
                    <p>Email: $arr[email]</p>
                    <p>Birthdate: $arr[birthdate]</p>
                </div>
                <div class="avatar">
                    <img src="../uploads/$fileNameNew">  
                </div>
            </div>
        </div>
    </section>

    <section class="section-wrapper">
        <div class="section-wrapper__resume">
            <div class="row">
                <div class="col-1-of-1">
                    <p>RESUME</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-wrapper">
        <div class="section-wrapper__experience">
            <div class="row">
                <div class="col-1-of-1">
                    <p>EXPERIENCE</p>
                </div>
            </div>    
        </div>
    </section>    

    <section class="section-wrapper">
        <div class="section-wrapper__education">
            <div class="row">
                <div class="col-1-of-1">
                    <p>EDUCATION</p>
                </div>
            </div> 
        </div>
    </section>


    </body>
    </head>
EOD;
}

