-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2013 at 06:28 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `bought`
--

CREATE TABLE IF NOT EXISTS `bought` (
  `idBought` int(11) NOT NULL AUTO_INCREMENT,
  `idProduct` int(11) DEFAULT NULL,
  `idClient` int(11) DEFAULT NULL,
  PRIMARY KEY (`idBought`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bought`
--

INSERT INTO `bought` (`idBought`, `idProduct`, `idClient`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `town` varchar(150) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `photo` varchar(200) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`idClient`, `name`, `email`, `address`, `town`, `country`, `postcode`, `phoneNumber`, `photo`) VALUES
(1, 'Pedro Salgado', 'pedrosalgado@email.com', 'rua coisa e tal', 'Guimarães', 'Portugal', '4800-261', '9191919191', 'client/rcc_face.png');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE IF NOT EXISTS `favourites` (
  `idFavourites` int(11) NOT NULL AUTO_INCREMENT,
  `idProduct` int(11) DEFAULT NULL,
  `idClient` int(11) DEFAULT NULL,
  PRIMARY KEY (`idFavourites`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`idFavourites`, `idProduct`, `idClient`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 2, 1),
(8, 3, 1),
(9, 4, 1),
(10, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `imagedisplay`
--

CREATE TABLE IF NOT EXISTS `imagedisplay` (
  `idImageDisplay` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idPeca` int(11) DEFAULT NULL,
  `idTecido` int(11) DEFAULT NULL,
  PRIMARY KEY (`idImageDisplay`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `padrao`
--

CREATE TABLE IF NOT EXISTS `padrao` (
  `idPadrao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  PRIMARY KEY (`idPadrao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `padrao`
--

INSERT INTO `padrao` (`idPadrao`, `nome`) VALUES
(1, 'Riscas'),
(2, 'Xadrez'),
(3, 'Liso');

-- --------------------------------------------------------

--
-- Table structure for table `peca`
--

CREATE TABLE IF NOT EXISTS `peca` (
  `idPeca` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nomePeca` varchar(50) DEFAULT NULL,
  `idTipoPeca` int(11) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idPeca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `peca`
--

INSERT INTO `peca` (`idPeca`, `nomePeca`, `idTipoPeca`, `image`) VALUES
(1, 'SPREAD', 1, 'parts/body_spread2.png'),
(2, 'CLASSIC', 1, 'parts/collar_classic.png'),
(3, 'CLUB', 1, 'parts/collar_club.png'),
(4, 'SPREAD2', 2, 'parts/collar_spread.png'),
(5, 'CLASSIC2', 2, 'parts/collar_classic.png'),
(6, 'CLUB2', 2, 'parts/body_spread.png'),
(7, 'front01', 3, 'parts/collar_club.png'),
(8, 'front01', 3, 'parts/collar_club.png'),
(9, 'front01', 3, 'parts/collar_club.png'),
(10, 'front01', 0, 'parts/collar_club.png'),
(11, 'teste2', 4, 'parts/collar_club.png'),
(12, 'teste2', 4, 'parts/collar_club.png'),
(13, 'teste2', 4, 'parts/collar_club.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `idProduct` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`idProduct`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idProduct`, `name`, `price`, `image`) VALUES
(1, 'camisa 1', NULL, 'products/camisa_list1.jpg'),
(2, 'camisa 2', NULL, 'products/camisa_list2.jpg'),
(3, 'camisa 3', NULL, 'products/camisa_list3.jpg'),
(4, 'camisa 4', NULL, 'products/camisa_list4.jpg'),
(5, 'camisa 5', NULL, 'products/camisa_list5.jpg'),
(6, 'camisa 6', NULL, 'products/camisa_list6.jpg'),
(7, 'camisa 2', NULL, 'products/camisa_list3.jpg'),
(8, 'camisa 2', NULL, 'products/camisa_list3.jpg'),
(9, 'camisa 2', NULL, 'products/camisa_list3.jpg'),
(10, 'camisa 2', NULL, 'products/camisa_list3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tecidos`
--

CREATE TABLE IF NOT EXISTS `tecidos` (
  `idTecido` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nomeTecido` varchar(100) DEFAULT NULL,
  `idPadrao` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `imageBig` varchar(200) NOT NULL,
  `popular` int(20) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idTecido`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tecidos`
--

INSERT INTO `tecidos` (`idTecido`, `nomeTecido`, `idPadrao`, `image`, `imageBig`, `popular`) VALUES
(1, 'tecido1', 1, 'fabrics/fabric_01.jpg', 'fabrics/fabricBig_01.jpg', 3),
(2, 'tecido2', 1, 'fabrics/fabric_02.jpg', 'fabrics/fabricBig_02.jpg', 5),
(3, 'tecido3', 1, 'fabrics/fabric_03.jpg', 'fabrics/fabricBig_03.jpg', 14),
(4, 'tecido4', 1, 'fabrics/fabric_04.jpg', 'fabrics/fabricBig_04.jpg', 1),
(5, 'tecido5', 1, 'fabrics/fabric_05.jpg', 'fabrics/fabricBig_05.jpg', 1),
(6, 'tecido6', 1, 'fabrics/fabric_06.jpg', 'fabrics/fabricBig_06.jpg', 6),
(7, 'tecido7', 1, 'fabrics/fabric_07.jpg', 'fabrics/fabricBig_07.jpg', 14),
(8, 'tecido8', 2, 'fabrics/fabric_08.jpg', 'fabrics/fabricBig_08.jpg', 7),
(9, 'tecido9', 2, 'fabrics/fabric_09.jpg', 'fabrics/fabricBig_09.jpg', 1),
(10, 'tecido06', 2, 'fabrics/fabric_06.jpg', 'fabrics/fabricBig_06.jpg', 1),
(11, 'tecido06', 2, 'fabrics/fabric_06.jpg', 'fabrics/fabricBig_06.jpg', 4),
(12, 'tecido06', 2, 'fabrics/fabric_06.jpg', 'fabrics/fabricBig_06.jpg', 6),
(13, 'tecido06', 3, 'fabrics/fabric_06.jpg', 'fabrics/fabricBig_06.jpg', 13),
(14, 'tecido06', 3, 'fabrics/fabric_06.jpg', 'fabrics/fabricBig_06.jpg', 5),
(15, 'tecido06', 3, 'fabrics/fabric_06.jpg', 'fabrics/fabricBig_06.jpg', 0),
(16, 'tecido06', 3, 'fabrics/fabric_06.jpg', 'fabrics/fabricBig_06.jpg', 0),
(17, 'tecido06', 3, 'fabrics/fabric_06.jpg', 'fabrics/fabricBig_06.jpg', 8),
(18, 'tecido06', 3, 'fabrics/fabric_06.jpg', 'fabrics/fabricBig_06.jpg', 12),
(19, 'tecido06', 3, 'fabrics/fabric_06.jpg', 'fabrics/fabricBig_06.jpg', 0),
(20, 'tecido06', 3, 'fabrics/fabric_06.jpg', 'fabrics/fabricBig_06.jpg', 11),
(21, 'tecido06', 3, 'fabrics/fabric_06.jpg', 'fabrics/fabricBig_06.jpg', 1),
(22, 'tecido07', 3, 'fabrics/fabric_07.jpg', 'fabrics/fabricBig_07.jpg', 1),
(23, 'tecido07', 3, 'fabrics/fabric_07.jpg', 'fabrics/fabricBig_07.jpg', 14),
(24, 'tecido07', 3, 'fabrics/fabric_07.jpg', 'fabrics/fabricBig_07.jpg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tipopeca`
--

CREATE TABLE IF NOT EXISTS `tipopeca` (
  `idTipoPeca` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nomeTipoPeca` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTipoPeca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tipopeca`
--

INSERT INTO `tipopeca` (`idTipoPeca`, `nomeTipoPeca`) VALUES
(1, 'FITS'),
(2, 'FRONTS'),
(3, 'COLLAR'),
(4, 'CUFFS'),
(5, 'POCKET'),
(6, 'SIDESEAMS'),
(7, 'BOTTOM HEM'),
(8, 'BUTTONS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
