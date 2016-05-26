-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2016 at 03:37 PM
-- Server version: 5.6.28-76.1-beget-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibabych_yii2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--
-- Creation: Apr 24, 2016 at 05:50 PM
--

DROP TABLE IF EXISTS `blog_category`;
CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `parent_id`, `title`, `alias`, `position`) VALUES
(1, NULL, 'Пленарные доклады', 'plenarnye-doklady', NULL),
(2, NULL, 'IT сектор', 'it-sektor', NULL),
(3, NULL, 'test', 'test', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--
-- Creation: Apr 24, 2016 at 05:50 PM
--

DROP TABLE IF EXISTS `blog_post`;
CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `title_seo` varchar(255) DEFAULT NULL,
  `alias` varchar(255) NOT NULL,
  `meta_description` text,
  `preview` text NOT NULL,
  `content` text NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `publish_status` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `category_id`, `type_id`, `title`, `title_seo`, `alias`, `meta_description`, `preview`, `content`, `views`, `publish_status`, `created_at`, `updated_at`) VALUES
(9, 2, 2, NULL, 'rrrrrrrrrrrrrrrrrrrr', 'rrrrrrrrrrrrrrrrrrrr', '', '<p>sdfsdf</p>', '<p>fdfs</p>', 0, 0, 1460305833, 1460308062),
(10, 2, 2, NULL, NULL, 'russian-title', 'dd', '<p>asdasdasd</p>', '<p>asd</p>', 0, 0, 1460308168, 1460310136);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_translation`
--
-- Creation: Apr 24, 2016 at 05:50 PM
--

DROP TABLE IF EXISTS `blog_post_translation`;
CREATE TABLE `blog_post_translation` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `field_name` char(50) NOT NULL DEFAULT '0',
  `lang_id` char(50) NOT NULL DEFAULT '0',
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_post_translation`
--

INSERT INTO `blog_post_translation` (`id`, `post_id`, `field_name`, `lang_id`, `value`) VALUES
(0000000009, 9, 'title', 'ru', 'English'),
(0000000010, 9, 'title', 'en', 'Russian'),
(0000000011, 10, 'title', 'ru', 'English title'),
(0000000012, 10, 'title', 'en', 'Russian title'),
(0000000013, 10, 'title_seo', 'en', 'Russian title seo'),
(0000000014, 10, 'title_seo', 'ru', 'English title seo');

-- --------------------------------------------------------

--
-- Table structure for table `blog_type`
--
-- Creation: Apr 24, 2016 at 05:50 PM
--

DROP TABLE IF EXISTS `blog_type`;
CREATE TABLE `blog_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `show_category` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_type`
--

INSERT INTO `blog_type` (`id`, `title`, `alias`, `show_category`) VALUES
(1, 'staticPage', 'static-page', 0),
(2, 'speakers', 'speakers', 1);

-- --------------------------------------------------------

--
-- Table structure for table `conf_period`
--
-- Creation: Apr 24, 2016 at 05:50 PM
--

DROP TABLE IF EXISTS `conf_period`;
CREATE TABLE `conf_period` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL DEFAULT '0',
  `regStart` int(50) NOT NULL DEFAULT '0',
  `regEnd` int(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conf_period`
--

INSERT INTO `conf_period` (`id`, `title`, `regStart`, `regEnd`) VALUES
(2, '2016', 1443719653, 1475255653),
(3, '2017', 1475342148, 1506791748),
(4, '2010-2015', 1412138553, 1443588153);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--
-- Creation: Apr 24, 2016 at 05:50 PM
-- Last update: Apr 24, 2016 at 05:50 PM
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `alpha_2` varchar(2) NOT NULL DEFAULT '',
  `alpha_3` varchar(3) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `alpha_2`, `alpha_3`) VALUES
(1, 'Afghanistan', 'af', 'afg'),
(2, 'Aland Islands', 'ax', 'ala'),
(3, 'Albania', 'al', 'alb'),
(4, 'Algeria', 'dz', 'dza'),
(5, 'American Samoa', 'as', 'asm'),
(6, 'Andorra', 'ad', 'and'),
(7, 'Angola', 'ao', 'ago'),
(8, 'Anguilla', 'ai', 'aia'),
(9, 'Antarctica', 'aq', ''),
(10, 'Antigua and Barbuda', 'ag', 'atg'),
(11, 'Argentina', 'ar', 'arg'),
(12, 'Armenia', 'am', 'arm'),
(13, 'Aruba', 'aw', 'abw'),
(14, 'Australia', 'au', 'aus'),
(15, 'Austria', 'at', 'aut'),
(16, 'Azerbaijan', 'az', 'aze'),
(17, 'Bahamas', 'bs', 'bhs'),
(18, 'Bahrain', 'bh', 'bhr'),
(19, 'Bangladesh', 'bd', 'bgd'),
(20, 'Barbados', 'bb', 'brb'),
(21, 'Belarus', 'by', 'blr'),
(22, 'Belgium', 'be', 'bel'),
(23, 'Belize', 'bz', 'blz'),
(24, 'Benin', 'bj', 'ben'),
(25, 'Bermuda', 'bm', 'bmu'),
(26, 'Bhutan', 'bt', 'btn'),
(27, 'Bolivia, Plurinational State of', 'bo', 'bol'),
(28, 'Bonaire, Sint Eustatius and Saba', 'bq', 'bes'),
(29, 'Bosnia and Herzegovina', 'ba', 'bih'),
(30, 'Botswana', 'bw', 'bwa'),
(31, 'Bouvet Island', 'bv', ''),
(32, 'Brazil', 'br', 'bra'),
(33, 'British Indian Ocean Territory', 'io', ''),
(34, 'Brunei Darussalam', 'bn', 'brn'),
(35, 'Bulgaria', 'bg', 'bgr'),
(36, 'Burkina Faso', 'bf', 'bfa'),
(37, 'Burundi', 'bi', 'bdi'),
(38, 'Cambodia', 'kh', 'khm'),
(39, 'Cameroon', 'cm', 'cmr'),
(40, 'Canada', 'ca', 'can'),
(41, 'Cape Verde', 'cv', 'cpv'),
(42, 'Cayman Islands', 'ky', 'cym'),
(43, 'Central African Republic', 'cf', 'caf'),
(44, 'Chad', 'td', 'tcd'),
(45, 'Chile', 'cl', 'chl'),
(46, 'China', 'cn', 'chn'),
(47, 'Christmas Island', 'cx', ''),
(48, 'Cocos (Keeling) Islands', 'cc', ''),
(49, 'Colombia', 'co', 'col'),
(50, 'Comoros', 'km', 'com'),
(51, 'Congo', 'cg', 'cog'),
(52, 'Congo, The Democratic Republic of the', 'cd', 'cod'),
(53, 'Cook Islands', 'ck', 'cok'),
(54, 'Costa Rica', 'cr', 'cri'),
(55, 'Cote d\'Ivoire', 'ci', 'civ'),
(56, 'Croatia', 'hr', 'hrv'),
(57, 'Cuba', 'cu', 'cub'),
(58, 'Curacao', 'cw', 'cuw'),
(59, 'Cyprus', 'cy', 'cyp'),
(60, 'Czech Republic', 'cz', 'cze'),
(61, 'Denmark', 'dk', 'dnk'),
(62, 'Djibouti', 'dj', 'dji'),
(63, 'Dominica', 'dm', 'dma'),
(64, 'Dominican Republic', 'do', 'dom'),
(65, 'Ecuador', 'ec', 'ecu'),
(66, 'Egypt', 'eg', 'egy'),
(67, 'El Salvador', 'sv', 'slv'),
(68, 'Equatorial Guinea', 'gq', 'gnq'),
(69, 'Eritrea', 'er', 'eri'),
(70, 'Estonia', 'ee', 'est'),
(71, 'Ethiopia', 'et', 'eth'),
(72, 'Falkland Islands (Malvinas)', 'fk', 'flk'),
(73, 'Faroe Islands', 'fo', 'fro'),
(74, 'Fiji', 'fj', 'fji'),
(75, 'Finland', 'fi', 'fin'),
(76, 'France', 'fr', 'fra'),
(77, 'French Guiana', 'gf', 'guf'),
(78, 'French Polynesia', 'pf', 'pyf'),
(79, 'French Southern Territories', 'tf', ''),
(80, 'Gabon', 'ga', 'gab'),
(81, 'Gambia', 'gm', 'gmb'),
(82, 'Georgia', 'ge', 'geo'),
(83, 'Germany', 'de', 'deu'),
(84, 'Ghana', 'gh', 'gha'),
(85, 'Gibraltar', 'gi', 'gib'),
(86, 'Greece', 'gr', 'grc'),
(87, 'Greenland', 'gl', 'grl'),
(88, 'Grenada', 'gd', 'grd'),
(89, 'Guadeloupe', 'gp', 'glp'),
(90, 'Guam', 'gu', 'gum'),
(91, 'Guatemala', 'gt', 'gtm'),
(92, 'Guernsey', 'gg', 'ggy'),
(93, 'Guinea', 'gn', 'gin'),
(94, 'Guinea-Bissau', 'gw', 'gnb'),
(95, 'Guyana', 'gy', 'guy'),
(96, 'Haiti', 'ht', 'hti'),
(97, 'Heard Island and McDonald Islands', 'hm', ''),
(98, 'Holy See (Vatican City State)', 'va', 'vat'),
(99, 'Honduras', 'hn', 'hnd'),
(100, 'Hong Kong', 'hk', 'hkg'),
(101, 'Hungary', 'hu', 'hun'),
(102, 'Iceland', 'is', 'isl'),
(103, 'India', 'in', 'ind'),
(104, 'Indonesia', 'id', 'idn'),
(105, 'Iran, Islamic Republic of', 'ir', 'irn'),
(106, 'Iraq', 'iq', 'irq'),
(107, 'Ireland', 'ie', 'irl'),
(108, 'Isle of Man', 'im', 'imn'),
(109, 'Israel', 'il', 'isr'),
(110, 'Italy', 'it', 'ita'),
(111, 'Jamaica', 'jm', 'jam'),
(112, 'Japan', 'jp', 'jpn'),
(113, 'Jersey', 'je', 'jey'),
(114, 'Jordan', 'jo', 'jor'),
(115, 'Kazakhstan', 'kz', 'kaz'),
(116, 'Kenya', 'ke', 'ken'),
(117, 'Kiribati', 'ki', 'kir'),
(118, 'Korea, Democratic People\'s Republic of', 'kp', 'prk'),
(119, 'Korea, Republic of', 'kr', 'kor'),
(120, 'Kuwait', 'kw', 'kwt'),
(121, 'Kyrgyzstan', 'kg', 'kgz'),
(122, 'Lao People\'s Democratic Republic', 'la', 'lao'),
(123, 'Latvia', 'lv', 'lva'),
(124, 'Lebanon', 'lb', 'lbn'),
(125, 'Lesotho', 'ls', 'lso'),
(126, 'Liberia', 'lr', 'lbr'),
(127, 'Libyan Arab Jamahiriya', 'ly', 'lby'),
(128, 'Liechtenstein', 'li', 'lie'),
(129, 'Lithuania', 'lt', 'ltu'),
(130, 'Luxembourg', 'lu', 'lux'),
(131, 'Macao', 'mo', 'mac'),
(132, 'Macedonia, The former Yugoslav Republic of', 'mk', 'mkd'),
(133, 'Madagascar', 'mg', 'mdg'),
(134, 'Malawi', 'mw', 'mwi'),
(135, 'Malaysia', 'my', 'mys'),
(136, 'Maldives', 'mv', 'mdv'),
(137, 'Mali', 'ml', 'mli'),
(138, 'Malta', 'mt', 'mlt'),
(139, 'Marshall Islands', 'mh', 'mhl'),
(140, 'Martinique', 'mq', 'mtq'),
(141, 'Mauritania', 'mr', 'mrt'),
(142, 'Mauritius', 'mu', 'mus'),
(143, 'Mayotte', 'yt', 'myt'),
(144, 'Mexico', 'mx', 'mex'),
(145, 'Micronesia, Federated States of', 'fm', 'fsm'),
(146, 'Moldova, Republic of', 'md', 'mda'),
(147, 'Monaco', 'mc', 'mco'),
(148, 'Mongolia', 'mn', 'mng'),
(149, 'Montenegro', 'me', 'mne'),
(150, 'Montserrat', 'ms', 'msr'),
(151, 'Morocco', 'ma', 'mar'),
(152, 'Mozambique', 'mz', 'moz'),
(153, 'Myanmar', 'mm', 'mmr'),
(154, 'Namibia', 'na', 'nam'),
(155, 'Nauru', 'nr', 'nru'),
(156, 'Nepal', 'np', 'npl'),
(157, 'Netherlands', 'nl', 'nld'),
(158, 'New Caledonia', 'nc', 'ncl'),
(159, 'New Zealand', 'nz', 'nzl'),
(160, 'Nicaragua', 'ni', 'nic'),
(161, 'Niger', 'ne', 'ner'),
(162, 'Nigeria', 'ng', 'nga'),
(163, 'Niue', 'nu', 'niu'),
(164, 'Norfolk Island', 'nf', 'nfk'),
(165, 'Northern Mariana Islands', 'mp', 'mnp'),
(166, 'Norway', 'no', 'nor'),
(167, 'Oman', 'om', 'omn'),
(168, 'Pakistan', 'pk', 'pak'),
(169, 'Palau', 'pw', 'plw'),
(170, 'Palestinian Territory, Occupied', 'ps', 'pse'),
(171, 'Panama', 'pa', 'pan'),
(172, 'Papua New Guinea', 'pg', 'png'),
(173, 'Paraguay', 'py', 'pry'),
(174, 'Peru', 'pe', 'per'),
(175, 'Philippines', 'ph', 'phl'),
(176, 'Pitcairn', 'pn', 'pcn'),
(177, 'Poland', 'pl', 'pol'),
(178, 'Portugal', 'pt', 'prt'),
(179, 'Puerto Rico', 'pr', 'pri'),
(180, 'Qatar', 'qa', 'qat'),
(181, 'Reunion', 're', 'reu'),
(182, 'Romania', 'ro', 'rou'),
(183, 'Russian Federation', 'ru', 'rus'),
(184, 'Rwanda', 'rw', 'rwa'),
(185, 'Saint Barthelemy', 'bl', 'blm'),
(186, 'Saint Helena, Ascension and Tristan Da Cunha', 'sh', 'shn'),
(187, 'Saint Kitts and Nevis', 'kn', 'kna'),
(188, 'Saint Lucia', 'lc', 'lca'),
(189, 'Saint Martin (French Part)', 'mf', 'maf'),
(190, 'Saint Pierre and Miquelon', 'pm', 'spm'),
(191, 'Saint Vincent and The Grenadines', 'vc', 'vct'),
(192, 'Samoa', 'ws', 'wsm'),
(193, 'San Marino', 'sm', 'smr'),
(194, 'Sao Tome and Principe', 'st', 'stp'),
(195, 'Saudi Arabia', 'sa', 'sau'),
(196, 'Senegal', 'sn', 'sen'),
(197, 'Serbia', 'rs', 'srb'),
(198, 'Seychelles', 'sc', 'syc'),
(199, 'Sierra Leone', 'sl', 'sle'),
(200, 'Singapore', 'sg', 'sgp'),
(201, 'Sint Maarten (Dutch Part)', 'sx', 'sxm'),
(202, 'Slovakia', 'sk', 'svk'),
(203, 'Slovenia', 'si', 'svn'),
(204, 'Solomon Islands', 'sb', 'slb'),
(205, 'Somalia', 'so', 'som'),
(206, 'South Africa', 'za', 'zaf'),
(207, 'South Georgia and The South Sandwich Islands', 'gs', ''),
(208, 'South Sudan', 'ss', 'ssd'),
(209, 'Spain', 'es', 'esp'),
(210, 'Sri Lanka', 'lk', 'lka'),
(211, 'Sudan', 'sd', 'sdn'),
(212, 'Suriname', 'sr', 'sur'),
(213, 'Svalbard and Jan Mayen', 'sj', 'sjm'),
(214, 'Swaziland', 'sz', 'swz'),
(215, 'Sweden', 'se', 'swe'),
(216, 'Switzerland', 'ch', 'che'),
(217, 'Syrian Arab Republic', 'sy', 'syr'),
(218, 'Taiwan, Province of China', 'tw', ''),
(219, 'Tajikistan', 'tj', 'tjk'),
(220, 'Tanzania, United Republic of', 'tz', 'tza'),
(221, 'Thailand', 'th', 'tha'),
(222, 'Timor-Leste', 'tl', 'tls'),
(223, 'Togo', 'tg', 'tgo'),
(224, 'Tokelau', 'tk', 'tkl'),
(225, 'Tonga', 'to', 'ton'),
(226, 'Trinidad and Tobago', 'tt', 'tto'),
(227, 'Tunisia', 'tn', 'tun'),
(228, 'Turkey', 'tr', 'tur'),
(229, 'Turkmenistan', 'tm', 'tkm'),
(230, 'Turks and Caicos Islands', 'tc', 'tca'),
(231, 'Tuvalu', 'tv', 'tuv'),
(232, 'Uganda', 'ug', 'uga'),
(233, 'Ukraine', 'ua', 'ukr'),
(234, 'United Arab Emirates', 'ae', 'are'),
(235, 'United Kingdom', 'gb', 'gbr'),
(236, 'United States', 'us', 'usa'),
(237, 'United States Minor Outlying Islands', 'um', ''),
(238, 'Uruguay', 'uy', 'ury'),
(239, 'Uzbekistan', 'uz', 'uzb'),
(240, 'Vanuatu', 'vu', 'vut'),
(241, 'Venezuela, Bolivarian Republic of', 've', 'ven'),
(242, 'Viet Nam', 'vn', 'vnm'),
(243, 'Virgin Islands, British', 'vg', 'vgb'),
(244, 'Virgin Islands, U.S.', 'vi', 'vir'),
(245, 'Wallis and Futuna', 'wf', 'wlf'),
(246, 'Western Sahara', 'eh', 'esh'),
(247, 'Yemen', 'ye', 'yem'),
(248, 'Zambia', 'zm', 'zmb'),
(249, 'Zimbabwe', 'zw', 'zwe');

-- --------------------------------------------------------

--
-- Table structure for table `filemanager_mediafile`
--
-- Creation: Apr 24, 2016 at 05:50 PM
--

DROP TABLE IF EXISTS `filemanager_mediafile`;
CREATE TABLE `filemanager_mediafile` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `alt` text,
  `size` varchar(255) NOT NULL,
  `description` text,
  `thumbs` text,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filemanager_mediafile`
--

INSERT INTO `filemanager_mediafile` (`id`, `filename`, `type`, `url`, `alt`, `size`, `description`, `thumbs`, `created_at`, `updated_at`) VALUES
(7, 'productionproblemsdelaynewcaliforniadriverlicenses.jpg', 'image/jpeg', '/uploads/2016/03/productionproblemsdelaynewcaliforniadriverlicenses.jpg', NULL, '239058', NULL, 'a:3:{s:5:"small";s:79:"/uploads/2016/03/productionproblemsdelaynewcaliforniadriverlicenses-100x100.jpg";s:6:"medium";s:79:"/uploads/2016/03/productionproblemsdelaynewcaliforniadriverlicenses-300x200.jpg";s:5:"large";s:79:"/uploads/2016/03/productionproblemsdelaynewcaliforniadriverlicenses-500x400.jpg";}', 1458473769, NULL),
(8, 'levchenko.jpg', 'image/jpeg', '/uploads/2016/04/levchenko.jpg', NULL, '8592', NULL, 'a:3:{s:5:"small";s:38:"/uploads/2016/04/levchenko-100x100.jpg";s:6:"medium";s:38:"/uploads/2016/04/levchenko-300x200.jpg";s:5:"large";s:38:"/uploads/2016/04/levchenko-500x400.jpg";}', 1460282430, NULL),
(9, 'chumach.jpg', 'image/jpeg', '/uploads/2016/04/chumach.jpg', NULL, '14695', NULL, 'a:3:{s:5:"small";s:36:"/uploads/2016/04/chumach-100x100.jpg";s:6:"medium";s:36:"/uploads/2016/04/chumach-300x200.jpg";s:5:"large";s:36:"/uploads/2016/04/chumach-500x400.jpg";}', 1460285895, NULL),
(10, 'suspectdog.jpg', 'image/jpeg', '/uploads/2016/04/suspectdog.jpg', NULL, '83096', NULL, 'a:3:{s:5:"small";s:39:"/uploads/2016/04/suspectdog-100x100.jpg";s:6:"medium";s:39:"/uploads/2016/04/suspectdog-300x200.jpg";s:5:"large";s:39:"/uploads/2016/04/suspectdog-500x400.jpg";}', 1460288996, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `filemanager_owners`
--
-- Creation: Apr 24, 2016 at 05:50 PM
--

DROP TABLE IF EXISTS `filemanager_owners`;
CREATE TABLE `filemanager_owners` (
  `mediafile_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `owner_attribute` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filemanager_owners`
--

INSERT INTO `filemanager_owners` (`mediafile_id`, `owner_id`, `owner`, `owner_attribute`) VALUES
(8, 2, 'post', 'thumbnail'),
(9, 3, 'post', 'thumbnail'),
(10, 1, 'post', 'thumbnail');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--
-- Creation: Apr 24, 2016 at 05:50 PM
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE `language` (
  `language_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `name_ascii` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`language_id`, `language`, `country`, `name`, `name_ascii`, `status`) VALUES
('de-DE', 'de', 'de', 'Deutsch', 'German', 0),
('en-US', 'en', 'us', 'English (US)', 'English (US)', 1),
('ru-RU', 'ru', 'ru', 'Русский', 'Russian', 1),
('uk-UA', 'uk', 'ua', 'Українська', 'Ukrainian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `language_source`
--
-- Creation: Apr 24, 2016 at 05:50 PM
--

DROP TABLE IF EXISTS `language_source`;
CREATE TABLE `language_source` (
  `id` int(11) NOT NULL,
  `category` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language_source`
--

INSERT INTO `language_source` (`id`, `category`, `message`) VALUES
(367, 'app', 'English'),
(368, 'app', 'Ukrainian'),
(369, 'app', 'Russian'),
(370, 'app', 'Create Member'),
(371, 'app', 'Members'),
(372, 'app', 'Update {modelClass}: '),
(373, 'app', 'Update'),
(374, 'app', 'Delete'),
(375, 'app', 'Are you sure you want to delete this item?'),
(377, 'app', 'Search'),
(378, 'app', 'Reset'),
(383, 'javascript', 'Translation Language: {name}'),
(384, 'javascript', 'Save'),
(385, 'javascript', 'Close'),
(386, 'javascript', 'Are you sure you want to delete these items?'),
(387, 'javascript', 'Are you sure you want to delete this item?'),
(388, 'array', 'Inactive'),
(389, 'array', 'Active'),
(390, 'array', 'Beta'),
(391, 'app', 'Something went wrong :('),
(392, 'app', 'ID'),
(393, 'app', 'Name'),
(394, 'app', 'Alpha 2'),
(395, 'app', 'Alpha 3'),
(396, 'app', 'Success!'),
(397, 'app', 'Home'),
(398, 'app', 'Registration'),
(399, 'app', 'Select file...'),
(400, 'app.member', 'Country of residence'),
(401, 'app.member', 'Full name'),
(402, 'app.member', 'Position'),
(403, 'app.member', 'Phone number'),
(404, 'app.member', 'E-mail'),
(405, 'app.member', 'Research interests'),
(406, 'app.member', 'Scientific Degree'),
(407, 'app.member', 'Academic rank'),
(408, 'app.member', 'Full title'),
(409, 'app.member', 'Name of the department/division'),
(410, 'app.member', 'Mailing address'),
(411, 'app.member', 'Field of activity'),
(412, 'app.member', 'Website'),
(413, 'app.member', 'Name and Surname according to your international passport (for the certificate)'),
(414, 'app.member', 'Enter the title of your report'),
(415, 'app.member', 'Language of report'),
(416, 'app.member', 'Select section'),
(417, 'app.member', 'Doctor of Sciences'),
(418, 'app.member', 'Doctor of Technical Sciences'),
(419, 'app.member', 'Doctor of Economic Sciences'),
(420, 'app.member', 'Doctor of Physical and Mathematical Sciences'),
(421, 'app.member', 'Candidate of Sciences (Ph.D.)'),
(422, 'app.member', 'Candidate of Technical Sciences (Ph.D.)'),
(423, 'app.member', 'Candidate of Economic Sciences (Ph.D.)'),
(424, 'app.member', 'Candidate of Physical and Mathematical Sciences (Ph.D.)'),
(425, 'app.member', 'No Degree'),
(426, 'app.member', 'I will participate as <b>Listener</b>'),
(427, 'app.member', 'I will participate as <b>Speaker</b>'),
(428, 'app.member', 'Full Professor'),
(429, 'app.member', 'Docent'),
(430, 'app.member', 'No Rank'),
(431, 'app.member', 'Education, Science'),
(432, 'app.member', 'Information Technology'),
(433, 'app.member', 'Banking, Finance, Investment'),
(434, 'app.member', 'Hotel and Restaurant Business, Tourism'),
(435, 'app.member', 'Public Administration'),
(436, 'app.member', 'Consulting, Analytics, Audit'),
(437, 'app.member', 'Culture, Showbiz, Entertainment'),
(438, 'app.member', 'Medicine, Pharmaceuticals, Health Care'),
(439, 'app.member', 'Real Estate'),
(440, 'app.member', 'Non-profit Organizations'),
(441, 'app.member', 'Industry, Manufacturing'),
(442, 'app.member', 'Agriculture, Agribusiness'),
(443, 'app.member', 'Construction, Architecture'),
(444, 'app.member', 'Telecommunications'),
(445, 'app.member', 'Trade, Commerce'),
(446, 'app.member', 'Transport, Auto Business'),
(447, 'app.member', 'Services'),
(448, 'app.member', 'English'),
(449, 'app.member', 'Ukrainian'),
(450, 'app.member', 'Russian'),
(451, 'app.member', 'Plenary Session'),
(452, 'app.member', 'Section 1. Integration of Strategic Management with Portfolio, Program and Project Management: Models, Methods and Techniques'),
(453, 'app.member', 'Section 2. Managing ІТ Projects'),
(454, 'app.member', 'Section 3. Application of Effective Management Technologies in Practice'),
(455, 'app.member', 'Ukraine'),
(457, 'app.member', 'Belarus'),
(458, 'app.member', 'Kazakhstan'),
(460, 'app.member', 'Information about the participant'),
(461, 'app.member', 'Organisation information'),
(462, 'app.member', 'Form of participation'),
(463, 'app.member', 'Payment'),
(464, 'app.member', 'Registration fee'),
(465, 'app.member', 'Conference papers'),
(466, 'app.member', 'Total to pay'),
(467, 'app.member', 'Total sum'),
(468, 'main', 'Parent category'),
(469, 'main', 'Title'),
(470, 'main', 'Alias'),
(471, 'main', 'Position'),
(472, 'main', 'Category'),
(473, 'main', 'Type'),
(474, 'main', 'Meta description'),
(475, 'main', 'Preview'),
(476, 'main', 'Content'),
(477, 'main', 'Views'),
(478, 'main', 'Publish Status'),
(479, 'main', 'Thumbnail'),
(480, 'main', 'Created at'),
(481, 'main', 'Updated at'),
(482, 'main', 'Draft'),
(483, 'main', 'Published'),
(484, 'main', 'Show Category'),
(485, 'main', 'New category'),
(486, 'main', 'Blog'),
(487, 'main', 'Categories'),
(488, 'main', 'Category tree'),
(489, 'main', 'Update category “{title}”'),
(490, 'main', 'Update category'),
(491, 'main', 'Update'),
(492, 'main', 'Delete'),
(493, 'main', 'Select parent category'),
(494, 'main', 'Number of position on sorting. The higher the number, the higher category is to issue.'),
(495, 'main', 'Create'),
(496, 'main', 'Blog module'),
(497, 'main', 'Welcome to the module “Blog”!'),
(498, 'main', 'You have successfully installed the module “Blog” is now to create a record, you need to create your first post type and category'),
(499, 'main', 'Posts'),
(500, 'main', 'Post types'),
(501, 'main', 'New {type}'),
(502, 'main', 'Last changes'),
(503, 'main', 'View post on the site'),
(504, 'main', 'Update post'),
(505, 'main', 'Post “{title}” has been saved successfully!'),
(506, 'main', 'You can watch this post {on the site}, or go to see {all posts}.'),
(507, 'main', 'On the site'),
(508, 'main', 'All posts'),
(509, 'main', 'Set thumbnail'),
(510, 'main', 'Save'),
(511, 'main', 'View on the site'),
(512, 'main', 'Detail info'),
(513, 'main', 'New post'),
(514, 'main', 'Post type'),
(515, 'main', 'Add'),
(516, 'main', 'Post search'),
(517, 'main', 'Enter post title...'),
(518, 'main', 'Search'),
(519, 'main', 'New post type'),
(520, 'main', 'Update post type “{title}”'),
(521, 'main', 'Update post type'),
(522, 'main', 'Changes not saved.'),
(523, 'main', 'Changes saved!'),
(524, 'main', 'ID'),
(525, 'main', 'filename'),
(526, 'main', 'Url'),
(527, 'main', 'Alt attribute'),
(528, 'main', 'Size'),
(529, 'main', 'Description'),
(530, 'main', 'Thumbnails'),
(531, 'main', 'Created'),
(532, 'main', 'Updated'),
(533, 'main', 'Original'),
(534, 'main', 'File manager'),
(535, 'main', 'File manager module'),
(536, 'main', 'Files'),
(537, 'main', 'Settings'),
(538, 'main', 'Thumbnails settings'),
(539, 'main', 'Thumbnails sizes has been resized successfully!'),
(540, 'main', 'Do not forget every time you change thumbnails presets to make them resize.'),
(541, 'main', 'Now using next thumbnails presets'),
(542, 'main', 'If you change the thumbnails sizes, it is strongly recommended to make resize all thumbnails.'),
(543, 'main', 'Do resize thumbnails'),
(544, 'main', 'Upload manager'),
(545, 'main', 'Select image size'),
(546, 'main', 'Insert'),
(547, 'main', 'Back to file manager'),
(548, 'fileupload', 'Error'),
(549, 'fileupload', 'Delete'),
(550, 'fileupload', 'Cancel'),
(551, 'fileupload', 'Add files'),
(552, 'fileupload', 'Start upload'),
(553, 'fileupload', 'Cancel upload'),
(554, 'fileupload', 'Processing'),
(555, 'fileupload', 'Start'),
(556, 'kvdrp', 'Apply'),
(557, 'kvdrp', 'Cancel'),
(558, 'kvdrp', 'From'),
(559, 'kvdrp', 'To'),
(560, 'kvdrp', 'W'),
(561, 'kvdrp', 'Custom Range'),
(562, 'kvdrp', 'Select Date Range'),
(563, 'kvdrp', 'Today'),
(564, 'kvdrp', 'Yesterday'),
(565, 'kvdrp', 'Last {n} Days'),
(566, 'kvdrp', 'This Month'),
(567, 'kvdrp', 'Last Month'),
(568, 'kvbase', 'It is recommended you use an upgraded browser to display the {type} control properly.'),
(569, 'app.member', 'No papers'),
(570, 'app.member', 'Submit'),
(571, 'app.member', 'table full name'),
(572, 'app.member', 'Payment status'),
(573, 'main', 'SEO title'),
(574, 'main', 'Update post “{title}”'),
(575, 'app.member', 'Note from Admin'),
(576, 'app.member', 'Registration date'),
(577, 'app.member', 'Papers count'),
(578, 'app.member', 'Participation Type'),
(579, 'app.member', 'Senior Research Officer'),
(580, 'app.member', 'Russian Federation'),
(581, 'app.member', 'Afghanistan'),
(582, 'app.member', 'Aland Islands'),
(583, 'app.member', 'Albania'),
(584, 'app.member', 'Algeria'),
(585, 'app.member', 'American Samoa'),
(586, 'app.member', 'Andorra'),
(587, 'app.member', 'Angola'),
(588, 'app.member', 'Anguilla'),
(589, 'app.member', 'Antarctica'),
(590, 'app.member', 'Antigua and Barbuda'),
(591, 'app.member', 'Argentina'),
(592, 'app.member', 'Armenia'),
(593, 'app.member', 'Aruba'),
(594, 'app.member', 'Australia'),
(595, 'app.member', 'Austria'),
(596, 'app.member', 'Azerbaijan'),
(597, 'app.member', 'Bahamas'),
(598, 'app.member', 'Bahrain'),
(599, 'app.member', 'Bangladesh'),
(600, 'app.member', 'Barbados'),
(601, 'app.member', 'Belgium'),
(602, 'app.member', 'Belize'),
(603, 'app.member', 'Benin'),
(604, 'app.member', 'Bermuda'),
(605, 'app.member', 'Bhutan'),
(606, 'app.member', 'Bolivia, Plurinational State of'),
(607, 'app.member', 'Bonaire, Sint Eustatius and Saba'),
(608, 'app.member', 'Bosnia and Herzegovina'),
(609, 'app.member', 'Botswana'),
(610, 'app.member', 'Bouvet Island'),
(611, 'app.member', 'Brazil'),
(612, 'app.member', 'British Indian Ocean Territory'),
(613, 'app.member', 'Brunei Darussalam'),
(614, 'app.member', 'Bulgaria'),
(615, 'app.member', 'Burkina Faso'),
(616, 'app.member', 'Burundi'),
(617, 'app.member', 'Cambodia'),
(618, 'app.member', 'Cameroon'),
(619, 'app.member', 'Canada'),
(620, 'app.member', 'Cape Verde'),
(621, 'app.member', 'Cayman Islands'),
(622, 'app.member', 'Central African Republic'),
(623, 'app.member', 'Chad'),
(624, 'app.member', 'Chile'),
(625, 'app.member', 'China'),
(626, 'app.member', 'Christmas Island'),
(627, 'app.member', 'Cocos (Keeling) Islands'),
(628, 'app.member', 'Colombia'),
(629, 'app.member', 'Comoros'),
(630, 'app.member', 'Congo'),
(631, 'app.member', 'Congo, The Democratic Republic of the'),
(632, 'app.member', 'Cook Islands'),
(633, 'app.member', 'Costa Rica'),
(634, 'app.member', 'Cote d`Ivoire'),
(635, 'app.member', 'Croatia'),
(636, 'app.member', 'Cuba'),
(637, 'app.member', 'Curacao'),
(638, 'app.member', 'Cyprus'),
(639, 'app.member', 'Czech Republic'),
(640, 'app.member', 'Denmark'),
(641, 'app.member', 'Djibouti'),
(642, 'app.member', 'Dominica'),
(643, 'app.member', 'Dominican Republic'),
(644, 'app.member', 'Ecuador'),
(645, 'app.member', 'Egypt'),
(646, 'app.member', 'El Salvador'),
(647, 'app.member', 'Equatorial Guinea'),
(648, 'app.member', 'Eritrea'),
(649, 'app.member', 'Estonia'),
(650, 'app.member', 'Ethiopia'),
(651, 'app.member', 'Falkland Islands (Malvinas)'),
(652, 'app.member', 'Faroe Islands'),
(653, 'app.member', 'Fiji'),
(654, 'app.member', 'Finland'),
(655, 'app.member', 'France'),
(656, 'app.member', 'French Guiana'),
(657, 'app.member', 'French Polynesia'),
(658, 'app.member', 'French Southern Territories'),
(659, 'app.member', 'Gabon'),
(660, 'app.member', 'Gambia'),
(661, 'app.member', 'Georgia'),
(662, 'app.member', 'Germany'),
(663, 'app.member', 'Ghana'),
(664, 'app.member', 'Gibraltar'),
(665, 'app.member', 'Greece'),
(666, 'app.member', 'Greenland'),
(667, 'app.member', 'Grenada'),
(668, 'app.member', 'Guadeloupe'),
(669, 'app.member', 'Guam'),
(670, 'app.member', 'Guatemala'),
(671, 'app.member', 'Guernsey'),
(672, 'app.member', 'Guinea'),
(673, 'app.member', 'Guinea-Bissau'),
(674, 'app.member', 'Guyana'),
(675, 'app.member', 'Haiti'),
(676, 'app.member', 'Heard Island and McDonald Islands'),
(677, 'app.member', 'Holy See (Vatican City State)'),
(678, 'app.member', 'Honduras'),
(679, 'app.member', 'Hong Kong'),
(680, 'app.member', 'Hungary'),
(681, 'app.member', 'Iceland'),
(682, 'app.member', 'India'),
(683, 'app.member', 'Indonesia'),
(684, 'app.member', 'Iran, Islamic Republic of'),
(685, 'app.member', 'Iraq'),
(686, 'app.member', 'Ireland'),
(687, 'app.member', 'Isle of Man'),
(688, 'app.member', 'Israel'),
(689, 'app.member', 'Italy'),
(690, 'app.member', 'Jamaica'),
(691, 'app.member', 'Japan'),
(692, 'app.member', 'Jersey'),
(693, 'app.member', 'Jordan'),
(694, 'app.member', 'Kenya'),
(695, 'app.member', 'Kiribati'),
(696, 'app.member', 'Korea, Democratic People`s Republic of'),
(697, 'app.member', 'Korea, Republic of'),
(698, 'app.member', 'Kuwait'),
(699, 'app.member', 'Kyrgyzstan'),
(700, 'app.member', 'Lao People`s Democratic Republic'),
(701, 'app.member', 'Latvia'),
(702, 'app.member', 'Lebanon'),
(703, 'app.member', 'Lesotho'),
(704, 'app.member', 'Liberia'),
(705, 'app.member', 'Libyan Arab Jamahiriya'),
(706, 'app.member', 'Liechtenstein'),
(707, 'app.member', 'Lithuania'),
(708, 'app.member', 'Luxembourg'),
(709, 'app.member', 'Macao'),
(710, 'app.member', 'Macedonia, The former Yugoslav Republic of'),
(711, 'app.member', 'Madagascar'),
(712, 'app.member', 'Malawi'),
(713, 'app.member', 'Malaysia'),
(714, 'app.member', 'Maldives'),
(715, 'app.member', 'Mali'),
(716, 'app.member', 'Malta'),
(717, 'app.member', 'Marshall Islands'),
(718, 'app.member', 'Martinique'),
(719, 'app.member', 'Mauritania'),
(720, 'app.member', 'Mauritius'),
(721, 'app.member', 'Mayotte'),
(722, 'app.member', 'Mexico'),
(723, 'app.member', 'Micronesia, Federated States of'),
(724, 'app.member', 'Moldova, Republic of'),
(725, 'app.member', 'Monaco'),
(726, 'app.member', 'Mongolia'),
(727, 'app.member', 'Montenegro'),
(728, 'app.member', 'Montserrat'),
(729, 'app.member', 'Morocco'),
(730, 'app.member', 'Mozambique'),
(731, 'app.member', 'Myanmar'),
(732, 'app.member', 'Namibia'),
(733, 'app.member', 'Nauru'),
(734, 'app.member', 'Nepal'),
(735, 'app.member', 'Netherlands'),
(736, 'app.member', 'New Caledonia'),
(737, 'app.member', 'New Zealand'),
(738, 'app.member', 'Nicaragua'),
(739, 'app.member', 'Niger'),
(740, 'app.member', 'Nigeria'),
(741, 'app.member', 'Niue'),
(742, 'app.member', 'Norfolk Island'),
(743, 'app.member', 'Northern Mariana Islands'),
(744, 'app.member', 'Norway'),
(745, 'app.member', 'Oman'),
(746, 'app.member', 'Pakistan'),
(747, 'app.member', 'Palau'),
(748, 'app.member', 'Palestinian Territory, Occupied'),
(749, 'app.member', 'Panama'),
(750, 'app.member', 'Papua New Guinea'),
(751, 'app.member', 'Paraguay'),
(752, 'app.member', 'Peru'),
(753, 'app.member', 'Philippines'),
(754, 'app.member', 'Pitcairn'),
(755, 'app.member', 'Poland'),
(756, 'app.member', 'Portugal'),
(757, 'app.member', 'Puerto Rico'),
(758, 'app.member', 'Qatar'),
(759, 'app.member', 'Reunion'),
(760, 'app.member', 'Romania'),
(761, 'app.member', 'Rwanda'),
(762, 'app.member', 'Saint Barthelemy'),
(763, 'app.member', 'Saint Helena, Ascension and Tristan Da Cunha'),
(764, 'app.member', 'Saint Kitts and Nevis'),
(765, 'app.member', 'Saint Lucia'),
(766, 'app.member', 'Saint Martin (French Part)'),
(767, 'app.member', 'Saint Pierre and Miquelon'),
(768, 'app.member', 'Saint Vincent and The Grenadines'),
(769, 'app.member', 'Samoa'),
(770, 'app.member', 'San Marino'),
(771, 'app.member', 'Sao Tome and Principe'),
(772, 'app.member', 'Saudi Arabia'),
(773, 'app.member', 'Senegal'),
(774, 'app.member', 'Serbia'),
(775, 'app.member', 'Seychelles'),
(776, 'app.member', 'Sierra Leone'),
(777, 'app.member', 'Singapore'),
(778, 'app.member', 'Sint Maarten (Dutch Part)'),
(779, 'app.member', 'Slovakia'),
(780, 'app.member', 'Slovenia'),
(781, 'app.member', 'Solomon Islands'),
(782, 'app.member', 'Somalia'),
(783, 'app.member', 'South Africa'),
(784, 'app.member', 'South Georgia and The South Sandwich Islands'),
(785, 'app.member', 'South Sudan'),
(786, 'app.member', 'Spain'),
(787, 'app.member', 'Sri Lanka'),
(788, 'app.member', 'Sudan'),
(789, 'app.member', 'Suriname'),
(790, 'app.member', 'Svalbard and Jan Mayen'),
(791, 'app.member', 'Swaziland'),
(792, 'app.member', 'Sweden'),
(793, 'app.member', 'Switzerland'),
(794, 'app.member', 'Syrian Arab Republic'),
(795, 'app.member', 'Taiwan, Province of China'),
(796, 'app.member', 'Tajikistan'),
(797, 'app.member', 'Tanzania, United Republic of'),
(798, 'app.member', 'Thailand'),
(799, 'app.member', 'Timor-Leste'),
(800, 'app.member', 'Togo'),
(801, 'app.member', 'Tokelau'),
(802, 'app.member', 'Tonga'),
(803, 'app.member', 'Trinidad and Tobago'),
(804, 'app.member', 'Tunisia'),
(805, 'app.member', 'Turkey'),
(806, 'app.member', 'Turkmenistan'),
(807, 'app.member', 'Turks and Caicos Islands'),
(808, 'app.member', 'Tuvalu'),
(809, 'app.member', 'Uganda'),
(810, 'app.member', 'United Arab Emirates'),
(811, 'app.member', 'United Kingdom'),
(812, 'app.member', 'United States'),
(813, 'app.member', 'United States Minor Outlying Islands'),
(814, 'app.member', 'Uruguay'),
(815, 'app.member', 'Uzbekistan'),
(816, 'app.member', 'Vanuatu'),
(817, 'app.member', 'Venezuela, Bolivarian Republic of'),
(818, 'app.member', 'Viet Nam'),
(819, 'app.member', 'Virgin Islands, British'),
(820, 'app.member', 'Virgin Islands, U.S.'),
(821, 'app.member', 'Wallis and Futuna'),
(822, 'app.member', 'Western Sahara'),
(823, 'app.member', 'Yemen'),
(824, 'app.member', 'Zambia'),
(825, 'app.member', 'Zimbabwe'),
(826, 'app.member.view', 'papers'),
(828, 'app.member.mail', 'Confirmation of registration to \'International Scientific Conference\''),
(831, 'app.member', 'Listener'),
(832, 'app.member', 'Speaker'),
(833, 'app', 'Listener or speaker'),
(834, 'app', 'All'),
(835, 'kvgrid', 'Expand'),
(836, 'kvgrid', 'Collapse'),
(837, 'kvgrid', 'Expand All'),
(838, 'kvgrid', 'Collapse All'),
(839, 'kvgrid', 'Add Book'),
(840, 'kvgrid', 'Book Listing'),
(841, 'kvgrid', 'Download Selected'),
(842, 'kvgrid', 'Library'),
(843, 'kvgrid', 'Reset Grid'),
(844, 'kvgrid', 'The page summary displays SUM for first 3 amount columns and AVG for the last.'),
(845, 'kvgrid', 'The table header sticks to the top in this demo as you scroll'),
(846, 'kvgrid', 'Resize table columns just like a spreadsheet by dragging the column edges.'),
(847, 'kvgrid', 'Invalid or bad editable data'),
(848, 'kvgrid', 'No valid editable model found'),
(849, 'kvgrid', 'Invalid editable index or model form name'),
(850, 'kvgrid', 'export'),
(851, 'kvgrid', 'No data found'),
(852, 'kvgrid', 'Clear selection'),
(853, 'kvgrid', 'Active'),
(854, 'kvgrid', 'Inactive'),
(855, 'kvgrid', 'Disable any popup blockers in your browser to ensure proper download.'),
(856, 'kvgrid', 'Ok to proceed?'),
(857, 'kvgrid', 'Generating the export file. Please wait...'),
(858, 'kvgrid', 'Request submitted! You may safely close this dialog after saving your downloaded file.'),
(859, 'kvgrid', 'Export'),
(860, 'kvgrid', 'Export Page Data'),
(861, 'kvgrid', 'Export All Data'),
(862, 'kvgrid', 'Grid Export'),
(863, 'kvgrid', 'Yii2 Grid Export (PDF)'),
(864, 'kvgrid', 'Generated'),
(865, 'kvgrid', '© Krajee Yii2 Extensions'),
(866, 'kvgrid', 'HTML'),
(867, 'kvgrid', 'grid-export'),
(868, 'kvgrid', 'The HTML export file will be generated for download.'),
(869, 'kvgrid', 'Hyper Text Markup Language'),
(870, 'kvgrid', 'CSV'),
(871, 'kvgrid', 'The CSV export file will be generated for download.'),
(872, 'kvgrid', 'Comma Separated Values'),
(873, 'kvgrid', 'Text'),
(874, 'kvgrid', 'The TEXT export file will be generated for download.'),
(875, 'kvgrid', 'Tab Delimited Text'),
(876, 'kvgrid', 'Excel'),
(877, 'kvgrid', 'The EXCEL export file will be generated for download.'),
(878, 'kvgrid', 'Microsoft Excel 95+'),
(879, 'kvgrid', 'ExportWorksheet'),
(880, 'kvgrid', 'PDF'),
(881, 'kvgrid', 'The PDF export file will be generated for download.'),
(882, 'kvgrid', 'Portable Document Format'),
(883, 'kvgrid', 'PDF export generated by kartik-v/yii2-grid extension'),
(884, 'kvgrid', 'krajee, grid, export, yii2-grid, pdf'),
(885, 'kvgrid', 'JSON'),
(886, 'kvgrid', 'The JSON export file will be generated for download.'),
(887, 'kvgrid', 'JavaScript Object Notation'),
(888, 'kvgrid', 'There are {totalCount} records. Are you sure you want to display them all?'),
(889, 'kvgrid', 'All'),
(890, 'kvgrid', 'Show all data'),
(891, 'kvgrid', 'Page'),
(892, 'kvgrid', 'Show first page data'),
(893, 'kvgrid', 'Actions'),
(894, 'kvgrid', 'View'),
(895, 'kvgrid', 'Update'),
(896, 'kvgrid', 'Delete'),
(897, 'kvgrid', 'Are you sure to delete this item?'),
(898, 'kvexport', 'Select Columns'),
(899, 'kvexport', 'Select columns to export'),
(900, 'kvexport', 'Column'),
(901, 'kvexport', 'grid-export'),
(902, 'kvexport', 'HTML'),
(903, 'kvexport', 'Hyper Text Markup Language'),
(904, 'kvexport', 'The HTML export file will be generated for download.'),
(905, 'kvexport', 'CSV'),
(906, 'kvexport', 'Comma Separated Values'),
(907, 'kvexport', 'The CSV export file will be generated for download.'),
(908, 'kvexport', 'Text'),
(909, 'kvexport', 'Tab Delimited Text'),
(910, 'kvexport', 'The TEXT export file will be generated for download.'),
(911, 'kvexport', 'PDF'),
(912, 'kvexport', 'Portable Document Format'),
(913, 'kvexport', 'The PDF export file will be generated for download.'),
(914, 'kvexport', 'Excel 95 +'),
(915, 'kvexport', 'Microsoft Excel 95+ (xls)'),
(916, 'kvexport', 'The EXCEL 95+ (xls) export file will be generated for download.'),
(917, 'kvexport', 'Excel 2007+'),
(918, 'kvexport', 'Microsoft Excel 2007+ (xlsx)'),
(919, 'kvexport', 'The EXCEL 2007+ (xlsx) export file will be generated for download.'),
(920, 'kvexport', 'Disable any popup blockers in your browser to ensure proper download.'),
(921, 'kvexport', 'Ok to proceed?'),
(922, 'kvexport', 'Generating the export file. Please wait...'),
(923, 'kvexport', 'Request submitted! You may safely close this dialog after saving your downloaded file.'),
(924, 'kvexport', 'Export data in selected format'),
(925, 'kvexport', 'Grid export generated by Krajee ExportMenu widget (yii2-export)'),
(926, 'kvexport', 'Exported File'),
(927, 'kvexport', 'Download exported file'),
(928, 'kvexport', 'Toggle All'),
(929, 'app.member.mail', 'Integrated Management 2017: Confirmation of Registration'),
(930, 'app.member.mail', 'Hello dear {name} we are inviting you to the next PM conference! It will be on 15th of January 2017'),
(931, 'app.member.mail', 'You can register here: {regUrl}'),
(932, 'app.member.mail', 'Dear {name}!'),
(933, 'app.member.mail', 'We thank you for your interest in our conference Integrated Management 2017. Your registration was successful and you were added to the list of participants. During registration the following personal details have been specified:'),
(934, 'app.member.mail', 'If you want to change any of the personal data (in particular the Name and Surname for the certificate), please let us know by sending an e-mail to the following address pm.khpi@gmail.com. Please, do not perform the re-registration on the site!'),
(935, 'app.member.mail', 'We remind you that participation fee payment for participants from not Ukraine is made on arrival. '),
(936, 'app.member.mail', 'If you have any questions, please contact us in any convenient way for you, and we will gladly help you. All available methods for communication are shown on the contact page of the conference website (http://conf.pm-edu.org/en/contacts).'),
(937, 'app.member.mail', 'Sincerely,<br> the organizing committee of the conference'),
(938, 'app.member.mail', 'Dear {name} thank you for participation in conference.'),
(939, 'app', 'UAH'),
(940, 'app', 'USD'),
(941, 'app', 'RUB'),
(942, 'app', 'Member`s fee'),
(943, 'app', 'All member`s fee');

-- --------------------------------------------------------

--
-- Table structure for table `language_translate`
--
-- Creation: Apr 24, 2016 at 05:50 PM
--

DROP TABLE IF EXISTS `language_translate`;
CREATE TABLE `language_translate` (
  `id` int(11) NOT NULL,
  `language` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `translation` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language_translate`
--

INSERT INTO `language_translate` (`id`, `language`, `translation`) VALUES
(367, 'ru-RU', 'Английский'),
(367, 'uk-UA', 'Англійська'),
(368, 'ru-RU', 'Украинский'),
(368, 'uk-UA', 'Українська'),
(369, 'ru-RU', 'Русский'),
(369, 'uk-UA', 'Російська'),
(370, 'ru-RU', 'Новый участник'),
(371, 'ru-RU', 'Участники конференции'),
(372, 'ru-RU', 'Редактировать данные регистрации:'),
(373, 'ru-RU', 'Редактировать'),
(374, 'ru-RU', 'Удалить'),
(384, 'ru-RU', 'Сохранить'),
(385, 'ru-RU', 'Закрыть'),
(400, 'ru-RU', 'Страна проживания'),
(400, 'uk-UA', 'Країна проживання'),
(401, 'ru-RU', 'Фамилия, имя, отчество'),
(401, 'uk-UA', 'Прізвище, ім\'я, по-батькові'),
(402, 'ru-RU', 'Должность'),
(402, 'uk-UA', 'Посада'),
(403, 'ru-RU', 'Контактный телефон'),
(403, 'uk-UA', 'Контактний телефон'),
(404, 'ru-RU', 'E-mail'),
(404, 'uk-UA', 'E-mail'),
(405, 'ru-RU', 'Круг научных интересов'),
(405, 'uk-UA', 'Коло наукових інтересів'),
(406, 'ru-RU', 'Ученая степень'),
(406, 'uk-UA', 'Наукова ступінь'),
(407, 'ru-RU', 'Ученое звание'),
(407, 'uk-UA', 'Вчене звання'),
(408, 'ru-RU', 'Полное название организации'),
(408, 'uk-UA', 'Повна назва'),
(409, 'ru-RU', 'Название кафедры/подразделения'),
(409, 'uk-UA', 'Назва кафедри/підрозділу'),
(410, 'ru-RU', 'Почтовый адрес'),
(410, 'uk-UA', 'Поштова адреса'),
(411, 'ru-RU', 'Сфера деятельности'),
(411, 'uk-UA', 'Сфера діяльності'),
(412, 'ru-RU', 'Сайт'),
(412, 'uk-UA', 'Сайт'),
(413, 'ru-RU', 'Имя и Фамилия согласно загранпаспорта (для сертификата)'),
(413, 'uk-UA', 'Ім\'я та прізвище згідно закордонного паспорту (для сертифікату)'),
(414, 'ru-RU', 'Введите название Вашего доклада'),
(414, 'uk-UA', 'Введіть назву Вашої доповіді'),
(415, 'ru-RU', 'Язык доклада'),
(415, 'uk-UA', 'Мова доповіді'),
(416, 'ru-RU', 'Выбирите секцию'),
(416, 'uk-UA', 'Оберіть секцію'),
(417, 'ru-RU', 'Доктор наук'),
(417, 'uk-UA', 'Доктор наук'),
(418, 'ru-RU', 'Доктор технических наук'),
(418, 'uk-UA', 'Доктор технічних наук'),
(419, 'ru-RU', 'Доктор экономических наук'),
(419, 'uk-UA', 'Доктор економічних наук'),
(420, 'ru-RU', 'Доктор физико-математических наук'),
(420, 'uk-UA', 'Доктор фізико-математичних наук'),
(421, 'ru-RU', 'Кандидат наук'),
(421, 'uk-UA', 'Кандидат наук'),
(422, 'ru-RU', 'Кандидат технических наук'),
(422, 'uk-UA', 'Кандидат технічних наук'),
(423, 'ru-RU', 'Кандидат экономических наук'),
(423, 'uk-UA', 'Кандидат економічних наук'),
(424, 'ru-RU', 'Кандидат физико-математических наук'),
(424, 'uk-UA', 'Кандидат фізико-математичних наук'),
(425, 'ru-RU', 'Нет степени'),
(425, 'uk-UA', 'Нема ступеню'),
(426, 'ru-RU', 'Буду участвовать как <b>Слушатель</b>'),
(426, 'uk-UA', 'Буду приймати участь як <b>Слухач</b>'),
(427, 'ru-RU', 'Буду участвовать как <b>Спикер</b>'),
(427, 'uk-UA', 'Буду приймати участь як <b>Доповідач</b>'),
(428, 'ru-RU', 'Профессор'),
(428, 'uk-UA', 'Професор'),
(429, 'ru-RU', 'Доцент'),
(429, 'uk-UA', 'Доцент'),
(430, 'ru-RU', 'Нет звания'),
(430, 'uk-UA', 'Нема звання'),
(431, 'ru-RU', 'Образование, наука'),
(431, 'uk-UA', 'Освіта, наука'),
(432, 'ru-RU', 'IT'),
(432, 'uk-UA', 'IT'),
(433, 'ru-RU', 'Банки, финансы, инвестиции'),
(433, 'uk-UA', 'Банки, фінанси, інвестиції'),
(434, 'ru-RU', 'Гостинично-ресторанный бизнес, туризм'),
(434, 'uk-UA', 'Готельно-ресторанний бізнес, туризм'),
(435, 'ru-RU', 'Государственное управление'),
(435, 'uk-UA', 'Державне управління'),
(436, 'ru-RU', 'Консалтинг, аналитика, аудит'),
(436, 'uk-UA', 'Консалтинг, аналітика, аудит'),
(437, 'ru-RU', 'Культура, шоу-бизнес, развлечения'),
(437, 'uk-UA', 'Культура, шоу-бізнес, розваги'),
(438, 'ru-RU', 'Медицина, фармацевтика, здравоохранение'),
(438, 'uk-UA', 'Медицина, фармацевтика, охорона здоров’я'),
(439, 'ru-RU', 'Недвижимость'),
(439, 'uk-UA', 'Нерухомість'),
(440, 'ru-RU', 'Некоммерческие организации'),
(440, 'uk-UA', 'Некомерційні організації'),
(441, 'ru-RU', 'Промышленность'),
(441, 'uk-UA', 'Промисловість'),
(442, 'ru-RU', 'Сельское хозяйство, агробизнес'),
(442, 'uk-UA', 'Сільське господарство, агробізнес'),
(443, 'ru-RU', 'Строительство, архитектура'),
(443, 'uk-UA', 'Будівництво, архітектура'),
(444, 'ru-RU', 'Телекоммуникации и связь'),
(444, 'uk-UA', 'Телекомунікації та зв\'язок'),
(445, 'ru-RU', 'Торговля'),
(445, 'uk-UA', 'Торгівля'),
(446, 'ru-RU', 'Транспорт, автобизнес'),
(446, 'uk-UA', 'Транспорт, автобізнес'),
(447, 'ru-RU', 'Услуги, сфера обслуживания'),
(447, 'uk-UA', 'Послуги, сфера обслуговування'),
(448, 'ru-RU', 'Английский'),
(448, 'uk-UA', 'Англійська'),
(449, 'ru-RU', 'Украинский'),
(449, 'uk-UA', 'Українська'),
(450, 'ru-RU', 'Русский'),
(450, 'uk-UA', 'Російська'),
(451, 'ru-RU', 'Пленарное заседание'),
(451, 'uk-UA', 'Пленарне засідання'),
(452, 'ru-RU', 'Секция 1: Интеграция стратегического управления, управления портфелями, программами, проектами'),
(452, 'uk-UA', 'Секція 1: Інтеграція стратегічного управління, управління портфелями, програмами, проектами'),
(453, 'ru-RU', 'Секция 2: Управление IT проектами'),
(453, 'uk-UA', 'Секція 2: Управління IT проектами'),
(454, 'ru-RU', 'Секция 3: Применение эффективных технологий управления на практике'),
(454, 'uk-UA', 'Секція 3: Застосування ефективних технологій управління на практиці'),
(455, 'ru-RU', 'Украина'),
(455, 'uk-UA', 'Україна'),
(457, 'ru-RU', 'Белорусь'),
(457, 'uk-UA', 'Білорусь'),
(458, 'ru-RU', 'Казахстан'),
(458, 'uk-UA', 'Казахстан'),
(460, 'ru-RU', 'Сведения об участнике'),
(460, 'uk-UA', 'Відомості про учасника'),
(461, 'ru-RU', 'Сведения об организации'),
(461, 'uk-UA', 'Відомості про організацію'),
(462, 'ru-RU', 'Формат участия'),
(462, 'uk-UA', 'Формат участі'),
(463, 'ru-RU', 'К оплате'),
(463, 'uk-UA', 'До оплати'),
(464, 'ru-RU', 'Организационный взнос'),
(464, 'uk-UA', 'Організаційний внесок'),
(465, 'ru-RU', 'Журнал статей конференции'),
(465, 'uk-UA', 'Журнал'),
(466, 'ru-RU', 'Итого к оплате'),
(466, 'uk-UA', 'Всього до сплати'),
(467, 'ru-RU', 'Итого к оплате:'),
(467, 'uk-UA', 'Загалом'),
(491, 'ru-RU', 'Редактировать'),
(492, 'ru-RU', 'Удалить'),
(569, 'ru-RU', 'Не нужен'),
(570, 'ru-RU', 'Отправить'),
(570, 'uk-UA', 'Відіслати'),
(571, 'ru-RU', 'ФИО участника'),
(571, 'uk-UA', 'П.І.Б. учасника'),
(572, 'ru-RU', 'Оплачено'),
(575, 'ru-RU', 'Примечание'),
(576, 'ru-RU', 'Дата регистрации'),
(577, 'ru-RU', 'Количество журналов статей конференции'),
(578, 'ru-RU', 'Формат участия в конференции'),
(579, 'ru-RU', 'Старший научный сотрудник'),
(579, 'uk-UA', 'Старший науковий співробітник'),
(580, 'ru-RU', 'Россия'),
(580, 'uk-UA', 'Росія'),
(581, 'ru-RU', 'Афганистан'),
(581, 'uk-UA', 'Афганістан'),
(582, 'ru-RU', 'Аландские острова'),
(582, 'uk-UA', 'Аландські острови (Фінляндія )'),
(583, 'ru-RU', 'Албания'),
(583, 'uk-UA', 'Албанія'),
(584, 'ru-RU', 'Алжир'),
(584, 'uk-UA', 'Алжир'),
(585, 'ru-RU', 'Восточное (Американское) Самоа'),
(585, 'uk-UA', 'Американське Самоа (США)'),
(586, 'ru-RU', 'Андорра'),
(586, 'uk-UA', 'Андорра'),
(587, 'ru-RU', 'Ангола'),
(587, 'uk-UA', 'Ангола'),
(588, 'ru-RU', 'Ангилья'),
(588, 'uk-UA', 'Ангілья (Велика Британія)'),
(589, 'ru-RU', 'Антарктида'),
(589, 'uk-UA', 'Антарктида'),
(590, 'ru-RU', 'Антигуа и Барбуда'),
(590, 'uk-UA', 'Антигуа і Барбуда'),
(591, 'ru-RU', 'Аргентина'),
(591, 'uk-UA', 'Аргентина'),
(592, 'ru-RU', 'Армения'),
(592, 'uk-UA', 'Вірменія'),
(593, 'ru-RU', 'Аруба'),
(593, 'uk-UA', 'Аруба (Нідерланди)'),
(594, 'ru-RU', 'Австралия'),
(594, 'uk-UA', 'Австралія'),
(595, 'ru-RU', 'Австрия'),
(595, 'uk-UA', 'Австрія'),
(596, 'ru-RU', 'Азербайджан'),
(596, 'uk-UA', 'Азербайджан'),
(597, 'ru-RU', 'Багамские острова'),
(597, 'uk-UA', 'Багамські Острови'),
(598, 'ru-RU', 'Бахрейн'),
(598, 'uk-UA', 'Бахрейн'),
(599, 'ru-RU', 'Бангладеш'),
(599, 'uk-UA', 'Бангладеш'),
(600, 'ru-RU', 'Барбадос'),
(600, 'uk-UA', 'Барбадос'),
(601, 'ru-RU', 'Бельгия'),
(601, 'uk-UA', 'Бельгія'),
(602, 'ru-RU', 'Белиз'),
(602, 'uk-UA', 'Беліз'),
(603, 'ru-RU', 'Бенин'),
(603, 'uk-UA', 'Бенін'),
(604, 'ru-RU', 'Бермудские острова'),
(604, 'uk-UA', 'Бермудські острови (Велика Британія)'),
(605, 'ru-RU', 'Бутан'),
(605, 'uk-UA', 'Бутан'),
(606, 'ru-RU', 'Боливия'),
(606, 'uk-UA', 'Болівія'),
(607, 'ru-RU', 'Бонэйр'),
(607, 'uk-UA', 'Бонайре (Карибські Нідерланди)'),
(608, 'ru-RU', 'Босния и Герцеговина'),
(608, 'uk-UA', 'Боснія і Герцеговина'),
(609, 'ru-RU', 'Ботсвана'),
(609, 'uk-UA', 'Ботсвана'),
(610, 'ru-RU', 'Остров Буве'),
(610, 'uk-UA', 'Острів Буве (Норвегія)'),
(611, 'ru-RU', 'Бразилия'),
(611, 'uk-UA', 'Бразилія'),
(612, 'ru-RU', 'Британская территория в Индийском океане'),
(612, 'uk-UA', 'Британська територія в Індійському океані (Велика Британія)'),
(613, 'ru-RU', 'Бруней'),
(613, 'uk-UA', 'Бруней'),
(614, 'ru-RU', 'Болгария'),
(614, 'uk-UA', 'Болгарія'),
(615, 'ru-RU', 'Буркина-Фасо'),
(615, 'uk-UA', 'Буркіна-Фасо'),
(616, 'ru-RU', 'Бурунди'),
(616, 'uk-UA', 'Бурунді'),
(617, 'ru-RU', 'Камбоджа'),
(617, 'uk-UA', 'Камбоджа'),
(618, 'ru-RU', 'Камерун'),
(618, 'uk-UA', 'Камерун'),
(619, 'ru-RU', 'Канада'),
(619, 'uk-UA', 'Канада'),
(620, 'ru-RU', 'Кабо-Верде'),
(620, 'uk-UA', 'Кабо-Верде'),
(621, 'ru-RU', 'Кайманы'),
(621, 'uk-UA', 'Кайманові острови (Велика Британія)'),
(622, 'ru-RU', 'Центральноафриканская Республика'),
(622, 'uk-UA', 'Центральноафриканська Республіка'),
(623, 'ru-RU', 'Чад'),
(623, 'uk-UA', 'Чад'),
(624, 'ru-RU', 'Чили'),
(624, 'uk-UA', 'Чилі'),
(625, 'ru-RU', 'Китайская Народная Республика'),
(625, 'uk-UA', 'Китай'),
(626, 'ru-RU', 'Остров Рождества'),
(626, 'uk-UA', 'Острів Різдва (Австралія)'),
(627, 'ru-RU', 'Кокосовые острова'),
(627, 'uk-UA', 'Кокосові острови (Кілінг)'),
(628, 'ru-RU', 'Колумбия'),
(628, 'uk-UA', 'Колумбія'),
(629, 'ru-RU', 'Коморские острова'),
(629, 'uk-UA', 'Коморські Острови'),
(630, 'ru-RU', 'Конго (Браззавиль)'),
(630, 'uk-UA', 'Конго'),
(631, 'ru-RU', 'ДРК и Конго (Киншаса)'),
(631, 'uk-UA', 'Демократична Республіка Конго (Заїр)'),
(632, 'ru-RU', 'Острова Кука'),
(632, 'uk-UA', 'Острови Кука (Нова Зеландія)'),
(633, 'ru-RU', 'Коста-Рика'),
(633, 'uk-UA', 'Коста-Рика'),
(634, 'ru-RU', 'Кот-д’Ивуар'),
(634, 'uk-UA', 'Кот-д\'Івуар'),
(635, 'ru-RU', 'Хорватия'),
(635, 'uk-UA', 'Хорватія'),
(636, 'ru-RU', 'Куба'),
(636, 'uk-UA', 'Куба'),
(637, 'ru-RU', 'Кюрасао'),
(637, 'uk-UA', 'Кюрасао (Нідерланди)'),
(638, 'ru-RU', 'Кипр'),
(638, 'uk-UA', 'Кіпр'),
(639, 'ru-RU', 'Чехия'),
(639, 'uk-UA', 'Чехія'),
(640, 'ru-RU', 'Дания'),
(640, 'uk-UA', 'Данія'),
(641, 'ru-RU', 'Джибути'),
(641, 'uk-UA', 'Джибуті'),
(642, 'ru-RU', 'Доминика'),
(642, 'uk-UA', 'Домініка'),
(643, 'ru-RU', 'Доминиканская Республика'),
(643, 'uk-UA', 'Домініканська Республіка'),
(644, 'ru-RU', 'Эквадор'),
(644, 'uk-UA', 'Еквадор'),
(645, 'ru-RU', 'Египет'),
(645, 'uk-UA', 'Єгипет'),
(646, 'ru-RU', 'Сальвадор'),
(646, 'uk-UA', 'Сальвадор'),
(647, 'ru-RU', 'Экваториальная Гвинея'),
(647, 'uk-UA', 'Екваторіальна Гвінея'),
(648, 'ru-RU', 'Эритрея'),
(648, 'uk-UA', 'Еритрея'),
(649, 'ru-RU', 'Эстония'),
(649, 'uk-UA', 'Естонія'),
(650, 'ru-RU', 'Эфиопия'),
(650, 'uk-UA', 'Ефіопія'),
(651, 'ru-RU', 'Фолклендские острова'),
(651, 'uk-UA', 'Фолклендські (Мальвінські) острови (Велика Британія)'),
(652, 'ru-RU', 'Фареры'),
(652, 'uk-UA', 'Фарерські острови  (Данія)'),
(653, 'ru-RU', 'Фиджи'),
(653, 'uk-UA', 'Фіджі'),
(654, 'ru-RU', 'Финляндия'),
(654, 'uk-UA', 'Фінляндія'),
(655, 'ru-RU', 'Франция'),
(655, 'uk-UA', 'Франція'),
(656, 'ru-RU', 'Гвиана'),
(656, 'uk-UA', 'Французька Гвіана (Франція)'),
(657, 'ru-RU', 'Полинезия Французская'),
(657, 'uk-UA', 'Французька Полінезія (Франція)'),
(658, 'ru-RU', 'Французские Южные территории'),
(658, 'uk-UA', 'Французькі Південні і Антарктичні території (Франція)'),
(659, 'ru-RU', 'Габон'),
(659, 'uk-UA', 'Габон'),
(660, 'ru-RU', 'Гамбия'),
(660, 'uk-UA', 'Гамбія'),
(661, 'ru-RU', 'Грузия'),
(661, 'uk-UA', 'Грузія'),
(662, 'ru-RU', 'Германия'),
(662, 'uk-UA', 'Німеччина'),
(663, 'ru-RU', 'Гана'),
(663, 'uk-UA', 'Гана'),
(664, 'ru-RU', 'Гибралтар'),
(664, 'uk-UA', 'Гібралтар (Велика Британія)'),
(665, 'ru-RU', 'Греция'),
(665, 'uk-UA', 'Греція'),
(666, 'ru-RU', 'Гренландия'),
(666, 'uk-UA', 'Ґренландія (Данія)'),
(667, 'ru-RU', 'Гренада'),
(667, 'uk-UA', 'Гренада'),
(668, 'ru-RU', 'Гваделупа'),
(668, 'uk-UA', 'Гваделупа (Франція)'),
(669, 'ru-RU', 'Гуам'),
(669, 'uk-UA', 'Гуам (США)'),
(670, 'ru-RU', 'Гватемала'),
(670, 'uk-UA', 'Гватемала'),
(671, 'ru-RU', 'Гернси'),
(671, 'uk-UA', 'Гернсі (Велика Британія)'),
(672, 'ru-RU', 'Гвинея'),
(672, 'uk-UA', 'Гвінея'),
(673, 'ru-RU', 'Гвинея-Бисау'),
(673, 'uk-UA', 'Гвінея-Бісау'),
(674, 'ru-RU', 'Гайана'),
(674, 'uk-UA', 'Гайана'),
(675, 'ru-RU', 'Гаити'),
(675, 'uk-UA', 'Гаїті'),
(676, 'ru-RU', 'Остров Херд и острова Макдональд'),
(676, 'uk-UA', 'Острів Херд і острови Макдональд (Австралія)'),
(677, 'ru-RU', 'Ватикан'),
(677, 'uk-UA', 'Ватикан'),
(678, 'ru-RU', 'Гондурас'),
(678, 'uk-UA', 'Гондурас'),
(679, 'ru-RU', 'Гонконг'),
(679, 'uk-UA', 'Гонконг (КНР)'),
(680, 'ru-RU', 'Венгрия'),
(680, 'uk-UA', 'Угорщина'),
(681, 'ru-RU', 'Исландия'),
(681, 'uk-UA', 'Ісландія'),
(682, 'ru-RU', 'Индия'),
(682, 'uk-UA', 'Індія'),
(683, 'ru-RU', 'Индонезия'),
(683, 'uk-UA', 'Індонезія'),
(684, 'ru-RU', 'Иран'),
(684, 'uk-UA', 'Іран'),
(685, 'ru-RU', 'Ирак'),
(685, 'uk-UA', 'Ірак'),
(686, 'ru-RU', 'Ирландия'),
(686, 'uk-UA', 'Ірландія'),
(687, 'ru-RU', 'Остров Мэн'),
(687, 'uk-UA', 'Острів Мен (Велика Британія)'),
(688, 'ru-RU', 'Израиль'),
(688, 'uk-UA', 'Ізраїль'),
(689, 'ru-RU', 'Италия'),
(689, 'uk-UA', 'Італія'),
(690, 'ru-RU', 'Ямайка'),
(690, 'uk-UA', 'Ямайка'),
(691, 'ru-RU', 'Япония'),
(691, 'uk-UA', 'Японія'),
(692, 'ru-RU', 'Джерси'),
(692, 'uk-UA', 'Джерсі (Велика Британія)'),
(693, 'ru-RU', 'Иордания'),
(693, 'uk-UA', 'Йорданія'),
(694, 'ru-RU', 'Кения'),
(694, 'uk-UA', 'Кенія'),
(695, 'ru-RU', 'Кирибати'),
(695, 'uk-UA', 'Кірибаті'),
(696, 'ru-RU', 'Северная Корея'),
(696, 'uk-UA', 'Північна Корея'),
(697, 'ru-RU', 'Южная Корея'),
(697, 'uk-UA', 'Південна Корея'),
(698, 'ru-RU', 'Кувейт'),
(698, 'uk-UA', 'Кувейт'),
(699, 'ru-RU', 'Киргизия'),
(699, 'uk-UA', 'Киргизстан'),
(700, 'ru-RU', 'Лаос'),
(700, 'uk-UA', 'Лаос'),
(701, 'ru-RU', 'Латвия'),
(701, 'uk-UA', 'Латвія'),
(702, 'ru-RU', 'Ливан'),
(702, 'uk-UA', 'Ліван'),
(703, 'ru-RU', 'Лесото'),
(703, 'uk-UA', 'Лесото'),
(704, 'ru-RU', 'Либерия'),
(704, 'uk-UA', 'Ліберія'),
(705, 'ru-RU', 'Ливия'),
(705, 'uk-UA', 'Лівія'),
(706, 'ru-RU', 'Лихтенштейн'),
(706, 'uk-UA', 'Ліхтенштейн'),
(707, 'ru-RU', 'Литва'),
(707, 'uk-UA', 'Литва'),
(708, 'ru-RU', 'Люксембург'),
(708, 'uk-UA', 'Люксембург'),
(709, 'ru-RU', 'Макао'),
(709, 'uk-UA', 'Макао (КНР)'),
(710, 'ru-RU', 'Македония'),
(710, 'uk-UA', 'Македонія'),
(711, 'ru-RU', 'Мадагаскар'),
(711, 'uk-UA', 'Мадагаскар'),
(712, 'ru-RU', 'Малави'),
(712, 'uk-UA', 'Малаві'),
(713, 'ru-RU', 'Малайзия'),
(713, 'uk-UA', 'Малайзія'),
(714, 'ru-RU', 'Мальдивы'),
(714, 'uk-UA', 'Мальдіви'),
(715, 'ru-RU', 'Мали'),
(715, 'uk-UA', 'Малі'),
(716, 'ru-RU', 'Мальта'),
(716, 'uk-UA', 'Мальта'),
(717, 'ru-RU', 'Маршалловы острова'),
(717, 'uk-UA', 'Маршаллові Острови'),
(718, 'ru-RU', 'Мартиника'),
(718, 'uk-UA', 'Мартиніка (Франція)'),
(719, 'ru-RU', 'Мавритания'),
(719, 'uk-UA', 'Мавританія'),
(720, 'ru-RU', 'Маврикий'),
(720, 'uk-UA', 'Маврикій'),
(721, 'ru-RU', 'Майотта'),
(721, 'uk-UA', 'Майотта (Франція)'),
(722, 'ru-RU', 'Мексика'),
(722, 'uk-UA', 'Мексика'),
(723, 'ru-RU', 'Микронезия'),
(723, 'uk-UA', 'Федеративні Штати Мікронезії'),
(724, 'ru-RU', 'Молдавия'),
(724, 'uk-UA', 'Молдова'),
(725, 'ru-RU', 'Монако'),
(725, 'uk-UA', 'Монако'),
(726, 'ru-RU', 'Монголия'),
(726, 'uk-UA', 'Монголія'),
(727, 'ru-RU', 'Черногория'),
(727, 'uk-UA', 'Чорногорія'),
(728, 'ru-RU', 'Монтсеррат'),
(728, 'uk-UA', 'Монтсеррат (Велика Британія)'),
(729, 'ru-RU', 'Марокко'),
(729, 'uk-UA', 'Марокко'),
(730, 'ru-RU', 'Мозамбик'),
(730, 'uk-UA', 'Мозамбік'),
(731, 'ru-RU', 'Мьянма'),
(731, 'uk-UA', 'М\'янма'),
(732, 'ru-RU', 'Намибия'),
(732, 'uk-UA', 'Намібія'),
(733, 'ru-RU', 'Науру'),
(733, 'uk-UA', 'Науру'),
(734, 'ru-RU', 'Непал'),
(734, 'uk-UA', 'Непал'),
(735, 'ru-RU', 'Нидерланды'),
(735, 'uk-UA', 'Нідерланди'),
(736, 'ru-RU', 'Новая Каледония'),
(736, 'uk-UA', 'Нова Каледонія (Франція)'),
(737, 'ru-RU', 'Новая Зеландия'),
(737, 'uk-UA', 'Нова Зеландія'),
(738, 'ru-RU', 'Никарагуа'),
(738, 'uk-UA', 'Нікарагуа'),
(739, 'ru-RU', 'Нигер'),
(739, 'uk-UA', 'Нігер'),
(740, 'ru-RU', 'Нигерия'),
(740, 'uk-UA', 'Нігерія'),
(741, 'ru-RU', 'Ниуэ'),
(741, 'uk-UA', 'Ніуе (Нова Зеландія)'),
(742, 'ru-RU', 'Остров Норфолк'),
(742, 'uk-UA', 'Острів Норфолк (Австралія)'),
(743, 'ru-RU', 'Северные Марианские Острова'),
(743, 'uk-UA', 'Північні Маріанські острови  (США)'),
(744, 'ru-RU', 'Норвегия'),
(744, 'uk-UA', 'Норвегія'),
(745, 'ru-RU', 'Оман'),
(745, 'uk-UA', 'Оман'),
(746, 'ru-RU', 'Пакистан'),
(746, 'uk-UA', 'Пакистан'),
(747, 'ru-RU', 'Палау'),
(747, 'uk-UA', 'Палау'),
(748, 'ru-RU', 'Палестина'),
(748, 'uk-UA', 'Палестинська держава'),
(749, 'ru-RU', 'Панама'),
(749, 'uk-UA', 'Панама'),
(750, 'ru-RU', 'Папуа - Новая Гвинея'),
(750, 'uk-UA', 'Папуа Нова Гвінея'),
(751, 'ru-RU', 'Парагвай'),
(751, 'uk-UA', 'Парагвай'),
(752, 'ru-RU', 'Перу'),
(752, 'uk-UA', 'Перу'),
(753, 'ru-RU', 'Филиппины'),
(753, 'uk-UA', 'Філіппіни'),
(754, 'ru-RU', 'Острова Питкэрн'),
(754, 'uk-UA', 'Піткерн (Велика Британія)'),
(755, 'ru-RU', 'Польша'),
(755, 'uk-UA', 'Польща'),
(756, 'ru-RU', 'Португалия'),
(756, 'uk-UA', 'Португалія'),
(757, 'ru-RU', 'Пуэрто-Рико'),
(757, 'uk-UA', 'Пуерто-Рико  (США)'),
(758, 'ru-RU', 'Катар'),
(758, 'uk-UA', 'Катар'),
(759, 'ru-RU', 'Реюньон'),
(759, 'uk-UA', 'Реюньйон (Франція)'),
(760, 'ru-RU', 'Румыния'),
(760, 'uk-UA', 'Румунія'),
(761, 'ru-RU', 'Руанда'),
(761, 'uk-UA', 'Руанда'),
(762, 'ru-RU', 'Сен-Бартелеми'),
(762, 'uk-UA', 'Сен-Бартелемі (Франція)'),
(763, 'ru-RU', 'Острова Святой Елены, Вознесения и Тристан-да-Кунья'),
(763, 'uk-UA', 'Острови Святої Єлени, Вознесіння і Тристан-да-Кунья (Велика Британія)'),
(764, 'ru-RU', 'Сент-Китс и Невис'),
(764, 'uk-UA', 'Сент-Кіттс і Невіс'),
(765, 'ru-RU', 'Сент-Люсия'),
(765, 'uk-UA', 'Сент-Люсія'),
(766, 'ru-RU', 'Сен-Мартен'),
(766, 'uk-UA', 'Сен-Мартен (Франція)'),
(767, 'ru-RU', 'Сен-Пьер и Микелон'),
(767, 'uk-UA', 'Сен-П\'єр і Мікелон (Франція)'),
(768, 'ru-RU', 'Сент-Винсент и Гренадины'),
(768, 'uk-UA', 'Сент-Вінсент і Гренадини'),
(769, 'ru-RU', 'Самоа'),
(769, 'uk-UA', 'Самоа'),
(770, 'ru-RU', 'Сан-Марино'),
(770, 'uk-UA', 'Сан-Марино'),
(771, 'ru-RU', 'Сан-Томе и Принсипи'),
(771, 'uk-UA', 'Сан-Томе і Принсіпі'),
(772, 'ru-RU', 'Саудовская Аравия'),
(772, 'uk-UA', 'Саудівська Аравія'),
(773, 'ru-RU', 'Сенегал'),
(773, 'uk-UA', 'Сенегал'),
(774, 'ru-RU', 'Сербия'),
(774, 'uk-UA', 'Сербія'),
(775, 'ru-RU', 'Сейшельские острова'),
(775, 'uk-UA', 'Сейшельські Острови'),
(776, 'ru-RU', 'Сьерра-Леоне'),
(776, 'uk-UA', 'Сьєрра-Леоне'),
(777, 'ru-RU', 'Сингапур'),
(777, 'uk-UA', 'Сінгапур'),
(778, 'ru-RU', 'Синт-Мартен'),
(778, 'uk-UA', 'Сінт-Мартен (Нідерланди)'),
(779, 'ru-RU', 'Словакия'),
(779, 'uk-UA', 'Словаччина'),
(780, 'ru-RU', 'Словения'),
(780, 'uk-UA', 'Словенія'),
(781, 'ru-RU', 'Соломоновы острова'),
(781, 'uk-UA', 'Соломонові Острови'),
(782, 'ru-RU', 'Сомали'),
(782, 'uk-UA', 'Сомалі'),
(783, 'ru-RU', 'Южно-Африканская Республика'),
(783, 'uk-UA', 'Південно-Африканська Республіка'),
(784, 'ru-RU', 'Южная Георгия и Южные Сандвичевы острова'),
(784, 'uk-UA', 'Південна Джорджія та Південні Сандвічеві острови (Велика Британія)'),
(785, 'ru-RU', 'Южный Судан'),
(785, 'uk-UA', 'Південний Судан'),
(786, 'ru-RU', 'Испания'),
(786, 'uk-UA', 'Іспанія'),
(787, 'ru-RU', 'Шри-Ланка'),
(787, 'uk-UA', 'Шрі-Ланка'),
(788, 'ru-RU', 'Судан'),
(788, 'uk-UA', 'Судан'),
(789, 'ru-RU', 'Суринам'),
(789, 'uk-UA', 'Суринам'),
(790, 'ru-RU', 'Шпицберген и Ян-Майен'),
(790, 'uk-UA', 'Свальбард і Ян-Маєн  (Норвегія)'),
(791, 'ru-RU', 'Свазиленд'),
(791, 'uk-UA', 'Свазіленд'),
(792, 'ru-RU', 'Швеция'),
(792, 'uk-UA', 'Швеція'),
(793, 'ru-RU', 'Швейцария'),
(793, 'uk-UA', 'Швейцарія'),
(794, 'ru-RU', 'Сирия'),
(794, 'uk-UA', 'Сирія'),
(795, 'ru-RU', 'Тайвань'),
(795, 'uk-UA', 'Тайвань'),
(796, 'ru-RU', 'Таджикистан'),
(796, 'uk-UA', 'Таджикистан'),
(797, 'ru-RU', 'Танзания'),
(797, 'uk-UA', 'Танзанія'),
(798, 'ru-RU', 'Таиланд'),
(798, 'uk-UA', 'Таїланд'),
(799, 'ru-RU', 'Восточный Тимор'),
(799, 'uk-UA', 'Східний Тимор'),
(800, 'ru-RU', 'Того'),
(800, 'uk-UA', 'Того'),
(801, 'ru-RU', 'Токелау'),
(801, 'uk-UA', 'Токелау (Нова Зеландія)'),
(802, 'ru-RU', 'Тонга'),
(802, 'uk-UA', 'Тонга'),
(803, 'ru-RU', 'Тринидад и Тобаго'),
(803, 'uk-UA', 'Тринідад і Тобаго'),
(804, 'ru-RU', 'Тунис'),
(804, 'uk-UA', 'Туніс'),
(805, 'ru-RU', 'Турция'),
(805, 'uk-UA', 'Туреччина'),
(806, 'ru-RU', 'Туркмения'),
(806, 'uk-UA', 'Туркменістан'),
(807, 'ru-RU', 'Тёркс и Кайкос'),
(807, 'uk-UA', 'Острови Теркс і Кайкос (Велика Британія)'),
(808, 'ru-RU', 'Тувалу'),
(808, 'uk-UA', 'Тувалу'),
(809, 'ru-RU', 'Уганда'),
(809, 'uk-UA', 'Уганда'),
(810, 'ru-RU', 'Объединённые Арабские Эмираты'),
(810, 'uk-UA', 'Об\'єднані Арабські Емірати'),
(811, 'ru-RU', 'Великобритания'),
(811, 'uk-UA', 'Велика Британія'),
(812, 'ru-RU', 'Соединённые Штаты Америки'),
(812, 'uk-UA', 'США'),
(813, 'ru-RU', 'Внешние малые острова США'),
(813, 'uk-UA', 'Зовнішні малі острови США'),
(814, 'ru-RU', 'Уругвай'),
(814, 'uk-UA', 'Уругвай'),
(815, 'ru-RU', 'Узбекистан'),
(815, 'uk-UA', 'Узбекистан'),
(816, 'ru-RU', 'Вануату'),
(816, 'uk-UA', 'Вануату'),
(817, 'ru-RU', 'Венесуэла'),
(817, 'uk-UA', 'Венесуела'),
(818, 'ru-RU', 'Вьетнам'),
(818, 'uk-UA', 'В\'єтнам'),
(819, 'ru-RU', 'Виргинские Острова (Великобритания)'),
(819, 'uk-UA', 'Британські Віргінські Острови (Велика Британія)'),
(820, 'ru-RU', 'Виргинские Острова (США)'),
(820, 'uk-UA', 'Американські Віргінські Острови (США)'),
(821, 'ru-RU', 'Уоллис и Футуна'),
(821, 'uk-UA', 'Волліс і Футуна (Франція)'),
(822, 'ru-RU', 'Западная Сахара'),
(822, 'uk-UA', 'Західна Сахара'),
(823, 'ru-RU', 'Йемен'),
(823, 'uk-UA', 'Ємен'),
(824, 'ru-RU', 'Замбия'),
(824, 'uk-UA', 'Замбія'),
(825, 'ru-RU', 'Зимбабве'),
(825, 'uk-UA', 'Зімбабве'),
(828, 'ru-RU', 'Подтверждение регистрации в "Международной научно-практической конференции"'),
(828, 'uk-UA', 'Confirmation of registration to \'International Scientific Conference\''),
(831, 'ru-RU', 'Слушатель'),
(831, 'uk-UA', 'Слухач'),
(832, 'ru-RU', 'Докладчик'),
(832, 'uk-UA', 'Доповідач'),
(833, 'ru-RU', 'Слушатель/Докладчик'),
(833, 'uk-UA', 'Слухач/Доповідач'),
(834, 'ru-RU', 'Все участники'),
(895, 'ru-RU', ''),
(929, 'ru-RU', 'Integrated Management 2017: Подтверждение регистрации'),
(929, 'uk-UA', 'Integrated Management 2017: Підтвердження реєстрації'),
(930, 'ru-RU', 'Здравствуйте, уважаемый {name} мы приглашаем Вас к следующей конференции PM! Это будет 15-го января 2017 года'),
(930, 'uk-UA', 'Здрастуйте, дорогі {name} ми запрошуємо вас до наступної конференції PM! Це буде 15-го січня 2017 року'),
(931, 'ru-RU', 'Вы можете пройти регистрацию тут: {regUrl}'),
(931, 'uk-UA', 'Ви можете зареєструватися тут: {regUrl}'),
(932, 'ru-RU', 'Уважаемый {name}!'),
(932, 'uk-UA', 'Шановний {name}!'),
(933, 'ru-RU', 'Благодарим Вас за проявленный интерес к нашей конференции Integrated Management 2017. Ваша регистрация прошла успешно, и Вы были внесены в список участников. При регистрации Вами были указаны следующие персональные данные:'),
(933, 'uk-UA', 'Дякуємо Вам за проявлений інтерес до нашої конференції Integrated Management 2017. Ваша реєстрація пройшла успішно, і Ви були внесені в список учасників. При реєстрації Вами були вказані такі персональні дані:'),
(934, 'ru-RU', 'Если Вы хотите изменить какие-либо из персональных данных (в особенности имя и фамилию для сертификата), сообщите нам об этом, отправив письмо на электронный адрес pm.khpi@gmail.com. Пожалуйста, не осуществляйте повторной регистрации на сайте!'),
(934, 'uk-UA', 'Якщо Ви хочете змінити будь-які з персональних даних (особливо ім\'я і прізвище для сертифіката), повідомте нам про це, надіславши електронного листа на електронну адресу pm.khpi@gmail.com. Будь ласка, не здійснюйте повторної реєстрації на сайті!'),
(935, 'ru-RU', 'Напоминаем, что\n<ul>\n<li>крайний срок для оплаты оргвзноса – 31 января 2017 г. </li>\n<li>крайний срок для подачи статей к публикации – 25 ноября 2016 г</li>\n</ul>	\nПри ранней оплате предоставляется скидка. Подробнее на http://conf.pm-edu.org/ru/participation.'),
(935, 'uk-UA', 'Нагадуємо, що\n<ul>\n<li>крайній термін для сплати організаційного внеску – 31 січня 2017 р.</li>\n<li>крайній термін для подачі статей до публікації – 25 листопада 2016 р.</li>\n</ul>	\nПри ранній оплаті надається знижка. Детальніше на http://conf.pm-edu.org/ua/participation.'),
(936, 'ru-RU', 'Если у Вас возникнут какие-либо вопросы, свяжитесь с нами любым удобным для Вас способом, и мы с радостью поможем Вам. Все доступные способы для связи представлены на странице контактов сайта конференции (http://conf.pm-edu.org/ru/contacts).'),
(936, 'uk-UA', 'Якщо у Вас виникнуть будь-які питання, зв\'яжіться з нами будь-яким зручним для Вас способом, і ми з радістю допоможемо Вам. Всі доступні способи для зв\'язку представлені на сторінці контактів сайту конференції (http://conf.pm-edu.org/ua/contacts).'),
(937, 'ru-RU', 'С уважением,<br>организационный комитет конференции'),
(937, 'uk-UA', 'З повагою,<br>організаційний комітет конференції'),
(938, 'ru-RU', 'Уважаемый {name,} благодарим Вас за участие в конференции.'),
(938, 'uk-UA', 'Шановний {name} дякуємо Вам за участь в конференції'),
(942, 'ru-RU', 'Оргвзнос'),
(943, 'ru-RU', 'Все оргвзносы');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--
-- Creation: Apr 24, 2016 at 05:50 PM
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) DEFAULT '0',
  `nameEng` varchar(1000) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `position` varchar(1000) DEFAULT NULL,
  `phone` varchar(1000) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `interest` varchar(1000) DEFAULT NULL,
  `scienceDegree` varchar(1000) DEFAULT NULL,
  `scienceTitle` varchar(1000) DEFAULT NULL,
  `organisationTitle` varchar(1000) DEFAULT NULL,
  `organisationDepartment` varchar(1000) DEFAULT NULL,
  `organisationAddress` varchar(1000) DEFAULT NULL,
  `organisationActivity` varchar(1000) DEFAULT NULL,
  `organisationUrl` varchar(1000) DEFAULT NULL,
  `participationType` varchar(1000) DEFAULT NULL,
  `topicTitle` varchar(1000) DEFAULT NULL,
  `topicLanguage` varchar(1000) DEFAULT NULL,
  `topicSection` varchar(1000) DEFAULT NULL,
  `totalSum` int(11) DEFAULT NULL,
  `currency` varchar(50) DEFAULT NULL,
  `papersCount` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `noteFromAdmin` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `nameEng`, `country`, `position`, `phone`, `email`, `interest`, `scienceDegree`, `scienceTitle`, `organisationTitle`, `organisationDepartment`, `organisationAddress`, `organisationActivity`, `organisationUrl`, `participationType`, `topicTitle`, `topicLanguage`, `topicSection`, `totalSum`, `currency`, `papersCount`, `created_at`, `updated_at`, `paid`, `noteFromAdmin`) VALUES
(19, 'Бабич Ігор Ігоревич', 'Igor Babych', 'ua', 'Асистент', '+380956860510', 'babych.igor.i@gmail.com', 'Управління проектами, імітаційне моделювання', 'no_degree', 'no_rank', 'Національний технічний університет "Харківський політехнічний інститут"', 'Кафедра стратегічного управління', 'вул. Фрунзе, 21, Харків, Україна, 61002', 'science', 'http://www.kpi.kharkov.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463467298, 1463664331, 0, ''),
(20, 'Лобач Олена Володимирівна', 'Helena Lobach', 'ua', 'Доцент', '+380509846979', 'e.v.lobach@gmail.com', 'Управління проектами і програмами', 'ph_d_tech', 'docent', 'Національний технічний університет "Харківський політехнічний інститут"', 'Кафедра стратегічного управління', 'вул. Фрунзе, 21, Харків, Україна, 61002', 'science', 'http://www.kpi.kharkov.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463467540, 1463664348, 0, ''),
(21, 'Роговий Антон Іванович', 'Anton Rogoviy', 'ua', 'Доцент', '+380675424242', 'rogoviy@ukr.net', 'Управління проектами, маркетинг', 'ph_d_tech', 'docent', 'Національний технічний університет "Харківський політехнічний інститут"', 'Кафедра стратегічного управління', 'вул. Фрунзе, 21, Харків, Україна, 61002', 'science', 'http://www.kpi.kharkov.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463467741, 1463664364, 0, ''),
(22, 'Ігуменцева Наталія Володимирівна', 'Natalia Igumentseva', 'ua', 'Доцент', '+380672990614', 'izumnv@i.ua', 'Соціальне прогнозування', 'ph_d_econ', 'docent', 'Харківський національний університет радіоелектроніки', 'Кафедра економічної кібернетики і управління економічною безпекою', 'пр-т Науки, 14, Харків. Україна, 61166', 'science', 'http://nure.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463489553, 1464165498, 1, ''),
(23, 'Гуца Олег Миколайович', 'Oleg Gutsa', 'ua', 'Доцент', '+380503007762', 'gutsabox@gmail.com', 'Процесний підхід до управління, бізнес-процеси, регламенти', 'ph_d_tech', 'docent', 'Харківський національний університет радіоелектроніки', 'Кафедра економічної кібернетики і управління економічною безпекою', 'пр-т Науки, 14, Харків. Україна, 61166', 'science', 'http://nure.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463490019, 1464165509, 1, ''),
(24, 'Довгопол Ніна Василівна', 'Nina Dovgopol', 'ua', 'Доцент', '+380952234442', 'n.dovgopol@mail.ru', 'Оптимізація бізнес-процесів в бухгалтерському обліку', 'ph_d_econ', 'docent', 'Харківський національний університет радіоелектроніки', 'Кафедра економічної кібернетики і управління економічною безпекою', 'пр-т Науки, 14, Харків. Україна, 61166', 'science', 'http://nure.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463490199, 1464165519, 1, ''),
(25, 'Кононенко Ігор Володимирович', 'Igor Kononenko', 'ua', 'Завідувач кафедри стратегічного управління', '+380505142016', 'igorvkononenko@gmail.com', 'Інтегроване стратегічне управління, управління портфелями, програмами, проектами', 'ph_d_tech', 'prof', 'Національний технічний університет "Харківський політехнічний інститут"', 'Кафедра стратегічного управління', 'вул. Фрунзе, 21, Харків, Україна, 61002', 'science', 'http://www.kpi.kharkov.ua/', 'speaker', 'Модель и метод синтеза методологии управления проектом при нечетких исходных данных', '2', '0', 350, 'uah', 0, 1463490634, 1463664381, 0, ''),
(26, 'Овсюченко Юрій Вікторович', 'Yuriy Ovsyuchenko', 'ua', 'Доцент', '+380501716175', 'ovsyuchenko64@mail.ru', 'Управління бізнес-процесами', 'ph_d_econ', 'docent', 'Харківський національний університет радіоелектроніки', 'Кафедра економічної кібернетики і управління економічною безпекою', 'пр-т Науки, 14, Харків. Україна, 61166', 'science', 'http://nure.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463490931, 1464165530, 1, ''),
(27, 'Пересада Олена Василівна', 'Olena Peresada', 'ua', 'Старший викладач', '+380501330080', 'alexeyperesada@gmail.com', 'Міжнародна економіка, історія економічних вчень', 'no_degree', 'no_rank', 'Харківський національний університет радіоелектроніки', 'Кафедра економічної кібернетики і управління економічною безпекою', 'пр-т Науки, 14, Харків. Україна, 61166', 'science', 'http://nure.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463491718, 1464165539, 1, ''),
(28, 'Прібильнова Інна Борисівна', 'Inna Pribylnova', 'ua', 'Старший викладач', '+380930551830', 'inessa_@list.ru', 'Інформаційний бізнес, моделювання бізнес-процесів', 'no_degree', 'no_rank', 'Харківський національний університет радіоелектроніки', 'Кафедра економічної кібернетики і управління економічною безпекою', 'пр-т Науки, 14, Харків. Україна, 61166', 'science', 'http://nure.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463492059, 1464165549, 1, ''),
(29, 'Тімофєєв Володимир Олександрович', 'Volodymyr Timofeev', 'ua', 'Завідувач кафедри економічної кібернетики і управління економічною безпекою', '+380577021490', 'kafedra_eim@kture.kharkov.ua', 'Економічна кібернетика, управління економічною безпекою', 'd_sc_tech', 'prof', 'Харківський національний університет радіоелектроніки', 'Кафедра економічної кібернетики і управління економічною безпекою', 'пр-т Науки, 14, Харків. Україна, 61166', 'science', 'http://nure.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463492337, 1464165560, 0, ''),
(30, 'Харазій Анна Володимирівна', 'Anna Haraziy', 'ua', 'Асистент', '+380506153212', 'haraziy@rambler.ru', 'Управління проектами і програмами', 'ph_d_tech', 'no_rank', 'Національний технічний університет "Харківський політехнічний інститут"', 'Кафедра стратегічного управління', 'вул. Фрунзе, 21, Харків, Україна, 61002', 'science', 'http://www.kpi.kharkov.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463492520, 1463664398, 0, ''),
(31, 'Чайкова Олена Ігорівна', 'Olena Chaykova', 'ua', 'Доцент', '+380577076161', 'chaykovalena@gmail.com', 'Менеджмент, маркетинг', 'ph_d_econ', 'docent', 'Національний технічний університет "Харківський політехнічний інститут"', 'Кафедра менеджменту зовнішньоекономічної діяльності та фінансів', 'вул. Фрунзе, 21, Харків, Україна, 61002', 'science', 'http://www.kpi.kharkov.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463492725, 1463664424, 0, ''),
(32, 'Андрієвська Віра Олександрівна', 'Vira Andrievska', 'ua', 'Старший викладач', '+380634770060', 'andri-vera@ukr.net', 'Управління проектами та програмами ', 'no_degree', 'no_rank', 'Одеський національний морський університет', 'Кафедра "Системний аналіз та логістика"', 'вул. Мечникова, 34, Одеса, Україна, 65029', 'science', 'http://www.osmu.odessa.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463516836, 1464020656, 1, ''),
(33, 'Берневек Тетяна Іванівна', 'Tatyana Bernevek', 'ua', 'Асистент', '+380482341192', 'bernevek-g@mail.ru', 'Управління проектами', 'no_degree', 'no_rank', 'Одеський національний морський університет', 'Кафедра "Морські перевезення"', 'вул. Мечникова, 34, Одеса, Україна, 65029', 'science', 'http://www.osmu.odessa.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463517110, 1464020753, 1, ''),
(34, 'Бондар Алла Віталіївна', 'Alla Bondar', 'ua', 'Доцент', '+380684030010', 'ocheretyanka@rambler.ru', 'Управління проектами на транспорті', 'ph_d_tech', 'docent', 'Одеський національний морський університет', 'Кафедра "Системний аналіз та логістика"', 'вул. Мечникова, 34, Одеса, Україна, 65029', 'science', 'http://www.osmu.odessa.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463517303, 1464020774, 1, ''),
(35, 'Гловацька Світлана Миколаївна', 'Svitlana Glovatska', 'ua', 'Начальник відділу міжнародних зв\'язків', '+380677584958', 'snglov@gmail.com', 'Управління проектами міжнародної діяльності ВНЗ, управління іміджем ВНЗ', 'no_degree', 'no_rank', 'Одеський національний морський університет', 'Відділ міжнародних зв\'язків', 'вул. Мечникова, 34, Одеса, Україна, 65029', 'science', 'http://www.osmu.odessa.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463517590, 1464020896, 1, ''),
(36, 'Ковтун Тетяна Антонівна', 'Tatyana Kovtun', 'ua', 'Доцент', '+380679212974', 'tandem@gcn.net', 'Управління проектами, управління ризиками, логістичний менеджмент', 'ph_d_tech', 'docent', 'Одеський національний морський університет', 'Кафедра "Системний аналіз та логістика"', 'вул. Мечникова, 34, Одеса, Україна, 65029', 'science', 'http://www.osmu.odessa.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463517890, 1464021059, 1, ''),
(37, 'Пітерська Варвара Михайлівна', 'Varvara Piterskaya', 'ua', 'Доцент', '+380675592377', 'varuwa@ukr.net', 'Управління проектами, проектування інноваційних систем', 'ph_d_tech', 'docent', 'Одеський національний морський університет', 'Кафедра "Комерційне забезпечення транспортних процесів"', 'вул. Мечникова, 34, Одеса, Україна, 65029', 'science', 'http://www.osmu.odessa.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463518180, 1464021294, 1, ''),
(38, 'Ходікова Інна Володимирівна', 'Inna Hodikova', 'ua', 'Старший викладач', '+380677681841', 'xodikowa@rambler.ru', 'Формування та управління командою проекту', 'no_degree', 'no_rank', 'Одеський національний морський університет', 'Кафедра "Системний аналіз та логістика"', 'вул. Мечникова, 34, Одеса, Україна, 65029', 'science', 'http://www.osmu.odessa.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463518643, 1464021554, 1, ''),
(39, 'Богославець Аліна Олександрівна', 'Alina Bogoslavets', 'ua', 'Асистент', '+380933521760', 'alinalinal@gmail.com', 'Управління IT-проектами', 'no_degree', 'no_rank', 'Харківський національний університет міського господарства імені О.М. Бекетова', 'Кафедра управління проектами в міському господарстві і будівництві', 'вул. Маршала Бажанова, 17, Харків, Україна, 61002', 'science', 'http://www.kname.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463641574, 1463641574, 0, NULL),
(40, 'Гусєва Юлія Юріївна', 'Yulia Guseva', 'ua', 'Доцент', '+30668095322', 'yulia.y.guseva@gmail.com', 'Управління проектами', 'ph_d_tech', 'docent', 'Харківський національний університет міського господарства імені О.М. Бекетова', 'Кафедра управління проектами в міському господарстві і будівництві', 'вул. Маршала Бажанова, 17, Харків, Україна, 61002', 'science', 'http://www.kname.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463641801, 1464020930, 1, ''),
(41, 'Давідіч Наталія Василівна', 'Natalia Davidich', 'ua', 'Аспірант', '+380502285361', 'shamanwelkax@mail.ru', 'Управління проектами', 'no_degree', 'no_rank', 'Харківський національний університет міського господарства імені О.М. Бекетова', 'Кафедра управління проектами в міському господарстві і будівництві', 'вул. Маршала Бажанова, 17, Харків, Україна, 61002', 'science', 'http://www.kname.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463641953, 1463641967, 0, ''),
(42, 'Кадикова Ірина Миколаївна', 'Irina Kadykova', 'ua', 'Доцент', '+380505668449', 'irina.kadykova@gmail.com', 'Управління соціальними проектами', 'ph_d_econ', 'docent', 'Харківський національний університет міського господарства імені О.М. Бекетова', 'Кафедра управління проектами в міському господарстві і будівництві', 'вул. Маршала Бажанова, 17, Харків, Україна, 61002', 'science', 'http://www.kname.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463642162, 1464021019, 1, ''),
(43, 'Старостіна Альона Юріївна', 'Alena Starostina', 'ua', 'Асистент', '+380990532900', 'starostina-2010@yandex.ua', 'Управління програмами', 'no_degree', 'no_rank', 'Харківський національний університет міського господарства імені О.М. Бекетова', 'Кафедра управління проектами в міському господарстві і будівництві', 'вул. Маршала Бажанова, 17, Харків, Україна, 61002', 'science', 'http://www.kname.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463642636, 1463642636, 0, NULL),
(44, 'Сухонос Марія Костянтинівна', 'Maria Sukhonos', 'ua', 'Професор', '+380506362409', 'sukhonos.maria@mail.ru', 'Управлівння програмами і портфелями проектів', 'd_sc_tech', 'prof', 'Харківський національний університет міського господарства імені О.М. Бекетова', 'Кафедра управління проектами в міському господарстві і будівництві', 'вул. Маршала Бажанова, 17, Харків, Україна, 61002', 'science', 'http://www.kname.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463642796, 1463642796, 0, NULL),
(45, 'Чумаченко Ігор Володимирович', 'Igor Chumachenko', 'ua', 'Завідувач кафедри управління проектами в міському господарстві і будівництві', '+380675708066', 'ivchumachenko@gmail.com', 'Управління проектами і програмами', 'd_sc_tech', 'prof', 'Харківський національний університет міського господарства імені О.М. Бекетова', 'Кафедра управління проектами в міському господарстві і будівництві', 'вул. Маршала Бажанова, 17, Харків, Україна, 61002', 'science', 'http://www.kname.edu.ua/', 'speaker', 'Управление заинтересованными сторонами образовательных проектов', '2', '0', 350, 'uah', 0, 1463643196, 1463643196, 0, NULL),
(46, 'Колесніков Олексій Євгенович', 'Oleksii Kolesnikov', 'ua', 'Доцент', '+380972196167', 'akoles78@gmail.com', 'Інформаційні технології в управлінні проектами, дистанційна освіта', 'ph_d_tech', 'docent', 'Одеський національний політехнічний університет', 'Кафедра управління системами безпеки життєдіяльності ', 'пр-т Шевченка, 1, Одеса, Україна, 65044', 'science', 'http://opu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463644740, 1464158300, 0, ''),
(47, 'Колеснікова Катерина Вікторівна', 'Kateryna Kolesnikova', 'ua', 'Професор', '+380677023294', 'amberk4@gmail.com', 'Інформаційні технології в управлінні проектами', 'd_sc_tech', 'prof', 'Одеський національний політехнічний університет', 'Кафедра інформаційних технологій проектування в машинобудуванні', 'пр-т Шевченка, 1, Одеса, Україна, 65044', 'science', 'http://opu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463645062, 1464021072, 1, ''),
(48, 'Васильєва Валентина Юліївна', 'Valentyna Vasilieva', 'ua', 'Провідний фахівець', '+380664190222', 'v.y.vasileva@mail.ru', 'Управління проектами', 'no_degree', 'no_rank', 'Одеський національний політехнічний університет', 'Відділ маркетингу та інноваційної політики', 'пр-т Шевченка, 1, Одеса, Україна, 65044', 'science', 'http://opu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463645314, 1464020827, 1, ''),
(49, 'Гогунський Віктор Дмитрович', 'Viktor Gogunsky', 'ua', 'Завідувач кафедри управління системами безпеки життєдіяльності', '+380677097930', 'vgog@i.ua', 'Управління проектами, моделювання', 'd_sc_tech', 'prof', 'Одеський національний політехнічний університет', 'Кафедра управління системами безпеки життєдіяльності ', 'пр-т Шевченка, 1, Одеса, Україна, 65044', 'science', 'http://opu.ua/', 'speaker', 'Общие механизмы формирования системы цитирования научных статей', '2', '0', 350, 'uah', 0, 1463645621, 1464158190, 0, ''),
(50, 'Олех Тетяна Мефодіївна', 'Tatyana Olekh', 'ua', 'Доцент', '+380503910078', 'olekhta@gmail.com', 'Моделі та методи управління проектами та програмами', 'ph_d_tech', 'docent', 'Одеський національний політехнічний університет', 'Кафедра вищої математики та моделювання систем', 'пр-т Шевченка, 1, Одеса, Україна, 65044', 'science', 'http://opu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463645840, 1464021280, 1, ''),
(51, 'Тимочко Василь Олегович', 'Vasiliy Tymochko', 'ua', 'Завідувач кафедри управління проектами та безпеки виробництва', '+380672949183', 'tymochko_vo@mail.ru', 'Управління портфелями проектів аграрного виробництва', 'ph_d_tech', 'docent', 'Львівський національний аграрний університет', 'Кафедра управління проектами та безпеки виробництва', 'вул. Володимира Великого, 1, м. Дубляни,  Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463646786, 1463646786, 0, NULL),
(52, 'Тригуба Анатолій Миколайович', 'Anatoly Tryguba', 'ua', 'Доцент', '+380680506725', 'trianamik@mail.ru', 'Управління інтегрованими програмами', 'ph_d_tech', 'docent', 'Львівський національний аграрний університет', 'Кафедра управління проектами та безпеки виробництва', 'вул. Володимира Великого, 1, м. Дубляни,  Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463646963, 1464021499, 1, ''),
(53, 'Шолудько Петро Васильович', 'Petro Sholudko', 'ua', 'Доцент', '+380678012411', 'p.ivankiv@gmail.com', 'Планування проектів', 'ph_d_tech', 'docent', 'Львівський національний аграрний університет', 'Кафедра експлуатації та технічного сервісу машин', 'вул. Володимира Великого, 1, м. Дубляни,  Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463647100, 1464022322, 1, ''),
(54, 'Сидорчук  Леонід  Леонідович', 'Leonid Sydorchuk', 'ua', 'Асистент', '+380972359530', 'leonsidor@mail.ru', 'Управління проектами', 'ph_d_tech', 'no_rank', 'Львівський національний аграрний університет', 'Кафедра управління проектами та безпеки виробництва', 'вул. Володимира Великого, 1, м. Дубляни,  Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463647236, 1464022303, 1, ''),
(55, 'Боярчук Олег Віталійович', 'Oleg Boyarchuk', 'ua', 'Старший викладач', '+380673400929', 'boyarchuko@mail.ua', 'Управління проектами аграрного виробництва', 'no_degree', 'no_rank', 'Львівський національний аграрний університет', 'Кафедра управління проектами та безпеки виробництва', 'вул. Володимира Великого, 1, м. Дубляни,  Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463647369, 1464022338, 1, ''),
(56, 'Говда Оксана Ігорівна', 'Oksana Govda', 'ua', 'Старший викладач', '+3803202242942', 'oksana.govda@gmail.com', 'Математичні методи і моделі управління проектами', 'no_degree', 'no_rank', 'Львівський національний аграрний університет', 'Кафедра вищої математики', 'вул. Володимира Великого, 1, м. Дубляни,  Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463647990, 1464020909, 1, ''),
(57, 'Ковальчик Юрій Іванович', 'Yuriy Kovalchyk', 'ua', 'Завідувач кафедри вищої математики', '+3803202242942', 'yurij.kovalchyk@gmail.com', 'Математичне моделювання,  континуальне інтегрування, теорія тертя і зношування', 'd_sc_math', 'prof', 'Львівський національний аграрний університет', 'Кафедра вищої математики', 'вул. Володимира Великого, 1, м. Дубляни,  Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463648231, 1464021032, 1, ''),
(58, 'Луб Павло Миронович', 'Pavlo Lub', 'ua', 'Доцент', '+380961606701', 'pollylub@ukr.net', 'Управління проектами технологічних систем сільськогосподарського виробництва', 'ph_d_tech', 'docent', 'Львівський національний аграрний університет', 'Кафедра управління проектами та безпеки виробництва', 'вул. Володимира Великого, 1, м. Дубляни,  Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463648362, 1464021148, 1, ''),
(59, 'Бедрій Дмитро Іванович', 'Dmytro Bedrii', 'ua', 'Заступник директора з наукової роботи', '+380674871204', 'dimi7928@gmail.com', 'Управління вартістю та ризиками наукових проектів', 'ph_d_tech', 'no_rank', 'Державне підприємство “Український науково-дослідний інститут радіо і телебачення”', 'Апарат управління', 'вул. Буніна, 31, Одеса, Україна, 65026', 'science', 'http://uniirt.ddns.net/', 'listener', '', '0', '0', 350, 'uah', 0, 1463662197, 1464020735, 1, ''),
(60, 'Саченко Анатолій Олексійович', 'Anatoliy Sachenko', 'ua', 'Завідувач кафедри інформаційно-обчислювальних систем та управління', '+380974313425', 'as@tneu.edu.ua', 'Управління ІТ проектами, розподілені інтелектуальні системи і безпровідні мережі, інтелектуальні системи кібербезпеки', 'd_sc_tech', 'prof', 'Тернопільський національний економічний університет', 'Кафедра інформаційно-обчислювальних систем та управління', 'вул. Львівська, 11, Тернопіль, Україна, 46000', 'science', 'http://www.tneu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463663054, 1464021430, 1, ''),
(61, 'Виходець Юлія Сергіївна', 'Yulia Vyhodets', 'ua', 'Доцент', '+380505143651', 'vyhodets@mail.ru', 'Управління проектами розвитку, бізнес-моделі', 'ph_d_tech', 'docent', 'Національний аерокосмічний університет ім. М.Є. Жуковського "Харківський авіаційний інститут"', 'Кафедра менеджменту', 'вул. Чкалова,17, Харків, Україна, 61070', 'science', 'http://www.khai.edu/', 'listener', '', '0', '0', 350, 'uah', 0, 1463663603, 1464020857, 1, ''),
(62, 'Ровінська Настасья Юріївна', 'Nastasya Rovinskaya', 'ua', 'Аспірант', '+380672931031', 'asyaxai@mail.ru', 'Управління проектами', 'no_degree', 'no_rank', 'Національний аерокосмічний університет ім. М.Є. Жуковського "Харківський авіаційний інститут"', 'Кафедра менеджменту', 'вул. Чкалова,17, Харків, Україна, 61070', 'science', 'http://www.khai.edu/', 'listener', '', '0', '0', 350, 'uah', 0, 1463663911, 1464021360, 1, ''),
(63, 'Ченарані Алі', 'Ali Chanarani', 'ua', 'Аспірант', '+380634622870', 'alichen.ua@gmail.com', 'Управління проектами, інформаційна технологія проектування, управління ризиками', 'no_degree', 'no_rank', 'Національний аерокосмічний університет ім. М.Є. Жуковського "Харківський авіаційний інститут"', 'Кафедра інформаційних технологій проектування літальних апаратів', 'вул. Чкалова,17, Харків, Україна, 61070', 'science', 'http://www.khai.edu/', 'listener', '', '0', '0', 350, 'uah', 0, 1463664200, 1463664200, 0, NULL),
(64, 'Байстрюченко Наталія Олегівна', '-', 'ua', 'Доцент', '+380660919116', 'n.baistriuchenko@ukr.net', 'Проблеми теорії та практики підприємництва, дослідження структури капіталу, копроративне управління', 'ph_d_econ', 'no_rank', 'Сумський державний університет', 'Кафедра управління', 'вул. Римського-Корсакова, 2, Суми, Україна, 40007', 'science', 'http://sumdu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463667376, 1464020712, 1, ''),
(65, 'Теліженко Олександр Михайлович', '-', 'ua', 'Завідувач кафедри управління', '+380954020827', 'altel@ukr.net', 'Економіка природокористування, економіка енергетики, управління інвестиціями', 'd_sc_econ', 'prof', 'Сумський державний університет', 'Кафедра управління', 'вул. Римського-Корсакова, 2, Суми, Україна, 40007', 'science', 'http://sumdu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463667590, 1464021477, 1, ''),
(66, 'Борисова Наталія Ігорівна', '-', 'ua', 'Аспірант', '+380974677658', 'n_borisova1977@mail.ru', 'Проекти альтернативної енергетики, управління ризиками', 'no_degree', 'no_rank', 'Черкаський державний технологічний університет', 'Кафедра економічної кібернетики та маркетингу', 'бул. Шевченко, 460, Черкаси, Україна, 18006', 'science', 'https://chdtu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463667882, 1464020788, 1, ''),
(67, 'Семко Інга Борисівна', '-', 'ua', 'Старший викладач', '+380675834039', 'semkoi@mail.ru', 'Управління проектами з енергозбреження', 'ph_d_tech', 'no_rank', 'Черкаський державний технологічний університет', 'Кафедра електротехнічних систем', 'бул. Шевченко, 460, Черкаси, Україна, 18006', 'science', 'https://chdtu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463668025, 1463668025, 0, NULL),
(68, 'Вайганг Ганна Олександрівна', '-', 'ua', 'Старший викладач', '+380630778181', 'malko.anna.comp@gmail.com', '"Зелена" логістика, проектний менеджмент, інформаційнні технології', 'ph_d_tech', 'no_rank', 'Національний транспортний університет', 'Кафедра екології та безпеки життєдіяльності', 'вул. Суворова, 1, Київ, Україна, 01010', 'science', 'http://ntu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463668416, 1464020812, 1, ''),
(69, 'Марченко Ганна Миколаївна', '-', 'ua', 'Асистент', '+380977641480', 'm-anka@ukr.net', 'Методи та моделі управління профорієнтаційними проектами', 'no_degree', 'no_rank', 'Національний транспортний університет', 'Кафедра технічної експлуатації автомобілів та автосервісу', 'вул. Суворова, 1, Київ, Україна, 01010', 'science', 'http://ntu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463668641, 1464021182, 1, ''),
(70, 'Савостін-Косяк Данило Олександрович', '-', 'ua', 'Асистент', '+380938766418', 'daniel_s@ukr.net', 'Управління проектами підвищення кваліфікації за дистанційною формою навчання', 'no_degree', 'no_rank', 'Національний транспортний університет', 'Кафедра технічної експлуатації автомобілів та автосервісу', 'вул. Суворова, 1, Київ, Україна, 01010', 'science', 'http://ntu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463668762, 1464021395, 1, ''),
(71, 'Возний Олександр Михайлович', '-', 'ua', 'Доцент', '+380933969334', 'oleksandr.voznyi@nuos.edu.ua', 'Управління проектами в суднобудуванні, інформаційні технології управління проектами', 'ph_d_tech', 'docent', 'Національний університет кораблебудування імені адмірала Макарова', 'Кафедра управління проектами', 'пр-т Героїв Сталінграда, 9, Миколаїв, Україна, 54025', 'science', 'http://www.nuos.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463669195, 1464020872, 1, ''),
(72, 'Гайдаєнко Оксана Володимирівна', '-', 'ua', 'Аспірант', '+380971828342', 'o_kotsur@mail.ru', 'Інформаційні технології підтримки організації надання послуг', 'no_degree', 'no_rank', 'Національний університет кораблебудування імені адмірала Макарова', 'Кафедра інформаційних управляючих систем та технологій', 'пр-т Героїв Сталінграда, 9, Миколаїв, Україна, 54025', 'science', 'http://www.nuos.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463669546, 1463669546, 0, NULL),
(73, 'Книрік Наталя Ромуальдівна', '-', 'ua', 'Старший викладач', '+380972708689', 'nknyrik@gmail.com', 'Інформаційні технології управління проектами', 'no_degree', 'no_rank', 'Національний університет кораблебудування імені адмірала Макарова', 'Кафедра інформаційних управляючих систем та технологій', 'пр-т Героїв Сталінграда, 9, Миколаїв, Україна, 54025', 'science', 'http://www.nuos.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463669708, 1463669708, 0, NULL),
(74, 'Кошкін Костянтин Вікторович', '-', 'ua', 'Директор інституту комп’ютерних та інженерно-технологічних наук, завідувач кафедри інформаційних управляючих систем та технологій', '+380512424470', 'kkoshkin@ukr.net', 'Управління проектами в галузі суднобудування та ІТ', 'd_sc_tech', 'prof', 'Національний університет кораблебудування імені адмірала Макарова', 'Інститут комп’ютерних та інженерно-технологічних наук', 'пр-т Героїв Сталінграда, 9, Миколаїв, Україна, 54025', 'science', 'http://www.nuos.edu.ua/', 'speaker', 'Принятие решений при реализации IT-проектов на основе имитационного моделирования', '2', '0', 350, 'uah', 0, 1463669861, 1464020508, 0, ''),
(75, 'Данченко Олена Борисівна', '-', 'ua', 'Завідувач кафедри бізнес адміністрування та управління проектами', '+380675931102', 'elen_danchenko@rambler.ru', 'Управління проектами, ризик-менеджмент, реінжиніринг бізнес-процесів', 'ph_d_tech', 'docent', 'Університет економіка та права "КРОК"', 'Кафедра бізнес-адміністрування та управління проектами', 'вул. Лагерна, 30-32, Київ, Україна, 01001', 'science', 'http://www.krok.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463670181, 1464119718, 1, ''),
(76, 'Любима Юлія Олександрівна', '-', 'ua', 'Аспірант', '+380502870371', 'Alary7@ukr.net', 'Наукові проекти', 'no_degree', 'no_rank', 'Університет економіка та права "КРОК"', 'Кафедра бізнес-адміністрування та управління проектами', 'вул. Лагерна, 30-32, Київ, Україна, 01001', 'science', 'http://www.krok.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463670300, 1464119882, 1, ''),
(77, 'Демидюк Микола Анатолійович', '-', 'ua', 'Завідувач відділом аспірантури та докторантури', '+380688496435', 'nick090579@mail.ru', 'Автоматизація процесів керування', 'ph_d_tech', 'docent', 'Луцький національний технічний університет', 'Відділ аспірантури та докторантури', 'вул. Львівська, 75, Луцьк, Україна, 43018', 'science', 'http://lutsk-ntu.com.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463670558, 1464020976, 1, ''),
(78, 'Сіваковська Олена Миколаївна', '-', 'ua', 'Аспірант', '+380961305556', 'goodlenchik@gmail.com', 'Програмування, АСУ', 'no_degree', 'no_rank', 'Луцький національний технічний університет', 'Кафедра комп\'ютерної інженерії', 'вул. Львівська, 75, Луцьк, Україна, 43018', 'science', 'http://lutsk-ntu.com.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463670769, 1464021380, 1, ''),
(79, 'Савчук Петро Петрович', '-', 'ua', 'Ректор Луцького національного технічного університету', '+380667892893', 'savchuk71@gmail.com', 'Управління інноваційною діяльністю', 'd_sc_tech', 'prof', 'Луцький національний технічний університет', 'Кафедра матеріалознавства та пластичного формування конструкцій машинобудування', 'вул. Львівська, 75, Луцьк, Україна, 43018', 'science', 'http://lutsk-ntu.com.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463670949, 1464021416, 1, ''),
(80, 'Зачко Олег Богданович', '-', 'ua', 'Заступник завідувача кафедри', '+380676880060', 'zachko@ukr.net', 'Управління проектами, інформаційні технології, безпека', 'ph_d_tech', 'docent', 'Львівський державний університет безпеки життєдіяльності', 'Кафедра управління проектами, інформаційнних технологій та телекомунікацій', 'вул. Клепарівська, 35, Львів, Україна, 79007', 'science', 'http://www.ldubgd.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463671234, 1464022284, 1, ''),
(81, 'Коломієць Анна Степанівна', '-', 'ua', 'Асистент', '+380932492253', 'anna.tsesliv@gmail.com', 'Управління впровадженням комерційної концесії на промислових підприємствах', 'ph_d_econ', 'no_rank', 'Київський національний університет імені Тараса Шевченка', 'Кафедра технологій управління', 'вул. Володимирська, 64/13, Київ, Україна, 01601 ', 'science', 'http://www.univ.kiev.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463671528, 1464021092, 1, ''),
(82, 'Кубявка Любов Богданівна', '-', 'ua', 'Асистент', '+380931684148', 'lyubov.kubyavka@mail.ru', 'Управління проектами', 'ph_d_tech', 'no_rank', 'Київський національний університет імені Тараса Шевченка', 'Кафедра технологій управління', 'вул. Володимирська, 64/13, Київ, Україна, 01601 ', 'science', 'http://www.univ.kiev.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463671732, 1463671732, 0, NULL),
(83, 'Морозов Віктор Володимирович', '-', 'ua', 'Завідувач кафедри технологій управління', '+0380503580950', 'knumvv@gmail.com', 'Методи управління проектами, управління закупівлями', 'ph_d_tech', 'prof', 'Київський національний університет імені Тараса Шевченка', 'Кафедра технологій управління', 'вул. Володимирська, 64/13, Київ, Україна, 01601 ', 'science', 'http://www.univ.kiev.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463671867, 1463671867, 0, NULL),
(84, 'Бушуєв Сергій Дмитрович', '-', 'ua', 'Завідувач кафедри управління проектами', '+380504693839', 'SBushuyev@ukr.net', 'Управління проектами і програмами', 'd_sc_tech', 'prof', 'Київський національний університет будівництва і архітектури', 'Кафедра управління проектами', 'пр-т Повітрофлотський, 31, Київ, Україна, 03680', 'science', 'http://www.knuba.edu.ua/', 'speaker', 'Ключевые тенденции развития управления проектами в условиях кризиса   ', '2', '0', 350, 'uah', 0, 1463672079, 1464020361, 0, ''),
(85, 'Рулікова Наталія Сергіївна', '-', 'ua', 'Доцент', '+380673653131', 'belikovaevg@ukr.net', 'Моделі та механізми управління програмою інноваційного розвитку діючого металургійного підприємства', 'ph_d_tech', 'docent', 'Національна металургійна академія України', 'Кафедра інтелектуальної власності', 'пр-т Гагаріна, 4, Дніпропетровськ, Україна, 49600', 'science', 'http://nmetau.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463672306, 1463672306, 0, NULL),
(86, 'Швець Євгенія Сергіївна', '-', 'ua', 'Аспірант', '+380637145938', 'belikovaevg@ukr.net', 'Моделі та механізми управління програмою інноваційного розвитку діючого металургійного підприємства', 'no_degree', 'no_rank', 'Національна металургійна академія України', 'Кафедра інтелектуальної власності', 'пр-т Гагаріна, 4, Дніпропетровськ, Україна, 49600', 'science', 'http://nmetau.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463672458, 1463672458, 0, NULL),
(87, 'Чухрай Наталія Іванівна', '-', 'ua', 'Проректор з наукової роботи', '+380679960631', 'chuhraj@polynet.lviv.ua', 'Маркетинг, логістика, стратегічне управління, інноваційний менеджмент', 'd_sc_econ', 'prof', 'Національний університет "Львівська політехніка"', 'Ректорат', 'вул. Степана Бандери, 12, Львів, Україна, 79013', 'science', 'http://www.lp.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463672745, 1463672745, 0, NULL),
(88, 'Сидорчук Олександр Васильович', '-', 'ua', 'Заступник директора з наукової роботи', '+380673220323', 'sydov@ukr.net', 'Управління інноваційними проектами та програмами', 'd_sc_tech', 'prof', 'Національний науковий центр «Інститут механізації та електрифікації сільського господарства»', 'Апарат управління', 'вул. Вокзальна, 11, смт. Глеваха-1,  Васильківський район, Київська область, Україна, 08631.', 'science', 'http://imesg.gov.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463673094, 1463673094, 0, NULL),
(89, 'Aгаї Ахмад', '-', 'ua', 'Аспірант', '+380938753643', 'ahmadaghaee@yahoo.com', 'Управління проектами', 'no_degree', 'no_rank', 'Національний технічний університет "Харківський політехнічний інститут"', 'Кафедра стратегічного управління', 'вул. Фрунзе, 21, Харків, Україна, 61002', 'science', 'http://www.kpi.kharkov.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463673276, 1463673276, 0, NULL),
(90, 'Кучма Олег Олександрович', '-', 'ua', 'Доцент', '+30672502794', 'kuchmao@yandex.ua', 'Управління будівельними проектами', 'ph_d_econ', 'docent', 'Харківський національний університет будівництва та архітектури', 'Кафедра організації будівельного виробництва', 'вул. Сумська, 40, Харків, Україна, 61002', 'science', 'http://www.kstuca.kharkov.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463673455, 1464021115, 1, ''),
(91, 'Лобакова Лілія В\'ячеславівна', '-', 'ua', 'Аспірант', '+380974979609', 'Liya_lobakova@mail.ru', 'Управління проектами', 'no_degree', 'no_rank', 'Одеська державна академія будівництва та архітектури', 'Кафедра технології будівельного виробництва', 'вул. Дідріхсона, 4, Одеса, Україна, 65029', 'science', 'http://www.ogasa.org.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463673659, 1464021128, 1, ''),
(92, 'Менейлюк Олександр Іванович', '-', 'ua', 'Завідувач кафедри технології будівельного виробництва', '+380674853577', 'pr.mai@mail.ru', 'Оптимізація інвестиційно-будівельних проектів', 'd_sc_tech', 'prof', 'Одеська державна академія будівництва та архітектури', 'Кафедра технології будівельного виробництва', 'вул. Дідріхсона, 4, Одеса, Україна, 65029', 'science', 'http://www.ogasa.org.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463673805, 1464021212, 1, ''),
(93, 'Нікіфоров Олексій Леонідович', '-', 'ua', 'Аспірант', '+380663309054', 'aleksey-nikiforov@mail.ua', 'Управління будівельними проектами та підприємствами', 'no_degree', 'no_rank', 'Одеська державна академія будівництва та архітектури', 'Кафедра технології будівельного виробництва', 'вул. Дідріхсона, 4, Одеса, Україна, 65029', 'science', 'http://www.ogasa.org.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463673893, 1464021238, 1, ''),
(94, 'Бiловус Дар\'я Романiвна', '-', 'ua', 'Помічник керівника', '+380666620898', 'dashkalaya11@bigmir.net', '-', 'no_degree', 'no_rank', 'ТОВ "Юридичний Альянс "Вікторовичі і Партнери"', '-', 'вул. Глінки, 1, Дніпропетровськ, Україна, 49000', 'consult', 'http://uavip.com.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463674292, 1464020697, 1, ''),
(95, 'Машир Ярослав Вiкторович', '-', 'ua', 'Генеральний директор', '+380505848321', 'risham.ya@mail.ru', '-', 'no_degree', 'no_rank', 'ТОВ "Юридичний Альянс "Вікторовичі і Партнери"', '-', 'вул. Глінки, 1, Дніпропетровськ, Україна, 49000', 'consult', 'http://uavip.com.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463675031, 1464021197, 1, ''),
(96, 'Чиколовець Олексій Анатолійович', '-', 'ua', 'Начальник виробничо-технічного відділу', '+380672387377', 'chikolovec_alex@mail.ru', 'Управління проектами', 'no_degree', 'no_rank', 'Компанія «НЕСТ» (ВАТ «Нерухомість столиці»)', '-', 'вул. Василя Липківського, 45, Київ, Україна, 03035', 'real_est', 'http://www.nest.com.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463675366, 1464021542, 1, ''),
(97, 'Чернов Сергій Костянтинович', '-', 'ua', 'Директор з персоналу', '+380512493481', 'chsk@zorya.com.ua', 'Управління проектами і програмами', 'd_sc_tech', 'prof', 'Державне підприємство Науково-виробничий комплекс газотурбобудування «Зоря»-«Машпроект»', 'Апарат управління', 'пр-т Жовтневий, 42-а, Миколаїв, Україна, 54018', 'industry', 'http://www.zmturbines.com/', 'speaker', 'Управление финансированием проекта создания базового газотурбинного  двигателя мощностью 35 МВт', '2', '0', 350, 'uah', 0, 1463675721, 1464021530, 1, ''),
(98, 'Сутковий Андрій Миколайович', '-', 'ua', 'Директор', '+380504761451', 'shs_sd@mail.ru', 'Управління проектами', 'no_degree', 'no_rank', 'ТОВ "Штандарт"', '-', 'вул. Гагаріна, 68а, Сєвєродонецьк, Україна, 93400', 'consult', 'http://no.site', 'listener', '', '0', '0', 350, 'uah', 0, 1463676194, 1464021464, 1, ''),
(99, 'Попов Вадим Михайлович', '-', 'ua', 'Проректор з персоналу', '+380975172279', 'm.novozhilova04@gmail.com', 'Управління програмами розвитку макросистем', 'ph_d_tech', 'docent', 'Національний університет цивільного захисту України', 'Ректорат', 'вул. Чернишевська, 94, Харків, Україна, 61023', 'science', 'http://nuczu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463676781, 1464021332, 1, ''),
(100, 'Нікітін Павло Володимирович', '-', 'ua', 'Доцент', '+380672614974', 'uapsua@ukr.net', 'Упраління проектами та програмами підготовки плавскладу водного транспорту', 'ph_d_econ', 'docent', 'Київська державна академія водного транспорту імені гетьмана Петра Конашевича-Сагайдачного', 'Кафедра судноводіння та керування судном', 'вул. Кирилівська, 9, Київ, Україна, 04071', 'science', 'http://www.maritime.kiev.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463677199, 1463677199, 0, NULL),
(101, 'Муравецький Святослав Аркадійович', '-', 'ua', 'Магістрант', '+380934651965', 'smuravetskiy@lohika.com', 'Управління проектами', 'no_degree', 'no_rank', 'Одеський регіональний інститут державного управління Національної академії державного управління при Президентові України', 'Кафедра управління проектами', 'вул. Генуезька, 22, Одеса, Україна, 65009', 'science', 'http://www.oridu.odessa.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1463677484, 1463677484, 0, NULL),
(102, 'Kiril Todorov', 'Kiril Todorov', 'bg', 'Head of Department of Entrepreneurship', '+359028195545', 'ktodorov@unwe.bg', 'Industrial Management, Entrepreneurship', 'd_sc_econ', 'prof', 'University of National and World Economy', 'Department of Entrepreneurship', '8-mi Dekemvri Str., 1700, Sofia, Bulgaria', 'science', 'http://www.unwe.bg/', 'speaker', 'Management of Business Internationalization: The Case of Family Businesses   ', '0', '0', 100, 'usd', 0, 1464016522, 1464016522, 0, NULL),
(103, 'Kostadin Kolarov ', 'Kostadin Kolarov ', 'bg', 'Associate Professor', '+359888738132', 'kkolarov@unwe.bg', 'Entrepreneurial Economics', 'ph_d_econ', 'docent', 'University of National and World Economy', 'Department of Entrepreneurship', '8-mi Dekemvri Str., 1700, Sofia, Bulgaria', 'science', 'http://www.unwe.bg/', 'listener', '', '0', '0', 100, 'usd', 0, 1464017028, 1464017028, 0, NULL),
(104, 'Hasan TUNÇ', 'Hasan TUNÇ', 'tr', 'Professor', '+903422118080', 'hasan.tunc@hku.edu.tr', '-', 'd_sc_econ', 'prof', 'Hasan Kalyoncu University', 'Faculty of Law', 'Havalimanı Yolu 8. Km, 27410, Şahinbey, Gaziantep, Turkey', 'science', 'http://www.hku.edu.tr/', 'listener', '', '0', '0', 100, 'usd', 0, 1464018129, 1464018129, 0, NULL),
(105, 'Çetin ELMAS', 'Çetin ELMAS', 'tr', 'Professor', '+903122028528', 'celmas@gazi.edu.tr', 'Project Management', 'd_sc_tech', 'prof', 'Gazi University', 'Faculty of Engineering', '06500 Teknikokullar, Ankara, Turkey', 'science', 'http://gazi.edu.tr/', 'speaker', 'Comparation of Project Management Standards', '0', '0', 100, 'usd', 0, 1464019209, 1464019209, 0, NULL),
(106, 'Igbal Babaev', 'Igbal Babaev', 'az', 'President of Azerbaijan Project Management Association', '+994124041860', 'info@ipma.az', 'Project and Program Management', 'ph_d_tech', 'prof', 'Azerbaijan Project Management Association', '-', 'AZ1075, Baku, Azerbaijan, Narimanov district, 153, A.Radjabli Street', 'npo', 'http://www.ipma.az/', 'speaker', 'Управление инновационными проектами в динамически изменяющейся среде   ', '2', '0', 100, 'usd', 0, 1464020208, 1464020223, 0, ''),
(107, 'Тесленко Павло Олександрович', '-', 'ua', 'Доцент', '+380679400451', 'p_a_t@ukr.net', 'Управління проектами', 'ph_d_tech', 'docent', 'Одеська державна академія будівництва та архітектури', 'Кафедра менеджменту та управління проектами', 'вул. Дідріхсона, 4, Одеса, Україна, 65029', 'science', 'http://www.ogasa.org.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1464021833, 1464025486, 1, ''),
(108, 'Фесенко Тетяна Григорівна', '-', 'ua', 'Доцент', '+380577073132', 'fesenkotatyana@gmail.com', 'Управління будівельними проектами', 'ph_d_tech', 'docent', 'Харківський національний університет міського господарства імені О.М. Бекетова', 'Кафедра управління проектами в міському господарстві і будівництві', 'вул. Маршала Бажанова, 17, Харків, Україна, 61002', 'science', 'http://www.kname.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1464022089, 1464022095, 1, ''),
(109, 'Анатольєв Анатолій Аркадійович', '-', 'ua', 'Аспірант', '+380678306102', 'anatolijarkadievi41988@gmail.com', 'Управління проектами', 'no_degree', 'no_rank', 'Одеська державна академія будівництва та архітектури', 'Кафедра менеджменту та управління проектами', 'вул. Дідріхсона, 4, Одеса, Україна, 65029', 'science', 'http://www.ogasa.org.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441129214, 1464025512, 0, ''),
(110, 'Барська Ірина Сергіївна', '-', 'ua', 'Здобувач', '+380679406437', 'ibarska@mail.ru', 'Управління проектами і програмами', 'no_degree', 'no_rank', 'Одеська державна академія будівництва та архітектури', 'Кафедра менеджменту та управління проектами', 'вул. Дідріхсона, 4, Одеса, Україна, 65029', 'science', 'http://www.ogasa.org.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441129660, 1464025673, 0, ''),
(111, 'Денисенко Вікторія Юріївна', '-', 'ua', 'Доцент', '+380679332552', 'vitka_2kd@ukr.net', 'Прикладна математика', 'ph_d_tech', 'docent', 'Одеська державна академія будівництва та архітектури', 'Кафедра прикладної та обчислювальної математики та САПР', 'вул. Дідріхсона, 4, Одеса, Україна, 65029', 'science', 'http://www.ogasa.org.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441129859, 1464025869, 0, ''),
(112, 'Боярчук Віталій Мефодійович', '-', 'ua', 'Перший проректор, завідувач кафедри енергетики', '+380503707101', 'trianamik@mail.ru', 'Управління проектами аграрного виробництва', 'ph_d_tech', 'prof', 'Львівський національний аграрний університет', 'Кафедра енергетики', 'вул. Володимира Великого, 1, м. Дубляни, Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441130325, 1464026335, 0, ''),
(113, 'Безуглий Дмитро Георгійович', '-', 'ua', 'Заступник голови обласної ради', '+380978799255', 'a.ermolenko1990@gmail.com', 'Маркетинг, менеджмент, управління проектами', 'no_degree', 'no_rank', 'Дніпропетровська обласна рада', 'Відділ внутрішньої політики', 'пр-т Кірова, 2, Дніпропетровськ, Україна, 49004', 'public_adm', 'http://oblrada.dp.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441130765, 1464026973, 0, ''),
(114, 'Михалюк Микола Адамович', '-', 'ua', 'Доцент', '+380679793084', 'mykhaljuk@rambler.ru', 'Управління проектами аграрного виробництва', 'ph_d_tech', 'docent', 'Львівський національний аграрний університет', 'Кафедра енергетики', 'вул. Володимира Великого, 1, м. Дубляни, Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441130940, 1464026999, 0, ''),
(115, 'Тригуба Інна Леонтіївна', '-', 'ua', 'Старший викладач', '+380986564097', 'tinna@mail.ru', 'Управління проектами аграрного виробництва', 'no_degree', 'no_rank', 'Львівський національний аграрний університет', 'Кафедра селекції, генетики та захисту рослин', 'вул. Володимира Великого, 1, м. Дубляни, Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441131158, 1464087344, 0, ''),
(116, 'Бубенко Павло Трохимович', '-', 'ua', 'Директор Центру', '+380577063042', 'office.nesc@nas.gov.ua', 'Регіональна економіка та інноватика', 'd_sc_econ', 'prof', 'Північно-Східний науковий центр НАН і МОН України', '-', 'вул. Фрунзе, 8, Харків, Україна, 61002', 'science', 'http://www.nesc.com.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441131494, 1464027503, 0, ''),
(117, 'Літвінова Наталя Сергіївна', '-', 'ua', 'Аспірант', '+380487992142', 'ms.litvinoff@gmail.com', 'Управління проектами державно-приватного партнерства', 'no_degree', 'no_rank', 'Одеський національний морський університет', 'Кафедра "Організація митного контролю на транспорті"', 'вул. Мечникова, 34, Одеса, Україна, 65029', 'science', 'http://www.osmu.odessa.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441131884, 1464027902, 0, ''),
(118, 'Шарибура Андрій Остапович ', '-', 'ua', 'Доцент', '+380661198786', 'AScharibura@gmail.com', 'Управління проектами систем вирощування сільськогосподарських культур', 'ph_d_tech', 'docent', 'Львівський національний аграрний університет', 'Кафедра експлуатації та технічного сервісу машин', 'вул. Володимира Великого, 1, м. Дубляни, Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441132273, 1464028290, 0, ''),
(119, 'Березовецький Сергій Андрійович.', '-', 'ua', 'Старший викладач', '+380972359530', 'siko@mail.ua', 'Управління конфігурацією проектів', 'no_degree', 'no_rank', 'Львівський національний аграрний університет', 'Кафедра машинобудування', 'вул. Володимира Великого, 1, м. Дубляни, Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441132541, 1464028554, 0, ''),
(120, 'Чімшир Валентин Іванович', '-', 'ua', 'Завідувач кафедри судноводіння та енергетики суден', '+380965549377', 'chimshir@mail.ru', 'Управління проектами', 'ph_d_tech', 'docent', 'Одеська національна морська академія (Ізмаїльський факультет)', 'Кафедра судноводіння та енергетики суден', 'вул. Фанагорійська, 9, Ізмаїл, Україна, 68600', 'science', 'http://izf.onma.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441103571, 1464085980, 0, ''),
(121, 'Кременчук Олександр Вікторович', '-', 'ua', 'Аспірант', '+380635898809', 'saawhitelife@gmail.com', 'Методологія та інформаційні технології управління науково-освітніми проектами та програмами', 'no_degree', 'no_rank', 'Національний університет кораблебудування імені адмірала Макарова', 'Кафедра управління проектами', 'пр-т Героїв Сталінграда, 9, Миколаїв, Україна, 54025', 'science', 'http://www.nuos.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441104261, 1464086672, 0, ''),
(122, 'Левченко Ольга Григорівна', '-', 'ua', 'Аспірант', '+380937425958', 'olga.georgieva@nuos.edu.ua', 'Управління науковими проектами та програмами', 'no_degree', 'no_rank', 'Національний університет кораблебудування імені адмірала Макарова', 'Кафедра «Облік та економічний аналіз»', 'пр-т Героїв Сталінграда, 9, Миколаїв, Україна, 54025', 'science', 'http://www.nuos.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441104390, 1464086817, 0, ''),
(123, 'Кальніченко Олена Володимирівна', '-', 'ua', 'Доцент, старший науковий співробітник', '+380504111061', 'kv_vl@ukr.net', 'Управління проектами', 'ph_d_tech', 'docent', 'Університет економіка та права "КРОК"', 'Кафедра бізнес-адміністрування та управління проектами', 'вул. Лагерна, 30-32, Київ, Україна, 01001', 'science', 'http://www.krok.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441105164, 1464119892, 0, ''),
(124, 'Коренєва Анастасія Юріївна', '-', 'ua', 'Аспірант', '+380966004666', '_Meln_@ukr.net', 'Управління проектами і програмами', 'no_degree', 'no_rank', 'Одеський національний морський університет', 'Кафедра "Системний аналіз та логістика"', 'вул. Мечникова, 34, Одеса, Україна, 65029', 'science', 'http://www.osmu.odessa.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441105694, 1464088105, 0, ''),
(125, 'Тесля Юрій Миколайович', '-', 'ua', 'Декан факультету інформаційних технологій', '+300675033916', 'teslyas@ukr.net', 'Управління проектами і програмами', 'ph_d_tech', 'prof', 'Київський національний університет імені Тараса Шевченка', 'Факультет інформаційних технологій', 'вул. Володимирська, 64/13, Київ, Україна, 01601 ', 'science', 'http://www.univ.kiev.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441105917, 1464088331, 0, ''),
(126, 'Кузьмінська Юлія Миколаївна', '-', 'ua', 'Директор департаменту підвищення кваліфікації', '+380678575755', 'jkuzminskaya@gmail.com', 'Управління проектами', 'no_degree', 'no_rank', 'Університет економіка та права "КРОК"', 'Департамент підвищення кваліфікації', 'вул. Лагерна, 30-32, Київ, Україна, 01001', 'science', 'http://www.krok.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441106112, 1464088522, 0, ''),
(127, 'Лазарева Марина Вікторівна', '-', 'ua', 'Аспірант', '+380931671098', 'lazareva_marina@ukr.net', 'Управління довірою в управлінні проектами', 'no_degree', 'no_rank', 'Київський національний університет будівництва і архітектури', 'Кафедра управління проектами', 'пр-т Повітрофлотський, 31, Київ, Україна, 03680', 'science', 'http://www.knuba.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441106271, 1464088683, 0, '');
INSERT INTO `member` (`id`, `name`, `nameEng`, `country`, `position`, `phone`, `email`, `interest`, `scienceDegree`, `scienceTitle`, `organisationTitle`, `organisationDepartment`, `organisationAddress`, `organisationActivity`, `organisationUrl`, `participationType`, `topicTitle`, `topicLanguage`, `topicSection`, `totalSum`, `currency`, `papersCount`, `created_at`, `updated_at`, `paid`, `noteFromAdmin`) VALUES
(128, 'Ершов Михаил Николаевич', '-', 'ru', 'Профессор', '+74952874914', 'mnershov@gmail.com', 'Управление проектами', 'ph_d_tech', 'prof', 'Московский государственный строительный университет', 'Кафедра технологии и организации строительного производства', 'Ярославское шоссе, 26, Москва, Россия, 129337', 'science', 'http://mgsu.ru/', 'listener', '', '0', '0', 100, 'usd', 0, 1441107001, 1464089418, 0, ''),
(129, 'Логінов Олег Володимирович', '-', 'ua', 'Старший викладач', '+380963690983', 'ologinov@ukr.net', 'Управління проектами', 'no_degree', 'no_rank', 'Одеський національний морський університет', 'Кафедра транспортного права', 'вул. Мечникова, 34, Одеса, Україна, 65029', 'science', 'http://www.osmu.odessa.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441107293, 1464089706, 0, ''),
(130, 'Мельник Каріна Володимирівна', '-', 'ua', 'Асистент', '+380577076474', 'karina.v.melnyk@gmail.com', 'Складні розподілені інформаційні системи, системи підтримки прийняття управлінських рішень', 'no_degree', 'no_rank', 'Національний технічний університет "Харківський політехнічний інститут"', 'Кафедра "Програмна інженерія та інформаційні технології управління"', 'вул. Фрунзе, 21, Харків, Україна, 61002', 'science', 'http://www.kpi.kharkov.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441123998, 1464106422, 0, ''),
(131, 'Молочник Юлія Богданівна', '-', 'ua', 'Асистент', '+380508580158', 'yulya.molochnik@mail.ru', 'Комунікаційний менеджмент', 'no_degree', 'no_rank', 'Національний університет "Львівська політехніка"', 'Кафедра менеджменту і міжнародного підприємництва', 'вул. Степана Бандери, 12, Львів, Україна, 79013', 'science', 'http://www.lp.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441124245, 1464106657, 0, ''),
(132, 'Пецкович Марія Дмитрівна', '-', 'ua', 'Асистент', '+380979790856', 'mdp@ukr.net', 'Контролювання', 'ph_d_econ', 'no_rank', 'Національний університет "Львівська політехніка"', 'Кафедра зовнішньоекономічної та митної діяльності', 'вул. Степана Бандери, 12, Львів, Україна, 79013', 'science', 'http://www.lp.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441124482, 1464107084, 0, ''),
(133, 'Малиновський Юрій Володимирович', '-', 'ua', 'Доцент', '+30677129132', 'travel_2020@rambler.ru', 'Економіка будівельної галузі', 'ph_d_econ', 'docent', 'Національний університет "Львівська політехніка"', 'Кафедра теоретичної та прикладної економіки', 'вул. Степана Бандери, 12, Львів, Україна, 79013', 'science', 'http://www.lp.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441124656, 1464107066, 0, ''),
(134, 'Романенков Юрій Олександрович', '-', 'ua', 'Доцент', '+380994332060', 'KhAI.management@ukr.net', 'Інформаційні технології прогнозування', 'ph_d_tech', 'docent', 'Національний аерокосмічний університет ім. М.Є. Жуковського "Харківський авіаційний інститут"', 'Кафедра економіки та маркетингу', 'вул. Чкалова,17, Харків, Україна, 61070', 'science', 'http://www.khai.edu/', 'listener', '', '0', '0', 350, 'uah', 0, 1441136936, 1464119354, 0, ''),
(135, 'Рудніцький Сергій Іванович', '-', 'ua', 'Аспірант', '+380676050584', 'sergey.rudnitskiy@gmail.com', 'Управління проектами, управління конфігурацією проектів', 'no_degree', 'no_rank', 'Університет економіка та права "КРОК"', 'Кафедра бізнес-адміністрування та управління проектами', 'вул. Лагерна, 30-32, Київ, Україна, 01001', 'science', 'http://www.krok.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441137139, 1464119551, 0, ''),
(136, 'Ратушний Роман Тадейович', '-', 'ua', 'Проректор університету з логістики та менеджменту', '+380676732980', 'ratyshnuj@gmail.com', 'Інформаційні текхнології, управління проектами', 'ph_d_tech', 'docent', 'Львівський державний університет безпеки життєдіяльності', 'Ректорат', 'вул. Клепарівська, 35, Львів, Україна, 79007', 'science', 'http://www.ldubgd.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441137972, 1464120388, 0, ''),
(137, 'Шелега Олег Вячеславович', '-', 'ua', 'Аспірант', '+380971792494', 'ua-pl@i.ua', 'Управління інтегрованими проектами', 'no_degree', 'no_rank', 'Подільський державний аграрно-технічний університет', 'Кафедра транспортних технологій та засобів АПК', 'вул. Шевченка, 13, Кам’янець-Подільський, Україна, 32300', 'science', 'http://www.pdatu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441138616, 1464121027, 0, ''),
(138, 'Пукас Віталій Леонідович', '-', 'ua', 'Аспірант', '+380972901162', 'pukas.ivanna@mail.ru', 'Управління інтегрованими проектами', 'no_degree', 'no_rank', 'Подільський державний аграрно-технічний університет', 'Кафедра "Трактори, автомобілі та енергетичні засоби"', 'вул. Шевченка, 13, Кам’янець-Подільський, Україна, 32300', 'science', 'http://www.pdatu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441138852, 1464121263, 0, ''),
(139, 'Михалюк Володимир Миколайович', '-', 'ua', 'Аспірант', '+380976332023', 'myhaluk@ukr.net', 'Управління інтегрованими проектами', 'no_degree', 'no_rank', 'Львівський національний аграрний університет', 'Кафедра енергетики', 'вул. Володимира Великого, 1, м. Дубляни, Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441139019, 1464121431, 0, ''),
(140, 'Флис Ігор Михайлович', '-', 'ua', 'Доцент', '+380965583435', 'ihorflys@ukr.net', 'Управління проектами і програмами в аграрній галузі', 'ph_d_tech', 'docent', 'Львівський національний аграрний університет', 'Кафедра машинобудування', 'вул. Володимира Великого, 1, м. Дубляни, Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441086160, 1464154973, 0, ''),
(141, 'Чайковська Марина Петрівна', '-', 'ua', 'Доцент', '+380677502387', 'chmp@ukr.net', 'Управління ІТ-проектами, інформаційні системи та технології в бізнесі, інноваційний менеджмент, математичнв методи і моделювання в економіці і управлінні', 'ph_d_econ', 'docent', 'Одеський національний університет імені І.І. Мечникова', 'Кафедра менеджменту та математичного моделювання ринкових процесів', 'вул. Дворянська, 2, Одеса, Україна, 65023', 'science', 'http://onu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441086449, 1464155260, 0, ''),
(142, 'Новаківський Ігор Іванович', '-', 'ua', 'Доцент', '+380974350379', 'inovak@ukr.net', 'Менеджмент, ІТ', 'ph_d_econ', 'docent', 'Національний університет "Львівська політехніка"', 'Кафедра менеджменту організацій', 'вул. Степана Бандери, 12, Львів, Україна, 79013', 'science', 'http://www.lp.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441086610, 1464155420, 0, ''),
(143, 'Шатковський Леонiд Юрiйович', '-', 'ua', 'Аспірант', '+380994842909', 'shatkovskyiL@gmail.com', 'Управління проектами', 'no_degree', 'no_rank', 'Національний університет кораблебудування імені адмірала Макарова', 'Кафедра інформаційних управляючих систем та технологій', 'пр-т Героїв Сталінграда, 9, Миколаїв, Україна, 54025', 'science', 'http://www.nuos.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441086753, 1464155565, 0, ''),
(144, 'Григорян Тигран Георгiйович', '-', 'ua', 'Доцент', '+380933969330', 'grigorian.tigran@gmail.com', 'Управління проектами', 'ph_d_tech', 'docent', 'Національний університет кораблебудування імені адмірала Макарова', 'Кафедра управління проектами', 'пр-т Героїв Сталінграда, 9, Миколаїв, Україна, 54025', 'science', 'http://www.nuos.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441086871, 1464155682, 0, ''),
(145, 'Шматко Олександр Віталійович', '-', 'ua', 'Доцент', '+380677415514', 'asu.spios@gmail.com', 'Моделювання складних ієрархічних систем', 'ph_d_tech', 'docent', 'Національний технічний університет "Харківський політехнічний інститут"', 'Кафедра "Програмна інженерія та інформаційні технології управління"', 'вул. Фрунзе, 21, Харків, Україна, 61002', 'science', 'http://www.kpi.kharkov.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441087002, 1464155813, 0, ''),
(146, 'Яцунський Євген Олександрович', '-', 'ua', 'Аспірант', '+380666045900', 'yevhen.yatsunskyi@nuos.edu.ua', 'Рекреаційні проекти', 'no_degree', 'no_rank', 'Національний університет кораблебудування імені адмірала Макарова', 'Кафедра управління проектами', 'пр-т Героїв Сталінграда, 9, Миколаїв, Україна, 54025', 'science', 'http://www.nuos.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441087228, 1464156039, 0, ''),
(147, 'Шахов Анатолій Валентинович', '-', 'ua', 'Професор', '+380674840353', 'avshakhov@yandex.ua', 'Управління проектами', 'd_sc_tech', 'prof', 'Одеський національний морський університет', 'Кафедра судноремонту', 'вул. Мечникова, 34, Одеса, Україна, 65029', 'science', 'http://www.osmu.odessa.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441087385, 1464159955, 0, ''),
(148, 'Бокарева Марина Олегівна', '-', 'ua', 'Аспірант', '+380679102000', 'bokareva.m@gmail.com', 'Управління проектами', 'no_degree', 'no_rank', 'Одеський національний морський університет', 'Кафедра судноремонту', 'вул. Мечникова, 34, Одеса, Україна, 65029', 'science', 'http://www.osmu.odessa.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441087512, 1464156324, 0, ''),
(149, 'Корзняков Олексій Сергійович', '-', 'ua', 'Аспірант', '+380933540348', 'alexei.korznyakov@gmail.com', 'Управління проектами', 'no_degree', 'no_rank', 'Національний університет кораблебудування імені адмірала Макарова', 'Кафедра управління проектами', 'пр-т Героїв Сталінграда, 9, Миколаїв, Україна, 54025', 'science', 'http://www.nuos.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441087661, 1464156473, 0, ''),
(150, 'Домбровський Михайло Збишекович', '-', 'ua', 'Інженер', '+380672543132 ', 'Michael@tneu.edu.ua', 'Процеси і системи управління проектами, розробка моделей планування діяльності підприємств, застосування процесного підходу в управлінні', 'no_degree', 'no_rank', 'Тернопільський національний економічний університет', 'Загальноуніверитетська навчальна комп’ютерна лабораторія', 'вул. Львівська, 11, Тернопіль, Україна, 46000', 'science', 'http://www.tneu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441087882, 1464156695, 0, ''),
(151, 'Дорош Марія Сергіївна', '-', 'ua', 'Доцент', '+380937859955', 'dorosh.m@inbox.ru', 'Управління проектами, управління якістю', 'ph_d_tech', 'docent', 'Навчально-науковий Інститут Економіки "Чернігівський національний технологічний університет"', 'Кафедра управління якістю та проектами', 'вул. Стрелецька, 1, Чернігів, Україна, 14034', 'science', 'http://geci.stu.cn.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441088614, 1464157431, 0, ''),
(152, 'Ігнатюк Вікторія Василівна', '-', 'ua', 'Асистент', '+380971313271', 'nikushek@ukr.net', 'Управління проектами і програмами', 'no_degree', 'no_rank', 'Національний транспортний університет', 'Кафедра менеджменту', 'вул. Суворова, 1, Київ, Україна, 01010', 'science', 'http://ntu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441088789, 1464157600, 0, ''),
(153, 'Кирій Валентина Василівна', '-', 'ua', 'Доцент', '+380504024796', 'kiriy_v@mail.ru', 'Інформаційне забезпечення управління, математичне моделювання та оптимізація в економіці', 'ph_d_econ', 'docent', 'Харківський національний університет радіоелектроніки', 'Кафедра економічної кібернетики і управління економічною безпекою', 'пр-т Науки, 14, Харків. Україна, 61166', 'science', 'http://nure.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441088957, 1464165569, 0, ''),
(154, 'Москалюк Андрій Юрійович', '-', 'ua', 'Старший викладач', '+380672888108 ', 'Andreum@mail.ru', 'Управління проектами', 'no_degree', 'no_rank', 'Одеський національний політехнічний університет', 'Кафедра управління системами безпеки життєдіяльності ', 'пр-т Шевченка, 1, Одеса, Україна, 65044', 'science', 'http://opu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441089265, 1464158075, 0, ''),
(155, 'Онищенко Інна Ігорівна', '-', 'ua', 'Здобувач', '+380978908854', 'zitrs@i.ua', 'Управління проектами', 'no_degree', 'no_rank', 'Університет економіка та права "КРОК"', 'Кафедра бізнес-адміністрування та управління проектами', 'вул. Лагерна, 30-32, Київ, Україна, 01001', 'science', 'http://www.krok.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441089691, 1464158507, 0, ''),
(156, 'Карпенко Олена Анатоліївна', '-', 'ua', 'Доцент', '+380673168531', 'swettla@i.ua', 'Управління проектами та логістика', 'ph_d_econ', 'docent', 'Національний транспортний університет', 'Кафедра транспортного права та логістики', 'вул. Суворова, 1, Київ, Україна, 01010', 'science', 'http://ntu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441090925, 1464159736, 0, ''),
(157, 'Колісник Марія Едуардівна ', '-', 'ua', 'Старший викладач', '+380669038819', 'Rozaeduard@gmail.com', 'Управління проектами', 'ph_d_tech', 'no_rank', 'Національний технічний університет "Харківський політехнічний інститут"', 'Кафедра економіки та маркетингу', 'вул. Фрунзе, 21, Харків, Україна, 61002', 'science', 'http://www.kpi.kharkov.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441091386, 1464160201, 0, ''),
(158, 'Степований Володимир Миколайович', '-', 'ua', 'Аспірант', '+380985757096', 'stepovani@gmail.com', 'Управління проектами в аграрному видобництві', 'no_degree', 'no_rank', 'Львівський національний аграрний університет', 'Кафедра машинобудування', 'вул. Володимира Великого, 1, м. Дубляни, Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441091875, 1464160685, 0, ''),
(159, 'Целовальникова Олена Андріївна', '-', 'ua', 'Аспірант', '+380674825421', 'milena012@mail.ru', 'Управління проектами і програмами', 'no_degree', 'no_rank', 'Університет економіка та права "КРОК"', 'Кафедра бізнес-адміністрування та управління проектами', 'вул. Лагерна, 30-32, Київ, Україна, 01001', 'science', 'http://www.krok.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441092007, 1464160819, 0, ''),
(160, 'Романів Тетяна Віталіївна', '-', 'ua', 'Здобувач', '+380955148927', 'tatiromaniv@gmail.com', 'Стратегічне управління проектноорієнтованими підприємствами', 'no_degree', 'no_rank', 'Університет економіка та права "КРОК"', 'Кафедра бізнес-адміністрування та управління проектами', 'вул. Лагерна, 30-32, Київ, Україна, 01001', 'science', 'http://www.krok.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441092167, 1464160977, 0, ''),
(161, 'Оліфер Олександр Віталійович ', '-', 'ua', 'Здобувач', '+380973512306 ', 'oleksander_olsfe@mail.ru', 'Управління проектів у лісогосподарській галузі', 'no_degree', 'no_rank', 'Львівський національний аграрний університет', 'Кафедра машинобудування', 'вул. Володимира Великого, 1, м. Дубляни, Жовківський район, Львівська область, Україна, 80381', 'science', 'http://lnau.lviv.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441094370, 1464163179, 0, ''),
(162, 'Меленівська Ярослава Валеріївна', '-', 'ua', 'Здобувач', '+380503311806', 'melenivska@gmail.com', 'Управління проектами', 'd_sc', 'prof', 'Університет економіка та права "КРОК"', 'Кафедра бізнес-адміністрування та управління проектами', 'вул. Лагерна, 30-32, Київ, Україна, 01001', 'science', 'http://www.krok.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441094481, 1464163294, 0, ''),
(163, 'Чернова Людмила Сергіївна', '-', 'ua', 'Аспірант', '+380675153777', 'myla-0108@mail.ru', 'Управління наукомісткими підприємствами', 'no_degree', 'no_rank', 'Національний університет кораблебудування імені адмірала Макарова', 'Кафедра управління проектами', 'пр-т Героїв Сталінграда, 9, Миколаїв, Україна, 54025', 'science', 'http://www.nuos.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441094605, 1464163417, 0, ''),
(164, 'Міхнов Дмитро Кіндратович', '-', 'ua', 'Професор', '+380577021451', 'mikhnov@kture.kharkov.ua', 'Управління проектами, інформаційні системи', 'ph_d_tech', 'docent', 'Харківський національний університет радіоелектроніки', 'Кафедра інформаційних управляючих систем', 'пр-т Науки, 14, Харків. Україна, 61166', 'science', 'http://nure.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441094840, 1464163649, 0, ''),
(165, 'Міхнова Аліна Володимирівна', '-', 'ua', 'Доцент', '+380577021451', 'mikhnova@kture.kharkov.ua', 'Управління проектами, інформаційні системи', 'ph_d_tech', 'docent', 'Харківський національний університет радіоелектроніки', 'Кафедра інформаційних управляючих систем', 'пр-т Науки, 14, Харків. Україна, 61166', 'science', 'http://nure.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441094996, 1464163807, 0, ''),
(166, 'Сохань В`ячеслав Вікторович', '-', 'ua', 'Аспірант', '+380962992379', 'SlavikSo@bigmir.net', 'Управління проектами і програмами', 'no_degree', 'no_rank', 'Національний транспортний університет', 'Кафедра транспортного права та логістики', 'вул. Суворова, 1, Київ, Україна, 01010', 'science', 'http://ntu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441095151, 1464163963, 0, ''),
(167, 'Мельниченко Олександр Іванович', '-', 'ua', 'Професор', '+380442800149', 'melnichenko@ntu.edu.ua', 'Управління проектами і програмами', 'ph_d_tech', 'docent', 'Національний транспортний університет', 'Кафедра транспортного права та логістики', 'вул. Суворова, 1, Київ, Україна, 01010', 'science', 'http://ntu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441095275, 1464164097, 0, ''),
(168, 'Шпильовий Василь Дмитрович', '-', 'ua', 'Завідувач кафедри технологій управління', '+380444067377', 'itu@nau.edu.ua', 'Управління проектами, стратегічне управління, інноваційна діяльність, підготовка фахівців', 'ph_d_tech', 'docent', 'Національний авіаційний університет', 'Кафедра технологій управління', 'пр-т Комарова 1, Київ, Україна, 03680', 'science', 'http://nau.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441095607, 1464164417, 0, ''),
(169, 'Шамов Олексій Володимирович', '-', 'ua', 'Старший викладач', '+30984524777', 'al23od@rambler.ru', 'Управління проектами', 'no_degree', 'no_rank', 'Одеський національний морський університет', 'Кафедра технологій матеріалів', 'вул. Мечникова, 34, Одеса, Україна, 65029', 'science', 'http://www.osmu.odessa.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441095784, 1464164593, 0, ''),
(170, 'Котетунов Віктор Юрійович', '-', 'ua', 'Аспірант', '+380632800728', 'kulibin.construct@gmail.com', 'Управління проектами', 'no_degree', 'no_rank', 'Черкаський державний технологічний університет', 'Кафедра управління проектами', 'бул. Шевченко, 460, Черкаси, Україна, 18006', 'science', 'https://chdtu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441095986, 1464164798, 0, ''),
(171, 'Маргасов Дмитро Валерійович', '-', 'ua', 'Аспірант', '+380672326854', 'mn123@i.ua', 'Управління енергоощадними проектами', 'no_degree', 'no_rank', 'Навчально-науковий Інститут Економіки "Чернігівський національний технологічний університет"', 'Кафедра управління якістю та проектами', 'вул. Стрелецька, 1, Чернігів, Україна, 14034', 'science', 'http://geci.stu.cn.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441096183, 1464164992, 0, ''),
(172, 'Берулава Дмитро Заурійович', '-', 'ua', 'Аспірант', '+380663771122', 'bkt@bigmir.net', 'Стратегічні програми розвитку міст', 'no_degree', 'no_rank', 'Київський національний університет будівництва і архітектури', 'Кафедра управління проектами', 'пр-т Повітрофлотський, 31, Київ, Україна, 03680', 'science', 'http://www.knuba.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441096311, 1464165121, 0, ''),
(173, 'Грисюк Юрій Сергійович', '-', 'ua', 'Доцент', '+380679071869', 'karerra@ukr.net', 'Управління процесом реалізації проектів та програм', 'ph_d_econ', 'docent', 'Національний транспортний університет', 'Кафедра транспортного права та логістики', 'вул. Суворова, 1, Київ, Україна, 01010', 'science', 'http://ntu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441096532, 1464165341, 0, ''),
(174, 'Рибак Анатолій Іванович', '-', 'ua', 'Професор', '+380506110106', 'anatol166@rambler.ru', 'Управління проектами', 'd_sc_tech', 'prof', 'Міжнародний гуманітарний університет', 'Кафедра бізнес-адміністрування та комп’ютерної безпеки', 'вул. Фонтанська дорога, 33, Одеса, Україна, 65009 ', 'science', 'http://mgu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441101801, 1464170613, 0, ''),
(175, 'Азарова Ірина Борисівна', '-', 'ua', 'Здобувач', '+380677227327', 'partisia@mail.ru', 'Управління проектами', 'no_degree', 'no_rank', 'Міжнародний гуманітарний університет', 'Кафедра бізнес-адміністрування та комп’ютерної безпеки', 'вул. Фонтанська дорога, 33, Одеса, Україна, 65009 ', 'science', 'http://mgu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441101902, 1464170716, 0, ''),
(176, 'Панафідін Геннадій Сергійович', '-', 'ua', 'Здобувач', '+3806762479999', 'g.s.panafidin@ua-etc.com', 'Економіка та комп\'ютерні технології', 'no_degree', 'no_rank', 'Міжнародний гуманітарний університет', 'Кафедра бізнес-адміністрування та комп’ютерної безпеки', 'вул. Фонтанська дорога, 33, Одеса, Україна, 65009 ', 'science', 'http://mgu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441102071, 1464170893, 0, ''),
(177, 'Бабенко Михайло Юрійович  ', '-', 'ua', 'Аспірант', '+380633706868', 'babenkomichail777@gmail.com', 'Економіка та комп\'ютерні технології', 'no_degree', 'no_rank', 'Міжнародний гуманітарний університет', 'Кафедра бізнес-адміністрування та комп’ютерної безпеки', 'вул. Фонтанська дорога, 33, Одеса, Україна, 65009 ', 'science', 'http://mgu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441102169, 1464170979, 0, ''),
(178, 'Баранюк Іван Андрійович', '-', 'ua', 'Доцент', '+380974506230', 'ivan_baranyuk@ukr.net', 'Управління якістю', 'ph_d_tech', 'docent', 'Навчально-науковий Інститут Економіки "Чернігівський національний технологічний університет"', 'Кафедра управління якістю та проектами', 'вул. Стрелецька, 1, Чернігів, Україна, 14034', 'science', 'http://geci.stu.cn.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441102347, 1464171159, 0, ''),
(179, 'Ітченко Дмитро Миколайович', '-', 'ua', 'Старший викладач', '+380971969066', 'itchenko@list.ru', 'Управління якістю', 'no_degree', 'no_rank', 'Навчально-науковий Інститут Економіки "Чернігівський національний технологічний університет"', 'Кафедра управління якістю та проектами', 'вул. Стрелецька, 1, Чернігів, Україна, 14034', 'science', 'http://geci.stu.cn.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441102460, 1464171271, 0, ''),
(180, 'Малєєва Ольга Володимирівна', '-', 'ua', 'Професор', '+380973497591', 'omaleyeva@mail.ru', 'Управління проектами та програмами, інформаційні технології в управлінні', 'd_sc_tech', 'prof', 'Національний аерокосмічний університет ім. М.Є. Жуковського "Харківський авіаційний інститут"', 'Кафедра інформаційних управляючих систем', 'вул. Чкалова,17, Харків, Україна, 61070', 'science', 'http://www.khai.edu/', 'listener', '', '0', '0', 350, 'uah', 0, 1441102627, 1464171438, 0, ''),
(181, 'Король Юлія Олександрівна', '-', 'ua', 'Аспірант', '+380965541727', 'korol_julia@mail.ru', 'Управління проектами і програмами', 'no_degree', 'no_rank', 'Національний аерокосмічний університет ім. М.Є. Жуковського "Харківський авіаційний інститут"', 'Кафедра інформаційних управляючих систем', 'вул. Чкалова,17, Харків, Україна, 61070', 'science', 'http://www.khai.edu/', 'listener', '', '0', '0', 350, 'uah', 0, 1441102727, 1464171537, 0, ''),
(182, 'Прокопенко Тетяна Олександрівна', '-', 'ua', 'Доцент', '+380972999979', 'tatianaalexandr@yandex.ru', 'Управління проектами', 'ph_d_tech', 'docent', 'Черкаський державний технологічний університет', 'Кафедра управління проектами', 'бул. Шевченко, 460, Черкаси, Україна, 18006', 'science', 'https://chdtu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441102943, 1464171756, 0, ''),
(183, 'Урецька Юлія Ігоревна', '-', 'ua', 'Аспірант', '+380633649190', 'julia.uretskaya@tmx.com.ua', 'Управління проектами', 'no_degree', 'no_rank', 'Черкаський державний технологічний університет', 'Кафедра управління проектами', 'бул. Шевченко, 460, Черкаси, Україна, 18006', 'science', 'https://chdtu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441103038, 1464171855, 0, ''),
(184, 'Васильцова Наталія Володимирівна', '-', 'ua', 'Доцент', '+380577021451 ', 'vasiltsova_natali@mail.ru', 'Управління ІТ-проектами, управління роботою проектної команди', 'ph_d_tech', 'docent', 'Харківський національний університет радіоелектроніки', 'Кафедра інформаційних управляючих систем', 'пр-т Науки, 14, Харків. Україна, 61166', 'science', 'http://nure.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441103431, 1464172241, 0, ''),
(185, 'Панфьорова Ірина Юріївна', '-', 'ua', 'Доцент', '+380577021451', 'panfiorova@gmail.com', 'Управління ІТ-проектами, технології баз даних, автоматизація управління організацією', 'ph_d_tech', 'docent', 'Харківський національний університет радіоелектроніки', 'Кафедра інформаційних управляючих систем', 'пр-т Науки, 14, Харків. Україна, 61166', 'science', 'http://nure.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441103541, 1464172351, 0, ''),
(186, 'Гайдабрус Богдан Володимирович', '-', 'ua', 'Доцент', '+380502362464', 'gaudabrys@mail.ru', 'Управління проектами та програмами, управління ризиками ', 'ph_d_tech', 'docent', 'Сумський державний університет', 'Кафедра комп\'ютерних наук', 'вул. Римського-Корсакова, 2, Суми, Україна, 40007', 'science', 'http://sumdu.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441103725, 1464172535, 0, ''),
(187, 'Дружинін Євген Анатолійович ', '-', 'ua', 'Завідувач кафедри інформаційних технологій проектування літальних апаратів', '+380577884105', 'dea5050@mail.ru', 'Управління проектами и програмами, системне проектування ', 'd_sc_tech', 'prof', 'Національний аерокосмічний університет ім. М.Є. Жуковського "Харківський авіаційний інститут"', 'Кафедра інформаційних технологій проектування літальних апаратів', 'вул. Чкалова,17, Харків, Україна, 61070', 'science', 'http://www.khai.edu/', 'listener', '', '0', '0', 350, 'uah', 0, 1441103874, 1464172683, 0, ''),
(188, 'Казимиренко Юлія Олексіївна', '-', 'ua', 'Доцент', '+380679805197', 'uakazi@mksat.net', 'Розробка нових композиційних матеріалів і покриттів, експериментальні дослідження їх властивостей, оптимізація складу, структури, захист від іонізуючого випромінювання', 'ph_d_tech', 'docent', 'Національний університет кораблебудування імені адмірала Макарова', 'Кафедра матеріалознавства і технології металів', 'пр-т Героїв Сталінграда, 9, Миколаїв, Україна, 54025', 'science', 'http://www.nuos.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441115320, 1464184133, 0, ''),
(189, 'Фаріонова Тетяна Анатоліївна', '-', 'ua', 'Доцент', '+380672356700', 'tetyana.farionova@nuos.du.ua', 'Дослідження в галузі управління проектами та теорії прийняття рішень, їх прикладне застосування для рішення інженерних задач', 'ph_d_tech', 'docent', 'Національний університет кораблебудування імені адмірала Макарова', 'Кафедра програмного забезпечення автоматизованих систем', 'пр-т Героїв Сталінграда, 9, Миколаїв, Україна, 54025', 'science', 'http://www.nuos.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441115436, 1464184247, 0, ''),
(190, 'Ярошенко Руслан Федорович ', '-', 'ua', 'Доцент', '+380442449690', 'r.yaroshenko@mail.ru', 'Управління проектами', 'ph_d_tech', 'docent', 'Київський національний університет будівництва і архітектури', 'Кафедра управління проектами', 'пр-т Повітрофлотський, 31, Київ, Україна, 03680', 'science', 'http://www.knuba.edu.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441115650, 1464184460, 0, ''),
(191, 'Левикін Віктор Макарович', '-', 'ua', 'Завідувач кафедри інформаційних управляючих систем', '+380577021451', 'iyc@kture.kharkov.ua', 'Методології, методи та інформаційні технології розробки інтегрованих і web-базованих інформаційних систем', 'd_sc_tech', 'prof', 'Харківський національний університет радіоелектроніки', 'Кафедра інформаційних управляючих систем', 'пр-т Науки, 14, Харків. Україна, 61166', 'science', 'http://nure.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441115867, 1464184678, 0, ''),
(192, 'Євланов Максим Вікторович', '-', 'ua', 'Доцент', '+380577021451', 'evlanov_max@mail.ru', 'Розробка методологій, моделей, методів і технологій створення сервіс-орієнтованих систем, включаючи формування та аналіз вимог, а також синтез функціональних структур інформаційних систем.', 'ph_d_tech', 'docent', 'Харківський національний університет радіоелектроніки', 'Кафедра інформаційних управляючих систем', 'пр-т Науки, 14, Харків. Україна, 61166', 'science', 'http://nure.ua/', 'listener', '', '0', '0', 350, 'uah', 0, 1441115988, 1464184802, 0, ''),
(193, 'Кійко Сергій Геннадійович', '-', 'ua', 'Перший заступник Голови Правління - директор з фінансів та економіки', '+380612834069', 'secrdp@dss.com.ua', 'Фінансовий менеджмент, управління проектами', 'no_degree', 'no_rank', 'ПАО "Дніпроспецсталь"', '-', 'вул. Південне шосе, 81, Запоріжжя, Україна, 69008', 'industry', 'http://www.dss-ua.com/', 'listener', '', '0', '0', 350, 'uah', 0, 1441116378, 1464185188, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--
-- Creation: Apr 24, 2016 at 05:50 PM
--

DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1454852688),
('m130524_201442_init', 1454852694),
('m141002_030233_translate_manager', 1456744819),
('m141107_230213_create_blog_category_table', 1457897189),
('m141107_230742_create_blog_post_table', 1457897189),
('m141107_232305_add_blog_post_ref_category_fk', 1457897189),
('m141108_110957_create_blog_type_table', 1457897189),
('m141108_111436_add_blog_post_ref_type_fk', 1457897189),
('m141129_130551_create_filemanager_mediafile_table', 1458472467),
('m141203_173402_create_filemanager_owners_table', 1458472467),
('m141203_175538_add_filemanager_owners_ref_mediafile_fk', 1458472467);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
-- Creation: Apr 24, 2016 at 05:50 PM
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '5FD5UJmKjph7bWyKok8NkH944ZJZM1NA', '$2y$13$1meb0beYtpY15vbZU6kpcut9NKKgXBmFQz.Ok/Lh4a1drVVBi.9vm', NULL, 'admin@admin.com', 10, 1454852734, 1456747952);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_post_ref_category` (`category_id`),
  ADD KEY `blog_post_ref_type` (`type_id`);

--
-- Indexes for table `blog_post_translation`
--
ALTER TABLE `blog_post_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `blog_type`
--
ALTER TABLE `blog_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conf_period`
--
ALTER TABLE `conf_period`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filemanager_mediafile`
--
ALTER TABLE `filemanager_mediafile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filemanager_owners`
--
ALTER TABLE `filemanager_owners`
  ADD PRIMARY KEY (`mediafile_id`,`owner_id`,`owner`,`owner_attribute`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `language_source`
--
ALTER TABLE `language_source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_translate`
--
ALTER TABLE `language_translate`
  ADD PRIMARY KEY (`id`,`language`),
  ADD KEY `language_translate_idx_language` (`language`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `blog_post_translation`
--
ALTER TABLE `blog_post_translation`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `blog_type`
--
ALTER TABLE `blog_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `conf_period`
--
ALTER TABLE `conf_period`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;
--
-- AUTO_INCREMENT for table `filemanager_mediafile`
--
ALTER TABLE `filemanager_mediafile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `language_source`
--
ALTER TABLE `language_source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=944;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD CONSTRAINT `blog_post_ref_category` FOREIGN KEY (`category_id`) REFERENCES `blog_category` (`id`),
  ADD CONSTRAINT `blog_post_ref_type` FOREIGN KEY (`type_id`) REFERENCES `blog_type` (`id`);

--
-- Constraints for table `filemanager_owners`
--
ALTER TABLE `filemanager_owners`
  ADD CONSTRAINT `filemanager_owners_ref_mediafile` FOREIGN KEY (`mediafile_id`) REFERENCES `filemanager_mediafile` (`id`);

--
-- Constraints for table `language_translate`
--
ALTER TABLE `language_translate`
  ADD CONSTRAINT `language_translate_ibfk_1` FOREIGN KEY (`language`) REFERENCES `language` (`language_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `language_translate_ibfk_2` FOREIGN KEY (`id`) REFERENCES `language_source` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
