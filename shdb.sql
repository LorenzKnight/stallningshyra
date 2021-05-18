-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 17 maj 2021 kl 08:47
-- Serverversion: 5.7.26
-- PHP-version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `shdb`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `adm_discount_list`
--

CREATE TABLE `adm_discount_list` (
  `id_adm_disc` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `quanti` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `stop_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `adm_discount_list`
--

INSERT INTO `adm_discount_list` (`id_adm_disc`, `code`, `percent`, `money`, `quanti`, `start_date`, `stop_date`) VALUES
(1, 'LORENZ', 10, NULL, 2, '2020-10-30', '2020-11-02'),
(5, 'SALSA', 30, NULL, 20, '2020-10-07', '2020-10-14');

-- --------------------------------------------------------

--
-- Tabellstruktur `appearance`
--

CREATE TABLE `appearance` (
  `id_appearance` int(255) NOT NULL,
  `appearance_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `corps_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dash_div` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dash_table` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filters` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wrapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fly_button` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_small` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artbtn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `appearance`
--

INSERT INTO `appearance` (`id_appearance`, `appearance_name`, `corps_color`, `head`, `dash_div`, `dash_table`, `filters`, `wrapp`, `list`, `line`, `fly_button`, `button_small`, `artbtn`, `status`) VALUES
(1, 'First', '#040714', 'head_user', 'dash_user', 'dash_table_user', 'filter_user', 'user_div', 'table_user', 'line_user', 'flying_button_user', 'button_small_user', 'artbtn_user', 1),
(2, 'Disney +', '#040714', 'head_disney', 'dash_disney', 'dash_table_disney', 'filter_disney', 'disney_div', 'table_disney', 'line_disney', 'flying_button_disney', 'button_small_disney', 'artbtn_disney', 1),
(3, 'Taycan', '#000', 'head_porsche', 'dash_porsche', 'dash_table_porsche', 'filter_porsche', 'porsche_div', 'table_porsche', 'line_porsche', 'flying_button_porsche', 'button_small_porsche', 'artbtn_porsche', 1),
(4, 'S.H.I.E.L.D.', '#040714', 'head_shield', 'dash_shield', 'dash_table_shield', 'filter_shield', 'shield_div', 'table_shield', 'line_shield', 'flying_button_shield', 'button_small_shield', 'artbtn_shield', 1),
(5, 'Light', '#e0e0e0', 'head_light', 'dash_light', 'dash_table_light', 'filter_light', 'light_div', 'table_light', 'line_light', 'flying_button_light', 'button_small_light', 'artbtn_light', 1),
(6, 'MS-DOS', '#0001FC', 'head_dos', 'dash_dos', 'dash_table_dos', 'filter_dos', 'dos_div', 'table_dos', 'line_dos', 'flying_button_dos', 'button_small_dos', 'artbtn_dos', 1),
(7, 'J.A.R.V.I.S.', '#040714', 'head_jarvis', 'dash_jarvis', 'dash_table_jarvis', 'filter_jarvis', 'jarvis_div', 'table_jarvis', 'line_jarvis', 'flying_button_jarvis', 'button_small_jarvis', 'artbtn_jarvis', 1),
(8, 'Old doc', '#2d656d', 'head_old', 'dash_old', 'dash_table_old', 'filter_old', 'old_div', 'table_old', 'line_old', 'flying_button_old', 'button_small_old', 'artbtn_old', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `banners`
--

CREATE TABLE `banners` (
  `id_banner` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `banners`
--

INSERT INTO `banners` (`id_banner`, `foto`, `title`, `position`) VALUES
(1, 'pic1.jpg', 'Urban-Kiz', 1),
(2, 'pic2.jpg', 'Kizomba Elemental', 2),
(3, 'pic4.jpg', 'Bachata', 3);

-- --------------------------------------------------------

--
-- Tabellstruktur `cart`
--

CREATE TABLE `cart` (
  `id_counter` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `id_week` int(11) DEFAULT NULL,
  `discountcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `transaction_made` int(11) DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `cart`
--

INSERT INTO `cart` (`id_counter`, `id_client`, `id_product`, `id_week`, `discountcode`, `date`, `transaction_made`, `status`) VALUES
(2025, 92, 1, 51, NULL, '2021-05-17', 528, 2),
(2026, 92, 1, 52, NULL, '2021-05-17', 528, 2),
(2027, 92, 1, 53, NULL, '2021-05-17', 528, 2),
(2028, 92, 1, 54, NULL, '2021-05-17', 528, 2),
(2029, 93, 1, 28, NULL, '2021-05-17', 529, 2),
(2030, 93, 1, 29, NULL, '2021-05-17', 529, 2),
(2031, 93, 1, 30, NULL, '2021-05-17', 529, 2),
(2032, 93, 1, 31, NULL, '2021-05-17', 529, 2);

-- --------------------------------------------------------

--
-- Tabellstruktur `cities`
--

CREATE TABLE `cities` (
  `id_city` int(11) NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `cities`
--

INSERT INTO `cities` (`id_city`, `city_name`, `status`) VALUES
(1, 'Göteborg', 1),
(2, 'Stockholm', 0),
(3, 'Malmö', 1),
(4, 'Borås', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` time DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` int(11) DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `via` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellstruktur `discount`
--

CREATE TABLE `discount` (
  `id_discount` int(11) NOT NULL,
  `id_code` int(11) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_course` int(11) DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `quanti` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `stop_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `discount`
--

INSERT INTO `discount` (`id_discount`, `id_code`, `code`, `id_course`, `percent`, `money`, `quanti`, `start_date`, `stop_date`) VALUES
(10, 5, 'SALSA', 6, 30, NULL, 20, '2020-10-07', '2020-10-14'),
(11, 5, 'SALSA', 7, 30, NULL, 20, '2020-10-07', '2020-10-14'),
(12, 5, 'SALSA', 8, 30, NULL, 20, '2020-10-07', '2020-10-14'),
(56, 1, 'LORENZ', 2, 10, NULL, 2, '2020-10-30', '2020-11-02'),
(57, 1, 'LORENZ', 3, 10, NULL, 2, '2020-10-30', '2020-11-02'),
(58, 1, 'LORENZ', 9, 10, NULL, 2, '2020-10-30', '2020-11-02');

-- --------------------------------------------------------

--
-- Tabellstruktur `inscriptions`
--

CREATE TABLE `inscriptions` (
  `id_insc` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` time DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `done` int(11) DEFAULT '0',
  `payment` int(11) DEFAULT NULL,
  `subtotal` double(8,2) DEFAULT NULL,
  `pdiscount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` double(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `inscriptions`
--

INSERT INTO `inscriptions` (`id_insc`, `date`, `year`, `month`, `day`, `time`, `id_client`, `name`, `surname`, `id_product`, `order_number`, `commentary`, `status`, `done`, `payment`, `subtotal`, `pdiscount`, `total`) VALUES
(528, '2021-05-17', '2021', '05', '16', '00:29:05', 92, 'Lorenzo', 'Knight', 1, '92340033010', NULL, 2, 0, 1, 6500.00, '1950', 5687.50),
(529, '2021-05-17', '2021', '05', '16', '01:29:20', 93, 'Raphael Jimenez', 'Jimenez', 1, '93397105251', NULL, 2, 0, 1, 9000.00, '2700', 7875.00);

-- --------------------------------------------------------

--
-- Tabellstruktur `multi_user_access`
--

CREATE TABLE `multi_user_access` (
  `id_multi_user` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `permissions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `multi_user_access`
--

INSERT INTO `multi_user_access` (`id_multi_user`, `id_user`, `id_admin`, `permissions`) VALUES
(199, 13, 5, 'TSYS-P0008'),
(228, 6, 5, 'TSYS-P0001'),
(229, 6, 5, 'TSYS-P0011'),
(230, 6, 5, 'TSYS-P0017'),
(231, 6, 5, 'TSYS-P0018'),
(288, 2, 5, 'TSYS-P0001'),
(289, 2, 5, 'TSYS-P0002'),
(290, 2, 5, 'TSYS-P0003'),
(291, 2, 5, 'TSYS-P0004'),
(292, 2, 5, 'TSYS-P0005'),
(293, 2, 5, 'TSYS-P0007'),
(294, 2, 5, 'TSYS-P0011'),
(295, 2, 5, 'TSYS-P0013'),
(296, 2, 5, 'TSYS-P0017'),
(297, 2, 5, 'TSYS-P0018'),
(298, 14, NULL, 'TSYS-P0001'),
(299, 14, NULL, 'TSYS-P0002'),
(300, 14, NULL, 'TSYS-P0003'),
(301, 14, NULL, 'TSYS-P0004'),
(302, 14, NULL, 'TSYS-P0005'),
(303, 14, NULL, 'TSYS-P0007'),
(304, 14, NULL, 'TSYS-P0011'),
(305, 14, NULL, 'TSYS-P0013'),
(306, 14, NULL, 'TSYS-P0016'),
(307, 14, NULL, 'TSYS-P0017'),
(308, 14, NULL, 'TSYS-P0018'),
(309, 14, NULL, 'TSYS-P0019');

-- --------------------------------------------------------

--
-- Tabellstruktur `pack_discount`
--

CREATE TABLE `pack_discount` (
  `id_p_discount` int(11) NOT NULL,
  `package_conditions` mediumtext COLLATE utf8mb4_unicode_ci,
  `percent` int(11) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `pack_discount`
--

INSERT INTO `pack_discount` (`id_p_discount`, `package_conditions`, `percent`, `valor`) VALUES
(1, '10% rabbat för 2 kurser', 10, 2),
(2, '20% rabbat för 3 kurser', 20, 3),
(3, '30% rabbat för 4 kurser', 30, 4),
(4, '30% rabbat för 5 kurser', 30, 5),
(5, '30% rabbat för 6 kurser', 30, 6),
(6, '30% rabbat för 7 kurser', 30, 7),
(7, '30% rabbat för 8 kurser', 30, 8);

-- --------------------------------------------------------

--
-- Tabellstruktur `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_type` int(11) DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `products`
--

INSERT INTO `products` (`id_product`, `name`, `description`, `image`, `product_type`, `price`, `city`, `status`) VALUES
(1, 'Små Vagn', 'asdfasd asdf asdfasdf asdf asdf asdfa', 'vagn_exemp3.jpg', 1, '1500', 4, 1),
(2, 'Mellan Vagn', 'asdfasd sdf asdf ', 'vagn_exemp2.jpg', 2, '2500', 1, 1),
(3, 'Stor Vagn', 'sfasef asef asdf asdf', 'vagn_exemp.jpg', 3, '3200', 3, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `product_selected`
--

CREATE TABLE `product_selected` (
  `id_selected` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` time DEFAULT NULL,
  `product` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `confirmed` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `product_selected`
--

INSERT INTO `product_selected` (`id_selected`, `date`, `year`, `month`, `day`, `time`, `product`, `id_client`, `confirmed`, `status`) VALUES
(227, '2021-05-17 00:28:31', '2021', '5', '16', '00:28:31', 1, 92, 528, 1),
(228, '2021-05-17 01:28:11', '2021', '5', '16', '01:28:11', 1, 93, 529, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `publications`
--

CREATE TABLE `publications` (
  `id_publications` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` time DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `more` int(11) DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` int(11) DEFAULT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `publications`
--

INSERT INTO `publications` (`id_publications`, `date`, `year`, `month`, `day`, `time`, `title`, `content`, `more`, `foto`, `settings`, `site`, `position`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 'Små vangn', '<p>Varje termin kan du anm&auml;la dig till kurser och workshops i flera olika dansstilar.  Hos oss hittar du allt fr&aring;n h&auml;rliga nyb&ouml;rjarkurser till intensiva kurser f&ouml;r mer erfarna dansare!</p>', NULL, 'vagn_exemp3.jpg', NULL, '1', 1, 1),
(2, NULL, NULL, NULL, NULL, NULL, 'Mellan vangn', '<p>Utvalda helger erbjuder vi helgkurser och bootcamps i olika dansstilar med b&aring;de lokala och internationella l&auml;rare.  Lite mer intensiva tillf&auml;llen d&aring; man l&auml;r sig mycket och utvecklas under kort tid samtidigt som man l&auml;ra k&auml;nna m&aring;nga andra dansare.</p>', NULL, 'vagn_exemp2.jpg', 400, '1', 2, 1),
(3, NULL, NULL, NULL, NULL, NULL, 'Stor vangn', '<p>P&aring; torsdagar bjuder vi in till socialdans, kv&auml;llar d&aring; vi spelar sk&ouml;n musik och dansgolvet &auml;r &ouml;ppet f&ouml;r b&aring;de studenter och erfarna dansare.  Avslappnade kv&auml;llar med h&ouml;g kvalit&eacute; d&aring; fokus ligger p&aring; gemenskap och gl&auml;djen</p>', NULL, 'vagn_exemp.jpg', 300, '1', 3, 1),
(6, '2020-08-26', '2020', '8', '26', '14:04:30', 'Höstens kurser', '<p style=\"text-align: center;\">Loops Dance Studio &auml;r en dansskola i centrala G&ouml;teborg med fokus p&aring; pardans och andra h&auml;rliga dansstilar.</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">Hos oss hittar du dansl&auml;rare som undervisar i flera olika stilar och i danser med ursprung fr&aring;n olika delar av v&auml;rlden.</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">Information om vilka kurser vi erbjuder och schemat hittar du <a href=\"../schemma\">h&auml;r</a>.</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><a href=\"../registration\">Anm&auml;l dig h&auml;r</a></p>', NULL, 'empleados-felices-portada.jpg', NULL, '3', NULL, 1),
(7, '2020-08-26', '2020', '8', '26', '14:06:58', 'ANGÅENDE COVID-19', '<p style=\"text-align: center;\">P&aring; grund av Covid-19 har vi begr&auml;nsat antalet deltagare p&aring; v&aring;ra kurser och events.</p>\r\n<p style=\"text-align: center;\">F&ouml;r v&aring;ra kurser &auml;r platserna till varje kurs begr&auml;nsad till max 30 personer.</p>\r\n<p style=\"text-align: center;\">P&aring; socialdansen p&aring; tisdagar och torsdagar sl&auml;pper vi in max 50 personer.</p>\r\n<p style=\"text-align: center;\">F&ouml;r kurserna i pardans &auml;r rotation frivilligt.</p>\r\n<p style=\"text-align: center;\">Du som inte vill rotera kan anm&auml;la dig tillsammans med en danspartner (anm&auml;l dig som vanligt och skicka sedan ett mail med information om den du registrerat dig med till info@loopsdansstudio.se).\"</p>', NULL, 'empleados-felices-portada.jpg', NULL, '3', NULL, 1),
(8, '2021-02-16', '2021', '2', '16', '13:49:44', 'dfasdf', '<p style=\"text-align: center;\">1421432453</p>', NULL, 'empleados-felices-portada.jpg', NULL, '3', NULL, 1),
(9, '2021-04-12', '2021', '4', '12', '15:07:07', 'asdfsadfsadfsdf', '<p>dsfasdf</p>', NULL, NULL, NULL, '2', NULL, 0),
(11, '2021-04-27', '2021', '4', '27', '17:25:04', ' asdfjhasef ksd', 'adasfasflj lksjdf klhklsdhjfl öksdf', NULL, '75130003_145065793505397_5063072873485172736_n.jpg', NULL, '2', NULL, 1),
(12, '2021-05-10', '2021', '5', '9', '00:52:05', 'fgasdfasdfsdfsdf', '<p>sdfadsfasdfasdf</p>', NULL, NULL, NULL, '2', NULL, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` int(11) NOT NULL,
  `via` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(255) DEFAULT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `hour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sal` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `via`, `name`, `level`, `teacher`, `duration`, `day`, `hour`, `sal`, `status`) VALUES
(49, 5, 'UrbanKiz 1', 1, 'Lorenz & Sofia', 110, 1, '54', 1, 1),
(50, 5, 'UrbanKiz 2', 2, 'Lessly & Marie', 110, 3, '165', 2, 1),
(51, 5, 'UrbanKiz 3', 3, 'Lessly & Marie', 110, 4, '275', 1, 1),
(52, 5, 'Balett', 2, 'Aurica', 165, 5, '54', 1, 1),
(53, 5, 'cms', 1, 'Lorenz', 330, 1, '0', 2, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `site_info`
--

CREATE TABLE `site_info` (
  `id_site` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abbreviated_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resumen` text COLLATE utf8mb4_unicode_ci,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule_off` int(11) DEFAULT NULL,
  `registration_off` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `site_info`
--

INSERT INTO `site_info` (`id_site`, `name`, `abbreviated_name`, `resumen`, `adress`, `post`, `city`, `email`, `paypal_account`, `logo`, `facebook`, `instagram`, `youtube`, `schedule_off`, `registration_off`) VALUES
(1, 'ställningshyra', 'ställningshyra', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Ånäsvägen 44-46 (hållplats Ejdergatan)', '416 68', 'Göteborg', 'info@stallningshyra.se', 'ekonomi@stallningshyra.se', NULL, 'https://www.facebook.com/Loops-Dance-Studio-111204744037785', 'https://www.instagram.com/loopsdancestudio/', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellstruktur `taxes`
--

CREATE TABLE `taxes` (
  `id_tax` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `taxes`
--

INSERT INTO `taxes` (`id_tax`, `name`, `percent`, `status`) VALUES
(1, 'moms', '25', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefon` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appearance` int(11) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `mail`, `password`, `telefon`, `appearance`, `rank`, `status`) VALUES
(2, 'Sofia', 'Franzén', 'sofiaeleonorafranzen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0763199480', 4, 1, 1),
(5, 'Lorenzo', 'Knight', 'joellorenzo.k@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '763199480', 1, 0, 1),
(6, 'Rebbeca', 'Hjärte', 'rebbeca@heycommunications.com', 'e10adc3949ba59abbe56e057f20f883e', '763199480', 1, 2, 1),
(13, 'Shael', 'Knight', 'Shael@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0736696700', 1, 5, 1),
(14, 'Jonas', 'Karlsson', 'nils.jonas.karlsson@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0763199480', 1, 1, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `weeks`
--

CREATE TABLE `weeks` (
  `id_week` int(11) NOT NULL,
  `week_no` int(11) DEFAULT NULL,
  `week` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `commentary` text COLLATE utf8mb4_unicode_ci,
  `price` double(8,2) DEFAULT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `weeks`
--

INSERT INTO `weeks` (`id_week`, `week_no`, `week`, `year`, `commentary`, `price`, `status`) VALUES
(1, 1, 'vecka 1', 2021, 'new year 2021', 500.00, 1),
(2, 2, 'vecka 2', 2021, NULL, 1800.00, 1),
(3, 3, 'vecka 3', 2021, NULL, 500.00, 1),
(4, 4, 'vecka 4', 2021, NULL, NULL, 1),
(5, 5, 'vecka 5', 2021, NULL, NULL, 1),
(6, 6, 'vecka 6', 2021, NULL, NULL, 1),
(7, 7, 'vecka 7', 2021, NULL, NULL, 1),
(8, 8, 'vecka 8', 2021, NULL, NULL, 1),
(9, 9, 'vecka 9', 2021, NULL, NULL, 1),
(10, 10, 'vecka 10', 2021, NULL, NULL, 1),
(11, 11, 'vecka 11', 2021, NULL, NULL, 1),
(12, 12, 'vecka 12', 2021, NULL, NULL, 1),
(13, 13, 'vecka 13', 2021, NULL, NULL, 1),
(14, 14, 'vecka 14', 2021, NULL, NULL, 1),
(15, 15, 'vecka 15', 2021, NULL, NULL, 1),
(16, 16, 'vecka 16', 2021, NULL, NULL, 1),
(17, 17, 'vecka 17', 2021, NULL, NULL, 1),
(18, 18, 'vecka 18', 2021, NULL, NULL, 1),
(19, 19, 'vecka 19', 2021, NULL, NULL, 1),
(20, 20, 'vecka 20', 2021, NULL, NULL, 1),
(21, 21, 'vecka 21', 2021, NULL, NULL, 1),
(22, 22, 'vecka 22', 2021, NULL, NULL, 1),
(23, 23, 'vecka 23', 2021, NULL, NULL, 1),
(24, 24, 'vecka 24', 2021, NULL, NULL, 1),
(25, 25, 'vecka 25', 2021, NULL, NULL, 1),
(26, 26, 'vecka 26', 2021, NULL, NULL, 1),
(27, 27, 'vecka 27', 2021, NULL, NULL, 1),
(28, 28, 'vecka 28', 2021, 'jkhkjhh', 3000.00, 1),
(29, 29, 'vecka 29', 2021, NULL, NULL, 1),
(30, 30, 'vecka 30', 2021, NULL, NULL, 1),
(31, 31, 'vecka 31', 2021, NULL, NULL, 1),
(32, 32, 'vecka 32', 2021, NULL, NULL, 1),
(33, 33, 'vecka 33', 2021, NULL, NULL, 1),
(34, 34, 'vecka 34', 2021, NULL, NULL, 1),
(35, 35, 'vecka 35', 2021, NULL, NULL, 1),
(36, 36, 'vecka 36', 2021, 'jhkhk', 980.00, 1),
(37, 37, 'vecka 37', 2021, NULL, NULL, 1),
(38, 38, 'vecka 38', 2021, NULL, NULL, 1),
(39, 39, 'vecka 39', 2021, NULL, NULL, 1),
(40, 40, 'vecka 40', 2021, NULL, NULL, 1),
(41, 41, 'vecka 41', 2021, NULL, NULL, 1),
(42, 42, 'vecka 42', 2021, NULL, NULL, 1),
(43, 43, 'vecka 43', 2021, NULL, NULL, 1),
(44, 44, 'vecka 44', 2021, 'text', -980.00, 1),
(45, 45, 'vecka 45', 2021, NULL, NULL, 1),
(46, 46, 'vecka 46', 2021, NULL, NULL, 1),
(47, 47, 'vecka 47', 2021, NULL, NULL, 1),
(48, 48, 'vecka 48', 2021, NULL, NULL, 1),
(49, 49, 'vecka 49', 2021, NULL, NULL, 1),
(50, 50, 'vecka 50', 2021, NULL, NULL, 1),
(51, 51, 'vecka 51', 2021, NULL, NULL, 1),
(52, 52, 'vecka 52', 2021, NULL, NULL, 1),
(53, 1, 'vecka 1', 2022, 'new year', 500.00, 1),
(54, 2, 'vecka 2', 2022, NULL, NULL, 1),
(55, 3, 'vecka 3', 2022, NULL, NULL, 1),
(56, 4, 'vecka 4', 2022, NULL, NULL, 1),
(57, 5, 'vecka 5', 2022, NULL, NULL, 1),
(58, 6, 'vecka 6', 2022, NULL, NULL, 1),
(59, 7, 'vecka 7', 2022, NULL, NULL, 1),
(60, 8, 'vecka 8', 2022, NULL, NULL, 1),
(61, 9, 'vecka 9', 2022, NULL, NULL, 1),
(62, 10, 'vecka 10', 2022, NULL, NULL, 1),
(63, 11, 'vecka 11', 2022, NULL, NULL, 1),
(64, 12, 'vecka 12', 2022, NULL, NULL, 1),
(65, 13, 'vecka 13', 2022, NULL, NULL, 1),
(66, 14, 'vecka 14', 2022, NULL, NULL, 1),
(67, 15, 'vecka 15', 2022, NULL, NULL, 1),
(68, 16, 'vecka 16', 2022, NULL, NULL, 1),
(69, 17, 'vecka 17', 2022, NULL, NULL, 1),
(70, 18, 'vecka 18', 2022, NULL, NULL, 1),
(71, 19, 'vecka 19', 2022, NULL, NULL, 1),
(72, 20, 'vecka 20', 2022, NULL, NULL, 1),
(73, 21, 'vecka 21', 2022, NULL, NULL, 1),
(74, 22, 'vecka 22', 2022, NULL, NULL, 1),
(75, 23, 'vecka 23', 2022, NULL, NULL, 1),
(76, 24, 'vecka 24', 2022, NULL, NULL, 1),
(77, 25, 'vecka 25', 2022, NULL, NULL, 1),
(78, 26, 'vecka 26', 2022, NULL, NULL, 1),
(79, 27, 'vecka 27', 2022, NULL, NULL, 1),
(80, 28, 'vecka 28', 2022, NULL, NULL, 1),
(81, 29, 'vecka 29', 2022, NULL, NULL, 1),
(82, 30, 'vecka 30', 2022, NULL, NULL, 1),
(83, 31, 'vecka 31', 2022, NULL, NULL, 1),
(84, 32, 'vecka 32', 2022, NULL, NULL, 1),
(85, 33, 'vecka 33', 2022, NULL, NULL, 1),
(86, 34, 'vecka 34', 2022, NULL, NULL, 1),
(87, 35, 'vecka 35', 2022, NULL, NULL, 1),
(88, 36, 'vecka 36', 2022, NULL, NULL, 1),
(89, 37, 'vecka 37', 2022, NULL, NULL, 1),
(90, 38, 'vecka 38', 2022, NULL, NULL, 1),
(91, 39, 'vecka 39', 2022, NULL, NULL, 1),
(92, 40, 'vecka 40', 2022, NULL, NULL, 1),
(93, 41, 'vecka 41', 2022, NULL, NULL, 1),
(94, 42, 'vecka 42', 2022, NULL, NULL, 1),
(95, 43, 'vecka 43', 2022, NULL, NULL, 1),
(96, 44, 'vecka 44', 2022, NULL, NULL, 1),
(97, 45, 'vecka 45', 2022, NULL, NULL, 1),
(98, 46, 'vecka 46', 2022, NULL, NULL, 1),
(99, 47, 'vecka 47', 2022, NULL, NULL, 1),
(100, 48, 'vecka 48', 2022, NULL, NULL, 1),
(101, 49, 'vecka 49', 2022, NULL, NULL, 1),
(102, 50, 'vecka 50', 2022, NULL, NULL, 1),
(103, 51, 'vecka 51', 2022, NULL, NULL, 1),
(104, 52, 'vecka 52', 2022, NULL, NULL, 1);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `adm_discount_list`
--
ALTER TABLE `adm_discount_list`
  ADD PRIMARY KEY (`id_adm_disc`);

--
-- Index för tabell `appearance`
--
ALTER TABLE `appearance`
  ADD PRIMARY KEY (`id_appearance`);

--
-- Index för tabell `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id_banner`);

--
-- Index för tabell `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_counter`);

--
-- Index för tabell `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id_city`);

--
-- Index för tabell `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Index för tabell `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id_discount`);

--
-- Index för tabell `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`id_insc`);

--
-- Index för tabell `multi_user_access`
--
ALTER TABLE `multi_user_access`
  ADD PRIMARY KEY (`id_multi_user`);

--
-- Index för tabell `pack_discount`
--
ALTER TABLE `pack_discount`
  ADD PRIMARY KEY (`id_p_discount`);

--
-- Index för tabell `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Index för tabell `product_selected`
--
ALTER TABLE `product_selected`
  ADD PRIMARY KEY (`id_selected`);

--
-- Index för tabell `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id_publications`);

--
-- Index för tabell `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Index för tabell `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`id_site`);

--
-- Index för tabell `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id_tax`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Index för tabell `weeks`
--
ALTER TABLE `weeks`
  ADD PRIMARY KEY (`id_week`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `adm_discount_list`
--
ALTER TABLE `adm_discount_list`
  MODIFY `id_adm_disc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT för tabell `appearance`
--
ALTER TABLE `appearance`
  MODIFY `id_appearance` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT för tabell `banners`
--
ALTER TABLE `banners`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT för tabell `cart`
--
ALTER TABLE `cart`
  MODIFY `id_counter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2033;

--
-- AUTO_INCREMENT för tabell `cities`
--
ALTER TABLE `cities`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT för tabell `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT för tabell `discount`
--
ALTER TABLE `discount`
  MODIFY `id_discount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT för tabell `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id_insc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=530;

--
-- AUTO_INCREMENT för tabell `multi_user_access`
--
ALTER TABLE `multi_user_access`
  MODIFY `id_multi_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;

--
-- AUTO_INCREMENT för tabell `pack_discount`
--
ALTER TABLE `pack_discount`
  MODIFY `id_p_discount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT för tabell `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT för tabell `product_selected`
--
ALTER TABLE `product_selected`
  MODIFY `id_selected` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT för tabell `publications`
--
ALTER TABLE `publications`
  MODIFY `id_publications` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT för tabell `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT för tabell `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id_site` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT för tabell `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id_tax` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT för tabell `weeks`
--
ALTER TABLE `weeks`
  MODIFY `id_week` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
