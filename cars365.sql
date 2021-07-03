-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 06:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars365`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `PasswordQ1` varchar(100) NOT NULL,
  `PasswordA1` varchar(30) NOT NULL,
  `PasswordQ2` varchar(100) NOT NULL,
  `PasswordA2` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Name`, `Email`, `Mobile`, `Address`, `Password`, `PasswordQ1`, `PasswordA1`, `PasswordQ2`, `PasswordA2`, `Status`) VALUES
(1, 'Sujan', 'SujanlokeshPatel@gmail.com', '9876543210', 'Bengaluru', '12345', '', '', '', '', 'Active'),
(4, 'KIran', 'kiran@gmail.com', '9988776655', 'Bengaluru', '1234', 'What is the name of your first pet?', 'Noname', 'What is the name of your first pet?', 'Noname', 'Active'),
(5, 'Tharun', 'Tharun@gmail.com', '9513572580', 'Mumbai', '1234', 'What is the name of your first pet?', 'Sujan', 'Which is your favourite car?', 'Toyota Supra', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`ID`, `Name`, `Type`, `Photo`, `Description`, `Address`, `Price`, `Status`) VALUES
(8, 'Ford Mustang', 'Coupe', 'download.jpg', 'Model : 2030 Ford mustang', 'Bengaluru', 35000, 'Available'),
(9, 'Rolls Royce Phantom', 'Sedan', 'rolls_royce_phantom.jpg', 'Luxurious Sedan with comfy ride.', 'Bengaluru', 50000, 'Available'),
(10, 'Bugatti La Voiture', 'Hyper Car', 'Bugatti_La_Voiture.jpg', 'Hyper car Faster than Light...', 'Hegganahalli', 5000000, 'Available'),
(11, 'Rolls Royce Sweptail', 'Coupe', 'rolls_royce_sweptail.jpg', 'Luxurious Coupe', 'Bengaluru', 1000000, 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
