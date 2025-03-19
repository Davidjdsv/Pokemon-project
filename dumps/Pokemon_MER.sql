CREATE TABLE `pokemon` (
  `id_pokemon` int PRIMARY KEY,
  `n_pokedex` int,
  `nombre_pokemon` varchar(50),
  `sexo` varchar(20),
  `tipo_1` varchar(20),
  `tipo_2` varchar(20),
  `mote` varchar(20),
  `descripcion` text,
  `peso` float(5,2),
  `altura` float(5,2),
  `id_item` int,
  `pokemon_img` mediumblob
);

CREATE TABLE `items` (
  `id_item` int PRIMARY KEY,
  `nombre_item` varchar(50),
  `descripcion` text
);

CREATE TABLE `entrenador` (
  `id_entrenador` int PRIMARY KEY,
  `tarjeta_entrenador` int UNIQUE,
  `nombre` varchar(50),
  `edad` int,
  `sexo` varchar(20)
);

CREATE TABLE `equipo_pokemon` (
  `id_equipo` int PRIMARY KEY,
  `id_entrenador` int,
  `id_pokemon` int
);

ALTER TABLE `pokemon` ADD FOREIGN KEY (`id_item`) REFERENCES `items` (`id_item`);

ALTER TABLE `pokemon` ADD FOREIGN KEY (`id_pokemon`) REFERENCES `equipo_pokemon` (`id_pokemon`);

ALTER TABLE `entrenador` ADD FOREIGN KEY (`id_entrenador`) REFERENCES `equipo_pokemon` (`id_entrenador`);
