-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2018 at 07:03 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id905037_db10`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`Name`, `Password`) VALUES
('admin', 'adminuser');

-- --------------------------------------------------------

--
-- Table structure for table `sitedes`
--

CREATE TABLE `sitedes` (
  `site_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `site_des` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_name_alone`
--

CREATE TABLE `site_name_alone` (
  `id` int(11) NOT NULL,
  `name_alone` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_register`
--

CREATE TABLE `site_register` (
  `site_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `usersname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `longi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `time_zone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `isp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `asn` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `browser` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `os` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cache` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `display_ads` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `https` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `post_requests` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `show_recom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `remove_dead_links` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `collect_geoipdat_info` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `user_fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_uname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_gender` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_dob` date NOT NULL,
  `user_mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `site_name_alone`
--
ALTER TABLE `site_name_alone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `site_name_alone`
--
ALTER TABLE `site_name_alone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
