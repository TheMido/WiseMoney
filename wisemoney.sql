-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2015 at 01:44 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wisemoney`
--
CREATE DATABASE IF NOT EXISTS `wisemoney` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wisemoney`;

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE IF NOT EXISTS `balance` (
  `uid` int(11) NOT NULL,
  `accid` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `balance`
--

TRUNCATE TABLE `balance`;
-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cid` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uid` int(11) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `categories`
--

TRUNCATE TABLE `categories`;
--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `created`, `uid`, `name`, `description`) VALUES
(72, '2015-06-05 15:06:37', 4, 'Cat2', ''),
(76, '2015-06-05 16:55:46', 4, 'Namecat44', 'Desc44'),
(81, '2015-06-05 18:04:04', 2, 'Food', 'Category for food.'),
(82, '2015-06-05 18:04:24', 2, 'Games', 'For video games.'),
(83, '2015-06-05 18:04:33', 2, 'Study', 'Money paid in college.'),
(84, '2015-06-05 18:05:21', 2, 'Computer Hardware', 'Money paid for computer upgrade.'),
(85, '2015-06-05 18:05:42', 2, 'Books', 'Technical references and novels.'),
(86, '2015-06-05 22:50:43', 1, 'Food', '34');

-- --------------------------------------------------------

--
-- Table structure for table `categories_users`
--

CREATE TABLE IF NOT EXISTS `categories_users` (
  `id` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `categories_users`
--

TRUNCATE TABLE `categories_users`;
--
-- Dumping data for table `categories_users`
--

INSERT INTO `categories_users` (`id`, `cid`, `uid`, `created`) VALUES
(1, 1, 1, '2015-05-07 07:35:46'),
(2, 2, 1, '2015-05-07 07:35:46'),
(3, 3, 1, '2015-05-07 07:35:46'),
(4, 4, 1, '2015-05-07 07:35:46'),
(5, 5, 1, '2015-05-07 07:35:46'),
(6, 6, 1, '2015-05-07 07:35:46'),
(7, 7, 2, '2015-05-07 07:35:46'),
(8, 8, 3, '2015-05-07 07:35:46'),
(9, 9, 3, '2015-05-07 07:35:46'),
(10, 10, 1, '2015-05-07 07:35:46'),
(11, 19, 1, '0000-00-00 00:00:00'),
(12, 19, 1, '2015-05-08 22:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `expires` date DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `usagetimes` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `desc` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `offers`
--

TRUNCATE TABLE `offers`;
-- --------------------------------------------------------

--
-- Table structure for table `offers_places`
--

CREATE TABLE IF NOT EXISTS `offers_places` (
  `pid` int(11) NOT NULL,
  `oid` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `offers_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `offers_places`
--

TRUNCATE TABLE `offers_places`;
-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `category` int(11) DEFAULT NULL,
  `notes` varchar(128) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `payments`
--

TRUNCATE TABLE `payments`;
--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `uid`, `amount`, `datetime`, `category`, `notes`) VALUES
(20, 2, '24', '2015-06-05 20:22:32', 85, 'Some books.'),
(21, 2, '50', '2015-06-05 20:22:41', 81, 'Cinnabon'),
(22, 2, '1000', '2015-06-04 20:22:51', 84, 'i7 Processor'),
(24, 2, '99', '2015-06-05 20:23:49', 81, 'Steaks'),
(25, 2, '20', '2015-06-05 20:23:55', 81, 'Sweets'),
(26, 2, '200', '2015-06-05 20:24:06', 81, 'Turkey'),
(27, 2, '199', '2015-06-04 20:24:17', 82, 'Battlefield'),
(28, 2, '30', '2015-06-05 20:24:24', 84, 'Speakers'),
(29, 2, '500', '2015-06-05 20:24:32', 84, 'Motherboard.'),
(32, 2, '30', '2015-06-05 20:26:49', 83, 'Ref'),
(33, 2, '456', '2015-06-05 20:27:51', 84, ''),
(34, 2, NULL, '2015-06-05 20:59:16', NULL, NULL),
(35, 2, NULL, '2015-06-03 21:20:09', NULL, NULL),
(36, 2, '456', '2015-06-05 21:20:12', 81, ''),
(37, 2, '4', '2015-06-05 21:20:14', 81, ''),
(38, 2, '555', '2015-06-05 21:20:15', 81, ''),
(39, 2, '23', '2015-06-05 21:20:17', 84, ''),
(40, 2, '234', '2015-06-05 21:20:20', 85, ''),
(41, 2, '33', '2015-06-05 21:20:22', 83, ''),
(42, 2, '33', '2015-06-05 21:20:24', 83, ''),
(43, 2, '234', '2015-06-05 21:20:27', 84, ''),
(44, 2, '11', '2015-06-05 21:20:30', 82, ''),
(45, 2, '166', '2015-06-05 21:20:33', 82, ''),
(46, 2, '234', '2015-06-05 21:20:35', 85, ''),
(47, 2, '34', '2015-06-05 21:20:38', 81, ''),
(48, 2, '', '2015-06-05 21:20:38', 81, ''),
(49, 2, '234234', '2015-06-05 21:20:42', 84, ''),
(50, 2, '234', '2015-06-05 21:20:44', 85, ''),
(51, 2, '34', '2015-06-05 21:20:47', 85, ''),
(52, 2, '324', '2015-06-05 21:20:49', 82, ''),
(53, 2, '234', '2015-06-05 21:20:51', 84, ''),
(54, 2, NULL, '2015-06-05 22:19:09', NULL, NULL),
(55, 1, NULL, '2015-06-05 22:50:28', NULL, NULL),
(56, 1, NULL, '2015-06-05 22:50:50', NULL, NULL),
(57, 1, '244', '2015-06-05 22:50:58', 86, 'Well'),
(58, 2, NULL, '2015-06-05 23:19:57', NULL, NULL),
(59, 2, NULL, '2015-06-06 00:19:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `offers_places_pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `places`
--

TRUNCATE TABLE `places`;
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `offersnumber` int(11) DEFAULT NULL,
  `points` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `country`, `city`, `offersnumber`, `points`) VALUES
(1, 'Mag', 'midorad@gmail.com', '123456', 'Egypt', 'Cairo', 0, 13),
(2, 'Wasim', 'wamgad@gmail.com', '1', 'Egypt', 'Cairo', 0, 26),
(3, 'Mid', 'x', 'x', NULL, NULL, NULL, NULL),
(4, 'mag2', 'mido@mag.g', 'i''mmido', NULL, NULL, NULL, NULL),
(5, 'asdf', 'asdf@asdf.asf', 'asdf', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `categories_users`
--
ALTER TABLE `categories_users`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_categories_users_users1_idx` (`uid`), ADD KEY `fk_categories_users_categories1_idx` (`cid`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers_places`
--
ALTER TABLE `offers_places`
  ADD PRIMARY KEY (`pid`,`offers_id`), ADD KEY `fk_offers_places_offers1_idx` (`offers_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_payments_users1_idx` (`uid`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`,`offers_places_pid`), ADD KEY `fk_places_offers_places_idx` (`offers_places_pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`), ADD UNIQUE KEY `username_UNIQUE` (`username`), ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `categories_users`
--
ALTER TABLE `categories_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `balance`
--
ALTER TABLE `balance`
ADD CONSTRAINT `fk_balance_users1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `categories_users`
--
ALTER TABLE `categories_users`
ADD CONSTRAINT `fk_categories_users_users1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `offers_places`
--
ALTER TABLE `offers_places`
ADD CONSTRAINT `fk_offers_places_offers1` FOREIGN KEY (`offers_id`) REFERENCES `offers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
ADD CONSTRAINT `fk_payments_users1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `places`
--
ALTER TABLE `places`
ADD CONSTRAINT `fk_places_offers_places` FOREIGN KEY (`offers_places_pid`) REFERENCES `offers_places` (`pid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
