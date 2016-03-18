-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Računalo: localhost
-- Vrijeme generiranja: Stu 27, 2015 u 04:18 PM
-- Verzija poslužitelja: 5.6.12-log
-- PHP verzija: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza podataka: `ruza_vjetrova`
--

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `ruza_vjetrova`
--

CREATE TABLE IF NOT EXISTS `ruza_vjetrova` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `direction` varchar(3) NOT NULL,
  `speed` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=156 ;

--
-- Izbacivanje podataka za tablicu `ruza_vjetrova`
--

INSERT INTO `ruza_vjetrova` (`id`, `time`, `direction`, `speed`) VALUES
(1, '2015-07-31 22:00:00', 'E', 0.2),
(2, '2015-08-01 10:00:00', 'E', 2.3),
(3, '2015-08-01 22:00:00', 'E', 3.2),
(4, '2015-08-02 10:00:00', 'E', 4.2),
(5, '2015-08-02 22:00:00', 'E', 4.6),
(6, '2015-08-03 10:00:00', 'E', 5.7),
(7, '2015-08-03 22:00:00', 'E', 5.6),
(8, '2015-08-04 10:00:00', 'E', 4.2),
(9, '2015-08-04 22:00:00', 'E', 6.1),
(10, '2015-08-05 10:00:00', 'E', 6.4),
(11, '2015-08-05 22:00:00', 'E', 6.9),
(12, '2015-08-06 10:00:00', 'E', 7.2),
(13, '2015-08-06 22:00:00', 'E', 7.8),
(14, '2015-08-07 10:00:00', 'E', 8.2),
(15, '2015-08-07 22:00:00', 'E', 8.7),
(16, '2015-08-08 10:00:00', 'E', 8.7),
(17, '2015-09-16 10:15:41', 'E', 7.5),
(18, '2015-08-09 10:00:00', 'E', 9.5),
(19, '2015-08-09 22:00:00', 'E', 10.2),
(20, '2015-08-10 10:00:00', 'E', 10.1),
(21, '2015-08-10 22:00:00', 'ENE', 0.2),
(22, '2015-08-11 10:00:00', 'ENE', 0.3),
(23, '2015-09-16 09:05:15', 'WNW', 2.2),
(24, '2015-08-12 10:00:00', 'ENE', 3.5),
(25, '2015-09-16 09:01:05', 'WNW', 3.9),
(26, '2015-09-16 09:05:48', 'WNW', 4.2),
(27, '2015-09-16 09:04:17', 'WNW', 5.3),
(28, '2015-08-14 10:00:00', 'ENE', 2.4),
(29, '2015-08-14 22:00:00', 'ENE', 0.4),
(30, '2015-09-16 09:04:34', 'WNW', 3.6),
(31, '2015-09-16 09:04:50', 'WNW', 6.2),
(32, '2015-08-16 10:00:00', 'ENE', 7.2),
(33, '2015-09-16 09:08:06', 'WNW', 8.5),
(34, '2015-09-16 09:06:57', 'WNW', 4.1),
(35, '2015-09-16 09:07:33', 'WNW', 5.1),
(36, '2015-08-18 10:00:00', 'NE', 0.2),
(37, '2015-08-18 22:00:00', 'NE', 0.45),
(38, '2015-09-19 10:00:00', 'NE', 2.2),
(39, '2015-09-19 22:00:00', 'NE', 3.2),
(40, '2015-08-20 10:00:00', 'NE', 5.1),
(41, '2015-09-16 09:11:48', 'N', 5.9),
(42, '2015-08-21 10:00:00', 'NE', 6.2),
(43, '2015-08-21 22:00:00', 'NE', 7.3),
(44, '2015-08-22 10:00:00', 'NE', 7.5),
(45, '2015-08-22 22:00:00', 'NE', 7.9),
(46, '2015-08-23 10:00:00', 'NNE', 0.1),
(47, '2015-08-23 22:00:00', 'NNE', 0.4),
(48, '2015-08-24 10:00:00', 'NNE', 1.5),
(49, '2015-08-24 22:00:00', 'NNE', 1.7),
(50, '2015-08-25 10:00:00', 'NNE', 3.4),
(51, '2015-08-25 22:00:00', 'NNE', 4.2),
(52, '2015-08-26 10:00:00', 'NNE', 5.3),
(53, '2015-08-26 22:00:00', 'NNE', 5.9),
(54, '2015-08-27 10:00:00', 'NNE', 6.7),
(55, '2015-08-27 22:00:00', 'NNE', 7.2),
(56, '2015-08-28 10:00:00', 'N', 0.15),
(57, '2015-09-16 09:09:10', 'S', 0.3),
(58, '2015-09-16 09:09:28', 'S', 1.1),
(59, '2015-08-30 10:00:00', 'N', 1.5),
(60, '2015-08-30 22:00:00', 'NE', 1.2),
(61, '2015-08-31 10:00:00', 'NE', 5.1),
(62, '2015-08-31 22:00:00', 'ENE', 4.2),
(63, '2015-09-01 10:00:00', 'NE', 1.5),
(64, '2015-09-01 22:00:00', 'ENE', 4.1),
(65, '2015-09-02 10:00:00', 'NE', 8.3),
(66, '2015-09-02 22:00:00', 'NE', 2.3),
(67, '2015-09-03 10:00:00', 'NE', 3.1),
(68, '2015-09-03 22:00:00', 'NNE', 3.1),
(69, '2015-09-16 10:03:28', 'ESE', 4.1),
(70, '2015-09-04 22:00:00', 'N', 2.1),
(71, '2015-09-16 09:09:49', 'S', 3.2),
(72, '2015-09-16 09:10:04', 'S', 3.6),
(73, '2015-09-16 09:10:16', 'S', 4.5),
(74, '2015-09-06 22:00:00', 'N', 5.2),
(75, '2015-09-16 09:10:30', 'S', 6.1),
(76, '2015-09-16 09:10:48', 'S', 6.7),
(77, '2015-09-16 09:11:14', 'S', 7.1),
(78, '2015-09-08 22:00:00', 'NNW', 0.2),
(79, '2015-09-09 10:00:00', 'NNW', 0.5),
(80, '2015-09-09 22:00:00', 'NNW', 0.7),
(81, '2015-09-10 10:00:00', 'NNW', 1.1),
(82, '2015-09-10 22:00:00', 'NNW', 1.5),
(83, '2015-09-11 10:00:00', 'NNW', 2.2),
(84, '2015-09-11 22:00:00', 'NNW', 4.2),
(85, '2015-09-12 10:00:00', 'NNW', 5.3),
(86, '2015-09-12 22:00:00', 'NW', 0.2),
(87, '2015-09-13 10:00:00', 'NW', 0.3),
(88, '2015-09-13 22:00:00', 'NW', 1.3),
(89, '2015-09-14 10:00:00', 'NW', 2.1),
(90, '2015-09-14 22:00:00', 'NW', 2.3),
(91, '2015-09-15 10:00:00', 'NW', 4.2),
(92, '2015-09-15 22:00:00', 'NW', 5.1),
(93, '2015-09-16 10:00:00', 'WNW', 0.3),
(94, '2015-06-30 22:00:00', 'WNW', 7.1),
(95, '2015-07-01 10:00:00', 'SW', 0.2),
(96, '2015-07-01 22:00:00', 'SW', 0.1),
(97, '2015-07-02 10:00:00', 'SW', 1.1),
(98, '2015-07-02 22:00:00', 'SW', 1.9),
(99, '2015-07-03 10:00:00', 'SW', 1.8),
(100, '2015-07-03 22:00:00', 'SW', 3.1),
(101, '2015-07-04 10:00:00', 'SW', 3.2),
(102, '2015-07-04 22:00:00', 'SW', 2.5),
(103, '2015-07-05 10:00:00', 'SW', 3.2),
(104, '2015-09-16 09:28:20', 'SW', 8.5),
(105, '2015-07-06 10:00:00', 'SW', 4.5),
(106, '2015-07-06 22:00:00', 'SW', 4.9),
(107, '2015-07-07 10:00:00', 'SW', 5.5),
(108, '2015-07-07 22:00:00', 'SW', 6.8),
(109, '2015-07-08 10:00:00', 'SW', 6.9),
(110, '2015-07-08 22:00:00', 'W', 0.2),
(111, '2015-07-09 10:00:00', 'W', 0.5),
(112, '2015-07-09 22:00:00', 'W', 2.2),
(113, '2015-07-10 10:00:00', 'W', 3.4),
(114, '2015-07-10 22:00:00', 'W', 4.5),
(115, '2015-07-11 10:00:00', 'W', 4.9),
(116, '2015-07-11 22:00:00', 'W', 5.1),
(117, '2015-07-12 10:00:00', 'W', 5.9),
(118, '2015-07-12 22:00:00', 'W', 6.2),
(119, '2015-07-13 10:00:00', 'W', 7.1),
(120, '2015-07-13 22:00:00', 'WSW', 0.2),
(121, '2015-07-14 10:00:00', 'WSW', 1.1),
(122, '2015-07-14 22:00:00', 'WNW', 6.5),
(123, '2015-07-15 10:00:00', 'WNW', 8.2),
(124, '2015-07-15 22:00:00', 'WSW', 3.2),
(125, '2015-07-16 10:00:00', 'WSW', 4.3),
(126, '2015-07-16 22:00:00', 'WSW', 4.5),
(127, '2015-07-17 10:00:00', 'WSW', 5.1),
(128, '2015-07-17 22:00:00', 'SSW', 0.2),
(129, '2015-07-18 10:00:00', 'SSW', 0.45),
(130, '2015-07-18 22:00:00', 'SSW', 0.9),
(131, '2015-07-19 10:00:00', 'SSW', 1.1),
(132, '2015-07-19 22:00:00', 'SSE', 0.3),
(133, '2015-07-20 10:00:00', 'SSE', 0.4),
(134, '2015-07-20 22:00:00', 'SSE', 1.2),
(135, '2015-07-21 10:00:00', 'SSE', 1.5),
(136, '2015-07-21 22:00:00', 'SSE', 2.1),
(137, '2015-07-22 10:00:00', 'SE', 0.1),
(138, '2015-07-22 22:00:00', 'SE', 0.2),
(139, '2015-07-23 10:00:00', 'SE', 0.3),
(140, '2015-07-23 22:00:00', 'SE', 1.1),
(141, '2015-07-24 10:00:00', 'SE', 1.5),
(142, '2015-09-16 09:58:54', 'ESE', 1.7),
(143, '2015-07-25 10:00:00', 'SE', 2.2),
(144, '2015-07-25 22:00:00', 'SE', 2.7),
(145, '2015-07-26 10:00:00', 'SE', 3.3),
(146, '2015-07-26 22:00:00', 'SE', 3.7),
(147, '2015-07-27 10:00:00', 'SE', 4.2),
(148, '2015-07-27 22:00:00', 'SE', 4.3),
(149, '2015-07-28 10:00:00', 'SE', 5.2),
(150, '2015-09-16 09:55:13', 'SE', 6.1),
(151, '2015-07-29 10:00:00', 'SE', 6.2),
(152, '2015-07-29 22:00:00', 'ESE', 0.2),
(153, '2015-09-16 10:00:15', 'ESE', 0.4),
(154, '2015-07-30 22:00:00', 'ESE', 1.5),
(155, '2015-07-31 10:00:00', 'ESE', 2.1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;