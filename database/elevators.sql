-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2019 at 01:26 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elevators`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title_en` varchar(200) NOT NULL,
  `description_en` varchar(200) NOT NULL,
  `title_ar` varchar(200) NOT NULL,
  `description_ar` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `thumb_250` varchar(200) NOT NULL,
  `thumb_500` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_02_045226_create_projects', 1),
(4, '2019_07_02_045312_create_products', 1),
(5, '2019_07_02_045936_create_products_images', 1),
(6, '2019_07_02_052145_create_projects_images', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rated_speed_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `travel_height_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rated_speed_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `travel_height_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `added_by` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_250` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_500` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `added_by` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elevator_type_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_type_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_location_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handover_date_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_status_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elevator_type_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_type_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_location_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handover_date_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_status_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `added_by` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects_images`
--

CREATE TABLE `projects_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_250` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_500` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `added_by` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `added_by` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `company_en` varchar(100) NOT NULL,
  `description_en` text NOT NULL,
  `meta_en` text NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `company_ar` varchar(100) NOT NULL,
  `description_ar` text NOT NULL,
  `meta_ar` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `thumb_250` varchar(200) DEFAULT NULL,
  `thumb_500` varchar(200) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vishnu', 'vishnuprasad145@gmail.com', NULL, '$2y$10$KAwo1nL4HesusWD68GU63etbx1eGAibtOgGMknW3k//ztX6yhRl7y', NULL, '2019-07-08 15:28:49', '2019-07-08 15:28:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_images`
--
ALTER TABLE `projects_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects_images`
--
ALTER TABLE `projects_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
