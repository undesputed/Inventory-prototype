-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 07:46 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `cashier_id` int(11) NOT NULL,
  `cashier_lastname` varchar(255) DEFAULT NULL,
  `cashier_firstname` varchar(255) DEFAULT NULL,
  `cashier_mi` varchar(2) DEFAULT NULL,
  `cashier_username` varchar(255) DEFAULT NULL,
  `cashier_password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`cashier_id`, `cashier_lastname`, `cashier_firstname`, `cashier_mi`, `cashier_username`, `cashier_password`) VALUES
(12, 'Yu', 'Carrie', 'A', 'carrie@gmail.com', '123'),
(10, 'Yu', '1234', 'A', 'admin@admin.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `clerk`
--

CREATE TABLE `clerk` (
  `clerk_id` int(11) NOT NULL,
  `clerk_lastname` varchar(255) DEFAULT NULL,
  `clerk_firstname` varchar(255) DEFAULT NULL,
  `clerk_mi` varchar(2) DEFAULT NULL,
  `clerk_username` varchar(255) DEFAULT NULL,
  `clerk_password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clerk`
--

INSERT INTO `clerk` (`clerk_id`, `clerk_lastname`, `clerk_firstname`, `clerk_mi`, `clerk_username`, `clerk_password`) VALUES
(1, 'Potot', 'Ej ', 'O', 'EJ@potot.com', '123'),
(2, 'Yu', 'Carrie', 'A', 'carrie@gmail.com', '123'),
(3, 'Tuyor', 'Roseline', 'A', 'rose@rose.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `dealer_id` int(11) NOT NULL,
  `dealer_lastname` varchar(255) DEFAULT NULL,
  `dealer_firstname` varchar(255) DEFAULT NULL,
  `dealer_mi` varchar(2) DEFAULT NULL,
  `dealer_username` varchar(255) DEFAULT NULL,
  `dealer_password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`dealer_id`, `dealer_lastname`, `dealer_firstname`, `dealer_mi`, `dealer_username`, `dealer_password`) VALUES
(1, 'yu', 'carrie', 'A', 'carrie@gmail.com', '123'),
(2, 'Pinez', 'Arwin Kim', 'A', 'arwin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inven_id` int(11) NOT NULL,
  `inven_name` varchar(255) DEFAULT NULL,
  `inven_quantity` int(50) DEFAULT NULL,
  `inven_desc` varchar(255) DEFAULT NULL,
  `inven_price` int(50) DEFAULT NULL,
  `cashier_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inven_id`, `inven_name`, `inven_quantity`, `inven_desc`, `inven_price`, `cashier_id`) VALUES
(31121423, 'Kalamay', 323, 'I don\'t know what it is', 35, 1),
(8427192, 'Paper', 5000, 'Just a paper', 31, 10),
(8488381, 'Wooden Table', 3000, 'It is a table obviously', 300, 10),
(28383912, 'Mentos', 2000, 'Candy Menthol', 10, 10),
(48323811, 'Peanut FIngers', 400, 'Peanut Shaped fingers', 45, 10);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) DEFAULT NULL,
  `prod_quantity` int(50) DEFAULT NULL,
  `prod_desc` varchar(255) DEFAULT NULL,
  `prod_price` int(255) DEFAULT NULL,
  `dealer_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_quantity`, `prod_desc`, `prod_price`, `dealer_id`) VALUES
(123834829, 'Cake', 300, 'Chocolate Cake', 200, 1),
(381928191, 'Peanut Kisses', 300, 'Peanut Shaped like kisses', 15, 0),
(84928382, 'Nutella', 500, 'Very sweet chocolate', 1300, 0),
(483839128, 'Baker\'s Best', 4000, 'Slice Bread', 45, 0),
(747283829, 'VitaMilk', 1000, 'Milk with vitamins', 50, 0),
(48399210, 'Rice', 300, 'Banaue Rice Teraces', 50, 0),
(12345678, 'Carrie', 2, 'Big and fat', 21, 2),
(183891938, 'Nutella', 10, 'Chocolate', 11000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `super_id` int(11) NOT NULL,
  `super_lastname` varchar(255) DEFAULT NULL,
  `super_firstname` varchar(255) DEFAULT NULL,
  `super_mi` varchar(2) DEFAULT NULL,
  `super_username` varchar(255) DEFAULT NULL,
  `super_password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`super_id`, `super_lastname`, `super_firstname`, `super_mi`, `super_username`, `super_password`) VALUES
(1, 'yu', '123', 'A', 'admin@admin.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`cashier_id`);

--
-- Indexes for table `clerk`
--
ALTER TABLE `clerk`
  ADD PRIMARY KEY (`clerk_id`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`dealer_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inven_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`super_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `cashier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `clerk`
--
ALTER TABLE `clerk`
  MODIFY `clerk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `dealer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `super_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
