/*
SQLyog Professional v10.42 
MySQL - 5.5.8 : Database - mobile_device_management
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mobile_device_management` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mobile_device_management`;

/*Table structure for table `accessories` */

DROP TABLE IF EXISTS `accessories`;

CREATE TABLE `accessories` (
  `accessories_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`accessories_id`,`product_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `accessories_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `accessories` */

/*Table structure for table `brand` */

DROP TABLE IF EXISTS `brand`;

CREATE TABLE `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`,`product_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `brand_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `brand` */

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_no` double DEFAULT NULL,
  `address` text,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

/*Table structure for table `new_product` */

DROP TABLE IF EXISTS `new_product`;

CREATE TABLE `new_product` (
  `new_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `accessories_id` int(11) NOT NULL,
  `added_date` datetime DEFAULT NULL,
  PRIMARY KEY (`new_product_id`,`product_id`,`accessories_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `new_product` */

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_time_date` datetime DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `accessories_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`,`product_id`,`accessories_id`,`customer_id`),
  KEY `product_id` (`product_id`),
  KEY `customer_id` (`customer_id`),
  KEY `accessories_id` (`accessories_id`),
  CONSTRAINT `order_ibfk_3` FOREIGN KEY (`accessories_id`) REFERENCES `accessories` (`accessories_id`),
  CONSTRAINT `order_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  CONSTRAINT `order_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `order` */

/*Table structure for table `payment_type` */

DROP TABLE IF EXISTS `payment_type`;

CREATE TABLE `payment_type` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `purchase_date` datetime DEFAULT NULL,
  `type` enum('cash','credit','cheque') DEFAULT NULL,
  PRIMARY KEY (`payment_id`,`customer_id`),
  KEY `customer_id` (`customer_id`),
  CONSTRAINT `payment_type_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `payment_type` */

/*Table structure for table `product_os` */

DROP TABLE IF EXISTS `product_os`;

CREATE TABLE `product_os` (
  `os_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`os_id`,`product_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `product_os_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `product_os` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `description` text,
  `added_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `products` */

/*Table structure for table `sales` */

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL AUTO_INCREMENT,
  `total` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`sales_id`,`order_id`),
  KEY `order_id` (`order_id`),
  CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sales` */

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `contact_no` float DEFAULT NULL,
  `address` text,
  `new_product_id` int(11) NOT NULL,
  PRIMARY KEY (`supplier_id`,`new_product_id`),
  KEY `new_product_id` (`new_product_id`),
  CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`new_product_id`) REFERENCES `new_product` (`new_product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `supplier` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
