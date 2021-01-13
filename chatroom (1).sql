-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 12, 2020 at 01:31 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `msgs`
--

DROP TABLE IF EXISTS `msgs`;
CREATE TABLE IF NOT EXISTS `msgs` (
  `srn` int(11) NOT NULL AUTO_INCREMENT,
  `msg` text NOT NULL,
  `room` varchar(50) NOT NULL,
  `ip` text NOT NULL,
  `stime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` varchar(50) NOT NULL,
  PRIMARY KEY (`srn`),
  KEY `user_id` (`user_id`),
  KEY `room` (`room`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msgs`
--

INSERT INTO `msgs` (`srn`, `msg`, `room`, `ip`, `stime`, `user_id`) VALUES
(1, 'helllllllllllllllllll\n', 'adarsh', '::1', '2020-12-12 18:27:06', 'adarsh188'),
(2, 'jjjjjjjjjjjjjjjjjjj\n', 'adarsh', '::1', '2020-12-12 18:36:20', 'adarsh188'),
(3, 'I am fine\n', 'adarsh', '::1', '2020-12-12 18:37:57', 'akshat');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `roomname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`roomname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomname`, `password`) VALUES
('adarsh', '1234'),
('qq', '1234'),
('adars', '1234'),
('ada', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `room_participant`
--

DROP TABLE IF EXISTS `room_participant`;
CREATE TABLE IF NOT EXISTS `room_participant` (
  `roomname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  PRIMARY KEY (`roomname`,`user_id`),
  KEY `name` (`name`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_participant`
--

INSERT INTO `room_participant` (`roomname`, `name`, `user_id`) VALUES
('adarsh', 'Adarsh Baranwal', 'adarsh188'),
('adarsh', 'Akshat Baranwal', 'akshat');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`) VALUES
('adarsh188', 'Adarsh Baranwal', 'abc1234'),
('akshat', 'Akshat Baranwal', '12345678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
