-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 06 mars 2018 à 17:20
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_perso`
--

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_img` int(3) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `lien` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id_img`, `nom`, `categorie`, `description`, `lien`) VALUES
(1, 'w01', 'web', 'Exercice : programmation page Apple', ''),
(2, 'w02', 'web', 'Pause Café Tea Time home', ''),
(3, 'w03', 'web', 'Pause Café Tea Time', ''),
(4, 'w04', 'web', 'Paris sur Vins', ''),
(5, 'w05', 'web', 'Création application Laboratoires Chugai ', ''),
(6, 'w06', 'web', 'Création Application Roche-Chugai', ''),
(7, 'w07', 'web', 'Déclinaison graphique application Laboratoires Novartis - Lucentis  ', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_img`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_img` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
