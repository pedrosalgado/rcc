# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.13)
# Database: rcc
# Generation Time: 2013-02-05 01:51:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table imageDisplay
# ------------------------------------------------------------

DROP TABLE IF EXISTS `imageDisplay`;

CREATE TABLE `imageDisplay` (
  `idImageDisplay` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idPeca` int(11) DEFAULT NULL,
  `idTecido` int(11) DEFAULT NULL,
  PRIMARY KEY (`idImageDisplay`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table peca
# ------------------------------------------------------------

DROP TABLE IF EXISTS `peca`;

CREATE TABLE `peca` (
  `idPeca` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nomePeca` varchar(50) DEFAULT NULL,
  `idTipoPeca` int(11) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idPeca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `peca` WRITE;
/*!40000 ALTER TABLE `peca` DISABLE KEYS */;

INSERT INTO `peca` (`idPeca`, `nomePeca`, `idTipoPeca`, `image`)
VALUES
	(1,'SPREAD',3,'parts/collar_spread.png'),
	(2,'CLASSIC',3,'parts/collar_classic.png'),
	(3,'CLUB',3,'parts/collar_club.png'),
	(4,'SPREAD2',3,'parts/collar_spread.png'),
	(5,'CLASSIC2',3,'parts/collar_classic.png'),
	(6,'CLUB2',3,'parts/collar_club.png');

/*!40000 ALTER TABLE `peca` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tecidos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tecidos`;

CREATE TABLE `tecidos` (
  `idTecido` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nomeTecido` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idTecido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tecidos` WRITE;
/*!40000 ALTER TABLE `tecidos` DISABLE KEYS */;

INSERT INTO `tecidos` (`idTecido`, `nomeTecido`, `image`)
VALUES
	(1,'tecido1','fabrics/fabric_01.jpg'),
	(2,'tecido2','fabrics/fabric_02.jpg'),
	(3,'tecido3','fabrics/fabric_03.jpg'),
	(4,'tecido4','fabrics/fabric_04.jpg'),
	(5,'tecido5','fabrics/fabric_05.jpg'),
	(6,'tecido6','fabrics/fabric_06.jpg'),
	(7,'tecido7','fabrics/fabric_07.jpg'),
	(8,'tecido8','fabrics/fabric_08.jpg'),
	(9,'tecido9','fabrics/fabric_09.jpg');

/*!40000 ALTER TABLE `tecidos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tipoPeca
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tipoPeca`;

CREATE TABLE `tipoPeca` (
  `idTipoPeca` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nomeTipoPeca` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTipoPeca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tipoPeca` WRITE;
/*!40000 ALTER TABLE `tipoPeca` DISABLE KEYS */;

INSERT INTO `tipoPeca` (`idTipoPeca`, `nomeTipoPeca`)
VALUES
	(1,'FITS'),
	(2,'FRONTS'),
	(3,'COLLAR'),
	(4,'CUFFS'),
	(5,'POCKET'),
	(6,'SIDESEAMS'),
	(7,'BOTTOM HEM'),
	(8,'BUTTONS');

/*!40000 ALTER TABLE `tipoPeca` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
