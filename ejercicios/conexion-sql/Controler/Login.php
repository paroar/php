<?php
require_once("../Model/Login.php");
session_start();

$user = new Login($_POST["user"], $_POST["pass"]);
$_SESSION["user"] = serialize($user);

echo unserialize($_SESSION["user"]);

echo $_SESSION["instanceLibros"];
//$instance = unserialize($_SESSION["instanceLibros"]);

$query = "SELECT FROM * User;";
$DBlibro = ConnectDB::getInstance("config/config.json");

echo $DBlibro->query($query);



