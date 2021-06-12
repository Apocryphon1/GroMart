-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 08:21 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gromart`
--

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE `productlist` (
  `pID` int(11) NOT NULL,
  `pName` varchar(255) NOT NULL,
  `pDesc` varchar(500) NOT NULL,
  `pPrice` float NOT NULL,
  `pDiscount` float DEFAULT NULL,
  `pManufacturer` varchar(255) NOT NULL,
  `pImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`pID`, `pName`, `pDesc`, `pPrice`, `pDiscount`, `pManufacturer`, `pImage`) VALUES
(1, 'Pepsi Can', 'Size: 250ml\r\nBrand: Pepsi\r\nProduct Packaging: Can', 5, NULL, 'Pepsi', '../images/pepsi.png'),
(2, 'Sugar', 'Size: 1KG\r\nBrand: Ahla\r\nProduct Packaging: Bag', 7, NULL, 'Ahla', '../images/sugar.jpg'),
(3, 'Tomato', 'Weight: 1KG\r\nCountry: Egypt\r\nProduct Packaging: Bag', 14, NULL, 'Egypt', '../images/tomato.jfif'),
(4, 'Kitchen Towel', 'Brand: GroMart', 13, NULL, 'GroMart', '../images/towel.jpeg'),
(5, 'Eggs Carton', 'Quantity: 12 Eggs\r\nBrand: Gourmet Egypt\r\nProduct Packaging: Carton', 25, NULL, 'Gourmet Egypt', '../images/egg.jfif'),
(6, 'Toast', 'Size: Singular Loaf of Toast\r\nBrand: GroMart', 18, NULL, 'GroMart', '../images/bread.jfif'),
(7, 'Haribo Bears', 'Size: 160g\r\nBrand: Haribo', 45, NULL, 'Haribo', '../images/haribo.jpg'),
(8, 'Beef Jerky', 'Size: 85 grams\r\nBrand: The Lean Jerky\r\nProduct Packaging: Bag', 130, NULL, 'The Lean Jerky', '../images/beefjerky.jpg'),
(9, 'Turmeric Powder', 'Size: 60gm\r\nBrand: Al Suhagy', 7.5, 4, 'Al Suhagy', '../images/turmeric.jpg'),
(10, 'Cashew Nuts', 'Size: 200Gm\r\nBrand: Abu Auf', 105, NULL, 'Abu Auf', '../images/cashew.jpg'),
(11, 'Listerine', 'Size: 250ml\r\nBrand: Listerine\r\nMilder Taste Product Packaging: Bottle', 50, 47, 'Listerine', '../images/listerine.jpg'),
(12, 'Water x12', 'Size: 600ml\r\nQuantity: 12 Bottles\r\nBrand: Flo\r\nProduct Packaging: Bottles', 61.25, NULL, 'Flo', '../images/water.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productlist`
--
ALTER TABLE `productlist`
  ADD PRIMARY KEY (`pID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
