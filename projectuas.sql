-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 11:15 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectuas`
--

-- --------------------------------------------------------

--
-- Table structure for table `concerts`
--

CREATE TABLE `concerts` (
  `id_concert` int(10) UNSIGNED NOT NULL,
  `kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kapasitas` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jadwal_mulai` datetime NOT NULL,
  `jadwal_selesai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `concerts`
--

INSERT INTO `concerts` (`id_concert`, `kelas`, `created_at`, `updated_at`, `kapasitas`, `harga`, `jadwal_mulai`, `jadwal_selesai`) VALUES
(1, 'Regular', NULL, NULL, 100, 200000, '2017-07-19 13:00:00', '2017-07-23 13:00:00'),
(2, 'VIP', NULL, NULL, 100, 400000, '2017-07-19 13:00:00', '2017-07-23 13:00:00'),
(3, 'VVIP', NULL, NULL, 100, 600000, '2017-07-19 13:00:00', '2017-07-23 13:00:00'),
(4, 'SSVIP', NULL, NULL, 100, 800000, '2017-07-19 13:00:00', '2017-07-23 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_01_104132_create_privilege', 2),
(4, '2017_06_01_115330_create_masterusers_table', 3),
(8, '2017_06_05_134304_create_concerts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE `privilege` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`id`, `name`) VALUES
(1, 'Administrator'),
(2, 'Customer Service');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_privilege` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `id_privilege`) VALUES
(4, 'Ariel', 'arielsinatra@yahoo.com', '$2y$10$f11jiZSV/stRJGnPP9/2a.rK8zQ5K26fGnohqrXfv/nivYsTsPnMu', 'Fw6ieqw5m7FCETRqQ4eXWTzrXCywnZtDmllxIHQtIQ42DXvMEuMZDoul87gK', '2017-06-01 23:28:34', '2017-06-07 05:59:39', NULL),
(5, 'arielsin', 'arielsinatra01@yahoo.com', '$2y$10$f11jiZSV/stRJGnPP9/2a.rK8zQ5K26fGnohqrXfv/nivYsTsPnMu', '5lGz3j3lcb8krdg74ypx3FryVqoztD07JhlVc8YtKwxmvALKTEu0WwKVPdmG', '2017-06-05 05:38:39', '2017-06-05 13:50:14', NULL),
(6, 'stev', 'stev@yahoo.com', 'assassin', NULL, '2017-06-05 06:50:09', '2017-06-05 06:50:09', NULL),
(7, 'asd', 'asd@yahoo.com', '$2y$10$yhNLpu/THji1He3oiVJtb.Tv30direqCMogx/.29xRiiCPhxiJ.Ey', 'dLb2qHc9c6EXq2JKIYkRGtj1PU2P6gG4wFfrHhWYf8UmF2ZVqLjR4O1HcG6M', '2017-06-05 06:51:34', '2017-06-05 14:07:31', NULL),
(8, 'asdf', 'asdf@yahoo.com', '$2y$10$1hq5rn62X3ZaixtU4XDFKefEFoC39jzblYUqGpLtnhl9lc6ctWm.2', 'PeNQAoB7Vxm10tQajyx5kE0PEvXXXIa5YI9drUIuLp77qHHBEHOYqd63GmqV', '2017-06-05 07:21:56', '2017-06-05 14:26:26', NULL),
(9, 're', 're', '$2y$10$QAI3/89xx0KoVmTH5V7Yhe.vhIFOWpksAVYJZ179XnXi33LBQ/Llq', NULL, '2017-06-05 07:26:21', '2017-06-05 07:26:21', NULL);

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `BUusers` BEFORE UPDATE ON `users` FOR EACH ROW BEGIN
	set NEW.updated_at = CURRENT_TIMESTAMP();
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`id_concert`);

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
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concerts`
--
ALTER TABLE `concerts`
  MODIFY `id_concert` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
