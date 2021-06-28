-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 05:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `_collalex`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `causer_type`, `causer_id`, `properties`, `created_at`, `updated_at`) VALUES
(147, 'default', 'updated', 'App\\Models\\Headword', 346, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"a\",\"pronunciation\":\"z\",\"user\":2},\"old\":{\"headword\":\"aa\",\"pronunciation\":\"aa\",\"user\":4}}', '2021-05-20 08:26:30', '2021-05-20 08:26:30'),
(148, 'default', 'updated', 'App\\Models\\Sense', 350, 'App\\Models\\User', 2, '{\"attributes\":{\"syncat\":\"aspect particle\",\"g_eng\":\"z\",\"g_ceb\":\"z\",\"semdom_id\":\"z\",\"user\":2},\"old\":{\"syncat\":\"temporal particle\",\"g_eng\":\"aa\",\"g_ceb\":\"aa\",\"semdom_id\":\"1.2.3.4\",\"user\":4}}', '2021-05-20 08:26:30', '2021-05-20 08:26:30'),
(149, 'default', 'created', 'App\\Models\\Headword', 348, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"aa\",\"pronunciation\":\"aa\",\"user\":2,\"date\":\"2021-05-20T01:22:00.000000Z\",\"validity\":\"valid\",\"vulgarity\":\"on\"}}', '2021-05-20 09:22:00', '2021-05-20 09:22:00'),
(150, 'default', 'created', 'App\\Models\\Sense', 354, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":348,\"syncat\":\"noun\",\"g_eng\":\"aa\",\"g_ceb\":\"aa\",\"semdom_id\":\"aa\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T01:22:00.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 09:22:00', '2021-05-20 09:22:00'),
(151, 'default', 'created', 'App\\Models\\Headword', 349, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"a\",\"pronunciation\":\"a\",\"user\":2,\"date\":\"2021-05-20T01:24:57.000000Z\",\"validity\":\"valid\",\"vulgarity\":null}}', '2021-05-20 09:24:57', '2021-05-20 09:24:57'),
(152, 'default', 'created', 'App\\Models\\Sense', 355, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":349,\"syncat\":\"case marker\",\"g_eng\":\"a\",\"g_ceb\":\"a\",\"semdom_id\":\"a\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T01:24:57.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 09:24:57', '2021-05-20 09:24:57'),
(153, 'default', 'created', 'App\\Models\\Headword', 350, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"aa\",\"pronunciation\":\"aa\",\"user\":2,\"date\":\"2021-05-20T01:38:59.000000Z\",\"validity\":\"valid\",\"vulgarity\":\"on\"}}', '2021-05-20 09:38:59', '2021-05-20 09:38:59'),
(154, 'default', 'created', 'App\\Models\\Sense', 356, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":350,\"syncat\":\"verb\",\"g_eng\":\"aa\",\"g_ceb\":\"aa\",\"semdom_id\":\"aa\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T01:38:59.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 09:38:59', '2021-05-20 09:38:59'),
(155, 'default', 'created', 'App\\Models\\Headword', 351, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"aaa\",\"pronunciation\":\"aaa\",\"user\":2,\"date\":\"2021-05-20T01:40:33.000000Z\",\"validity\":\"valid\",\"vulgarity\":\"on\"}}', '2021-05-20 09:40:33', '2021-05-20 09:40:33'),
(156, 'default', 'created', 'App\\Models\\Sense', 357, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":351,\"syncat\":\"case marker\",\"g_eng\":\"aaa\",\"g_ceb\":\"aaa\",\"semdom_id\":\"aaa\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T01:40:33.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 09:40:33', '2021-05-20 09:40:33'),
(157, 'default', 'updated', 'App\\Models\\Headword', 349, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":\"on\"},\"old\":{\"vulgarity\":null}}', '2021-05-20 09:46:33', '2021-05-20 09:46:33'),
(158, 'default', 'created', 'App\\Models\\Headword', 352, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"a\",\"pronunciation\":\"a\",\"user\":2,\"date\":\"2021-05-20T01:48:34.000000Z\",\"validity\":\"valid\",\"vulgarity\":\"on\"}}', '2021-05-20 09:48:34', '2021-05-20 09:48:34'),
(159, 'default', 'created', 'App\\Models\\Sense', 358, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":352,\"syncat\":\"case marker\",\"g_eng\":\"a\",\"g_ceb\":\"a\",\"semdom_id\":\"a\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T01:48:34.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 09:48:34', '2021-05-20 09:48:34'),
(160, 'default', 'created', 'App\\Models\\Headword', 353, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"aa\",\"pronunciation\":\"aa\",\"user\":2,\"date\":\"2021-05-20T01:50:20.000000Z\",\"validity\":\"valid\",\"vulgarity\":null}}', '2021-05-20 09:50:20', '2021-05-20 09:50:20'),
(161, 'default', 'created', 'App\\Models\\Sense', 359, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":353,\"syncat\":\"noun\",\"g_eng\":\"aa\",\"g_ceb\":\"aa\",\"semdom_id\":\"aa\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T01:50:20.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 09:50:20', '2021-05-20 09:50:20'),
(162, 'default', 'created', 'App\\Models\\Headword', 354, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"a\",\"pronunciation\":\"a\",\"user\":2,\"date\":\"2021-05-20T02:21:26.000000Z\",\"validity\":\"valid\",\"vulgarity\":1}}', '2021-05-20 10:21:26', '2021-05-20 10:21:26'),
(163, 'default', 'created', 'App\\Models\\Sense', 360, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":354,\"syncat\":\"noun\",\"g_eng\":\"a\",\"g_ceb\":\"a\",\"semdom_id\":\"a\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T02:21:26.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 10:21:26', '2021-05-20 10:21:26'),
(164, 'default', 'updated', 'App\\Models\\Headword', 354, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-20 10:22:32', '2021-05-20 10:22:32'),
(165, 'default', 'updated', 'App\\Models\\Headword', 354, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":1},\"old\":{\"vulgarity\":0}}', '2021-05-20 10:22:38', '2021-05-20 10:22:38'),
(166, 'default', 'updated', 'App\\Models\\Headword', 354, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-20 10:22:44', '2021-05-20 10:22:44'),
(167, 'default', 'created', 'App\\Models\\Headword', 355, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"aa\",\"pronunciation\":\"aa\",\"user\":2,\"date\":\"2021-05-20T02:23:06.000000Z\",\"validity\":\"valid\",\"vulgarity\":1}}', '2021-05-20 10:23:06', '2021-05-20 10:23:06'),
(168, 'default', 'created', 'App\\Models\\Sense', 361, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":355,\"syncat\":\"noun\",\"g_eng\":\"aa\",\"g_ceb\":\"aa\",\"semdom_id\":\"aa\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T02:23:06.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 10:23:06', '2021-05-20 10:23:06'),
(169, 'default', 'updated', 'App\\Models\\Headword', 354, 'App\\Models\\User', 2, '{\"attributes\":{\"pronunciation\":\"aa\"},\"old\":{\"pronunciation\":\"a\"}}', '2021-05-20 10:31:13', '2021-05-20 10:31:13'),
(170, 'default', 'updated', 'App\\Models\\Headword', 354, 'App\\Models\\User', 2, '{\"attributes\":{\"pronunciation\":\"a\"},\"old\":{\"pronunciation\":\"aa\"}}', '2021-05-20 10:32:54', '2021-05-20 10:32:54'),
(171, 'default', 'updated', 'App\\Models\\Headword', 354, 'App\\Models\\User', 2, '{\"attributes\":{\"pronunciation\":\"aa\"},\"old\":{\"pronunciation\":\"a\"}}', '2021-05-20 10:33:04', '2021-05-20 10:33:04'),
(172, 'default', 'updated', 'App\\Models\\Headword', 354, 'App\\Models\\User', 2, '{\"attributes\":{\"pronunciation\":\"a\"},\"old\":{\"pronunciation\":\"aa\"}}', '2021-05-20 10:37:27', '2021-05-20 10:37:27'),
(173, 'default', 'updated', 'App\\Models\\Headword', 354, 'App\\Models\\User', 2, '{\"attributes\":{\"pronunciation\":\"aa\"},\"old\":{\"pronunciation\":\"a\"}}', '2021-05-20 10:37:38', '2021-05-20 10:37:38'),
(174, 'default', 'created', 'App\\Models\\Headword', 356, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"b\",\"pronunciation\":\"b\",\"user\":2,\"date\":\"2021-05-20T02:38:32.000000Z\",\"validity\":\"valid\",\"vulgarity\":1}}', '2021-05-20 10:38:32', '2021-05-20 10:38:32'),
(175, 'default', 'created', 'App\\Models\\Sense', 362, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":356,\"syncat\":\"case marker\",\"g_eng\":\"b\",\"g_ceb\":\"b\",\"semdom_id\":\"b\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T02:38:32.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 10:38:32', '2021-05-20 10:38:32'),
(176, 'default', 'updated', 'App\\Models\\Headword', 356, 'App\\Models\\User', 2, '{\"attributes\":{\"pronunciation\":\"bb\"},\"old\":{\"pronunciation\":\"b\"}}', '2021-05-20 10:38:44', '2021-05-20 10:38:44'),
(177, 'default', 'updated', 'App\\Models\\Headword', 354, 'App\\Models\\User', 2, '{\"attributes\":{\"pronunciation\":\"a\",\"vulgarity\":1},\"old\":{\"pronunciation\":\"aa\",\"vulgarity\":0}}', '2021-05-20 10:42:34', '2021-05-20 10:42:34'),
(178, 'default', 'updated', 'App\\Models\\Headword', 356, 'App\\Models\\User', 2, '{\"attributes\":{\"pronunciation\":\"b\"},\"old\":{\"pronunciation\":\"bb\"}}', '2021-05-20 10:42:46', '2021-05-20 10:42:46'),
(179, 'default', 'updated', 'App\\Models\\Headword', 354, 'App\\Models\\User', 2, '{\"attributes\":{\"pronunciation\":\"aa\"},\"old\":{\"pronunciation\":\"a\"}}', '2021-05-20 10:43:02', '2021-05-20 10:43:02'),
(180, 'default', 'updated', 'App\\Models\\Headword', 356, 'App\\Models\\User', 2, '{\"attributes\":{\"pronunciation\":\"bb\"},\"old\":{\"pronunciation\":\"b\"}}', '2021-05-20 10:43:48', '2021-05-20 10:43:48'),
(181, 'default', 'updated', 'App\\Models\\Headword', 356, 'App\\Models\\User', 2, '{\"attributes\":{\"pronunciation\":\"j\"},\"old\":{\"pronunciation\":\"bb\"}}', '2021-05-20 10:43:58', '2021-05-20 10:43:58'),
(182, 'default', 'updated', 'App\\Models\\Headword', 356, 'App\\Models\\User', 2, '{\"attributes\":{\"pronunciation\":\"a\"},\"old\":{\"pronunciation\":\"j\"}}', '2021-05-20 10:44:34', '2021-05-20 10:44:34'),
(183, 'default', 'created', 'App\\Models\\Headword', 357, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"aaa\",\"pronunciation\":\"aaa\",\"user\":2,\"date\":\"2021-05-20T02:47:26.000000Z\",\"validity\":\"valid\",\"vulgarity\":1}}', '2021-05-20 10:47:26', '2021-05-20 10:47:26'),
(184, 'default', 'created', 'App\\Models\\Sense', 363, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":357,\"syncat\":\"verb\",\"g_eng\":\"aaa\",\"g_ceb\":\"aaa\",\"semdom_id\":\"aaa\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T02:47:27.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 10:47:27', '2021-05-20 10:47:27'),
(185, 'default', 'updated', 'App\\Models\\Headword', 357, 'App\\Models\\User', 2, '{\"attributes\":{\"pronunciation\":\"a\"},\"old\":{\"pronunciation\":\"aaa\"}}', '2021-05-20 10:47:48', '2021-05-20 10:47:48'),
(186, 'default', 'updated', 'App\\Models\\Headword', 354, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-20 10:48:17', '2021-05-20 10:48:17'),
(187, 'default', 'created', 'App\\Models\\Headword', 358, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"a\",\"pronunciation\":\"a\",\"user\":2,\"date\":\"2021-05-20T02:50:26.000000Z\",\"validity\":\"valid\",\"vulgarity\":0}}', '2021-05-20 10:50:26', '2021-05-20 10:50:26'),
(188, 'default', 'created', 'App\\Models\\Sense', 364, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":358,\"syncat\":\"noun\",\"g_eng\":\"a\",\"g_ceb\":\"a\",\"semdom_id\":\"a\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T02:50:26.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 10:50:26', '2021-05-20 10:50:26'),
(189, 'default', 'created', 'App\\Models\\Headword', 359, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"aa\",\"pronunciation\":\"aa\",\"user\":2,\"date\":\"2021-05-20T02:50:37.000000Z\",\"validity\":\"valid\",\"vulgarity\":1}}', '2021-05-20 10:50:37', '2021-05-20 10:50:37'),
(190, 'default', 'created', 'App\\Models\\Sense', 365, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":359,\"syncat\":\"verb\",\"g_eng\":\"aa\",\"g_ceb\":\"aa\",\"semdom_id\":\"aa\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T02:50:37.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 10:50:37', '2021-05-20 10:50:37'),
(191, 'default', 'updated', 'App\\Models\\Headword', 358, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":1},\"old\":{\"vulgarity\":0}}', '2021-05-20 10:50:52', '2021-05-20 10:50:52'),
(192, 'default', 'updated', 'App\\Models\\Headword', 358, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-20 10:52:33', '2021-05-20 10:52:33'),
(193, 'default', 'updated', 'App\\Models\\Headword', 358, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":1},\"old\":{\"vulgarity\":0}}', '2021-05-20 10:54:14', '2021-05-20 10:54:14'),
(194, 'default', 'created', 'App\\Models\\Headword', 360, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"a\",\"pronunciation\":\"a\",\"user\":2,\"date\":\"2021-05-20T02:55:10.000000Z\",\"validity\":\"valid\",\"vulgarity\":1}}', '2021-05-20 10:55:10', '2021-05-20 10:55:10'),
(195, 'default', 'created', 'App\\Models\\Sense', 366, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":360,\"syncat\":\"noun\",\"g_eng\":\"a\",\"g_ceb\":\"a\",\"semdom_id\":\"a\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T02:55:10.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 10:55:10', '2021-05-20 10:55:10'),
(196, 'default', 'created', 'App\\Models\\Headword', 361, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"aa\",\"pronunciation\":\"aa\",\"user\":2,\"date\":\"2021-05-20T02:55:22.000000Z\",\"validity\":\"valid\",\"vulgarity\":0}}', '2021-05-20 10:55:22', '2021-05-20 10:55:22'),
(197, 'default', 'created', 'App\\Models\\Sense', 367, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":361,\"syncat\":\"noun\",\"g_eng\":\"aa\",\"g_ceb\":\"aa\",\"semdom_id\":\"aa\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T02:55:22.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 10:55:22', '2021-05-20 10:55:22'),
(198, 'default', 'updated', 'App\\Models\\Headword', 360, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-20 10:57:54', '2021-05-20 10:57:54'),
(199, 'default', 'created', 'App\\Models\\Headword', 362, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"aaa\",\"pronunciation\":\"aaa\",\"user\":2,\"date\":\"2021-05-20T02:58:22.000000Z\",\"validity\":\"valid\",\"vulgarity\":0}}', '2021-05-20 10:58:22', '2021-05-20 10:58:22'),
(200, 'default', 'created', 'App\\Models\\Sense', 368, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":362,\"syncat\":\"noun\",\"g_eng\":\"aa\",\"g_ceb\":\"aa\",\"semdom_id\":\"aa\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T02:58:22.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 10:58:22', '2021-05-20 10:58:22'),
(201, 'default', 'updated', 'App\\Models\\Headword', 360, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":1},\"old\":{\"vulgarity\":0}}', '2021-05-20 10:59:51', '2021-05-20 10:59:51'),
(202, 'default', 'updated', 'App\\Models\\Headword', 362, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":1},\"old\":{\"vulgarity\":0}}', '2021-05-20 11:01:54', '2021-05-20 11:01:54'),
(203, 'default', 'updated', 'App\\Models\\Headword', 360, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-20 11:03:52', '2021-05-20 11:03:52'),
(204, 'default', 'updated', 'App\\Models\\Headword', 360, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":1},\"old\":{\"vulgarity\":0}}', '2021-05-20 11:03:57', '2021-05-20 11:03:57'),
(205, 'default', 'updated', 'App\\Models\\Headword', 360, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-20 11:04:07', '2021-05-20 11:04:07'),
(206, 'default', 'updated', 'App\\Models\\Headword', 362, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-20 11:04:23', '2021-05-20 11:04:23'),
(207, 'default', 'created', 'App\\Models\\Headword', 363, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"a\",\"pronunciation\":\"a\",\"user\":2,\"date\":\"2021-05-20T03:05:48.000000Z\",\"validity\":\"valid\",\"vulgarity\":1}}', '2021-05-20 11:05:48', '2021-05-20 11:05:48'),
(208, 'default', 'created', 'App\\Models\\Sense', 369, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":363,\"syncat\":\"verb\",\"g_eng\":\"a\",\"g_ceb\":\"a\",\"semdom_id\":\"a\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T03:05:48.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 11:05:48', '2021-05-20 11:05:48'),
(209, 'default', 'created', 'App\\Models\\Headword', 364, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"aa\",\"pronunciation\":\"aa\",\"user\":2,\"date\":\"2021-05-20T03:05:58.000000Z\",\"validity\":\"valid\",\"vulgarity\":0}}', '2021-05-20 11:05:58', '2021-05-20 11:05:58'),
(210, 'default', 'created', 'App\\Models\\Sense', 370, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":364,\"syncat\":\"verb\",\"g_eng\":\"aa\",\"g_ceb\":\"aa\",\"semdom_id\":\"aa\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T03:05:58.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 11:05:58', '2021-05-20 11:05:58'),
(211, 'default', 'updated', 'App\\Models\\Headword', 363, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-20 11:32:51', '2021-05-20 11:32:51'),
(212, 'default', 'updated', 'App\\Models\\Headword', 363, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":1},\"old\":{\"vulgarity\":0}}', '2021-05-20 11:37:39', '2021-05-20 11:37:39'),
(213, 'default', 'updated', 'App\\Models\\Headword', 364, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":1},\"old\":{\"vulgarity\":0}}', '2021-05-20 11:46:27', '2021-05-20 11:46:27'),
(214, 'default', 'updated', 'App\\Models\\Headword', 364, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-20 11:46:42', '2021-05-20 11:46:42'),
(215, 'default', 'updated', 'App\\Models\\Headword', 364, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":1},\"old\":{\"vulgarity\":0}}', '2021-05-20 11:46:52', '2021-05-20 11:46:52'),
(216, 'default', 'updated', 'App\\Models\\Headword', 356, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-20 11:47:34', '2021-05-20 11:47:34'),
(217, 'default', 'updated', 'App\\Models\\Headword', 356, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":1},\"old\":{\"vulgarity\":0}}', '2021-05-20 11:47:40', '2021-05-20 11:47:40'),
(218, 'default', 'updated', 'App\\Models\\Headword', 363, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-20 11:47:47', '2021-05-20 11:47:47'),
(219, 'default', 'updated', 'App\\Models\\Headword', 363, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":1},\"old\":{\"vulgarity\":0}}', '2021-05-20 11:54:23', '2021-05-20 11:54:23'),
(220, 'default', 'created', 'App\\Models\\Headword', 365, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"aaa\",\"pronunciation\":\"aaa\",\"user\":2,\"date\":\"2021-05-20T03:54:49.000000Z\",\"validity\":\"valid\",\"vulgarity\":1}}', '2021-05-20 11:54:49', '2021-05-20 11:54:49'),
(221, 'default', 'created', 'App\\Models\\Sense', 371, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":365,\"syncat\":\"noun\",\"g_eng\":\"a\",\"g_ceb\":\"a\",\"semdom_id\":\"aaa\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T03:54:49.000000Z\",\"validity\":\"valid\"}}', '2021-05-20 11:54:49', '2021-05-20 11:54:49'),
(222, 'default', 'updated', 'App\\Models\\Headword', 363, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-21 02:56:17', '2021-05-21 02:56:17'),
(223, 'default', 'updated', 'App\\Models\\Headword', 364, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-21 02:56:30', '2021-05-21 02:56:30'),
(224, 'default', 'created', 'App\\Models\\Headword', 366, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"aaaa\",\"pronunciation\":\"aaaa\",\"user\":2,\"date\":\"2021-05-20T18:57:21.000000Z\",\"validity\":\"valid\",\"vulgarity\":1}}', '2021-05-21 02:57:21', '2021-05-21 02:57:21'),
(225, 'default', 'created', 'App\\Models\\Sense', 372, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":366,\"syncat\":\"verb\",\"g_eng\":\"aaaa\",\"g_ceb\":\"aaaa\",\"semdom_id\":\"aaaa\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T18:57:21.000000Z\",\"validity\":\"valid\"}}', '2021-05-21 02:57:21', '2021-05-21 02:57:21'),
(226, 'default', 'updated', 'App\\Models\\Headword', 366, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":0},\"old\":{\"vulgarity\":1}}', '2021-05-21 02:57:38', '2021-05-21 02:57:38'),
(227, 'default', 'updated', 'App\\Models\\Headword', 366, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":1},\"old\":{\"vulgarity\":0}}', '2021-05-21 02:57:43', '2021-05-21 02:57:43'),
(228, 'default', 'created', 'App\\Models\\Headword', 367, 'App\\Models\\User', 2, '{\"attributes\":{\"headword\":\"aaaaa\",\"pronunciation\":\"a\",\"user\":2,\"date\":\"2021-05-20T18:57:59.000000Z\",\"validity\":\"valid\",\"vulgarity\":0}}', '2021-05-21 02:57:59', '2021-05-21 02:57:59'),
(229, 'default', 'created', 'App\\Models\\Sense', 373, 'App\\Models\\User', 2, '{\"attributes\":{\"headword_id\":367,\"syncat\":\"noun\",\"g_eng\":\"a\",\"g_ceb\":\"a\",\"semdom_id\":\"a\",\"semdom_other\":null,\"user\":2,\"date\":\"2021-05-20T18:57:59.000000Z\",\"validity\":\"valid\"}}', '2021-05-21 02:57:59', '2021-05-21 02:57:59'),
(230, 'default', 'updated', 'App\\Models\\Headword', 367, 'App\\Models\\User', 2, '{\"attributes\":{\"vulgarity\":1},\"old\":{\"vulgarity\":0}}', '2021-05-21 02:58:10', '2021-05-21 02:58:10'),
(231, 'default', 'updated', 'App\\Models\\User', 2, 'App\\Models\\User', 2, '[]', '2021-05-21 03:23:32', '2021-05-21 03:23:32'),
(232, 'default', 'created', 'App\\Models\\User', 5, 'App\\Models\\User', 2, '[]', '2021-05-21 03:37:21', '2021-05-21 03:37:21'),
(233, 'default', 'created', 'App\\Models\\User', 6, 'App\\Models\\User', 2, '[]', '2021-05-21 04:05:11', '2021-05-21 04:05:11'),
(234, 'default', 'created', 'App\\Models\\User', 7, 'App\\Models\\User', 2, '[]', '2021-05-21 04:06:43', '2021-05-21 04:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'view-dash', 'View dashboard.', 'Can view backend dashboard.', '2021-04-12 03:08:27', '2021-04-12 03:08:27'),
(2, 'view-manage', 'view management', 'Can view management routes.', '2021-04-12 03:08:27', '2021-04-12 03:08:27'),
(3, 'view-appdict', 'view application dictionary entries.', 'Can view internal dictionaryroutes.', '2021-04-12 03:08:27', '2021-04-12 03:08:27'),
(4, 'view-log', 'View Changelog', 'Can view application changelog.', '2021-04-13 14:19:52', NULL),
(5, 'view-users', 'View users.', 'Can view application users.', '2021-04-13 14:19:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 2),
(1, 6),
(2, 2),
(3, 2),
(3, 6),
(4, 2),
(5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 1, 'App\\Models\\User'),
(3, 1, 'App\\Models\\User'),
(4, 1, 'App\\Models\\User'),
(5, 1, 'App\\Models\\User'),
(1, 2, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User'),
(3, 2, 'App\\Models\\User'),
(4, 2, 'App\\Models\\User'),
(5, 2, 'App\\Models\\User'),
(1, 3, 'App\\Models\\User'),
(2, 3, 'App\\Models\\User'),
(3, 3, 'App\\Models\\User'),
(4, 3, 'App\\Models\\User'),
(5, 3, 'App\\Models\\User'),
(1, 4, 'App\\Models\\User'),
(2, 4, 'App\\Models\\User'),
(3, 4, 'App\\Models\\User'),
(4, 4, 'App\\Models\\User'),
(5, 4, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'administrator', 'Administrator', 'Administrator', '2021-04-12 03:08:27', '2021-04-12 03:08:27'),
(3, 'user', 'User', 'User', '2021-04-12 03:08:27', '2021-04-12 03:08:27'),
(4, 'role_name', 'Role Name', 'Role Name', '2021-04-12 03:08:27', '2021-04-12 03:08:27'),
(6, 'editor', 'Editor', 'Collalex editor--can view/edit dictionary entries, but lacks admin abilities.', '2021-04-12 18:18:07', '2021-04-12 18:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(2, 1, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User'),
(2, 3, 'App\\Models\\User'),
(2, 4, 'App\\Models\\User'),
(6, 5, 'App\\Models\\User');

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
(2, 'Admin', 'admin@admin.com', NULL, '$2y$10$VBA35eYl64S0jgcWi0zYzOXkF751FsOck4deRE8HW6szyIZS.ecyG', 'gL05ajWN29zhrAv2d16Zjg869jNCm1nP3vO8rfGy5jGKpG3Q4FNiwZJGZEfc', '2021-05-11 05:54:54', '2021-05-11 05:54:54'),
(6, 'George Popovic', 'georgesmpopovic@gmail.com', NULL, '$2y$10$//EkuO7/VNhyOofT1AAsY.1Eq/a86wzR3PKMHBPWNs0YtRtDKqcna', NULL, '2021-05-21 04:05:11', '2021-05-21 04:05:11'),
(7, 'temp', 'temp@temp.com', NULL, '$2y$10$6yn/UaPNs38oZR7l1iBZ3eK36A2QKTOd2ASAaKCBPL77kh3szlWr6', NULL, '2021-05-21 04:06:43', '2021-05-21 04:06:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
