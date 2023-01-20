-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 12:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kings`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `code` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `fabric` varchar(255) NOT NULL,
  `size` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fashion` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `cost_price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`code`, `name`, `brand`, `fabric`, `size`, `price`, `image`, `fashion`, `category`, `cost_price`) VALUES
('le0s', 'Trouser', 'NorthFace', 'Cotton', 'S,M,L,XL', '1000', '1556744808.jpg', 'men', 'pant', NULL),
('lvui', 'Skull Tshirt', 'Gorkhali', 'Cotton', 'S,M,L,XL', '400', '1556745495.jpg', 'men', 't-shirt', NULL),
('m8yc', 'Wind Cheater Jacket', 'NorthFace', 'Silicon', 'S,M,L,XL', '1500', '1556744091.jpg', 'men', 'jacket', NULL),
('mwid', 'Hoodie', 'Jack and Jones', 'Cotton', 'S,M,L,XL', '1200', '1556744047.jpg', 'men', 'jacket', NULL),
('niq3', 'Jeans Jacket', 'Jack and Jones', 'Jeans', 'S,M,L,XL', '5000', '1556744205.jpg', 'men', 'jacket', NULL),
('o4a0', 'Primal Tshirt', 'Jack and Jones', 'Cotton', 'S,M,L,XL', '700', '1556745956.jpg', 'men', 't-shirt', NULL),
('ooap', 'Plain Tshirt', 'Jack and Jones', 'Cotton', 'S,M,L,XL', '700', '1556745702.jpg', 'men', 't-shirt', NULL),
('oofk', 'Trust Tshirt', 'Jack and Jones', 'Cotton', 'S,M,L,XL', '4000', '1556745666.jpg', 'men', 't-shirt', NULL),
('ox6j', 'Trouser', 'NorthFace', 'Silicon', 'S,M,L,XL', '3000', '1556744845.jpg', 'men', 'pant', NULL),
('pav1', 'Cotton Shirt', 'Jack and Jones', 'Cotton', 'S,M,L,XL', '5000', '1556745031.jpg', 'men', 'shirt', NULL),
('qyhf', 'Check Shirt', 'Raymond', 'Cotton', 'S,M,L,XL', '500', '1556745343.jpg', 'men', 'shirt', NULL),
('rh4v', 'Titans Tshirt', 'Latido', 'Cotton', 'S,M,L,XL', '500', '1556745755.jpg', 'men', 't-shirt', NULL),
('rwaq', 'Germany Trust Tshirt', 'Raymond', 'Cotton', 'S,M,L,XL', '600', '1556745833.jpg', 'men', 't-shirt', NULL),
('rzuk', 'Boxer Pant', 'NorthFace', 'Cotton', 'S,M,L,XL', '1000', '1556744563.jpg', 'men', 'pant', NULL),
('s5lf', 'Germany Tshirt', 'Calvin Clein', 'Cotton', 'S,M,L,XL', '600', '1556745528.jpg', 'men', 't-shirt', NULL),
('s68u', 'Jogger', 'NorthFace', 'Cotton', 'S,M,L,XL', '5000', '1556744655.jpg', 'men', 'pant', NULL),
('sw0g', 'Casual Jacket', 'Jack and Jones', 'Cotton', 'S,M,L,XL', '3300', '1556744303.jpg', 'men', 'jacket', NULL),
('xcv3', 'Cotton Shirt', 'Calvin Clein', 'Cotton', 'S,M,L,XL', '4000', '1556745247.jpg', 'men', 'shirt', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `code` varchar(100) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `size` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `user_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`code`, `product_name`, `quantity`, `size`, `price`, `phone`, `email`, `user_name`) VALUES
('niq3', 'Jeans Jacket', 1, 's', 5000, 2147483647, 'bijal@gmail.com', 'Bijal'),
('xcv3', 'Cotton Shirt', 3, 's', 12000, 2147483647, 'bijal@gmail.com', 'Bijal'),
('ox6j', 'Trouser', 1, 's', 3000, 2147483647, 'bijal@gmail.com', 'Bijal'),
('m8yc', 'Wind Cheater Jacket', 1, 's', 1500, 2147483647, 'bijal@gmail.com', 'Bijal');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `code` varchar(100) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL,
  `size` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `user_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`code`, `product_name`, `quantity`, `size`, `price`, `phone`, `email`, `user_name`) VALUES
('ooap', 'Plain Tshirt', 2, 's', 1400, 2147483647, '', 'admin'),
('ooap', 'Plain Tshirt', 2, 's', 1400, 2147483647, '', 'admin'),
('qyhf', 'Check Shirt', 1, 's', 500, 2147483647, 'Kayastha.deepesh@gmail.com', 'deepesh'),
('ooap', 'Plain Tshirt', 1, 's', 700, 2147483647, 'Kayastha.deepesh@gmail.com', 'deepesh'),
('o4a0', 'Primal Tshirt', 1, 's', 700, 899798, 'akash@gmail.com', 'Akash'),
('lvui', 'Skull Tshirt', 1, 's', 400, 899798, 'akash@gmail.com', 'Akash'),
('mwid', 'Hoodie', 1, 's', 1200, 899798, 'akash@gmail.com', 'Akash'),
('sw0g', 'Casual Jacket', 1, 's', 3300, 899798, 'akash@gmail.com', 'Akash'),
('sw0g', 'Casual Jacket', 1, 's', 3300, 2147483647, 'mina@gmail.com', 'mina'),
('s5lf', 'Germany Tshirt', 2, 's', 1200, 899798, 'akash@gmail.com', 'Akash'),
('rzuk', 'Boxer Pant', 1, 's', 1000, 899798, 'akash@gmail.com', 'Akash'),
('ox6j', 'Trouser', 1, 's', 3000, 899798, 'akash@gmail.com', 'Akash'),
('xcv3', 'Cotton Shirt', 1, 's', 4000, 899798, 'akash@gmail.com', 'Akash'),
('niq3', 'Jeans Jacket', 1, 's', 5000, 899798, 'akash@gmail.com', 'Akash'),
('niq3', 'Jeans Jacket', 1, 's', 5000, 2147483647, 'bijal@gmail.com', 'Bijal'),
('niq3', 'Jeans Jacket', 1, 's', 5000, 2147483647, 'bijal@gmail.com', 'Bijal'),
('rzuk', 'Boxer Pant', 1, 's', 1000, 2147483647, 'bijal@gmail.com', 'Bijal'),
('rzuk', 'Boxer Pant', 1, 's', 1000, 2147483647, 'bijal@gmail.com', 'Bijal'),
('ooap', 'Plain Tshirt', 1, 's', 700, 899798, 'akash@gmail.com', 'Akash'),
('o4a0', 'Primal Tshirt', 1, 's', 700, 899798, 'akash@gmail.com', 'Akash');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `user_name` varchar(100) NOT NULL,
  `p_id` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `p_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`user_name`, `p_id`, `message`, `p_name`) VALUES
('deepesh', 'rzuk ', 'rrr', 'Boxer Pant '),
('deepesh', 'rzuk ', 'this is a nice product\r\n', 'Boxer Pant '),
('Bijal', 'lvui ', 'Very very not noice', 'Skull Tshirt ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `UserType` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `address`, `email`, `mobile`, `password`, `UserType`) VALUES
('aakash', 'butwal', 'butwal@gmail.com', 98451, 'aakash', 'normal'),
('admin', 'Ktm', 'dadkasjk@fafa.com', 5245, 'admin', 'admin'),
('Akash', 'Bkt', 'akash@gmail.com', 899798, 'akash123', 'normal'),
('Bijal', 'Kamalpokhari', 'bijal@gmail.com', 9865478451, 'bijal123', 'normal'),
('deepesh kayastha', 'kathmandu', 'kayastha.deepesh@gmail.com', 9861585013, 'hero', 'normal'),
('mina', 'budhanilkantha', 'mina@gmail.com', 9847691022, 'mina', 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `name` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
