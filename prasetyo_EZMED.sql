-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2017 at 07:10 PM
-- Server version: 5.6.34-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prasetyo_EZMED`
--

-- --------------------------------------------------------

--
-- Table structure for table `ALARM`
--

CREATE TABLE IF NOT EXISTS `ALARM` (
  `ID_ALARM` varchar(10) NOT NULL,
  `ID_MEDICINE` varchar(10) NOT NULL,
  `EMAIL` varchar(55) NOT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date NOT NULL,
  `QTY` int(11) NOT NULL,
  `TIME_RANGE` int(11) NOT NULL,
  `STATUS` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_ALARM`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `DOCTOR`
--

CREATE TABLE IF NOT EXISTS `DOCTOR` (
  `SIP` varchar(35) NOT NULL,
  `NAME` varchar(55) NOT NULL,
  `ADDRESS` varchar(75) NOT NULL,
  `PHONE` varchar(14) NOT NULL,
  `PHOTO` varchar(100) NOT NULL,
  `INFO` varchar(150) NOT NULL,
  `OPERATIONAL` varchar(150) NOT NULL,
  PRIMARY KEY (`SIP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DOCTOR`
--

INSERT INTO `DOCTOR` (`SIP`, `NAME`, `ADDRESS`, `PHONE`, `PHOTO`, `INFO`, `OPERATIONAL`) VALUES
('5355/5355/3535/2019', 'Dr. Prasetyo Nugrohadi, Sp.OJ', 'Sidokare Indah XX-19, Sidoarjo', '+6287854444653', 'http://mobile4day.com/ezmed/images/dokter1.png', 'Menerima pasien umum, jiwa, dan penyakit dalam', 'Senin - Jumat\r\n09:00 - 17:00'),
('15/VII/156/2015', 'Dr. Hari Basuki N, dr, M.Kes', 'Wisma Permai XI no 3, Mulyorejo, Surabaya', '+6287854444651', 'http://mobile4day.com/ezmed/images/dokter2.jpg', 'Dokter umum', 'Senin - Jumat\r\n05:00 - 07:00\r\n18:00 - 21:00');

-- --------------------------------------------------------

--
-- Table structure for table `LOG_ALARM`
--

CREATE TABLE IF NOT EXISTS `LOG_ALARM` (
  `ID_ALARM` varchar(10) NOT NULL,
  `TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `LOG_USER`
--

CREATE TABLE IF NOT EXISTS `LOG_USER` (
  `EMAIL` varchar(55) NOT NULL,
  `TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS` varchar(6) NOT NULL,
  `LOCATION` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `MEDICINE`
--

CREATE TABLE IF NOT EXISTS `MEDICINE` (
  `ID_MEDICINE` varchar(10) NOT NULL,
  `SIA` varchar(35) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `STOCK` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `PHOTO` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_MEDICINE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MEDICINE`
--

INSERT INTO `MEDICINE` (`ID_MEDICINE`, `SIA`, `NAME`, `STOCK`, `PRICE`, `PHOTO`) VALUES
('MED11', 'XXX/XXX/14/2/2018', 'Biothicol 500mg', 12, 36000, ''),
('MED12', 'XXX/XXX/14/2/2018', 'Cefat', 6, 132000, ''),
('MED13', 'XXX/XXX/14/2/2018', 'Cefadroxil', 52, 32000, ''),
('MED14', 'XXX/XXX/14/2/2018', 'Panadol 250mg', 29, 3500, ''),
('MED15', 'XXX/XXX/14/2/2018', 'Sindositrol', 5, 39000, '');

-- --------------------------------------------------------

--
-- Table structure for table `PHARMACY`
--

CREATE TABLE IF NOT EXISTS `PHARMACY` (
  `SIA` varchar(35) NOT NULL,
  `NAME` varchar(55) NOT NULL,
  `OWNER` varchar(55) NOT NULL,
  `ADDRESS` varchar(75) NOT NULL,
  `PHONE` varchar(14) NOT NULL,
  `PHOTO` varchar(100) NOT NULL,
  `INFO` varchar(150) NOT NULL,
  `OPERATIONAL` varchar(150) NOT NULL,
  PRIMARY KEY (`SIA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PHARMACY`
--

INSERT INTO `PHARMACY` (`SIA`, `NAME`, `OWNER`, `ADDRESS`, `PHONE`, `PHOTO`, `INFO`, `OPERATIONAL`) VALUES
('XXX/XXX/14/2/2018', 'Apotek Kifia Marma', 'Prima Widiani, S.Farm', 'Mulyosari', '+62888880888', 'http://mobile4day.com/ezmed/images/apotek1.jpg', '', 'Open 24 hours'),
('XXX/VXX/14/2/2018', 'Apotek Calvary', 'William Duhus, S.Farm', 'Rungkut Industri', '+62899998899', 'http://mobile4day.com/ezmed/images/apotek2.jpg', '', '07:00 - 21:00');

-- --------------------------------------------------------

--
-- Table structure for table `PURCHASE`
--

CREATE TABLE IF NOT EXISTS `PURCHASE` (
  `ID_PURCHASE` varchar(8) NOT NULL,
  `ID_TRANSACTION` varchar(7) NOT NULL,
  `ID_MEDICINE` varchar(10) NOT NULL,
  `QTY` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `ALARM` varchar(3) NOT NULL,
  `VERIFICATION` varchar(2) NOT NULL,
  PRIMARY KEY (`ID_PURCHASE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TRANSACTION`
--

CREATE TABLE IF NOT EXISTS `TRANSACTION` (
  `ID_TRANSACTION` varchar(7) NOT NULL,
  `SIA` varchar(35) NOT NULL,
  `SIP` varchar(35) NOT NULL,
  `EMAIL` varchar(55) NOT NULL,
  `TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `PRICE` int(11) NOT NULL,
  `LOCATION` varchar(150) NOT NULL,
  `VERIFICATION` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE IF NOT EXISTS `USER` (
  `EMAIL` varchar(55) NOT NULL,
  `PASSWORD` varchar(35) NOT NULL,
  `NAME` varchar(55) NOT NULL,
  `ADDRESS` varchar(75) NOT NULL,
  `PHONE` varchar(14) NOT NULL,
  `PHOTO` varchar(100) NOT NULL,
  PRIMARY KEY (`EMAIL`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
