<?php

class ConnectDb
{
    private static $DBInstancePDO = null;
    private $connection;

    private function __construct($configFile)
    {
        try {
            $config = json_decode(file_get_contents($configFile), true);
        $DBType = $config["DBType"];
        $DBName = $config["DBName"];
        $Host = $config["Host"];
        $User = $config["User"];
        $Password = $config["Password"];
        $DSN = $DBType . ":" . "host=" . $Host . ";" . "dbname=" . $DBName;
        $pdo = new PDO($DSN, $User, $Password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection = $pdo;
        } catch (Throwable $th) {
            echo $th->getMessage();
        }
        
    }

    public static function getInstance($configFile)
    {
        if (!self::$DBInstancePDO) {
            self::$DBInstancePDO = new self($configFile);
        }
        return self::$DBInstancePDO;
    }

    public function getConnectionDB()
    {
        return $this->connection;
    }

    public function exec($query)
    {
        $pdo = $this->getConnectionDB();
        $statement = $pdo->prepare($query);
        $statement->execute();
    }
}
