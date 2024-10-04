-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2024 at 09:08 AM
-- Server version: 8.0.36
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `springs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `SN` int NOT NULL,
  `P_Name` varchar(100) NOT NULL,
  `Price` int NOT NULL,
  `P_Image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`SN`, `P_Name`, `Price`, `P_Image`) VALUES
(5, 'Ugali', 160, 'https://i.postimg.cc/QtjSDzPF/bs3.png'),
(6, 'Mokimo', 300, 'https://i.postimg.cc/j2FhzSjf/bs2.png');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `SN` int NOT NULL,
  `P_Name` varchar(100) DEFAULT NULL,
  `Price` int DEFAULT NULL,
  `P_Image` varchar(2000) NOT NULL,
  `Reg_Date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`SN`, `P_Name`, `Price`, `P_Image`, `Reg_Date`) VALUES
(1, 'Ugali', 160, 'https://i.postimg.cc/QtjSDzPF/bs3.png', '2024-10-04 07:14:19'),
(2, 'French fries', 200, 'https://i.postimg.cc/j2FhzSjf/bs2.png', '2024-10-04 07:42:51'),
(3, 'Mokimo', 300, 'https://i.postimg.cc/j2FhzSjf/bs2.png', '2024-10-04 07:42:51'),
(4, 'Beef', 700, 'https://i.postimg.cc/j2FhzSjf/bs2.png', '2024-10-04 07:42:51'),
(8, 'Fruit Juice', 200, 'https://i.postimg.cc/76X9ZV8m/Screenshot_from_2022-06-03_18-45-12.png', '2024-10-04 07:55:37'),
(9, 'Pilau', 300, 'https://i.postimg.cc/j2FhzSjf/bs2.png', '2024-10-04 07:55:37'),
(10, 'Vegetable Rice', 700, 'https://i.postimg.cc/j2FhzSjf/bs2.png', '2024-10-04 07:55:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`SN`),
  ADD UNIQUE KEY `P_Name` (`P_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `SN` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `SN` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
