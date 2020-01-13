CREATE DATABASE IF NOT EXISTS libros;
use libros;
CREATE TABLE IF NOT EXISTS Book
(
  id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  isbn varchar(13),
  title varchar(255),
  author varchar(255),
  stock smallint(5),
  price float
) ENGINE=INNODB;
CREATE TABLE IF NOT EXISTS Customer
(
  id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  firstname varchar(255),
  surname varchar(255),
  email varchar(255),
  type enum('basic', 'premium')
) ENGINE=INNODB;
CREATE TABLE IF NOT EXISTS Sale
(
  id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  customer_id int(10),
  date datetime,
  FOREIGN KEY(customer_id) REFERENCES Customer(id)
) ENGINE=INNODB;
CREATE TABLE IF NOT EXISTS Borrowed_books 
(
  customer_id int(10),
  book_id int(10),
  start datetime,
  end datetime,
  PRIMARY KEY(customer_id,book_id),
  FOREIGN KEY(customer_id) REFERENCES Customer(id) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY(book_id) REFERENCES Book(id) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=INNODB;
CREATE TABLE IF NOT EXISTS Sale_book 
(
  book_id int(10),
  sale_id int(10),
  amount smallint(5),
  PRIMARY KEY(book_id,sale_id),
  FOREIGN KEY(sale_id) REFERENCES Sale(id) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY(book_id) REFERENCES Book(id) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=INNODB;