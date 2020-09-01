-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2020 at 09:13 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql_tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `O_id` int(11) NOT NULL AUTO_INCREMENT,
  `Order_No` int(11) NOT NULL,
  `P_id` int(11) NOT NULL,
  PRIMARY KEY (`O_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='repeat tutorial';

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`O_id`, `Order_No`, `P_id`) VALUES
(1, 77895, 3),
(2, 44678, 3),
(3, 22456, 1),
(4, 24562, 1),
(5, 34764, 12);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
CREATE TABLE IF NOT EXISTS `persons` (
  `P_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Sql Tutorial',
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  PRIMARY KEY (`P_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='create table persons';

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`P_id`, `FirstName`, `LastName`, `Address`, `City`) VALUES
(1, 'John', 'Jameson', 'Streets 15', 'Sander'),
(2, 'Kate', 'Smith', 'Green 68', 'Sander'),
(3, 'Olya', 'Kristensen', 'Ski 2', 'Stanv'),
(5, 'Setu', 'harun', 'natore', 'baraigram');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='sql tutorials table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `product`, `id_no`, `created_time`) VALUES
(1, 'shirt', 1230, '2020-08-30 18:59:09'),
(2, 'pants', 3210, '2020-08-30 18:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

DROP TABLE IF EXISTS `users2`;
CREATE TABLE IF NOT EXISTS `users2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='sql tutorials created four table';

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id`, `name`, `status`, `comment`) VALUES
(1, 'porun', 'active', 'success'),
(2, 'forid', 'inactive', 'error');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
