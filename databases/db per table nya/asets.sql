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
-- Table structure for table `asets`
--

CREATE TABLE `asets` (
  `id_aset` int(5) NOT NULL,
  `name_aset` varchar(50) DEFAULT NULL,
  `no_aset` varchar(25) DEFAULT NULL,
  `id_category` int(5) DEFAULT NULL,
  `id_emp` int(5) DEFAULT NULL,
  `status_aset` enum('baik','rusak','sedang perbaikan','dijual') DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asets`
--

INSERT INTO `asets` (`id_aset`, `name_aset`, `no_aset`, `id_category`, `id_emp`, `status_aset`, `location`, `keterangan`) VALUES
(1, 'Macbook Pro 2017', '78678', 1, 1, 'baik', 'On Personal WFH', 'RAM 8 GB, SSD 256 GB, i5'),
(2, 'Kursi', '24245', 2, 1, 'baik', 'Kantor Jogja', 'Wana hitam'),
(4, 'Handphone', '98237842', 2, 1, 'baik', 'Dirumah', 'Samsung'),
(5, 'PC ', '232323', 2, 1, 'rusak', 'Kantor Jogja', 'Rusak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asets`
--
ALTER TABLE `asets`
  ADD PRIMARY KEY (`id_aset`),
  ADD KEY `Fk Category Aset` (`id_category`),
  ADD KEY `Fk User` (`id_emp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asets`
--
ALTER TABLE `asets`
  MODIFY `id_aset` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asets`
--
ALTER TABLE `asets`
  ADD CONSTRAINT `Fk Category Aset` FOREIGN KEY (`id_category`) REFERENCES `category_aset` (`id_category`),
  ADD CONSTRAINT `Fk User` FOREIGN KEY (`id_emp`) REFERENCES `employee` (`id_emp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
