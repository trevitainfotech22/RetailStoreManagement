-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 04:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `d_id` int(11) NOT NULL,
  `d_dob` varchar(25) NOT NULL,
  `d_rootno` double NOT NULL,
  `d_carno` double NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE `kitchen` (
  `k_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_id` int(100) NOT NULL,
  `v_id` int(100) NOT NULL,
  `s_id` int(100) NOT NULL,
  `d_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `o_total` double NOT NULL,
  `o_deliverydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `oi_id` int(100) NOT NULL,
  `o_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `qauntity` double NOT NULL,
  `oi_date` date NOT NULL,
  `oi_totalamt` double NOT NULL,
  `d_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personaldetail`
--

CREATE TABLE `personaldetail` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `p_username` varchar(255) NOT NULL,
  `p_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personaldetail`
--

INSERT INTO `personaldetail` (`p_id`, `p_name`, `p_address`, `p_username`, `p_password`) VALUES
(1, 'Rohit Sharma', '34,shree nagar ahmedabad', 'rohit', '789'),
(2, 'demo', 'sdsaf', 'demo1', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pr_id` int(100) NOT NULL,
  `pr_productname` varchar(100) NOT NULL,
  `pr_size` int(100) NOT NULL,
  `pr_price` double NOT NULL,
  `pr_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pr_id`, `pr_productname`, `pr_size`, `pr_price`, `pr_category`) VALUES
(1, 'kitchen magic', 2, 200, 'kitchen product');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `s_id` int(11) NOT NULL,
  `s_dob` varchar(255) NOT NULL,
  `s_phone` bigint(10) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`s_id`, `s_dob`, `s_phone`, `p_id`) VALUES
(1, '2000-04-24', 9567487560, 1),
(2, '2001-02-04', 9589485923, 2);

-- --------------------------------------------------------

--
-- Table structure for table `salesmanager`
--

CREATE TABLE `salesmanager` (
  `sa_id` int(11) NOT NULL,
  `sa_shopname` varchar(255) NOT NULL,
  `sa_owername` varchar(255) NOT NULL,
  `sa_feedback` varchar(255) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `storemanager`
--

CREATE TABLE `storemanager` (
  `sm_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `username`, `password`, `role`) VALUES
(1, 'Shivani Panchal', 'shivani', 'S1234', 1),
(2, 'Riddhi Patel', 'riddhi', '123', 1),
(4, 'demo', 'demo1', '1234', 3);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `v_id` int(100) NOT NULL,
  `sm_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `test3` (`p_id`);

--
-- Indexes for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`k_id`),
  ADD KEY `test2` (`p_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `test8` (`v_id`),
  ADD KEY `test9` (`s_id`),
  ADD KEY `test15` (`d_id`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`oi_id`),
  ADD KEY `pr` (`o_id`),
  ADD KEY `pr1` (`p_id`);

--
-- Indexes for table `personaldetail`
--
ALTER TABLE `personaldetail`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `salesmanager`
--
ALTER TABLE `salesmanager`
  ADD PRIMARY KEY (`sa_id`),
  ADD KEY `test6` (`p_id`);

--
-- Indexes for table `storemanager`
--
ALTER TABLE `storemanager`
  ADD PRIMARY KEY (`sm_id`),
  ADD KEY `test` (`p_id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `test7` (`sm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `o_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `oi_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personaldetail`
--
ALTER TABLE `personaldetail`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pr_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salesmanager`
--
ALTER TABLE `salesmanager`
  MODIFY `sa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storemanager`
--
ALTER TABLE `storemanager`
  MODIFY `sm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `test3` FOREIGN KEY (`p_id`) REFERENCES `personaldetail` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD CONSTRAINT `test2` FOREIGN KEY (`p_id`) REFERENCES `personaldetail` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `test15` FOREIGN KEY (`d_id`) REFERENCES `delveryboy` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test8` FOREIGN KEY (`v_id`) REFERENCES `vendor` (`v_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test9` FOREIGN KEY (`s_id`) REFERENCES `salesman` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `pr` FOREIGN KEY (`o_id`) REFERENCES `order` (`o_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pr1` FOREIGN KEY (`p_id`) REFERENCES `product` (`pr_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `p_id` FOREIGN KEY (`p_id`) REFERENCES `personaldetail` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salesmanager`
--
ALTER TABLE `salesmanager`
  ADD CONSTRAINT `test6` FOREIGN KEY (`p_id`) REFERENCES `personaldetail` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `storemanager`
--
ALTER TABLE `storemanager`
  ADD CONSTRAINT `test` FOREIGN KEY (`p_id`) REFERENCES `personaldetail` (`p_id`);

--
-- Constraints for table `vendor`
--
ALTER TABLE `vendor`
  ADD CONSTRAINT `test7` FOREIGN KEY (`sm_id`) REFERENCES `storemanager` (`sm_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
