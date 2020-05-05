-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 05, 2020 at 12:37 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admins_id` int(4) NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `department` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `id_number` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admins_id`, `username`, `password`, `first_name`, `last_name`, `department`, `id_number`) VALUES
(1, 'apple', 'apple', 'Panithi', 'Thamsaroj', 'God', 0),
(2, 'papayahanaga@gmail.c', 'asghsh', 'dsg', 'gsg', 'Primary', 0),
(3, 'papayahanaga@gmail.c', 'AppleTart13042519', 'sadgasdg', 'agsg', 'Primary', 0),
(4, 'papayahanaga@gmail.c', 'appletart13042519', 'dfafagae', 'gwww', 'primary', 2147483647),
(5, 'appletart', 'appletart', 'appletart', 'appletart', 'secondery', 2147483647),
(6, 'appletart', 'appag', 'appletart', 'appletart', 'secondery', 2147483647),
(7, 'ricky', 'ricky', 'ricky', 'ricky', 'primary', 2147483647),
(8, 'testinput', 'testinput', 'testinput', 'testinput', 'primary', 2147483647),
(9, 'testinput', 'fsadgsgdf', 'testinput', 'testinput', 'primary', 2147483647),
(10, 'testrunning', 'testrunning', 'testrunning', 'testrunning', 'secondery', 2147483647),
(11, 'john', 'john', 'john', 'john', 'secondery', 2147483647),
(12, 'doe', 'doe', 'doe', 'doe', 'secondery', 2147483647),
(13, 'vichite', 'vichite', 'vichite', 'vichite', 'secondery', 2147483647),
(14, 'vichite', 'vichite', 'vichite', 'vichite', 'secondery', 2147483647),
(15, 'vichite', 'vichite', 'vichite', 'vichite', 'secondery', 2147483647),
(16, 'vichite', 'vichite', 'vichite', 'vichite', 'secondery', 2147483647),
(17, 'vichite', 'vichite', 'vichite', 'vichite', 'secondery', 2147483647),
(18, 'zichien', 'zichien', 'zichien', 'zichien', 'secondery', 2147483647),
(19, 'zichien', 'zichien', 'zichien', 'zichien', 'secondery', 2147483647),
(20, 'zichien', 'zichien', 'zichien', 'zichien', 'secondery', 2147483647),
(21, 'naomi', 'naomi', 'naomi', 'naomi', 'primary', 2147483647),
(22, 'hi there', 'hi there', 'hi there', 'hi there', 'kindergarten', 767857808),
(23, 'fatima', 'fatima', 'fatima', 'fatima', 'secondery', 67587),
(24, 'admin', 'admin', 'admin', 'admin', 'primary', 364265),
(25, 'admin', 'gjhggj', 'admin', 'admin', 'primary', 364265),
(26, 'ricky', 'ricky', 'ricky', 'ricky', 'kindergarten', 1235512),
(27, 'ricky', 'ricky', 'ricky', 'ricky', 'primary', 2147483647),
(28, 'admin_id', 'gasgag', 'admin_id', 'admin_id', 'kindergarten', 4532626),
(29, 'papayahanaga@gmail.c', 'applafetart13042519', 'sadg', 'sg', 'primary', 543264),
(30, 'papayahanaga@gmail.c', 'appletart13042519', 'sadg', 'sg', 'primary', 543264),
(31, 'papayahanaga', 'trwt', 'papayahanaga', 'papayahanaga', 'kindergarten', 34),
(32, 'first name', 'first name', 'first name', 'first name', 'kindergarten', 75),
(33, 'papayahanaga@gmail.c', 'papayahanaga', 'papayahanaga', 'papayahanaga', 'kindergarten', 213),
(34, 'papayahanaga@gmail.c', 'appletart13042519', 'papayahanaga', 'papayahanaga', 'kindergarten', 213),
(49, 'lucky', 'lucky', 'lucky', 'lucky', 'kindergarten', 32),
(50, 'huhun', 'huhun', 'huhun', 'huhun', 'primary', 2334),
(51, 'niko', 'niko', 'niko', 'niko', 'primary', 21535),
(52, 'papaya', 'papaya', 'papaya', 'papaya', 'kindergarten', 4235),
(53, 'test', 'test', 'test', 'test', 'primary', 235235),
(54, 'testinput', 'testinput', 'testinput', 'testinput', 'secondery', 12),
(55, '16.18', '16.18', '16.18', '16.18', 'kindergarten', 1618),
(56, '16.20', '16.20', '16.20', '16.20', 'kindergarten', 1620),
(57, '16.23', '16.23', '16.23', '16.23', 'kindergarten', 1623),
(58, '16.42', '16.42', '16.42', '16.42', 'kindergarten', 1642),
(59, '16.47', '16.47', '16.47', '16.47', 'kindergarten', 1647),
(61, 'ss', 'ss', 'ss', 'ss', 'kindergarten', 14),
(62, 'kraprow', 'kraprow', 'kraprow', 'kraprow', 'kindergarten', 12659529),
(63, 'papayahanaga@gmail.c', 'papayahanaga', 'papayahanaga', 'papayahanaga', 'secondery', 3215),
(64, 'gmail.com', 'gmail.com', 'gmail.com', 'gmail.com', 'kindergarten', 526436),
(65, '526436', '526436', '526436', '526436', 'kindergarten', 526436),
(66, 'sara', 'sara', 'sara', 'sara', 'primary', 2351246),
(67, 'josepin', 'josepin', 'josepin', 'josepin', 'primary', 215216),
(68, 'sabien', 'sabien', 'sabien', 'sabien', 'primary', 2152161),
(69, 'hidy', 'hidy', 'hidy', 'hidy', 'primary', 364327),
(70, 'proven', 'proven', 'proven', 'proven', 'primary', 12537),
(71, 'hello', 'hello', 'hello', 'hello', 'primary', 432767),
(72, 'kin', 'kin', 'kin', 'kin', 'primary', 63273),
(73, 'admin13', 'admin13', 'admin13', 'admin13', 'primary', 432643734),
(74, 'adminopa', 'adminopa', 'adminopa', 'adminopa', 'primary', 215347357),
(75, 'saimai', 'saimai', 'saimai', 'saimai', 'kindergarten', 2147483647),
(76, 'trya', 'trya', 'trya', 'trya', 'kindergarten', 21564),
(77, 'trya', 'trya', 'trya', 'trya', 'kindergarten', 2346),
(78, 'sassy', 'sassy', 'sassy', 'sassy', 'primary', 15436675),
(79, 'khaiyoy', 'khaiyoy', 'khaiyoy', 'khaiyoy', 'primary', 34636),
(80, 'natalie', 'PORTMAN', 'natalie', 'portman', 'kindergarten', 123456788),
(81, 'wayne', 'Dearman2345', 'wayne', 'deerman', 'kindergarten', 2147483647),
(82, 'wayne', 'ffafewgrhr', 'wayne', 'deerman', 'kindergarten', 2147483647),
(83, 'bart', 'BART8hhjkgdnksl', 'bart', 'moerman', 'secondery', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `profileimage`
--

CREATE TABLE `profileimage` (
  `photo_id` int(4) unsigned zerofill NOT NULL,
  `img_data` blob NOT NULL,
  `id_admin` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `profileimage`
--

INSERT INTO `profileimage` (`photo_id`, `img_data`, `id_admin`) VALUES
(0027, 0x32346537373930383761626133316262343834636532386430356265636266332e6a7067, 71),
(0028, 0x39356463313130333139393237313763653863623639353332313363316633312d2d70686f746f2d636c6173732d70686f746f2d706f7274726169742e6a7067, 72),
(0029, 0x38383264613863386232626439643931666139613931366465666465396538612e6a7067, 73),
(0030, 0x62396434633966336337373063636131356535363762396530363533656661622e6a7067, 74),
(0031, 0x38383264613863386232626439643931666139613931366465666465396538612e6a7067, 75),
(0032, 0x70726f6d6f73613131313231372e706e67, 77),
(0033, 0x37613163326365383839396364616435343632313663363363373435653338612e6a7067, 78),
(0034, 0x38383264613863386232626439643931666139613931366465666465396538612e6a7067, 79),
(0035, 0x30306466323639626264356434363135376466336165366437373430636235622e6a7067, 80),
(0036, 0x313037353739393033352e6a706567, 81),
(0037, 0x38383264613863386232626439643931666139613931366465666465396538612e6a7067, 83);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `sex` varchar(25) COLLATE utf8mb4_bin NOT NULL,
  `date_in` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `email`, `phone`, `sex`, `date_in`) VALUES
(1, 'dale', 'cooper', 'dcooper@aol.com', '0458529888', 'male', '2020-04-26 00:00:00'),
(2, 'harry', 'truman', 'htruman@aol.com', '0458529888', 'female', '2020-04-26 00:00:00'),
(3, 'shelly', 'johnson', 'sjohnson@aol.com', '0458529888', 'choose...', '2020-04-26 00:00:00'),
(4, 'Bobby', 'Briggs', 'bbriggs@aol.com', '0458529888', 'Unisex', '2020-04-27 00:00:00'),
(5, 'Donna', 'Hayward', 'dhayward@aol.com', '0458529888', 'Unisex', '2020-04-27 00:00:00'),
(6, 'Audrey', 'Horne', 'ahorne@aol.com', '0458529888', 'Male', '2020-04-27 00:00:00'),
(7, 'James', 'Hurley', 'jhurley@aol.com', '0458529888', 'Male', '2020-04-27 00:00:00'),
(8, 'lucy', 'moran', 'lmoran@aol.com', '0458529888', 'female', '2020-04-27 00:00:00'),
(9, 'tommy', 'hill', 'thill@aol.com', '0458529888', 'female', '2020-04-27 00:00:00'),
(10, 'andy', 'brebban', 'abrennan@aol.com', '0458529889', 'unisex', '2020-04-27 00:00:00'),
(43, 'khaimuk', 'khaimuk2', 'in@ji.ko', '0484294466', 'female', '2020-04-28 11:01:19'),
(45, 'testinput', 'testinput2', 'email@Khaimuk.be', '0484294466', 'Unisex', '2020-04-29 13:23:53'),
(48, 'ricky', 'r', 'Test1@test.be', '0458529889', 'Male', '2020-04-29 13:29:03'),
(52, 'jozua', 'Van damme', 'JozuaVan@damme.be', '09887654445', 'Unisex', '2020-04-29 17:34:48'),
(53, 'jozua', 'Van damme', 'JozuaVan@damme.be', '09887654445', 'Unisex', '2020-04-29 17:35:55'),
(54, 'evert', 'Van damme', 'evertVan@damme.com', '03282957237', 'Unisex', '2020-04-29 17:36:50'),
(55, 'evert', 'Van damme', 'evertVan@damme.com', '03282957237', 'Unisex', '2020-04-29 17:37:09'),
(56, 'evert', 'Van damme', 'evertVan@damme.com', '03282957237', 'Unisex', '2020-04-29 17:37:13'),
(57, 'evert', 'Van damme', 'evertVan@damme.com', '03282957237', 'Male', '2020-04-29 17:37:18'),
(58, 'evert', 'Van damme', 'evertVan@damme.com', '371572896595', 'Female', '2020-04-29 17:37:29'),
(62, 'sagg', 'asgs', 'sagsg@sgs.ll', '436325747', 'fale', '2020-05-02 16:30:11'),
(63, 'zfg', 'fs', 'zzfs@hsgf', '34', 'female', '2020-05-03 12:36:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admins_id`);

--
-- Indexes for table `profileimage`
--
ALTER TABLE `profileimage`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admins_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `profileimage`
--
ALTER TABLE `profileimage`
  MODIFY `photo_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
