use libros;
CREATE TABLE IF NOT EXISTS User
(
  user varchar(255) NOT NULL PRIMARY KEY,
  pass varchar(255)
) ENGINE=INNODB;