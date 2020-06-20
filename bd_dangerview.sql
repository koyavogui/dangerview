-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 20 juin 2020 à 16:23
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_dangerview`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `idActivite` int(11) NOT NULL,
  `nomActivite` varchar(50) NOT NULL,
  `dateActivite` datetime NOT NULL,
  `idUtilisateur` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`idActivite`, `nomActivite`, `dateActivite`, `idUtilisateur`) VALUES
(17, 'Connexion', '2020-06-09 10:16:32', 1),
(18, 'Ajout utilisateur', '2020-06-09 10:19:17', 1),
(19, 'Ajout utilisateur', '2020-06-09 10:50:35', 1),
(20, 'Suppression utilisateur', '2020-06-09 10:52:02', 1),
(21, 'Connexion', '2020-06-09 11:03:10', 1),
(22, 'Connexion', '2020-06-09 11:07:07', 1),
(23, 'Ajout utilisateur', '2020-06-09 11:07:51', 1),
(24, 'Connexion', '2020-06-09 11:12:29', 1),
(25, 'Ajout utilisateur', '2020-06-09 11:13:28', 1),
(26, 'Modification utilisateur', '2020-06-09 11:14:32', 1),
(27, 'Suppression utilisateur', '2020-06-09 11:14:51', 1),
(28, 'Connexion', '2020-06-09 11:16:04', 4),
(29, 'Modification utilisateur', '2020-06-09 11:16:35', 4),
(30, 'Connexion', '2020-06-09 11:18:36', 4),
(31, 'Connexion', '2020-06-09 11:18:48', 4),
(32, 'Connexion', '2020-06-09 11:19:38', 4),
(33, 'Ajout utilisateur', '2020-06-09 11:20:41', 4),
(34, 'Connexion', '2020-06-09 11:21:47', 5),
(35, 'Connexion', '2020-06-09 23:22:19', 1),
(36, 'Connexion', '2020-06-10 07:35:26', 1),
(37, 'Connexion', '2020-06-10 09:20:46', 1),
(38, 'Modification utilisateur', '2020-06-10 09:32:15', 1),
(39, 'Ajout de type de danger', '2020-06-10 14:25:10', 1),
(40, 'Ajout de type de danger', '2020-06-10 14:29:31', 1),
(41, 'Ajout de type de danger', '2020-06-10 14:30:38', 1),
(42, 'Ajout de type de danger', '2020-06-10 14:40:00', 1),
(43, 'Ajout de type de danger', '2020-06-10 14:46:31', 1),
(44, 'Ajout de type de danger', '2020-06-10 15:51:45', 1),
(45, 'Ajout de type de danger', '2020-06-10 15:52:54', 1),
(46, 'Connexion', '2020-06-10 23:49:25', 1),
(47, 'Ajout de type de danger', '2020-06-11 00:46:51', 1),
(48, 'Ajout de type de danger', '2020-06-11 00:52:19', 1),
(49, 'Ajout de type de danger', '2020-06-11 00:58:57', 1),
(50, 'Ajout de type de danger', '2020-06-11 01:03:17', 1),
(51, 'Ajout de type de danger', '2020-06-11 01:07:24', 1),
(52, 'Ajout de type de danger', '2020-06-11 01:07:31', 1),
(53, 'Ajout de type de danger', '2020-06-11 01:07:41', 1),
(54, 'Ajout de type de danger', '2020-06-11 01:09:40', 1),
(55, 'Ajout de type de danger', '2020-06-11 01:11:12', 1),
(56, 'Ajout Danger', '2020-06-11 03:18:19', 1),
(57, 'Ajout Lieu', '2020-06-11 05:08:34', 1),
(58, 'Ajout Quartier', '2020-06-11 05:39:29', 1),
(59, 'Ajout Quartier', '2020-06-11 06:00:56', 1),
(60, 'Ajout Quartier', '2020-06-11 06:01:25', 1),
(61, 'Ajout pays', '2020-06-11 06:12:19', 1),
(62, 'Ajout pays', '2020-06-11 06:15:24', 1),
(63, 'Ajout utilisateur', '2020-06-11 06:29:52', 1),
(64, 'Deconnection', '2020-06-11 06:32:33', 1),
(65, 'Connexion', '2020-06-11 06:33:11', 6),
(66, 'Deconnection', '2020-06-11 06:37:30', 6),
(67, 'Connexion', '2020-06-11 06:44:39', 6),
(68, 'Deconnection', '2020-06-11 06:46:13', 6),
(69, 'Connexion', '2020-06-11 06:54:51', 6),
(70, 'Deconnection', '2020-06-11 06:57:36', 6),
(71, 'Connexion', '2020-06-11 07:06:40', 1),
(72, 'Deconnection', '2020-06-11 08:34:50', 1),
(73, 'Connexion', '2020-06-11 08:42:59', 1),
(74, 'Deconnection', '2020-06-11 08:43:14', 1),
(75, 'Connexion', '2020-06-11 08:43:37', 6),
(76, 'Deconnection', '2020-06-11 08:44:52', 6),
(77, 'Connexion', '2020-06-11 16:15:30', 6),
(78, 'Connexion', '2020-06-11 19:11:35', 1),
(79, 'Deconnection', '2020-06-11 19:11:40', 1),
(80, 'Connexion', '2020-06-11 19:12:12', 6),
(81, 'Connexion', '2020-06-11 19:13:00', 6),
(82, 'Connexion', '2020-06-11 23:12:23', 6),
(83, 'Connexion', '2020-06-11 23:15:38', 6),
(84, 'Deconnection', '2020-06-11 23:15:58', 6),
(85, 'Connexion', '2020-06-11 23:16:15', 6),
(86, 'Deconnection', '2020-06-11 23:16:32', 6),
(87, 'Connexion', '2020-06-11 23:18:15', 6),
(88, 'Ajout Quartier', '2020-06-11 23:43:57', 6),
(89, 'Connexion', '2020-06-12 00:46:22', 6),
(90, 'Ajout Danger', '2020-06-12 00:48:12', 6),
(91, 'Ajout Danger', '2020-06-12 00:48:33', 6),
(92, 'Ajout Danger', '2020-06-12 00:52:50', 6),
(93, 'Ajout Danger', '2020-06-12 00:54:19', 6),
(94, 'Modification Danger', '2020-06-12 04:14:01', 6),
(95, 'Modification Danger', '2020-06-12 04:17:16', 6),
(96, 'Modification Danger', '2020-06-12 04:17:47', 6),
(97, 'Modification Danger', '2020-06-12 04:20:25', 6),
(98, 'Modification Danger', '2020-06-12 04:20:37', 6),
(99, 'Modification Danger', '2020-06-12 04:39:38', 6),
(100, 'Modification Danger', '2020-06-12 04:46:15', 6),
(101, 'Suppression de Danger', '2020-06-12 04:52:20', 6),
(102, 'Deconnection', '2020-06-12 05:24:06', 6),
(103, 'Connexion', '2020-06-12 05:24:33', 6),
(104, 'Deconnection', '2020-06-12 05:25:01', 6),
(105, 'Connexion', '2020-06-12 05:27:59', 6),
(106, 'Deconnection', '2020-06-12 05:49:12', 6),
(107, 'Connexion', '2020-06-12 05:50:48', 5),
(108, 'Connexion', '2020-06-12 05:51:19', 5),
(109, 'Modification utilisateur', '2020-06-12 05:53:29', 5),
(110, 'Ajout utilisateur', '2020-06-12 06:09:59', 5),
(111, 'Modification utilisateur', '2020-06-12 06:11:16', 5),
(112, 'Modification utilisateur', '2020-06-12 06:12:58', 5),
(113, 'Connexion', '2020-06-12 06:54:00', 7),
(114, 'Deconnection', '2020-06-12 06:55:26', 7),
(115, 'Connexion', '2020-06-12 06:55:54', 7),
(116, 'Deconnection', '2020-06-12 07:02:16', 7),
(117, 'Connexion', '2020-06-12 07:16:00', 7),
(118, 'Modification de type de danger', '2020-06-12 08:01:45', 7),
(119, 'Suppression utilisateur', '2020-06-12 08:03:55', 7),
(120, 'Suppression de Danger', '2020-06-12 08:06:46', 7),
(121, 'Suppression de type Danger', '2020-06-12 08:07:18', 7),
(122, 'Suppression de type Danger', '2020-06-12 08:07:22', 7),
(123, 'Suppression de type Danger', '2020-06-12 08:08:57', 7),
(124, 'Suppression de type Danger', '2020-06-12 08:11:22', 7),
(125, 'Ajout de type de danger', '2020-06-12 08:11:32', 7),
(126, 'Ajout de type de danger', '2020-06-12 08:11:40', 7),
(127, 'Deconnection', '2020-06-12 15:39:00', 7),
(128, 'Connexion', '2020-06-15 18:29:11', 1),
(129, 'Deconnection', '2020-06-15 18:29:16', 1),
(130, 'Connexion', '2020-06-15 18:29:53', 7),
(131, 'Deconnection', '2020-06-15 18:32:03', 7),
(132, 'Connexion', '2020-06-15 18:39:24', 7),
(133, 'Modification de type de danger', '2020-06-16 08:47:23', 7),
(134, 'Suppression de type Danger', '2020-06-16 08:47:41', 7),
(135, 'Modification categorie de danger', '2020-06-16 12:56:32', 7),
(136, 'Modification categorie de danger', '2020-06-16 12:58:13', 7),
(137, 'Ajout de categorie de danger', '2020-06-16 12:59:06', 7),
(138, 'Suppression de categorie de Danger', '2020-06-16 13:01:41', 7),
(139, 'Suppression de categorie de Danger', '2020-06-16 13:01:46', 7),
(140, 'Suppression de categorie de Danger', '2020-06-16 13:02:06', 7),
(141, 'Suppression de categorie de Danger', '2020-06-16 13:04:55', 7),
(142, 'Suppression de Pays', '2020-06-17 00:54:54', 7),
(143, 'Connexion', '2020-06-17 04:56:29', 7),
(144, 'Deconnection', '2020-06-17 11:21:32', 7),
(145, 'Connexion', '2020-06-17 11:22:40', 7),
(146, 'Modification Ville', '2020-06-17 13:20:43', 7),
(147, 'Modification Ville', '2020-06-17 15:49:21', 7),
(148, 'Modification Quartier', '2020-06-17 16:10:21', 7),
(149, 'Modification Quartier', '2020-06-17 16:10:45', 7),
(150, 'Modification Quartier', '2020-06-17 16:11:17', 7),
(151, 'Ajout Ville', '2020-06-17 16:21:34', 7),
(152, 'Connexion', '2020-06-17 17:32:51', 7),
(153, 'Modification Quartier', '2020-06-18 03:32:52', 7),
(154, 'Modification Quartier', '2020-06-18 03:39:13', 7),
(155, 'Modification Quartier', '2020-06-18 04:09:52', 7),
(156, 'Modification Quartier', '2020-06-18 04:10:36', 7),
(157, 'Ajout Lieu', '2020-06-18 04:32:37', 7),
(158, 'Ajout Lieu', '2020-06-19 05:10:03', 7),
(159, 'Connexion', '2020-06-19 09:37:08', 7),
(160, 'Modification Zone', '2020-06-19 11:28:40', 7),
(161, 'Modification Zone', '2020-06-19 11:32:17', 7),
(162, 'Suppression de zone', '2020-06-19 11:44:11', 7),
(163, 'Modification de Acteur danger', '2020-06-19 13:35:42', 7),
(164, 'Modification de Acteur danger', '2020-06-19 13:37:53', 7),
(165, 'Ajout de type de danger', '2020-06-19 14:15:46', 7),
(166, 'Ajout de auteur de danger', '2020-06-19 14:44:58', 7),
(167, 'Deconnection', '2020-06-19 15:59:08', 7),
(168, 'Connexion', '2020-06-19 17:33:12', 7),
(169, 'Modification de Acteur danger', '2020-06-19 17:33:29', 7),
(170, 'Suppression Auteur  Danger', '2020-06-19 17:35:17', 7),
(171, 'Ajout de type de danger', '2020-06-19 19:06:10', 7),
(172, 'Ajout de type de danger', '2020-06-19 19:06:18', 7),
(173, 'Ajout de type de danger', '2020-06-19 19:06:25', 7),
(174, 'Ajout de type de danger', '2020-06-19 19:13:50', 7),
(175, 'Suppression de type Danger', '2020-06-19 19:19:39', 7),
(176, 'Ajout de type de danger', '2020-06-19 19:19:44', 7),
(177, 'Modification de type de danger', '2020-06-19 19:20:19', 7),
(178, 'Suppression de Danger', '2020-06-20 08:38:01', 7),
(179, 'Modification Danger', '2020-06-20 08:45:48', 7),
(180, 'Ajout Super Utilisateur utilisateur', '2020-06-20 15:41:41', 10011),
(181, 'Ajout Super Utilisateur utilisateur', '2020-06-20 15:44:50', 10011),
(182, 'Ajout Super Utilisateur utilisateur', '2020-06-20 15:51:40', 10011),
(183, 'Connexion', '2020-06-20 16:03:09', 10011),
(184, 'Connexion', '2020-06-20 16:03:54', 10011),
(185, 'Deconnection', '2020-06-20 16:09:33', 10011),
(186, 'Connexion', '2020-06-20 16:09:35', 10011),
(187, 'Connexion', '2020-06-20 16:10:51', 10011),
(188, 'Connexion', '2020-06-20 16:11:56', 10011),
(189, 'Connexion', '2020-06-20 16:12:02', 10011),
(190, 'Connexion', '2020-06-20 16:12:06', 10011),
(191, 'Connexion', '2020-06-20 16:13:16', 10011),
(192, 'Deconnection', '2020-06-20 16:20:19', 10011);

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `idAuteur` int(11) NOT NULL,
  `nomAuteur` varchar(50) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `dernieremodification` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`idAuteur`, `nomAuteur`, `idUtilisateur`, `dernieremodification`) VALUES
(1, 'Homme', 0, '0000-00-00 00:00:00'),
(2, 'Femmes', 7, '0000-00-00 00:00:00'),
(3, 'enfant', 0, '0000-00-00 00:00:00'),
(5, 'fille', 7, '0000-00-00 00:00:00'),
(6, 'fillette', 7, '0000-00-00 00:00:00'),
(7, 'groupe de personne', 0, '0000-00-00 00:00:00'),
(9, 'garçon', 7, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `categoriedanger`
--

CREATE TABLE `categoriedanger` (
  `idCategorieDanger` int(11) NOT NULL,
  `nomCategorieDanger` varchar(50) NOT NULL,
  `nomTypeDanger` varchar(50) NOT NULL,
  `idUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categoriedanger`
--

INSERT INTO `categoriedanger` (`idCategorieDanger`, `nomCategorieDanger`, `nomTypeDanger`, `idUtilisateur`) VALUES
(3, 'meurtre par strangulation', 'Crimes', 0),
(4, 'Braquage', 'Vol', 0);

-- --------------------------------------------------------

--
-- Structure de la table `dangertable`
--

CREATE TABLE `dangertable` (
  `idDanger` int(11) NOT NULL,
  `typeDanger` int(11) NOT NULL,
  `categorieDanger` int(11) NOT NULL,
  `descriptionDanger` text NOT NULL,
  `victimeDanger` int(11) NOT NULL,
  `bourreauDanger` int(11) NOT NULL,
  `sourceDanger` varchar(50) NOT NULL,
  `derniereModification` datetime NOT NULL,
  `dateDanger` date NOT NULL,
  `imageDanger` varchar(60) NOT NULL,
  `pays` int(11) NOT NULL,
  `ville` int(11) NOT NULL,
  `quartier` int(11) NOT NULL,
  `lieu` int(11) NOT NULL,
  `idoperateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `dangertable`
--

INSERT INTO `dangertable` (`idDanger`, `typeDanger`, `categorieDanger`, `descriptionDanger`, `victimeDanger`, `bourreauDanger`, `sourceDanger`, `derniereModification`, `dateDanger`, `imageDanger`, `pays`, `ville`, `quartier`, `lieu`, `idoperateur`) VALUES
(1, 0, 0, 'afdgfdcxsfdqvdxvbcxvbcxvcxc', 0, 0, 'kpakpato.com', '2020-06-11 03:18:19', '2020-06-18', 'Welcome_to_ABOBO.jpg', 0, 0, 0, 0, 1),
(2, 2, 4, 'Sed at sem vitae purus ultrices vestibulum. Vestibulum tincidunt lacus et ligula. Pellentesque vitae elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Duis ornare, erat eget laoreet vulputate, lacus ipsum suscipit turpis, et bibendum nisl orci non lectus. Vestibulum nec risus nec libero fermentum fringilla. Morbi non velit in magna gravida hendrerit. Pellentesque quis lectus. Vestibulum eleifend lobortis leo. Vestibulum non augue. Vivamus dictum tempor dui. Maecenas at ligula id felis congue porttitor. Nulla leo magna, egestas quis, vulputate sit amet, viverra id, velit.', 9, 7, 'https://www.kpakpato.com/', '2020-06-20 08:45:47', '2020-06-03', 'wifi (1).png', 110, 10, 7, 2, 7),
(4, 0, 0, 'Sed at sem vitae purus ultrices vestibulum. Vestibulum tincidunt lacus et ligula. Pellentesque vitae elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Duis ornare, erat eget laoreet vulputate, lacus ipsum suscipit turpis, et bibendum nisl orci non lectus. Vestibulum nec risus nec libero fermentum fringilla. Morbi non velit in magna gravida hendrerit. Pellentesque quis lectus. Vestibulum eleifend lobortis leo. Vestibulum non augue. Vivamus dictum tempor dui. Maecenas at ligula id felis congue porttitor. Nulla leo magna, egestas quis, vulputate sit amet, viverra id, velit.', 0, 0, 'kpakpato.com', '2020-06-12 00:52:50', '2020-06-04', '135f284581cead1b079555aee5187eed.png', 0, 0, 0, 0, 7);

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `idLieu` int(11) NOT NULL,
  `categorieLieu` varchar(50) NOT NULL,
  `nomLieu` varchar(50) NOT NULL,
  `lng` varchar(60) NOT NULL,
  `lat` varchar(60) NOT NULL,
  `descriptionLieu` text NOT NULL,
  `imageLieu` varchar(60) NOT NULL,
  `idQuartier` int(11) NOT NULL,
  `idVille` int(11) NOT NULL,
  `idPays` int(11) NOT NULL,
  `dernieremodif` datetime NOT NULL,
  `idUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`idLieu`, `categorieLieu`, `nomLieu`, `lng`, `lat`, `descriptionLieu`, `imageLieu`, `idQuartier`, `idVille`, `idPays`, `dernieremodif`, `idUtilisateur`) VALUES
(2, 'Boulangerie dbt', 'Top Pain', '5.356761', ' -4.024344', 'la boulangerie Top Paini est au Côte d\'Ivoire, Abidjan, Adjamé. Vous pouvez trouver l\'adresse, le numéro de téléphone', '14563477_679348238894243_9198882309649496587_n.jpg', 7, 10, 110, '2020-06-19 11:32:17', 7),
(3, 'Boulangerie', 'Top Pain', '5.356761', ' -4.024344', 'la boulangerie Top Paini est au Côte d\'Ivoire, Abidjan, Adjamé. Vous pouvez trouver l\'adresse, le numéro de téléphone', '14563477_679348238894243_9198882309649496587_n.jpg', 7, 10, 110, '2020-06-19 11:32:17', 7),
(5, 'Gare routière', 'Gare TSR Sikensi', '5.356761', ' -4.024344', 'Gare TSR Abidjan-Sikensi est au Côte d\'Ivoire, Abidjan, Adjamé. Vous pouvez trouver l\'adresse, le numéro de téléphone', '14563477_679348238894243_9198882309649496587_n.jpg', 7, 10, 110, '2020-06-18 04:32:37', 7);

-- --------------------------------------------------------

--
-- Structure de la table `messagevisiteur`
--

CREATE TABLE `messagevisiteur` (
  `idMessage` int(11) NOT NULL,
  `contenueMessage` text NOT NULL,
  `datedenvoi` datetime NOT NULL,
  `ipVisiteur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `idPays` int(11) NOT NULL,
  `nomPays` varchar(50) NOT NULL,
  `lng` double NOT NULL,
  `lat` double NOT NULL,
  `descriptionPays` text NOT NULL,
  `imagePays` int(11) NOT NULL,
  `dernieremodif` datetime NOT NULL,
  `idUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`idPays`, `nomPays`, `lng`, `lat`, `descriptionPays`, `imagePays`, `dernieremodif`, `idUtilisateur`) VALUES
(2, 'Albanie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(3, 'Antarctique', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(4, 'Algérie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(5, 'Samoa Américaines', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(6, 'Andorre', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(7, 'Côte d\'Ivoire', 0, 53363, 'La Côte d\'Ivoire est un pays d\'Afrique de l\'Ouest doté de stations balnéaires, de forêts tropicales et d\'un patrimoine colonial français. Abidjan, sur la côte Atlantique, est le principal centre urbain du pays. Ses sites modernes regroupent la Pyramide, un édifice en béton faisant penser à une ziggourat. La cathédrale Saint-Paul est une structure inclinée rattachée à une immense croix. Au nord du quartier central des affaires, le parc national du Banco est une réserve de forêt tropicale au sein de laquelle serpentent des chemins de randonnée.', 0, '2020-06-17 00:41:40', 7),
(8, 'Antigua-et-Barbuda', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(9, 'Azerbaïdjan', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(10, 'Argentine', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(11, 'Australie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(12, 'Autriche', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(13, 'Bahamas', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(14, 'Bahreïn', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(15, 'Bangladesh', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(16, 'Arménie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(17, 'Barbade', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(18, 'Belgique', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(19, 'Bermudes', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(20, 'Bhoutan', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(21, 'Bolivie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(22, 'Bosnie-Herzégovine', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(23, 'Botswana', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(24, 'Île Bouvet', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(25, 'Brésil', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(26, 'Belize', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(27, 'Territoire Britannique de l\'Océan Indien', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(28, 'Îles Salomon', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(29, 'Îles Vierges Britanniques', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(30, 'Brunéi Darussalam', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(31, 'Bulgarie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(32, 'Myanmar', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(33, 'Burundi', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(34, 'Bélarus', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(35, 'Cambodge', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(36, 'Cameroun', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(37, 'Canada', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(38, 'Cap-vert', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(39, 'Îles Caïmanes', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(40, 'République Centrafricaine', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(41, 'Sri Lanka', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(42, 'Tchad', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(43, 'Chili', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(44, 'Chine', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(45, 'Taïwan', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(46, 'Île Christmas', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(47, 'Îles Cocos (Keeling)', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(48, 'Colombie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(49, 'Comores', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(50, 'Mayotte', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(51, 'République du Congo', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(52, 'République Démocratique du Congo', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(53, 'Îles Cook', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(54, 'Costa Rica', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(55, 'Croatie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(56, 'Cuba', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(57, 'Chypre', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(58, 'République Tchèque', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(59, 'Bénin', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(60, 'Danemark', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(61, 'Dominique', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(62, 'République Dominicaine', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(63, 'Équateur', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(64, 'El Salvador', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(65, 'Guinée Équatoriale', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(66, 'Éthiopie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(67, 'Érythrée', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(68, 'Estonie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(69, 'Îles Féroé', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(70, 'Îles (malvinas) Falkland', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(71, 'Géorgie du Sud et les Îles Sandwich du Sud', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(72, 'Fidji', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(73, 'Finlande', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(74, 'Îles Åland', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(75, 'France', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(76, 'Guyane Française', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(77, 'Polynésie Française', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(78, 'Terres Australes Françaises', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(79, 'Djibouti', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(80, 'Gabon', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(81, 'Géorgie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(82, 'Gambie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(83, 'Territoire Palestinien Occupé', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(84, 'Allemagne', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(85, 'Ghana', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(86, 'Gibraltar', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(87, 'Kiribati', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(88, 'Grèce', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(89, 'Groenland', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(90, 'Grenade', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(91, 'Guadeloupe', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(92, 'Guam', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(93, 'Guatemala', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(94, 'Guinée', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(95, 'Guyana', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(96, 'Haïti', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(97, 'Îles Heard et Mcdonald', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(98, 'Saint-Siège (état de la Cité du Vatican)', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(99, 'Honduras', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(100, 'Hong-Kong', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(101, 'Hongrie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(102, 'Islande', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(103, 'Inde', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(104, 'Indonésie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(105, 'République Islamique d\'Iran', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(106, 'Iraq', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(107, 'Irlande', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(108, 'Israël', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(109, 'Italie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(110, 'Côte d\'Ivoire', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(111, 'Jamaïque', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(112, 'Japon', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(113, 'Kazakhstan', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(114, 'Jordanie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(115, 'Kenya', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(116, 'République Populaire Démocratique de Corée', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(117, 'République de Corée', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(118, 'Koweït', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(119, 'Kirghizistan', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(120, 'République Démocratique Populaire Lao', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(121, 'Liban', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(122, 'Lesotho', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(123, 'Lettonie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(124, 'Libéria', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(125, 'Jamahiriya Arabe Libyenne', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(126, 'Liechtenstein', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(127, 'Lituanie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(128, 'Luxembourg', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(129, 'Macao', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(130, 'Madagascar', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(131, 'Malawi', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(132, 'Malaisie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(133, 'Maldives', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(134, 'Mali', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(135, 'Malte', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(136, 'Martinique', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(137, 'Mauritanie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(138, 'Maurice', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(139, 'Mexique', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(140, 'Monaco', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(141, 'Mongolie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(142, 'République de Moldova', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(143, 'Montserrat', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(144, 'Maroc', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(145, 'Mozambique', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(146, 'Oman', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(147, 'Namibie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(148, 'Nauru', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(149, 'Népal', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(150, 'paysMultilangue-Bas', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(151, 'Antilles Néerlandaises', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(152, 'Aruba', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(153, 'Nouvelle-Calédonie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(154, 'Vanuatu', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(155, 'Nouvelle-Zélande', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(156, 'Nicaragua', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(157, 'Niger', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(158, 'Nigéria', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(159, 'Niué', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(160, 'Île Norfolk', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(161, 'Norvège', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(162, 'Îles Mariannes du Nord', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(163, 'Îles Mineures Éloignées des États-Unis', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(164, 'États Fédérés de Micronésie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(165, 'Îles Marshall', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(166, 'Palaos', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(167, 'Pakistan', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(168, 'Panama', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(169, 'Papouasie-Nouvelle-Guinée', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(170, 'Paraguay', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(171, 'Pérou', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(172, 'Philippines', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(173, 'Pitcairn', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(174, 'Pologne', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(175, 'Portugal', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(176, 'Guinée-Bissau', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(177, 'Timor-Leste', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(178, 'Porto Rico', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(179, 'Qatar', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(180, 'Réunion', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(181, 'Roumanie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(182, 'Fédération de Russie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(183, 'Rwanda', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(184, 'Sainte-Hélène', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(185, 'Saint-Kitts-et-Nevis', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(186, 'Anguilla', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(187, 'Sainte-Lucie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(188, 'Saint-Pierre-et-Miquelon', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(189, 'Saint-Vincent-et-les Grenadines', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(190, 'Saint-Marin', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(191, 'Sao Tomé-et-Principe', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(192, 'Arabie Saoudite', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(193, 'Sénégal', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(194, 'Seychelles', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(195, 'Sierra Leone', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(196, 'Singapour', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(197, 'Slovaquie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(198, 'Viet Nam', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(199, 'Slovénie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(200, 'Somalie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(201, 'Afrique du Sud', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(202, 'Zimbabwe', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(203, 'Espagne', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(204, 'Sahara Occidental', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(205, 'Soudan', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(206, 'Suriname', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(207, 'Svalbard etÎle Jan Mayen', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(208, 'Swaziland', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(209, 'Suède', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(210, 'Suisse', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(211, 'République Arabe Syrienne', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(212, 'Tadjikistan', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(213, 'Thaïlande', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(214, 'Togo', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(215, 'Tokelau', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(216, 'Tonga', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(217, 'Trinité-et-Tobago', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(218, 'Émirats Arabes Unis', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(219, 'Tunisie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(220, 'Turquie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(221, 'Turkménistan', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(222, 'Îles Turks et Caïques', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(223, 'Tuvalu', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(224, 'Ouganda', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(225, 'Ukraine', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(226, 'L\'ex-République Yougoslave de Macédoine', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(227, 'Égypte', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(228, 'Royaume-Uni', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(229, 'Île de Man', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(230, 'République-Unie de Tanzanie', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(231, 'États-Unis', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(232, 'Îles Vierges des États-Unis', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(233, 'Burkina Faso', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(234, 'Uruguay', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(235, 'Ouzbékistan', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(236, 'Venezuela', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(237, 'Wallis et Futuna', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(238, 'Samoa', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(239, 'Yémen', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(240, 'Serbie-et-Monténégro', 0, 0, '', 0, '0000-00-00 00:00:00', 0),
(241, 'Zambie', 0, 0, '', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

CREATE TABLE `quartier` (
  `idQuartier` int(11) NOT NULL,
  `nomQuartier` varchar(50) NOT NULL,
  `lng` double NOT NULL,
  `lat` double NOT NULL,
  `descriptionQuatier` text NOT NULL,
  `imageQuartier` varchar(50) NOT NULL,
  `dernieremodif` datetime NOT NULL,
  `idVille` int(11) NOT NULL,
  `idPays` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `quartier`
--

INSERT INTO `quartier` (`idQuartier`, `nomQuartier`, `lng`, `lat`, `descriptionQuatier`, `imageQuartier`, `dernieremodif`, `idVille`, `idPays`, `idUtilisateur`) VALUES
(3, 'SAgbé celeste', -4.03383, 5.415698, 'Abobo est une commune située dans le secteur nord du district d\'Abidjan. Elle est limitée par la ville d\'Anyama au Nord, par Williamsville, Adjamé et le quartier Deux-Plateaux de Cocody au Sud, à l\'est par Angré-Cocody et à l\'ouest par la forêt du Banco [3]. Située à une altitude de 125 mètres, la commune constitue la zone la plus élevée de l\'agglomération d\'Abidjan.', '14563477_679348238894243_9198882309649496587_n.jpg', '2020-06-17 16:11:17', 10, 110, 7),
(7, 'Mirador', -4.03383, 5.415698, 'Abobo est une commune située dans le secteur nord du district d\'Abidjan. Elle est limitée par la ville d\'Anyama au Nord, par Williamsville, Adjamé et le quartier Deux-Plateaux de Cocody au Sud, à l\'est par Angré-Cocody et à l\'ouest par la forêt du Banco [3]. Située à une altitude de 125 mètres, la commune constitue la zone la plus élevée de l\'agglomération d\'Abidjan.', '14563477_679348238894243_9198882309649496587_n.jpg', '2020-06-18 04:10:36', 10, 110, 7),
(8, 'Wrangler', -4.03383, 5.415698, 'Abobo est une commune située dans le secteur nord du district d\'Abidjan. Elle est limitée par la ville d\'Anyama au Nord, par Williamsville, Adjamé et le quartier Deux-Plateaux de Cocody au Sud, à l\'est par Angré-Cocody et à l\'ouest par la forêt du Banco [3]. Située à une altitude de 125 mètres, la commune constitue la zone la plus élevée de l\'agglomération d\'Abidjan.', '14563477_679348238894243_9198882309649496587_n.jpg', '2020-06-17 16:11:17', 11, 110, 7),
(9, 'Wahana', -4.03383, 5.415698, 'Abobo est une commune située dans le secteur nord du district d\'Abidjan. Elle est limitée par la ville d\'Anyama au Nord, par Williamsville, Adjamé et le quartier Deux-Plateaux de Cocody au Sud, à l\'est par Angré-Cocody et à l\'ouest par la forêt du Banco [3]. Située à une altitude de 125 mètres, la commune constitue la zone la plus élevée de l\'agglomération d\'Abidjan.', '14563477_679348238894243_9198882309649496587_n.jpg', '2020-06-17 16:11:17', 11, 110, 7);

-- --------------------------------------------------------

--
-- Structure de la table `typedanger`
--

CREATE TABLE `typedanger` (
  `idTypeDanger` int(11) NOT NULL,
  `typeDanger` varchar(50) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `dernieremodification` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `typedanger`
--

INSERT INTO `typedanger` (`idTypeDanger`, `typeDanger`, `idUtilisateur`, `dernieremodification`) VALUES
(1, 'Catastrophe Naturelle', 0, '0000-00-00 00:00:00'),
(2, 'Vols', 0, '0000-00-00 00:00:00'),
(3, 'Violence', 0, '0000-00-00 00:00:00'),
(5, 'Meutre', 7, '2020-06-19 19:19:44');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUtilisateur` int(11) NOT NULL,
  `nomUtilisateur` varchar(50) NOT NULL,
  `prenomUtilisateur` varchar(50) NOT NULL,
  `sexeUtilisateur` varchar(10) NOT NULL,
  `emailuser` varchar(50) NOT NULL,
  `motdepasseuser` varchar(60) NOT NULL,
  `dateinscriptionuser` datetime NOT NULL,
  `roleUtilisateur` varchar(30) NOT NULL,
  `aap` varchar(10) NOT NULL,
  `aav` varchar(10) NOT NULL,
  `aaq` varchar(10) NOT NULL,
  `aatd` varchar(10) NOT NULL,
  `aacd` varchar(10) NOT NULL,
  `avatar` varchar(60) NOT NULL,
  `idParent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `idVille` int(11) NOT NULL,
  `nomVille` varchar(50) NOT NULL,
  `descriptionVille` varchar(50) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `imageVille` varchar(60) NOT NULL,
  `dernieremodif` datetime NOT NULL,
  `idPays` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`idVille`, `nomVille`, `descriptionVille`, `lat`, `lng`, `imageVille`, `dernieremodif`, `idPays`, `idUtilisateur`) VALUES
(10, 'adjame', 'Adjamé est un quartier d\'Abidjan nord, en Côte d\'I', 5.36507, -4.02357, 'consu.png', '2020-06-17 13:20:43', 110, 7),
(11, 'attecoube', '', 5.33625, -4.04145, '', '0000-00-00 00:00:00', 110, 7),
(12, 'cocody', '', 5.36022, -3.96744, '', '0000-00-00 00:00:00', 110, 0),
(13, 'koumassi', '', 5.30298, -3.94194, '', '0000-00-00 00:00:00', 110, 0),
(14, 'marcory', '', 5.30271, -3.98274, '', '0000-00-00 00:00:00', 110, 0),
(15, 'plateau', '', 5.32332, -4.02357, '', '0000-00-00 00:00:00', 110, 0),
(16, 'portbouet', '', 5.27725, -3.8859, '', '0000-00-00 00:00:00', 110, 0),
(17, 'treichville', '', 5.29209, -4.01336, '', '0000-00-00 00:00:00', 110, 0),
(18, 'yopougon', '', 5.31767, -4.08999, '', '0000-00-00 00:00:00', 110, 0),
(19, 'abengourou', '', 6.7157, -3.48013, '', '0000-00-00 00:00:00', 110, 0),
(20, 'aboisso', '', 5.47451, -3.20308, '', '0000-00-00 00:00:00', 110, 0),
(21, 'adzope', '', 6.10715, -3.85535, '', '0000-00-00 00:00:00', 110, 0),
(22, 'agboville', '', 5.9355, -4.22308, '', '0000-00-00 00:00:00', 110, 0),
(23, 'agnibilekrou', '', 7.13028, -3.20308, '', '0000-00-00 00:00:00', 110, 0),
(24, 'anyama', '', 5.48771, -4.05166, '', '0000-00-00 00:00:00', 110, 0),
(26, 'beoumi', '', 7.67309, -5.57223, '', '0000-00-00 00:00:00', 110, 0),
(27, 'bingerville', '', 5.35036, -3.87571, '', '0000-00-00 00:00:00', 110, 0),
(28, 'bocanda', '', 7.06591, -4.49543, '', '0000-00-00 00:00:00', 110, 0),
(29, 'bondoukou', '', 8.04788, -2.80786, '', '0000-00-00 00:00:00', 110, 0),
(30, 'bongouanou', '', 6.6487, -4.20515, '', '0000-00-00 00:00:00', 110, 0),
(31, 'bonoua', '', 5.27118, -3.59393, '', '0000-00-00 00:00:00', 110, 0),
(33, 'boundiali', '', 9.51836, -6.48232, '', '0000-00-00 00:00:00', 110, 0),
(34, 'dabou', '', 5.32621, -4.36679, '', '0000-00-00 00:00:00', 110, 0),
(35, 'daloa', '', 6.88833, -6.43969, '', '0000-00-00 00:00:00', 110, 0),
(36, 'bouaflé', '', 6.98274, -5.74051, '', '0000-00-00 00:00:00', 110, 0),
(37, 'danané', '', 7.2676, -8.14478, '', '0000-00-00 00:00:00', 110, 0),
(38, 'daoukro', '', 7.0654, -3.95724, '', '0000-00-00 00:00:00', 110, 0),
(39, 'dimbokro', '', 6.65747, -4.71223, '', '0000-00-00 00:00:00', 110, 0),
(40, 'divo', '', 5.84154, -5.36255, '', '0000-00-00 00:00:00', 110, 0),
(41, 'douekoue', '', 6.74738, -7.36246, '', '0000-00-00 00:00:00', 110, 0),
(42, 'ferkessedougou', '', 9.5842, -5.19536, '', '0000-00-00 00:00:00', 110, 0),
(43, 'gagnoa', '', 6.15144, -5.95154, '', '0000-00-00 00:00:00', 110, 0),
(44, 'gohitafla', '', 7.48828, -5.88024, '', '0000-00-00 00:00:00', 110, 0),
(45, 'grandlahou', '', 5.13652, -5.02605, '', '0000-00-00 00:00:00', 110, 0),
(46, 'grandbassam', '', 5.22594, -3.75367, '', '0000-00-00 00:00:00', 110, 0),
(47, 'Grand-Bereby', '', 4.65137, -6.92205, '', '0000-00-00 00:00:00', 110, 0),
(48, 'guiglo', '', 6.54906, -7.49765, '', '0000-00-00 00:00:00', 110, 0),
(49, 'issia', '', 6.48761, -6.58368, '', '0000-00-00 00:00:00', 110, 0),
(50, 'jacqueville', '', 5.20598, -4.42335, '', '0000-00-00 00:00:00', 110, 0),
(52, 'katiola', '', 8.14023, -5.09631, '', '0000-00-00 00:00:00', 110, 0),
(53, 'korhogo', '', 9.46693, -5.61426, '', '0000-00-00 00:00:00', 110, 0),
(55, 'mbahiakro', '', 7.4548, -4.3411, '', '0000-00-00 00:00:00', 110, 0),
(58, 'mankono', '', 8.05991, -6.18983, '', '0000-00-00 00:00:00', 110, 0),
(59, 'odienne', '', 9.51888, -7.55722, '', '0000-00-00 00:00:00', 110, 0),
(60, 'oumé', '', 6.37413, -5.40966, '', '0000-00-00 00:00:00', 110, 0),
(61, 'sassandra', '', 4.95128, -6.09175, '', '0000-00-00 00:00:00', 110, 0),
(62, 'seguela', '', 7.96018, -6.6745, '', '0000-00-00 00:00:00', 110, 0),
(63, 'sinfra', '', 6.62334, -5.91456, '', '0000-00-00 00:00:00', 110, 0),
(64, 'soubré', '', 5.78662, -6.58902, '', '0000-00-00 00:00:00', 110, 0),
(65, 'tengrela', '', 10.482, -6.41306, '', '0000-00-00 00:00:00', 110, 0),
(66, 'tiassale', '', 5.90426, -4.82614, '', '0000-00-00 00:00:00', 110, 0),
(67, 'Toulepleu', '', 6.57956, -8.4102, '', '0000-00-00 00:00:00', 110, 0),
(68, 'toumodi', '', 6.55603, -5.01565, '', '0000-00-00 00:00:00', 110, 0),
(69, 'vavoua', '', 7.37506, -6.47699, '', '0000-00-00 00:00:00', 110, 0),
(70, 'yamoussoukro', '', 6.82762, -5.28934, '', '0000-00-00 00:00:00', 110, 0),
(71, 'zuenoula', '', 7.42404, -6.05204, '', '0000-00-00 00:00:00', 110, 0),
(72, 'Bouna', '', 9.27166, -2.99256, '', '0000-00-00 00:00:00', 110, 0),
(73, 'lakota', '', 5.85947, -5.67735, '', '0000-00-00 00:00:00', 110, 0),
(74, 'kani', '', 8.47784, -6.60504, '', '0000-00-00 00:00:00', 110, 0),
(75, 'man', '', 7.40643, -7.55722, '', '0000-00-00 00:00:00', 110, 0),
(76, 'dabakala', '', 8.36626, -4.43364, '', '0000-00-00 00:00:00', 110, 0),
(77, 'kong', '', 9.15102, -4.61018, '', '0000-00-00 00:00:00', 110, 0),
(78, 'Touba', '', 8.28417, -7.68194, '', '0000-00-00 00:00:00', 110, 0),
(79, 'bouake', '', 7.69047, -5.03905, '', '0000-00-00 00:00:00', 110, 0),
(80, 'abobo', 'Abobo est un ancien village de la sous-préfecture ', 5.433977, -4.037891, 'Welcome_to_ABOBO.jpg', '2020-06-17 16:21:34', 110, 7);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`idActivite`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`idAuteur`);

--
-- Index pour la table `categoriedanger`
--
ALTER TABLE `categoriedanger`
  ADD PRIMARY KEY (`idCategorieDanger`),
  ADD UNIQUE KEY `nomCategorieDanger` (`nomCategorieDanger`);

--
-- Index pour la table `dangertable`
--
ALTER TABLE `dangertable`
  ADD PRIMARY KEY (`idDanger`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`idLieu`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`idPays`);

--
-- Index pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD PRIMARY KEY (`idQuartier`);

--
-- Index pour la table `typedanger`
--
ALTER TABLE `typedanger`
  ADD PRIMARY KEY (`idTypeDanger`),
  ADD UNIQUE KEY `typeDanger` (`typeDanger`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUtilisateur`),
  ADD UNIQUE KEY `emailuser` (`emailuser`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`idVille`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `idActivite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `idAuteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `categoriedanger`
--
ALTER TABLE `categoriedanger`
  MODIFY `idCategorieDanger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `dangertable`
--
ALTER TABLE `dangertable`
  MODIFY `idDanger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `idLieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `idPays` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT pour la table `quartier`
--
ALTER TABLE `quartier`
  MODIFY `idQuartier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `typedanger`
--
ALTER TABLE `typedanger`
  MODIFY `idTypeDanger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `idVille` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
