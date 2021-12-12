-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 12 déc. 2021 à 19:19
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vitrymatteiproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `immat` varchar(7) NOT NULL,
  `marque` varchar(25) NOT NULL,
  `modele` varchar(25) NOT NULL,
  `color` varchar(25) NOT NULL,
  `sold` tinyint(1) NOT NULL DEFAULT '0',
  `dateAchat` date DEFAULT NULL,
  `dateVoiture` date NOT NULL,
  `kilometre` int NOT NULL,
  `imagePath` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'base.jpg',
  PRIMARY KEY (`immat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`immat`, `marque`, `modele`, `color`, `sold`, `dateAchat`, `dateVoiture`, `kilometre`, `imagePath`) VALUES
('CP847AZ', 'Porsche', '911 type 992', 'Rouge', 0, '2021-12-12', '2021-06-29', 5931, '911type992.jfif'),
('BM128ZJ', 'Fiat', 'Multipla', 'Beige', 0, '2021-12-01', '2002-02-24', 321943, 'multipla.jfif'),
('SJ295CV', 'Ferrari', '812 Superfast', 'Noir', 0, '2021-12-03', '2021-10-12', 1593, '812superfast.jfif'),
('ZK923PS', 'Mercedes', 'Classe G', 'Blanc', 0, '2021-10-21', '2021-05-12', 6023, 'classeG.jfif'),
('DE284BH', 'Audi', 'RS3', 'Gris Nardo', 0, NULL, '2019-08-23', 20304, 'rs3.jfif'),
('AZPOLK', 'Peugeot', '801', 'gris', 0, '2021-12-12', '2021-12-02', 0, 'base.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
