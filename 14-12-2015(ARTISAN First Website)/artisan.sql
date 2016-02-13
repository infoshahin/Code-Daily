/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.6.24 : Database - artisan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`artisan` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `artisan`;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `show_home` tinyint(1) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`id`,`parent_id`,`title`,`details`,`images`,`show_home`,`status`,`created_at`,`updated_at`,`user_id`) values (13,0,'MAN','MAN','avatar23.png',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(14,13,'Shirt','Man Shirt','shirt.jpg',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(15,13,'T-shirt','Man T-shirt','t-shirt.jpg',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(16,0,'WOMAN','WOMAN','woman105.png',1,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(17,16,'Shirt','Woman Shirt','wshirt.jpg',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(18,16,'T-shirt','Woman T-shirt','wt-shirt.jpg',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(19,0,'KIDS','KIDS ','kids1.png',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(20,19,'Shirt','Kids Shirt','kshirt.jpg',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(21,19,'T-shirt','Kids T-shirt','kt-shirt.jpg',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(22,0,'EXCLUSIVE','EXCLUSIVE','aaa.png',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(23,22,'Shirt','Exclusive Shirt','exshirt.jpg',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(24,22,'T-shirt','Exclusive T-shirt','ext-shirt.jpg',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(25,13,'Pant','Man Pant','mp.jpg',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(26,13,'Three Quarter','Man Three Quarter','m2q.jpg',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(27,13,'Half Pant','Man Half Pant','mhp.jpg',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(28,0,'NEW ARRIVAL','New Arrival','na.jpg',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(29,16,'Pant','Woman Pant','wp',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(30,16,'Three Quarter','Woman Three Quarter','w3q',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(31,16,'Half Pant','Woman Half Pant','whp',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(32,19,'Pant','Kids Pant','kp',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(33,19,'Three Quarter','Kids Three Quarter','k3q',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(34,19,'Half Pant','Kids Half Pant','khp',0,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `category` */

insert  into `category`(`id`,`parent_id`,`title`,`details`,`images`,`status`,`created_at`,`updated_at`,`user_id`) values (3,4,'Man','DD ','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(4,3,'HSBC Bank (exp) edit','asd','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(6,4,'HSBC Bank','sdf','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(7,3,'shirt','sdf','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(9,3,'Onesdfsdf','sdfsdfsdf','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(10,7,'shahin','dsfg','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',0),(11,6,'Cc','sdfsd','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',3),(12,7,'ad e','sdf','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1);

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

insert  into `customers`(`id`,`firstname`,`lastname`,`email`,`email_subscribe`,`phone`,`password`,`status`,`confirmed`,`created_at`,`updated_at`,`image`,`addrsss_one`,`addrsss_two`,`company`) values (1,'Md. Foyaz Ullah','Shahin','shahin.fci@gmail.com',1,'01767957180','@1840017788',1,1,'2015-11-04 00:00:00','2015-11-26 00:00:00','','145, Shantinagar','','Belogin');

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `file_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  `thumb` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `files` */

insert  into `files`(`id`,`product_id`,`file_path`,`created_at`,`updated_at`,`user_id`,`thumb`) values (1,37,'product-img-1.jpg','2015-11-09 07:08:47','2015-11-09 07:08:47',1,1),(2,37,'product-img-2.jpg','2015-11-09 07:08:47','2015-11-09 07:08:47',1,0),(3,37,'product-img-3.jpg','2015-11-09 07:08:47','2015-11-09 07:08:47',1,0),(4,37,'product-img-4.jpg','2015-11-09 07:08:47','2015-11-09 07:08:47',1,0),(5,38,'product-img-3.jpg','2015-11-09 07:08:47','2015-11-09 07:08:47',1,1),(6,48,'product-img-1.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(7,49,'product-img-2.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(8,50,'product-img-3.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(9,51,'product-img-4.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(10,52,'product-img-5.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(11,53,'product-img-6.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(12,48,'product-img-7.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,0),(13,39,'product-img-6.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(14,40,'product-img-2.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(15,45,'product-img-7.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(16,46,'product-img-2.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(17,47,'product-img-7.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(18,54,'product-img-2.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(19,55,'product-img-2.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(20,41,'product-img-2.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(21,42,'product-img-7.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(22,56,'product-img-2.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(23,56,'product-img-7.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,0),(24,57,'product-img-7.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(25,58,'product-img-2.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(26,58,'product-img-7.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,0),(27,59,'product-img-4.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(28,60,'product-img-5.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(29,41,'product-img-5.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,0),(30,41,'product-img-3.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,0),(31,41,'product-img-7.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,0),(32,61,'product-img-5.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1,1);

/*Table structure for table `item` */

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `user_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `item` */

insert  into `item`(`id`,`product_id`,`qty`,`user_ip`,`user_id`,`status`,`amount`,`created_at`,`updated_at`) values (11,37,NULL,NULL,NULL,0,0,'2015-11-24 06:46:59','2015-11-24 06:46:59');

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

insert  into `orders`(`id`,`order_number`,`customar_id`,`billing_add_id`,`shipping_add_id`,`orderd_on`,`shipped_on`,`grand_total`,`status`,`remark`,`created_at`,`updated_at`,`subtotal`) values (1,21254,1,1,0,'2015-11-04 00:00:00','0000-00-00 00:00:00',500.00,'Processing','Panding','0000-00-00 00:00:00','2015-11-09 08:02:18',300.00);

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_details` longtext COLLATE utf8_unicode_ci NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_sku` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_parent_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `product` */

insert  into `product`(`id`,`product_title`,`product_details`,`product_price`,`product_sku`,`created_at`,`updated_at`,`category_parent_id`,`category_id`,`image`,`user_id`) values (37,'Man Shirt','MS','100.00','1','0000-00-00 00:00:00','0000-00-00 00:00:00',13,14,'ms.jpg',0),(38,'Man T-shirt','MTS','100.00','2','0000-00-00 00:00:00','0000-00-00 00:00:00',13,15,'mts.jpg',0),(39,'Woman Shirt','WS','200.00','3','0000-00-00 00:00:00','0000-00-00 00:00:00',16,17,'ws.jpg',0),(40,'Woman T-shirt','WTS','200.00','4','0000-00-00 00:00:00','0000-00-00 00:00:00',16,18,'wts.jpg',0),(41,'Kids Shirt','KS','300.00','5','0000-00-00 00:00:00','0000-00-00 00:00:00',19,20,'ks.jpg',0),(42,'Kids T-shirt','KTS','300.00','6','0000-00-00 00:00:00','0000-00-00 00:00:00',19,21,'kts.jpg',0),(43,'Exclusive Shirt','ES','400.00','7','0000-00-00 00:00:00','0000-00-00 00:00:00',22,23,'es.jpg',0),(44,'Exclusive T-shirt','ETS','400.00','8','0000-00-00 00:00:00','0000-00-00 00:00:00',22,24,'ets.jpg',0),(45,'Man Pant','MP','500.00','9','0000-00-00 00:00:00','0000-00-00 00:00:00',13,25,'mp.jpg',0),(46,'Man T-Quarter','M3Q','500.00','10','0000-00-00 00:00:00','0000-00-00 00:00:00',13,26,'m2q.jpg',0),(47,'Man Half Pant','MHP','500.00','11','0000-00-00 00:00:00','0000-00-00 00:00:00',13,27,'mhp.jpg',0),(48,'New shirt','NS','1000.00','12','0000-00-00 00:00:00','0000-00-00 00:00:00',28,28,'ns.jpg',0),(49,'New T-Shirt','NTS','1000.00','13','0000-00-00 00:00:00','0000-00-00 00:00:00',28,28,'nts.jpg',0),(50,'New Pant','NP','2000.00','14','0000-00-00 00:00:00','0000-00-00 00:00:00',28,28,'np.jpg',0),(51,'New T-Quarter','NTQ','2000.00','15','0000-00-00 00:00:00','0000-00-00 00:00:00',28,28,'ntq.jpg',0),(52,'New Half Pant','NHP','2000.00','16','0000-00-00 00:00:00','0000-00-00 00:00:00',28,28,'nhp.jpg',0),(53,'New Boxer','NB','500.00','17','0000-00-00 00:00:00','0000-00-00 00:00:00',28,28,'nb.jpg',0),(54,'Man Shirt 2','MS2','100.00','18','0000-00-00 00:00:00','0000-00-00 00:00:00',13,14,'ms2.jpg',0),(55,'Man Shirt 3','MS3','200.00','19','0000-00-00 00:00:00','0000-00-00 00:00:00',13,14,'ms3.jpg',0),(56,'Woman Pant','WP','100.00','20','0000-00-00 00:00:00','0000-00-00 00:00:00',16,29,'wp',0),(57,'Woman T-Quarter','W3Q','100.00','21','0000-00-00 00:00:00','0000-00-00 00:00:00',16,30,'w3q',0),(58,'Kids Pant','KP\r\n','200.00','22','0000-00-00 00:00:00','0000-00-00 00:00:00',19,32,'kp',0),(59,'Kids Three Quarter','K3Q','300.00','23','0000-00-00 00:00:00','0000-00-00 00:00:00',19,33,'k3q',0),(60,'Kids Half Pant','KHP','400.00','24','0000-00-00 00:00:00','0000-00-00 00:00:00',19,34,'khp',0),(61,'Woman Half Pant','WHP','900.00','25','0000-00-00 00:00:00','0000-00-00 00:00:00',16,31,'whp',0);

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_details` longtext COLLATE utf8_unicode_ci NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_sku` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`product_title`,`product_details`,`product_price`,`product_sku`,`created_at`,`updated_at`,`category_id`,`image`,`user_id`) values (35,'HSBC Bank (exp)','                        sdfsdf\r\n                      ','23.00','','2015-11-09 06:54:17','2015-11-09 06:55:19',7,'',1),(36,'ad 2','sdf','222.00','','2015-11-09 06:55:58','2015-11-09 06:55:58',7,'',3);

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

insert  into `slider`(`id`,`title`,`details`,`link`,`sequence`,`status`,`new_window`,`created_at`,`updated_at`,`image`,`user_id`) values (14,'1st','1st','asdf',0,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','slideshow1.jpg',1),(15,'2nd','2nd','asfsd',0,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','slideshow2.jpg',1),(16,'3rd','3rd','adsf',0,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00','slideshow3.jpg',1);

/*Table structure for table `user_type` */

DROP TABLE IF EXISTS `user_type`;

CREATE TABLE `user_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user_type` */

insert  into `user_type`(`id`,`title`,`created_at`,`updated_at`) values (2,'superadmin','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type_id` int(10) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`email`,`user_type_id`,`status`,`remember_token`,`created_at`,`updated_at`) values (1,'irfan','$2y$10$rlWWxSBfUYgGYJbabhXTaea2S3f3dahibYzpqRmkRxDg34UtRNvZm','john@foo.com',2,1,'1NejPoJ3KQ9doh8sjqpiWP9Ul3kel0yFBnnDoBRl40gjNlz4K4hNC8p4P8ym','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'irfan','$2y$10$X3hpKFkNAcVvjQsLiMW2AOLrHnxgbu6pIcO04hxYOeDVi5KSYifgS','irfan@mail.com',NULL,NULL,NULL,'2015-10-29 09:05:50','2015-10-29 09:05:50');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
