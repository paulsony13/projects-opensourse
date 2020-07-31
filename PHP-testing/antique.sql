-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 08:05 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `antique`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipCode` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `payment_type` varchar(200) NOT NULL,
  `purchase_date` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `name`, `email`, `country`, `address`, `city`, `zipCode`, `phone_number`, `amount`, `payment_type`, `purchase_date`, `comment`) VALUES
(1, 'abin ck', 'abin@gmail.com', 'ind', 'qwewqeqwe', 'kochi', '682001', '7410852963', '300', 'Card Payment', '24-06-2020 19:31:50', 'kdkd dkdkd dj d jasjd das kjnasj '),
(2, 'sebati kt', 'sebati@sebati.com', 'ind', 'qwertyui', 'sebati city', '741085', '7410852963', '25000', 'COD', '24-06-2020 19:44:23', 'j jasndjasndnj '),
(3, 'sebati kt', 'sebati@sebati.com', 'ind', 'qweqwe', 'sebati city', '789665', '7410852963', '200', 'COD', '24-06-2020 19:55:26', '11323211232113122132112'),
(4, 'abin ck', 'abin@gmail.com', 'ind', 'address', 'city', '741008', '7410852963', '7500', 'COD', '24-06-2020 21:55:54', 'comment');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  `cat_desc` varchar(300) NOT NULL,
  `cat_image` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `cat_name`, `cat_desc`, `cat_image`) VALUES
(1, 'Antique Ceramics', 'Love Antiques is the number one website for the highest quality antique ceramics from reputable antique dealers across the UK and Europe. Whether you are looking for an antique ceramic jar, a jug, figurines, bowls, or any other type of antique ceramics, you will find a vast selection to choose from ', '2020-06-24-12-28-1341NTSNrlZKL._SX355_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE IF NOT EXISTS `tbl_complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `complaint_description` varchar(200) NOT NULL,
  `complaint_date` varchar(200) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `remark` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`id`, `cust_id`, `complaint_description`, `complaint_date`, `contact_no`, `remark`) VALUES
(1, 1, ' complaint', '2020-06-24 21:56:23', '7410852963', 'remark');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `custfname` varchar(50) NOT NULL,
  `custlname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `house` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phn` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `custfname`, `custlname`, `gender`, `house`, `street`, `city`, `state`, `phn`, `email`, `username`, `password`) VALUES
(1, 'abin', 'ck', 'male', 'house', 'street', 'city', 'state', 2147483647, 'abin@gmail.com', 'qwerty', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `feedback_description` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `cust_id`, `feedback_description`, `category`) VALUES
(1, 1, ' feedback', 'Antique Ceramics');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE IF NOT EXISTS `tbl_item` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `subcat_id` int(10) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `rate` int(10) NOT NULL,
  `image` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`id`, `sid`, `cat_id`, `subcat_id`, `item_name`, `item_desc`, `qty`, `rate`, `image`) VALUES
(1, 1, 1, 1, 'Blue Glazed Studio Pottery Stoneware Bowl - Wise O', 'Grumbla Lane has clarified that the Blue Glazed St', 9, 5000, '2020-06-24-09-50-02dsc_0725.jpeg'),
(2, 1, 1, 1, 'Antique Farnham Pottery Owl Bowl Green Glaze Large Size', 'Antique, Arts & Crafts Farnham Pottery Green Glaze Owl Bowl.  Large size with three owl faced sides.  Farnham Pottery green glaze items were retailed at Liberty and Heals of London  Measures 20cm wide', 4, 2500, '2020-06-24-09-54-10dsc_0163.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `type`) VALUES
(1, 'qwerty', '12345', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_child`
--

CREATE TABLE IF NOT EXISTS `tbl_order_child` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `om_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `o_qty` int(10) NOT NULL,
  `price` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_order_child`
--

INSERT INTO `tbl_order_child` (`id`, `om_id`, `item_id`, `o_qty`, `price`) VALUES
(1, 1, 1, 1, 5000),
(2, 1, 2, 1, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_master`
--

CREATE TABLE IF NOT EXISTS `tbl_order_master` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_id` int(10) NOT NULL,
  `o_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_order_master`
--

INSERT INTO `tbl_order_master` (`id`, `cust_id`, `o_date`, `status`) VALUES
(1, 1, '2020-06-24', 'PURCHASED');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(11) NOT NULL,
  `payment_date` date NOT NULL,
  `account_no` varchar(11) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `remark` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seller`
--

CREATE TABLE IF NOT EXISTS `tbl_seller` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `slname` varchar(50) NOT NULL,
  `sphn` varchar(13) NOT NULL,
  `scity` varchar(50) NOT NULL,
  `sstate` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vname` (`sname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_seller`
--

INSERT INTO `tbl_seller` (`id`, `sname`, `slname`, `sphn`, `scity`, `sstate`, `username`, `password`) VALUES
(1, 'seller1', 'lname', '7410852963', 'city', 'state', 'qwerty', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE IF NOT EXISTS `tbl_subcategory` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `subcat_name` varchar(50) NOT NULL,
  `subcat_desc` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`id`, `cat_id`, `subcat_name`, `subcat_desc`) VALUES
(1, 1, 'Antique Bowls', 'Antique Bowls');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userpreference`
--

CREATE TABLE IF NOT EXISTS `tbl_userpreference` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `requrements` text NOT NULL,
  `uid` int(11) NOT NULL,
  `rdate` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_userpreference`
--

INSERT INTO `tbl_userpreference` (`id`, `requrements`, `uid`, `rdate`, `status`) VALUES
(1, ' requirements test 1', 1, '2020-06-24 21:57:26', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
