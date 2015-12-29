-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2015 at 03:32 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `getmybooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE IF NOT EXISTS `tblproduct` (
  `s_id` varchar(100) NOT NULL,
  `prod_no` int(10) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(100) NOT NULL,
  `prod_descr` text NOT NULL,
  `prod_cat` varchar(100) NOT NULL,
  `prod_price` float NOT NULL,
  `prod_quan` int(10) NOT NULL,
  `date_added` datetime NOT NULL,
  `sold` varchar(3) NOT NULL,
  PRIMARY KEY (`prod_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tblproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblpurches`
--

CREATE TABLE IF NOT EXISTS `tblpurches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` varchar(100) NOT NULL,
  `prod_id` varchar(5) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_quan` varchar(5) NOT NULL,
  `prod_price` varchar(10) NOT NULL,
  `prod_total` varchar(10) NOT NULL,
  `p_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `tblpurches`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `s_id` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  `college` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`s_id`, `password`, `email`, `phone`, `address`, `name`, `role`, `college`) VALUES
('rajesh', 'rajesh21', 'rajesh.cme123@gmail.com', 8498044048, 'prathipadu,e.g.dt,533432', 's.rajesh', 'student', 'aditya engineering college'),
('rj', 'rj', 'seendripu.rajesh@gmail.com', 9078564346, 'ppd', 'rj', 'others', NULL),
('harsha', 'harsha', 'sriharsha.korlapati555@gmail.com', 8374989264, 'aditya', 'harsha', 'student', 'aditya engineering college'),
('rajesh_525', '123', 'rdf@g.om', 4545454545, 'rerd,fgf (er23 :);', 'djkdjkd', 'others', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `usrprod`
--

CREATE TABLE IF NOT EXISTS `usrprod` (
  `s_id` varchar(100) NOT NULL,
  `prod_no` int(10) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(100) NOT NULL,
  `prod_descr` text NOT NULL,
  `prod_cat` varchar(100) NOT NULL,
  `prod_price` float NOT NULL,
  `prod_quan` int(10) NOT NULL,
  `date_added` datetime NOT NULL,
  `sold` varchar(3) NOT NULL,
  PRIMARY KEY (`prod_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `usrprod`
--

