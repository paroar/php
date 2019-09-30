<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
</head>

<body>

    <?php

    require "./php/users.php";

    if (
        !empty($_REQUEST['newusername']) &&
        !empty($_REQUEST['newpassword']) &&
        !empty($_REQUEST['language']) &&
        !empty($_REQUEST['gender']) &&
        !empty($_REQUEST['nationality']) &&
        !empty($_REQUEST['hobby']) &&
        $_REQUEST['repassword'] === $_REQUEST['repassword']
    ) {
        $name = $_REQUEST['newusername'];
        $pass = $_REQUEST['newpassword'];
        $repass = $_REQUEST['repassword'];
        $sex = $_REQUEST['gender'];
        $language = $_REQUEST['language'];
        $nation = $_REQUEST['nationality'];
        $hobby = $_REQUEST['hobby'];
        if (!array_key_exists($name, $users)) {
            $users[$name] = [
                "password" => $pass,
                "gender" => $sex,
                "language" => $language,
                "nationality" => $nation,
                "hobbies" => $hobby
            ];
            echo "username: $name <br>";
            echo "password: " . $users[$name]['password'] . "<br>";
            echo "gender: " . $users[$name]['gender'] . "<br>";
            echo "language: " . implode(", ", $users[$name]['language']) . "<br>";
            echo "nationality: " . implode(", ", $users[$name]['nationality']) . "<br>";
            echo "hobbies: " . implode(", ", $users[$name]['hobbies']);
        } else {
            echo "Username already used, choose another one";
        }
    } elseif (
        !empty($_REQUEST['username']) &&
        !empty($_REQUEST['password'])
    ) {
        $name = $_REQUEST['username'];
        $pass = $_REQUEST['password'];
        if (isset($name) && isset($pass)) {
            if (array_key_exists($name, $users) && $users[$name]['password'] === $pass) {
                echo "Bienvenido {$name}";
            } else {
                echo "Usuario o contraseña incorrectas";
            }
        }
    } else {
        echo <<<EOD
    <div class="access">
    <div class="access__login">
        <span class="access__tittle">Login</span>
        <form class="access_login__form" method="get" action="{$_SERVER['PHP_SELF']}">
            <div class="input__section">
                <div class="input__section--text">
                    <input type='text' name='username' placeholder="Username" required />
                    <input type='password' name='password' placeholder="Password" required />
                </div>
            </div>
            <input type='submit' value='Login' class="btn" />
        </form>
    </div>

    <span class="interline">-or-</span>

    <div class="access__register">
        <span class="access__tittle">Register</span>
        <form method="get" action="{$_SERVER['PHP_SELF']}">
            <div class="input__section">
                <div class="input__section--text">
                    <input type='text' name='newusername' placeholder="Username" required />
                    <input type='password' name='newpassword' placeholder="Password" required />
                    <input type='password' name='repassword' placeholder="Repassword" required />
                </div>
            </div>
            <div class="input__section input__section--option">
                <label>Gender:</label><br>
                <input type="radio" name="gender" value="male" checked> Male
                <input type="radio" name="gender" value="female"> Female
            </div>
            <div class="input__section input__section--option">
                <label>Language:</label><br>
                <input type="checkbox" name='language[]' value="Spanish" />Spanish
                <input type="checkbox" name='language[]' value="French" />French
                <input type="checkbox" name='language[]' value="Italian" />Italian
                <input type="checkbox" name='language[]' value="Portuguese" />Portuguese
            </div>
            <div class="input__section input__section--option">

                <select name="nationality[]" id="" multiple>
                    <option disabled="disabled">Country</option>
                    <option value="Spain">Spain</option>
                    <option value="EEUU">EEUU</option>
                    <option value="France">France</option>
                    <option value="Deutchsland">Deutchsland</option>
                </select>

                <select name="hobby[]" id="" multiple>
                    <option disabled="disabled">Hobby</option>
                    <option value="Reading">Reading</option>
                    <option value="Writing">Writing</option>
                    <option value="Soccer">Soccer</option>
                </select>
            </div>
            <input type='submit' value='Sign Up' class="btn" />
        </form>
    </div>
</div>
EOD;
    }
    ?>
</body>

</html>