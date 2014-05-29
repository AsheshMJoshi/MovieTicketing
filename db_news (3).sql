-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2014 at 02:24 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `description` varchar(900) NOT NULL,
  `added_date` date DEFAULT NULL,
  `modified_date` date NOT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `description`, `added_date`, `modified_date`, `category_id`, `status`) VALUES
(2, 'Indian Economic going down', 'Indian economy not gettig good .These days economy of india is droping and droping.This is an cray situtaion in which whole country can get into serious trouble of economy.Like lacking of basic needs, close down of industries and recession.this is an cruel situtaion of our neigbour country.', '2014-04-22', '0000-00-00', 1, 1),
(5, 'Share Market Going Up', 'Share  market of nepal is rising rapidly in every quarter.This is an good sign for country as more investment are generated and less saving of money.Thus, proper flow of money around the country is always good. :)', '2014-04-25', '0000-00-00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE IF NOT EXISTS `blog_comment` (
  `comment_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `blog_id` bigint(20) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `comment` varchar(500) NOT NULL,
  `added_date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`comment_id`, `blog_id`, `name`, `email`, `comment`, `added_date`, `status`) VALUES
(1, 2, 'Anil Mharajan', 'anil@yahoo.com', 'Ya i support you.this is very tragic for our country', '2014-04-22', 1),
(7, 2, 'Milan', 'milan@yahoo.com', 'Its there''s country not ours.Who care them', '2014-04-25', 1),
(8, 2, 'Linex', 'linex@yahoo.com', 'Ya i support you.this is very tragic for that country', '2014-04-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(500) DEFAULT NULL,
  `added_date` date DEFAULT NULL,
  `modified_date` date NOT NULL,
  `parent_id` bigint(20) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `added_date`, `modified_date`, `parent_id`, `status`) VALUES
(1, 'Economicsss', '2014-04-22', '2014-04-22', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(70) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `added_date` date NOT NULL,
  `venue_id` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `pic_src` int(11) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `start_date`, `end_date`, `added_date`, `venue_id`, `status`, `pic_src`) VALUES
(2, 'PaintBalls', '2014-04-28', '2014-05-01', '2014-04-28', 1, 1, 0),
(3, 'lasexma', '2014-04-28', '2014-04-29', '2014-04-28', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_notification`
--

CREATE TABLE IF NOT EXISTS `event_notification` (
  `notify_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sub_id` bigint(20) NOT NULL,
  `event_id` bigint(20) NOT NULL,
  PRIMARY KEY (`notify_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `event_notification`
--

INSERT INTO `event_notification` (`notify_id`, `sub_id`, `event_id`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 1, 2),
(4, 1, 2),
(5, 1, 3),
(6, 1, 2),
(7, 2, 2),
(8, 1, 2),
(9, 2, 2),
(10, 1, 3),
(11, 2, 3),
(12, 1, 2),
(13, 2, 2),
(14, 1, 0),
(15, 2, 0),
(16, 1, 0),
(17, 2, 0),
(18, 1, 0),
(19, 2, 0),
(20, 1, 0),
(21, 2, 0),
(22, 1, 0),
(23, 2, 0),
(24, 1, 0),
(25, 2, 0),
(26, 1, 0),
(27, 2, 0),
(28, 1, 0),
(29, 2, 0),
(30, 1, 0),
(31, 2, 0),
(32, 1, 0),
(33, 2, 0),
(34, 1, 0),
(35, 2, 0),
(36, 1, 2),
(37, 2, 2),
(38, 1, 2),
(39, 2, 2),
(40, 1, 2),
(41, 2, 2),
(42, 1, 2),
(43, 2, 2),
(44, 1, 3),
(45, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `gallery_name` varchar(200) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `modified_date` date NOT NULL,
  `cover_id` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_name`, `created_date`, `modified_date`, `cover_id`, `status`) VALUES
(4, 'Nepal', '0000-00-00', '2014-04-25', 15, 1),
(5, 'history', '2014-04-23', '2014-04-23', 14, 0),
(7, 'Music', '2014-04-25', '0000-00-00', 0, 0),
(8, 'Maths', '2014-04-25', '0000-00-00', 13, 0),
(9, 'PHP', '2014-04-30', '0000-00-00', 18, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_article`
--

CREATE TABLE IF NOT EXISTS `news_article` (
  `article_name` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `publish_date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `news_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `article_desp` varchar(900) DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `news_article`
--

INSERT INTO `news_article` (`article_name`, `date`, `publish_date`, `status`, `news_id`, `article_desp`) VALUES
('Economic Recession', '2014-04-20', '2014-04-21', 0, 2, '                            On-going economic recession has adversely effected the world economis                        '),
('Greenday Live in Nepal', '2014-04-25', '2014-04-25', 0, 15, 'Greenday will be live in nepal');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `photo_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `gallery_id` bigint(20) NOT NULL,
  `added_date` date NOT NULL,
  `photo_name` varchar(200) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `path` varchar(100) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photo_id`, `gallery_id`, `added_date`, `photo_name`, `status`, `path`) VALUES
(2, 1, '2014-04-23', 'Eco', 0, 'gallery/Economics/WWW.YIFY-TORRENTS.COM.jpg'),
(4, 5, '2014-04-23', 'nepal', 0, 'gallery/history/download.jpg'),
(5, 1, '2014-04-23', 'Punk', 0, 'gallery/Economics/download.jpg'),
(12, 8, '2014-04-25', 'Rock', 0, 'gallery/Maths/Koala.jpg'),
(13, 8, '2014-04-25', 'pix', 0, 'gallery/Maths/Penguins.jpg'),
(14, 5, '2014-04-25', 'pixel', 0, 'gallery/history/Tulips.jpg'),
(15, 4, '2014-04-25', 'Unix', 0, 'gallery/Nepal/Jellyfish.jpg'),
(16, 4, '0000-00-00', 'pixe', 0, 'gallery/Nepal/Koala.jpg'),
(17, 4, '2014-04-30', 'pashmina', 0, 'gallery/Nepal/images (4).jpg'),
(18, 9, '2014-04-30', 'mvc', 0, 'gallery/PHP/Lighthouse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
  `sub_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`sub_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`sub_id`, `sub_name`, `email`) VALUES
(1, 'Ashesh Man jOshi', 'ashesh_joshi@hotmail.com'),
(2, 'Milan Maharjan', 'milanmertz@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE IF NOT EXISTS `venues` (
  `venue_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `venue_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `longitutde` double NOT NULL,
  `latitude` double NOT NULL,
  `pic_src` int(11) NOT NULL,
  PRIMARY KEY (`venue_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`venue_id`, `venue_name`, `address`, `longitutde`, `latitude`, `pic_src`) VALUES
(1, 'Civil Mall', 'Civil Mall,Sundhara,Kathmandu', 85.3333333, 27.7, 0),
(2, 'CTC MALL', '0', 0, 0, 0),
(3, 'Peoples plaza', 'KhichaPokhari', 128.33, 21.22, 0),
(4, 'Basantapur', 'Basantapur ktm', 200.33, 12.33, 0),
(5, 'WTC ', 'tripureshwor', 300.22, 12.33, 0),
(6, 'Namaste Plaza', 'thamel', 300.23, 32.111, 0),
(7, 'Plaza', 'thamel', 128.33, 21.22, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
