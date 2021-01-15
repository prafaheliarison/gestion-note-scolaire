-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: sayna-db:3306
-- Generation Time: Jan 15, 2021 at 03:39 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sayna-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

CREATE TABLE `classe` (
  `id` int(11) NOT NULL,
  `label` varchar(45) COLLATE utf8_bin NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `classe`
--

INSERT INTO `classe` (`id`, `label`, `created_at`, `updated_at`) VALUES
(1, 'Seconde', NULL, NULL),
(2, 'Première', NULL, NULL),
(3, 'Terminale', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eleve`
--

CREATE TABLE `eleve` (
  `id` int(11) NOT NULL,
  `classe_id` int(11) NOT NULL,
  `first_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eleve`
--

INSERT INTO `eleve` (`id`, `classe_id`, `first_name`, `last_name`, `sexe`, `birthdate`, `created_at`, `updated_at`) VALUES
(1, 1, 'Jolie', 'Lakin', 'M', '2003-12-06', '2021-01-15 08:57:15', '2021-01-15 08:57:15'),
(2, 1, 'Tevin', 'Klein', 'F', '2008-08-08', '2021-01-15 08:57:15', '2021-01-15 08:57:15'),
(3, 2, 'Lenny', 'Toy', 'M', '1990-11-20', '2021-01-15 08:57:16', '2021-01-15 08:57:16'),
(4, 1, 'Chasity', 'Mills', 'M', '2010-01-02', '2021-01-15 08:57:16', '2021-01-15 08:57:16'),
(5, 3, 'Ethelyn', 'Cole', 'M', '2016-07-21', '2021-01-15 08:57:16', '2021-01-15 08:57:16'),
(6, 2, 'Gussie', 'Haag', 'F', '2009-01-28', '2021-01-15 08:57:16', '2021-01-15 08:57:16'),
(7, 3, 'Kenny', 'Swift', 'F', '2019-03-03', '2021-01-15 08:57:16', '2021-01-15 08:57:16'),
(8, 3, 'Gregoria', 'Hodkiewicz', 'M', '2014-09-20', '2021-01-15 08:57:16', '2021-01-15 08:57:16'),
(9, 3, 'Hester', 'Trantow', 'F', '2018-08-25', '2021-01-15 08:57:16', '2021-01-15 08:57:16'),
(10, 3, 'Eloise', 'Herman', 'M', '2017-07-23', '2021-01-15 08:57:16', '2021-01-15 08:57:16'),
(11, 3, 'Chesley', 'Daniel', 'M', '1984-11-08', '2021-01-15 08:57:16', '2021-01-15 08:57:16'),
(12, 2, 'Jazmyne', 'Mann', 'M', '1995-05-05', '2021-01-15 08:57:16', '2021-01-15 08:57:16'),
(13, 1, 'Kaylee', 'Grimes', 'M', '2005-06-14', '2021-01-15 08:57:16', '2021-01-15 08:57:16'),
(14, 2, 'Rae', 'Hahn', 'M', '2004-05-01', '2021-01-15 08:57:16', '2021-01-15 08:57:16'),
(15, 1, 'Haylie', 'Weber', 'M', '1986-02-03', '2021-01-15 08:57:16', '2021-01-15 08:57:16'),
(16, 2, 'Yolanda', 'Jacobson', 'M', '2018-01-06', '2021-01-15 08:57:17', '2021-01-15 08:57:17'),
(17, 1, 'Cara', 'Reichert', 'F', '2004-01-07', '2021-01-15 08:57:17', '2021-01-15 08:57:17'),
(18, 3, 'Terrence', 'Kassulke', 'M', '2001-02-09', '2021-01-15 08:57:17', '2021-01-15 08:57:17'),
(19, 1, 'Douglas', 'Schneider', 'M', '1975-07-11', '2021-01-15 08:57:17', '2021-01-15 08:57:17'),
(20, 1, 'Liza', 'Carter', 'M', '1983-03-12', '2021-01-15 08:57:17', '2021-01-15 08:57:17'),
(21, 1, 'Eliane', 'Legros', 'M', '1983-09-09', '2021-01-15 08:57:17', '2021-01-15 13:26:06'),
(22, 1, 'Savannah', 'Bins', 'M', '2017-07-19', '2021-01-15 08:57:17', '2021-01-15 08:57:17'),
(23, 2, 'Roel', 'Moore', 'M', '1993-10-11', '2021-01-15 08:57:17', '2021-01-15 08:57:17'),
(24, 3, 'Eldred', 'Ryan', 'F', '2009-03-15', '2021-01-15 08:57:17', '2021-01-15 08:57:17'),
(25, 3, 'Nya', 'Swift', 'F', '1974-08-05', '2021-01-15 08:57:17', '2021-01-15 08:57:17'),
(26, 3, 'Kailyn', 'Crona', 'M', '2000-10-06', '2021-01-15 08:57:17', '2021-01-15 08:57:17'),
(27, 3, 'Alessandra', 'Leffler', 'M', '1996-12-24', '2021-01-15 08:57:18', '2021-01-15 08:57:18'),
(28, 2, 'Sandy', 'Gusikowski', 'F', '2003-11-30', '2021-01-15 08:57:18', '2021-01-15 08:57:18'),
(29, 1, 'Anne', 'Shanahan', 'M', '1997-02-07', '2021-01-15 08:57:18', '2021-01-15 13:25:03'),
(30, 3, 'Abdullah', 'Kuphal', 'F', '2018-08-20', '2021-01-15 08:57:18', '2021-01-15 08:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `enseignant`
--

CREATE TABLE `enseignant` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `last_name` varchar(45) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `enseignant`
--

INSERT INTO `enseignant` (`id`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'Bonnie', 'Reinger', '2021-01-15 09:33:31', '2021-01-15 09:33:31'),
(2, 'Reese', 'Pouros', '2021-01-15 09:33:31', '2021-01-15 09:33:31'),
(3, 'Raquel', 'Grant', '2021-01-15 09:33:31', '2021-01-15 09:33:31'),
(4, 'Jena', 'Armstrong', '2021-01-15 09:33:31', '2021-01-15 09:33:31'),
(5, 'Kraig', 'Block', '2021-01-15 09:33:31', '2021-01-15 09:33:31'),
(6, 'Eleonore', 'Larson', '2021-01-15 09:33:31', '2021-01-15 09:33:31'),
(7, 'Giovani', 'Steuber', '2021-01-15 09:33:31', '2021-01-15 09:33:31'),
(8, 'Josianne', 'Wilkinson', '2021-01-15 09:33:31', '2021-01-15 09:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `matiere`
--

CREATE TABLE `matiere` (
  `id` int(11) NOT NULL,
  `enseignant_id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_bin NOT NULL,
  `coeff` smallint(6) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `matiere`
--

INSERT INTO `matiere` (`id`, `enseignant_id`, `name`, `coeff`, `created_at`, `updated_at`) VALUES
(1, 1, 'Français', 2, NULL, NULL),
(2, 2, 'Anglais', 2, NULL, NULL),
(3, 3, 'Mathématique', 3, NULL, NULL),
(4, 4, 'Physique Chimie', 3, NULL, NULL),
(5, 5, 'Histoire et Géographie', 2, NULL, NULL),
(6, 6, 'Philosophie', 2, NULL, NULL),
(7, 7, 'Sciences naturelles', 2, NULL, NULL),
(8, 8, 'Malagasy', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `eleve_id` int(11) NOT NULL,
  `matiere_id` int(11) NOT NULL,
  `value` float NOT NULL,
  `total` float DEFAULT NULL,
  `observation` tinytext,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `eleve_id`, `matiere_id`, `value`, `total`, `observation`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 22, NULL, NULL, '2021-01-15 10:29:45', '2021-01-15 10:33:38'),
(2, 1, 2, 12, NULL, NULL, '2021-01-15 10:32:42', '2021-01-15 10:33:38'),
(3, 1, 3, 52, NULL, NULL, '2021-01-15 10:36:25', '2021-01-15 10:36:25'),
(4, 1, 8, 35, NULL, NULL, '2021-01-15 10:37:35', '2021-01-15 10:44:27'),
(5, 1, 4, 52, NULL, NULL, '2021-01-15 10:38:48', '2021-01-15 10:38:48'),
(6, 1, 7, 15.5, NULL, NULL, '2021-01-15 13:07:55', '2021-01-15 13:07:55'),
(7, 1, 6, 8.25, NULL, NULL, '2021-01-15 13:08:18', '2021-01-15 13:08:55'),
(8, 1, 5, 25, NULL, NULL, '2021-01-15 13:08:25', '2021-01-15 13:08:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classe_id` (`classe_id`);

--
-- Indexes for table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enseignant_id` (`enseignant_id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matiere_id` (`matiere_id`),
  ADD KEY `eleve_id` (`eleve_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classe`
--
ALTER TABLE `classe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `eleve_ibfk_1` FOREIGN KEY (`classe_id`) REFERENCES `classe` (`id`);

--
-- Constraints for table `matiere`
--
ALTER TABLE `matiere`
  ADD CONSTRAINT `matiere_ibfk_1` FOREIGN KEY (`enseignant_id`) REFERENCES `enseignant` (`id`);

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`matiere_id`) REFERENCES `matiere` (`id`),
  ADD CONSTRAINT `note_ibfk_3` FOREIGN KEY (`eleve_id`) REFERENCES `eleve` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
