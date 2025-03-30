-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 30 Mars 2025 à 11:05
-- Version du serveur :  5.6.17-log
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `kaze12`
--

-- --------------------------------------------------------

--
-- Structure de la table `fete`
--

CREATE TABLE IF NOT EXISTS `fete` (
  `nom` text NOT NULL,
  `matricule` int(10) NOT NULL,
  `faculte` text NOT NULL,
  `boissons` text NOT NULL,
  `diner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fete`
--

INSERT INTO `fete` (`nom`, `matricule`, `faculte`, `boissons`, `diner`) VALUES
('NIYONGABO', 87172, 'UB', 'Mirinda', 'ragout'),
('NIYONGERE Andy Crepin', 87222, 'Genie Logiciel', 'amstel', 'steck'),
('irutingabo guy donnel', 87180, 'Ecopo', 'primus', 'poulet'),
('NIYOKWIZERA Zebede', 87221, 'Gestion', 'Fanta', 'poisson');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `grade` text NOT NULL,
  `nom` text NOT NULL,
  `matricule` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pseudo` varchar(11) NOT NULL,
  `motdepasse` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`grade`, `nom`, `matricule`, `email`, `pseudo`, `motdepasse`) VALUES
('officiers superieurs', 'NIYONGERE Andy Crepin', 'SS2222', 'niyongerecrepin@gmail.com', 'vampire2222', '$2y$10$K6xS643qX81Dh1Dqll1QmeFnbUQs2jP2zJFTw8jQJxjniAh5dklmy'),
('officiers Generaux', 'NIYONGABO', 'ss0145', 'kok@gmail.com', 'kokok', '12345678');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
