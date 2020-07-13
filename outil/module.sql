-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 26 mai 2020 à 09:51
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `numero` int(25) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL,
  `temperature` float NOT NULL,
  `duree` int(25) NOT NULL,
  `nbr_donnee` int(30) NOT NULL,
  `etat` varchar(20) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`numero`, `nom`, `description`, `type`, `temperature`, `duree`, `nbr_donnee`, `etat`) VALUES
(1, 'montre', 'montre interconnectée', 'autonome', 27, 23, 10, 'fonctionnel'),
(2, 'telephone', 'telephone connecté', 'hybride', 30, 50, 100, 'repos'),
(3, 'ordinateur connecté', 'ordinateur lié au smartphone', 'evolué', 40, 51, 210, 'fonctionnel'),
(4, 'fil', 'fil de cuivre', 'souder', 23, 14, 10, 'fonctionnel');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
