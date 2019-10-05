<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    require("php/users.php");
    require("php/utilities.php");
    //REGISTER
    if (
        !empty($_REQUEST['newusername']) &&
        !empty($_REQUEST['newpassword']) &&
        !empty($_REQUEST['language']) &&
        !empty($_REQUEST['gender']) &&
        !empty($_REQUEST['nationality']) &&
        !empty($_REQUEST['hobby']) &&
        $_REQUEST['repassword'] === $_REQUEST['repassword']
    ) {
        require("php/request.php");
        if (!array_key_exists($newname, $users)) {
            $users[$newname] = [
                "password" => $newpass,
                "gender" => $sex,
                "language" => $language,
                "nationality" => $nation,
                "hobbies" => $hobby
            ];
            mostrar_datos();
        } else {
            echo "Username already used, choose another one";
        }
    //LOGIN    
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
        form();
    }
    ?>
</body>

</html>