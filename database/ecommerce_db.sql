-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 02:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kat_id` tinyint(3) NOT NULL,
  `kat_nama` varchar(50) DEFAULT NULL,
  `kat_keterangan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`kat_id`, `kat_nama`, `kat_keterangan`, `created_at`, `updated_at`) VALUES
(34, 'Mobil', 'avanza1', '2024-03-22 07:13:12', '2024-03-22 08:13:12'),
(35, 'Sepeda Motor', 'Honda CBR 250', '2024-03-22 06:58:58', '2024-03-22 13:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `ker_id` int(11) NOT NULL,
  `ker_id_user` int(11) DEFAULT NULL,
  `ker_id_produk` int(11) DEFAULT NULL,
  `ker_harga` double DEFAULT NULL,
  `ker_jml` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`ker_id`, `ker_id_user`, `ker_id_produk`, `ker_harga`, `ker_jml`) VALUES
(48, 1, 1, 50000, 11),
(49, 1, 1, 50000, 11),
(50, 1, 37, 50000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(11) NOT NULL,
  `order_id_user` int(11) DEFAULT NULL,
  `order_tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_kode` varchar(50) DEFAULT NULL,
  `order_ttl` double DEFAULT NULL,
  `order_ongkir` int(11) DEFAULT NULL,
  `order_byr_deadline` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `order_id_user`, `order_tgl`, `order_kode`, `order_ttl`, `order_ongkir`, `order_byr_deadline`, `updated_at`) VALUES
(1, 1, '2024-03-22 06:24:31', '11ko', 11, 11, '2024-03-23 13:24:31', '2024-03-22 13:24:31'),
(24, 1, '0000-00-00 00:00:00', '90', 11, 1, '2024-03-22 08:29:15', '2024-03-22 08:29:15'),
(25, 1, '0000-00-00 00:00:00', '90', 11, 1, '2024-03-22 08:31:35', '2024-03-22 08:31:35'),
(26, 1, '0000-00-00 00:00:00', '90', 11, 1, '2024-03-22 08:57:30', '2024-03-22 08:57:30'),
(30, 1, '0000-00-00 00:00:00', '1', 345, 2024, '2024-03-22 14:03:27', '2024-03-22 14:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `detail_id_order` int(11) NOT NULL,
  `detail_id_produk` int(11) NOT NULL,
  `detail_harga` double DEFAULT NULL,
  `detail_jml` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_order_detail`
--

INSERT INTO `tb_order_detail` (`detail_id_order`, `detail_id_produk`, `detail_harga`, `detail_jml`) VALUES
(1, 1, 10000000, 1000),
(30, 37, 50000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `produk_id` int(11) NOT NULL,
  `produk_id_kat` tinyint(3) DEFAULT NULL,
  `produk_id_user` int(11) DEFAULT NULL,
  `produk_kode` varchar(50) DEFAULT NULL,
  `produk_nama` varchar(256) DEFAULT NULL,
  `produk_hrg` double DEFAULT NULL,
  `produk_keterangan` text DEFAULT NULL,
  `produk_stock` int(11) DEFAULT NULL,
  `produk_photo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`produk_id`, `produk_id_kat`, `produk_id_user`, `produk_kode`, `produk_nama`, `produk_hrg`, `produk_keterangan`, `produk_stock`, `produk_photo`, `created_at`, `updated_at`) VALUES
(1, 34, 1, '11', 'celana', 1000000, 'mobil avanza', 1000, 'mana ada?', '2024-03-22 13:01:49', '2024-03-22 14:01:49'),
(36, NULL, NULL, '11', 'bmw', 20000, 'meh0ng', 100, NULL, '2024-03-22 09:09:33', '2024-03-22 10:09:33'),
(37, NULL, NULL, '35', 'Sepeda Motor', 50000000, 'Sepeda Motor Merk Honda versi CBR 250cc', 33, NULL, '2024-03-22 07:01:27', '2024-03-22 14:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_nama` text DEFAULT NULL,
  `user_alamat` text DEFAULT NULL,
  `user_hp` varchar(25) DEFAULT NULL,
  `user_usia` int(2) DEFAULT NULL,
  `user_role` tinyint(2) DEFAULT NULL,
  `user_aktif` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `user_email`, `user_password`, `user_nama`, `user_alamat`, `user_hp`, `user_usia`, `user_role`, `user_aktif`, `created_at`, `updated_at`) VALUES
(1, 'messi@gmail.com', '12345', 'Lionel Messi', 'Argentina', '085706435755', 35, 1, 1, '2024-03-22 06:20:37', '2024-03-22 13:20:37'),
(34, 'muhammadzamzam000@gmail.com', 'login', 'zacky', 'JL. SUROMULANG BARAT 1/03', '085706435855', 19, 11, 2, '2024-03-22 06:58:12', '2024-03-22 13:58:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kat_id`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`ker_id`),
  ADD KEY `ker_id_user` (`ker_id_user`),
  ADD KEY `ker_id_produk` (`ker_id_produk`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_order_id_user` (`order_id_user`);

--
-- Indexes for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD PRIMARY KEY (`detail_id_order`,`detail_id_produk`),
  ADD KEY `detail_id_produk` (`detail_id_produk`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`produk_id`),
  ADD KEY `produk_id_kat` (`produk_id_kat`),
  ADD KEY `produk_id_user` (`produk_id_user`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kat_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `ker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD CONSTRAINT `tb_keranjang_ibfk_1` FOREIGN KEY (`ker_id_user`) REFERENCES `tb_users` (`user_id`),
  ADD CONSTRAINT `tb_keranjang_ibfk_2` FOREIGN KEY (`ker_id_produk`) REFERENCES `tb_produk` (`produk_id`);

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `fk_order_id_user` FOREIGN KEY (`order_id_user`) REFERENCES `tb_users` (`user_id`);

--
-- Constraints for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`detail_id_order`) REFERENCES `tb_order` (`order_id`),
  ADD CONSTRAINT `tb_order_detail_ibfk_2` FOREIGN KEY (`detail_id_produk`) REFERENCES `tb_produk` (`produk_id`);

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`produk_id_kat`) REFERENCES `tb_kategori` (`kat_id`),
  ADD CONSTRAINT `tb_produk_ibfk_2` FOREIGN KEY (`produk_id_user`) REFERENCES `tb_users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
