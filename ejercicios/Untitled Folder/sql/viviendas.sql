SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `tipos` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `tipo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `zonas` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `lugar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `viviendas` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `tipo` int(11) NOT NULL,
  `zona` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `dormitorios` int(11) NOT NULL,
  `garage` varchar(2) NOT NULL,
  `jardin` varchar(2) NOT NULL,
  `padel` varchar(2) NOT NULL,
  `piscina` varchar(2) NOT NULL,
  `zonascomunes` varchar(2) NOT NULL,
  `imagen` varchar(200),
  FOREIGN KEY(tipo) REFERENCES tipos(id),
  FOREIGN KEY(zona) REFERENCES zonas(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `usuarios` (
  `nombre` varchar(40) NOT NULL PRIMARY KEY,
  `pass` varchar(40) NOT NULL,
  `tipo` enum("admin", "basic")
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `zonas` (`id`, `lugar`) VALUES
(1, 'Majadahonda'),
(2, 'Pozuelo'),
(3, 'Las Rozas'),
(4, 'Villalba'),
(5, 'Galapagar');

INSERT INTO `tipos` (`id`, `tipo`) VALUES
(1, 'Chalet'),
(2, 'Adosado'),
(3, 'Piso'),
(4,'Apartamento');

INSERT INTO `viviendas` (`tipo`, `zona`, `precio`, `dormitorios`, `garage`, `jardin`, `padel`, `piscina`, `zonascomunes` ,`imagen`) VALUES
(1, 1, 200000, 3, 'si', 'no', 'si', 'si', 'no','Null');

INSERT INTO `usuarios` (`nombre`,`pass`,`tipo`) VALUES
("admin", "zayas", "admin"),
("basic", "basic", "basic");