-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- 生成時間: 2014 年 6 月 21 日 00:27
-- サーバのバージョン: 5.1.59
-- PHP のバージョン: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `LAA0280954-kazumasa`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `jikokuhyo`
--

CREATE TABLE IF NOT EXISTS `jikokuhyo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(8) NOT NULL,
  `direction` text NOT NULL COMMENT 'kote and wase',
  `day` int(11) NOT NULL COMMENT 'weekday=1,saturday=2, holiday=3',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=311 ;

--
-- テーブルのデータをダンプしています `jikokuhyo`
--

INSERT INTO `jikokuhyo` (`id`, `time`, `direction`, `day`) VALUES
(1, '0800', 'kotenorth', 1),
(2, '0810', 'kotenorth', 1),
(3, '0850', 'kotenorth', 1),
(4, '0900', 'kotenorth', 1),
(8, '0910', 'kotenorth', 1),
(9, '0920', 'kotenorth', 1),
(10, '0930', 'kotenorth', 1),
(11, '0935', 'kotenorth', 1),
(12, '0940', 'kotenorth', 1),
(13, '0945', 'kotenorth', 1),
(14, '0955', 'kotenorth', 1),
(15, '1000', 'kotenorth', 1),
(16, '1020', 'kotenorth', 1),
(17, '1025', 'kotenorth', 1),
(18, '1030', 'kotenorth', 1),
(19, '1040', 'kotenorth', 1),
(20, '1050', 'kotenorth', 1),
(21, '1100', 'kotenorth', 1),
(23, '1110', 'kotenorth', 1),
(24, '1120', 'kotenorth', 1),
(25, '1130', 'kotenorth', 1),
(26, '1140', 'kotenorth', 1),
(27, '1150', 'kotenorth', 1),
(28, '1155', 'kotenorth', 1),
(29, '1200', 'kotenorth', 1),
(30, '1210', 'kotenorth', 1),
(31, '1220', 'kotenorth', 1),
(32, '1225', 'kotenorth', 1),
(33, '1230', 'kotenorth', 1),
(34, '1235', 'kotenorth', 1),
(35, '1240', 'kotenorth', 1),
(36, '1250', 'kotenorth', 1),
(37, '1300', 'kotesouth', 1),
(38, '1315', 'kotesouth', 1),
(39, '1325', 'kotesouth', 1),
(40, '1335', 'kotesouth', 1),
(41, '1345', 'kotesouth', 1),
(42, '1400', 'kotesouth', 1),
(43, '1415', 'kotesouth', 1),
(44, '1425', 'kotesouth', 1),
(45, '1435', 'kotesouth', 1),
(46, '1445', 'kotesouth', 1),
(47, '1450', 'kotesouth', 1),
(48, '1455', 'kotesouth', 1),
(49, '1500', 'kotesouth', 1),
(50, '1505', 'kotesouth', 1),
(51, '1510', 'kotesouth', 1),
(52, '1515', 'kotesouth', 1),
(53, '1525', 'kotesouth', 1),
(54, '1535', 'kotesouth', 1),
(55, '1545', 'kotesouth', 1),
(56, '1555', 'kotesouth', 1),
(57, '1605', 'kotesouth', 1),
(58, '1615', 'kotesouth', 1),
(59, '1625', 'kotesouth', 1),
(60, '1635', 'kotesouth', 1),
(61, '1640', 'kotesouth', 1),
(62, '1645', 'kotesouth', 1),
(63, '1650', 'kotesouth', 1),
(64, '1655', 'kotesouth', 1),
(65, '1700', 'kotesouth', 1),
(66, '1705', 'kotesouth', 1),
(67, '1715', 'kotesouth', 1),
(68, '1725', 'kotesouth', 1),
(69, '1735', 'kotesouth', 1),
(70, '1745', 'kotesouth', 1),
(71, '1755', 'kotesouth', 1),
(72, '1805', 'kotesouth', 1),
(73, '1815', 'kotesouth', 1),
(74, '1825', 'kotesouth', 1),
(75, '1835', 'kotesouth', 1),
(76, '1845', 'kotesouth', 1),
(77, '1855', 'kotesouth', 1),
(78, '1915', 'kotesouth', 1),
(79, '1935', 'kotesouth', 1),
(80, '1945', 'kotesouth', 1),
(81, '1955', 'kotesouth', 1),
(82, '2015', 'kotesouth', 1),
(83, '2030', 'kotesouth', 1),
(84, '2115', 'kotesouth', 1),
(85, '0830', 'wasenorth', 1),
(86, '0900', 'wasenorth', 1),
(87, '0915', 'wasenorth', 1),
(88, '0935', 'wasenorth', 1),
(89, '0945', 'wasenorth', 1),
(90, '1010', 'wasenorth', 1),
(91, '1020', 'wasenorth', 1),
(92, '1030', 'wasenorth', 1),
(93, '1040', 'wasenorth', 1),
(94, '1050', 'wasenorth', 1),
(95, '1100', 'wasenorth', 1),
(96, '1110', 'wasenorth', 1),
(97, '1120', 'wasenorth', 1),
(98, '1130', 'wasenorth', 1),
(99, '1135', 'wasenorth', 1),
(100, '1140', 'wasenorth', 1),
(101, '1150', 'wasenorth', 1),
(102, '1200', 'wasenorth', 1),
(103, '1205', 'wasenorth', 1),
(104, '1210', 'wasenorth', 1),
(105, '1215', 'wasenorth', 1),
(106, '1220', 'wasenorth', 1),
(107, '1230', 'wasenorth', 1),
(108, '1245', 'wasesouth', 1),
(109, '1300', 'wasesouth', 1),
(110, '1310', 'wasesouth', 1),
(111, '1320', 'wasesouth', 1),
(112, '1330', 'wasesouth', 1),
(113, '1345', 'wasesouth', 1),
(114, '1400', 'wasesouth', 1),
(115, '1410', 'wasesouth', 1),
(116, '1420', 'wasesouth', 1),
(117, '1430', 'wasesouth', 1),
(118, '1435', 'wasesouth', 1),
(119, '1440', 'wasesouth', 1),
(120, '1445', 'wasesouth', 1),
(121, '1450', 'wasesouth', 1),
(122, '1455', 'wasesouth', 1),
(123, '1500', 'wasesouth', 1),
(124, '1510', 'wasesouth', 1),
(125, '1520', 'wasesouth', 1),
(126, '1530', 'wasesouth', 1),
(127, '1540', 'wasesouth', 1),
(128, '1550', 'wasesouth', 1),
(129, '1600', 'wasesouth', 1),
(130, '1610', 'wasesouth', 1),
(131, '1620', 'wasesouth', 1),
(132, '1625', 'wasesouth', 1),
(133, '1630', 'wasesouth', 1),
(134, '1640', 'wasesouth', 1),
(135, '1645', 'wasesouth', 1),
(136, '1650', 'wasesouth', 1),
(137, '1700', 'wasesouth', 1),
(138, '1710', 'wasesouth', 1),
(139, '1720', 'wasesouth', 1),
(140, '1730', 'wasesouth', 1),
(141, '1740', 'wasesouth', 1),
(142, '1750', 'wasesouth', 1),
(143, '1755', 'wasesouth', 1),
(144, '1800', 'wasesouth', 1),
(145, '1805', 'wasesouth', 1),
(146, '1810', 'wasesouth', 1),
(147, '1815', 'wasesouth', 1),
(148, '1820', 'wasesouth', 1),
(149, '1825', 'wasesouth', 1),
(150, '1830', 'wasesouth', 1),
(151, '1840', 'wasesouth', 1),
(152, '1850', 'wasesouth', 1),
(153, '1900', 'wasesouth', 1),
(154, '1910', 'wasesouth', 1),
(155, '1920', 'wasesouth', 1),
(156, '1930', 'wasesouth', 1),
(157, '1940', 'wasesouth', 1),
(158, '1950', 'wasesouth', 1),
(159, '2000', 'wasesouth', 1),
(160, '2015', 'wasesouth', 1),
(161, '2030', 'wasesouth', 1),
(162, '2040', 'wasesouth', 1),
(163, '2050', 'wasesouth', 1),
(164, '2100', 'wasesouth', 1),
(165, '2120', 'wasesouth', 1),
(166, '2140', 'wasesouth', 1),
(167, '0820', 'kotenorth', 2),
(168, '0830', 'kotenorth', 2),
(169, '0840', 'kotenorth', 2),
(170, '0900', 'kotenorth', 2),
(171, '0915', 'kotenorth', 2),
(172, '0930', 'kotenorth', 2),
(173, '0945', 'kotenorth', 2),
(174, '1000', 'kotenorth', 2),
(175, '1015', 'kotenorth', 2),
(176, '1030', 'kotenorth', 2),
(177, '1045', 'kotenorth', 2),
(178, '1100', 'kotenorth', 2),
(179, '1115', 'kotenorth', 2),
(180, '1130', 'kotenorth', 2),
(181, '1140', 'kotenorth', 2),
(182, '1150', 'kotenorth', 2),
(183, '1210', 'kotesouth', 2),
(184, '1230', 'kotesouth', 2),
(185, '1250', 'kotesouth', 2),
(186, '1310', 'kotesouth', 2),
(187, '1330', 'kotesouth', 2),
(188, '1350', 'kotesouth', 2),
(189, '1400', 'kotesouth', 2),
(190, '1410', 'kotesouth', 2),
(191, '1430', 'kotesouth', 2),
(192, '1450', 'kotesouth', 2),
(193, '1510', 'kotesouth', 2),
(194, '1530', 'kotesouth', 2),
(195, '1550', 'kotesouth', 2),
(196, '1610', 'kotesouth', 2),
(197, '1625', 'kotesouth', 2),
(198, '1645', 'kotesouth', 2),
(199, '1705', 'kotesouth', 2),
(200, '1725', 'kotesouth', 2),
(201, '1745', 'kotesouth', 2),
(202, '1805', 'kotesouth', 2),
(203, '1825', 'kotesouth', 2),
(204, '1845', 'kotesouth', 2),
(205, '1915', 'kotesouth', 2),
(206, '2015', 'kotesouth', 2),
(207, '0820', 'kotenorth', 2),
(208, '0830', 'kotenorth', 2),
(209, '0840', 'kotenorth', 2),
(210, '0900', 'kotenorth', 2),
(211, '0915', 'kotenorth', 2),
(212, '0930', 'kotenorth', 2),
(213, '0945', 'kotenorth', 2),
(214, '1000', 'kotenorth', 2),
(215, '1015', 'kotenorth', 2),
(216, '1030', 'kotenorth', 2),
(217, '1045', 'kotenorth', 2),
(218, '1100', 'kotenorth', 2),
(219, '1115', 'kotenorth', 2),
(220, '1130', 'kotenorth', 2),
(221, '1140', 'kotenorth', 2),
(222, '1150', 'kotenorth', 2),
(223, '1210', 'kotesouth', 2),
(224, '1230', 'kotesouth', 2),
(225, '1250', 'kotesouth', 2),
(226, '1310', 'kotesouth', 2),
(227, '1330', 'kotesouth', 2),
(228, '1350', 'kotesouth', 2),
(229, '1400', 'kotesouth', 2),
(230, '1410', 'kotesouth', 2),
(231, '1430', 'kotesouth', 2),
(232, '1450', 'kotesouth', 2),
(233, '1510', 'kotesouth', 2),
(234, '1530', 'kotesouth', 2),
(235, '1550', 'kotesouth', 2),
(236, '1610', 'kotesouth', 2),
(237, '1625', 'kotesouth', 2),
(238, '1645', 'kotesouth', 2),
(239, '1705', 'kotesouth', 2),
(240, '1725', 'kotesouth', 2),
(241, '1745', 'kotesouth', 2),
(242, '1805', 'kotesouth', 2),
(243, '1825', 'kotesouth', 2),
(244, '1845', 'kotesouth', 2),
(245, '1915', 'kotesouth', 2),
(246, '2015', 'kotesouth', 2),
(247, '0855', 'wasenorth', 2),
(248, '0910', 'wasenorth', 2),
(249, '0925', 'wasenorth', 2),
(250, '0940', 'wasenorth', 2),
(251, '0955', 'wasenorth', 2),
(252, '1010', 'wasenorth', 2),
(253, '1025', 'wasenorth', 2),
(254, '1040', 'wasenorth', 2),
(255, '1055', 'wasenorth', 2),
(256, '1110', 'wasenorth', 2),
(257, '1120', 'wasenorth', 2),
(258, '1130', 'wasenorth', 2),
(259, '1155', 'wasesouth', 2),
(260, '1215', 'wasesouth', 2),
(261, '1235', 'wasesouth', 2),
(262, '1255', 'wasesouth', 2),
(263, '1315', 'wasesouth', 2),
(264, '1335', 'wasesouth', 2),
(265, '1345', 'wasesouth', 2),
(266, '1355', 'wasesouth', 2),
(267, '1415', 'wasesouth', 2),
(268, '1435', 'wasesouth', 2),
(269, '1455', 'wasesouth', 2),
(270, '1515', 'wasesouth', 2),
(271, '1535', 'wasesouth', 2),
(272, '1555', 'wasesouth', 2),
(273, '1610', 'wasesouth', 2),
(274, '1630', 'wasesouth', 2),
(275, '1650', 'wasesouth', 2),
(276, '1710', 'wasesouth', 2),
(277, '1730', 'wasesouth', 2),
(278, '1750', 'wasesouth', 2),
(279, '1810', 'wasesouth', 2),
(280, '1830', 'wasesouth', 2),
(281, '1850', 'wasesouth', 2),
(282, '1900', 'wasesouth', 2),
(283, '1930', 'wasesouth', 2),
(284, '2000', 'wasesouth', 2),
(285, '2100', 'wasesouth', 2),
(286, '0830', 'kotenorth', 3),
(287, '0910', 'kotenorth', 3),
(288, '1000', 'kotenorth', 3),
(289, '1100', 'kotenorth', 3),
(290, '1215', 'kotesouth', 3),
(291, '1415', 'kotesouth', 3),
(292, '1515', 'kotesouth', 3),
(293, '1615', 'kotesouth', 3),
(294, '1715', 'kotesouth', 3),
(295, '1815', 'kotesouth', 3),
(296, '1915', 'kotesouth', 3),
(297, '2015', 'kotesouth', 3),
(298, '0850', 'wasenorth', 3),
(299, '0940', 'wasenorth', 3),
(300, '1040', 'wasenorth', 3),
(301, '1200', 'wasesouth', 3),
(302, '1300', 'wasesouth', 3),
(303, '1400', 'wasesouth', 3),
(304, '1500', 'wasesouth', 3),
(305, '1600', 'wasesouth', 3),
(306, '1700', 'wasesouth', 3),
(307, '1800', 'wasesouth', 3),
(308, '1900', 'wasesouth', 3),
(309, '2000', 'wasesouth', 3),
(310, '2100', 'wasesouth', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
