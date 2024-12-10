-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 03:32 PM
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
-- Database: `lab_5b`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `matric` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`matric`, `name`, `password`, `role`) VALUES
('0200', 'Nur Ariffin Mohd Zin', '$2y$10$wIu2b29M7GMl1Rcbx0mcaOTb2fnlwa0DyI6fm20m.0fKpqiwnJG2S', 'lecturer'),
('A100', 'Ahmad Albab', '$2y$10$SIl/PF9Jou1DnId4.6FUzOYKLBienaGocwt.ocb.3FaTXPCHxugUi', 'student'),
('A101', 'Abu', '$2y$10$0b7kTWO.kbFJ2vPr6zJefOSxRdQjUtQpMg8yEVCadHRcjVnFOSo/a', 'student'),
('A103', 'Ahmad bin Abu', '$2y$10$j1Bou2RiZXdH7c7ydnV2TuXe50hKZmPkCOHG1TzhmmOB66HnHq1Ru', 'student'),
('AI220265', 'Foong', '$2y$10$qjSySeZb0ZVdj/iKytsQ1OeVEPMijfkTlR6x22BOqjRoU5aNiE4za', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`matric`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
