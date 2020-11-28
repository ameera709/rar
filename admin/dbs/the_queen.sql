-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 22 نوفمبر 2020 الساعة 23:29
-- إصدار الخادم: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_queen`
--

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `header` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `s_group` varchar(255) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  `favorite` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`id`, `header`, `note`, `image`, `s_group`, `state`, `favorite`) VALUES
(14, 'Maram Alaayed', 'Hairstylist', 'hair4.png', '4', 1, 0),
(15, 'Jumana', 'Hairstylist', 'hair3.png', '4', 1, 0),
(16, 'Patcholi', 'Salon', 'hair2.png', '4', 1, 0),
(19, 'ZAINA', 'Hairstylist', 'hair1.png', '4', 1, 0),
(30, 'Njoud', 'Hairstylist', 'hair5.png', '4', 1, 0),
(32, 'Chic', 'Salon', 'hair6.png', '4', 1, 0),
(33, 'Wafa', 'Hairstylist', 'hair7.png', '4', 1, 0),
(34, 'Asma Alobrah', 'Hairstylist', 'hair8.png', '4', 1, 0),
(35, 'Shahd Alwohibi', 'Hairstylist', 'hair9.png', '4', 1, 0),
(36, 'Batool Alturki ', 'Hairstylist', 'hair10.png', '4', 1, 0),
(37, 'Ghaddah Abdulaziz', 'Hairstylist', 'hair11.png', '4', 1, 0),
(38, 'Riham Almushaikeh', 'Hairstylist', 'hair12.png', '4', 1, 0),
(39, 'ANNO️', 'Boutique', 'dres1.png', '5', 1, 0),
(40, 'MOE SHOUR', 'Fashion Designer', 'dres2.png', '5', 1, 0),
(41, 'BEAM', 'Kuwaiti Fashion Brand', 'dres3.png', '5', 1, 0),
(42, 'MONIRAH ALOMAR', 'Fashion Designer', 'dres4.png', '5', 1, 0),
(43, '7DETAILS', 'Boutique', 'dres5.png', '5', 1, 0),
(44, 'AMÉLIE BAKU COUTURE ', 'Boutique', 'dres6.png', '5', 1, 0),
(45, 'Nouf Alsubaie', 'Fashion Designer', 'dres7.png', '5', 1, 0),
(46, 'The Wardrobe', 'Evening/Bridal Boutique', 'dres8.png', '5', 1, 0),
(47, 'Vivid Flair London', 'Boutique ', 'dres9.png', '5', 1, 0),
(48, 'JOLNAAR', 'Boutique', 'dres10.png', '5', 1, 0),
(49, 'Fouz', 'Boutique', 'dres11.png', '5', 1, 0),
(50, 'ASBAR.G', 'Fashion Designer', 'dres12.png', '5', 1, 0),
(51, 'M N', 'Boutique', 'dres13.png', '5', 1, 0),
(52, 'MODISH', 'Fashion Store', 'dres14.png', '5', 1, 0),
(53, 'DARLANA FASHION', 'Fashion Store', 'dres15.png', '5', 1, 0),
(54, 'RAZAN ALAZZOUNI', 'Fashion Designer', 'dres16.png', '5', 1, 0),
(55, 'PEEK', 'Boutique', 'dres17.png', '5', 1, 0),
(56, 'EBTESAM ABDULLAH', 'Fashion Designer', 'dres18.png', '5', 1, 0),
(57, 'ALMAHA', 'Fashion Designer', 'dres19.png', '5', 1, 0),
(58, 'BE UNIQUE', 'Fashion Designer', 'dres20.png', '5', 1, 0),
(59, 'LUSTRO ', 'High End Jewelry', 'jew1.png', '1', 1, 0),
(60, 'NEEDLE REHAF', 'Accessories', 'jew2.png', '1', 1, 0),
(61, 'SWAROVSKI', 'Jewelry And Accessories', 'jew3.png', '1', 1, 0),
(62, 'AURAS', 'Jewelry', 'jew4.png', '1', 1, 0),
(63, 'CHARMALEENA', 'Jewellery', 'jew5.png', '1', 1, 0),
(64, 'NORA SHOP ', 'Accessories', 'jew6.png', '1', 1, 0),
(65, 'RAGAIL', 'VS, VVS Diamonds and High-End Gold', 'jew7.png', '1', 1, 0),
(66, 'Sedra Jewellery', 'Fine Jewellery.. 18k Gold & Diamonds', 'jew8.png', '1', 1, 0),
(67, 'NAVAL', 'Modern Jewelery ', 'jew9.png', '1', 1, 0),
(68, 'GOLD OR SILVER ', '18K, 21K Gold & 295 Silver', 'jew10.png', '1', 1, 0),
(69, 'NORSEN', 'Accessories Store', 'jew11.png', '1', 1, 0),
(70, 'L S', 'Unique Pieces Of 925 Silver', 'jew12.png', '1', 1, 0),
(71, 'LAVENDER', 'Head Pieces', 'jew13.png', '1', 1, 0),
(72, 'INDRA', 'Diamonds&Jewels', 'jew14.png', '1', 1, 0),
(73, 'FEROZA', 'Head Pieces', 'jew15.png', '1', 1, 0),
(74, 'MUSCAN JEWELRY', 'Jewelry', 'jew16.png', '1', 1, 0),
(75, 'Muneera Almohimeed ', 'Makeup Artist', 'makeup1.png', '2', 1, 0),
(76, 'Horiah Almohimeed', 'Makeup Artist', 'makeup2.png', '2', 1, 0),
(77, 'Lolla Artist', 'Makeup Artist', 'makeup3.png', '2', 1, 0),
(78, 'Shroug Abdullaziz', 'Makeup Artist', 'makeup4.png', '2', 1, 0),
(79, 'Norah Alfarwan', 'Makeup Artist', 'makeup5.png', '2', 1, 0),
(80, 'Makeup Asma ', 'Makeup Artist', 'makeup6.png', '2', 1, 0),
(81, 'Maryam', 'Makeup Artist', 'makeup7.png', '2', 1, 0),
(82, 'Latifa Alali', 'Makeup Artist', 'makeup8.png', '2', 1, 0),
(83, 'Rawan Alnugaimshi', 'Makeup Artist ', 'makeup9.png', '2', 1, 0),
(84, 'Hadeel Makeup Artist ', 'Makeup Artist', 'makeup10.png', '2', 1, 0),
(85, 'Jawaher Alsweena', 'Makeup Artist', 'makeup11.png', '2', 1, 0),
(86, 'Rana Alkhriji', 'Makeup Artist', 'makeup12.png', '2', 1, 0),
(87, 'Ahood Alngedan', 'Head Pieces', 'makeup13.png', '2', 1, 0),
(88, 'Ghaddah Abdulaziz', 'Diamonds&Jewels', 'makeup14.png', '2', 1, 0),
(89, 'Manal Almane', 'Head Pieces', 'makeup15.png', '2', 1, 0),
(90, 'SNOWWHITE ', 'Organic Products', 'skin1.png', '3', 1, 0),
(91, 'Jayla', 'Organic Scrubs', 'skin2.png', '3', 1, 0),
(92, 'Frank Body', 'Skin Care', 'skin3.png', '3', 1, 0),
(93, 'NATURE VISIONS', 'Natural Products', 'skin4.png', '3', 1, 0),
(94, 'Moroccan Beauty', 'Moroccan Beauty', 'skin5.png', '3', 1, 0),
(95, 'Organics Beauty', 'Organic Products', 'skin6.png', '3', 1, 0),
(96, 'Sugar Glow', 'Organic Scrubs', 'skin7.png', '3', 1, 0),
(97, 'Patcholi Spa', 'Spa Home Service', 'skin8.png', '3', 1, 0),
(98, 'Tan At Home', 'Taning Products', 'skin9.png', '3', 1, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '0.jpg',
  `dataofbirth` date NOT NULL DEFAULT '2000-01-01',
  `state` int(11) NOT NULL DEFAULT '0',
  `usertype` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `image`, `dataofbirth`, `state`, `usertype`) VALUES
(30, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'muhammed@gmail.com', 'ima.png', '1996-02-03', 1, 1),
(31, 'm', 'b0baee9d279d34fa1dfd71aadb908c3f', 'mm@gmail.com', '6.jpg', '2000-11-01', 1, 0),
(32, 'mm', 'd9308f32f8c6cf370ca5aaaeafc0d49b', 'm@gmail.com', '2.jpg', '2020-11-03', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
