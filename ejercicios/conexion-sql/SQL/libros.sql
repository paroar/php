use libros;

CREATE TABLE IF NOT EXISTS Book (
  id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  isbn varchar(13) NOT NULL,
  title varchar(255) NOT NULL,
  author varchar(255) NOT NULL,
  stock smallint(5) NOT NULL,
  price float NOT NULL
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Customer (
  id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  firstname varchar(255) NOT NULL,
  surname varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  pass varchar(255) NOT NULL,
  subscription enum('basic', 'premium') NOT NULL
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Sale (
  id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  customer_id int(10) NOT NULL,
  saleDate datetime NOT NULL,
  FOREIGN KEY(customer_id) REFERENCES Customer(id) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Borrowed_books (
  customer_id int(10) NOT NULL,
  book_id int(10) NOT NULL,
  borrowStart datetime NOT NULL,
  borrowEnd datetime NOT NULL,
  PRIMARY KEY(customer_id, book_id),
  FOREIGN KEY(customer_id) REFERENCES Customer(id) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY(book_id) REFERENCES Book(id) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Sale_book (
  book_id int(10) NOT NULL,
  sale_id int(10) NOT NULL,
  amount smallint(5) NOT NULL,
  PRIMARY KEY(book_id, sale_id),
  FOREIGN KEY(sale_id) REFERENCES Sale(id) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY(book_id) REFERENCES Book(id) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE = INNODB;

INSERT INTO
  `Book`(id, isbn, title, author, stock, price)
VALUES
  (
    1,
    "9781593275846",
    "Eloquent JavaScript, Second Edition",
    "Marijn Haverbeke",
    25,
    45
  );

INSERT INTO
  `Book`(id, isbn, title, author, stock, price)
VALUES
  (
    2,
    "9781449331818",
    "Learning JavaScript Design Patterns",
    "Addy Osmani",
    25,
    45
  );

INSERT INTO
  `Book`(id, isbn, title, author, stock, price)
VALUES
  (
    3,
    "9781449365035",
    "Speaking JavaScript",
    "Axel Rauschmayer",
    25,
    45
  );

INSERT INTO
  `Book`(id, isbn, title, author, stock, price)
VALUES
  (
    4,
    "9781491950296",
    "Programming JavaScript Applications",
    "Eric Elliott",
    25,
    45
  );

INSERT INTO
  `Book`(id, isbn, title, author, stock, price)
VALUES
  (
    5,
    "9781593277574",
    "Understanding ECMAScript 6",
    "Nicholas C. Zakas",
    25,
    45
  );

INSERT INTO
  `Book`(id, isbn, title, author, stock, price)
VALUES
  (
    6,
    "9781491904244",
    "You Don't Know JS",
    "Kyle Simpson",
    25,
    45
  );

INSERT INTO
  `Book`(id, isbn, title, author, stock, price)
VALUES
  (
    7,
    "9781449325862",
    "Git Pocket Guide",
    "Richard E. Silverman",
    25,
    45
  );

INSERT INTO
  `Book`(id, isbn, title, author, stock, price)
VALUES
  (
    8,
    "9781449337711",
    "Designing Evolvable Web APIs with ASP.NET",
    "Glenn Block, et al.",
    25,
    45
  );

INSERT INTO
  `Book` (id, isbn, title, author, stock, price)
VALUES
  (
    9,
    "0999201097984",
    'The Adventures of Duck and Goose',
    'Sir Quackalot',
    26,
    10.99
  );

INSERT INTO
  `Book` (id, isbn, title, author, stock, price)
VALUES
  (
    10,
    "3056273276784",
    'The Return of Duck and Goose',
    'Sir Quackalot',
    26,
    11.99
  );

INSERT INTO
  `Book` (id, isbn, title, author, stock, price)
VALUES
  (
    11,
    "1820940381787",
    'More Fun with Duck and Goose',
    'Sir Quackalot',
    26,
    12.99
  );

INSERT INTO
  `Book` (id, isbn, title, author, stock, price)
VALUES
  (
    12,
    "7464728102920",
    'Duck and Goose on Holiday',
    'Sir Quackalot',
    26,
    11.99
  );

INSERT INTO
  `Book` (id, isbn, title, author, stock, price)
VALUES
  (
    13,
    "6083846908508",
    'The Return of Duck and Goose',
    'Sir Quackalot',
    87,
    19.99
  );

INSERT INTO
  `Book` (id, isbn, title, author, stock, price)
VALUES
  (
    14,
    "0240823535673",
    'The Adventures of Duck and Goose',
    'Sir Quackalot',
    87,
    18.99
  );

INSERT INTO
  `Book` (id, isbn, title, author, stock, price)
VALUES
  (
    15,
    "5923779670013",
    'My Friend is a Duck',
    'A. Parrot',
    26,
    14.99
  );

INSERT INTO
  `Book` (id, isbn, title, author, stock, price)
VALUES
  (
    16,
    "5490435193490",
    'Annotated Notes on the ‘Duck and Goose’ chronicles',
    'Prof Macaw',
    89,
    8.99
  );

INSERT INTO
  `Book` (id, isbn, title, author, stock, price)
VALUES
  (
    17,
    "2983212010272",
    '‘Duck and Goose’ Cheat Sheet for Students',
    'Polly Parrot',
    57,
    5.99
  );

INSERT INTO
  `Book` (id, isbn, title, author, stock, price)
VALUES
  (
    18,
    "4218650609934",
    '‘Duck and Goose’: an allegory for modern times?',
    'A. Parrot',
    87,
    59.99
  );