-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2022 at 08:58 AM
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
-- Database: `prod_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('admin','staff') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `full_name`, `email`, `role`) VALUES
(1, 'arnanda', 'c513972f3c3431dc85d2cf4ba0784bef', 'Arnanda Nuryasa', 'alert.arnanda.nuryasa@gmail.com', 'admin'),
(2, 'Carlos', 'e08a7c49d96c2b475656cc8fe18cee8e', 'Carlos W N', 'calos.w234@yahoo.com', 'staff'),
(4, 'andy', 'baa146ae53dbaf318aa8b4f651103b62', 'Andy Nurhandika', 'andi.nurhandika@gmail.com', 'staff'),
(5, 'Suryo_p', '908df24b5a6f47d749d8c65580487978', 'Suryo Prastyo', 'suryo12345@gmail.com', 'staff'),
(6, 'disa_p', '19e61db570719c2828ef6f90bc9be5ff', 'Disa Putri', 'disa.putri@gmail.com', 'staff'),
(7, 'john', '731eeee73fcecce7915a0cf5ddfb5b7f', 'John Anderson', 'andersonj@gmail.com', 'staff'),
(8, 'Setya', 'da8e41497fe9be2f07a72361d9d09a6a', 'Setyawan Hernanded', 'hernandes123@gmail.com', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
