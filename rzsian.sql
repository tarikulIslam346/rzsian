-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 01:37 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rzsian`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Ok enjoy', '2019-04-16 03:55:18', '2019-04-16 03:55:18'),
(2, 1, 1, 'love', '2019-04-16 04:20:22', '2019-04-16 04:20:22'),
(3, 2, 1, 'foo', '2019-04-16 05:26:14', '2019-04-16 05:26:14'),
(4, 1, 1, 'hi', '2019-04-16 05:58:29', '2019-04-16 05:58:29'),
(5, 3, 4, 'hi', '2019-04-16 06:00:27', '2019-04-16 06:00:27'),
(6, 3, 1, 'Ok enjoy pusher', '2019-04-16 06:05:29', '2019-04-16 06:05:29'),
(7, 3, 1, 'Ok enjoy pusher', '2019-04-16 06:05:46', '2019-04-16 06:05:46'),
(8, 1, 4, 'pusher comment', '2019-04-16 06:08:49', '2019-04-16 06:08:49'),
(9, 1, 4, 'new pusser', '2019-04-16 06:10:28', '2019-04-16 06:10:28'),
(10, 1, 4, 'pusher 00001111', '2019-04-16 06:14:35', '2019-04-16 06:14:35'),
(11, 1, 4, '1000000000000000', '2019-04-16 06:15:34', '2019-04-16 06:15:34'),
(12, 1, 1, 'Ok enjoy', '2019-04-16 06:19:59', '2019-04-16 06:19:59'),
(13, 1, 1, 'go', '2019-04-16 06:21:09', '2019-04-16 06:21:09'),
(14, 3, 1, 'Ok enjoy', '2019-04-16 06:23:43', '2019-04-16 06:23:43'),
(15, 1, 4, 'fine', '2019-04-16 06:24:58', '2019-04-16 06:24:58'),
(16, 1, 1, 'Ok enjoy pusher', '2019-04-16 06:25:39', '2019-04-16 06:25:39'),
(17, 1, 1, 'foo pusher', '2019-04-16 06:28:17', '2019-04-16 06:28:17'),
(18, 1, 1, 'test', '2019-04-16 06:33:43', '2019-04-16 06:33:43'),
(19, 1, 1, 'tik', '2019-04-16 06:36:48', '2019-04-16 06:36:48'),
(20, 1, 1, 'hi', '2019-04-17 00:07:47', '2019-04-17 00:07:47'),
(21, 1, 1, 'asdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '2019-04-17 00:36:10', '2019-04-17 00:36:10'),
(22, 1, 1, 'fuck', '2019-04-17 03:11:09', '2019-04-17 03:11:09'),
(23, 1, 1, 'kill the', '2019-04-17 03:19:26', '2019-04-17 03:19:26'),
(24, 1, 1, 'go foe append', '2019-04-17 03:20:21', '2019-04-17 03:20:21'),
(25, 1, 4, 'comment from imran ck pusher', '2019-04-17 03:23:35', '2019-04-17 03:23:35'),
(26, 1, 4, 'test pusher 123', '2019-04-17 03:32:12', '2019-04-17 03:32:12'),
(27, 1, 4, 'pusher comment check', '2019-04-17 03:40:31', '2019-04-17 03:40:31'),
(28, 1, 4, 'pusher comment check', '2019-04-17 03:42:13', '2019-04-17 03:42:13'),
(29, 1, 4, 'check 000', '2019-04-17 03:42:40', '2019-04-17 03:42:40'),
(30, 1, 4, 'check 000', '2019-04-17 03:44:06', '2019-04-17 03:44:06'),
(31, 1, 4, 'check 000', '2019-04-17 03:45:35', '2019-04-17 03:45:35'),
(32, 1, 4, 'sadsadasd 121212', '2019-04-17 03:46:02', '2019-04-17 03:46:02'),
(33, 1, 4, 'sadsadasd 121212', '2019-04-17 03:48:42', '2019-04-17 03:48:42'),
(34, 1, 4, '121212121212', '2019-04-17 03:49:33', '2019-04-17 03:49:33'),
(35, 1, 1, 'Ok enjoy', '2019-04-17 03:50:02', '2019-04-17 03:50:02'),
(36, 1, 1, 'jhkhjk', '2019-04-17 03:50:53', '2019-04-17 03:50:53'),
(37, 1, 4, 'post from imran', '2019-04-17 03:52:54', '2019-04-17 03:52:54'),
(38, 1, 1, 'love', '2019-04-17 03:53:21', '2019-04-17 03:53:21'),
(39, 1, 4, 'sdsdsdsds', '2019-04-17 03:58:39', '2019-04-17 03:58:39'),
(40, 1, 4, 'dasdsadasdas 12', '2019-04-17 04:00:52', '2019-04-17 04:00:52'),
(41, 1, 4, 'hi tarikul', '2019-04-17 04:05:21', '2019-04-17 04:05:21'),
(42, 1, 4, 'new 121', '2019-04-17 04:09:36', '2019-04-17 04:09:36'),
(43, 1, 4, '2015', '2019-04-17 04:10:56', '2019-04-17 04:10:56'),
(44, 1, 4, 'maro guli 101', '2019-04-17 04:20:45', '2019-04-17 04:20:45'),
(45, 1, 4, '1205', '2019-04-17 04:30:22', '2019-04-17 04:30:22'),
(46, 3, 4, 'hi 101', '2019-04-17 04:32:10', '2019-04-17 04:32:10'),
(47, 3, 4, '11212 101', '2019-04-17 04:34:42', '2019-04-17 04:34:42'),
(48, 1, 4, 'abc 102', '2019-04-17 04:36:28', '2019-04-17 04:36:28'),
(49, 1, 4, '121212 101', '2019-04-17 04:37:22', '2019-04-17 04:37:22'),
(50, 1, 4, 'post from imran 101', '2019-04-17 04:38:43', '2019-04-17 04:38:43'),
(51, 2, 4, 'intoiit 101', '2019-04-17 04:39:51', '2019-04-17 04:39:51'),
(52, 1, 4, 'intoiit 105', '2019-04-17 04:40:29', '2019-04-17 04:40:29'),
(53, 1, 4, 'last test', '2019-04-17 04:45:56', '2019-04-17 04:45:56'),
(54, 1, 4, 'notification test', '2019-04-17 04:49:35', '2019-04-17 04:49:35'),
(55, 1, 1, 'love to comment', '2019-04-17 04:52:10', '2019-04-17 04:52:10'),
(56, 1, 4, 'hi', '2019-04-17 05:02:56', '2019-04-17 05:02:56'),
(57, 1, 4, 'yo', '2019-04-17 05:04:39', '2019-04-17 05:04:39'),
(58, 1, 4, 'hi', '2019-04-17 05:09:40', '2019-04-17 05:09:40'),
(59, 1, 4, 'yo', '2019-04-17 05:10:42', '2019-04-17 05:10:42'),
(60, 1, 4, 'hi', '2019-04-17 05:17:25', '2019-04-17 05:17:25'),
(61, 1, 4, 'hi', '2019-04-17 05:18:45', '2019-04-17 05:18:45'),
(62, 1, 4, 'hi', '2019-04-17 05:19:58', '2019-04-17 05:19:58'),
(63, 1, 4, '101', '2019-04-17 05:23:01', '2019-04-17 05:23:01'),
(64, 1, 4, '12', '2019-04-17 05:24:20', '2019-04-17 05:24:20'),
(65, 1, 4, '12', '2019-04-17 05:25:56', '2019-04-17 05:25:56'),
(66, 1, 4, '13', '2019-04-17 05:26:09', '2019-04-17 05:26:09'),
(67, 1, 4, '123456', '2019-04-17 05:30:11', '2019-04-17 05:30:11'),
(68, 1, 4, 'test', '2019-04-17 05:31:01', '2019-04-17 05:31:01'),
(69, 1, 4, 'pusher comment', '2019-04-17 05:31:27', '2019-04-17 05:31:27'),
(70, 1, 4, '1212', '2019-04-17 05:32:28', '2019-04-17 05:32:28');

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_04_09_125348_create_posts_table', 2),
(6, '2019_04_16_083106_create_comments_table', 3);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(255) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` longtext COLLATE utf8mb4_unicode_ci,
  `post_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `post`, `post_image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gala night', 'Ok', NULL, '2019-04-09 07:16:44', '2019-04-09 07:16:44'),
(2, 2, 'Gala night', 'Na laga', NULL, '2019-04-09 07:17:48', '2019-04-09 07:17:48'),
(3, 4, 'from imran', 'post', NULL, '2019-04-16 06:00:01', '2019-04-16 06:00:01'),
(4, 3, 'Gala night', 'Enojy buddy', '1556444397_203260274_9508_48F0DD4B690246F0B708B0B9ADF69640.jpg', '2019-04-28 03:33:18', '2019-04-28 03:33:18'),
(5, 4, 'Extempore speech', 'Try it', '1556444397_203260274_9508_48F0DD4B690246F0B708B0B9ADF69640.jpg', '2019-04-28 03:35:45', '2019-04-28 03:35:45'),
(6, 3, 'Extempore speech', 'Le kha', '1556444397_203260274_9508_48F0DD4B690246F0B708B0B9ADF69640.jpg', '2019-04-28 03:39:35', '2019-04-28 03:39:35'),
(7, 2, 'Extempore speech', 'Le kha', '1556444397_203260274_9508_48F0DD4B690246F0B708B0B9ADF69640.jpg', '2019-04-28 03:39:57', '2019-04-28 03:39:57'),
(8, 1, 'Check post', 'ok', '1556445294_human_1.jpg', '2019-04-28 03:54:54', '2019-04-28 03:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `profile_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `batch`, `phone`, `email_verified_at`, `password`, `status`, `profile_pic`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tarikul Islam', 'tarikul@intoiit.com', '2010', '01796248701', NULL, '$2y$10$YqBQWIXVrTAp5wFDNjz2eezPcvWS9w6kRbyWRaQPJngxzAtKznMxW', 0, '1547560638-DSC_5535.JPG', 'pRe2pHEdFEs9kq3y4z2Ke0unKsLvb66IJahfgW1VGOk8jPdDkCZ0hRFabBi8', '2019-01-15 07:57:18', '2019-01-15 07:58:31'),
(2, 'Shazan', 's@fgmail.com', '2010', '01676607687', NULL, '$2y$10$YqBQWIXVrTAp5wFDNjz2eezPcvWS9w6kRbyWRaQPJngxzAtKznMxW', 0, '1547632280-coloured-boy-design_1114-83.jpg', 'Alfyxscn1SCYm0ET6ioQOoj56k7CH3rPac5X1ytHSBmGrywUkjf0WLCV9Wd2', '2019-01-16 03:51:20', '2019-01-16 03:51:20'),
(3, 'dr ad', 'admin@gmail.com', '2009', '01232345', NULL, '$2y$10$MKauZ7O7QNBUWt2K49KvfOFyB7qng2mJQupxwvcD0SLryMpL/VCPi', 0, '1547634363-203260274_9508_48F0DD4B690246F0B708B0B9ADF69640.jpg', '7Gq8DALwnXRg1o8Slw6kzJ6BJ7Hir3uMEnBXzxbUDHwgxYVrEXqmXNB8f54o', '2019-01-16 04:26:03', '2019-01-16 04:26:03'),
(4, 'imran', 'imran@gmail.com', '2007', '01723535363', NULL, '$2y$10$RdVCjpDi4SoywbExDOSrKe5johcBFuzcf0uNefBhunTsMjZuufJMG', 0, '1555415963-ansr.png', 'G3svpubFesfsmBJkPS0erRzoyv4pWUf0bK3FhkQmfrsCXSaObXPAesST4JcY', '2019-04-16 05:59:23', '2019-04-16 05:59:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
