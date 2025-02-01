-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2025 at 08:51 PM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `seat_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qr_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"uuid\":\"f0fee1f6-8842-4f70-ab99-e663509b1553\",\"displayName\":\"App\\\\Mail\\\\TicketBooked\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:21:\\\"App\\\\Mail\\\\TicketBooked\\\":3:{s:6:\\\"ref_no\\\";s:14:\\\"uid24BW51I83uZ\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:20:\\\"devhel2019@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1738172625, 1738172625),
(2, 'default', '{\"uuid\":\"34838bd1-37e7-4a77-ae2b-73b93713edc7\",\"displayName\":\"App\\\\Mail\\\\TicketBooked\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:21:\\\"App\\\\Mail\\\\TicketBooked\\\":3:{s:6:\\\"ref_no\\\";s:14:\\\"uid2DPqXYrmuNK\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:20:\\\"devhel2019@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1738172696, 1738172696),
(3, 'default', '{\"uuid\":\"708ac0af-49cd-437e-87e5-80ac8dcf01bc\",\"displayName\":\"App\\\\Mail\\\\TicketBooked\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:21:\\\"App\\\\Mail\\\\TicketBooked\\\":3:{s:6:\\\"ref_no\\\";s:14:\\\"uid2TFw7C6feLf\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:20:\\\"devhel2019@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1738173500, 1738173500),
(4, 'default', '{\"uuid\":\"3b6844fa-0d26-4054-b20b-82b97b1a2b3b\",\"displayName\":\"App\\\\Mail\\\\TicketBooked\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:21:\\\"App\\\\Mail\\\\TicketBooked\\\":3:{s:6:\\\"ref_no\\\";s:14:\\\"uid24KRk87gHTh\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:20:\\\"devhel2019@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1738173742, 1738173742),
(5, 'default', '{\"uuid\":\"f72d22ca-4679-4ba5-b8bc-2f0e30535b05\",\"displayName\":\"App\\\\Mail\\\\TicketPaid\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:19:\\\"App\\\\Mail\\\\TicketPaid\\\":3:{s:6:\\\"ref_no\\\";s:14:\\\"uid24BW51I83uZ\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:20:\\\"devhel2019@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1738177712, 1738177712),
(6, 'default', '{\"uuid\":\"48ef895e-8082-452b-85ae-87da61dd093f\",\"displayName\":\"App\\\\Mail\\\\TicketBooked\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:21:\\\"App\\\\Mail\\\\TicketBooked\\\":3:{s:6:\\\"ref_no\\\";s:14:\\\"uid23dAIYInxD6\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:20:\\\"devhel2019@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1738180025, 1738180025);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_09_03_164821_create_seats_table', 1),
(7, '2024_09_06_133534_create_bookings_table', 1),
(8, '2024_09_16_203249_create_jobs_table', 1),
(9, '2024_10_06_145003_create_sessions_table', 1),
(10, '2024_10_06_145545_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'edit content', 'admin', '2024-10-06 14:47:53', '2024-10-06 14:47:53');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2024-10-06 14:47:53', '2024-10-06 14:47:53');

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
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `x_factor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `y_factor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_g` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_f` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `ref_no`, `x_factor`, `y_factor`, `status_g`, `status_f`, `created_at`, `updated_at`) VALUES
(1, '1-17esaGoHikT', '1', '1', '0', '0', NULL, NULL),
(2, '1-2cFrUt7C4Vl', '1', '2', '0', '0', NULL, NULL),
(3, '1-3XWmN0JvEqz', '1', '3', '0', '0', NULL, NULL),
(4, '1-4AGvYfvagxT', '1', '4', '0', '0', NULL, NULL),
(5, '1-501CbetlNuP', '1', '5', '0', '0', NULL, NULL),
(6, '1-664gOKvSbHi', '1', '6', '0', '0', NULL, NULL),
(7, '1-7FkROAq84j1', '1', '7', '0', '0', NULL, NULL),
(8, '1-8PrcV7L5hLb', '1', '8', '0', '0', NULL, NULL),
(9, '1-90IrQgbDKhN', '1', '9', '0', '0', NULL, NULL),
(10, '1-105kJcN13Tbe', '1', '10', '0', '0', NULL, NULL),
(11, '1-11IddsbKhlXZ', '1', '11', '0', '0', NULL, NULL),
(12, '1-12XG5PxZ91Mj', '1', '12', '0', '0', NULL, NULL),
(13, '1-13SfmrsWMinN', '1', '13', '0', '0', NULL, NULL),
(14, '1-148hd5UIr65V', '1', '14', '0', '0', NULL, NULL),
(15, '1-15hkJiaxOnSf', '1', '15', '0', '0', NULL, NULL),
(16, '1-16KNAYrvFYz7', '1', '16', '0', '0', NULL, NULL),
(17, '1-1783VDJU7dmA', '1', '17', '0', '0', NULL, NULL),
(18, '1-18atd8srffs5', '1', '18', '0', '0', NULL, NULL),
(19, '1-193QDOP7WcgR', '1', '19', '0', '0', NULL, NULL),
(20, '1-20Z7KDYnYIQD', '1', '20', '0', '0', NULL, NULL),
(21, '1-21BkTw3DNUP2', '1', '21', '0', '0', NULL, NULL),
(22, '1-226jf1g5J1Fz', '1', '22', '0', '0', NULL, NULL),
(23, '1-23kIX5XRQArU', '1', '23', '0', '0', NULL, NULL),
(24, '1-247BgMHZacUV', '1', '24', '0', '0', NULL, NULL),
(25, '1-25kFnGiF71UX', '1', '25', '0', '0', NULL, NULL),
(26, '1-26QslJKErpRb', '1', '26', '0', '0', NULL, NULL),
(27, '1-2751o4PENHw3', '1', '27', '0', '0', NULL, NULL),
(28, '1-28MQJ81SlMab', '1', '28', '0', '0', NULL, NULL),
(29, '1-29XQM1CceODe', '1', '29', '0', '0', NULL, NULL),
(30, '1-30PWv7Leb9Aj', '1', '30', '0', '0', NULL, NULL),
(31, '1-31fRyudkk9we', '1', '31', '0', '0', NULL, NULL),
(32, '1-32qVnl3DXajq', '1', '32', '0', '0', NULL, NULL),
(33, '1-331c6mvOf9Kc', '1', '33', '0', '0', NULL, NULL),
(34, '1-34m4cGYQ4TYF', '1', '34', '0', '0', NULL, NULL),
(35, '1-35XEkzTCgNpz', '1', '35', '0', '0', NULL, NULL),
(36, '1-36KmbVyI9Xk3', '1', '36', '0', '0', NULL, NULL),
(37, '1-37a3EAtJU8x6', '1', '37', '0', '0', NULL, NULL),
(38, '1-38KGgpsrIKPH', '1', '38', '0', '0', NULL, NULL),
(39, '1-39iRq2qZsRdM', '1', '39', '0', '0', NULL, NULL),
(40, '2-15V8Rrq3KcE', '2', '1', '0', '0', NULL, NULL),
(41, '2-2S1XypK21CD', '2', '2', '0', '0', NULL, NULL),
(42, '2-3YXRtVF3Sd8', '2', '3', '0', '0', NULL, NULL),
(43, '2-4eDgRkdvQRM', '2', '4', '0', '0', NULL, NULL),
(44, '2-5cKVC6aTtwX', '2', '5', '0', '0', NULL, NULL),
(45, '2-6egZ9grMU11', '2', '6', '0', '0', NULL, NULL),
(46, '2-7WEJvdRLhqg', '2', '7', '0', '0', NULL, NULL),
(47, '2-83A5sedqisD', '2', '8', '0', '0', NULL, NULL),
(48, '2-9rlWBSxH60T', '2', '9', '0', '0', NULL, NULL),
(49, '2-103EKvPiRHr9', '2', '10', '0', '0', NULL, NULL),
(50, '2-11zL2SajrSgJ', '2', '11', '0', '0', NULL, NULL),
(51, '2-12siRvg28tnp', '2', '12', '0', '0', NULL, NULL),
(52, '2-13nt4rFG0j9k', '2', '13', '0', '0', NULL, NULL),
(53, '2-14o6Ng24IlLT', '2', '14', '0', '0', NULL, NULL),
(54, '2-15bDkQG9RTyi', '2', '15', '0', '0', NULL, NULL),
(55, '2-16lSqwEcq0ri', '2', '16', '0', '0', NULL, NULL),
(56, '2-17PiXCGDUx3H', '2', '17', '0', '0', NULL, NULL),
(57, '2-18FOJ2IWIWeO', '2', '18', '0', '0', NULL, NULL),
(58, '2-196EWX0Gc410', '2', '19', '0', '0', NULL, NULL),
(59, '2-20tgX7EG16dI', '2', '20', '0', '0', NULL, NULL),
(60, '2-21yJdftuyJK7', '2', '21', '0', '0', NULL, NULL),
(61, '2-22dbvP3poIRI', '2', '22', '0', '0', NULL, NULL),
(62, '2-23c2fYS1EA33', '2', '23', '0', '0', NULL, NULL),
(63, '2-24e2QAy2XhU8', '2', '24', '0', '0', NULL, NULL),
(64, '2-25F62h6Le4R5', '2', '25', '0', '0', NULL, NULL),
(65, '2-26iDGPBlKCcd', '2', '26', '0', '0', NULL, NULL),
(66, '2-27akMbfHe8yq', '2', '27', '0', '0', NULL, NULL),
(67, '2-28CKR7gNRSRy', '2', '28', '0', '0', NULL, NULL),
(68, '2-29mVRCUSEm1d', '2', '29', '0', '0', NULL, NULL),
(69, '2-30xG9qPNnULD', '2', '30', '0', '0', NULL, NULL),
(70, '2-31njSCSvzkkY', '2', '31', '0', '0', NULL, NULL),
(71, '2-32rlx40QMQ06', '2', '32', '0', '0', NULL, NULL),
(72, '2-33VUE7WT4sAa', '2', '33', '0', '0', NULL, NULL),
(73, '2-34RsvdUDplm6', '2', '34', '0', '0', NULL, NULL),
(74, '2-35CRlULKI0UG', '2', '35', '0', '0', NULL, NULL),
(75, '2-361pMRg29hVe', '2', '36', '0', '0', NULL, NULL),
(76, '2-37T7UExQFIFZ', '2', '37', '0', '0', NULL, NULL),
(77, '2-38XAApV0tYuL', '2', '38', '0', '0', NULL, NULL),
(78, '2-39kYXBd1IpD7', '2', '39', '0', '0', NULL, NULL),
(79, '3-1WOZV0DOV8F', '3', '1', '0', '0', NULL, NULL),
(80, '3-2jZ5XxR0KJL', '3', '2', '0', '0', NULL, NULL),
(81, '3-3xNCZkrixdn', '3', '3', '0', '0', NULL, NULL),
(82, '3-4V3GiWjRNCC', '3', '4', '0', '0', NULL, NULL),
(83, '3-5GzYXrfiF7d', '3', '5', '0', '0', NULL, NULL),
(84, '3-666wQVsLQCL', '3', '6', '0', '0', NULL, NULL),
(85, '3-7KBrfvh01jz', '3', '7', '0', '0', NULL, NULL),
(86, '3-8XuYYLnNbex', '3', '8', '0', '0', NULL, NULL),
(87, '3-9TA4eIQVVnk', '3', '9', '0', '0', NULL, NULL),
(88, '3-10mqOYPQXQET', '3', '10', '0', '0', NULL, NULL),
(89, '3-11YJt62W0GVC', '3', '11', '0', '0', NULL, NULL),
(90, '3-12GNUZpNiLCF', '3', '12', '0', '0', NULL, NULL),
(91, '3-138ETxmOQD3g', '3', '13', '0', '0', NULL, NULL),
(92, '3-14sZaSEXBXwS', '3', '14', '0', '0', NULL, NULL),
(93, '3-15Hpr8i8XuFX', '3', '15', '0', '0', NULL, '2025-01-29 18:02:22'),
(94, '3-16q4IlA3Xaje', '3', '16', '0', '0', NULL, '2025-01-29 18:02:22'),
(95, '3-17UgQhORE6JP', '3', '17', '0', '0', NULL, NULL),
(96, '3-18rrbtiShw8n', '3', '18', '0', '0', NULL, NULL),
(97, '3-199JD2vQDxrw', '3', '19', '0', '0', NULL, NULL),
(98, '3-20ZIMDZ1ON2z', '3', '20', '0', '0', NULL, NULL),
(99, '3-21D0jrqvWsZz', '3', '21', '0', '0', NULL, NULL),
(100, '3-22je8l2npvb5', '3', '22', '0', '0', NULL, NULL),
(101, '3-23viGjWOzHcf', '3', '23', '0', '0', NULL, NULL),
(102, '3-24DDsumSpE9B', '3', '24', '0', '0', NULL, NULL),
(103, '3-25yaqskJgYCZ', '3', '25', '0', '0', NULL, NULL),
(104, '3-26pttchNPH32', '3', '26', '0', '0', NULL, NULL),
(105, '3-279afwwNC6px', '3', '27', '0', '0', NULL, NULL),
(106, '3-28r9oRlkgYMJ', '3', '28', '0', '0', NULL, NULL),
(107, '3-29zCBxfX83dv', '3', '29', '0', '0', NULL, NULL),
(108, '3-30an9gshUmLT', '3', '30', '0', '0', NULL, NULL),
(109, '3-31mR8xj8OYSQ', '3', '31', '0', '0', NULL, NULL),
(110, '3-32LTzg7RtiRA', '3', '32', '0', '0', NULL, NULL),
(111, '3-33wpXQxZr2I7', '3', '33', '0', '0', NULL, NULL),
(112, '3-3483W2haJOrs', '3', '34', '0', '0', NULL, NULL),
(113, '3-35B1AhF980Yl', '3', '35', '0', '0', NULL, NULL),
(114, '3-3612vAydU4Gg', '3', '36', '0', '0', NULL, NULL),
(115, '3-37JI3fim507Q', '3', '37', '0', '0', NULL, NULL),
(116, '3-38eHTPEiihkf', '3', '38', '0', '0', NULL, NULL),
(117, '3-39aqdud8UNNO', '3', '39', '0', '0', NULL, NULL),
(118, '4-1L3J7WITGW3', '4', '1', '0', '0', NULL, NULL),
(119, '4-2k1uzETf0Id', '4', '2', '0', '0', NULL, NULL),
(120, '4-3lmgrHUFBZ4', '4', '3', '0', '0', NULL, NULL),
(121, '4-4zLeiXhLef2', '4', '4', '0', '0', NULL, NULL),
(122, '4-5dxyl4ThIjP', '4', '5', '0', '0', NULL, '2025-01-29 19:47:05'),
(123, '4-6DuuH6l57CZ', '4', '6', '0', '0', NULL, '2025-01-29 19:47:05'),
(124, '4-7wj9gsPG6oy', '4', '7', '0', '0', NULL, '2025-01-29 19:47:05'),
(125, '4-8ihk6BFALYm', '4', '8', '0', '0', NULL, NULL),
(126, '4-9LLIgcB9lVy', '4', '9', '0', '0', NULL, NULL),
(127, '4-10BCIVUUYtqS', '4', '10', '0', '0', NULL, NULL),
(128, '4-11ohbO07yGKj', '4', '11', '0', '0', NULL, NULL),
(129, '4-12SEwuWKqjaZ', '4', '12', '0', '0', NULL, NULL),
(130, '4-13kx0x8y4N0p', '4', '13', '0', '0', NULL, NULL),
(131, '4-14D2oDWI8a7Z', '4', '14', '0', '0', NULL, NULL),
(132, '4-15vSU23KLcXg', '4', '15', '0', '0', NULL, NULL),
(133, '4-16fknLhZAEHA', '4', '16', '0', '0', NULL, NULL),
(134, '4-17Js5cEM2TN8', '4', '17', '0', '1', NULL, '2025-01-29 17:44:56'),
(135, '4-18rU3QiYnAKi', '4', '18', '0', '1', NULL, '2025-01-29 17:44:56'),
(136, '4-19mEjwGyFCZC', '4', '19', '0', '1', NULL, '2025-01-29 17:44:56'),
(137, '4-20IcOJa1OYmU', '4', '20', '0', '0', NULL, NULL),
(138, '4-21IOdFenXmUC', '4', '21', '0', '0', NULL, NULL),
(139, '4-22e0bwpC4mXv', '4', '22', '0', '0', NULL, NULL),
(140, '4-23PZHSKQQlmG', '4', '23', '0', '0', NULL, NULL),
(141, '4-24MfS8bdyDaS', '4', '24', '0', '0', NULL, NULL),
(142, '4-251eeamOrA0h', '4', '25', '0', '0', NULL, NULL),
(143, '4-26iTXxrSu7Ah', '4', '26', '0', '0', NULL, NULL),
(144, '4-27zukyD4OpcN', '4', '27', '0', '0', NULL, NULL),
(145, '4-28qSMC6kxTfm', '4', '28', '0', '0', NULL, NULL),
(146, '4-29pPWjJ8dKRA', '4', '29', '0', '0', NULL, NULL),
(147, '4-30AUA4wRPUzO', '4', '30', '0', '0', NULL, NULL),
(148, '4-31JzALSNcs2n', '4', '31', '0', '0', NULL, NULL),
(149, '4-32O9DukM60gB', '4', '32', '0', '0', NULL, NULL),
(150, '4-33joBgkbPAqP', '4', '33', '0', '0', NULL, NULL),
(151, '4-34HURrnoqQH5', '4', '34', '0', '0', NULL, NULL),
(152, '4-35ZO4v2WyXOE', '4', '35', '0', '0', NULL, NULL),
(153, '4-36aoZRav94g3', '4', '36', '0', '0', NULL, NULL),
(154, '4-372ST7lNropL', '4', '37', '0', '0', NULL, NULL),
(155, '4-382mtsJT0NpP', '4', '38', '0', '0', NULL, NULL),
(156, '4-39gAtx6O1Fu1', '4', '39', '0', '0', NULL, NULL),
(157, '5-1Ooyq7N4cWg', '5', '1', '0', '0', NULL, NULL),
(158, '5-2TPRWM3I04Q', '5', '2', '0', '0', NULL, NULL),
(159, '5-3GaIsVHh5QF', '5', '3', '0', '0', NULL, NULL),
(160, '5-4Iy7eYVoQz3', '5', '4', '0', '0', NULL, NULL),
(161, '5-557e9lBm2Pe', '5', '5', '0', '0', NULL, NULL),
(162, '5-6fpmJF5AOzF', '5', '6', '0', '0', NULL, NULL),
(163, '5-71UMWARNvO8', '5', '7', '0', '0', NULL, NULL),
(164, '5-8VL8ypIZC07', '5', '8', '0', '0', NULL, NULL),
(165, '5-9ps0QmYeO01', '5', '9', '0', '0', NULL, NULL),
(166, '5-10hy6uah4C2R', '5', '10', '0', '0', NULL, NULL),
(167, '5-11q39XEPSFfM', '5', '11', '0', '0', NULL, NULL),
(168, '5-12uIa7QGvCQj', '5', '12', '0', '0', NULL, '2025-01-29 17:43:41'),
(169, '5-13mivCdr0I0q', '5', '13', '0', '0', NULL, '2025-01-29 17:43:41'),
(170, '5-14Ip8MUwnc0d', '5', '14', '0', '0', NULL, '2025-01-29 17:43:41'),
(171, '5-15p2o8eH9Tgt', '5', '15', '0', '0', NULL, NULL),
(172, '5-16FIQuMhznSc', '5', '16', '0', '0', NULL, NULL),
(173, '5-17xmj18QZGne', '5', '17', '0', '0', NULL, '2025-01-29 17:58:20'),
(174, '5-18bnL4L6VLLY', '5', '18', '0', '0', NULL, '2025-01-29 17:58:20'),
(175, '5-19q2ra97NavN', '5', '19', '0', '0', NULL, '2025-01-29 17:58:20'),
(176, '5-20vpML2jvgbm', '5', '20', '0', '0', NULL, NULL),
(177, '5-21YaH3DzXScs', '5', '21', '0', '0', NULL, NULL),
(178, '5-22JFxazNT8So', '5', '22', '0', '0', NULL, NULL),
(179, '5-23uTu2NTJGue', '5', '23', '0', '0', NULL, NULL),
(180, '5-24hjjxykWcsa', '5', '24', '0', '0', NULL, NULL),
(181, '5-25bVkpViWzNC', '5', '25', '0', '0', NULL, NULL),
(182, '5-26zRa26r39Tl', '5', '26', '0', '0', NULL, NULL),
(183, '5-276EdxGQkamu', '5', '27', '0', '0', NULL, NULL),
(184, '5-28u4vd5093gg', '5', '28', '0', '0', NULL, NULL),
(185, '5-29X6Yc9P2PJN', '5', '29', '0', '0', NULL, NULL),
(186, '5-30qJadgYrGfh', '5', '30', '0', '0', NULL, NULL),
(187, '5-318xM1Hnuo45', '5', '31', '0', '0', NULL, NULL),
(188, '5-32ciLBvb8PRG', '5', '32', '0', '0', NULL, NULL),
(189, '5-334LfpDIr8yd', '5', '33', '0', '0', NULL, NULL),
(190, '5-34qgo6ifzNjt', '5', '34', '0', '0', NULL, NULL),
(191, '5-35jop9QMLOv3', '5', '35', '0', '0', NULL, NULL),
(192, '5-36nI4V1GR3oV', '5', '36', '0', '0', NULL, NULL),
(193, '5-37nbaELBRHYu', '5', '37', '0', '0', NULL, NULL),
(194, '5-38L6LyONETTA', '5', '38', '0', '0', NULL, NULL),
(195, '5-39wJKrE26oz5', '5', '39', '0', '0', NULL, NULL),
(196, '6-1nxayk4iJ7I', '6', '1', '0', '0', NULL, NULL),
(197, '6-2mk8JPx6FZr', '6', '2', '0', '0', NULL, NULL),
(198, '6-3wkh59CIBY8', '6', '3', '0', '0', NULL, NULL),
(199, '6-4eTLJqlvMuB', '6', '4', '0', '0', NULL, NULL),
(200, '6-5S1o6pgYWeK', '6', '5', '0', '0', NULL, NULL),
(201, '6-6alil0X5USW', '6', '6', '0', '0', NULL, NULL),
(202, '6-7FE4HPayiVU', '6', '7', '0', '0', NULL, NULL),
(203, '6-8n4i3IAFCEv', '6', '8', '0', '0', NULL, NULL),
(204, '6-9r60S6anpmt', '6', '9', '0', '0', NULL, NULL),
(205, '6-10azByDQmNh6', '6', '10', '0', '0', NULL, NULL),
(206, '6-113kvHQ7GQhX', '6', '11', '0', '0', NULL, NULL),
(207, '6-12JkUJ0iOKBS', '6', '12', '0', '0', NULL, NULL),
(208, '6-137vAVLRtCWK', '6', '13', '0', '0', NULL, NULL),
(209, '6-14XPuyGUSZyY', '6', '14', '0', '0', NULL, NULL),
(210, '6-15lOCZEURJDt', '6', '15', '0', '0', NULL, NULL),
(211, '6-169IcgEbcVqt', '6', '16', '0', '0', NULL, NULL),
(212, '6-17IvrfQJyFni', '6', '17', '0', '0', NULL, NULL),
(213, '6-18MWlxqrqth9', '6', '18', '0', '0', NULL, NULL),
(214, '6-19t7A4t4jINK', '6', '19', '0', '0', NULL, NULL),
(215, '6-20FhcojAbKLF', '6', '20', '0', '0', NULL, NULL),
(216, '6-21GAgepSxZzw', '6', '21', '0', '0', NULL, NULL),
(217, '6-22auGpvlakvi', '6', '22', '0', '0', NULL, NULL),
(218, '6-23ItwNyqUjZc', '6', '23', '0', '0', NULL, NULL),
(219, '6-24qBN6nzO3aI', '6', '24', '0', '0', NULL, NULL),
(220, '6-25wdJTb8GRjK', '6', '25', '0', '0', NULL, NULL),
(221, '6-263pOWWtmU3O', '6', '26', '0', '0', NULL, NULL),
(222, '6-27CjvVo8JOkf', '6', '27', '0', '0', NULL, NULL),
(223, '6-28UkSx7PCdXR', '6', '28', '0', '0', NULL, NULL),
(224, '6-29M8g63nXoe4', '6', '29', '0', '0', NULL, NULL),
(225, '6-30kWWSG1rVx3', '6', '30', '0', '0', NULL, NULL),
(226, '6-31pIEsW6cpvD', '6', '31', '0', '0', NULL, NULL),
(227, '6-32iO11abMWmP', '6', '32', '0', '0', NULL, NULL),
(228, '6-33PRiKrvXF7m', '6', '33', '0', '0', NULL, NULL),
(229, '6-34SZQaZfLcYt', '6', '34', '0', '0', NULL, NULL),
(230, '6-35ZZIrwEHLhs', '6', '35', '0', '0', NULL, NULL),
(231, '6-36BH3PFapktN', '6', '36', '0', '0', NULL, NULL),
(232, '6-37VTGVwjVlGJ', '6', '37', '0', '0', NULL, NULL),
(233, '6-382NoY42LM3d', '6', '38', '0', '0', NULL, NULL),
(234, '6-393IhdVKd0Md', '6', '39', '0', '0', NULL, NULL),
(235, '7-1XwLixGENhl', '7', '1', '0', '0', NULL, NULL),
(236, '7-2Ku9i19AWci', '7', '2', '0', '0', NULL, NULL),
(237, '7-3cKsWzHsrTY', '7', '3', '0', '0', NULL, NULL),
(238, '7-430CCh5ErUp', '7', '4', '0', '0', NULL, NULL),
(239, '7-5JpyoYtrA7O', '7', '5', '0', '0', NULL, NULL),
(240, '7-6ELkCKnsmt5', '7', '6', '0', '0', NULL, NULL),
(241, '7-7L1RXb6aBSX', '7', '7', '0', '0', NULL, NULL),
(242, '7-81X6sziwRhC', '7', '8', '0', '0', NULL, NULL),
(243, '7-9IDfnyIt1KX', '7', '9', '0', '0', NULL, NULL),
(244, '7-102CddFZv7x1', '7', '10', '0', '0', NULL, NULL),
(245, '7-11LUHH7Pw6sr', '7', '11', '0', '0', NULL, NULL),
(246, '7-126fr1TsWTsy', '7', '12', '0', '0', NULL, NULL),
(247, '7-13NFI303X9A8', '7', '13', '0', '0', NULL, NULL),
(248, '7-148LCw2nlaTi', '7', '14', '0', '0', NULL, NULL),
(249, '7-15Fvhld5cYR2', '7', '15', '0', '0', NULL, NULL),
(250, '7-16nRe4Bic8Eo', '7', '16', '0', '0', NULL, NULL),
(251, '7-17Fsg5CVu4Bj', '7', '17', '0', '0', NULL, NULL),
(252, '7-18XwPkL4uF48', '7', '18', '0', '0', NULL, NULL),
(253, '7-197MfIeXmh3N', '7', '19', '0', '0', NULL, NULL),
(254, '7-20UGNvgKBMm6', '7', '20', '0', '0', NULL, NULL),
(255, '7-21exT5uWLFjQ', '7', '21', '0', '0', NULL, NULL),
(256, '7-22aVgLPLFeBN', '7', '22', '0', '0', NULL, NULL),
(257, '7-23rQVGaPPhPZ', '7', '23', '0', '0', NULL, NULL),
(258, '7-24U9REhbCljF', '7', '24', '0', '0', NULL, NULL),
(259, '7-25WhO22q0tnn', '7', '25', '0', '0', NULL, NULL),
(260, '7-266Jg48nYsab', '7', '26', '0', '0', NULL, NULL),
(261, '7-27M0ghc0LOaf', '7', '27', '0', '0', NULL, NULL),
(262, '7-288rFztiA0Yt', '7', '28', '0', '0', NULL, NULL),
(263, '7-29pJBSbKMGqg', '7', '29', '0', '0', NULL, NULL),
(264, '7-30cUQZYhPxqI', '7', '30', '0', '0', NULL, NULL),
(265, '7-31x179nlD7HG', '7', '31', '0', '0', NULL, NULL),
(266, '7-32Eop1pYEDu1', '7', '32', '0', '0', NULL, NULL),
(267, '7-33cUdgn4URZo', '7', '33', '0', '0', NULL, NULL),
(268, '7-34NjMeQp466e', '7', '34', '0', '0', NULL, NULL),
(269, '7-35Ao5rWeLMeQ', '7', '35', '0', '0', NULL, NULL),
(270, '7-36dq2bMlifeU', '7', '36', '0', '0', NULL, NULL),
(271, '7-3760UwgrJoZE', '7', '37', '0', '0', NULL, NULL),
(272, '7-386vArAX992r', '7', '38', '0', '0', NULL, NULL),
(273, '7-39raSEkqL8Px', '7', '39', '0', '0', NULL, NULL),
(274, '8-1s3UPOOBVDi', '8', '1', '0', '0', NULL, NULL),
(275, '8-2MMQzI8Nbym', '8', '2', '0', '0', NULL, NULL),
(276, '8-3uIRmOGi72Z', '8', '3', '0', '0', NULL, NULL),
(277, '8-4fyUyKvq8kk', '8', '4', '0', '0', NULL, NULL),
(278, '8-5EkxDSrkEQS', '8', '5', '0', '0', NULL, NULL),
(279, '8-6KE18faRSST', '8', '6', '0', '0', NULL, NULL),
(280, '8-7NHDdw6pFIL', '8', '7', '0', '0', NULL, NULL),
(281, '8-8JfbR7wvANJ', '8', '8', '0', '0', NULL, NULL),
(282, '8-9bksXaAwOnt', '8', '9', '0', '0', NULL, NULL),
(283, '8-10Nc8KB6rD1n', '8', '10', '0', '0', NULL, NULL),
(284, '8-11Zm1sPiMN7c', '8', '11', '0', '0', NULL, NULL),
(285, '8-12jXHYpaijjF', '8', '12', '0', '0', NULL, NULL),
(286, '8-13FFhk1sGMGx', '8', '13', '0', '0', NULL, NULL),
(287, '8-14SoqczCVKYG', '8', '14', '0', '0', NULL, NULL),
(288, '8-15mtATarqt2c', '8', '15', '0', '0', NULL, NULL),
(289, '8-16xqHYj8Pi66', '8', '16', '0', '0', NULL, NULL),
(290, '8-17eCGlp9mVJ8', '8', '17', '0', '0', NULL, NULL),
(291, '8-18ErGF4i3Y2g', '8', '18', '0', '0', NULL, NULL),
(292, '8-19vW6OuDcGWT', '8', '19', '0', '0', NULL, NULL),
(293, '8-20OTJxOVSRzK', '8', '20', '0', '0', NULL, NULL),
(294, '8-21xk7rHfz9Sw', '8', '21', '0', '0', NULL, NULL),
(295, '8-22drLGY2WxUK', '8', '22', '0', '0', NULL, NULL),
(296, '8-23jWm4ITmVey', '8', '23', '0', '0', NULL, NULL),
(297, '8-24hHKWeJVSd1', '8', '24', '0', '0', NULL, NULL),
(298, '8-25z0IS2nW5Xm', '8', '25', '0', '0', NULL, NULL),
(299, '8-265ay2fgEGO2', '8', '26', '0', '0', NULL, NULL),
(300, '8-27qU9zpT59On', '8', '27', '0', '0', NULL, NULL),
(301, '8-289kbotdDKiG', '8', '28', '0', '0', NULL, NULL),
(302, '8-29tFM9Dyteic', '8', '29', '0', '0', NULL, NULL),
(303, '8-30osQH8s3s6n', '8', '30', '0', '0', NULL, NULL),
(304, '8-31BqRndQEEsD', '8', '31', '0', '0', NULL, NULL),
(305, '8-32Sj12SRMUkr', '8', '32', '0', '0', NULL, NULL),
(306, '8-33moIND86vKK', '8', '33', '0', '0', NULL, NULL),
(307, '8-34YooA0Zq57M', '8', '34', '0', '0', NULL, NULL),
(308, '8-35pkYdvhs31l', '8', '35', '0', '0', NULL, NULL),
(309, '8-36uxydYsw2Y9', '8', '36', '0', '0', NULL, NULL),
(310, '8-37S1U5oK7svx', '8', '37', '0', '0', NULL, NULL),
(311, '8-38baB4P0oMO9', '8', '38', '0', '0', NULL, NULL),
(312, '8-39snilafG2AB', '8', '39', '0', '0', NULL, NULL),
(313, '9-1UhudGv7Mze', '9', '1', '0', '0', NULL, NULL),
(314, '9-2C2jN8K9Yxo', '9', '2', '0', '0', NULL, NULL),
(315, '9-3V9Mcxoe2cN', '9', '3', '0', '0', NULL, NULL),
(316, '9-44y85IbtoaB', '9', '4', '0', '0', NULL, NULL),
(317, '9-5XPMoy8Kc9G', '9', '5', '0', '0', NULL, NULL),
(318, '9-6ANPEAjJAvt', '9', '6', '0', '0', NULL, NULL),
(319, '9-78FZDjxu1er', '9', '7', '0', '0', NULL, NULL),
(320, '9-8SaMgEk7vUH', '9', '8', '0', '0', NULL, NULL),
(321, '9-9MHF1z6UsPA', '9', '9', '0', '0', NULL, NULL),
(322, '9-10eQWc6z1AK6', '9', '10', '0', '0', NULL, NULL),
(323, '9-1122Zt051sJW', '9', '11', '0', '0', NULL, NULL),
(324, '9-12vBvczbQ7TW', '9', '12', '0', '0', NULL, NULL),
(325, '9-13E9XwezW7XC', '9', '13', '0', '0', NULL, NULL),
(326, '9-14Zvvs92TIGI', '9', '14', '0', '0', NULL, NULL),
(327, '9-15uJothF9XO3', '9', '15', '0', '0', NULL, NULL),
(328, '9-16qpBmjUy95h', '9', '16', '0', '0', NULL, NULL),
(329, '9-17NuLBbkDNMh', '9', '17', '0', '0', NULL, NULL),
(330, '9-187qJFh8XXGv', '9', '18', '0', '0', NULL, NULL),
(331, '9-19mMqgoeXVoo', '9', '19', '0', '0', NULL, NULL),
(332, '9-20vTmSNM4Sdb', '9', '20', '0', '0', NULL, NULL),
(333, '9-21Rrg9UXwMMi', '9', '21', '0', '0', NULL, NULL),
(334, '9-22D43KaMmeFv', '9', '22', '0', '0', NULL, NULL),
(335, '9-23dH3JTP3hoC', '9', '23', '0', '0', NULL, NULL),
(336, '9-24DgMDoGR0WJ', '9', '24', '0', '0', NULL, NULL),
(337, '9-25vvH6IiRVbm', '9', '25', '0', '0', NULL, NULL),
(338, '9-26c0jESsMHz1', '9', '26', '0', '0', NULL, NULL),
(339, '9-27T9tEsJjwMD', '9', '27', '0', '0', NULL, NULL),
(340, '9-281n3PFjFwVN', '9', '28', '0', '0', NULL, NULL),
(341, '9-297nGZq1bHN7', '9', '29', '0', '0', NULL, NULL),
(342, '9-30K7f6vQQih3', '9', '30', '0', '0', NULL, NULL),
(343, '9-31uskXYAqaJd', '9', '31', '0', '0', NULL, NULL),
(344, '9-32ucSpgQekin', '9', '32', '0', '0', NULL, NULL),
(345, '9-33vM0ZrEGMCx', '9', '33', '0', '0', NULL, NULL),
(346, '9-34WdRpvxtEAE', '9', '34', '0', '0', NULL, NULL),
(347, '9-35b195vbgp8l', '9', '35', '0', '0', NULL, NULL),
(348, '9-36f5DSNtzDmg', '9', '36', '0', '0', NULL, NULL),
(349, '9-37DPQivU9TeO', '9', '37', '0', '0', NULL, NULL),
(350, '9-38YsRWYGqmMW', '9', '38', '0', '0', NULL, NULL),
(351, '9-3953WmiSdS5N', '9', '39', '0', '0', NULL, NULL),
(352, '10-1qiseBQ6fMV', '10', '1', '0', '0', NULL, NULL),
(353, '10-2akkESBUaDW', '10', '2', '0', '0', NULL, NULL),
(354, '10-3tNTjULAFBQ', '10', '3', '0', '0', NULL, NULL),
(355, '10-4TpZHfyHxJY', '10', '4', '0', '0', NULL, NULL),
(356, '10-5b2fZlJ0uh2', '10', '5', '0', '0', NULL, NULL),
(357, '10-6YO8CsxzpBH', '10', '6', '0', '0', NULL, NULL),
(358, '10-75QkeHnbT0M', '10', '7', '0', '0', NULL, NULL),
(359, '10-8lETIL7zFF4', '10', '8', '0', '0', NULL, NULL),
(360, '10-9TohBUnRYEu', '10', '9', '0', '0', NULL, NULL),
(361, '10-10nzF489zQDI', '10', '10', '0', '0', NULL, NULL),
(362, '10-11ySCGcc6RTv', '10', '11', '0', '0', NULL, NULL),
(363, '10-12er79sqIoxR', '10', '12', '0', '0', NULL, NULL),
(364, '10-13WoovZBGZf3', '10', '13', '0', '0', NULL, NULL),
(365, '10-14XsccMvolqc', '10', '14', '0', '0', NULL, NULL),
(366, '10-15fmELfWVolA', '10', '15', '0', '0', NULL, NULL),
(367, '10-16WKATtC9ieE', '10', '16', '0', '0', NULL, NULL),
(368, '10-17CqdHISulyS', '10', '17', '0', '0', NULL, NULL),
(369, '10-18V2fx0QYrpF', '10', '18', '0', '0', NULL, NULL),
(370, '10-19ZXdkWetoQm', '10', '19', '0', '0', NULL, NULL),
(371, '10-200vVao06eGT', '10', '20', '0', '0', NULL, NULL),
(372, '10-21qQORFgCSjp', '10', '21', '0', '0', NULL, NULL),
(373, '10-22X1IPtXbcNu', '10', '22', '0', '0', NULL, NULL),
(374, '10-23xzEGRdcJUu', '10', '23', '0', '0', NULL, NULL),
(375, '10-24CDpAvV15IQ', '10', '24', '0', '0', NULL, NULL),
(376, '10-2529NI7haMas', '10', '25', '0', '0', NULL, NULL),
(377, '10-26ffpiJwBXkq', '10', '26', '0', '0', NULL, NULL),
(378, '10-27jJN8hzOkQy', '10', '27', '0', '0', NULL, NULL),
(379, '10-282fLWdATVZA', '10', '28', '0', '0', NULL, NULL),
(380, '10-29V8K97oeDQI', '10', '29', '0', '0', NULL, NULL),
(381, '10-30ykfLGOAxDj', '10', '30', '0', '0', NULL, NULL),
(382, '10-315A7Vk3AsH5', '10', '31', '0', '0', NULL, NULL),
(383, '10-32kBBCh0ciUR', '10', '32', '0', '0', NULL, NULL),
(384, '10-33yP2IC5agLW', '10', '33', '0', '0', NULL, NULL),
(385, '10-34powkZ3gY5x', '10', '34', '0', '0', NULL, NULL),
(386, '10-35bOpwM2XNkk', '10', '35', '0', '0', NULL, NULL),
(387, '10-36h9eIKX1SFC', '10', '36', '0', '0', NULL, NULL),
(388, '10-37HhseNRvQlZ', '10', '37', '0', '0', NULL, NULL),
(389, '10-38bWwvFUwOo4', '10', '38', '0', '0', NULL, NULL),
(390, '10-39L6Y00Fb8Xd', '10', '39', '0', '0', NULL, NULL),
(391, '11-10c49BIvswH', '11', '1', '0', '0', NULL, NULL),
(392, '11-2PaWCsLlqxl', '11', '2', '0', '0', NULL, NULL),
(393, '11-3aJfqoH6xvb', '11', '3', '0', '0', NULL, NULL),
(394, '11-4XeNs0IZ0yg', '11', '4', '0', '0', NULL, NULL),
(395, '11-5Zn0zMExxiB', '11', '5', '0', '0', NULL, NULL),
(396, '11-6ejtnK47Q28', '11', '6', '0', '0', NULL, NULL),
(397, '11-7i6HN1cpWm3', '11', '7', '0', '0', NULL, NULL),
(398, '11-8FCasiItJmj', '11', '8', '0', '0', NULL, NULL),
(399, '11-9OoKyQH2SM7', '11', '9', '0', '0', NULL, NULL),
(400, '11-10vM5ajS1Tcz', '11', '10', '0', '0', NULL, NULL),
(401, '11-11OIX9xRxYH3', '11', '11', '0', '0', NULL, NULL),
(402, '11-12gTvaydw96L', '11', '12', '0', '0', NULL, NULL),
(403, '11-13oK1brlhVyB', '11', '13', '0', '0', NULL, NULL),
(404, '11-14d0f1iXce0m', '11', '14', '0', '0', NULL, NULL),
(405, '11-15SWw5I0b79D', '11', '15', '0', '0', NULL, NULL),
(406, '11-16EkfRq9tVkD', '11', '16', '0', '0', NULL, NULL),
(407, '11-17u1vZKPvcEU', '11', '17', '0', '0', NULL, NULL),
(408, '11-183mJJDvDYZX', '11', '18', '0', '0', NULL, NULL),
(409, '11-19bAX75WxiB3', '11', '19', '0', '0', NULL, NULL),
(410, '11-20J5H1Ux4ylD', '11', '20', '0', '0', NULL, NULL),
(411, '11-21jQLAVJVNfj', '11', '21', '0', '0', NULL, NULL),
(412, '11-22TqS4NOqxXt', '11', '22', '0', '0', NULL, NULL),
(413, '11-23tQwKIlHfnx', '11', '23', '0', '0', NULL, NULL),
(414, '11-24KiA4x3QBoO', '11', '24', '0', '0', NULL, NULL),
(415, '11-255gK41qNua6', '11', '25', '0', '0', NULL, NULL),
(416, '11-26Q4HaGcaqYP', '11', '26', '0', '0', NULL, NULL),
(417, '11-27JvbW9EQdP8', '11', '27', '0', '0', NULL, NULL),
(418, '11-28UWZ8euGLD8', '11', '28', '0', '0', NULL, NULL),
(419, '11-29KgDqsRbZZW', '11', '29', '0', '0', NULL, NULL),
(420, '11-30gGK8lplfz4', '11', '30', '0', '0', NULL, NULL),
(421, '11-31wxjVJBAO2J', '11', '31', '0', '0', NULL, NULL),
(422, '11-32Me7jmUEhNf', '11', '32', '0', '0', NULL, NULL),
(423, '11-33vVg4Le68cH', '11', '33', '0', '0', NULL, NULL),
(424, '11-34SFFwHYWCC8', '11', '34', '0', '0', NULL, NULL),
(425, '11-35lNz9Oe7NzE', '11', '35', '0', '0', NULL, NULL),
(426, '11-36M5RlsUtOCj', '11', '36', '0', '0', NULL, NULL),
(427, '11-37LDZPykzeOK', '11', '37', '0', '0', NULL, NULL),
(428, '11-38Pno0xydvSc', '11', '38', '0', '0', NULL, NULL),
(429, '11-39Z4pFBTiS4Y', '11', '39', '0', '0', NULL, NULL),
(430, '12-1Fp9UGDIrmz', '12', '1', '0', '0', NULL, NULL),
(431, '12-2QOqFlZTz2X', '12', '2', '0', '0', NULL, NULL),
(432, '12-3aGFdPxLUPJ', '12', '3', '0', '0', NULL, NULL),
(433, '12-45OafmZ49I5', '12', '4', '0', '0', NULL, NULL),
(434, '12-5yfSZibylfU', '12', '5', '0', '0', NULL, NULL),
(435, '12-6iAwjzdXpLa', '12', '6', '0', '0', NULL, NULL),
(436, '12-7PRTQJ1RyOo', '12', '7', '0', '0', NULL, NULL),
(437, '12-8mEVYQ6SEwU', '12', '8', '0', '0', NULL, NULL),
(438, '12-993ggsr97Cx', '12', '9', '0', '0', NULL, NULL),
(439, '12-103KtOcAjT2k', '12', '10', '0', '0', NULL, NULL),
(440, '12-11eDOP0yZz3Z', '12', '11', '0', '0', NULL, NULL),
(441, '12-12wDbFtpAQw0', '12', '12', '0', '0', NULL, NULL),
(442, '12-13YTqXhle4ED', '12', '13', '0', '0', NULL, NULL),
(443, '12-144nTsLqI1rv', '12', '14', '0', '0', NULL, NULL),
(444, '12-15tdpxaf44xK', '12', '15', '0', '0', NULL, NULL),
(445, '12-16cj5jHdZHQ1', '12', '16', '0', '0', NULL, NULL),
(446, '12-17HTieQxFv0J', '12', '17', '0', '0', NULL, NULL),
(447, '12-18nKW9RaM8eq', '12', '18', '0', '0', NULL, NULL),
(448, '12-19xBsSAOLrlr', '12', '19', '0', '0', NULL, NULL),
(449, '12-20tbbJ5A8LZ9', '12', '20', '0', '0', NULL, NULL),
(450, '12-21LAWmAeuyH1', '12', '21', '0', '0', NULL, NULL),
(451, '12-22T8kHeQZfxm', '12', '22', '0', '0', NULL, NULL),
(452, '12-23kDv0fp23jv', '12', '23', '0', '0', NULL, NULL),
(453, '12-24DWWm9V3yeX', '12', '24', '0', '0', NULL, NULL),
(454, '12-25OeltFvBWlh', '12', '25', '0', '0', NULL, NULL),
(455, '12-26bztulkip7V', '12', '26', '0', '0', NULL, NULL),
(456, '12-279qPOpKyiRj', '12', '27', '0', '0', NULL, NULL),
(457, '12-28uALU8QACz4', '12', '28', '0', '0', NULL, NULL),
(458, '12-29r1v5Ly5pmM', '12', '29', '0', '0', NULL, NULL),
(459, '12-30TY9yehdLrZ', '12', '30', '0', '0', NULL, NULL),
(460, '12-31M3Wt1eoVOB', '12', '31', '0', '0', NULL, NULL),
(461, '12-32tDWHEzWSYT', '12', '32', '0', '0', NULL, NULL),
(462, '12-33HkdwEkE8tA', '12', '33', '0', '0', NULL, NULL),
(463, '12-34zyEftqEPhf', '12', '34', '0', '0', NULL, NULL),
(464, '12-35zfgbUwwRVm', '12', '35', '0', '0', NULL, NULL),
(465, '12-36cE88zKZnPe', '12', '36', '0', '0', NULL, NULL),
(466, '12-379Num4DT3BM', '12', '37', '0', '0', NULL, NULL),
(467, '12-38D39MrnJfOf', '12', '38', '0', '0', NULL, NULL),
(468, '12-39kwCknSwk8x', '12', '39', '0', '0', NULL, NULL),
(469, '13-1Ek5JC0KY5X', '13', '1', '0', '0', NULL, NULL),
(470, '13-2SdfFNaxmph', '13', '2', '0', '0', NULL, NULL),
(471, '13-3cmQuoxxulO', '13', '3', '0', '0', NULL, NULL),
(472, '13-4M7llk2LcL9', '13', '4', '0', '0', NULL, NULL),
(473, '13-557bxeLvEkA', '13', '5', '0', '0', NULL, NULL),
(474, '13-6r9SlwsdjR9', '13', '6', '0', '0', NULL, NULL),
(475, '13-7bDbPuQkrLQ', '13', '7', '0', '0', NULL, NULL),
(476, '13-8OpPzBlUDcC', '13', '8', '0', '0', NULL, NULL),
(477, '13-9N3y1NfWsXp', '13', '9', '0', '0', NULL, NULL),
(478, '13-10N7PTPdiabt', '13', '10', '0', '0', NULL, NULL),
(479, '13-11cCKVtiNQvr', '13', '11', '0', '0', NULL, NULL),
(480, '13-12mchDSkGsMf', '13', '12', '0', '0', NULL, NULL),
(481, '13-13844zqcUWCI', '13', '13', '0', '0', NULL, NULL),
(482, '13-14SbEuOOyDcO', '13', '14', '0', '0', NULL, NULL),
(483, '13-15odxZxRmMM9', '13', '15', '0', '0', NULL, NULL),
(484, '13-16XDiTKZR9aT', '13', '16', '0', '0', NULL, NULL),
(485, '13-17U3aK331FMc', '13', '17', '0', '0', NULL, NULL),
(486, '13-18wPHWz6T0uG', '13', '18', '0', '0', NULL, NULL),
(487, '13-19qDO5iqT42z', '13', '19', '0', '0', NULL, NULL),
(488, '13-20IanVkk6v6T', '13', '20', '0', '0', NULL, NULL),
(489, '13-21yEM0FWYxju', '13', '21', '0', '0', NULL, NULL),
(490, '13-22qWFOJqi2op', '13', '22', '0', '0', NULL, NULL),
(491, '13-23i34CjaPYvo', '13', '23', '0', '0', NULL, NULL),
(492, '13-24orkzEb0Oix', '13', '24', '0', '0', NULL, NULL),
(493, '13-251KaVQxw2f0', '13', '25', '0', '0', NULL, NULL),
(494, '13-26DHlO5SRcxe', '13', '26', '0', '0', NULL, NULL),
(495, '13-273XtXKq392v', '13', '27', '0', '0', NULL, NULL),
(496, '13-28WJQKZ6EjqH', '13', '28', '0', '0', NULL, NULL),
(497, '13-29abB7vzGmrV', '13', '29', '0', '0', NULL, NULL),
(498, '13-3011xG0qzuWc', '13', '30', '0', '0', NULL, NULL),
(499, '13-31z58diXOmqf', '13', '31', '0', '0', NULL, NULL),
(500, '13-320mgIxs47QJ', '13', '32', '0', '0', NULL, NULL),
(501, '13-33E4z2o4Oook', '13', '33', '0', '0', NULL, NULL),
(502, '13-34gnvZJ65FpV', '13', '34', '0', '0', NULL, NULL),
(503, '13-35LY7MRpPBZf', '13', '35', '0', '0', NULL, NULL),
(504, '13-36j46ItAvfWo', '13', '36', '0', '0', NULL, NULL),
(505, '13-37H2tM2P831M', '13', '37', '0', '0', NULL, NULL),
(506, '13-38SPAC6K2DMv', '13', '38', '0', '0', NULL, NULL),
(507, '13-39qIgNnV330j', '13', '39', '0', '0', NULL, NULL),
(508, '14-1q7VgeA0a5s', '14', '1', '0', '0', NULL, NULL),
(509, '14-22KCORqrFYo', '14', '2', '0', '0', NULL, NULL),
(510, '14-3LpFmZ2MVsf', '14', '3', '0', '0', NULL, NULL),
(511, '14-4lvnwRypTAu', '14', '4', '0', '0', NULL, NULL),
(512, '14-5aPOYbpALVa', '14', '5', '0', '0', NULL, NULL),
(513, '14-63cOzMrSm5B', '14', '6', '0', '0', NULL, NULL),
(514, '14-71ektB6hp9q', '14', '7', '0', '0', NULL, NULL),
(515, '14-8oR1Br3MglE', '14', '8', '0', '0', NULL, NULL),
(516, '14-9YuZGUnhEug', '14', '9', '0', '0', NULL, NULL),
(517, '14-10KJrFFAaRfV', '14', '10', '0', '0', NULL, NULL),
(518, '14-11byc72YUzKP', '14', '11', '0', '0', NULL, NULL),
(519, '14-120EH3DYtuQZ', '14', '12', '0', '0', NULL, NULL),
(520, '14-13ggrFbKGxq3', '14', '13', '0', '0', NULL, NULL),
(521, '14-14GBsKSpFfy2', '14', '14', '0', '0', NULL, NULL),
(522, '14-15mgBFTHXWyG', '14', '15', '0', '0', NULL, NULL),
(523, '14-16VKSLXplaaz', '14', '16', '0', '0', NULL, NULL),
(524, '14-17nXF0UWXs9A', '14', '17', '0', '0', NULL, NULL),
(525, '14-18MFqaPlQGnV', '14', '18', '0', '0', NULL, NULL),
(526, '14-19wfljAeo4Oa', '14', '19', '0', '0', NULL, NULL),
(527, '14-20G8LE8ZUDOT', '14', '20', '0', '0', NULL, NULL),
(528, '14-21ys5SO1UEM2', '14', '21', '0', '0', NULL, NULL),
(529, '14-22cuziSgDJKz', '14', '22', '0', '0', NULL, NULL),
(530, '14-231v9su6s96y', '14', '23', '0', '0', NULL, NULL),
(531, '14-24nPo8NIQIOF', '14', '24', '0', '0', NULL, NULL),
(532, '14-25M0B6YEjpQl', '14', '25', '0', '0', NULL, NULL),
(533, '14-26ujauTHWIrq', '14', '26', '0', '0', NULL, NULL),
(534, '14-27CLLfttmMMb', '14', '27', '0', '0', NULL, NULL),
(535, '14-28wIgJ6wJ9GE', '14', '28', '0', '0', NULL, NULL),
(536, '14-295st8sKDa5b', '14', '29', '0', '0', NULL, NULL),
(537, '14-30R4LHSGjQ6R', '14', '30', '0', '0', NULL, NULL),
(538, '14-31vYcZ3mUWuE', '14', '31', '0', '0', NULL, NULL),
(539, '14-32m9hEIhaHCQ', '14', '32', '0', '0', NULL, NULL),
(540, '14-33a1A4UzUmY3', '14', '33', '0', '0', NULL, NULL),
(541, '14-34ihQJxDsGY4', '14', '34', '0', '0', NULL, NULL),
(542, '14-35bQo0lrYgxq', '14', '35', '0', '0', NULL, NULL),
(543, '14-36mmCB1sul7c', '14', '36', '0', '0', NULL, NULL),
(544, '14-37EPPjHZThNq', '14', '37', '0', '0', NULL, NULL),
(545, '14-38tAmTUp9myl', '14', '38', '0', '0', NULL, NULL),
(546, '14-39KQAsuI0Ouo', '14', '39', '0', '0', NULL, NULL),
(547, '15-1UcUpIEoGbP', '15', '1', '0', '0', NULL, NULL),
(548, '15-22wgIGVJTpy', '15', '2', '0', '0', NULL, NULL),
(549, '15-3hWZoKrVUtt', '15', '3', '0', '0', NULL, NULL),
(550, '15-4Zz043KwXuL', '15', '4', '0', '0', NULL, NULL),
(551, '15-5fuJ9JrUZr3', '15', '5', '0', '0', NULL, NULL),
(552, '15-6sqb2i8EBVZ', '15', '6', '0', '0', NULL, NULL),
(553, '15-7iRzrsBcii6', '15', '7', '0', '0', NULL, NULL),
(554, '15-8YuCIB75d1g', '15', '8', '0', '0', NULL, NULL),
(555, '15-9JOzeXISYN7', '15', '9', '0', '0', NULL, NULL),
(556, '15-10Dl0GdqMVRh', '15', '10', '0', '0', NULL, NULL),
(557, '15-11fZlumjVZmJ', '15', '11', '0', '0', NULL, NULL),
(558, '15-124s6t39l0nt', '15', '12', '0', '0', NULL, NULL),
(559, '15-13lwwbAUb84d', '15', '13', '0', '0', NULL, NULL),
(560, '15-14VM0sTg3QLr', '15', '14', '0', '0', NULL, NULL),
(561, '15-15huTNe0lYUD', '15', '15', '0', '0', NULL, NULL),
(562, '15-16yEUvwCIwGU', '15', '16', '0', '0', NULL, NULL),
(563, '15-17ox8QGtFmHF', '15', '17', '0', '0', NULL, NULL),
(564, '15-18rr5bZpOlL7', '15', '18', '0', '0', NULL, NULL),
(565, '15-19IKZuU6rGkM', '15', '19', '0', '0', NULL, NULL),
(566, '15-20GJzqmMOqm1', '15', '20', '0', '0', NULL, NULL),
(567, '15-21CYc9IisFjb', '15', '21', '0', '0', NULL, NULL),
(568, '15-22CMNLyWgJqq', '15', '22', '0', '0', NULL, NULL),
(569, '15-23uB8QK7DvCJ', '15', '23', '0', '0', NULL, NULL),
(570, '15-24EsggXauLTX', '15', '24', '0', '0', NULL, NULL),
(571, '15-25HacJmSHaMI', '15', '25', '0', '0', NULL, NULL),
(572, '15-26h1aBWlooKB', '15', '26', '0', '0', NULL, NULL),
(573, '15-272JnDumGWeD', '15', '27', '0', '0', NULL, NULL),
(574, '15-282rapLnma0A', '15', '28', '0', '0', NULL, NULL),
(575, '15-29uRr2bYAdvd', '15', '29', '0', '0', NULL, NULL),
(576, '15-30RlZNzdXURq', '15', '30', '0', '0', NULL, NULL),
(577, '15-31mGCJeVtvMP', '15', '31', '0', '0', NULL, NULL),
(578, '15-32EL1Uhalotv', '15', '32', '0', '0', NULL, NULL),
(579, '15-33VJqRtbR6aO', '15', '33', '0', '0', NULL, NULL),
(580, '15-34hoWoX5QHWv', '15', '34', '0', '0', NULL, NULL),
(581, '15-35YpEblmtyYc', '15', '35', '0', '0', NULL, NULL),
(582, '15-36eCaIl30NtX', '15', '36', '0', '0', NULL, NULL),
(583, '15-37ZcbBwinacN', '15', '37', '0', '0', NULL, NULL),
(584, '15-38COHRJCTYGn', '15', '38', '0', '0', NULL, NULL),
(585, '15-39DwtPXiDuDw', '15', '39', '0', '0', NULL, NULL),
(586, '16-1J7RH08mvAN', '16', '1', '0', '0', NULL, NULL),
(587, '16-2QP0J1SnZlx', '16', '2', '0', '0', NULL, NULL),
(588, '16-3QZm9jiRMoh', '16', '3', '0', '0', NULL, NULL),
(589, '16-4GfAttuaQKh', '16', '4', '0', '0', NULL, NULL),
(590, '16-5kk66zJfari', '16', '5', '0', '0', NULL, NULL),
(591, '16-6bwbAFLJCkE', '16', '6', '0', '0', NULL, NULL),
(592, '16-7ul26FnFJuX', '16', '7', '0', '0', NULL, NULL),
(593, '16-8RE1LJOsP9U', '16', '8', '0', '0', NULL, NULL),
(594, '16-9lNKTSqYrlN', '16', '9', '0', '0', NULL, NULL),
(595, '16-10MXO5BaxtEw', '16', '10', '0', '0', NULL, NULL),
(596, '16-11k9fLZPOCLZ', '16', '11', '0', '0', NULL, NULL),
(597, '16-12yMva1kbbbM', '16', '12', '0', '0', NULL, NULL),
(598, '16-13lGXVysMXZ5', '16', '13', '0', '0', NULL, NULL),
(599, '16-14usPViGfxp8', '16', '14', '0', '0', NULL, NULL),
(600, '16-15JKpfh3i5XI', '16', '15', '0', '0', NULL, NULL),
(601, '16-16RA51E1lcIN', '16', '16', '0', '0', NULL, NULL),
(602, '16-17HbkelsCiZr', '16', '17', '0', '0', NULL, NULL),
(603, '16-18aRJBRDatAJ', '16', '18', '0', '0', NULL, NULL),
(604, '16-19rpnBd0Jq52', '16', '19', '0', '0', NULL, NULL),
(605, '16-20dSIeWQKnmB', '16', '20', '0', '0', NULL, NULL),
(606, '16-219noXq9u6vR', '16', '21', '0', '0', NULL, NULL),
(607, '16-22aRfqN4KqRy', '16', '22', '0', '0', NULL, NULL),
(608, '16-23DdeJ5OUy5X', '16', '23', '0', '0', NULL, NULL),
(609, '16-24cAhjUiUhXL', '16', '24', '0', '0', NULL, NULL),
(610, '16-25XEiMjbGYMh', '16', '25', '0', '0', NULL, NULL),
(611, '16-26A8m6W845nf', '16', '26', '0', '0', NULL, NULL),
(612, '16-270rCCYvkgko', '16', '27', '0', '0', NULL, NULL),
(613, '16-28JqYcXr29He', '16', '28', '0', '0', NULL, NULL),
(614, '16-29sSUYdKuyMP', '16', '29', '0', '0', NULL, NULL),
(615, '16-30s9ZlXUCJrZ', '16', '30', '0', '0', NULL, NULL),
(616, '16-31Bk9FEMxMAd', '16', '31', '0', '0', NULL, NULL),
(617, '16-32h6pfuvuXnQ', '16', '32', '0', '0', NULL, NULL),
(618, '16-33rw26bAApAa', '16', '33', '0', '0', NULL, NULL),
(619, '16-34uuKB1Q6nor', '16', '34', '0', '0', NULL, NULL),
(620, '16-35s9gk56l9DM', '16', '35', '0', '0', NULL, NULL),
(621, '16-36jErzJejnkM', '16', '36', '0', '0', NULL, NULL),
(622, '16-37FpTnRTBl2E', '16', '37', '0', '0', NULL, NULL),
(623, '16-38YPBS07fgGG', '16', '38', '0', '0', NULL, NULL),
(624, '16-39FsTbweKzBM', '16', '39', '0', '0', NULL, NULL),
(625, '17-10uuEBXgBQS', '17', '1', '0', '0', NULL, NULL),
(626, '17-2ORnjxCEOQO', '17', '2', '0', '0', NULL, NULL),
(627, '17-3KL9Jqd6Eyx', '17', '3', '0', '0', NULL, NULL),
(628, '17-4YBnox7SwQi', '17', '4', '0', '0', NULL, NULL),
(629, '17-5L5N6ipnz8q', '17', '5', '0', '0', NULL, NULL),
(630, '17-611FUyo3Oz2', '17', '6', '0', '0', NULL, NULL),
(631, '17-7RUXKRNmyxI', '17', '7', '0', '0', NULL, NULL),
(632, '17-8RrjU3BV3gN', '17', '8', '0', '0', NULL, NULL),
(633, '17-9xkXRRcTxHC', '17', '9', '0', '0', NULL, NULL),
(634, '17-10j8bLMceZjA', '17', '10', '0', '0', NULL, NULL),
(635, '17-11NRfY91rkzS', '17', '11', '0', '0', NULL, NULL),
(636, '17-12Ex5jHCqJNd', '17', '12', '0', '0', NULL, NULL),
(637, '17-13MvFLUSkDbo', '17', '13', '0', '0', NULL, NULL),
(638, '17-14NZUNdGHK41', '17', '14', '0', '0', NULL, NULL),
(639, '17-15MTP9Rkplr4', '17', '15', '0', '0', NULL, NULL),
(640, '17-16sIyJ4wnBul', '17', '16', '0', '0', NULL, NULL),
(641, '17-174HbmdXazQm', '17', '17', '0', '0', NULL, NULL),
(642, '17-18VKhLAA1VNK', '17', '18', '0', '0', NULL, NULL),
(643, '17-19mQd73WU0kx', '17', '19', '0', '0', NULL, NULL),
(644, '17-20LTwLRFLoLq', '17', '20', '0', '0', NULL, NULL),
(645, '17-21mWUsDKFy88', '17', '21', '0', '0', NULL, NULL),
(646, '17-22rWxXgE84nV', '17', '22', '0', '0', NULL, NULL),
(647, '17-23iFi3vXiDut', '17', '23', '0', '0', NULL, NULL),
(648, '17-24iBvIupznWu', '17', '24', '0', '0', NULL, NULL),
(649, '17-25CFeym9Yz2h', '17', '25', '0', '0', NULL, NULL),
(650, '17-26nKGxaxN3R7', '17', '26', '0', '0', NULL, NULL),
(651, '17-27MiABvZvXw0', '17', '27', '0', '0', NULL, NULL),
(652, '17-28ZeBraaVRAz', '17', '28', '0', '0', NULL, NULL),
(653, '17-291XN0daZU3K', '17', '29', '0', '0', NULL, NULL),
(654, '17-300p7f8dnWZX', '17', '30', '0', '0', NULL, NULL),
(655, '17-31Z6JYdEeN6H', '17', '31', '0', '0', NULL, NULL),
(656, '17-32p0HsY4bo7D', '17', '32', '0', '0', NULL, NULL),
(657, '17-33mkTJKrMeAy', '17', '33', '0', '0', NULL, NULL),
(658, '17-34yu0k5BumOZ', '17', '34', '0', '0', NULL, NULL),
(659, '17-35GsP4no1bzr', '17', '35', '0', '0', NULL, NULL),
(660, '17-36kOKUFs2x3v', '17', '36', '0', '0', NULL, NULL),
(661, '17-37dhTSX6hPoi', '17', '37', '0', '0', NULL, NULL),
(662, '17-38f6lFNyQbt6', '17', '38', '0', '0', NULL, NULL),
(663, '17-39DOls4gyG9p', '17', '39', '0', '0', NULL, NULL),
(664, '18-1y5trcybbKg', '18', '1', '0', '0', NULL, NULL),
(665, '18-2tXql6jVFhN', '18', '2', '0', '0', NULL, NULL),
(666, '18-37sirsgkrot', '18', '3', '0', '0', NULL, NULL),
(667, '18-4oxTX68glyg', '18', '4', '0', '0', NULL, NULL),
(668, '18-5tsEOJuWqOr', '18', '5', '0', '0', NULL, NULL),
(669, '18-68AYnSvwagQ', '18', '6', '0', '0', NULL, NULL),
(670, '18-7nwv12uh8tZ', '18', '7', '0', '0', NULL, NULL),
(671, '18-8hD0lHZJFYN', '18', '8', '0', '0', NULL, NULL),
(672, '18-9H7ZHVwYjra', '18', '9', '0', '0', NULL, NULL),
(673, '18-101DHP6H5Ofm', '18', '10', '0', '0', NULL, NULL),
(674, '18-11V53iTpjbKg', '18', '11', '0', '0', NULL, NULL),
(675, '18-12bLH54Z6MKt', '18', '12', '0', '0', NULL, NULL),
(676, '18-135E4zBDe3Op', '18', '13', '0', '0', NULL, NULL),
(677, '18-14cT8ArzyqO3', '18', '14', '0', '0', NULL, NULL),
(678, '18-15WJoT5j4CQI', '18', '15', '0', '0', NULL, NULL),
(679, '18-16guNmxsIiEo', '18', '16', '0', '0', NULL, NULL),
(680, '18-170DPGEtrLYw', '18', '17', '0', '0', NULL, NULL),
(681, '18-182E2SeaN0sI', '18', '18', '0', '0', NULL, NULL),
(682, '18-193WZ1k4vybq', '18', '19', '0', '0', NULL, NULL),
(683, '18-20ba0kyJQwMP', '18', '20', '0', '0', NULL, NULL),
(684, '18-21U8IzB00dTs', '18', '21', '0', '0', NULL, NULL),
(685, '18-22nQDvxBozB1', '18', '22', '0', '0', NULL, NULL),
(686, '18-23deb9kr8C6x', '18', '23', '0', '0', NULL, NULL),
(687, '18-24COMRLvcolf', '18', '24', '0', '0', NULL, NULL),
(688, '18-25ko6D8Yd7vl', '18', '25', '0', '0', NULL, NULL),
(689, '18-266UhjpDVNbE', '18', '26', '0', '0', NULL, NULL),
(690, '18-27CiDHtGOAay', '18', '27', '0', '0', NULL, NULL),
(691, '18-28qbUO44rQGR', '18', '28', '0', '0', NULL, NULL),
(692, '18-29xP1I9orJ1X', '18', '29', '0', '0', NULL, NULL),
(693, '18-30vgxRVjTdvR', '18', '30', '0', '0', NULL, NULL),
(694, '18-31zpvBnFrH4t', '18', '31', '0', '0', NULL, NULL),
(695, '18-32Yu6qxdtvcr', '18', '32', '0', '0', NULL, NULL),
(696, '18-33jHWfcdQXEs', '18', '33', '0', '0', NULL, NULL),
(697, '18-34D6shY3pY87', '18', '34', '0', '0', NULL, NULL),
(698, '18-356zHFYvSAkt', '18', '35', '0', '0', NULL, NULL),
(699, '18-36fY6eOtk2O9', '18', '36', '0', '0', NULL, NULL),
(700, '18-37cWrDYm8d0Z', '18', '37', '0', '0', NULL, NULL),
(701, '18-38chX9HU5dPK', '18', '38', '0', '0', NULL, NULL),
(702, '18-39l4FeOUDY6m', '18', '39', '0', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '0123456789', NULL, NULL, '$2y$10$hU1seACt9ibTj9vhYdFd.el.VV3kn4UCv5aZAWNF5u18ECJqC.aq6', NULL, '2024-10-06 14:47:53', '2024-10-06 14:47:53'),
(2, 'Kirollos Helal', 'devhel2019@gmail.com', '01093019979', NULL, NULL, '$2y$10$8ccJ565rqQ.FLPx4MErweuGqDoAtrcq1KFs5jrgQj2pOhpBrdzO9u', NULL, '2024-10-06 14:59:29', '2024-10-06 14:59:29'),
(3, 'Kirollos Helal', 'test@gmail.com', '0123456788', NULL, NULL, '$2y$10$yBIOMh5GAiJ0PjE5WbuCQ.zyvn6SEAnzTh/beNgvbzdQfS8NRy1JK', NULL, '2025-01-27 17:09:26', '2025-01-27 17:09:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`),
  ADD KEY `bookings_seat_id_foreign` (`seat_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=703;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_seat_id_foreign` FOREIGN KEY (`seat_id`) REFERENCES `seats` (`id`),
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
