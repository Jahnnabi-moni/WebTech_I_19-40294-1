-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 02:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kormoshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `corporate`
--

CREATE TABLE `corporate` (
  `Username` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `CompanyAddress` varchar(50) NOT NULL,
  `TradeLicense` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corporate`
--

INSERT INTO `corporate` (`Username`, `Email`, `Phone`, `CompanyName`, `CompanyAddress`, `TradeLicense`, `Password`, `Image`) VALUES
('jahnnabi', 'jahnnabi.moni54@gmail.com', '01930284388', 'square', 'sfsgdg', '1234567890', '@1234567', '../uploads/received_188451681904970.jpeg'),
('kirty', 'shruto.kirty123@gmail.com', '01912243250', 'acme', 'road#12, house#20', '8739646384', '$1234567', '../uploads/received_167367570680048.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corporate`
--
ALTER TABLE `corporate`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
