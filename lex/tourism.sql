-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 08:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `information` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `information`) VALUES
(1, '1: Stuck In Customs\r\nDescribed as a \'Daily Photo Adventure\', this blog showcases Trey Ratcliff\'s amazing travel photos. Of most interest to aspiring photographers are the step-by-step guides to how he took them. His guide to HDR photography is arguably one of the best on the web.\r\n\r\nVisit the blog: stuckincustoms.com\r\n\r\n2: Fluent In 3 Months\r\nIrishman Benny Lewis sets himself language challenges, and along the way shows how you too can learn another language cheaply and quickly.\r\n\r\nVisit the blog: fluentin3months.com\r\n\r\n3: The Everywhereist\r\n\r\nGeraldine DeRuiter travels the world and eats. But she\'s not your average Travel Foodie Blogger, as posts like 7 Badass Bavarian Foods You Must Try testify.\r\n\r\nVisit the blog: everywhereist.com\r\n\r\n4: Fox Nomad\r\nAnil Polat\'hjfhfhfhff with you.\r\n\r\nVisit the blog: foxnomad.com\r\n\r\n5: Journeywoman\r\nHeralded as the premier travel resource for women, Evelyn Hannon\'s blog tackles everything from packing to travelling safely – with lots of good food in between.\r\n\r\nVhnjb\r\n\r\n\r\n6: The Adventurists\r\n\r\nFrom the brains behind The Mongol Rally, this blog revels in the wackier side of travel and gives a heads-up on new events and adventures.\r\n\r\nVisit the blog: theadventurists.com\r\n\r\n7: Free Donia Post\r\nNot just your usual photos-and-stories-from-my-round-the-world-trip blog. This one\'s got quizzes! Plus anyone who heads his post Let Saigons be Saigons is alright by me.\r\n\r\nVisit the blog: freedoniapost.com\r\n\r\n\r\n\r\nThis is a complete tourism website.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `AdminName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `AdminName`, `Password`, `type`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'nayeem', '1', 'scout'),
(3, 'mamun', '123', 'scout');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `name`, `position`, `number`, `email`) VALUES
(3, 'hg', 'manager', '455', 'shariarnayeem017@gmail.com'),
(4, 'Hossainrr', 'hr', '455', 'hhgh@h.com'),
(5, 'mamun', 'manager', '121', 'mamun@gmail.com'),
(6, 'arbab', 'hr', '455', 's@gmail.com'),
(7, 'hg', 'manager', '455', 'shariarnayeem017@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `id` int(10) NOT NULL,
  `home` varchar(255) NOT NULL,
  `away` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `home`, `away`, `rate`, `time`) VALUES
(2, 'Chittagong', 'Dhaka', '5000', '12a.m'),
(3, 'Dhaka', 'Syleth', '4000', '12p.m'),
(4, 'Syleth', 'Dhaka', '4000', '12a.m'),
(5, 'Chittagong', 'Syleth', '4500', '12p.m'),
(6, 'Syleth', 'Chittagong', '4500', '12a.m'),
(7, 'Cox\'s Bazar', 'Dhaka', '4800', '12a.m'),
(8, 'Dhaka', 'Cox\'s Bazar', '4800', '12p.m'),
(9, 'Dhaka', 'Cox\'s Bazar', '2500', '5p.m'),
(10, 'Cox\'s Bazar', 'Dhaka', '2500', '5p.m'),
(11, 'Coxs Bazar', 'CTG', '55', '11'),
(12, 'Dhaka', 'Chittagong', '7000', '12 pm'),
(13, 'Coxs Bazar', 'CTG', '5000', '11 am');

-- --------------------------------------------------------

--
-- Table structure for table `flightbook`
--

CREATE TABLE `flightbook` (
  `id` int(255) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `home` varchar(100) NOT NULL,
  `away` varchar(100) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flightbook`
--

INSERT INTO `flightbook` (`id`, `username`, `home`, `away`, `rate`, `date`, `time`) VALUES
(1, 'eajaul', 'Dhaka', 'Chittagong', '5000', '2018-08-30', '12p.m'),
(2, 'ratan', 'Dhaka', 'Syleth', '4000', '2019-04-20', '12p.m'),
(3, 'haque', 'Chittagong', 'Syleth', '4500', '2019-04-19', '12p.m'),
(4, 'inayeem', 'Syleth', 'Dhaka', '4000', '2019-04-13', '12a.m');

-- --------------------------------------------------------

--
-- Table structure for table `groupplan`
--

CREATE TABLE `groupplan` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `member` varchar(100) NOT NULL,
  `firstmember` varchar(100) DEFAULT NULL,
  `secondmember` varchar(100) DEFAULT NULL,
  `thirdmember` varchar(100) DEFAULT NULL,
  `fourthmember` varchar(100) DEFAULT NULL,
  `days` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupplan`
--

INSERT INTO `groupplan` (`id`, `username`, `member`, `firstmember`, `secondmember`, `thirdmember`, `fourthmember`, `days`, `place`, `date`, `email`) VALUES
(1, 'eajaul', '4', 'A', 'B', 'C', 'X', '3', 'Dhaka', '2018-09-05', 'eajajul@gmail.com'),
(5, 'ratan', '3', 'A', 'B', 'C', 'x', '3', 'Chittagang', '2018-08-28', 'md.ratan@gmail.com'),
(6, 'iratan', '4', 'md', NULL, NULL, NULL, '3', 'Chittagang', '2019-04-24', 'rizvi.rumman@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Hid` int(10) NOT NULL,
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `rate` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Hid`, `id`, `name`, `location`, `address`, `rate`) VALUES
(1, '101', 'Redison Blue', 'Dhaka', 'f', 9999),
(2, '201', 'Radisson Blu Chittagong', 'Chittagong', 'S. S. Khaled Road, Lal Khan Bazar, 4000, Chittagong', 5000),
(3, '301', 'Grand Sultan', 'Sylhet', 'Radhanagar, Sreemongal, Moulvibazar, Sylhet, Bangladesh', 6000),
(4, '102', 'Hotel Shonar Gao ', 'Dhaka', 'Bangla Motor,Dhaka,Bangladesh', 6250),
(5, '101', 'Westin', 'Dhaka', 'Gulshan-1, Dhaka,Bangladesh', 6500),
(6, '101', 'Hossain', 'Ctg', 'g', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `hotelbooking`
--

CREATE TABLE `hotelbooking` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelbooking`
--

INSERT INTO `hotelbooking` (`id`, `username`, `hotel`, `rate`, `date`, `email`) VALUES
(1, 'eajajul', 'Radisson Blu Chittagong', '5000', '2018-09-05', 'mdr@gmail.com'),
(3, 'farsha', 'Redison Blue', '7500', '2018-08-28', 'farsha@gmail.com'),
(4, 'inayeem', 'Redison Blue', '9999', '2018-01-02', 's@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `makeplangroup`
--

CREATE TABLE `makeplangroup` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `member` varchar(100) NOT NULL,
  `days` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makeplangroup`
--

INSERT INTO `makeplangroup` (`id`, `username`, `member`, `days`, `place`, `date`, `email`) VALUES
(1, 'md', '3', '', 'Cox\'s Bazar', '2018-08-10', 'md@gmail.com'),
(2, 'iratan', '5', '3', 'Sylhet', '2018-09-07', 'eajajul@gmail.com'),
(3, 'Nibir', '4', '4', 'Chittagang', '2018-08-29', 'nibir@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `uname` varchar(32) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cpassword` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `uname`, `password`, `cpassword`, `email`) VALUES
(6, 'Hossain', 'md', 's', 's', 'hhgh@h.com'),
(8, 'Nahiyan', 'nahiyan', '12345678', '12345678', 'nahi@gmail.com'),
(9, 'ratan', 'iratan', '1', '1', 's@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flightbook`
--
ALTER TABLE `flightbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupplan`
--
ALTER TABLE `groupplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Hid`);

--
-- Indexes for table `hotelbooking`
--
ALTER TABLE `hotelbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makeplangroup`
--
ALTER TABLE `makeplangroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_uname_unique` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `flightbook`
--
ALTER TABLE `flightbook`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groupplan`
--
ALTER TABLE `groupplan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `Hid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hotelbooking`
--
ALTER TABLE `hotelbooking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `makeplangroup`
--
ALTER TABLE `makeplangroup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
