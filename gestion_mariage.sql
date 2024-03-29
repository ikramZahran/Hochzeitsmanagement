-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 03 jan. 2022 à 23:57
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
-- Base de données : `gestion_mariage`
--

-- --------------------------------------------------------

--
-- Structure de la table `histoire`
--

DROP TABLE IF EXISTS `histoire`;
CREATE TABLE IF NOT EXISTS `histoire` (
  `id_histoire` int(11) NOT NULL AUTO_INCREMENT,
  `contenue` text NOT NULL,
  `id_marie` int(11) NOT NULL,
  PRIMARY KEY (`id_histoire`),
  KEY `fkhist` (`id_marie`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `histoire`
--

INSERT INTO `histoire` (`id_histoire`, `contenue`, `id_marie`) VALUES
(1, 'bonsoir', 1);

-- --------------------------------------------------------

--
-- Structure de la table `invitation`
--

DROP TABLE IF EXISTS `invitation`;
CREATE TABLE IF NOT EXISTS `invitation` (
  `Id_invitation` varchar(50) NOT NULL,
  `Contenu` varchar(200) NOT NULL,
  `id_marie` int(11) NOT NULL,
  `Id_invite` int(11) NOT NULL,
  PRIMARY KEY (`Id_invitation`),
  KEY `fkINVtata` (`id_marie`),
  KEY `fkin` (`Id_invite`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `invite`
--

DROP TABLE IF EXISTS `invite`;
CREATE TABLE IF NOT EXISTS `invite` (
  `id_invite` int(11) NOT NULL AUTO_INCREMENT,
  `nom_complet` varchar(20) NOT NULL,
  `Statut` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` int(10) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  PRIMARY KEY (`id_invite`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `invite`
--

INSERT INTO `invite` (`id_invite`, `nom_complet`, `Statut`, `email`, `tel`, `sexe`) VALUES
(5, 'salwa aboudi', 'Absent', 'groupbassma274@gmail.com', 674613321, 'feminin'),
(7, 'ahmed', 'PrÃ©sent', 'ikram.zahrane@gmail.Com', 674613321, 'masculin'),
(6, 'Amel Baadi', 'Absent', 'ikram.zahrane@gmail.Com', 674613321, 'feminin'),
(10, 'zz', 'Absent', 'ikram.zahrane@gmail.Com', 674613321, 'Masculin');

-- --------------------------------------------------------

--
-- Structure de la table `mariage`
--

DROP TABLE IF EXISTS `mariage`;
CREATE TABLE IF NOT EXISTS `mariage` (
  `Id_Mariage` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `id_marie` int(11) NOT NULL,
  PRIMARY KEY (`Id_Mariage`),
  KEY `fkmar` (`id_marie`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `marie`
--

DROP TABLE IF EXISTS `marie`;
CREATE TABLE IF NOT EXISTS `marie` (
  `id_marie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_complet` varchar(20) NOT NULL,
  `nom_complet_mariee` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `mp` varchar(20) NOT NULL,
  PRIMARY KEY (`id_marie`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marie`
--

INSERT INTO `marie` (`id_marie`, `nom_complet`, `nom_complet_mariee`, `email`, `sexe`, `mp`) VALUES
(1, 'ikram zahran', 'xxxx', 'ikram.zahrane@gmail.Com', 'fÃ©minin', 'ikram');

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

DROP TABLE IF EXISTS `prestataire`;
CREATE TABLE IF NOT EXISTS `prestataire` (
  `Id_prestataire` varchar(50) NOT NULL,
  `Ville` varchar(20) NOT NULL,
  `Contact` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_prestataire`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recommandation`
--

DROP TABLE IF EXISTS `recommandation`;
CREATE TABLE IF NOT EXISTS `recommandation` (
  `id_rec` int(11) NOT NULL AUTO_INCREMENT,
  `objet` varchar(40) NOT NULL,
  `contenue` text NOT NULL,
  `id_invite` int(11) NOT NULL,
  `id_marie` int(11) NOT NULL,
  PRIMARY KEY (`id_rec`),
  KEY `fk2` (`id_marie`),
  KEY `fk3` (`id_invite`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
