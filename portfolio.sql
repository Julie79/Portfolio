-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 22 mars 2018 à 09:55
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `langages`
--

CREATE TABLE `langages` (
  `id` int(3) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `niveau` int(3) NOT NULL,
  `type` enum('front','back','autre') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `langages`
--

INSERT INTO `langages` (`id`, `nom`, `logo`, `niveau`, `type`) VALUES
(1, 'HTML', 'html.png', 80, 'front'),
(2, 'CSS', 'css.png', 80, 'front'),
(3, 'BOOTSTRAP', 'bootstrap.png', 75, 'front'),
(4, 'JAVASCRIPT', 'js.png', 65, 'front'),
(5, 'JQUERY', 'jquery.png', 65, 'front'),
(6, 'WORDPRESS', 'wordpress.png', 50, 'front'),
(7, 'PHP', 'php.png', 65, 'back'),
(8, 'AJAX', 'ajax.png', 40, 'back'),
(9, 'MYSQL', 'mysql.png', 75, 'back'),
(10, 'SYMFONY', 'symfony.png', 50, 'back'),
(11, 'ANGULAR', 'angular.png', 30, 'front');

-- --------------------------------------------------------

--
-- Structure de la table `realisations`
--

CREATE TABLE `realisations` (
  `id` int(3) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `description` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `extrait` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realisations`
--

INSERT INTO `realisations` (`id`, `titre`, `description`, `photo`, `extrait`) VALUES
(1, 'Licornes', 'Réalisation d\'une page en html/css d\'après maquette.', 'licornes.png', 'extrait_licornes.png'),
(2, 'Chats', 'Utilisation du framework Bootstrap.', 'chats.png', 'extrait_chats.png'),
(3, 'VTC', 'Réalisation d\'un site en PHP avec des pages inclusives.', 'vtc.png', 'extrait_vtc.png'),
(4, 'SalleA', 'Réalisation d\'un site d\'e-commerce multi-pages avec PHP et Ajax.', 'sallea.png', 'extrait_sallea.png'),
(5, 'Sliders', 'Création d\'un carrousel à l\'aide de Javascript', 'sliders.png', ''),
(6, 'MaBoutique', 'Intégration HTML, CSS d\'après maquette', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `langages`
--
ALTER TABLE `langages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `realisations`
--
ALTER TABLE `realisations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `langages`
--
ALTER TABLE `langages`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `realisations`
--
ALTER TABLE `realisations`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
