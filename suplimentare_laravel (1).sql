-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 03:27 PM
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
-- Database: `suplimentare_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_entitati`
--

CREATE TABLE `access_entitati` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `entitate_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `access_entitati`
--

INSERT INTO `access_entitati` (`id`, `user_id`, `entitate_id`) VALUES
(1, 2, 2),
(2, 12, 1),
(3, 17, 3),
(4, 17, 4),
(5, 17, 5),
(9, 92, 1),
(10, 92, 2);

-- --------------------------------------------------------

--
-- Table structure for table `entitati`
--

CREATE TABLE `entitati` (
  `id` int(11) NOT NULL,
  `nume` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entitati`
--

INSERT INTO `entitati` (`id`, `nume`) VALUES
(1, 'Birou Personal'),
(2, 'Birou Salarizare'),
(3, 'Birou Software'),
(4, 'Birou Suport Tehnic'),
(5, 'Comunicatii si Informatizare');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `event` varchar(255) DEFAULT NULL,
  `login_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `IP` varchar(100) DEFAULT NULL,
  `observatii` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `event`, `login_time`, `IP`, `observatii`) VALUES
(1, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-16 12:32:26.898220', '127.0.0.1', 'Incercare de login = 4 incercare'),
(2, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-16 12:32:26.937919', '127.0.0.1', 'S-a logat'),
(3, 'catalin.arsulescu@upt.ro', 'Logout event', '2024-02-16 12:39:03.453664', NULL, 'Userul s-a delogat'),
(4, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-16 12:40:21.752258', '127.0.0.1', 'Incercare de login = 1 incercare'),
(5, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-16 12:40:21.757962', '127.0.0.1', 'S-a logat'),
(6, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-19 05:48:10.358489', '127.0.0.1', 'Incercare de login = 1 incercare'),
(7, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-19 05:48:10.397964', '127.0.0.1', 'S-a logat'),
(8, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-19 06:29:56.118175', '127.0.0.1', 'Incercare de login = 2 incercare'),
(9, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-19 06:29:56.125819', '127.0.0.1', 'S-a logat'),
(10, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-19 07:05:25.539121', '127.0.0.1', 'Incercare de login = 2 incercare'),
(11, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-19 07:05:25.542396', '127.0.0.1', 'S-a logat'),
(12, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-19 07:49:44.921960', '127.0.0.1', 'Incercare de login = 1 incercare'),
(13, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-19 07:49:44.925075', '127.0.0.1', 'S-a logat'),
(14, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-19 08:24:58.627587', '127.0.0.1', 'Incercare de login = 1 incercare'),
(15, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-19 08:24:58.632396', '127.0.0.1', 'S-a logat'),
(16, 'catalin.arsulescu@upt.ro', 'Logout event', '2024-02-19 08:25:28.869379', NULL, 'Userul s-a delogat'),
(17, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-19 08:25:48.776928', '127.0.0.1', 'Incercare de login = 1 incercare'),
(18, 'marinela.ghingela@upt.ro', 'Login event', '2024-02-19 08:25:48.781627', '127.0.0.1', 'S-a logat'),
(19, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-19 08:26:06.332418', '127.0.0.1', 'Incercare de login = 1 incercare'),
(20, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-19 08:26:06.334351', '127.0.0.1', 'S-a logat'),
(21, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-19 09:40:40.323893', '127.0.0.1', 'Incercare de login = 1 incercare'),
(22, 'marinela.ghingela@upt.ro', 'Login event', '2024-02-19 09:40:40.327892', '127.0.0.1', 'S-a logat'),
(23, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-19 09:40:51.580347', '127.0.0.1', 'Incercare de login = 1 incercare'),
(24, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-19 09:40:51.582962', '127.0.0.1', 'S-a logat'),
(25, 'marinela.ghingela@upt.ro', 'Logout event', '2024-02-19 09:52:31.278824', NULL, ''),
(26, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-19 09:53:43.485661', '127.0.0.1', 'Incercare de login = 1 incercare'),
(27, 'marinela.ghingela@upt.ro', 'Login event', '2024-02-19 09:53:43.489650', '127.0.0.1', 'S-a logat'),
(28, 'marinela.ghingela@upt.ro', 'Logout event', '2024-02-19 09:55:15.812426', NULL, ''),
(29, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-19 09:57:23.277713', '127.0.0.1', 'Incercare de login = 1 incercare'),
(30, 'marinela.ghingela@upt.ro', 'Login event', '2024-02-19 09:57:23.282222', '127.0.0.1', 'S-a logat'),
(31, 'marinela.ghingela@upt.ro', 'Logout event', '2024-02-19 09:58:22.560462', NULL, ''),
(32, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-19 09:58:37.127793', '127.0.0.1', 'Incercare de login = 1 incercare'),
(33, 'marinela.ghingela@upt.ro', 'Login event', '2024-02-19 09:58:37.130378', '127.0.0.1', 'S-a logat'),
(34, 'marinela.ghingela@upt.ro', 'Logout event', '2024-02-19 09:59:19.145203', NULL, ''),
(35, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-19 10:00:08.609183', '127.0.0.1', 'Incercare de login = 1 incercare'),
(36, 'marinela.ghingela@upt.ro', 'Login event', '2024-02-19 10:00:08.611954', '127.0.0.1', 'S-a logat'),
(37, 'marinela.ghingela@upt.ro', 'Logout event', '2024-02-19 10:00:50.706546', NULL, ''),
(38, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-19 10:01:34.289892', '127.0.0.1', 'Incercare de login = 1 incercare'),
(39, 'marinela.ghingela@upt.ro', 'Login event', '2024-02-19 10:01:34.293420', '127.0.0.1', 'S-a logat'),
(40, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-19 10:38:42.001896', '127.0.0.1', 'Incercare de login = 1 incercare'),
(41, 'marinela.ghingela@upt.ro', 'Login event', '2024-02-19 10:38:42.004498', '127.0.0.1', 'S-a logat'),
(42, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-19 11:14:06.873108', '127.0.0.1', 'Incercare de login = 1 incercare'),
(43, 'marinela.ghingela@upt.ro', 'Login event', '2024-02-19 11:14:06.876493', '127.0.0.1', 'S-a logat'),
(44, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-19 11:22:08.406411', '127.0.0.1', 'Incercare de login = 1 incercare'),
(45, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-19 11:22:08.410613', '127.0.0.1', 'S-a logat'),
(46, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-19 11:48:45.952609', '127.0.0.1', 'Incercare de login = 1 incercare'),
(47, 'marinela.ghingela@upt.ro', 'Login event', '2024-02-19 11:48:45.956600', '127.0.0.1', 'S-a logat'),
(48, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-19 11:57:47.964285', '127.0.0.1', 'Incercare de login = 1 incercare'),
(49, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-19 11:57:47.967529', '127.0.0.1', 'S-a logat'),
(50, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-19 12:31:47.709513', '127.0.0.1', 'Incercare de login = 1 incercare'),
(51, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-19 12:31:47.713651', '127.0.0.1', 'S-a logat'),
(52, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-19 12:32:32.546127', '127.0.0.1', 'Incercare de login = 2 incercare'),
(53, 'marinela.ghingela@upt.ro', 'Login event', '2024-02-19 12:32:32.552548', '127.0.0.1', 'S-a logat'),
(54, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-20 06:25:23.424849', '127.0.0.1', 'Incercare de login = 1 incercare'),
(55, 'marinela.ghingela@upt.ro', 'Login event', '2024-02-20 06:25:23.450541', '127.0.0.1', 'S-a logat'),
(56, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-20 06:25:36.624113', '127.0.0.1', 'Incercare de login = 1 incercare'),
(57, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-20 06:25:36.628066', '127.0.0.1', 'S-a logat'),
(58, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-20 07:32:08.167756', '127.0.0.1', 'Incercare de login = 1 incercare'),
(59, 'marinela.ghingela@upt.ro', 'Login event', '2024-02-20 07:32:08.172216', '127.0.0.1', 'S-a logat'),
(60, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-20 07:37:42.437720', '127.0.0.1', 'Incercare de login = 1 incercare'),
(61, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-20 07:37:42.440018', '127.0.0.1', 'S-a logat'),
(62, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-20 08:47:04.343536', '127.0.0.1', 'Incercare de login = 1 incercare'),
(63, 'marinela.ghingela@upt.ro', 'Login event', '2024-02-20 08:47:04.350374', '127.0.0.1', 'S-a logat'),
(64, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-20 08:48:30.623702', '127.0.0.1', 'Incercare de login = 1 incercare'),
(65, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-20 08:48:30.628031', '127.0.0.1', 'S-a logat'),
(66, 'marinela.ghingela@upt.ro', 'Logout event', '2024-02-20 08:49:49.214220', NULL, 'Userul s-a delogat'),
(67, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-20 08:50:36.745583', '127.0.0.1', 'Incercare de login = 1 incercare'),
(68, 'marinela.ghingela@upt.ro', 'Login attempt', '2024-02-20 08:50:47.019224', '127.0.0.1', 'Incercare de login = 1 incercare'),
(69, 'catalin.arsulescu@upt.ro', 'Logout event', '2024-02-20 08:52:38.113759', NULL, 'Userul s-a delogat'),
(70, 'catalin.arsulescu@upt.ro', 'Login attempt', '2024-02-20 08:52:44.349694', '127.0.0.1', 'Incercare de login = 1 incercare'),
(71, 'catalin.arsulescu@upt.ro', 'Login event', '2024-02-20 08:52:44.351391', '127.0.0.1', 'S-a logat'),
(72, 'catalin.arsulescu@upt.ro', 'Logout event', '2024-02-20 09:02:13.663267', NULL, 'Userul s-a delogat');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `destinatar` int(11) NOT NULL,
  `ora` time DEFAULT NULL,
  `data` date NOT NULL,
  `mesaj` text NOT NULL,
  `data_postarii` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `approval` enum('respins','pending','aprobat','arhivat') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `destinatar`, `ora`, `data`, `mesaj`, `data_postarii`, `approval`) VALUES
(1, 92, 154, '01:44:00', '2024-02-23', 'dsds', '2024-02-20 07:40:17.698059', 'pending'),
(9, 92, 154, '08:42:00', '2024-04-10', 'sasas', '2024-04-11 05:45:41.402026', 'pending'),
(24, 92, 15, '14:59:00', '2024-04-26', 'ceva', '2024-04-18 11:57:39.297265', 'pending'),
(44, 92, 8, '16:08:00', '2024-05-31', 'nu va cn', '2024-05-30 11:06:23.098070', 'pending'),
(46, 92, 8, '16:08:00', '2024-05-31', 'nu va cn', '2024-05-30 11:07:01.970229', 'pending'),
(47, 92, 8, '16:08:00', '2024-05-31', 'nu va cn', '2024-05-30 11:09:35.695650', 'pending'),
(48, 92, 8, '16:08:00', '2024-05-31', 'nu va cn', '2024-05-30 11:09:36.828649', 'pending'),
(49, 92, 8, '16:08:00', '2024-05-31', 'nu va cn1', '2024-05-30 11:10:03.831314', 'pending'),
(50, 92, 8, '16:08:00', '2024-05-31', 'nu va cn1', '2024-05-30 11:53:39.293414', 'pending'),
(51, 92, 7, '18:18:00', '2024-05-16', 'trtt', '2024-05-30 12:15:46.981346', 'pending'),
(52, 92, 7, '15:19:00', '2024-05-31', 'rer', '2024-05-30 12:16:22.223868', 'pending'),
(53, 92, 7, '18:15:00', '2024-05-17', 'in treut', '2024-05-30 13:13:59.215791', 'pending'),
(54, 92, 7, '18:15:00', '2024-05-17', 'in treut', '2024-05-30 13:14:01.328246', 'pending'),
(55, 92, 7, '18:15:00', '2024-05-17', 'in treut', '2024-05-30 13:14:02.503119', 'pending'),
(56, 92, 7, '18:15:00', '2024-05-17', 'in treut', '2024-05-30 13:14:03.031153', 'pending'),
(57, 92, 7, '18:15:00', '2024-05-17', 'in treut', '2024-05-30 13:14:03.533732', 'pending'),
(58, 92, 7, '18:17:00', '2024-05-24', 'sasa', '2024-05-30 13:15:56.770178', 'pending'),
(59, 92, 7, '18:17:00', '2024-05-24', 'sasa', '2024-05-30 13:16:31.311943', 'pending'),
(60, 92, 7, '16:23:00', '2024-05-03', 'dfdfs', '2024-05-30 13:20:17.896251', 'pending'),
(61, 92, 7, '16:26:00', '2024-05-18', 'sass', '2024-05-30 13:24:40.117196', 'pending'),
(62, 92, 7, '16:27:00', '2024-05-09', 'aA', '2024-05-30 13:25:48.803566', 'pending'),
(63, 92, 7, '16:27:00', '2024-05-09', 'aA', '2024-05-30 13:25:54.847274', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rate_limiter`
--

CREATE TABLE `rate_limiter` (
  `id` int(11) NOT NULL,
  `ultima_incecare` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `username` varchar(100) NOT NULL,
  `observatii` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `entitate` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `type` enum('basic','administrator') DEFAULT 'basic',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `entitate`, `name`, `email`, `type`, `deleted_at`, `updated_at`, `created_at`) VALUES
(2, 'nicolina.adamescu@upt.ro', 'nicolina', 2, '', '', 'basic', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(3, 'alexandra.babii@upt.ro', 'alexandra', 2, '', '', 'basic', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(4, 'gabriela.nagy@upt.ro', 'gabriela', 2, '', '', 'basic', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(5, 'otilia.stanchescu@upt.ro', 'otilia', 2, '', '', 'basic', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(6, 'camelia.wanderer@upt.ro', 'camelia', 2, '', '', 'basic', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(7, 'maricica.roman@upt.ro', 'maricica', 1, '', '', 'basic', NULL, '2024-04-22 05:41:39', '2024-03-20 12:04:13'),
(8, 'oana.rus@upt.ro', 'oana', 1, '', '', 'basic', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(12, 'simona.filipas@upt.ro', 'simona', 1, '', '', 'basic', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(16, 'mircea.marazan@upt.ro', 'mircea', 5, '', '', 'basic', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(17, 'daniel.trifan@upt.ro', 'daniel', 5, '', '', 'basic', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(23, 'liliana.filip@upt.ro', 'liliana', 1, '', '', 'basic', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(24, 'simona.tripon@upt.ro', 'simona', 1, '', '', 'basic', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(28, 'loredana.coroban@upt.ro', '', 2, '', '', 'basic', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(40, 'ruxandra.gonciari@upt.ro', '', 5, '', '', 'basic', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(87, 'floarea.iotcov@upt.ro', '', 4, '', '', 'basic', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(92, 'catalin.arsulescu@upt.ro', '', 3, '', '', 'administrator', NULL, '2024-03-20 12:03:32', '2024-03-20 12:04:13'),
(105, 'camelia.avram2@upt.ro', '', 3, '', '', 'basic', NULL, '2024-04-19 07:13:52', '2024-03-20 12:04:13'),
(155, '', '$2y$12$jGGAlwN9uNEWkUKZHv3J3ulROx.FBWik3OH3KRbjH2.XTpdwUdr16', NULL, 'catalin', 'catalin.arsulescu@upt.ro', 'basic', NULL, '2024-03-20 10:04:18', '2024-03-20 10:04:18'),
(160, NULL, NULL, NULL, NULL, NULL, 'basic', NULL, '2024-04-25 01:47:49', '2024-04-25 01:47:49'),
(161, NULL, NULL, NULL, NULL, NULL, 'basic', NULL, '2024-04-25 01:49:03', '2024-04-25 01:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `zile_libere`
--

CREATE TABLE `zile_libere` (
  `id` int(11) NOT NULL,
  `ziua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `zile_libere`
--

INSERT INTO `zile_libere` (`id`, `ziua`) VALUES
(23, '2023-01-02'),
(24, '2023-01-24'),
(25, '2023-04-14'),
(26, '2023-04-17'),
(27, '2023-05-01'),
(28, '2023-06-01'),
(29, '2023-06-05'),
(30, '2023-08-15'),
(31, '2023-11-30'),
(32, '2023-12-01'),
(33, '2023-12-25'),
(34, '2023-12-26'),
(38, '2023-01-03'),
(39, '2022-12-29'),
(40, '2023-01-23'),
(41, '2023-06-02'),
(42, '2023-08-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_entitati`
--
ALTER TABLE `access_entitati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entitati`
--
ALTER TABLE `entitati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate_limiter`
--
ALTER TABLE `rate_limiter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_username_deleted_at` (`username`,`deleted_at`),
  ADD KEY `users_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `zile_libere`
--
ALTER TABLE `zile_libere`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_entitati`
--
ALTER TABLE `access_entitati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `entitati`
--
ALTER TABLE `entitati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rate_limiter`
--
ALTER TABLE `rate_limiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `zile_libere`
--
ALTER TABLE `zile_libere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
