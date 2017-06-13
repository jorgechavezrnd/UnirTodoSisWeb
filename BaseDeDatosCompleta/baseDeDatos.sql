CREATE DATABASE `sisWebdb`;

USE `sisWebdb`;

-- Crear Usuarios y Login

CREATE TABLE `usuarios` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`user_name` VARCHAR(20) NOT NULL,
	`password` VARCHAR(100) NOT NULL,
	`type` VARCHAR(20) NOT NULL,
	PRIMARY KEY (`id`)
);

-- Cursos de Formacion Continua

CREATE TABLE `cursos` (
  `curso_id` int(11) NOT NULL AUTO_INCREMENT,
  `sigla` varchar(7) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `resumen` varchar(500) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `docente` varchar(50) NOT NULL,
  `imagename` varchar(50) NOT NULL,
  `imagecontent` longblob NOT NULL,
  PRIMARY KEY (`curso_id`)
);

-- Noticias

CREATE TABLE `noticia` (
  `id` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8_spanish_ci NOT NULL,
  `autor` varchar(20) COLLATE utf8_spanish_ci NOT NULL
);

-- Plantel Docente

CREATE TABLE IF NOT EXISTS `docente` (
  `ci` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `grado_academico` varchar(50) NOT NULL,
  `estado_laboral` varchar(50) NOT NULL,
  `formacion_academica` varchar(350) NOT NULL,
  `formacion_profesional` varchar(350) NOT NULL,
  `historial_trabajo` varchar(350) NOT NULL,
  `nombre_foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `materia` (
  `codigo` int(11) NOT NULL,
  `sigla` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';


CREATE TABLE IF NOT EXISTS `materiasDictadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ci` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

