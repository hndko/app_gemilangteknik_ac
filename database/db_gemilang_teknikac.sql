-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2024 at 11:01 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gemilang_teknikac`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `artikel_id` int NOT NULL,
  `user_id` int NOT NULL DEFAULT '1',
  `slug` varchar(150) COLLATE utf8mb4_swedish_ci NOT NULL,
  `description` int NOT NULL,
  `is_active` enum('1','0') COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT '1',
  `sampul` varchar(155) COLLATE utf8mb4_swedish_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokumentasi`
--

CREATE TABLE `tb_dokumentasi` (
  `dokumentasi_id` int NOT NULL,
  `sampul` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `deskripsi` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `is_active` enum('0','1') COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `tb_dokumentasi`
--

INSERT INTO `tb_dokumentasi` (`dokumentasi_id`, `sampul`, `deskripsi`, `is_active`, `created_at`) VALUES
(1, '3eb20fda78a7f280a1bf5bddf02c1da6.png', 'Penanganan Masalah AC Tidak Dingin', '1', '2024-01-21 00:10:08'),
(2, 'e5a2ffb4a3ce94db0971652aca9dc1d4.png', 'Layanan Rutin Perawatan AC', '1', '2024-01-21 00:10:27'),
(3, '7436cc8a19bc05b8df5d65b710e01322.png', 'Penambahan Freon Profesional', '1', '2024-01-21 00:10:37'),
(4, '0b1956e6e18c4ef445fb7a1192ca903d.png', 'Penanganan Perbaikan AC Netes Air', '1', '2024-01-21 00:10:45'),
(5, '72b14f70d697d949bce6531b6af27061.png', 'Pengecekan dan Pemeliharaan Freon', '1', '2024-01-21 00:10:54'),
(6, 'c0d0292eb3f031f03fa66a75e50a9a86.png', 'Penanganan Perbaikan Freon Bocor', '1', '2024-01-21 00:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klien`
--

CREATE TABLE `tb_klien` (
  `klien_id` int NOT NULL,
  `sampul` varchar(155) COLLATE utf8mb4_swedish_ci NOT NULL,
  `judul` varchar(35) COLLATE utf8mb4_swedish_ci NOT NULL,
  `is_active` enum('1','0') COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `tb_klien`
--

INSERT INTO `tb_klien` (`klien_id`, `sampul`, `judul`, `is_active`, `created_at`) VALUES
(1, '38ba843529ff93bda0714e2750f35c49.png', 'Mixue', '1', '2024-01-21 00:36:00'),
(2, '5ba89cf3ae4f16145f38a4affb48dec2.png', 'Bahtera', '1', '2024-01-21 00:36:47'),
(3, 'fbb6229d42f95c83c8af0cb7063b4bf3.png', 'Tirto.id', '1', '2024-01-21 00:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `layanan_id` int NOT NULL,
  `judul` varchar(25) COLLATE utf8mb4_swedish_ci NOT NULL,
  `deskripsi` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `is_active` enum('1','0') COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`layanan_id`, `judul`, `deskripsi`, `is_active`) VALUES
(1, 'Pemasangan Unit AC', 'Dukungan profesional untuk memasang unit AC baru dengan presisi dan efisiensi.', '1'),
(2, 'Maintenance AC', 'Perawatan rutin yang teliti untuk memastikan AC Anda berfungsi dengan optimal.', '1'),
(3, 'Service Berkala', 'Layanan berkala untuk mencegah masalah dan menjaga performa AC dalam kondisi terbaik.', '1'),
(4, 'Cuci AC', 'Pembersihan menyeluruh untuk menjaga kebersihan dan kinerja maksimal AC Anda.', '1'),
(5, 'Penambahan Freon', 'Solusi efisien untuk menjaga kesejukan dengan menambahkan freon sesuai kebutuhan.', '1'),
(6, 'Instalasi AC', 'Profesionalisme dalam setiap langkah untuk memastikan instalasi AC yang tepat dan handal.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int NOT NULL,
  `nama_lengkap` varchar(155) COLLATE utf8mb4_swedish_ci NOT NULL,
  `email` varchar(155) COLLATE utf8mb4_swedish_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` varchar(155) COLLATE utf8mb4_swedish_ci NOT NULL,
  `sampul` varchar(155) COLLATE utf8mb4_swedish_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `is_active` enum('0','1') COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `nama_lengkap`, `email`, `username`, `password`, `sampul`, `role`, `is_active`) VALUES
(1, 'Administrator', 'administrator@gmail.com', 'admin1234', '$2y$10$U.pshYe2PRbeDS/HIFKHaOkA840N/vh71MHAZ7huevaqF6Ge91OSe', '78b7275375847b74084db99cfb705c17.png', 'Superadmin', '1'),
(2, 'Karya Gemilang', 'admin01@gmail.com', 'admin01', '$2y$10$i6o8a7bxcuMRmbln0V/fs.H3kf9e0LNjCMQUYAYDG4XpMZaB79ciy', '63e64433e1c79d4c264b9709ebffbf80.jpg', 'Admin Content', '1'),
(3, 'Admin Gemilang', 'admin.gemilang@gmail.com', 'admin.gemilang', '$2y$10$OYdsY81JXIiyw5q9wrkYxOozqRv04ZbMnV9hl8CSBnhPLKTyEsmkC', 'a6803c2a619c8e49469411fd25c69161.png', 'Admin', '1'),
(4, 'Hello World', 'helloworld@gmail.com', 'hello.world', '$2y$10$aCi9QqPT2tBfQtnfCyiBjevvcCiJo87rMFRtLgMt7E1ewYSC2VXEm', '0b02ea310c54f7ce68f5b20cadd3a75b.png', 'Admin Content', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `tb_dokumentasi`
--
ALTER TABLE `tb_dokumentasi`
  ADD PRIMARY KEY (`dokumentasi_id`);

--
-- Indexes for table `tb_klien`
--
ALTER TABLE `tb_klien`
  ADD PRIMARY KEY (`klien_id`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`layanan_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `artikel_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_dokumentasi`
--
ALTER TABLE `tb_dokumentasi`
  MODIFY `dokumentasi_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_klien`
--
ALTER TABLE `tb_klien`
  MODIFY `klien_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `layanan_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
