/*←
phpMyAdmin
AccueilDocumentation de phpMyAdminDocumentationActualiser le panneau de navigation
RécentesPréférées
Tout réduireSupprimer la liaison au panneau principal
Nouvelle base de données
Développer/réduireOpérations sur base de donnéesinformation_schema
Développer/réduireOpérations sur base de donnéesmysql
Développer/réduireOpérations sur base de donnéesperformance_schema
Développer/réduireOpérations sur base de donnéespresta1615
Opérations sur base de donnéesSchoolIn
Nouvelle tableNouvelle table
Développer/réduireStructuresi_addresses
Développer/réduireStructuresi_companies
Développer/réduireStructuresi_companies_carriers
Développer/réduireStructuresi_establishment
Développer/réduireStructuresi_events
Développer/réduireStructuresi_groups
Développer/réduireStructuresi_groups_user
Développer/réduireStructuresi_locations
Développer/réduireStructuresi_location_image
Développer/réduireStructuresi_menu
Développer/réduireStructuresi_notes
Développer/réduireStructuresi_users
Développer/réduireOpérations sur base de donnéeswordpress
Serveur: localhost:3306 »Base de données: SchoolIn
Structure Structure
SQL SQL
Rechercher Rechercher
Requête Requête
Exporter Exporter
Importer Importer
Opérations Opérations
Privilèges Privilèges
Procédures stockées Procédures stockées
Événements Événements
Déclencheurs Déclencheurs
plus
Cliquez sur la barre pour faire défiler en haut de page
Console de requête SQLConsole de requêtes SQL
OptionsMettre par défaut
Toujours développer les messages
Afficher l'historique des requêtes au début
Montrer la requête courante
[ Retour ]
*/

-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 16 Juin 2016 à 20:54
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `SchoolIn`
--

-- --------------------------------------------------------

--
-- Structure de la table `si_addresses`
--

CREATE TABLE `si_addresses` (
  `id` int(11) NOT NULL,
  `street` varchar(128) NOT NULL,
  `codepost` int(5) NOT NULL,
  `city` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `si_addresses`
--

INSERT INTO `si_addresses` (`id`, `street`, `codepost`, `city`) VALUES
(1, '23 Rue Jean d''Arc', 2100, 'Saint-Quentin'),
(2, '02 Rue de Mulhouse', 2100, 'Saint-Quentin'),
(3, '45 Bd des champs Elysée ', 2100, 'Saint-Quentin'),
(4, '40 Rue Mulot', 2100, 'Saint-Quentin'),
(5, '12 Rue Roland Garros', 2100, 'Saint-Quentin'),
(6, '48 Rue d''Ostende', 2100, 'Saint-Quentin');

-- --------------------------------------------------------

--
-- Structure de la table `si_companies`
--

CREATE TABLE `si_companies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `site_web` varchar(255) NOT NULL,
  `id_address` int(11) NOT NULL,
  `domain_activity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `si_companies_carriers`
--

CREATE TABLE `si_companies_carriers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `id_company` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `si_establishment`
--

CREATE TABLE `si_establishment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `site_web` varchar(255) NOT NULL,
  `id_address` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `si_establishment`
--

INSERT INTO `si_establishment` (`id`, `name`, `tel`, `email`, `site_web`, `id_address`) VALUES
(1, 'INSSET', '03 23 62 89 59', 'innset@uni-upjv.fr', 'www.insset.u-picardie.fr', 6),
(2, 'IUT', '03 23 50 36 91', 'iut@uni-upjv.fr', 'https://iut-aisne.u-picardie.fr', 6);

-- --------------------------------------------------------

--
-- Structure de la table `si_events`
--

CREATE TABLE `si_events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc_event` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `si_groups`
--

CREATE TABLE `si_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `si_groups`
--

INSERT INTO `si_groups` (`id`, `name`) VALUES
(1, 'INSSET'),
(2, 'Master1'),
(3, 'CCM'),
(4, 'Football'),
(5, 'Master2');

-- --------------------------------------------------------

--
-- Structure de la table `si_groups_user`
--

CREATE TABLE `si_groups_user` (
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `si_groups_user`
--

INSERT INTO `si_groups_user` (`id_group`, `id_user`, `active`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 1),
(1, 4, 1),
(1, 5, 1),
(2, 1, 1),
(2, 2, 1),
(2, 3, 1),
(2, 4, 1),
(2, 5, 1),
(3, 1, 1),
(3, 2, 1),
(3, 3, 1),
(3, 4, 1),
(3, 5, 1),
(4, 1, 1),
(4, 2, 1),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `si_locations`
--

CREATE TABLE `si_locations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `desc_location` text NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `valid` int(1) NOT NULL,
  `date_add` datetime NOT NULL,
  `date_end` datetime DEFAULT NULL,
  `id_address` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `si_locations`
--

INSERT INTO `si_locations` (`id`, `title`, `price`, `desc_location`, `path`, `valid`, `date_add`, `date_end`, `id_address`) VALUES
(1, 'T1 CV rénové possibilité de meublé', 370, '', 'https://www.leboncoin.fr/locations/978805586.htm?ca=19_s', 1, '2016-06-13 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'Appartement de type F2', 390, '', 'https://www.leboncoin.fr/locations/972672987.htm?ca=19_s', 1, '2016-06-01 00:00:00', NULL, 2),
(4, 'Appartement 2 pièces 38 m²', 395, '', 'https://www.leboncoin.fr/locations/934612307.htm?ca=19_s', 1, '2016-06-14 00:00:00', NULL, 3),
(5, 'Studio 1 pièce 20 m²', 290, '', 'https://www.leboncoin.fr/locations/977540418.htm?ca=19_s', 1, '2016-06-09 00:00:00', NULL, 4),
(6, 'Studio 1 pièce 20 m²', 300, '', 'https://www.leboncoin.fr/locations/907149005.htm?ca=19_s', 1, '2016-06-04 00:00:00', NULL, 5);

-- --------------------------------------------------------

--
-- Structure de la table `si_location_image`
--

CREATE TABLE `si_location_image` (
  `id` int(11) NOT NULL,
  `id_location` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `si_location_image`
--

INSERT INTO `si_location_image` (`id`, `id_location`, `img_name`) VALUES
(1, 6, '1'),
(2, 5, '2'),
(3, 4, '3'),
(4, 3, '4'),
(5, 1, '5'),
(6, 6, '1.jpg'),
(7, 5, '2.jpg'),
(8, 4, '3.jpg'),
(9, 3, '4.jpg'),
(10, 1, '5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `si_menu`
--

CREATE TABLE `si_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(124) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `si_menu`
--

INSERT INTO `si_menu` (`id`, `name`, `path`, `icon`, `active`) VALUES
(1, 'Accueil', 'home_page', 'dashboard', 1),
(2, 'Groupes', 'home_page', 'group', 1),
(3, 'Profil', 'home_page', 'account_box', 1),
(4, 'Notes', 'home_page', 'book', 1),
(5, 'Evemenement ', 'events_page', 'event', 1),
(6, 'Bon plans', 'home_page', 'thumb_up', 1),
(7, 'Collocation', 'home_page', 'home', 1),
(8, 'Pro', 'home_page', 'business_center', 1);

-- --------------------------------------------------------

--
-- Structure de la table `si_notes`
--

CREATE TABLE `si_notes` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `text_note` text NOT NULL,
  `date_upd` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `si_notes`
--

INSERT INTO `si_notes` (`id`, `title`, `text_note`, `date_upd`, `id_user`) VALUES
(1, 'Note 1', 'text depuis BDD Note 1', '2016-06-16', 1),
(2, 'Note 2', 'text depuis BDD note 2', '2016-06-16', 1),
(3, 'note 3', 'text depuis BDD note 3', '2016-06-16', 1),
(4, 'note 4', 'text depuis BDD note 4', '2016-06-15', 1),
(5, 'note 5', 'text depuis BDD note 5', '2016-06-14', 1);

-- --------------------------------------------------------

--
-- Structure de la table `si_users`
--

CREATE TABLE `si_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `si_users`
--

INSERT INTO `si_users` (`id`, `firstname`, `lastname`, `email`) VALUES
(1, 'Martin', 'Dubois', 'dubois.martin@email.fr'),
(2, 'Simon', 'Lefebvre', 'simon.lefebvre@email.fr'),
(3, 'Alexandre', 'Dupont', 'alex.dupont@email.fr'),
(4, 'Francois', 'Roussel', 'francois.roussel@email.fr'),
(5, 'Abdelhak', 'Balabola', 'balabola@email.fr');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `si_addresses`
--
ALTER TABLE `si_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `si_establishment`
--
ALTER TABLE `si_establishment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `si_events`
--
ALTER TABLE `si_events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `si_groups`
--
ALTER TABLE `si_groups`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `si_locations`
--
ALTER TABLE `si_locations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `si_location_image`
--
ALTER TABLE `si_location_image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `si_menu`
--
ALTER TABLE `si_menu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `si_notes`
--
ALTER TABLE `si_notes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `si_users`
--
ALTER TABLE `si_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `si_addresses`
--
ALTER TABLE `si_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `si_establishment`
--
ALTER TABLE `si_establishment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `si_events`
--
ALTER TABLE `si_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `si_groups`
--
ALTER TABLE `si_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `si_locations`
--
ALTER TABLE `si_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `si_location_image`
--
ALTER TABLE `si_location_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `si_menu`
--
ALTER TABLE `si_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `si_notes`
--
ALTER TABLE `si_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `si_users`
--
ALTER TABLE `si_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*[ Retour ]

Ouvrir une nouvelle fenêtre phpMyAdmin
*/