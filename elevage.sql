-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 12 jan. 2021 à 13:33
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `elevage`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

CREATE TABLE `animal` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `espece` varchar(40) NOT NULL,
  `sexe` char(1) DEFAULT NULL,
  `date_naissance` datetime NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `commentaires` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`id`, `espece`, `sexe`, `date_naissance`, `nom`, `commentaires`) VALUES
(1, 'humain', 'F', '2010-04-05 13:43:00', 'gallus', 'Mordille beaucoup'),
(2, 'chat', NULL, '2010-03-24 02:23:00', 'Roucky', NULL),
(3, 'chat', 'F', '2010-09-13 15:02:00', 'Schtroumpfette', NULL),
(4, 'tortue', 'F', '2009-08-03 05:12:00', NULL, NULL),
(5, 'humain', 'F', '2010-10-03 16:44:00', 'gallus', 'Né sans oreille gauche'),
(6, 'humain', 'F', '2009-06-13 08:17:00', 'gallus', 'Carapace bizarre'),
(7, 'chien', 'F', '2008-12-06 05:18:00', 'Caroline', NULL),
(8, 'chat', 'M', '2008-09-11 15:38:00', 'Bagherra', NULL),
(9, 'tortue', NULL, '2010-08-23 05:18:00', NULL, NULL),
(10, 'chien', 'M', '2010-07-21 15:41:00', 'Bobo', NULL),
(11, 'chien', 'F', '2008-02-20 15:45:00', 'Canaille', NULL),
(12, 'chien', 'F', '2009-05-26 08:54:00', 'Cali', NULL),
(13, 'chien', 'F', '2007-04-24 12:54:00', 'Rouquine', NULL),
(14, 'chien', 'F', '2009-05-26 08:56:00', 'Fila', NULL),
(15, 'chien', 'F', '2008-02-20 15:47:00', 'Anya', NULL),
(16, 'chien', 'F', '2009-05-26 08:50:00', 'Louya', NULL),
(17, 'chien', 'F', '2008-03-10 13:45:00', 'Welva', NULL),
(18, 'chien', 'F', '2007-04-24 12:59:00', 'Zira', NULL),
(19, 'chien', 'F', '2009-05-26 09:02:00', 'Java', NULL),
(20, 'chien', 'M', '2007-04-24 12:45:00', 'Balou', NULL),
(21, 'chien', 'M', '2008-03-10 13:43:00', 'Pataud', NULL),
(22, 'chien', 'M', '2007-04-24 12:42:00', 'Bouli', NULL),
(24, 'chien', 'M', '2007-04-12 05:23:00', 'Cartouche', NULL),
(25, 'chien', 'M', '2006-05-14 15:50:00', 'Zambo', NULL),
(26, 'chien', 'M', '2006-05-14 15:48:00', 'Samba', NULL),
(27, 'chien', 'M', '2008-03-10 13:40:00', 'Moka', NULL),
(28, 'chien', 'M', '2006-05-14 15:40:00', 'Pilou', NULL),
(29, 'chat', 'M', '2009-05-14 06:30:00', 'Fiero', NULL),
(30, 'chat', 'M', '2007-03-12 12:05:00', 'Zonko', NULL),
(31, 'chat', 'M', '2008-02-20 15:45:00', 'Filou', NULL),
(32, 'chat', 'M', '2007-03-12 12:07:00', 'Farceur', NULL),
(33, 'chat', 'M', '2006-05-19 16:17:00', 'Caribou', NULL),
(34, 'chat', 'M', '2008-04-20 03:22:00', 'Capou', NULL),
(35, 'humain', 'F', '2006-05-19 16:56:00', 'gallus', 'Pas de queue depuis la naissance'),
(36, '\"chat;\"M\";\"2009-05-14 06:42:00\";\"Boucan\"', NULL, '0000-00-00 00:00:00', NULL, NULL),
(37, 'chien', 'F', '2008-02-20 15:45:00', 'Canaille', NULL),
(38, 'chien', 'F', '2009-05-26 08:54:00', 'Cali', NULL),
(39, 'chien', 'F', '2007-04-24 12:54:00', 'Rouquine', NULL),
(40, 'chien', 'F', '2009-05-26 08:56:00', 'Fila', NULL),
(41, 'chien', 'F', '2008-02-20 15:47:00', 'Anya', NULL),
(42, 'chien', 'F', '2009-05-26 08:50:00', 'Louya', NULL),
(43, 'chien', 'F', '2008-03-10 13:45:00', 'Welva', NULL),
(44, 'chien', 'F', '2007-04-24 12:59:00', 'Zira', NULL),
(45, 'chien', 'F', '2009-05-26 09:02:00', 'Java', NULL),
(46, 'chien', 'M', '2007-04-24 12:45:00', 'Balou', NULL),
(47, 'chien', 'M', '2008-03-10 13:43:00', 'Pataud', NULL),
(48, 'chien', 'M', '2007-04-24 12:42:00', 'Bouli', NULL),
(50, 'chien', 'M', '2007-04-12 05:23:00', 'Cartouche', NULL),
(51, 'chien', 'M', '2006-05-14 15:50:00', 'Zambo', NULL),
(52, 'chien', 'M', '2006-05-14 15:48:00', 'Samba', NULL),
(53, 'chien', 'M', '2008-03-10 13:40:00', 'Moka', NULL),
(54, 'chien', 'M', '2006-05-14 15:40:00', 'Pilou', NULL),
(55, 'chat', 'M', '2009-05-14 06:30:00', 'Fiero', NULL),
(56, 'chat', 'M', '2007-03-12 12:05:00', 'Zonko', NULL),
(57, 'chat', 'M', '2008-02-20 15:45:00', 'Filou', NULL),
(58, 'chat', 'M', '2007-03-12 12:07:00', 'Farceur', NULL),
(59, 'chat', 'M', '2006-05-19 16:17:00', 'Caribou', NULL),
(60, 'chat', 'M', '2008-04-20 03:22:00', 'Capou', NULL),
(61, 'humain', 'F', '2006-05-19 16:56:00', 'gallus', 'Pas de queue depuis la naissance'),
(62, '\"chat;\"M\";\"2009-05-14 06:42:00\";\"Boucan\"', NULL, '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `test_tuto`
--

CREATE TABLE `test_tuto` (
  `id` int(11) NOT NULL,
  `prename` varchar(10) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test_tuto`
--
ALTER TABLE `test_tuto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
