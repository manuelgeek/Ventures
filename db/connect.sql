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
-- Table structure for table `connect`
--

CREATE TABLE IF NOT EXISTS `connect` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `business` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `cartegory` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connect`
--

INSERT INTO `connect` (`id`, `name`, `business`, `description`, `cartegory`, `contact`, `price`, `photo`, `location`, `time`) VALUES
(11, 'Kismat', 'Otiaza Msee', 'wree very serious maybe toyu tyr come', 'cloths', '0723431267', 'veryn many you come and see', '400777.png', 'Oyugis', '2017-01-26 11:56:38'),
(12, 'Kismat', 'Otiaza Msee', 'wree very serious maybe toyu tyr come', 'cloths', '0723431267', 'veryn many you come and see', '730678.png', 'Oyugis', '2017-01-26 11:58:02'),
(13, 'Kismat', 'Otiaza Msee', 'wree very serious maybe toyu tyr come', 'cloths', '0723431267', 'veryn many you come and see', '772658.png', 'Oyugis', '2017-01-26 11:58:10'),
(14, 'Kismat', 'Otiaza Msee', 'wree very serious maybe toyu tyr come', 'cloths', '0723431267', 'veryn many you come and see', '462818.png', 'Oyugis', '2017-01-26 11:58:49'),
(15, 'Paulo yule', 'Ps fifa', 'we play rel fifa, 17,16, and 15\r\ncime enjot', 'prof', '0723431267', 'we go to lragurs smd win verw earlt', '578212.png', 'kitui', '2017-01-26 12:00:18'),
(16, 'Paulo yule', 'Ps fifa', 'we play rel fifa, 17,16, and 15\r\ncime enjot', 'prof', '0723431267', 'we go to lragurs smd win verw earlt', '652996.png', 'kitui', '2017-01-26 12:00:35'),
(17, 'Paulo yule', 'Ps fifa', 'we play rel fifa, 17,16, and 15\r\ncime enjot', 'prof', '0723431267', 'we go to lragurs smd win verw earlt', '609613.png', 'kitui', '2017-01-26 12:00:50'),
(18, 'Paulo yule', 'Ps fifa', 'we play rel fifa, 17,16, and 15\r\ncime enjot', 'prof', '0723431267', 'we go to lragurs smd win verw earlt', '735373.png', 'kitui', '2017-01-26 12:01:01'),
(19, 'Paulo yule', 'Ps fifa', 'we play rel fifa, 17,16, and 15\r\ncime enjot', 'prof', '0723431267', 'we go to lragurs smd win verw earlt', '129320.png', 'kitui', '2017-01-26 12:01:07'),
(20, 'Paulo yule', 'Ps fifa', 'we play rel fifa, 17,16, and 15\r\ncime enjot', 'prof', '0723431267', 'we go to lragurs smd win verw earlt', '237762.png', 'kitui', '2017-01-26 12:01:13'),
(21, 'Paulo yule', 'Ps fifa', 'we play rel fifa, 17,16, and 15\r\ncime enjot', 'prof', '0723431267', 'we go to lragurs smd win verw earlt', '616320.png', 'kitui', '2017-01-26 12:01:19'),
(22, 'Paulo yule', 'Ps fifa', 'we play rel fifa, 17,16, and 15\r\ncime enjot', 'prof', '0723431267', 'we go to lragurs smd win verw earlt', '529890.png', 'kitui', '2017-01-26 12:01:29'),
(23, 'Paulo yule', 'Ps fifa', 'we play rel fifa, 17,16, and 15\r\ncime enjot', 'prof', '0723431267', 'we go to lragurs smd win verw earlt', '521384.png', 'kitui', '2017-01-26 12:01:45'),
(24, 'Paulo yule', 'Ps fifa', 'we play rel fifa, 17,16, and 15\r\ncime enjot', 'prof', '0723431267', 'we go to lragurs smd win verw earlt', '577632.png', 'kitui', '2017-01-26 12:02:01'),
(25, 'Paulo yule', 'Ps fifa', 'we play rel fifa, 17,16, and 15\r\ncime enjot', 'prof', '0723431267', 'we go to lragurs smd win verw earlt', '12310.png', 'kitui', '2017-01-26 12:02:11'),
(26, 'Paulo yule', 'Ps fifa', 'we play rel fifa, 17,16, and 15\r\ncime enjot', 'prof', '0723431267', 'we go to lragurs smd win verw earlt', '689276.png', 'kitui', '2017-01-26 12:02:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connect`
--
ALTER TABLE `connect`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connect`
--
ALTER TABLE `connect`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
