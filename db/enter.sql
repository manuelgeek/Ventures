-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2017 at 05:02 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `enter`
--

CREATE TABLE IF NOT EXISTS `enter` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dated` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `cartegory` varchar(200) NOT NULL,
  `timed` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enter`
--

INSERT INTO `enter` (`id`, `name`, `dated`, `description`, `cartegory`, `timed`, `photo`, `location`, `time`) VALUES
(11, 'Geek', '23/17/13', 'free entry\r\nover 18', 'inter', '2200hrs', '29566.png', 'Kisii Uni', '2017-01-26 20:23:15'),
(12, 'Geek', '23/17/13', 'free entry\r\nover 18', 'inter', '2200hrs', '478488.png', 'Kisii Uni', '2017-01-26 20:24:20'),
(13, 'Geek', '23/17/13', 'free entry\r\nover 18', 'inter', '2200hrs', '506811.png', 'Kisii Uni', '2017-01-26 20:24:38'),
(14, 'Geek', '23/17/13', 'free entry\r\nover 18', 'inter', '2200hrs', '706227.png', 'Kisii Uni', '2017-01-26 20:25:10'),
(15, 'Geek', '23/17/13', 'free entry\r\nover 18', 'inter', '2200hrs', '376722.png', 'Kisii Uni', '2017-01-26 20:25:19'),
(16, 'Geek', '23/17/13', 'free entry\r\nover 18', 'inter', '2200hrs', '309681.png', 'Kisii Uni', '2017-01-26 20:25:36'),
(17, 'Geek', '23/17/13', 'free entry\r\nover 18', 'inter', '2200hrs', '978599.png', 'Kisii Uni', '2017-01-26 20:25:40'),
(18, 'Geek', '23/17/13', 'free entry\r\nover 18', 'inter', '2200hrs', '261085.png', 'Kisii Uni', '2017-01-26 20:25:51'),
(19, 'Geek', '23/17/13', 'free entry\r\nover 18', 'inter', '2200hrs', '333187.png', 'Kisii Uni', '2017-01-26 20:25:58'),
(20, 'Geek', '23/17/13', 'free entry\r\nover 18', 'inter', '2200hrs', '371997.png', 'Kisii Uni', '2017-01-26 20:26:02'),
(21, 'Geek', '23/17/13', 'free entry\r\nover 18', 'inter', '2200hrs', '340931.png', 'Kisii Uni', '2017-01-26 20:26:09'),
(22, 'Geek', '23/17/13', 'free entry\r\nover 18', 'inter', '2200hrs', '669520.png', 'Kisii Uni', '2017-01-26 20:57:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enter`
--
ALTER TABLE `enter`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enter`
--
ALTER TABLE `enter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
