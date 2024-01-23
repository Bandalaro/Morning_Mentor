-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 09:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workout`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `exercise_name` varchar(255) NOT NULL,
  `exercise_duration` int(11) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`id`, `uid`, `exercise_name`, `exercise_duration`, `time`) VALUES
(10, 4, 'burpees', 5, '2024-01-16 07:36:12'),
(11, 4, 'burpees', 5, '2024-01-16 07:36:12'),
(12, 4, 'squats', 10, '2024-01-16 08:41:40'),
(13, 5, 'burpees', 20, '2024-01-16 08:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_calories` int(11) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `uid`, `food_name`, `food_calories`, `time`) VALUES
(5, 4, 'Dosa', 100, '2024-01-16 08:41:49'),
(6, 5, 'Dosa', 300, '2024-01-16 08:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `meditation`
--

CREATE TABLE `meditation` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meditation`
--

INSERT INTO `meditation` (`id`, `uid`, `duration`, `time`) VALUES
(6, 4, 20, '2024-01-16 08:41:56'),
(7, 5, 20, '2024-01-16 08:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `study`
--

CREATE TABLE `study` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `bookname` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`id`, `uid`, `bookname`, `duration`, `time`) VALUES
(1, 4, 'Alchemist', 30, '2024-01-16 08:42:34'),
(2, 5, 'Ponniyin Selvan', 120, '2024-01-16 08:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(204, NULL, '', 0x3a3a3100000000000000000000000000, '2024-01-15 15:16:08', NULL, 1),
(205, NULL, '', 0x3a3a3100000000000000000000000000, '2024-01-15 15:17:47', NULL, 1),
(206, NULL, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-15 15:20:19', NULL, 1),
(207, NULL, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-15 15:21:03', NULL, 0),
(208, NULL, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-15 15:22:42', NULL, 1),
(209, NULL, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-15 15:33:59', NULL, 1),
(210, NULL, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-15 15:37:13', NULL, 1),
(211, NULL, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-15 15:39:15', NULL, 1),
(212, NULL, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-15 15:41:04', NULL, 1),
(213, NULL, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-15 15:41:42', NULL, 1),
(214, NULL, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-15 15:42:38', NULL, 1),
(215, 4, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-15 15:44:16', '2024-01-16 14:14:01', 1),
(216, 4, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-15 15:45:15', '2024-01-16 14:14:01', 1),
(217, 4, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-15 15:49:16', '2024-01-16 14:14:01', 1),
(218, 4, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-15 15:49:56', '2024-01-16 14:14:01', 1),
(219, 4, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-16 04:07:38', '2024-01-16 14:14:01', 1),
(220, 4, 'sample1@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-16 06:53:03', '2024-01-16 14:14:01', 1),
(221, 5, 'sample2@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-16 08:44:14', '2024-01-16 14:22:29', 1),
(222, 5, 'sample2@gmail.com', 0x3a3a3100000000000000000000000000, '2024-01-16 08:52:40', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `lname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `regDate`) VALUES
(1, 'dhinesh', 'senthil', 'sdhineshsd@gmail.com', '125885d67e2ada50c6cb6bde2544a5ef', '2024-01-07 09:57:53'),
(2, 'Rahul', 'Sreedharan', '223171036@sastra.ac.in', '12bfcef7fc8e02095415f78e389fd2e1', '2024-01-07 10:02:57'),
(3, 'sample', 'sample', 'sample@gmail.com', '5e8ff9bf55ba3508199d22e984129be6', '2024-01-07 10:07:44'),
(4, 'sample1', 'sample', 'sample1@gmail.com', 'ac46374a846d97e22f917b6863f690ad', '2024-01-12 10:36:42'),
(5, 'sample2', 'sample', 'sample2@gmail.com', '656b38f3402a1e8b4211fac826efd433', '2024-01-12 11:50:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`uid`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`uid`);

--
-- Indexes for table `meditation`
--
ALTER TABLE `meditation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`uid`);

--
-- Indexes for table `study`
--
ALTER TABLE `study`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `meditation`
--
ALTER TABLE `meditation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `study`
--
ALTER TABLE `study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exercises`
--
ALTER TABLE `exercises`
  ADD CONSTRAINT `exercises_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `meditation`
--
ALTER TABLE `meditation`
  ADD CONSTRAINT `meditation_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `study`
--
ALTER TABLE `study`
  ADD CONSTRAINT `study_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
