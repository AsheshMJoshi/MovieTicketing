/*
SQLyog Professional v10.42 
MySQL - 5.5.8 : Database - movie_ticket
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`movie_ticket` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `movie_ticket`;

/*Table structure for table `booking` */

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `hall_seat_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `payment_transaction` enum('Cash','Credit') DEFAULT NULL,
  `ticket_id` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`,`hall_seat_id`,`member_id`,`show_id`,`ticket_id`),
  KEY `hall_seat_id` (`hall_seat_id`),
  KEY `member_id` (`member_id`),
  KEY `show_id` (`show_id`),
  KEY `ticket_id` (`ticket_id`),
  CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`hall_seat_id`) REFERENCES `halls_seat` (`hall_seat_id`),
  CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`),
  CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`show_id`) REFERENCES `shows` (`show_id`),
  CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`ticket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `booking` */

/*Table structure for table `cinema` */

DROP TABLE IF EXISTS `cinema`;

CREATE TABLE `cinema` (
  `cinema_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `street_name` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `contact_no` double DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cinema_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cinema` */

/*Table structure for table `halls` */

DROP TABLE IF EXISTS `halls`;

CREATE TABLE `halls` (
  `hall_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `seat_capacity` int(11) DEFAULT NULL,
  `cinema_id` int(11) NOT NULL,
  PRIMARY KEY (`hall_id`,`cinema_id`),
  KEY `cinema_id` (`cinema_id`),
  CONSTRAINT `halls_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cinema_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `halls` */

/*Table structure for table `halls_seat` */

DROP TABLE IF EXISTS `halls_seat`;

CREATE TABLE `halls_seat` (
  `hall_seat_id` int(11) NOT NULL AUTO_INCREMENT,
  `seat_type` enum('Gold','Premium','Platinum') DEFAULT NULL,
  `price` double DEFAULT NULL,
  `hall_id` int(11) NOT NULL,
  PRIMARY KEY (`hall_seat_id`,`hall_id`),
  KEY `hall_id` (`hall_id`),
  CONSTRAINT `halls_seat_ibfk_1` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`hall_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `halls_seat` */

/*Table structure for table `members` */

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `contact_no` double DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `members` */

/*Table structure for table `movies` */

DROP TABLE IF EXISTS `movies`;

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `release_date` date DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `trailor` varchar(50) DEFAULT NULL,
  `starring` varchar(50) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `type` enum('2D','3D') DEFAULT NULL,
  `length` time DEFAULT NULL,
  `cbfc_rating` enum('G','PG','PG-13','R') DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `genre` enum('Action','Adventure','Comdey','Documentary','Drama','Horror','Thriller') DEFAULT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `movies` */

/*Table structure for table `shows` */

DROP TABLE IF EXISTS `shows`;

CREATE TABLE `shows` (
  `show_id` int(11) NOT NULL AUTO_INCREMENT,
  `time` time DEFAULT NULL,
  `hall_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`show_id`,`hall_id`,`movie_id`),
  KEY `hall_id` (`hall_id`),
  KEY `movie_id` (`movie_id`),
  CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`hall_id`),
  CONSTRAINT `shows_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `shows` */

/*Table structure for table `tickets` */

DROP TABLE IF EXISTS `tickets`;

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL AUTO_INCREMENT,
  `price` double DEFAULT NULL,
  `show_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `seat_no` int(11) DEFAULT NULL,
  PRIMARY KEY (`ticket_id`,`show_id`,`member_id`),
  KEY `show_id` (`show_id`),
  CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `shows` (`show_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tickets` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
