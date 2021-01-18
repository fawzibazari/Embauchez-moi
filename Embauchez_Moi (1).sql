-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 18 jan. 2021 à 11:01
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Embauchez Moi`
--

-- --------------------------------------------------------

--
-- Structure de la table `Class`
--

CREATE TABLE `Class` (
  `id_Class` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `id_filiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Class`
--

INSERT INTO `Class` (`id_Class`, `nom`, `id_filiere`) VALUES
(1, 'CDA', 1);

-- --------------------------------------------------------

--
-- Structure de la table `Filiére`
--

CREATE TABLE `Filiére` (
  `id_filiere` int(11) NOT NULL,
  `nom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'Boubacar.png', '2021-01-15 10:21:36', '1'),
(2, 'Adama.png', '2021-01-15 10:22:21', '1'),
(3, 'Ahmed.png', '2021-01-15 10:22:21', '1'),
(4, 'Anthonio.png', '2021-01-15 10:22:21', '1'),
(5, 'Ayrton.png', '2021-01-15 10:22:21', '1'),
(6, 'Bello.png', '2021-01-15 10:22:21', '1'),
(8, 'Djaouad.png', '2021-01-15 10:22:21', '1'),
(9, 'Endrick.png', '2021-01-15 10:22:21', '1'),
(10, 'Eric.png', '2021-01-15 10:42:09', '1'),
(11, 'Floriant.png', '2021-01-15 10:42:09', '1'),
(12, 'Gustave.png', '2021-01-15 10:42:09', '1'),
(13, 'Hamza.png', '2021-01-15 10:42:09', '1'),
(14, 'Hugo.png', '2021-01-15 10:42:09', '1'),
(15, 'Iqbal.png', '2021-01-15 10:42:09', '1'),
(16, 'Jason.png', '2021-01-15 10:42:09', '1'),
(17, 'Jeremie.png', '2021-01-15 10:42:09', '1'),
(18, 'Jeremy.png', '2021-01-15 10:42:09', '1'),
(19, 'Johann.png', '2021-01-15 10:42:09', '1'),
(20, 'Jonathan.png', '2021-01-15 10:42:09', '1'),
(21, 'Kamal.png', '2021-01-15 10:42:09', '1'),
(22, 'Kamran.png', '2021-01-15 10:42:26', '1'),
(23, 'Kelly.png', '2021-01-15 10:42:26', '1'),
(24, 'Kenny.png', '2021-01-15 10:42:26', '1'),
(25, 'Kévin.png', '2021-01-15 10:42:26', '1'),
(26, 'Kriss.png', '2021-01-15 10:42:26', '1'),
(27, 'Lamine bts sio.png', '2021-01-15 10:42:26', '1'),
(28, 'Lamine.png', '2021-01-15 10:42:26', '1'),
(29, 'Leonard.png', '2021-01-15 10:42:26', '1'),
(30, 'Limamoulaye.png', '2021-01-15 10:42:26', '1'),
(31, 'Loggan.png', '2021-01-15 10:42:26', '1'),
(32, 'Luigy.png', '2021-01-15 10:42:26', '1'),
(33, 'Marvin.png', '2021-01-15 10:42:26', '1'),
(34, 'Michael.png', '2021-01-15 10:42:54', '1'),
(35, 'Mohamed.png', '2021-01-15 10:42:54', '1'),
(36, 'Nassim.png', '2021-01-15 10:42:54', '1'),
(37, 'Nicolas.png', '2021-01-15 10:42:54', '1'),
(38, 'Oumar.png', '2021-01-15 10:42:54', '1'),
(39, 'Raphaël.png', '2021-01-15 10:42:54', '1'),
(40, 'Ruben.png', '2021-01-15 10:42:54', '1'),
(41, 'Saad.png', '2021-01-15 10:42:54', '1'),
(42, 'Samy AIS.png', '2021-01-15 10:42:54', '1'),
(43, 'Samy.png', '2021-01-15 10:42:54', '1'),
(44, 'Serge.png', '2021-01-15 10:42:54', '1'),
(45, 'Shams.png', '2021-01-15 10:42:54', '1'),
(46, 'Sofiane.png', '2021-01-15 10:42:54', '1'),
(47, 'Timothé.png', '2021-01-15 10:42:54', '1'),
(48, 'Vanneck.png', '2021-01-15 10:42:54', '1'),
(49, 'Victor.png', '2021-01-15 10:42:54', '1'),
(50, 'Yvan.png', '2021-01-15 10:42:54', '1'),
(51, 'Michael.png', '2021-01-15 10:43:54', '1'),
(52, 'Mohamed.png', '2021-01-15 10:43:54', '1'),
(53, 'Nassim.png', '2021-01-15 10:43:54', '1'),
(54, 'Nicolas.png', '2021-01-15 10:43:54', '1'),
(55, 'Oumar.png', '2021-01-15 10:43:54', '1'),
(56, 'Raphaël.png', '2021-01-15 10:43:54', '1'),
(57, 'Ruben.png', '2021-01-15 10:43:54', '1'),
(58, 'Saad.png', '2021-01-15 10:43:54', '1'),
(59, 'Samy AIS.png', '2021-01-15 10:43:54', '1'),
(60, 'Samy.png', '2021-01-15 10:43:54', '1'),
(61, 'Serge.png', '2021-01-15 10:43:54', '1'),
(62, 'Shams.png', '2021-01-15 10:43:54', '1'),
(63, 'Sofiane.png', '2021-01-15 10:43:54', '1'),
(64, 'Timothé.png', '2021-01-15 10:43:54', '1'),
(65, 'Vanneck.png', '2021-01-15 10:43:54', '1'),
(66, 'Victor.png', '2021-01-15 10:43:54', '1');

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Text` varchar(255) NOT NULL,
  `Disponibilité` tinyint(1) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `code-postal` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_Class` int(11) NOT NULL,
  `CV` varchar(255) NOT NULL,
  `Video` varchar(255) NOT NULL,
  `Image_Profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`id`, `Prenom`, `Text`, `Disponibilité`, `Address`, `code-postal`, `image`, `id_Class`, `CV`, `Video`, `Image_Profile`) VALUES
(1, 'Zeyd', 'Je suis motivé a trouver une alternance', 1, 'ville de laba rue d\'ici ', 2255, 'zeyd.png', 0, 'Microsoft Word - Template CV Zeyd.pdf', 'https://www.youtube.com/embed/zJqs4dA7i90', ''),
(2, 'Adama', 'Je suis motivé a trouver une alternance', 1, 'zzz', 1235, 'Adama.png', 1, 'Microsoft Word - Template CV Adama.pdf', 'https://www.youtube.com/embed/jF0y7LgybVk', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Class`
--
ALTER TABLE `Class`
  ADD PRIMARY KEY (`id_Class`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Class`
--
ALTER TABLE `Class`
  MODIFY `id_Class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
