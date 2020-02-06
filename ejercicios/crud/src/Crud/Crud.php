<?php

namespace Crud;

require '../vendor/autoload.php';
use Connection\Connect;

class Crud extends Connect{

    protected $table;
    protected $connection;
    protected $wheres = "";
    protected $sql = null;

    public function __construct($table = null){
        $this->connection = $this->connect();
        $this->table = $table;
    }

    public function get(){
        try {
            $this->sql = "SELECT * from $this->table $this->wheres";
            $stmt = $this->connection->prepare($this->sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function insert($obj){
        try {
            $fields = "(`" . implode("`, `", array_keys($obj)) . "`)";
            $values = "(:" . implode(", :", array_keys($obj)) . ")";
            $this->sql = "INSERT INTO $this->table $fields VALUES $values";
            $this->exec($obj);
            return $this->connection->lastInsertId();
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    private function exec($obj = null){
        $sql = $this->sql;
        $stmt = $this->connection->prepare($sql);
        if($obj !== null){
            foreach ($obj as $key => $value) {
                if(empty($value)){
                    $value = null;
                }
                $stmt->bindValue(":$key", $value);
            }
        }
        $stmt->execute();
        $this->resetValues();
        return $stmt->rowCount();
    }

    private function resetValues(){
        $this->wheres = "";
        $this->sql = null;
    }


}
