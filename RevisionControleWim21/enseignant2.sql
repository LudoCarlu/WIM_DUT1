-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- GÃ©nÃ©rÃ© le :  Mar 07 Juin 2016 Ã  20:53
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.21
 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
 
 
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
 
--
-- Base de donnÃ©es :  `controle`
--
 
-- --------------------------------------------------------
 
--
-- Structure de la table `enseignant`
--
 
CREATE TABLE `enseignant` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bureau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--
-- Contenu de la table `enseignant`
--
 
INSERT INTO `enseignant` (`id`, `nom`, `prenom`, `email`, `bureau`) VALUES
(1, 'Monnerat ', 'Denis', 'monnerat@u-pec.fr', 114),
(2, 'Loukianov ', 'Oleg', 'oleg.loukianov@u-pec.fr', 114),
(3, 'Cegielski', 'Patrick', 'cegielski@u-pec.fr', 112),
(4, 'Renaud', 'Marie-HÃ©lÃ¨ne', 'marie-helene.renaud@u-pec.fr', 113),
(5, 'Hernandez', 'Luc', 'luc.hernandez@u-pec.fr', 111),
(6, 'Crouan-Veron', 'Patricia', 'crouan@u-pec.fr', 113),
(7, 'Valarcher', 'Pierre', 'valarcher@u-pec.fr', 114),
(8, 'Gervais', 'FrÃ©deric', 'frederic.gervais@u-pec.fr', 113);
 
--
-- Index pour les tables exportÃ©es
--
 
--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id`);
 
--
-- AUTO_INCREMENT pour les tables exportÃ©es
--
 
--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;