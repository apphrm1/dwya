-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2002 at 12:34 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `docteur`
--

CREATE TABLE IF NOT EXISTS `docteur` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `commune` varchar(200) NOT NULL,
  `service` varchar(25) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Enter_Code` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `docteur`
--

INSERT INTO `docteur` (`id`, `username`, `password`, `telephone`, `adresse`, `commune`, `service`, `firstname`, `lastname`, `Email`, `Enter_Code`) VALUES
(1, 'mohamed mellal', 'mm2022', '0698.06.31.20', 'cite belle vue ', '408 AIN BABOUCHE', 'anesthesiologie', 'mohamed', 'mellal', 'mohamed@gmail.com', 0),
(2, 'selma mellal', 'sm2023', '06.98.06.31.95', 'cite el mostakbal', '401 OUM EL BOUAGHI', 'La gynecologie', 'selma', 'mellal', 'selma@gmail.com', 0),
(3, 'sabrina ahmed', 'sa2023', '0670.17.84.95', 'scssdds', '401 OUM EL BOUAGHI', 'anesthesiologie', 'sabrina', 'ahmed', 'sabrina@yahoo.fr', 0),
(4, 'amina hadji', 'as2023', '0660.32.45.85', 'cite el mostakbal', '401 OUM EL BOUAGHI', 'La medecine generale', 'amina', 'hadji', 'amina@hotmail.com', 0),
(5, 'madjed adnane', 'ma2023', 'zerr_sab@hotmail.com', 'ffffqsf', '401 OUM EL BOUAGHI', 'La medecine interne', 'madjed', 'adnane', 'zerr_sab@hotmail.com', 912869);

-- --------------------------------------------------------

--
-- Table structure for table `medicaments`
--

CREATE TABLE IF NOT EXISTS `medicaments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nomcommercial` varchar(120) NOT NULL,
  `quantite` int(10) NOT NULL,
  `usernamepharmacie` varchar(40) NOT NULL,
  PRIMARY KEY (`id`,`usernamepharmacie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `medicaments`
--

INSERT INTO `medicaments` (`id`, `nomcommercial`, `quantite`, `usernamepharmacie`) VALUES
(8, 'clamoxile', 100, 'sabrina zerrougui'),
(9, 'protopic pommade 0,1%', 10, 'sabrina zerrougui'),
(10, 'gaviscon', 100, 'sabrina zerrougui'),
(11, 'paradentaxe', 100, 'sabrina zerrougui'),
(12, 'doliprane 500mg', 100, 'sabrina zerrougui'),
(13, 'doliprane 1000mg', 50, 'sabrina zerrougui'),
(14, 'colpothrophine ', 120, 'sabrina zerrougui'),
(15, 'paracitamole', 10, 'sabrina zerrougui'),
(43, 'clamoxile', 100, 'mohamed liazid'),
(44, 'protopic pommade 0,1%', 10, 'mohamed liazid'),
(45, 'gaviscon', 100, 'mohamed liazid'),
(46, 'paradentaxe', 100, 'mohamed liazid'),
(47, 'doliprane 500mg', 0, 'mohamed liazid'),
(48, 'doliprane 1000mg', 0, 'mohamed liazid'),
(49, 'colpothrophine ', 120, 'mohamed liazid'),
(50, 'clamoxile', 100, 'safia bouhraoua'),
(51, 'protopic pommade 0,1%', 10, 'safia bouhraoua'),
(52, 'gaviscon', 100, 'safia bouhraoua'),
(53, 'paradentaxe', 100, 'safia bouhraoua'),
(54, 'doliprane 500mg', 0, 'safia bouhraoua'),
(55, 'doliprane 1000mg', 0, 'safia bouhraoua'),
(56, 'colpothrophine ', 120, 'safia bouhraoua'),
(57, '', 0, 'safia bouhraoua'),
(58, '', 0, 'safia bouhraoua'),
(59, 'clamoxile', 100, 'said sabri'),
(60, 'protopic pommade 0,1%', 10, 'said sabri'),
(61, 'gaviscon', 100, 'said sabri'),
(62, 'paradentaxe', 100, 'said sabri'),
(63, 'doliprane 500mg', 0, 'said sabri'),
(64, 'doliprane 1000mg', 0, 'said sabri'),
(65, 'colpothrophine ', 120, 'said sabri'),
(66, '', 0, 'said sabri'),
(67, '', 0, 'said sabri');

-- --------------------------------------------------------

--
-- Table structure for table `medinordonnance`
--

CREATE TABLE IF NOT EXISTS `medinordonnance` (
  `ord_id` int(11) NOT NULL,
  `med_id` int(11) NOT NULL,
  `med_usage` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `duree` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ord_id`,`med_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medinordonnance`
--

INSERT INTO `medinordonnance` (`ord_id`, `med_id`, `med_usage`, `duree`) VALUES
(56, 12, '2 boites ', '10 jours'),
(56, 13, 'dss', 'sQSs'),
(57, 8, '2 boites ', '10 jours'),
(57, 13, 'dss', 'sQSs'),
(57, 14, '2 boites ', '10 jours'),
(58, 13, 'dss', 'sQSs'),
(59, 8, '2 boites ', '10 jours'),
(60, 8, '2 boites ', '10 jours'),
(60, 11, '2 boites ', '10 jours'),
(60, 12, '2 boites ', '10 jours'),
(60, 13, 'dss', 'sQSs'),
(60, 14, '2 boites ', '10 jours'),
(60, 15, 'dss', 'sQSs'),
(61, 8, '2 boites ', '10 jours'),
(61, 11, '2 boites ', '10 jours'),
(61, 13, 'dss', 'sQSs'),
(61, 14, '2 boites ', '10 jours'),
(62, 9, '2 boites ', '10 jours'),
(62, 12, '2 boites ', '10 jours'),
(62, 15, 'dss', 'sQSs'),
(63, 11, '2 boites ', '10 jours'),
(63, 15, 'dss', 'sQSs'),
(64, 13, 'fffff', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(64, 15, 'fffff', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(65, 8, '', '3 jour'),
(65, 15, '', '3 jour'),
(66, 11, '', ''),
(66, 13, '', ''),
(67, 10, 'hh', '1'),
(67, 11, 'hh', '1'),
(68, 8, '', ''),
(68, 9, '', ''),
(68, 10, '', ''),
(69, 10, '', ''),
(69, 12, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `medinpharm`
--

CREATE TABLE IF NOT EXISTS `medinpharm` (
  `med_id` int(11) NOT NULL,
  `pharm_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`med_id`,`pharm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ordonnances`
--

CREATE TABLE IF NOT EXISTS `ordonnances` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `doct_id` varchar(40) NOT NULL,
  `nommalade` varchar(40) NOT NULL,
  `agemalade` varchar(20) NOT NULL,
  `date_ord` date NOT NULL,
  PRIMARY KEY (`ord_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `ordonnances`
--

INSERT INTO `ordonnances` (`ord_id`, `doct_id`, `nommalade`, `agemalade`, `date_ord`) VALUES
(55, '1', 'sabrina zerrougui  epse mellal', '20', '2023-05-02'),
(57, '1', 'doua hadji', '8', '2023-05-02'),
(58, '1', 'sabrina', '50', '2023-05-02'),
(59, '1', 'sabrina', '50', '2023-05-02'),
(60, '1', 'sabrina', '50', '2023-05-02'),
(61, '1', 'omar', 'sameh', '2023-05-03'),
(62, '2', 'fouzi smaali', '35', '2023-05-07'),
(63, '2', 'hinda', '25', '2023-05-07'),
(64, '1', 'sabrina zerr epse mellal', '38', '2023-05-09'),
(65, '2', 'amir', '2', '2023-05-12'),
(66, '1', 'sabrina', '45', '2023-05-31'),
(67, '1', 'doua hadji', '13', '2023-05-31'),
(68, '1', 'b,vhbv', '60', '2023-05-31'),
(69, '1', 'doua hadji', '26', '2002-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacie`
--

CREATE TABLE IF NOT EXISTS `pharmacie` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `commune` varchar(25) NOT NULL,
  `telephone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `adresse` varchar(150) CHARACTER SET utf8 NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pharmacie`
--

INSERT INTO `pharmacie` (`id`, `username`, `password`, `commune`, `telephone`, `adresse`, `firstname`, `lastname`) VALUES
(1, 'ibtissam chibani', 'ic2023', '401 OUM EL BOUAGHI', '0698.06.31.95', 'cite arbi ben mhidi', 'ibtissam', 'chibani'),
(2, 'sabrina zerrougui', 'sz2023', '402 AIN BEIDA', '0698.06.31.95', 'cite el mostakbal', 'sabrina', 'zerrougui'),
(3, 'ahmed adnane', 'aa2023', '408 AIN BABOUCHE', '0698.06.31.95', 'cite el amel', 'ahmed', 'adnane'),
(4, 'safia bouhraoua', 'sb2023', '408 AIN BABOUCHE', '0661.47.15.66', 'jgjhghjguyjhgu', 'safia', 'bouhraoua'),
(5, 'mohamed liazid', 'ml2022', '401 OUM EL BOUAGHI', '0698.06.31.95', 'cite el mostakbal ain beida', 'mohamed', 'liazid'),
(6, 'madjed amir', 'ma2023', '408 AIN BABOUCHE', '035.12.95.36', 'scsvsvsdvsv', 'madjed', 'amir'),
(7, 'said sabri', 'ss2023', '427 AIN ZITOUN', '032.65.15.02', 'cite el amel', 'said', 'sabri');

-- --------------------------------------------------------

--
-- Table structure for table `qrcode`
--

CREATE TABLE IF NOT EXISTS `qrcode` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
