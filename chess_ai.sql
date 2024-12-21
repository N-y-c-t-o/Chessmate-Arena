-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 09:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chess_ai`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatorId` int(11) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `avatorId`, `reg_date`) VALUES
(37, 'kyawminwai', 'kyaw@gmail.com', '$2y$10$ZY4X9pwCXNftU1KMGhCwNOOFGn1GmslIlnWrCfbfDsVAnDNByZ4kS', 6, '2024-08-23 19:07:21'),
(38, 'htethtetoowai', 'htethtet@gmail.com', '$2y$10$gGptbD8byz1DW2cAQ5T0Iu3NJ0OP/DtOGVpSLIxk7s8B3lo0KndlK', 13, '2024-08-25 14:25:34'),
(39, 'aungkhantkyaw', 'kyaw@gmail.com', '$2y$10$eDgMmWesIUK0Z6btI5VQquEQrACJNdYsLQfOEDu8EPiyI78MNSe/K', 5, '2024-09-03 12:20:51'),
(40, 'minthiha kyaw', 'kyaw@gmail.com', '$2y$10$ih8whPeqdeSSF6h8/fX25OsnaTckEf0Bmxa2h5EtrOtXjM8/dMlEa', 16, '2024-09-08 21:51:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
