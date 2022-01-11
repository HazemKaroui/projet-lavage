-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2022 at 06:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lavage`
--
CREATE DATABASE IF NOT EXISTS `lavage` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lavage`;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `auth_type` varchar(255) NOT NULL,
  `selector` text NOT NULL,
  `token` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expires_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `res_id` int(11) NOT NULL,
  `res_date` date DEFAULT NULL,
  `res_slot` varchar(32) DEFAULT NULL,
  `res_name` varchar(255) NOT NULL,
  `res_email` varchar(255) NOT NULL,
  `res_tel` varchar(60) NOT NULL,
  `res_notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`res_id`, `res_date`, `res_slot`, `res_name`, `res_email`, `res_tel`, `res_notes`) VALUES
(1, '2022-01-13', 'AM', 'hazem', 'hazem@test.com', '+21623646870', 'lavage complet'),
(2, '2022-01-20', 'PM', 'Mouldi', 'mouldi@yahoo.fr', '+21694659597', 'lavage moto'),
(3, '2022-01-20', 'AM', 'Wissal', 'wissal@mail.com', '+21623646870', 'lavage rapide'),
(4, '2022-01-13', 'AM', 'Fathi', 'test@home.tn', '+21623604604', 'lavage complet'),
(5, '2022-01-24', 'AM', 'Bjeoui', 'tayara@gmail.com', '+21625154515', 'tandhifa behya belehi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `headline` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `profile_image` varchar(255) NOT NULL DEFAULT '_defaultUser.png',
  `verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `gender`, `headline`, `bio`, `profile_image`, `verified_at`, `created_at`, `updated_at`, `deleted_at`, `last_login_at`) VALUES
(34, 'admin', 'py1hon@gmail.com', '$2y$10$1EBdwRIwNYe064VuIzE0v.kwmq9LmQ.CZ8B0m./pGC4PKrq1EuuSO', '', '', NULL, '', '', '_defaultUser.png', '2022-01-11 00:34:50', '2022-01-11 00:31:50', '2022-01-11 16:46:23', NULL, '2022-01-11 16:46:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `res_date` (`res_date`),
  ADD KEY `res_slot` (`res_slot`),
  ADD KEY `res_name` (`res_name`),
  ADD KEY `res_email` (`res_email`),
  ADD KEY `res_tel` (`res_tel`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`,`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
