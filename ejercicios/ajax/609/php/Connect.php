<?php

class Connect
{
    public function connect($configFile)
    {
        try {
            $config = json_decode(file_get_contents($configFile), true);
            $DBType = $config["DBType"];
            $DBName = $config["DBName"];
            $host = $config["Host"];
            $user = $config["User"];
            $passwd = $config["Password"];
            $dsn = $DBType . ":" . "host=" . $host . ";" . "dbname=" . $DBName;
            $pdo = new PDO($dsn, $user, $passwd);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
