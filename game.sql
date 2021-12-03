# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                 127.0.0.1
# Database:             game
# Server version:       10.4.17-MariaDB
# Server OS:            Win64
# Target-Compatibility: MySQL 4.0
# max_allowed_packet:   1048576
# HeidiSQL version:     3.2 Revision: 1129
# --------------------------------------------------------

/*!40100 SET CHARACTER SET latin1*/;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0*/;


#
# Database structure for database 'game'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `game` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `game`;


#
# Table structure for table 'juegos'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `juegos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombreJuego` varchar(255) NOT NULL,
  `urlJuego` varchar(255) NOT NULL,
  `descripcionJuego` varchar(255) NOT NULL,
  `urlImagenJuego` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) TYPE=InnoDB AUTO_INCREMENT=5 /*!40100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci*/;



#
# Dumping data for table 'juegos'
#

LOCK TABLES `juegos` WRITE;
/*!40000 ALTER TABLE `juegos` DISABLE KEYS*/;
REPLACE INTO `juegos` (`id`, `nombreJuego`, `urlJuego`, `descripcionJuego`, `urlImagenJuego`, `status`, `created_at`, `updated_at`) VALUES
	('1','BAMBOO RUSH 44','https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es','Oso Panda Africa','uploads/vCB8Pt3LnvkGKDHesm4PUUUqmASMmTIaQrGxIwDG.jpg','1',NULL,'2021-12-02 00:56:50'),
	('2','REELS OF WEALTH','https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=795&lang=es','Carrete de Riqueza','uploads/s8NlMGQmOJxfPwhXEAjzXRgicnLTqtTpKNEtmJqD.jpg','1',NULL,'2021-12-02 01:26:07'),
	('3','DRAGON & PHOENIX','https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=814&lang=es','Calabosos y Dragones','uploads/LyNqvkwNOU94zqnEVFLen8tLIwDlakfIUYLbKhny.jpg','1',NULL,NULL),
	('4','TAKE THE BANK','https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=813&lang=es','Banco','uploads/YMeICKFkEbFVUZ76D4ao2edlXjH8ceNiABrdh8Tl.jpg','1',NULL,NULL);
/*!40000 ALTER TABLE `juegos` ENABLE KEYS*/;
UNLOCK TABLES;


#
# Table structure for table 'migrations'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=InnoDB AUTO_INCREMENT=16 /*!40100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci*/;



#
# Dumping data for table 'migrations'
#

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS*/;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	('11','2014_10_12_000000_create_users_table',1),
	('12','2014_10_12_100000_create_password_resets_table',1),
	('13','2019_08_19_000000_create_failed_jobs_table',1),
	('14','2019_12_14_000001_create_personal_access_tokens_table',1),
	('15','2021_11_30_223457_create_juego',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS*/;
UNLOCK TABLES;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS*/;
