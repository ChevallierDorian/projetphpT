-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 22 mai 2019 à 20:30
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
-- Base de données :  `amicale_fulbert`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `texte_c` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

DROP TABLE IF EXISTS `recettes`;
CREATE TABLE IF NOT EXISTS `recettes` (
  `ID_Recette` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DureeCuisson` int(11) NOT NULL,
  `DureePrepa` int(11) NOT NULL,
  PRIMARY KEY (`ID_Recette`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recettes`
--

INSERT INTO `recettes` (`ID_Recette`, `Titre`, `Contenu`, `DureeCuisson`, `DureePrepa`) VALUES
(1, 'lasagnes', 'boeuf', 1, 12),
(2, 'pates', 'pates beurre', 12, 12),
(3, 'frite', 'mayo', 15, 3),
(4, 'lavic', 'beau et fort', 15, 500);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mot_de_passe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Age` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `Nom`, `Prenom`, `Pseudo`, `Mot_de_passe`, `adresse_mail`, `Age`) VALUES
(1, 'Chevallier', 'Dorian', 'Heho-potter', '$2y$10$jwgA1Safm3ljnKvjGn9cuudjLSAQq7c9eac3XlSWQa1GCh6oAeqaa', 'bonjour25@lele.triangle', 19),
(2, 'Nekfeu ', 'Lea', 'Heho-potter', '$2y$10$dgLLV7ZtuFQBj8OXrj6LZ.lQ53KarAdOAKo8eyfpRA0EaM26wxtO6', 'bonjour25@lele.triangle', 18),
(3, 'victor', 'bardeau', 'sky', '$2y$10$ol2il9cBPiR6Eg9ZQUiUr.6zV/.p8GsPJJZc8iQJByVlw.co2AiAm', 'victorlefou@orange.fr', 19);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
