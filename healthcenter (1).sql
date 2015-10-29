-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2014 at 06:11 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `healthcenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminmaster`
--

CREATE TABLE IF NOT EXISTS `adminmaster` (
`ID` int(10) NOT NULL,
  `AdminName` varchar(255) NOT NULL,
  `AdminPass` text NOT NULL,
  `AdminCity` varchar(255) NOT NULL,
  `AdminAdd1` varchar(255) NOT NULL,
  `AdminAdd2` varchar(255) NOT NULL,
  `AdminEmail` varchar(255) NOT NULL,
  `AdminDOB` date NOT NULL,
  `AdminNote` text NOT NULL,
  `AdminState` varchar(255) NOT NULL,
  `AdminZip` int(10) NOT NULL,
  `AdminPhone` varchar(255) NOT NULL,
  `IsMasterAdmin` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminmaster`
--

INSERT INTO `adminmaster` (`ID`, `AdminName`, `AdminPass`, `AdminCity`, `AdminAdd1`, `AdminAdd2`, `AdminEmail`, `AdminDOB`, `AdminNote`, `AdminState`, `AdminZip`, `AdminPhone`, `IsMasterAdmin`) VALUES
(1, 'Vijay jain', '12345678', 'Long Beach', 'Ximeno Ave', 'here', 'vijay@yahoo.com', '2014-12-09', '', 'CA', 90815, '5625926969', 1),
(2, 'Keyur Kamdar', '1234', 'Long Beach', 'Ximeno Ave', '', 'keyur@yahoo.com', '2014-12-23', 'sfdfd', 'CA', 90815, '2011234567', 0);

-- --------------------------------------------------------

--
-- Table structure for table `adminrights`
--

CREATE TABLE IF NOT EXISTS `adminrights` (
`ID` int(10) NOT NULL,
  `AdminID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointmentmaster`
--

CREATE TABLE IF NOT EXISTS `appointmentmaster` (
`AppointmentID` int(10) NOT NULL,
  `Speciality` text NOT NULL,
  `StudentID` int(10) NOT NULL,
  `Reason` text NOT NULL,
  `AppointmentDate` date NOT NULL,
  `AppointmentTime` time NOT NULL,
  `Campaign` text NOT NULL,
  `Actions` text NOT NULL,
  `Notes` text NOT NULL,
  `IsCancel` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmentmaster`
--

INSERT INTO `appointmentmaster` (`AppointmentID`, `Speciality`, `StudentID`, `Reason`, `AppointmentDate`, `AppointmentTime`, `Campaign`, `Actions`, `Notes`, `IsCancel`) VALUES
(1, 'b fg fg', 8, 'bgb gbg', '2014-11-04', '08:00:00', '', 'brtbrtbrtbrtbtrbrtrtrnr', 'nrnrrnrynyntynry', 1),
(11, 'anything', 123456789, 'visit', '2014-12-13', '00:00:12', '12', '12', '12', 1),
(12, 'adads', 123456789, 'sad', '2014-12-17', '00:00:13', 'sad', 'das', 'das', 1),
(13, 'hjhjjj', 123456789, 'hjshdj', '2014-12-24', '00:00:12', 'q122', 'dfdf', 'dfdf', 1),
(15, 'jjh', 123456789, 'sdsf', '2014-12-16', '00:00:12', 'dfgfg', 'fgfg', 'fgfg', 1),
(16, 'ksfkj', 123456789, 'dkjfdk', '2014-12-18', '03:34:00', 'sfd', 'dfdf', 'dfdf', 1),
(17, 'kjjkk', 123456789, 'sdkj', '2014-12-19', '15:34:00', 'dfdfdf', 'dfdfdfdf', 'dfdf', 1),
(18, 'kjddkfj', 123456789, 'skdjk', '2014-12-20', '13:02:00', 'dfdf', 'dfdf', 'dfdf', 1),
(19, 'hjhj', 2, 'hjhj', '2014-12-10', '12:05:00', 'sfdf', 'ddf', 'ddgdf', 0),
(20, '898', 123456789, '898', '2014-12-08', '14:01:00', 'swd', 'dfdf', 'dfdf', 0),
(21, '898', 123456789, '898', '2014-12-08', '14:01:00', 'swd', 'dfdf', 'dfdf', 0),
(23, 'dfd', 123456789, 'sdf', '2014-12-01', '04:01:00', 'fdf', 'dfdfdfdf', 'dfdfd', 0),
(24, 'dfd', 123456789, 'sdf', '2014-12-01', '04:01:00', 'fdf', 'dfdfdfdf', 'dfdfd', 0),
(25, 'hjhjh', 8, 'shh', '2014-12-10', '14:05:00', 'ffd', 'fdf', 'dfdfd', 0),
(27, 'dfd', 8, 'sfd', '2014-12-09', '03:01:00', 'dfdfdf', 'ddf', 'dgf', 0),
(28, 'jkjk', 8, 'kjkjkj', '2014-12-02', '15:04:00', 'dgfgf', 'gfgf', 'gfghhg', 0),
(31, 'vijay shrenikraj', 121212, 'mdnbadn', '2015-01-10', '01:00:00', 'vijay shrenikraj', 'vijay shrenikraj', 'vijay shrenikraj', 1),
(32, 'asgdahjsgd', 121212, 'sadhsahdg', '2013-12-30', '12:21:21', 'gasf', 'jahsgdjas', 'asgdjhasg', 0),
(33, 'jhgasdas', 121212, '1111', '2014-12-12', '12:59:00', 'asdmn', 'sd', 'jasd', 1),
(34, 'dfds', 121212, 'jhashgd', '2014-12-26', '11:58:00', 'sdf', 'gfhjgsd', 'jhgsjdfhg', 0),
(35, 'jhgasdjhgasj', 121212, 'dfhsdhfg', '2015-11-01', '00:58:00', 'gsdf', 'jhd', 'jshdf', 0),
(36, 'jahsd', 121212, 'sand', '2014-12-18', '12:58:00', 'ag', 'jhasdjha', 'hs', 0),
(38, 'hjgd', 14, 'fhg', '2014-12-25', '02:00:00', 'sdfjh', 'jdfh', 'f', 0),
(41, 'fgdgfd', 121212, 'gfhgf', '2014-12-18', '13:00:00', 'gfg', 'gfd', 'ffgd', 0),
(42, 'jhjghj', 121212, 'gfgf', '2014-12-18', '12:59:00', 'hgf', 'gfhg', 'hgf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emailmaster`
--

CREATE TABLE IF NOT EXISTS `emailmaster` (
`EmailID` int(10) NOT NULL,
  `EmailText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emailqueue`
--

CREATE TABLE IF NOT EXISTS `emailqueue` (
`id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `template_id` varchar(10) NOT NULL,
  `is_sent` int(10) NOT NULL DEFAULT '0',
  `error_log` text NOT NULL,
  `Type` varchar(255) NOT NULL DEFAULT 'Appointment',
  `appointmentID` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailqueue`
--

INSERT INTO `emailqueue` (`id`, `student_id`, `template_id`, `is_sent`, `error_log`, `Type`, `appointmentID`) VALUES
(1, 8, '142', 1, '', 'Appointment', 1),
(2, 2, '142', 1, '', 'Appointment', 19),
(3, 8, '142', 1, '', 'Appointment', 28),
(4, 8, '142', 1, '', 'Appointment', 28),
(5, 8, '143', 1, '', 'BirthDay', 0),
(6, 2, '143', 1, '', 'BirthDay', 0),
(7, 2, '143', 1, '', 'BirthDay', 0),
(8, 2, '143', 1, '', 'BirthDay', 0),
(9, 8, '143', 1, '', 'BirthDay', 0),
(10, 0, '143', 0, '', 'BirthDay', 0),
(11, 0, '143', 0, '', 'BirthDay', 0),
(12, 0, '143', 0, '', 'BirthDay', 0),
(13, 0, '143', 0, '', 'BirthDay', 0),
(14, 0, '143', 0, '', 'BirthDay', 0),
(15, 0, '143', 0, '', 'BirthDay', 0),
(16, 0, '143', 0, '', 'BirthDay', 0),
(17, 0, '143', 0, '', 'BirthDay', 0),
(18, 14, '143', 0, '', 'BirthDay', 0),
(19, 14, '143', 0, '', 'BirthDay', 0),
(20, 989898, '143', 0, '', 'BirthDay', 0),
(21, 14, '142', 0, '', 'Appointment', 38),
(22, 121212, '142', 0, '', 'Appointment', 41),
(23, 121212, '142', 0, '', 'Appointment', 42);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`EventID` int(11) NOT NULL,
  `EventName` varchar(100) NOT NULL,
  `EventVenue` text NOT NULL,
  `EventDate` date NOT NULL,
  `EventTime` time NOT NULL,
  `EventDetails` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventID`, `EventName`, `EventVenue`, `EventDate`, `EventTime`, `EventDetails`) VALUES
(1, 'new', 'dfdshg', '2014-12-25', '00:00:00', 'sdfm');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackmaster`
--

CREATE TABLE IF NOT EXISTS `feedbackmaster` (
`ID` int(10) NOT NULL,
  `FeedbackPath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groupmaster`
--

CREATE TABLE IF NOT EXISTS `groupmaster` (
`GroupID` int(10) NOT NULL,
  `GroupName` varchar(100) NOT NULL,
  `GroupDescription` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupmaster`
--

INSERT INTO `groupmaster` (`GroupID`, `GroupName`, `GroupDescription`) VALUES
(1, 'pat', 'bhai'),
(41, '------', '------');

-- --------------------------------------------------------

--
-- Table structure for table `sentstudentemail`
--

CREATE TABLE IF NOT EXISTS `sentstudentemail` (
`ID` int(10) NOT NULL,
  `StudentID` int(10) NOT NULL,
  `EmailID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settingmaster`
--

CREATE TABLE IF NOT EXISTS `settingmaster` (
`ID` int(10) NOT NULL,
  `SettingName` varchar(255) NOT NULL,
  `SettingValue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE IF NOT EXISTS `sms` (
`id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `carrier` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=366 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `name`, `carrier`) VALUES
(25, '3 River Wireless', 'sms.3rivers.net'),
(26, '7-11 Speakout (USA GSM)', 'number@cingularme.com'),
(27, 'ACS Wireless', 'paging.acswireless.com'),
(28, 'Advantage Communications', 'advantagepaging.com'),
(29, 'Airtel (Karnataka, India)', 'number@airtelkk.com'),
(30, 'Airtel Wireless (Montana, USA)', 'number@sms.airtelmontana.com'),
(31, 'Airtouch Pagers', 'airtouch.net'),
(32, 'Airtouch Pagers', 'airtouchpaging.com'),
(33, 'Airtouch Pagers', 'alphapage.airtouch.com'),
(34, 'Airtouch Pagers', 'myairmail.com'),
(35, 'Alaska Communications Systems', 'number@msg.acsalaska.com'),
(36, 'Alltel', 'message.alltel.com'),
(37, 'Alltel PCS', 'message.alltel.com'),
(38, 'AlphaNow', 'alphanow.net'),
(39, 'AlphNow', 'pin@alphanow.net'),
(40, 'American Messaging', 'page.americanmessaging.net'),
(41, 'American Messaging (SBC/Ameritech)', 'page.americanmessaging.net'),
(42, 'Ameritech Clearpath', 'clearpath.acswireless.com'),
(43, 'Ameritech Paging', 'paging.acswireless.com'),
(44, 'Ameritech Paging (see also American Messaging)', 'pageapi.com'),
(45, 'Ameritech Paging (see also American Messaging)', 'paging.acswireless.com'),
(46, 'Andhra Pradesh Airtel', 'airtelap.com'),
(47, 'Aql', 'number@text.aql.com'),
(48, 'Arch Pagers (PageNet)', 'archwireless.net'),
(49, 'Arch Pagers (PageNet)', 'epage.arch.com'),
(50, 'AT&T', 'mobile.att.net'),
(51, 'AT&T', 'txt.att.net'),
(52, 'AT&T Enterprise Paging', 'number@page.att.net'),
(53, 'AT&T Free2Go', 'mmode.com'),
(54, 'AT&T PCS', 'mobile.att.net'),
(55, 'AT&T Pocketnet PCS', 'dpcs.mobile.att.net'),
(56, 'BeeLine GSM', 'sms.beemail.ru'),
(57, 'Beepwear', 'beepwear.net'),
(58, 'Bell Atlantic', 'message.bam.com'),
(59, 'Bell Canada', 'bellmobility.ca'),
(60, 'Bell Canada', 'txt.bellmobility.ca'),
(61, 'Bell Mobility', 'txt.bellmobility.ca'),
(62, 'Bell Mobility & Solo Mobile (Canada)', 'number@txt.bell.ca'),
(63, 'Bell Mobility (Canada)', 'txt.bell.ca'),
(64, 'Bell South', 'bellsouth.cl'),
(65, 'Bell South', 'blsdcs.net'),
(66, 'Bell South', 'sms.bellsouth.com'),
(67, 'Bell South', 'wireless.bellsouth.com'),
(68, 'Bell South (Blackberry)', 'bellsouthtips.com'),
(69, 'Bell South Mobility', 'blsdcs.net'),
(70, 'BigRedGiant Mobile Solutions', 'number@tachyonsms.co.uk'),
(71, 'Blue Sky Frog', 'blueskyfrog.com'),
(72, 'Bluegrass Cellular', 'sms.bluecell.com'),
(73, 'Boost', 'myboostmobile.com'),
(74, 'Boost Mobile', 'myboostmobile.com'),
(75, 'BPL Mobile', 'bplmobile.com'),
(76, 'BPL Mobile (Mumbai, India)', 'number@bplmobile.com'),
(77, 'Carolina Mobile Communications', 'cmcpaging.com'),
(78, 'Carolina West Wireless', 'cwwsms.com'),
(79, 'Cellular One', 'cell1.textmsg.com'),
(80, 'Cellular One', 'cellularone.textmsg.com'),
(81, 'Cellular One', 'cellularone.txtmsg.com'),
(82, 'Cellular One', 'message.cellone-sf.com'),
(83, 'Cellular One', 'mobile.celloneusa.com'),
(84, 'Cellular One', 'sbcemail.com'),
(85, 'Cellular One (Dobson)', 'number@mobile.celloneusa.com'),
(86, 'Cellular One (East Coast)', 'phone.cellone.net'),
(87, 'Cellular One (South West)', 'swmsg.com'),
(88, 'Cellular One (West)', 'mycellone.com'),
(89, 'Cellular One East Coast', 'phone.cellone.net'),
(90, 'Cellular One PCS', 'paging.cellone-sf.com'),
(91, 'Cellular One South West', 'swmsg.com'),
(92, 'Cellular One West', 'mycellone.com'),
(93, 'Cellular South', 'csouth1.com'),
(94, 'Centennial Wireless', 'cwemail.com'),
(95, 'Centennial Wireless', 'number@cwemail.com'),
(96, 'Central Vermont Communications', 'cvcpaging.com'),
(97, 'CenturyTel', 'messaging.centurytel.net'),
(98, 'CenturyTel', 'messaging.centurytel.net'),
(99, 'Chennai RPG Cellular', 'rpgmail.net'),
(100, 'Chennai Skycell / Airtel', 'airtelchennai.com'),
(101, 'Cincinnati Bell', 'gocbw.com'),
(102, 'Cincinnati Bell Wireless', 'gocbw.com'),
(103, 'Cingular', 'cingularme.com'),
(104, 'Cingular', 'mms.cingularme.com'),
(105, 'Cingular', 'mycingular.com'),
(106, 'Cingular', 'mycingular.net'),
(107, 'Cingular', 'page.cingular.com'),
(108, 'Cingular (GoPhone prepaid)', 'number@cingularme.com  (SMS)'),
(109, 'Cingular (Now AT&T)', 'txt.att.net'),
(110, 'Cingular (Postpaid)', 'number@cingularme.com'),
(111, 'Cingular Wireless', 'mobile.mycingular.com'),
(112, 'Cingular Wireless', 'mobile.mycingular.net'),
(113, 'Cingular Wireless', 'mycingular.textmsg.com'),
(114, 'Claro (Brasil)', 'number@clarotorpedo.com.br'),
(115, 'Claro (Nicaragua)', 'number@ideasclaro-ca.com'),
(116, 'Clearnet', 'msg.clearnet.com'),
(117, 'Comcast', 'comcastpcs.textmsg.com'),
(118, 'Comcel', 'number@comcel.com.co'),
(119, 'Communication Specialist Companies', 'pin@pager.comspeco.com'),
(120, 'Communication Specialists', '7digitpin@pageme.comspeco.net'),
(121, 'Communication Specialists', 'pageme.comspeco.net'),
(122, 'Comviq', 'sms.comviq.se'),
(123, 'Cook Paging', 'cookmail.com'),
(124, 'Corr Wireless Communications', 'corrwireless.net'),
(125, 'Cricket', 'number@sms.mycricket.com  (SMS)'),
(126, 'Cricket Wireless', 'sms.mycricket.com'),
(127, 'CTI', 'number@sms.ctimovil.com.ar'),
(128, 'Delhi Aritel', 'airtelmail.com'),
(129, 'Delhi Hutch', 'delhi.hutch.co.in'),
(130, 'Digi-Page / Page Kansas', 'page.hit.net'),
(131, 'Dobson', 'mobile.dobson.net'),
(132, 'Dobson Cellular Systems', 'mobile.dobson.net'),
(133, 'Dobson-Alex Wireless / Dobson-Cellular One', 'mobile.cellularone.com'),
(134, 'DT T-Mobile', 't-mobile-sms.de'),
(135, 'Dutchtone / Orange-NL', 'sms.orange.nl'),
(136, 'Edge Wireless', 'sms.edgewireless.com'),
(137, 'EMT', 'sms.emt.ee'),
(138, 'Emtel (Mauritius)', 'number@emtelworld.net'),
(139, 'Escotel', 'escotelmobile.com'),
(140, 'Fido', 'fido.ca'),
(141, 'Fido (Canada)', 'number@fido.ca'),
(142, 'Gabriel Wireless', 'epage.gabrielwireless.com'),
(143, 'Galaxy Corporation', 'sendabeep.net'),
(144, 'GCS Paging', 'webpager.us'),
(145, 'General Communications Inc.', 'number@msg.gci.net'),
(146, 'German T-Mobile', 't-mobile-sms.de'),
(147, 'Globalstar (satellite)', 'number@msg.globalstarusa.com'),
(148, 'Goa BPLMobil', 'bplmobile.com'),
(149, 'Golden Telecom', 'sms.goldentele.com'),
(150, 'GrayLink / Porta-Phone', 'epage.porta-phone.com'),
(151, 'GTE', 'airmessage.net'),
(152, 'GTE', 'gte.pagegate.net'),
(153, 'GTE', 'messagealert.com'),
(154, 'Gujarat Celforce', 'celforce.com'),
(155, 'Helio', 'messaging.sprintpcs.com'),
(156, 'Helio', 'number@messaging.sprintpcs.com'),
(157, 'Houston Cellular', 'text.houstoncellular.net'),
(158, 'i wireless', 'number.iws@iwspcs.net'),
(159, 'Idea Cellular', 'ideacellular.net'),
(160, 'Illinois Valley Cellular', 'ivctext.com'),
(161, 'Illinois Valley Cellular', 'number@ivctext.com'),
(162, 'Indiana Paging Co', 'inlandlink.com'),
(163, 'Infopage Systems', 'page.infopagesystems.com'),
(164, 'Infopage Systems', 'pinnumber@page.infopagesystems.com'),
(165, 'Inland Cellular Telephone', 'inlandlink.com'),
(166, 'Iridium (satellite)', 'number@msg.iridium.com'),
(167, 'Iusacell', 'number@rek2.com.mx'),
(168, 'JSM Tele-Page', 'jsmtel.com'),
(169, 'JSM Tele-Page', 'pinnumber@jsmtel.com'),
(170, 'Kerala Escotel', 'escotelmobile.com'),
(171, 'Kolkata Airtel', 'airtelkol.com'),
(172, 'Koodo Mobile (Canada)', 'number@msg.koodomobile.com'),
(173, 'Kyivstar', 'smsmail.lmt.lv'),
(174, 'Lauttamus Communication', 'e-page.net'),
(175, 'LMT', 'smsmail.lmt.lv'),
(176, 'LMT (Latvia)', 'number@sms.lmt.lv'),
(177, 'Maharashtra BPL Mobile', 'bplmobile.com'),
(178, 'Maharashtra Idea Cellular', 'ideacellular.net'),
(179, 'Manitoba Telecom Systems', 'text.mtsmobility.com'),
(180, 'MCI', 'pagemci.com'),
(181, 'MCI Phone', 'mci.com'),
(182, 'Mero Mobile (Nepal)', '977number@sms.spicenepal.com'),
(183, 'Meteor', 'mymeteor.ie'),
(184, 'Meteor', 'sms.mymeteor.ie'),
(185, 'Meteor (Ireland)', 'number@sms.mymeteor.ie'),
(186, 'Metro PCS', 'metropcs.sms.us'),
(187, 'Metro PCS', 'mymetropcs.com'),
(188, 'Metro PCS', 'mymetropcs.com,  metropcs.sms.us'),
(189, 'Metrocall', 'page.metrocall.com'),
(190, 'Metrocall 2-way', 'my2way.com'),
(191, 'MetroPCS', 'number@mymetropcs.com'),
(192, 'Microcell', 'fido.ca'),
(193, 'Midwest Wireless', 'clearlydigital.com'),
(194, 'MiWorld', 'm1.com.sg'),
(195, 'Mobilcomm', 'mobilecomm.net'),
(196, 'Mobilecom PA', 'page.mobilcom.net'),
(197, 'Mobilecomm', 'mobilecomm.net'),
(198, 'Mobileone', 'm1.com.sg'),
(199, 'Mobilfone', 'page.mobilfone.com'),
(200, 'Mobility Bermuda', 'ml.bm'),
(201, 'MobiPCS (Hawaii only)', 'number@mobipcs.net'),
(202, 'Mobistar Belgium', 'mobistar.be'),
(203, 'Mobitel (Sri Lanka)', 'number@sms.mobitel.lk'),
(204, 'Mobitel Tanzania', 'sms.co.tz'),
(205, 'Mobtel Srbija', 'mobtel.co.yu'),
(206, 'Morris Wireless', 'beepone.net'),
(207, 'Motient', 'isp.com'),
(208, 'Movicom (Argentina)', 'number@sms.movistar.net.ar'),
(209, 'Movistar', 'correo.movistar.net'),
(210, 'Movistar (Colombia)', 'number@movistar.com.co'),
(211, 'MTN (South Africa)', 'number@sms.co.za'),
(212, 'MTS', 'text.mtsmobility.com'),
(213, 'MTS (Canada)', 'number@text.mtsmobility.com'),
(214, 'Mumbai BPL Mobile', 'bplmobile.com'),
(215, 'Mumbai Orange', 'orangemail.co.in'),
(216, 'NBTel', 'wirefree.informe.ca'),
(217, 'Netcom', 'sms.netcom.no'),
(218, 'Nextel', 'messaging.nextel.com'),
(219, 'Nextel', 'nextel.com.br'),
(220, 'Nextel', 'page.nextel.com'),
(221, 'Nextel (Argentina)', 'TwoWay.11number@nextel.net.ar'),
(222, 'Nextel (United States)', 'number@messaging.nextel.com'),
(223, 'Northeast Paging', 'pager.ucom.com'),
(224, 'NPI Wireless', 'npiwireless.com'),
(225, 'Ntelos', 'pcs.ntelos.com'),
(226, 'O2', 'o2.co.uk'),
(227, 'O2', 'o2imail.co.uk'),
(228, 'O2 (M-mail)', 'mmail.co.uk'),
(229, 'Omnipoint', 'omnipoint.com'),
(230, 'Omnipoint', 'omnipointpcs.com'),
(231, 'One Connect Austria', 'onemail.at'),
(232, 'OnlineBeep', 'onlinebeep.net'),
(233, 'Optus Mobile', 'optusmobile.com.au'),
(234, 'Orange', 'orange.net'),
(235, 'Orange - NL / Dutchtone', 'sms.orange.nl'),
(236, 'Orange Mumbai', 'orangemail.co.in'),
(237, 'Orange NL / Dutchtone', 'sms.orange.nl'),
(238, 'Orange Polska (Poland)', '9digit@orange.pl'),
(239, 'Oskar', 'mujoskar.cz'),
(240, 'P&T Luxembourg', 'sms.luxgsm.lu'),
(241, 'Pacific Bell', 'pacbellpcs.net'),
(242, 'PageMart', '7digitpinnumber@pagemart.net'),
(243, 'PageMart Advanced /2way', 'airmessage.net'),
(244, 'PageMart Canada', 'pmcl.net'),
(245, 'PageNet Canada', 'e.pagenet.ca'),
(246, 'PageNet Canada', 'pagegate.pagenet.ca'),
(247, 'PageOne NorthWest', 'page1nw.com'),
(248, 'PCS One', 'pcsone.net'),
(249, 'Personal (Argentina)', 'number@alertas.personal.com.ar'),
(250, 'Personal Communication', 'sms@pcom.ru (number in subject line)'),
(251, 'Personal Communication', 'sms@pcom.ru (put the number in the subject line)'),
(252, 'Pioneer / Enid Cellular', 'msg.pioneerenidcellular.com'),
(253, 'Plus GSM (Poland)', '+48number@text.plusgsm.pl'),
(254, 'PlusGSM', 'text.plusgsm.pl'),
(255, 'Pondicherry BPL Mobile', 'bplmobile.com'),
(256, 'Powertel', 'voicestream.net'),
(257, 'President’s Choice (Canada)', 'number@txt.bell.ca'),
(258, 'Price Communications', 'mobilecell1se.com'),
(259, 'Primeco', 'email.uscc.net'),
(260, 'Primtel', 'sms.primtel.ru'),
(261, 'ProPage', '7digitpagernumber@page.propage.net'),
(262, 'Public Service Cellular', 'sms.pscel.com'),
(263, 'Qualcomm', 'name@pager.qualcomm.com'),
(264, 'Qwest', 'number@qwestmp.com'),
(265, 'Qwest', 'qwestmp.com'),
(266, 'RAM Page', 'ram-page.com'),
(267, 'Rogers', 'pcs.rogers.com'),
(268, 'Rogers (Canada)', 'number@pcs.rogers.com'),
(269, 'Rogers AT&T Wireless', 'pcs.rogers.com'),
(270, 'Rogers Canada', 'pcs.rogers.com'),
(271, 'Safaricom', 'safaricomsms.com'),
(272, 'Sasktel (Canada)', 'number@sms.sasktel.com'),
(273, 'Satelindo GSM', 'satelindogsm.com'),
(274, 'Satellink', '.pageme@satellink.net'),
(275, 'Satellink', 'satellink.net'),
(276, 'SBC Ameritech Paging', 'paging.acswireless.com'),
(277, 'SBC Ameritech Paging (see also American Messaging)', 'paging.acswireless.com'),
(278, 'SCS-900', 'phonenumber@scs-900.ru'),
(279, 'SCS-900', 'scs-900.ru'),
(280, 'Setar Mobile email (Aruba)', '297+number@mas.aw'),
(281, 'SFR France', 'sfr.fr'),
(282, 'Simple Freedom', 'text.simplefreedom.net'),
(283, 'Skytel Pagers', '7digitpinnumber@skytel.com'),
(284, 'Skytel Pagers', 'email.skytel.com'),
(285, 'SL Interactive (Australia)', 'number@slinteractive.com.au'),
(286, 'Smart Telecom', 'mysmart.mymobile.ph'),
(287, 'Solo Mobile', 'txt.bell.ca'),
(288, 'Southern LINC', 'page.southernlinc.com'),
(289, 'Southwestern Bell', 'email.swbw.com'),
(290, 'Sprint', 'cingularme.com,  messaging.sprintpcs.com'),
(291, 'Sprint', 'messaging.sprintpcs.com'),
(292, 'Sprint', 'sprintpaging.com'),
(293, 'Sprint PCS', 'messaging.sprintpcs.com'),
(294, 'ST Paging', 'pin@page.stpaging.com'),
(295, 'Sumcom', 'tms.suncom.com'),
(296, 'Suncom', 'number@tms.suncom.com'),
(297, 'SunCom', 'suncom1.com'),
(298, 'Suncom', 'tms.suncom.com'),
(299, 'Sunrise Mobile', 'freesurf.ch'),
(300, 'Sunrise Mobile', 'mysunrise.ch'),
(301, 'Sunrise Mobile', 'swmsg.com'),
(302, 'Surewest Communicaitons', 'mobile.surewest.com'),
(303, 'Surewest Communications', 'freesurf.ch'),
(304, 'Swisscom', 'bluewin.ch'),
(305, 'Tamil Nadu BPL Mobile', 'bplmobile.com'),
(306, 'Tele2 Latvia', 'sms.tele2.lv'),
(307, 'Telefonica Movistar', 'movistar.net'),
(308, 'Telenor', 'mobilpost.no'),
(309, 'Teletouch', 'pageme.teletouch.com'),
(310, 'Telia Denmark', 'gsm1800.telia.dk'),
(311, 'Telus', 'msg.telus.com'),
(312, 'Telus Mobility (Canada)', 'number@msg.telus.com'),
(313, 'The Indiana Paging Co', 'last4digits@pager.tdspager.com'),
(314, 'Thumb Cellular', 'number@sms.thumbcellular.com'),
(315, 'Tigo (Formerly Ola)', 'number@sms.tigo.com.co'),
(316, 'TIM', 'timnet.com'),
(317, 'T-Mobile', 'tmomail.net'),
(318, 'T-Mobile', 'voicestream.net'),
(319, 'T-Mobile (Austria)', 'number@sms.t-mobile.at'),
(320, 'T-Mobile (UK)', 'number@t-mobile.uk.net'),
(321, 'T-Mobile Austria', 'sms.t-mobile.at'),
(322, 'T-Mobile Germany', 't-d1-sms.de'),
(323, 'T-Mobile UK', 't-mobile.uk.net'),
(324, 'Tracfone', 'txt.att.net'),
(325, 'Tracfone (prepaid)', 'number@mmst5.tracfone.com'),
(326, 'Triton', 'tms.suncom.com'),
(327, 'TSR Wireless', 'alphame.com'),
(328, 'TSR Wireless', 'beep.com'),
(329, 'U.S. Cellular', 'email.uscc.net'),
(330, 'UCOM', 'pager.ucom.com'),
(331, 'UMC', 'sms.umc.com.ua'),
(332, 'Unicel', 'number@utext.com'),
(333, 'Unicel', 'utext.com'),
(334, 'Uraltel', 'sms.uraltel.ru'),
(335, 'US Cellular', 'email.uscc.net'),
(336, 'US Cellular', 'smtp.uscc.net'),
(337, 'US Cellular', 'uscc.textmsg.com'),
(338, 'US West', 'uswestdatamail.com'),
(339, 'Uttar Pradesh Escotel', 'escotelmobile.com'),
(340, 'Verizon', 'vtext.com'),
(341, 'Verizon Pagers', 'myairmail.com'),
(342, 'Verizon PCS', 'myvzw.com'),
(343, 'Verizon PCS', 'vtext.com'),
(344, 'Vessotel', 'pager.irkutsk.ru'),
(345, 'Virgin Mobile', 'vmobl.com'),
(346, 'Virgin Mobile', 'vxtras.com'),
(347, 'Virgin Mobile (Canada)', 'number@vmobile.ca'),
(348, 'Virgin Mobile Canada', 'vmobile.ca'),
(349, 'Vodacom (South Africa)', 'number@voda.co.za'),
(350, 'Vodafone (Italy)', 'number@sms.vodafone.it'),
(351, 'Vodafone Italy', 'sms.vodafone.it'),
(352, 'Vodafone Japan', 'c.vodafone.ne.jp'),
(353, 'Vodafone Japan', 'h.vodafone.ne.jp'),
(354, 'Vodafone Japan', 't.vodafone.ne.jp'),
(355, 'Vodafone UK', 'vodafone.net'),
(356, 'VoiceStream', 'voicestream.net'),
(357, 'VoiceStream / T-Mobile', 'voicestream.net'),
(358, 'WebLink Wiereless', 'airmessage.net'),
(359, 'WebLink Wiereless', 'pagemart.net'),
(360, 'WebLink Wireless', 'airmessage.net'),
(361, 'WebLink Wireless', 'pagemart.net'),
(362, 'West Central Wireless', 'sms.wcc.net'),
(363, 'Western Wireless', 'cellularonewest.com'),
(364, 'Wyndtell', 'wyndtell.com'),
(365, 'YCC', 'number@sms.ycc.ru');

-- --------------------------------------------------------

--
-- Table structure for table `studentgroups`
--

CREATE TABLE IF NOT EXISTS `studentgroups` (
`ID` int(10) NOT NULL,
  `GroupID` int(10) NOT NULL,
  `StudentID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentmaster`
--

CREATE TABLE IF NOT EXISTS `studentmaster` (
  `StudentID` int(10) NOT NULL,
  `StudentPass` text NOT NULL,
  `StudentName` varchar(255) NOT NULL,
  `StudentDOB` date NOT NULL,
  `StudentAge` int(100) NOT NULL,
  `StudentEmail` varchar(255) NOT NULL,
  `StudentPhone` varchar(255) NOT NULL,
  `StudentPhoneCarrier` varchar(255) NOT NULL,
  `StudentCity` varchar(255) NOT NULL,
  `StudentState` varchar(255) NOT NULL,
  `StudentZip` int(10) NOT NULL,
  `StudentAdd1` text NOT NULL,
  `StudentAdd2` text NOT NULL,
  `StudentNote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentmaster`
--

INSERT INTO `studentmaster` (`StudentID`, `StudentPass`, `StudentName`, `StudentDOB`, `StudentAge`, `StudentEmail`, `StudentPhone`, `StudentPhoneCarrier`, `StudentCity`, `StudentState`, `StudentZip`, `StudentAdd1`, `StudentAdd2`, `StudentNote`) VALUES
(1, '1234', '1234', '1990-12-11', 0, 'vijay', '2019126424', 'txt.att.net', 's.vijay0991@yahoo.com', '5626824045', 90815, 'cali', '90815', 'add1'),
(2, '1234', '1234', '2014-12-11', 0, 'keyurkamdar6390@gmail.com', '2019126424', 'txt.att.net', 's.vijay0991@yahoo.com', '5626824045', 0, 'cali', '90815', 'add1'),
(3, '1234', 'vijay', '0000-00-00', 0, 's.vijay0991@yahoo.com', 's.vijay0991@yahoo.com', 'txt.att.net', '5626824045', 'longbeach', 0, '90815', 'add1', 'add2'),
(4, '1234', 'keyur', '0000-00-00', 0, 's.vijay0991@yahoo.com', 's.vijay0991@yahoo.com', 'txt.att.net', '5626824045', 'longbeach', 0, '90815', 'add1', 'add2'),
(5, '1234', 'vijay', '1991-09-23', 0, 's.vijay0991@yahoo.com', '5626824045', 'txt.att.net', 'longbeach', 'cali', 90815, 'add1', 'add2', 'notes'),
(6, '1234', 'keyur', '1991-09-23', 0, 's.vijay0991@yahoo.com', '5626824045', 'txt.att.net', 'longbeach', 'cali', 90815, 'add1', 'add2', 'notes'),
(7, '1234', 'vijay', '2005-09-23', 9, 's.vijay0991@yahoo.com', '5626824045', 'txt.att.net', 'longbeach', 'cali', 90815, 'add1', 'add2', 'notes'),
(8, '1234', 'keyur', '2014-12-11', 23, 'keyurkamdar6390@gmail.com', '2019126424', 'txt.att.net', 'longbeach', 'cali', 90815, 'add1', 'add2', 'notes'),
(9, '1234', 'keyur', '0000-00-00', 23, 's.vijay0991@yahoo.com', '5626824045', 'txt.att.net', 'longbeach', 'cali', 90815, 'add1', 'add2', 'notes'),
(10, '1234', 'vijay', '0000-00-00', 9, 's.vijay0991@yahoo.com', '5626824045', 'txt.att.net', 'longbeach', 'cali', 90815, 'add1', 'add2', 'notes'),
(12, '1234', 'kdfjdk', '1222-08-07', 20, 's.vijay0991@yahoo.com', '5626824045', 'txt.att.net', '87', '8', 87, '787', '878', '87'),
(13, 'djh', 'hjhf', '2014-12-03', 20, 's.vijay0991@yahoo.com', '5626824045', 'txt.att.net', 'uyuy', 'uuyy', 778, 'ghghg', 'uyuyu', 'jhghg'),
(14, 'xkj', 'jkj', '2014-12-02', 20, 's.vijay0991@yahoo.com', '5626824045', 'txt.att.net', 'yuyyu', 'yuyu', 23, '787', '787', 'suyu'),
(90, '1234', 'hello', '2014-12-12', 20, 's.vijay0991@yahoo.com', '2019126424', 'sms.3rivers.net', 'kjkj', 'jkjk', 9090, 'kh', 'jkkj', 'jhhjh'),
(99, '1234', 'kjdfjdk', '8989-08-07', 20, 'keyukamdar@yahoo.com', '5626824045', 'sms.3rivers.net', '787', '787', 8787, '7878', '7878', '877'),
(11111, 'password', 'vijay', '2014-03-10', 12, 's.vijay0991@yahoo.com', '5626824045', 'sms.3rivers.net', 'gjhsdjhg', 'jhagdjhsd', 273676, 'asdgsahj', 'jghasdjhasdjg', 'asdahgsfd'),
(12345, '1234', 'dkfj', '2014-12-12', 12, 'keyurkamdar@yahoo.com', '5626824045', 'jsmtel.com', 'jkkjk', 'jkkj', 8989, '89898', 'jkj', 'kjkkj'),
(111222, 'pass', 'ashjasgd', '2014-09-10', 21, 'keyurkamdar@yahoo.com', '5626824045', 'sms.3rivers.net', 'lasdasd', 'afagdsjg', 27362736, 'mndbasd', 'sdbajd', 'agshjgdjhags'),
(121212, 'password1', 'vijay', '2014-12-01', 1, 'vijay@vijay.com', '5626824045', 'sms.3rivers.net', 'hfgjhfg', 'jahgfjahsjah', 832743, 'samndasmnd', 'asdjhagdjsah', 'ajshdjahsdg'),
(989898, 'pass', 'vijay shrenikraj', '2014-12-01', 1, 's.vijay0991@yahoo.com', '5626824045', 'sms.3rivers.net', 'long beach', 'California', 90815, '5050 e garford street', 'apt # 149', 'Note'),
(12545492, '1234', 'Keyur Kamdar', '2014-12-12', 20, 'keyurkamdar@yahoo.com', '5626824045', 'sms.3rivers.net', 'Long Beach', 'California', 90815, '1720 Ximeno Ave', 'Apt #3', 'dd'),
(123456789, '1234', 'Jeet', '1991-06-06', 18, 'jeet@gmail.com', '5626824045', '', 'dfaj', 'ldnflad', 6562, 'dhgkj', 'jzdbnjd', 'kjsfkhdf');

-- --------------------------------------------------------

--
-- Table structure for table `templatemaster`
--

CREATE TABLE IF NOT EXISTS `templatemaster` (
`TemplateId` int(10) NOT NULL,
  `TemplateText` text NOT NULL,
  `TemplateName` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templatemaster`
--

INSERT INTO `templatemaster` (`TemplateId`, `TemplateText`, `TemplateName`) VALUES
(0, '--------', '--------'),
(142, 'Dear {{Name}},\n\nYour appointment has been successfully  scheduled on {{Date}} : {{time}}.\n\nPlease try to be 15 minutes early before the time.\n\nThank You.', 'Appointment Reminder'),
(143, 'Dear {{Name}},\r\n\r\nWish you a very Happy Birthday. May this year bring lots of joy and happiness in you life. \r\n\r\nFrom,\r\nCSULB-Health Department', 'Happy Birthday'),
(144, 'hgfgf', 'hgffg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminmaster`
--
ALTER TABLE `adminmaster`
 ADD PRIMARY KEY (`ID`), ADD KEY `ID` (`ID`);

--
-- Indexes for table `adminrights`
--
ALTER TABLE `adminrights`
 ADD PRIMARY KEY (`ID`), ADD KEY `AdminID` (`AdminID`);

--
-- Indexes for table `appointmentmaster`
--
ALTER TABLE `appointmentmaster`
 ADD PRIMARY KEY (`AppointmentID`), ADD KEY `StudentID` (`StudentID`);

--
-- Indexes for table `emailmaster`
--
ALTER TABLE `emailmaster`
 ADD PRIMARY KEY (`EmailID`);

--
-- Indexes for table `emailqueue`
--
ALTER TABLE `emailqueue`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `feedbackmaster`
--
ALTER TABLE `feedbackmaster`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `groupmaster`
--
ALTER TABLE `groupmaster`
 ADD PRIMARY KEY (`GroupID`);

--
-- Indexes for table `sentstudentemail`
--
ALTER TABLE `sentstudentemail`
 ADD PRIMARY KEY (`ID`), ADD KEY `StudentID` (`StudentID`), ADD KEY `EmailID` (`EmailID`);

--
-- Indexes for table `settingmaster`
--
ALTER TABLE `settingmaster`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentgroups`
--
ALTER TABLE `studentgroups`
 ADD PRIMARY KEY (`ID`), ADD KEY `GroupID` (`GroupID`,`StudentID`), ADD KEY `StudentID` (`StudentID`);

--
-- Indexes for table `studentmaster`
--
ALTER TABLE `studentmaster`
 ADD PRIMARY KEY (`StudentID`), ADD KEY `StudentID` (`StudentID`), ADD KEY `StudentID_2` (`StudentID`), ADD KEY `StudentID_3` (`StudentID`);

--
-- Indexes for table `templatemaster`
--
ALTER TABLE `templatemaster`
 ADD PRIMARY KEY (`TemplateId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminmaster`
--
ALTER TABLE `adminmaster`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `adminrights`
--
ALTER TABLE `adminrights`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appointmentmaster`
--
ALTER TABLE `appointmentmaster`
MODIFY `AppointmentID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `emailmaster`
--
ALTER TABLE `emailmaster`
MODIFY `EmailID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emailqueue`
--
ALTER TABLE `emailqueue`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedbackmaster`
--
ALTER TABLE `feedbackmaster`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groupmaster`
--
ALTER TABLE `groupmaster`
MODIFY `GroupID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `sentstudentemail`
--
ALTER TABLE `sentstudentemail`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settingmaster`
--
ALTER TABLE `settingmaster`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=366;
--
-- AUTO_INCREMENT for table `studentgroups`
--
ALTER TABLE `studentgroups`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `templatemaster`
--
ALTER TABLE `templatemaster`
MODIFY `TemplateId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=145;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminrights`
--
ALTER TABLE `adminrights`
ADD CONSTRAINT `adminrights_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `adminmaster` (`ID`);

--
-- Constraints for table `appointmentmaster`
--
ALTER TABLE `appointmentmaster`
ADD CONSTRAINT `appointmentmaster_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `studentmaster` (`StudentID`);

--
-- Constraints for table `sentstudentemail`
--
ALTER TABLE `sentstudentemail`
ADD CONSTRAINT `sentstudentemail_ibfk_2` FOREIGN KEY (`EmailID`) REFERENCES `emailmaster` (`EmailID`),
ADD CONSTRAINT `sentstudentemail_ibfk_3` FOREIGN KEY (`StudentID`) REFERENCES `studentmaster` (`StudentID`);

--
-- Constraints for table `studentgroups`
--
ALTER TABLE `studentgroups`
ADD CONSTRAINT `studentgroups_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `studentmaster` (`StudentID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
