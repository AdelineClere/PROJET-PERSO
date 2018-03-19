-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  Dim 18 mars 2018 à 11:52
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `projet_perso`
--

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id_cv` int(2) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `lien` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`id_cv`, `nom`, `lien`) VALUES
(1, 'cv_adeline_clere', 'http://localhost/PROJET-PERSO/img/cv_adeline_clere.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_img` int(3) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id_img`, `nom`, `categorie`, `description`, `photo`) VALUES
(1, 'w1', 'web', 'Exercice : codage de la page', 'http://localhost/PHP/projet_perso/img/web/w1.jpg'),
(2, 'w2', 'web', 'Salon Pause Café Tea Time home (Design)', 'http://localhost/PHP/projet_perso/img/web/w2.jpg'),
(3, 'w3', 'web', 'Salon Pause Café Tea Time (Design)', 'http://localhost/PHP/projet_perso/img/web/w3.jpg'),
(4, 'w4', 'web', 'Paris sur Vins (création Wordpress)', 'http://localhost/PHP/projet_perso/img/web/w4.jpg'),
(5, 'w6', 'web', 'Création application Laboratoires Chugai (Création des pages sur Photoshop + gestion des compositions de calques pour le codage)', 'http://localhost/PHP/projet_perso/img/web/w5.jpg'),
(6, 'w7', 'web', 'Création Application Roche-Chugai (Création des pages sur Photoshop + gestion des compositions de calques pour le codage)', 'http://localhost/PHP/projet_perso/img/web/w6.jpg'),
(7, 'w8', 'web', 'Déclinaison graphique application Laboratoires Novartis - Lucentis (Création des pages sur Photoshop + gestion des compositions de calques pour le codage)', 'http://localhost/PHP/projet_perso/img/web/w7.jpg'),
(8, 'e1', 'edition', 'Création graphique Stand, brochures, supports pour la Clinique turque Baçeci', 'http://localhost/PHP/projet_perso/img/ed/e1.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id_cv`);

--
-- Index pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_img`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id_cv` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_img` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
