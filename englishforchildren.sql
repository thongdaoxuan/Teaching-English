-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 10:44 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `englishforchildren`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `ac_id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên đầy đủ',
  `cur_category` int(11) NOT NULL COMMENT 'Mức độ hiện tại',
  `cur_level` int(11) NOT NULL,
  `last_signed_on` datetime NOT NULL COMMENT 'Lần đăng nhập gần nhất',
  `ac_created_at` datetime NOT NULL,
  `ac_updated_at` datetime NOT NULL,
  `is_Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `an_id` int(11) NOT NULL,
  `an_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `an_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `an_audio` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `an_type` int(11) NOT NULL,
  `qu_id` int(11) NOT NULL,
  `an_correct` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `an_updated_at` datetime NOT NULL,
  `an_created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `ca_id` int(11) NOT NULL,
  `ca_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ca_note` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ca_updated_at` datetime NOT NULL,
  `ca_created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `qu_id` int(11) NOT NULL,
  `qu_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qu_image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qu_audio` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qu_skill` int(11) NOT NULL,
  `ca_id` int(11) NOT NULL,
  `qu_created_at` datetime NOT NULL COMMENT 'Ngày tạo',
  `qu_updated_at` datetime NOT NULL COMMENT 'Ngày cập nhật'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`an_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `an_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qu_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
