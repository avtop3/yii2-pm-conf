-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 17, 2016 at 06:16 PM
-- Server version: 5.5.41-log
-- PHP Version: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii2-conf`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE IF NOT EXISTS `blog_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `position` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `blog_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_post_ref_category` (`category_id`),
  KEY `blog_post_ref_type` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

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

CREATE TABLE IF NOT EXISTS `blog_post_translation` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `field_name` char(50) NOT NULL DEFAULT '0',
  `lang_id` char(50) NOT NULL DEFAULT '0',
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

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

CREATE TABLE IF NOT EXISTS `blog_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `show_category` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog_type`
--

INSERT INTO `blog_type` (`id`, `title`, `alias`, `show_category`) VALUES
(1, 'staticPage', 'static-page', 0),
(2, 'speakers', 'speakers', 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `alpha_2` varchar(2) NOT NULL DEFAULT '',
  `alpha_3` varchar(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=250 ;

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
(55, 'Cote d''Ivoire', 'ci', 'civ'),
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
(118, 'Korea, Democratic People''s Republic of', 'kp', 'prk'),
(119, 'Korea, Republic of', 'kr', 'kor'),
(120, 'Kuwait', 'kw', 'kwt'),
(121, 'Kyrgyzstan', 'kg', 'kgz'),
(122, 'Lao People''s Democratic Republic', 'la', 'lao'),
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

CREATE TABLE IF NOT EXISTS `filemanager_mediafile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `alt` text,
  `size` varchar(255) NOT NULL,
  `description` text,
  `thumbs` text,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

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

CREATE TABLE IF NOT EXISTS `filemanager_owners` (
  `mediafile_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `owner_attribute` varchar(255) NOT NULL,
  PRIMARY KEY (`mediafile_id`,`owner_id`,`owner`,`owner_attribute`)
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

CREATE TABLE IF NOT EXISTS `language` (
  `language_id` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `name_ascii` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  PRIMARY KEY (`language_id`)
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

CREATE TABLE IF NOT EXISTS `language_source` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=575 ;

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
(376, 'app', 'Create'),
(377, 'app', 'Search'),
(378, 'app', 'Reset'),
(379, 'app', 'Congratulations'),
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
(456, 'app.member', 'Russia'),
(457, 'app.member', 'Belarus'),
(458, 'app.member', 'Kazakhstan'),
(459, 'app.member', 'Other'),
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
(574, 'main', 'Update post “{title}”');

-- --------------------------------------------------------

--
-- Table structure for table `language_translate`
--

CREATE TABLE IF NOT EXISTS `language_translate` (
  `id` int(11) NOT NULL,
  `language` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `translation` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`,`language`),
  KEY `language_translate_idx_language` (`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language_translate`
--

INSERT INTO `language_translate` (`id`, `language`, `translation`) VALUES
(379, 'ru-RU', 'Поздравляем'),
(379, 'uk-UA', 'Вітаємо'),
(400, 'ru-RU', 'Страна проживания'),
(400, 'uk-UA', 'Країна проживання'),
(401, 'ru-RU', 'Фамилия, имя, отчество'),
(401, 'uk-UA', 'Прізвище, ім''я, по-батькові'),
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
(408, 'ru-RU', 'Полное название'),
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
(413, 'uk-UA', 'Ім''я та прізвище згідно закордонного паспорту (для сертифікату)'),
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
(444, 'uk-UA', 'Телекомунікації та зв''язок'),
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
(456, 'ru-RU', 'Россия'),
(456, 'uk-UA', 'Росія'),
(457, 'ru-RU', 'Белорусь'),
(457, 'uk-UA', 'Белорусь'),
(458, 'ru-RU', 'Казахстан'),
(458, 'uk-UA', 'Казахстан'),
(459, 'ru-RU', 'Другая'),
(459, 'uk-UA', 'Інша'),
(460, 'ru-RU', 'Сведения об участнике'),
(460, 'uk-UA', 'Відомості про учасника'),
(461, 'ru-RU', 'Сведения об организации'),
(461, 'uk-UA', 'Відомості про організацю'),
(462, 'ru-RU', 'Формат участия'),
(462, 'uk-UA', 'Формат участі'),
(463, 'ru-RU', 'К оплате'),
(463, 'uk-UA', 'До оплати'),
(464, 'ru-RU', 'Орг.взнос'),
(464, 'uk-UA', 'Орг.внесок'),
(465, 'ru-RU', 'Сборник трудов'),
(465, 'uk-UA', 'Журнал'),
(466, 'ru-RU', 'Итого к оплате'),
(466, 'uk-UA', 'Всього до сплати'),
(467, 'ru-RU', 'Итого'),
(467, 'uk-UA', 'Загалом'),
(570, 'ru-RU', 'Отправить'),
(570, 'uk-UA', 'Відіслати'),
(571, 'ru-RU', 'ФИО участника'),
(571, 'uk-UA', 'П.І.Б учасника'),
(572, 'ru-RU', 'Оплачено');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `noteFromAdmin` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `nameEng`, `country`, `position`, `phone`, `email`, `interest`, `scienceDegree`, `scienceTitle`, `organisationTitle`, `organisationDepartment`, `organisationAddress`, `organisationActivity`, `organisationUrl`, `participationType`, `topicTitle`, `topicLanguage`, `topicSection`, `totalSum`, `currency`, `papersCount`, `created_at`, `updated_at`, `paid`, `noteFromAdmin`) VALUES
(9, 'Bill Gates', 'Bill Gates', 'ru', 'Founder', '0123456789', 'bill@ms.com', 'computer since, money, porshe', '5', '1', 'Microsoft Co.', 'Oparational systems', '23, Santa Fe, California ', '1', 'https://www.microsoft.com/uk-ua/', 'listener', '', '0', '0', 600, 'usd', 10, 1460889176, 1460906146, 0, ''),
(10, 'Дон Хуан', 'Don Huan', 'ru', 'Старшый реализатор', '0923488323', 'don@huan.com', 'drugs, sales, php', '0', '0', 'Palo Alto', 'no', 'California, 67', '14', 'http://getbootstrap.com/components/', 'listener', '', '0', '0', 200, 'usd', 2, 1460899839, 1460904259, 1, 'Оплатил, но только 500 грн.\r\nОстальное обещал 20.04\r\n\r\nUsing color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the contextual colors are only used to reinforce meaning that is already present in the text/markup), or is included through alternative means, such as additional text hidden with the .sr-only class.');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
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

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '5FD5UJmKjph7bWyKok8NkH944ZJZM1NA', '$2y$13$1meb0beYtpY15vbZU6kpcut9NKKgXBmFQz.Ok/Lh4a1drVVBi.9vm', NULL, 'admin@admin.com', 10, 1454852734, 1456747952);

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
