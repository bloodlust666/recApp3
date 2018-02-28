-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 11:22 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_rec_app_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre_annonce` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_poste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_profil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emploi_base_ville` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `niveau_experience` enum('Etudiantejeune_diplome','Debutant<2ans','Xp_2ans_5ans','Xp_5ans_10ans','Xp>10ans') COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau_etude` enum('qualif_avant_bac','bac+1','bac+2','bac+3','bac+5','bac+5_plus') COLLATE utf8mb4_unicode_ci NOT NULL,
  `langue_exigees` enum('france','arabe','anglais','espagnol') COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_contrat` enum('CDI','CDD','stage','mission','alternance','temps_partiel') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `annonces`
--

INSERT INTO `annonces` (`id`, `titre_annonce`, `description_poste`, `description_profil`, `emploi_base_ville`, `active`, `niveau_experience`, `niveau_etude`, `langue_exigees`, `type_contrat`, `created_at`, `updated_at`) VALUES
(1, 'rrrrrrrr', 'rrrrrrrr', 'rr', 'casablanca', 1, 'Debutant<2ans', 'bac+2', 'france', 'stage', '2018-02-06 20:56:05', '2018-02-06 20:56:05'),
(2, 'mechanic', 'mechanic', '7mar ,3azi , twil', 'casanegra', 1, 'Etudiantejeune_diplome', 'qualif_avant_bac', 'espagnol', 'stage', '2018-02-06 21:11:31', '2018-02-06 21:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entreprises`
--

CREATE TABLE `entreprises` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `Elogo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomEntreprise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codePostal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siteWeb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` enum('Maroc','Algerie','Tunisie','France') COLLATE utf8mb4_unicode_ci NOT NULL,
  `activiteE` enum('AMEUBLEMENT_DECORATION','CENTRES_APPEL','EDITION_IMPRIMERIE','METALLURGIE_SIDÉRURGIE','PAPIER_BOIS_PLASTIQUE','QUALITE_METHODES','EDUCATION_FORMATION','IMMOBILIER_ARCHITECTURE','INFORMATIQUE_SSII_INTERNET','INGENIERIE_ETUDES_DEVELOPPEMENT','TELECOM','AUTOMOBILE_TRANSPORT','DISTRIBUTION_VENTE_COMMERCE','SANTE_PHARMACIE_HOPITAUX','SERVICES_AEROPORTUAIRES_MARITIMES','SERVICES_COLLECTIFS_SOCIAUX','MARKETING_COMMUNICATION_MEDIAS','NETTOYAGE_SECURITE_SURVEILLANCE','SPORT_ACTION_CULTURELLE_SOCIALE','SERVICES_AUTRES') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entreprises`
--

INSERT INTO `entreprises` (`id`, `user_id`, `Elogo`, `nomEntreprise`, `ville`, `adresse`, `codePostal`, `siteWeb`, `descriptionE`, `pays`, `activiteE`, `created_at`, `updated_at`) VALUES
(1, 1, 'Elogo/GX2fzWU2woP1GPZ2WBo0UInWwoASBh1ZwLS72PvD.jpeg', 'aminux', 'casablanca', 'casablanca haysadri rue 26 block 4 n11', '20 420', 'www.aminux.com', '7na wa7ad charika ta3 aminux  mdayr m3ana mazyan', 'Maroc', 'AMEUBLEMENT_DECORATION', '2018-02-06 21:03:34', '2018-02-06 21:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(130, '2014_10_12_000000_create_users_table', 1),
(131, '2014_10_12_100000_create_password_resets_table', 1),
(132, '2017_12_25_210554_create_annonces_table', 1),
(133, '2018_01_01_213536_create_entreprises_table', 1),
(134, '2018_01_01_213606_create_cvs_table', 1),
(135, '2018_01_01_215450_add_column_user_id', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminType` tinyint(1) NOT NULL DEFAULT '0',
  `recruteurType` tinyint(1) DEFAULT '0',
  `candidatType` tinyint(1) DEFAULT '0',
  `civilite` enum('Mr','Mme','Mlle') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `tel1`, `tel2`, `fax`, `email`, `password`, `adminType`, `recruteurType`, `candidatType`, `civilite`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'recruteurX', 'jilal', '06 55 55 55 99', '06 55 75 55 46', '212 12 45 85 65', 'recruteurX@gmail.com', '$2y$10$5L35d2b4taslnOyIm95FPOMbHGhcIXTNQA2AUyvA153gi4SW4U/Qi', 0, 1, NULL, 'Mr', NULL, '2018-02-06 20:55:18', '2018-02-06 20:55:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entreprises_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entreprises`
--
ALTER TABLE `entreprises`
  ADD CONSTRAINT `entreprises_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
