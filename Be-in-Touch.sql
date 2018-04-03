-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2017 at 07:19 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bapa`
--
CREATE DATABASE IF NOT EXISTS `bapa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bapa`;

-- --------------------------------------------------------

--
-- Table structure for table `bus_customer_tbl`
--

CREATE TABLE IF NOT EXISTS `bus_customer_tbl` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_name` varchar(15) NOT NULL,
  `date` varchar(20) NOT NULL,
  `return_date` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `fk_bus_id` int(11) NOT NULL,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `address` varchar(25) NOT NULL,
  `total_person` int(11) NOT NULL,
  `status` varchar(8) NOT NULL,
  `starting_km` double NOT NULL,
  `ending_km` double NOT NULL,
  `fk_email_id` varchar(20) NOT NULL,
  `bus_num` varchar(12) NOT NULL,
  `mobile_num` varchar(11) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `bus_customer_tbl`
--

INSERT INTO `bus_customer_tbl` (`cust_id`, `bus_name`, `date`, `return_date`, `amount`, `fk_bus_id`, `source`, `destination`, `address`, `total_person`, `status`, `starting_km`, `ending_km`, `fk_email_id`, `bus_num`, `mobile_num`) VALUES
(6, 'egal', '05-04-2017', '06-04-2017', 2500, 2, 'Ahmedabad', 'baroda', 'A-11 Shanti  flats manina', 2, 'booked', 0, 0, 'adiparmar@gmail.com', 'GJ27AX5640', '8866087423'),
(7, 'Force Rx', '05-05-2017', '06-06-2017', 2500, 1, 'Ahmedabad', 'Mumbai', 'A-11 Shanti  flats manina', 23, 'booked', 0, 0, 'adiparmar@gmail.com', 'GJ27AX5640', '8866087423');

-- --------------------------------------------------------

--
-- Table structure for table `bus_table`
--

CREATE TABLE IF NOT EXISTS `bus_table` (
  `bus_id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_name` varchar(15) NOT NULL,
  `bus_img` varchar(200) NOT NULL,
  `capacity` int(11) NOT NULL,
  `bus_num` varchar(15) NOT NULL,
  `fk_facility_id` int(11) NOT NULL,
  `bus_detail` varchar(100) NOT NULL,
  `fk_driver_id` int(11) NOT NULL,
  PRIMARY KEY (`bus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bus_table`
--

INSERT INTO `bus_table` (`bus_id`, `bus_name`, `bus_img`, `capacity`, `bus_num`, `fk_facility_id`, `bus_detail`, `fk_driver_id`) VALUES
(1, 'Force Rx', '../project/images/force_3.jpg', 30, 'GJ27AX5640', 1, 'It is a very comfortable bus', 1),
(2, 'Ashok Leyland', '../project/images/ashok_leyland_25_seater.jpg', 32, 'GJ27AX6545', 1, 'It is a very comfortable bus', 1),
(3, 'Force ', '../project/images/ASforce_tempo2.jpg', 20, 'GJ27AX8897', 2, 'It is a very comfortable bus', 2),
(4, 'Force xv', '../project/images/ASforce4.jpg', 20, 'GJ27AX7412', 1, 'It is a very comfortable bus', 1),
(5, 'Force ', '../project/images/ASforce_tempo.jpg', 20, 'GJ27AX4235', 1, 'It is a very comfortable bus', 1),
(6, 'Isuzu', '../project/images/ASisuzu.jpg', 25, 'GJ27AX7023', 2, 'It is a very comfortable bus', 2),
(7, 'Isuzu', '../project/images/ASisuzu2.jpg', 20, 'GJ27AX7896', 1, 'It is a very comfortable bus', 2),
(8, 'Van', '../project/images/ASvan.jpg', 15, 'GJ27AX7425', 2, 'It is a very comfortable bus', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cancel_table`
--

CREATE TABLE IF NOT EXISTS `cancel_table` (
  `cancel_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_email_id` varchar(20) NOT NULL,
  `cancel_date` date NOT NULL,
  `refund_amount` int(11) NOT NULL,
  PRIMARY KEY (`cancel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cancel_table`
--

INSERT INTO `cancel_table` (`cancel_id`, `fk_email_id`, `cancel_date`, `refund_amount`) VALUES
(2, 'dk', '2016-12-14', 32342);

-- --------------------------------------------------------

--
-- Table structure for table `car_customer_table`
--

CREATE TABLE IF NOT EXISTS `car_customer_table` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `car_name` varchar(20) NOT NULL,
  `car_num` varchar(12) NOT NULL,
  `amount` int(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `return_date` varchar(20) NOT NULL,
  `license_image` varchar(200) NOT NULL,
  `with_driver` varchar(10) NOT NULL,
  `statused` varchar(20) NOT NULL,
  `starting_km` int(11) NOT NULL,
  `ending_km` int(11) NOT NULL,
  `fk_email_id` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `fk_car_id` int(11) NOT NULL,
  `total_person` int(11) NOT NULL,
  `mobile_num` varchar(11) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `car_customer_table`
--

INSERT INTO `car_customer_table` (`cust_id`, `source`, `destination`, `car_name`, `car_num`, `amount`, `date`, `return_date`, `license_image`, `with_driver`, `statused`, `starting_km`, `ending_km`, `fk_email_id`, `address`, `fk_car_id`, `total_person`, `mobile_num`) VALUES
(2, 'Ahmedabad', 'baroda', 'Swift-Desire', 'GJ27N8896', 2500, '03-04-2017', '05-04-2017', '../project/images/ASScreenshot (18).png', 'Yes', 'booked', 0, 0, 'adiparmar@gmail.com', 'A-11 Shanti sudhan flat Manina', 105, 2, '9537266422'),
(3, 'Ahmedabad', 'baroda', 'Swift-Desire', 'GJ27N8896', 2500, '08-04-2017', '09-04-2017', '../project/images/ASScreenshot (27).png', 'Yes', 'booked', 0, 0, 'adiparmar@gmail.com', 'A-11 Shanti sudhan flat Manina', 105, 4, '8866087423'),
(4, 'Ahmedabad', 'baroda', 'Chevrolet', 'Gj27N4565', 2500, '03-04-2017', '05-04-2017', '../project/images/ASScreenshot (2).png', 'No', 'booked', 0, 0, 'adiparmar@gmail.com', 'A-11 Shanti  flats maninagar', 102, 2, '8866087423');

-- --------------------------------------------------------

--
-- Table structure for table `car_table`
--

CREATE TABLE IF NOT EXISTS `car_table` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_name` varchar(15) NOT NULL,
  `fk_type_id` int(11) NOT NULL,
  `car_image_1` varchar(200) NOT NULL,
  `car_details` varchar(50) NOT NULL,
  `car_num` varchar(20) NOT NULL,
  `capacity` int(11) NOT NULL,
  `fk_driver_id` int(11) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `car_table`
--

INSERT INTO `car_table` (`car_id`, `car_name`, `fk_type_id`, `car_image_1`, `car_details`, `car_num`, `capacity`, `fk_driver_id`) VALUES
(102, 'Chevrolet', 3, '../project/images/ASChevrolet tavera.jpg', 'VDI Optional 1248 cc, Manual, Diesel, 25.2 kmpl', 'Gj27N4565', 8, 1),
(103, 'Verito', 4, '../project/images/ASMahindra Verito.jpg', 'VDI Optional 1200 cc, Manual, Diesel, 25.2 kmp', 'GJ27N7854', 5, 2),
(104, 'Swift', 5, '../project/images/ASMaruti-Suzuki-Swift.jpg', 'VDI Optional 1248 cc, Manual, Diesel, 25.2 kmp', 'GJ27N1245', 5, 1),
(105, 'Swift-Desire', 5, '../project/images/maruti_suzuki_swift_dzire.jpg', 'VDI Optional 1300 cc, Manual, Diesel, 25.2 kmp', 'GJ27N8896', 5, 1),
(106, 'Indica_ev1', 6, '../project/images/Tata_Indica_V1.jpg', 'VDI Optional 1148cc, Manual, Petrol, 20.2 kmp', 'GJ27N4581', 5, 2),
(107, 'Indigo', 6, '../project/images/tata-indigo-cs.jpg', 'VDI Optional 1100 cc, Manual, Diesel, 19.2 kmp', 'GJ27N4521', 5, 2),
(108, 'Winger', 6, '../project/images/tata_winger.JPG', 'VDI Optional 1400 cc, Manual, Petrol, 15.2 kmp', 'GJ27N4580', 10, 1),
(109, 'Etios-platinum', 7, '../project/images/AStoyota-etios-platinum.jpeg', 'VDI Optional 1200 cc, Manual, Diesel, 25.2 kmpl', 'Gj27N4561', 6, 2),
(110, 'Fortuner', 7, '../project/images/AStoyota-fortuner.jpg', 'VDI Optional 1350 cc, Manual, Diesel, 20.2 kmpl', 'Gj27N4545', 6, 1),
(111, 'Innova', 7, '../project/images/toyota_innova.jpg', 'VDI Optional 1500 cc, Manual, Diesel, 18.2 kmpl', 'GJ27N5454', 8, 1),
(112, 'Innova-Crysta', 7, '../project/images/ASToyota-Innova-Crysta.jpg', 'VDI Optional 1500 cc, Manual, Diesel, 21.2 kmpl', 'GJ27N8877', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `car_type_table`
--

CREATE TABLE IF NOT EXISTS `car_type_table` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(15) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `car_type_table`
--

INSERT INTO `car_type_table` (`type_id`, `t_name`) VALUES
(3, 'Tavera'),
(4, 'Mahindra'),
(5, 'Maruti-Suzuki'),
(6, 'TaTa'),
(7, 'Toyoto');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(15) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Ahmedabad'),
(2, 'baroda');

-- --------------------------------------------------------

--
-- Table structure for table `driver_table`
--

CREATE TABLE IF NOT EXISTS `driver_table` (
  `driver_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `mobile_num` int(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `driver_table`
--

INSERT INTO `driver_table` (`driver_id`, `name`, `mobile_num`, `address`) VALUES
(1, 'adi', 986968, 'jhvjv'),
(2, 'tirth', 5678, 'ahnkgbikgubi');

-- --------------------------------------------------------

--
-- Table structure for table `facility_table`
--

CREATE TABLE IF NOT EXISTS `facility_table` (
  `facility_id` int(11) NOT NULL AUTO_INCREMENT,
  `facility_name` varchar(15) NOT NULL,
  PRIMARY KEY (`facility_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `facility_table`
--

INSERT INTO `facility_table` (`facility_id`, `facility_name`) VALUES
(1, 'Ac'),
(2, 'Non-Ac');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_table`
--

CREATE TABLE IF NOT EXISTS `feedback_table` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile_num` varchar(13) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `fk_email_id` varchar(30) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback_table`
--

INSERT INTO `feedback_table` (`f_id`, `mobile_num`, `description`, `date`, `fk_email_id`) VALUES
(1, '8460648525', 'How are You', '2015-03-17', 'adiparmar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment_table`
--

CREATE TABLE IF NOT EXISTS `payment_table` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `card_num` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `card_name` varchar(15) NOT NULL,
  `card_type` varchar(15) NOT NULL,
  `cvv` int(11) NOT NULL,
  `fk_email_id` varchar(30) NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `payment_table`
--

INSERT INTO `payment_table` (`pay_id`, `card_num`, `amount`, `card_name`, `card_type`, `cvv`, `fk_email_id`, `status`) VALUES
(13, 8052654, 2500, 'Sahilsurani', 'mastercard', 123, 'adiparmar@gmail.com', ''),
(14, 524522, 2500, 'Sahilsurani', 'visa', 456, 'adiparmar@gmail.com', ''),
(15, 12345862, 2500, 'Sahilsurani', 'visa', 852, 'adiparmar@gmail.com', 'pending'),
(16, 123455, 2500, 'Sahilsurani', 'visa', 123, 'adiparmar@gmail.com', 'pending'),
(17, 1235458, 2500, 'Sahilsurani', 'visa', 855, 'adiparmar@gmail.com', 'pending'),
(18, 522, 2500, 'Sahilsurani', 'visa', 852, 'adiparmar@gmail.com', 'pending'),
(19, 2147483647, 2500, 'Sahilsurani', 'mastercard', 313, 'adiparmar@gmail.com', 'pending'),
(20, 55555551, 2500, 'Dena', 'american expres', 522, 'adiparmar@gmail.com', 'pending'),
(21, 123654789, 2500, 'Sahilsurani', 'mastercard', 852, 'adiparmar@gmail.com', 'pending'),
(22, 85556, 2500, 'Dena', 'mastercard', 213, 'adiparmar@gmail.com', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `email_id` varchar(30) NOT NULL,
  `name` varchar(15) NOT NULL,
  `mobile_num` varchar(13) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `fk_city` int(11) NOT NULL,
  `password` varchar(15) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `type` varchar(6) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`email_id`, `name`, `mobile_num`, `gender`, `fk_city`, `password`, `photo`, `type`) VALUES
('adiparmar@gmail.com', 'aditya', '8460648525', 'male', 2, '123456', '../project/images/ASbig6.jpg', 'user'),
('rahul@gmail.com', 'Rahul', '9875756231', 'male', 2, '123456', '../project/images/ASenovaback.jpg', 'admin'),
('sahilsurani@gmail.com', 'sahilsurani', '8460645646', 'male', 1, '123456', '../project/images/bg_body.jpg', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
