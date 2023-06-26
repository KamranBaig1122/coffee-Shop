-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 03:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `tableNo` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderID`, `tableNo`, `name`, `price`, `quantity`, `total`) VALUES
(1, 3, 'Masala Tea', 200, 1, 200),
(2, 3, 'Kashmiri Tea', 150, 1, 150),
(3, 3, 'Pakistani Tea', 50, 1, 50),
(4, 3, 'Organic Tea', 500, 1, 500),
(6, 7, 'Masala Tea', 200, 1, 200),
(7, 7, 'Kashmiri Tea', 150, 2, 300),
(8, 7, 'Pakistani Tea', 50, 3, 150),
(9, 7, 'Organic Tea', 500, 2, 1000),
(10, 3, 'Iced Coffee', 400, 2, 800),
(11, 3, 'Cold brew', 500, 2, 1000),
(14, 10, 'Tiramisu', 500, 1, 500),
(15, 10, 'Cinnamon rolls', 650, 2, 1300),
(16, 10, 'Cakes', 2200, 1, 2200),
(26, 6, 'Frappuccino Blends', 700, 2, 1400),
(27, 6, 'Iced Coffee', 400, 2, 800),
(28, 6, 'Iced Shaken Espresso', 1200, 2, 2400),
(29, 6, 'Iced Latte', 800, 2, 1600),
(30, 6, 'Masala Tea', 200, 2, 400),
(31, 6, 'Green Tea', 300, 2, 600),
(32, 6, 'Kashmiri Tea', 150, 2, 300),
(44, 5, 'Masala Tea', 200, 2, 400),
(45, 5, 'Green Tea', 300, 2, 600),
(46, 5, 'Kashmiri Tea', 150, 2, 300),
(47, 3, 'Americano', 300, 2, 600),
(48, 3, 'Expresso', 550, 2, 1100),
(49, 3, 'Cappuccino', 600, 2, 1200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
