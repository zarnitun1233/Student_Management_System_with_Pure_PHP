-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 01:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'password', '2022-07-16 11:01:09', '2022-07-16 11:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `age`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Mg Mg', 23, 'mgmg@gmail.com', '09123456787', '2022-07-16 17:30:23', '2022-07-16 17:30:23'),
(2, 'Hla Hla', 22, 'hlahla@gmail.com', '09123456787', '2022-07-16 17:30:35', '2022-07-16 17:30:35'),
(3, 'John Doe', 22, 'johndoe@gmail.com', '09123456732', '2022-07-16 17:30:56', '2022-07-16 17:30:56'),
(4, 'Bob', 22, 'bob@gmail.com', '09123456781', '2022-07-16 17:31:09', '2022-07-16 17:31:09'),
(5, 'Bo Bo', 22, 'bobo@gmail.com', '09123456781', '2022-07-16 17:31:26', '2022-07-16 17:31:26'),
(6, 'Zaw Zaw', 22, 'zawzaw@gmail.com', '09123456784', '2022-07-16 17:31:43', '2022-07-16 17:31:43'),
(7, 'Hla Thida', 23, 'hlathida@gmail.com', '09123456785', '2022-07-16 17:32:05', '2022-07-16 17:32:05'),
(8, 'Vailr', 32, 'vailr@gmail.com', '09123456788', '2022-07-16 17:32:31', '2022-07-16 17:32:31'),
(9, 'Granger', 22, 'granger@gmail.com', '09123456780', '2022-07-16 17:32:47', '2022-07-16 17:32:47'),
(10, 'Franco', 22, 'franco@gmail.com', '09123456787', '2022-07-16 17:33:02', '2022-07-16 17:33:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
