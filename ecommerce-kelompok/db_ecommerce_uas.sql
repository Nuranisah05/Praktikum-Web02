-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 05:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Sport'),
(2, 'Work'),
(3, 'Casual'),
(4, 'Heels');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pemesan` varchar(45) NOT NULL,
  `alamat_pemesan` varchar(45) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(1, '2023-06-30', 'Felix Lee', 'Jl. Lavender 8 No. 15', '087815092000', 'leefelix@gmail.com', 1, 'Pesan Sepatu Lifestyle Alphaboost V1', 1),
(2, '2023-06-30', 'Zhang Hao', 'Jl. Mawar 9 No. 25', '087825072000', 'haozhang@gmail.com', 1, 'Pesan Sepatu Chunky Canvas', 3),
(3, '2023-06-30', 'Yeji Hwang', 'Jl. Daisy 5 No. 26', '087826052000', 'hwangyeji@gmail.com', 5, 'Pesan Sepatu Crystal Flower PVC', 4),
(4, '2023-06-30', 'Chaewon Kim', 'Jl. Akasia 5 No. 1', '087801082000', 'kimchaewon@gmail.com', 5, 'Pesan Retro Platform', 3),
(5, '2023-06-30', 'Heejin Jeon', 'Jl. Kamboja 12 No. 19', '087819102000', 'jeonheejin@gmail.com', 1, 'Pesan Sepatu Malone Maureen', 4);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_jual`, `stok`, `kategori_id`) VALUES
(1, 'S01', 'Sepatu Questar', 1300000, 10, 1),
(2, 'S02', 'Sepatu Ultraboost Light', 3300000, 10, 1),
(3, 'S03', 'Sepatu Forum 84 Low Classic', 1800000, 10, 1),
(4, 'S04', 'Sepatu Supernova 2.0', 1900000, 10, 1),
(5, 'S05', 'Sepatu Solarboost 5 ', 2600000, 10, 1),
(6, 'S06', 'Sepatu Lifestyle Alphaboost V1', 2100000, 10, 1),
(7, 'S07', 'Sepatu Pureboost 22', 2000000, 10, 1),
(8, 'S08', 'Sepatu Duramo SL 2.0', 900000, 10, 1),
(9, 'W01', 'Sepatu Irving Banker', 2500000, 10, 2),
(10, 'W02', 'Sepatu Mason Lace Up', 2600000, 10, 2),
(11, 'W03', 'Sepatu Terro Cisco Zip Boots', 2700000, 10, 2),
(12, 'W04', 'Sepatu Kovic Vatro Lace Up', 1500000, 10, 2),
(13, 'W05', 'Sepatu Kovic Loafer', 1300000, 10, 2),
(14, 'W06', 'Sepatu Jude Oxford', 2900000, 10, 2),
(15, 'W07', 'Sepatu Detroit PT Oxford', 2800000, 10, 2),
(16, 'W08', 'Sepatu Monaco Li', 1000000, 10, 2),
(17, 'C01', 'Sepatu Havana White', 2440000, 10, 3),
(18, 'C02', 'Sepatu Havana Blue', 2440000, 10, 3),
(19, 'C03', 'Sepatu SK8 Classic', 3500000, 10, 3),
(20, 'C04', 'Sepatu Low Lady Flat', 3250000, 10, 3),
(21, 'C05', 'Sepatu Chunky Platform', 3500000, 10, 3),
(22, 'C06', 'Sepatu Chunky Canvas', 3600000, 10, 3),
(23, 'C07', 'Sepatu Classic Y2K ', 3820000, 10, 3),
(24, 'C08', 'Sepatu Retro Platform', 3000000, 10, 3),
(25, 'H01', 'Sepatu Crystal Flower PVC', 5120000, 10, 4),
(26, 'H02', 'Sepatu Roger Vivier Belle', 4200000, 10, 4),
(27, 'H03', 'Sepatu Belluci Lace', 4800000, 10, 4),
(28, 'H04', 'Sepatu Malone Maureen', 4600000, 10, 4),
(29, 'H05', 'Sepatu Forli 316', 1000000, 10, 4),
(30, 'H06', 'Sepatu Avellino 343', 1000000, 10, 4),
(31, 'H07', 'Sepatu Barrona Strap', 1500000, 10, 4),
(32, 'H08', 'Sepatu Bossis ', 1500000, 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` enum('admin','manager','pelanggan') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'rin', 'rinn@gmail.com', NULL, '$2y$10$dfQ/pkCDTfPYPMsWzhSo8.Qr9xB328dR8jGGCl/E3iCwcZk5EbYBu', NULL, 'admin', '2023-06-30 03:33:54', '2023-06-30 03:33:54'),
(2, 'tane', 'rin@gmail.com', NULL, '$2y$10$ojPlEVjij4Hwo1dgqgN2HeyrOPkOFsM1EgwK9YVioSb/OMlmsI9Tm', NULL, 'admin', '2023-07-01 00:25:13', '2023-07-01 00:25:13'),
(3, 'leo', 'leo@gmail.com', NULL, '$2y$10$1Adg6SLNKKa3kwJfcKzFj.ifcZdBmjph1VSUDrYovk0d3qbBxO6Pe', NULL, 'pelanggan', '2023-07-08 23:04:00', '2023-07-08 23:04:00'),
(4, 'rintan', 'tane@gmail.com', NULL, '$2y$10$vrwOQDb9onMaoXWGxCpSeOARRlvcaAV23wOaboSa/MCycoz7RgdKm', NULL, 'manager', '2023-07-11 01:50:13', '2023-07-11 01:50:13'),
(5, 'gg', 'g@gmail.com', NULL, '$2y$10$lxHnxjXnF09JLvYx8.hnQOB9dYyBLfvUxTMYmvnx8Err34z2nHLR6', NULL, 'admin', '2023-07-11 05:50:34', '2023-07-11 05:50:34'),
(6, 'rintan', 'rintan@gmail.com', NULL, '$2y$10$nzGw3xP/U3oSAaetLoGSo.OaOMdpuhY1hw6uAd/7XUats.DTLbJxO', NULL, 'admin', '2023-07-11 06:38:48', '2023-07-11 06:38:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
