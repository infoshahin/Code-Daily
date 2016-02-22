/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.6.24 : Database - nexttrend
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`nexttrend` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `nexttrend`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  `show_home` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `category` */

insert  into `category`(`id`,`parent_id`,`title`,`details`,`images`,`status`,`created_at`,`updated_at`,`user_id`,`show_home`) values (13,0,'MAN','MAN','avatar23.png',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(14,13,'Shirt','Man Shirt','shirt.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(15,13,'T-shirt','Man T-shirt','t-shirt.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(16,0,'WOMAN','WOMAN','woman105.png',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(17,16,'Shirt','Woman Shirt','wshirt.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(18,16,'T-shirt','Woman T-shirt','wt-shirt.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(19,0,'KIDS','KIDS ','kids1.png',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(20,19,'Shirt','Kids Shirt','kshirt.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(21,19,'T-shirt','Kids T-shirt','kt-shirt.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(22,0,'EXCLUSIVE','EXCLUSIVE','aaa.png',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(23,22,'Shirt','Exclusive Shirt','exshirt.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(24,22,'T-shirt','Exclusive T-shirt','ext-shirt.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(25,13,'Pant','Man Pant','mp.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(26,13,'Three Quarter','Man Three Quarter','m2q.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(27,13,'Half Pant','Man Half Pant','mhp.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0),(29,13,'Shahin','sdfsdf','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,0),(33,28,'Shirt','New Shirt','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,1);

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_subscribe` tinyint(4) NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `confirmed` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addrsss_one` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addrsss_two` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_email_unique` (`email`),
  UNIQUE KEY `customers_phone_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `customers` */

insert  into `customers`(`id`,`firstname`,`lastname`,`email`,`email_subscribe`,`phone`,`password`,`status`,`confirmed`,`created_at`,`updated_at`,`image`,`addrsss_one`,`addrsss_two`,`company`) values (1,'Md. Foyaz Ullah','Shahin','shahin.fci@gmail.com',1,'01767957180','@1840017788',1,1,'2015-11-03 18:00:00','2015-11-25 18:00:00','','145, Shantinagar','','Belogin');

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `file_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  `thumb` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `files` */

insert  into `files`(`id`,`product_id`,`file_path`,`created_at`,`updated_at`,`user_id`,`thumb`) values (1,1,'1370172430.jpg','2015-12-07 05:02:41','2015-12-07 05:02:41',1,1),(2,1,'1370172430.jpg','2015-12-07 05:02:41','2015-12-07 05:02:41',1,0),(3,1,'1370172430.jpg','2015-12-07 05:02:41','2015-12-07 05:02:41',1,0),(4,1,'1370172430.jpg','2015-12-07 05:02:41','2015-12-07 05:02:41',1,0),(5,2,'1370172430.jpg','0000-00-00 00:00:00','2015-12-07 05:05:02',1,1),(6,2,'1370172430.jpg','2015-12-07 05:05:02','2015-12-07 05:05:02',1,0),(7,2,'1370172430.jpg','2015-12-07 05:05:02','2015-12-07 05:05:02',1,0),(8,2,'1370172430.jpg','2015-12-07 05:05:02','2015-12-07 05:05:02',1,0),(9,3,'1370172430.jpg','2015-12-07 05:05:14','2015-12-07 05:05:14',1,1),(10,3,'1370172430.jpg','2015-12-07 05:05:14','2015-12-07 05:05:14',1,0),(11,3,'1370172430.jpg','2015-12-07 05:05:14','2015-12-07 05:05:14',1,0),(12,3,'1370172430.jpg','2015-12-07 05:05:14','2015-12-07 05:05:14',1,0),(13,4,'1370172430.jpg','2015-12-07 05:05:24','2015-12-07 05:05:24',1,1),(14,4,'1370172430.jpg','2015-12-07 05:05:24','2015-12-07 05:05:24',1,0),(15,4,'1370172430.jpg','2015-12-07 05:05:24','2015-12-07 05:05:24',1,0),(16,4,'1370172430.jpg','2015-12-07 05:05:24','2015-12-07 05:05:24',1,0),(17,5,'1370783679.jpg','2015-12-07 05:09:16','2015-12-07 05:09:16',1,1),(18,5,'1370783679.jpg','2015-12-07 05:09:16','2015-12-07 05:09:16',1,0),(19,5,'1370783679.jpg','2015-12-07 05:09:16','2015-12-07 05:09:16',1,0),(20,5,'1370783679.jpg','2015-12-07 05:09:16','2015-12-07 05:09:16',1,0),(21,6,'1370783679.jpg','2015-12-07 05:09:26','2015-12-07 05:09:26',1,1),(22,6,'1370783679.jpg','2015-12-07 05:09:26','2015-12-07 05:09:26',1,0),(23,7,'1370783679.jpg','2015-12-07 05:09:37','2015-12-07 05:09:37',1,1),(24,7,'1370783679.jpg','2015-12-07 05:09:37','2015-12-07 05:09:37',1,0),(25,7,'1370783679.jpg','2015-12-07 05:09:37','2015-12-07 05:09:37',1,0),(26,8,'1370783679.jpg','2015-12-07 05:09:59','2015-12-07 05:09:59',1,1),(27,8,'1370783679.jpg','2015-12-07 05:09:59','2015-12-07 05:09:59',1,0),(28,8,'1370783679.jpg','2015-12-07 05:09:59','2015-12-07 05:09:59',1,0),(29,9,'1370172430.jpg','2015-12-07 05:13:13','2015-12-07 05:13:13',1,1),(30,9,'1370172430.jpg','2015-12-07 05:13:13','2015-12-07 05:13:13',1,0),(31,9,'1370172430.jpg','2015-12-07 05:13:13','2015-12-07 05:13:13',1,0),(32,9,'1370172430.jpg','2015-12-07 05:13:13','2015-12-07 05:13:13',1,0),(33,10,'1019853.jpg','2015-12-07 05:15:28','2015-12-07 05:15:28',1,1),(34,10,'1016118.jpg','2015-12-07 05:15:28','2015-12-07 05:15:28',1,0),(35,10,'1084708.jpg','2015-12-07 05:15:28','2015-12-07 05:15:28',1,0),(36,10,'1057633.jpg','2015-12-07 05:15:28','2015-12-07 05:15:28',1,0),(44,12,'1217518.jpg','2015-12-07 05:17:54','2015-12-07 05:17:54',1,1),(45,12,'1221191.jpg','2015-12-07 05:17:54','2015-12-07 05:17:54',1,0),(46,12,'1217331.jpg','2015-12-07 05:17:54','2015-12-07 05:17:54',1,0),(47,2,'284063.jpg','2015-12-07 05:18:02','2015-12-07 05:18:02',1,0),(48,2,'284955.jpg','2015-12-07 05:18:02','2015-12-07 05:18:02',1,0),(49,2,'220456.jpg','2015-12-07 05:18:02','2015-12-07 05:18:02',1,0),(50,10,'1026684.jpg','2015-12-07 05:18:10','2015-12-07 05:18:10',1,0),(51,10,'1062442.jpg','2015-12-07 05:18:10','2015-12-07 05:18:10',1,0),(52,10,'1037874.jpg','2015-12-07 05:18:10','2015-12-07 05:18:10',1,0),(53,11,'1140860.jpg','2015-12-07 05:22:05','2015-12-07 05:22:17',1,0),(54,11,'1122943.jpg','2015-12-07 05:22:05','2015-12-07 05:22:05',1,1),(55,11,'1136791.jpg','2015-12-07 05:22:05','2015-12-07 05:22:05',1,0),(60,16,'1660682.jpg','2015-12-08 22:32:19','2015-12-08 22:32:19',1,1),(61,16,'1656372.jpg','2015-12-08 22:32:19','2015-12-08 22:32:19',1,0),(62,16,'1663739.jpg','2015-12-08 22:32:19','2015-12-08 22:32:19',1,0),(63,16,'1654348.jpg','2015-12-08 22:32:19','2015-12-08 22:32:19',1,0),(64,20,'1370772984.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(65,20,'1370772984.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,0),(66,21,'1370772984.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(67,21,'1370772984.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,0);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2015_10_26_042406_create_user_table',1),('2015_10_26_043919_usertype',1),('2015_10_26_082346_create_category_table',2),('2015_10_26_092616_create_customar_table',3),('2015_10_26_100927_add_new_columns_in_customers',4),('2015_10_26_101337_update_columns_in_customers',5),('2015_10_26_103603_drop_columns_in_customers',6),('2014_10_12_100000_create_password_resets_table',7),('2015_10_28_050626_create_product_tbl',8),('2015_10_28_051408_create_tag_tbl',9),('2015_10_28_051828_create_producttag_tbl',9),('2015_10_28_052344_create_files_tbl',10),('2015_10_28_050626_create_product_tblid',11),('2015_10_28_051408_create_tag_tblid',11),('2015_10_28_051828_create_producttag_tblid',11),('2015_10_28_052344_create_files_tblid',12),('2015_10_28_071658_create_column_categroy_id',13),('2015_10_28_073315_add_column_product_image',14),('2015_11_04_055649_create_order_table',15),('2015_11_04_064540_add_column_subtotal',16),('2015_11_05_071842_create_slide_table',17),('2015_11_05_072606_rename_image_column_slidertbl',18),('2015_11_08_103036_add_user_id_in_files',19),('2015_11_09_064309_add_new_colum_userid_in_category',20),('2015_11_09_065907_add_new_colum_userid_in_tag',21),('2015_11_09_070106_add_new_colum_userid_in_slider',22),('2015_11_09_070120_add_new_colum_userid_in_files',22),('2015_11_29_055503_add_product_quantity',23),('2015_11_29_060208_add_thumb_in_files',24),('2015_12_01_061737_add_category_parent_id',25);

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_number` int(11) NOT NULL,
  `customar_id` int(11) NOT NULL,
  `billing_add_id` int(11) NOT NULL,
  `shipping_add_id` int(11) NOT NULL,
  `orderd_on` datetime NOT NULL,
  `shipped_on` datetime NOT NULL,
  `grand_total` double(8,2) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `subtotal` double(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `orders` */

insert  into `orders`(`id`,`order_number`,`customar_id`,`billing_add_id`,`shipping_add_id`,`orderd_on`,`shipped_on`,`grand_total`,`status`,`remark`,`created_at`,`updated_at`,`subtotal`) values (1,21254,1,1,0,'2015-11-04 00:00:00','0000-00-00 00:00:00',500.00,'On Hold','Panding','0000-00-00 00:00:00','2015-12-08 22:36:09',300.00);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_details` longtext COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_sku` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `quantity` int(11) NOT NULL,
  `category_parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`product_title`,`product_details`,`product_code`,`product_price`,`product_sku`,`created_at`,`updated_at`,`category_id`,`image`,`user_id`,`quantity`,`category_parent_id`) values (1,'Men shirt one','Men shirt one','A','200.00','1','2015-12-07 05:02:23','2015-12-07 05:02:23',14,'',1,22,13),(2,'Men shirt two','Men shirt two','B','200.00','2','2015-12-07 05:03:23','2015-12-07 05:03:23',14,'',1,200,13),(3,'Men shirt three','                        Men shirt three\r\n                      ','C','200.00','3','2015-12-07 05:03:42','2015-12-08 23:56:52',33,'',1,200,28),(4,'Men shirt four','                        Men shirt four\r\n                      ','D','500.00','4','2015-12-07 05:04:06','2015-12-08 23:56:41',33,'',1,20,28),(5,'Woment One','Woment One','E','200.00','5','2015-12-07 05:07:54','2015-12-07 05:07:54',17,'',1,2,16),(6,'Woment Two','Woment Two','F','500.00','6','2015-12-07 05:08:14','2015-12-07 05:08:14',17,'',1,20,16),(7,'Woment Three','Woment Three','G','1000.00','7','2015-12-07 05:08:42','2015-12-07 05:08:42',17,'',1,30,16),(8,'Woment four','Woment Three','H','60.00','8','2015-12-07 05:09:03','2015-12-07 05:09:03',17,'',1,200,16),(9,'Men shirt six','Men shirt six','I','700.00','9','2015-12-07 05:12:49','2015-12-07 05:12:49',14,'',1,44,13),(10,'New Arraival one','                        New Arraival one\r\n                      ','J','900.00','10','2015-12-07 05:15:20','2015-12-07 05:51:24',33,'',1,200,28),(11,'New Arraival Two','                        New Arraival Two\r\n                      ','K','2323.00','11','2015-12-07 05:15:55','2015-12-07 05:51:41',33,'',1,232,28),(12,'New Arraival Three','                        New Arraival Three\r\n                      ','L','222.00','12','2015-12-07 05:16:12','2015-12-07 05:51:32',33,'',1,22,28),(16,'New Arrival Seven','New Arrival Seven','M','500.00','13','2015-12-08 22:32:03','2015-12-08 22:32:03',33,'',1,20,28),(19,'test','sdf','N','231.00','14','2015-12-09 00:14:40','2015-12-09 00:14:40',33,'',1,123,28),(20,'Men Shirt Seven','Men Shirt Seven','O','250.00','15','0000-00-00 00:00:00','0000-00-00 00:00:00',14,'dfdsg',1,500,13),(21,'Men Shirt Eight','Men Shirt Eight	','P','300.00','16','0000-00-00 00:00:00','0000-00-00 00:00:00',14,'daf',1,600,13);

/*Table structure for table `producttag` */

DROP TABLE IF EXISTS `producttag`;

CREATE TABLE `producttag` (
  `id` int(11) NOT NULL,
  `tagId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `producttag` */

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sequence` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `new_window` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `slider` */

insert  into `slider`(`id`,`title`,`details`,`link`,`sequence`,`status`,`new_window`,`created_at`,`updated_at`,`image`,`user_id`) values (14,'1st','1st','asdf',0,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','slide (1).jpg',1),(15,'2nd','2nd','asfsd',0,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','slide (2).jpg',1),(16,'3rd','3rd','adsf',0,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','slide (3).jpg',1);

/*Table structure for table `tag` */

DROP TABLE IF EXISTS `tag`;

CREATE TABLE `tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tag` */

insert  into `tag`(`id`,`tag_title`,`created_at`,`updated_at`,`user_id`) values (1,'HSBC Bank (exp)','2015-10-28 00:57:44','2015-10-28 01:00:22',0),(2,'HSBC Bank (exp)','2015-10-31 04:18:08','2015-10-31 04:18:08',0),(3,'sdfdsf','2015-10-31 04:19:10','2015-10-31 04:19:10',0),(4,'sdfsdf','2015-11-09 00:59:38','2015-11-09 00:59:38',1);

/*Table structure for table `user_type` */

DROP TABLE IF EXISTS `user_type`;

CREATE TABLE `user_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user_type` */

insert  into `user_type`(`id`,`title`,`created_at`,`updated_at`) values (1,'superadmin','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'client','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'merchant','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `access_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`firstname`,`lastname`,`username`,`password`,`email`,`access_id`,`status`,`remember_token`,`created_at`,`updated_at`) values (1,'admin','admin','admin','$2y$10$rlWWxSBfUYgGYJbabhXTaea2S3f3dahibYzpqRmkRxDg34UtRNvZm','admin@gmail.com','1',1,'dubH3k4wogWHAW7M1ZQRvjk8oee3mz2uQL1QrVgfbfw6PZ5XOEdSwLtDxSB1','2015-10-26 18:00:00','2016-01-03 11:32:47'),(3,'admintwo','admintwo','admintwo','$2y$10$rlWWxSBfUYgGYJbabhXTaea2S3f3dahibYzpqRmkRxDg34UtRNvZm','admintwo@gmail.com','2',1,'z4ppZSL6tGM0ZA4TKdZPeQAwo7mwg5ViUHRsqW47jQBB5yEjbU2mOUx88Fas','2015-10-26 18:00:00','2015-11-09 01:55:22'),(4,'123123123123123123131','','shahin','$2y$10$yUkFo5i/h3hAZHztzVrXKu688/tR2CYUIQhzNSYxn7xasLhlj7ULO','shahin.fci@gmail.com','',0,'IRwdiOQgBJPDLeYjRv4kTNOivTTYqR8OyYRirO6xHsVRhUGINlGn3YCCI00j','2015-11-16 04:55:48','2015-11-16 04:55:54'),(6,'21312313123213213123','','adminss','$2y$10$iHvIbCuMeIbHs9CxyvzaJO0d1H.fa36LiYkBIq7tzIJIll8J.H7YK','admin@gmail.com','',0,NULL,'2015-11-16 04:56:37','2015-11-16 04:56:37'),(7,'123123232321321','','tushar','$2y$10$FHAm4WzvX3.kzrnCAiSToOynGvDMcLHrJ8UjXdXKYm2jnz2ScjbHS','tushar@belogin.com','',0,'ejWm46dLKElqplppZY2Z9qdZQjMXBgsYbqAZYKBynZIyqE9dA24orXxPIPLE','2015-11-16 04:58:45','2015-11-16 05:00:07');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
