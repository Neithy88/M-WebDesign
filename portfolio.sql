-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 05 mars 2019 à 14:00
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id_projet` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `lien_demo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL,
  `url_image` text CHARACTER SET utf8mb4 NOT NULL,
  `lien_git` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_projet`),
  KEY `IDX_B454C1DBA21214B7` (`categories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id_projet`, `titre`, `description`, `lien_demo`, `categories_id`, `url_image`, `lien_git`) VALUES
(1, 'Html sur Html', 'Premier projet de groupe de début de formation.\r\nDécouverte des langages Html5 et Css3.\r\nLe but de ce site est d\'expliquer plusieurs types de balises Html.\r\n\r\n', 'groupe2htmlsurhtml/accueil.php', NULL, 'mockup-Html.png', ''),
(2, 'Langerba', 'Reproduction d\'un template depuis une maquette PSD.\r\nDécouverte du framework Bootstrap.', 'Langerba/index.html', NULL, 'mockup-langerba', ''),
(3, 'Bear Grylls l\' explorateur', 'Bear est un explorateur de fichier.\r\nCe projet réalisé sur 3 jours nous a permis de manipuler l\'upload de fichiers depuis un site internet.\r\nLangage : HTML / CSS / PHP', 'AlloCine/index.php', NULL, 'mockup-allocine.png', ''),
(4, 'Jeu du + ou du -', 'Projet individuel pour découverte de manipulation d\'élémentsdu DOM. \r\nLangages : HTML / CSS / Javascript', 'Jeu/index.html', NULL, 'mockup-jeuplusmoins.png', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expire_date` datetime DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `expire_date`, `token`, `email`, `password`) VALUES
(8, '2019-02-27 10:30:15', '', 'a.bailly@onlineformapro.com', '$2y$10$fktKodBUiKbG6gua.XIEVebC3t6tHUbA7jucfzDvQoy3rSkH03MMy'),
(9, NULL, '', 'alexandra.moulllet@gmail.com', 'poulpy889102');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `projets`
--
ALTER TABLE `projets`
  ADD CONSTRAINT `FK_B454C1DBA21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
