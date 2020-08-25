-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 25 août 2020 à 16:51
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

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
(4, 'bonjour', 'dioula', 'mo ah eh', 'bété', 'daudios/4keus_feat._niska_m.d_aac_83104.m4a', '2020-08-21 12:14:42'),
(5, 'difficile', 'Français', 'a ka gbre', 'dioula', 'daudios/difficile.3gpp', '2020-08-24 03:21:31'),
(6, 'facile', 'Français', 'a ka nongo', 'dioula', 'daudios/facile.3gpp', '2020-08-24 03:23:04'),
(7, 'impossible', 'Français', 'kebari', 'dioula', 'daudios/impossible.3gpp', '2020-08-24 03:24:43'),
(8, 'jeune', 'Français', 'kanbere', 'dioula', 'daudios/jeune.3gpp', '2020-08-24 03:25:30'),
(9, 'pauvre', 'Français', 'fantan', 'dioula', 'daudios/pauvre.3gpp', '2020-08-24 03:26:24'),
(10, 'propre', 'Français', 'sannia', 'dioula', 'daudios/propre.3gpp', '2020-08-24 03:27:38'),
(11, 'rouge', 'Français', 'wouleman', 'dioula', 'daudios/rouge.3gpp', '2020-08-24 03:28:19'),
(12, 'gros', 'Français', 'a ka bo', 'dioula', 'daudios/gros.3gpp', '2020-08-24 03:28:56'),
(13, 'mauvais', 'Français', 'a ka djougou', 'dioula', 'daudios/mauvais.3gpp', '2020-08-24 03:29:42'),
(14, 'blanc', 'Français', 'toubabou', 'dioula', 'daudios/blanc.3gpp', '2020-08-24 03:30:06'),
(15, 'dernier', 'Français', 'la ban', 'dioula', 'daudios/dernier.3gpp', '2020-08-24 03:32:15'),
(16, 'froid', 'Français', 'nenain', 'dioula', 'daudios/froid.3gpp', '2020-08-24 03:34:18'),
(17, 'seul', 'Français', 'kele', 'dioula', 'daudios/seul.3gpp', '2020-08-24 03:35:15'),
(18, 'chef', 'Français', 'massa', 'dioula', 'daudios/chef.3gpp', '2020-08-24 03:35:44'),
(19, 'enfant', 'Français', 'dein', 'dioula', 'daudios/enfant.3gpp', '2020-08-24 03:36:19'),
(20, 'mort', 'Français', 'chouu', 'dioula', 'daudios/mort.3gpp', '2020-08-24 03:37:11'),
(21, 'bouche', 'Français', 'da', 'dioula', 'daudios/bouche.3gpp', '2020-08-24 03:39:22'),
(22, 'voix', 'Français', 'kan', 'dioula', 'daudios/voix.3gpp', '2020-08-24 03:39:50'),
(23, 'paix', 'Français', 'bein', 'dioula', 'daudios/paix.3gpp', '2020-08-24 03:40:15'),
(24, 'bonjour', 'Français', 'ani sogoma', 'dioula', 'daudios/bonjour.3gpp', '2020-08-24 03:57:47'),
(25, 'A demain', 'Français', 'anbissini', 'dioula', 'daudios/a demain.3gpp', '2020-08-24 03:58:40'),
(26, 'bonsoir', 'Français', 'ani sou', 'dioula', 'daudios/bonsoir nuit.3gpp', '2020-08-24 03:59:38'),
(27, 'Ca va', 'Français', 'I kakene wa ', 'dioula', 'daudios/ça va .3gpp', '2020-08-24 04:01:22'),
(28, 'et la santé?', 'Français', 'I fari be di', 'dioula', 'daudios/et la santé.3gpp', '2020-08-24 04:03:54'),
(29, 'Et ta famille', 'Français', 'Somorodô', 'dioula', 'daudios/et ta famille tacour.3gpp', '2020-08-24 04:05:03'),
(30, 'et les enfants?', 'Français', 'dîn ka kene', 'dioula', 'daudios/et les enfants.3gpp', '2020-08-24 04:08:11'),
(31, 'et ta femme?', 'Français', 'i Moussodô', 'dioula', 'daudios/et ta femme.3gpp', '2020-08-24 04:09:35'),
(32, 'elle va bien', 'Français', 'A kakene', 'dioula', 'daudios/elle va bien.3gpp', '2020-08-24 04:10:30'),
(33, 'la matinée s’est bien passée?', 'Français', 'ere tle na wa', 'dioula', 'daudios/lamatinéesestbien passé.3gpp', '2020-08-24 04:15:17'),
(34, 'Que Dieu nous accorde demain', 'Français', 'Allah ka aôn be deme', 'dioula', 'daudios/que DIEU nous accorde demain.3gpp', '2020-08-24 04:16:37'),
(35, 'Que la nuit se passe bien', 'Français', 'Ka dougou niou mân gouin', 'dioula', 'daudios/que la nuit se passe bien.3gpp', '2020-08-24 04:19:32'),
(36, 'Merci', 'Français', 'Amina', 'dioula', 'daudios/merci.3gpp', '2020-08-24 04:20:59'),
(37, 'A plus tard ', 'Français', 'Anbedoni', 'dioula', 'daudios/a plutard.3gpp', '2020-08-24 04:22:06'),
(38, 'Bonne arrivée', 'Français', 'Adanse', 'dioula', 'daudios/bonne arrivée.3gpp', '2020-08-24 04:22:52'),
(39, 'Vite vite', 'Français', 'diouna diouna ', 'dioula', 'daudios/vite vite.3gpp', '2020-08-24 04:26:03'),
(40, 'Donne moi un peu d’eau', 'Français', 'Dji doni djân', 'dioula', 'daudios/donne moi un peu deau.3gpp', '2020-08-24 04:27:42'),
(41, 'Pardon', 'Français', 'Sabari', 'dioula', 'daudios/pardon.3gpp', '2020-08-24 04:30:07'),
(42, 'Bon travail', 'Français', 'Anibara', 'dioula', 'daudios/bon travail.3gpp', '2020-08-24 04:32:06'),
(43, 'Beaucoup', 'Français', 'Thiama', 'dioula', 'daudios/beaucoup.3gpp', '2020-08-24 04:32:52'),
(44, 'Donne moi beaucoup d’argent', 'Français', 'Wari thiama djân', 'dioula', 'daudios/donne moi beaucoup dargent.3gpp', '2020-08-24 04:36:44'),
(45, 'Venez', 'Français', 'Ayi na', 'dioula', 'daudios/venez.3gpp', '2020-08-24 04:43:34'),
(46, 'On va manger', 'Français', 'Aôn bi doumini ke', 'dioula', 'daudios/on va manger.3gpp', '2020-08-24 04:48:18'),
(47, 'Je l’ai vu', 'Français', 'Oum ya ye', 'dioula', 'daudios/je lai vu.3gpp', '2020-08-24 05:01:14'),
(48, 'bizarre', 'Français', 'nou a ra', 'Abbey', 'daudios/', '2020-08-25 04:32:55'),
(49, 'difficile', 'Français', 'kpêkpê', 'Abbey', 'daudios/', '2020-08-25 04:35:30'),
(50, 'jeune', 'Français', 'î yôrô djé', 'Abbey', 'daudios/', '2020-08-25 04:35:59'),
(51, 'Il est juste', 'Français', 'yê ssè ', 'Abbey', 'daudios/', '2020-08-25 04:36:32'),
(52, 'pauvre', 'Français', 'ya lè ho', 'Abbey', 'daudios/', '2020-08-25 04:37:00'),
(53, 'Le malade ', 'Français', 'Oro gba ho', 'Abbey', 'daudios/', '2020-08-25 04:37:26'),
(54, 'propre', 'Français', 'pié', 'Abbey', 'daudios/', '2020-08-25 04:37:49'),
(55, 'rouge', 'Français', 'la hin', 'Abbey', 'daudios/', '2020-08-25 04:38:12'),
(56, 'sale', 'Français', 'Vivi', 'Abbey', 'daudios/', '2020-08-25 04:38:38'),
(57, 'Simple ', 'Français', 'Simple ', 'Abbey', 'daudios/', '2020-08-25 04:38:59'),
(58, 'Bonne', 'Français', 'yê ssè', 'Abbey', 'daudios/', '2020-08-25 04:39:29'),
(59, 'elle est bonne', 'Français', 'yê ssè ', 'Abbey', 'daudios/', '2020-08-25 04:39:53'),
(60, 'doux', 'Français', 'yê gni', 'Abbey', 'daudios/', '2020-08-25 04:40:25'),
(62, 'doux', 'Français', 'npu', 'Abbey', 'daudios/', '2020-08-25 04:43:48'),
(63, 'Français', 'Français', 'brô fiè', 'Abbey', 'daudios/', '2020-08-25 04:44:13'),
(64, 'Gros', 'Français', 'dô moi', 'Abbey', 'daudios/', '2020-08-25 04:44:48'),
(65, 'Mauvais ', 'Français', 'ra yê ssè', 'Abbey', 'daudios/', '2020-08-25 04:45:11'),
(66, 'il est mauvais', 'Français', 'ra yê ssè', 'Abbey', 'daudios/', '2020-08-25 04:45:30'),
(67, 'vieux', 'Français', 'kpé chi djé', 'Abbey', 'daudios/', '2020-08-25 04:45:48'),
(68, 'blanc', 'Français', 'lo fou', 'Abbey', 'daudios/', '2020-08-25 04:46:09'),
(69, 'certain', 'Français', 'a re chi', 'Abbey', 'daudios/', '2020-08-25 04:46:30'),
(70, 'Chaud', 'Français', 'ssè mou', 'Abbey', 'daudios/', '2020-08-25 04:46:59'),
(71, 'chaleur', 'Français', 'ssè mou', 'Abbey', 'daudios/', '2020-08-25 04:47:29'),
(72, 'désolé', 'Français', 'm ssè rê', 'Abbey', 'daudios/', '2020-08-25 04:48:28'),
(73, 'Froid', 'Français', ' Fé', 'Abbey', 'daudios/', '2020-08-25 04:48:52'),
(74, 'fraîcheur', 'Français', ' Fé', 'Abbey', 'daudios/', '2020-08-25 04:49:24');

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
(17, 'foutou', '1'),
(18, 'riz', '23'),
(21, 'viens manger', '14'),
(23, 'femme', '2');

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
(6, 'Baoulé', '2020-06-30 05:16:52'),
(7, 'Abbey', '2020-08-25 04:29:22');

-- --------------------------------------------------------

--
-- Structure de la table `propositions`
--

CREATE TABLE `propositions` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `propositions` varchar(400) NOT NULL,
  `critiques` varchar(400) NOT NULL,
  `date_enrg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `propositions`
--

INSERT INTO `propositions` (`id`, `email`, `propositions`, `critiques`, `date_enrg`) VALUES
(1, 'ibrahim885209@gmail.com', 'bonjour vous devriez aneliore la traduction', 'kdjhbanmdns', '2020-08-19 15:38:51'),
(4, 'ibrahim885209@gmail.com', 'bonjour je mappelle soumah ibrahim et je voudrai', 'bonjour jegvs kdvva chv skhs', '2020-08-19 16:13:01'),
(5, 'ibrahim885209@gmail.com', 'bonjour je suis suis suis suis ', 'bonjour wkdh w dhbwse hoishbd ohs', '2020-08-19 16:14:25'),
(7, 'ibrahim885209@gmail.com', 'bonjour je mappelle soumah ibrahim et je voudrai', 'bonjour jegvs kdvva chv skhs', '2020-08-19 16:15:51'),
(8, 'ibrahimmichot73@outlook.fr', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos minus a quae officia fugit, distinctio, natus tenetur ipsa at optio harum accusantium iste, asperiores ad commodi esse quis consequuntur facere!\r\n  Dignissimos libero optio cum. Distinctio vero veritatis eaque, quia itaque consequatur cum in libero voluptate enim doloremque nulla cupiditate fugiat architecto soluta unde numquam. La', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos minus a quae officia fugit, distinctio, natus tenetur ipsa at optio harum accusantium iste, asperiores ad commodi esse quis consequuntur facere!\r\n  Dignissimos libero optio cum. Distinctio vero veritatis eaque, quia itaque consequatur cum in libero voluptate enim doloremque nulla cupiditate fugiat architecto soluta unde numquam. La', '2020-08-19 16:35:11'),
(10, 'basiti@gmail.com', 'je voudrais aqvoir d une part comment est au on va arriver a trqduire dans nos differentes langues les tex', 'je voudrais aqvoir d une part comment est au on va arriver a trqduire dans nos differentes langues les tex', '2020-08-21 10:35:31');

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
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recherches`
--

INSERT INTO `recherches` (`id`, `search_text`, `langue_start`, `langue_end`, `ip`, `statut`, `date`) VALUES
(0, 'femme', 'Français', 'bété', '::1', '', '2020-08-24'),
(1, 'femme', 'Français', 'bété', '::1', '', '2020-07-02'),
(2, 'femme', 'Français', 'bété', '::1', '', '2020-07-02'),
(3, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03'),
(4, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03'),
(5, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03'),
(6, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03'),
(7, 'viens manger', 'Français', 'bété', '::1', '', '2020-07-03'),
(8, 'je suis une femme', 'Français', 'bété', '::1', '', '2020-07-03'),
(9, 'femme', 'Français', 'bété', '::1', '', '2020-08-22'),
(10, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22'),
(11, 'bonjour', 'bété', 'bété', '::1', '', '2020-08-22'),
(12, 'femme', 'Français', 'bété', '::1', '', '2020-08-22'),
(13, 'femme', 'Français', 'bété', '::1', '', '2020-08-22'),
(14, 'femme', 'Français', 'bété', '::1', '', '2020-08-22'),
(15, 'bonjour', 'bété', 'bété', '::1', '', '2020-08-22'),
(16, 'bonjour', 'dioula', 'bété', '::1', '', '2020-08-22'),
(17, 'bonjour', 'dioula', 'Baoulé', '::1', '', '2020-08-22'),
(18, '', '', '', '::1', '', '2020-08-22'),
(19, '', '', '', '::1', '', '2020-08-22'),
(20, 'femme', 'Français', 'bété', '::1', '', '2020-08-22'),
(21, 'femme', 'Français', 'bété', '::1', '', '2020-08-22'),
(22, '', '', '', '::1', '', '2020-08-22'),
(23, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22'),
(24, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22'),
(25, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22'),
(26, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22'),
(27, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22'),
(28, 'bonjour', 'bété', 'bété', '::1', '', '2020-08-22'),
(29, 'bonjour', 'bété', 'bété', '::1', '', '2020-08-22'),
(30, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22'),
(31, 'femme', 'Français', 'bété', '::1', '', '2020-08-22'),
(32, 'femme', 'Français', 'bété', '::1', '', '2020-08-22'),
(33, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22'),
(34, 'bonjour', 'bété', 'dioula', '::1', '', '2020-08-22');

-- --------------------------------------------------------

--
-- Structure de la table `suggestion`
--

CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL,
  `texte1` varchar(255) NOT NULL,
  `langue_start` varchar(255) NOT NULL,
  `texte2` varchar(255) NOT NULL,
  `langue_end` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `datec` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'soumah ibrahim', 'ibrahim885209@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrateur', '2020-08-24 01:16:42'),
(2, 'michot', 'ibrahim1.soumah@uvci.edu.ci', '827ccb0eea8a706c4c34a16891f84e7b', 'Superviseur', '2020-08-24 01:17:06'),
(3, 'team ILT', 'ilt@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Opérateur de saisie', '2020-08-24 01:17:53');

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
-- Index pour la table `propositions`
--
ALTER TABLE `propositions`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
