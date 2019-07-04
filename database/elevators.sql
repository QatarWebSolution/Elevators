-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2019 at 12:18 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `capacity_en` text COLLATE utf8mb4_unicode_ci,
  `rated_speed_en` text COLLATE utf8mb4_unicode_ci,
  `travel_height_en` text COLLATE utf8mb4_unicode_ci,
  `meta_en` text COLLATE utf8mb4_unicode_ci,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `capacity_ar` text COLLATE utf8mb4_unicode_ci,
  `rated_speed_ar` text COLLATE utf8mb4_unicode_ci,
  `travel_height_ar` text COLLATE utf8mb4_unicode_ci,
  `meta_ar` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

DROP TABLE IF EXISTS `products_images`;
CREATE TABLE IF NOT EXISTS `products_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_250` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_500` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elevator_type_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_type_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_location_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handover_date_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_status_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `meta_en` text COLLATE utf8mb4_unicode_ci,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elevator_type_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_type_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_location_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handover_date_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_status_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `meta_ar` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title_en`, `elevator_type_en`, `building_type_en`, `project_location_en`, `start_date_en`, `handover_date_en`, `project_status_en`, `description_en`, `meta_en`, `title_ar`, `elevator_type_ar`, `building_type_ar`, `project_location_ar`, `start_date_ar`, `handover_date_ar`, `project_status_ar`, `description_ar`, `meta_ar`, `status`, `added_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Unde repudiandae ali', 'Non numquam consecte', 'Harum autem accusant', 'Ut dolorem praesenti', '01-Aug-2008', '17-Jan-1971', 'Labore veniam excep', 'Et ullam mollitia an', 'null', 'Temporibus ut sit il', 'Quae qui veniam inc', 'Quia eu esse earum i', 'Est molestias nisi i', '01-Jan-1985', '20-Jul-2019', 'Fugiat id sed perf', 'Aliquid quam aliqua', 'null', 1, 1, '2019-07-02 06:25:41', '2019-07-02 06:25:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects_images`
--

DROP TABLE IF EXISTS `projects_images`;
CREATE TABLE IF NOT EXISTS `projects_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_250` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_500` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
