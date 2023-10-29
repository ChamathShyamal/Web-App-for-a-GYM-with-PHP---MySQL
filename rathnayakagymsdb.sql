-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 14, 2021 at 08:06 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rathnayakagymsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `AdminID` int(11) NOT NULL,
  `AdminUsername` varchar(100) NOT NULL,
  `AdminPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`AdminID`, `AdminUsername`, `AdminPassword`) VALUES
(1, 'RathnayakaAdmin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `contactnumber`
--

CREATE TABLE `contactnumber` (
  `ContactNumberID` int(100) NOT NULL,
  `ContactNumber` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactnumber`
--

INSERT INTO `contactnumber` (`ContactNumberID`, `ContactNumber`) VALUES
(1, 701664396),
(2, 342231232);

-- --------------------------------------------------------

--
-- Table structure for table `fitnesspackages`
--

CREATE TABLE `fitnesspackages` (
  `PackageID` int(11) NOT NULL,
  `PackageName` varchar(255) NOT NULL,
  `PackagePrice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fitnesspackages`
--

INSERT INTO `fitnesspackages` (`PackageID`, `PackageName`, `PackagePrice`) VALUES
(1, 'Individual Male', 'LKR 23,800'),
(2, 'Individual Female ', 'LKR 19,800'),
(3, 'Student ', 'LKR 16,000'),
(4, 'Family ', 'LKR 39,500'),
(5, 'Monthly', 'LKR 6,000'),
(12, 'Extra Larger', 'LKR 2,600');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(11) NOT NULL,
  `CustomerName` varchar(200) NOT NULL,
  `CardType` varchar(100) NOT NULL,
  `CardNumber` varchar(16) NOT NULL,
  `ExpiryDate` varchar(200) NOT NULL,
  `CVV` varchar(4) NOT NULL,
  `AddressNo` int(100) NOT NULL,
  `AddressStreet` varchar(200) NOT NULL,
  `AddressCity` varchar(100) NOT NULL,
  `ContactNumberID` int(100) NOT NULL,
  `UserID` int(100) NOT NULL,
  `Product_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `CustomerName`, `CardType`, `CardNumber`, `ExpiryDate`, `CVV`, `AddressNo`, `AddressStreet`, `AddressCity`, `ContactNumberID`, `UserID`, `Product_ID`) VALUES
(1, 'Rajeew Uvindu', 'Debit', '1234567890123456', '2021-07-31', '1234', 25, 'Waskaduwa', 'Kalutara', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(11) NOT NULL,
  `Product_Name` varchar(200) NOT NULL,
  `Product_Price` double NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `TypeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Product_Price`, `Quantity`, `Image`, `TypeID`) VALUES
(1, 'DUMBLE', 2000, 100, 'Images/dumble.jpg', 1),
(3, 'BARBELL', 1000, 30, 'Images/barbell.jpg', 1),
(4, 'ADJUSTABLE WEIGHT BENCH', 5000, 10, 'Images/adjustablebench.jpg', 1),
(5, 'ELLPTICAL MACHINE', 35000, 5, 'Images/elipticalmachine.jpeg', 1),
(6, 'STABILITY BALL', 3000, 15, 'Images/stabball.jpg', 1),
(7, 'LEATHER GLOVES', 1500, 40, 'Images/leathergloves.jpg', 1),
(8, 'SLIMMING BELT', 2500, 35, 'Images/slimmingbelt.jpg', 1),
(9, 'PLATINUM 100% CREATINE', 6000, 30, 'Images/platinum.jpg', 2),
(10, 'BEAST AMINOLYTES', 4000, 20, 'Images/beastamino.png', 2),
(11, 'BEAST SUPER SAUNA', 7000, 10, 'Images/beastsuper.jpg', 2),
(12, 'ON FISH OIL (100 SOFT-GELS)', 2000, 15, 'Images/fishoil.jpg', 2),
(13, 'CREATINE 5000 (60 SERVINGS)', 8500, 20, 'Images/creatine5000.jpg', 2),
(14, 'D-STUNNER ALPHA (30 SERVINGS)', 6500, 5, 'Images/dstunneralpha.jpg', 2),
(15, 'GOLD STANDARD GAINTER 10LBS', 4000, 10, 'Images/goldstandard.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `TypeID` int(11) NOT NULL,
  `TypeName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`TypeID`, `TypeName`) VALUES
(1, 'Equipment'),
(2, 'Supplement');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(100) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Username`, `Password`) VALUES
(2, 'Admin', '123'),
(156, 'Chamath Shyamal', '456'),
(158, 'Ishan Madusanka', '789');

-- --------------------------------------------------------

--
-- Table structure for table `usercontactdata`
--

CREATE TABLE `usercontactdata` (
  `ID` int(100) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercontactdata`
--

INSERT INTO `usercontactdata` (`ID`, `FirstName`, `LastName`, `Email`, `Message`) VALUES
(2, 'Chamath', 'Shyamal', 'arachchigechamath@gmail.com', 'Thank You Chamath'),
(3, 'Rajeew', 'Uvindu', 'RajeewUvindu@gmail.com', 'Thank You Rajeew'),
(4, 'Kalika', 'Perera', 'Kalika@gmail.com', 'Thank You Kalika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `contactnumber`
--
ALTER TABLE `contactnumber`
  ADD PRIMARY KEY (`ContactNumberID`);

--
-- Indexes for table `fitnesspackages`
--
ALTER TABLE `fitnesspackages`
  ADD PRIMARY KEY (`PackageID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `ContactNumberID` (`ContactNumberID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `TypeID` (`TypeID`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`TypeID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `usercontactdata`
--
ALTER TABLE `usercontactdata`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactnumber`
--
ALTER TABLE `contactnumber`
  MODIFY `ContactNumberID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fitnesspackages`
--
ALTER TABLE `fitnesspackages`
  MODIFY `PackageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `usercontactdata`
--
ALTER TABLE `usercontactdata`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`TypeID`) REFERENCES `producttype` (`TypeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
