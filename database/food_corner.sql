-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 11:49 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `acc_type` varchar(60) NOT NULL,
  `c_address_id` int(11) NOT NULL,
  `c_fname` varchar(30) DEFAULT NULL,
  `c_mname` varchar(30) DEFAULT NULL,
  `c_lname` varchar(30) DEFAULT NULL,
  `c_pno` varchar(30) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_pass` varchar(255) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `acc_type`, `c_address_id`, `c_fname`, `c_mname`, `c_lname`, `c_pno`, `c_email`, `c_pass`, `time_created`) VALUES
(26, 'user', 26, NULL, NULL, NULL, '9236825841', 'primebeast@ymail.com', '202cb962ac59075b964b07152d234b70', '2018-03-21 09:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `caddress_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `c_id` varchar(255) NOT NULL,
  `address_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`caddress_id`, `address`, `c_id`, `address_id`) VALUES
(22, '281', '22', 1),
(21, 'Playa St., Balut, Tondo, 287C', '21', 1),
(20, '287C Playa St. Balut Tondo', '20', 1),
(23, '287C Playa St. Balut Tondo', '23', 1),
(24, '287C Playa St. Balut Tondo', '24', 1),
(25, '287C Playa St. Balut Tondo', '25', 1),
(26, '287C Playa St. Balut Tondo', '26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` varchar(60) NOT NULL,
  `c_id` varchar(60) NOT NULL,
  `r_id` varchar(60) NOT NULL,
  `payment_id` varchar(60) NOT NULL,
  `order_spec_id` varchar(60) NOT NULL,
  `order_date` date NOT NULL,
  `order_price` varchar(60) NOT NULL,
  `order_comment` varchar(255) NOT NULL,
  `order_status` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_payment`
--

CREATE TABLE `customer_payment` (
  `payment_id` varchar(60) NOT NULL,
  `c_id` varchar(60) NOT NULL,
  `payment_code` varchar(60) NOT NULL,
  `card_number` int(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ing_id` varchar(60) NOT NULL,
  `s_id` int(11) NOT NULL,
  `ing_name` varchar(60) NOT NULL,
  `ing_quantity` varchar(60) NOT NULL,
  `ing_unit` varchar(60) NOT NULL,
  `ing_price` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ing_id`, `s_id`, `ing_name`, `ing_quantity`, `ing_unit`, `ing_price`) VALUES
('1', 1, 'Tomato', '34', 'kg', '6'),
('2', 1, 'Potato', '34', 'kg', '6');

-- --------------------------------------------------------

--
-- Table structure for table `ingridients_list`
--

CREATE TABLE `ingridients_list` (
  `ing_list_id` int(11) NOT NULL,
  `ing_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingridients_list`
--

INSERT INTO `ingridients_list` (`ing_list_id`, `ing_id`, `amount`) VALUES
(2, 1, 2),
(2, 2, 2),
(1, 1, 2),
(1, 2, 2),
(3, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `my_cart`
--

CREATE TABLE `my_cart` (
  `c_id` varchar(255) NOT NULL,
  `r_id` bigint(20) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_cart`
--

INSERT INTO `my_cart` (`c_id`, `r_id`, `amount`) VALUES
('20', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_delivery`
--

CREATE TABLE `order_delivery` (
  `deliver_id` varchar(60) NOT NULL,
  `order_id` varchar(60) NOT NULL,
  `delivery_status` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_spec`
--

CREATE TABLE `order_spec` (
  `order_spec_id` varchar(60) NOT NULL,
  `order_spec_name` varchar(60) NOT NULL,
  `order_spec_price` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `r_id` bigint(20) NOT NULL,
  `ing_list_id` bigint(20) NOT NULL,
  `r_name` varchar(60) NOT NULL,
  `r_type` varchar(255) NOT NULL,
  `r_time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `r_id_region` varchar(60) NOT NULL,
  `r_country` varchar(60) NOT NULL,
  `r_photo` varchar(255) NOT NULL,
  `recipe_text` varchar(1000) NOT NULL,
  `r_description` text NOT NULL,
  `r_price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(255) NOT NULL,
  `region_photo` varchar(255) NOT NULL,
  `region_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`region_id`, `region_name`, `region_photo`, `region_description`) VALUES
(1, 'West', 'assets/Recipe/img/rec1.jpg', 'Find the best, easy fast meal ideas from Western food recipes.'),
(2, 'East', 'assets/Recipe/img/rec1.jpg', 'Find the best, easy fast meal ideas from Eastern food recipes.');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `s_id` varchar(60) NOT NULL,
  `s_name` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_id` (`c_id`),
  ADD UNIQUE KEY `c_addressid` (`c_address_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`caddress_id`),
  ADD UNIQUE KEY `caddress_id` (`caddress_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `c_id` (`c_id`),
  ADD UNIQUE KEY `r_id` (`r_id`),
  ADD UNIQUE KEY `payment_id` (`payment_id`),
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD UNIQUE KEY `order_spec_id` (`order_spec_id`);

--
-- Indexes for table `customer_payment`
--
ALTER TABLE `customer_payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD UNIQUE KEY `payment_id` (`payment_id`),
  ADD UNIQUE KEY `c_id` (`c_id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ing_id`);

--
-- Indexes for table `my_cart`
--
ALTER TABLE `my_cart`
  ADD KEY `c_id` (`c_id`,`r_id`);

--
-- Indexes for table `order_delivery`
--
ALTER TABLE `order_delivery`
  ADD PRIMARY KEY (`deliver_id`);

--
-- Indexes for table `order_spec`
--
ALTER TABLE `order_spec`
  ADD PRIMARY KEY (`order_spec_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`r_id`),
  ADD UNIQUE KEY `ing_list_id` (`ing_list_id`),
  ADD UNIQUE KEY `r_id` (`r_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `caddress_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `r_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
