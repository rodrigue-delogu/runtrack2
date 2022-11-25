-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 25 nov. 2022 à 12:46
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jour09`
--

-- --------------------------------------------------------

--
-- Structure de la table `etage`
--

DROP TABLE IF EXISTS `etage`;
CREATE TABLE IF NOT EXISTS `etage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `numéro` int(11) NOT NULL,
  `superficie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etage`
--

INSERT INTO `etage` (`id`, `nom`, `numéro`, `superficie`) VALUES
(1, 'RDC', 0, 500),
(2, 'R+1', 0, 500);

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `id_etage` int(11) NOT NULL,
  `capacite` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`id`, `nom`, `id_etage`, `capacite`) VALUES
(1, 'Lounge', 1, 100),
(2, 'Studio Son', 1, 5),
(3, 'Broadcasting', 2, 50),
(4, 'Bocal Peda', 2, 4),
(5, 'Coworking', 2, 80),
(6, 'Studio Video', 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `étudiants`
--

DROP TABLE IF EXISTS `étudiants`;
CREATE TABLE IF NOT EXISTS `étudiants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `naissance` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `étudiants`
--

INSERT INTO `étudiants` (`id`, `prenom`, `nom`, `naissance`, `sexe`, `email`) VALUES
(1, 'Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
(2, 'Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
(3, 'Roxan', 'Roumégas', '2016-09-08', 'homme', 'roxan@laplateforme.io'),
(4, 'd', 'd', 'd', 'd', 'd'),
(5, 'Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
(6, 'Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
(7, 'Roxan', 'Roumégas', '2016-09-08', 'homme', 'roxan@laplateforme.io'),
(8, 'Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
(9, 'Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
(10, 'Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
(11, 'Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
