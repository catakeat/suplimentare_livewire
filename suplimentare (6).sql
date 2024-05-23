-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 10:01 AM
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
-- Database: `suplimentare`
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
  `eroare` varchar(255) DEFAULT NULL,
  `ora` time(6) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `eroare`, `ora`) VALUES
(1, 'test', '00:00:00.000000');

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
  `approval` enum('rejected','pending','approved','arhivat') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `destinatar`, `ora`, `data`, `mesaj`, `data_postarii`, `approval`) VALUES
(3, 17, 38, '10:55:00', '2023-09-30', 'test3\r\n', '2023-09-29 07:53:35.508363', 'approved'),
(5, 17, 38, '12:21:00', '2023-11-09', 'testaaare', '2023-10-02 08:18:45.737429', 'approved'),
(6, 17, 38, '01:47:00', '0000-00-00', 'hghghg', '2023-10-02 08:45:32.225782', 'approved'),
(7, 17, 38, '02:49:00', '2023-10-13', '\r\ntest11', '2023-10-02 08:46:30.985727', 'approved'),
(8, 17, 38, '10:55:00', '2023-09-30', 'test3\r\n', '2023-09-29 04:53:35.508363', 'approved'),
(9, 17, 12, '10:55:00', '2023-09-30', 'test4', '2023-09-29 04:54:15.951935', 'rejected'),
(10, 17, 4, '12:21:00', '2023-11-09', 'testaaare', '2023-10-02 05:18:45.737429', 'rejected'),
(11, 17, 38, '01:47:00', '0000-00-00', 'ghgfhgfhfghfhfhfghfghfghfghfghfghfghf\r\ngfghhhjhjg\r\ngfgfgfgfg', '2023-10-02 05:45:32.225782', 'approved'),
(12, 17, 38, '02:49:00', '2023-10-13', 'a11', '2023-10-02 05:46:30.985727', 'approved'),
(13, 17, 38, '10:55:00', '2023-09-30', 'test3\r\n', '2023-09-29 04:53:35.508363', 'approved'),
(14, 17, 24, '10:55:00', '2023-09-30', 'test4', '2023-09-29 04:54:15.951935', 'rejected'),
(15, 17, 38, '12:21:00', '2023-11-09', 'testaaare', '2023-10-02 05:18:45.737429', 'approved'),
(16, 17, 38, '01:47:00', '0000-00-00', 'hai la lycru', '2023-10-02 05:45:32.225782', 'approved'),
(17, 17, 38, '02:49:00', '2023-10-13', 'noapteaaa11', '2023-10-02 05:46:30.985727', 'approved'),
(18, 2, 3, '05:33:00', '2023-10-27', 'test de la nicoli9na', '2023-10-02 12:31:26.445810', 'rejected'),
(21, 12, 7, '07:38:00', '2023-10-27', 'test de la simona pt maricica', '2023-10-05 11:35:14.420990', 'rejected'),
(22, 12, 9, '08:42:00', '2023-10-27', 'de la Simona pentru Miri', '2023-10-05 11:37:31.776392', 'rejected'),
(23, 17, 40, '07:14:00', '2023-10-19', 'test de la dani pt ruxi', '2023-10-05 13:11:52.078468', 'rejected'),
(24, 17, 41, '01:51:00', '2023-10-27', 'test messge', '2023-10-06 06:48:03.105591', 'rejected'),
(25, 17, 33, '02:10:00', '2023-10-20', 'pentru Cami', '2023-10-11 09:07:31.313730', 'approved'),
(26, 17, 33, '05:50:00', '2023-10-28', '28 noct', '2023-10-12 11:47:53.279868', 'approved'),
(27, 17, 41, '10:23:00', '2023-10-27', 'covocat test user', '2023-10-16 05:22:13.638530', 'rejected'),
(28, 17, 45, '12:10:00', '2023-10-18', 'echipat complet', '2023-10-16 06:08:14.058333', 'rejected'),
(29, 17, 45, '01:09:00', '2023-10-27', 'pi 27 ie', '2023-10-17 07:05:20.943769', 'pending'),
(30, 17, 41, '02:24:00', '2023-11-08', 'test de layout', '2023-10-17 07:20:13.708555', 'pending'),
(31, 17, 42, '02:24:00', '2023-11-08', 'test de layout 2', '2023-10-17 07:20:40.641630', 'pending'),
(32, 17, 38, '12:16:00', '2023-10-23', 'mesaj pt user : esti convocat', '2023-10-20 07:14:25.715087', 'approved'),
(33, 17, 45, '01:20:00', '2023-10-23', 'cata e convocat', '2023-10-20 07:16:53.789465', 'approved'),
(34, 17, 38, '01:36:00', '2023-10-26', 'test pt Flori', '2023-10-20 07:32:45.114483', 'pending'),
(37, 17, 33, '11:11:00', '2023-12-19', 'pentru camelia3', '2023-12-18 08:37:25.069213', 'approved'),
(38, 17, 71, '11:14:00', '2023-12-29', 'tetsmsg', '2023-12-18 10:31:54.205323', 'pending'),
(39, 17, 82, '03:57:00', '2023-12-29', 'fara mesaj', '2023-12-18 10:53:33.302441', 'pending'),
(40, 17, 77, '01:06:00', '2023-12-22', 'test', '2023-12-18 11:05:34.743720', 'pending'),
(41, 17, 41, '05:11:00', '2023-12-22', 'tesuser', '2023-12-18 11:07:39.271918', 'pending'),
(42, 17, 71, '04:25:00', '2023-12-22', 'asas', '2023-12-18 11:23:11.630178', 'arhivat'),
(43, 17, 88, '01:27:00', '2023-12-16', 'asas1', '2023-12-18 11:23:41.229428', 'pending'),
(44, 17, 82, '01:35:00', '2023-12-22', 'sasa', '2023-12-18 11:32:15.528670', 'pending'),
(45, 17, 77, '05:52:00', '2023-12-30', 'dsds', '2023-12-18 11:49:26.871454', 'pending'),
(46, 17, 71, '05:55:00', '2023-12-15', 'test', '2023-12-18 11:52:55.943515', 'arhivat'),
(47, 17, 71, '01:56:00', '2023-12-16', 'test2', '2023-12-18 11:53:08.005948', 'arhivat'),
(48, 17, 71, '02:50:00', '2023-12-29', 'hai ma', '2023-12-19 09:46:20.374811', 'arhivat'),
(49, 17, 16, '02:42:00', '2024-01-25', 'pe 25', '2024-01-07 12:40:37.810834', 'pending'),
(50, 17, 40, '05:44:00', '2024-01-17', 'pe 17', '2024-01-07 12:41:36.251765', 'pending'),
(51, 17, 82, '05:30:00', '2024-01-18', 'asasasassasaxs  rwrrw', '2024-01-07 15:28:19.654620', 'pending'),
(52, 92, 21, '06:32:00', '2024-01-11', 'test', '2024-01-08 13:30:56.589888', 'pending'),
(53, 92, 12, '05:50:00', '2024-01-13', 'test ', '2024-01-08 13:33:43.450596', 'pending'),
(54, 92, 9, '03:50:00', '2024-01-19', 'ddsd', '2024-01-08 13:46:48.284222', 'pending'),
(55, 92, 9, '03:52:00', '2024-01-19', 'test', '2024-01-08 13:48:12.095572', 'pending'),
(56, 92, 8, '03:51:00', '2024-01-17', 'test', '2024-01-08 13:49:27.740069', 'pending'),
(57, 92, 12, '03:54:00', '2024-01-26', 'test', '2024-01-08 13:51:40.467346', 'pending'),
(58, 92, 0, '12:00:00', '0000-00-00', '', '2024-01-08 13:51:49.058146', 'pending'),
(59, 92, 12, '03:54:00', '2024-01-26', 'test', '2024-01-08 13:54:33.611819', 'pending'),
(60, 92, 12, '03:54:00', '2024-01-26', 'test', '2024-01-08 13:56:00.723219', 'pending'),
(61, 92, 12, '03:54:00', '2024-01-26', 'test', '2024-01-08 13:57:45.855995', 'pending'),
(62, 92, 8, '08:10:00', '2024-01-18', 'test', '2024-01-08 14:07:54.627447', 'pending'),
(63, 92, 8, '08:10:00', '2024-01-18', 'test', '2024-01-08 14:08:06.087913', 'pending'),
(64, 92, 8, '08:10:00', '2024-01-18', 'test', '2024-01-08 14:12:23.037779', 'pending'),
(65, 92, 8, '09:14:00', '2024-01-27', 'test', '2024-01-08 14:15:04.406170', 'pending'),
(66, 92, 8, '09:14:00', '2024-01-27', 'test', '2024-01-08 14:15:27.531608', 'pending'),
(67, 92, 8, '09:14:00', '2024-01-27', 'test', '2024-01-08 14:20:20.341924', 'arhivat'),
(68, 92, 7, '04:24:00', '2024-01-27', 'test', '2024-01-08 14:20:53.023502', 'arhivat'),
(69, 92, 15, '06:38:00', '2024-01-18', 'test de email', '2024-01-09 12:37:22.100975', 'pending'),
(70, 92, 15, '06:38:00', '2024-01-18', 'test de email', '2024-01-09 12:37:36.531458', 'pending'),
(71, 92, 15, '03:41:00', '2024-01-26', 'test ', '2024-01-09 13:39:32.962081', 'arhivat'),
(72, 92, 15, '03:41:00', '2024-01-26', 'test ', '2024-01-09 13:40:00.693198', 'arhivat'),
(73, 92, 15, '03:41:00', '2024-01-26', 'test ', '2024-01-09 13:41:29.539139', 'arhivat'),
(74, 92, 15, '06:50:00', '2024-01-26', 'mesaj de test', '2024-01-09 13:47:24.983127', 'arhivat'),
(75, 92, 15, '06:52:00', '2024-01-26', 'test', '2024-01-09 13:49:42.640389', 'arhivat'),
(76, 92, 103, '09:00:00', '2024-01-25', 'test ', '2024-01-09 13:54:21.343136', 'pending'),
(77, 92, 15, '11:23:00', '2024-01-13', 'esti convocata la munca', '2024-01-10 09:19:13.081622', 'arhivat'),
(78, 92, 12, '11:23:00', '2024-01-20', 'iarasi', '2024-01-10 09:20:48.188040', 'pending'),
(79, 92, 12, '11:23:00', '2024-01-20', 'iarasi', '2024-01-10 09:20:59.492550', 'pending'),
(80, 92, 104, '02:21:00', '2024-01-13', 'ffsdfs', '2024-01-10 09:21:46.492853', 'pending'),
(81, 92, 104, '01:51:00', '2024-01-19', 'testb ', '2024-01-11 07:47:36.756639', 'pending'),
(82, 92, 104, '01:51:00', '2024-01-19', 'testb ', '2024-01-11 07:48:05.811128', 'pending'),
(83, 92, 104, '09:53:00', '2024-01-25', 'test ', '2024-01-11 07:49:49.521123', 'pending'),
(84, 92, 104, '09:54:00', '2024-01-26', 'mesajul este asta', '2024-01-11 07:51:12.406986', 'pending'),
(85, 92, 104, '02:04:00', '2024-01-27', 'teeest', '2024-01-11 08:00:40.657204', 'pending'),
(86, 17, 105, '03:05:00', '2024-01-21', 'test', '2024-01-12 08:00:17.476561', 'approved'),
(87, 17, 92, '02:07:00', '2024-01-28', 'test', '2024-01-12 08:03:12.667267', 'rejected'),
(88, 92, 92, '12:15:00', '2024-01-12', 'test', '2024-01-12 09:15:58.264208', 'rejected'),
(89, 92, 104, '03:33:00', '2024-01-27', 'test', '2024-01-12 09:29:24.762229', 'arhivat'),
(90, 92, 104, '09:46:00', '2024-01-26', 'test', '2024-01-16 07:41:16.103133', 'arhivat'),
(91, 92, 115, '17:23:00', '2024-01-27', 'test de nonce', '2024-01-17 10:19:09.956518', 'pending'),
(92, 92, 126, '13:13:00', '2024-01-26', 'dsdsdsd', '2024-01-22 11:11:32.480027', 'pending'),
(93, 92, 126, '13:18:00', '2024-02-02', 'convocat', '2024-01-22 11:13:40.628084', 'pending'),
(94, 92, 126, '13:17:00', '2024-01-25', 'vvv', '2024-01-22 11:14:33.561922', 'pending'),
(95, 92, 128, '20:50:00', '2024-01-26', 'xccx', '2024-01-23 13:46:00.173705', 'pending'),
(96, 92, 128, '10:18:00', '2024-01-31', 'acum', '2024-01-25 08:15:04.803025', 'pending'),
(97, 92, 128, '03:38:00', '2024-01-26', 'test12', '2024-01-25 08:33:16.039133', 'pending'),
(98, 92, 128, '10:38:00', '2024-01-26', 'test1 cu  sender ', '2024-01-25 08:34:11.490162', 'pending'),
(99, 92, 128, '10:40:00', '2024-01-30', 'test de send', '2024-01-25 08:36:08.945145', 'pending'),
(100, 92, 128, '10:43:00', '2024-01-27', 'ce vrea', '2024-01-25 08:38:22.931522', 'pending'),
(101, 92, 128, '10:50:00', '2024-01-19', 'se testeaza', '2024-01-25 08:45:17.967955', 'pending'),
(102, 92, 128, '11:10:00', '2024-01-20', 'ceva schimbari', '2024-01-25 09:06:32.025970', 'pending'),
(103, 92, 12, '09:59:00', '2024-01-27', 'Esti convocata la shmotru in birou', '2024-01-26 09:59:54.276161', 'pending'),
(104, 92, 2, '22:00:00', '2024-01-27', 'Esti convocata si tu la shmotru in birou', '2024-01-26 10:00:42.935026', 'pending'),
(105, 92, 130, '20:46:00', '2024-02-08', 'test', '2024-01-30 12:42:30.906773', 'pending'),
(106, 92, 130, '14:02:00', '2024-02-06', 'februaire', '2024-01-30 12:55:22.876699', 'pending'),
(107, 92, 141, '11:31:00', '2024-02-02', 'test din chrome', '2024-01-31 09:26:34.804879', 'pending'),
(108, 92, 141, '11:12:00', '2024-02-09', 'din firefox', '2024-01-31 09:34:19.091189', 'pending'),
(109, 92, 141, '02:42:00', '2024-01-26', 'ok', '2024-01-31 09:43:03.523320', 'pending'),
(110, 92, 141, '04:00:00', '2024-01-27', 'fara sendEmail', '2024-01-31 09:55:40.118714', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `entitate` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` enum('basic','administrator') DEFAULT 'basic',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `entitate`, `name`, `email`, `type`, `deleted_at`) VALUES
(2, 'nicolina.adamescu@upt.ro', 'nicolina', 2, '', '', 'basic', NULL),
(3, 'alexandra.ababii@upt.ro', 'alexandra', 2, '', '', 'basic', NULL),
(4, 'gabriela.nagy@upt.ro', 'gabriela', 2, '', '', 'basic', NULL),
(5, 'otilia.stanchescu@upt.ro', 'otilia', 2, '', '', 'basic', NULL),
(6, 'camelia.wanderer@upt.ro', 'camelia', 2, '', '', 'basic', NULL),
(7, 'maricica.roman@upt.ro', 'maricica', 1, '', '', 'basic', NULL),
(8, 'oana.rus@upt.ro', 'oana', 1, '', '', 'basic', NULL),
(12, 'simona.filipas@upt.ro', 'simona', 1, '', '', 'basic', NULL),
(15, 'alina.bogdan@upt.ro', 'alina', 1, '', '', 'basic', NULL),
(16, 'mircea.marazan@upt.ro', 'mircea', 5, '', '', 'basic', NULL),
(17, 'daniel.trifan@upt.ro', 'daniel', 5, '', '', 'basic', NULL),
(23, 'liliana.filip@upt.ro', 'liliana', 1, '', '', 'basic', NULL),
(24, 'simona.tripon@upt.ro', 'simona', 1, '', '', 'basic', NULL),
(28, 'loredana.coroban@upt.ro', '', 2, '', '', 'basic', NULL),
(40, 'ruxandra.gonciari@upt.ro', '', 5, '', '', 'basic', NULL),
(41, 'testuser@upt.ro', '', 4, '', '', 'basic', NULL),
(71, 'arsulescucatalin@yahoo.com', 'test', 5, '', '', 'basic', NULL),
(87, 'floarea.iotcov@upt.ro', '', 4, '', '', 'basic', NULL),
(92, 'catalin.arsulescu@upt.ro', '', 3, '', '', 'administrator', NULL),
(93, 'miriana.jelchici@upt.ro', '', 1, '', '', 'basic', NULL),
(105, 'camelia.avram2@upt.ro', '', 3, '', '', 'basic', NULL),
(141, 'catakeat@gmail.com', '', 1, '', '', 'basic', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `zile_libere`
--
ALTER TABLE `zile_libere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
