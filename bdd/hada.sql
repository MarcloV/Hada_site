-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 18 juil. 2018 à 13:53
-- Version du serveur :  10.2.14-MariaDB
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hada`
--
DROP DATABASE IF EXISTS `hada`;
CREATE DATABASE `hada`;
-- --------------------------------------------------------

--
-- Structure de la table `alimentation`
--

DROP TABLE IF EXISTS `alimentation`;
CREATE TABLE IF NOT EXISTS `alimentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `quantite` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `attributs`
--

DROP TABLE IF EXISTS `attributs`;
CREATE TABLE IF NOT EXISTS `attributs` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `attributs`
--

INSERT INTO `attributs` (`id`, `nom`) VALUES
(0, 'date_de_naissance'),
(1, 'race'),
(3, 'type_pelage'),
(4, 'couleur_robe'),
(5, 'sexe'),
(6, 'steriliser'),
(7, 'identification'),
(8, 'photo');

-- --------------------------------------------------------

--
-- Structure de la table `attribut_chat`
--

DROP TABLE IF EXISTS `attribut_chat`;
CREATE TABLE IF NOT EXISTS `attribut_chat` (
  `id_chat` int(11) NOT NULL,
  `id_attribut` int(11) NOT NULL,
  `valeur` varchar(100) NOT NULL,
  `afficherdashbord` bit(1) NOT NULL,
  PRIMARY KEY (`id_chat`,`id_attribut`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `attribut_chat` (`id_chat`,`id_attribut`,`valeur`,`afficherdashbord`) VALUES
('1','0','05/06/1983',1),
('1','1','Norvegien',0),
('1','5','M',1),
('1','6','NON',0),
('1','7','puce',1),
('2','0','12/05/1985',0),
('2','1','Persan',1),
('2','4','Blanc',0),
('2','5','F',1),
('2','6','NON',0),
('2','7','tatouage',1);
-- --------------------------------------------------------

--
-- Structure de la table `chats`
--

DROP TABLE IF EXISTS `chats`;
CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `chats` (`id_utilisateur`, `nom`) VALUES
('1', 'chat_test'),
('1', 'chat2_test');

-- --------------------------------------------------------

--
-- Structure de la table `chat_pathologie`
--

DROP TABLE IF EXISTS `chat_pathologie`;
CREATE TABLE IF NOT EXISTS `chat_pathologie` (
  `id_chat` int(11) NOT NULL,
  `id_pathologie` int(11) NOT NULL,
  PRIMARY KEY (`id_pathologie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `chat_pathologie` (`id_chat`,`id_pathologie`) VALUES
('1','2'),('1','3')

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_chat` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `note` varchar(200) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `pathologie`
--

DROP TABLE IF EXISTS `pathologie`;
CREATE TABLE IF NOT EXISTS `pathologie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pathologie`
--

INSERT INTO `pathologie` (`id`, `nom`) VALUES
(1, 'maladie1'),
(2, 'maladie2'),
(3, 'maladie3'),
(4, 'maladie4');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
COMMIT;

INSERT INTO `utilisateur` (`email`, `password`, `pseudo`, `nom`, `prenom`, `photo`) VALUES
('test@test', '$2y$10$UH1Z65G9GVd1SpjUc4I3tuNDsuMg5DzvAcK7gEMe.NbykE0BX5lBS', 'pseudo_test', 'nom_test', 'prenom_test', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Structure de la table `poids`
--

CREATE TABLE `poids` (
  `id_chat` int(11) NOT NULL,
  `poid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;