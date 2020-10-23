-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 23 oct. 2020 à 14:25
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pressing`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `repassage_price` double(8,2) NOT NULL,
  `lavage_price` double(8,2) NOT NULL,
  `nettoyage_price` double(8,2) NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `repassage_price`, `lavage_price`, `nettoyage_price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Chemise MC', 500.00, 1000.00, 700.00, NULL, '2019-09-13 17:05:10', '2019-09-13 17:05:10'),
(2, 'Cravate', 100.00, 700.00, 500.00, NULL, '2019-09-13 17:23:10', '2019-09-13 17:23:10'),
(3, 'pantalon', 300.00, 800.00, 1000.00, NULL, '2019-09-13 18:16:11', '2019-09-13 18:16:11'),
(4, 'Boubou Traditionnel', 1000.00, 3500.00, 1500.00, NULL, '2019-09-24 12:55:46', '2019-09-24 12:55:46'),
(5, 'Boubou 2P', 1000.00, 4000.00, 1500.00, NULL, '2019-09-24 13:00:13', '2019-10-31 20:17:31'),
(6, 'Boubou 3P', 1500.00, 4500.00, 2500.00, NULL, '2019-09-24 13:02:46', '2019-09-24 13:02:46'),
(7, 'Boubou P', 600.00, 2000.00, 1000.00, NULL, '2019-09-24 13:04:16', '2019-09-24 13:04:16'),
(8, 'Caleçon', 250.00, 1000.00, 500.00, NULL, '2019-09-24 13:06:21', '2019-09-24 13:06:21'),
(9, 'Camisole', 200.00, 800.00, 300.00, NULL, '2019-09-24 13:07:40', '2019-09-24 13:07:40'),
(10, 'Casquette', 100.00, 500.00, 300.00, NULL, '2019-09-24 13:09:55', '2019-09-24 13:09:55'),
(11, 'Chaussette enf', 50.00, 200.00, 100.00, NULL, '2019-09-24 13:12:24', '2019-09-24 13:12:24'),
(12, 'Chaussure enf', 100.00, 600.00, 500.00, NULL, '2019-09-24 13:13:29', '2019-09-24 13:13:29'),
(14, 'Chemise enf', 150.00, 500.00, 300.00, NULL, '2019-09-24 13:15:58', '2019-09-24 13:15:58'),
(15, 'Chemisier', 350.00, 1000.00, 600.00, NULL, '2019-09-24 13:17:05', '2019-09-24 13:17:05'),
(16, 'Combinaison (mécanicien)', 1000.00, 5000.00, 3500.00, NULL, '2019-09-24 13:18:23', '2019-09-24 13:18:23'),
(17, 'Combinaison dame', 500.00, 2000.00, 1000.00, NULL, '2019-09-24 13:19:27', '2019-09-24 13:19:27'),
(18, 'Combinaison enf', 200.00, 800.00, 400.00, NULL, '2019-09-24 13:20:25', '2019-09-24 13:20:25'),
(19, 'Corsage', 350.00, 1000.00, 600.00, NULL, '2019-09-24 13:21:32', '2019-09-24 13:21:32'),
(20, 'Corsage enf', 150.00, 500.00, 300.00, NULL, '2019-09-24 13:22:34', '2019-09-24 13:22:34'),
(21, 'Costume 2P', 1500.00, 5000.00, 3000.00, NULL, '2019-09-24 13:24:31', '2019-09-24 13:24:31'),
(22, 'Costume 3P', 1700.00, 6000.00, 3500.00, NULL, '2019-09-24 13:25:50', '2019-09-24 13:25:50'),
(23, 'Costume 3P enf', 1000.00, 3500.00, 1500.00, NULL, '2019-09-24 13:26:52', '2019-09-24 13:26:52'),
(24, 'Costume enf', 600.00, 2500.00, 1000.00, NULL, '2019-09-24 13:28:28', '2019-09-24 13:28:28'),
(25, 'Couverture GM', 2000.00, 5000.00, 3000.00, NULL, '2019-09-24 13:33:03', '2019-09-24 13:33:03'),
(26, 'Couverture Mby', 1500.00, 4500.00, 2500.00, NULL, '2019-09-24 13:35:03', '2019-09-24 13:35:03'),
(27, 'Couverture NM', 700.00, 2500.00, 1500.00, NULL, '2019-09-24 13:36:44', '2019-09-24 13:36:44'),
(28, 'Cravate', 300.00, 1000.00, 600.00, NULL, '2019-09-24 13:37:46', '2019-09-24 13:37:46'),
(29, 'Cravate enf', 100.00, 600.00, 300.00, NULL, '2019-09-24 13:38:27', '2019-09-24 13:38:27'),
(30, 'Culotte', 400.00, 1200.00, 600.00, NULL, '2019-09-24 13:39:41', '2019-09-24 13:39:41'),
(31, 'Culotte enf', 150.00, 600.00, 300.00, NULL, '2019-09-24 13:40:51', '2019-09-24 13:40:51'),
(32, 'Débardeur', 200.00, 800.00, 500.00, NULL, '2019-09-24 13:42:06', '2019-09-24 13:44:15'),
(33, 'Débardeur enf', 100.00, 400.00, 200.00, NULL, '2019-09-24 13:43:53', '2019-09-24 13:43:53'),
(34, 'Draps', 500.00, 2500.00, 1500.00, NULL, '2019-09-24 13:45:34', '2019-09-24 13:45:34'),
(35, 'Ens 3P enf', 500.00, 2000.00, 1000.00, NULL, '2019-09-24 13:47:28', '2019-09-24 13:47:28'),
(36, 'Ens bazin enf', 400.00, 1500.00, 500.00, NULL, '2019-09-24 13:50:08', '2019-09-24 13:50:08'),
(37, 'Ensemble', 800.00, 2500.00, 1500.00, NULL, '2019-09-24 13:51:28', '2019-09-24 13:51:28'),
(38, 'Ensemble Draps', 1000.00, 4000.00, 2500.00, NULL, '2019-09-24 13:52:54', '2019-09-24 13:52:54'),
(39, 'Ensemble 3P', 1000.00, 3500.00, 2000.00, NULL, '2019-09-24 13:55:29', '2019-09-24 13:55:29'),
(40, 'Ensemble enf', 400.00, 1500.00, 500.00, NULL, '2019-09-24 13:57:57', '2019-09-24 13:57:57'),
(41, 'Ensemble pagne', 800.00, 3000.00, 1500.00, NULL, '2019-09-24 13:58:45', '2019-09-24 13:58:45'),
(42, 'Gants', 200.00, 700.00, 500.00, NULL, '2019-09-24 14:07:00', '2019-09-24 14:07:00'),
(43, 'Gilet adulte', 200.00, 1000.00, 500.00, NULL, '2019-09-24 14:08:03', '2019-09-24 14:08:56'),
(44, 'Gilet enf', 150.00, 500.00, 200.00, NULL, '2019-09-24 14:10:32', '2019-09-24 14:11:07'),
(45, 'Haut traditionnel', 500.00, 2000.00, 1500.00, NULL, '2019-09-24 14:12:53', '2019-09-24 14:12:53'),
(46, 'Imperméable', 1000.00, 3000.00, 3000.00, NULL, '2019-09-24 14:14:26', '2019-09-24 14:14:26'),
(47, 'Jupe', 400.00, 1500.00, 600.00, NULL, '2019-09-24 14:15:13', '2019-09-24 14:15:13'),
(48, 'Jupe enf', 150.00, 500.00, 200.00, NULL, '2019-09-24 14:16:07', '2019-09-24 14:16:07'),
(49, 'Manteau', 2000.00, 6000.00, 3000.00, NULL, '2019-09-24 14:17:59', '2019-09-24 14:17:59'),
(50, 'Manteau PM', 1000.00, 3500.00, 2000.00, NULL, '2019-09-24 14:18:49', '2019-09-24 14:18:49'),
(51, 'Mini robe', 500.00, 1500.00, 1000.00, NULL, '2019-09-24 14:20:04', '2019-09-24 14:20:04'),
(52, 'Napins', 150.00, 500.00, 300.00, NULL, '2019-09-24 14:22:44', '2019-09-24 14:22:44'),
(53, 'Nappe', 500.00, 2000.00, 800.00, NULL, '2019-09-24 14:24:07', '2019-09-24 14:24:07'),
(54, 'Pagne 3P', 800.00, 3000.00, 2000.00, NULL, '2019-09-24 14:27:59', '2019-09-24 14:27:59'),
(55, 'Paire de chaussettes', 100.00, 400.00, 250.00, NULL, '2019-09-24 14:28:56', '2019-09-24 14:28:56'),
(56, 'Paire de chaussures', 300.00, 2000.00, 1000.00, NULL, '2019-09-24 14:29:57', '2019-09-24 14:29:57'),
(57, 'Pantalon', 500.00, 2000.00, 1100.00, NULL, '2019-09-24 14:31:13', '2019-09-24 14:31:13'),
(58, 'Pantalon 3/4', 300.00, 1500.00, 700.00, NULL, '2019-09-24 14:32:51', '2019-09-24 14:32:51'),
(59, 'Pantalon enf', 100.00, 700.00, 400.00, NULL, '2019-09-24 14:34:16', '2019-09-24 14:34:16'),
(60, 'Provisoire haut', 800.00, 2000.00, 1000.00, NULL, '2019-09-24 14:35:19', '2019-09-24 14:35:19'),
(61, 'Provisoire MC', 1200.00, 3500.00, 2500.00, NULL, '2019-09-24 14:36:51', '2019-09-24 14:36:51'),
(62, 'Provisoire ML', 1200.00, 4000.00, 2500.00, NULL, '2019-09-24 14:38:02', '2019-09-24 14:38:02'),
(63, 'Pull over', 300.00, 1500.00, 800.00, NULL, '2019-09-24 14:38:51', '2019-09-24 14:38:51'),
(64, 'Pyjama enf', 300.00, 1500.00, 500.00, NULL, '2019-09-24 14:40:05', '2019-09-24 14:40:05'),
(65, 'Robe', 800.00, 2500.00, 1200.00, NULL, '2019-09-24 14:41:15', '2019-09-24 14:41:15'),
(66, 'Robe de mariage', 2500.00, 10000.00, 4000.00, NULL, '2019-09-24 14:42:32', '2019-09-24 14:42:32'),
(67, 'Robe de nuit', 400.00, 2000.00, 1000.00, NULL, '2019-09-24 14:43:37', '2019-09-24 14:43:37'),
(68, 'Robe enfant', 300.00, 1000.00, 500.00, NULL, '2019-09-24 14:44:32', '2019-09-24 14:45:56'),
(69, 'Serpillère', 500.00, 2500.00, 1500.00, NULL, '2019-09-24 14:46:52', '2019-09-24 14:46:52'),
(70, 'Serviette GM', 500.00, 2000.00, 1000.00, NULL, '2019-09-24 14:48:10', '2019-09-24 14:48:10'),
(71, 'Serviette Moyen', 350.00, 1000.00, 700.00, NULL, '2019-09-24 14:49:15', '2019-09-24 14:49:15'),
(72, 'Serviette PM', 200.00, 600.00, 500.00, NULL, '2019-09-24 14:50:13', '2019-09-24 14:50:13'),
(73, 'Smoking', 1200.00, 3500.00, 2500.00, NULL, '2019-09-24 14:51:14', '2019-09-24 14:51:14'),
(74, 'Taie', 150.00, 500.00, 200.00, NULL, '2019-09-24 14:52:32', '2019-09-24 14:52:32'),
(75, 'Tailleur', 1000.00, 3000.00, 2000.00, NULL, '2019-09-24 14:53:54', '2019-09-24 14:53:54'),
(76, 'Tailleur 3P', 1000.00, 4000.00, 2000.00, NULL, '2019-09-24 14:54:51', '2019-09-24 14:54:51'),
(77, 'T-Shirt', 350.00, 1000.00, 600.00, NULL, '2019-09-24 14:56:17', '2019-09-24 14:56:17'),
(78, 'T-Shirt enf', 150.00, 500.00, 300.00, NULL, '2019-09-24 14:57:18', '2019-09-24 14:57:18'),
(79, 'Veste Dame', 600.00, 2000.00, 1000.00, NULL, '2019-09-24 14:58:13', '2019-09-24 14:58:13'),
(80, 'Veste Homme', 1000.00, 3000.00, 2000.00, NULL, '2019-09-24 14:59:16', '2019-09-24 14:59:16');

-- --------------------------------------------------------

--
-- Structure de la table `checked_articles`
--

DROP TABLE IF EXISTS `checked_articles`;
CREATE TABLE IF NOT EXISTS `checked_articles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `deposit_id` int(11) NOT NULL,
  `depositedarticle_id` int(11) NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `checked_articles`
--

INSERT INTO `checked_articles` (`id`, `deposit_id`, `depositedarticle_id`, `status`, `client_id`, `client_name`, `user_id`, `created_at`, `updated_at`) VALUES
(70, 50, 61, 'Taché', 10, 'AGO Guy', 1, '2019-09-13 18:35:24', '2019-09-13 18:35:24'),
(69, 49, 60, 'Déchiré', 10, 'AGO Guy', 1, '2019-09-13 18:24:24', '2019-09-13 18:24:24'),
(68, 47, 58, 'Bouton cassé', 10, 'AGO Guy', 1, '2019-09-13 18:21:04', '2019-09-13 18:21:04'),
(67, 45, 57, 'Taché', 8, 'AGBEMADON Bernard', 1, '2019-09-10 15:38:45', '2019-09-10 15:38:45'),
(66, 44, 56, 'Taché', 10, 'AGO Guy', 1, '2019-08-16 09:42:23', '2019-08-16 09:42:23'),
(65, 44, 56, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-16 09:42:23', '2019-08-16 09:42:23'),
(64, 44, 55, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-16 09:42:23', '2019-08-16 09:42:23'),
(63, 44, 55, 'Bouton cassé', 10, 'AGO Guy', 1, '2019-08-16 09:42:22', '2019-08-16 09:42:22'),
(26, 29, 34, 'Bouton cassé', 10, 'AGO Guy', 1, '2019-08-14 18:52:54', '2019-08-14 18:52:54'),
(27, 29, 34, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 18:52:54', '2019-08-14 18:52:54'),
(28, 29, 34, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 18:52:54', '2019-08-14 18:52:54'),
(29, 29, 34, 'Taché', 10, 'AGO Guy', 1, '2019-08-14 18:52:54', '2019-08-14 18:52:54'),
(30, 30, 35, 'Bouton cassé', 10, 'AGO Guy', 1, '2019-08-14 18:53:17', '2019-08-14 18:53:17'),
(31, 30, 35, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 18:53:17', '2019-08-14 18:53:17'),
(32, 30, 35, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 18:53:17', '2019-08-14 18:53:17'),
(33, 30, 35, 'Taché', 10, 'AGO Guy', 1, '2019-08-14 18:53:17', '2019-08-14 18:53:17'),
(34, 31, 36, 'Bouton cassé', 10, 'AGO Guy', 1, '2019-08-14 18:54:07', '2019-08-14 18:54:07'),
(35, 31, 36, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 18:54:07', '2019-08-14 18:54:07'),
(36, 31, 36, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 18:54:07', '2019-08-14 18:54:07'),
(37, 31, 36, 'Taché', 10, 'AGO Guy', 1, '2019-08-14 18:54:07', '2019-08-14 18:54:07'),
(38, 32, 37, 'Bouton cassé', 10, 'AGO Guy', 1, '2019-08-14 18:54:23', '2019-08-14 18:54:23'),
(39, 32, 37, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 18:54:23', '2019-08-14 18:54:23'),
(40, 32, 37, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 18:54:23', '2019-08-14 18:54:23'),
(41, 32, 37, 'Taché', 10, 'AGO Guy', 1, '2019-08-14 18:54:23', '2019-08-14 18:54:23'),
(42, 33, 38, 'Bouton cassé', 10, 'AGO Guy', 1, '2019-08-14 18:56:07', '2019-08-14 18:56:07'),
(43, 33, 38, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 18:56:07', '2019-08-14 18:56:07'),
(44, 33, 38, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 18:56:07', '2019-08-14 18:56:07'),
(45, 33, 38, 'Taché', 10, 'AGO Guy', 1, '2019-08-14 18:56:07', '2019-08-14 18:56:07'),
(46, 37, 42, 'Bouton cassé', 10, 'AGO Guy', 1, '2019-08-14 19:19:48', '2019-08-14 19:19:48'),
(47, 37, 42, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 19:19:48', '2019-08-14 19:19:48'),
(48, 38, 43, 'Bouton cassé', 10, 'AGO Guy', 1, '2019-08-14 19:20:25', '2019-08-14 19:20:25'),
(49, 38, 43, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 19:20:25', '2019-08-14 19:20:25'),
(50, 39, 45, 'Bouton cassé', 10, 'AGO Guy', 1, '2019-08-14 19:23:42', '2019-08-14 19:23:42'),
(51, 39, 45, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 19:23:42', '2019-08-14 19:23:42'),
(52, 40, 47, 'Bouton cassé', 10, 'AGO Guy', 1, '2019-08-14 19:25:28', '2019-08-14 19:25:28'),
(53, 40, 47, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 19:25:28', '2019-08-14 19:25:28'),
(54, 41, 49, 'Bouton cassé', 10, 'AGO Guy', 1, '2019-08-14 19:26:28', '2019-08-14 19:26:28'),
(55, 41, 49, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 19:26:28', '2019-08-14 19:26:28'),
(56, 42, 51, 'Bouton cassé', 10, 'AGO Guy', 1, '2019-08-14 20:33:31', '2019-08-14 20:33:31'),
(57, 42, 51, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 20:33:31', '2019-08-14 20:33:31'),
(58, 42, 52, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 20:33:31', '2019-08-14 20:33:31'),
(59, 42, 52, 'Taché', 10, 'AGO Guy', 1, '2019-08-14 20:33:31', '2019-08-14 20:33:31'),
(60, 43, 53, 'Bouton cassé', 10, 'AGO Guy', 1, '2019-08-14 20:39:51', '2019-08-14 20:39:51'),
(61, 43, 53, 'Déchiré', 10, 'AGO Guy', 1, '2019-08-14 20:39:51', '2019-08-14 20:39:51'),
(62, 43, 54, 'Taché', 10, 'AGO Guy', 1, '2019-08-14 20:39:51', '2019-08-14 20:39:51'),
(71, 53, 65, 'Bouton cassé', 11, 'LAWSON Jean-Luc', 2, '2019-09-13 18:18:55', '2019-09-13 18:18:55'),
(72, 53, 66, 'Déchiré', 11, 'LAWSON Jean-Luc', 2, '2019-09-13 18:18:55', '2019-09-13 18:18:55'),
(73, 54, 67, 'Déchiré', 10, 'AGO Guy', 1, '2019-09-13 19:54:26', '2019-09-13 19:54:26'),
(74, 55, 68, 'Bouton cassé', 8, 'AGBEMADON Bernard', 2, '2019-09-25 13:40:43', '2019-09-25 13:40:43'),
(75, 56, 70, 'Bouton cassé', 13, 'kakou 78963278', 6, '2019-10-23 18:34:46', '2019-10-23 18:34:46'),
(76, 57, 72, 'Bouton cassé', 12, 'TAKA Komlan', 6, '2019-10-23 18:38:07', '2019-10-23 18:38:07'),
(77, 58, 75, 'Bouton cassé', 14, 'test erct', 2, '2019-10-24 12:04:44', '2019-10-24 12:04:44'),
(78, 60, 77, 'Déchiré', 16, 'TINO KOKOU', 6, '2019-10-24 17:17:58', '2019-10-24 17:17:58'),
(79, 60, 81, 'Déchiré', 16, 'TINO KOKOU', 6, '2019-10-24 17:17:58', '2019-10-24 17:17:58'),
(80, 60, 82, 'Bouton cassé', 16, 'TINO KOKOU', 6, '2019-10-24 17:17:58', '2019-10-24 17:17:58'),
(81, 62, 84, 'Bouton cassé', 17, 'blabla christelle abra', 2, '2019-10-25 12:09:34', '2019-10-25 12:09:34'),
(82, 64, 90, 'Déchiré', 16, 'TINO KOKOU', 1, '2019-10-25 16:43:55', '2019-10-25 16:43:55'),
(83, 64, 91, 'Taché', 16, 'TINO KOKOU', 1, '2019-10-25 16:43:55', '2019-10-25 16:43:55'),
(84, 64, 93, 'Taché', 16, 'TINO KOKOU', 1, '2019-10-25 16:43:55', '2019-10-25 16:43:55'),
(85, 64, 94, 'Bouton cassé', 16, 'TINO KOKOU', 1, '2019-10-25 16:43:55', '2019-10-25 16:43:55'),
(86, 65, 95, 'Déchiré', 15, 'USERADMIN Test', 2, '2019-10-25 18:50:33', '2019-10-25 18:50:33'),
(87, 66, 96, 'Déchiré', 15, 'USERADMIN Test', 2, '2019-10-25 18:51:03', '2019-10-25 18:51:03'),
(88, 69, 111, 'Taché', 19, 'ERALDA Franck', 3, '2019-10-31 14:05:40', '2019-10-31 14:05:40'),
(89, 70, 113, 'Taché', 10, 'AGO Guy', 1, '2019-10-31 18:42:52', '2019-10-31 18:42:52'),
(90, 71, 115, 'Btn cassé', 19, 'ERALDA Franck', 6, '2019-10-31 19:32:17', '2019-10-31 19:32:17'),
(91, 71, 116, 'Déchiré', 19, 'ERALDA Franck', 6, '2019-10-31 19:32:17', '2019-10-31 19:32:17'),
(92, 71, 117, 'Taché', 19, 'ERALDA Franck', 6, '2019-10-31 19:32:17', '2019-10-31 19:32:17'),
(93, 72, 118, 'Btn cassé', 16, 'TINO KOKOU', 6, '2019-10-31 19:57:07', '2019-10-31 19:57:07'),
(94, 72, 120, 'Btn cassé', 16, 'TINO KOKOU', 6, '2019-10-31 19:57:07', '2019-10-31 19:57:07'),
(95, 73, 121, 'Btn cassé', 16, 'TINO KOKOU', 6, '2019-10-31 20:01:33', '2019-10-31 20:01:33'),
(96, 73, 121, 'Déchiré', 16, 'TINO KOKOU', 6, '2019-10-31 20:01:33', '2019-10-31 20:01:33'),
(97, 73, 121, 'Taché', 16, 'TINO KOKOU', 6, '2019-10-31 20:01:33', '2019-10-31 20:01:33'),
(98, 73, 122, 'Déchiré', 16, 'TINO KOKOU', 6, '2019-10-31 20:01:33', '2019-10-31 20:01:33'),
(99, 73, 122, 'Taché', 16, 'TINO KOKOU', 6, '2019-10-31 20:01:33', '2019-10-31 20:01:33'),
(100, 76, 125, 'Btn cassé', 15, 'USERADMIN Test', 2, '2019-11-01 17:28:41', '2019-11-01 17:28:41'),
(101, 77, 126, 'Btn cassé', 20, 'KOFFI Kossi', 18, '2019-11-01 19:01:11', '2019-11-01 19:01:11'),
(102, 77, 127, 'Btn cassé', 20, 'KOFFI Kossi', 18, '2019-11-01 19:01:11', '2019-11-01 19:01:11'),
(103, 77, 127, 'Taché', 20, 'KOFFI Kossi', 18, '2019-11-01 19:01:11', '2019-11-01 19:01:11'),
(104, 81, 131, 'Déchiré', 16, 'TINO KOKOU', 6, '2019-11-05 19:11:22', '2019-11-05 19:11:22'),
(105, 81, 132, 'Btn cassé', 16, 'TINO KOKOU', 6, '2019-11-05 19:11:22', '2019-11-05 19:11:22'),
(106, 81, 132, 'Déchiré', 16, 'TINO KOKOU', 6, '2019-11-05 19:11:22', '2019-11-05 19:11:22'),
(107, 81, 132, 'Taché', 16, 'TINO KOKOU', 6, '2019-11-05 19:11:22', '2019-11-05 19:11:22'),
(108, 81, 133, 'Btn cassé', 16, 'TINO KOKOU', 6, '2019-11-05 19:11:22', '2019-11-05 19:11:22'),
(109, 81, 133, 'Déchiré', 16, 'TINO KOKOU', 6, '2019-11-05 19:11:22', '2019-11-05 19:11:22'),
(110, 81, 133, 'Taché', 16, 'TINO KOKOU', 6, '2019-11-05 19:11:22', '2019-11-05 19:11:22'),
(111, 82, 134, 'Btn cassé', 23, 'KOSSI Jean', 6, '2019-11-05 19:18:26', '2019-11-05 19:18:26'),
(112, 83, 136, 'Btn cassé', 24, 'DELA Kossi', 6, '2019-11-05 19:24:24', '2019-11-05 19:24:24'),
(113, 83, 136, 'Déchiré', 24, 'DELA Kossi', 6, '2019-11-05 19:24:24', '2019-11-05 19:24:24'),
(114, 83, 136, 'Taché', 24, 'DELA Kossi', 6, '2019-11-05 19:24:24', '2019-11-05 19:24:24'),
(115, 83, 137, 'Déchiré', 24, 'DELA Kossi', 6, '2019-11-05 19:24:24', '2019-11-05 19:24:24'),
(116, 83, 138, 'Btn cassé', 24, 'DELA Kossi', 6, '2019-11-05 19:24:24', '2019-11-05 19:24:24'),
(117, 83, 138, 'Taché', 24, 'DELA Kossi', 6, '2019-11-05 19:24:24', '2019-11-05 19:24:24'),
(118, 85, 142, 'Taché', 24, 'DELA Kossi', 1, '2019-12-16 10:57:49', '2019-12-16 10:57:49'),
(119, 87, 148, 'Déchiré', 10, 'AGO Guy', 1, '2020-08-17 15:24:42', '2020-08-17 15:24:42'),
(120, 88, 151, 'Btn cassé', 10, 'AGO Guy', 1, '2020-10-06 13:01:58', '2020-10-06 13:01:58'),
(121, 90, 154, 'Taché', 10, 'AGO Guy', 1, '2020-10-08 12:12:40', '2020-10-08 12:12:40'),
(122, 90, 155, 'Taché', 10, 'AGO Guy', 1, '2020-10-08 12:12:40', '2020-10-08 12:12:40');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `profile_picture` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `name`, `firstname`, `email`, `phone_number`, `address`, `profile_picture`, `user_id`, `discount`, `created_at`, `updated_at`) VALUES
(8, 'AGBEMADON', 'Bernard', 'bernard@gmail.com', '93343699', 'Lomé-Togo', 'user_1560853060.jpg', 1, 10.00, '2019-06-18 10:17:40', '2020-10-23 12:38:32'),
(10, 'AGO', 'Guy', 'guy@gmail.com', '97456321', 'Agoè-Lomé', 'user-image_1565191342.jpg', 1, NULL, '2019-08-07 15:22:24', '2019-08-07 15:22:24'),
(11, 'LAWSON', 'Jean-Luc', 'jeanluc@gmail.com', '78963278', 'Campus-Lomé', 'user-image_1566298715.jpg', 1, NULL, '2019-08-20 10:58:36', '2019-08-20 10:58:36'),
(12, 'TAKA', 'Komlan', 'komlan@gmail.com', '22892458963', 'Lomé-Togo', 'user_1569601091.jpg', 9, NULL, '2019-09-27 14:18:11', '2019-09-27 14:18:11'),
(13, 'kakou', '78963278', 'kjm@gmail.com', '98212223', 'bobo', 'noimage.jpg', 10, NULL, '2019-10-01 21:28:25', '2019-10-01 21:28:25'),
(14, 'TEST', 'Ecrt', 'der@gju.uy', '90905454', 'lome', 'noimage.jpg', 11, NULL, '2019-10-24 12:04:08', '2019-10-25 13:25:31'),
(15, 'USERADMIN', 'Test', 'chrira2@gmail.com', '22564437', 'Lome', 'noimage.jpg', 12, NULL, '2019-10-24 16:57:37', '2019-10-25 13:24:24'),
(16, 'TINO', 'KOKOU', 'genialamouzou@gmail.c', '90220922', 'KLM', 'noimage.jpg', 13, NULL, '2019-10-24 17:13:23', '2019-10-24 17:13:23'),
(17, 'blabla', 'christelle abra', 'bhountodji@yahoo.fr', '66552222', 'uju', 'noimage.jpg', 15, NULL, '2019-10-25 12:08:34', '2019-10-25 12:08:34'),
(18, 'LATE', 'Kokou', '70290404@o.com', '70290404', 'adidogome', 'avatar.jpg', 16, NULL, '2019-10-30 19:05:21', '2019-10-30 19:05:21'),
(19, 'ERALDA', 'Franck', NULL, '98563214', 'Lomé', 'avatar.jpg', 17, NULL, '2019-10-31 13:27:10', '2019-10-31 13:27:10'),
(20, 'KOFFI', 'Kossi', 'dedji.louis96@gmail.com', '98658381', 'Lomé', 'avatar.jpg', 19, NULL, '2019-10-31 20:39:00', '2019-10-31 20:39:00'),
(21, 'OGOU', 'Mat', NULL, '90066060', 'Lomé', 'avatar.jpg', 20, NULL, '2019-11-01 23:52:03', '2019-11-01 23:52:03'),
(22, 'CARRENTAL', 'New', NULL, '00745677', 'Lomé', 'avatar.jpg', 21, NULL, '2019-11-02 22:33:20', '2019-11-02 22:33:20'),
(23, 'KOSSI', 'Jean', NULL, '90334455', NULL, 'avatar.jpg', 23, NULL, '2019-11-05 19:00:06', '2019-11-05 19:00:06'),
(24, 'DELA', 'Kossi', NULL, '90337766', NULL, 'avatar.jpg', 24, NULL, '2019-11-05 19:23:04', '2019-11-05 19:23:04');

-- --------------------------------------------------------

--
-- Structure de la table `client_groups`
--

DROP TABLE IF EXISTS `client_groups`;
CREATE TABLE IF NOT EXISTS `client_groups` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `rate` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client_groups`
--

INSERT INTO `client_groups` (`id`, `client_id`, `client_name`, `client_email`, `client_address`, `client_phone`, `group_id`, `title`, `description`, `rate`, `created_at`, `updated_at`) VALUES
(3, 8, 'AGBEMADON Bernard', 'bernard@gmail.com', 'Lomé-Togo', '93343699', 1, 'Groupe 1', 'Groupe des clients fidèles dont le taux de remise est de 10%', 10.00, '2020-10-23 12:38:32', '2020-10-23 12:38:32');

-- --------------------------------------------------------

--
-- Structure de la table `code_suffixes`
--

DROP TABLE IF EXISTS `code_suffixes`;
CREATE TABLE IF NOT EXISTS `code_suffixes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `code_suffixes`
--

INSERT INTO `code_suffixes` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'AV', '2020-01-06 16:18:17', '2020-01-06 16:18:17');

-- --------------------------------------------------------

--
-- Structure de la table `deliveries`
--

DROP TABLE IF EXISTS `deliveries`;
CREATE TABLE IF NOT EXISTS `deliveries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `delivery_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `deposit_amount` double(8,2) NOT NULL,
  `amount_paid` double(8,2) DEFAULT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `left_pay` double(8,2) NOT NULL,
  `deposit_date` date NOT NULL,
  `date_retrait` date NOT NULL,
  `status` int(11) NOT NULL,
  `mode_reglement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `deliveries`
--

INSERT INTO `deliveries` (`id`, `delivery_code`, `deposit_id`, `deposit_code`, `quantity`, `deposit_amount`, `amount_paid`, `discount`, `left_pay`, `deposit_date`, `date_retrait`, `status`, `mode_reglement`, `reference`, `client_id`, `client_name`, `client_email`, `client_address`, `client_phone`, `user_id`, `created_at`, `updated_at`) VALUES
(21, '21 LP', '92', '92 AV', 3, 5500.00, 2500.00, 0.00, 0.00, '2020-10-08', '2020-10-08', 0, 'FLOOZ', '#AARGF4564', 10, 'AGO Guy', 'guy@gmail.com', 'Agoè-Lomé', '97456321', 1, '2020-10-08 15:24:39', '2020-10-08 15:24:39'),
(20, '20 LP', '90', '90 AV', 2, 5000.00, 4000.00, 0.00, 0.00, '2020-10-08', '2020-10-08', 0, 'RESTE', NULL, 10, 'AGO Guy', 'guy@gmail.com', 'Agoè-Lomé', '97456321', 1, '2020-10-08 12:14:25', '2020-10-08 12:14:25'),
(12, 'LP 12', '73', '73 LP', 26, 25125.00, 24125.00, 25.00, 0.00, '2019-10-31', '2019-11-01', 0, NULL, NULL, 16, 'TINO KOKOU', 'genialamouzou@gmail.c', 'KLM', '90220922', 2, '2019-11-01 16:37:57', '2019-11-01 16:37:57'),
(13, '13 LP', '76', '76 LP', 2, 2000.00, 2000.00, 0.00, 0.00, '2019-11-01', '2019-11-01', 0, NULL, NULL, 15, 'USERADMIN Test', 'chrira2@gmail.com', 'Lome', '22564437', 2, '2019-11-01 17:30:47', '2019-11-01 17:30:47'),
(14, '14 LP', '77', '77 LP', 7, 17010.00, 12010.00, 10.00, 0.00, '2019-11-01', '2019-11-02', 0, NULL, NULL, 20, 'KOFFI Kossi', 'dedji.louis96@gmail.com', 'Lomé', '98658381', 2, '2019-11-02 19:55:00', '2019-11-02 19:55:00'),
(15, '15 LP', '84', '84 LP', 3, 5700.00, 3700.00, 0.00, 0.00, '2019-12-16', '2019-12-16', 0, NULL, NULL, 20, 'KOFFI Kossi', 'dedji.louis96@gmail.com', 'Lomé', '98658381', 1, '2019-12-16 11:22:40', '2019-12-16 11:22:40'),
(16, '16 LP', '87', '87 AV', 7, 20500.00, 500.00, 0.00, 0.00, '2020-08-16', '2020-08-16', 0, NULL, NULL, 10, 'AGO Guy', 'guy@gmail.com', 'Agoè-Lomé', '97456321', 1, '2020-08-16 15:27:49', '2020-08-16 15:27:49'),
(17, '17 LP', '89', '89 AV', 1, 1500.00, 0.00, 0.00, 0.00, '2020-10-06', '2020-10-06', 0, NULL, NULL, 10, 'AGO Guy', 'guy@gmail.com', 'Agoè-Lomé', '97456321', 1, '2020-10-06 17:14:45', '2020-10-06 17:14:45'),
(18, '18 LP', '88', '88 AV', 2, 4000.00, 2000.00, 0.00, 0.00, '2020-10-06', '2020-10-08', 0, NULL, NULL, 10, 'AGO Guy', 'guy@gmail.com', 'Agoè-Lomé', '97456321', 1, '2020-10-08 12:06:19', '2020-10-08 12:06:19'),
(19, '19 LP', '86', '86 AV', 3, 3600.00, 1600.00, 0.00, 0.00, '2020-01-07', '2020-10-08', 0, 'AVANCE', NULL, 10, 'AGO Guy', 'guy@gmail.com', 'Agoè-Lomé', '97456321', 1, '2020-10-08 12:08:51', '2020-10-08 12:08:51');

-- --------------------------------------------------------

--
-- Structure de la table `delivery_hours`
--

DROP TABLE IF EXISTS `delivery_hours`;
CREATE TABLE IF NOT EXISTS `delivery_hours` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lavage_hour` double(8,2) NOT NULL,
  `express_hour` double(8,2) NOT NULL,
  `repassage_hour` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `delivery_hours`
--

INSERT INTO `delivery_hours` (`id`, `lavage_hour`, `express_hour`, `repassage_hour`, `created_at`, `updated_at`) VALUES
(1, 48.00, 24.00, 24.00, '2020-01-07 18:22:50', '2020-01-07 18:22:50');

-- --------------------------------------------------------

--
-- Structure de la table `deposited_articles`
--

DROP TABLE IF EXISTS `deposited_articles`;
CREATE TABLE IF NOT EXISTS `deposited_articles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `designation` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `etat` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `article_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` double(8,2) NOT NULL,
  `status` int(11) NOT NULL,
  `tidy` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `deposited_articles`
--

INSERT INTO `deposited_articles` (`id`, `article_id`, `designation`, `quantity`, `amount`, `etat`, `deposit_id`, `client_id`, `client_name`, `user_id`, `created_at`, `updated_at`, `article_title`, `unit_price`, `status`, `tidy`) VALUES
(62, 2, NULL, 1, 1000.00, NULL, 51, 10, 'AGO Guy', 1, '2019-09-13 18:38:10', '2019-09-13 18:38:10', 'Chemise manche courte', 1000.00, 0, ''),
(63, 2, NULL, 2, 2000.00, NULL, 52, 8, 'AGBEMADON Bernard', 2, '2019-09-13 18:13:41', '2019-09-13 18:13:41', 'Chemise manche courte', 1000.00, 0, ''),
(64, 1, NULL, 2, 1400.00, NULL, 52, 8, 'AGBEMADON Bernard', 2, '2019-09-13 18:13:41', '2019-09-13 18:13:41', 'Cravate', 700.00, 0, ''),
(65, 3, NULL, 2, 2000.00, 'Bouton cassé', 53, 11, 'LAWSON Jean-Luc', 2, '2019-09-13 18:18:55', '2019-09-13 18:18:55', 'pantalon', 1000.00, 0, ''),
(66, 3, NULL, 2, 2000.00, 'Déchiré', 53, 11, 'LAWSON Jean-Luc', 2, '2019-09-13 18:18:55', '2019-09-13 18:18:55', 'pantalon', 1000.00, 0, ''),
(67, 1, NULL, 1, 100.00, 'Déchiré', 54, 10, 'AGO Guy', 1, '2019-09-13 19:54:26', '2019-09-13 19:54:26', 'Cravate', 100.00, 0, ''),
(68, 73, NULL, 2, 5000.00, 'Bouton cassé', 55, 8, 'AGBEMADON Bernard', 2, '2019-09-25 13:40:43', '2019-09-25 13:40:43', 'Smoking', 2500.00, 0, ''),
(69, 9, NULL, 2, 600.00, NULL, 55, 8, 'AGBEMADON Bernard', 2, '2019-09-25 13:40:43', '2019-09-25 13:40:43', 'Camisole', 300.00, 0, ''),
(70, 23, NULL, 4, 6000.00, 'Bouton cassé', 56, 13, 'kakou 78963278', 6, '2019-10-23 18:34:46', '2019-10-23 18:34:46', 'Costume 3P enf', 1500.00, 0, ''),
(71, 16, NULL, 2, 7000.00, NULL, 56, 13, 'kakou 78963278', 6, '2019-10-23 18:34:46', '2019-10-23 18:34:46', 'Combinaison (mécanicien)', 3500.00, 0, ''),
(72, 8, NULL, 2, 1000.00, 'Bouton cassé', 57, 12, 'TAKA Komlan', 6, '2019-10-23 18:38:07', '2019-10-23 18:38:07', 'Caleçon', 500.00, 0, ''),
(73, 5, NULL, 4, 6000.00, NULL, 57, 12, 'TAKA Komlan', 6, '2019-10-23 18:38:07', '2019-10-23 18:38:07', 'Boubou 2P', 1500.00, 0, ''),
(74, 15, NULL, 5, 3000.00, NULL, 58, 14, 'test erct', 2, '2019-10-24 12:04:44', '2019-10-24 12:04:44', 'Chemisier', 600.00, 0, ''),
(75, 14, NULL, 4, 1200.00, 'Bouton cassé', 58, 14, 'test erct', 2, '2019-10-24 12:04:44', '2019-10-24 12:04:44', 'Chemise enf', 300.00, 0, ''),
(76, 2, NULL, 2, 1400.00, NULL, 59, 15, 'userAdmin test', 2, '2019-10-24 16:58:27', '2019-10-24 16:58:27', 'Chemise manche courte', 700.00, 0, ''),
(77, 13, NULL, 4, 2400.00, 'Déchiré', 60, 16, 'TINO KOKOU', 6, '2019-10-24 17:17:58', '2019-10-24 17:17:58', 'Chemise', 600.00, 0, ''),
(78, 3, NULL, 6, 6000.00, NULL, 60, 16, 'TINO KOKOU', 6, '2019-10-24 17:17:58', '2019-10-24 17:17:58', 'pantalon', 1000.00, 0, ''),
(79, 22, NULL, 1, 3500.00, NULL, 60, 16, 'TINO KOKOU', 6, '2019-10-24 17:17:58', '2019-10-24 17:17:58', 'Costume 3P', 3500.00, 0, ''),
(80, 5, NULL, 3, 4500.00, NULL, 60, 16, 'TINO KOKOU', 6, '2019-10-24 17:17:58', '2019-10-24 17:17:58', 'Boubou 2P', 1500.00, 0, ''),
(81, 8, NULL, 3, 1500.00, 'Déchiré', 60, 16, 'TINO KOKOU', 6, '2019-10-24 17:17:58', '2019-10-24 17:17:58', 'Caleçon', 500.00, 0, ''),
(82, 9, NULL, 5, 1500.00, 'Bouton cassé', 60, 16, 'TINO KOKOU', 6, '2019-10-24 17:17:58', '2019-10-24 17:17:58', 'Camisole', 300.00, 0, ''),
(83, 5, 'rouge', 8, 12000.00, NULL, 61, 15, 'userAdmin test', 6, '2019-10-24 17:23:06', '2019-10-24 17:23:06', 'Boubou 2P', 1500.00, 0, ''),
(84, 13, NULL, 4, 2400.00, 'Bouton cassé', 62, 17, 'blabla christelle abra', 2, '2019-10-25 12:09:34', '2019-10-25 12:09:34', 'Chemise', 600.00, 0, ''),
(85, 1, NULL, 4, 2800.00, NULL, 62, 17, 'blabla christelle abra', 2, '2019-10-25 12:09:34', '2019-10-25 12:09:34', 'Cravate', 700.00, 0, ''),
(86, 11, NULL, 7, 700.00, NULL, 62, 17, 'blabla christelle abra', 2, '2019-10-25 12:09:34', '2019-10-25 12:09:34', 'Chaussette enf', 100.00, 0, ''),
(87, 1, NULL, 4, 2800.00, NULL, 62, 17, 'blabla christelle abra', 2, '2019-10-25 12:09:34', '2019-10-25 12:09:34', 'Cravate', 700.00, 0, ''),
(88, 7, NULL, 2, 2000.00, NULL, 62, 17, 'blabla christelle abra', 2, '2019-10-25 12:09:34', '2019-10-25 12:09:34', 'Boubou P', 1000.00, 0, ''),
(89, 4, NULL, 1, 1500.00, NULL, 63, 17, 'blabla christelle abra', 1, '2019-10-25 14:32:39', '2019-10-25 14:32:39', 'Boubou Traditionnel', 1500.00, 0, ''),
(90, 5, NULL, 1, 1500.00, 'Déchiré', 64, 16, 'TINO KOKOU', 1, '2019-10-25 16:43:55', '2019-10-25 16:43:55', 'Boubou 2P', 1500.00, 0, ''),
(91, 6, NULL, 1, 2500.00, 'Taché', 64, 16, 'TINO KOKOU', 1, '2019-10-25 16:43:55', '2019-10-25 16:43:55', 'Boubou 3P', 2500.00, 0, ''),
(92, 1, NULL, 1, 700.00, NULL, 64, 16, 'TINO KOKOU', 1, '2019-10-25 16:43:55', '2019-10-25 16:43:55', 'Cravate', 700.00, 0, ''),
(93, 19, NULL, 1, 600.00, 'Taché', 64, 16, 'TINO KOKOU', 1, '2019-10-25 16:43:55', '2019-10-25 16:43:55', 'Corsage', 600.00, 0, ''),
(94, 13, NULL, 1, 600.00, 'Bouton cassé', 64, 16, 'TINO KOKOU', 1, '2019-10-25 16:43:55', '2019-10-25 16:43:55', 'Chemise', 600.00, 0, ''),
(95, 1, NULL, 4, 2800.00, 'Déchiré', 65, 15, 'USERADMIN Test', 2, '2019-10-25 18:50:33', '2019-10-31 18:04:29', 'Cravate', 700.00, 2, ''),
(96, 1, NULL, 4, 2800.00, 'Déchiré', 66, 15, 'USERADMIN Test', 2, '2019-10-25 18:51:03', '2019-10-30 19:32:55', 'Cravate', 700.00, 2, ''),
(97, 80, NULL, 3, 6000.00, NULL, 67, 18, 'LATE Kokou', 6, '2019-10-30 19:08:24', '2019-10-30 19:37:36', 'Veste Homme', 2000.00, 2, ''),
(98, 3, NULL, 5, 5000.00, NULL, 67, 18, 'LATE Kokou', 6, '2019-10-30 19:08:24', '2019-10-30 19:37:36', 'pantalon', 1000.00, 2, ''),
(99, 1, NULL, 34, 23800.00, NULL, 67, 18, 'LATE Kokou', 6, '2019-10-30 19:08:24', '2019-10-30 19:37:36', 'Cravate', 700.00, 2, ''),
(100, 7, NULL, 5, 5000.00, NULL, 67, 18, 'LATE Kokou', 6, '2019-10-30 19:08:24', '2019-10-30 19:37:36', 'Boubou P', 1000.00, 2, ''),
(101, 1, NULL, 2, 1400.00, NULL, 68, 11, 'LAWSON Jean-Luc', 6, '2019-10-30 20:08:47', '2019-10-30 20:08:47', 'Cravate', 700.00, 0, ''),
(102, 1, NULL, 2, 1400.00, NULL, 68, 11, 'LAWSON Jean-Luc', 6, '2019-10-30 20:08:47', '2019-10-30 20:08:47', 'Cravate', 700.00, 0, ''),
(103, 1, NULL, 3, 2100.00, NULL, 68, 11, 'LAWSON Jean-Luc', 6, '2019-10-30 20:08:47', '2019-10-30 20:08:47', 'Cravate', 700.00, 0, ''),
(104, 1, NULL, 3, 2100.00, NULL, 68, 11, 'LAWSON Jean-Luc', 6, '2019-10-30 20:08:47', '2019-10-30 20:08:47', 'Cravate', 700.00, 0, ''),
(105, 1, NULL, 3, 2100.00, NULL, 68, 11, 'LAWSON Jean-Luc', 6, '2019-10-30 20:08:47', '2019-10-30 20:08:47', 'Cravate', 700.00, 0, ''),
(106, 1, NULL, 3, 2100.00, NULL, 68, 11, 'LAWSON Jean-Luc', 6, '2019-10-30 20:08:47', '2019-10-30 20:08:47', 'Cravate', 700.00, 0, ''),
(107, 1, NULL, 4, 2800.00, NULL, 68, 11, 'LAWSON Jean-Luc', 6, '2019-10-30 20:08:47', '2019-10-30 20:08:47', 'Cravate', 700.00, 0, ''),
(108, 1, NULL, 4, 2800.00, NULL, 68, 11, 'LAWSON Jean-Luc', 6, '2019-10-30 20:08:47', '2019-10-30 20:08:47', 'Cravate', 700.00, 0, ''),
(109, 1, NULL, 4, 2800.00, NULL, 68, 11, 'LAWSON Jean-Luc', 6, '2019-10-30 20:08:47', '2019-10-30 20:08:47', 'Cravate', 700.00, 0, ''),
(110, 1, NULL, 2, 1400.00, NULL, 68, 11, 'LAWSON Jean-Luc', 6, '2019-10-30 20:08:47', '2019-10-30 20:08:47', 'Cravate', 700.00, 0, ''),
(111, 2, NULL, 1, 1000.00, 'Taché', 69, 19, 'ERALDA Franck', 3, '2019-10-31 14:05:40', '2019-10-31 18:09:14', 'Chemise manche courte', 1000.00, 2, 'Cintre'),
(112, 3, NULL, 1, 1000.00, NULL, 69, 19, 'ERALDA Franck', 3, '2019-10-31 14:05:40', '2019-10-31 18:09:14', 'pantalon', 1000.00, 2, 'Cintre'),
(113, 5, NULL, 1, 1500.00, 'Taché', 70, 10, 'AGO Guy', 1, '2019-10-31 18:42:52', '2019-10-31 18:44:20', 'Boubou 2P', 1500.00, 2, 'Plie'),
(114, 2, NULL, 2, 2000.00, NULL, 70, 10, 'AGO Guy', 1, '2019-10-31 18:42:52', '2019-10-31 18:44:20', 'Chemise manche courte', 1000.00, 2, 'Cintre'),
(115, 13, NULL, 22, 13200.00, 'Btn cassé', 71, 19, 'ERALDA Franck', 6, '2019-10-31 19:32:17', '2019-10-31 19:32:17', 'Chemise', 600.00, 0, 'Plie'),
(116, 7, NULL, 2, 2000.00, 'Déchiré', 71, 19, 'ERALDA Franck', 6, '2019-10-31 19:32:17', '2019-10-31 19:32:17', 'Boubou P', 1000.00, 0, 'Plie'),
(117, 8, NULL, 2, 1000.00, 'Taché', 71, 19, 'ERALDA Franck', 6, '2019-10-31 19:32:17', '2019-10-31 19:32:17', 'Caleçon', 500.00, 0, 'Cintre'),
(118, 2, NULL, 2, 2000.00, 'Btn cassé', 72, 16, 'TINO KOKOU', 6, '2019-10-31 19:57:07', '2019-10-31 19:57:07', 'Chemise manche courte', 1000.00, 0, 'Plie'),
(119, 16, NULL, 3, 10500.00, NULL, 72, 16, 'TINO KOKOU', 6, '2019-10-31 19:57:07', '2019-10-31 19:57:07', 'Combinaison (mécanicien)', 3500.00, 0, 'Cintre'),
(120, 4, NULL, 1, 1500.00, 'Btn cassé', 72, 16, 'TINO KOKOU', 6, '2019-10-31 19:57:07', '2019-10-31 19:57:07', 'Boubou Traditionnel', 1500.00, 0, 'Plie'),
(121, 2, NULL, 23, 23000.00, 'Btn cassé,Déchiré,Taché', 73, 16, 'TINO KOKOU', 6, '2019-10-31 20:01:33', '2019-11-01 16:37:57', 'Chemise manche courte', 1000.00, 2, 'Plie'),
(122, 16, NULL, 3, 10500.00, 'Déchiré,Taché', 73, 16, 'TINO KOKOU', 6, '2019-10-31 20:01:33', '2019-11-01 16:37:57', 'Combinaison (mécanicien)', 3500.00, 2, 'Plie'),
(123, 5, NULL, 2, 8000.00, NULL, 74, 15, 'USERADMIN Test', 6, '2019-10-31 20:23:37', '2019-10-31 20:40:32', 'Boubou 2P', 4000.00, 2, 'Cintre'),
(124, 3, NULL, -1, -1000.00, NULL, 75, 15, 'USERADMIN Test', 2, '2019-11-01 16:56:15', '2019-11-01 16:56:15', 'pantalon', 1000.00, 0, 'Cintre'),
(125, 3, NULL, 2, 2000.00, 'Btn cassé', 76, 15, 'USERADMIN Test', 2, '2019-11-01 17:28:41', '2019-11-01 17:30:47', 'pantalon', 1000.00, 2, 'Cintre'),
(126, 2, NULL, 2, 1400.00, 'Btn cassé', 77, 20, 'KOFFI Kossi', 18, '2019-11-01 19:01:11', '2019-11-02 19:55:00', 'Chemise manche courte', 700.00, 2, 'Plie'),
(127, 4, NULL, 5, 17500.00, 'Btn cassé,Taché', 77, 20, 'KOFFI Kossi', 18, '2019-11-01 19:01:11', '2019-11-02 19:55:00', 'Boubou Traditionnel', 3500.00, 2, 'Cintre'),
(128, 2, NULL, 8, 8000.00, NULL, 78, 22, 'CARRENTAL New', 2, '2019-11-02 22:33:47', '2019-11-02 22:33:47', 'Chemise manche courte', 1000.00, 0, 'Cintre'),
(129, 1, NULL, 2, 1000.00, NULL, 79, 21, 'OGOU Mat', 2, '2019-11-02 22:55:31', '2019-11-02 22:55:31', 'Chemise MC', 500.00, 0, 'Cintre'),
(130, 1, NULL, 4, 2800.00, NULL, 80, 14, 'TEST Ecrt', 6, '2019-11-05 19:07:29', '2019-11-05 19:07:29', 'Chemise MC', 700.00, 0, 'Cintre'),
(131, 1, NULL, 21, 14700.00, 'Déchiré', 81, 16, 'TINO KOKOU', 6, '2019-11-05 19:11:22', '2019-11-05 19:11:22', 'Chemise MC', 700.00, 0, 'Cintre'),
(132, 7, NULL, 12, 12000.00, 'Btn cassé,Déchiré,Taché', 81, 16, 'TINO KOKOU', 6, '2019-11-05 19:11:22', '2019-11-05 19:11:22', 'Boubou P', 1000.00, 0, 'Plie'),
(133, 19, NULL, 321, 192600.00, 'Btn cassé,Déchiré,Taché', 81, 16, 'TINO KOKOU', 6, '2019-11-05 19:11:22', '2019-11-05 19:11:22', 'Corsage', 600.00, 0, 'Plie'),
(134, 1, NULL, 4, 2800.00, 'Btn cassé', 82, 23, 'KOSSI Jean', 6, '2019-11-05 19:18:26', '2019-11-05 19:18:26', 'Chemise MC', 700.00, 0, 'Cintre'),
(135, 7, NULL, 2, 2000.00, NULL, 82, 23, 'KOSSI Jean', 6, '2019-11-05 19:18:26', '2019-11-05 19:18:26', 'Boubou P', 1000.00, 0, 'Plie'),
(136, 1, NULL, 23, 16100.00, 'Btn cassé,Déchiré,Taché', 83, 24, 'DELA Kossi', 6, '2019-11-05 19:24:24', '2019-11-05 19:24:24', 'Chemise MC', 700.00, 0, 'Cintre'),
(137, 11, NULL, 33, 3300.00, 'Déchiré', 83, 24, 'DELA Kossi', 6, '2019-11-05 19:24:24', '2019-11-05 19:24:24', 'Chaussette enf', 100.00, 0, 'Plie'),
(138, 77, NULL, 22, 13200.00, 'Btn cassé,Taché', 83, 24, 'DELA Kossi', 6, '2019-11-05 19:24:24', '2019-11-05 19:24:24', 'T-Shirt', 600.00, 0, 'Plie'),
(139, 1, NULL, 1, 700.00, NULL, 84, 20, 'KOFFI Kossi', 1, '2019-12-16 10:55:56', '2019-12-16 11:22:40', 'Chemise MC', 700.00, 2, 'Cintre'),
(140, 5, NULL, 1, 1500.00, NULL, 84, 20, 'KOFFI Kossi', 1, '2019-12-16 10:55:56', '2019-12-16 11:22:40', 'Boubou 2P', 1500.00, 2, 'Cintre'),
(141, 22, NULL, 1, 3500.00, NULL, 84, 20, 'KOFFI Kossi', 1, '2019-12-16 10:55:56', '2019-12-16 11:22:40', 'Costume 3P', 3500.00, 2, 'Cintre'),
(142, 5, NULL, 1, 4000.00, 'Taché', 85, 24, 'DELA Kossi', 1, '2019-12-16 10:57:49', '2019-12-16 10:57:49', 'Boubou 2P', 4000.00, 0, 'Cintre'),
(143, 15, NULL, 2, 2000.00, NULL, 85, 24, 'DELA Kossi', 1, '2019-12-16 10:57:49', '2019-12-16 10:57:49', 'Chemisier', 1000.00, 0, 'Cintre'),
(144, 21, NULL, 1, 5000.00, NULL, 85, 24, 'DELA Kossi', 1, '2019-12-16 10:57:49', '2019-12-16 10:57:49', 'Costume 2P', 5000.00, 0, 'Cintre'),
(145, 9, NULL, 4, 3200.00, NULL, 85, 24, 'DELA Kossi', 1, '2019-12-16 10:57:49', '2019-12-16 10:57:49', 'Camisole', 800.00, 0, 'Cintre'),
(146, 5, NULL, 2, 3000.00, NULL, 86, 10, 'AGO Guy', 1, '2020-01-07 18:58:18', '2020-10-08 12:08:51', 'Boubou 2P', 1500.00, 2, 'Cintre'),
(147, 19, NULL, 1, 600.00, NULL, 86, 10, 'AGO Guy', 1, '2020-01-07 18:58:18', '2020-10-08 12:08:51', 'Corsage', 600.00, 2, 'Cintre'),
(148, 5, NULL, 1, 1500.00, 'Déchiré', 87, 10, 'AGO Guy', 1, '2020-08-16 15:24:42', '2020-08-16 15:27:49', 'Boubou 2P', 1500.00, 2, 'Cintre'),
(149, 6, NULL, 2, 5000.00, NULL, 87, 10, 'AGO Guy', 1, '2020-08-16 15:24:42', '2020-08-16 15:27:49', 'Boubou 3P', 2500.00, 2, 'Cintre'),
(150, 16, NULL, 4, 14000.00, NULL, 87, 10, 'AGO Guy', 1, '2020-08-16 15:24:42', '2020-08-16 15:27:49', 'Combinaison (mécanicien)', 3500.00, 2, 'Cintre'),
(151, 5, NULL, 1, 1500.00, 'Btn cassé', 88, 10, 'AGO Guy', 1, '2020-10-06 13:01:58', '2020-10-08 12:06:19', 'Boubou 2P', 1500.00, 2, 'Cintre'),
(152, 6, NULL, 1, 2500.00, NULL, 88, 10, 'AGO Guy', 1, '2020-10-06 13:01:58', '2020-10-08 12:06:19', 'Boubou 3P', 2500.00, 2, 'Cintre'),
(153, 5, NULL, 1, 1500.00, NULL, 89, 10, 'AGO Guy', 1, '2020-10-06 17:08:15', '2020-10-06 17:14:45', 'Boubou 2P', 1500.00, 2, 'Cintre'),
(154, 5, '1', 1, 1500.00, 'Taché', 90, 10, 'AGO Guy', 1, '2020-10-08 12:12:40', '2020-10-08 12:14:25', 'Boubou 2P', 1500.00, 2, 'Cintre'),
(155, 16, NULL, 1, 3500.00, 'Taché', 90, 10, 'AGO Guy', 1, '2020-10-08 12:12:40', '2020-10-08 12:14:25', 'Combinaison (mécanicien)', 3500.00, 2, 'Cintre'),
(156, 5, NULL, 2, 3000.00, NULL, 91, 10, 'AGO Guy', 1, '2020-10-08 15:12:25', '2020-10-08 15:12:25', 'Boubou 2P', 1500.00, 0, 'Cintre'),
(157, 6, NULL, 1, 2500.00, NULL, 92, 10, 'AGO Guy', 1, '2020-10-08 15:14:37', '2020-10-08 15:24:39', 'Boubou 3P', 2500.00, 2, 'Cintre'),
(158, 23, NULL, 2, 3000.00, NULL, 92, 10, 'AGO Guy', 1, '2020-10-08 15:14:37', '2020-10-08 15:24:39', 'Costume 3P enf', 1500.00, 2, 'Cintre');

-- --------------------------------------------------------

--
-- Structure de la table `deposits`
--

DROP TABLE IF EXISTS `deposits`;
CREATE TABLE IF NOT EXISTS `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `deposit_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `deposit_amount` double(8,2) NOT NULL,
  `amount_paid` double(8,2) DEFAULT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `taxe` double(8,2) NOT NULL,
  `total_net` double(8,2) NOT NULL,
  `left_pay` double(8,2) NOT NULL,
  `date_retrait` date NOT NULL,
  `status` int(11) NOT NULL,
  `action` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_date` datetime DEFAULT NULL,
  `leftpay_date` datetime DEFAULT NULL,
  `mode_reglement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `balance` double(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `deposits`
--

INSERT INTO `deposits` (`id`, `deposit_code`, `quantity`, `deposit_amount`, `amount_paid`, `discount`, `taxe`, `total_net`, `left_pay`, `date_retrait`, `status`, `action`, `pay_date`, `leftpay_date`, `mode_reglement`, `reference`, `client_id`, `client_name`, `client_email`, `client_address`, `client_phone`, `user_id`, `created_at`, `updated_at`, `balance`) VALUES
(84, '84 LP', 3, 5700.00, 2000.00, 0.00, 0.00, 5700.00, 0.00, '2019-12-18', 1, 'Nettoyage à sec', NULL, NULL, NULL, NULL, 20, 'KOFFI Kossi', 'dedji.louis96@gmail.com', 'Lomé', '98658381', 1, '2019-12-16 10:55:56', '2019-12-16 11:22:40', 0.00),
(85, '85 LP', 8, 11360.00, 5000.00, 20.00, 0.00, 14200.00, 6360.00, '2019-12-18', 0, 'Nettoyage Express', '2020-10-06 14:00:37', '2020-10-13 10:00:00', NULL, NULL, 24, 'DELA Kossi', NULL, NULL, '90337766', 1, '2019-12-16 10:57:49', '2019-12-16 10:57:49', 0.00),
(86, '86 AV', 3, 3600.00, 2000.00, 0.00, 0.00, 3600.00, 0.00, '2020-10-06', 1, 'Nettoyage à sec', '2020-10-06 14:24:09', '2020-10-08 13:08:51', 'AVANCE', NULL, 10, 'AGO Guy', 'guy@gmail.com', 'Agoè-Lomé', '97456321', 1, '2020-01-07 18:58:18', '2020-10-08 12:08:51', 0.00),
(87, '87 AV', 7, 20500.00, 20000.00, 0.00, 0.00, 20500.00, 0.00, '2020-08-19', 1, 'Nettoyage à sec', '2020-10-06 14:25:45', NULL, NULL, NULL, 10, 'AGO Guy', 'guy@gmail.com', 'Agoè-Lomé', '97456321', 1, '2020-08-16 15:24:42', '2020-08-16 15:27:49', 0.00),
(88, '88 AV', 2, 4000.00, 2000.00, 0.00, 0.00, 4000.00, 0.00, '2020-10-08', 1, 'Nettoyage à sec', '2020-10-06 14:01:58', '2020-10-08 13:06:19', NULL, NULL, 10, 'AGO Guy', 'guy@gmail.com', 'Agoè-Lomé', '97456321', 1, '2020-10-06 13:01:58', '2020-10-08 12:06:19', 0.00),
(89, '89 AV', 1, 1500.00, 1500.00, 0.00, 0.00, 1500.00, 0.00, '2020-10-08', 1, 'Nettoyage à sec', NULL, '2020-10-06 18:08:15', 'AVANCE', NULL, 10, 'AGO Guy', 'guy@gmail.com', 'Agoè-Lomé', '97456321', 1, '2020-10-06 17:08:15', '2020-10-06 17:14:45', 0.00),
(90, '90 AV', 2, 5000.00, 1000.00, 0.00, 0.00, 5000.00, 0.00, '2020-10-10', 1, 'Nettoyage à sec', '2020-10-08 13:12:40', '2020-10-08 13:14:25', 'AVANCE', NULL, 10, 'AGO Guy', 'guy@gmail.com', 'Agoè-Lomé', '97456321', 1, '2020-10-08 12:12:40', '2020-10-08 12:14:25', 0.00),
(91, '91 AV', 2, 3000.00, 2000.00, 0.00, 0.00, 3000.00, 1000.00, '2020-10-10', 0, 'Nettoyage à sec', '2020-10-08 16:12:25', NULL, 'FLOOZ', NULL, 10, 'AGO Guy', 'guy@gmail.com', 'Agoè-Lomé', '97456321', 1, '2020-10-08 15:12:25', '2020-10-08 15:12:25', 0.00),
(92, '92 AV', 3, 5500.00, 3000.00, 0.00, 0.00, 5500.00, 0.00, '2020-10-10', 1, 'Nettoyage à sec', '2020-10-08 16:14:37', '2020-10-08 16:24:39', 'FLOOZ', '#AARGF4563', 10, 'AGO Guy', 'guy@gmail.com', 'Agoè-Lomé', '97456321', 1, '2020-10-08 15:14:37', '2020-10-08 15:24:39', 0.00);

-- --------------------------------------------------------

--
-- Structure de la table `licences`
--

DROP TABLE IF EXISTS `licences`;
CREATE TABLE IF NOT EXISTS `licences` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `expire_at` datetime DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `licences`
--

INSERT INTO `licences` (`id`, `title`, `code`, `activated_at`, `expire_at`, `is_activated`, `created_at`, `updated_at`) VALUES
(1, 'LICENCE SPARK PRESSING', NULL, NULL, NULL, 0, '2020-09-30 15:16:25', '2020-09-30 14:18:52');

-- --------------------------------------------------------

--
-- Structure de la table `loyal_groups`
--

DROP TABLE IF EXISTS `loyal_groups`;
CREATE TABLE IF NOT EXISTS `loyal_groups` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `rate` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `loyal_groups`
--

INSERT INTO `loyal_groups` (`id`, `title`, `description`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'Groupe 1', 'Groupe des clients fidèles dont le taux de remise est de 10%', 10.00, '2020-10-23 10:17:33', '2020-10-23 10:20:00'),
(2, 'Groupe 2', 'Taux de 20%', 20.00, '2020-10-23 10:18:58', '2020-10-23 10:18:58'),
(3, 'Groupe 3', 'Taux de remise de 30%', 30.00, '2020-10-23 10:19:36', '2020-10-23 10:19:36');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_04_173002_create_permission_tables', 2),
(4, '2016_06_01_000001_create_oauth_auth_codes_table', 3),
(5, '2016_06_01_000002_create_oauth_access_tokens_table', 3),
(6, '2016_06_01_000003_create_oauth_refresh_tokens_table', 3),
(7, '2016_06_01_000004_create_oauth_clients_table', 3),
(8, '2016_06_01_000005_create_oauth_personal_access_clients_table', 3),
(9, '2019_04_08_001301_create_clients_table', 4),
(10, '2019_04_08_145844_add_profile_picture_to_users', 5),
(36, '2019_04_17_083526_add_status_to_deposited_articles', 6),
(35, '2019_04_17_080014_add_unit_price_to_deposited_articles', 6),
(31, '2019_04_09_125534_add_unit_price_to_articles', 6),
(32, '2019_04_09_133207_create_deposits_table', 6),
(33, '2019_04_12_074320_add_article_title_to_deposited_articles', 6),
(37, '2019_04_16_112432_create_deliveries_table', 7),
(30, '2019_04_09_123154_create_deposited_articles_table', 6),
(42, '2019_04_08_171020_create_articles_table', 10),
(39, '2019_08_12_164758_create_statuses_table', 8),
(41, '2019_08_12_183045_create_checked_articles_table', 9),
(43, '2020_01_06_140256_create_code_suffixes_table', 11),
(44, '2020_01_06_173959_create_delivery_hours_table', 12),
(46, '2020_09_30_124047_create_licences_table', 13),
(47, '2020_10_23_085525_create_loyal_groups_table', 14),
(48, '2020_10_23_100954_create_client_groups_table', 14);

-- --------------------------------------------------------

--
-- Structure de la table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Structure de la table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 2),
(1, 'App\\User', 4),
(1, 'App\\User', 5),
(1, 'App\\User', 6),
(1, 'App\\User', 18),
(2, 'App\\User', 3),
(2, 'App\\User', 7),
(2, 'App\\User', 14),
(3, 'App\\User', 9),
(3, 'App\\User', 12),
(3, 'App\\User', 13),
(3, 'App\\User', 15),
(3, 'App\\User', 16),
(3, 'App\\User', 17),
(3, 'App\\User', 19),
(3, 'App\\User', 20),
(3, 'App\\User', 21),
(3, 'App\\User', 23),
(3, 'App\\User', 24),
(4, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Structure de la table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Pressing Personal Access Client', 'rDBQNwuZfbB8Gxrzg5fHwwWzKHbYBXlYfaBUD74u', 'http://localhost', 1, 0, 0, '2019-04-04 18:10:07', '2019-04-04 18:10:07'),
(2, NULL, 'Pressing Password Grant Client', 'VR1HG0GJqr18ekk1rkt1EjtNUayEk2pBg6MPWVka', 'http://localhost', 0, 1, 0, '2019-04-04 18:10:07', '2019-04-04 18:10:07');

-- --------------------------------------------------------

--
-- Structure de la table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-04-04 18:10:07', '2019-04-04 18:10:07');

-- --------------------------------------------------------

--
-- Structure de la table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('denis@gmail.com', '$2y$10$w.Nm7bkVuU1ALDS08wbSWuL.2WjhflgE5qnnWIgsl.PuJx/rsLCvm', '2019-10-02 18:13:16');

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Roles Administration & Permission', 'web', '2019-04-04 18:22:12', '2019-04-04 18:22:12'),
(6, 'Customer Permissions', 'web', '2019-09-27 14:14:15', '2019-09-27 14:14:15'),
(7, 'Tellers Permissions', 'web', '2019-10-25 15:53:16', '2019-10-25 15:53:16'),
(8, 'Admin Permissions', 'web', '2019-12-16 11:33:34', '2019-12-16 11:33:34');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'web', '2019-04-04 18:22:12', '2019-12-16 11:42:25'),
(2, 'Caissier', 'web', '2019-04-17 16:41:16', '2019-04-17 16:41:16'),
(3, 'Client', 'web', '2019-09-27 14:14:34', '2019-09-27 14:14:34'),
(4, 'Sup administrator', 'web', '2019-12-16 11:39:23', '2019-12-16 11:39:23');

-- --------------------------------------------------------

--
-- Structure de la table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 4),
(6, 3),
(7, 2),
(8, 1);

-- --------------------------------------------------------

--
-- Structure de la table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `statuses`
--

INSERT INTO `statuses` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Btn cassé', '2019-08-12 18:10:44', '2019-10-30 20:20:59'),
(2, 'Déchiré', '2019-08-12 18:19:42', '2019-08-12 18:19:42'),
(3, 'Taché', '2019-08-12 18:20:04', '2019-08-12 18:20:04');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_picture` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `email`, `email_verified_at`, `password`, `phone_number`, `city`, `remember_token`, `created_at`, `updated_at`, `profile_picture`) VALUES
(1, 'KOSSIGAN', 'Prodige', 'pkossigan@gmail.com', NULL, '$2y$10$VErnpkMqtir7IIRqLXyWWO2FR9zPdfwVkBUjm5kz5lVT8VFcw1MhC', '+22893343699', 'Lomé', 'HtcDi5ABz7uoG1DwaJdeneNnwiY06RpeD3YBbccRWBXBSa5EimdcyRjYIG6x', '2019-04-04 11:18:43', '2019-12-16 11:41:01', 'user-image_1554737989.jpg'),
(2, 'EDORH', 'Christian', 'christianedorh@gmail.com', NULL, '$2y$10$u1V8NP53RUnODzYaSnn19ujTAgx/isIYuij0iEgWHvodqGHsO405q', '+22890959953', 'Lomé', 'FLJOJubg19d5FD3QNqb30DwOB9dX7GXpxHH49mSmWAqD9ns03eeoNk36JTsq', '2019-04-04 18:31:46', '2019-12-16 11:44:25', 'user-image_1555518142.jpg'),
(3, 'AHIAVEE', 'Boris', 'boris@gmail.com', NULL, '$2y$10$IPQJ3GDhSvAVtwSRSFCVEOFu.TsOhowfLFWtWJlIQS8dh.oQS8Jqa', '+22892458963', 'Adigogomé-Lomé', NULL, '2019-08-20 12:12:04', '2019-08-20 12:12:04', 'user-image_1566303124.jpg'),
(4, 'Denis', 'denis', 'denis@gmail.com', NULL, '$2y$10$qnmm594UZYseJNpd1uGOXuT0wPMhTTzrcXKHSLXlnwdGEC40OA.AG', '65221148', 'Lome', NULL, '2019-09-13 18:10:07', '2019-09-13 18:10:07', 'noimage.jpg'),
(5, 'Compaore', 'Germain', 'germain@gmail.com', NULL, '$2y$10$xevUUkwyLKtQ0OFIY6xz4OspW8xqT9HNe0kJYxIf./BcmMmSX.cFO', '62274237474', 'Ouaga', NULL, '2019-09-13 18:11:39', '2019-09-13 18:11:39', 'noimage.jpg'),
(6, 'AMOUZOU', 'marcel', 'genialamouzou@gmail.com', NULL, '$2y$10$V.hvURp0oumPkoCpdYEITuT02J1w4ScqXR6nVjTLvzd/yMaUKHw2G', '90220922', 'lome', 'wPOEoXff9WkaYLV9j7GJzg2ZuI6xadSRdsybWDvdeMemw9tCaiyEo1ZKMRSC', '2019-09-14 17:25:22', '2019-10-23 18:27:24', 'noimage.jpg'),
(7, 'GUENOU', 'Koudzo', 'gkoudzo@gmail.com', NULL, '$2y$10$nJRhsFRXDk9R0JObNWgQKOWYfHngoD8fVmfjGE0Qaf3RLyFmZYMMS', '91699915', 'Lome', NULL, '2019-09-24 12:32:53', '2019-09-24 12:32:53', 'noimage.jpg'),
(8, 'TELOU', 'Jacques', 'telou@gmail.com', NULL, '$2y$10$NcKugTXLACOSbEcFtJivj.DFxG8yqk.Oe3BWs9lsVUsmZr3Hzsuha', '+22892458963', 'Lomé-Togo', NULL, '2019-09-27 14:12:40', '2019-09-27 14:12:40', 'user_1569600759.jpg'),
(9, 'TAKA', 'Komlan', 'komlan@gmail.com', NULL, '$2y$10$axCa8SLUxwsMIKOeaqi/quAdCP2KWZ7zIRr5ND1PPztqYrr1OzyfG', '+22892458963', 'Lomé-Togo', NULL, '2019-09-27 14:18:11', '2019-09-27 14:18:11', 'user_1569601091.jpg'),
(23, 'KOSSI', 'Jean', NULL, NULL, '$2y$10$KRdiqNpIH3U1jmWM.tqvWejX9hzk64cyokwLbNLRrEGNO4mVx0YSm', '90334455', NULL, NULL, '2019-11-05 19:00:06', '2019-11-05 19:00:06', 'avatar.jpg'),
(24, 'DELA', 'Kossi', NULL, NULL, '$2y$10$SZuZ/LuazAQZz/E0bcdFNOaCpDtvWBoUy.4JBh8p.9undWHLa7/zi', '90337766', NULL, NULL, '2019-11-05 19:23:04', '2019-11-05 19:23:04', 'avatar.jpg'),
(12, 'USERADMIN', 'Test', 'chrira2@gmail.com', NULL, '$2y$10$QUbrCZdLyt9d4EI7yvkV.eJMbywA/YC3t9./1BFKW0GVk8zKOQ.7S', '22564437', 'Lome', NULL, '2019-10-24 16:57:37', '2019-10-25 13:24:24', 'noimage.jpg'),
(13, 'TINO', 'KOKOU', 'genialamouzou@gmail.c', NULL, '$2y$10$0OCi7GiAQUj4wUd4RzeDIOmNL9wF5ulPcgO7RpgotBO0nN2V35/RG', '90220922', 'KLM', NULL, '2019-10-24 17:13:23', '2019-10-24 17:13:23', 'noimage.jpg'),
(14, 'tests', 'TEKO', 'genialam@gmail.com', NULL, '$2y$10$ffHs7JC1jSUZjOydKUurde3/AhaSNO0ZjZC3G.w.TLCxezARcmWwy', '222222222', 'LOME', NULL, '2019-10-24 17:37:36', '2019-10-24 17:37:36', 'noimage.jpg'),
(15, 'blabla', 'christelle abra', 'bhountodji@yahoo.fr', NULL, '$2y$10$YbR6IyLuvpp1r6rrCWqZcuiX1p1pD9qB1mCGxOuGoNp3k/vjcz.Ru', '66552222', 'uju', NULL, '2019-10-25 12:08:34', '2019-10-25 12:08:34', 'noimage.jpg'),
(16, 'LATE', 'Kokou', '70290404@o.com', NULL, '$2y$10$BYLTjYD4vvFtxR7HJAWO5OoJPOwmU/9gyMq5fl2JqCEW318sr.CiG', '70290404', 'adidogome', NULL, '2019-10-30 19:05:21', '2019-10-30 19:05:21', 'avatar.jpg'),
(17, 'ERALDA', 'Franck', NULL, NULL, '$2y$10$eGDj0n8li22FRvvhESKQJueYoYq0lv/Ds1Xjuqi.C4HlxLonuDr/i', '98563214', 'Lomé', NULL, '2019-10-31 13:27:10', '2019-10-31 13:27:10', 'avatar.jpg'),
(18, 'DEDJI', 'Louis', 'dedji.louis96@gmail.com', NULL, '$2y$10$/6u..1TyRqa8ODdJvz2hIuvCkKqk32v6FyIlWRFGbYmpuELfgeqRe', '93641281', 'LOME', NULL, '2019-10-31 20:34:26', '2019-10-31 20:34:26', 'avatar.jpg'),
(19, 'KOFFI', 'Kossi', 'dedji.louis96@gmail.com', NULL, '$2y$10$aC1vPr4Crqk63rpAXWVrH.BIdRuPQbdwu/5H.UYU/H5wkYMmBbdCS', '98658381', 'Lomé', NULL, '2019-10-31 20:39:00', '2019-10-31 20:39:00', 'avatar.jpg'),
(20, 'OGOU', 'Mat', NULL, NULL, '$2y$10$FYPVwVkMu5ZhaPi85e6TqO2kZCTaTXnDTrqN4HYc2evsoYRiASNjy', '90066060', 'Lomé', NULL, '2019-11-01 23:52:03', '2019-11-01 23:52:03', 'avatar.jpg'),
(21, 'CARRENTAL', 'New', NULL, NULL, '$2y$10$wV30ei0dt.0Dyu3OGfxISOcljOLSFqrSbu.m078eW7g0o2I7cmRFC', '00745677', 'Lomé', NULL, '2019-11-02 22:33:20', '2019-11-02 22:33:20', 'avatar.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
