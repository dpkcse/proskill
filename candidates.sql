-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2026 at 11:45 PM
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
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `present_district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `present_upazila_id` bigint(20) UNSIGNED DEFAULT NULL,
  `present_post_office_id` bigint(20) UNSIGNED DEFAULT NULL,
  `present_address_line` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profession_id` bigint(20) UNSIGNED DEFAULT NULL,
  `experience_id` bigint(20) UNSIGNED DEFAULT NULL,
  `education_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` enum('male','female','other','машко','женско','друго') DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `age` tinyint(3) UNSIGNED DEFAULT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 1,
  `cv_visibility` tinyint(1) NOT NULL DEFAULT 1,
  `received_job_alert` tinyint(1) NOT NULL DEFAULT 1,
  `profile_complete` int(11) NOT NULL DEFAULT 100,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `exact_location` varchar(255) DEFAULT NULL,
  `neighborhood` varchar(255) DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `long` double DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `status` enum('available','not_available','available_in') NOT NULL DEFAULT 'available',
  `available_in` date DEFAULT NULL,
  `whatsapp_number` varchar(255) DEFAULT NULL,
  `alternate_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `user_id`, `present_district_id`, `present_upazila_id`, `present_post_office_id`, `present_address_line`, `role_id`, `profession_id`, `experience_id`, `education_id`, `title`, `first_name`, `last_name`, `gender`, `website`, `nationality`, `photo`, `signature`, `cv`, `bio`, `marital_status`, `birth_date`, `age`, `visibility`, `cv_visibility`, `received_job_alert`, `profile_complete`, `created_at`, `updated_at`, `address`, `exact_location`, `neighborhood`, `locality`, `place`, `district`, `postcode`, `region`, `country`, `long`, `lat`, `status`, `available_in`, `whatsapp_number`, `alternate_phone`) VALUES
(1, 2, NULL, NULL, NULL, NULL, 4, 11, 4, 2, 'Steel Fixer', NULL, NULL, 'машко', NULL, NULL, 'uploads/images/candidates/1759645408_68e20ee05d0dc.jpg', NULL, NULL, NULL, 'сингл', '2002-02-23', NULL, 1, 1, 1, 0, '2025-10-05 16:23:28', '2025-10-05 16:40:41', 'dhaka-division-bangladesh', 'Dhaka District,Dhaka Division,Bangladesh', '', '', 'Dhaka', 'Dhaka District', '', 'Dhaka Division', 'Bangladesh', 90.34277357161046, 23.829571517562453, 'available', NULL, NULL, NULL),
(2, 4, NULL, NULL, NULL, NULL, 1, 30, 2, 4, 'Researcher', NULL, NULL, 'male', NULL, 'Bangladesh', 'uploads/images/candidates/1763613694_691e9bfe462cd.jpg', 'uploads/images/candidates/1763539895_691d7bb716cd3.png', NULL, NULL, 'single', '1997-06-25', NULL, 1, 1, 1, 0, '2025-11-10 16:54:12', '2025-11-20 15:43:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(3, 5, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 100, '2025-11-10 22:00:25', '2025-11-10 22:00:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(4, 6, NULL, NULL, NULL, NULL, 1, 14, 4, 2, 'Operator', NULL, NULL, 'male', NULL, 'Bangladesh', 'uploads/images/candidates/1762776884_6911d734bd3ca.jpg', 'uploads/images/candidates/1763548328_691d9ca836716.jpg', NULL, NULL, 'married', '2000-02-01', NULL, 1, 1, 1, 0, '2025-11-10 22:57:04', '2025-11-19 21:32:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(5, 7, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 'sad', NULL, NULL, 'машко', NULL, 'India', 'uploads/images/candidates/1768452467_69687173347a5.jpeg', 'uploads/images/candidates/1763574754_691e03e24ae0a.jpg', NULL, NULL, 'Marital Status', '2025-11-25', NULL, 1, 1, 1, 0, '2025-11-11 03:22:18', '2026-01-15 15:47:47', 'dhaka-division-bangladesh', 'Dhaka District,Dhaka Division,Bangladesh', '', '', NULL, 'Dhaka District', '', 'Dhaka Division', 'Bangladesh', 90.3563, 23.685, 'available', NULL, NULL, NULL),
(6, 8, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 100, '2025-11-20 03:08:07', '2025-11-20 03:08:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(7, 9, NULL, NULL, NULL, NULL, 1, 14, 2, 3, 'Digital Marketer', NULL, NULL, 'male', NULL, 'Bangladesh', 'uploads/images/candidates/1768452552_696871c81c0e1.png', 'uploads/images/candidates/1764573043_692d3f73c370c.jpg', NULL, '<p>Motivated and growth-oriented professional seeking an opportunity to contribute my creativity, problem-solving skills, and strong work ethic to a dynamic organization while continuing to learn and develop in my career.</p>', 'single', '2002-02-02', NULL, 1, 1, 1, 0, '2025-12-01 18:02:43', '2026-01-15 15:49:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(8, 10, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 100, '2025-12-01 19:08:28', '2025-12-01 19:08:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(9, 11, NULL, NULL, NULL, NULL, 1, 30, 1, 1, NULL, NULL, NULL, 'female', NULL, 'Bangladesh', NULL, NULL, NULL, NULL, 'single', '2001-12-25', NULL, 1, 1, 1, 60, '2025-12-01 20:48:41', '2025-12-01 20:54:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(10, 12, NULL, NULL, NULL, NULL, 1, 30, 1, 1, NULL, NULL, NULL, 'male', NULL, NULL, NULL, NULL, NULL, NULL, 'single', NULL, NULL, 1, 1, 1, 80, '2026-01-07 20:00:27', '2026-01-07 20:34:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'not_available', NULL, NULL, NULL),
(11, 13, NULL, NULL, NULL, NULL, 1, 30, 1, 1, NULL, NULL, NULL, 'male', NULL, 'Bangladesh', NULL, 'uploads/images/candidates/1767780253_695e2f9df1226.jpg', NULL, '<p>I will settle in Japan</p>', 'single', '2002-08-17', NULL, 1, 1, 1, 40, '2026-01-07 20:04:02', '2026-01-07 21:04:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(12, 14, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 100, '2026-01-07 20:04:27', '2026-01-07 20:04:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(13, 15, NULL, NULL, NULL, NULL, 1, 30, 1, 2, NULL, NULL, NULL, 'male', NULL, 'Bangladesh', 'uploads/images/candidates/1767779406_695e2c4e19985.jpg', NULL, NULL, NULL, 'single', '2005-02-25', NULL, 1, 1, 1, 0, '2026-01-07 20:15:32', '2026-01-07 20:50:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(14, 16, NULL, NULL, NULL, NULL, 1, 2, 3, 2, NULL, NULL, NULL, 'male', NULL, 'Bangladesh', 'uploads/images/candidates/1767777809_695e2611557dc.jpg', 'uploads/images/candidates/1767777771_695e25eb5cbcb.jpg', NULL, NULL, 'married', '2000-03-20', NULL, 1, 1, 1, 20, '2026-01-07 20:16:41', '2026-01-07 20:44:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(15, 17, NULL, NULL, NULL, NULL, 1, 1, 1, 2, 'Learner', NULL, NULL, NULL, NULL, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, '2008-08-05', NULL, 1, 1, 1, 80, '2026-01-07 20:17:33', '2026-01-07 20:36:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(16, 18, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 100, '2026-01-07 20:18:34', '2026-01-07 20:18:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(17, 32, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 100, '2026-01-07 20:56:50', '2026-01-07 20:56:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(18, 33, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 100, '2026-01-07 20:57:36', '2026-01-07 20:57:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(19, 34, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 100, '2026-01-07 20:58:37', '2026-01-07 20:58:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(20, 35, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 100, '2026-01-07 21:04:09', '2026-01-07 21:04:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(21, 36, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 100, '2026-01-07 21:22:30', '2026-01-07 21:22:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(22, 37, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 100, '2026-01-07 21:24:46', '2026-01-07 21:24:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL),
(23, 38, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 100, '2026-01-15 23:01:51', '2026-01-15 23:01:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'available', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidates_user_id_foreign` (`user_id`),
  ADD KEY `candidates_role_id_foreign` (`role_id`),
  ADD KEY `candidates_profession_id_foreign` (`profession_id`),
  ADD KEY `candidates_experience_id_foreign` (`experience_id`),
  ADD KEY `candidates_education_id_foreign` (`education_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidates`
--
ALTER TABLE `candidates`
  ADD CONSTRAINT `candidates_education_id_foreign` FOREIGN KEY (`education_id`) REFERENCES `education` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `candidates_experience_id_foreign` FOREIGN KEY (`experience_id`) REFERENCES `experiences` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `candidates_profession_id_foreign` FOREIGN KEY (`profession_id`) REFERENCES `professions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `candidates_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `job_roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `candidates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
