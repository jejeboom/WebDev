-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2016 at 02:49 PM
-- Server version: 5.6.25-enterprise-commercial-advanced-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsalesorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccounts`
--

CREATE TABLE IF NOT EXISTS `tblaccounts` (
  `strAcctEmpCode` char(6) NOT NULL,
  `strAcctUserName` varchar(100) NOT NULL,
  `strAcctPassword` varchar(100) NOT NULL,
  `intAccessLevel` int(11) NOT NULL,
  `intStatus` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`strAcctEmpCode`,`strAcctUserName`),
  UNIQUE KEY `strAcctEmpCode_UNIQUE` (`strAcctEmpCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblbilladd`
--

CREATE TABLE IF NOT EXISTS `tblbilladd` (
  `strBillAddSOHCode` char(6) NOT NULL,
  `strBillAddStreetNum` varchar(100) DEFAULT NULL,
  `strBillAddStreetName` varchar(100) DEFAULT NULL,
  `strBillAddBrgyName` varchar(100) DEFAULT NULL,
  `strBillAddCityName` varchar(100) DEFAULT NULL,
  `strBillAddProvinceName` varchar(100) DEFAULT NULL,
  `strBillAddZipCode` char(4) DEFAULT NULL,
  PRIMARY KEY (`strBillAddSOHCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE IF NOT EXISTS `tblcategory` (
  `strCateCode` char(6) NOT NULL,
  `strCateName` varchar(100) NOT NULL,
  `strCateDesc` varchar(45) DEFAULT NULL,
  `intCateStat` varchar(45) NOT NULL,
  PRIMARY KEY (`strCateCode`),
  UNIQUE KEY `strCateCode_UNIQUE` (`strCateCode`),
  UNIQUE KEY `strCateName_UNIQUE` (`strCateName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`strCateCode`, `strCateName`, `strCateDesc`, `intCateStat`) VALUES
('CAT001', 'COFFEES', '', '0'),
('CAT002', 'Softdrinks', 'dasda', '1'),
('CAT003', 'LIQUOR', 'dasdsa', '0'),
('CAT004', 'Chippy', 'Junkfoods', '1'),
('CAT005', 'Candy', 'sweet', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE IF NOT EXISTS `tblcustomer` (
  `strCustCode` char(6) NOT NULL,
  `strCompanyName` varchar(100) NOT NULL,
  `strCustName` varchar(100) NOT NULL,
  `strCustContactNumber` varchar(11) NOT NULL,
  `strCustEmailAdd` varchar(100) NOT NULL,
  `strCustAddress` varchar(100) DEFAULT NULL,
  `intStatus` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`strCustCode`),
  UNIQUE KEY `strCustCode_UNIQUE` (`strCustCode`),
  UNIQUE KEY `strCustEmailAdd_UNIQUE` (`strCustEmailAdd`),
  UNIQUE KEY `strCustContactNumber_UNIQUE` (`strCustContactNumber`),
  UNIQUE KEY `strCustName_UNIQUE` (`strCustName`),
  UNIQUE KEY `strCustName` (`strCustName`,`strCustContactNumber`,`strCustEmailAdd`),
  UNIQUE KEY `strCustName_2` (`strCustName`,`strCustContactNumber`,`strCustEmailAdd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`strCustCode`, `strCompanyName`, `strCustName`, `strCustContactNumber`, `strCustEmailAdd`, `strCustAddress`, `intStatus`) VALUES
('CUS001', 'PUP', 'Jerome Paglicauan', '09953757269', 'jeje@gmail.com', 'Marikina', 0),
('CUS002', 'PLM', 'MJ Aguelo', '09167348178', 'mj@gmail.com', 'Commonwealth', 1),
('CUS003', 'UP', 'Luis Guballo', '09382787829', 'Valenzuela City', 'HAHAHA', 1),
('CUS004', 'Jeje''s Pharmacy', 'Koch Paglicauan', '09996123453', 'jejekoch@yahoo.com', 'Pasig City', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE IF NOT EXISTS `tblemployee` (
  `strEmpCode` char(6) NOT NULL,
  `strEmpFName` varchar(100) NOT NULL,
  `strEmpMName` varchar(100) DEFAULT NULL,
  `strEmpLName` varchar(100) NOT NULL,
  `intEmpGender` int(11) NOT NULL,
  `strJobTitle` varchar(100) NOT NULL,
  `intStatus` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`strEmpCode`),
  UNIQUE KEY `strEmpCode_UNIQUE` (`strEmpCode`),
  UNIQUE KEY `strEmpName` (`strEmpFName`,`strEmpMName`,`strEmpLName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`strEmpCode`, `strEmpFName`, `strEmpMName`, `strEmpLName`, `intEmpGender`, `strJobTitle`, `intStatus`) VALUES
('EMP001', 'Jerome', 'Masilungan', 'Paglicauan', 1, 'staff', 1),
('EMP002', 'Jomarie', 'Gustillo', 'Ramos', 2, 'staff', 0),
('EMP003', 'Jomari', '', 'Ramos', 1, 'admin', 0),
('EMP004', 'Jeorme', 'Gustillo', 'Ramos', 1, 'staff', 1),
('EMP005', '', '', '', 1, 'admin', 1),
('EMP006', 'Jomari', 'Masilungan', 'Paglicauan', 2, 'admin', 1),
('EMP007', 'Regina', 'Jimenez', 'Mapue', 2, 'staff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblitem`
--

CREATE TABLE IF NOT EXISTS `tblitem` (
  `strItemCode` char(6) NOT NULL,
  `strItemName` varchar(100) NOT NULL,
  `strItemCateCode` char(6) NOT NULL,
  `intStatus` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`strItemCode`),
  UNIQUE KEY `strItemCode_UNIQUE` (`strItemCode`),
  UNIQUE KEY `strItemDesc_UNIQUE` (`strItemName`),
  KEY `ItemCateCode_idx` (`strItemCateCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblitem`
--

INSERT INTO `tblitem` (`strItemCode`, `strItemName`, `strItemCateCode`, `intStatus`) VALUES
('ITM001', 'Nescafe', 'CAT002', 0),
('ITM002', 'Sparkle', 'CAT002', 0),
('ITM003', 'Kopiko', 'CAT002', 1),
('ITM004', 'Max', 'CAT002', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblitemprice`
--

CREATE TABLE IF NOT EXISTS `tblitemprice` (
  `strItemPriceCode` char(6) NOT NULL,
  `dblItemPriceValue` double NOT NULL,
  `datAsOf` date NOT NULL,
  PRIMARY KEY (`strItemPriceCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblitemprice`
--

INSERT INTO `tblitemprice` (`strItemPriceCode`, `dblItemPriceValue`, `datAsOf`) VALUES
('ITM001', 121, '2016-03-11'),
('ITM002', 4, '2016-03-11'),
('ITM003', 5, '2016-03-11'),
('ITM004', 2, '2016-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `tblshipadd`
--

CREATE TABLE IF NOT EXISTS `tblshipadd` (
  `strShipAddSOHCode` char(6) NOT NULL,
  `strShipAddStreetNum` varchar(100) DEFAULT NULL,
  `strShipAddStreetName` varchar(100) DEFAULT NULL,
  `strShipAddBrgyName` varchar(100) DEFAULT NULL,
  `strShipAddCityName` varchar(100) DEFAULT NULL,
  `strShipAddProvinceName` varchar(100) DEFAULT NULL,
  `strShipAddZipCode` char(4) DEFAULT NULL,
  PRIMARY KEY (`strShipAddSOHCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblsodetail`
--

CREATE TABLE IF NOT EXISTS `tblsodetail` (
  `strSODSOHCode` char(6) NOT NULL,
  `strSODItemCode` char(6) NOT NULL,
  `intSODQty` int(11) NOT NULL,
  `intStatus` int(11) DEFAULT '1',
  PRIMARY KEY (`strSODSOHCode`,`strSODItemCode`),
  KEY `SODItemCode_idx` (`strSODItemCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblsodetail`
--

INSERT INTO `tblsodetail` (`strSODSOHCode`, `strSODItemCode`, `intSODQty`, `intStatus`) VALUES
('SOH001', 'ITM001', 5, 1),
('SOH001', 'ITM002', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsoheader`
--

CREATE TABLE IF NOT EXISTS `tblsoheader` (
  `strSOHCode` char(6) NOT NULL,
  `datSOHDateIssued` date NOT NULL,
  `datSOHDeliveryDate` date NOT NULL,
  `strSOHPOHCode` char(6) NOT NULL,
  `intSOHStatus` int(11) NOT NULL DEFAULT '0',
  `intSOHPayMethod` int(11) NOT NULL,
  `intSOHPayTerms` int(11) NOT NULL,
  `strSOHCustCode` char(6) NOT NULL,
  `strSOHCreatedCode` char(6) NOT NULL,
  `strSOHModifiedCode` char(6) NOT NULL,
  PRIMARY KEY (`strSOHCode`),
  UNIQUE KEY `strSOHCode_UNIQUE` (`strSOHCode`),
  KEY `Customer_idx` (`strSOHCustCode`),
  KEY `SOHCreatedCode_idx` (`strSOHCreatedCode`),
  KEY `SOHModifiedCode_idx` (`strSOHModifiedCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblsoheader`
--

INSERT INTO `tblsoheader` (`strSOHCode`, `datSOHDateIssued`, `datSOHDeliveryDate`, `strSOHPOHCode`, `intSOHStatus`, `intSOHPayMethod`, `intSOHPayTerms`, `strSOHCustCode`, `strSOHCreatedCode`, `strSOHModifiedCode`) VALUES
('SOH001', '2016-03-12', '2016-03-20', 'PO001', 1, 2, 2, 'CUS003', 'EMP001', 'EMP001'),
('SOH002', '2016-03-12', '2016-03-20', 'PO002', 1, 3, 3, 'CUS003', 'EMP001', 'EMP001');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  ADD CONSTRAINT `AcctEmpCode` FOREIGN KEY (`strAcctEmpCode`) REFERENCES `tblemployee` (`strEmpCode`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblbilladd`
--
ALTER TABLE `tblbilladd`
  ADD CONSTRAINT `BillAddSOHCode` FOREIGN KEY (`strBillAddSOHCode`) REFERENCES `tblsoheader` (`strSOHCode`) ON UPDATE CASCADE;

--
-- Constraints for table `tblitem`
--
ALTER TABLE `tblitem`
  ADD CONSTRAINT `ItemCateCode` FOREIGN KEY (`strItemCateCode`) REFERENCES `tblcategory` (`strCateCode`) ON UPDATE CASCADE;

--
-- Constraints for table `tblitemprice`
--
ALTER TABLE `tblitemprice`
  ADD CONSTRAINT `ItemPriceItemCode` FOREIGN KEY (`strItemPriceCode`) REFERENCES `tblitem` (`strItemCode`) ON UPDATE CASCADE;

--
-- Constraints for table `tblshipadd`
--
ALTER TABLE `tblshipadd`
  ADD CONSTRAINT `ShipAddSOHCode` FOREIGN KEY (`strShipAddSOHCode`) REFERENCES `tblsoheader` (`strSOHCode`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblsodetail`
--
ALTER TABLE `tblsodetail`
  ADD CONSTRAINT `SODItemCode` FOREIGN KEY (`strSODItemCode`) REFERENCES `tblitem` (`strItemCode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `SODSOHCode` FOREIGN KEY (`strSODSOHCode`) REFERENCES `tblsoheader` (`strSOHCode`) ON UPDATE CASCADE;

--
-- Constraints for table `tblsoheader`
--
ALTER TABLE `tblsoheader`
  ADD CONSTRAINT `SOHCreatedCode` FOREIGN KEY (`strSOHCreatedCode`) REFERENCES `tblemployee` (`strEmpCode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `SOHCustCode` FOREIGN KEY (`strSOHCustCode`) REFERENCES `tblcustomer` (`strCustCode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `SOHModifiedCode` FOREIGN KEY (`strSOHModifiedCode`) REFERENCES `tblemployee` (`strEmpCode`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
