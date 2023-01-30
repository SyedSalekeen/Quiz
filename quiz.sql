-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 05:48 AM
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
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `QuestionID` bigint(20) DEFAULT NULL,
  `SessionID` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date_Time` date DEFAULT NULL,
  `Answer` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `QuestionID`, `SessionID`, `Date_Time`, `Answer`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 3, '2023-01-30 05:10:55', '2023-01-30 05:10:55'),
(2, 2, NULL, NULL, 6, '2023-01-30 05:11:28', '2023-01-30 05:11:28'),
(3, 3, NULL, NULL, 15, '2023-01-30 05:11:46', '2023-01-30 05:11:46'),
(4, 4, NULL, NULL, 19, '2023-01-30 05:12:09', '2023-01-30 05:12:09'),
(5, 5, NULL, NULL, 25, '2023-01-30 05:12:25', '2023-01-30 05:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Math', '2023-01-30 03:30:58', '2023-01-30 03:30:58'),
(2, 'English', '2023-01-30 03:31:07', '2023-01-30 03:31:07'),
(3, 'Computer', '2023-01-30 03:31:16', '2023-01-30 03:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_09_24_183950_create_clients_table', 2),
(7, '2022_09_24_202646_create_vendors_table', 3),
(8, '2022_09_25_181306_create_assign_vendor_to_clients_table', 4),
(10, '2022_09_27_182320_create_given_amount_to_venors_table', 5),
(11, '2022_09_29_174335_create_receive_amount_from_clients_table', 6),
(13, '2022_10_18_182258_create_purchase_from_vendors_table', 7),
(14, '2022_10_18_190742_create_purchase_property_amount_monthlies_table', 8),
(15, '2023_01_21_234546_create_category_controllers_table', 9),
(16, '2023_01_22_005509_create_categories_table', 10),
(17, '2023_01_22_012335_create_products_table', 11),
(18, '2023_01_22_124651_create_product_images_table', 12),
(19, '2023_01_26_195320_create_checkouts_table', 13),
(20, '2023_01_26_195414_create_checkout_products_table', 14),
(21, '2023_01_29_194523_create_questions_table', 15),
(22, '2023_01_29_202636_create_answers_table', 16),
(23, '2023_01_29_204744_create_question_answers_table', 17);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `QuestionText` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CatID` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `QuestionText`, `CatID`, `created_at`, `updated_at`) VALUES
(1, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 1, '2023-01-30 05:10:55', '2023-01-30 05:10:55'),
(2, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 1, '2023-01-30 05:11:28', '2023-01-30 05:11:28'),
(3, 'Howard Burgess', 1, '2023-01-30 05:11:45', '2023-01-30 05:11:45'),
(4, 'sacasc', 2, '2023-01-30 05:12:09', '2023-01-30 05:12:09'),
(5, 'Neil Jenkins', 2, '2023-01-30 05:12:25', '2023-01-30 05:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `question_answers`
--

CREATE TABLE `question_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `QuestionID` bigint(20) DEFAULT NULL,
  `answer` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_answers`
--

INSERT INTO `question_answers` (`id`, `QuestionID`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 'A', '2023-01-30 05:10:55', '2023-01-30 05:10:55'),
(2, 1, 'B', '2023-01-30 05:10:55', '2023-01-30 05:10:55'),
(3, 1, 'C', '2023-01-30 05:10:55', '2023-01-30 05:10:55'),
(4, 1, 'D', '2023-01-30 05:10:55', '2023-01-30 05:10:55'),
(5, 1, 'E', '2023-01-30 05:10:55', '2023-01-30 05:10:55'),
(6, 2, 'A', '2023-01-30 05:11:28', '2023-01-30 05:11:28'),
(7, 2, 'B', '2023-01-30 05:11:28', '2023-01-30 05:11:28'),
(8, 2, 'C', '2023-01-30 05:11:28', '2023-01-30 05:11:28'),
(9, 2, 'D', '2023-01-30 05:11:28', '2023-01-30 05:11:28'),
(10, 2, 'E', '2023-01-30 05:11:28', '2023-01-30 05:11:28'),
(11, 3, 'A', '2023-01-30 05:11:46', '2023-01-30 05:11:46'),
(12, 3, 'B', '2023-01-30 05:11:46', '2023-01-30 05:11:46'),
(13, 3, 'C', '2023-01-30 05:11:46', '2023-01-30 05:11:46'),
(14, 3, 'D', '2023-01-30 05:11:46', '2023-01-30 05:11:46'),
(15, 3, 'E', '2023-01-30 05:11:46', '2023-01-30 05:11:46'),
(16, 4, 'A', '2023-01-30 05:12:09', '2023-01-30 05:12:09'),
(17, 4, 'B', '2023-01-30 05:12:09', '2023-01-30 05:12:09'),
(18, 4, 'C', '2023-01-30 05:12:09', '2023-01-30 05:12:09'),
(19, 4, 'D', '2023-01-30 05:12:09', '2023-01-30 05:12:09'),
(20, 4, 'E', '2023-01-30 05:12:09', '2023-01-30 05:12:09'),
(21, 5, 'A', '2023-01-30 05:12:25', '2023-01-30 05:12:25'),
(22, 5, 'B', '2023-01-30 05:12:25', '2023-01-30 05:12:25'),
(23, 5, 'C', '2023-01-30 05:12:25', '2023-01-30 05:12:25'),
(24, 5, 'D', '2023-01-30 05:12:25', '2023-01-30 05:12:25'),
(25, 5, 'E', '2023-01-30 05:12:25', '2023-01-30 05:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `type`, `role`, `contact`, `status`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'admin@ecommerce.com', NULL, '$2y$10$6dxhT9yGjpZomwyBEkZiOe01a.CLiMRT64QnTJk.OUq3buN9q2re.', 1, NULL, '', '', '', NULL, '2022-09-26 09:31:31', '2022-09-26 09:31:31'),
(2, 'Test', 'rulogoxewo', 'test@gmail.com', NULL, '$2y$10$ZNtDG52d02KTUFy0Mm9eAuC.yqlwM4HzN/N6.6jdYTkJc49.HaKJu', 2, 'User', '223', 'Active', 'csaccaccsac', NULL, '2023-01-23 10:25:19', '2023-01-23 11:39:07'),
(3, NULL, 'daqime', 'josadyre@mailinator.com', NULL, '$2y$10$kW8n0I6rbUV3O0.KD4/qCu8idlx2LANcVIa0P6m5wSsa9pPKyptze', 3, 'User', NULL, 'Active', NULL, NULL, '2023-01-23 12:33:50', '2023-01-23 12:33:50'),
(5, NULL, 'test', 'test1@gmail.com', NULL, '$2y$10$hLl4yC2rqjGi88kCe4enR.mGHAbItk.OBCTFnKZ/TWsl6uLsFKwb2', 3, 'User', NULL, 'Active', NULL, NULL, '2023-01-24 06:39:34', '2023-01-24 06:39:34'),
(6, NULL, 'daruldevs.com', 'accountant@gmail.com', NULL, '$2y$10$hWjB/nooNUBRttpsEhKvcOKccKVRLWB1I/iebQUiHgHpHtEVZo5Ni', 3, 'User', NULL, 'Active', NULL, NULL, '2023-01-24 06:54:50', '2023-01-24 06:54:50'),
(7, NULL, '123', 'salekeen@gmail.com', NULL, '$2y$10$ixO98fpycs9J3jRPv92OOefXbnzVY1pdAwv7FIZd0oJWPFCEwDbiq', 3, 'User', NULL, 'Active', NULL, NULL, '2023-01-24 06:56:25', '2023-01-24 06:56:25'),
(8, 'Product', 'product12', 'product@gmail.com', NULL, '$2y$10$lxX5vl6fR96TH3QXcn903.4x7MnApgsLv5fG/jJbeonM/N5dFH3O2', 2, 'User', '123', 'Active', 'sacsascca', NULL, '2023-01-27 13:19:19', '2023-01-27 13:19:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_answers`
--
ALTER TABLE `question_answers`
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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `question_answers`
--
ALTER TABLE `question_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
