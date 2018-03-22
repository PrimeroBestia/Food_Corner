-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 02:19 PM
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
  `order_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_price` varchar(60) NOT NULL,
  `order_comment` text NOT NULL,
  `order_status` varchar(60) NOT NULL,
  `order_list_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `order_date`, `order_price`, `order_comment`, `order_status`, `order_list_id`, `c_id`, `payment_id`, `address_id`) VALUES
(10, '2018-03-22 08:08:55', '', '', 'Delivering', 10, 26, 0, 0),
(9, '2018-03-22 08:07:13', '', '', 'Delivering', 9, 26, 0, 0);

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
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `list_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`list_id`, `r_id`, `price`) VALUES
(5, 1, 0),
(6, 1, 0),
(8, 1, 0),
(9, 1, 0),
(10, 1, 0);

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
  `recipe_text` text NOT NULL,
  `r_description` text NOT NULL,
  `r_price` int(11) NOT NULL,
  `r_time` int(11) NOT NULL,
  `r_serve` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`r_id`, `ing_list_id`, `r_name`, `r_type`, `r_time_created`, `r_id_region`, `r_country`, `r_photo`, `recipe_text`, `r_description`, `r_price`, `r_time`, `r_serve`) VALUES
(1, 1, 'Blue Tarts', 'Pastry', '2018-03-21 19:50:29', '1', 'Canada', '1.jpg', '1. Prepare muffin pans by rolling out pie dough and cutting 4-inch (approx) circles; fit dough circles into muffin cups; set aside in fridge until ready to fill.\r\n2. In a small bowl, place raisins and cover with hot tap water; let stand on the counter for 30 minutes.\r\n3. In a large bowl, using a wooden spoon, mix together the soft butter, brown sugar, salt and corn syrup; stir well until sugar is dissolved and butter is creamed.\r\n4. Add egg and vanilla and mix well.\r\n5. Drain raisins\r\n6. Retrieve tart shells and divide raisins equally into all shells; then divide butter mixture into all tarts\r\n7. Bake at 400F for 15-20 minutes; filling will be lightly browned but still bubbling.\r\n8. Canadians fall into two camps about butter tarts and are quite loyal to their favourite type: runny or firm.\r\n9. If you like firm, bake them for the full 20 minutes, even adding another minute or two if you wish.\r\n10. Let cooked butter tarts cool in pans for 10 minutes after removing from oven; then remove and place on racks until completely cool.\r\n', 'A butter tart is a type of small pastry tart highly regarded in Canadian cuisine and considered one of Canada\'s quintessential treats. It consists of a filling of butter, sugar, syrup, and egg, baked in a pastry shell until the filling is semi-solid with a crunchy top.', 0, 80, 4);

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
  ADD UNIQUE KEY `order_id` (`order_id`);

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
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
