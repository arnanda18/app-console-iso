-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2022 at 05:29 PM
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
  `id_emp` int(11) DEFAULT NULL,
  `status_aset` enum('baik','rusak','sedang perbaikan','dijual') DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asets`
--

INSERT INTO `asets` (`id_aset`, `name_aset`, `no_aset`, `id_category`, `id_emp`, `status_aset`, `location`, `keterangan`) VALUES
(1, 'Macbook Pro 2017', '78678', 5, 2, 'baik', 'On Personal WFH', 'RAM 8 GB, SSD 256 GB, i5'),
(4, 'Handphone', '98237842', 2, 1, 'baik', 'Dirumah', 'Samsung'),
(5, 'PC  Developer', '232323', 5, 1, 'dijual', 'Kantor Jogja', 'Ram 16/ i7 / SSD 250'),
(6, 'Macbook Air 2015', '657432', 5, 3, 'baik', 'Rumah Pemilik', 'Ram 16 GB/ i5 / 250 SSD'),
(7, 'Server Google Cloud', '542427', 6, 3, 'baik', 'On CLoud', 'Google Cloud');

-- --------------------------------------------------------

--
-- Table structure for table `category_aset`
--

CREATE TABLE `category_aset` (
  `id_category` int(5) NOT NULL,
  `name_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_aset`
--

INSERT INTO `category_aset` (`id_category`, `name_category`) VALUES
(1, 'Equipment'),
(2, 'Office'),
(5, 'Computer'),
(6, 'Infrastructure'),
(7, 'Laptop'),
(8, 'Document');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_emp` int(11) NOT NULL,
  `name_emp` varchar(50) DEFAULT NULL,
  `email_emp` varchar(100) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `divisi` varchar(100) DEFAULT NULL,
  `status` enum('fulltime','part time','internship','external') DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_emp`, `name_emp`, `email_emp`, `position`, `divisi`, `status`, `phone`) VALUES
(1, 'Johansen Andersen', 'johan@zafra.com', 'Web Engineer', 'Enginer', 'fulltime', '987482798429'),
(2, 'Arnanda N', 'arnanda@zafra.com', 'CEO', 'Lead', 'fulltime', '098234213231'),
(3, 'Smith', 'smith@zafra.com', 'Product Manager', 'Product', 'part time', '3274892792'),
(4, 'Lionel James', 'james@zafra.com', 'Head of Marketing', 'Marketing', 'fulltime', '057213131123'),
(6, 'Demo Presention', 'demo@zafra.com', 'DevOps', 'Engineer', 'external', '9834938494989');

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
  `id_role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `full_name`, `email`, `id_role`) VALUES
(1, 'arnanda', 'c513972f3c3431dc85d2cf4ba0784bef', 'Arnanda Nuryasa', 'arnanda@gmail.com', 1),
(4, 'andy', 'baa146ae53dbaf318aa8b4f651103b62', 'Andy Nurhandika', 'andi.nurhandika@gmail.com', 2),
(6, 'disa_p', '5259ee4a034fdeddd1b65be92debe731', 'Disa Putri', 'putri@gmail.com', 3),
(10, 'coba', 'c3ec0f7b054e729c5a716c8125839829', 'coba aja', 'coba@gmail.com', 3),
(11, 'prensetation', 'fe01ce2a7fbac8fafaed7c982a04e229', 'Demo Presentation', 'demo@zafra.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asets`
--
ALTER TABLE `asets`
  ADD PRIMARY KEY (`id_aset`),
  ADD KEY `Fk Category Aset` (`id_category`),
  ADD KEY `Fk Employee` (`id_emp`);

--
-- Indexes for table `category_aset`
--
ALTER TABLE `category_aset`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indexes for table `role_permision`
--
ALTER TABLE `role_permision`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `Fk Role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asets`
--
ALTER TABLE `asets`
  MODIFY `id_aset` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_aset`
--
ALTER TABLE `category_aset`
  MODIFY `id_category` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_permision`
--
ALTER TABLE `role_permision`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asets`
--
ALTER TABLE `asets`
  ADD CONSTRAINT `Fk Category Aset` FOREIGN KEY (`id_category`) REFERENCES `category_aset` (`id_category`),
  ADD CONSTRAINT `Fk Employee` FOREIGN KEY (`id_emp`) REFERENCES `employee` (`id_emp`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `Fk Role` FOREIGN KEY (`id_role`) REFERENCES `role_permision` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
