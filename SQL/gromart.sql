-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 11:46 PM
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
(6, 'Toast', 'Size: Singular Loaf of Toast\r\nBrand: GroMart', 18, NULL, 'GroMart', '../images/bread.jfif'),
(7, 'Haribo Bears', 'Size: 160g\r\nBrand: Haribo', 45, NULL, 'Haribo', '../images/haribo.jpg'),
(8, 'Beef Jerky', 'Size: 85 grams\r\nBrand: The Lean Jerky\r\nProduct Packaging: Bag', 130, NULL, 'The Lean Jerky', '../images/beefjerky.jpg'),
(9, 'Turmeric Powder', 'Size: 60gm\r\nBrand: Al Suhagy', 7.5, 4, 'Al Suhagy', '../images/turmeric.jpg'),
(10, 'Cashew Nuts', 'Size: 200Gm\r\nBrand: Abu Auf', 105, NULL, 'Abu Auf', '../images/cashew.jpg'),
(11, 'Listerine', 'Size: 250ml\r\nBrand: Listerine\r\nMilder Taste Product Packaging: Bottle', 50, 47, 'Listerine', '../images/listerine.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `manufacture` varchar(255) NOT NULL,
  `imagename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`id`, `name`, `price`, `quantity`, `manufacture`, `imagename`) VALUES
(1, 'pepsi', 5, 3, 'pepsi', 'pepsi.png');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `ID` int(11) NOT NULL,
  `firstName` text DEFAULT NULL,
  `lastName` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `role` text NOT NULL DEFAULT 'user',
  `CreateDate` date DEFAULT NULL,
  `street` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`ID`, `firstName`, `lastName`, `email`, `username`, `password`, `role`, `CreateDate`, `street`, `city`, `state`, `zip`, `phone`) VALUES
(1, 'adham', 'ahmed', 'adhamahmed@gmail.com', 'adhamahmed', 'adham1234', 'admin', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Ahmed', 'Samy', 'ahmedsamy67@yahoo.com', 'asamyy', 'ahmed1234', 'user', '2020-06-03', 'Osman Bin Afan', '10th of Ramadan', 'Egypt', 23342, 1175385849),
(3, 'Mohamed', 'Kamel', 'MohKamel34@gmail.com', 'mohk12', 'mohamed1234', 'user', '2021-06-02', '13 Mohamed ali', 'Sherouk', 'Egypt', 75109, 1075284849),
(4, 'Doha', 'Mohamed', 'dohasale@gmail.com', 'dohahahah', 'doha1234', 'user', '2017-06-13', '10 ismail falaky', 'Heliopolis', 'Egypt', 323235, 1113869154),
(5, 'Wael', 'Mosleh', 'welloMosleh@hotmail.com', 'wello_312', 'wael1234', 'user', '2009-06-17', '33 Ahmed Ali', 'Mostabel', 'Egypt', 19732, 103759012),
(6, 'Sally', 'Botros', 'SallyBotros22@gmail.com', 'Sally_123', 'sally1234', 'user', '2020-04-05', '12 Maryland', 'Heliopolis', 'Egypt', 123756, 114569201),
(7, 'Peter', 'Mina', 'Peterminah@hotmail.com', 'peterx_x', 'peter1234', 'user', '2017-09-13', ' 8 Thawrah st', 'Nasr City', 'Egypt', 338612, 1113488681),
(8, 'Dalia', 'Ahmed', 'DaliaStyles@gmail.com', 'Dodo33', 'dalia1234', 'user', '2019-06-12', '22 Gamal el Nahass', 'Mansourah', 'Egypt', 55387, 103346581),
(9, 'Mahmoud', 'Alfy', 'mahmoud7ouda@yahoo.com', 'm7moodxD', 'mahmoud1234', 'user', '2020-03-09', '11 El Darb Elahmar', 'Salam', 'Egypt', 35831, 1213388681),
(10, 'Fayez', 'Karem', 'FayezCR7@gmail.com', 'fezoronaldoo', 'fayez1234', 'user', '2021-02-03', '4 Kamal Hemeda st', 'Banha', 'Egypt', 352806, 101241138),
(11, 'Mariam', 'Salem', 'mariamroma@gmail.com', 'marioRomaH', 'mariam1234', 'user', '2017-06-16', '5 Ibrahim el Feky', 'Alexandria', 'Egypt', 228612, 1005672941),
(24, NULL, NULL, 'eman@eman.com', 'emannnn', 'eman1234', 'user', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `productlist`
--
ALTER TABLE `productlist`
  ADD PRIMARY KEY (`pID`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
