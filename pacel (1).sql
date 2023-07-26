-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2016 at 10:46 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pacel`
--

-- --------------------------------------------------------

--
-- Table structure for table `receive`
--

CREATE TABLE IF NOT EXISTS `receive` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `pin` varchar(255) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `rid` varchar(255) NOT NULL,
  `ridno` varchar(255) NOT NULL,
  `outlet` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `receive`
--

INSERT INTO `receive` (`id`, `pin`, `rname`, `phone`, `rid`, `ridno`, `outlet`, `status`) VALUES
(10, 'VIP-3591620874', 'Henry Twumasi Aquah', '0271610910', 'Student ID', 'hiddidd', 'Accra', 'Received'),
(11, 'VIP-2069543178', 'click', '0217452120', 'Voter ID', 'hs232323', 'Kumasi', 'Received'),
(12, 'VIP-2910748653', 'click', '02014215478', 'Voter ID', '0124255HS', 'Kumasi', 'Received'),
(13, 'VIP-6708912354', 'sam', '0271610910', 'Voter ID', 'vcvcvcv', 'Kumasi', 'Received');

-- --------------------------------------------------------

--
-- Stand-in structure for view `report`
--
CREATE TABLE IF NOT EXISTS `report` (
`pin` varchar(255)
,`sname` varchar(255)
,`sid` varchar(255)
,`sidno` varchar(255)
,`source` varchar(255)
,`destination` varchar(255)
,`content` varchar(255)
,`rname` varchar(255)
,`phone` varchar(255)
,`rid` varchar(255)
,`ridno` varchar(255)
,`outlet` varchar(255)
);
-- --------------------------------------------------------

--
-- Table structure for table `sender`
--

CREATE TABLE IF NOT EXISTS `sender` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `pin` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `sidno` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sender`
--

INSERT INTO `sender` (`id`, `pin`, `sname`, `phone`, `sid`, `sidno`, `source`, `destination`, `content`) VALUES
(4, 'VIP-3591620874', 'click', 'dkfk', 'Voter ID', 'lflgl', 'Accra', 'Kumasi', 'kdkfkdk'),
(5, 'VIP-2069543178', 'Rose', '024251241', 'Drivers Lience', '021455554755885', 'Accra', 'Kumasi', 'Laptop Battery'),
(6, 'VIP-2910748653', 'Visa', '02014215478', 'Voter ID', '99499', 'Accra', 'Kumasi', 'checking updates'),
(9, 'VIP-6708912354', 'click', '0271610910', 'Voter ID', 'sdsdsdsds', 'Accra', 'Kumasi', 'Garri');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dadd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `dadd`) VALUES
(2, '', '', 'admin', 'admin', ''),
(3, 'Rose', 'Joe', 'jeo', 'jeo', '12-03-2015'),
(4, 'click', 'click', 'click', 'click', '05/04/16');

-- --------------------------------------------------------

--
-- Structure for view `report`
--
DROP TABLE IF EXISTS `report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `report` AS select `sender`.`pin` AS `pin`,`sender`.`sname` AS `sname`,`sender`.`sid` AS `sid`,`sender`.`sidno` AS `sidno`,`sender`.`source` AS `source`,`sender`.`destination` AS `destination`,`sender`.`content` AS `content`,`receive`.`rname` AS `rname`,`receive`.`phone` AS `phone`,`receive`.`rid` AS `rid`,`receive`.`ridno` AS `ridno`,`receive`.`outlet` AS `outlet` from (`sender` join `receive`) where (`sender`.`pin` = `receive`.`pin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
