-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 05:04 PM
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
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `imgupload`
--

CREATE TABLE `imgupload` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imgupload`
--

INSERT INTO `imgupload` (`id`, `userid`, `status`) VALUES
(1, 1, 0),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_result`
--

CREATE TABLE `quiz_result` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `chapter` int(11) NOT NULL,
  `result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_result`
--

INSERT INTO `quiz_result` (`id`, `userId`, `chapter`, `result`) VALUES
(1, 3, 1, 5),
(4, 5, 1, 5),
(5, 5, 2, 5),
(6, 5, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, '1', '1@gmail.com', '$2y$10$6rDBndz2Ik4u1Ef6qx9X.OR.RQqtvFOn6uh9DKCMwlrDIaH7idIEa'),
(2, '123', '1@example.com', '$2y$10$bwlwrwtqkychF8Uau1LWRuhnmWW7HzvbLH6FQlDflwDqdKTK5Rady'),
(3, 'hu', 'hu@gmail.com', '$2y$10$pZ7iJtkZLVRMXT0nctBqiemcXz16W4ZfJJeIM.reRNxNnJ3edsZfe'),
(4, 'Jean Teo', 'jean@gmail.com', '$2y$10$ZGYjFapBX/c1eyKbvkqy0.DVm0etP.qbYD.VFTk2meKu6bxyy2BVy'),
(5, 'junnie', '2@gmail.com', '$2y$10$B07u/9.QecmVccJeBRu/MucefAUWcKpg9FB31bFKEXrrTH9VeAyy2'),
(6, 'Jean', '3@gmail.com', '$2y$10$Xt.D2giuDZGnFvpU3xLwlehTpWAThiKE0e2t3PsVgfu3vjI4/Qwku');

-- --------------------------------------------------------

--
-- Table structure for table `user_progress`
--

CREATE TABLE `user_progress` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `chapter` int(11) DEFAULT NULL,
  `chapNum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_progress`
--

INSERT INTO `user_progress` (`id`, `userId`, `chapter`, `chapNum`) VALUES
(1, 3, 1, 4),
(2, 3, 1, 3),
(3, 3, 1, 2),
(4, 3, 1, 1),
(5, 3, 2, 1),
(6, 3, 2, 2),
(7, 3, 2, 3),
(13, 4, 1, 1),
(14, 4, 1, 2),
(15, 4, 1, 3),
(16, 4, 1, 4),
(17, 1, 1, 1),
(18, 1, 1, 1),
(19, 1, 1, 1),
(20, 1, 1, 1),
(21, 1, 1, 1),
(22, 1, 1, 2),
(23, 1, 2, 1),
(24, 1, 2, 2),
(25, 1, 2, 3),
(26, 5, 1, 1),
(27, 5, 1, 2),
(28, 5, 1, 3),
(29, 5, 1, 4),
(30, 5, 2, 1),
(31, 5, 2, 2),
(32, 5, 2, 3),
(33, 5, 3, 1),
(34, 5, 3, 2),
(35, 5, 3, 3),
(36, 5, 3, 4),
(37, 5, 3, 5),
(38, 6, 1, 1),
(39, 6, 1, 2),
(40, 6, 1, 3),
(41, 6, 1, 4),
(42, 6, 2, 1),
(43, 6, 2, 2),
(44, 6, 2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imgupload`
--
ALTER TABLE `imgupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_result`
--
ALTER TABLE `quiz_result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- Indexes for table `user_progress`
--
ALTER TABLE `user_progress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imgupload`
--
ALTER TABLE `imgupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quiz_result`
--
ALTER TABLE `quiz_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_progress`
--
ALTER TABLE `user_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quiz_result`
--
ALTER TABLE `quiz_result`
  ADD CONSTRAINT `quiz_result_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`idUsers`);

--
-- Constraints for table `user_progress`
--
ALTER TABLE `user_progress`
  ADD CONSTRAINT `user_progress_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`idUsers`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
