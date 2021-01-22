-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 21 jan. 2021 à 10:01
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
(1, 'Concepteur developpeur d\'application', 1),
(2, 'BTS Systèmes Informatiques aux Organisations ', 1),
(3, 'Administrateur d\'Infrastructures Sécurisées', 2),
(4, 'Technicien Supérieur Systèmes et Réseaux ', 2),
(5, 'Expert en Etudes et Développement du Système \r\n', 1);

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
(1, 'developpement'),
(2, 'Réseaux');

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
(12, 'Tarik', '', 1, 'Fontenay-sous-bois', 94120, 'Tarik.png', 'Microsoft Word - Template CV Tarik.pdf', 'https://www.youtube.com/embed/0IpBDZKwbU0', 'Tarik.png', 1),
(13, 'Yvan', ' Concepteur Développeur D\'application', 1, 'Bois-Colombes', 92270, 'Yvan.png', 'Microsoft Word - Template CV Yvan.pdf', 'https://www.youtube.com/embed/I2SqrcrEie4', 'Yvan.png', 1),
(14, 'Zeyd', ' Concepteur Développeur D\'application', 1, 'Paris', 75015, 'Zeyd.png', 'Microsoft Word - Template CV Zeyd.pdf', 'https://www.youtube.com/embed/zJqs4dA7i90', 'Zeyd.png', 1),
(15, 'Alexandre', 'BTS Systèmes Informatiques aux Organisations ', 1, 'Fontenay aux roses', 92260, 'Alexandre.png', 'Microsoft Word - Template CV Alexandre.pdf', 'https://www.youtube.com/embed/AVDiuyd-vY8', 'Alexandre.png', 2),
(16, 'Anthony', 'BTS Systèmes Informatiques aux Organisations ', 1, 'paris', 75013, 'Anthony.png', 'Microsoft Word - Template CV Anthony.pdf', 'https://www.youtube.com/embed/g47XhcnCH0I', 'Anthony.png', 2),
(17, 'Camille', 'BTS Systèmes Informatiques aux Organisations ', 1, 'Castanet Le Haut ', 34610, 'Camille.png', 'Microsoft Word - Template CV Camille.pdf', 'https://www.youtube.com/embed/UNq4-uv-_oU', 'Camille.png', 2),
(18, 'Eric', 'BTS Systèmes Informatiques aux Organisations ', 1, 'Clichy ', 92110, 'Eric.png', 'Microsoft Word - Template CV Eric.pdf', '', 'Eric.png', 2),
(19, 'Hendrick', 'BTS Systèmes Informatiques aux Organisations ', 1, '', 0, 'Endrick.png', 'Microsoft Word - Template CV Hendrick.pdf', 'https://www.youtube.com/embed/DSyvLo4TOJk', 'Endrick.png', 2),
(20, 'Hugo', 'BTS Systèmes Informatiques aux Organisations ', 1, 'La Chapelle Gauthier', 77720, 'Hugo.png', 'Microsoft Word - Template CV Hugo.pdf', 'https://www.youtube.com/embed/s0UQBzdI0Pk', 'Hugo.png', 2),
(21, 'Jason', 'BTS Systèmes Informatiques aux Organisations ', 1, 'Argenteuil', 95100, 'Jason.png', 'Microsoft Word - Template CV Jason.pdf', 'https://www.youtube.com/embed/jhrmQ_bHXdc', 'Jason.png', 2),
(22, 'Jérémie', '', 1, '', 0, 'Jeremie.png', 'Microsoft Word - Template CV Jérémie.pdf', '', 'Jeremie.png', 2),
(23, 'Johann', '', 1, 'Chatillon', 92320, 'Johann.png', 'Microsoft Word - Template CV Johann.pdf', '', 'Johann.png', 2),
(24, 'Jonathan', '', 1, 'Rueilmalmaison', 92500, 'Jonathan.png', 'Microsoft Word - Template CV Jonathan.pdf', 'https://www.youtube.com/embed/gxB_X_2xKY8', 'Jonathan.png', 2),
(25, 'Kenny', '', 1, 'paris', 75008, 'Kenny.png', 'Microsoft Word - Template CV Kenny.pdf', 'https://www.youtube.com/embed/sTHGjezgZoQ', 'Kenny.png', 2),
(26, 'Kevain', '', 1, 'saint-denis', 93200, 'kévin.png', 'Microsoft Word - Template CV Kevain.pdf', 'https://www.youtube.com/embed/e1tAYw8zec0', 'kévin.png', 2),
(27, 'Lamine', '', 1, 'Paris', 75010, 'Lamine bts sio.png', 'Microsoft Word - Template CV lamine souarer.pdf', 'https://www.youtube.com/embed/nd7DNwfSnSM?autoplay=1', 'Lamine bts sio.png', 2),
(28, 'Lamine', '', 1, 'Villecresnes', 94440, 'Lamine.png', 'Microsoft Word - Template CV lamine.pdf', 'https://www.youtube.com/embed/CmesBz5rfSA', 'Lamine.png', 2),
(29, 'Loggan', '', 1, 'Nucourt', 95420, 'Loggan.png', 'Microsoft Word - Template CV Loggan.pdf', '', 'Loggan.png', 2),
(30, 'Marvin', '', 1, 'Levallois-Perret ', 92300, 'Marvin.png', 'Microsoft Word - Template CV Marvin.pdf', 'https://www.youtube.com/embed/SP2BR-wF2M0', 'Marvin.png', 2),
(31, 'Mohamed', '', 1, 'Suresnes', 92150, 'Mohamed.png', 'Microsoft Word - Template CV Mohamed.pdf', 'https://www.youtube.com/embed/jF0y7LgybVk', 'Mohamed.png', 3),
(32, 'Saad', '', 1, 'Gennevilliers', 92230, 'Saad.png', 'Microsoft Word - Template CV Saad.pdf', 'https://www.youtube.com/embed/uvbGz-7ipEI', 'Saad.png', 2),
(33, 'Sofian', '', 1, 'Saint-denis', 93200, 'Sofiane.png', 'Microsoft Word - Template CV Sofian.pdf', 'https://www.youtube.com/embed/x0VTjl2xHf0', 'Sofiane.png', 3),
(34, 'Boubacar', '', 1, 'Argenteuil', 95100, 'Boubacar.png', 'Microsoft Word - Template CV Boubacar.pdf', 'https://www.youtube.com/embed/LYctGgPcxeY', 'Boubacar.png', 3),
(35, 'Hamza', '', 1, 'Bondy', 93140, 'Hamza.png', 'Microsoft Word - Template CV Hamza.pdf', 'https://www.youtube.com/embed/nxZRWbpyjys', 'Hamza.png', 3),
(36, 'Kamal', '', 1, 'aulnay sous bois', 93600, 'Kamal.png', 'Microsoft Word - Template CV Kamal.pdf', '', 'Kamal.png', 3),
(37, 'Shams', '', 1, 'Neuilly sur seine', 92000, 'Shams.png', 'Microsoft Word - Template CV Shams.pdf', 'https://www.youtube.com/embed/noO4hQ2YKeE', 'Shams.png', 3),
(38, 'Vanneck', '', 1, 'Nanterre', 92000, 'Vanneck.png', 'Microsoft Word - Template CV Vanneck.pdf', '', 'Vanneck.png', 3),
(39, 'Ahmed', '', 1, 'Epinay sur seine', 93800, 'Ahmed.png', 'Microsoft Word - Template CV Ahmed.pdf', 'https://www.youtube.com/embed/TxWNc4PbWi8', 'Ahmed.png', 4),
(40, 'Bello', '', 1, 'Auberviliers', 93300, 'Bello.png', 'Microsoft Word - Template CV Bello.pdf', '', 'Bello.png', 5);

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
  MODIFY `id_Class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
