-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2018 at 02:26 PM
-- Server version: 5.7.21
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
-- Database: `resort`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `booking_name` text NOT NULL,
  `booking_phone` text NOT NULL,
  `booking_email` text NOT NULL,
  `booking_checkin` date NOT NULL,
  `booking_checkout` date NOT NULL,
  `reservation_id` text NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `room_id`, `booking_name`, `booking_phone`, `booking_email`, `booking_checkin`, `booking_checkout`, `reservation_id`) VALUES
(1, 1, 1, 'test 1', '0899999999', 'test@gmail.com', '2018-05-17', '2018-05-21', 'EZVAC40566'),
(2, 1, 2, 'test 1', '0899999999', 'test@gmail.com', '2018-05-29', '2018-06-03', 'EZVAC31369');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

DROP TABLE IF EXISTS `hostel`;
CREATE TABLE IF NOT EXISTS `hostel` (
  `hostel_id` int(11) NOT NULL AUTO_INCREMENT,
  `place_id` int(11) NOT NULL,
  `hostel_name` text NOT NULL,
  `hostel_phone` text NOT NULL,
  `hostel_level` int(11) NOT NULL,
  `hostel_price` int(11) NOT NULL,
  `hostel_address` text NOT NULL,
  `hostel_facilities` text NOT NULL,
  PRIMARY KEY (`hostel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostel_id`, `place_id`, `hostel_name`, `hostel_phone`, `hostel_level`, `hostel_price`, `hostel_address`, `hostel_facilities`) VALUES
(1, 1, 'โรงแรมพัทยา 1', '088-888-8888', 5, 2000, '999/999 ถนนพัทยาใต้, พัทยาใต้, พัทยาใต้, พัทยา, ชลบุรี, ประเทศไทย, 20150', 'เครื่องปรับอากาศ, ที่จอดรถ , Wifi , สระว่ายน้ำ , ลิฟท์ , ห้องอาหาร'),
(5, 2, 'test', '055-555-555', 3, 1500, '9/3', 'wifi');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_photo`
--

DROP TABLE IF EXISTS `hostel_photo`;
CREATE TABLE IF NOT EXISTS `hostel_photo` (
  `hostel_photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `hostel_id` int(11) NOT NULL,
  `hostel_photo_src` text NOT NULL,
  PRIMARY KEY (`hostel_photo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hostel_photo`
--

INSERT INTO `hostel_photo` (`hostel_photo_id`, `hostel_id`, `hostel_photo_src`) VALUES
(1, 1, 'img/hostel/h1.jpg'),
(2, 1, 'img/hostel/h11.jpg'),
(3, 5, 'assets/images/hostel/h1.jpg'),
(4, 5, 'assets/images/hostel/h2.jpg'),
(5, 5, 'assets/images/hostel/h11.jpg'),
(7, 7, 'assets/images/hostel/h1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `managment_account`
--

DROP TABLE IF EXISTS `managment_account`;
CREATE TABLE IF NOT EXISTS `managment_account` (
  `managment_account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fullname` text NOT NULL,
  PRIMARY KEY (`managment_account_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `managment_account`
--

INSERT INTO `managment_account` (`managment_account_id`, `username`, `password`, `fullname`) VALUES
(1, 'admin', '1234', 'admin resort');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

DROP TABLE IF EXISTS `place`;
CREATE TABLE IF NOT EXISTS `place` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT,
  `place_name` text NOT NULL,
  `place_img` text NOT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `place_name`, `place_img`) VALUES
(1, 'พัทยา', 'assets/images/place/p1.jpg'),
(2, 'เขาค้อ', 'assets/images/place/p2.jpg'),
(3, 'เกาะช้าง', 'assets/images/place/p3.jpg'),
(4, 'หัวหิน', 'assets/images/place/p4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `hostel_id` int(11) NOT NULL,
  `room_type_name` text NOT NULL,
  `maximum_User` int(11) NOT NULL,
  `room_bed` int(11) NOT NULL,
  `room_accessories` text NOT NULL,
  `room_toilet` text NOT NULL,
  `room_other` text NOT NULL,
  `room_price` int(11) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `hostel_id`, `room_type_name`, `maximum_User`, `room_bed`, `room_accessories`, `room_toilet`, `room_other`, `room_price`) VALUES
(1, 1, 'ห้องพักคู่รัก', 2, 1, 'เครื่องปรับอากาศ , น้ำดื่ม , ตู้เย็น , โทรทัศน์, โต๊ะทำงาน , บริเวณทานอาหารแยก , ผ้าม่านกันแสง/ผ้าม่าน , ไมโครเวฟ', 'น้ำอุ่น , ฝักบัว , อุปกรณ์อาบน้ำ', '-', 2000),
(2, 1, 'ห้องพักครอบครัว', 6, 3, 'เครื่องปรับอากาศ , น้ำดื่ม , ตู้เย็น , โทรทัศน์, โต๊ะทำงาน , บริเวณทานอาหารแยก , ผ้าม่านกันแสง/ผ้าม่าน , ไมโครเวฟ', 'น้ำอุ่น , ฝักบัว , อุปกรณ์อาบน้ำ', 'ลานปิ้งย่าง , ห้องคาราโอเกะ', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `room_photo`
--

DROP TABLE IF EXISTS `room_photo`;
CREATE TABLE IF NOT EXISTS `room_photo` (
  `room_photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `room_photo_src` text NOT NULL,
  PRIMARY KEY (`room_photo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_photo`
--

INSERT INTO `room_photo` (`room_photo_id`, `room_id`, `room_photo_src`) VALUES
(1, 1, 'assets/images/room/r1.jpg'),
(2, 2, 'img/room/r2.jpg'),
(6, 5, 'assets/images/room/r2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` text NOT NULL,
  `user_password` text NOT NULL,
  `user_fullname` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_fullname`) VALUES
(1, 'test1', '1234', 'test1 test1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
