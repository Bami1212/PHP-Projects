-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2020 at 12:25 PM
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
-- Database: `geezmovie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'beaman', 'beamanbelay@gmail.com', '89e2c8f458dda133118ac4a0a762cb3d'),
(2, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `amharic`
--

DROP TABLE IF EXISTS `amharic`;
CREATE TABLE IF NOT EXISTS `amharic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `trailer_link` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) NOT NULL,
  `title` varchar(50) NOT NULL,
  `Year` varchar(50) NOT NULL,
  `description` varchar(8000) NOT NULL,
  `Minimum_requirements` varchar(8000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `image`, `title`, `Year`, `description`, `Minimum_requirements`) VALUES
(1, 'photo_2020-09-21_10-23-25.jpg', 'Dark Souls Remastered', '2018', 'Then, there was fire. Re-experience the critically acclaimed, genre-defining game that started it all. Beautifully remastered, return to Lordran in stunning high-definition detail running at 60fps. Dark Souls Remastered includes the main game plus the Artorias of the Abyss DLC.', 'Operating System: Windows 7 SP1 64bit, Windows 8.1 64bit Windows 10 64bit Processor: AMD FX-8150 / AMD Ryzen 3 1300X or Intel Core I5-2500K RAM: 4 GB Video Card: Minimum 2GB VRAM (AMD Radeon HD7870, etc) or Nvidia GeForce GTX760 DirectX: 11 HDD Space: 7 GB (~12 GB during installation)'),
(5, 'photo_2020-09-21_10-48-04.jpg', 'Gears of War 1', '2006', 'is a hack and slash action-adventure video game developed by Santa Monica Studio and published by Sony Computer Entertainment.', 'CPU: Intel 2.4 GHz+ / AMD 2.0 GHz+ CPU SPEED: 2.4 GHz. RAM: 1 GB. OS: Windows XP or Vista. VIDEO CARD: NVIDIA Geforce 6600+ / ATI x700+ PIXEL SHADER: 2.0. VERTEX SHADER: 2.0. DIRECTX VERSION: 9.0c.'),
(6, 'photo_2020-09-21_10-54-57.jpg', 'Just Cause 3 ', '2019', 'Legendary lone hero returned to once again challenge the military dictatorship! At this time, the purpose of Rico Rodriguez would be cruel Di Ravello general, who seized power in the island of the Medici. To combat the junta of all good - you have to bring to bear already familiar hook and parachute, which will provide access to any location, as well as try out the unique technical innovations. Chaos and destruction is guaranteed at the grand space of a thousand square kilometers, including the seabed and airspace over the Mediterranean in the affected rights of the republic.', 'OS: Vista SP2 / Windows 7.1 SP1 / Windows 8.1 (64-bit Operating System Required) Processor: Intel Core i5-2500k, 3.3GHz / AMD Phenom II X6 1075T 3GHz Memory: 8 GB RAM Video Card: NVIDIA GeForce GTX 670 (2GB) / AMD Radeon HD 7870 (2GB) Disk space: 54 GB'),
(11, 'photo_2020-09-22_14-25-52.jpg', 'Grid 2', '2013', 'Drivers are given certain cars before some race modes, and can unlock others through other vehicle challenges. Car liveries can be customised by the player, using preset graphic designs adapted with colours or varying shades.', 'CPU: Intel Core 2 Duo @ 2.4Ghz or AMD Athlon 64 X2 5400+\r\nOS: Windows Vista, Windows 7, Windows 8.\r\nVIDEO CARD: Intel HD Graphics 3000 / AMD HD2600 / NVIDIA Geforce 8600.\r\nFREE DISK SPACE: 15 GB.'),
(12, 'photo_2020-09-22_14-42-14.jpg', 'WWE 2K20', '2020', '2K invites players to Step Inside the ring with WWE 2K20. Your favorite WWE Superstars, Legends, Hall of Famers and NXTâ€™s best will join the festivities and celebrate the rebirth of the WWE 2K franchise!', 'Minimum requirements:\r\nOperating System: WindowsÂ® 10 (latest updates, 64-bits only)\r\nProcessor: Intel Core i5-3550 / AMD FX 8150\r\nRAM: 4 GB (not recommended for machines with less than 8 GB)\r\nVideo Card: GeForce GTX 680 / Radeon HD 7850\r\nDirectX: 11\r\nHDD Space: up to 49 GB'),
(13, 'photo_2020-09-22_14-45-35.jpg', 'Mafia II', '2010', 'Mafia II', 'Mafia II');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `description` varchar(300) NOT NULL,
  `runtime` varchar(50) NOT NULL,
  `director` varchar(100) NOT NULL,
  `stars` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `image`, `title`, `year`, `rating`, `description`, `runtime`, `director`, `stars`) VALUES
(10, 'imagesd.jpg', 'Parasite', '2019', '8.6', 'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.', '2:12', 'Bong Joon-ho', 'Cho Yeoâ€‘jeong '),
(9, 'images.jpg', 'The Irishman', '2019', '7.9', 'In the 1950s, truck driver Frank Sheeran gets involved with Russell Bufalino and his Pennsylvania crime family. As Sheeran climbs the ranks to become a top hit man, he also goes to work for Jimmy Hoffa -- a powerful Teamster tied to organized crime.', '3:30', 'Martin Scorsese', 'Robert De Niro, Al Pacino and Joe Pesci');

-- --------------------------------------------------------

--
-- Table structure for table `series_movies`
--

DROP TABLE IF EXISTS `series_movies`;
CREATE TABLE IF NOT EXISTS `series_movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `rating` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `series_movies`
--

INSERT INTO `series_movies` (`id`, `image`, `title`, `description`, `rating`) VALUES
(4, 'ava3.jpg', 'wifi', 'snqsin', '7'),
(6, 'breaking-bad.jpg', 'breaking Bad', 'best', '10'),
(7, 'ceb28.jpg', 'jnoin', 'onin', '4'),
(8, 'author4.png', 'klkk', 'kj', '58'),
(9, 'ads1.png', 'jknjinin', 'jnjin j', 'iuniuniu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
