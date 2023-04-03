-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for wonders
CREATE DATABASE IF NOT EXISTS `wonders` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `wonders`;

-- Dumping structure for table wonders.accounts
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table wonders.accounts: ~0 rows (approximately)
INSERT INTO `accounts` (`id`, `username`, `user_password`) VALUES
	(1, 'admin', 'admin');

-- Dumping structure for table wonders.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wonders.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table wonders.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table wonders.images: ~4 rows (approximately)
INSERT INTO `images` (`id`, `title`, `image`, `about`) VALUES
	(40, 'Mount Everest', 'db_image/6410008bc2e916.99754346.jpg', 'Mount Everest is a peak in the Himalaya mountain range. It is located between Nepal and Tibet, an autonomous region of China. At 8,849 meters (29,032 feet), it is considered the tallest point on Earth. In the nineteenth century, the mountain was named after George Everest, a former Surveyor General of India. The Tibetan name is Chomolungma, which means “Mother Goddess of the World.” The Nepali name is Sagarmatha, which has various meanings.'),
	(46, 'Mt. Mayon', 'db_image/641009759e94c3.33202822.jpg', 'Mayon, located in the Philippines, is a highly active stratovolcano with recorded historical eruptions dating back to 1616. The most recent eruptive episode began in early January 2018 that consisted of phreatic explosions, steam-and-ash plumes, lava fountaining, and pyroclastic flows (BGVN 43:04). The previous report noted small but distinct thermal anomalies, gas-and-steam plumes, and slight inflation (BGVN 44:05) that continued to occur from May into mid-October 2019. '),
	(47, 'Kangchenjunga', 'db_image/landscape-shot-beautiful-valley-surrounded-by-huge-mountains-with-snowy-peaks.jpg', 'Kanchenjunga, also spelled Kangchenjunga or Kinchinjunga, Nepali Kumbhkaran Lungur, world’s third highest mountain, with an elevation of 28,169 feet (8,586 metres). It is situated in the eastern Himalayas on the border between Sikkim state, northeastern India, and eastern Nepal, 46 miles (74 km) north-northwest of Darjiling, Sikkim. The mountain is part of the Great Himalaya Range. The Kanchenjunga massif is in the form of a gigantic cross, the arms of which extend north, south, east, and west.'),
	(48, 'Mt. Manasluu', 'db_image/6412ac9bd44260.56831754.jpg', 'Manaslu (also known as Kutang) is the eighth highest mountain in the world. It is located forty miles east of Annapurna and dominates the Gurkha massif. The mountain\'s long ridges and valley glaciers offer feasible approaches from all directions, and it culminates in a peak that towers steeply above its surrounding landscape, and is a dominant feature when seen from afar'),
	(52, 'ada321dfad', 'db_image/flat-lay-yellow-luggage-with-copy-space.jpg', 'da');

-- Dumping structure for table wonders.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wonders.migrations: ~6 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1wonders, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_03_22_070738_create_upimages_table', 2),
	(6, '2023_03_22_071738_create_upimages_table', 3),
	(7, '2023_03_28_013545_adds_soft_deletes_to_upimages_table', 4);

-- Dumping structure for table wonders.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wonders.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table wonders.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wonders.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table wonders.upimages
CREATE TABLE IF NOT EXISTS `upimages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wonders.upimages: ~38 rows (approximately)
INSERT INTO `upimages` (`id`, `title`, `about`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679473139flat-lay-yellow-luggage-with-copy-space.jpg', '2023-03-22 00:19:00', '2023-03-27 18:14:29', '2023-03-27 18:14:29'),
	(2, 'picture2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679473236happy-couple-tourist-hand-pointing-copy-space-with-baggage-going-travel-holidays-removebg-preview.jpg', '2023-03-22 00:20:36', '2023-03-27 18:19:58', '2023-03-27 18:19:58'),
	(3, 'picture3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679473252happy-couple-tourist-hand-pointing-copy-space-with-baggage-going-travel-holidays-removebg-preview.jpg', '2023-03-22 00:20:52', '2023-03-27 18:20:59', '2023-03-27 18:20:59'),
	(4, 'picture3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679473335flat-lay-yellow-luggage-with-copy-space.jpg', '2023-03-22 00:22:15', '2023-03-27 18:20:13', '2023-03-27 18:20:13'),
	(5, 'picture4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679473469flat-lay-yellow-luggage-with-copy-space.jpg', '2023-03-22 00:24:29', '2023-03-27 18:21:19', '2023-03-27 18:21:19'),
	(6, 'picture5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679473642flat-lay-yellow-luggage-with-copy-space.jpg', '2023-03-22 00:27:22', '2023-03-27 18:21:55', '2023-03-27 18:21:55'),
	(7, 'picture6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679474129flat-lay-yellow-luggage-with-copy-space.jpg', '2023-03-22 00:35:29', '2023-03-27 18:26:41', '2023-03-27 18:26:41'),
	(8, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679474156mountainous-landscape-with-fog.jpg', '2023-03-22 00:35:56', '2023-03-27 18:23:25', '2023-03-27 18:23:25'),
	(9, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679474208flow.png', '2023-03-22 00:36:49', '2023-03-27 18:30:26', '2023-03-27 18:30:26'),
	(10, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679474348flow.png', '2023-03-22 00:39:08', '2023-03-27 19:30:19', '2023-03-27 19:30:19'),
	(11, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679474811flat-lay-yellow-luggage-with-copy-space.jpg', '2023-03-22 00:46:51', '2023-03-27 18:40:30', '2023-03-27 18:40:30'),
	(12, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679474944happy-couple-tourist-hand-pointing-copy-space-with-baggage-going-travel-holidays_(2)-transformed.png', '2023-03-22 00:49:04', '2023-03-27 19:34:57', '2023-03-27 19:34:57'),
	(14, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679475007man-woman-dressed-travel-wear-glasses-take-pictures (1).jpg', '2023-03-22 00:50:07', '2023-03-27 18:29:28', '2023-03-27 18:29:28'),
	(15, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679475099man-woman-dressed-travel-wear-glasses-take-pictures (1).jpg', '2023-03-22 00:51:39', '2023-03-27 19:29:50', '2023-03-27 19:29:50'),
	(17, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679475349happy-couple-tourist-hand-pointing-copy-space-with-baggage-going-travel-holidays-removebg-preview.jpg', '2023-03-22 00:55:49', '2023-03-27 19:35:31', '2023-03-27 19:35:31'),
	(18, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679475410happy-couple-tourist-hand-pointing-copy-space-with-baggage-going-travel-holidays-removebg-preview.jpg', '2023-03-22 00:56:51', '2023-03-27 19:37:42', '2023-03-27 19:37:42'),
	(19, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679475764landscape-shot-beautiful-valley-surrounded-by-huge-mountains-with-snowy-peaks.jpg', '2023-03-22 01:02:44', '2023-03-27 19:38:04', '2023-03-27 19:38:04'),
	(20, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679475849image_2023_03_07T08_26_00_441Z.png', '2023-03-22 01:04:09', '2023-03-27 19:19:43', '2023-03-27 19:19:43'),
	(21, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679476128happy-couple-tourist-hand-pointing-copy-space-with-baggage-going-travel-holidays-removebg-preview.jpg', '2023-03-22 01:08:48', '2023-03-27 19:36:12', '2023-03-27 19:36:12'),
	(22, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679476145Manaslu.jpg', '2023-03-22 01:09:05', '2023-03-27 18:35:32', '2023-03-27 18:35:32'),
	(23, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679476524happy-couple-tourist-hand-pointing-copy-space-with-baggage-going-travel-holidays-removebg-preview.jpg', '2023-03-22 01:15:24', '2023-03-28 18:21:17', '2023-03-28 18:21:17'),
	(24, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679535665flat-lay-yellow-luggage-with-copy-space.jpg', '2023-03-22 17:41:05', '2023-03-27 19:32:20', '2023-03-27 19:32:20'),
	(25, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679535771flat-lay-yellow-luggage-with-copy-space.jpg', '2023-03-22 17:42:51', '2023-03-27 19:31:14', '2023-03-27 19:31:14'),
	(26, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679535795flat-lay-yellow-luggage-with-copy-space.jpg', '2023-03-22 17:43:15', '2023-03-27 19:24:52', '2023-03-27 19:24:52'),
	(27, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679535843flat-lay-yellow-luggage-with-copy-space.jpg', '2023-03-22 17:44:03', '2023-03-28 18:21:23', '2023-03-28 18:21:23'),
	(28, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679535849flat-lay-yellow-luggage-with-copy-space.jpg', '2023-03-22 17:44:09', '2023-03-27 18:49:09', '2023-03-27 18:49:09'),
	(29, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679536160flat-lay-yellow-luggage-with-copy-space.jpg', '2023-03-22 17:49:20', '2023-03-27 19:36:30', '2023-03-27 19:36:30'),
	(30, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679536355happy-couple-tourist-hand-pointing-copy-space-with-baggage-going-travel-holidays-removebg-preview.jpg', '2023-03-22 17:52:35', '2023-03-28 18:21:26', '2023-03-28 18:21:26'),
	(31, 'picture1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Gravida neque convallis a cras semper auctor neque.', '/storage/images/1679543462mountainous-landscape-with-fog.jpg', '2023-03-22 19:51:02', '2023-03-28 18:21:29', '2023-03-28 18:21:29'),
	(32, 'Bundok ni maria', 'sheeshss', '/storage/images/1679636547landscape-shot-beautiful-valley-surrounded-by-huge-mountains-with-snowy-peaks.jpg', '2023-03-23 21:42:27', '2023-03-28 18:21:50', '2023-03-28 18:21:50'),
	(33, 'moon', 'moon', '/storage/images/167988240324770135_2202_w026_n002_1423b_p1_1423.jpg', '2023-03-26 18:00:03', '2023-03-27 18:47:35', '2023-03-27 18:47:35'),
	(34, 'moon', 'moon', '/storage/images/167997475524770135_2202_w026_n002_1423b_p1_1423.jpg', '2023-03-27 19:39:16', '2023-03-28 18:22:50', '2023-03-28 18:22:50'),
	(35, 'kalabaw', 'opo', '/storage/images/1679995337wallpaper.jpg', '2023-03-28 01:22:17', '2023-03-28 18:22:28', '2023-03-28 18:22:28'),
	(36, 'yehey', 'masaya sila', '/storage/images/1680060365happy-couple-tourist-hand-pointing-copy-space-with-baggage-going-travel-holidays-removebg-preview.jpg', '2023-03-28 17:42:09', '2023-03-28 19:28:47', '2023-03-28 19:28:47'),
	(37, 'Babae nag kakaper', 'babaeng may sumbreronamo ksadjlas,das\'das\'\\d\'\\asd', '/storage/images/1680054155young-woman-with-cup-coffee-map-background-mountains.jpg', '2023-03-28 17:42:35', '2023-03-29 02:11:47', '2023-03-29 02:11:47'),
	(38, '321312', 'si fred', '/storage/images/1680054423IMG_20230217_140244_2.jpg', '2023-03-28 17:47:03', '2023-03-29 17:22:45', '2023-03-29 17:22:45'),
	(39, 'bear', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '/storage/images/1680161586fb.png', '2023-03-28 18:23:47', '2023-03-30 00:07:49', '2023-03-30 00:07:49'),
	(40, 'cave', 'cave', '/storage/images/1680071998Manaslu.jpg', '2023-03-28 22:39:58', '2023-03-28 22:39:58', '2023-03-29 10:12:57'),
	(41, 'Saud Beach, Philippines', 'If you\'re searching for Southeast Asian beach bliss, super-mellow Saud Beach on the island of Luzon is a sure thing. Its white sand pitches gradually into the clear-as-glass water, like a real-world example of a zero-entry swimming pool. Swim in the peaceful waves, lunch under a thatch-roof cabana under the palms, or hire an outrigger for excursions on the water.', '/storage/images/1680484847beach-surrounded-by-sea-greenery-sunlight-blue-sky-praslin-seychelles.jpg', '2023-03-28 22:40:40', '2023-04-02 17:20:47', NULL),
	(42, 'sampo', 'dsadasdasdw2312312', '/storage/images/1680139394happy-couple-tourist-hand-pointing-copy-space-with-baggage-going-travel-holidays (2).jpg', '2023-03-29 17:23:14', '2023-03-30 00:22:43', '2023-03-30 00:22:43'),
	(43, 'dsada321', '332131231', '/storage/images/1680160265d6.jpg', '2023-03-29 23:11:06', '2023-03-30 00:39:40', '2023-03-30 00:39:40'),
	(44, 'hehehe', 'i love you', '/storage/images/1680163045gall.jpg', '2023-03-29 23:57:25', '2023-03-30 00:21:34', '2023-03-30 00:21:34'),
	(45, 'lkdsadklasd', 'sa\';d\'asd\'as;d\'as', '/storage/images/1680165858read.jpg', '2023-03-30 00:44:18', '2023-03-30 00:44:22', '2023-03-30 00:44:22'),
	(46, 'Elafonissi Beach, Greece', 'Crete\'s Elafonissi Beach\'s immense popularity comes from its pretty pinkish sand, warm lagoon-like waters, and very wild feel. Elafonissi Beach is actually an island, separated from the mainland by the shallow water and sandbars that only disappear under about three feet of water at high tide. Facil', '/storage/images/1680484882alania-costline-sea-view.jpg', '2023-04-02 17:21:22', '2023-04-02 17:21:22', NULL),
	(47, 'Hanalei Bay, Hawaii', 'Long before Hollywood put it on the tourist map (first with "South Pacific" in 1958, then "The Descendants" half a century later), Kauai\'s Hanalei Bay attracted locals for its near-mystical beauty. Its beaches — Wai\'oli, Hanalei Pavilion, and Black Pot — are framed by jade-colored mountains.', '/storage/images/1680484940colorful-cloud-sunset-beach-st-john-virgin-island.jpg', '2023-04-02 17:22:20', '2023-04-02 17:33:06', NULL),
	(48, 'Swiss Alps – The Magical Mountains', 'The dramatic peaks of Dammastock and the snow-clad majestic summit of Matterhorn have always amazed and left hikers spellbound with its astonishing beauty. Matterhorn is 10th tallest amongst the several mountains of the world with a distinct feature of a well-defined pyramid shape. It is one of the', '/storage/images/1680485031vertical-shot-distorted-image-mountain-circular-frame.jpg', '2023-04-02 17:23:51', '2023-04-02 17:23:51', NULL),
	(49, 'Mount Logan – The Snowy Paradise', 'Mount Logan is the tallest mountain in Canada, second highest summit in North America and has the largest circumference of the base when compared to the several mountain ranges of the world map. It is a part of Kluane National Park and Reserve. Hikers here can have an adventurous experiences of moun', '/storage/images/1680485097el-capitan-morning-light.jpg', '2023-04-02 17:24:57', '2023-04-02 17:24:57', NULL),
	(50, 'Mount Fuji – The Volcanic Beauty', 'Mount Fuji is nearly 12,400 ft tall and is Japan’s No.1 tourist attraction. The breathtaking views here never fail to impress anybody who comes here. This is one of the most massive volcanic mountains in the world, which is active even now and majestically sits over a junction of three tectonic plat', '/storage/images/1680485153autumn-season-mountain-fuji-kawaguchiko-lake-japan.jpg', '2023-04-02 17:25:53', '2023-04-02 17:25:53', NULL),
	(51, 'The Blue Grotto in Capri, Italy', 'The Blue Grotto is the emblem of Capri. It is a sea cave found on the coast of the island and is a well-known spot to all who visit the area. This cave is unique for its brilliant blue glow which comes from two sources: the entrance to the cave (a small opening where only one rowboat can enter at a', '/storage/images/1680485216ocean-water-rocky-cave.jpg', '2023-04-02 17:26:56', '2023-04-02 17:26:56', NULL),
	(52, 'Cave of the Crystals in Chihuahua, Mexico', 'The Cave of the Crystals, on the other hand, was discovered in 2000 and contains the largest natural selenite crystals ever found. The biggest crystal found here was 12 meters in length and 4 meters in diameter! As opposed to the Cave of Swords, the average temperature here is 50-58 degrees Celsius', '/storage/images/1680485293grand-canyon-nature-footage-arizona-usa.jpg', '2023-04-02 17:28:13', '2023-04-02 17:28:13', NULL),
	(53, 'Krubera Cave in Abkhazia, Georgia', 'Krubera cave was discovered in 1960 and is the deepest-known cave on Earth, with a depth of over 2196 meters. Krubera cave is also known as the Voronja Cave, which means "cave of the crows" in Russian. This name was used in 1980 by speleologists because of a number of crows nesting at the entrance o', '/storage/images/1680485340boardwalk-system-inside-beautiful-paradise-cave-vietnam.jpg', '2023-04-02 17:29:00', '2023-04-02 17:29:00', NULL),
	(54, 'Fingal\'s Cave in Staffa, Scotland', 'This incredible sea cave is located on the uninhabited island of Staffa in Scotland. The island is of volcanic origin and is famous for its distinctive hexagonal basalt columns, of which Fingal\'s Cave is the most striking example. The cave\'s size, shape, and naturally-arched roof combine with the wa', '/storage/images/1680485439ocean-water-flowing-through-cave-great-wallpapers.jpg', '2023-04-02 17:30:39', '2023-04-02 17:30:39', NULL),
	(55, 'The Grand Canyon', 'Yellowstone\'s Grand Canyon is one of the most iconic sites in the region, providing several stunning vistas as you go along. This almost 40 km long canyon is a large and the most famous canyon in Yellowstone. It is hugely popular among visitors due to its scenic views of the Lower and Upper falls, a', '/storage/images/1680486421sunny-scenery-zion-national-park-located-utah-usa.jpg', '2023-04-02 17:47:01', '2023-04-02 17:47:01', NULL),
	(56, 'Colosseum, Rome', 'This was originally called the Flavian Amphitheatre and was mostly used as public entertainment arena. The Colosseum is one of the most famous attractions in Rome and is where most gladiatorial fights took place. Today, actors in gladiator clothes stand outside the Colosseum, where you can take pict', '/storage/images/1680492607vertical-shot-famous-colosseum-rome-italy-during-sunset.jpg', '2023-04-02 19:30:07', '2023-04-02 19:30:07', NULL);

-- Dumping structure for table wonders.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `username` text COLLATE utf8mb4_unicode_ci,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table wonders.users: ~35 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Reymark', NULL, NULL, '$2y$10$zblnBd3lZmKzfZjhILl26.bGU./W9mw4oBn3FPpXY9u2hp3l3RScq', NULL, '2023-03-20 19:42:52', '2023-03-20 19:42:52'),
	(2, 'asdasd', NULL, NULL, 'dsadasda', NULL, '2023-03-21 17:40:03', '2023-03-21 17:40:03'),
	(3, 'panot', NULL, NULL, 'supot', NULL, '2023-03-21 17:42:00', '2023-03-21 17:42:00'),
	(4, 'Reymarkkk', NULL, NULL, '$2y$10$LbKiLWPIMdw3jtnffvmf9OyE8byYDyRHDvTpvfoDoBwWcjphZc5xO', NULL, '2023-03-21 17:45:49', '2023-03-21 17:45:49'),
	(5, 'dsad', NULL, NULL, '$2y$10$XwTo37tEsvDjgy/hFlu4Pe0ETW8kpj2doEbFugIDSkY5RA66wwFIW', NULL, '2023-03-21 17:53:51', '2023-03-21 17:53:51'),
	(6, 'dsad', NULL, NULL, '$2y$10$sDt5S3k/as4VI3PQsInKb.rUnTAB0UjL/xw5MDbhEQh9hQ.6VqJye', NULL, '2023-03-21 17:53:59', '2023-03-21 17:53:59'),
	(7, 'dsadasdasddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd2132132131312', NULL, NULL, '$2y$10$5BiyxJJVjogwkjm0SzjgXOcbXw.vGHf8Dr1c/0o74qPH4RbTCo7Aa', NULL, '2023-03-21 17:55:24', '2023-03-21 17:55:24'),
	(8, 'Reymark', NULL, NULL, '$2y$10$GE9ut34qMm0eVKdtVF9WI.h1IC7m7JnZ4sNtIkCdYtZT5z7EBZ03O', NULL, '2023-03-21 17:56:36', '2023-03-21 17:56:36'),
	(9, 'asdasd', NULL, NULL, '$2y$10$yqa972uoOwWGil.pBfF7ZOby0p6bff/wji9G43WLn6LX7P0fQ94YC', NULL, '2023-03-21 17:56:56', '2023-03-21 17:56:56'),
	(10, 'Reymark', 'reymark.boquiron123@gmail.com', 'reymarkgen', '$2y$10$NQioq54E5X9JKnFwhdoaPO0oz0p/QOe4QYwCA9VeJ.OLd4bxlufxi', NULL, '2023-03-21 18:08:55', '2023-03-21 18:08:55'),
	(11, 'amir', 'amir123@gmail.com', 'amir123', '$2y$10$1xtwYWWy8qnmB3ZDeXED1e2YZPmgWoX9Rm1ku4.lCubTHeDQ/8xdK', NULL, '2023-03-21 18:23:25', '2023-03-21 18:23:25'),
	(12, 'amir', 'amir1234@gmail.com', 'amir1234', '$2y$10$nNSqoPRGFXu6pZ5g0yXNNOfJEWG3hI2z5Gx2UL1zA3HtHC9sO3CRi', NULL, '2023-03-21 18:28:04', '2023-03-21 18:28:04'),
	(13, 'dsadas', 'dsadasd@gmail.com', '321312', '$2y$10$7VcUkEMM4kvjAC/RVmHU9e4cAD7UwaVGceokon5KJa7uEz2mic.76', NULL, '2023-03-21 18:29:25', '2023-03-21 18:29:25'),
	(14, 'lsakljdas', 'ewqe213@gmail.com', 'dsadasd32131', '$2y$10$dN8anF5EpSE/ug8wUhU2R.690tEoeY2zZ4NUtzuDkuQxxgABCS05C', NULL, '2023-03-21 18:30:33', '2023-03-21 18:30:33'),
	(15, '21312', '3215456@gmail.com', '32132131', '$2y$10$GS2RRgvKI.rc4oq6.wGY2eF0HfmZGwJQGeT7tOS9vLGlV5QNjGqsi', NULL, '2023-03-21 18:32:49', '2023-03-21 18:32:49'),
	(16, 'dsadas', '321312@gmail.com', 'dasdasd', '$2y$10$p/4Yxk9uu7JO27GUWJb5jOT7.uTTEk1mrEbzZPhKHU4fzMo9mA4B2', NULL, '2023-03-21 18:33:29', '2023-03-21 18:33:29'),
	(17, 'dasda3213', 'rrere231@gmail.com', 'dsasad', '$2y$10$3525x4uXax2zRgWeKnFwKO0K7cyNk0jVKvoWsiBL/WtJcoKq3XGQO', NULL, '2023-03-21 18:34:17', '2023-03-21 18:34:17'),
	(18, 'fred', '21314@gmail.com', 'fredsupiot', '$2y$10$1pAbFjvHqx3Rv0JrBj49geVSJ4crqLdkjJgaAP.WO21cNs2CTwd6q', NULL, '2023-03-21 18:35:00', '2023-03-21 18:35:00'),
	(19, 'Sircas', 'sdad@gmail.com', 'casi123', '$2y$10$snGOw2e5mseCK5Kf/FUHyu8/Y4QYVParw83huWFrhHWkNtnYgH6Cy', NULL, '2023-03-21 18:35:39', '2023-03-21 18:35:39'),
	(20, 'dsadsa', 'dasdasd@gmail.com', '321321', '$2y$10$1m6zIK.aKEt/4Db709INf.zY0hoU2Bx0YtRZDQVOSwUBT3G1oM836', NULL, '2023-03-21 18:37:17', '2023-03-21 18:37:17'),
	(21, 'asdasd21', '321321312312@gmail.com', 'dsadas', '$2y$10$45Le46sNTxE7AdF3g4oEE.icLOIsI1DAAFA9IAGP3CGZ3dMI.AJLu', NULL, '2023-03-21 18:39:07', '2023-03-21 18:39:07'),
	(22, 'dsadasd', 'as12dc12@gmail.com', '2313312', '$2y$10$/Lbw3q9M03TUNUYPlhj3deNfh7MUdWdyzbZepeAev8MTAAamLNZSy', NULL, '2023-03-21 18:39:40', '2023-03-21 18:39:40'),
	(23, 'dsadas', '21312de1x@gmail.com', '3213dasd', '$2y$10$ACAS2oAIalH7Oqz2p8z3MOQPhGtzNuUM7Q.7m27G/HhUXrwaJNpQu', NULL, '2023-03-21 18:40:39', '2023-03-21 18:40:39'),
	(24, 'e321321', '321312313@fadasd.dasda', 'dasdasd231312x', '$2y$10$UEyzx9rrrUGMi2tTTFYduOpl/whL3wMuuphVclpEe/vj8mqjrC.Oq', NULL, '2023-03-21 18:41:36', '2023-03-21 18:41:36'),
	(25, 'dasdas', '3213123asexda@dasd.fasdfd', '2313dsaas', '$2y$10$95VP.1q8rzlDtl46f5V6pOSwG.vUGYVhOVQId3ZXKJz069UL/THmq', NULL, '2023-03-21 18:43:38', '2023-03-21 18:43:38'),
	(26, 'dsadas', '213123z12@gmail.com', '321312321xasd', '$2y$10$U/ldwXvHzMyI2NfPE.cFNeoTL82epA/uFSOgdAP0Wgn.KwCN9X6Ou', NULL, '2023-03-21 18:49:31', '2023-03-21 18:49:31'),
	(27, 'dsadas', '2131dasda23z12@gmail.com', '321312321xasd321321', '$2y$10$P8BDQTPnKqsmHj5qBCIUT.ZPVzwWUwIbmdkwcsu6DzzdAY0zf39Fy', NULL, '2023-03-21 18:49:39', '2023-03-21 18:49:39'),
	(28, 'reymarkk1', 'DSADASDASDAS', 'asdasda', '$2y$10$3fTxGsbTJhia1J.Z0W3SuOi0WTnrdVfBw3EGEgle7ixK6GwfguO7W', NULL, '2023-03-21 18:59:09', '2023-03-21 18:59:09'),
	(29, 'Reymark', 'reymark321321@gmail.com', 'reymarkgen123', '$2y$10$G06Jd/KCgDH4GRejQLj0JucwJxdgT.5OlKSBKrJ9YRsVxgdHBMfTu', NULL, '2023-03-21 19:23:16', '2023-03-21 19:23:16'),
	(30, 'Reymark', 'reymark.boquiron1234@gmail.com', 'reymarks', '$2y$10$5ouidsoh80ApIvIjanSdSOHomtXo4DlLLXJq77WL2DYUaXl.VVOva', NULL, '2023-03-21 20:05:47', '2023-03-21 20:05:47'),
	(31, 'panot', 'panot@gmail.com', 'panot', '$2y$10$K2wIG88M7vdi6wXV4mINnuw8vp4Y/wvMxzz/0wBrgn8TfdHvtBu1G', NULL, '2023-03-21 21:59:52', '2023-03-21 21:59:52'),
	(32, 'amir', 'amirpogi123@gmail', 'amir123458', '$2y$10$NeQecsukpb1tz9mb4aFnneqvJUMZVSA/PObfGPLnahmir7umqq.YC', NULL, '2023-03-23 00:08:36', '2023-03-23 00:08:36'),
	(33, 'anakniama', 'ahas@123.gmail.com', 'ahas', '$2y$10$/C1gdn1xOdjLClV8dQ0LtuanyTogiJCoVjnpFjGp9wYOamFpnj/BG', NULL, '2023-03-27 19:46:09', '2023-03-27 19:46:09'),
	(34, 'alahoakbar', 'ter123@gmail.com', 'sugoi', '$2y$10$Srt7LwltErQaC3bx3o3p7u/soJrSOMfCYaE74yeKuhkrqcz.oOrla', NULL, '2023-03-27 21:35:33', '2023-03-27 21:35:33'),
	(35, 'fghfgh', 'ghfhfg@2dssadad', 'fghfghf', '$2y$10$pAb0sDmDBIz/WfBXEqvaGur36PcWvewjD.35llpRwKQIsO0DEW.Ue', NULL, '2023-03-30 01:32:35', '2023-03-30 01:32:35');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
