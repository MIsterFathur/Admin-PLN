-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 11:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpln`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `gol_id` tinyint(3) NOT NULL,
  `gol_kode` varchar(10) NOT NULL,
  `gol_nama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_golongan`
--

INSERT INTO `tb_golongan` (`gol_id`, `gol_kode`, `gol_nama`, `created_at`, `updated_at`) VALUES
(4, 'DM01', 'Golongan Perumahan Murah', '2023-11-29 09:01:37', '2023-11-29 16:01:37'),
(5, 'BM02', 'Golongan Rumah Menengah', '2023-11-29 09:02:01', '0000-00-00 00:00:00'),
(6, 'SM03', 'Golongan Rumah Mewah', '2023-11-29 09:02:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `pel_id` int(11) NOT NULL,
  `gol_id` tinyint(3) NOT NULL,
  `pel_no` varchar(20) NOT NULL,
  `pel_nama` varchar(50) NOT NULL,
  `pel_alamat` text NOT NULL,
  `pel_hp` varchar(20) NOT NULL,
  `pel_ktp` varchar(50) NOT NULL,
  `pel_seri` varchar(50) NOT NULL,
  `pel_meteran` int(11) NOT NULL,
  `pel_aktif` enum('Y','N') NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`pel_id`, `gol_id`, `pel_no`, `pel_nama`, `pel_alamat`, `pel_hp`, `pel_ktp`, `pel_seri`, `pel_meteran`, `pel_aktif`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 5, '001', 'Sir. Fathur', 'Jl. Seroja 1', '0813976101', '87483929374', '1819 5299 1696 8028 6125 ', 0, 'Y', 5, '2023-11-29 09:06:09', '0000-00-00 00:00:00'),
(4, 4, '002', 'Fathur Rahman', 'Jl. Mandailana', '0972837472', '8373636361001', '1819 6366 8193 8028 6125 ', 0, 'Y', 6, '2023-11-29 09:11:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_alamat` text NOT NULL,
  `user_hp` varchar(25) NOT NULL,
  `user_pos` varchar(5) NOT NULL,
  `user_role` tinyint(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `user_email`, `user_password`, `user_nama`, `user_alamat`, `user_hp`, `user_pos`, `user_role`, `created_at`, `updated_at`) VALUES
(5, 'admin@gmail.com', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'Fathur', 'Medan', '0983788888', '20124', 1, '2023-11-29 09:03:30', '2023-11-29 16:03:30'),
(6, 'admin2@gmail.com', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'Rahman', 'Medan', '0938383723', '2014', 1, '2023-11-29 09:03:37', '2023-11-29 16:03:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`gol_id`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`pel_id`),
  ADD KEY `fk_pelanggan_golongan` (`gol_id`),
  ADD KEY `fk_pelanggan_users` (`user_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `gol_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `pel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `fk_pelanggan_golongan` FOREIGN KEY (`gol_id`) REFERENCES `tb_golongan` (`gol_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pelanggan_users` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
