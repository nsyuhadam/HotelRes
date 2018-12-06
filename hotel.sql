-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 01:26 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookId` int(11) NOT NULL,
  `bookDate` datetime NOT NULL,
  `bookDays` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `roomId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookId`, `bookDate`, `bookDays`, `userId`, `roomId`) VALUES
(1, '2018-11-21 00:38:00', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `paymentId` int(11) NOT NULL,
  `paymentDate` datetime NOT NULL,
  `bookId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`paymentId`, `paymentDate`, `bookId`) VALUES
(1, '2018-11-21 00:40:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomId` int(11) NOT NULL,
  `roomType` varchar(50) NOT NULL,
  `roomPrice` decimal(3,2) NOT NULL,
  `roomDescription` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomId`, `roomType`, `roomPrice`, `roomDescription`) VALUES
(1, 'aaaa', '9.99', 'sqwdqew');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userNoPhone` varchar(50) NOT NULL,
  `userFname` varchar(50) NOT NULL,
  `userLName` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userRole` int(11) NOT NULL,
  `bookId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userPassword`, `userNoPhone`, `userFname`, `userLName`, `userEmail`, `userRole`, `bookId`) VALUES
(15, '123456', '0123456789', 'aina', 'roslan', 'adcdsvv', 1, 2),
(16, '123', '0123456789', 'Faris', 'roslan', 'fn@yahoo.com', 1, 1),
(17, '1234', '1424536', 'aina', 'Nizar', 'adcdsvv', 2, 3),
(18, '1234', '0123456789', 'aina', 'roslan', 'fn@yahoo.com', 2, 2),
(19, '1234', '0123456789', 'Faris', 'roslan', 'fn@yahoo.com', 1, 1),
(20, '123', '0123456789', 'aina', 'roslan', 'fn@yahoo.com', 1, 1),
(21, '123', '1424536', 'Faris', 'roslan', 'fn@yahoo.com', 2, 2),
(22, '123456', '0123456789', 'Faris', 'roslan', 'cdvsfvs', 1, 1),
(23, '123456', '0123456789', 'Faris', 'roslan', 'adcdsvv', 2, 2),
(24, '123456', '1424536', 'aina', 'Nizar', 'fn@yahoo.com', 2, 2),
(25, '1234567', '0123456789', 'aina', 'roslan', 'adcdsvv', 1, 4),
(26, '444', '0123456789', 'Faris', 'roslan', 'cdvsfvs', 2, 7),
(27, '123789', '1424536', 'Faris', 'Nizar', 'adcdsvv', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `roomId` (`roomId`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`paymentId`),
  ADD KEY `bookId` (`bookId`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `bookId` (`bookId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
