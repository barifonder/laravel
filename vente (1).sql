-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 21 Mai 2018 à 14:42
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vente`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `designation` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pu` double(8,2) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `designation`, `pu`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'marrakech', 900022.00, NULL, '2018-03-31 23:00:00', '2018-03-31 23:00:00', NULL),
(2, 'casablanca', 200.00, NULL, '2018-04-14 16:08:10', '2018-04-14 16:08:10', NULL),
(3, 'mohamadia', 1650.00, NULL, '2018-04-14 16:14:23', '2018-04-14 16:18:32', '2018-04-14 17:18:32'),
(4, 'asafi', 120.00, NULL, '2018-04-14 16:16:05', '2018-04-14 16:18:16', '2018-04-14 17:18:16'),
(5, 'madrid', 200.00, NULL, '2018-04-14 16:17:26', '2018-04-14 16:17:58', '2018-04-14 17:17:58'),
(6, 'madrid', 200.00, NULL, '2018-04-14 16:23:41', '2018-04-14 16:23:41', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `adresse`, `ville`, `tel`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'kld', 'kaka', 'marrakech tansift', 'marrakech', '0202020202', '2018-04-14 15:58:32', '2018-04-14 15:58:32', NULL),
(2, 'simo', 'man', 'ibn taymia', 'kech', '0606060606', '2018-03-03 16:40:45', '2018-03-13 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `commandes`
--

INSERT INTO `commandes` (`id`, `article_id`, `client_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2018-03-31 23:00:00', '2018-03-31 23:00:00', NULL),
(2, 3, 1, '2018-03-31 23:00:00', '2018-03-31 23:00:00', NULL),
(3, 2, 2, '2018-03-03 16:40:45', '2018-03-31 23:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

CREATE TABLE `infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `infos`
--

INSERT INTO `infos` (`id`, `client_id`, `nom`, `prenom`, `adresse`, `created_at`, `updated_at`) VALUES
(1, 2, 'khalid', 'rak', 'lot lot', '2018-03-31 23:00:00', '2018-04-15 11:53:31'),
(3, 1, 'khalid', 'kaka', 'ibn tamia', '2018-04-15 11:59:12', '2018-04-15 11:59:12'),
(4, 1, 'ngu', 'hch', 'lott', '2018-04-15 11:59:45', '2018-04-15 11:59:45');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_02_174845_create_article_table', 2),
(4, '2018_03_02_175752_create_articles_table', 3),
(5, '2018_03_02_180227_create_articles_table', 4),
(6, '2018_03_02_191726_create_articles_table', 5),
(7, '2018_03_03_005739_add_column_deleted_at_articles', 6),
(8, '2018_03_03_123938_add_column_photo_articles', 7),
(9, '2018_03_08_155854_create_clients_table', 8),
(10, '2018_03_08_161933_create_clients_table', 9),
(11, '2018_03_08_162130_create_clients_table', 10),
(12, '2018_03_08_180945_add_column_deleted_at_clients', 11),
(13, '2018_03_08_181304_add_column_deleted_at_clients', 12),
(14, '2018_03_10_170150_create_commandes_table', 13),
(18, '2018_03_10_173114_create_commandes_table', 14),
(19, '2018_03_10_195053_add_column_deleted_at_commandes', 15),
(20, '2018_03_13_150054_create_commandes_table', 16),
(21, '2018_03_13_150329_add_column_deleted_at_commandes', 16),
(22, '2018_03_13_150624_add_column_article_id', 16),
(23, '2018_03_13_151130_add_column_client_id', 16),
(24, '2018_03_13_151529_add_column_client_id', 17),
(25, '2018_04_15_115754_create_infos_table', 18),
(26, '2018_04_15_120525_add_column_client_id', 18);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'barifonder', 'kld@kld.com', '$2y$10$//2PrOibQcWRWkn7/R1Ile4Ol9QfFl.aUvM0UOFvte92oVAp5/ptC', 'kMFvjbu5lNe3mFX5BXVmjvlDVIAFNPdRggc3ObfNlJCP0WcEsbFyUXy4Ee6i', '2018-03-02 16:49:15', '2018-03-02 16:49:15');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c1` (`article_id`),
  ADD KEY `c2` (`client_id`);

--
-- Index pour la table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c3` (`client_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `c1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `infos`
--
ALTER TABLE `infos`
  ADD CONSTRAINT `c3` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
