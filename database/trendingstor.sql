-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2024 at 08:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trendingstor`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `id` int(11) NOT NULL,
  `productid` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `itemname` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `imageone` varchar(200) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`id`, `productid`, `email`, `itemname`, `price`, `imageone`, `quantity`) VALUES
(35, 5, 'rajat120@gmail.com', 'Evil Eye Oversized hoodie', '1200', 'crazy1.webp', '1'),
(37, 2, 'saini.nis2002@gmail.com', 'Evil Eye Oversized hoodie', '1200', 'fort 5.webp', '1'),
(38, 4, 'saini.nis2002@gmail.com', 'Evil Eye Oversized hoodie', '1200', 'black1.webp', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `adminphone` bigint(10) NOT NULL,
  `adminemail` varchar(100) NOT NULL,
  `adminpass` varchar(100) NOT NULL,
  `adminaddress` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `adminphone`, `adminemail`, `adminpass`, `adminaddress`) VALUES
(1, 'Arjun Sharma', 7410741010, 'arjunsharma120@gmail.com', '1230', 'meerut ');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `id` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `adminemail` varchar(50) NOT NULL,
  `clothtype` varchar(50) NOT NULL,
  `descriptionadd` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `adminname`, `adminemail`, `clothtype`, `descriptionadd`) VALUES
(2, 'Arjun Sharma', 'arjunsharma120@gmail.com', 'Evil Eye Oversized hoodie', 'this is best clothe'),
(3, 'Arjun Sharma', 'arjunsharma120@gmail.com', 'Evil Eye Oversized hoodie', 'i am cool'),
(4, 'Arjun Sharma', 'arjunsharma120@gmail.com', 'Evil Eye Oversized hoodie', 'best prodcut'),
(5, 'Arjun Sharma', 'arjunsharma120@gmail.com', 'Evil Eye Oversized hoodie', 'st besrt'),
(6, 'Arjun Sharma', 'arjunsharma120@gmail.com', 'Evil Eye Oversized hoodie', 'this is best produvt');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `Landmark` varchar(200) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `productimage` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `productprice` varchar(100) NOT NULL,
  `productquantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`firstname`, `lastname`, `Address`, `city`, `zipcode`, `Landmark`, `mobile`, `email`, `productimage`, `productname`, `productprice`, `productquantity`) VALUES
('Arjun', 'Kumar', 'Kishanpura bagpat road Meerut', 'Meerut - Meerut', '250002', '', 7452826826, 'arjunkumar77vj@gmail.com', '', '', '', ''),
('Ayush', 'Kumar', 'Kishanpura bagpat road Meerut', 'Meerut - Meerut', '250002', 'smp', 7452826826, 'arjunkumar77vj@gmail.com', '', '', '', ''),
('Ayush', 'Kumar', 'Kishanpura bagpat road Meerut', 'Meerut - Meerut', '250002', 'smp', 7452826826, 'arjunkumar77vj@gmail.com', '', '', '', ''),
('Ayush', 'Kumar', 'Kishanpura bagpat road Meerut', 'Meerut - Meerut', '250002', 'smp', 7452826826, 'arjunkumar77vj@gmail.com', '', '', '', ''),
('Ayush', 'Kumar', 'Kishanpura bagpat road Meerut', 'Meerut - Meerut', '250002', 'smp', 7452826826, 'arjunkumar77vj@gmail.com', '', '', '', ''),
('Ayush', 'Kumar', 'Kishanpura bagpat road Meerut', 'Meerut - Meerut', '250002', 'smp', 7452826826, 'arjunkumar77vj@gmail.com', '', '', '', ''),
('', '', 'Kishanpura bagpat road Meerut', 'Meerut - Meerut', '250002', 'me', 7452826826, 'baggaji120@gmail.com', 'black1.webp', 'Evil Eye Oversized hoodie', '1200', '1'),
('', '', 'Kishanpura bagpat road Meerut', 'Meerut - Meerut', '250002', 'me', 7452826826, 'baggaji120@gmail.com', 'black1.webp', 'Evil Eye Oversized hoodie', '1200', '1'),
('', '', 'Kishanpura bagpat road Meerut', 'Meerut - Meerut', '250002', 'me', 7452826826, 'baggaji120@gmail.com', 'black1.webp', 'Evil Eye Oversized hoodie', '1200', '1'),
('', '', 'Kishanpura bagpat road Meerut', 'Meerut - Meerut', '250002', 'me', 7452826826, 'baggaji120@gmail.com', 'black1.webp', 'Evil Eye Oversized hoodie', '1200', '1'),
('Arjun', 'Kumar', 'Kishanpura bagpat road Meerut', 'Meerut - Meerut', '250002', '', 7452826826, 'arjunkumar77vj@gmail.com', 'black1.webp', 'Evil Eye Oversized hoodie', '1200', '1');

-- --------------------------------------------------------

--
-- Table structure for table `otherinfo`
--

CREATE TABLE `otherinfo` (
  `id` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `adminemail` varchar(100) NOT NULL,
  `countryproduct` varchar(50) NOT NULL,
  `printtype` varchar(100) NOT NULL,
  `sleeve` varchar(100) NOT NULL,
  `necktype` varchar(100) NOT NULL,
  `fit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otherinfo`
--

INSERT INTO `otherinfo` (`id`, `adminname`, `adminemail`, `countryproduct`, `printtype`, `sleeve`, `necktype`, `fit`) VALUES
(2, 'Arjun Sharma', 'arjunsharma120@gmail.com', 'india', 'Digital HD Print', 'half sleeve', 'hooide type', 'oversized'),
(3, 'Arjun Sharma', 'arjunsharma120@gmail.com', 'indian', 'kuch bhi', 'slleve', 'pta nahi', 'hoga'),
(4, 'Arjun Sharma', 'arjunsharma120@gmail.com', 'indian', 'eye', 'half', 'fit', 'fit'),
(5, 'Arjun Sharma', 'arjunsharma120@gmail.com', 'india', 'lkjfldjf', 'half', 'fit', 'fit'),
(6, 'Arjun Sharma', 'arjunsharma120@gmail.com', 'inda', 'fd', 'dfj', 'jkjk', '');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `adminemail` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dubprice` varchar(100) NOT NULL,
  `discount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `adminname`, `adminemail`, `price`, `dubprice`, `discount`) VALUES
(2, 'Arjun Sharma', 'arjunsharma120@gmail.com', '1200', '1700', '30'),
(3, 'Arjun Sharma', 'arjunsharma120@gmail.com', '500', '1000', '50%'),
(4, 'Arjun Sharma', 'arjunsharma120@gmail.com', '1200', '1700', '30'),
(5, 'Arjun Sharma', 'arjunsharma120@gmail.com', '1200', '1700', '30'),
(6, 'Arjun Sharma', 'arjunsharma120@gmail.com', '1200', '1700', '30');

-- --------------------------------------------------------

--
-- Table structure for table `registerdata`
--

CREATE TABLE `registerdata` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerdata`
--

INSERT INTO `registerdata` (`id`, `name`, `lname`, `email`, `password`) VALUES
(1, 'rajat', 'rajput', 'rajat120@gmail.com', '111'),
(2, 'Munna ', 'Tripathi', 'munnatripathi@gmail.com', '111'),
(3, 'vansh', 'kumar', 'vanshkumar@gmail.com', '123'),
(4, 'sambhav', 'bagga ji', 'baggaji120@gmail.com', '120'),
(5, 'nishant', 'saini', 'saini.nis2002@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `updatedetails`
--

CREATE TABLE `updatedetails` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `profilepic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updatedetails`
--

INSERT INTO `updatedetails` (`id`, `firstname`, `lastname`, `email`, `phone`, `address`, `profilepic`) VALUES
(1, 'Arjun', 'Kumar', 'arjunkumar77vj@gmail.com', 7452826826, 'Kishanpura bagpat road Meerut', 'Screenshot 2022-09-12 101444.png'),
(2, 'rajat', 'rajput', 'rajatrajput120@gmail.com', 7452826826, 'Kishanpura bagpat road Meerut', 'Screenshot 2022-09-12 101444.png'),
(3, 'ayush', 'lori', 'vanshkumar123@gmail.com', 7452826826, 'kam bol ', '1486906-565361-1BLBCF1508830511.png'),
(4, 'ayush', 'lori', 'vanshkumar123@gmail.com', 7452826826, 'kam bol ', '1486906-565361-1BLBCF1508830511.png'),
(5, 'karan ', 'kumar', 'karankumar12@gmail.com', 7321005558, 'meerut', 's.webp'),
(6, 'Arjun', 'KUMAR', 'NISHTANKUMAR123@GMAIL.COM', 7418529635, 'Kishanpura bagpat road Meerut', 'Screenshot 2022-09-12 101444.png'),
(7, 'Arjun', 'Kumar', 'arjunkumar77vj@gmail.com', 7410852963, 'Kishanpura bagpat road Meerut', ''),
(8, 'Arjun', 'Kumar', 'arjunkumar77vj@gmail.com', 7452826826, 'Kishanpura bagpat road Meerut', ''),
(9, 'Arjun', 'kumar', 'arjunkumar77vj@gmail.com', 7452826826, 'Kishanpura bagpat road Meerut', 'ava3 (1).webp'),
(10, 'rajat', 'rajput', 'rajat120@gmail.com', 789456123, 'meerut', ''),
(11, 'rajat', 'kumar', 'rajat120@gmail.com', 74852867, 'meerut', 'ava3 (1).webp'),
(12, 'nishant', 'saini', 'saini.nis2002@gmail.com', 8650094290, 'meerut', 'ava3 (1).webp');

-- --------------------------------------------------------

--
-- Table structure for table `uppcloth`
--

CREATE TABLE `uppcloth` (
  `id` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `adminemail` varchar(100) NOT NULL,
  `clothname` varchar(100) NOT NULL,
  `clothtype` varchar(100) NOT NULL,
  `clothS` varchar(100) NOT NULL,
  `clothM` varchar(50) NOT NULL,
  `clothL` varchar(50) NOT NULL,
  `clothXL` varchar(50) NOT NULL,
  `clothXXL` varchar(50) NOT NULL,
  `fabric` varchar(100) NOT NULL,
  `color` varchar(500) NOT NULL,
  `imageone` varchar(1000) NOT NULL,
  `imagetwo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uppcloth`
--

INSERT INTO `uppcloth` (`id`, `adminname`, `adminemail`, `clothname`, `clothtype`, `clothS`, `clothM`, `clothL`, `clothXL`, `clothXXL`, `fabric`, `color`, `imageone`, `imagetwo`) VALUES
(2, 'Arjun Sharma', 'arjunsharma120@gmail.com', ' Hoodie', 'Evil Eye Oversized hoodie', 's', 'm', 'l', 'xl', 'xl', 'cotton', 'Red', 'fort 5.webp', 'fort 5.webp'),
(3, 'Arjun Sharma', 'arjunsharma120@gmail.com', ' Hoodie', 'Evil Eye Oversized hoodie', 's', 'm', 'l', 'xl', 'xl', 'cotton', 'white', 'back3.webp', 'back2.webp'),
(4, 'Arjun Sharma', 'arjunsharma120@gmail.com', ' Tops', 'Evil Eye Oversized hoodie', 's', 'm', 'kj', 'lkljkl', 'lkljkl', 'silk', 'black', 'black1.webp', 'black4.webp'),
(5, 'Arjun Sharma', 'arjunsharma120@gmail.com', ' Hoodie', 'Evil Eye Oversized hoodie', 's', 'm', 'l', 'xl', 'xl', 'cotton', 'all', 'crazy1.webp', 'black2.webp'),
(6, 'Arjun Sharma', 'arjunsharma120@gmail.com', ' Hoodie', 'Evil Eye Oversized hoodie', 's', 'l', 'm', 'xl', 'xl', 'cotton', 'all', 'black3.webp', 'black4.webp'),
(7, 'Arjun Sharma', 'arjunsharma120@gmail.com', ' Blouses', 'Evil Eye Oversized hoodie', 's', 'm', '', '', '', 'polyester', 'red', 'fort 5.webp', 'black1.webp');

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `landmark` varchar(500) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(500) NOT NULL,
  `productimage` varchar(200) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `productprice` varchar(100) NOT NULL,
  `productquantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userorder`
--

INSERT INTO `userorder` (`id`, `firstname`, `lastname`, `address`, `city`, `zipcode`, `landmark`, `mobile`, `email`, `productimage`, `productname`, `productprice`, `productquantity`) VALUES
(1, 'Ayush', 'Kumar', 'Kishanpura bagpat road Meerut', 'Meerut - Meerut', '250002', 'smp', 7452826826, 'rajat120@gmail.com', 'crazy1.webp', 'Evil Eye Oversized hoodie', '1200', '1'),
(2, 'nishant', 'saini', 'meerut', 'meerut', '250002', 'brampuri', 8650094290, 'meerut', 'fort 5.webp', 'Evil Eye Oversized hoodie', '1200', '1'),
(3, 'nishant', 'Kumar', 'Kishanpura bagpat road Meerut', 'Meerut - Meerut', '250002', 'smp', 7452826826, 'saini.nis2002@gmail.com', 'black1.webp', 'Evil Eye Oversized hoodie', '1200', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otherinfo`
--
ALTER TABLE `otherinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerdata`
--
ALTER TABLE `registerdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updatedetails`
--
ALTER TABLE `updatedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uppcloth`
--
ALTER TABLE `uppcloth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `otherinfo`
--
ALTER TABLE `otherinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registerdata`
--
ALTER TABLE `registerdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `updatedetails`
--
ALTER TABLE `updatedetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uppcloth`
--
ALTER TABLE `uppcloth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
