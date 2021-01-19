-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2021 at 09:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--
CREATE DATABASE IF NOT EXISTS `pos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pos`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `INID` int(11) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Bar_code` varchar(50) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `Unit_Price` varchar(20) NOT NULL,
  `Total_Price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `INID`, `Product_Name`, `Bar_code`, `qty`, `Unit_Price`, `Total_Price`) VALUES
(1, 1, 'pen', '100200', '3', '10', '30.0'),
(2, 1, 'pen', '100200', '3', '10', '30.0'),
(3, 1, 'box', '100500', '3', '50', '150.0'),
(4, 1, 'box', '100500', '3', '50', '150.0'),
(5, 1, 'pen', '100200', '3', '10', '30.0'),
(6, 1, 'mini book ', '100100', '3', '200', '600.0'),
(7, 1, 'mini book ', '100100', '3', '200', '600.0'),
(8, 1, 'pen', '100200', '5', '10', '50.0'),
(9, 1, 'pen', '100200', '5', '10', '50.0'),
(10, 1, 'pen', '100200', '5', '10', '50.0'),
(11, 1, 'pen', '100200', '5', '10', '50.0'),
(12, 1, 'pen', '100200', '5', '10', '50.0'),
(13, 1, 'box', '100500', '5', '50', '250.0'),
(14, 1, 'box', '100500', '5', '50', '250.0'),
(15, 1, 'box', '100500', '5', '50', '250.0'),
(16, 1, 'box', '100500', '5', '50', '250.0'),
(17, 1, 'pen', '100200', '3', '10', '30.0'),
(18, 1, 'pen', '100200', '3', '10', '30.0'),
(19, 1, 'pen', '100200', '3', '10', '30.0'),
(20, 1, 'box', '100500', '3', '50', '150.0'),
(21, 1, 'box', '100500', '3', '50', '150.0'),
(22, 1, 'box', '100500', '3', '50', '150.0'),
(23, 1, 'pen', '100200', '2', '10', '20.0'),
(24, 1, 'pen', '100200', '2', '10', '20.0'),
(25, 1, 'mini book ', '100100', '2', '200', '400.0'),
(26, 1, 'mini book ', '100100', '2', '200', '400.0'),
(27, 1, 'mini book ', '100100', '2', '200', '400.0'),
(28, 1, 'mini book ', '100100', '2', '200', '400.0'),
(29, 2, 'pen', '100200', '45', '10', '450.0'),
(30, 2, 'pen', '100200', '45', '10', '450.0'),
(31, 2, 'pen', '100200', '45', '10', '450.0'),
(32, 3, 'pen', '100200', '2', '10', '20.0'),
(33, 3, 'pen', '100200', '2', '10', '20.0'),
(34, 3, 'pen', '100200', '2', '10', '20.0'),
(35, 4, 'box', '100500', '4', '50', '200.0'),
(36, 5, 'pen', '100200', '3', '10', '30.0'),
(37, 5, 'pen', '100200', '3', '10', '30.0'),
(38, 5, 'pen', '100200', '3', '10', '30.0'),
(39, 5, 'mini book ', '100100', '3', '200', '600.0'),
(40, 5, 'mini book ', '100100', '3', '200', '600.0'),
(41, 5, 'mini book ', '100100', '3', '200', '600.0'),
(42, 6, 'pen', '100200', '4', '10', '40.0'),
(43, 6, 'pen', '100200', '4', '10', '40.0'),
(44, 6, 'pen', '100200', '4', '10', '40.0'),
(45, 7, 'pen', '100200', '3', '10', '30.0'),
(46, 7, 'pen', '100200', '3', '10', '30.0'),
(47, 7, 'box', '100500', '3', '50', '150.0'),
(48, 7, 'box', '100500', '3', '50', '150.0'),
(49, 7, 'mini book ', '100100', '3', '200', '600.0'),
(50, 7, 'mini book ', '100100', '3', '200', '600.0'),
(51, 8, 'pen', '100200', '3', '10', '30.0'),
(52, 8, 'mini book ', '100100', '3', '200', '600.0'),
(53, 8, 'box', '100500', '5', '50', '250.0'),
(54, 8, 'mini book ', '100100', '2', '200', '400.0'),
(55, 9, 'mini book ', '100100', '3', '200', '600.0'),
(56, 9, 'pen', '100200', '4', '10', '40.0'),
(57, 9, 'box', '100500', '8', '50', '400.0'),
(58, 9, 'Mouse', '12354', '9', '13', '117.0'),
(59, 9, 'keyboard', '123546', '4', '18', '72.0'),
(60, 9, 'keyboard', '123546', '4', '18', '72.0'),
(61, 9, 'keyboard', '123546', '4', '18', '72.0'),
(62, 9, 'keyboard', '123546', '4', '18', '72.0'),
(63, 9, 'keyboard', '123546', '4', '18', '72.0'),
(64, 9, 'keyboard', '123546', '4', '18', '72.0'),
(65, 9, 'keyboard', '123546', '4', '18', '72.0'),
(66, 10, 'pen', '100200', '5', '10', '50.0'),
(67, 11, 'Mouse', '12354', '3', '13', '39.0'),
(68, 11, 'pen', '100200', '3', '10', '30.0'),
(69, 11, 'Mouse', '12354', '3', '13', '39.0'),
(70, 11, 'pen', '100200', '3', '10', '30.0'),
(71, 12, 'keyboard', '123546', '2', '18', '36.0'),
(72, 14, 'mini book ', '100100', '32', '200', '6400.0'),
(73, 14, 'mini book ', '100100', 'wew', '200', '6400.0'),
(74, 14, 'mini book ', '100100', '23', '200', '4600.0'),
(75, 14, 'mini book ', '100100', '32', '200', '6400.0'),
(76, 14, 'mini book ', '100100', 'wew', '200', '6400.0'),
(77, 14, 'mini book ', '100100', '23', '200', '4600.0'),
(78, 15, 'mini book ', '100100', '3', '200', '600.0'),
(79, 15, 'box', '100500', '3', '50', '150.0'),
(80, 16, 'mini book ', '100100', '3', '200', '600.0'),
(81, 16, 'keyboard', '123546', '4', '18', '72.0');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `Tp_Number` varchar(10) NOT NULL,
  `registered_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `customer_name`, `Tp_Number`, `registered_date`) VALUES
(1, 'test', '12345', '2021-01-03 07:40:20'),
(2, 'baby boy', '9900-111', '2021-01-03 07:40:20'),
(3, 'smith', '789-456-1', '2021-01-03 07:40:20'),
(6, 'saman', '77-88-9', '2021-01-03 07:40:20'),
(8, 'jack', '78-2222', '2021-01-03 07:40:20'),
(10, 'sam', '999-9988', '2021-01-03 07:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL,
  `Employee_Name` varchar(50) NOT NULL,
  `employee_username` varchar(20) NOT NULL,
  `employee_type` varchar(10) NOT NULL,
  `reg_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `employee_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `Employee_Name`, `employee_username`, `employee_type`, `reg_on`, `employee_password`) VALUES
(1, 'emp King', 'user1', 'Cashier', '2021-01-09 09:29:09', 'user2'),
(2, 'andy gray', 'user3', 'CASHIERS', '2021-01-09 09:29:09', 'user3'),
(3, 'Robert', 'admin', 'MANAGER', '2021-01-09 09:29:09', 'king'),
(4, 'gooncy', 'user', 'CASHIERS', '2021-01-09 09:29:09', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

CREATE TABLE `extra` (
  `exid` int(11) NOT NULL,
  `val` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extra`
--

INSERT INTO `extra` (`exid`, `val`) VALUES
(1, '16');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Bar_code` varchar(20) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `p_units_package` int(11) NOT NULL DEFAULT 1,
  `Qty` varchar(10) NOT NULL,
  `Sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `Product_Name`, `Bar_code`, `Price`, `p_units_package`, `Qty`, `Sid`) VALUES
(3, 'box', '100500', '50', 123, '120', 1),
(4, 'mini book ', '100100', '200', 1, '10', 2),
(5, 'keyboard', '123546', '18', 1, '30', 3),
(7, 'marker', '6942210300034', '500', 1, '8', 1),
(10, 'rice', '199295043241', '1000', 1, '4', 2),
(12, 'test', '1234', '123', 12, '13', 3),
(13, 'xaxax123', '2121', '212', 21, '212', 4),
(14, 'sds', '2121', '21', 121, '12', 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_view`
-- (See below for the actual view)
--
CREATE TABLE `product_view` (
`pid` int(11)
,`Product_Name` varchar(50)
,`Bar_code` varchar(20)
,`Price` varchar(10)
,`p_units_package` int(11)
,`Qty` varchar(10)
,`supplier_Name` varchar(50)
,`Sid` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `saleid` int(11) NOT NULL,
  `INID` int(11) NOT NULL,
  `Cid` int(11) NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Total_Qty` varchar(10) NOT NULL,
  `Total_Bill` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Balance` varchar(10) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`saleid`, `INID`, `Cid`, `Customer_Name`, `Total_Qty`, `Total_Bill`, `Status`, `Balance`, `Time`) VALUES
(1, 1, 3, 'smith', '25.0', '250.0', 'UnPaid', '-1050.0', '2021-01-03 09:23:25'),
(2, 1, 6, 'saman', '9.0', '30.0', 'Partial', '-40.0', '2021-01-03 09:23:25'),
(3, 1, 8, 'jack', '9.0', '150.0', 'null', '0.0', '2021-01-03 09:23:25'),
(4, 1, 8, 'jack', '8.0', '400.0', 'Paid', '0.0', '2021-01-03 09:23:25'),
(5, 1, 2, 'baby boy', '4.0', '400.0', 'Paid', '0.0', '2021-01-03 09:23:25'),
(6, 2, 6, 'saman', '135.0', '450.0', 'Paid', '0.0', '2021-01-03 09:23:25'),
(7, 3, 2, 'baby boy', '6.0', '20.0', 'Partial', '-10.0', '2021-01-03 09:23:25'),
(8, 4, 3, 'smith', '4.0', '200.0', 'UnPaid', '-200.0', '2021-01-03 09:23:25'),
(9, 5, 2, 'baby boy', '18.0', '600.0', 'UnPaid', '-1890.0', '2021-01-03 09:23:25'),
(10, 6, 6, 'saman', '12.0', '40.0', 'UnPaid', '-120.0', '2021-01-03 09:23:25'),
(11, 7, 3, 'smith', '18.0', '1560.0', 'UnPaid', '-1560.0', '2021-01-03 09:23:25'),
(12, 8, 3, 'smith', '13.0', '1280.0', 'Partial', '-280.0', '2021-01-03 09:23:25'),
(13, 9, 8, 'jack', '52.0', '1661.0', 'Partial', '-1611.0', '2021-01-03 09:23:25'),
(14, 10, 8, 'jack', '5.0', '50.0', 'UnPaid', '-50.0', '2021-01-03 09:23:25'),
(15, 11, 8, 'jack', '6.0', '69.0', 'Paid', '8931.0', '2021-01-03 09:23:25'),
(16, 11, 8, 'jack', '6.0', '69.0', 'Paid', '8931.0', '2021-01-03 09:23:25'),
(17, 12, 3, 'smith', '2.0', '36.0', 'Paid', '64.0', '2021-01-03 09:23:25'),
(18, 13, 0, 'test', '00', '00.00', 'UnPaid', '00.00', '2021-01-03 09:23:25'),
(19, 14, 0, 'test', '32.0', '17400.0', 'Paid', '2600.0', '2021-01-03 09:23:25'),
(20, 14, 0, 'test', '32.0', '17400.0', 'Paid', '2600.0', '2021-01-03 09:23:25'),
(21, 15, 0, 'test', '6.0', '750.0', 'Paid', '250.0', '2021-01-03 09:23:25'),
(22, 16, 0, 'test', '7.0', '672.0', 'Paid', '328.0', '2021-01-03 09:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sid` int(11) NOT NULL,
  `supplier_Name` varchar(50) NOT NULL,
  `Tp_Number` varchar(10) NOT NULL,
  `sregTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sid`, `supplier_Name`, `Tp_Number`, `sregTime`) VALUES
(1, 'sup test', '1100', '2021-01-03 07:46:29'),
(2, 'mike', '`456-7854', '2021-01-03 07:46:29'),
(3, 'albert', '789-88', '2021-01-03 07:46:29'),
(4, 'baby', '222-33', '2021-01-03 07:46:29');

-- --------------------------------------------------------

--
-- Structure for view `product_view`
--
DROP TABLE IF EXISTS `product_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_view`  AS SELECT `product`.`pid` AS `pid`, `product`.`Product_Name` AS `Product_Name`, `product`.`Bar_code` AS `Bar_code`, `product`.`Price` AS `Price`, `product`.`p_units_package` AS `p_units_package`, `product`.`Qty` AS `Qty`, `supplier`.`supplier_Name` AS `supplier_Name`, `supplier`.`sid` AS `Sid` FROM (`product` join `supplier` on(`product`.`Sid` = `supplier`.`sid`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`exid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`saleid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `extra`
--
ALTER TABLE `extra`
  MODIFY `exid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `saleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
