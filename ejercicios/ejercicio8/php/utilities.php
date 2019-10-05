<?php
function mostrar_datos(){
    require("users.php");
    include("request.php");
    echo <<<EOD
    username: $name <br>;
    password: $users[$name]['password'] <br>
    gender: $users[$name]['gender'] <br>
EOD;
    echo "language: " . implode(", " , $users[$name]['language']) . "<br>";
    echo "nationality: " . implode(", " , $users[$name]['nationality']) . "<br>";
    echo "hobbies: " . implode(", ", $users[$name]['hobbies']) . "<br>";
}

function form(){
    echo <<<EOD
    <div class="access">
    <div class="access__login">
        <span class="access__tittle">Login</span>
        <form class="access_login__form" method="post" action="{$_SERVER['PHP_SELF']}">
            <div class="input__section">
                <div class="input__section--text">
                    <input type='text' name='username' placeholder="Username" required />
                    <input type='password' name='password' placeholder="Password" required />
                </div>
            </div>
            <input type='submit' value='Login' class="btn" name='login'/>
        </form>
    </div>

    <span class="interline">-or-</span>

    <div class="access__register">
        <span class="access__tittle">Register</span>
        <form method="post" action="{$_SERVER['PHP_SELF']}">
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
            <input type='submit' value='Sign Up' class="btn" name='signup'/>
        </form>
    </div>
</div>
EOD;
}
?>