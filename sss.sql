-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2016 at 12:24 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sss`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive_donations`
--

CREATE TABLE `archive_donations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` enum('cash','check') COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `office_id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `proccess_type` enum('edit','delete') COLLATE utf8_unicode_ci NOT NULL,
  `reason` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `archive_donations`
--

INSERT INTO `archive_donations` (`id`, `name`, `price`, `payment_method`, `user_id`, `date`, `office_id`, `cat_id`, `proccess_type`, `reason`, `created_at`, `updated_at`, `order_id`) VALUES
(1, 'mohamed', '3.LE', 'cash', 3, '2015-11-14T15:26:03+00:00', 2, 3, 'edit', 'jghgfkfdghdghdcjh', '2015-11-14 13:38:30', '2015-11-14 13:38:30', 1),
(2, 'mohamed1', '37.LE', 'check', 2, '2015-11-14T15:38:30+00:00', 1, 3, 'edit', 'سبب مجهوول<br>', '2015-11-14 13:40:15', '2015-11-14 13:40:15', 1),
(3, 'hdvjdfhj', 'ddddddddddd', 'cash', 2, '2015-12-14T11:10:15+00:00', 1, 3, 'delete', 'hhhhhhhhhh', '2016-03-14 11:13:16', '2016-03-14 11:13:16', 2),
(4, 'tesr', '765', 'check', 2, '2016-03-14T13:12:29+00:00', 2, 2, 'delete', 'hhhhh', '2016-03-14 11:14:18', '2016-03-14 11:14:18', 2),
(5, 'hhh', '123445', 'cash', 2, '2016-03-17T11:21:54+00:00', 1, 2, 'delete', 'حذف', '2016-03-18 10:03:32', '2016-03-18 10:03:32', 2),
(6, 'سعيد', '4343', 'cash', 2, '2016-03-17T11:22:35+00:00', 1, 2, 'edit', 'تعديل', '2016-03-18 10:50:31', '2016-03-18 10:50:31', 3),
(7, 'test', '3.LE', 'check', 4, '2015-11-15T19:13:11+00:00', 1, 2, 'delete', 'حذف', '2016-03-26 06:38:35', '2016-03-26 06:38:35', 5),
(8, 'احمد عادل', '1234445', 'check', 4, '2016-03-26T08:35:28+00:00', 1, 4, 'delete', 'حذف', '2016-05-30 18:53:21', '2016-05-30 18:53:21', 4);

-- --------------------------------------------------------

--
-- Table structure for table `catogreys`
--

CREATE TABLE `catogreys` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catogreys`
--

INSERT INTO `catogreys` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(2, 'الفقراء1', '2015-11-10 19:12:27', '2015-11-12 17:09:01'),
(3, 'الايتام', '2015-11-10 19:34:58', '2015-11-10 19:34:58'),
(4, 'مستشفى سرطان الاطفال', '2016-03-18 10:01:44', '2016-03-18 10:01:44'),
(5, 'الذكاه', '2016-03-26 06:45:34', '2016-03-26 06:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` enum('cash','check') COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `office_id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `name`, `price`, `payment_method`, `user_id`, `date`, `office_id`, `cat_id`, `created_at`, `updated_at`) VALUES
(6, 'محمد منير', '10000.LE', 'cash', 2, '2015-11-14T17:47:41+00:00', 1, 2, '2015-11-14 15:47:41', '2015-11-14 15:47:41'),
(9, 'سعيد', '4343', 'cash', 2, '2016-03-18T12:50:32+00:00', 2, 3, '2016-03-17 09:22:35', '2016-03-18 10:50:32'),
(10, 'محمدمنير', '987', 'cash', 2, '2016-03-17T11:26:56+00:00', 1, 2, '2016-03-17 09:26:56', '2016-03-17 09:26:56'),
(11, 'احمد شاكر', '224556', 'check', 2, '2016-03-18T12:40:35+00:00', 4, 4, '2016-03-18 10:40:35', '2016-03-18 10:40:35'),
(12, 'احمد شاكر', '2344', 'cash', 2, '01/01/1970 12:00:00 am', 3, 4, '2016-03-18 17:43:35', '2016-03-18 17:43:35'),
(13, 'mohamed mounir', '224556', 'cash', 2, '01/01/1970 12:00:00 am', 1, 2, '2016-03-18 17:52:36', '2016-03-18 17:52:36'),
(14, 'mohamed mounir', '2344', 'cash', 2, '01-01-1970', 3, 4, '2016-03-18 17:57:28', '2016-03-18 17:57:28'),
(16, 'محمد', '2222', 'cash', 2, '2016-05-30T21:14:20+00:00', 1, 2, '2016-05-30 19:14:20', '2016-05-30 19:14:20'),
(17, 'محمد', '12334', 'cash', 2, '2016-05-30 21:16:24', 1, 2, '2016-05-30 19:16:24', '2016-05-30 19:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2015_11_09_135442_create_offices_table', 1),
('2014_10_12_000000_create_users_table', 2),
('2015_11_07_191219_create_settings_table', 3),
('2015_11_09_145604_create_catogreys_table', 4),
('2015_11_09_150430_create_donations_table', 5),
('2015_11_14_122855_create_order_cats_table', 6),
('2015_11_14_141518_create_orders_table', 7),
('2015_11_14_144740_create_archive_donations_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `country`, `city`, `address`, `created_at`, `updated_at`) VALUES
(1, 'مصر', 'الجيزه', 'فيصل', '0000-00-00 00:00:00', '2016-05-30 18:49:40'),
(2, 'مصر', 'القاهره', 'شارع عباس العقاد', '2015-11-10 20:14:15', '2015-11-10 20:14:15'),
(3, ' السعودية', 'الرياض', 'شارع الملك فيصل', '2015-11-11 16:52:33', '2015-11-11 16:52:33'),
(4, 'مصر', 'بلبيس', 'شارع سعد  زغلول', '2016-03-17 09:28:13', '2016-03-17 09:28:13'),
(5, 'مصر', 'المنصوره', 'شارع سعد  زغلول', '2016-03-26 06:47:18', '2016-03-26 06:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `status` enum('open','close') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `title`, `content`, `user_id`, `cat_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'تعديل', 'تعديل', 2, 3, 'close', '2016-03-18 10:49:25', '2016-03-18 10:50:31'),
(4, 'عمليه حذف', 'حذف', 2, 4, 'close', '2016-03-23 13:13:07', '2016-05-30 18:53:21'),
(5, 'حذف', '&nbsp;لو سمحت ارجو حذف التيبرع&nbsp;', 4, 4, 'close', '2016-03-26 06:33:14', '2016-03-26 06:38:35'),
(6, 'تعديل اااا', 'تالتتتتت', 2, 4, 'open', '2016-05-17 12:35:47', '2016-05-30 19:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_cats`
--

CREATE TABLE `order_cats` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_cats`
--

INSERT INTO `order_cats` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'test22', '2015-11-14 10:49:46', '2015-11-14 14:37:21'),
(3, 'تعديل ', '2016-03-18 10:43:09', '2016-03-18 10:43:09'),
(4, 'حذف', '2016-03-18 10:43:20', '2016-03-18 10:43:20'),
(33, 'mohamed mounir', '2016-04-20 09:43:22', '2016-04-20 09:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_maintenance` int(11) NOT NULL,
  `site_register` int(11) NOT NULL,
  `site_auto_active` int(11) NOT NULL,
  `sitename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siteurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sitemail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `driver` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message_maintenance` longtext COLLATE utf8_unicode_ci NOT NULL,
  `site_smtp_host` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_smtp_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_smtp_port` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_smtp_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_maintenance`, `site_register`, `site_auto_active`, `sitename`, `siteurl`, `sitemail`, `driver`, `message_maintenance`, `site_smtp_host`, `site_smtp_email`, `site_smtp_port`, `site_smtp_pass`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 0, 'test name', 'http://localhost/ِAcharity', 'test@localhost', '', '', '', '', '', '', '2015-11-09 12:36:43', '2015-11-09 12:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pesonal_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pirthdata` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `digree` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `office_id` int(10) UNSIGNED NOT NULL,
  `level` enum('user','admin') COLLATE utf8_unicode_ci NOT NULL,
  `group_admin` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `country`, `city`, `address`, `pesonal_id`, `mobile_1`, `mobile_2`, `pirthdata`, `digree`, `office_id`, `level`, `group_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'mohamed', 'mohamedmounir703@gmail.com', '$2y$10$3GsXp1EcqGqXHS2AI2juXu0/gJOHC.JT81SaxYpkIoRgg0OOgZz2i', 'مصر', 'الشرقيه', 'شارع عباس العقاد', '1234567890', '123456789', '1234567890', '', 'علوم حاسب', 1, 'admin', 0, 'I17sTmYtdg5CAouw3J7RTeNdk2KudMplaSmdv3LrTCV4ORlhfJVPwvnF2Cwq', '2015-11-09 12:26:40', '2016-04-20 13:12:51'),
(3, 'محمد منيررشاد ', 'mohamedmoner@yahoo.com', '$2y$10$q3Z/ZYsIHpj.3si/6RunEOduAW32YnPJIP3UPrF6reEVPifH2/K.a', 'مصر', 'القاهره', 'شارع عباس العقاد', '1234567890', '123456789', '1234567890', '', 'علوم حاسب', 4, 'admin', 0, NULL, '2015-11-11 17:32:34', '2016-03-18 10:11:48'),
(4, 'محمد منير', 'mohamed@yahoo.com', '$2y$10$w8JntUxDQwuWOsp1sVofWeWbpt/Qjd0vGQxw5i/Sy/EJYH9y1uXVy', 'مصر', 'الشرقيه', 'شارع عباس العقاد', '1234567890', '123456789', '1234567890', '', 'علوم حاسب', 1, 'user', 0, 'mBVndhj9COuon60mY5PAWRb09217HggE3MqUT4mAByXcNmQYO8ehR0O1bRS7', '2015-11-15 14:00:13', '2016-03-26 08:32:34'),
(5, 'احمد عادل', 'ahmedadel@yahoo.com', '$2y$10$/RXkNtchIYpzAtnobFntN.0GcAxYZtuPzOWKpYRY6l00vbmhfBD4i', 'مصر', 'الجيزه', '22 شارع فيصل', '1324567898765', '1233446', '234455', '', 'علوم حاسب', 1, 'user', 0, 'tVVDl4n8IpGYJDTpgBTNAuep7GJZHRtdArSAc87KAXYDrvJZZCMj9CNQQxqf', '2016-03-26 06:44:32', '2016-03-26 08:22:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive_donations`
--
ALTER TABLE `archive_donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `archive_donations_office_id_foreign` (`office_id`),
  ADD KEY `archive_donations_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `catogreys`
--
ALTER TABLE `catogreys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donations_office_id_foreign` (`office_id`),
  ADD KEY `donations_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_cats`
--
ALTER TABLE `order_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_office_id_foreign` (`office_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive_donations`
--
ALTER TABLE `archive_donations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `catogreys`
--
ALTER TABLE `catogreys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order_cats`
--
ALTER TABLE `order_cats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `archive_donations`
--
ALTER TABLE `archive_donations`
  ADD CONSTRAINT `archive_donations_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `catogreys` (`id`),
  ADD CONSTRAINT `archive_donations_office_id_foreign` FOREIGN KEY (`office_id`) REFERENCES `offices` (`id`);

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `catogreys` (`id`),
  ADD CONSTRAINT `donations_office_id_foreign` FOREIGN KEY (`office_id`) REFERENCES `offices` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_office_id_foreign` FOREIGN KEY (`office_id`) REFERENCES `offices` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
