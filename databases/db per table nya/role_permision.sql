-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2022 at 09:18 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iso_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `role_permision`
--

CREATE TABLE `role_permision` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(20) DEFAULT NULL,
  `permision` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_permision`
--

INSERT INTO `role_permision` (`id_role`, `name_role`, `permision`) VALUES
(1, 'admin', 'Create. Update, Delete Data Aset dan Category Aset. Management User dan Data Employee'),
(2, 'employee', 'Management Aset, Management Category Aset, Management User dan Employee'),
(3, 'auditor', 'Read Aset, Read data Category Aset');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role_permision`
--
ALTER TABLE `role_permision`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role_permision`
--
ALTER TABLE `role_permision`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
