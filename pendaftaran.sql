-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 03:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nilai_un` double DEFAULT NULL,
  `nilai_us` double DEFAULT NULL,
  `status` int(1) NOT NULL,
  `pendaftar_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nilai_un`, `nilai_us`, `status`, `pendaftar_id`) VALUES
(18, 80, 80, 1, 14),
(21, 87, 82, 1, 17),
(22, 88, 83, 0, 18),
(23, 90, 67, 0, 19),
(24, 78, 55, 2, 20),
(25, 99, 97, 0, 21),
(26, 89, 98, 0, 22),
(27, 93, 91, 0, 23);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tmpt_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(45) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `alamat`, `email`, `telepon`, `foto`, `users_id`) VALUES
(14, 'Lukman Hudzaifah', 'Perumahan Bumi Asri', '2020-04-06', 'L', 'Islam', 'kotabumi', 'lukman@gmail.com', '089662043518', '', 42),
(17, 'Gian Nurwana', 'tangerang', '2020-04-05', 'L', 'islam', 'Kp. Pisangan', 'gian@gmail.com', '089662043518', '', 45),
(18, 'M. Fajri Dwi Kurniawan', 'Jawa Barat', '2020-04-12', 'L', 'islam', 'kp. kotabumi', 'fajri@gmail.com', '089662043519', 'Fajri_5e9911ff33a2a.jpg', 46),
(19, 'aldi', 'tangerang', '2020-04-12', 'L', 'Islam', 'kp nanas', 'aldi@gmail.com', '089662043519', '', 47),
(20, 'surya', 'Jawa Barat', '2020-04-06', 'L', 'Islam', 'kp pisang', 'surya@gmail.com', '089662043519', '', 48),
(21, 'Muhamad Hendri', 'Kedaung', '2020-04-05', 'L', 'islam', 'Kp. Rawa Indah', 'hendri@gmail.com', '089662043519', 'Muhamad Hendri_5e9c07635dbcb.jpg', 49),
(22, 'Wawan Kurniawan', 'Tangerang', '2020-01-17', 'L', 'islam', 'Kp. Kedaung Baran', 'wawan@gmail.com', '089662043519', 'Wawan Kurniawan_5e9c07c724893.jpg', 50),
(23, 'M. Jalaludin Sayuti', 'Tangerang', '2020-01-23', 'L', 'islam', 'Kp. Pakuhaji', 'jalal@gmail.com', '089662043519', 'M. Jalaludin Sayuti_5e9c0837ae6df.jpg', 51);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(38, 'Administrator', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(42, 'Lukman Hudzaifah', 'lukman@gmail.com', '202cb962ac59075b964b07152d234b70', 'siswa'),
(45, 'Gian Nurwana', 'gian@gmail.com', '202cb962ac59075b964b07152d234b70', 'siswa'),
(46, 'Fajri', 'fajri@gmail.com', '202cb962ac59075b964b07152d234b70', 'siswa'),
(47, 'aldi', 'aldi@gmail.com', '202cb962ac59075b964b07152d234b70', 'siswa'),
(48, 'surya', 'surya@gmail.com', '202cb962ac59075b964b07152d234b70', 'siswa'),
(49, 'Muhamad Hendri', 'hendri@gmail.com', '202cb962ac59075b964b07152d234b70', 'siswa'),
(50, 'Wawan Kurniawan', 'wawan@gmail.com', '202cb962ac59075b964b07152d234b70', 'siswa'),
(51, 'M. Jalaludin Sayuti', 'jalal@gmail.com', '202cb962ac59075b964b07152d234b70', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nilai_pendaftar1_idx` (`pendaftar_id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_pendaftar_users_idx` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_nilai_pendaftar1` FOREIGN KEY (`pendaftar_id`) REFERENCES `pendaftar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `fk_pendaftar_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
