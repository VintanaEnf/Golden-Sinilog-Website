-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 12:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golden_sinilog`
--

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Description` text DEFAULT NULL,
  `ImagePath` varchar(255) DEFAULT NULL,
  `quantity` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`ID`, `Name`, `Price`, `Description`, `ImagePath`, `quantity`) VALUES
(1, 'Golden Tapa', '120.00', 'Simple and Delicious Tapa with Rice and Egg.', 'tapsilog.png', 10),
(2, 'Golden Liempo', '120.00', 'Simple and Delicious Liempo with Rice and Egg.', 'liempsilog.png', 10),
(3, 'Sweet and Spicy Tapa', '130.00', 'Sweet and Spicy Tapa with Rice and Egg.', 'sstapsilog.png', 10),
(4, 'Barbeque Liempo', '125.00', 'Barbeque Flavored Liempo with Rice and Egg.', 'bbqliempo.png', 10),
(5, 'Golden Fried Chicken', '130.00', 'Crispy and Juicy Chicken with Rice and Egg.', 'chicksilog.png', 10),
(6, 'Daing na Bangus', '120.00', 'Crispy Daing na Bangus with Rice and Egg.', 'daingsilog.png', 10),
(7, 'Lechon Kawali', '125.00', 'Lechon Kawali with Rice and Egg.', 'lechonsilog.png', 10),
(8, 'Golden Sisig', '110.00', 'Simple and Delicious Sisig with Rice and Egg.', 'sisigsilog.png', 10),
(9, 'Golden Porkchop', '110.00', 'Crispy Porkchop with Rice and Egg.', 'porkchopsilog.png', 10),
(10, 'Lechon Paksiw', '110.00', 'Lechon Paksiw with Rice and Egg.', 'lechonpaksiwsilog.png', 10);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `TransactionDate` datetime NOT NULL,
  `TotalAmount` decimal(10,2) NOT NULL,
  `PurchasedItems` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `IsAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `Email`, `Password`, `IsAdmin`) VALUES
(1, 'VINCENT', 'Admin', 'vincent@goldensinilog.com', 'admin123', 1),
(2, 'JM', 'Admin', 'jm@goldensinilog.com', 'admin123', 1),
(3, 'SAIMON', 'Admin', 'saimon@goldensinilog.com', 'admin123', 1),
(4, 'TIMOTHY', 'Admin', 'timothy@goldensinilog.com', 'admin123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
