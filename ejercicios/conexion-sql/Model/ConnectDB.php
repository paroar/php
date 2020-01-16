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
            $this->connection = new PDO($DSN, $User, $Password);
        } catch (PDOException $e) {
            echo $e->getMessage();
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
        try {
            $pdo = $this->getConnectionDB();
            $statement= $pdo->prepare($query);
            $statement->execute();
        } catch (PDOException $e) {
            echo "QUERY ERROR" . $e->getMessage();
        }
    }

    public function query($query, $params)
    {
        try {
            $pdo = $this->getConnectionDB();
            $statement= $pdo->prepare($query);
            var_dump($query);
            var_dump($params);
            //exit;
            foreach($params as $key => $value){
                echo "$key $value";
            }
            $user = $params[":user"];
            $user = $params[":pass"];
            $statement->bindParam(":user", $user);
            $statement->bindParam(":pass", $pass);

            // exit;
            // foreach($params as $key => $value){
            //     $statement->bindParam($key, $value);
            // }
            $statement->execute();
            return $statement->fetch();
        } catch (PDOException $e) {
            echo "QUERY ERROR" . $e->getMessage();
        }
    }
}
