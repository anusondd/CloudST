-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2016 at 01:32 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `st_ci_sessions`
--

CREATE TABLE IF NOT EXISTS `st_ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `st_ci_sessions`
--

INSERT INTO `st_ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('07a46e7cf03f5fad5b04409b57802a4680eb9426', '::1', 1457100292, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373130303234353b6c6f67696e5f69647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b66697273746e616d657c733a33303a22e0b898e0b8a7e0b8b1e0b88ae0b8a8e0b8b1e0b881e0b894e0b8b4e0b98c223b6c6173746e616d657c733a32373a22e0b981e0b895e0b887e0b980e0b8ade0b8b5e0b988e0b8a2e0b8a1223b696d677c733a31373a22353639323365653139346439302e6a7067223b757365725f747970657c733a343a22726f6f74223b),
('142ea98aabe0c3a52fb86118c3853db6d2cead85', '::1', 1457099792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373039393739323b6c6f67696e5f69647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b66697273746e616d657c733a33303a22e0b898e0b8a7e0b8b1e0b88ae0b8a8e0b8b1e0b881e0b894e0b8b4e0b98c223b6c6173746e616d657c733a32373a22e0b981e0b895e0b887e0b980e0b8ade0b8b5e0b988e0b8a2e0b8a1223b696d677c733a31373a22353639323365653139346439302e6a7067223b757365725f747970657c733a343a22726f6f74223b),
('2d312c72f3366a6b99061c2dc42a794bc59bdd86', '::1', 1457095504, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373039353435323b6c6f67696e5f69647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b66697273746e616d657c733a33303a22e0b898e0b8a7e0b8b1e0b88ae0b8a8e0b8b1e0b881e0b894e0b8b4e0b98c223b6c6173746e616d657c733a32373a22e0b981e0b895e0b887e0b980e0b8ade0b8b5e0b988e0b8a2e0b8a1223b696d677c733a31373a22353639323365653139346439302e6a7067223b757365725f747970657c733a343a22726f6f74223b),
('2ec98b70d4fcfa37fad75517926280ec79029ac0', '::1', 1457096242, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373039363233383b6c6f67696e5f69647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b66697273746e616d657c733a33303a22e0b898e0b8a7e0b8b1e0b88ae0b8a8e0b8b1e0b881e0b894e0b8b4e0b98c223b6c6173746e616d657c733a32373a22e0b981e0b895e0b887e0b980e0b8ade0b8b5e0b988e0b8a2e0b8a1223b696d677c733a31373a22353639323365653139346439302e6a7067223b757365725f747970657c733a343a22726f6f74223b),
('33b31b5c8b3fab3816d6527f26ce93c9abd28a08', '::1', 1457185364, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373138353332313b6c6f67696e5f69647c733a313a2235223b757365726e616d657c733a383a22746177617473616b223b66697273746e616d657c733a33303a22e0b898e0b8a7e0b8b1e0b88ae0b8a8e0b8b1e0b881e0b894e0b8b4e0b98c223b6c6173746e616d657c733a32373a22e0b981e0b895e0b887e0b980e0b8ade0b8b5e0b988e0b8a2e0b8a1223b696d677c733a31373a22353638666434623531666433622e6a7067223b757365725f747970657c733a353a2261646d696e223b),
('3cf688e194caff9afc7bd287be8ed10a5736d982', '::1', 1457186288, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373138363133343b6c6f67696e5f69647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b66697273746e616d657c733a33303a22e0b898e0b8a7e0b8b1e0b88ae0b8a8e0b8b1e0b881e0b894e0b8b4e0b98c223b6c6173746e616d657c733a32373a22e0b981e0b895e0b887e0b980e0b8ade0b8b5e0b988e0b8a2e0b8a1223b696d677c733a31373a22353639323365653139346439302e6a7067223b757365725f747970657c733a343a22726f6f74223b),
('4707e4f7f7399e86b081b7f086164dd1fe49e17c', '::1', 1457095153, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373039353034383b6c6f67696e5f69647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b66697273746e616d657c733a33303a22e0b898e0b8a7e0b8b1e0b88ae0b8a8e0b8b1e0b881e0b894e0b8b4e0b98c223b6c6173746e616d657c733a32373a22e0b981e0b895e0b887e0b980e0b8ade0b8b5e0b988e0b8a2e0b8a1223b696d677c733a31373a22353639323365653139346439302e6a7067223b757365725f747970657c733a343a22726f6f74223b),
('603b0b038dd4b319dfae2447162091e9bbb56ac6', '::1', 1457440309, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373434303133343b),
('81113005cf1d643626afa21577e60b93bbc80bae', '::1', 1457184438, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373138343337353b6c6f67696e5f69647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b66697273746e616d657c733a33303a22e0b898e0b8a7e0b8b1e0b88ae0b8a8e0b8b1e0b881e0b894e0b8b4e0b98c223b6c6173746e616d657c733a32373a22e0b981e0b895e0b887e0b980e0b8ade0b8b5e0b988e0b8a2e0b8a1223b696d677c733a31373a22353639323365653139346439302e6a7067223b757365725f747970657c733a343a22726f6f74223b),
('d2bcac2fee799dd4ffe82f5e8fa5b430bc39803a', '::1', 1457097867, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373039373836343b6c6f67696e5f69647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b66697273746e616d657c733a33303a22e0b898e0b8a7e0b8b1e0b88ae0b8a8e0b8b1e0b881e0b894e0b8b4e0b98c223b6c6173746e616d657c733a32373a22e0b981e0b895e0b887e0b980e0b8ade0b8b5e0b988e0b8a2e0b8a1223b696d677c733a31373a22353639323365653139346439302e6a7067223b757365725f747970657c733a343a22726f6f74223b),
('db11b5765800362a6d8b714fadbbb2f95a08c315', '::1', 1457095027, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373039343733343b6c6f67696e5f69647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b66697273746e616d657c733a33303a22e0b898e0b8a7e0b8b1e0b88ae0b8a8e0b8b1e0b881e0b894e0b8b4e0b98c223b6c6173746e616d657c733a32373a22e0b981e0b895e0b887e0b980e0b8ade0b8b5e0b988e0b8a2e0b8a1223b696d677c733a31373a22353639323365653139346439302e6a7067223b757365725f747970657c733a343a22726f6f74223b),
('eee8bf783a3fa3f440d59ad6bc74256dc1afb4b6', '::1', 1457186044, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373138353830383b6c6f67696e5f69647c733a313a2235223b757365726e616d657c733a383a22746177617473616b223b66697273746e616d657c733a33303a22e0b898e0b8a7e0b8b1e0b88ae0b8a8e0b8b1e0b881e0b894e0b8b4e0b98c223b6c6173746e616d657c733a32373a22e0b981e0b895e0b887e0b980e0b8ade0b8b5e0b988e0b8a2e0b8a1223b696d677c733a31373a22353638666434623531666433622e6a7067223b757365725f747970657c733a353a2261646d696e223b);

-- --------------------------------------------------------

--
-- Table structure for table `st_inventories`
--

CREATE TABLE IF NOT EXISTS `st_inventories` (
  `item_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `open` decimal(18,2) NOT NULL,
  `adjustment` decimal(18,2) NOT NULL,
  `receipt` decimal(18,2) NOT NULL,
  `issue` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `st_inventories`
--

INSERT INTO `st_inventories` (`item_id`, `location_id`, `open`, `adjustment`, `receipt`, `issue`) VALUES
(5, 1, '0.00', '-13.00', '20.00', '0.00'),
(5, 2, '0.00', '0.00', '1.00', '0.00'),
(5, 3, '0.00', '0.00', '1.00', '0.00'),
(6, 1, '0.00', '-1.00', '16.00', '0.00'),
(9, 1, '0.00', '0.00', '10.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `st_inventoryflows`
--

CREATE TABLE IF NOT EXISTS `st_inventoryflows` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `itemname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `location_id` int(11) NOT NULL,
  `locationname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `transqty` decimal(18,2) NOT NULL,
  `unit` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `transtype` enum('open','return','receipt') COLLATE utf8_unicode_ci NOT NULL,
  `transdate` datetime NOT NULL,
  `created` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `st_inventoryflows`
--

INSERT INTO `st_inventoryflows` (`id`, `item_id`, `itemname`, `location_id`, `locationname`, `transqty`, `unit`, `transtype`, `transdate`, `created`, `user_id`) VALUES
(1, 6, 'หนังสือเขียนโปรแกรมภาษาซี พื้นฐาน', 1, 'สินค้าดี', '15.00', 'เล่ม', 'receipt', '2016-02-19 00:00:00', '2016-02-19 17:21:17', 1),
(2, 6, 'หนังสือเขียนโปรแกรมภาษาซี พื้นฐาน', 1, 'สินค้าดี', '1.00', 'เล่ม', 'receipt', '2016-02-19 00:00:00', '2016-02-19 17:22:14', 1),
(3, 9, 'คีย์บอร์ด Logitech 3300', 1, 'สินค้าดี', '10.00', 'ชิ้น', 'receipt', '2016-02-19 00:00:00', '2016-02-19 17:22:29', 1),
(4, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', 3, 'สินค้ารอซ่อม', '1.00', 'เครื่อง', 'open', '2016-02-19 00:00:00', '2016-02-19 17:22:55', 1),
(5, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', 1, 'สินค้าดี', '11.00', 'เครื่อง', 'open', '2016-02-19 00:00:00', '2016-02-19 17:23:35', 1),
(6, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', 1, 'สินค้าดี', '20.00', 'เครื่อง', 'receipt', '2016-02-19 00:00:00', '2016-02-19 17:24:10', 1),
(7, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', 2, 'สินค้าชำรุด', '1.00', 'เครื่อง', 'receipt', '2016-02-19 00:00:00', '2016-02-19 17:59:03', 1),
(8, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', 3, 'สินค้ารอซ่อม', '1.00', 'เครื่อง', 'return', '2016-02-19 00:00:00', '2016-02-19 17:59:51', 1),
(9, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', 3, 'สินค้ารอซ่อม', '1.00', 'เครื่อง', 'open', '2016-02-22 00:00:00', '2016-02-21 18:24:31', 1),
(10, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', 3, 'สินค้ารอซ่อม', '1.00', 'เครื่อง', 'receipt', '2016-02-22 00:00:00', '2016-02-21 18:31:03', 1),
(11, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', 1, 'สินค้าดี', '5.00', 'เครื่อง', 'open', '2016-02-22 00:00:00', '2016-02-21 18:31:40', 1),
(12, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', 3, 'สินค้ารอซ่อม', '1.00', 'เครื่อง', 'return', '2016-02-22 00:00:00', '2016-02-21 18:32:16', 1),
(13, 6, 'หนังสือเขียนโปรแกรมภาษาซี พื้นฐาน', 1, 'สินค้าดี', '1.00', 'เล่ม', 'open', '2016-02-22 00:00:00', '2016-02-22 17:22:46', 1),
(14, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', 1, 'สินค้าดี', '3.00', 'เครื่อง', 'return', '2016-02-22 00:00:00', '2016-02-22 17:23:05', 1),
(15, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', 3, 'สินค้ารอซ่อม', '5.00', 'เครื่อง', 'open', '2016-03-04 00:00:00', '2016-03-04 13:37:28', 1),
(16, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', 3, 'สินค้ารอซ่อม', '5.00', 'เครื่อง', 'return', '2016-03-04 00:00:00', '2016-03-04 13:38:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `st_items`
--

CREATE TABLE IF NOT EXISTS `st_items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `barcode` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(18,2) NOT NULL DEFAULT '0.00',
  `unit` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `itemtype_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `st_items`
--

INSERT INTO `st_items` (`id`, `name`, `barcode`, `price`, `unit`, `itemtype_id`, `description`, `filename`) VALUES
(5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', '922133365871', '3500.00', 'เครื่อง', 6, 'หน้าจอแสดงผลสำหรับแสดงข้อมูลบนคอมพิวเตอร์', '568c00bde7890.jpg'),
(6, 'หนังสือเขียนโปรแกรมภาษาซี พื้นฐาน', 'LB001455259', '250.00', 'เล่ม', 8, 'หนังสือเขียนโปรแกรม\r\nเหมาะสำหรับผู้เริ่มต้นในการเรียนรู้', '568c00f465b4f.jpg'),
(8, 'แผ่นซีดีสอนบัญชีพื้นฐาน 1', '92254783', '300.00', 'แผ่น', 7, 'วิธีสอนการบัญชีเบื้องต้น', '568be06710df0.jpg'),
(9, 'คีย์บอร์ด Logitech 3300', '45678887', '299.00', 'ชิ้น', 6, 'คีย์บอร์ดใช้ในการพิมพ์\r\nแบบ USB', '569fbd6d7c138.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `st_itemtypes`
--

CREATE TABLE IF NOT EXISTS `st_itemtypes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `st_itemtypes`
--

INSERT INTO `st_itemtypes` (`id`, `name`, `description`) VALUES
(6, 'อุปกรณ์คอมพิวเตอร์', ''),
(7, 'สื่อการเรียนการสอน', ''),
(8, 'หนังสือ', '');

-- --------------------------------------------------------

--
-- Table structure for table `st_locations`
--

CREATE TABLE IF NOT EXISTS `st_locations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `st_locations`
--

INSERT INTO `st_locations` (`id`, `name`) VALUES
(1, 'สินค้าดี'),
(2, 'สินค้าชำรุด'),
(3, 'สินค้ารอซ่อม');

-- --------------------------------------------------------

--
-- Table structure for table `st_openflows`
--

CREATE TABLE IF NOT EXISTS `st_openflows` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `itemname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `open_qty` decimal(18,2) NOT NULL,
  `return_qty` decimal(18,2) NOT NULL,
  `unit` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `open_date` datetime NOT NULL,
  `return_date` datetime NOT NULL,
  `open_entry` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `return_entry` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `open_location` int(11) NOT NULL,
  `return_location` int(11) NOT NULL,
  `flowstatus` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `st_openflows`
--

INSERT INTO `st_openflows` (`id`, `item_id`, `itemname`, `open_qty`, `return_qty`, `unit`, `open_date`, `return_date`, `open_entry`, `return_entry`, `open_location`, `return_location`, `flowstatus`) VALUES
(1, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', '1.00', '1.00', 'เครื่อง', '2016-02-19 00:00:00', '2016-02-19 00:00:00', 'wishada', 'wishada', 3, 3, 1),
(2, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', '11.00', '0.00', 'เครื่อง', '2016-02-19 00:00:00', '0000-00-00 00:00:00', 'tawatsak', '', 1, 0, 0),
(3, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', '1.00', '1.00', 'เครื่อง', '2016-02-22 00:00:00', '2016-02-22 00:00:00', 'admin', 'admin', 3, 3, 1),
(4, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', '5.00', '3.00', 'เครื่อง', '2016-02-22 00:00:00', '2016-02-22 00:00:00', 'wishada', 'wishada', 1, 1, 0),
(5, 6, 'หนังสือเขียนโปรแกรมภาษาซี พื้นฐาน', '1.00', '0.00', 'เล่ม', '2016-02-22 00:00:00', '0000-00-00 00:00:00', 'tawatsak', '', 1, 0, 0),
(6, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', '5.00', '5.00', 'เครื่อง', '2016-03-04 00:00:00', '2016-03-04 00:00:00', 'tawatsak', 'tawatsak', 3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `st_receipts`
--

CREATE TABLE IF NOT EXISTS `st_receipts` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `itemname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `qty` decimal(18,2) NOT NULL,
  `unit` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `receipt_date` datetime NOT NULL,
  `receipt_entry` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `st_receipts`
--

INSERT INTO `st_receipts` (`id`, `item_id`, `itemname`, `qty`, `unit`, `receipt_date`, `receipt_entry`, `location_id`) VALUES
(1, 6, 'หนังสือเขียนโปรแกรมภาษาซี พื้นฐาน', '15.00', 'เล่ม', '2016-02-19 00:00:00', 'tawatsak', 1),
(2, 6, 'หนังสือเขียนโปรแกรมภาษาซี พื้นฐาน', '1.00', 'เล่ม', '2016-02-19 00:00:00', 'tawatsak', 1),
(3, 9, 'คีย์บอร์ด Logitech 3300', '10.00', 'ชิ้น', '2016-02-19 00:00:00', 'wishada', 1),
(4, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', '20.00', 'เครื่อง', '2016-02-19 00:00:00', 'tawatsak', 1),
(5, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', '1.00', 'เครื่อง', '2016-02-19 00:00:00', 'tawatsak', 2),
(6, 5, 'หน้าจอคอมพิวเตอร์ LCD รุ่น LG', '1.00', 'เครื่อง', '2016-02-22 00:00:00', 'admin', 3);

-- --------------------------------------------------------

--
-- Table structure for table `st_users`
--

CREATE TABLE IF NOT EXISTS `st_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` enum('root','admin','staff') COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `st_users`
--

INSERT INTO `st_users` (`id`, `firstname`, `lastname`, `username`, `password`, `phone`, `email`, `department`, `user_type`, `filename`) VALUES
(1, 'ธวัชศักดิ์', 'แตงเอี่ยม', 'admin', 'a66abb5684c45962d887564f08346e8d', '0888888888', 'itoffside@hotmail.com', 'สารสนเทศ', 'root', '56923ee194d90.jpg'),
(5, 'ธวัชศักดิ์', 'แตงเอี่ยม', 'tawatsak', '7c5ea53edfb827b0edfa8304f94cdcd7', '088123456', 'itoffside@hotmail.com', 'สารสนเทศ', 'root', '568fd4b51fd3b.jpg'),
(6, 'วิชาดา', 'ยารังสี', 'wishada', '7e905a9c54e1678d8fc7abc815abbcfc', '0833645978', 'wishada@itoffside.com', 'บัญชี', 'staff', '56924541c9027.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st_ci_sessions`
--
ALTER TABLE `st_ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `st_inventories`
--
ALTER TABLE `st_inventories`
  ADD PRIMARY KEY (`item_id`,`location_id`);

--
-- Indexes for table `st_inventoryflows`
--
ALTER TABLE `st_inventoryflows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_items`
--
ALTER TABLE `st_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_itemtypes`
--
ALTER TABLE `st_itemtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_locations`
--
ALTER TABLE `st_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_openflows`
--
ALTER TABLE `st_openflows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_receipts`
--
ALTER TABLE `st_receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_users`
--
ALTER TABLE `st_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st_inventoryflows`
--
ALTER TABLE `st_inventoryflows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `st_items`
--
ALTER TABLE `st_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `st_itemtypes`
--
ALTER TABLE `st_itemtypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `st_locations`
--
ALTER TABLE `st_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `st_openflows`
--
ALTER TABLE `st_openflows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `st_receipts`
--
ALTER TABLE `st_receipts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `st_users`
--
ALTER TABLE `st_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
