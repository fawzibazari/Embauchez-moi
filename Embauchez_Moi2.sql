-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 19 jan. 2021 à 17:01
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
-- Base de données : `Embauchez Moi2`
--

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

CREATE TABLE `class` (
  `id_Class` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `filiére_id_filiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `class`
--

INSERT INTO `class` (`id_Class`, `nom`, `filiére_id_filiere`) VALUES
(1, 'Concepteur developpeur d\'application', 1);

-- --------------------------------------------------------

--
-- Structure de la table `filiére`
--

CREATE TABLE `filiére` (
  `id_filiere` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `filiére`
--

INSERT INTO `filiére` (`id_filiere`, `nom`) VALUES
(1, 'developpement');

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

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Text` varchar(255) NOT NULL,
  `Disponibilité` tinyint(1) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `code-postal` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `CV` varchar(255) NOT NULL,
  `Video` varchar(255) NOT NULL,
  `Image_Profile` varchar(255) NOT NULL,
  `class_id_Class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `Prenom`, `Text`, `Disponibilité`, `Address`, `code-postal`, `image`, `CV`, `Video`, `Image_Profile`, `class_id_Class`) VALUES
(1, 'Adama', ' Concepteur Développeur D\'application', 1, 'SEVRAN ', 93270, 'Adama.png', 'Microsoft Word - Template CV Adama.pdf', 'https://www.youtube.com/embed/oiq9QFvYkM4', 'Adama.png', 1),
(2, 'Florian', ' Concepteur Développeur D\'application', 1, 'Betz', 60620, 'Floriant.png', 'Microsoft Word - Template CV Florian.pdf', 'https://www.youtube.com/embed/oiq9QFvYkM4', 'Floriant.png', 1),
(3, 'Kamran', ' Concepteur Développeur D\'application', 1, 'Dammarie les Lys', 77190, 'Kamran.png', 'Microsoft Word - Template CV Kamran.pdf', 'https://www.youtube.com/embed/hhY6JZkbv9c', 'Kamran.png', 1),
(4, 'Kriss', ' Concepteur Développeur D\'application', 1, 'Antony', 92160, 'Kriss.png', 'Microsoft Word - Template CV Kriss.pdf', 'https://www.youtube.com/embed/RoW7F7pne4I', 'Kriss.png', 1),
(5, 'Léonard', ' Concepteur Développeur D\'application', 1, 'Meulan', 78250, 'Leonard.png', 'Microsoft Word - Template CV leonard.pdf', 'https://www.youtube.com/embed/_4cvuQlsf0M', 'Leonard.png', 1),
(6, 'Luigi', ' Concepteur Développeur D\'application', 1, 'Villeneuve-la-Garenne', 92390, 'Luigy.png', 'Microsoft Word - Template CV Luigy.pdf', 'https://www.youtube.com/embed/rKX40NgM6Og', 'Luigy.png', 1),
(7, 'Marin', ' Concepteur Développeur D\'application', 1, 'Paris', 75017, 'marin.png', 'Microsoft Word - Template CV marin.pdf', 'https://www.youtube.com/embed/JHOAOaIhLbU', 'marin.png', 1),
(8, 'Michael', ' Concepteur Développeur D\'application', 1, 'Mitry-mory', 77290, 'michael.png', 'Microsoft Word - Template CV michael.pdf', 'https://www.youtube.com/embed/WFFlaIfPG5Q', 'michael.png', 1),
(9, 'Nicolas', ' Concepteur Développeur D\'application', 1, 'Chelles', 77500, 'Nicolas.png', 'Microsoft Word - Template CV Nicolas.pdf', 'https://www.youtube.com/embed/6sV2_yFvyQQ', 'Nicolas.png', 1),
(10, 'Ruben-Nels', ' Concepteur Développeur D\'application', 1, 'Pantin', 93500, 'Ruben.png', 'Microsoft Word - Template CV Ruben-Nels.pdf', 'https://www.youtube.com/embed/tv14HvB8oAs', 'Ruben.png', 1),
(11, 'Serge', ' Concepteur Développeur D\'application', 1, 'Colombes', 92700, 'serge.png', 'Microsoft Word - Template CV serge.pdf', 'https://www.youtube.com/embed/0IpBDZKwbU0', 'serge.png', 1),
(12, 'Tarik', ' Concepteur Développeur D\'application', 1, 'Fontenay-sous-bois', 94120, 'Tarik.png', 'Microsoft Word - Template CV Tarik.pdf', 'https://www.youtube.com/embed/0IpBDZKwbU0', 'Tarik.png', 1),
(13, 'Yvan', ' Concepteur Développeur D\'application', 1, 'Bois-Colombes', 92270, 'Yvan.png', 'Microsoft Word - Template CV Yvan.pdf', 'https://www.youtube.com/embed/I2SqrcrEie4', 'Yvan.png', 1),
(14, 'Zeyd', ' Concepteur Développeur D\'application', 1, 'Paris', 75015, 'Zeyd.png', 'Microsoft Word - Template CV Zeyd.pdf', 'https://www.youtube.com/embed/zJqs4dA7i90', 'Zeyd.png', 1),
(15, 'Alexandre', 'BTS Systèmes Informatiques aux Organisations ', 1, 'Fontenay aux roses', 92260, 'Alexandre.png', 'Microsoft Word - Template CV Alexandre.pdf', 'https://www.youtube.com/embed/AVDiuyd-vY8', 'Alexandre.png', 1),
(16, 'Anthony', 'BTS Systèmes Informatiques aux Organisations ', 1, 'paris', 75013, 'Anthony.png', 'Microsoft Word - Template CV Anthony.pdf', 'https://www.youtube.com/embed/g47XhcnCH0I', 'Anthony.png', 1),
(17, 'Camille', 'BTS Systèmes Informatiques aux Organisations ', 1, 'Castanet Le Haut ', 34610, 'Camille.png', 'Microsoft Word - Template CV Camille.pdf', 'https://www.youtube.com/embed/UNq4-uv-_oU', 'Camille.png', 1),
(18, 'Eric', 'BTS Systèmes Informatiques aux Organisations ', 1, 'Clichy ', 92110, 'Eric.png', 'Microsoft Word - Template CV Eric.pdf', '', 'Eric.png', 1),
(19, 'Endrick', 'BTS Systèmes Informatiques aux Organisations ', 1, '', 0, 'Endrick.png', 'Microsoft Word - Template CV Hendrick.pdf', 'https://www.youtube.com/embed/DSyvLo4TOJk', 'Endrick.png', 1),
(20, 'Hugo', 'BTS Systèmes Informatiques aux Organisations ', 1, 'La Chapelle Gauthier', 77720, 'Hugo.png', 'Microsoft Word - Template CV Hugo.pdf', 'https://www.youtube.com/embed/s0UQBzdI0Pk', 'Hugo.png', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_Class`),
  ADD KEY `fk_class_filiére1_idx` (`filiére_id_filiere`);

--
-- Index pour la table `filiére`
--
ALTER TABLE `filiére`
  ADD PRIMARY KEY (`id_filiere`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_class2_idx` (`class_id_Class`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `class`
--
ALTER TABLE `class`
  MODIFY `id_Class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `fk_class_filiére1` FOREIGN KEY (`filiére_id_filiere`) REFERENCES `filiére` (`id_filiere`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_class2` FOREIGN KEY (`class_id_Class`) REFERENCES `class` (`id_Class`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
