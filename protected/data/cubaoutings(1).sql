-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2014 at 04:01 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cubaoutings`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_owner` varchar(100) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `time_create` timestamp NULL DEFAULT NULL,
  `time_update` timestamp NULL DEFAULT NULL,
  `tours_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_book_tours1_idx` (`tours_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_owner` varchar(100) NOT NULL,
  `email_owner` varchar(100) NOT NULL,
  `photo_owner` varchar(100) DEFAULT NULL,
  `text` varchar(200) NOT NULL,
  `likes` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `time_create` timestamp NULL DEFAULT NULL,
  `time_update` timestamp NULL DEFAULT NULL,
  `tours_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comment_tours_idx` (`tours_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `time_create` timestamp NULL DEFAULT NULL,
  `time_update` timestamp NULL DEFAULT NULL,
  `tours_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_photo_tours1_idx` (`tours_id`),
  KEY `fk_photo_place1_idx` (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `name`, `direction`, `description`, `time_create`, `time_update`, `tours_id`, `place_id`) VALUES
(1, 'hola photo', '1-10.jpg', 'sdjsdnn ss smmsd smms', NULL, NULL, 1, 1),
(2, 'photo2', '1-12.jpg', 'esta es la mamamasa', NULL, NULL, 1, 1),
(3, 'photo3', '1-1.jpg', 'orejon de ya tu sabes', NULL, NULL, 1, 1),
(4, 'photo4', '1-3.jpg', 'dsddd dd ddd ddddd', NULL, NULL, 1, 1),
(5, 'la letal', '1-', '<p>\r\n	<u><strong>foto de prueba</strong>:</u></p>\r\n<p>\r\n	In the code above, a custom toolbar is created that has the Source, Bold, Italic, etc controls enabled. You can pass almost any CKEditor configuration information via the config variable. To see all of how you can configure CKEditor visit: <a href="http://docs.cksource.com/CKEditor_3.x/Developers_Guide" title="CK Editor Developer''s Guide">CKEditor Developer&#39;s Guide</a></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n', NULL, NULL, 1, 1),
(6, 'principal', '2-bg1.jpg', '<p>\r\n	esta imagen es un poema</p>\r\n', NULL, NULL, 2, 1),
(7, 'foto1', '3-1.jpg', '<p>\r\n	df dfdsddfdf</p>\r\n', NULL, NULL, 3, 1),
(8, 'cxc', '4-P1020946.JPG', '<p>\r\n	vfxcv</p>\r\n', NULL, NULL, 4, 1),
(9, 'zzzx', '5-Picture 416.jpg', '<p>\r\n	<strong>zxzxzxzxzx</strong></p>\r\n<p>\r\n	SASDA DA DAdladmalsmdald ad adasd asdasd aaakssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</p>\r\n<p>\r\n	adasddasdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadsa</p>\r\n<p>\r\n	addddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>\r\n<p>\r\n	adssssssssssssssssssssssssssssssssssssssssss</p>\r\n', NULL, NULL, 5, 1),
(10, 'otra ma', '6-Capitolio_de_Noche.jpg', '<p>\r\n	saffa fasdf asdfsdf sadfsadfasdf dsfsadfasfv edfs</p>\r\n', NULL, NULL, 6, 1),
(11, 'cienfuegos', '6-NOTIIFCACIONES.jpg', '<p>\r\n	esta si que si bla bla</p>\r\n', NULL, NULL, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `tours_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_place_tours1_idx` (`tours_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `name`, `description`, `tours_id`) VALUES
(1, 'hola place', 'asdadad', 1),
(2, 'Cienfuegos', '<p>\r\n	Cienfuegos, which is also known as the pearl of the South, is a newer city. Although this city does not have the grace of Trinidad or the flair of Havana, there is still an ambiance that makes it perfect for a pleasant visit. It was built by the French next to a big bay with wide streets, a Parisian-style boulevard and elegant colonnades. Its historical center was declared World Heritage Site by UNESCO in 2005.</p>\r\n', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE IF NOT EXISTS `tours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `preview` varchar(150) NOT NULL,
  `description` longtext NOT NULL,
  `time_create` timestamp NULL DEFAULT NULL,
  `time_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `name`, `preview`, `description`, `time_create`, `time_update`) VALUES
(1, 'hola', '', 'adada', NULL, NULL),
(2, 'Matanzas, Cárdenas, and Varadero tour', 'Try to discover the real Cuba visiting the cities around Varadero. You have the opportunity to visit Matanzas', '<p>\r\n	&nbsp;&nbsp; Try to discover the real Cuba visiting the cities around Varadero. You have the opportunity to visit Matanzas, also called the city of the city of the bridges and the Athens of Cuba. This gives you the chance to visit the Bellamar cave, full of myths and legends and the pharmaceutical museum. a drive through the country side shows how the farmers live in Cuba, and makes our way to Cardenas, a mixture of modern and neoclassical architecture.</p>\r\n<p>\r\n	<strong>Schedule</strong></p>\r\n<p>\r\n	<strong>09:00am- 04:00pm</strong></p>\r\n<p>\r\n	<em>- pick up in the hotel</em></p>\r\n<p>\r\n	<em>- Tour guide in the proper language</em></p>\r\n<p>\r\n	<em>- Drive to Matanzas boarding the Atlantic Ocean</em></p>\r\n<p>\r\n	<em>- Tour through Matanzas city (Vigia Square, liberation square, Hermita de Monserrate for the excellent view, farmers market and free time in the boulevard)</em></p>\r\n<p>\r\n	<em>- visit the Bellamar Cave (optional with a cost of 5 cuc), one the biggest attractions in the outskirts of the city.</em></p>\r\n<p>\r\n	<em>- Lunch (optional, prices vary depending on people&#39;s interests)</em></p>\r\n<p>\r\n	<em>- Drive through the country side to get to Cardenas (through the Guamacaro valley)</em></p>\r\n<p>\r\n	<em>- Tour through Cardenas city (monument to the bicycle, land crab and horse buggy, stop in the Columbus Park, plaza Malakoff and free time)</em></p>\r\n<p>\r\n	<em>- Drive back to Varadero and sightseeing tour through the peninsula. </em></p>\r\n', NULL, NULL),
(3, 'Viñales', '', '<p>\r\n	una nasd nad na&nbsp; amski eks&nbsp; sdksmdsmdsd</p>\r\n', NULL, NULL),
(4, 'cienfuegos', '', '<p>\r\n	<strong>adadlasdfjkasjdkfa fa fkanfa faskf </strong></p>\r\n<p>\r\n	asdacvkjsvjfdgv sdgkvdgjsgettgfdf,gmvsdfkjgvioetselterjsketrjrjiopestsetpsetretjerjtejrtjervjtkgfgkgjkjdsjiertjersjtverter</p>\r\n<p>\r\n	ertjvejtertvjerjtverotvjojoevveroteroter</p>\r\n', NULL, NULL),
(5, 'trinidad adada', 'adaadasdadadad adma,dma,dma,dmad adaada,m admadmamd,ada dadma,dma,dsa,dm,am,dada ada,mda,smd,mas,dma d admamdad  ad a dasd a da dm', '<p>\r\n	adsa adlad ada ada adadada,adad adada adadadada adada</p>\r\n', NULL, NULL),
(6, 'Trinidad and Cienfuegos tour', 'Get a ride through the green country side to visit the best two cities of the central part of Cuba...', '<p>\r\n	Get a ride through the green country side to visit the best two cities of the central part of Cuba. They are so perfectly preserved that we can see the features of a Spanish colonization on its very architecture. <strong>Cienfuegos</strong>, also called &ldquo;the Pearl of the South&rdquo;, founded by the French in 1819 is the perfect city to enjoy a neoclassical architecture and the city itself that was built along one of the most beautiful bays in the Caribbean Sea. <strong>Trinidad</strong> is the city that takes your imagination back in time because of the well preservation of the buildings. It was the third village founded by the Spanish people in Cuba and declared World Heritage Site by UNESCO in 1988</p>\r\n<p>\r\n	<strong>Program</strong></p>\r\n<p>\r\n	<strong>06:30am- 07:00pm</strong></p>\r\n<p style="margin-left:18.0pt;">\r\n	Pick up in the hotel at 06:30am</p>\r\n<ul>\r\n	<li>\r\n		Drive for around three hour through the country side to Cienfuegos. Seeing all kinds of plantations and farms(stop for a break)</li>\r\n	<li>\r\n		City tour in Cienfuegos. (visiting the heart of the city that includes the Jose Marti park to see where the city was founded, the Thomas Terri theatre, the Arch Triumph, the city hall, the former Spanish casino,&nbsp; the cathedral, and free time the boulevard)</li>\r\n	<li>\r\n		&nbsp;Visit the area of Punta Gorda(the newer&nbsp; place that was built under the American influence)the Valle Palace and the Jagua Hotel</li>\r\n	<li>\r\n		Drive to Trinidad(along the Caribbean Sea and enjoy the view to the mountain range &ldquo;the Guamuaya Group&rdquo; &nbsp;&nbsp;</li>\r\n	<li>\r\n		Lunch at Trinidad(there are different choices)</li>\r\n	<li>\r\n		Walking tour in the historical center (the Cathedral, Plaza Mayor, and Plaza &ldquo;El Jigue&rdquo;, former Basilica Saint Francis of Assisi, Cantero&rsquo;s Palace and Brunet&rsquo;s Palace that they are both museums)museums are optional, cost of 1.00 cuc</li>\r\n	<li>\r\n		Visit to the pottery maker&rsquo;s house</li>\r\n	<li>\r\n		Free time for further walking or souvenir market</li>\r\n	<li>\r\n		Return to Varadero</li>\r\n</ul>\r\n', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_book_tours1` FOREIGN KEY (`tours_id`) REFERENCES `tours` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_tours` FOREIGN KEY (`tours_id`) REFERENCES `tours` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `fk_photo_place1` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_photo_tours1` FOREIGN KEY (`tours_id`) REFERENCES `tours` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `fk_place_tours1` FOREIGN KEY (`tours_id`) REFERENCES `tours` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
