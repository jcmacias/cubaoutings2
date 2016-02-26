-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-06-2014 a las 01:37:27
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cubaoutings`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_owner` varchar(100) NOT NULL,
  `pax` int(11) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `time_create` timestamp NULL DEFAULT NULL,
  `time_update` timestamp NULL DEFAULT NULL,
  `tours_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_book_tours1_idx` (`tours_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `book`
--

INSERT INTO `book` (`id`, `email_owner`, `pax`, `question`, `time_create`, `time_update`, `tours_id`) VALUES
(1, 'asdf', 0, 'sdfsdf', NULL, NULL, 8),
(6, 'julio', 0, 'sfddsfasdf', NULL, NULL, 8),
(7, 'julio', 0, 'Y como funciona esto', NULL, NULL, 8),
(8, 'julio@cubava.cu', 0, ' fgh fghf g hfghf fhfgh fh fhgfh f', NULL, NULL, 8),
(9, 'julio@cubava.cu', 0, 'assssds', NULL, NULL, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
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
  `time_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tours_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comment_tours_idx` (`tours_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `comment`
--

INSERT INTO `comment` (`id`, `name_owner`, `email_owner`, `photo_owner`, `text`, `likes`, `dislike`, `time_create`, `time_update`, `tours_id`) VALUES
(1, 'sdfsfs', 'sdfsdfs', 'sfds', 'ssfdds', NULL, NULL, NULL, NULL, 7),
(2, 'addafs', 'sdfsdff', 'sdfdsfdsf', 'sdfsdfsdfdsfsfds', NULL, NULL, NULL, NULL, 8),
(3, 'admin', 'julio@asdj.cu', 'dasd', 'adasdsaasd', NULL, NULL, NULL, NULL, 8),
(4, 'admin', 'julio@asdj.cu', 'dasd', 'adasdsaasd', NULL, NULL, NULL, NULL, 8),
(5, 'kirenia', 'kirenia@joevnclub.cu', 'fdfg', 'Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.', NULL, NULL, NULL, NULL, 8),
(6, 'julio', 'julio@nauta.cu', 'sdf', 'sdssfwew', NULL, NULL, NULL, NULL, 8),
(7, 'julio', 'julio@nauta.cu', 'julio-1.png', 'que si que sique si que sique si que sique si que sique si que sique si que sique si que sique si que sique si que sique si que sique si que sique si que sique si que si', NULL, NULL, NULL, NULL, 8),
(8, 'sdfs', 'sfd', 'sdfs-1.png', 'sfsfsdfsf sfs sdfsd sdfsdfsdf sdfsd', NULL, NULL, NULL, NULL, 8),
(9, 'x', 'xx', 'x-', 'xcxc', NULL, NULL, NULL, '2014-06-12 00:33:41', 8),
(10, 'ffff', 'ffffff', 'ffff-', 'sfsf sfs sdf', NULL, NULL, NULL, '2014-06-12 00:39:54', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `principal` varchar(11) DEFAULT NULL,
  `description` longtext NOT NULL,
  `time_create` timestamp NULL DEFAULT NULL,
  `time_update` timestamp NULL DEFAULT NULL,
  `tours_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_photo_tours1_idx` (`tours_id`),
  KEY `fk_photo_place1_idx` (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `photo`
--

INSERT INTO `photo` (`id`, `name`, `direction`, `principal`, `description`, `time_create`, `time_update`, `tours_id`, `place_id`) VALUES
(12, 'photo1', '7-cardenas.jpg', 'yes', '<p>\r\n	Este cangrejo es el simbolo de la ciudad de cardenas...</p>\r\n', '2014-06-11 02:59:28', NULL, 7, 3),
(13, 'photo2', '8-Havanna_-_Plaza_Vieja.jpg', 'yes', '<p>\r\n	Suponemos que sea la plaza de armas.....</p>\r\n', '2014-06-11 03:00:04', NULL, 8, 4),
(14, 'Plaza photo', '8-2014-06-08 13.27.45.jpg', 'yes', '<p>\r\n	Esta foto fue tomada por mi,con mi celular, dime como estoy jeje</p>\r\n', '2014-06-11 03:00:32', NULL, 8, 5),
(15, 'Plaza photo 2', '8-file0001902625472.jpg', NULL, '<p>\r\n	sda asdasd asd asd asdasd as</p>\r\n', NULL, NULL, 8, 5),
(20, 'Plaza photo 2', '8-2014-06-08 13.27.45.jpg', NULL, '<p>\r\n	zx&lt;czxz dsfsdfsdgfewrgfergtbcvv&nbsp;&nbsp;&nbsp;&nbsp; vbgfv</p>\r\n', NULL, NULL, 8, 5),
(24, 'ffffff', '8-2014-06-08 13.26.00.jpg', NULL, '<p>\r\n	ssd</p>\r\n', NULL, NULL, 8, 5),
(25, 'sds', '8-2014-06-08 13.27.59.jpg', 'yes', '<p>\r\n	sdsdsa</p>\r\n', NULL, NULL, 8, 5),
(26, 'una', '9-Capitolio_de_Noche.jpg', 'yes', '<p>\r\n	sdf sffsf sdf sfs sfewer we trw</p>\r\n', NULL, NULL, 9, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `tours_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_place_tours1_idx` (`tours_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `place`
--

INSERT INTO `place` (`id`, `name`, `description`, `tours_id`) VALUES
(3, 'Cardenas City ', '<p>\r\n	The city is located just 15 minutes south from Varadero. It was founded in 1928 and it was the heart of Cuba&rsquo;s richest sugar growing area in the 19th century. This city is best remembered for the first raising of the Cuban flag by General Narciso Lopez in 1850. Nineteenth-century neoclassical houses with stain glass windows grace the streets, and if you want to see real Cuban life Cardenas makes a good outing from Varadero.</p>\r\n', 7),
(4, 'Plaza de Armas', '<ul>\r\n	<li>\r\n		<strong>Plaza de Armas </strong>(the oldest square in Havana that originally dates from 1582, where we find the place of the foundation, the government&nbsp; buildings,&nbsp; the first fortress built in&nbsp; Cuba, and even a large second-hand book market).</li>\r\n</ul>\r\n', 8),
(5, 'Plaza de la revolución', '<p>\r\n	Sitio emblematico de la capital cubana,donde han desfilado una pila de cubanos....</p>\r\n', 8),
(6, 'Plaza de la Catedral', '<p>\r\n	Plaza de la Catedral(&nbsp; the cathedral&nbsp; square is considered as the most perfectly built colonial square in the whole country with a beautiful baroque style)</p>\r\n', 8),
(7, 'Capitolio', '<p>\r\n	el adsa ada ada ada ada ada dad ada&nbsp;&nbsp; adad adad asd a d</p>\r\n', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tours`
--

CREATE TABLE IF NOT EXISTS `tours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `preview` varchar(150) NOT NULL,
  `description` longtext NOT NULL,
  `time_create` timestamp NULL DEFAULT NULL,
  `time_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `tours`
--

INSERT INTO `tours` (`id`, `name`, `preview`, `description`, `time_create`, `time_update`) VALUES
(7, 'Matanzas, Cárdenas, and Varadero tour', 'Try to discover the real Cuba visiting the cities around Varadero. You have the opportunity to visit', '<p>\r\n	Try to discover the real Cuba visiting the cities around Varadero. You have the opportunity to visit Matanzas, also called the city of the city of the bridges and the Athens of Cuba. This gives you the chance to visit the Bellamar cave, full of myths and legends and the pharmaceutical museum. a drive through the country side shows how the farmers live in Cuba, and makes our way to Cardenas, a mixture of modern and neoclassical architecture.</p>\r\n<p>\r\n	<strong>Schedule</strong></p>\r\n<p>\r\n	09:00am- 04:00pm</p>\r\n<p>\r\n	<strong><em>- pick up in the hotel</em></strong></p>\r\n<p>\r\n	<strong><em>- Tour guide in the proper language</em></strong></p>\r\n<p>\r\n	<strong><em>- Drive to Matanzas boarding the Atlantic Ocean</em></strong></p>\r\n<p>\r\n	<strong><em>- Tour through Matanzas city (Vigia Square, liberation square, Hermita de Monserrate for the excellent view, farmers market and free time in the boulevard)</em></strong></p>\r\n<p>\r\n	<strong><em>- visit the Bellamar Cave (optional with a cost of 5 cuc), one the biggest attractions in the outskirts of the city.</em></strong></p>\r\n<p>\r\n	<strong><em>- Lunch (optional, prices vary depending on people&#39;s interests)</em></strong></p>\r\n<p>\r\n	<strong><em>- Drive through the country side to get to Cardenas (through the Guamacaro valley)</em></strong></p>\r\n<p>\r\n	<strong><em>- Tour through Cardenas city (monument to the bicycle, land crab and horse buggy, stop in the Columbus Park, plaza Malakoff and free time)</em></strong></p>\r\n<p>\r\n	<strong><em>- Drive back to Varadero and sightseeing tour through the peninsula.&nbsp;&nbsp;&nbsp; </em></strong></p>\r\n', NULL, NULL),
(8, 'Havana', 'Havana, the largest city in the Caribbean, is the Cuba''s political, cultural and economic center, and populated by over two million people...', '<p>\r\n	Havana, the largest city in the Caribbean, is the Cuba&#39;s political, cultural and economic center, and populated by over two million people. Havana suffered little or no damage during the wars and revolutions of the past 200 years and the old town is easily the finest surviving Spanish colonial complex in the Americas. &nbsp;A big wealth has been used on the restoration of the city, a process that began two decades before was declared world heritage site by UNESCO in December 1982. Although many of Havana&#39;s houses are run down, the heavy traffic, rampant commercialization and extensive slums that choke many other Latin-American countries are absent. Even the US embargo helps in a way by keeping out the cruise ships that clog most other Caribbean ports and by limiting US consumer tourism. Enjoy while it lasts.</p>\r\n<p>\r\n	&nbsp;&nbsp; Visiting the old Havana we can enjoy the cobble stone streets, dark limestone buildings, old churches and squares.&nbsp; In case of the new Havana, which is much bigger, has to be visited by car since places to cover are not walking distances. However, it is very exciting to stop at places like; the Revolution Square, the Capitolio, the Central Park, or just drive through Vedado or Miramar neighbourhood, or just enjoy the excellent view when driving through the promenade that goes 7 km around the Northern part of the city.</p>\r\n<p>\r\n	<u>&nbsp; <strong><em>Interesting places</em></strong></u></p>\r\n<p>\r\n	<strong><em>Old Havana</em></strong></p>\r\n<ul>\r\n	<li>\r\n		Plaza de Armas (the oldest square in Havana that originally dates from 1582, where we find the place of the foundation, the government&nbsp; buildings,&nbsp; the first fortress built in&nbsp; Cuba, and even a large second-hand book market)</li>\r\n	<li>\r\n		Plaza de la Catedral(&nbsp; the cathedral&nbsp; square is considered as the most perfectly built colonial square in the whole country with a beautiful baroque style)</li>\r\n	<li>\r\n		Plaza de San Francisco de Asis (another beautiful&nbsp; square named after the church with the highest bell tower in&nbsp; the city, white marble fountain in the center and the amazing eclectically built trade center in Havana)</li>\r\n	<li>\r\n		Plaza Vieja ( resembles the rich neighbourhood of the 18<sup>th</sup> century in Havana, where we can see big luxurious &nbsp;houses with columns, arches and stain glass windows)</li>\r\n	<li>\r\n		Ambos Mundos Hotel( The hotel where Ernest Hemingway lived for seven years, his room nowadays is a small museum)</li>\r\n	<li>\r\n		Avenida Puerto (the avenue that goes along the entrance of the bay, there is a nice view to the very harbour and a fortress across the &ldquo;canal. Nice place for a walk and a couple of pictures&rdquo;)</li>\r\n	<li>\r\n		Floridita Bar</li>\r\n	<li>\r\n		La Fuerza, El Morro, La Punta, la Caba&ntilde;a(these are&nbsp; fortresses that were built to protect the city against the attack of the pirates and empires that tried to occupy Havana several times. Nowadays they are museums that offer visits)</li>\r\n</ul>\r\n', NULL, NULL),
(9, 'Havana lights', 'The places where everyone want to be..You will see a wonderfull places...........llllllllllllll.jjjgggbfgbb sfsf sdfsfs sdf sfs sddsd', '<p>\r\n	dfd dfde dfv dcxcde sds&nbsp; sdsc dsd</p>\r\n', NULL, NULL),
(10, 'new', 'add ada adads adsasda rwetrr er eg dfg ddgertrew dfg dv xcxv ewrt dfds  fw fsdfsf wfsdfs sfsfs sfsfsfs ww rewerds sfwer frw', '<p>\r\n	add ada adads adsasda rwetrr er eg dfg ddgertrew dfg dv xcxv ewrt dfds&nbsp; fw fsdfsf wfsdfs sfsfs sfsfsfs ww rewerds sfwer frw</p>\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `create_time`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '0000-00-00 00:00:00');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`tours_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`tours_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`tours_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `photo_ibfk_2` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `place_ibfk_1` FOREIGN KEY (`tours_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
