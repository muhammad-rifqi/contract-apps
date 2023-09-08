-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 10:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `econtract_apps`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_sppbj`
--

CREATE TABLE `form_sppbj` (
  `id` int(11) NOT NULL,
  `kode_tender` varchar(255) NOT NULL,
  `no_sppbj` varchar(255) NOT NULL,
  `lampiran_sppbj` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penyedia`
--

CREATE TABLE `penyedia` (
  `id` int(11) NOT NULL,
  `kode_tender` varchar(100) NOT NULL,
  `pemenang` varchar(100) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `harga_final` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyedia`
--

INSERT INTO `penyedia` (`id`, `kode_tender`, `pemenang`, `npwp`, `email`, `harga_final`) VALUES
(1, '1', 'Rekanan 11', '11.11.1111.111', 'rekanan@gmail.com', 370000),
(2, '1', 'Rekanan 11', '11.11.1111.111', 'rekanan@gmail.com', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `ppk`
--

CREATE TABLE `ppk` (
  `id` int(11) NOT NULL,
  `kode_tender` varchar(255) NOT NULL,
  `nama_ppk` varchar(100) NOT NULL,
  `nip_ppk` varchar(100) NOT NULL,
  `jabatan_ppk` varchar(100) NOT NULL,
  `satuan_kerja` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rup`
--

CREATE TABLE `rup` (
  `id` int(11) NOT NULL,
  `kode_rup` varchar(100) NOT NULL,
  `kode_tender` varchar(100) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `sumber_dana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rup`
--

INSERT INTO `rup` (`id`, `kode_rup`, `kode_tender`, `nama_paket`, `sumber_dana`) VALUES
(1, '34785683745', '1', 'Renovasi Aplikasi Security', 'APBN');

-- --------------------------------------------------------

--
-- Table structure for table `sppbj`
--

CREATE TABLE `sppbj` (
  `id` int(11) NOT NULL,
  `kode_tender` varchar(100) NOT NULL,
  `nama_tender` varchar(100) NOT NULL,
  `rup` text NOT NULL,
  `harga_penawaran` int(11) NOT NULL,
  `no_sppbj` varchar(100) NOT NULL,
  `lampiran_sppbj` varchar(255) NOT NULL,
  `kota_sppbj` text NOT NULL,
  `nama_ppk` varchar(100) NOT NULL,
  `nip_ppk` varchar(100) NOT NULL,
  `jabatan_ppk` varchar(100) NOT NULL,
  `nama_satuan_kerja` varchar(100) NOT NULL,
  `alamat_satuan_kerja` varchar(100) NOT NULL,
  `penyedia` text NOT NULL,
  `tembusan` varchar(255) NOT NULL,
  `dokumen_berita_acara` varchar(255) NOT NULL,
  `dokumen_cetak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `id` int(11) NOT NULL,
  `kode_tender` varchar(255) NOT NULL,
  `nama_tender` varchar(255) NOT NULL,
  `tahap_tender` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`id`, `kode_tender`, `nama_tender`, `tahap_tender`, `created_at`) VALUES
(1, '120999', 'Tender 1', 'Baru Sampe Flow Chart', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `access_level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_sppbj`
--
ALTER TABLE `form_sppbj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyedia`
--
ALTER TABLE `penyedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppk`
--
ALTER TABLE `ppk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rup`
--
ALTER TABLE `rup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sppbj`
--
ALTER TABLE `sppbj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_sppbj`
--
ALTER TABLE `form_sppbj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penyedia`
--
ALTER TABLE `penyedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ppk`
--
ALTER TABLE `ppk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rup`
--
ALTER TABLE `rup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sppbj`
--
ALTER TABLE `sppbj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
