-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 11:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_foodwasteproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('0716d9708d321ffb6a00818614779e779925365c', 'i:1;', 1712161808),
('0716d9708d321ffb6a00818614779e779925365c:timer', 'i:1712161808;', 1712161808),
('1574bddb75c78a6fd2251d61e2993b5146201319', 'i:1;', 1712136738),
('1574bddb75c78a6fd2251d61e2993b5146201319:timer', 'i:1712136738;', 1712136738),
('17ba0791499db908433b80f37c5fbc89b870084b', 'i:1;', 1712161829),
('17ba0791499db908433b80f37c5fbc89b870084b:timer', 'i:1712161829;', 1712161829),
('1b6453892473a467d07372d45eb05abc2031647a', 'i:6;', 1711732424),
('1b6453892473a467d07372d45eb05abc2031647a:timer', 'i:1711732424;', 1711732424),
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1711786190),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1711786190;', 1711786190),
('77de68daecd823babbb58edb1c8e14d7106e83bb', 'i:2;', 1711732202),
('77de68daecd823babbb58edb1c8e14d7106e83bb:timer', 'i:1711732202;', 1711732202),
('7b52009b64fd0a2a49e6d8a939753077792b0554', 'i:1;', 1712136229),
('7b52009b64fd0a2a49e6d8a939753077792b0554:timer', 'i:1712136229;', 1712136229),
('9e6a55b6b4563e652a23be9d623ca5055c356940', 'i:1;', 1712161941),
('9e6a55b6b4563e652a23be9d623ca5055c356940:timer', 'i:1712161941;', 1712161941),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'i:2;', 1711732560),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4:timer', 'i:1711732560;', 1711732560),
('admin@gmail.com|127.0.0.1', 'i:3;', 1712134801),
('admin@gmail.com|127.0.0.1:timer', 'i:1712134801;', 1712134801),
('b3f0c7f6bb763af1be91d9e74eabfeb199dc1f1f', 'i:1;', 1712220496),
('b3f0c7f6bb763af1be91d9e74eabfeb199dc1f1f:timer', 'i:1712220496;', 1712220496),
('buyer@gmail.com|127.0.0.1', 'i:1;', 1712135632),
('buyer@gmail.com|127.0.0.1:timer', 'i:1712135632;', 1712135632),
('buyer10@gmail.com|127.0.0.1', 'i:4;', 1712149487),
('buyer10@gmail.com|127.0.0.1:timer', 'i:1712149487;', 1712149487),
('c1dfd96eea8cc2b62785275bca38ac261256e278', 'i:3;', 1711732628),
('c1dfd96eea8cc2b62785275bca38ac261256e278:timer', 'i:1711732628;', 1711732628),
('da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:2;', 1711733360),
('da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1711733360;', 1711733360),
('f1abd670358e036c31296e66b3b66c382ac00812', 'i:1;', 1712136405),
('f1abd670358e036c31296e66b3b66c382ac00812:timer', 'i:1712136405;', 1712136405),
('seller1@gmail.com|127.0.0.1', 'i:2;', 1712073526),
('seller1@gmail.com|127.0.0.1:timer', 'i:1712073526;', 1712073526),
('seller3@gmail.com|127.0.0.1', 'i:3;', 1712073462),
('seller3@gmail.com|127.0.0.1:timer', 'i:1712073462;', 1712073462),
('test10@gmail.com|127.0.0.1', 'i:2;', 1712136777),
('test10@gmail.com|127.0.0.1:timer', 'i:1712136777;', 1712136777);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` char(36) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` char(36) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_messages`
--

INSERT INTO `ch_messages` (`id`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
('547b51ac-482d-4bda-8377-e13c61828c53', 18, 17, 'halo', NULL, 1, '2024-04-03 09:59:29', '2024-04-03 10:31:28'),
('80f814a6-581f-45d1-b157-9635ef34934b', 17, 18, 'mon', NULL, 0, '2024-04-03 10:31:31', '2024-04-03 10:31:31'),
('aa88b2b2-2fbf-45e8-a38b-6c3453cda936', 18, 17, 'halo', NULL, 1, '2024-04-03 10:04:13', '2024-04-03 10:31:28'),
('ae222344-c556-4ec8-a320-ea3c1826c3cc', 18, 17, 'va&#039;', NULL, 1, '2024-04-03 10:12:19', '2024-04-03 10:31:28'),
('c3ee0914-2e19-46e7-bc7e-33ffdcee57a6', 18, 17, 'mon', NULL, 1, '2024-04-03 10:05:17', '2024-04-03 10:31:28'),
('c50b7e55-147e-4c40-91e2-42e63460f16f', 18, 17, 'mon', NULL, 1, '2024-04-03 10:12:17', '2024-04-03 10:31:28'),
('cba6f3f9-323b-4ad4-96e8-5178fbd5b05e', 17, 18, 'halo mon', NULL, 1, '2024-04-03 09:32:32', '2024-04-03 09:59:24'),
('d6ccc6f9-1477-4cb2-875a-e78a062ed995', 18, 17, 'va', NULL, 1, '2024-04-03 10:12:20', '2024-04-03 10:31:28');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(22, '0001_01_01_000000_create_users_table', 1),
(23, '0001_01_01_000001_create_cache_table', 1),
(24, '0001_01_01_000002_create_jobs_table', 1),
(25, '2024_03_27_095515_create_permission_tables', 1),
(26, '2024_03_28_082252_create_sellerprofiles_table', 1),
(30, '2024_04_02_103017_produk', 2),
(37, '2024_04_03_999999_add_active_status_to_users', 9),
(38, '2024_04_03_999999_add_avatar_to_users', 10),
(39, '2024_04_03_999999_add_dark_mode_to_users', 11),
(40, '2024_04_03_999999_add_messenger_color_to_users', 12),
(41, '2024_04_03_999999_create_chatify_favorites_table', 13),
(42, '2024_04_03_999999_create_chatify_messages_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 17),
(3, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 18);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'tambah-user', 'web', '2024-03-29 10:03:12', '2024-03-29 10:03:12'),
(2, 'edit-user', 'web', '2024-03-29 10:03:12', '2024-03-29 10:03:12'),
(3, 'hapus-user', 'web', '2024-03-29 10:03:12', '2024-03-29 10:03:12'),
(4, 'lihat-user', 'web', '2024-03-29 10:03:12', '2024-03-29 10:03:12'),
(5, 'tambah-produk', 'web', '2024-03-29 10:03:12', '2024-03-29 10:03:12'),
(6, 'hapus-produk', 'web', '2024-03-29 10:03:12', '2024-03-29 10:03:12'),
(7, 'lihat-produk', 'web', '2024-03-29 10:03:12', '2024-03-29 10:03:12'),
(8, 'edit-produk', 'web', '2024-03-29 10:03:12', '2024-03-29 10:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-03-29 10:03:12', '2024-03-29 10:03:12'),
(2, 'buyer', 'web', '2024-03-29 10:03:12', '2024-03-29 10:03:12'),
(3, 'seller', 'web', '2024-03-29 10:03:12', '2024-03-29 10:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 3),
(6, 3),
(7, 2),
(7, 3),
(8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sellerprofiles`
--

CREATE TABLE `sellerprofiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `foto_profil_toko` varchar(255) NOT NULL,
  `alamat_toko` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellerprofiles`
--

INSERT INTO `sellerprofiles` (`id`, `user_id`, `nama_toko`, `foto_profil_toko`, `alamat_toko`, `created_at`, `updated_at`) VALUES
(1, 1, 'popo', '1tDTxtALm5YaiEyJA41B9zVLB8xqbvBKy2fIOrIr.jpg', 'jalan  jalan ke kota padang', '2024-03-29 10:05:13', '2024-03-29 10:05:13'),
(2, 2, 'aa', 'tOsuw2JytKVYsis8qSXEIgSwQuvyxpD84gdZswno.jpg', 'bonpolo', '2024-03-29 10:09:32', '2024-03-29 10:09:32'),
(3, 3, 'faisal beli  yang sopan', 'GsdsfiqxVIKkLpXTTryLlXYyklap6HqryayIjM0P.png', 'faisal faisal', '2024-03-29 10:11:09', '2024-03-29 10:11:09'),
(4, 2, 'dontolkuda', 'o5b2bicIxvZql5ew4LNtp5GkpU6L2AK2GoIBZd15.jpg', 'yourmom', '2024-03-29 10:12:26', '2024-03-29 10:12:26'),
(5, 6, 'semek faisal', 'r3x9OLmuLvNBquXrEukzIm8FdVheOW0SgUsAXeQS.jpg', 'kemek remon', '2024-03-29 10:18:03', '2024-03-29 10:18:03'),
(6, 11, 'Hahaha', '240402102411.jpg', 'test 11', '2024-03-30 23:43:32', '2024-04-02 03:24:11'),
(7, 18, 'beli', 'ivCrwRQFO6tmgjoF1oG6aVegfOngTTlZZ4ECC3su.jpg', 'asfas', '2024-04-03 09:30:31', '2024-04-03 09:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_restoran` varchar(255) NOT NULL,
  `alamat_prov` varchar(255) NOT NULL,
  `alamat_kab/kota` varchar(255) NOT NULL,
  `alamat_detail` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` char(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0KvogFUt9eX3iqXPwq5vIFdEgNdduOtp4cl75p0j', 11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWHR4Q0w3akVsQURaenA5YVJIQnh2T2JBSFc2SmN6YzhLNGt3R1NjVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90YW1iYWhwcm9kdWsiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMTt9', 1712165658),
('3CvSmL36vfnSGlPSFb8iCg6DKqGnxMinyR75Ghcw', 19, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVE9vSm9nQ1JiNzdvN3ZWNnR1eDJWZkF6bXJhbHJsNGdueDJHVHZYUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxOTtzOjM6InVybCI7YTowOnt9fQ==', 1712220437),
('9Li7EcXHvvIYNTytloBZbxfDpKlztKb9WLegfRnK', 17, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY0hWNDRLbEpNT0Z0ZEtHYTNNeHF6QlJxYXdZdjYxMXRBMEhFUHM3QyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGF0aWZ5LzE3Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTc7czozOiJ1cmwiO2E6MDp7fX0=', 1712166118),
('BJpxGRre3fsCPVZC2OshJSF1SeKqfIEqOKPcMLsQ', 11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaVBQOGl2b0hEOTY5ZDlScDJVRzN0RzZPNVlrRThkcTV1b0tWV3Z0USI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWx0b2tvIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTE7fQ==', 1712165873),
('dAAjmHBVpimA0m4qgskHtE51OHQdxyNp4rFySNqN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 Edg/123.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTkt4cERZdTlNMXFKbXNTTHRubEswVFpHOXBjb2k4d0xiRnoxa3laaiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoxNzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC92ZXJpZnktZW1haWwvMTcvNWI2NjUyOTk3NGFjYWNjOThlYmQ4OTUxMjQ1OTQ1Yzg4YjVmOTc4YT9leHBpcmVzPTE3MTIxNjUyOTgmc2lnbmF0dXJlPTdmZDIyYWIzMmU2NmI4MzQ3ZWVlZjdjMDJjNTcyNGJkMDIyNTc3YWNiMzI4OGI3NzA2ZGFhODA4MzQ5YmRmNjIiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1712161729),
('MXiPF45HsOPsdZUtiNYXRoRbnhLUKkslUKdwpnqh', 18, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiS1hGbWR6bXY2MmZkaktKZmZKem5jenVrNVlscHdQZThiemFyM1MycCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGF0aWZ5LzE3Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTg7czozOiJ1cmwiO2E6MDp7fX0=', 1712166117);

-- --------------------------------------------------------

--
-- Table structure for table `tabelproduk`
--

CREATE TABLE `tabelproduk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `detail_produk` varchar(255) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabelproduk`
--

INSERT INTO `tabelproduk` (`id`, `seller_id`, `nama_produk`, `foto_produk`, `detail_produk`, `harga_produk`, `created_at`, `updated_at`) VALUES
(1, 11, 'qe', '240403100134.jpg', 'qwe', 123, '2024-04-03 03:01:34', '2024-04-03 03:01:34'),
(2, 11, 'FZFADE21', '240403102016.jpg', '69', 69, '2024-04-03 03:20:16', '2024-04-03 03:20:16'),
(3, 11, 'asd', '240403051618.jpg', '11', 11, '2024-04-03 10:16:18', '2024-04-03 10:16:18'),
(4, 11, 'testat', '240403051816.jpg', '14124', 11, '2024-04-03 10:18:16', '2024-04-03 10:18:16'),
(5, 11, 'testat', '240403051847.jpg', 'oasjd', 11, '2024-04-03 10:18:48', '2024-04-03 10:18:48'),
(6, 11, '1313', '240403052002.jpg', '123123', 99, '2024-04-03 10:20:02', '2024-04-03 10:20:02'),
(7, 11, '1313', '240403052002.jpg', '123123', 99, '2024-04-03 10:20:02', '2024-04-03 10:20:02'),
(8, 11, '1241', '240403052150.jpg', '123213', 919191, '2024-04-03 10:21:50', '2024-04-03 10:21:50'),
(9, 18, 'remon anak ayam', '240403052307.jpg', 'ayam enak ayam kampus', 901111, '2024-04-03 10:23:07', '2024-04-03 10:23:07'),
(10, 11, 'es teh basi', '240403053310.jpg', 'es teh ini sangat enak', 3000, '2024-04-03 10:33:10', '2024-04-03 10:33:10');

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
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `active_status`, `avatar`, `dark_mode`, `messenger_color`) VALUES
(1, 'SELLER', 'seller@gmail.com', NULL, '$2y$12$ZBXR4HYLMHqaxf1I8sftI.FUlvNrOlSNF7PHq9Tu176h0Lc2C46wC', NULL, '2024-03-29 10:04:08', '2024-03-29 10:04:08', 0, 'avatar.png', 0, NULL),
(2, 'faizal', 'faizal@gmail.com', '2024-03-29 10:28:38', '$2y$12$.aY8NFGI2Bm56KtBoppPTuP3zvTcivUrw7YmzkYEkv.sJS3/1tnTe', NULL, '2024-03-29 10:04:40', '2024-03-29 10:28:38', 0, 'avatar.png', 0, NULL),
(3, 'aa', 'seller1@gmail.com', '2024-03-29 10:09:03', '$2y$12$79UL.qA0WXOdJtzl0RNqTuyEYcoHGxdSPQFx9Ar1vabIcxF/M4DoK', NULL, '2024-03-29 10:08:56', '2024-03-29 10:09:03', 0, 'avatar.png', 0, NULL),
(4, 'Xebnr4jcz', 'buyer@gmail.com', '2024-03-29 10:13:00', '$2y$12$fd/DUI1q0P2kZShQ6BXJre/ikEoQWJ21ZnDQ4M6fK3ekyfkIv4Vy6', NULL, '2024-03-29 10:12:40', '2024-03-29 10:13:00', 0, 'avatar.png', 0, NULL),
(5, 'asdsa', 'seller2@gmail.com', '2024-03-29 10:15:00', '$2y$12$4nbLKrSWK0WBB5g/P0w3u.1cREubYGqfpHKlZ4ntpKBP4/99Dm5HW', NULL, '2024-03-29 10:14:53', '2024-03-29 10:15:00', 0, 'avatar.png', 0, NULL),
(6, '22', 'seller3@gmail.com', '2024-03-29 10:16:15', '$2y$12$BrPMAosEAxfrF/vlpd4wou6fz0.XrW4MrMACX5YlfqEIqbHXAyOX.', NULL, '2024-03-29 10:16:04', '2024-03-29 10:16:15', 0, 'avatar.png', 0, NULL),
(7, 'seller4', 'seller4@gmail.com', NULL, '$2y$12$mOrkE0bLlAglRfRKwTMV/uKeJ.3VeVMZhZSEDq7uxRIS2PN2MBlMe', NULL, '2024-03-30 01:56:48', '2024-03-30 01:56:48', 0, 'avatar.png', 0, NULL),
(8, 'seller4', 'seller5@gmail.com', NULL, '$2y$12$mTzfSAuhzNJyVHW9p5rAe.bucs7NGyUjYfutOTkUN4yJ8OKehshkC', NULL, '2024-03-30 01:59:10', '2024-03-30 01:59:10', 0, 'avatar.png', 0, NULL),
(9, 'seller99', 'seller99@gmail.com', NULL, '$2y$12$cdNQ8b20lLo8Wg3TsX5ob.xMzosHCvbNVCTXcxJlsgeXPHi7SWrDW', NULL, '2024-03-30 02:17:52', '2024-03-30 02:17:52', 0, 'avatar.png', 0, NULL),
(11, 'remon', 'seller10@gmail.com', '2024-03-30 23:44:43', '$2y$12$8Vyd3y9dRF/kpoPFp2iy5ud.Y86y9YQNa2tpsuC3nTo.SVqeNTpLi', 'uyGGvpXMrNqJj1Xc3366Sk9IoAufOpDhJzUBJY01RIj331PaowTurOAJRChJ', '2024-03-30 23:43:19', '2024-04-03 09:29:26', 1, 'avatar.png', 0, NULL),
(12, 'b', 'b@gmail.com', NULL, '$2y$12$zMrwXSHliVXndJqsrphKmOBXG6wgyBb9X5FNNVyU/1x6Hj5SFmGe.', NULL, '2024-04-03 01:51:10', '2024-04-03 01:51:10', 0, 'avatar.png', 0, NULL),
(13, 'buyer1', 'buyer1@gmail.com', NULL, '$2y$12$74mgA1AFnQIrVwuraYsuTe5KCZkYKNYBIrUawY.pjw2vrD.XyTyDC', NULL, '2024-04-03 02:04:28', '2024-04-03 02:04:28', 0, 'avatar.png', 0, NULL),
(14, 'hahhahe', 'haha@gmail.com', NULL, '$2y$12$kzvVATJEpO1mSH57Gjpbgej2n3wpKWvztrltQ9gxV4DOCEn9.dnMC', NULL, '2024-04-03 02:22:32', '2024-04-03 02:22:32', 0, 'avatar.png', 0, NULL),
(15, 'testbuyer', 'testbuyer@gmail.com', '2024-04-03 02:25:45', '$2y$12$NLr.JMjWVulAhAd0m5GAj.ZDjgOOeCjdQQxnEZSs41eLuNVU0/7zm', NULL, '2024-04-03 02:25:23', '2024-04-03 02:25:45', 0, 'avatar.png', 0, NULL),
(16, 'haha', 'testbuyer10@gmail.com', '2024-04-03 02:31:18', '$2y$12$Ht7QxHvIHHNaaqWyAbFzOuov7.C0J0kbuHv8jUVGOErbXyLfu8TSa', NULL, '2024-04-03 02:30:39', '2024-04-03 09:02:36', 0, 'avatar.png', 0, NULL),
(17, 'arva', 'arva@gmail.com', '2024-04-03 09:29:08', '$2y$12$PnHS.xYC5dGSIFtaFE1nP.D2DmweE6dcEBpMzdZUdEiOt6i3rGXW6', NULL, '2024-04-03 09:28:17', '2024-04-03 10:30:50', 1, 'avatar.png', 0, '#00BCD4'),
(18, 'raymond', 'raymond@gmail.com', '2024-04-03 09:31:21', '$2y$12$R2rkbLqfB.umxPbkSmv9je.LHEtwcOjnCtS4xj8IPdBiC4wFOgiDa', NULL, '2024-04-03 09:30:31', '2024-04-03 10:41:57', 1, 'avatar.png', 0, NULL),
(19, 'sayabeli', 'sayabeli@gmail.com', '2024-04-04 01:47:16', '$2y$12$sWUaWlPTB1xBCBffrtWm8OVe4BzXaVoX/IP4ZIPgmyqYWlKmtU96q', NULL, '2024-04-04 01:46:39', '2024-04-04 01:47:16', 0, 'avatar.png', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sellerprofiles`
--
ALTER TABLE `sellerprofiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sellerprofiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sellers_email_unique` (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tabelproduk`
--
ALTER TABLE `tabelproduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tabelproduk_seller_id_foreign` (`seller_id`);

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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sellerprofiles`
--
ALTER TABLE `sellerprofiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabelproduk`
--
ALTER TABLE `tabelproduk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sellerprofiles`
--
ALTER TABLE `sellerprofiles`
  ADD CONSTRAINT `sellerprofiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tabelproduk`
--
ALTER TABLE `tabelproduk`
  ADD CONSTRAINT `tabelproduk_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
