/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.32-MariaDB : Database - jeevan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jeevan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `jeevan`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `code` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `pwd` varchar(250) DEFAULT NULL,
  `org_pwd` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`a_id`,`role_id`,`code`,`name`,`username`,`email`,`mobile`,`address`,`profile_pic`,`pwd`,`org_pwd`,`status`,`created_at`,`updated_at`,`created_by`) values (1,1,'123','Admin',NULL,'admin@gmail.com','8500050944','hyd','1583036959.png','e10adc3949ba59abbe56e057f20f883e','123456',1,'2019-05-17 14:12:30','2019-05-21 18:46:35',0),(21,2,'123','praveen',NULL,'praveen@gmail.com','8528528522',NULL,NULL,'e10adc3949ba59abbe56e057f20f883e','123456',1,NULL,NULL,1),(22,3,'123','Dr Siva',NULL,'sivam@gmail.com','8688683222','kothapalli  village  kadapa  dist','','e10adc3949ba59abbe56e057f20f883e','123456',1,NULL,'2020-03-01 20:06:42',1),(23,2,'123','test one',NULL,'testone@gmail.com','1233321223',NULL,NULL,'e10adc3949ba59abbe56e057f20f883e','123456',1,NULL,'2019-06-25 11:04:08',1),(24,2,'123','harishhr',NULL,'harishhr@gmail.com','1234567890',NULL,NULL,'e10adc3949ba59abbe56e057f20f883e','123456',1,NULL,NULL,1),(25,3,NULL,'Saradhi',NULL,'sadd@gmail.com','15345345345','vf','','e10adc3949ba59abbe56e057f20f883e','123456',1,NULL,'2020-03-01 20:06:19',1);

/*Table structure for table `banners` */

DROP TABLE IF EXISTS `banners`;

CREATE TABLE `banners` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_img` varchar(250) DEFAULT NULL,
  `b_org_img` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1' COMMENT '1=active;0=deactive;2=deleted',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `banners` */

insert  into `banners`(`b_id`,`b_img`,`b_org_img`,`status`,`created_at`,`updated_at`,`created_by`) values (3,'1583496729.png','1568639185.png',1,'2020-03-06 17:42:09','0000-00-00 00:00:00',1),(4,'1583496751.png','1581514750.png',1,'2020-03-06 17:42:31','0000-00-00 00:00:00',1);

/*Table structure for table `lab_tests` */

DROP TABLE IF EXISTS `lab_tests`;

CREATE TABLE `lab_tests` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_id` int(11) DEFAULT NULL,
  `test_type` varchar(250) DEFAULT NULL,
  `test_name` varchar(250) DEFAULT NULL,
  `test_duartion` varchar(250) DEFAULT NULL,
  `test_amount` varchar(250) DEFAULT NULL,
  `delivery_charge` varchar(250) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

/*Data for the table `lab_tests` */

insert  into `lab_tests`(`l_id`,`lab_id`,`test_type`,`test_name`,`test_duartion`,`test_amount`,`delivery_charge`,`discount`,`status`,`created_at`,`updated_at`,`created_by`) values (1,2,'test','like','10','200','45',NULL,1,'2018-11-01 17:34:06','2018-11-02 13:00:08',2),(2,2,'test','like that','20','100','45',NULL,1,'2018-11-01 17:39:08','2018-11-22 11:55:56',2),(3,3,'thoride','sugar','10 min','250','25',NULL,1,'2018-11-02 17:21:32','2018-11-02 17:21:32',3),(4,3,'thoride','blood','30 min','300','25',NULL,1,'2018-11-02 17:21:49','2018-11-02 17:21:49',3),(5,2,'All','boold','30 min','120','20',NULL,0,'2018-11-19 15:47:22','2018-11-28 17:39:47',2),(6,6,'lab','Dengue antigen','10','300','50',NULL,1,'2018-11-21 11:09:52','2018-11-27 12:40:53',6),(7,6,'lab','Ferritin','5','400','50',NULL,2,'2018-11-21 11:12:12','2018-11-23 17:34:47',6),(8,6,'lab','Lipid profile','15','500','50',NULL,2,'2018-11-21 11:12:57','2018-11-27 12:08:40',6),(9,6,'Lab','TSH','5','500','50',NULL,2,'2018-11-21 11:13:54','2018-11-21 12:49:34',6),(10,6,'Lab','Glucose Fasting blood','5','700','50',NULL,2,'2018-11-21 11:15:15','2018-11-21 11:39:38',6),(11,6,'lab','anemia','25','100','25',NULL,1,'2018-11-21 16:13:17','2018-11-27 12:09:00',6),(12,6,'lab','bone','15','150','30',NULL,2,'2018-11-21 16:13:50','2018-11-23 17:57:52',6),(13,6,'lab','ct scan','30','100','40',NULL,2,'2018-11-21 16:16:11','2018-11-23 17:43:31',6),(14,2,'tszjchjxhjghj','h','hghjgh','120','10 ',NULL,2,'2018-11-22 11:12:21','2018-11-22 11:12:49',2),(15,6,'lab','Liver Function Test','10','500','50',NULL,2,'2018-11-22 12:28:59','2018-11-22 12:29:10',6),(16,6,'lab','kidney function test','20','500','50',NULL,1,'2018-11-23 17:32:28','2018-11-23 17:32:28',6),(17,6,'lab','bone','30 min','200','100',NULL,2,'2018-11-23 17:58:07','2018-11-27 12:09:14',6),(18,6,'lab','TSH','10','500','50',NULL,1,'2018-11-23 18:09:04','2018-11-23 18:09:04',6),(19,6,'lab','Physical Examination','30','1000','50',NULL,1,'2018-11-26 10:11:58','2018-11-27 17:30:56',6),(20,6,'lab','Blood Test','10','250','50',NULL,1,'2018-11-26 10:12:56','2018-11-26 10:12:56',6),(21,6,'Radiology','Ultrasonography','20min','1500','50',NULL,2,'2018-11-26 10:14:13','2018-11-26 10:14:51',6),(22,6,'lab','Glucose Test','5','200','50',NULL,1,'2018-11-26 10:15:48','2018-11-26 10:15:48',6),(23,6,'lab','Serology','10','300','50',NULL,1,'2018-11-26 10:16:42','2018-11-26 10:16:42',6),(24,6,'Lab','Platelet Count','10','350','50',NULL,1,'2018-11-26 10:20:30','2018-11-26 10:20:30',6),(25,6,'lab','R.B.C. count','10','250','50',NULL,1,'2018-11-26 10:20:57','2018-11-26 10:20:57',6),(26,6,'lab','Haemoglobin','15','150','50',NULL,1,'2018-11-26 10:23:38','2018-11-26 10:23:38',6),(27,6,'lab','Total W.B.C. Differential Count','10','300','50',NULL,1,'2018-11-26 10:24:41','2018-11-26 10:24:41',6),(28,6,'lab','E.S.R.','15','200','50',NULL,1,'2018-11-26 10:25:34','2018-11-27 17:31:22',6),(29,6,'lab','Peripheral Smear','15','350','50',NULL,1,'2018-11-26 10:26:18','2018-11-26 10:26:18',6),(30,11,'lab','Blood Oxygen Level','15','500','40',NULL,1,'2018-11-26 12:41:07','2018-11-26 15:03:05',11),(31,11,'lab','Cholesterol Levels','15','400','40',NULL,1,'2018-11-26 12:41:49','2018-11-26 12:41:49',11),(32,11,'lab','Pap Smear','20','600','40',NULL,1,'2018-11-26 13:38:55','2018-11-26 13:38:55',11),(33,11,'lab','Rheumatoid Factor RF Test','30','800','40',NULL,1,'2018-11-26 13:39:33','2018-11-26 13:39:33',11),(34,11,'lab','Triglycerides Test','25','650','40',NULL,1,'2018-11-26 13:40:09','2018-11-26 13:40:09',11),(35,12,'lab','Vitamin D Test','15','300','45',NULL,1,'2018-11-26 15:14:57','2018-11-26 16:03:02',12),(36,12,'lab','Whooping Cough Diagnosis','25','350','45',NULL,0,'2018-11-26 15:16:14','2018-11-26 16:03:23',12),(37,11,'lab','Skin Biopsy','30','450','45',NULL,1,'2018-11-26 15:17:15','2018-11-26 15:17:15',11),(38,11,'lab','Dengue antigen','20','400','40',NULL,1,'2018-11-26 17:29:55','2018-11-26 17:29:55',11),(39,7,'lab','Dengue antigen','25','600','40',NULL,1,'2018-11-26 17:50:44','2018-11-26 18:02:03',7),(40,7,'lab','Thyroxine T4 Test','30','500','40',NULL,1,'2018-11-26 17:56:31','2018-11-26 18:01:57',7),(41,7,'lab','Sodium Blood Test','25','700','40',NULL,1,'2018-11-26 17:57:56','2018-11-26 18:01:52',7),(42,6,'lab','Allergy Tests','24','400','40',NULL,1,'2018-11-27 12:11:30','2018-11-27 12:11:30',6),(43,6,'lab','Antiglobulin Tests','24','500','40',NULL,1,'2018-11-27 12:12:30','2018-11-27 12:12:30',6),(44,6,'lab','Bilirubin Test','24','700','40',NULL,1,'2018-11-27 12:14:36','2018-11-27 12:14:36',6),(45,6,'lab','C Peptide','24','800','40',NULL,1,'2018-11-27 12:16:35','2018-11-27 12:16:35',6),(46,6,'lab','HFE test','24','550','40',NULL,1,'2018-11-27 12:20:33','2018-11-27 12:20:33',6),(47,6,'lab','Kidney Biopsy','24','650','40',NULL,1,'2018-11-27 12:21:36','2018-11-27 12:21:36',6),(48,2,'test type 1','test name1','10 min','100','50',NULL,1,'2018-11-28 18:25:19','2018-11-28 18:25:19',2),(49,2,'test type 2','test name1','20 min','200','42',NULL,1,'2018-11-28 18:25:20','2018-11-28 18:25:20',2),(50,2,'test type 3','test name2','10 min','600','60',NULL,1,'2018-11-28 18:25:20','2018-11-28 18:25:20',2),(51,6,'test type 1','test name1','10 min','100','50',NULL,1,'2018-11-28 18:47:22','2018-11-28 18:47:22',6),(52,6,'test type 2','test name1','20 min','200','42',NULL,1,'2018-11-28 18:47:22','2018-11-28 18:47:22',6),(53,6,'test type 3','test name2','10 min','600','60',NULL,1,'2018-11-28 18:47:22','2018-11-28 18:47:22',6),(54,6,'test type 4','lab test1','10 min','100','50',NULL,2,'2018-11-29 12:34:52','2018-11-29 12:48:33',6),(55,6,'test type 5','lab test2','2hrs','200','50',NULL,2,'2018-11-29 12:34:52','2018-11-29 12:48:44',6),(56,6,'test type 6','lab test3','15 min','600','60',NULL,2,'2018-11-29 12:34:52','2018-11-29 12:48:49',6),(57,6,'lab','CBC(Complete Blood Count)','10 min','100','50',NULL,1,'2018-11-29 13:13:51','2018-11-29 13:13:51',6),(58,6,'lab','BMP(Basic metabolic panel)','2hrs','200','50',NULL,1,'2018-11-29 13:13:51','2018-11-29 13:13:51',6),(59,6,'lab','ESR(Sedimentation Rate)','15 min','600','60',NULL,1,'2018-11-29 13:13:51','2018-11-29 13:13:51',6),(60,6,'lab','CMP(Comprehensive Metabolic Panel)','24hrs','400','100',NULL,1,'2018-11-29 13:13:51','2018-11-29 13:13:51',6),(61,14,'lab','Tsh','10 min','100','50',NULL,1,'2018-12-10 11:44:43','2018-12-10 11:44:43',14),(62,14,'lab','glucose test','20 min','200','42',NULL,1,'2018-12-10 11:44:43','2018-12-10 11:44:43',14),(63,14,'lab','platelet count','10 min','600','60',NULL,1,'2018-12-10 11:44:43','2019-02-19 14:10:32',14),(64,6,'anaemia','iron','24hrs','20','40',NULL,1,'2018-12-13 12:15:09','2018-12-13 12:15:09',6),(65,6,'anaemia','eye','24hrs','250','40',NULL,1,'2018-12-13 12:15:30','2018-12-13 12:15:30',6),(66,28,'one ','test one','2 hrs','250','120',NULL,1,'2019-10-01 10:42:04','2019-10-01 10:42:04',28),(67,1,'Testing','Hllo','1 hr','120','25',NULL,1,'2020-03-07 15:07:16','2020-03-07 15:27:19',1),(68,1,'Boold','Blood Test','1 hr','450','12',NULL,1,'2020-03-07 15:54:36','2020-03-07 15:54:36',1),(69,1,'Boold','Himoglobin Test','1 hr','500','30',NULL,1,'2020-03-07 15:55:10','2020-03-07 15:55:10',1),(70,1,'Boold','White blood Test','1 hr','1000','40',NULL,1,'2020-03-07 15:55:31','2020-03-07 15:55:31',1),(71,1,'Boold','RBC','1hr','50','10',NULL,1,'2020-03-07 15:55:58','2020-03-07 15:55:58',1);

/*Table structure for table `modules` */

DROP TABLE IF EXISTS `modules`;

CREATE TABLE `modules` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(250) DEFAULT NULL,
  `m_status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `modules` */

insert  into `modules`(`m_id`,`m_name`,`m_status`,`created_at`,`updated_at`,`created_by`) values (1,'Role Managemnet ',1,'2020-03-01 18:48:59','2019-08-27 22:37:54',1),(13,'Banners',1,'2020-03-06 17:16:43',NULL,1),(14,'PACKEAGES',1,'2020-03-07 11:50:58',NULL,1),(15,'TESTS',1,'2020-03-07 11:52:01','2020-03-07 11:52:01',1);

/*Table structure for table `modules_menu` */

DROP TABLE IF EXISTS `modules_menu`;

CREATE TABLE `modules_menu` (
  `m_m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` int(11) DEFAULT NULL,
  `m_menu_name` varchar(250) DEFAULT NULL,
  `m_menu_url` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

/*Data for the table `modules_menu` */

insert  into `modules_menu`(`m_m_id`,`m_name`,`m_menu_name`,`m_menu_url`,`status`,`created_at`,`updated_at`,`created_by`) values (1,1,'Roles','user/roles',1,'2019-05-20 10:22:03','2019-08-27 21:46:21',1),(2,1,'Users Rights','user/rights',1,'2019-05-20 10:22:21','2019-08-27 21:46:26',1),(3,1,'Users','user/add',1,'2019-05-20 10:22:38','2019-08-27 21:46:34',1),(52,13,'Add','banners/add',1,'2020-03-06 17:17:30',NULL,1),(53,13,'List','banners/index',1,'2020-03-06 17:17:53',NULL,1),(54,14,'ADD','lab/packages',1,'2020-03-07 11:51:16',NULL,1),(55,15,'LAB','lab/index',1,'2020-03-07 11:52:24',NULL,1),(56,14,'LIST','lab/packageslist',1,'2020-03-07 16:27:35',NULL,1);

/*Table structure for table `packages_test_list` */

DROP TABLE IF EXISTS `packages_test_list`;

CREATE TABLE `packages_test_list` (
  `p_t_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_t_p_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

/*Data for the table `packages_test_list` */

insert  into `packages_test_list`(`p_t_id`,`l_t_p_id`,`test_id`,`status`,`created_at`,`updated_at`,`created_by`) values (1,1,1,2,'2018-11-02 14:38:49','2018-11-22 11:59:05',2),(2,1,2,2,'2018-11-02 14:38:49','2018-11-22 11:59:05',2),(3,2,1,1,'2018-11-02 14:39:30','2018-11-02 18:50:05',2),(4,1,2,2,'2018-11-02 17:02:29','2018-11-22 11:59:05',2),(5,1,2,2,'2018-11-02 17:02:42','2018-11-22 11:59:05',2),(6,2,2,1,'2018-11-02 17:06:49','2018-11-22 11:55:56',2),(7,3,3,1,'2018-11-02 17:22:13','2018-11-02 18:51:45',3),(8,4,3,1,'2018-11-02 17:22:34','2018-11-26 17:51:51',3),(9,8,4,1,'2018-11-02 17:22:34','2018-11-23 17:33:18',3),(10,5,6,1,'2018-11-21 12:14:56','2018-11-27 12:08:51',6),(11,10,7,2,'2018-11-21 12:14:56','2018-11-23 17:34:47',6),(12,11,8,2,'2018-11-21 12:14:56','2018-11-27 12:08:40',6),(13,12,9,1,'2018-11-21 12:14:56','2018-11-21 12:14:56',6),(14,6,6,1,'2018-11-21 14:36:57','2018-11-27 12:08:51',6),(15,14,7,2,'2018-11-21 14:36:57','2018-11-23 17:34:47',6),(16,15,8,2,'2018-11-21 14:36:57','2018-11-27 12:08:40',6),(17,7,6,1,'2018-11-21 14:39:11','2018-11-27 12:08:51',6),(18,17,7,2,'2018-11-21 14:39:11','2018-11-23 17:34:47',6),(19,18,8,2,'2018-11-21 14:39:11','2018-11-27 12:08:40',6),(20,8,7,2,'2018-11-21 14:43:52','2018-11-23 17:34:47',6),(21,20,8,2,'2018-11-21 14:43:52','2018-11-27 12:08:40',6),(22,9,6,1,'2018-11-21 14:58:25','2018-11-27 12:08:51',6),(23,22,7,2,'2018-11-21 14:58:25','2018-11-23 17:34:47',6),(24,23,8,2,'2018-11-21 14:58:25','2018-11-27 12:08:40',6),(25,10,7,2,'2018-11-21 15:02:38','2018-11-23 17:34:47',6),(26,25,8,2,'2018-11-21 15:02:38','2018-11-27 12:08:40',6),(27,10,8,2,'2018-11-21 15:04:42','2018-11-27 12:08:40',6),(28,7,7,2,'2018-11-21 15:08:23','2018-11-23 17:34:47',6),(29,9,7,2,'2018-11-21 15:08:56','2018-11-23 17:34:47',6),(30,9,6,1,'2018-11-21 16:17:14','2018-11-27 12:08:51',6),(31,9,8,2,'2018-11-21 16:17:14','2018-11-27 12:08:40',6),(32,9,11,1,'2018-11-21 16:17:14','2018-11-27 12:09:00',6),(33,9,12,2,'2018-11-21 16:17:14','2018-11-23 17:57:52',6),(34,9,13,2,'2018-11-21 16:17:14','2018-11-23 17:43:31',6),(35,11,1,1,'2018-11-22 11:59:49','2018-11-22 11:59:49',2),(36,35,2,1,'2018-11-22 11:59:49','2018-11-22 11:59:49',2),(37,36,5,0,'2018-11-22 11:59:49','2018-11-28 17:39:47',2),(38,12,1,1,'2018-11-22 12:03:34','2018-11-22 12:03:34',2),(39,38,2,1,'2018-11-22 12:03:34','2018-11-22 12:03:34',2),(40,14,2,1,'2018-11-22 12:11:58','2018-11-22 12:13:12',2),(41,14,5,0,'2018-11-22 12:11:58','2018-11-28 17:39:47',2),(42,14,1,1,'2018-11-22 12:13:12','2018-11-22 12:13:12',2),(43,15,1,2,'2018-11-22 12:14:09','2018-11-22 12:18:48',2),(44,15,2,2,'2018-11-22 12:14:09','2018-11-22 12:18:48',2),(45,16,1,1,'2018-11-22 12:19:12','2018-11-22 12:19:31',2),(46,16,2,1,'2018-11-22 12:19:12','2018-11-22 12:19:31',2),(47,16,5,0,'2018-11-22 12:19:32','2018-11-28 17:39:47',2),(48,17,2,1,'2018-11-22 12:54:46','2018-11-22 12:55:31',2),(49,18,7,2,'2018-11-23 17:36:12','2018-11-23 17:41:55',6),(50,18,13,2,'2018-11-23 17:36:12','2018-11-23 17:43:31',6),(51,19,13,2,'2018-11-23 17:40:56','2018-11-23 17:43:31',6),(52,19,16,2,'2018-11-23 17:40:56','2019-02-19 10:45:41',6),(53,18,16,2,'2018-11-23 18:02:42','2018-11-23 18:04:35',6),(54,20,16,2,'2018-11-23 18:05:22','2018-11-27 12:07:51',6),(55,21,16,1,'2018-11-23 18:07:57','2018-11-23 18:07:57',6),(56,22,24,1,'2018-11-26 10:28:25','2018-11-26 10:32:43',6),(57,22,25,1,'2018-11-26 10:28:25','2018-11-26 10:32:43',6),(58,22,26,1,'2018-11-26 10:28:25','2018-11-26 10:32:43',6),(59,22,27,1,'2018-11-26 10:28:25','2018-11-26 10:32:43',6),(60,22,28,1,'2018-11-26 10:28:25','2018-11-26 10:32:43',6),(61,22,29,1,'2018-11-26 10:28:25','2018-11-26 10:32:43',6),(62,23,30,1,'2018-11-26 13:41:16','2018-11-26 15:03:05',11),(63,23,31,1,'2018-11-26 13:41:16','2018-11-26 14:47:01',11),(64,23,32,1,'2018-11-26 13:41:16','2018-11-26 14:47:01',11),(65,23,33,1,'2018-11-26 13:41:16','2018-11-26 14:47:01',11),(66,9,19,1,'2018-11-26 14:45:56','2018-11-26 14:45:56',6),(67,9,20,1,'2018-11-26 14:45:56','2018-11-26 14:45:56',6),(68,9,22,1,'2018-11-26 14:45:56','2018-11-26 14:45:56',6),(69,24,35,1,'2018-11-26 15:19:50','2018-11-26 16:03:02',12),(70,25,35,2,'2018-11-26 15:57:52','2018-11-26 16:09:02',12),(71,25,36,2,'2018-11-26 15:57:52','2018-11-26 16:09:02',12),(72,26,39,1,'2018-11-26 17:58:51','2018-11-26 18:02:03',7),(73,26,40,1,'2018-11-26 17:58:51','2018-11-26 18:01:57',7),(74,26,41,1,'2018-11-26 17:58:51','2018-11-26 18:01:52',7),(75,27,16,2,'2018-11-26 18:45:38','2019-02-19 10:45:52',6),(76,27,19,2,'2018-11-26 18:45:38','2019-02-19 10:45:52',6),(77,28,26,1,'2018-11-27 12:28:13','2018-11-27 12:28:13',6),(78,28,27,1,'2018-11-27 12:28:13','2018-11-27 12:28:13',6),(79,28,28,1,'2018-11-27 12:28:13','2018-11-27 12:28:13',6),(80,28,29,1,'2018-11-27 12:28:13','2018-11-27 12:28:13',6),(81,28,42,1,'2018-11-27 12:28:13','2018-11-27 12:28:13',6),(82,28,43,1,'2018-11-27 12:28:13','2018-11-27 12:28:13',6),(83,28,44,1,'2018-11-27 12:28:13','2018-11-27 12:28:13',6),(84,28,45,1,'2018-11-27 12:28:13','2018-11-27 12:28:13',6),(85,28,46,1,'2018-11-27 12:28:13','2018-11-27 12:28:13',6),(86,28,47,1,'2018-11-27 12:28:13','2018-11-27 12:28:13',6),(87,29,6,1,'2018-11-27 12:32:50','2018-11-27 12:32:50',6),(88,29,11,1,'2018-11-27 12:32:50','2018-11-27 12:32:50',6),(89,29,16,1,'2018-11-27 12:32:50','2018-11-27 12:32:50',6),(90,29,18,1,'2018-11-27 12:32:50','2018-11-27 12:32:50',6),(91,29,19,1,'2018-11-27 12:32:50','2018-11-27 12:32:50',6),(92,29,20,1,'2018-11-27 12:32:50','2018-11-27 12:32:50',6),(93,29,22,1,'2018-11-27 12:32:50','2018-11-27 12:32:50',6),(94,29,23,1,'2018-11-27 12:32:50','2018-11-27 12:32:50',6),(95,29,24,1,'2018-11-27 12:32:50','2018-11-27 12:32:50',6),(96,29,25,1,'2018-11-27 12:32:50','2018-11-27 12:32:50',6),(97,13,1,1,'2018-11-28 12:09:19','2018-11-28 12:09:19',2),(98,13,2,1,'2018-11-28 12:09:19','2018-11-28 12:09:19',2),(99,30,61,2,'2018-12-10 11:46:03','2019-02-19 10:47:05',14),(100,30,62,2,'2018-12-10 11:46:03','2019-02-19 10:47:05',14),(101,30,63,1,'2018-12-10 11:46:03','2019-02-19 14:10:32',14),(102,31,67,1,'2020-03-07 15:33:11','2020-03-07 15:33:11',1),(103,32,68,1,'2020-03-07 15:57:35','2020-03-07 15:57:35',1),(104,32,69,1,'2020-03-07 15:57:36','2020-03-07 15:57:36',1),(105,32,70,1,'2020-03-07 15:57:36','2020-03-07 15:57:36',1),(106,32,71,1,'2020-03-07 15:57:36','2020-03-07 15:57:36',1);

/*Table structure for table `test_packages` */

DROP TABLE IF EXISTS `test_packages`;

CREATE TABLE `test_packages` (
  `l_t_p_id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_id` int(11) DEFAULT NULL,
  `test_package_name` varchar(250) DEFAULT NULL,
  `test_type` varchar(250) DEFAULT NULL,
  `amount` varchar(250) DEFAULT NULL,
  `discount` varchar(250) DEFAULT NULL,
  `percentage` varchar(250) DEFAULT NULL,
  `instruction` text,
  `delivery_charge` decimal(10,2) DEFAULT NULL,
  `reports_time` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`l_t_p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `test_packages` */

insert  into `test_packages`(`l_t_p_id`,`lab_id`,`test_package_name`,`test_type`,`amount`,`discount`,`percentage`,`instruction`,`delivery_charge`,`reports_time`,`status`,`created_at`,`updated_at`,`created_by`) values (1,2,'pack1',NULL,'1000','500','50.00','testing  mode','50.00',NULL,2,'2018-11-02 14:38:49','2018-11-22 11:59:04',2),(2,2,'pack2',NULL,'500','50','10.00','same  as  above','50.00',NULL,1,'2018-11-02 14:39:30','2018-11-02 18:50:05',2),(3,3,'bpack1',NULL,'1000','500','50.00','testing  mode','50.00',NULL,1,'2018-11-02 17:22:13','2018-11-02 18:51:45',3),(4,3,'bpack2',NULL,'10033','500','4.98','testing  mode dfd','200.00','20 ',1,'2018-11-02 17:22:34','2018-11-26 17:51:51',3),(5,6,'complete health checkup',NULL,'600','100','16.67','dgggggggg','50.00',NULL,2,'2018-11-21 12:14:56','2018-11-21 13:12:18',6),(6,6,'complete checkup',NULL,'600','100','16.67','test','50.00',NULL,2,'2018-11-21 14:36:57','2018-11-21 14:37:34',6),(7,6,'Test package',NULL,'500','125','25.00','test','50.00',NULL,1,'2018-11-21 14:39:11','2018-11-21 15:08:23',6),(8,6,'Test package1',NULL,'400','50','12.50','test','50.00',NULL,1,'2018-11-21 14:43:52','2018-11-23 17:33:18',6),(9,6,'Master health checkup',NULL,'700','150','21.43','test','50.00','24',1,'2018-11-21 14:58:25','2018-11-26 14:45:56',6),(10,6,'Test package3',NULL,'550','75','13.64','tst','50.00',NULL,2,'2018-11-21 15:02:38','2018-11-27 12:08:10',6),(11,2,'pack1',NULL,'5000','10','0.20','ntg','10.00',NULL,1,'2018-11-22 11:59:48','2018-11-22 11:59:48',2),(12,2,'vasu',NULL,'2000','1000','50.00','like ','20.00',NULL,1,'2018-11-22 12:03:33','2018-11-22 12:03:33',2),(13,2,'vasu11',NULL,'2000','10','0.50%','ntg','10.00','24',1,'2018-11-22 12:04:46','2018-11-28 12:09:18',2),(14,2,'vvvv',NULL,'2000','1000','50.00','vvvv','11.00',NULL,1,'2018-11-22 12:11:57','2018-11-22 12:13:11',2),(15,2,'cvzxcv',NULL,'5000','1000','20.00','cvxc','22.00',NULL,2,'2018-11-22 12:14:09','2018-11-22 12:18:47',2),(16,2,'xxx',NULL,'2000','1000','50.00','ntg','100.00',NULL,1,'2018-11-22 12:19:11','2018-11-22 12:19:31',2),(17,2,'reddy',NULL,'5000','1000','20.00','ntg','10.00','100',1,'2018-11-22 12:54:46','2018-11-22 12:55:30',2),(18,6,'tst1',NULL,'1000','100','10.00','uu','50.00','2',2,'2018-11-23 17:36:12','2018-11-23 18:04:35',6),(19,6,'ts2',NULL,'500','50','10.00','gfj','50.00','2',2,'2018-11-23 17:40:56','2019-02-19 10:45:41',6),(20,6,'tst1',NULL,'500','50','10.00','jgj','50.00','2',2,'2018-11-23 18:05:22','2018-11-27 12:07:51',6),(21,6,'Mhealth checkup',NULL,'500','50','10.00','fgf','50.00','2',1,'2018-11-23 18:07:57','2018-11-23 18:07:57',6),(22,6,'haemogram pack',NULL,'1000','50','5.00','tst','45.00','5',1,'2018-11-26 10:28:25','2018-11-26 10:32:43',6),(23,11,'Master plus',NULL,'2000','350','17.50','test','40.00','24',1,'2018-11-26 13:41:16','2018-11-26 14:47:01',11),(24,12,'Health plus',NULL,'600','150','25.00','test','45.00','24',2,'2018-11-26 15:19:50','2018-11-26 15:57:03',12),(25,12,'Health plus',NULL,'600','150','25.00','test','45.00','24',2,'2018-11-26 15:57:52','2018-11-26 16:09:02',12),(26,7,'Health plus',NULL,'2000','150','7.50','test','40.00','24',0,'2018-11-26 17:58:51','2018-11-26 18:00:58',7),(27,6,'Health checkup',NULL,'500','100','20.00%','tst','40.00','24',2,'2018-11-26 18:45:38','2019-02-19 10:45:52',6),(28,6,'Special Health Package',NULL,'6000','500','8.33%','test','50.00','48',1,'2018-11-27 12:28:13','2018-11-27 12:28:13',6),(29,6,'General Health Package',NULL,'7500','700','9.33%','tst','50.00','48',1,'2018-11-27 12:32:50','2018-11-27 12:32:50',6),(30,14,'Health checkup',NULL,'1000','5','0.50%','test','50.00','4',2,'2018-12-10 11:46:03','2019-02-19 10:47:05',14),(31,1,'vvvvvv','Testing','250','10','4.00%','xzxcxcZX','123.00','12',1,'2020-03-07 15:33:10','2020-03-07 15:33:10',1),(32,1,'COmplete Blood tests','Boold','1500','500','33.33%','Medspace softech pvt ltdcarry on the business of Software designing, development, customisation, implementation, maintenance, testing and benchmarking, designing, developing and dealing in computer software and solutions, and to import, export, sell, purchase, distribute, host (in data centres or over the web) or otherwise deal in own and third party computer software packages, programs and solutions, and to provide internet / web based applications, services and solutions, provide or take up Information technology related assignments on sub-contracting basis','450.00','10 ',1,'2020-03-07 15:57:35','2020-03-07 15:57:35',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `otp` varchar(250) DEFAULT NULL,
  `otp_verified` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `token` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`name`,`email`,`mobile`,`address`,`password`,`org_password`,`profile_pic`,`status`,`otp`,`otp_verified`,`created_at`,`updated_at`,`token`) values (1,'vasu','vasu@gmail.com','8500050994','kadapa',NULL,NULL,'0.892982001583494334vasuimg.png',1,'865996',1,'2020-03-06 17:02:14','2020-03-06 17:00:07',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
