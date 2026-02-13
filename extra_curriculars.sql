-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2026 at 11:53 AM
-- Server version: 11.4.9-MariaDB-cll-lve-log
-- PHP Version: 8.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fasherce_modernjobsearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `extra_curriculars`
--

CREATE TABLE `extra_curriculars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `activities` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extra_curriculars`
--

INSERT INTO `extra_curriculars` (`id`, `user_id`, `activities`, `created_at`, `updated_at`) VALUES
(6, 7, '4', '2025-11-13 06:45:49', '2025-11-13 06:45:49'),
(7, 7, '2', '2025-11-13 06:45:49', '2025-11-13 06:45:49'),
(8, 7, '3', '2025-11-13 06:45:49', '2025-11-13 06:45:49'),
(9, 7, '4', '2025-11-13 06:45:49', '2025-11-13 06:45:49'),
(11, 9, 'WORKING IN CULTURAL FUNCTION OF COLLEGE AS TEAM HEAD', '2025-12-08 17:16:25', '2025-12-08 17:16:25'),
(12, 4, 'Leadership', '2026-01-07 21:03:38', '2026-01-07 21:03:38'),
(13, 4, 'football', '2026-01-07 21:03:38', '2026-01-07 21:03:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `extra_curriculars`
--
ALTER TABLE `extra_curriculars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `extra_curricular_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `extra_curriculars`
--
ALTER TABLE `extra_curriculars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `extra_curriculars`
--
ALTER TABLE `extra_curriculars`
  ADD CONSTRAINT `extra_curricular_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
