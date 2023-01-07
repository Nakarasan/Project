-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 04:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `id` int(15) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `nic_pass` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mobile_no` int(10) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `vehicle_type` varchar(100) DEFAULT NULL,
  `chassis_no` varchar(100) DEFAULT NULL,
  `fuel_type` varchar(100) DEFAULT NULL,
  `vehicle_no` varchar(10) DEFAULT NULL,
  `customer_type` varchar(100) DEFAULT NULL,
  `eli_week` int(5) DEFAULT NULL,
  `bal_week` int(5) DEFAULT NULL,
  `document` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_tbl`
--

INSERT INTO `customer_tbl` (`id`, `customer_name`, `nic_pass`, `email`, `password`, `mobile_no`, `address`, `vehicle_type`, `chassis_no`, `fuel_type`, `vehicle_no`, `customer_type`, `eli_week`, `bal_week`, `document`) VALUES
(40, 'Nakarasan', '200033402854', 'krishzkara@gmail.com', '123456', 765705081, 'Point Pedro', 'Bike', '9978563ASED', 'Petrol(92 Octane)', 'XI-4139', 'Special Need Users', 4, 4, ''),
(41, 'Thushigha', '997313518V', 'krishzkara29@gmail.com', 'JHHFT@43Wws', 768471254, 'Nallur', 'Bike', 'RF587LY4187', 'Petrol(92 Octane)', 'CS-5698', 'Normal Customer', 4, 2, ''),
(42, 'Ravi Raj', '19974587451', 'raviraj415@gmail.com', 'Rfdes@43', 798456124, 'Colombo', 'Car', '5822cEfW47', 'Diesel(Auto Diesel)', 'XA-7458', 'Normal Customer', 20, 20, ''),
(43, 'Thusithan', '200187457515', 'thusi1873@gmail.com', 'THushi@54', 758741254, 'Mannar', 'Bike', '85FYD87HT5', 'Petrol(92 Octane)', 'PT-7841', 'Normal Customer', 20, 8, ''),
(44, '', '', '', '', 0, '', '0', '', '0', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_tbl`
--

CREATE TABLE `fuel_tbl` (
  `id` int(10) NOT NULL,
  `fuel_type` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `last_update` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuel_tbl`
--

INSERT INTO `fuel_tbl` (`id`, `fuel_type`, `price`, `last_update`) VALUES
(7, 'Petrol(92 Octane)', 'LKR 375.00', '2022-12-01'),
(8, 'Petrol(95 Octane)', 'LKR 410.00', '2022-12-01'),
(9, 'Diesel(Auto Diesel)', 'LKR 325.00', '2022-12-15'),
(10, 'Diesel(Super Diesel)', 'LKR 356.00', '2022-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `station_tbl`
--

CREATE TABLE `station_tbl` (
  `id` int(10) NOT NULL,
  `station_name` varchar(100) DEFAULT NULL,
  `owner_name` varchar(100) DEFAULT NULL,
  `petrol_92` varchar(10) DEFAULT NULL,
  `petrol_95` varchar(10) DEFAULT NULL,
  `auto_diesel` varchar(10) DEFAULT NULL,
  `super_diesel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station_tbl`
--

INSERT INTO `station_tbl` (`id`, `station_name`, `owner_name`, `petrol_92`, `petrol_95`, `auto_diesel`, `super_diesel`) VALUES
(5, 'LIOC-SLRCS Fuel Filling Station', '100543', 'available', 'Unavailabl', 'available', 'available'),
(6, 'Ceypetco Filling Station - Rajan Umayal', '00897', 'available', 'available', 'available', 'available'),
(7, 'CEYPETCO Lanka Filling', '100549', 'available', 'available', 'available', 'available'),
(8, 'Lanka Fuel Station (Thevagurunathan)', '100456', 'available', 'Unavailabl', 'available', 'Unavailabl'),
(9, 'CEYPETCO Petrol Station', '100123', 'Unavailabl', 'Unavailabl', 'available', 'Unavailabl');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `full_name`, `user_name`, `password`, `email`, `mobile_no`) VALUES
(17, 'Vishnu', '199687458740', 'Vish@3465', 'vishnu@gmail.com', 754178412),
(18, 'Vithiya Tharmalingam', '998563217V', '123456', 'vithiya@gmail.com', 777856974),
(19, 'Tharagaa Babakaraan', '889632147V', '123456', 'tharagaa@gmail.com', 777584125),
(20, 'Nivetha Nirmalaraj', '885674123V', '123456', 'nivetha@gmail.com', 778564412),
(21, 'Piravinissha Sinthujan', '885412396V', '123456', 'nisha@gmail.com', 777885412);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuel_tbl`
--
ALTER TABLE `fuel_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station_tbl`
--
ALTER TABLE `station_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `fuel_tbl`
--
ALTER TABLE `fuel_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `station_tbl`
--
ALTER TABLE `station_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
