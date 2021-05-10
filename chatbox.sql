-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 02:36 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `nature`
--

CREATE TABLE `nature` (
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `names` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `messages` varchar(10000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sent` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nature`
--

INSERT INTO `nature` (`username`, `names`, `messages`, `sent`, `time`) VALUES
('vaibhavaggarwal', 'vaibhav', 'hi', 'vaibhavaggarwal', NULL),
('vaibhavaggarwal', 'vaibhav', 'hlo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `username`, `password`, `image`) VALUES
('nature', 'nature@gmail.com', 'nature', 'nature', 'nature.jpg'),
('vaibhav', 'aggarwalvaibhav173@gmail.com', 'vaibhavaggarwal', 'vaibhav', 'vaibhav.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vaibhavaggarwal`
--

CREATE TABLE `vaibhavaggarwal` (
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `names` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `messages` varchar(10000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sent` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vaibhavaggarwal`
--

INSERT INTO `vaibhavaggarwal` (`username`, `names`, `messages`, `sent`, `time`) VALUES
('nature', 'nature', 'hi', NULL, NULL),
('nature', 'nature', 'hlo', 'nature', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
