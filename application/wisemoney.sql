-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2015 at 12:39 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `created`, `uid`, `name`, `description`) VALUES
(72, '2015-06-05 15:06:37', 4, 'Cat2', ''),
(76, '2015-06-05 16:55:46', 4, 'Namecat44', 'Desc44'),
(81, '2015-06-05 18:04:04', 2, 'Food', 'Category for food.'),
(82, '2015-06-05 18:04:24', 2, 'Games', 'For video games.'),
(84, '2015-06-05 18:05:21', 2, 'Computer Hardware', 'Money paid for computer upgrade.'),
(85, '2015-06-05 18:05:42', 2, 'Books', 'Technical references and novels.'),
(86, '2015-06-05 22:50:43', 1, 'Food', '34'),
(116, '2015-06-07 00:19:23', 2, 'Films', 'Renting films');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `pid`, `expires`, `points`, `usagetimes`, `name`, `desc`) VALUES
(1, 1, '0000-00-00', NULL, 20, 'Offer1', '50% off on Al Ahly shirt'),
(5, 2, '2015-06-30', NULL, 10, 'Football shoes', 'Get 10% on a pair of football shoes when you '),
(6, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 3, '2015-06-10', NULL, 10, 'From Puma', 'Get 5% free on running shoes');

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

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `amount` int(45) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `category` int(11) DEFAULT NULL,
  `notes` varchar(128) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `uid`, `amount`, `datetime`, `category`, `notes`) VALUES
(20, 2, 24, '2015-06-05 20:22:32', 82, 'Some books.'),
(21, 2, 50, '2015-06-05 20:22:41', 81, 'Cinnabon'),
(22, 2, 1000, '2015-06-04 20:22:51', 84, 'i7 Processor'),
(24, 2, 99, '2015-06-05 20:23:49', 81, 'Steaks'),
(25, 2, 20, '2015-06-05 20:23:55', 81, 'Sweets'),
(26, 2, 200, '2015-06-05 20:24:06', 81, 'Turkey'),
(27, 2, 199, '2015-06-04 20:24:17', 82, 'Battlefield'),
(28, 2, 30, '2015-06-05 20:24:24', 84, 'Speakers'),
(29, 2, 500, '2015-06-05 20:24:32', 84, 'Motherboard.'),
(33, 2, 456, '2015-06-05 20:27:51', 84, ''),
(34, 2, NULL, '2015-06-05 20:59:16', NULL, NULL),
(35, 2, NULL, '2015-06-03 21:20:09', NULL, NULL),
(36, 2, 456, '2015-06-05 21:20:12', 81, ''),
(37, 2, 4, '2015-06-05 21:20:14', 81, ''),
(38, 2, 555, '2015-06-05 21:20:15', 81, ''),
(39, 2, 23, '2015-06-05 21:20:17', 84, ''),
(40, 2, 234, '2015-06-05 21:20:20', 85, ''),
(43, 2, 234, '2015-06-05 21:20:27', 84, ''),
(44, 2, 11, '2015-06-05 21:20:30', 82, ''),
(45, 2, 166, '2015-06-05 21:20:33', 82, ''),
(46, 2, 234, '2015-06-05 21:20:35', 85, ''),
(47, 2, 34, '2015-06-05 21:20:38', 81, ''),
(48, 2, 0, '2015-06-05 21:20:38', 81, ''),
(49, 2, 234234, '2015-06-05 21:20:42', 84, ''),
(50, 2, 234, '2015-06-05 21:20:44', 85, ''),
(51, 2, 34, '2015-06-05 21:20:47', 85, ''),
(52, 2, 324, '2015-06-05 21:20:49', 82, ''),
(53, 2, 234, '2015-06-05 21:20:51', 84, ''),
(54, 2, NULL, '2015-06-05 22:19:09', NULL, NULL),
(55, 1, NULL, '2015-06-05 22:50:28', NULL, NULL),
(56, 1, NULL, '2015-06-05 22:50:50', NULL, NULL),
(57, 1, 2, '2015-06-05 22:50:58', 86, 'Well'),
(58, 2, NULL, '2015-06-05 23:19:57', NULL, NULL),
(59, 2, NULL, '2015-06-06 00:19:46', NULL, NULL),
(60, 2, NULL, '2015-06-06 13:52:52', NULL, NULL),
(61, 2, NULL, '2015-06-06 13:52:57', NULL, NULL),
(62, 2, NULL, '2015-06-06 13:53:04', NULL, NULL),
(63, 2, NULL, '2015-06-06 18:35:10', NULL, NULL),
(64, 2, NULL, '2015-06-06 18:35:15', NULL, NULL),
(65, 2, NULL, '2015-06-06 18:35:29', NULL, NULL),
(66, 2, NULL, '2015-06-06 18:35:34', NULL, NULL),
(67, 2, NULL, '2015-06-06 18:44:40', NULL, NULL),
(68, 2, NULL, '2015-06-06 18:45:14', NULL, NULL),
(69, 2, NULL, '2015-06-06 18:45:17', NULL, NULL),
(70, 2, NULL, '2015-06-06 18:46:12', NULL, NULL),
(72, 6, NULL, '2015-06-07 00:07:48', NULL, NULL),
(73, 6, NULL, '2015-06-07 00:09:30', NULL, NULL),
(74, 6, NULL, '2015-06-07 00:10:10', NULL, NULL),
(75, 6, NULL, '2015-06-07 00:10:11', NULL, NULL),
(76, 6, NULL, '2015-06-07 00:10:21', NULL, NULL),
(77, 6, NULL, '2015-06-07 00:10:31', NULL, NULL),
(78, 6, NULL, '2015-06-07 00:11:25', NULL, NULL),
(79, 6, NULL, '2015-06-07 00:12:00', NULL, NULL),
(80, 6, NULL, '2015-06-07 00:12:04', NULL, NULL),
(81, 6, NULL, '2015-06-07 00:12:08', NULL, NULL),
(82, 6, NULL, '2015-06-07 00:12:11', NULL, NULL),
(83, 6, NULL, '2015-06-07 00:12:23', NULL, NULL),
(84, 6, NULL, '2015-06-07 00:12:26', NULL, NULL),
(85, 6, NULL, '2015-06-07 00:12:38', NULL, NULL),
(86, 6, NULL, '2015-06-07 00:14:22', NULL, NULL),
(87, 2, NULL, '2015-06-07 00:15:03', NULL, NULL),
(88, 2, NULL, '2015-06-07 00:17:09', NULL, NULL),
(89, 2, NULL, '2015-06-07 00:19:30', NULL, NULL),
(90, 2, 28, '2015-06-07 00:19:40', 116, 'Harrison Ford films.');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `address`, `password`, `email`) VALUES
(1, 'Nike', 'Nasr City', 'nike1', 'info@nike.com'),
(2, 'Adidas', 'Giza', 'adidas1', 'info@adidas.com'),
(3, 'Puma', 'Maadi', 'puma1', 'info@puma.com');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `country`, `city`, `offersnumber`, `points`) VALUES
(1, 'Mag', 'midorad@gmail.com', '123456', 'Egypt', 'Cairo', 0, 13),
(2, 'Wasim', 'wamgad@gmail.com', '1', 'Egypt', 'Alex', 0, 26),
(3, 'Mid', 'x', 'x', NULL, NULL, NULL, NULL),
(4, 'mag2', 'mido@mag.g', 'i''mmido', NULL, NULL, NULL, NULL),
(5, 'asdf', 'asdf@asdf.asf', 'asdf', NULL, NULL, NULL, NULL),
(6, 'Mohamed', 'mohamed@hotmail.com', 'mohamed1', 'Egypt', 'Giza', NULL, NULL);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `categories_users`
--
ALTER TABLE `categories_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
-- Constraints for table `payments`
--
ALTER TABLE `payments`
ADD CONSTRAINT `fk_payments_users1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
