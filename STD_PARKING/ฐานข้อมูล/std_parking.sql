-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 11:29 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std_parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(3) NOT NULL,
  `Name_admin` varchar(50) NOT NULL,
  `User_admin` varchar(30) NOT NULL,
  `Password_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `Name_admin`, `User_admin`, `Password_admin`) VALUES
(1, 'ดุลภากร แสงเรือง', 'pepezaa1', 'nekungkub'),
(2, 'พีรพัฒน์ จรูญชาติ', 'Old Por ', '1560301354727'),
(3, 'Admin', 'Admin', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `sd`
--

CREATE TABLE `sd` (
  `ID_SD` int(5) NOT NULL,
  `NAME_SD` varchar(50) NOT NULL,
  `CardID` varchar(20) NOT NULL,
  `Status` varchar(5) NOT NULL,
  `Time` varchar(10) NOT NULL,
  `License` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sd`
--

INSERT INTO `sd` (`ID_SD`, `NAME_SD`, `CardID`, `Status`, `Time`, `License`) VALUES
(1, 'ดุลภากร แสงเรือง', '0010921325', 'ไม่มา', '00:00:00', '1กข8283'),
(2, 'พีรพัฒน์ จรูญชาติ', '0011031345', 'ไม่มา', '00:00:00', ''),
(3, 'ดาริกา แสงศรีจันทร์', '0011251174', 'ไม่มา', '00:00:00', '1กง8317'),
(4, 'สิรดนัย อินทร์มะณี', '0006549234', 'ไม่มา', '00:00:00', '1กง9669'),
(5, 'ภคพล ใจเสาร์ดี', '0011026268', 'ไม่มา', '00:00:00', '1กจ4851'),
(6, 'ภูริชญา เสาร์จันทร์', '0011006604', 'ไม่มา', '00:00:00', ''),
(7, 'ธีรพงศ์ ภาพสุรินทร์', '0011024606', 'ไม่มา', '00:00:00', ''),
(8, 'ธาดา ธิติภัทรกุล', '0010921320', 'ไม่มา', '00:00:00', ''),
(9, 'ณัฐชยา ราษี', '0008581871', 'ไม่มา', '00:00:00', ''),
(10, 'เดโชชัย ใจปัญธิ', '0009122614', 'ไม่มา', '00:00:00', ''),
(12, 'อาทิตยา กี', '0011014560', 'ไม่มา', '00:00:00', ''),
(13, 'ปรานต์นิพัทธิ์์์ ศิรินาม', '0032036202', 'ไม่มา', '00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `sd`
--
ALTER TABLE `sd`
  ADD PRIMARY KEY (`ID_SD`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sd`
--
ALTER TABLE `sd`
  MODIFY `ID_SD` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
