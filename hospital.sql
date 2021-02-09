-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 07:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_06_013131_create_pasien_table', 1),
(5, '2021_01_06_013558_create_poli_table', 1),
(7, '2021_01_08_133253_create_obat_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_obat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok_obat` int(50) DEFAULT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `foto_obat`, `jenis_obat`, `stok_obat`, `tgl_kadaluarsa`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Decolsin', 'decolsin.jpg-1610099787.jpg', 'Sirup', 12, '2023-10-03', 'Rp 50.000,00', '2021-01-08 08:23:23', '2021-01-08 09:56:27'),
(2, 'Antasida Doen', 'antasida doen.jpg-1610099922.jpg', 'Serbuk', 7, '2023-03-14', 'Rp 20.000,00', '2021-01-08 08:24:15', '2021-01-08 09:58:42'),
(3, 'Alpentin', 'alpentin.jpg-1610099933.jpg', 'Kapsul', 20, '2021-01-31', 'Rp 90.000,00', '2021-01-08 08:30:36', '2021-01-08 09:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `nik`, `alamat`, `jk`, `tgl_lahir`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'Handan Hanim', '3103111271', 'Turkey', 'Wanita', '1994-10-12', '555 13245', '2021-01-06 00:40:13', '2021-01-08 04:40:56'),
(3, 'Herdiyanto Aliem', '3103119987', 'Kudus', 'Pria', '1979-05-31', '555 65123', '2021-01-07 01:18:39', '2021-01-08 04:40:28'),
(5, 'Miran Aslanbey', '3103119987', 'Istanbul', 'Pria', '1951-05-15', '555 28653', '2021-01-08 04:51:43', '2021-01-08 04:51:56'),
(6, 'Azat Sadogül', '3103245198', 'MIdyat', 'Pria', '2000-01-11', '555 19832', '2021-01-10 20:31:53', '2021-01-10 20:32:27'),
(7, 'Ayşem Adskhan', '3103113149', 'Karsh', 'Wanita', '2010-09-20', '555 23875', '2021-01-10 20:35:29', '2021-01-10 20:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_periksa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT current_timestamp(),
  `id_pasien` int(11) DEFAULT NULL,
  `keluhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_poli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan_medis_poli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id`, `tgl_periksa`, `id_pasien`, `keluhan`, `jenis_poli`, `status`, `penyakit`, `catatan_medis_poli`, `created_at`, `updated_at`) VALUES
(6, '2021-01-11 10:37:59', 1, 'gigi nya sakit', 'Poli Gigi n Mulut', 'Rawat Jalan', 'Gigi bolong', 'Jangan banyak makan yg manis', '2021-01-10 20:37:59', '2021-01-10 20:37:59'),
(7, '2021-01-11 10:41:19', 3, 'telinga kemasukan air', 'Poli THT', 'Rawat Inap', 'Bindeng parah', 'Sembuhkan pilek dulu', '2021-01-10 20:41:19', '2021-01-10 20:41:19'),
(8, '2021-01-11 10:42:40', 5, 'suka ketawa sendiri', 'Poli Jiwa', 'Rawat Inap', 'Sakit jiwa', 'Mendekat ke Tuhan', '2021-01-10 20:42:40', '2021-01-10 20:42:40'),
(9, '2021-01-11 10:43:38', 6, 'berak terus keluar darah', 'Poli Umum', 'Rawat Inap', 'Disentri', 'Jangan makan sembarangan', '2021-01-10 20:43:38', '2021-01-10 20:43:38'),
(10, '2021-01-11 10:44:51', 7, 'sakit di bagian dada kiri', 'Poli Jantung', 'Rawat Inap', 'Sakit jantung', 'Operasi', '2021-01-10 20:44:51', '2021-01-10 20:44:51'),
(11, '2021-01-11 11:04:46', 3, 'batuk', 'Poli Umum', 'Rawat Jalan', 'Batuk berdahak', 'Jangan makan yg berminyak', '2021-01-10 21:04:46', '2021-01-10 21:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inap`
--

CREATE TABLE `rawat_inap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang_rawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan_medis_rawat_inap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rawat_inap`
--

INSERT INTO `rawat_inap` (`id`, `id_pasien`, `tgl_masuk`, `tgl_keluar`, `ruang_rawat`, `catatan_medis_rawat_inap`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-01-13', '2021-01-13', 'vvip', '--', '2021-01-12 03:57:32', '2021-01-12 03:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_verified_at` datetime DEFAULT NULL,
  `account_type` int(11) DEFAULT NULL,
  `account_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `account_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `pin`, `phone`, `phone_verified_at`, `account_type`, `account_role`, `photo`, `last_login`, `account_status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14003, 'admin', 'admin@cyberolympus.com', NULL, '$2y$10$0jKklluEuw24NbRirntueeIwtU5AcD/iO1N8heEZSkxH0ltmjC8F2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL),
(14004, 'member', 'member@cyberolympus.com', NULL, '$2y$10$Rw2Lhkr6I7ezP9rK1Uxk..QHhFtvXiqhN2Ygks6Bmn5zxhro3zHu2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL),
(14005, 'Customer Service', 'cs@rscyber.com', NULL, '$2y$10$6C4NH23UxoxC21A1CW2nUeMZEeyDB8mQFF/WqSEacdE4Bck8K7ksO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
