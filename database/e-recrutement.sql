-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table e-recrutement.candidates
CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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

-- Dumping data for table e-recrutement.candidates: 3 rows
/*!40000 ALTER TABLE `candidates` DISABLE KEYS */;
INSERT INTO `candidates` (`id`, `user_id`, `first_name`, `last_name`, `civility`, `birthdate`, `picture`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 'ES SANHAJI', 'Candidate', 'Homme', '1998-08-30', 'picture/YRD8xTHWoD8m348eAf4RF5SEDCplEMl6T4HkhY7M.jpeg', '2018-05-23 17:37:49', '2018-05-23 17:40:16', NULL),
	(2, 5, 'ESSOUBAKI', 'Candidate', 'Homme', '1986-12-09', 'picture/4hSYA0z22XkRgHQVPXsWVt3vLXP1onq6qlTsDGs0.jpeg', '2018-05-26 06:18:38', '2018-05-26 06:18:38', NULL),
	(3, 6, 'GANNAOUI', 'Candidate', 'Homme', '1990-03-02', 'picture/4ohiQUGKfWB7SPZi3ZjkenzjuU55nVAaOCsW0W2b.jpeg', '2018-05-26 06:27:16', '2018-05-26 06:27:16', NULL);
/*!40000 ALTER TABLE `candidates` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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

-- Dumping data for table e-recrutement.contacts: 0 rows
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.cvs
CREATE TABLE IF NOT EXISTS `cvs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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

-- Dumping data for table e-recrutement.cvs: 3 rows
/*!40000 ALTER TABLE `cvs` DISABLE KEYS */;
INSERT INTO `cvs` (`id`, `user_id`, `title`, `facebook`, `insagram`, `twitter`, `google_plus`, `linkedin`, `address`, `salary`, `age`, `active`, `phone_number`, `email`, `experience`, `etude`, `about_me`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 'Developpeur Web', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.google-plus.com/', 'https://www.linkedin.com/', '33 Rue de Sebta, Casablanca 20360', 3500, 20, 'true', '0641966888', 'essanhajicandidate@gmail.com', 'Moins de 1 an', 'Bac+2', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-05-23 17:37:49', '2018-05-26 05:35:09', NULL),
	(2, 5, 'Developpeur Personnel', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.google-plus.com/', 'https://www.linkedin.com/', '33 Rue de Sebta, Casablanca 20360', 6548, 28, 'true', '0641966888', 'essoubakicandidat@gmail.com', 'De 3 à 5 ans', 'Bac+4', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-05-26 06:18:38', '2018-05-26 06:18:38', NULL),
	(3, 6, 'Developpeur Mobile', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.google-plus.com/', 'https://www.linkedin.com/', '33 Rue de Sebta, Casablanca 20360', 56468, 28, 'true', '0641966888', 'gannaouicandidat@gmail.com', 'Plus de 20 ans', 'Bac+6 et plus', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-05-26 06:27:16', '2018-05-26 06:27:16', NULL);
/*!40000 ALTER TABLE `cvs` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.educations
CREATE TABLE IF NOT EXISTS `educations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e-recrutement.educations: 6 rows
/*!40000 ALTER TABLE `educations` DISABLE KEYS */;
INSERT INTO `educations` (`id`, `user_id`, `start_date`, `end_date`, `diploma`, `department`, `university`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, '2017-12-06', '2018-05-15', 'Master', 'Informatique', 'Cadi Ayyad', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-05-26 05:36:48', '2018-05-26 05:36:48', NULL),
	(2, 1, '2017-07-02', '2018-05-28', 'DUT', 'Management', 'Cadi Ayyad', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-05-26 05:39:25', '2019-06-16 21:57:19', NULL),
	(3, 5, '2019-06-16', '2019-06-11', 'Master', 'Informatique', 'Cadi Ayyad', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2019-06-16 21:41:16', '2019-06-16 21:41:16', NULL),
	(4, 5, '2019-06-16', '2019-06-16', 'Licence', 'Informatique', 'Cadi Ayyad', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2019-06-16 21:42:17', '2019-06-16 21:42:17', NULL),
	(5, 6, '2019-05-30', '2019-06-20', 'Master', 'Informatique', 'Cadi Ayyad', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2019-06-16 21:51:21', '2019-06-16 21:51:21', NULL),
	(6, 6, '2019-07-03', '2019-06-18', 'DUT', 'Management', 'EST ESSAOUIRA', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2019-06-16 21:51:57', '2019-06-16 21:51:57', NULL);
/*!40000 ALTER TABLE `educations` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.experiences
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e-recrutement.experiences: 6 rows
/*!40000 ALTER TABLE `experiences` DISABLE KEYS */;
INSERT INTO `experiences` (`id`, `user_id`, `title`, `speciality`, `start_date`, `end_date`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 'Stage en JEE', 'Informatique', '2018-05-06', '2018-05-02', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-05-26 05:40:26', '2018-05-26 05:40:26', NULL),
	(2, 1, 'Stage en JEE', 'Informatique', '2018-01-07', '2018-05-04', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-05-26 05:42:04', '2018-05-26 05:42:04', NULL),
	(3, 5, 'Developpeur Web', 'Informatique', '2019-06-16', '2019-06-16', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2019-06-16 21:43:10', '2019-06-16 21:43:10', NULL),
	(4, 5, 'My Sample Post Lorem', 'Management', '2019-06-18', '2019-05-27', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2019-06-16 21:43:41', '2019-06-16 21:43:41', NULL),
	(5, 6, 'UI-UX Web Design, Graphic Design', 'Design', '2019-07-04', '2019-06-17', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2019-06-16 21:52:38', '2019-06-16 21:52:38', NULL),
	(6, 6, 'Photoshop - Web Deisgn', 'Deisgn', '2019-06-26', '2019-06-10', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2019-06-16 21:53:05', '2019-06-16 21:53:05', NULL);
/*!40000 ALTER TABLE `experiences` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.favorites
CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `favorite` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `favorites_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e-recrutement.favorites: 9 rows
/*!40000 ALTER TABLE `favorites` DISABLE KEYS */;
INSERT INTO `favorites` (`id`, `user_id`, `favorite`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 7, '2018-05-26 06:09:53', '2018-05-26 06:09:53', NULL),
	(2, 1, 5, '2018-05-26 06:11:07', '2018-05-26 06:11:07', NULL),
	(3, 1, 4, '2018-05-26 06:11:27', '2018-05-26 06:11:27', NULL),
	(4, 1, 1, '2018-05-26 06:11:45', '2018-05-26 06:11:45', NULL),
	(5, 1, 3, '2018-05-26 06:12:16', '2018-05-26 06:12:16', NULL),
	(6, 6, 1, '2018-05-26 06:28:29', '2018-05-26 06:28:29', NULL),
	(7, 2, 6, '2018-05-26 07:02:23', '2018-05-26 07:02:23', NULL),
	(8, 2, 5, '2018-05-26 07:02:45', '2018-05-26 07:02:45', NULL),
	(9, 5, 10, '2019-06-16 21:46:31', '2019-06-16 21:46:31', NULL);
/*!40000 ALTER TABLE `favorites` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.files
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cv_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `files_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e-recrutement.files: 0 rows
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e-recrutement.jobs: 10 rows
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` (`id`, `user_id`, `title`, `number_post`, `city`, `type_contract`, `experience`, `salary_min`, `salary_max`, `categorie`, `description_post`, `key_requirement`, `our_offer`, `end_date`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 2, 'Stage en JEE', 3, 'Errachidia', 'CUI', 'Moins de 1 an', 3000, 1000, 'Design & Art', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-10-20', 'true', '2018-05-26 05:51:39', '2018-05-26 05:51:39', NULL),
	(2, 2, 'Stage en php', 7, 'Casablanca', 'CDD', 'De 1 à 3 ans', 1000, 4000, 'Comptabilité', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-10-19', 'true', '2018-05-26 05:52:44', '2018-05-26 05:52:44', NULL),
	(3, 2, 'Recrutement en EMPSI', 7, 'Ifrane', 'CTT', 'De 3 à 5 ans', 400, 500, 'Assurance', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-11-17', 'true', '2018-05-26 05:54:21', '2018-05-26 05:54:21', NULL),
	(4, 3, 'Recrut MAROC', 78, 'Asni', 'CDI', 'Moins de 1 an', 580, 700, 'Assurance', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-08-18', 'true', '2018-05-26 05:59:10', '2018-05-26 05:59:10', NULL),
	(5, 3, 'Stage en MAXI WORL', 78, 'Fès', 'CDD', 'De 3 à 5 ans', 878, 900, 'Management', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-09-22', 'true', '2018-05-26 06:00:38', '2018-05-26 06:00:38', NULL),
	(6, 4, 'Stage Android', 54, 'Azrou', 'CIE', 'De 1 à 3 ans', 998, 8584, 'Marketing', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-11-03', 'true', '2018-05-26 06:06:34', '2018-05-26 06:06:34', NULL),
	(7, 4, 'Stage en javaFX', 54, 'Al-Hoceima', 'CDI', 'Moins de 1 an', 879, 905, 'Medicine', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2018-06-02', 'true', '2018-05-26 06:07:52', '2018-05-26 06:07:52', NULL),
	(8, 7, 'Developpeur Web', 4, 'Al-Hoceima', 'CTT', 'Moins de 1 an', 454, 54545, 'Design & Art', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2019-06-16', 'true', '2019-06-16 19:57:57', '2019-06-16 19:57:57', NULL),
	(9, 8, 'UI-UX Web Design, Graphic Design', 4, 'Marrakech', 'CUI', 'De 10 à 20 ans', 546, 57485, 'Management', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2019-06-16', 'true', '2019-06-16 20:19:25', '2019-06-16 20:19:25', NULL),
	(10, 8, 'Photoshop - Web Deisgn', 452, 'Ifrane', 'CTT', 'De 3 à 5 ans', 548, 74859, 'Marketing', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', '2019-06-16', 'true', '2019-06-16 20:29:58', '2019-06-16 20:29:58', NULL);
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.languages
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `language_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `languages_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e-recrutement.languages: 12 rows
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` (`id`, `user_id`, `language_name`, `level`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 'Arabe', 'MATERNEL', '2018-05-26 05:42:47', '2018-05-26 05:42:47', NULL),
	(2, 1, 'English', 'TECHNIQUE', '2018-05-26 05:43:55', '2018-05-26 05:43:55', NULL),
	(3, 1, 'Francais', 'FAIBLE', '2018-05-26 05:44:16', '2018-05-26 05:44:16', NULL),
	(4, 1, 'Tamaghirt', 'MATERNEL', '2018-05-26 05:44:47', '2018-05-26 05:44:47', NULL),
	(5, 5, 'Arabe', 'MATERNEL', '2019-06-16 21:44:17', '2019-06-16 21:44:17', NULL),
	(6, 5, 'English', 'TECHNIQUE', '2019-06-16 21:45:02', '2019-06-16 21:45:02', NULL),
	(7, 5, 'Francais', 'FAIBLE', '2019-06-16 21:45:17', '2019-06-16 21:45:17', NULL),
	(8, 5, 'Tamaghirt', 'MATERNEL', '2019-06-16 21:45:33', '2019-06-16 21:45:33', NULL),
	(9, 6, 'Arabe', 'MATERNEL', '2019-06-16 21:53:42', '2019-06-16 21:53:42', NULL),
	(10, 6, 'English', 'TECHNIQUE', '2019-06-16 21:55:06', '2019-06-16 21:55:06', NULL),
	(11, 6, 'Francais', 'FAIBLE', '2019-06-16 21:55:19', '2019-06-16 21:55:19', NULL),
	(12, 6, 'Tamaghirt', 'MATERNEL', '2019-06-16 21:55:33', '2019-06-16 21:55:33', NULL);
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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

-- Dumping data for table e-recrutement.messages: 3 rows
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`id`, `user_id`, `job_id`, `postule_id`, `active`, `message`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 2, 3, 5, 'true', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'recruteur', '2018-05-26 07:03:43', '2018-05-26 07:03:43', NULL),
	(2, 2, 1, 4, 'true', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'recruteur', '2018-05-26 07:04:02', '2018-05-26 07:04:02', NULL),
	(3, 2, 3, 5, 'true', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'recruteur', '2018-05-26 07:04:22', '2018-05-26 07:04:22', NULL);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e-recrutement.migrations: 15 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e-recrutement.password_resets: 0 rows
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.postules
CREATE TABLE IF NOT EXISTS `postules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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

-- Dumping data for table e-recrutement.postules: 4 rows
/*!40000 ALTER TABLE `postules` DISABLE KEYS */;
INSERT INTO `postules` (`id`, `user_id`, `postule`, `attachment`, `type`, `message`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(2, 1, 5, 1, 'page', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'true', '2018-05-26 06:11:18', '2018-05-26 06:11:18', NULL),
	(3, 1, 4, 1, 'page', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'true', '2018-05-26 06:11:34', '2018-05-26 06:11:34', NULL),
	(4, 1, 1, 1, 'page', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'true', '2018-05-26 06:11:54', '2018-05-26 06:11:54', NULL),
	(6, 6, 1, 6, 'page', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'true', '2018-05-26 06:28:26', '2018-05-26 06:28:26', NULL);
/*!40000 ALTER TABLE `postules` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.recruiters
CREATE TABLE IF NOT EXISTS `recruiters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e-recrutement.recruiters: 5 rows
/*!40000 ALTER TABLE `recruiters` DISABLE KEYS */;
INSERT INTO `recruiters` (`id`, `user_id`, `logo`, `name_entreprise`, `description_entreprise`, `speciality`, `address`, `email`, `website`, `phone_number`, `facebook`, `insagram`, `twitter`, `google_plus`, `linkedin`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 2, 'logo/Cwg41YhRUcewwMnuOPtq8CWXiazOISJ9ITuiT1Qk.png', 'EMSI consulting', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Comptabilité', '33 Rue de Sebta, Casablanca 20360', 'empsiconsulting@gmail.com', 'http://www.empsi.ma/', '0641966888', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.google-plus.com/', 'https://www.linkedin.com/', '2018-05-26 05:50:38', '2018-05-26 05:50:38', NULL),
	(2, 3, 'logo/iKgmtxRJWGwIwEcWUoI2XjS60OtFhjLbfw6knDpx.png', 'MAXI world', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Développement', '33 Rue de Sebta, Casablanca 20360', 'essoubakirecruteur@gmail.com', 'http://www.maxi.ma/', '0641966888', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.google-plus.com/', 'https://www.linkedin.com/', '2018-05-26 05:57:54', '2018-05-26 05:57:54', NULL),
	(3, 4, 'logo/UYqqHT2G3ahN0OdGfwieODiBSslBDjPJ6aoeMZZj.png', 'TEMPO Recrutement', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Bancaire', '33 Rue de Sebta, Casablanca 20360', 'tempo@gmail.com', 'http://www.tempo.ma/', '0641966888', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.google-plus.com/', 'https://www.linkedin.com/', '2018-05-26 06:04:48', '2018-05-26 06:04:48', NULL),
	(4, 7, 'logo/MQwp5QM0v5W5FMtJchfAnAPRv46NGYfuXJl1RdW2.png', 'Sanhoj', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Design & art', '33 Rue de Sebta, Casablanca 20360', 't.imad@gmail.com', 'https://github.com/essanhaji', '0641966888', 'https://www.google-plus.com/', 'https://www.google-plus.com/', 'https://www.google-plus.com/', 'https://www.google-plus.com/', 'https://www.google-plus.com/', '2019-06-16 19:56:33', '2019-06-16 19:56:33', NULL),
	(5, 8, 'logo/4oC0By8KOql1EoZvdEnp5kNXX0zUYEQ060yBJDOB.png', 'HelloWorld', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facere maxime eligendi neque eveniet? Veritatis atque, exercitationem quia voluptatem repellendus laudantium vitae modi beatae adipisci? Iure soluta quo facere consectetur deserunt, magnam, sunt tenetur fuga asperiores repudiandae magni ea? Perferendis accusantium incidunt veniam enim, laborum aperiam veritatis reprehenderit illo eos.', 'Assurance', '33 Rue de Sebta, Casablanca 20360', 'r.youness@gmail.com', 'https://github.com/essanhaji', '0641966888', 'https://www.google-plus.com/', 'https://www.google-plus.com/', 'https://www.google-plus.com/', 'https://www.google-plus.com/', 'https://www.google-plus.com/', '2019-06-16 20:18:38', '2019-06-16 20:18:38', NULL);
/*!40000 ALTER TABLE `recruiters` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `skills_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e-recrutement.skills: 20 rows
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` (`id`, `user_id`, `name`, `level`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 'HTML', '85', '2018-05-23 17:46:44', '2018-05-23 17:46:44', NULL),
	(2, 1, 'PHP', '70', '2018-05-23 17:47:00', '2018-05-23 17:47:00', NULL),
	(3, 1, 'CSS', '49', '2018-05-23 17:47:15', '2018-05-23 17:47:15', NULL),
	(4, 1, 'VueJS', '29', '2018-05-23 17:47:36', '2018-05-23 17:47:49', '2018-05-23 17:47:49'),
	(5, 1, 'VueJS', '40', '2018-05-23 17:48:17', '2018-05-23 17:48:17', NULL),
	(6, 1, 'SQL', '63', '2018-05-23 17:48:33', '2018-05-23 17:48:44', NULL),
	(7, 1, 'Laravel', '60', '2018-05-23 17:49:27', '2019-06-16 20:35:00', '2019-06-16 20:35:00'),
	(8, 5, 'CSS', '44', '2018-05-26 06:18:50', '2018-05-26 06:18:50', NULL),
	(9, 5, 'VueJS', '62', '2018-05-26 06:19:06', '2018-05-26 06:19:06', NULL),
	(10, 5, 'SQL', '1', '2018-05-26 06:19:16', '2018-05-26 06:19:16', NULL),
	(11, 5, 'Laravel', '52', '2018-05-26 06:19:30', '2018-05-26 06:19:30', NULL),
	(12, 5, 'HTML', '76', '2018-05-26 06:19:56', '2018-05-26 06:19:56', NULL),
	(13, 5, 'AngularJS', '75', '2018-05-26 06:20:33', '2018-05-26 06:20:56', NULL),
	(14, 1, 'Laravel', '67', '2019-06-16 20:35:18', '2019-06-16 20:35:18', NULL),
	(15, 6, 'Laravel', '39', '2019-06-16 21:48:28', '2019-06-16 21:48:28', NULL),
	(16, 6, 'VueJs', '92', '2019-06-16 21:48:57', '2019-06-16 21:48:57', NULL),
	(17, 6, 'Angular', '51', '2019-06-16 21:49:14', '2019-06-16 21:49:14', NULL),
	(18, 6, 'PHP', '83', '2019-06-16 21:49:34', '2019-06-16 21:49:34', NULL),
	(19, 6, 'HTML', '59', '2019-06-16 21:49:53', '2019-06-16 21:49:53', NULL),
	(20, 6, 'CSS', '66', '2019-06-16 21:50:16', '2019-06-16 21:50:16', NULL);
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;

-- Dumping structure for table e-recrutement.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table e-recrutement.users: 8 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'ESSANHAJI Candidate', 'essanhajicandidate@gmail.com', '$2y$10$zYUFk0GIs/uvyRB5sipQleSlfF.uh3ZjsSvFdSCbfHyb2C9g.Ohqq', 'candidat', '5L6ckFxtLdaSbXmFrhc70iiAfIlIf5jiRBq4XOnjxkewBWagoKQYF4G7hzkm', '2018-05-23 17:35:44', '2018-05-23 17:35:44', NULL),
	(2, 'ES SANHAJI Recruteur', 'essanhajirecruteur@gmail.com', '$2y$10$zYUFk0GIs/uvyRB5sipQleSlfF.uh3ZjsSvFdSCbfHyb2C9g.Ohqq', 'recruteur', 'HPFtvXBtjSowydKD4mJRqwsEUbU6bQqnGCZgEN8CJfjOCN7J1usmeckdvojG', '2018-05-26 05:48:45', '2018-05-26 05:48:45', NULL),
	(3, 'ESSOUBAKI Recruteur', 'essoubakirecruteur@gmail.com', '$2y$10$zYUFk0GIs/uvyRB5sipQleSlfF.uh3ZjsSvFdSCbfHyb2C9g.Ohqq', 'recruteur', 'UayIUgFZOvGbXjoFxeEB70FDQIXS3TrnFuFQ8c2cKhSVvr4S8VFElzn9MKJb', '2018-05-26 05:56:51', '2018-05-26 05:56:51', NULL),
	(4, 'GANNAOUI Recruteur', 'gannaouirecruteur@gmail.com', '$2y$10$zYUFk0GIs/uvyRB5sipQleSlfF.uh3ZjsSvFdSCbfHyb2C9g.Ohqq', 'recruteur', 'tE5gZ4im6jbq9nbN18L8pcI6cqjjTzEIcwIqecIHkt4k9APSsLe0gjPRW88x', '2018-05-26 06:02:41', '2018-05-26 06:02:41', NULL),
	(5, 'ESOUBAKI Candidat', 'essoubakicandidat@gmail.com', '$2y$10$zYUFk0GIs/uvyRB5sipQleSlfF.uh3ZjsSvFdSCbfHyb2C9g.Ohqq', 'candidat', 'NMlpiuObZcpjnF8OSHIRyN8pmBUhinWLdZd4xcDpkL3kQVbXEsb1ZfFaSR0H', '2018-05-26 06:15:31', '2018-05-26 06:15:31', NULL),
	(6, 'GANNAOUI Candidat', 'gannaouicandidat@gmail.com', '$2y$10$zYUFk0GIs/uvyRB5sipQleSlfF.uh3ZjsSvFdSCbfHyb2C9g.Ohqq', 'candidat', 'MfYHkhzhfHOQuOEZD6taIGPkM76VJngSY0Ymb4iiMo0pXvr40zgJip8nNwHn', '2018-05-26 06:23:03', '2018-05-26 06:23:03', NULL),
	(7, 'Imad Recruteur', 'r.imad@gmail.com', '$2y$10$zYUFk0GIs/uvyRB5sipQleSlfF.uh3ZjsSvFdSCbfHyb2C9g.Ohqq', 'recruteur', 'PFCeKh1kO9BV9CfxPR3PsN9BSJhvAeSwUEhfAFJsEXoaYiIN9IwDCLp9StRY', '2019-06-16 19:54:37', '2019-06-16 19:54:37', NULL),
	(8, 'Youness Mate', 'r.youness@gmail.com', '$2y$10$zYUFk0GIs/uvyRB5sipQleSlfF.uh3ZjsSvFdSCbfHyb2C9g.Ohqq', 'recruteur', 'CBUqwwHb1dIkCVC4pHg32YPge1DuRp3kIayc654vmK19WQnUEG58FJ7k4q9m', '2019-06-16 20:17:44', '2019-06-16 20:17:44', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
