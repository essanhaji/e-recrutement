-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2018 at 09:45 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-recrutement`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

DROP TABLE IF EXISTS `candidates`;
CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `civility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `recruiters_user_id_uniq` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `user_id`, `first_name`, `last_name`, `civility`, `birthdate`, `picture`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'ES SANHAJI', 'Candidate', 'Homme', '1998-08-30', 'picture/YRD8xTHWoD8m348eAf4RF5SEDCplEMl6T4HkhY7M.jpeg', '2018-05-23 16:37:49', '2018-05-23 16:40:16', NULL),
(2, 5, 'ESSOUBAKI', 'Candidate', 'Homme', '1986-12-09', 'picture/4hSYA0z22XkRgHQVPXsWVt3vLXP1onq6qlTsDGs0.jpeg', '2018-05-26 05:18:38', '2018-05-26 05:18:38', NULL),
(3, 6, 'GANNAOUI', 'Candidate', 'Homme', '1990-03-02', 'picture/4ohiQUGKfWB7SPZi3ZjkenzjuU55nVAaOCsW0W2b.jpeg', '2018-05-26 05:27:16', '2018-05-26 05:27:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

DROP TABLE IF EXISTS `cvs`;
CREATE TABLE IF NOT EXISTS `cvs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` double NOT NULL,
  `age` int(11) NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_me` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `recruiters_user_id_uniq` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `user_id`, `title`, `facebook`, `insagram`, `twitter`, `google_plus`, `linkedin`, `address`, `salary`, `age`, `active`, `phone_number`, `email`, `experience`, `etude`, `about_me`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Developpeur Web', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.google-plus.com/', 'https://www.linkedin.com/', '33 Rue de Sebta, Casablanca 20360', 3500, 20, 'true', '0641966888', 'essanhajicandidate@gmail.com', 'Moins de 1 an', 'Bac+2', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-05-23 16:37:49', '2018-05-26 04:35:09', NULL),
(2, 5, 'Developpeur Personnel', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.google-plus.com/', 'https://www.linkedin.com/', '33 Rue de Sebta, Casablanca 20360', 6548, 28, 'true', '0641966888', 'essoubakicandidat@gmail.com', 'De 3 à 5 ans', 'Bac+4', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-05-26 05:18:38', '2018-05-26 05:18:38', NULL),
(3, 6, 'Developpeur Mobile', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.google-plus.com/', 'https://www.linkedin.com/', '33 Rue de Sebta, Casablanca 20360', 56468, 28, 'true', '0641966888', 'gannaouicandidat@gmail.com', 'Plus de 20 ans', 'Bac+6 et plus', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-05-26 05:27:16', '2018-05-26 05:27:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

DROP TABLE IF EXISTS `educations`;
CREATE TABLE IF NOT EXISTS `educations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `diploma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `educations_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `user_id`, `start_date`, `end_date`, `diploma`, `department`, `university`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2017-12-06', '2018-05-15', 'Master', 'Informatique', 'Cadi Ayyad', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-05-26 04:36:48', '2018-05-26 04:36:48', NULL),
(2, 1, '2017-07-02', '2018-05-28', 'DUT', 'Management', 'Cadi Ayyad', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam,', '2018-05-26 04:39:25', '2018-05-26 04:39:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `experiences_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `title`, `speciality`, `start_date`, `end_date`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Stage en JEE', 'Informatique', '2018-05-06', '2018-05-02', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-05-26 04:40:26', '2018-05-26 04:40:26', NULL),
(2, 1, 'Stage en JEE', 'Informatique', '2018-01-07', '2018-05-04', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-05-26 04:42:04', '2018-05-26 04:42:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `favorite` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `favorites_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `favorite`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 7, '2018-05-26 05:09:53', '2018-05-26 05:09:53', NULL),
(2, 1, 5, '2018-05-26 05:11:07', '2018-05-26 05:11:07', NULL),
(3, 1, 4, '2018-05-26 05:11:27', '2018-05-26 05:11:27', NULL),
(4, 1, 1, '2018-05-26 05:11:45', '2018-05-26 05:11:45', NULL),
(5, 1, 3, '2018-05-26 05:12:16', '2018-05-26 05:12:16', NULL),
(6, 6, 1, '2018-05-26 05:28:29', '2018-05-26 05:28:29', NULL),
(7, 2, 6, '2018-05-26 06:02:23', '2018-05-26 06:02:23', NULL),
(8, 2, 5, '2018-05-26 06:02:45', '2018-05-26 06:02:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cv_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `files_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `user_id`, `cv_file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'cv_file/qbNsteZ4fEmiY71ULGZiH06EmrSTeG719Z4oWFaB.pdf', '2018-05-26 05:10:48', '2018-05-26 05:10:48', NULL),
(2, 1, 'cv_file/h8WBd7xe0z9vQx8b2Ca2IPA5JRMLZcwH0sg3WHpv.pdf', '2018-05-26 05:12:26', '2018-05-26 05:12:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_post` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_contract` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_min` double NOT NULL,
  `salary_max` double NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_post` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_requirement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_offer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` date NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `title`, `number_post`, `city`, `type_contract`, `experience`, `salary_min`, `salary_max`, `categorie`, `description_post`, `key_requirement`, `our_offer`, `end_date`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Stage en JEE', 3, 'Errachidia', 'CUI', 'Moins de 1 an', 3000, 1000, 'Design & Art', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-10-20', 'true', '2018-05-26 04:51:39', '2018-05-26 04:51:39', NULL),
(2, 2, 'Stage en php', 7, 'Casablanca', 'CDD', 'De 1 à 3 ans', 1000, 4000, 'Comptabilité', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-10-19', 'true', '2018-05-26 04:52:44', '2018-05-26 04:52:44', NULL),
(3, 2, 'Recrutement en EMPSI', 7, 'Ifrane', 'CTT', 'De 3 à 5 ans', 400, 500, 'Assurance', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-11-17', 'true', '2018-05-26 04:54:21', '2018-05-26 04:54:21', NULL),
(4, 3, 'Recrut MAROC', 78, 'Asni', 'CDI', 'Moins de 1 an', 580, 700, 'Assurance', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-08-18', 'true', '2018-05-26 04:59:10', '2018-05-26 04:59:10', NULL),
(5, 3, 'Stage en MAXI WORL', 78, 'Fès', 'CDD', 'De 3 à 5 ans', 878, 900, 'Management', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-09-22', 'true', '2018-05-26 05:00:38', '2018-05-26 05:00:38', NULL),
(6, 4, 'Stage Android', 54, 'Azrou', 'CIE', 'De 1 à 3 ans', 998, 8584, 'Marketing', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-11-03', 'true', '2018-05-26 05:06:34', '2018-05-26 05:06:34', NULL),
(7, 4, 'Stage en javaFX', 54, 'Al-Hoceima', 'CDI', 'Moins de 1 an', 879, 905, 'Medicine', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-06-02', 'true', '2018-05-26 05:07:52', '2018-05-26 05:07:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `language_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `languages_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `user_id`, `language_name`, `level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Arabe', 'MATERNEL', '2018-05-26 04:42:47', '2018-05-26 04:42:47', NULL),
(2, 1, 'English', 'TECHNIQUE', '2018-05-26 04:43:55', '2018-05-26 04:43:55', NULL),
(3, 1, 'Francais', 'FAIBLE', '2018-05-26 04:44:16', '2018-05-26 04:44:16', NULL),
(4, 1, 'Tamaghirt', 'MATERNEL', '2018-05-26 04:44:47', '2018-05-26 04:44:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `postule_id` int(11) DEFAULT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_user_id_foreign` (`user_id`),
  KEY `messages_job_id_foreign` (`job_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `job_id`, `postule_id`, `active`, `message`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 3, 5, 'true', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'recruteur', '2018-05-26 06:03:43', '2018-05-26 06:03:43', NULL),
(2, 2, 1, 4, 'true', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'recruteur', '2018-05-26 06:04:02', '2018-05-26 06:04:02', NULL),
(3, 2, 3, 5, 'true', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'recruteur', '2018-05-26 06:04:22', '2018-05-26 06:04:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2018_04_26_101230_create_candidates_table', 1),
(19, '2018_04_26_101326_create_skills_table', 1),
(20, '2018_04_26_101418_create_languages_table', 1),
(21, '2018_04_26_101611_create_educations_table', 1),
(22, '2018_04_26_101652_create_cvs_table', 1),
(23, '2018_04_26_101803_create_experiences_table', 1),
(24, '2018_04_26_101923_create_contacts_table', 1),
(25, '2018_04_26_102101_create_recruiters_table', 1),
(26, '2018_04_26_102141_create_jobs_table', 1),
(27, '2018_05_10_141849_create_favorites_table', 1),
(28, '2018_05_12_140901_create_postules_table', 1),
(29, '2018_05_18_111655_create_files_table', 1),
(30, '2018_05_20_000547_create_message_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postules`
--

DROP TABLE IF EXISTS `postules`;
CREATE TABLE IF NOT EXISTS `postules` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `postule` int(11) NOT NULL,
  `attachment` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'page',
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `postules_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postules`
--

INSERT INTO `postules` (`id`, `user_id`, `postule`, `attachment`, `type`, `message`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 7, 1, 'file', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'true', '2018-05-26 05:10:48', '2018-05-26 05:10:48', NULL),
(2, 1, 5, 1, 'page', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'true', '2018-05-26 05:11:18', '2018-05-26 05:11:18', NULL),
(3, 1, 4, 1, 'page', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'true', '2018-05-26 05:11:34', '2018-05-26 05:11:34', NULL),
(4, 1, 1, 1, 'page', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'true', '2018-05-26 05:11:54', '2018-05-26 05:11:54', NULL),
(5, 1, 3, 2, 'file', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'true', '2018-05-26 05:12:26', '2018-05-26 05:12:26', NULL),
(6, 6, 1, 6, 'page', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'true', '2018-05-26 05:28:26', '2018-05-26 05:28:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recruiters`
--

DROP TABLE IF EXISTS `recruiters`;
CREATE TABLE IF NOT EXISTS `recruiters` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_entreprise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_entreprise` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `recruiters_user_id_uniq` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recruiters`
--

INSERT INTO `recruiters` (`id`, `user_id`, `logo`, `name_entreprise`, `description_entreprise`, `speciality`, `address`, `email`, `website`, `phone_number`, `facebook`, `insagram`, `twitter`, `google_plus`, `linkedin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'logo/Cwg41YhRUcewwMnuOPtq8CWXiazOISJ9ITuiT1Qk.png', 'EMSI consulting', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Comptabilité', '33 Rue de Sebta, Casablanca 20360', 'empsiconsulting@gmail.com', 'http://www.empsi.ma/', '0641966888', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.google-plus.com/', 'https://www.linkedin.com/', '2018-05-26 04:50:38', '2018-05-26 04:50:38', NULL),
(2, 3, 'logo/iKgmtxRJWGwIwEcWUoI2XjS60OtFhjLbfw6knDpx.png', 'MAXI world', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Développement', '33 Rue de Sebta, Casablanca 20360', 'essoubakirecruteur@gmail.com', 'http://www.maxi.ma/', '0641966888', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.google-plus.com/', 'https://www.linkedin.com/', '2018-05-26 04:57:54', '2018-05-26 04:57:54', NULL),
(3, 4, 'logo/UYqqHT2G3ahN0OdGfwieODiBSslBDjPJ6aoeMZZj.png', 'TEMPO Recrutement', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Bancaire', '33 Rue de Sebta, Casablanca 20360', 'tempo@gmail.com', 'http://www.tempo.ma/', '0641966888', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.google-plus.com/', 'https://www.linkedin.com/', '2018-05-26 05:04:48', '2018-05-26 05:04:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `skills_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `name`, `level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'HTML', '85', '2018-05-23 16:46:44', '2018-05-23 16:46:44', NULL),
(2, 1, 'PHP', '70', '2018-05-23 16:47:00', '2018-05-23 16:47:00', NULL),
(3, 1, 'CSS', '49', '2018-05-23 16:47:15', '2018-05-23 16:47:15', NULL),
(4, 1, 'VueJS', '29', '2018-05-23 16:47:36', '2018-05-23 16:47:49', '2018-05-23 17:47:49'),
(5, 1, 'VueJS', '40', '2018-05-23 16:48:17', '2018-05-23 16:48:17', NULL),
(6, 1, 'SQL', '63', '2018-05-23 16:48:33', '2018-05-23 16:48:44', NULL),
(7, 1, 'Laravel', '60', '2018-05-23 16:49:27', '2018-05-23 16:50:14', NULL),
(8, 5, 'CSS', '44', '2018-05-26 05:18:50', '2018-05-26 05:18:50', NULL),
(9, 5, 'VueJS', '62', '2018-05-26 05:19:06', '2018-05-26 05:19:06', NULL),
(10, 5, 'SQL', '1', '2018-05-26 05:19:16', '2018-05-26 05:19:16', NULL),
(11, 5, 'Laravel', '52', '2018-05-26 05:19:30', '2018-05-26 05:19:30', NULL),
(12, 5, 'HTML', '76', '2018-05-26 05:19:56', '2018-05-26 05:19:56', NULL),
(13, 5, 'AngularJS', '75', '2018-05-26 05:20:33', '2018-05-26 05:20:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ESSANHAJI Candidate', 'essanhajicandidate@gmail.com', '$2y$10$zxBpK/fLqR6OkNU3mWGZ9eEwmsj/ZyfaVYG/qzzxVJt4JztsOn2Ii', 'candidat', '7koZl6bKLg2CmNPxEo5ftbeyafm60Vr01KltphbgI8A3aQt3uGKNCoW3R57D', '2018-05-23 16:35:44', '2018-05-23 16:35:44', NULL),
(2, 'ES SANHAJI Recruteur', 'essanhajirecruteur@gmail.com', '$2y$10$NBih.2YPlVrGCGbFryRlsefScnfu5pvHAVVa0Vrfdv9n2FlkgPgR2', 'recruteur', 'HPFtvXBtjSowydKD4mJRqwsEUbU6bQqnGCZgEN8CJfjOCN7J1usmeckdvojG', '2018-05-26 04:48:45', '2018-05-26 04:48:45', NULL),
(3, 'ESSOUBAKI Recruteur', 'essoubakirecruteur@gmail.com', '$2y$10$BnNc6EfB96oM.OimoZa9leYcTqzDNMXJFB2vBmBk.ZKeYi9UCKAqq', 'recruteur', 'UayIUgFZOvGbXjoFxeEB70FDQIXS3TrnFuFQ8c2cKhSVvr4S8VFElzn9MKJb', '2018-05-26 04:56:51', '2018-05-26 04:56:51', NULL),
(4, 'GANNAOUI Recruteur', 'gannaouirecruteur@gmail.com', '$2y$10$ubIemoEbZvJRqO2qcBfb0u/xNtA4EOlq/R4QRKCC4PVKGRgjUPHly', 'recruteur', 'tE5gZ4im6jbq9nbN18L8pcI6cqjjTzEIcwIqecIHkt4k9APSsLe0gjPRW88x', '2018-05-26 05:02:41', '2018-05-26 05:02:41', NULL),
(5, 'ESOUBAKI Candidat', 'essoubakicandidat@gmail.com', '$2y$10$0nNuxMQreF5QUW6CzHmPSOlh9cA2msF6J6Fw8473l.PXZiX3qXWxq', 'candidat', 'R6tBucPR0s4xpQxs4s8fjuh6PQEq3sa906QA2WTdk5yiE8Yjd6asDCon9v57', '2018-05-26 05:15:31', '2018-05-26 05:15:31', NULL),
(6, 'GANNAOUI Candidat', 'gannaouicandidat@gmail.com', '$2y$10$vk9vZ3GZaetPjdKKV/JBBOrWTOqq/oEkdAf9mSamcj7ScwYYItLem', 'candidat', 'qoP3e3Rto0qxbk1QeCtxLzGL53dYph0ZZ3jTBwl10DGCx1opejFxpWSOihC9', '2018-05-26 05:23:03', '2018-05-26 05:23:03', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
