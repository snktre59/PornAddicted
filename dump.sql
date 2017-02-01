-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mer 01 Février 2017 à 13:15
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `porn_addicted`
--
CREATE DATABASE IF NOT EXISTS `porn_addicted` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `porn_addicted`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `ID` int(10) unsigned NOT NULL,
  `NOM` varchar(50) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `IMAGE` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `ID_UTILISATEUR` smallint(5) unsigned NOT NULL,
  `PSEUDO` varchar(20) NOT NULL,
  `NOM` varchar(80) DEFAULT NULL,
  `PRENOM` varchar(80) DEFAULT NULL,
  `ADRESSE_POSTALE` varchar(500) DEFAULT NULL,
  `CODE_POSTAL` int(5) DEFAULT NULL,
  `VILLE` varchar(200) DEFAULT NULL,
  `ADRESSE_EMAIL` varchar(150) NOT NULL,
  `NUMERO_DE_TELEPHONE` varchar(15) DEFAULT NULL,
  `ADRESSE_IP_DERNIERE_CONNEXION` varchar(50) NOT NULL,
  `MOT_DE_PASSE` varchar(255) NOT NULL,
  `DATE_INSCRIPTION` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `TYPE_ABONNEMENT` varchar(70) DEFAULT NULL,
  `DATE_SOUSCRIPTION` date DEFAULT NULL,
  `ROLE` enum('PROPRIETAIRE','LOCATAIRE') DEFAULT NULL,
  `STATUT_COMPTE` enum('ACTIF','INACTIF') NOT NULL,
  `TOKEN_ID` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID_UTILISATEUR`, `PSEUDO`, `NOM`, `PRENOM`, `ADRESSE_POSTALE`, `CODE_POSTAL`, `VILLE`, `ADRESSE_EMAIL`, `NUMERO_DE_TELEPHONE`, `ADRESSE_IP_DERNIERE_CONNEXION`, `MOT_DE_PASSE`, `DATE_INSCRIPTION`, `TYPE_ABONNEMENT`, `DATE_SOUSCRIPTION`, `ROLE`, `STATUT_COMPTE`, `TOKEN_ID`) VALUES
(1, '', '', '', '', 0, '', 'visiteur', '', '', '', '2016-04-12 16:01:59', NULL, NULL, '', 'ACTIF', ''),
(3, '', 'Ouazzani', 'Abdelmalek', '2, rue du Becquerel', 59000, 'LILLE', 'abdelmalek.ouazzani@free.fr', '0909090909', '::1', '$2y$10$nJaejvqgTCtzfCWjhADho.IIk2g2Keky3XBA6W.s./zFSUP5PtWu.', '0000-00-00 00:00:00', '', '0000-00-00', 'LOCATAIRE', 'ACTIF', 'bda2f20b783234a00eab7f9970885aea'),
(4, 'snktre59', NULL, NULL, NULL, NULL, NULL, 'pamart.nicolas@free.fr', NULL, '::1', '$2y$10$WFvTwxMcCsUOK3G2bRv/T.XDcjKIaITGL76xLMT/nHyMKYMQ2RKT2', '0000-00-00 00:00:00', '', '0000-00-00', NULL, 'ACTIF', '075e8f39efa532d681434f52e9d21b2c');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`ID_UTILISATEUR`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `ID_UTILISATEUR` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;