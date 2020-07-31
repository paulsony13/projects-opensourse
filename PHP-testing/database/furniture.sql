-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 07:53 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `email`, `account_no`, `password`) VALUES
(1, 'admin@123.com', '987654321DFD', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE IF NOT EXISTS `tbl_account` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`id`, `email`, `account_no`, `password`) VALUES
(1, 'admin@123.com', '123furniture', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'chair'),
(2, 'table'),
(3, 'Chair'),
(4, 'Table'),
(5, 'Bed'),
(6, 'Chair'),
(7, 'Table'),
(8, 'Bed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE IF NOT EXISTS `tbl_complaint` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `complaint_description` varchar(50) NOT NULL,
  `complaint_date` date NOT NULL,
  `contact_no` int(11) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'open',
  `remark` varchar(50) NOT NULL,
  `complaintclosing_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`id`, `cust_id`, `complaint_description`, `complaint_date`, `contact_no`, `status`, `remark`, `complaintclosing_date`) VALUES
(1, 1, ' hhhhhhhhhhhh', '0000-00-00', 2147483647, '0', 'hhhhhhhhhhhhh', '0000-00-00'),
(2, 1, ' hggggggg', '2019-01-24', 2147483647, '0', 'nhn', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `house` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `first_name`, `last_name`, `gender`, `house`, `street`, `city`, `state`, `phone_number`, `email`, `password`) VALUES
(2, 'admin', 'admin', 'male', 'abcd', 'efg', 'hijk', 'lmnop', 1234567890, 'admin@123.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `feedback_description` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `cust_id`, `feedback_description`, `category`) VALUES
(1, 1, ' hhhhhhhhhhhhhhhhhhhhhh', '0'),
(2, 1, ' ,,,,mmmmmmmmmm', 'chair');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE IF NOT EXISTS `tbl_group` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`id`, `name`, `description`) VALUES
(4, 'Teak', ''),
(5, 'Steal', ''),
(6, 'Rose Wood', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE IF NOT EXISTS `tbl_item` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `rate` varchar(150) NOT NULL,
  `size` int(11) NOT NULL,
  `image` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`id`, `cat_id`, `subcat_id`, `group_id`, `name`, `description`, `quantity`, `rate`, `size`, `image`) VALUES
(1, 1, 4, 4, 'teaky chair', 'it is made of teak wood which is imported from Ame', '15', '20', 1, '2019-01-16-03-50-25ch5.jpg'),
(2, 8, 6, 6, 'rossy bed', 'its sweet & soo beautifull look with well furnishe', '14', '50', 4, '2019-01-16-03-52-02bed4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_c`
--

CREATE TABLE IF NOT EXISTS `tbl_order_c` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `om_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_c`
--

INSERT INTO `tbl_order_c` (`id`, `item_id`, `om_id`, `order_qty`, `price`) VALUES
(1, 1, 1, 2, '200'),
(2, 2, 1, 4, '500'),
(3, 1, 2, 3, '20'),
(4, 2, 2, 4, '50'),
(5, 1, 3, 1, '20'),
(6, 2, 3, 1, '50'),
(7, 1, 4, 1, '20'),
(8, 1, 5, 5, '20'),
(9, 1, 6, 5, '20'),
(10, 1, 7, 1, '20'),
(11, 1, 8, 5, '20'),
(12, 2, 8, 6, '50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_m`
--

CREATE TABLE IF NOT EXISTS `tbl_order_m` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `o_date` date NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'cart'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_m`
--

INSERT INTO `tbl_order_m` (`id`, `cust_id`, `o_date`, `status`) VALUES
(1, 2, '2019-02-01', 'Purchased'),
(2, 2, '2019-02-01', 'Purchased'),
(3, 2, '2019-02-01', 'Purchased'),
(4, 2, '2019-02-01', 'Purchased'),
(5, 2, '2019-02-01', 'Purchased'),
(6, 2, '2019-02-01', 'Purchased'),
(7, 2, '2019-02-01', 'Purchased'),
(8, 2, '2019-02-01', 'Purchased');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `account_no` varchar(20) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `remark` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `email`, `amount`, `payment_date`, `account_no`, `payment_type`, `remark`) VALUES
(1, 'admin@123.com', 5000, '2019-02-01 06:50:37', '123furniture', 'credit', 'success'),
(11, 'admin@123.com', 260, '2019-02-01 16:59:46', '123furniture', 'debit', 'success'),
(13, 'admin@123.com', 20, '2019-02-01 17:02:29', '123furniture', 'debit', 'success'),
(14, 'admin@123.com', 100, '2019-02-01 17:06:54', '123furniture', 'debit', 'success'),
(15, 'admin@123.com', 100, '2019-02-01 17:08:26', '123furniture', 'debit', 'success'),
(16, 'admin@123.com', 20, '2019-02-01 17:10:07', '123furniture', 'debit', 'success'),
(17, 'admin@123.com', 400, '2019-02-01 17:12:14', '123furniture', 'debit', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_c`
--

CREATE TABLE IF NOT EXISTS `tbl_purchase_c` (
  `id` int(11) NOT NULL,
  `pm_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `date_of_manufacture` date NOT NULL,
  `date_of_expiry` date NOT NULL,
  `purchase_price` double NOT NULL,
  `purchase_quantity` bigint(20) NOT NULL,
  `mrp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_m`
--

CREATE TABLE IF NOT EXISTS `tbl_purchase_m` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `date_of_purchase` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales`
--

CREATE TABLE IF NOT EXISTS `tbl_sales` (
  `id` int(11) NOT NULL,
  `om_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `sales_price` int(11) NOT NULL,
  `date_of_sales` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sales`
--

INSERT INTO `tbl_sales` (`id`, `om_id`, `stock_id`, `cust_id`, `quantity`, `sales_price`, `date_of_sales`) VALUES
(1, 3, 0, 2, 0, 600, '2019-02-01 06:48:44'),
(2, 5, 0, 2, 0, 800, '2019-02-01 06:51:19'),
(3, 6, 0, 2, 0, 1400, '2019-02-01 16:19:01'),
(4, 7, 0, 2, 0, 200, '2019-02-01 16:33:05'),
(5, 8, 0, 2, 0, 200, '2019-02-01 16:36:11'),
(6, 9, 0, 2, 0, 200, '2019-02-01 16:38:51'),
(7, 10, 0, 2, 0, 2000, '2019-02-01 16:40:54'),
(8, 11, 0, 2, 0, 2700, '2019-02-01 16:45:47'),
(9, 1, 0, 2, 0, 2400, '2019-02-01 16:53:31'),
(10, 2, 0, 2, 0, 260, '2019-02-01 16:59:46'),
(11, 3, 0, 2, 0, 70, '2019-02-01 17:01:01'),
(12, 4, 0, 2, 0, 20, '2019-02-01 17:02:29'),
(13, 5, 0, 2, 0, 100, '2019-02-01 17:06:55'),
(14, 6, 0, 2, 0, 100, '2019-02-01 17:08:26'),
(15, 7, 0, 2, 0, 20, '2019-02-01 17:10:07'),
(16, 8, 0, 2, 0, 400, '2019-02-01 17:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `house_name` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `date_of_joining` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `house_name`, `street`, `city`, `state`, `phone_number`, `email`, `password`, `designation`, `date_of_joining`, `status`) VALUES
(1, 'ghgh', 'jhhj', '2018-12-05', 'hjhg', 'hh', '', 'njk', 'n', 0, 'nj', '66', '455', '2018-12-05', 'ghg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE IF NOT EXISTS `tbl_stock` (
  `id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `purchase_qty` int(11) NOT NULL,
  `sales_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE IF NOT EXISTS `tbl_subcategory` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`id`, `cat_id`, `name`) VALUES
(4, 1, '1 Seater'),
(5, 2, '4 Seater'),
(6, 5, 'King Size');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor`
--

CREATE TABLE IF NOT EXISTS `tbl_vendor` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `house_name` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_c`
--
ALTER TABLE `tbl_order_c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_m`
--
ALTER TABLE `tbl_order_m`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_purchase_c`
--
ALTER TABLE `tbl_purchase_c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_purchase_m`
--
ALTER TABLE `tbl_purchase_m`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order_c`
--
ALTER TABLE `tbl_order_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_order_m`
--
ALTER TABLE `tbl_order_m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_purchase_c`
--
ALTER TABLE `tbl_purchase_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_purchase_m`
--
ALTER TABLE `tbl_purchase_m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
