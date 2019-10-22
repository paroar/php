<?php

function formularie()
{
    echo <<<EOD
    <form action="php/dataproccess.php" method="POST" enctype="multipart/form-data" class="cv-form">

        <label>--PERSONAL DATA--</label><br>
        <input type="text" name="firstname" id="" placeholder="Firstname" required><br>
        <input type="text" name="surname" id="" placeholder="Surname" required><br>
        <input type="date" name="birthdate" id="" required><br>
        <p>Address</p>
        <input type="text" name="address" id="" placeholder="Address" required>
        <input type="text" name="cp" id="" placeholder="Postal code" required>
        <p>Contact</p>
        <input type="tel" name="telephone" id="" placeholder="Telephone" required>
        <input type="email" name="email" id="" placeholder="email@example.com" required>
        <p>Photo</p>
        <input type="file" name="file" accept=".gif,.jpg,.png,.jpeg"><br>

        <label>--RESUME--</label><br>
        <textarea name="resume" rows="14" cols="70"></textarea><br>

        <label>--EXPERIENCE--</label><br>
        <textarea name="experience" rows="14" cols="70"></textarea><br>

        <label>--EDUCATION--</label><br>
        <textarea name="education" rows="14" cols="70"></textarea><br>
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

    <div class="row">
        <div class="col-1-of-1">
            <h4 class="heading">RESUME</h4>
            <p class="paragraph">$arr[resume]</p>
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-1">
            <h4 class="heading">EXPERIENCE</h4>
            <p class="paragraph">$arr[experience]</p>
        </div>
    </div>    

    <div class="row">
        <div class="col-1-of-1">
            <h4 class="heading">EDUCATION</h4>
            <p class="paragraph">$arr[education]</p>
        </div>
    </div> 

</body>
</head>
EOD;
}

