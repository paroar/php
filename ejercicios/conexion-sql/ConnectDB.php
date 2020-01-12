<?php

class ConnectDb
{
    private static $DBInstancePDO = null;
    private $DBType;
    private $DBName;
    private $Host;
    private $User;
    private $Password;
    private $DSN;

    private function __construct($configFile)
    {
        try {
            $config = json_decode(file_get_contents($configFile),true);
            $this->DBType = $config["DBType"];
            $this->DBName = $config["DBName"];
            $this->Host = $config["Host"];
            $this->User = $config["User"];
            $this->Password = $config["Password"];
            $this->DSN = $this->DBType . ":" . "host=" . $this->Host . ";" . "dbname=" . $this->DBName;
            return new PDO($this->DSN, $this->User, $this->Password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getConnectionDB($configFile)
    {
        if (!self::$DBInstancePDO) {
            self::$DBInstancePDO = new ConnectDb($configFile);
        }
        return self::$DBInstancePDO;
    }

    public static function endConnectionDB()
    {
        self::$DBInstancePDO = null;
    }

    function query($query){
        try {
            $statement = self::$DBInstancePDO->prepare($query);
            $statement->execute();
        } catch (PDOException $e) {
            echo "QUERY ERROR" . $e->getMessage();
        }

    }
}
