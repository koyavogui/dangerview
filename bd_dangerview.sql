-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 11 juin 2020 à 08:47
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
(76, 'Deconnection', '2020-06-11 08:44:52', 6);

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `idauteur` int(11) NOT NULL,
  `nomAuteur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`idauteur`, `nomAuteur`) VALUES
(1, 'Homme'),
(2, 'Femme'),
(3, 'enfant'),
(4, 'garçon'),
(5, 'fille'),
(6, 'fillette'),
(7, 'groupe de personne');

-- --------------------------------------------------------

--
-- Structure de la table `categoriedanger`
--

CREATE TABLE `categoriedanger` (
  `idCategorieDanger` int(11) NOT NULL,
  `nomCategorieDanger` varchar(50) NOT NULL,
  `nomTypeDanger` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categoriedanger`
--

INSERT INTO `categoriedanger` (`idCategorieDanger`, `nomCategorieDanger`, `nomTypeDanger`) VALUES
(3, 'vol à l\'arracher', 'Vol'),
(4, 'Braquage', 'Vol');

-- --------------------------------------------------------

--
-- Structure de la table `dangertable`
--

CREATE TABLE `dangertable` (
  `idDanger` int(11) NOT NULL,
  `typeDanger` varchar(10) NOT NULL,
  `categorieDanger` varchar(10) NOT NULL,
  `descriptionDanger` text NOT NULL,
  `victimeDanger` varchar(50) NOT NULL,
  `bourreauDanger` varchar(50) NOT NULL,
  `sourceDanger` varchar(50) NOT NULL,
  `derniereModification` datetime NOT NULL,
  `dateDanger` date NOT NULL,
  `imageDanger` varchar(60) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `quartier` varchar(50) NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `idoperateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `dangertable`
--

INSERT INTO `dangertable` (`idDanger`, `typeDanger`, `categorieDanger`, `descriptionDanger`, `victimeDanger`, `bourreauDanger`, `sourceDanger`, `derniereModification`, `dateDanger`, `imageDanger`, `pays`, `ville`, `quartier`, `lieu`, `idoperateur`) VALUES
(1, 'vol', 'vol à l\'ar', 'afdgfdcxsfdqvdxvbcxvbcxvcxc', 'Femme', 'Femme', 'kpakpato.com', '2020-06-11 03:18:19', '2020-06-18', 'Welcome_to_ABOBO.jpg', 'Afrique du Sud', 'abengourou', 'Abobo', 'Derrière rail sagbe', 1);

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `idLieu` int(11) NOT NULL,
  `categorieLieu` varchar(50) NOT NULL,
  `NomLieu` varchar(50) NOT NULL,
  `longitude` varchar(60) NOT NULL,
  `latitude` varchar(60) NOT NULL,
  `descriptionLieu` text NOT NULL,
  `imageLieu` varchar(60) NOT NULL,
  `quartier` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `dernieremodif` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `descriptionPays` text NOT NULL,
  `imagePays` int(11) NOT NULL,
  `dernieremodif` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`idPays`, `nomPays`, `descriptionPays`, `imagePays`, `dernieremodif`) VALUES
(1, 'Afghanistan', '', 0, '0000-00-00 00:00:00'),
(2, 'Albanie', '', 0, '0000-00-00 00:00:00'),
(3, 'Antarctique', '', 0, '0000-00-00 00:00:00'),
(4, 'Algérie', '', 0, '0000-00-00 00:00:00'),
(5, 'Samoa Américaines', '', 0, '0000-00-00 00:00:00'),
(6, 'Andorre', '', 0, '0000-00-00 00:00:00'),
(7, 'Angola', '', 0, '0000-00-00 00:00:00'),
(8, 'Antigua-et-Barbuda', '', 0, '0000-00-00 00:00:00'),
(9, 'Azerbaïdjan', '', 0, '0000-00-00 00:00:00'),
(10, 'Argentine', '', 0, '0000-00-00 00:00:00'),
(11, 'Australie', '', 0, '0000-00-00 00:00:00'),
(12, 'Autriche', '', 0, '0000-00-00 00:00:00'),
(13, 'Bahamas', '', 0, '0000-00-00 00:00:00'),
(14, 'Bahreïn', '', 0, '0000-00-00 00:00:00'),
(15, 'Bangladesh', '', 0, '0000-00-00 00:00:00'),
(16, 'Arménie', '', 0, '0000-00-00 00:00:00'),
(17, 'Barbade', '', 0, '0000-00-00 00:00:00'),
(18, 'Belgique', '', 0, '0000-00-00 00:00:00'),
(19, 'Bermudes', '', 0, '0000-00-00 00:00:00'),
(20, 'Bhoutan', '', 0, '0000-00-00 00:00:00'),
(21, 'Bolivie', '', 0, '0000-00-00 00:00:00'),
(22, 'Bosnie-Herzégovine', '', 0, '0000-00-00 00:00:00'),
(23, 'Botswana', '', 0, '0000-00-00 00:00:00'),
(24, 'Île Bouvet', '', 0, '0000-00-00 00:00:00'),
(25, 'Brésil', '', 0, '0000-00-00 00:00:00'),
(26, 'Belize', '', 0, '0000-00-00 00:00:00'),
(27, 'Territoire Britannique de l\'Océan Indien', '', 0, '0000-00-00 00:00:00'),
(28, 'Îles Salomon', '', 0, '0000-00-00 00:00:00'),
(29, 'Îles Vierges Britanniques', '', 0, '0000-00-00 00:00:00'),
(30, 'Brunéi Darussalam', '', 0, '0000-00-00 00:00:00'),
(31, 'Bulgarie', '', 0, '0000-00-00 00:00:00'),
(32, 'Myanmar', '', 0, '0000-00-00 00:00:00'),
(33, 'Burundi', '', 0, '0000-00-00 00:00:00'),
(34, 'Bélarus', '', 0, '0000-00-00 00:00:00'),
(35, 'Cambodge', '', 0, '0000-00-00 00:00:00'),
(36, 'Cameroun', '', 0, '0000-00-00 00:00:00'),
(37, 'Canada', '', 0, '0000-00-00 00:00:00'),
(38, 'Cap-vert', '', 0, '0000-00-00 00:00:00'),
(39, 'Îles Caïmanes', '', 0, '0000-00-00 00:00:00'),
(40, 'République Centrafricaine', '', 0, '0000-00-00 00:00:00'),
(41, 'Sri Lanka', '', 0, '0000-00-00 00:00:00'),
(42, 'Tchad', '', 0, '0000-00-00 00:00:00'),
(43, 'Chili', '', 0, '0000-00-00 00:00:00'),
(44, 'Chine', '', 0, '0000-00-00 00:00:00'),
(45, 'Taïwan', '', 0, '0000-00-00 00:00:00'),
(46, 'Île Christmas', '', 0, '0000-00-00 00:00:00'),
(47, 'Îles Cocos (Keeling)', '', 0, '0000-00-00 00:00:00'),
(48, 'Colombie', '', 0, '0000-00-00 00:00:00'),
(49, 'Comores', '', 0, '0000-00-00 00:00:00'),
(50, 'Mayotte', '', 0, '0000-00-00 00:00:00'),
(51, 'République du Congo', '', 0, '0000-00-00 00:00:00'),
(52, 'République Démocratique du Congo', '', 0, '0000-00-00 00:00:00'),
(53, 'Îles Cook', '', 0, '0000-00-00 00:00:00'),
(54, 'Costa Rica', '', 0, '0000-00-00 00:00:00'),
(55, 'Croatie', '', 0, '0000-00-00 00:00:00'),
(56, 'Cuba', '', 0, '0000-00-00 00:00:00'),
(57, 'Chypre', '', 0, '0000-00-00 00:00:00'),
(58, 'République Tchèque', '', 0, '0000-00-00 00:00:00'),
(59, 'Bénin', '', 0, '0000-00-00 00:00:00'),
(60, 'Danemark', '', 0, '0000-00-00 00:00:00'),
(61, 'Dominique', '', 0, '0000-00-00 00:00:00'),
(62, 'République Dominicaine', '', 0, '0000-00-00 00:00:00'),
(63, 'Équateur', '', 0, '0000-00-00 00:00:00'),
(64, 'El Salvador', '', 0, '0000-00-00 00:00:00'),
(65, 'Guinée Équatoriale', '', 0, '0000-00-00 00:00:00'),
(66, 'Éthiopie', '', 0, '0000-00-00 00:00:00'),
(67, 'Érythrée', '', 0, '0000-00-00 00:00:00'),
(68, 'Estonie', '', 0, '0000-00-00 00:00:00'),
(69, 'Îles Féroé', '', 0, '0000-00-00 00:00:00'),
(70, 'Îles (malvinas) Falkland', '', 0, '0000-00-00 00:00:00'),
(71, 'Géorgie du Sud et les Îles Sandwich du Sud', '', 0, '0000-00-00 00:00:00'),
(72, 'Fidji', '', 0, '0000-00-00 00:00:00'),
(73, 'Finlande', '', 0, '0000-00-00 00:00:00'),
(74, 'Îles Åland', '', 0, '0000-00-00 00:00:00'),
(75, 'France', '', 0, '0000-00-00 00:00:00'),
(76, 'Guyane Française', '', 0, '0000-00-00 00:00:00'),
(77, 'Polynésie Française', '', 0, '0000-00-00 00:00:00'),
(78, 'Terres Australes Françaises', '', 0, '0000-00-00 00:00:00'),
(79, 'Djibouti', '', 0, '0000-00-00 00:00:00'),
(80, 'Gabon', '', 0, '0000-00-00 00:00:00'),
(81, 'Géorgie', '', 0, '0000-00-00 00:00:00'),
(82, 'Gambie', '', 0, '0000-00-00 00:00:00'),
(83, 'Territoire Palestinien Occupé', '', 0, '0000-00-00 00:00:00'),
(84, 'Allemagne', '', 0, '0000-00-00 00:00:00'),
(85, 'Ghana', '', 0, '0000-00-00 00:00:00'),
(86, 'Gibraltar', '', 0, '0000-00-00 00:00:00'),
(87, 'Kiribati', '', 0, '0000-00-00 00:00:00'),
(88, 'Grèce', '', 0, '0000-00-00 00:00:00'),
(89, 'Groenland', '', 0, '0000-00-00 00:00:00'),
(90, 'Grenade', '', 0, '0000-00-00 00:00:00'),
(91, 'Guadeloupe', '', 0, '0000-00-00 00:00:00'),
(92, 'Guam', '', 0, '0000-00-00 00:00:00'),
(93, 'Guatemala', '', 0, '0000-00-00 00:00:00'),
(94, 'Guinée', '', 0, '0000-00-00 00:00:00'),
(95, 'Guyana', '', 0, '0000-00-00 00:00:00'),
(96, 'Haïti', '', 0, '0000-00-00 00:00:00'),
(97, 'Îles Heard et Mcdonald', '', 0, '0000-00-00 00:00:00'),
(98, 'Saint-Siège (état de la Cité du Vatican)', '', 0, '0000-00-00 00:00:00'),
(99, 'Honduras', '', 0, '0000-00-00 00:00:00'),
(100, 'Hong-Kong', '', 0, '0000-00-00 00:00:00'),
(101, 'Hongrie', '', 0, '0000-00-00 00:00:00'),
(102, 'Islande', '', 0, '0000-00-00 00:00:00'),
(103, 'Inde', '', 0, '0000-00-00 00:00:00'),
(104, 'Indonésie', '', 0, '0000-00-00 00:00:00'),
(105, 'République Islamique d\'Iran', '', 0, '0000-00-00 00:00:00'),
(106, 'Iraq', '', 0, '0000-00-00 00:00:00'),
(107, 'Irlande', '', 0, '0000-00-00 00:00:00'),
(108, 'Israël', '', 0, '0000-00-00 00:00:00'),
(109, 'Italie', '', 0, '0000-00-00 00:00:00'),
(110, 'Côte d\'Ivoire', '', 0, '0000-00-00 00:00:00'),
(111, 'Jamaïque', '', 0, '0000-00-00 00:00:00'),
(112, 'Japon', '', 0, '0000-00-00 00:00:00'),
(113, 'Kazakhstan', '', 0, '0000-00-00 00:00:00'),
(114, 'Jordanie', '', 0, '0000-00-00 00:00:00'),
(115, 'Kenya', '', 0, '0000-00-00 00:00:00'),
(116, 'République Populaire Démocratique de Corée', '', 0, '0000-00-00 00:00:00'),
(117, 'République de Corée', '', 0, '0000-00-00 00:00:00'),
(118, 'Koweït', '', 0, '0000-00-00 00:00:00'),
(119, 'Kirghizistan', '', 0, '0000-00-00 00:00:00'),
(120, 'République Démocratique Populaire Lao', '', 0, '0000-00-00 00:00:00'),
(121, 'Liban', '', 0, '0000-00-00 00:00:00'),
(122, 'Lesotho', '', 0, '0000-00-00 00:00:00'),
(123, 'Lettonie', '', 0, '0000-00-00 00:00:00'),
(124, 'Libéria', '', 0, '0000-00-00 00:00:00'),
(125, 'Jamahiriya Arabe Libyenne', '', 0, '0000-00-00 00:00:00'),
(126, 'Liechtenstein', '', 0, '0000-00-00 00:00:00'),
(127, 'Lituanie', '', 0, '0000-00-00 00:00:00'),
(128, 'Luxembourg', '', 0, '0000-00-00 00:00:00'),
(129, 'Macao', '', 0, '0000-00-00 00:00:00'),
(130, 'Madagascar', '', 0, '0000-00-00 00:00:00'),
(131, 'Malawi', '', 0, '0000-00-00 00:00:00'),
(132, 'Malaisie', '', 0, '0000-00-00 00:00:00'),
(133, 'Maldives', '', 0, '0000-00-00 00:00:00'),
(134, 'Mali', '', 0, '0000-00-00 00:00:00'),
(135, 'Malte', '', 0, '0000-00-00 00:00:00'),
(136, 'Martinique', '', 0, '0000-00-00 00:00:00'),
(137, 'Mauritanie', '', 0, '0000-00-00 00:00:00'),
(138, 'Maurice', '', 0, '0000-00-00 00:00:00'),
(139, 'Mexique', '', 0, '0000-00-00 00:00:00'),
(140, 'Monaco', '', 0, '0000-00-00 00:00:00'),
(141, 'Mongolie', '', 0, '0000-00-00 00:00:00'),
(142, 'République de Moldova', '', 0, '0000-00-00 00:00:00'),
(143, 'Montserrat', '', 0, '0000-00-00 00:00:00'),
(144, 'Maroc', '', 0, '0000-00-00 00:00:00'),
(145, 'Mozambique', '', 0, '0000-00-00 00:00:00'),
(146, 'Oman', '', 0, '0000-00-00 00:00:00'),
(147, 'Namibie', '', 0, '0000-00-00 00:00:00'),
(148, 'Nauru', '', 0, '0000-00-00 00:00:00'),
(149, 'Népal', '', 0, '0000-00-00 00:00:00'),
(150, 'paysMultilangue-Bas', '', 0, '0000-00-00 00:00:00'),
(151, 'Antilles Néerlandaises', '', 0, '0000-00-00 00:00:00'),
(152, 'Aruba', '', 0, '0000-00-00 00:00:00'),
(153, 'Nouvelle-Calédonie', '', 0, '0000-00-00 00:00:00'),
(154, 'Vanuatu', '', 0, '0000-00-00 00:00:00'),
(155, 'Nouvelle-Zélande', '', 0, '0000-00-00 00:00:00'),
(156, 'Nicaragua', '', 0, '0000-00-00 00:00:00'),
(157, 'Niger', '', 0, '0000-00-00 00:00:00'),
(158, 'Nigéria', '', 0, '0000-00-00 00:00:00'),
(159, 'Niué', '', 0, '0000-00-00 00:00:00'),
(160, 'Île Norfolk', '', 0, '0000-00-00 00:00:00'),
(161, 'Norvège', '', 0, '0000-00-00 00:00:00'),
(162, 'Îles Mariannes du Nord', '', 0, '0000-00-00 00:00:00'),
(163, 'Îles Mineures Éloignées des États-Unis', '', 0, '0000-00-00 00:00:00'),
(164, 'États Fédérés de Micronésie', '', 0, '0000-00-00 00:00:00'),
(165, 'Îles Marshall', '', 0, '0000-00-00 00:00:00'),
(166, 'Palaos', '', 0, '0000-00-00 00:00:00'),
(167, 'Pakistan', '', 0, '0000-00-00 00:00:00'),
(168, 'Panama', '', 0, '0000-00-00 00:00:00'),
(169, 'Papouasie-Nouvelle-Guinée', '', 0, '0000-00-00 00:00:00'),
(170, 'Paraguay', '', 0, '0000-00-00 00:00:00'),
(171, 'Pérou', '', 0, '0000-00-00 00:00:00'),
(172, 'Philippines', '', 0, '0000-00-00 00:00:00'),
(173, 'Pitcairn', '', 0, '0000-00-00 00:00:00'),
(174, 'Pologne', '', 0, '0000-00-00 00:00:00'),
(175, 'Portugal', '', 0, '0000-00-00 00:00:00'),
(176, 'Guinée-Bissau', '', 0, '0000-00-00 00:00:00'),
(177, 'Timor-Leste', '', 0, '0000-00-00 00:00:00'),
(178, 'Porto Rico', '', 0, '0000-00-00 00:00:00'),
(179, 'Qatar', '', 0, '0000-00-00 00:00:00'),
(180, 'Réunion', '', 0, '0000-00-00 00:00:00'),
(181, 'Roumanie', '', 0, '0000-00-00 00:00:00'),
(182, 'Fédération de Russie', '', 0, '0000-00-00 00:00:00'),
(183, 'Rwanda', '', 0, '0000-00-00 00:00:00'),
(184, 'Sainte-Hélène', '', 0, '0000-00-00 00:00:00'),
(185, 'Saint-Kitts-et-Nevis', '', 0, '0000-00-00 00:00:00'),
(186, 'Anguilla', '', 0, '0000-00-00 00:00:00'),
(187, 'Sainte-Lucie', '', 0, '0000-00-00 00:00:00'),
(188, 'Saint-Pierre-et-Miquelon', '', 0, '0000-00-00 00:00:00'),
(189, 'Saint-Vincent-et-les Grenadines', '', 0, '0000-00-00 00:00:00'),
(190, 'Saint-Marin', '', 0, '0000-00-00 00:00:00'),
(191, 'Sao Tomé-et-Principe', '', 0, '0000-00-00 00:00:00'),
(192, 'Arabie Saoudite', '', 0, '0000-00-00 00:00:00'),
(193, 'Sénégal', '', 0, '0000-00-00 00:00:00'),
(194, 'Seychelles', '', 0, '0000-00-00 00:00:00'),
(195, 'Sierra Leone', '', 0, '0000-00-00 00:00:00'),
(196, 'Singapour', '', 0, '0000-00-00 00:00:00'),
(197, 'Slovaquie', '', 0, '0000-00-00 00:00:00'),
(198, 'Viet Nam', '', 0, '0000-00-00 00:00:00'),
(199, 'Slovénie', '', 0, '0000-00-00 00:00:00'),
(200, 'Somalie', '', 0, '0000-00-00 00:00:00'),
(201, 'Afrique du Sud', '', 0, '0000-00-00 00:00:00'),
(202, 'Zimbabwe', '', 0, '0000-00-00 00:00:00'),
(203, 'Espagne', '', 0, '0000-00-00 00:00:00'),
(204, 'Sahara Occidental', '', 0, '0000-00-00 00:00:00'),
(205, 'Soudan', '', 0, '0000-00-00 00:00:00'),
(206, 'Suriname', '', 0, '0000-00-00 00:00:00'),
(207, 'Svalbard etÎle Jan Mayen', '', 0, '0000-00-00 00:00:00'),
(208, 'Swaziland', '', 0, '0000-00-00 00:00:00'),
(209, 'Suède', '', 0, '0000-00-00 00:00:00'),
(210, 'Suisse', '', 0, '0000-00-00 00:00:00'),
(211, 'République Arabe Syrienne', '', 0, '0000-00-00 00:00:00'),
(212, 'Tadjikistan', '', 0, '0000-00-00 00:00:00'),
(213, 'Thaïlande', '', 0, '0000-00-00 00:00:00'),
(214, 'Togo', '', 0, '0000-00-00 00:00:00'),
(215, 'Tokelau', '', 0, '0000-00-00 00:00:00'),
(216, 'Tonga', '', 0, '0000-00-00 00:00:00'),
(217, 'Trinité-et-Tobago', '', 0, '0000-00-00 00:00:00'),
(218, 'Émirats Arabes Unis', '', 0, '0000-00-00 00:00:00'),
(219, 'Tunisie', '', 0, '0000-00-00 00:00:00'),
(220, 'Turquie', '', 0, '0000-00-00 00:00:00'),
(221, 'Turkménistan', '', 0, '0000-00-00 00:00:00'),
(222, 'Îles Turks et Caïques', '', 0, '0000-00-00 00:00:00'),
(223, 'Tuvalu', '', 0, '0000-00-00 00:00:00'),
(224, 'Ouganda', '', 0, '0000-00-00 00:00:00'),
(225, 'Ukraine', '', 0, '0000-00-00 00:00:00'),
(226, 'L\'ex-République Yougoslave de Macédoine', '', 0, '0000-00-00 00:00:00'),
(227, 'Égypte', '', 0, '0000-00-00 00:00:00'),
(228, 'Royaume-Uni', '', 0, '0000-00-00 00:00:00'),
(229, 'Île de Man', '', 0, '0000-00-00 00:00:00'),
(230, 'République-Unie de Tanzanie', '', 0, '0000-00-00 00:00:00'),
(231, 'États-Unis', '', 0, '0000-00-00 00:00:00'),
(232, 'Îles Vierges des États-Unis', '', 0, '0000-00-00 00:00:00'),
(233, 'Burkina Faso', '', 0, '0000-00-00 00:00:00'),
(234, 'Uruguay', '', 0, '0000-00-00 00:00:00'),
(235, 'Ouzbékistan', '', 0, '0000-00-00 00:00:00'),
(236, 'Venezuela', '', 0, '0000-00-00 00:00:00'),
(237, 'Wallis et Futuna', '', 0, '0000-00-00 00:00:00'),
(238, 'Samoa', '', 0, '0000-00-00 00:00:00'),
(239, 'Yémen', '', 0, '0000-00-00 00:00:00'),
(240, 'Serbie-et-Monténégro', '', 0, '0000-00-00 00:00:00'),
(241, 'Zambie', '', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

CREATE TABLE `quartier` (
  `idQuartier` int(11) NOT NULL,
  `nomQuartier` varchar(50) NOT NULL,
  `descriptionQuatier` text NOT NULL,
  `imageQuartier` varchar(50) NOT NULL,
  `dernieremodif` datetime NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `typedanger`
--

CREATE TABLE `typedanger` (
  `idTypeDanger` int(11) NOT NULL,
  `typeDanger` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `typedanger`
--

INSERT INTO `typedanger` (`idTypeDanger`, `typeDanger`) VALUES
(29, 'Catastrophe Naturelle'),
(28, 'Crime'),
(31, 'Violence'),
(30, 'Vol');

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

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `sexeUtilisateur`, `emailuser`, `motdepasseuser`, `dateinscriptionuser`, `roleUtilisateur`, `aap`, `aav`, `aaq`, `aatd`, `aacd`, `avatar`, `idParent`) VALUES
(1, 'Super', 'Admin', 'M', 'admin@simplonci-simplon.co', '$2y$10$8c/BcU2FBPsAOw27Xu4INe3y3VGQ8iPCneuclX6aYeh5wKfoGHO72', '2020-06-09 08:05:04', 'Superviseur', 'non', 'non', 'non', 'non', 'non', 'v0eLQpFirbdK39E', 0),
(4, 'Soumah', 'Ibrahim', 'M', 'ibrahim@simplon.ci', '$2y$10$c7UltZWZAaVIoUUHtqnsY.vMDdyvQTxyNEMdP5KE6Yrp.Z9AHgmNm', '2020-06-09 11:13:28', 'Administrateur', 'non', 'non', 'non', 'non', 'non', 'Soumah Ibrahim Michot.jpg', 1),
(5, 'Manegbo', 'Rebecca', 'F', 'rebecca@simplon.ci', '$2y$10$AYX25KCjBNgldwedAsN7yuUn78bItrzagASuMxkeVmNcup2/SPZ.G', '2020-06-09 11:20:41', 'Administrateur', 'non', 'non', 'non', 'non', 'non', 'Manegbo Attimi Rebecca Jina.jpeg', 4),
(6, 'Koya', 'Tean Benoit Michel', 'M', 'tean.koya@gmail.com', '$2y$10$miMGfEHH3m4B50elj73oqutprdj2RXd9vcKrQCZJD/hQuzIyfX7Yy', '2020-06-11 06:29:52', 'Operateur', 'non', 'non', 'non', 'non', 'non', 'simplon.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `idVille` int(11) NOT NULL,
  `nomVille` varchar(50) NOT NULL,
  `descriptionVille` varchar(50) NOT NULL,
  `imageVille` varchar(60) NOT NULL,
  `dernieremodif` datetime NOT NULL,
  `idPays` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`idVille`, `nomVille`, `descriptionVille`, `imageVille`, `dernieremodif`, `idPays`) VALUES
(80, 'abengourou', '', '', '0000-00-00 00:00:00', '110'),
(81, 'abidjan', '', '', '0000-00-00 00:00:00', '110'),
(82, 'aboisso', '', '', '0000-00-00 00:00:00', '110'),
(83, 'adiake', '', '', '0000-00-00 00:00:00', '110'),
(84, 'adzope', '', '', '0000-00-00 00:00:00', '110'),
(85, 'agboville', '', '', '0000-00-00 00:00:00', '110'),
(86, 'alepe', '', '', '0000-00-00 00:00:00', '110'),
(87, 'bangolo', '', '', '0000-00-00 00:00:00', '110'),
(88, 'beoumi', '', '', '0000-00-00 00:00:00', '110'),
(89, 'biankouma', '', '', '0000-00-00 00:00:00', '110'),
(90, 'bocanda', '', '', '0000-00-00 00:00:00', '110'),
(91, 'bondoukou', '', '', '0000-00-00 00:00:00', '110'),
(92, 'bongouanou', '', '', '0000-00-00 00:00:00', '110'),
(93, 'bouafle', '', '', '0000-00-00 00:00:00', '110'),
(94, 'bouake', '', '', '0000-00-00 00:00:00', '110'),
(95, 'bouna', '', '', '0000-00-00 00:00:00', '110'),
(96, 'boundiali', '', '', '0000-00-00 00:00:00', '110'),
(97, 'dabakala', '', '', '0000-00-00 00:00:00', '110'),
(98, 'dabou', '', '', '0000-00-00 00:00:00', '110'),
(99, 'daloa', '', '', '0000-00-00 00:00:00', '110'),
(100, 'danane', '', '', '0000-00-00 00:00:00', '110'),
(101, 'daoukro', '', '', '0000-00-00 00:00:00', '110'),
(102, 'dimbokro', '', '', '0000-00-00 00:00:00', '110'),
(103, 'divo', '', '', '0000-00-00 00:00:00', '110'),
(104, 'duekoue', '', '', '0000-00-00 00:00:00', '110'),
(105, 'ferkessedougou', '', '', '0000-00-00 00:00:00', '110'),
(106, 'gagnoa', '', '', '0000-00-00 00:00:00', '110'),
(107, 'grand-bassam', '', '', '0000-00-00 00:00:00', '110'),
(108, 'grand-lahou', '', '', '0000-00-00 00:00:00', '110'),
(109, 'guiglo', '', '', '0000-00-00 00:00:00', '110'),
(110, 'issia', '', '', '0000-00-00 00:00:00', '110'),
(111, 'jacqueville', '', '', '0000-00-00 00:00:00', '110'),
(112, 'katiola', '', '', '0000-00-00 00:00:00', '110'),
(113, 'korhogo', '', '', '0000-00-00 00:00:00', '110'),
(114, 'lakota', '', '', '0000-00-00 00:00:00', '110'),
(115, 'man', '', '', '0000-00-00 00:00:00', '110'),
(116, 'mankono', '', '', '0000-00-00 00:00:00', '110'),
(117, 'mbahiakro', '', '', '0000-00-00 00:00:00', '110'),
(118, 'odienne', '', '', '0000-00-00 00:00:00', '110'),
(119, 'oume', '', '', '0000-00-00 00:00:00', '110'),
(120, 'sakassou', '', '', '0000-00-00 00:00:00', '110'),
(121, 'san-pedro', '', '', '0000-00-00 00:00:00', '110'),
(122, 'sassandra', '', '', '0000-00-00 00:00:00', '110'),
(123, 'seguela', '', '', '0000-00-00 00:00:00', '110'),
(124, 'sinfra', '', '', '0000-00-00 00:00:00', '110'),
(125, 'soubre', '', '', '0000-00-00 00:00:00', '110'),
(126, 'tabou', '', '', '0000-00-00 00:00:00', '110'),
(127, 'tanda', '', '', '0000-00-00 00:00:00', '110'),
(128, 'tiassale', '', '', '0000-00-00 00:00:00', '110'),
(129, 'tiebissou', '', '', '0000-00-00 00:00:00', '110'),
(130, 'tingrela', '', '', '0000-00-00 00:00:00', '110'),
(131, 'touba', '', '', '0000-00-00 00:00:00', '110'),
(132, 'toulepleu', '', '', '0000-00-00 00:00:00', '110'),
(133, 'toumodi', '', '', '0000-00-00 00:00:00', '110'),
(134, 'vavoua', '', '', '0000-00-00 00:00:00', '110'),
(135, 'yamoussoukro', '', '', '0000-00-00 00:00:00', '110'),
(136, 'zuenoula', '', '', '0000-00-00 00:00:00', '110');

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
  ADD PRIMARY KEY (`idauteur`);

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
  MODIFY `idActivite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `idauteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `categoriedanger`
--
ALTER TABLE `categoriedanger`
  MODIFY `idCategorieDanger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `dangertable`
--
ALTER TABLE `dangertable`
  MODIFY `idDanger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `idLieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `idPays` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT pour la table `quartier`
--
ALTER TABLE `quartier`
  MODIFY `idQuartier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `typedanger`
--
ALTER TABLE `typedanger`
  MODIFY `idTypeDanger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `idVille` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
