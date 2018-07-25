-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 02:46 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_hs`
--

-- --------------------------------------------------------

--
-- Table structure for table `memberdetails`
--

CREATE TABLE `memberdetails` (
  `m_id` int(10) UNSIGNED NOT NULL,
  `soc_id` int(11) NOT NULL,
  `m_maint_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_wing` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_flat_no` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_pan_card` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_cel_no` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_parking_charge` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_gas_charge` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_water_charge` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_light_charge` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberdetails`
--

INSERT INTO `memberdetails` (`m_id`, `soc_id`, `m_maint_no`, `m_name`, `m_email`, `m_password`, `m_wing`, `m_flat_no`, `m_address`, `m_pan_card`, `m_cel_no`, `m_parking_charge`, `m_gas_charge`, `m_water_charge`, `m_light_charge`, `created_at`, `updated_at`) VALUES
(1, 1537718992, '1234567', 'hacker singh', 'cmhgu@topikt.com', 'killer514', 'b', '202', 'b 101 chs goregoan east', 'caadadvadv', '7558423375', '5000', '5000', '5000', '5000', '2018-07-24 17:19:08', '2018-07-24 17:19:08'),
(2, 1537718992, '1234568', 'rohit singh', 'rs316222@gmail.com', 'killer515', 'c', '203', 'B/202,Bharat Vaibhav Apt,Achole Road ,Nallasopara east', 'xaxaxaxaxaxa', '7558423374', '5000', '5000', '5000', '5000', '2018-07-24 18:03:57', '2018-07-24 18:03:57');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2018_07_24_154747_create_users_table', 1),
(3, '2018_07_24_181545_create_society_table', 1),
(4, '2018_07_24_201336_create_member_table', 2);

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
-- Table structure for table `societydetails`
--

CREATE TABLE `societydetails` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `s_id` int(11) NOT NULL,
  `s_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_account_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pan_card` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_tel_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `societydetails`
--

INSERT INTO `societydetails` (`user_id`, `s_id`, `s_name`, `s_email`, `s_address`, `s_account_no`, `pan_card`, `c_tel_no`, `created_at`, `updated_at`) VALUES
(1, 1537718992, 'bharat vaibhav', 'rs316222@gmail.com', 'B/202,Bharat Vaibhav Apt,Achole Road ,Nallasopara east', '1234567890', 'akndkwd123', '7558423375', '2018-07-24 14:36:54', '2018-07-24 14:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `societyusers`
--

CREATE TABLE `societyusers` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobilenumber` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `societyusers`
--

INSERT INTO `societyusers` (`id`, `firstname`, `lastname`, `email`, `mobilenumber`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rahul', 'Singh', 'rs31622@gmail.com', '7558423375', '$2y$10$EMQiURrSZFhvOS4bPt3Am.VGzH9/LuIVTL1yGp4xwkF/hnxSZYfWW', 'KfJedGKX7CVWnsaI65ODPC5hxQuimKoR4KOEYBQAUNX9fy21Isqkoim7EYC0', '2018-07-24 13:47:24', '2018-07-24 13:47:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memberdetails`
--
ALTER TABLE `memberdetails`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `memberdetails_soc_id_foreign` (`soc_id`);

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
-- Indexes for table `societydetails`
--
ALTER TABLE `societydetails`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `societydetails_user_id_foreign` (`user_id`);

--
-- Indexes for table `societyusers`
--
ALTER TABLE `societyusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memberdetails`
--
ALTER TABLE `memberdetails`
  MODIFY `m_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `societydetails`
--
ALTER TABLE `societydetails`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1537718993;

--
-- AUTO_INCREMENT for table `societyusers`
--
ALTER TABLE `societyusers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `memberdetails`
--
ALTER TABLE `memberdetails`
  ADD CONSTRAINT `memberdetails_soc_id_foreign` FOREIGN KEY (`soc_id`) REFERENCES `societydetails` (`s_id`);

--
-- Constraints for table `societydetails`
--
ALTER TABLE `societydetails`
  ADD CONSTRAINT `societydetails_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `societyusers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
