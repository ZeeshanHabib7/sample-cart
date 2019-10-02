-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 02, 2019 at 09:19 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `customersmaster`
--

DROP TABLE IF EXISTS `customersmaster`;
CREATE TABLE IF NOT EXISTS `customersmaster` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) NOT NULL,
  `password` int(55) DEFAULT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `customer_email` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customersmaster`
--

INSERT INTO `customersmaster` (`cid`, `customer_name`, `password`, `creation_date`, `customer_email`) VALUES
(1, 'testuser', 0, '2019-09-19 17:32:36', 'testuser@gmail.com'),
(2, 'user1', 0, '2019-09-19 17:33:00', 'user1@gmail.com'),
(3, 'noman', 0, '2019-09-26 01:06:36', 'noman@gmail.com'),
(4, 'noman', 0, '2019-09-26 01:09:07', 'noman@gmail.com'),
(5, 'zee', 0, '2019-09-26 01:18:11', 'zee@gmail.com'),
(6, 'jhon', 0, '2019-09-26 01:20:50', 'jhon@gmail.com'),
(7, 'jhoona', 0, '2019-09-26 01:22:11', 'jhoona@gmail.com'),
(8, 'lio', 0, '2019-09-26 01:25:47', 'lio@gmail.com'),
(9, 'leo', 0, '2019-09-26 01:27:50', 'leo@yahoo.com'),
(10, 'neha', 0, '2019-09-26 01:34:08', 'neha@gmail.com'),
(11, 'king', 0, '2019-09-26 01:46:45', 'king@gmail.com'),
(12, 'mano', 0, '2019-09-26 01:54:38', 'mano@gmail.com'),
(13, 'wood', 0, '2019-09-26 01:59:27', 'wood@yahoo.com'),
(14, 'boo', 0, '2019-09-26 02:33:14', 'boo@gamil.com'),
(15, 'moo', 0, '2019-09-26 02:35:09', 'moo@gmail.com'),
(16, 'jojo', 0, '2019-09-26 02:37:46', 'jojo@gmail.com'),
(17, 'voo', 0, '2019-09-26 03:06:50', 'voo@gmail.com'),
(18, 'cat', 0, '2019-09-26 03:09:09', 'car@yahoo.com'),
(19, 'qq', 0, '2019-09-26 03:11:54', 'qq@gmail.com'),
(20, 'vat', 0, '2019-09-26 03:14:25', 'vat@yahoo.com'),
(21, 'viki', 0, '2019-09-26 03:17:38', 'viki@yahoo.com'),
(22, 'sufyan', 0, '2019-09-26 10:29:03', 'sufyan@gmail.com'),
(23, 'bobo', 0, '2019-09-26 10:35:49', 'bobo@gmail.com'),
(24, 'veer', 0, '2019-09-26 10:45:41', 'veer@gmail.com'),
(25, 'good', 0, '2019-09-26 10:47:05', 'good@gmail.com'),
(26, 'foo', 0, '2019-09-26 10:48:12', 'foo@gmail.com'),
(27, 'xe', 0, '2019-09-26 10:59:43', 'xee@gmail.com'),
(28, 'qb', 0, '2019-09-26 11:06:48', 'qb@gmail.com'),
(29, 'zoror', 0, '2019-09-26 11:15:21', 'zoror@gmail.com'),
(30, 'zoror', 0, '2019-09-26 11:16:22', 'zoror@gmail.com'),
(31, 'pakistan', 0, '2019-09-26 11:17:12', 'pakistan@gmail.com'),
(32, 'hadi', 0, '2019-09-26 12:49:26', 'hadi@gmail.com'),
(33, 'panda', 0, '2019-09-26 12:59:29', 'panda@gmail.com'),
(34, 'jhoona', 0, '2019-09-27 10:13:48', 'jhoona@gmail.com'),
(35, 'jhoona', 0, '2019-09-27 10:14:24', 'jhoona@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`) VALUES
(1, 'shirt'),
(2, 'paint'),
(3, 'cap'),
(4, 'jaket');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

DROP TABLE IF EXISTS `orderdetail`;
CREATE TABLE IF NOT EXISTS `orderdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) DEFAULT NULL,
  `itemid` int(11) DEFAULT NULL,
  `qty` int(255) DEFAULT NULL,
  `total_amount` int(255) DEFAULT NULL,
  `item_price` int(55) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orderid` (`orderid`),
  KEY `itemid` (`itemid`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `orderid`, `itemid`, `qty`, `total_amount`, `item_price`) VALUES
(56, NULL, 3, 2, 246, 123),
(57, NULL, 3, 2, 246, 123),
(87, 123, 3, 2, 2800, 1400),
(88, 123, 4, 1, 7800, 7800),
(89, 123, 1, 5, 19000, 3800),
(91, 124, 2, 2, 5000, 2500),
(92, 124, 4, 2, 13000, 6500),
(93, 136, 1, 2, 9000, 4500),
(94, 137, 1, 2, 9000, 4500),
(95, 137, 4, 1, 9800, 9800),
(96, 138, 1, 2, 9000, 4500),
(97, 138, 4, 1, 9800, 9800);

-- --------------------------------------------------------

--
-- Table structure for table `ordermaster`
--

DROP TABLE IF EXISTS `ordermaster`;
CREATE TABLE IF NOT EXISTS `ordermaster` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`oid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordermaster`
--

INSERT INTO `ordermaster` (`oid`, `cid`, `orderDate`) VALUES
(104, 32, '2019-10-01 13:12:44'),
(105, 32, '2019-10-01 13:12:47'),
(106, 32, '2019-10-01 13:13:38'),
(107, 32, '2019-10-01 13:15:05'),
(108, 25, '2019-10-01 13:15:52'),
(109, 9, '2019-10-01 13:25:54'),
(110, 12, '2019-10-01 13:29:51'),
(111, 12, '2019-10-01 13:29:53'),
(112, 12, '2019-10-01 13:30:01'),
(113, 12, '2019-10-01 13:30:14'),
(114, 23, '2019-10-01 13:30:46'),
(115, 23, '2019-10-01 13:30:51'),
(116, 23, '2019-10-01 13:31:14'),
(117, 32, '2019-10-01 13:32:35'),
(118, 29, '2019-10-01 13:33:27'),
(119, 6, '2019-10-01 13:34:45'),
(120, 30, '2019-10-02 05:30:54'),
(121, 8, '2019-10-02 05:32:12'),
(122, 6, '2019-10-02 05:35:07'),
(123, 5, '2019-10-02 05:39:46'),
(124, 5, '2019-10-02 05:42:46'),
(136, 32, '2019-10-02 06:00:51'),
(137, 10, '2019-10-02 08:04:36'),
(138, 4, '2019-10-02 09:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemid` int(11) DEFAULT NULL,
  `qty` varchar(55) NOT NULL,
  `item_price` varchar(55) NOT NULL,
  `total_amount` varchar(55) NOT NULL,
  `no` varchar(55) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `itemid` (`itemid`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `itemid`, `qty`, `item_price`, `total_amount`, `no`) VALUES
(60, 4, '2', '450', '900', ''),
(61, 1, '2', '350', '700', ''),
(62, 4, '2', '450', '900', ''),
(63, 1, '2', '350', '700', ''),
(64, 2, '2', '450', '900', ''),
(65, 4, '2', '65200', '130400', ''),
(66, 2, '2', '4000', '8000', ''),
(67, 4, '2', '4500', '9000', ''),
(68, 2, '2', '7000', '14000', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `ordermaster` (`oid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`itemid`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ordermaster`
--
ALTER TABLE `ordermaster`
  ADD CONSTRAINT `ordermaster_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customersmaster` (`cid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`itemid`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
