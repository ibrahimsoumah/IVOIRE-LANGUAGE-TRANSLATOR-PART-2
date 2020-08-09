-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 09 août 2020 à 14:53
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `itl_part2`
--

-- --------------------------------------------------------

--
-- Structure de la table `activités`
--

CREATE TABLE `activités` (
  `id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `texte1` varchar(255) NOT NULL,
  `langue_start` varchar(255) NOT NULL,
  `texte2` varchar(255) NOT NULL,
  `langue_end` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `datec` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `data`
--

INSERT INTO `data` (`id`, `texte1`, `langue_start`, `texte2`, `langue_end`, `audio`, `datec`) VALUES
(1, 'femme', 'Français', 'wonnon', 'bété', 'daudios/BTfemme.m4a', '2020-07-02 11:39:15'),
(2, 'viens manger', 'Français', 'hi ké li', 'bété', 'daudios/BTviensmanger.m4a', '2020-07-03 01:17:09'),
(3, 'je suis une femme', 'Français', 'é non wonnon mon', 'bété', 'daudios/BTjesuisunefemme.m4a', '2020-07-03 01:22:04'),
(4, 'piment', 'Français', 'yébè', 'bété', 'daudios/BTpiment.m4a', '2020-08-09 11:59:45'),
(5, 'homme', 'Français', 'woudi', 'bété', 'daudios/BThomme.m4a', '2020-08-09 12:10:26'),
(6, 'riz', 'Français', 'seka', 'bété', 'daudios/BTriz.m4a', '2020-08-09 12:12:30'),
(8, 'poisson', 'Français', 'zibi', 'bété', 'daudios/BTpoisson.m4a', '2020-08-09 12:36:37'),
(9, 'foutou', 'Français', 'takolè', 'bété', 'daudios/BTfoutou.m4a', '2020-08-09 02:41:02');

-- --------------------------------------------------------

--
-- Structure de la table `graph`
--

CREATE TABLE `graph` (
  `id` int(11) NOT NULL,
  `search` varchar(255) NOT NULL,
  `count` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `graph`
--

INSERT INTO `graph` (`id`, `search`, `count`) VALUES
(6, 'piment', '3'),
(11, 'je suis une femme', '5'),
(14, 'homme', '19'),
(15, 'poisson', '7'),
(16, 'femme', '5'),
(17, 'foutou', '1'),
(18, 'riz', '23'),
(20, 'viens manger', '13');

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `id` int(11) NOT NULL,
  `langue` varchar(255) NOT NULL,
  `datec` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `langues`
--

INSERT INTO `langues` (`id`, `langue`, `datec`) VALUES
(1, 'bété', '2020-06-27 05:48:40'),
(2, 'dioula', '2020-06-28 02:43:27'),
(4, 'Français', '2020-06-28 03:18:18'),
(5, 'Anglais', '2020-06-28 03:18:48'),
(6, 'Baoulé', '2020-06-30 05:16:52');

-- --------------------------------------------------------

--
-- Structure de la table `recherches`
--

CREATE TABLE `recherches` (
  `id` int(11) NOT NULL,
  `search_text` varchar(100) NOT NULL,
  `langue_start` varchar(50) NOT NULL,
  `langue_end` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `statut` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recherches`
--

INSERT INTO `recherches` (`id`, `search_text`, `langue_start`, `langue_end`, `ip`, `statut`, `date`) VALUES
(1, 'femme', 'Français', 'bété', '::1', '', '2020-07-02 00:00:00'),
(2, 'femme', 'Français', 'bété', '::1', '', '2020-07-02 00:00:00'),
(3, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03 00:00:00'),
(4, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03 00:00:00'),
(5, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03 00:00:00'),
(6, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03 00:00:00'),
(7, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03 00:00:00'),
(8, 'je suis une femme', 'Français', 'bété', '::1', '', '2020-07-03 00:00:00'),
(9, 'femme', 'Français', 'bété', '::1', '', '2020-08-04 00:00:00'),
(10, 'femme', 'Français', 'bété', '::1', '', '2020-08-04 00:00:00'),
(11, 'piment', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(12, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(13, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(14, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(15, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(16, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(17, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(18, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(19, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(20, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(21, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(22, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(23, 'piment', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(24, 'piment', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(25, 'poisson', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(26, 'poisson', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(27, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(28, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 00:00:00'),
(29, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 12:44:32'),
(30, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 12:44:32'),
(31, 'poisson', 'Français', 'bété', '::1', '', '2020-08-09 12:46:14'),
(32, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 12:47:00'),
(33, 'viens manger', 'Français', 'bété', '::1', '', '2020-08-09 12:58:18'),
(34, 'viens manger', 'Français', 'bété', '::1', '', '2020-08-09 01:00:21'),
(35, 'viens manger', 'Français', 'bété', '::1', '', '2020-08-09 01:02:50'),
(36, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 01:04:10'),
(37, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 01:05:14'),
(38, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 01:06:06'),
(39, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 01:07:11'),
(40, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 01:10:35'),
(41, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 01:13:01'),
(42, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 01:17:52'),
(43, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 01:17:52'),
(44, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 01:18:42'),
(45, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 01:18:42'),
(46, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 01:20:06'),
(47, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 01:42:23'),
(48, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 01:43:28'),
(49, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 01:44:57'),
(50, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 01:45:17'),
(51, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 01:46:32'),
(52, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 01:47:07'),
(53, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 01:54:05'),
(54, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 01:59:54'),
(55, 'je suis une femme', 'Français', 'bété', '::1', '', '2020-08-09 02:05:41'),
(56, 'je suis une femme', 'Français', 'bété', '::1', '', '2020-08-09 02:09:51'),
(57, 'je suis une femme', 'Français', 'bété', '::1', '', '2020-08-09 02:12:49'),
(58, 'je suis une femme', 'Français', 'bété', '::1', '', '2020-08-09 02:15:33'),
(59, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 02:16:05'),
(60, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 02:17:49'),
(61, 'viens manger', 'Français', 'bété', '::1', '', '2020-08-09 02:18:16'),
(62, 'viens manger', 'Français', 'bété', '::1', '', '2020-08-09 02:19:45'),
(63, 'viens manger', 'Français', 'bété', '::1', '', '2020-08-09 02:23:17'),
(64, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 02:23:59'),
(65, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 02:25:00'),
(66, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 02:27:00'),
(67, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 02:28:32'),
(68, 'homme', 'Français', 'bété', '::1', '', '2020-08-09 02:32:34'),
(69, 'poisson', 'Français', 'bété', '::1', '', '2020-08-09 02:32:56'),
(70, 'poisson', 'Français', 'bété', '::1', '', '2020-08-09 02:33:26'),
(71, 'poisson', 'Français', 'bété', '::1', '', '2020-08-09 02:34:55'),
(72, 'poisson', 'Français', 'bété', '::1', '', '2020-08-09 02:35:16'),
(73, 'femme', 'Français', 'bété', '::1', '', '2020-08-09 02:37:04'),
(74, 'foutou', 'Français', 'bété', '::1', '', '2020-08-09 02:41:28'),
(75, 'riz', 'Français', 'bété', '::1', '', '2020-08-09 02:42:12'),
(76, 'viens manger', 'Français', 'bété', '::1', '', '2020-08-09 02:46:27'),
(77, 'viens manger', 'Français', 'bété', '::1', '', '2020-08-09 02:46:54');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nometprenoms` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nometprenoms`, `email`, `password`, `role`, `date`) VALUES
(9, 'laety', 'laety@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Opérateur de saisie', '2020-06-28 04:44:09'),
(10, 'seri', 'seri@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrateur', '2020-06-28 06:55:54'),
(11, 'jean marc', 'marc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Superviseur', '2020-06-28 07:08:55'),
(12, 'patrick', 'patrick@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrateur', '2020-06-29 06:43:12'),
(13, 'jules', 'jules@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Opérateur de saisie', '2020-06-29 10:58:17'),
(15, 'kouassi koffi christ', 'christ@gmail.com', 'dcddb75469b4b4875094e14561e573d8', 'Administrateur', '2020-06-30 05:09:38'),
(16, 'kone oumar', 'oumar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Opérateur de saisie', '2020-06-30 05:11:28'),
(17, 'cedirc', 'cedric@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrateur', '2020-07-01 02:34:23'),
(19, 'franck', 'franck@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Opérateur de saisie', '2020-07-01 02:37:04');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activités`
--
ALTER TABLE `activités`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `graph`
--
ALTER TABLE `graph`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recherches`
--
ALTER TABLE `recherches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activités`
--
ALTER TABLE `activités`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `graph`
--
ALTER TABLE `graph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `langues`
--
ALTER TABLE `langues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `recherches`
--
ALTER TABLE `recherches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
