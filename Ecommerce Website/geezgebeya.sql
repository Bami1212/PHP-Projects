-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 22, 2020 at 11:43 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geezgebeya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'beaman', 'beamanbelay@gmail.com', '89e2c8f458dda133118ac4a0a762cb3d');

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

DROP TABLE IF EXISTS `admin_profile`;
CREATE TABLE IF NOT EXISTS `admin_profile` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`id`, `full_name`, `email`, `mobile`, `address`, `password`, `status`, `created_at`) VALUES
(10, 'Super Admin', 'superadmin@gmail.com', '1234567890', 'Noida', '0192023a7bbd73250516f069df18b500', 1, '2020-06-17 18:38:43.432266'),
(11, 'Test admin', 'testadmin@gmail.com', '1234567890', 'New Delhi', '0192023a7bbd73250516f069df18b500', 1, '2020-06-17 18:39:14.874271'),
(12, 'temp admin', 'tempadmin@gmail.com', '12', 'Noida', '202cb962ac59075b964b07152d234b70', 1, '2020-06-17 18:39:52.830541'),
(13, 'beaman', 'beamanbelay@gmail.com', '0935011212', 'addis ababa', '89e2c8f458dda133118ac4a0a762cb3d', 1, '2020-10-11 13:57:54.346912'),
(14, 'jdbqbdhjqbdhj', 'jxnjcxnqajncqjn', 'jncxqjncjqn', 'jkxcnjkxnqjx', '202cb962ac59075b964b07152d234b70', 0, '2020-10-14 09:06:25.456854');

-- --------------------------------------------------------

--
-- Table structure for table `cosemotics`
--

DROP TABLE IF EXISTS `cosemotics`;
CREATE TABLE IF NOT EXISTS `cosemotics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` longtext NOT NULL,
  `price` varchar(300) NOT NULL,
  `shopid` varchar(300) NOT NULL,
  `phoneno` varchar(300) NOT NULL,
  `currenttime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `shopid` varchar(100) NOT NULL,
  `phoneno` varchar(300) NOT NULL,
  `itemtype` varchar(300) NOT NULL,
  `currenttime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `image`, `name`, `description`, `price`, `shopid`, `phoneno`, `itemtype`, `currenttime`) VALUES
(1, 'fff', 'dbhadbhdb', 'ffff', '', '12dg', '', '', '2020-10-09 11:23:39'),
(2, 'photo_2020-09-21_10-23-25.jpg', 'phone', 'iunujin', '200', '', '', '', '2020-10-09 12:50:00'),
(3, 'photo_2020-09-21_10-23-25.jpg', 'phone', 'iunujin', '200', '', '', '', '2020-10-09 12:50:49'),
(4, 'photo_2020-09-21_10-54-57.jpg', 'js pro', 'iubnuin', '2000', '12', '', '', '2020-10-09 12:52:43'),
(5, 'photo_2020-09-21_10-46-14.jpg', 'dadahnd', 'lkfn', '56522', '12', '', '', '2020-10-09 14:03:48'),
(6, 'photo_2020-09-22_14-25-52.jpg', 'dad', '85', '586', '12', '', '', '2020-10-09 14:04:02'),
(7, 'photo_2020-10-07_09-47-06.jpg', 'da', 'adada', '66', '55', '', '', '2020-10-09 14:04:25'),
(8, 'photo_2020-09-21_10-54-57.jpg', 'DKLnd', 'klndW', '65454', '12', '', '', '2020-10-09 14:05:50'),
(9, 'photo_2020-09-28_00-26-36.jpg', 'DdDd', 'daD', '6545', '12', '', '', '2020-10-09 14:06:10'),
(10, 'photo_2020-09-21_10-54-57.jpg', 'SkjS', 'lknD', '20520', '12', '', '', '2020-10-09 14:13:14'),
(11, 'photo_2020-09-22_14-45-35.jpg', 'ajdn', 'qwjknqde', 'KDANd', '55', '', '', '2020-10-09 14:13:27'),
(12, 'images.jpg', 'phone', 'best \r\nphone', '2050', 'sh124', '0935011212', 'electronics', '2020-10-13 13:49:31'),
(13, 'imagesd.jpg', 'baqsqs', 'dqwwqdfqd', '1234', 'sh145', '123', 'fashion', '2020-10-13 14:00:06'),
(15, 'photo_2020-09-21_10-23-25.jpg', 'kjnjkn', 'ihikh', '123313', 'sh1235', '0958585285', 'electronics', '2020-10-22 10:33:20'),
(16, 'Assassins_Creed_Rogue.jpg', 'jknjnjn', 'jknjknkjn', '123212341', 'sh1235', '0958585285', 'electronics', '2020-10-22 11:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

DROP TABLE IF EXISTS `shops`;
CREATE TABLE IF NOT EXISTS `shops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shopname` varchar(100) NOT NULL,
  `image` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `location` text NOT NULL,
  `shopid` varchar(50) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `shopname`, `image`, `description`, `location`, `shopid`, `phonenumber`) VALUES
(1, 'bqsq', 'Assassins_Creed_Rogue.jpg', 'qindqind', 'bethel', '55', ''),
(2, 'jn', 'Assassins_Creed_Rogue.jpg', 'iunuin', 'bethel', 'sh145', ''),
(3, 'kjdnqkndjkndjk', 'photo_2020-09-21_10-46-14.jpg', 'kjdnqjsdnqjnd', 'kjnjkdnqjnd', 'sh124', 'lkdnqkndkqdn');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `shopimage` varchar(300) NOT NULL,
  `shop_name` varchar(300) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `shopid` varchar(200) NOT NULL,
  `shop_type` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `full_name`, `description`, `shopimage`, `shop_name`, `mobile`, `address`, `password`, `shopid`, `shop_type`, `status`, `created_at`) VALUES
(1, 'be', 'beaman@gmail.com', '', '', '0935011212', 'bethel', '89e2c8f458dda133118ac4a0a762cb3d', 'sh125', 'electronics', 1, '2020-10-12 08:01:41.620290'),
(4, 'yhonesew', 'bbb', '', '', '123', 'Addis Ababa', '89e2c8f458dda133118ac4a0a762cb3d', 'sh145', 'fashion', 1, '2020-10-13 13:59:21.019143'),
(5, 'bea', 'bhb', 'Assassins_Creed_Rogue.jpg', 'solomon', '0935011212', 'A.A', 'ec6a6536ca304edf844d1d248a4f08dc', 'sh124', 'cosemotics', 1, '2020-10-13 14:48:23.172239'),
(31, 'udhhdu', 'kjdnqjsdnqjnd', 'photo_2020-09-21_10-46-14.jpg', 'kjdnqkndjkndjk', 'lkdnqkndkqdn', 'kjnjkdnqjnd', '202cb962ac59075b964b07152d234b70', 'ndqjkndjkdnqjkn', 'electronics', 0, '2020-10-14 09:44:42.512436'),
(32, 'beaman', 'jhvhg hggvhb  ygh ghv', 'photo_2020-09-21_10-46-14.jpg', 'mobile', '0958585285', 'aa, around bethel,', 'e5bea9a864d5b94d76ebdaaf43d66f4d', 'sh1235', 'electronics', 0, '2020-10-22 08:43:03.463639'),
(33, 'nddqommq', 'mmocqmqom', 'photo_2020-09-21_10-48-04.jpg', 'ndqkndkqn', '23131313', 'mqandqndkjin', '81dc9bdb52d04dc20036dbd8313ed055', 'ndqndinndq', 'fashion', 0, '2020-10-22 09:05:50.975141');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
