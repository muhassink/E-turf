-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 11:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectturf`
--

-- --------------------------------------------------------

--
-- Table structure for table `addturves`
--

CREATE TABLE `addturves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addturves`
--

INSERT INTO `addturves` (`id`, `name`, `description`, `location`, `price`, `manager`, `status`, `created_at`, `updated_at`) VALUES
(1, 'soccer boy', 'good', 'ernakulam', '2000', '1', 'Available', NULL, NULL),
(2, 'messi', 'hvhv', 'tvm', '2500', '2', 'Available', NULL, NULL),
(4, 'ronaldo', 'good', 'kannur', '2000', '3', 'Available', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `usertype`, `created_at`, `updated_at`) VALUES
(1, 'muhsin@gmail.com', '123', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `description`, `file`, `created_at`, `updated_at`) VALUES
(3, 'hi', 'turf9.jpg', NULL, NULL),
(4, 'hello', 'ball.webp', NULL, '2022-08-25 03:47:47'),
(5, 'hi', 'turf12.jpg', NULL, NULL);

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
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(26, '2022_08_16_061608_create_regmanagers_table', 1),
(27, '2022_08_16_063912_create_regusers_table', 1),
(28, '2022_08_16_064527_create_admins_table', 1),
(29, '2022_08_16_092410_create_contactuses_table', 1),
(30, '2022_08_16_111340_create_galleries_table', 1),
(31, '2022_08_16_114507_create_addturves_table', 1),
(38, '2022_08_17_063111_create_addturves_table', 2),
(39, '2022_08_19_094844_create_turfbookings_table', 2),
(40, '2022_08_22_093304_create_payments_table', 3);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_on_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_card_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `booking_id`, `userid`, `name_on_card`, `credit_card_number`, `exp_month`, `exp_year`, `cvv`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', '1', 'muhassink', '1234567890', '12', '2102', '201', 'Pending', NULL, NULL),
(2, '4', '1', 'gchnggf', 'r rs grrdfdfb', 'dfb', 'dfb', 'bfd', 'Pending', NULL, NULL),
(3, '2', '1', 'muhassink', '123456789', '12', '2021', '123', 'Pending', NULL, NULL);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regmanagers`
--

CREATE TABLE `regmanagers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regmanagers`
--

INSERT INTO `regmanagers` (`id`, `name`, `contactnumber`, `email`, `password`, `location`, `status`, `created_at`, `updated_at`) VALUES
(1, 'appu', '9567541665', 'appu@gmail.com', '123', 'ernakulam', 'Aproved', NULL, '2022-08-21 04:52:45'),
(2, 'manu', '9567541665', 'manu@gmail.com', '123', 'tvm', 'Aproved', NULL, '2022-08-17 00:32:46'),
(3, 'jack', '9567541665', 'jack@gmail.com', '123', 'tvm', 'Aproved', NULL, '2022-08-17 04:45:05'),
(4, 'tony', '9567541665', 'tony@gmail.com', '123', 'ernakulam', 'Aproved', NULL, '2022-08-24 23:08:05'),
(5, 'abc', '9567541665', 'abc@gmail.com', '123', 'kannur', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `regusers`
--

CREATE TABLE `regusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regusers`
--

INSERT INTO `regusers` (`id`, `name`, `contactnumber`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'jhon', '9567541665', 'jhon@gmail.com', '123', NULL, NULL),
(2, 'kichu', '9567541665', 'kichu@gmail.com', '123', NULL, NULL),
(3, 'abc', '9567541665', 'abc@gmail.com', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `turfbookings`
--

CREATE TABLE `turfbookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `turf_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameturf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `turfbookings`
--

INSERT INTO `turfbookings` (`id`, `turf_id`, `nameturf`, `description`, `location`, `price`, `date`, `time`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'soccer boy', 'good', 'ernakulam', '2000', '2022-08-24', '13:30', '1', 'Aproved', NULL, '2022-08-25 05:50:12'),
(2, '2', 'messi', 'hvhv', 'tvm', '2500', '2024-05-12', '01:00', '1', 'payment recieved', NULL, '2022-08-24 23:39:44'),
(3, '3', 'neymar', 'very good', 'ernakulam', '2500', '2022-08-15', '17:10', '1', 'payment recieved', NULL, '2022-08-23 04:12:47'),
(4, '1', 'soccer boy', 'good', 'ernakulam', '2000', '2022-08-08', '17:13', '1', 'Aproved', NULL, '2022-08-25 05:50:07'),
(5, '1', 'soccer boy', 'good', 'ernakulam', '2000', '2022-08-08', '19:06', '2', 'pending', NULL, NULL);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `addturves`
--
ALTER TABLE `addturves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `regmanagers`
--
ALTER TABLE `regmanagers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regusers`
--
ALTER TABLE `regusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turfbookings`
--
ALTER TABLE `turfbookings`
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
-- AUTO_INCREMENT for table `addturves`
--
ALTER TABLE `addturves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regmanagers`
--
ALTER TABLE `regmanagers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `regusers`
--
ALTER TABLE `regusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `turfbookings`
--
ALTER TABLE `turfbookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
