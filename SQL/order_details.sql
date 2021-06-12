-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 11:21 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gomarthassan`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `OrderID` int(12) NOT NULL,
  `Item_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Price` int(5) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `ItemID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`OrderID`, `Item_name`, `Price`, `Quantity`, `ItemID`) VALUES
(0, '[value-2]', 0, 0, 0),
(1, 'French Fries', 6, 2, 1),
(1, 'JellyCola', 1, 2, 2),
(2, 'Lays Chips', 2, 3, 3),
(4, 'Oxy Soap', 4, 4, 4),
(1, 'Oxy Soap', 4, 4, 5),
(3, 'Chicken nuggets', 4, 2, 6),
(3, 'Hand Soap', 1, 10, 7),
(3, 'Seven up', 2, 6, 9),
(4, 'Spagetti', 1, 8, 10),
(4, 'Napkins', 1, 6, 11),
(4, 'Hand Cream', 1, 2, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`ItemID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
