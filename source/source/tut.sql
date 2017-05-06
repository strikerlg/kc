-- phpMyAdmin SQL Dump
-- version 3.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2010 at 12:43 PM
-- Server version: 5.1.41
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tut`
--

-- --------------------------------------------------------

--
-- Table structure for table `makes`
--

CREATE TABLE IF NOT EXISTS `makes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `makes`
--

INSERT INTO `makes` (`id`, `name`) VALUES
(1, 'Ford'),
(2, 'Chevy');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE IF NOT EXISTS `models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `make` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `make`, `name`) VALUES
(1, 1, 'F-150'),
(2, 1, 'Explorer'),
(3, 1, 'Taurus'),
(4, 2, 'Tahoe'),
(5, 2, 'Silverado');
