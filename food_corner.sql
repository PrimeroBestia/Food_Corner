-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2018 at 06:07 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_corner`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `address_ID` varchar(60) NOT NULL,
  `line1` varchar(60) NOT NULL,
  `line2` varchar(60) NOT NULL,
  `line3` varchar(60) NOT NULL,
  `City` varchar(60) NOT NULL,
  PRIMARY KEY (`address_ID`),
  UNIQUE KEY `address_ID` (`address_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` varchar(30) NOT NULL,
  `acc_type` varchar(60) NOT NULL,
  `caddress_id` varchar(60) NOT NULL,
  `c_fname` varchar(30) NOT NULL,
  `c_mname` varchar(30) NOT NULL,
  `c_lname` varchar(30) NOT NULL,
  `c_pno` varchar(30) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_pass` varchar(30) NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `caddress_id` (`caddress_id`),
  UNIQUE KEY `c_id` (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

DROP TABLE IF EXISTS `customer_address`;
CREATE TABLE IF NOT EXISTS `customer_address` (
  `caddress_id` varchar(60) NOT NULL,
  `c_id` varchar(60) NOT NULL,
  `address_id` varchar(60) NOT NULL,
  PRIMARY KEY (`caddress_id`),
  UNIQUE KEY `c_id` (`c_id`),
  UNIQUE KEY `address_id` (`address_id`),
  UNIQUE KEY `caddress_id` (`caddress_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

DROP TABLE IF EXISTS `customer_order`;
CREATE TABLE IF NOT EXISTS `customer_order` (
  `order_id` varchar(60) NOT NULL,
  `c_id` varchar(60) NOT NULL,
  `r_id` varchar(60) NOT NULL,
  `payment_id` varchar(60) NOT NULL,
  `order_spec_id` varchar(60) NOT NULL,
  `order_date` date NOT NULL,
  `order_price` varchar(60) NOT NULL,
  `order_comment` varchar(255) NOT NULL,
  `order_status` varchar(60) NOT NULL,
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `c_id` (`c_id`),
  UNIQUE KEY `r_id` (`r_id`),
  UNIQUE KEY `payment_id` (`payment_id`),
  UNIQUE KEY `order_id` (`order_id`),
  UNIQUE KEY `order_spec_id` (`order_spec_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_payment`
--

DROP TABLE IF EXISTS `customer_payment`;
CREATE TABLE IF NOT EXISTS `customer_payment` (
  `payment_id` varchar(60) NOT NULL,
  `c_id` varchar(60) NOT NULL,
  `payment_code` varchar(60) NOT NULL,
  `card_number` int(60) NOT NULL,
  PRIMARY KEY (`payment_id`),
  UNIQUE KEY `payment_id` (`payment_id`),
  UNIQUE KEY `c_id` (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
CREATE TABLE IF NOT EXISTS `ingredients` (
  `ing_id` varchar(60) NOT NULL,
  `s_id` varchar(60) NOT NULL,
  `ing_name` varchar(60) NOT NULL,
  `ing_quantity` varchar(60) NOT NULL,
  `ing_unit` varchar(60) NOT NULL,
  `ing_price` varchar(60) NOT NULL,
  PRIMARY KEY (`ing_id`),
  UNIQUE KEY `s_id` (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_delivery`
--

DROP TABLE IF EXISTS `order_delivery`;
CREATE TABLE IF NOT EXISTS `order_delivery` (
  `deliver_id` varchar(60) NOT NULL,
  `order_id` varchar(60) NOT NULL,
  `delivery_status` varchar(60) NOT NULL,
  PRIMARY KEY (`deliver_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_spec`
--

DROP TABLE IF EXISTS `order_spec`;
CREATE TABLE IF NOT EXISTS `order_spec` (
  `order_spec_id` varchar(60) NOT NULL,
  `order_spec_name` varchar(60) NOT NULL,
  `order_spec_price` varchar(60) NOT NULL,
  PRIMARY KEY (`order_spec_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

DROP TABLE IF EXISTS `recipe`;
CREATE TABLE IF NOT EXISTS `recipe` (
  `r_id` varchar(60) NOT NULL,
  `ing_list_id` varchar(60) NOT NULL,
  `recipe` varchar(1000) NOT NULL,
  `r_name` varchar(60) NOT NULL,
  `r_time` date NOT NULL,
  `r_region` varchar(60) NOT NULL,
  `r_country` varchar(60) NOT NULL,
  PRIMARY KEY (`r_id`),
  UNIQUE KEY `ing_list_id` (`ing_list_id`),
  UNIQUE KEY `recipe` (`recipe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `s_id` varchar(60) NOT NULL,
  `s_name` varchar(60) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
