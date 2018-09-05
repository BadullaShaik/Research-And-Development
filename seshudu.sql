-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2017 at 08:12 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seshudu`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StudentName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Class` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Rollno` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `StudentName`, `Class`, `email`, `password`, `Rollno`, `created`, `modified`, `status`) VALUES
(1, 'naga', 'raju', 'nagaraju@gmail.com', '98b60f694bf91702ba7695b8f9f1ce31', '9652171969', '2017-06-27 12:42:42', '2017-06-27 12:42:42', '1'),
(2, 'suma', 'mediga', 'suma@gmail.com', '5645061bb6f5b658e5a7e07638ffd897', '7382245719', '2017-06-27 12:46:16', '2017-06-27 12:46:16', '1'),
(3, 'naga', 'seshu', 'naga123@GMAIL.COM', '2df891ddc871c075177589469a926136', '9652369542', '2017-06-28 07:55:28', '2017-06-28 07:55:28', '1'),
(4, 'naga', 'suma', 'nagasuma@gmail.com', '935d4442268f225952b772d18d74462d', '1319A0501', '2017-06-28 08:00:06', '2017-06-28 08:00:06', '1'),
(5, 'Mediga nagaseshudu', 'II M.tech', 'naga13@gmail.com', 'c314b1ef0d9fe25cfb07f873fcf83777', '13191d5815', '2017-06-28 08:14:58', '2017-06-28 08:14:58', '1'),
(7, 'suma', 'ii B.Tech', 'suma123@gmail.com', 'de2dff113465469b988b0240a9d549b9', '17191A0503', '2017-06-28 08:21:46', '2017-06-28 08:21:46', '1'),
(8, 'Niranjan', 'II M.tech', 'niranjan@gmail.com', 'a12f258436518f0ee3e12e9b2ba3827e', '13191D5819', '2017-06-28 09:02:55', '2017-06-28 09:02:55', '1'),
(9, 'Mediga Nagaseshudu', 'IV B.Tech', 'nagaseshudu@gmail.com', '6ff022aeef8940a469627afb38d42d28', '14191A0520', '2017-06-28 12:40:28', '2017-06-28 12:40:28', '1'),
(10, 'Mediga Nagaseshudu', 'IV B.Tech', 'nagaseshudu1000@gmail.com', '6ff022aeef8940a469627afb38d42d28', '14191A0523', '2017-06-28 12:48:34', '2017-06-28 12:48:34', '1'),
(11, 'NagaRaju', 'II B.tech', 'nagaraju123@gmail.com', '6848fb690410c09a85782b4ea1044854', '16191A0520', '2017-06-28 13:00:10', '2017-06-28 13:00:10', '1'),
(12, 'Mediga Sumathi', 'I B.Tech', 'sumathi@gmail.com', '5645061bb6f5b658e5a7e07638ffd897', '17191A0507', '2017-06-29 05:02:42', '2017-06-29 05:02:42', '1'),
(13, 'Mediga Sumathi', 'I B.Tech', 'sumathi123@gmail.com', '9f6eac301df040a18a981401fc07c893', '17191A0510', '2017-07-10 11:46:36', '2017-07-10 11:46:36', '1'),
(14, 'Ramohan', 'I B.Tech', 'ramamohan@gmail.com', '6d6c4c7a2169b05d09d444869149f6d5', '17191A0510', '2017-07-10 11:58:09', '2017-07-10 11:58:09', '1'),
(15, 'Mediga Surekha', 'I B.Tech', 'surekha123@gmail.com', '4b804b717ea23039ee3ebb86edeccd56', '17191A0509', '2017-07-18 07:07:12', '2017-07-18 07:07:12', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE IF NOT EXISTS `users2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StudentName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Class` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Rollno` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id`, `StudentName`, `Class`, `email`, `password`, `Rollno`, `created`, `modified`, `status`) VALUES
(1, 'Mediga Pullamma', 'II B.tech', 'pullamma@yahoo.co.in', 'c4ec29042bbc9d7ec7391fcbae4719d3', '16191A0521', '2017-06-28 14:57:44', '2017-06-28 14:57:44', '1'),
(2, 'Mediga Supriya', 'II B.tech', 'supriya@gmail.com', '22c5806de7109d4237cbce7a359d113e', '15191A0522', '2017-06-28 14:59:24', '2017-06-28 14:59:24', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users3`
--

CREATE TABLE IF NOT EXISTS `users3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StudentName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Class` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Rollno` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users3`
--

INSERT INTO `users3` (`id`, `StudentName`, `Class`, `email`, `password`, `Rollno`, `created`, `modified`, `status`) VALUES
(1, 'Mediga NagaRaju', 'III B.Tech', 'nagaraju@gmail.com', '6848fb690410c09a85782b4ea1044854', '15191A0520', '2017-06-28 13:11:19', '2017-06-28 13:11:19', '1'),
(2, 'Mediga Sudha', 'III B.Tech', 'medigasudha@gmail.com', 'a12f258436518f0ee3e12e9b2ba3827e', '15191A0521', '2017-06-28 14:56:17', '2017-06-28 14:56:17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users4`
--

CREATE TABLE IF NOT EXISTS `users4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StudentName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Class` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Rollno` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users4`
--

INSERT INTO `users4` (`id`, `StudentName`, `Class`, `email`, `password`, `Rollno`, `created`, `modified`, `status`) VALUES
(1, 'Mediga Nagaseshudu', 'IV B.Tech', 'nagaseshudu1000@gmail.com', '5645061bb6f5b658e5a7e07638ffd897', '14191A0523', '2017-06-28 13:07:54', '2017-06-28 13:07:54', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
