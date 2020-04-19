-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 19 avr. 2020 à 21:48
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `apicouleur`
--

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

DROP TABLE IF EXISTS `couleur`;
CREATE TABLE IF NOT EXISTS `couleur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `year` year(4) NOT NULL,
  `color` varchar(8) NOT NULL,
  `pantone_value` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `couleur`
--

INSERT INTO `couleur` (`id`, `name`, `year`, `color`, `pantone_value`) VALUES
(1, 'cerulean', 2000, '#98B2D1', '15-4020'),
(2, 'fuchsia rose', 2001, '#C74375', '17-2031'),
(3, 'true red', 2002, '#BF1932', '19-1664'),
(4, 'aqua sky', 2003, '#7BC4C4', '14-4811'),
(5, 'tigerlily', 2004, '#E2583E', '17-1456'),
(6, 'blue turquoise', 2005, '#53B0AE', '15-5217'),
(7, 'sand dollar', 2006, '#DECDBE', '13-1106'),
(8, 'chili pepper', 2007, '#9B1B30', '19-1557'),
(9, 'blue iris', 2008, '#5A5B9F', '18-3943'),
(10, 'mimosa', 2009, '#F0C05A', '14-0848'),
(11, 'turquoise', 2010, '#45B5AA', '15-5519'),
(12, 'honeysuckle', 2011, '#D94F70', '18-2120');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
