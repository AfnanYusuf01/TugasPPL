-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 01:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrians`
--

CREATE TABLE `antrians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `poli` varchar(255) NOT NULL,
  `penjamin` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `no_urut` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `bpjs` varchar(255) DEFAULT NULL,
  `surat_rujukan` varchar(255) DEFAULT NULL,
  `id_pasien` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `antrians`
--

INSERT INTO `antrians` (`id`, `nama`, `email`, `poli`, `penjamin`, `created_at`, `updated_at`, `token`, `no_urut`, `status`, `bpjs`, `surat_rujukan`, `id_pasien`) VALUES
(1, 'Afnan Yusuf', 'afnany06@gmail.com', 'poli_umum', 'Pribadi', '2024-01-08 07:04:19', '2024-01-15 22:33:42', '892330', NULL, 'Telah Diperiksa', NULL, NULL, 1),
(2, 'Afnan Yusuf', 'afnany06@gmail.com', 'poli_umum', 'BPJS', '2024-01-15 18:19:00', '2024-01-15 19:05:09', '737683', NULL, 'diperiksa', 'public/bpjs_files/bpjs_1705367939.pdf', 'public/rujukan_files/rujukan_1705367940.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dokters`
--

CREATE TABLE `dokters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Spesialisasi` varchar(255) NOT NULL,
  `Nomer_izin_praktik` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokters`
--

INSERT INTO `dokters` (`id`, `Nama`, `Spesialisasi`, `Nomer_izin_praktik`, `email`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Defbi Anisti', 'Orthopedi', '2334567', 'defbi47@gmail.clom', 2, '2024-01-08 07:05:43', '2024-01-08 07:05:43');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_17_160746_create_pasiens_table', 1),
(6, '2023_12_02_150650_create_antrians_table', 1),
(7, '2023_12_29_030640_create_dokters_table', 1),
(8, '2023_12_30_030249_create_rekam_medis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasiens`
--

CREATE TABLE `pasiens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `nomor_kk` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `status_kawin` varchar(255) NOT NULL,
  `file_ktp` varchar(255) NOT NULL,
  `file_kk` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasiens`
--

INSERT INTO `pasiens` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `nomor_telepon`, `email`, `pekerjaan`, `nomor_kk`, `agama`, `status_kawin`, `file_ktp`, `file_kk`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '12345678765432', 'Afnan Yusuf', 'Purbalingga', '2024-01-12', 'male', 'aakjcfaslbcsidbclasjdbcsahfcb', '085329789458', 'afnany06@gmail.com', 'sdffedwaecsf', 'wafsdgfhgjmhngbfvdsx', 'sfghgbfvdcs', 'single', 'ktp_files/ktp_1.png', 'kk_files/kk_1.png', 1, '2024-01-08 07:03:57', '2024-01-08 07:03:57');

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
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `gejala` text NOT NULL,
  `diagnosis` text NOT NULL,
  `penangan` text NOT NULL,
  `resep_obat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_pasien` bigint(20) UNSIGNED NOT NULL,
  `id_dokter` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id`, `nama`, `tanggal`, `gejala`, `diagnosis`, `penangan`, `resep_obat`, `created_at`, `updated_at`, `id_pasien`, `id_dokter`) VALUES
(3, 'fadjnvjavn', '2024-01-17', 'adcaBCijasbaJCNQAD NCWO', 'agdxhasvcxhdcbWQNC OW', 'KGCIAGDCKAJJJDSVDC', 'DGC8wfciyfwdAD', '2024-01-15 17:04:48', '2024-01-15 22:01:27', 1, 1),
(4, 'Afnan Yusuf', '2024-01-17', 'adcaBCijasb', 'agdxhasvcxhdcb', 'KGCIAGDCKAJJJDSVDC', 'DGC8wfciy', '2024-01-15 17:05:27', '2024-01-15 17:05:27', 1, 1);

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
  `role` enum('pasien','dokter','staff') NOT NULL DEFAULT 'pasien',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AFNAN YUSUF', '21102255@ittelkom-pwt.ac.id', NULL, '$2y$10$VsJvi2W5EwmgYz1a5jKW6./u1Wa7EjTFMmkU3PHX9/eGpi6fR9QPu', 'pasien', NULL, '2024-01-08 07:03:33', '2024-01-08 07:03:33'),
(2, 'Afnan Yusuf', 'afnany06@gmail.com66', NULL, '$2y$10$s4.PdgOEMGYyd186XfVvyeTvcjUYZAPxQ47BMbZWycB7LgEdaqOJe', 'dokter', NULL, '2024-01-08 07:05:37', '2024-01-08 07:05:37'),
(3, 'Afnan Yusuf', 'afnany06@gmail.com', NULL, '$2y$10$qAG46vpWwDbtg6W9mRRD8ukBqjB7S0tLy3I1jH42K1l8EkCkPujmO', 'staff', 'LKIHg6kwSy2Pv73H8z8v71IGgpe1ChCWgCrfF4VnB2rbnza8KJbLusfX40fx', '2024-01-14 19:46:20', '2024-01-14 19:46:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrians`
--
ALTER TABLE `antrians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `antrians_id_pasien_foreign` (`id_pasien`);

--
-- Indexes for table `dokters`
--
ALTER TABLE `dokters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokters_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasiens_user_id_foreign` (`user_id`);

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
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rekam_medis_id_pasien_foreign` (`id_pasien`),
  ADD KEY `rekam_medis_id_dokter_foreign` (`id_dokter`);

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
-- AUTO_INCREMENT for table `antrians`
--
ALTER TABLE `antrians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dokters`
--
ALTER TABLE `dokters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antrians`
--
ALTER TABLE `antrians`
  ADD CONSTRAINT `antrians_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasiens` (`id`);

--
-- Constraints for table `dokters`
--
ALTER TABLE `dokters`
  ADD CONSTRAINT `dokters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD CONSTRAINT `pasiens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_id_dokter_foreign` FOREIGN KEY (`id_dokter`) REFERENCES `dokters` (`id`),
  ADD CONSTRAINT `rekam_medis_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasiens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
