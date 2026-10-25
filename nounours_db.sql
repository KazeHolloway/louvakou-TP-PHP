-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 nov. 2024 à 11:57
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nounours_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `email` text NOT NULL,
  `adresse_livraison` text NOT NULL,
  `quantite` int(11) NOT NULL,
  `couleur` varchar(30) NOT NULL,
  `prix_unitaire` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `nom`, `prenom`, `email`, `adresse_livraison`, `quantite`, `couleur`, `prix_unitaire`) VALUES
(1, 'HOLOWAY', 'Kaze', 'kazehollo@gmail.com', 'makelekele', 14, 'Rouge', 15),
(2, 'MASS', 'Christ', 'massachrist@xn--gail-lra.com', 'Mayanga', 4, 'Vert', 20),
(3, 'UCHIWA', 'Itachi', 'uchiwaitachi@gmail.com', 'konoha', 4, 'Jaune', 1250.75),
(4, 'HOLOWAY', 'Marcus', 'kazehollo@gmail.com', 'Mayanga', 3, 'Vert', 18.49),
(5, 'GARDNER', 'Charlotte', 'gardchar@gmail.com', '2 rue louvakou', 250, 'Orange', 500),
(6, 'WALPOL', 'Duncan', 'duncanwalpol@gmail.com', 'Havane', 11, 'Grise', 750);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
