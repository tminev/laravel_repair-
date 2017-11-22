-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 05:26 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_repair`
--

-- --------------------------------------------------------

--
-- Table structure for table `autors`
--

CREATE TABLE `autors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `born_date` int(10) UNSIGNED NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `autors`
--

INSERT INTO `autors` (`id`, `name`, `born_date`, `city`, `bio`, `created_at`, `updated_at`) VALUES
(1, 'Иван Вазов', 1815, 'Сопот', 'jiglhg', NULL, '2017-11-21 12:26:33'),
(3, 'Каравелов', 1980, 'Калофер', 'isuhfkasfheeee', '2017-11-20 11:14:17', '2017-11-21 13:47:57'),
(5, 'Стефан Караджа', 1860, 'Враца', '', '2017-11-20 12:47:11', '2017-11-20 12:47:21'),
(7, 'Елин Пелин', 1910, 'софия', 'kshjgkshgkdhgkdlghj', '2017-11-21 11:43:25', '2017-11-21 12:26:44'),
(8, 'name2', 3242, 'siti', 'bio', '2017-11-21 12:45:06', '2017-11-22 13:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor_id` int(10) UNSIGNED NOT NULL,
  `total_pages` int(10) UNSIGNED NOT NULL,
  `photo_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `autor_id`, `total_pages`, `photo_path`, `created_at`, `updated_at`) VALUES
(2, 'book 2', 5, 1200, '', '2017-11-20 11:59:25', '2017-11-22 13:45:10'),
(4, 'book 2', 1, 500, '', '2017-11-20 12:41:40', '2017-11-20 12:41:40'),
(5, 'боок 3', 5, 40, '', '2017-11-20 12:48:23', '2017-11-20 12:48:32'),
(6, 'Book 1', 7, 200, '', '2017-11-21 11:43:55', '2017-11-21 11:43:55'),
(7, 'book 2', 7, 520, '', '2017-11-21 11:57:24', '2017-11-21 11:57:24');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_19_141209_autors', 2),
(6, '2014_10_12_000000_create_users_table', 4),
(8, '2017_11_19_141218_books', 5),
(10, '2017_11_21_081311_mybooks', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mybooks`
--

CREATE TABLE `mybooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `speed` int(11) DEFAULT NULL,
  `pages_read` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mybooks`
--

INSERT INTO `mybooks` (`id`, `user_id`, `book_id`, `speed`, `pages_read`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 10, 20, NULL, NULL),
(3, 2, 5, 40, 10, NULL, NULL),
(6, 1, 2, 10, 100, '2017-11-21 08:45:19', '2017-11-21 08:45:19'),
(13, 1, 5, 10, 2, '2017-11-21 09:42:19', '2017-11-21 14:18:47'),
(14, 1, 2, 10, 40, '2017-11-21 09:43:50', '2017-11-21 14:01:27'),
(19, 3, 4, 10, 100, '2017-11-21 14:32:36', '2017-11-21 14:32:49'),
(21, 4, 2, 10, 5, '2017-11-22 13:14:56', '2017-11-22 13:15:05'),
(23, 1, 4, NULL, NULL, '2017-11-22 13:20:23', '2017-11-22 13:20:23'),
(24, 4, 4, 100, 10, '2017-11-22 13:44:24', '2017-11-22 13:44:36');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tiho', 'tminev@abv.bg', '$2y$10$pTww9Hd/0OJLtfa1VGJssOG4o0lNw9Ziz2pmndSU3tTWm4ndEmWdS', 'admin', 'R9jNUdy3H6qcBz3L495eTZsBGdwOBWU3lhDzFzFlM6cdUiLU92mcLrDA1M1T', '2017-11-20 09:39:18', '2017-11-20 09:39:18'),
(2, 'gale', 'erty@abv.bg', '$2y$10$5cjRAgkRY7AFLj6Hy3oj.eII.EGrhsyVlXl/L0KLF5U4lhuRqQyBi', 'user', 'ysHhIkvhzyQ5C8lcVSk9RleNjl9cjKxeBZu1oosfBnpw6Z5wuEb4vmtJJNA6', '2017-11-20 09:48:12', '2017-11-20 09:48:12'),
(3, 'galq', 'galq@abv.bg', '$2y$10$u2fnt6uuXveLP/uhYMN/MuqL6fs7smMUILeTEaJOpYUk4ZiCHUQTe', 'user', NULL, '2017-11-21 14:32:23', '2017-11-21 14:32:23'),
(4, 'user', 'user@abv.bg', '$2y$10$P0ZYWR4isIIAeGnVXhmvWOvH35Anmtbg7aq11WnbogSYXNGbqXdii', 'user', '9evZ8g6nElVvpaH0osYLOtMaw3b0IVAb4IOIa1jQQmbJuTK3cm78lEXmq0ZW', '2017-11-22 12:43:54', '2017-11-22 12:43:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autors`
--
ALTER TABLE `autors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_autor_id_foreign` (`autor_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mybooks`
--
ALTER TABLE `mybooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mybooks_user_id_foreign` (`user_id`),
  ADD KEY `mybooks_book_id_foreign` (`book_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT for table `autors`
--
ALTER TABLE `autors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mybooks`
--
ALTER TABLE `mybooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_autor_id_foreign` FOREIGN KEY (`autor_id`) REFERENCES `autors` (`id`);

--
-- Constraints for table `mybooks`
--
ALTER TABLE `mybooks`
  ADD CONSTRAINT `mybooks_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `mybooks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
