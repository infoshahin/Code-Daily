/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.5.29-log : Database - robi_sdp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`robi_sdp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `robi_sdp`;

/*Table structure for table `delivery_status` */

DROP TABLE IF EXISTS `delivery_status`;

CREATE TABLE `delivery_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msisdn` varchar(200) DEFAULT NULL,
  `service_id` varchar(200) DEFAULT NULL,
  `traceuniqueid` varchar(100) DEFAULT NULL,
  `correlator` varchar(100) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `incomming_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `NewIndex1` (`correlator`),
  KEY `NewIndex2` (`msisdn`,`correlator`),
  KEY `NewIndex3` (`msisdn`)
) ENGINE=InnoDB AUTO_INCREMENT=278654 DEFAULT CHARSET=latin1;

/*Table structure for table `delivery_status_logs` */

DROP TABLE IF EXISTS `delivery_status_logs`;

CREATE TABLE `delivery_status_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spid` varchar(100) DEFAULT NULL,
  `serviceid` varchar(100) DEFAULT NULL,
  `traceuniqueid` varchar(100) DEFAULT NULL,
  `correlator` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `deliveryStatus` varchar(100) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=278654 DEFAULT CHARSET=latin1;

/*Table structure for table `inbox` */

DROP TABLE IF EXISTS `inbox`;

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msisdn` varchar(200) DEFAULT NULL,
  `in_sms` varchar(200) DEFAULT NULL,
  `incomming_time` datetime DEFAULT NULL,
  `shortcode` varbinary(100) DEFAULT NULL,
  `service_id` varchar(200) DEFAULT NULL,
  `product_id` varchar(200) DEFAULT NULL,
  `sms_status` int(11) DEFAULT NULL,
  `process_time` datetime DEFAULT NULL,
  `remarks` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `inbox_archive` */

DROP TABLE IF EXISTS `inbox_archive`;

CREATE TABLE `inbox_archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msisdn` varchar(200) DEFAULT NULL,
  `in_sms` varchar(200) DEFAULT NULL,
  `intime_robi` datetime DEFAULT NULL,
  `incomming_time` datetime DEFAULT NULL,
  `shortcode` varchar(100) DEFAULT NULL,
  `service_id` varchar(200) DEFAULT NULL,
  `product_id` varchar(200) DEFAULT NULL,
  `sms_status` varchar(100) DEFAULT 'processing',
  `process_time` datetime DEFAULT NULL,
  `remarks` text,
  `try` int(10) DEFAULT '0',
  `isRead` int(11) DEFAULT NULL,
  `hotkey` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `NewIndex1` (`sms_status`),
  KEY `NewIndex2` (`shortcode`,`process_time`),
  KEY `NewIndex3` (`msisdn`),
  KEY `NewIndex4` (`msisdn`,`incomming_time`,`shortcode`),
  KEY `NewIndex5` (`shortcode`,`sms_status`),
  KEY `NewIndex6` (`isRead`),
  KEY `NewIndex7` (`sms_status`,`try`),
  KEY `NewIndex8` (`hotkey`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `inbox_queue` */

DROP TABLE IF EXISTS `inbox_queue`;

CREATE TABLE `inbox_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msisdn` varchar(200) DEFAULT NULL,
  `in_sms` varchar(200) DEFAULT NULL,
  `intime_robi` datetime DEFAULT NULL,
  `incomming_time` datetime DEFAULT NULL,
  `shortcode` varchar(100) DEFAULT NULL,
  `service_id` varchar(200) DEFAULT NULL,
  `product_id` varchar(200) DEFAULT NULL,
  `sms_status` varchar(100) DEFAULT 'processing',
  `process_time` datetime DEFAULT NULL,
  `remarks` text,
  `try` int(10) DEFAULT '0',
  `isRead` int(11) DEFAULT NULL,
  `hotkey` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `NewIndex1` (`sms_status`),
  KEY `NewIndex2` (`shortcode`,`process_time`),
  KEY `NewIndex3` (`msisdn`),
  KEY `NewIndex4` (`msisdn`,`incomming_time`,`shortcode`),
  KEY `NewIndex5` (`shortcode`,`sms_status`),
  KEY `NewIndex6` (`isRead`),
  KEY `NewIndex7` (`sms_status`,`try`),
  KEY `NewIndex8` (`hotkey`)
) ENGINE=InnoDB AUTO_INCREMENT=24846 DEFAULT CHARSET=latin1;

/*Table structure for table `logs_inbox_queue` */

DROP TABLE IF EXISTS `logs_inbox_queue`;

CREATE TABLE `logs_inbox_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spid` varchar(30) DEFAULT NULL,
  `serviceid` varchar(50) DEFAULT NULL,
  `linkid` varchar(50) DEFAULT NULL,
  `traceuniqueid` varchar(50) DEFAULT NULL,
  `correlator` varchar(30) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `senderaddress` varchar(30) DEFAULT NULL,
  `smsserviceactivationnumber` varchar(50) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24846 DEFAULT CHARSET=latin1;

/*Table structure for table `logs_subs_inbox_queue` */

DROP TABLE IF EXISTS `logs_subs_inbox_queue`;

CREATE TABLE `logs_subs_inbox_queue` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) DEFAULT NULL,
  `type` int(10) DEFAULT NULL,
  `spid` varchar(30) DEFAULT NULL,
  `productid` varchar(30) DEFAULT NULL,
  `serviceid` varchar(30) DEFAULT NULL,
  `servicelist` varchar(1024) DEFAULT NULL,
  `updatetype` int(2) DEFAULT NULL,
  `updatetime` varchar(20) DEFAULT NULL,
  `updatedesc` varchar(255) DEFAULT NULL,
  `effectivetime` varchar(20) DEFAULT NULL,
  `expirytime` varchar(20) DEFAULT NULL,
  `accesscode` varchar(20) DEFAULT NULL,
  `chargemode` int(2) DEFAULT NULL,
  `mdspsubexpmode` varchar(2) DEFAULT NULL,
  `objecttype` varchar(2) DEFAULT NULL,
  `shortcode` varchar(20) DEFAULT NULL,
  `isfreeperiod` varchar(10) DEFAULT NULL,
  `paytype` int(4) DEFAULT NULL,
  `transactionid` varchar(50) DEFAULT NULL,
  `orderkey` varchar(30) DEFAULT NULL,
  `keyword` varchar(30) DEFAULT NULL,
  `durationofgraceperiod` varchar(10) DEFAULT NULL,
  `serviceavailability` varchar(10) DEFAULT NULL,
  `servicepaytype` varchar(20) DEFAULT NULL,
  `fee` varchar(20) DEFAULT NULL,
  `cycleendtime` varchar(20) DEFAULT NULL,
  `starttime` varchar(30) DEFAULT NULL,
  `channelid` int(4) DEFAULT NULL,
  `traceuniqueid` varchar(30) DEFAULT NULL,
  `messageid` varchar(20) DEFAULT NULL,
  `rentsuccess` varchar(10) DEFAULT NULL,
  `try` varchar(10) DEFAULT NULL,
  `in_time` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `in_id` (`in_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Table structure for table `logs_unsubs_inbox_queue` */

DROP TABLE IF EXISTS `logs_unsubs_inbox_queue`;

CREATE TABLE `logs_unsubs_inbox_queue` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) DEFAULT NULL,
  `type` int(10) DEFAULT NULL,
  `spid` varchar(30) DEFAULT NULL,
  `productid` varchar(30) DEFAULT NULL,
  `serviceid` varchar(30) DEFAULT NULL,
  `servicelist` varchar(1024) DEFAULT NULL,
  `updatetype` int(2) DEFAULT NULL,
  `updatetime` varchar(20) DEFAULT NULL,
  `updatedesc` varchar(255) DEFAULT NULL,
  `effectivetime` varchar(20) DEFAULT NULL,
  `expirytime` varchar(20) DEFAULT NULL,
  `accesscode` varchar(20) DEFAULT NULL,
  `chargemode` int(2) DEFAULT NULL,
  `mdspsubexpmode` varchar(2) DEFAULT NULL,
  `objecttype` varchar(2) DEFAULT NULL,
  `shortcode` varchar(20) DEFAULT NULL,
  `keyword` varchar(30) DEFAULT NULL,
  `cycleendtime` varchar(20) DEFAULT NULL,
  `updatereason` varchar(10) DEFAULT NULL,
  `paytype` int(4) DEFAULT NULL,
  `transactionid` varchar(50) DEFAULT NULL,
  `orderkey` varchar(30) DEFAULT NULL,
  `channelid` int(4) DEFAULT NULL,
  `traceuniqueid` varchar(30) DEFAULT NULL,
  `messageid` varchar(20) DEFAULT NULL,
  `rentsuccess` varchar(10) DEFAULT NULL,
  `try` varchar(10) DEFAULT NULL,
  `in_time` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `in_id` (`in_id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

/*Table structure for table `outbox_archive` */

DROP TABLE IF EXISTS `outbox_archive`;

CREATE TABLE `outbox_archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inbox_id` int(20) DEFAULT NULL,
  `msisdn` varchar(200) DEFAULT NULL,
  `out_sms` varchar(500) DEFAULT NULL,
  `intime_robi` datetime DEFAULT NULL,
  `intime_inbox` datetime DEFAULT NULL,
  `incomming_time` datetime DEFAULT NULL,
  `shortcode` varchar(200) DEFAULT NULL,
  `service_id` varchar(100) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `sms_status` varchar(200) DEFAULT 'processing',
  `sending_time` datetime DEFAULT NULL,
  `remarks` text,
  `try` int(11) DEFAULT '0',
  `isRead` int(11) DEFAULT NULL,
  `receiver_id` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `inbox_id` (`inbox_id`),
  KEY `NewIndex1` (`msisdn`),
  KEY `NewIndex2` (`shortcode`,`sms_status`),
  KEY `NewIndex3` (`receiver_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `outbox_queue` */

DROP TABLE IF EXISTS `outbox_queue`;

CREATE TABLE `outbox_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inbox_id` int(20) DEFAULT NULL,
  `msisdn` varchar(200) DEFAULT NULL,
  `out_sms` varchar(500) DEFAULT NULL,
  `intime_robi` datetime DEFAULT NULL,
  `intime_inbox` datetime DEFAULT NULL,
  `incomming_time` datetime DEFAULT NULL,
  `shortcode` varchar(200) DEFAULT NULL,
  `service_id` varchar(100) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `sms_status` varchar(200) DEFAULT 'processing',
  `sending_time` datetime DEFAULT NULL,
  `remarks` text,
  `try` int(11) DEFAULT '0',
  `isRead` int(11) DEFAULT NULL,
  `receiver_id` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `inbox_id` (`inbox_id`),
  KEY `NewIndex1` (`msisdn`),
  KEY `NewIndex2` (`shortcode`,`sms_status`),
  KEY `NewIndex3` (`receiver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24751 DEFAULT CHARSET=latin1;

/*Table structure for table `sdp_service_list` */

DROP TABLE IF EXISTS `sdp_service_list`;

CREATE TABLE `sdp_service_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(200) DEFAULT NULL,
  `service_id` varchar(200) DEFAULT NULL,
  `product_id` varchar(200) DEFAULT NULL,
  `shortcode` varchar(200) DEFAULT NULL,
  `keyword` varchar(200) DEFAULT NULL,
  `mo_url` varchar(500) DEFAULT NULL,
  `service_type` varchar(200) DEFAULT NULL,
  `creation_time` datetime DEFAULT NULL,
  `modification_time` datetime DEFAULT NULL,
  `service_status` tinyint(1) DEFAULT '1',
  `service_created_by` varchar(200) DEFAULT NULL,
  `sending_time` datetime DEFAULT NULL,
  `sms_status` varchar(100) DEFAULT 'processing',
  `try` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `NewIndex1` (`shortcode`),
  KEY `NewIndex2` (`service_id`),
  KEY `NewIndex3` (`service_id`,`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=289 DEFAULT CHARSET=latin1;

/*Table structure for table `subs_inbox` */

DROP TABLE IF EXISTS `subs_inbox`;

CREATE TABLE `subs_inbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msisdn` varchar(200) DEFAULT NULL,
  `in_sms` varchar(200) DEFAULT NULL,
  `shortcode` varchar(30) DEFAULT NULL,
  `service_id` varchar(100) DEFAULT NULL,
  `product_id` varchar(200) DEFAULT NULL,
  `incomming_time` datetime DEFAULT NULL,
  `processed_time` datetime DEFAULT NULL,
  `sms_status` varchar(100) DEFAULT 'processing',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

/*Table structure for table `subs_inbox_archive` */

DROP TABLE IF EXISTS `subs_inbox_archive`;

CREATE TABLE `subs_inbox_archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msisdn` varchar(200) DEFAULT NULL,
  `in_sms` varchar(200) DEFAULT NULL,
  `shortcode` varchar(30) DEFAULT NULL,
  `service_id` varchar(100) DEFAULT NULL,
  `product_id` varchar(200) DEFAULT NULL,
  `incomming_time` datetime DEFAULT NULL,
  `processed_time` datetime DEFAULT NULL,
  `sms_status` varchar(100) DEFAULT 'processing',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `subs_outbox` */

DROP TABLE IF EXISTS `subs_outbox`;

CREATE TABLE `subs_outbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inbox_id` int(11) DEFAULT NULL,
  `msisdn` varchar(200) DEFAULT NULL,
  `out_sms` varchar(500) DEFAULT NULL,
  `incomming_time` datetime DEFAULT NULL,
  `shortcode` varchar(200) DEFAULT NULL,
  `service_id` varchar(100) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `sms_status` varchar(200) DEFAULT 'Processing',
  `sending_time` datetime DEFAULT NULL,
  `remarks` text,
  `try` int(11) DEFAULT NULL,
  `isRead` int(11) DEFAULT NULL,
  `receiver_id` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `NewIndex1` (`sms_status`,`sending_time`),
  KEY `NewIndex2` (`sms_status`),
  KEY `NewIndex3` (`incomming_time`),
  KEY `NewIndex4` (`shortcode`,`sms_status`),
  KEY `NewIndex5` (`isRead`),
  KEY `NewIndex6` (`receiver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=413985 DEFAULT CHARSET=latin1;

/*Table structure for table `subs_outbox_archive` */

DROP TABLE IF EXISTS `subs_outbox_archive`;

CREATE TABLE `subs_outbox_archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inbox_id` int(11) DEFAULT NULL,
  `msisdn` varchar(200) DEFAULT NULL,
  `out_sms` varchar(500) DEFAULT NULL,
  `incomming_time` datetime DEFAULT NULL,
  `shortcode` varchar(200) DEFAULT NULL,
  `service_id` varchar(100) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `sms_status` varchar(200) DEFAULT 'Processing',
  `sending_time` datetime DEFAULT NULL,
  `remarks` text,
  `try` int(11) DEFAULT NULL,
  `isRead` int(11) DEFAULT NULL,
  `receiver_id` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `NewIndex1` (`sms_status`,`sending_time`),
  KEY `NewIndex2` (`sms_status`),
  KEY `NewIndex3` (`incomming_time`),
  KEY `NewIndex4` (`shortcode`,`sms_status`),
  KEY `NewIndex5` (`isRead`),
  KEY `NewIndex6` (`receiver_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
