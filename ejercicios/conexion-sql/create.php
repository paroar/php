<?php
define("DBNAME", "mysql:host=localhost");
define("USER", "root");
define("PASSWORD", "");


function createDB($dbname)
{
    try {
        $db = new PDO(DBNAME, USER, PASSWORD);  
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        $statement = $db->prepare($sql);
        $statement->execute();
        echo "BASE DE DATOS CREADA CON ÉXITO: " . $dbname . "\n";
    } catch (PDOException $e) {
        echo "An error ocurred" . $e->getMessage();
    }
}

function createTable($dbname, $table)
{
    try {
        $db = new PDO(DBNAME.";dbname=$dbname", USER, PASSWORD);
        $query = $db->prepare($table);
        $query->execute();
        echo "TABLA CREADA CON ÉXITO\n";
    } catch (PDOException $e) {
        echo "An error ocurred" . $e->getMessage();
    }
}

$dbname = "libro";

$book =<<<SQL
CREATE TABLE IF NOT EXISTS Book 
(
  id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  isbn varchar(13),
  title varchar(255),
  author varchar(255),
  stock smallint(5),
  price float
)
SQL;

$customer=<<<SQL
CREATE TABLE IF NOT EXISTS Customer 
(
  id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  firstname varchar(255),
  surname varchar(255),
  email varchar(255),
  type enum('basic', 'premium')
)
SQL;

$sale=<<<SQL
CREATE TABLE IF NOT EXISTS Sale 
(
  id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  customer_id int(10),
  date datetime,
  FOREIGN KEY(customer_id) REFERENCES Customer(id)
)
SQL;

$borrowed_books =<<<SQL
CREATE TABLE IF NOT EXISTS Borrowed_books 
(
  customer_id int(10),
  book_id int(10),
  start datetime,
  end datetime,
  FOREIGN KEY(customer_id) REFERENCES Customer(id),
  FOREIGN KEY(book_id) REFERENCES Book(id)
)
SQL;

$sale_book =<<<SQL
CREATE TABLE IF NOT EXISTS Sale_book 
(
  book_id int(10),
  sale_id int(10),
  amount smallint(5),
  FOREIGN KEY(sale_id) REFERENCES Sale(id),
  FOREIGN KEY(book_id) REFERENCES Book(id)
)
SQL;


createDB($dbname);
createTable($dbname, $book);
createTable($dbname, $customer);
createTable($dbname, $sale);
createTable($dbname, $borrowed_books);
createTable($dbname, $sale_book);