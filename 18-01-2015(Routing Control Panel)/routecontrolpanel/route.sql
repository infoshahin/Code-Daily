/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.12-log : Database - routing
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`routing` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `routing`;

/*Table structure for table `common_order_logs` */

DROP TABLE IF EXISTS `common_order_logs`;

CREATE TABLE `common_order_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` varchar(100) DEFAULT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logouttime` datetime DEFAULT NULL,
  `out_telco` varchar(100) DEFAULT NULL,
  `in_telco` varchar(100) DEFAULT NULL,
  `map_user` varchar(100) DEFAULT NULL,
  `request_from` varchar(100) DEFAULT NULL,
  `masking_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `common_order_logs` */

/*Table structure for table `in_telco` */

DROP TABLE IF EXISTS `in_telco`;

CREATE TABLE `in_telco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telco_name` varchar(100) DEFAULT NULL,
  `telco_status` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `in_telco` */

insert  into `in_telco`(`id`,`telco_name`,`telco_status`) values (1,'GRAMEEN',1),(2,'BANGLALINK',1),(3,'AKTEL',1),(4,'CITYCELL',1),(5,'WARID',1),(6,'TELETALK',1),(7,'RANKS',1),(8,'INTERNATIONAL',1);

/*Table structure for table `map_user` */

DROP TABLE IF EXISTS `map_user`;

CREATE TABLE `map_user` (
  `int` int(11) NOT NULL AUTO_INCREMENT,
  `map_user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`int`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `map_user` */

insert  into `map_user`(`int`,`map_user`) values (1,'SSL'),(2,'SSLNEW'),(3,'ALICO'),(4,'BRACBANK'),(5,'EBL');

/*Table structure for table `menu_active` */

DROP TABLE IF EXISTS `menu_active`;

CREATE TABLE `menu_active` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_value` varchar(100) DEFAULT NULL,
  `menu_name` varchar(100) DEFAULT NULL,
  `menu_active` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `menu_active` */

insert  into `menu_active`(`id`,`menu_value`,`menu_name`,`menu_active`) values (1,'GRAMEEN','GRAMEEN',1),(2,'ROBI','ROBI',1),(3,'BANGLALINK','BANGLALINK',1),(4,'CITYCELL','CITYCELL',1),(5,'WARID','AIRTEL',1),(6,'TELETALK','TELETALK',1);

/*Table structure for table `out_telco` */

DROP TABLE IF EXISTS `out_telco`;

CREATE TABLE `out_telco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telco_name` varchar(100) DEFAULT NULL,
  `telco_status` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `out_telco` */

insert  into `out_telco`(`id`,`telco_name`,`telco_status`) values (1,'GRAMEEN',1),(2,'BANGLALINK',1),(3,'TELETALK',1),(4,'AIRTEL',1),(5,'AKTEL',1),(6,'CITYCELL',1),(7,'ROUTESSM',1),(8,'ROUTESSM_BD',0),(9,'SILVERSTREET',1),(12,'MACH',0);

/*Table structure for table `stakeholder_ctrl` */

DROP TABLE IF EXISTS `stakeholder_ctrl`;

CREATE TABLE `stakeholder_ctrl` (
  `ID` varchar(160) DEFAULT NULL,
  `STAKEHOLDER_UID` varchar(100) DEFAULT NULL,
  `STAKEHOLDER_PASS` varchar(100) DEFAULT NULL,
  `MAP_USER` varchar(100) DEFAULT NULL,
  `OUTGOING_TELCO` varchar(100) DEFAULT NULL,
  `LOCAL_RATE` int(11) DEFAULT NULL,
  `INTERNATIONAL_RATE` int(11) DEFAULT NULL,
  `BRAND_NAME` varchar(20) DEFAULT NULL,
  `INTERNATIONAL` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `stakeholder_ctrl` */

insert  into `stakeholder_ctrl`(`ID`,`STAKEHOLDER_UID`,`STAKEHOLDER_PASS`,`MAP_USER`,`OUTGOING_TELCO`,`LOCAL_RATE`,`INTERNATIONAL_RATE`,`BRAND_NAME`,`INTERNATIONAL`) values ('1','BRACBANK','BRACBANK','SSL',NULL,1,1,'BRAC+BANK','TRUE'),(NULL,'CBL',NULL,NULL,NULL,NULL,NULL,'CITY+BANK',NULL),(NULL,'CBLADC',NULL,NULL,NULL,NULL,NULL,'CITY+BANK',NULL);

/*Table structure for table `tbl_routing_table` */

DROP TABLE IF EXISTS `tbl_routing_table`;

CREATE TABLE `tbl_routing_table` (
  `ID` varchar(100) DEFAULT NULL,
  `REQUEST_FROM` varchar(100) DEFAULT NULL,
  `IN_TELCO` varchar(100) DEFAULT NULL,
  `OUT_TELCO` varchar(50) DEFAULT NULL,
  `MAPUSR` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_routing_table` */

insert  into `tbl_routing_table`(`ID`,`REQUEST_FROM`,`IN_TELCO`,`OUT_TELCO`,`MAPUSR`) values ('1','BRACBANK','GRAMEEN','GRAMEEN','SSL'),('2','BRACBANK','AKTEL','AKTEL','SSL'),('3','BRACBANK','BANGLALINK','ROUTESMS','SSL'),('4','BRACBANK','INTERNATIONAL','AKTEL','SSL'),('5','BRACBANK','TELETALK','AKTEL','SSL');

/*Table structure for table `user_info` */

DROP TABLE IF EXISTS `user_info`;

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_active` int(1) DEFAULT '1',
  `user_creation_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user_info` */

insert  into `user_info`(`id`,`username`,`password`,`user_active`,`user_creation_time`) values (2,'asik','asik@123',1,'2015-01-14 13:39:31');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
