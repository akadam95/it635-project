SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `lawfirm` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `lawfirm`;

DROP TABLE IF EXISTS `court`;
CREATE TABLE `court` (
  `casenumber` int NOT NULL,
  `judgeid` int NOT NULL,
  `judgename` varchar(255) NOT NULL,
  `courtaddress` varchar(255) NOT NULL,
  `attorneyname` varchar(255) NOT NULL,
  KEY `casenumber` (`casenumber`),
  CONSTRAINT `court_ibfk_1` FOREIGN KEY (`casenumber`) REFERENCES `file` (`casenumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
  `filename` varchar(255) NOT NULL,
  `filenumber` varchar(255) NOT NULL,
  `datecreated` date NOT NULL,
  `casenumber` int NOT NULL AUTO_INCREMENT,
 
  PRIMARY KEY (`casenumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'it635';

FLUSH PRIVILEGES;