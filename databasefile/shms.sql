-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 06:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('ak', 'ak@123.to', '0955454532', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `uid` int(15) NOT NULL,
  `exid` int(15) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(15) NOT NULL,
  `exercisetype` varchar(30) NOT NULL,
  `duration` int(5) NOT NULL,
  `calories` int(15) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`uid`, `exid`, `fname`, `lname`, `gender`, `email`, `contact`, `exercisetype`, `duration`, `calories`, `time`) VALUES
(1, 19, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'walking', 78, 89, '2023-02-10 12:56:27'),
(1, 20, 'chad', 'K', 'male', 'r@t.in', 914748384, 'dips', 58, 99, '2023-02-10 13:00:07'),
(1, 25, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'steps', 45, 180, '2023-02-10 13:08:08'),
(1, 27, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'plank', 587, 2348, '2023-02-10 13:11:10'),
(1, 29, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'pushups', 69, 276, '2023-02-10 13:13:22'),
(1, 30, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'squats', 12, 48, '2023-02-10 13:13:38'),
(1, 31, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'plank', 65, 260, '2023-02-11 12:20:11'),
(10, 32, 'kingo', 'chad', 'Male', 'chad@k.k', 955455485, 'steps', 54, 216, '2023-02-11 13:22:35'),
(10, 33, 'kingo', 'chad', 'Male', 'chad@k.k', 955455485, 'walking', 65, 260, '2023-02-11 13:26:49'),
(1, 35, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'steps', 458, 1832, '2023-02-14 16:59:13'),
(1, 36, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'running', 154, 616, '2023-02-14 17:00:32'),
(1, 37, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'benchpress', 55, 220, '2023-02-14 17:00:43'),
(1, 38, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'pushups', 89, 356, '2023-02-14 17:00:55'),
(1, 39, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'pushups', 554, 2216, '2023-02-14 17:01:09'),
(1, 40, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'steps', 548, 568, '2023-02-21 14:14:58'),
(1, 41, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'running', 100, 0, '2023-02-22 16:15:57'),
(1, 42, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'running', 60, 600, '2023-02-22 16:18:23'),
(1, 43, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'steps', 6000, 300, '2023-02-22 16:18:48'),
(1, 44, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'walking', 30, 249, '2023-02-22 16:19:08'),
(1, 45, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'football', 90, 318, '2023-02-22 16:19:51'),
(1, 46, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'benchpress', 15, 45, '2023-02-22 16:20:25'),
(1, 47, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'plank', 34, 119, '2023-02-22 16:21:06'),
(1, 48, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'plank', 55, 193, '2023-02-22 16:26:14'),
(1, 49, 'chad', 'K', 'Male', 'r@t.in', 914748384, 'yoga', 90, 295, '2023-02-22 16:26:32'),
(10, 50, 'king', 'chad', 'Male', 'chad@k.k', 955455485, 'steps', 7000, 350, '2023-03-02 17:38:11'),
(10, 51, 'king', 'chad', 'Male', 'chad@k.k', 955455485, 'steps', 15487, 774, '2023-03-02 17:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `uid` int(15) NOT NULL,
  `rid` int(15) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(15) NOT NULL,
  `heartrate` int(3) DEFAULT NULL,
  `heartrate_state` varchar(25) DEFAULT NULL,
  `bloodoxygen` varchar(3) DEFAULT NULL,
  `bloodoxygen_state` varchar(30) DEFAULT NULL,
  `BP_SYSTOLIC` int(3) DEFAULT NULL,
  `BP_DIASTOLIC` int(3) DEFAULT NULL,
  `BP_state` varchar(15) DEFAULT NULL,
  `glucose` int(3) DEFAULT NULL,
  `glucose_status` varchar(30) DEFAULT NULL,
  `weight` int(3) DEFAULT NULL,
  `height` int(3) DEFAULT NULL,
  `Age` int(2) DEFAULT NULL,
  `bmi` int(5) DEFAULT NULL,
  `stress` varchar(7) DEFAULT NULL,
  `stress_state` int(30) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`uid`, `rid`, `fname`, `lname`, `gender`, `email`, `contact`, `heartrate`, `heartrate_state`, `bloodoxygen`, `bloodoxygen_state`, `BP_SYSTOLIC`, `BP_DIASTOLIC`, `BP_state`, `glucose`, `glucose_status`, `weight`, `height`, `Age`, `bmi`, `stress`, `stress_state`, `time`) VALUES
(1, 241, 'chad', 'K', 'Male', 'r@t.in', 914748384, 88, 'Resting', '', '', 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, '2023-02-10 11:24:32'),
(1, 242, 'chad', 'K', 'Male', 'r@t.in', 914748384, 98, 'General', '', '', 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, '2023-02-10 11:25:25'),
(1, 243, 'chad', 'K', 'Male', 'r@t.in', 914748384, 85, 'General', '', '', 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, '2023-02-10 11:35:13'),
(1, 244, 'chad', 'K', 'Male', 'r@t.in', 914748384, 69, 'General', '', '', 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, '2023-02-10 11:43:15'),
(1, 245, 'chad', 'K', 'Male', 'r@t.in', 914748384, 154, 'General', '', '', 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, '2023-02-10 11:47:09'),
(1, 253, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '66', 'General', 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, '2023-02-10 13:17:41'),
(1, 254, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '88', 'Resting', 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, '2023-02-10 13:17:53'),
(1, 255, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '154', 'Resting', 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, '2023-02-10 13:18:09'),
(1, 256, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '', '', 0, 0, '', 659, 'Fasting', 0, 0, 0, 0, '', 0, '2023-02-10 13:18:59'),
(1, 257, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '', '', 0, 0, '', 48, 'Pre-meal', 0, 0, 0, 0, '', 0, '2023-02-10 13:19:15'),
(1, 259, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '', '', 0, 0, '', 0, '', 45, 95, 54, 458, '', 0, '2023-02-10 13:24:36'),
(1, 260, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '', '', 0, 0, '', 0, '', 66, 178, 0, 21, '', 0, '2023-02-10 13:38:38'),
(1, 261, 'chad', 'K', 'Male', 'r@t.in', 914748384, 88, '', '', '', 178, 233, 'Taken', 0, '', 0, 0, 0, 0, '', 0, '2023-02-10 13:58:44'),
(1, 262, 'chad', 'K', 'Male', 'r@t.in', 914748384, 99, '', '', '', 156, 169, 'Taken', 0, '', 0, 0, 0, 0, '', 0, '2023-02-10 13:59:52'),
(10, 263, 'kingo', 'chad', 'Male', 'chad@k.k', 955455485, 88, 'Resting', '', '', 0, 0, '', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-02-11 13:22:54'),
(10, 264, 'kingo', 'chad', 'Male', 'chad@k.k', 955455485, 66, 'General', '', '', 0, 0, '', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-02-11 13:24:49'),
(10, 265, 'kingo', 'chad', 'Male', 'chad@k.k', 955455485, 0, '', '254', 'Exercise Lightly', 0, 0, '', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-02-11 13:25:30'),
(10, 266, 'kingo', 'chad', 'Male', 'chad@k.k', 955455485, 0, '', '', '', 0, 0, '', 154, 'Fasting', 0, 0, 0, 0, NULL, NULL, '2023-02-11 13:25:59'),
(10, 267, 'kingo', 'chad', 'Male', 'chad@k.k', 955455485, 54, '', '', '', 196, 171, 'Taken', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-02-11 13:26:15'),
(10, 268, 'kingo', 'chad', 'Male', 'chad@k.k', 955455485, 0, '', '', '', 0, 0, '', 0, '', 58, 155, 18, 24, NULL, NULL, '2023-02-11 13:26:31'),
(1, 270, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '88', 'Resting', 0, 0, '', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-02-14 16:57:38'),
(1, 271, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '95', 'Exercise Lightly', 0, 0, '', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-02-14 16:57:49'),
(1, 272, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '', '', 0, 0, '', 120, 'Fasting', 0, 0, 0, 0, NULL, NULL, '2023-02-14 16:58:06'),
(1, 273, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '', '', 0, 0, '', 300, 'Before Sleep', 0, 0, 0, 0, NULL, NULL, '2023-02-14 16:58:24'),
(1, 274, 'chad', 'K', 'Male', 'r@t.in', 914748384, 88, '', '', '', 211, 154, 'Taken', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-02-14 16:58:42'),
(1, 275, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '', '', 0, 0, '', 0, '', 85, 171, 54, 29, NULL, NULL, '2023-02-14 16:58:58'),
(1, 276, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '', '', 0, 0, '', 0, '', 45, 1548, 4, 0, NULL, NULL, '2023-02-19 05:47:43'),
(1, 277, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '', '', 0, 0, '', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-02-22 16:26:52'),
(1, 278, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, 'General', '', '', 0, 0, '', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-02-22 16:31:42'),
(1, 279, 'chad', 'K', 'Male', 'r@t.in', 914748384, 68, 'Resting', '', '', 0, 0, '', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-02-22 16:32:46'),
(1, 280, 'chad', 'K', 'Male', 'r@t.in', 914748384, 77, 'After Exercise', '', '', 0, 0, '', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-02-22 16:32:57'),
(1, 281, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '98', 'General', 0, 0, '', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-02-22 16:33:11'),
(1, 282, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '', '', 0, 0, '', 154, 'Fasting', 0, 0, 0, 0, NULL, NULL, '2023-02-22 16:33:25'),
(1, 283, 'chad', 'K', 'Male', 'r@t.in', 914748384, 87, '', '', '', 227, 157, 'Taken', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-02-22 16:34:28'),
(1, 284, 'chad', 'K', 'Male', 'r@t.in', 914748384, 0, '', '', '', 0, 0, '', 0, '', 84, 195, 30, 22, NULL, NULL, '2023-02-22 16:34:52'),
(10, 285, 'king', 'chad', 'Male', 'chad@k.k', 955455485, 56, 'General', '', '', 0, 0, '', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-03-02 17:37:30'),
(10, 286, 'king', 'chad', 'Male', 'chad@k.k', 955455485, 88, 'Resting', '', '', 0, 0, '', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-03-02 17:37:43'),
(10, 287, 'king', 'chad', 'Male', 'chad@k.k', 955455485, 0, '', '87', 'Exercise Lightly', 0, 0, '', 0, '', 0, 0, 0, 0, NULL, NULL, '2023-03-02 17:37:55'),
(10, 288, 'king', 'chad', 'Male', 'chad@k.k', 955455485, 0, '', '', '', 0, 0, '', 0, '', 66, 189, 25, 18, NULL, NULL, '2023-03-02 17:38:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  `bloodgroup` varchar(25) DEFAULT NULL,
  `country` varchar(25) DEFAULT NULL,
  `region` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `gender`, `email`, `contact`, `password`, `cpassword`, `bloodgroup`, `country`, `region`) VALUES
(1, 'chad', 'K', 'Male', 'r@t.in', 914748384, '258741369', '258741369', 'A RhD positive (A+)', 'canada', 'toronto'),
(10, 'king', 'chad', 'Male', 'chad@k.k', 955455485, '123456', '123456', 'AB RhD positive (AB+)', 'US', 'DC'),
(12, 'ak', 'k', 'Male', 'ka@g.m', 922151815, '123456', '123456', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`exid`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `exid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `rid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
