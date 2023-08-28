-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 04:04 PM
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
-- Database: `bus-ticket-manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_company_published_ticket`
--

CREATE TABLE `bus_company_published_ticket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `b_comp_ticket_from` varchar(255) NOT NULL,
  `b_comp_ticket_to` varchar(255) NOT NULL,
  `b_comp_ticket_seat` int(11) NOT NULL,
  `b_comp_ticket_date` datetime NOT NULL,
  `b_comp_ticket_price` int(11) NOT NULL,
  `b_comp_ticket_author_id` int(11) NOT NULL,
  `b_comp_ticket_author_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `all_seats` longtext NOT NULL,
  `empty_seats` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bus_company_published_ticket`
--

INSERT INTO `bus_company_published_ticket` (`id`, `b_comp_ticket_from`, `b_comp_ticket_to`, `b_comp_ticket_seat`, `b_comp_ticket_date`, `b_comp_ticket_price`, `b_comp_ticket_author_id`, `b_comp_ticket_author_name`, `created_at`, `updated_at`, `all_seats`, `empty_seats`) VALUES
(9, 'Rajshahi', 'Rangpur', 40, '2023-08-12 00:41:00', 1000, 2, 'Greenline', '2023-08-06 12:41:49', '2023-08-07 09:03:18', 'a:40:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;i:5;i:6;i:6;i:7;i:7;i:8;i:8;i:9;i:9;i:10;i:10;i:11;i:11;i:12;i:12;i:13;i:13;i:14;i:14;i:15;i:15;i:16;i:16;i:17;i:17;i:18;i:18;i:19;i:19;i:20;i:20;i:21;i:21;i:22;i:22;i:23;i:23;i:24;i:24;i:25;i:25;i:26;i:26;i:27;i:27;i:28;i:28;i:29;i:29;i:30;i:30;i:31;i:31;i:32;i:32;i:33;i:33;i:34;i:34;i:35;i:35;i:36;i:36;i:37;i:37;i:38;i:38;i:39;i:39;i:40;}', 'a:40:{i:1;b:1;i:2;b:1;i:3;b:1;i:4;b:1;i:5;b:1;i:6;b:1;i:7;b:1;i:8;b:0;i:9;b:0;i:10;b:1;i:11;b:1;i:12;b:0;i:13;b:0;i:14;b:0;i:15;b:1;i:16;b:1;i:17;b:0;i:18;b:0;i:19;b:1;i:20;b:1;i:21;b:1;i:22;b:0;i:23;b:0;i:24;b:0;i:25;b:0;i:26;b:0;i:27;b:0;i:28;b:0;i:29;b:1;i:30;b:1;i:31;b:0;i:32;b:0;i:33;b:1;i:34;b:1;i:35;b:1;i:36;b:1;i:37;b:0;i:38;b:0;i:39;b:0;i:40;b:0;}'),
(25, 'Dhaka', 'Dhaka', 20, '2023-08-13 02:40:00', 1000, 5, 'bus222', '2023-08-12 14:35:14', '2023-08-12 14:35:14', 'a:20:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;i:5;i:6;i:6;i:7;i:7;i:8;i:8;i:9;i:9;i:10;i:10;i:11;i:11;i:12;i:12;i:13;i:13;i:14;i:14;i:15;i:15;i:16;i:16;i:17;i:17;i:18;i:18;i:19;i:19;i:20;}', 'a:20:{i:1;b:1;i:2;b:1;i:3;b:1;i:4;b:0;i:5;b:1;i:6;b:0;i:7;b:0;i:8;b:0;i:9;b:1;i:10;b:0;i:11;b:0;i:12;b:0;i:13;b:1;i:14;b:0;i:15;b:0;i:16;b:0;i:17;b:1;i:18;b:0;i:19;b:0;i:20;b:0;}');

-- --------------------------------------------------------

--
-- Table structure for table `bus_routes`
--

CREATE TABLE `bus_routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `route_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bus_routes`
--

INSERT INTO `bus_routes` (`id`, `route_name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', NULL, NULL),
(3, 'Rajshahi', NULL, NULL),
(4, 'Barishal', NULL, NULL),
(5, 'Rangpur', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shopping_item_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `user_id`, `shopping_item_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1007, 1, '2023-07-20 09:15:50', '2023-07-20 09:15:50'),
(2, 1, 1007, 1, '2023-07-20 09:17:15', '2023-07-20 09:17:15'),
(3, 1, 1007, 1, '2023-07-20 09:17:36', '2023-07-20 09:17:36'),
(4, 1, 1008, 1, '2023-07-20 09:17:39', '2023-07-20 09:17:39'),
(5, 1, 1001, 1, '2023-07-20 09:25:09', '2023-07-20 09:25:09'),
(6, 4, 1001, 1, '2023-08-07 08:50:08', '2023-08-07 08:50:08'),
(7, 1, 1012, 2, '2023-08-07 08:55:47', '2023-08-07 08:55:47'),
(8, 1, 1018, 70, '2023-08-08 02:24:33', '2023-08-08 02:36:12'),
(9, 1, 1019, 70, '2023-08-08 02:24:33', '2023-08-08 02:36:12'),
(10, 1, 1020, 4, '2023-08-10 11:52:05', '2023-08-10 12:03:21'),
(11, 6, 1021, 4, '2023-08-10 22:49:53', '2023-08-12 07:14:30'),
(12, 6, 1016, 20, '2023-08-12 09:39:42', '2023-08-12 13:55:38'),
(13, 6, 1017, 100, '2023-08-12 09:39:42', '2023-08-12 13:55:53'),
(14, 6, 1022, 2, '2023-08-12 14:18:07', '2023-08-12 14:18:07'),
(15, 6, 1023, 25, '2023-08-12 14:37:13', '2023-08-12 14:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `customer_bought_ticket`
--

CREATE TABLE `customer_bought_ticket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TicketID` bigint(20) NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `bus_comp_id` bigint(20) UNSIGNED NOT NULL,
  `bus_comp_name` varchar(255) NOT NULL,
  `number_of_seats` int(11) NOT NULL,
  `cancel_ticket_request` tinyint(1) NOT NULL DEFAULT 0,
  `seats` longtext NOT NULL,
  `total_price` int(11) NOT NULL,
  `b_comp_ticket_date` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_bought_ticket`
--

INSERT INTO `customer_bought_ticket` (`id`, `TicketID`, `customer_id`, `customer_name`, `bus_comp_id`, `bus_comp_name`, `number_of_seats`, `cancel_ticket_request`, `seats`, `total_price`, `b_comp_ticket_date`, `updated_at`, `created_at`) VALUES
(70, 25, 6, 'a', 5, 'bus222', 36, 0, 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"5\";i:2;s:1:\"9\";}', 100, '2023-08-12 18:00:00', '2023-08-12 14:37:04', '2023-08-12 14:37:04'),
(71, 25, 6, 'a', 5, 'bus222', 36, 0, 'a:2:{i:0;s:2:\"13\";i:1;s:2:\"17\";}', 100, '2023-08-12 18:00:00', '2023-08-12 14:45:12', '2023-08-12 14:45:12'),
(72, 25, 6, 'a', 5, 'bus222', 36, 0, 'a:1:{i:0;s:1:\"2\";}', 100, '0000-00-00 00:00:00', '2023-08-12 14:55:46', '2023-08-12 14:55:46'),
(73, 25, 6, 'a', 5, 'bus222', 36, 0, 'a:1:{i:0;s:1:\"3\";}', 100, '0000-00-00 00:00:00', '2023-08-12 14:56:26', '2023-08-12 14:56:26'),
(74, 25, 6, 'a', 5, 'bus222', 36, 0, 'a:1:{i:0;s:1:\"3\";}', 100, '0000-00-00 00:00:00', '2023-08-12 14:56:53', '2023-08-12 14:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `customer_ticket`
--

CREATE TABLE `customer_ticket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_04_140412_create_customer_ticket_table', 1),
(7, '2023_07_04_140751_create_bus_company_published_ticket_table', 1),
(8, '2023_07_04_141035_create_bus_routes_table', 1),
(9, '2023_07_04_144610_create_add_role_to_users_table', 1),
(10, '2023_07_11_080003_create_shopping_items_table', 2),
(11, '2023_07_11_083322_create_shopping_items_table', 3),
(17, '2023_07_11_095804_create_shopping_items_table', 4);

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

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('kazialrefatpranta@gmail.com', '$2y$10$q1H5n1ihC.i6whtitOihKOTUtdHbo0NvJ4oRlFWTOCQ2cOKoWqGYa', '2023-08-11 08:32:01');

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
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` bigint(20) UNSIGNED NOT NULL,
  `bus_comp_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `customer_name` varchar(20) NOT NULL,
  `company_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `bus_comp_id`, `customer_id`, `review`, `rating`, `created_at`, `updated_at`, `customer_name`, `company_name`) VALUES
(1, 1, 2, 'asdasdasda', 5, '2023-07-30 14:49:53', '2023-07-30 14:49:53', '', ''),
(2, 2, 2, 'asdasdasda', 5, '2023-07-30 14:49:53', '2023-07-30 14:49:53', 'user1', 'Greenline'),
(3, 2, 1, 'QWE', 1, '2023-07-30 10:34:27', '2023-07-30 10:34:27', 'user1', 'Greenline'),
(4, 2, 1, '123', 1, '2023-07-30 10:34:51', '2023-07-30 10:34:51', 'user1', 'Greenline'),
(5, 2, 1, '123', 1, '2023-07-30 10:37:57', '2023-07-30 10:37:57', 'user1', 'Greenline'),
(6, 2, 1, '123', 1, '2023-07-30 10:38:18', '2023-07-30 10:38:18', 'user1', 'Greenline'),
(7, 2, 1, '12', 3, '2023-07-30 10:38:25', '2023-07-30 10:38:25', 'user1', 'Greenline'),
(8, 2, 1, 'hi valo bus', 5, '2023-08-02 07:13:33', '2023-08-02 07:13:33', 'user1', 'Greenline'),
(9, 2, 4, 'good bus', 4, '2023-08-07 08:42:18', '2023-08-07 08:42:18', 'qwe', 'bds'),
(10, 5, 1, 'good', 2, '2023-08-10 12:21:57', '2023-08-10 12:21:57', 'user', 'bus222'),
(11, 2, 1, '1111111111111111111111111111111111', 2, '2023-08-10 12:36:56', '2023-08-10 12:36:56', 'user', 'bds'),
(12, 5, 1, 'asd', 1, '2023-08-10 12:39:40', '2023-08-10 12:39:40', 'user', 'bus222'),
(13, 5, 1, '1212', 4, '2023-08-10 12:39:52', '2023-08-10 12:39:52', 'user', 'bus222'),
(14, 5, 1, 'qweqwe', 4, '2023-08-10 12:40:02', '2023-08-10 12:40:02', 'user', 'bus222'),
(15, 2, 1, '11', 2, '2023-08-10 12:40:11', '2023-08-10 12:40:11', 'user', 'bds');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_items`
--

CREATE TABLE `shopping_items` (
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` bigint(20) NOT NULL,
  `bus_comp_id` bigint(20) NOT NULL,
  `bus_comp_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopping_items`
--

INSERT INTO `shopping_items` (`item_id`, `ticket_id`, `bus_comp_id`, `bus_comp_name`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1001, 0, 0, '', 'Mineral Water', 25.00, NULL, NULL),
(1007, 0, 0, '', 'Chips', 25.00, NULL, NULL),
(1008, 0, 0, '', 'Biscuit', 30.00, NULL, NULL),
(1009, 0, 0, '', 'asd', 10.00, '2023-07-25 07:51:07', '2023-07-25 07:51:07'),
(1010, 0, 0, '', 'oreo', 100.00, '2023-08-02 07:20:55', '2023-08-02 07:20:55'),
(1011, 0, 0, '', 'asdasd', 10.00, '2023-08-07 07:40:08', '2023-08-07 07:40:08'),
(1012, 0, 0, '', 'pie', 2000.00, '2023-08-07 08:55:06', '2023-08-07 08:55:06'),
(1013, 1, 5, 'bus', 'asd', 100.00, '2023-08-08 01:54:44', '2023-08-08 01:54:44'),
(1014, 10, 5, 'bus', 'kola', 100.00, '2023-08-08 01:57:03', '2023-08-08 01:57:03'),
(1015, 10, 5, 'bus', '12', 10.00, '2023-08-08 02:03:15', '2023-08-08 02:03:15'),
(1016, 11, 5, 'bus', 'chips', 100.00, '2023-08-08 02:04:07', '2023-08-08 02:04:07'),
(1017, 11, 5, 'bus', 'drinks', 10.00, '2023-08-08 02:05:27', '2023-08-08 02:05:27'),
(1018, 12, 5, 'bus', 'chips', 10.00, '2023-08-08 02:18:47', '2023-08-08 02:18:47'),
(1019, 12, 5, 'bus', 'drinks', 20.00, '2023-08-08 02:18:56', '2023-08-08 02:18:56'),
(1020, 10, 5, 'bus222', 'gg', 100.00, '2023-08-10 11:50:58', '2023-08-10 11:50:58'),
(1021, 23, 5, 'bus222', 'practice', 100.00, '2023-08-10 22:49:21', '2023-08-10 22:49:21'),
(1022, 24, 5, 'bus222', 'qweqweqweqweqweqweq', 10000.00, '2023-08-12 14:17:35', '2023-08-12 14:17:35'),
(1023, 25, 5, 'bus222', '25 dhaka', 10.00, '2023-08-12 14:36:42', '2023-08-12 14:36:42');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'u', 'user1@bracu.com', NULL, '$2y$10$ZFcdpjjyYcqpbOxCk4Ot6OI.1MdBDGYW56DdDHEGJnAveD7R6nvGq', 'mzW6WusG90szSIaYBq6GuvshP0SMEW8yLreR5WSCL13TlkdXekfUXFRZ7UKr', '2023-07-04 08:51:46', '2023-08-11 06:49:49', 'Customer'),
(2, 'bds', 'abc@gmail.com', NULL, '$2y$10$c5d4Lq1zFIiZhDIIQ2gGxuqK.Glce2vu6ukoymyFkj5VjjrmB9CsS', NULL, '2023-07-04 09:53:09', '2023-08-07 08:36:37', 'Brand'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$eivgX1T1x/ubzRJ7z6BD/elViUpEm6wd9x1LxqiPp5ThgxyqxNTtS', NULL, '2023-07-30 06:06:38', '2023-07-30 06:06:38', 'Admin'),
(4, 'qwe', 'qwe@gmail.com', NULL, '$2y$10$H3f1WSNFtRaX78..aPDnjespTIjTfeL/e7E7m3kzsFy6.MbjNdRl.', NULL, '2023-08-07 08:41:58', '2023-08-07 08:41:58', 'Customer'),
(5, 'bus222', 'bus@gmail.com', NULL, '$2y$10$8BemiuEcOa6AGQDm7UcIjOFVGMq7KRj.SKJLwADOnQAa0koaxgdmO', 'd2DeJXUNsP3CoauKWDeK5vkCuTpoJW0G8DreLYM2SSDfdklk5udFO85qYjpv', '2023-08-07 08:51:28', '2023-08-10 11:20:48', 'Brand'),
(6, 'a', 'a@a.com', NULL, '$2y$10$dsDe4PxsVksjf3YJbPLjpOsQCiQg3HBIFGvUcE.r/ye00W86m4Ppa', NULL, '2023-08-10 22:34:43', '2023-08-11 06:19:22', 'Customer'),
(7, 'pranta', 'kazialrefatpranta@gmail.com', NULL, '$2y$10$WBJiHBZpyyCGXathqMR9fehAsZNVcd6H0zsOdfSc2F3fkmVeYKSmm', NULL, '2023-08-11 08:31:48', '2023-08-11 08:31:48', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_company_published_ticket`
--
ALTER TABLE `bus_company_published_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_routes`
--
ALTER TABLE `bus_routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_user_id_foreign` (`user_id`);

--
-- Indexes for table `customer_bought_ticket`
--
ALTER TABLE `customer_bought_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_ticket`
--
ALTER TABLE `customer_ticket`
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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `shopping_items`
--
ALTER TABLE `shopping_items`
  ADD PRIMARY KEY (`item_id`);

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
-- AUTO_INCREMENT for table `bus_company_published_ticket`
--
ALTER TABLE `bus_company_published_ticket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `bus_routes`
--
ALTER TABLE `bus_routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer_bought_ticket`
--
ALTER TABLE `customer_bought_ticket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `customer_ticket`
--
ALTER TABLE `customer_ticket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shopping_items`
--
ALTER TABLE `shopping_items`
  MODIFY `item_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1024;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
