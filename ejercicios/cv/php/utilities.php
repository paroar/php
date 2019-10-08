<?php

function formularie(){
    echo <<<EOD
    <form action="php/dataproccess.php" method="POST" enctype="multipart/form-data">
    <!--PERSONAL DATA-->
    <label>--PERSONAL DATA--</label><br>
    <input type="text" name="name" id="" placeholder="Name"><br>
    <input type="text" name="firstname" id="" placeholder="Firstname"><br>
    <input type="text" name="address" id="" placeholder="Address"><br>
    <input type="text" name="telephone" id="" placeholder="Telephone"><br>
    <input type="email" name="email" id="" placeholder="email@example.com"><br>
    <input type="date" name="birthdate" id=""><br>
    <input type="text" name="birthplace" id="" placeholder="Bornplace"><br>
    <input type="text" name="civilstatus" id="" placeholder="Civil status"><br>
    <input type="file" name="file"><br>
    <input type="text" name="id" id="" placeholder="Id"><br>

    <!--STUDIES-->

    <!--EXPERIENCE-->

    <!--LANGUAGES-->

    <!--SUBMIT-->
    <button type="submit" name="submit">SUBMIT</button>
</form>
EOD;
}