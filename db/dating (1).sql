-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 10, 2020 at 02:37 AM
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
-- Database: `dating`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `user_id1` int(11) NOT NULL,
  `user_id2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`user_id1`, `user_id2`) VALUES
(26, 19),
(26, 19),
(26, 19),
(26, 19),
(26, 18),
(26, 16),
(26, 19),
(16, 19),
(16, 27);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `user_id` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `interest` varchar(1) NOT NULL,
  `dob` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `height` double NOT NULL,
  `weight` double NOT NULL,
  `hobbies` varchar(200) DEFAULT NULL,
  `country` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `gender`, `interest`, `dob`, `age`, `height`, `weight`, `hobbies`, `country`, `image`) VALUES
(16, 'M', 'F', '4-4-1993', 23, 132, 70, 'playing outdoor', 'Canada', 'member1.jpg'),
(17, 'M', 'M', '3-2-1985', 35, 126, 78, 'reading', 'Canada', 'member2.jpg'),
(18, 'F', 'F', '16-10-1992', 27, 182, 78, 'cooking', 'india', 'member3.png'),
(19, 'F', 'F', '12-7-1993', 26, 126, 52, 'playing outdoor', 'usa', 'member4.webp'),
(26, 'M', 'F', '1-1-2001', 3232, 55, 6556, '556566565', 'india', 'member2.jpg'),
(27, 'M', 'F', '13-4-1990', 45, 412, 85, 'playing', 'canada', 'background4.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notification` varchar(1) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `name`, `email`, `notification`, `password`) VALUES
(24, 'aman', 'sharma00.aman@gmail.com', 'Y', 'aman'),
(26, 'chandra', 'chandra@gmail.com', 'Y', 'chandra'),
(27, 'php', 'php@gmail.com', 'Y', '1234'),
(19, 'nickey', 'nickey@gmail.com', 'Y', 'nickey'),
(18, 'lucy', 'lucy@gmail.com', 'Y', 'lucy'),
(16, 'john', 'john@gmail.com', 'Y', 'john'),
(17, 'micheal', 'micheal@gmail.com', 'Y', 'micheal');

-- --------------------------------------------------------

--
-- Table structure for table `wink`
--

DROP TABLE IF EXISTS `wink`;
CREATE TABLE IF NOT EXISTS `wink` (
  `user_id1` int(11) NOT NULL,
  `user_id2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `wink`
--

INSERT INTO `wink` (`user_id1`, `user_id2`) VALUES
(26, 19),
(27, 26),
(27, 19);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
