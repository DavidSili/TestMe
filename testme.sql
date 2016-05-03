-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 01:53 PM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testme`
--

-- --------------------------------------------------------

--
-- Table structure for table `ekonomija`
--

DROP TABLE IF EXISTS `ekonomija`;
CREATE TABLE IF NOT EXISTS `ekonomija` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pitanje` text COLLATE utf8_slovenian_ci NOT NULL,
  `odgovor` text COLLATE utf8_slovenian_ci NOT NULL,
  `odgovora` int(2) UNSIGNED NOT NULL,
  `tacnih` int(2) UNSIGNED NOT NULL,
  `resenje` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `grupa` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `no` int(9) UNSIGNED NOT NULL DEFAULT '0',
  `p` decimal(5,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci COMMENT='Menadžment';

-- --------------------------------------------------------

--
-- Table structure for table `finansije`
--

DROP TABLE IF EXISTS `finansije`;
CREATE TABLE IF NOT EXISTS `finansije` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pitanje` text COLLATE utf8_slovenian_ci NOT NULL,
  `odgovor` text COLLATE utf8_slovenian_ci NOT NULL,
  `odgovora` int(2) UNSIGNED NOT NULL,
  `tacnih` int(2) UNSIGNED NOT NULL,
  `resenje` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `grupa` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `no` int(9) UNSIGNED NOT NULL DEFAULT '0',
  `p` decimal(5,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci COMMENT='Menadžment';

-- --------------------------------------------------------

--
-- Table structure for table `hr_menadzment`
--

DROP TABLE IF EXISTS `hr_menadzment`;
CREATE TABLE IF NOT EXISTS `hr_menadzment` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pitanje` text COLLATE utf8_slovenian_ci NOT NULL,
  `odgovor` text COLLATE utf8_slovenian_ci NOT NULL,
  `odgovora` int(2) UNSIGNED NOT NULL,
  `tacnih` int(2) UNSIGNED NOT NULL,
  `resenje` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `grupa` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `no` int(9) UNSIGNED NOT NULL DEFAULT '0',
  `p` decimal(5,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci COMMENT='Menadžment';

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

DROP TABLE IF EXISTS `marketing`;
CREATE TABLE IF NOT EXISTS `marketing` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pitanje` text COLLATE utf8_slovenian_ci NOT NULL,
  `odgovor` text COLLATE utf8_slovenian_ci NOT NULL,
  `odgovora` int(2) UNSIGNED NOT NULL,
  `tacnih` int(2) UNSIGNED NOT NULL,
  `resenje` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `grupa` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `no` int(9) UNSIGNED NOT NULL DEFAULT '0',
  `p` decimal(5,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci COMMENT='Menadžment';

-- --------------------------------------------------------

--
-- Table structure for table `menadzment`
--

DROP TABLE IF EXISTS `menadzment`;
CREATE TABLE IF NOT EXISTS `menadzment` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pitanje` text COLLATE utf8_slovenian_ci NOT NULL,
  `odgovor` text COLLATE utf8_slovenian_ci NOT NULL,
  `odgovora` int(2) UNSIGNED NOT NULL,
  `tacnih` int(2) UNSIGNED NOT NULL,
  `resenje` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `grupa` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `no` int(9) UNSIGNED NOT NULL DEFAULT '0',
  `p` decimal(5,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci COMMENT='Menadžment';

-- --------------------------------------------------------

--
-- Table structure for table `podesavanja`
--

DROP TABLE IF EXISTS `podesavanja`;
CREATE TABLE IF NOT EXISTS `podesavanja` (
  `element` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `svojstvo` varchar(2000) COLLATE utf8_slovenian_ci DEFAULT NULL,
  UNIQUE KEY `element` (`element`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `strategijski_m`
--

DROP TABLE IF EXISTS `strategijski_m`;
CREATE TABLE IF NOT EXISTS `strategijski_m` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pitanje` text COLLATE utf8_slovenian_ci NOT NULL,
  `odgovor` text COLLATE utf8_slovenian_ci NOT NULL,
  `odgovora` int(2) UNSIGNED NOT NULL,
  `tacnih` int(2) UNSIGNED NOT NULL,
  `resenje` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `grupa` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `no` int(9) UNSIGNED NOT NULL DEFAULT '0',
  `p` decimal(5,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci COMMENT='Menadžment';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
