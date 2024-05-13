-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2024 at 06:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservasi_pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Sandi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemandu wisata`
--

CREATE TABLE `tb_pemandu wisata` (
  `id_pemandu wisata` int NOT NULL,
  `id_pelanggan` int NOT NULL,
  `Tiekt_Masuk` int NOT NULL,
  `Fasilitas` int NOT NULL,
  `Wahana` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_perusahaan wisataa`
--

CREATE TABLE `tb_perusahaan wisataa` (
  `id_perusahaan wisataa` int NOT NULL,
  `id_pelanggan` int NOT NULL,
  `id_pemandu wisata` int NOT NULL,
  `Paket_Wisata` varchar(20) NOT NULL,
  `Destinasi_Wisata` varchar(50) NOT NULL,
  `Data_Pembayaran` varchar(15) NOT NULL,
  `Ulasan_Wisatawan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_pemandu wisata`
--
ALTER TABLE `tb_pemandu wisata`
  ADD PRIMARY KEY (`id_pemandu wisata`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tb_perusahaan wisataa`
--
ALTER TABLE `tb_perusahaan wisataa`
  ADD PRIMARY KEY (`id_perusahaan wisataa`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_pemandu wisata` (`id_pemandu wisata`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pemandu wisata`
--
ALTER TABLE `tb_pemandu wisata`
  ADD CONSTRAINT `tb_pemandu wisata_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_perusahaan wisataa`
--
ALTER TABLE `tb_perusahaan wisataa`
  ADD CONSTRAINT `tb_perusahaan wisataa_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_perusahaan wisataa_ibfk_2` FOREIGN KEY (`id_pemandu wisata`) REFERENCES `tb_pemandu wisata` (`id_pemandu wisata`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
