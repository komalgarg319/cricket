-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 04:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_one` bigint(20) UNSIGNED NOT NULL,
  `team_two` bigint(20) UNSIGNED NOT NULL,
  `winner` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `team_one`, `team_two`, `winner`, `created_at`, `updated_at`) VALUES
(26, 19, 20, 19, NULL, NULL),
(27, 19, 21, 19, NULL, NULL),
(28, 20, 21, 20, NULL, NULL),
(29, 19, 21, 19, NULL, NULL),
(30, 19, 20, 20, NULL, NULL),
(31, 19, 20, 19, NULL, NULL),
(32, 19, 20, 19, NULL, NULL),
(33, 19, 20, 20, NULL, NULL),
(34, 19, 20, 20, NULL, NULL),
(40, 21, 22, 0, NULL, NULL);

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2020_05_22_160117_create_teams_table', 1),
(16, '2020_05_22_162259_create_players_table', 1),
(17, '2020_05_22_170709_create_matches_table', 1),
(18, '2020_05_22_172548_create_points_table', 1),
(21, '2020_05_24_215037_add_winner_column_to_matches_table', 2),
(22, '2020_05_30_195840_create_password_resets_table', 2),
(23, '2014_10_12_100000_create_password_resets_table', 3),
(29, '2020_05_31_173340_add_winner_column_to_matches_table', 4),
(30, '2020_05_31_185551_add_team_points_to_teams_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vivekgiri36@gmail.com', '$2y$10$ZITZO85ofwbPi05wCO0Da.VLBrp00F2Cp9rUVKjB/MyyFLV86TWpq', '2020-05-31 18:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `player_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_history` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `team_id`, `first_name`, `last_name`, `player_image`, `country`, `player_history`, `created_at`, `updated_at`) VALUES
(16, 19, 'Anuj', 'garg', '1590965207.jpg', 'India', NULL, NULL, NULL),
(17, 19, 'komi', 'garr', '1590965273.jpg', 'sdsd', NULL, NULL, NULL),
(18, 20, 'test', 'dddd', '1590965302.jpg', 'pakkkkk', NULL, NULL, NULL),
(19, 20, 'Keshav', 'garg', '1590965368.jpg', 'malaysia', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `match_id` bigint(20) UNSIGNED NOT NULL,
  `player_id` bigint(20) UNSIGNED NOT NULL,
  `player_points` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `match_id`, `player_id`, `player_points`, `created_at`, `updated_at`) VALUES
(57, 26, 16, 172, NULL, NULL),
(58, 26, 17, 152, NULL, NULL),
(59, 26, 18, 152, NULL, NULL),
(60, 26, 19, 138, NULL, NULL),
(61, 27, 16, 168, NULL, NULL),
(62, 27, 17, 57, NULL, NULL),
(63, 28, 18, 125, NULL, NULL),
(64, 28, 19, 103, NULL, NULL),
(65, 29, 16, 222, NULL, NULL),
(66, 29, 17, 113, NULL, NULL),
(67, 30, 16, 143, NULL, NULL),
(68, 30, 17, 4, NULL, NULL),
(69, 30, 18, 230, NULL, NULL),
(70, 30, 19, 230, NULL, NULL),
(71, 31, 16, 156, NULL, NULL),
(72, 31, 17, 163, NULL, NULL),
(73, 31, 18, 53, NULL, NULL),
(74, 31, 19, 38, NULL, NULL),
(75, 32, 16, 152, NULL, NULL),
(76, 32, 17, 174, NULL, NULL),
(77, 32, 18, 93, NULL, NULL),
(78, 32, 19, 28, NULL, NULL),
(79, 33, 16, 79, NULL, NULL),
(80, 33, 17, 143, NULL, NULL),
(81, 33, 18, 27, NULL, NULL),
(82, 33, 19, 235, NULL, NULL),
(83, 34, 16, 97, NULL, NULL),
(84, 34, 17, 5, NULL, NULL),
(85, 34, 18, 126, NULL, NULL),
(86, 34, 19, 139, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_points` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_name`, `team_logo`, `club_state`, `team_points`, `created_at`, `updated_at`) VALUES
(19, 'india', '1590963854.jpg', 'Delhi', 5, NULL, NULL),
(20, 'pak', '1590963913.jpg', 'noida', 4, NULL, NULL),
(21, 'Australia', '1590965174.jpg', 'jaipur', 0, NULL, NULL),
(22, 'America', '1590966747.jpg', 'xyz', 0, NULL, NULL),
(23, 'New zealand', '1590968634.jpg', 'xyz', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'komal', 'komal@gmail.com', NULL, '$2y$10$WrUcOZ.VE2u2ReP6okGAWu3D53NfkU1rbnqkaBJc0N0DF3pwtrh86', NULL, '2020-05-30 16:38:41', '2020-05-30 16:38:41'),
(2, 'vivek', 'kim@gmail.com', NULL, '$2y$10$bpgHqcMA9AICr4jO6xy8BuG09Wy9ooucpJglz97ZKd9DdLv3yS6t6', NULL, '2020-05-31 16:52:05', '2020-05-31 16:52:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matches_team_one_foreign` (`team_one`),
  ADD KEY `matches_team_two_foreign` (`team_two`);

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
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `players_team_id_foreign` (`team_id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `points_match_id_foreign` (`match_id`),
  ADD KEY `points_player_id_foreign` (`player_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_team_one_foreign` FOREIGN KEY (`team_one`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `matches_team_two_foreign` FOREIGN KEY (`team_two`) REFERENCES `teams` (`id`);

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `points_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `matches` (`id`),
  ADD CONSTRAINT `points_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
