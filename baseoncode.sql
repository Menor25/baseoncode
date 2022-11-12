/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.17-MariaDB : Database - baseoncode
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`baseoncode` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `baseoncode`;

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payer_name` varchar(255) DEFAULT NULL,
  `payer_email` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `ref_number` varchar(255) DEFAULT NULL,
  `payment_message` varchar(255) DEFAULT NULL,
  `payment_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `payment` */

insert  into `payment`(`id`,`payer_name`,`payer_email`,`amount`,`ref_number`,`payment_message`,`payment_date`) values 
(1,'Stephen Akaba','oseh@gmail.com','5000','1716927','Transaction fetched successfully','2022-07-31T14:37:52.000Z'),
(2,'Kelly O Esechie','kelly@gmail.com','5000','1716982','Transaction fetched successfully','2022-07-31T16:33:46.000Z'),
(3,'Ajiri Menor','johndoe@gmail.com','5000','1717165','Transaction fetched successfully','2022-07-31T21:38:36.000Z'),
(4,'Anthonia Success','anto@gmail.com','5000','1717174','Transaction fetched successfully','2022-07-31T21:45:49.000Z'),
(5,'Matthew John','matj@gmail.com','5000','1717359','Transaction fetched successfully','2022-08-01T03:09:08.000Z'),
(6,'Mabel Ifeoma Isiekwene','example@gmail.com','5000','1717364','Transaction fetched successfully','2022-08-01T03:13:16.000Z'),
(7,'Solomon Peter','jmenor2000@gmail.com','5000','1717418','Transaction fetched successfully','2022-08-01T04:41:53.000Z'),
(8,'Adaora Obohhh','PAYID-MLTWT3I0NT71823TR677541T','10.00','62e769eaae16e','approved','2022-08-01 07:52:08'),
(9,'Solomon Peters','jmenor200@gmail.com','5000','1717620','Transaction fetched successfully','2022-08-01T08:30:42.000Z'),
(10,NULL,'efe@gmail.com','500000','3uc6zilrt6','success','08/01/2022 05:24:20 pm'),
(11,NULL,'aja@gmail.com','5000','ilxp1jd09q','success','08/01/2022 05:28:30 pm');

/*Table structure for table `user_registration` */

DROP TABLE IF EXISTS `user_registration`;

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `whatsapp_number` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_registration` */

insert  into `user_registration`(`id`,`full_name`,`email`,`phone_number`,`whatsapp_number`,`country`,`state`,`city`) values 
(1,'Theophilus Ajiri Menor','example@gmail.com','07000000000','07000000000','Nigeria','Edo','Benin'),
(2,'Theophilus Ajiri Menors','example@gmail.com','07000000001','07000000001','Nigeria','Edo','Benin'),
(4,'Whyte Edigin','toluwaset@gmail.com','07053114174','07053114174','Nigeria','Edo','Benin'),
(7,'Rebekah Menor','rebekah@gmail.com','08030303030','08030303030','Nigeria','Edo','Benin'),
(8,'Onome Oseh','jmenor2000@gmail.com','+2348030303030','08030303030','Nigeria','Edo','Benin'),
(11,'Samuel Ikponmwosa Ojo-Isaac','jmenor2000@gmail.com','08033714734','08033714734','Other','Edo','Benin'),
(14,'Stephen Akaba','oseh@gmail.com','07033368951','07033368951','Nigeria','Edo','Benin'),
(15,'Kelly O Esechie','kelly@gmail.com','08183100002','08183100002','Nigeria','Edo','Benin'),
(16,'Ajiri Menor','johndoe@gmail.com','+2348030303031','+2348030303031','Nigeria','Delta','Asaba'),
(17,'Anthonia Success','anto@gmail.com','+2348030303032','+2348030303032','Nigeria','Edo','Benin'),
(18,'Matthew John','matj@gmail.com','08183100172','08183100172','Nigeria','Edo','Benin'),
(19,'Mabel Ifeoma Isiekwene','example@gmail.com','+2348030303020','+2348030303020','Nigeria','Edo','Benin'),
(20,'Solomon Peter','jmenor2000@gmail.com','07061257936','07061257936','Nigeria','Edo','Benin'),
(21,'Samuel Omorogbe','samo@gmail.com','08055114361','08055114361','Monaco','Edo','Benin'),
(22,'Samuel Omorogbes','samso@gmail.com','08055114361','08055114361','Monaco','Edo','Benin'),
(23,'Samuel Omorogbess','samsos@gmail.com','08055114361','08055114361','Monaco','Edo','Benin'),
(24,'Samuel Omorogbesss','samsoas@gmail.com','08055114361','08055114361','Monaco','Edo','Benin'),
(25,'Samuel Omorogbessss','samsoass@gmail.com','08055114361','08055114361','Monaco','Edo','Benin'),
(26,'Adaora Obohh','example@gmail.com','07053114174','07053114174','Montserrat','Edo','Benin'),
(27,'Adaora Obohhh','examplse@gmail.com','07053114174','07053114174','Montserrat','Edo','Benin'),
(28,'Solomon Peters','jmenor200@gmail.com','07061257936','08055114361','Nigeria','Edo','Benin'),
(33,'Samson Efe','efe@gmail.com','07061257936','07061257936','Nigeria','Edo','Benin'),
(34,'Ajiri Oghene','aja@gmail.com','07053114174','07053114174','Nigeria','Edo','Benin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
