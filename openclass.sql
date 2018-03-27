-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 26 mars 2018 à 08:36
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `openclass`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat_open`
--

DROP TABLE IF EXISTS `minichat_open`;
CREATE TABLE IF NOT EXISTS `minichat_open` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `minichat_open`
--

INSERT INTO `minichat_open` (`ID`, `pseudo`, `message`, `date_creation`) VALUES
(93, 'SlideJet', 'Mini-chat protéger ;)', '2018-03-26 10:31:05'),
(92, 'Test Faille Xss', '<p>Je sais comment tu t\'appelles, hé hé. Tu t\'appelles <script type=\"text/javascript\">alert(\'Badaboum\')</script> !</p>', '2018-03-26 10:30:37'),
(91, 'David', 'Bonjour tout le monde !', '2018-03-26 10:29:25'),
(90, 'SlideJet', 'Bienvenue sur le mini-chat', '2018-03-26 10:28:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
