-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 03 mars 2021 à 10:20
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exo200`
--

-- --------------------------------------------------------

--
-- Structure de la table `hiking`
--

DROP TABLE IF EXISTS `hiking`;
CREATE TABLE IF NOT EXISTS `hiking` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `difficulty` varchar(255) COLLATE utf8_bin NOT NULL,
  `distance` float NOT NULL,
  `duration` varchar(10) COLLATE utf8_bin NOT NULL,
  `height_difference` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `hiking`
--

INSERT INTO `hiking` (`id`, `name`, `difficulty`, `distance`, `duration`, `height_difference`) VALUES
(1, 'Deux boucles de Bras Sec à Palmiste Rouge', 'Moyen', 12.2, '5h', 850),
(3, 'Le Sentier des Sources entre Cilaos et Bras Sec', 'Facile', 4.8, '1h15', 280),
(4, 'Le sommet du Piton Béthoune par le tour du Bonnet de Prêtre', 'Très difficile', 5.7, '4h', 650),
(5, 'Le Dimitile depuis Bras Sec par le Kerveguen', 'Difficile', 5.7, '4h', 650),
(6, 'De la Mare à Joncs à Cilaos par le Kerveguen et le Gîte de la Caverne Dufour', 'Difficile', 24.5, '10h', 1550);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
