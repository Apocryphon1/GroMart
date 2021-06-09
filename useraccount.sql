-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 04:25 PM
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
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `ID` int(11) NOT NULL,
  `firstName` text DEFAULT NULL,
  `lastName` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
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

INSERT INTO `useraccount` (`ID`, `firstName`, `lastName`, `email`, `username`, `password`, `CreateDate`, `street`, `city`, `state`, `zip`, `phone`) VALUES
(1, 'Ahmed', 'Samy', 'ahmedsamy67@yahoo.com', 'asamyy', 'ahmed1234', '2020-06-03', 'Osman Bin Afan', '10th of Ramadan', 'Egypt', 23342, 1175385849),
(2, 'Mohamed', 'Kamel', 'MohKamel34@gmail.com', 'mohk12', 'mohamed1234', '2021-06-02', '13 Mohamed ali', 'Sherouk', 'Egypt', 75109, 1075284849),
(3, 'Doha', 'Mohamed', 'dohasale@gmail.com', 'dohahahah', 'doha1234', '2017-06-13', '10 ismail falaky', 'Heliopolis', 'Egypt', 323235, 1113869154),
(4, 'Wael', 'Mosleh', 'welloMosleh@hotmail.com', 'wello_312', 'wael1234', '2009-06-17', '33 Ahmed Ali', 'Mostabel', 'Egypt', 19732, 103759012),
(5, 'Sally', 'Botros', 'SallyBotros22@gmail.com', 'Sally_123', 'sally1234', '2020-04-05', '12 Maryland', 'Heliopolis', 'Egypt', 123756, 114569201),
(6, 'Peter', 'Mina', 'Peterminah@hotmail.com', 'peterx_x', 'peter1234', '2017-09-13', ' 8 Thawrah st', 'Nasr City', 'Egypt', 338612, 1113488681),
(7, 'Dalia', 'Ahmed', 'DaliaStyles@gmail.com', 'Dodo33', 'dalia1234', '2019-06-12', '22 Gamal el Nahass', 'Mansourah', 'Egypt', 55387, 103346581),
(8, 'Mahmoud', 'Alfy', 'mahmoud7ouda@yahoo.com', 'm7moodxD', 'mahmoud1234', '2020-03-09', '11 El Darb Elahmar', 'Salam', 'Egypt', 35831, 1213388681),
(9, 'Fayez', 'Karem', 'FayezCR7@gmail.com', 'fezoronaldoo', 'fayez1234', '2021-02-03', '4 Kamal Hemeda st', 'Banha', 'Egypt', 352806, 101241138),
(10, 'Mariam', 'Salem', 'mariamroma@gmail.com', 'marioRomaH', 'mariam1234', '2017-06-16', '5 Ibrahim el Feky', 'Alexandria', 'Egypt', 228612, 1005672941),
(11, NULL, NULL, 'mohamedKarem@yahoo.com', 'admin1', '12345678', NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, 'samirAmir11@gmail.com', 'admin4', '12345678', NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, 'NayeraAssem19@hotmail.com', 'admin2', '12345678', NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, 'WaelFathy99@gmail.com', 'admin3', '12345678', NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, 'AhmedMohsenn@yahoo.com', 'admin5', '12345678', NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, 'DanyaNaseem55@yahoo.com', 'admin10', '12345678', NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, 'ahmedAdmin@yahoo.com', 'admin6', '12345678', NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, 'fared123@hotmail.com', 'admin7', '12345678', NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, 'ssAdmin@yahoo.com', 'admin8', '12345678', NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, 'MaiNoseir@gmail.com', 'admin9', '12345678', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
