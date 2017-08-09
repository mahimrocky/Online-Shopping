-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2017 at 01:06 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bilshari`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(200) NOT NULL,
  `item_id` int(100) NOT NULL,
  `user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `item_id`, `user`) VALUES
(2, 1, '935381467171338629'),
(3, 2, '935381467171338629'),
(4, 3, '935381467171338629'),
(5, 4, '935381467171338629'),
(6, 5, '935381467171338629'),
(7, 6, '935381467171338629'),
(8, 7, '935381467171338629'),
(9, 8, '935381467171338629'),
(37, 1, '536281467156988820'),
(38, 1, '342521467236572789'),
(39, 2, '342521467236572789'),
(40, 3, '342521467236572789'),
(44, 1, '349211467236961904'),
(45, 4, '349211467236961904'),
(46, 5, '349211467236961904'),
(47, 7, '349211467236961904'),
(48, 10, '349211467236961904'),
(49, 9, '349211467236961904'),
(50, 1, '201671138391467315519440'),
(52, 10, '201671138391467315519440'),
(53, 1, '201672134021467445202983'),
(54, 2, '201672134021467445202983'),
(58, 11, '2016721438481467448728629'),
(59, 12, '2016721438481467448728629'),
(60, 13, '2016721438481467448728629'),
(61, 11, '2016721438481467448728629'),
(62, 12, '2016721438481467448728629'),
(63, 13, '2016721438481467448728629'),
(64, 14, '2016721438481467448728629'),
(66, 12, '20167161355181468655718412'),
(67, 13, '20167161355181468655718412'),
(68, 11, '2016719183241468929804582'),
(69, 12, '2016719183241468929804582'),
(70, 11, '201685054251470336865055'),
(71, 13, '201685054251470336865055'),
(72, 12, '2016892044381470753878746'),
(73, 14, '2016892044381470753878746'),
(74, 13, '2016892044381470753878746'),
(75, 11, '201689205101470754260869'),
(76, 12, '201689205101470754260869'),
(77, 13, '201689205101470754260869'),
(78, 11, '20161051856181475672178919'),
(79, 11, '20161051856181475672178919'),
(80, 12, '20161061516121475745372889'),
(82, 14, '20161061516121475745372889'),
(83, 12, '2016106153821475746682107'),
(85, 12, '20161061517531475745473082'),
(86, 11, '201610271348371477554517054'),
(98, 12, '20154161232161429165936062'),
(99, 11, '2017111343301483256610571'),
(100, 12, '2017111343301483256610571'),
(101, 13, '2017111343301483256610571'),
(102, 14, '2017111343301483256610571'),
(103, 11, '2017111343441483256624172');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `m_number` varchar(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `cost` int(150) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `m_number`, `address`, `cost`, `order_id`, `order_status`, `date`) VALUES
(1, 'Tapu Mandal', '01739995117', 'Dhanmondi', 460021, '935381467171338629', 'CANCLE', '2016-06-29'),
(2, '', '', '', 99700, '342521467236572789', 'COMPLETE', '2016-06-30'),
(3, 'Tapu Mandal', '017896325', 'Address', 271921, '349211467236961904', 'COMPLETE', '2016-06-30'),
(4, 'Last Name', '987', 'Last Address', 1600, '201671138391467315519440', 'CANCLE', '2016-07-01'),
(5, 'Ruban', '017', 'Address', 9700, '201672134021467445202983', 'COMPLETE', '2016-07-02'),
(6, 'razib', '0178', 'address', 1589, '201685054251470336865055', 'CANCLE', '2016-08-05'),
(7, 'yfyh', 'fghfh', 'fghfhf', 20776, '2016892044381470753878746', 'COMPLETE', '2016-08-09'),
(8, 'Tapu', '017852', 'address', 1600, '20161051856181475672178919', 'COMPLETE', '2016-10-05'),
(9, 'nazmul', '017852', 'Dhanmondi', 19987, '20161061516121475745372889', 'COMPLETE', '2016-10-06'),
(10, 'asd', '2334', 'df', 19000, '2016106153821475746682107', 'WAITING', '2016-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(255) NOT NULL,
  `cata` varchar(100) NOT NULL,
  `sub_cata` varchar(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `des` varchar(500) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `cata`, `sub_cata`, `name`, `image`, `price`, `color`, `size`, `des`, `quantity`) VALUES
(23, 'men', 't_shirt', 'Black T-Shirt', '23men.jpg', '1200', 'BLCK', 'L', '', 0),
(24, 'men', 'pant', 'Blue JEans', '24men.jpg', '2200', 'Blue', 'XL', '', 0),
(25, 'men', 't_shirt', 'SHirt', '25men.jpg', '1800', 'Blue', 'XXL', '', 0),
(26, 'women', 'sharee', 'Test Data', '26women.jpg', '1234', 'mix', 'XXX', '', 0),
(27, 'kids', 'toys', 'name', '27kids.jpg', '1234', 'B', '1', '', 0),
(28, 'gift_item', 'soft_toys', '', '28gift_item.jpg', '', '', '', '', 0),
(29, 'men', 'coat', 'Coat', '29men.jpg', '3200', 'Gray', 'XL', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`,`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
