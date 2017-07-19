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
-- Table structure for table `tenders`
--

CREATE TABLE IF NOT EXISTS `tenders` (
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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `name`, `business`, `description`, `cartegory`, `contact`, `price`, `photo`, `location`, `time`) VALUES
(11, 'Geek Manu', 'appslab', 'we do code\r\nawesome stuff, come and see', 'cos', '0724540039', '59 per heEAD', '843846.png', 'Kisumu', '2017-01-26 11:21:09'),
(12, 'Bondeka', 'Casino', 'we play pocker, fifa, all everything', 'patner', '0723431267', 'very cheap', '120966.png', 'kisii', '2017-01-26 11:23:38'),
(13, 'Bondeka', 'Casino', 'we play pocker, fifa, all everything', 'patner', '0723431267', 'very cheap', '357455.png', 'kisii', '2017-01-26 11:39:51'),
(14, 'Bondeka', 'Casino', 'we play pocker, fifa, all everything', 'patner', '0723431267', 'very cheap', '82613.png', 'kisii', '2017-01-26 11:43:08'),
(15, 'Bondeka', 'Casino', 'we play pocker, fifa, all everything', 'patner', '0723431267', 'very cheap', '578852.png', 'kisii', '2017-01-26 11:43:08'),
(16, 'Bondeka', 'Casino', 'we play pocker, fifa, all everything', 'patner', '0723431267', 'very cheap', '519859.png', 'kisii', '2017-01-26 11:43:56'),
(17, 'Kismat', 'Otiaza Msee', 'we give jobs\r\nonly comitment', 'cloths', '0723431267', 'very many', '942197.png', 'Oyugis', '2017-01-26 11:45:33'),
(18, 'Kismat', 'Otiaza Msee', 'we give jobs\r\nonly comitment', 'cloths', '0723431267', 'very many', '695160.png', 'Oyugis', '2017-01-26 11:46:59'),
(19, 'Kismat', 'Otiaza Msee', 'we give jobs\r\nonly comitment', 'cloths', '0723431267', 'very many', '975306.png', 'Oyugis', '2017-01-26 11:49:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tenders`
--
ALTER TABLE `tenders`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tenders`
--
ALTER TABLE `tenders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
